import { src, dest, series, watch } from 'gulp';
import yargs from 'yargs';
import del from 'del';
import browserSync from 'browser-sync';
import gulpIf from 'gulp-if';
import sass from 'gulp-sass';
import sourceMaps from 'gulp-sourcemaps';
import autoprefixer from 'gulp-autoprefixer';
import imgMin from 'gulp-imagemin';
import babel from 'gulp-babel';
import uglify from 'gulp-uglify';

// Environment
const PRODUCTION = yargs.argv.prod;

// project dirs
const dirs = {
    dev: '.',
    prod: './prod'
}

// project dependences
const dependences = [
    './style.css',
    './screenshot.png',
    './node_modules/jquery/dist/jquery.min.js',
    './node_modules/bootstrap/dist/js/bootstrap.min.js'
]

// folders to clear before build
const delPath = {
    toDel: `${dirs.prod}/**`,
    skipDel: `!${dirs.prod}`
}

// php paths
const phpPaths = {
    dev: `${dirs.dev}/**/*.php`,
    prod: `${dirs.prod}/`,
    skipedFolder: `!${dirs.prod}`,
    skipSubFolders: `!${dirs.prod}/**/*.*`
}

// js paths
const jsPaths = {
    dev: `${dirs.dev}/js/**/*.js`,
    prod: `${dirs.prod}/assets/js`
}

// sass paths
const sassPaths = {
    dev: `${dirs.dev}/sass/**/*.scss`,
    prod: `${dirs.prod}/assets/css`
}

// img paths
const imgPaths = {
    dev: `${dirs.dev}/img/**/*.*`,
    prod: `${dirs.prod}/assets/img`
}

// copy all dependences to production folder
export const copyDependences = () => {
    return src(dependences)
        .pipe(gulpIf('+(style.css|screenshot.png)', dest(dirs.prod)))
        .pipe(gulpIf('*.js', dest(jsPaths.prod)));
}

// Server
const server = browserSync.create();
export const serve = (done) => {
    server.init({
        proxy: 'http://localhost/WP-5/'
    });
    done();
}
export const serVerReload = (done) => {
    server.reload();
    done();
}

// clear before build
export const clear = (done) => {
    del.sync([delPath.toDel, delPath.skipDel], done());
}

// copy php files to prod folder
export const phpCopy = () => {
    return src([phpPaths.dev, phpPaths.skipedFolder, phpPaths.skipSubFolders])
        .pipe(dest(phpPaths.prod))
        .pipe(server.stream());
}

// gulp sass to css
export const sassToCss = () => {
    return src(sassPaths.dev)
        .pipe(gulpIf(!PRODUCTION, sourceMaps.init()))
        .pipe(gulpIf(!PRODUCTION, sass().on('error', sass.logError)))
        .pipe(gulpIf(!PRODUCTION, sourceMaps.write()))
        .pipe(gulpIf(PRODUCTION, sass({ outputStyle: 'compressed' })))
        .pipe(autoprefixer({ browsers: ['last 2 versions'] }))
        .pipe(gulpIf(!PRODUCTION, sourceMaps.write()))
        .pipe(dest(sassPaths.prod))
        .pipe(server.stream());
}

// gulp img copy
export const imgCopy = () => {
    return src(imgPaths.dev)
        .pipe(gulpIf(PRODUCTION, imgMin()))
        .pipe(dest(imgPaths.prod));
}

// gulp js
export const js = () => {
    return src(jsPaths.dev)
        .pipe(babel())
        .pipe(gulpIf(PRODUCTION, uglify()))
        .pipe(dest(jsPaths.prod))
        .pipe(server.stream());
}

// gulp watch task
export const watchForChanges = () => {
    watch([phpPaths.dev, phpPaths.skipedFolder, phpPaths.skipSubFolders], series(phpCopy, serVerReload));
    watch(sassPaths.dev, sassToCss);
    watch(jsPaths.dev, js);
}

// gulp develop task
export const develop = series(clear, copyDependences, phpCopy, sassToCss, imgCopy, js, serve, watchForChanges);

// gulp build for production
export const buildForProd = series(clear, copyDependences, sassToCss, phpCopy, js, imgCopy);

// gulp default
export default develop;