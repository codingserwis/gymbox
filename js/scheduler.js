(($) => {

    // DOM Strings for scheduler
    const domController = (() => {
        const schedulerElements = {
            now: '.scheduler-row.now',
            next: '.scheduler-row.next'
        }

        return {
            getSchedulerElements: () => {
                return schedulerElements;
            }
        }
    })();

    // Scheduler controller
    const appController = ((_domCtrl) => {
        const elements = _domCtrl.getSchedulerElements(),
                $nowWod = $(elements.now),
                $nextWod = $(elements.next);

        // get all scheduler events from ACF
        let workouts = {
            ...g_scheduler,
            nextDayStartAtEight: 'Odpoczywamy. Zapraszamy jutro od 8:30'
        };


        // Pass workouts scheduler into DOM
        const wodScheduler = () => {
            let now = new Date().toLocaleTimeString();

            // Get current day of week
            const checkCurrentDay = () => {
                let currentDay;
                return currentDay = new Date().getDay();
            }

            // Check current day of the week
            switch (checkCurrentDay()) {
                case 0: // SUNDAY
                    if (now < '08:59:59') {
                        $nowWod.text('testowy texts');
                    } else if ((now > '09:00:00') && (now < '11:00:00')) {

                    } else if ((now > '11:00:01') && (now < '23:59:59')) {
                        $nowWod.text(workouts.nextDayStartAtEight);
                        $nextWod.text(`${workouts.monday['8_00'].workout} - ${workouts.monday['8_00'].coach}`);
                    }
                break;
            }

        }


        return {
            init: () => {
                console.log('s');
                let treningi = {...g_scheduler, openInNine: 'Otwieramy o 9'};
                console.log(treningi);
                wodScheduler();
            }
        }
    })(domController);

    appController.init();

})(jQuery);


