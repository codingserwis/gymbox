<?php 
/**
 * Template name: Strona główna
 */

$g_phone = get_field( 'gymbox_phone_no' );
$g_formated_phone = str_replace( ' ', '', $g_phone);


get_header( ); ?>

<header class="header">
    <section class="contact-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8 py-2 text-right bg-red">
                    <a href="mailto:<?php the_field( 'gymbox_email_address' ); ?>" class="d-none d-lg-inline-block address-link email">
                        <?php the_field( 'gymbox_email_address' ); ?>
                    </a>
                    <a href="tel:<?php echo $g_formated_phone; ?>" class="address-link phone">
                        <?php echo $g_phone; ?>
                    </a>
                </div>
                <div class="d-none d-lg-block col-lg-4 py-2 bg-black">
                </div>
            </div>
        </div>
    </section>
    <nav></nav>
</header>
    
    <!-- <header class="header">
		<div id="top_contact" class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-12 bg_red text-right font_white" style="padding: 6px;">
					<span class="glyphicon glyphicon-envelope hidden-xs" aria-hidden="true" style="padding-right: 10px;"></span>
					<span class="hidden-xs" style="padding-right: 25px;">
						<a href="mailto:Ldabbachi@gmail.com">
							ldabbachi@gmail.com
						</a>
					</span>
					<span class="glyphicon glyphicon-earphone" aria-hidden="true" style="padding-right: 10px;"></span>
					<span style="padding-right: 15px;">
						<a href="tel:+48602800820">
							602 800 820
						</a>
					</span>
				</div>
				<div class="col-md-4 col-sm-4 bg_black hidden-xs" style="padding: 4px 0 4px 15px;">
					<a href="https://www.facebook.com/gymboxcross/">
						<img class="social_icon" src="./assets/img/fb-icon.png">
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row margin_20">
				<div class="col-md-2 col-sm-3 col-xs-5">
					<a href="#top">
						<img id="top_logo" class="img-responsive" src="./assets/img/gymbox_logo.png" alt="gymbox opole logo" title="gymbox opole logo">
					</a>
				</div>
				<div class="col-md-10">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#gymbox-navbar-collapse" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse pull-right" id="gymbox-navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#start">Start<span class="sr-only">(current)</span></a></li>
								<li><a href="#graphic">Grafik</a></li>
								<li><a href="#price_list">Cennik</a></li>
								<li><a href="#contact">Kontakt</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header> -->
	<!-- <section id="start" class="section_start" style="position: relative;">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-9 col-xs-12 schedule">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2 class="schedule_heading">Aktualnie trenujemy</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center">
							<p id="wod_now" class="schedule_now"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2 class="schedule_heading">Następnie</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 text-center">
							<p id="next_wod" class="schedule_next"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- <section class="section_news">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-12 center-block text-center">
					<div class="col-md-4 col-sm-4">
						<h2 class="news_slogan slideout margin_top">Zwiększ swoją<p class="news_inner">siłę</p>
						</h2>
						<div class="news_thumbnail strength"></div>
					</div>
					<div class="col-md-4 col-sm-4">
						<h2 class="news_slogan slideout margin_top">
						Popraw swoją<p class="news_inner">sprawność</p>
						</h2>
						<div class="news_thumbnail efficency"></div>
					</div>
					<div class="col-md-4 col-sm-4">
						<h2 class="news_slogan slideout margin_top">
						Pracuj nad<p class="news_inner">kondycją</p>
						</h2>
						<div class="news_thumbnail condition"></div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- <section id="graphic" class="section_schedule">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2 class="section_title font_white slidein">Grafik</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-8 text-center">
					<h2 class="section_title_desc font_white slideout">
					Klub jest czynny 7 dni w tygodniu od 8:30 do 21:00. Zapraszamy wszystkich chętnych na zajęcia.
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 hidden-xs">
					<ul class="schedule_nav">
						<li><a data-link="allworkouts" data-active="no">Wszystkie treningi</a></li>
						<li><a data-link="wod" data-active="no">WOD</a></li>
						<li><a data-link="trx">Trening Obwodowy</a></li>
						<li><a data-link="lejdis">CROSS Lejdis</a></li>
						<li><a data-link="student">Weakness</a></li>
						<li><a data-link="weights">Cieżary</a></li>
						<li><a data-link="open">Open BOX</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 hidden-xs">
					<div id="graphic" class="table-responsive">
						all workouts
						<table id="all_workouts" class="table-bordered">
							<thead>
								<tr>
									<th>Godziny</th>
									<th>Poniedziałek</th>
									<th>Wtorek</th>
									<th>Środa</th>
									<th>Czwartek</th>
									<th>Piątek</th>
									<th>Sobota</th>
									<th>Niedziela</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="2">8:00 - 9:00</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td rowspan="2" class="wod_peeter">WOD<br/>Łukasz</td>
									<td rowspan="2" class="cross_lejdis">CROSS Lejdis<br/> Iwona</td>
									<td rowspan="2" class="wod_luk_d">WOD <br/>Łukasz</td>
									<td rowspan="2" class="cross_lejdis">CROSS Lejdis<br/>Iwona</td>
									<td rowspan="2" class="wod_luk_d">WOD <br/>Łukasz</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td rowspan="2">9:00 - 10:00</td>
									<td rowspan="3" class="open_box">Open box</td>
									<td rowspan="3" class="open_box">Open box</td>
								</tr>
								<tr>
									<td rowspan="2" class="open_box" style="padding: 36px 0 ;">Open box</td>
									<td rowspan="2" class="open_box">Open box</td>
									<td rowspan="2" class="open_box">Open box</td>
									<td rowspan="2" class="open_box">Open box</td>
									<td rowspan="2" class="open_box">Open box</td>
								</tr>
								<tr>
									<td>10:00 - 11:00</td>
								</tr>
								<tr>
									<td>11:00 - 15:00</td>
									<td colspan="7"></td>
								</tr>
								<tr>
									<td>15:00 - 16:00</td>
									<td class="open_box">Open box</td>
									<td class="open_box">Open box</td>
									<td class="open_box">Open box</td>
									<td class="open_box">Open box</td>
									<td class="open_box">Open box</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>16:00 - 17:00</td>
									<td class="open_box">Open box</td>
									<td class="open_box">Open box</td>
									<td class="open_box">Open box</td>
									<td class="open_box">Open box</td>
									<td class="open_box">Open box</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>17:00 - 18:00</td>
									<td class="trx">Trening Obwodowy Jola</td>
									<td class="wod_basic">WOD Basic <br/>Romek</td>
									<td class="trx">Trening Obwodowy Jola</td>
									<td class="wod_basic">WOD Basic <br/>Romek</td>
									<td class="trx">Trening Obwodowy Jola</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>18:00 - 19:00</td>
									<td class="wod_przem">WOD <br/>Romwe</td>
									<td class="weights">Ciężary <br/>Romek</td>
									<td class="wod_przem">WOD</td>
									<td class="wod_romek">Weakness <br/>Romek</td>
									<td class="wod_przem">WOD</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>19:00 - 20:00</td>
									<td class="wod_luk_sz">WOD <br/>Romek</td>
									<td class="wod_luk_d">WOD <br/>Łukasz</td>
									<td class="wod_luk_d">WOD <br/>Łukasz</td>
									<td class="wod_luk_d">WOD <br/>Łukasz</td>
									<td class="cross_lejdis">CROSS Lejdis <br/>Aga</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>20:00 - 21:00</td>
									<td class="cross_lejdis">CROSS Lejdis <br/>Aga</td>
									<td class="fit_box">FitBox <br/>Dawid</td>
									<td class="cross_lejdis">CROSS Lejdis <br/>Aga</td>
									<td class="fit_box">FitBox <br/>Dawid</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table> end of all workouts
						<table id="table_wod" class="table-bordered" style="display: none;">
							<thead>
								<tr>
									<th>Godziny</th>
									<th>Poniedziałek</th>
									<th>Wtorek</th>
									<th>Środa</th>
									<th>Czwartek</th>
									<th>Piątek</th>
									<th>Sobota</th>
									<th>Niedziela</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>8:30 - 9:30</td>
									<td class="wod_peeter">WOD <br/>Łukasz</td>
									<td></td>
									<td class="wod_luk_d">WOD <br/>Lukasz</td>
									<td></td>
									<td class="wod_luk_d">WOD <br/>Łukasz</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>17:00 - 18:00</td>
									<td></td>
									<td class="wod_basic">WOD Basic <br/>Romek</td>
									<td></td>
									<td class="wod_basic">WOD Basic <br/>Romek</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>18:00 - 19:00</td>
									<td class="wod_przem">WOD <br/>Romek</td>
									<td></td>
									<td class="wod_przem">WOD</td>
									<td class=""></td>
									<td class="wod_przem">WOD</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>19:00 - 20:00</td>
									<td class="wod_luk_sz">WOD <br/>Romek</td>
									<td class="wod_luk_d">WOD <br/>Łukasz</td>
									<td class="wod_luk_d">WOD <br/>Łukasz</td>
									<td class="wod_luk_d">WOD <br/>Łukasz</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
						<table id="trx" class="table-bordered" style="display: none;">
							<thead>
								<tr>
									<th>Godziny</th>
									<th>Poniedziałek</th>
									<th>Wtorek</th>
									<th>Środa</th>
									<th>Czwartek</th>
									<th>Piątek</th>
									<th>Sobota</th>
									<th>Niedziela</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>17:00 - 18:00</td>
									<td class="trx">Trening Obwodowy <br/>Jola</td>
									<td></td>
									<td class="trx">Trening Obwodowy <br/>Jola</td>
									<td></td>
									<td class="trx">Trening Obwodowy <br/>Jola</td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table> end of TRX
						<table id="lejdis" class="table-bordered" style="display: none;">
							<thead>
								<tr>
									<th>Godziny</th>
									<th>Poniedziałek</th>
									<th>Wtorek</th>
									<th>Środa</th>
									<th>Czwartek</th>
									<th>Piątek</th>
									<th>Sobota</th>
									<th>Niedziela</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>8:30 - 9:30</td>
									<td></td>
									<td class="cross_lejdis">CROSS Lejdis <br/>Iwona</td>
									<td></td>
									<td class="cross_lejdis">CROSS Lejdis <br/>Iwona</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>19:00 - 20:00</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td class="cross_lejdis">CROSS Lejdis <br/>Aga</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>20:00 - 21:00</td>
									<td class="cross_lejdis">CROSS Lejdis <br/>Aga</td>
									<td></td>
									<td class="cross_lejdis">CROSS Lejdis <br/>Aga</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table> end of lejdis
						<table id="student" class="table-bordered" style="display: none;">
							<thead>
								<tr>
									<th>Godziny</th>
									<th>Poniedziałek</th>
									<th>Wtorek</th>
									<th>Środa</th>
									<th>Czwartek</th>
									<th>Piątek</th>
									<th>Sobota</th>
									<th>Niedziela</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>17:00 - 18:00</td>
									<td></td>
									<td></td>
									<td></td>
									<td class="wod_romek">Weakness <br/>Romek</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>end of weakness
						<table id="weights" class="table-bordered" style="display: none;">
							<thead>
								<tr>
									<th>Godziny</th>
									<th>Poniedziałek</th>
									<th>Wtorek</th>
									<th>Środa</th>
									<th>Czwartek</th>
									<th>Piątek</th>
									<th>Sobota</th>
									<th>Niedziela</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>18:00 - 19:00</td>
									<td></td>
									<td class="weights">Ciężary <br/>Romek</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
						<table id="open" class="table-bordered" style="display: none;">
							<thead>
								<tr>
									<th>Godziny</th>
									<th>Poniedziałek</th>
									<th>Wtorek</th>
									<th>Środa</th>
									<th>Czwartek</th>
									<th>Piątek</th>
									<th>Sobota</th>
									<th>Niedziela</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="2">9:00 - 10:00</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td rowspan="3" class="open_box">Open box</td>
									<td rowspan="3" class="open_box">Open box</td>
								</tr>
								<tr>
									<td rowspan="2" class="open_box" style="padding: 37px 0;">Open box</td>
									<td rowspan="2" class="open_box">Open box</td>
									<td rowspan="2" class="open_box">Open box</td>
									<td rowspan="2" class="open_box">Open box</td>
									<td rowspan="2" class="open_box">Open box</td>
								</tr>
								<tr>
									<td>10:00 - 11:00</td>
								</tr>
								<tr>
									<td>15:00 - 16:00</td>
									<td class="open_box">Open box</td>
									<td class="open_box">Open box</td>
									<td class="open_box">Open box</td>
									<td class="open_box">Open box</td>
									<td class="open_box">Open box</td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 hidden-lg hidden-md hidden-sm visible-xs-12">
					<button class="center-block btn btn-primary btn-block btn_sched" type="button" data-toggle="collapse" data-target="#grafik_monday" aria-expanded="false" aria-controls="grafik_monday" data-button="grafik">
					<div class="col-xs-12 text-center">
						<span class=" center-block pull-left">Poniedziałek</span><span class="glyphicon glyphicon-menu-down center-block to_right" aria-hidden="true"></span>
					</div>
					</button>
					<div class="collapse" id="grafik_monday">
						<div class="well">
							<div class="row">
								<table class=" table-responsive">
									<tr>
										<td class="small_sched">08:30 - 09:30</td>
										<td class="small_sched">WOD</td>
									</tr>
									<tr>
										<td class="small_sched">09:30 - 11:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">15:00 - 16:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">16:00 - 17:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">17:00 - 18:00</td>
										<td class="small_sched">Trening Obwodowy</td>
									</tr>
									<tr>
										<td class="small_sched">18:00 - 19:00</td>
										<td class="small_sched">WOD</td>
									</tr>
									<tr>
										<td class="small_sched">19:00 - 20:00</td>
										<td class="small_sched">CROSS Lejdis</td>
									</tr>
								</table>
								
							</div>
						</div>
					</div>
					<button class="center-block btn btn-primary btn-block btn_sched" type="button" data-toggle="collapse" data-target="#grafik_tuesday" aria-expanded="false" aria-controls="grafik_tuesday" data-button="grafik">
					<div class="col-xs-12 text-center">
						<span class=" center-block pull-left">Wtorek</span><span class="glyphicon glyphicon-menu-down center-block to_right" aria-hidden="true"></span>
					</div>
					</button>
					<div class="collapse" id="grafik_tuesday">
						<div class="well">
							<div class="row">
								<table class=" table-responsive">
									<tr>
										<td class="small_sched">08:30 - 09:30</td>
										<td class="small_sched">CROSS Lejdis</td>
									</tr>
									<tr>
										<td class="small_sched">09:30 - 11:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">15:00 - 16:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">16:00 - 17:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">17:00 - 18:00</td>
										<td class="small_sched">WOD</td>
									</tr>
									<tr>
										<td class="small_sched">18:00 - 19:00</td>
										<td class="small_sched">Ciężary</td>
									</tr>
									<tr>
										<td class="small_sched">19:00 - 20:00</td>
										<td class="small_sched">WOD</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<button class="center-block btn btn-primary btn-block btn_sched" type="button" data-toggle="collapse" data-target="#grafik_wednesday" aria-expanded="false" aria-controls="grafik_wednesday" data-button="grafik">
					<div class="col-xs-12 text-center">
						<span class=" center-block pull-left">Środa</span><span class="glyphicon glyphicon-menu-down center-block to_right" aria-hidden="true"></span>
					</div>
					</button>
					<div class="collapse" id="grafik_wednesday">
						<div class="well">
							<div class="row">
								<table class=" table-responsive">
									<tr>
										<td class="small_sched">08:30 - 09:30</td>
										<td class="small_sched">WOD Łukasz</td>
									</tr>
									<tr>
										<td class="small_sched">09:30 - 11:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">15:00 - 16:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">16:00 - 17:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">17:00 - 18:00</td>
										<td class="small_sched">Trening obwodowy</td>
									</tr>
									<tr>
										<td class="small_sched">18:00 - 19:00</td>
										<td class="small_sched">WOD</td>
									</tr>
									<tr>
										<td class="small_sched">19:00 - 20:00</td>
										<td class="small_sched">CROSS Lejdis</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<button class="center-block btn btn-primary btn-block btn_sched" type="button" data-toggle="collapse" data-target="#grafik_thursday" aria-expanded="false" aria-controls="grafik_thursday" data-button="grafik">
					<div class="col-xs-12 text-center">
						<span class=" center-block pull-left">Czwartek</span><span class="glyphicon glyphicon-menu-down center-block to_right" aria-hidden="true"></span>
					</div>
					</button>
					<div class="collapse" id="grafik_thursday">
						<div class="well">
							<div class="row">
								<table class=" table-responsive">
									<tr>
										<td class="small_sched">08:30 - 09:30</td>
										<td class="small_sched">CROSS Lejdis</td>
									</tr>
									<tr>
										<td class="small_sched">09:30 - 11:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">15:00 - 16:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">16:00 - 17:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">17:00 - 18:00</td>
										<td class="small_sched">WOD</td>
									</tr>
									<tr>
										<td class="small_sched">18:00 - 19:00</td>
										<td class="small_sched">Weakness</td>
									</tr>
									<tr>
										<td class="small_sched">19:00 - 20:00</td>
										<td class="small_sched">WOD</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<button class="center-block btn btn-primary btn-block btn_sched" type="button" data-toggle="collapse" data-target="#grafik_fraiday" aria-expanded="false" aria-controls="grafik_fraiday" data-button="grafik">
					<div class="col-xs-12 text-center">
						<span class=" center-block pull-left">Piątek</span><span class="glyphicon glyphicon-menu-down center-block to_right" aria-hidden="true"></span>
					</div>
					</button>
					<div class="collapse" id="grafik_fraiday">
						<div class="well">
							<div class="row">
								<table class=" table-responsive">
									<tr>
										<td class="small_sched">08:30 - 09:30</td>
										<td class="small_sched">WOD</td>
									</tr>
									<tr>
										<td class="small_sched">09:30 - 11:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">15:00 - 16:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">16:00 - 17:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
									<tr>
										<td class="small_sched">17:00 - 18:00</td>
										<td class="small_sched">Trening obwodowy</td>
									</tr>
									<tr>
										<td class="small_sched">18:00 - 19:00</td>
										<td class="small_sched">WOD</td>
									</tr>
									<tr>
										<td class="small_sched">19:00 - 20:00</td>
										<td class="small_sched">CROSS Lejdis</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<button class="center-block btn btn-primary btn-block btn_sched" type="button" data-toggle="collapse" data-target="#grafik_saturday" aria-expanded="false" aria-controls="grafik_saturday" data-button="grafik">
					<div class="col-xs-12 text-center">
						<span class=" center-block pull-left">Sobota</span><span class="glyphicon glyphicon-menu-down center-block to_right" aria-hidden="true"></span>
					</div>
					</button>
					<div class="collapse" id="grafik_saturday">
						<div class="well">
							<div class="row">
								<table class=" table-responsive">
									<tr>
										<td class="small_sched">9:00 - 11:00</td>
										<td class="small_sched">OPEN Box<br/>TEAM WOD</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<button class="center-block btn btn-primary btn-block btn_sched" type="button" data-toggle="collapse" data-target="#grafik_sunday" aria-expanded="false" aria-controls="grafik_sunday" data-button="grafik">
					<div class="col-xs-12 text-center">
						<span class=" center-block pull-left">Niedziela</span><span class="glyphicon glyphicon-menu-down center-block to_right" aria-hidden="true"></span>
					</div>
					</button>
					<div class="collapse" id="grafik_sunday">
						<div class="well">
							<div class="row">
								<table class=" table-responsive">
									<tr>
										<td class="small_sched">9:00 - 11:00</td>
										<td class="small_sched">OPEN Box</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="price_list" class="section_price_list">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<h2 class="section_title slidein">Cennik</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-8 text-center">
					<h2 class="section_title_desc slideout">
					Zapraszamy do zapoznania się z naszym cennikiem.
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="table-responsive">
						<table id="pricelist_cross" class="table-bordered table-striped">
							<thead>
								<caption class="text-center">
								Treningi Cross Fit
								</caption>
								<tr>
									<th>
										Rodzja karnetu
									</th>
									<th>
										Cena / miesiąc
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Wejście pojedyńcze</td>
									<td>25,00 zł</td>
								</tr>
								<tr>
									<td>Karnet 4 wejść</td>
									<td>79,00 zł</td>
								</tr>
								<tr>
									<td>Karnet 8 wejść</td>
									<td>119,00 zł</td>
								</tr>
								<tr>
									<td>Karnet 12 wejść</td>
									<td>139,00 zł</td>
								</tr>
								<tr>
									<td>Karnet 16 wejść<br/>
									+ 4 wejścia gratis</td>
									<td>159,00 zł</td>
								</tr>
								<tr>
									<td>Karnet OPEN Box</td>
									<td>99,00 zł</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- <div class="col-md-6">
					<div class="table-responsive">
						<table id="pricelist_lejdis" class="table-bordered table-striped">
							<thead>
								<caption class="text-center">
								Treningi Cross Lejdis
								</caption>
								<tr>
									<th>
										Rodzja karnetu
									</th>
									<th>
										Cena / miesiąc
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Karnet 4 wejść</td>
									<td>99,00 zł</td>
								</tr>
								<tr>
									<td>Karnet 8 wejść</td>
									<td>139,00 zł</td>
								</tr>
								<tr>
									<td>Karnet 12 wejść</td>
									<td>159,00 zł</td>
								</tr>
								<tr>
									<td>Karnet 16 wejść</td>
									<td>179,00 zł</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center">
					<h3 class="section_title_desc slidein">
					Akceptujemy karty sportowe
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-0 col-md-4 col-xs-offset-1 col-xs-10">
					<img class="img-responsive center-block" src="./assets/img/karta_multi.jpeg" alt="Gymbox karty sporotwe Mulit Sport" title="Gymbox karty sporotwe Mulit Sport">
				</div>
				<div class="col-md-offset-0 col-md-4 col-xs-offset-2 col-xs-8 padding_top_bottom">
					<img class="img-responsive center-block" src="./assets/img/ok_system.png" alt="Gymbox karty sporotwe Ok system" title="Gymbox karty sporotwe Ok system">
				</div>
				<div class="col-md-offset-0 col-md-4 col-xs-offset-1 col-xs-10">
					<img class="img-responsive center-block" src="./assets/img/karta_multi_a.jpeg" alt="Gymbox karty sportowe Multi Active" title="Gymbox karty sportowe Multi Active">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center">
					<h3 class="section_title_desc slidein">
					Akceptujemy karty płatnicze
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-4 col-md-4 col-xs-offset-1 col-xs-10">
					<img class="img-responsive center-block" src="./assets/img/cards.jpg" alt="Gymbox karty płatnicze" title="Gymbox karty płatnicze">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center">
					<h3 class="section_title_desc slidein">
						Wspierają nas
					</h3>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-4 col-md-4 col-xs-offset-1 col-xs-10">
					<img class="img-responsive center-block" src="./assets/img/sfd-blue.png" alt="SFD Logo" title="SFD Logo">
				</div>
			</div>
		</div>
	</section>
	<section id="contact" class="section_contact">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-4 col-md-4 col-xs-offset-2 col-xs-8 text-center">
					<img class="img-responsive" src="./assets/img/gymbox_logo.png" alt="Gymbox footer logo" title="Gymbox Crossfit footer logo">
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-6 text-center">
					<address class="addres font_white">
						ul. Budowlanych 4a<br/>
						45-005 Opole<br/>
						<span class="glyphicon glyphicon-earphone" aria-hidden="true" style="padding-right: 10px;"></span>
						<a href="tel:+48602800820">602 800 820</a><br/>
						<span class="glyphicon glyphicon-envelope" aria-hidden="true" style="padding-right: 10px;"></span>
						<a href="mailto:ldabbachi@gmail.com">ldabbachi@gmail.com</a><br/>
						<a href="https://www.facebook.com/gymboxcross/">
							<svg class="svg_icon">
								<use xlink:href="#fb_logo" class="fb_svg_logo"></use>
							</svg>
						</a>
					</address>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div id="map"></div>
					<script type="text/javascript">
						function initMap() {
					var uluru = {lat: 50.677361, lng: 17.917830};
					var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 15,
					center: uluru
					});
					var marker = new google.maps.Marker({
					position: uluru,
					map: map,
					icon: './assets/img/map_logo.png'
					});
					}
					</script>
					<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyeImWmy1LmNodXs2VPwMnW0-T_W_rHLw&callback=initMap">
					</script>
				</div>
			</div>
		</div>
    </section> -->
    <section class="price-list py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title fs-36 text-center">
                        cennik
                    </h2>
                </div>
            </div>
            <div class="row justify-content-lg-center">
                <div class="col-12 col-lg-6">
                    <?php get_template_part( 'template-parts/table', 'pricelist' ); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4">
                    <h3 class="section-title fs-22 text-center">
                        Akceptujemy karty sportowe
                    </h3>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-12 col-lg-4 text-center">
                    <img src="<?php echo esc_url( URI . '/assets/img/karta_multi.jpeg' ); ?>" alt="Karty sportowe Multi Sport" title="Karty sportowe Multi Sport" class="img-fluid">
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <img src="<?php echo esc_url( URI . '/assets/img/ok_system.png' ); ?>" alt="Karty sportowe OK System" title="Karty sportowe OK System" class="img-fluid">
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <img src="<?php echo esc_url( URI . '/assets/img/karta_multi_a.jpeg' ); ?>" alt="Karty sportowe Multi Sport Active" title="Karty sportowe Multi Sport Active" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4">
                    <h3 class="section-title fs-22 text-center">
                        Akceptujemy karty płatnicze
                    </h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-lg-4 my-2">
                    <img src="<?php echo esc_url( URI . '/assets/img/cards.jpg' ); ?>" alt="Karty płatnicze" title="Karty płatnicze" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4">
                    <h3 class="section-title fs-22 text-center">
                        Wspierają nas
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 my-2 text-center">
                    <img src="<?php echo esc_url( URI . '/assets/img/sfd-blue.png' ); ?>" alt="SFD Logo" title="SFD Logo" class="img-fluid">
                </div>
            </div>
        </div> <!-- container -->
    </section> <!-- /pricelist -->
    <section class="contact">

    </section> <!-- /constact -->
<?php get_footer( ); ?>