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
            nextDayStartAtEight: 'Odpoczywamy. Zapraszamy jutro od 8:30',
            nextDayStartAtNine: 'Odpoczywamy. Zapraszamy jutro od 9:00',
            nextWorkoutAtFifteenth: 'Odpoczywamy. Zapraszamy o 15:00',
            nextWodStartsAtEight: 'Zaczynam o 8:30',
            nextWodStartsAtNine: 'Zaczynamy o 9:00'
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
                        $nowWod.text(workouts.nextWodStartsAtNine);
                        $nextWod.text(workouts.sunday['9_00'].workout);
                    } else if ((now > '09:00:00') && (now < '11:00:00')) {
                        $nowWod.text(workouts.sunday['9_00'].workout);
                        $nextWod.text(workouts.nextDayStartAtEight);
                    } else if ((now > '11:00:01') && (now < '23:59:59')) {
                        $nowWod.text(workouts.nextDayStartAtEight);
                        $nextWod.text(`${workouts.monday['8_00'].workout} - ${workouts.monday['8_00'].coach}`);
                    } 
                break;
                case 1: // MONDAY
                    if (now < '08:30:00') {
                        $nowWod.text(workouts.nextWodStartsAtEight);
                        $nextWod.text(`${workouts.monday['8_00'].workout} - ${workouts.monday['8_00'].coach}`);
                    } else if ((now > '08:30:01') && (now < '09:29:59')) {
                        $nowWod.text(`${workouts.monday['8_00'].workout} - ${workouts.monday['8_00'].coach}`);
                        $nextWod.text(`${workouts.monday['9_00'].workout}`);
                    } else if ((now > '09:30:00') && (now < '11:00:00')) {
                        $nowWod.text(`${workouts.monday['9_00'].workout}`);
                        $nextWod.text(`${workouts.nextWorkoutAtFifteenth}`);
                    } else if ((now > '11:00:01') && (now < '14:59:59')) {
                        $nowWod.text(`${workouts.nextWorkoutAtFifteenth}`);
                        $nextWod.text(`${workouts.monday['15_00'].workout}`);
                    } else if ((now > '15:00:01') && (now < '15:59:59')) {
                        $nowWod.text(`${workouts.monday['15_00'].workout}`);
                        $nextWod.text(`${workouts.monday['16_00'].workout}`);
                    } else if ((now > '16:00:01') && (now < '16:59:59')) {
                        $nowWod.text(`${workouts.monday['16_00'].workout}`);
                        $nextWod.text(`${workouts.monday['17_00'].workout} - ${workouts.monday['17_00'].coach}`);
                    } else if ((now > '17:00:01') && (now < '17:59:59')) {
                        $nowWod.text(`${workouts.monday['17_00'].workout} - ${workouts.monday['17_00'].coach}`);
                        $nextWod.text(`${workouts.monday['18_00'].workout} - ${workouts.monday['18_00'].coach}`);
                    } else if ((now > '18:00:01') && (now < '18:59:59')) {
                        $nowWod.text(`${workouts.monday['18_00'].workout} - ${workouts.monday['18_00'].coach}`);
                        $nextWod.text(`${workouts.monday['19_00'].workout} - ${workouts.monday['19_00'].coach}`);
                    } else if ((now > '19:00:01') && (now < '19:59:59')) {
                        $nowWod.text(`${workouts.monday['19_00'].workout} - ${workouts.monday['19_00'].coach}`);
                        $nextWod.text(`${workouts.monday['20_00'].workout} - ${workouts.monday['20_00'].coach}`);
                    } else if ((now > '20:00:01') && (now < '20:59:59')) {
                        $nowWod.text(`${workouts.monday['20_00'].workout} - ${workouts.monday['20_00'].coach}`);
                        $nextWod.text(`${workouts.nextDayStartAtEight}`);
                    } else if ((now > '21:00:01') && (now < '23:59:59')) {
                        $nowWod.text(`${workouts.nextDayStartAtEight}`);
                        $nextWod.text(`${workouts.tuesday['8_00'].workout} - ${workouts.tuesday['8_00'].coach}`);
                    }
                break;
                case 2: // TUESDAY
                    if (now < '08:30:00') {
                        $nowWod.text(workouts.nextWodStartsAtEight);
                        $nextWod.text(`${workouts.tuesday['8_00'].workout} - ${workouts.tuesday['8_00'].coach}`);
                    } else if ((now > '08:30:01') && (now < '09:29:59')) {
                        $nowWod.text(`${workouts.tuesday['8_00'].workout} - ${workouts.tuesday['8_00'].coach}`);
                        $nextWod.text(`${workouts.tuesday['9_00'].workout}`);
                    } else if ((now > '09:30:00') && (now < '11:00:00')) {
                        $nowWod.text(`${workouts.tuesday['9_00'].workout}`);
                        $nextWod.text(`${workouts.nextWorkoutAtFifteenth}`);
                    } else if ((now > '11:00:01') && (now < '14:59:59')) {
                        $nowWod.text(`${workouts.nextWorkoutAtFifteenth}`);
                        $nextWod.text(`${workouts.tuesday['15_00'].workout}`);
                    } else if ((now > '15:00:01') && (now < '15:59:59')) {
                        $nowWod.text(`${workouts.tuesday['15_00'].workout}`);
                        $nextWod.text(`${workouts.tuesday['16_00'].workout}`);
                    } else if ((now > '16:00:01') && (now < '16:59:59')) {
                        $nowWod.text(`${workouts.tuesday['16_00'].workout}`);
                        $nextWod.text(`${workouts.tuesday['17_00'].workout} - ${workouts.tuesday['17_00'].coach}`);
                    } else if ((now > '17:00:01') && (now < '17:59:59')) {
                        $nowWod.text(`${workouts.tuesday['17_00'].workout} - ${workouts.tuesday['17_00'].coach}`);
                        $nextWod.text(`${workouts.tuesday['18_00'].workout} - ${workouts.tuesday['18_00'].coach}`);
                    } else if ((now > '18:00:01') && (now < '18:59:59')) {
                        $nowWod.text(`${workouts.tuesday['18_00'].workout} - ${workouts.tuesday['18_00'].coach}`);
                        $nextWod.text(`${workouts.tuesday['19_00'].workout} - ${workouts.tuesday['19_00'].coach}`);
                    } else if ((now > '19:00:01') && (now < '19:59:59')) {
                        $nowWod.text(`${workouts.tuesday['19_00'].workout} - ${workouts.tuesday['19_00'].coach}`);
                        $nextWod.text(`${workouts.nextDayStartAtEight}`);
                    } else if ((now > '20:00:00') && (now < '23:59:59')) {
                        $nowWod.text(`${workouts.nextDayStartAtEight}`);
                        $nextWod.text(`${workouts.wednesday['8_00'].workout} - ${workouts.wednesday['8_00'].coach}`);
                    }
                break;
                case 3: // Wednesday
                    if (now < '08:30:00') {
                        $nowWod.text(workouts.nextWodStartsAtEight);
                        $nextWod.text(`${workouts.wednesday['8_00'].workout} - ${workouts.wednesday['8_00'].coach}`);
                    } else if ((now > '08:30:01') && (now < '09:29:59')) {
                        $nowWod.text(`${workouts.wednesday['8_00'].workout} - ${workouts.wednesday['8_00'].coach}`);
                        $nextWod.text(`${workouts.wednesday['9_00'].workout}`);
                    } else if ((now > '09:30:00') && (now < '11:00:00')) {
                        $nowWod.text(`${workouts.wednesday['9_00'].workout}`);
                        $nextWod.text(`${workouts.nextWorkoutAtFifteenth}`);
                    } else if ((now > '11:00:01') && (now < '14:59:59')) {
                        $nowWod.text(`${workouts.nextWorkoutAtFifteenth}`);
                        $nextWod.text(`${workouts.wednesday['15_00'].workout}`);
                    } else if ((now > '15:00:01') && (now < '15:59:59')) {
                        $nowWod.text(`${workouts.wednesday['15_00'].workout}`);
                        $nextWod.text(`${workouts.wednesday['16_00'].workout}`);
                    } else if ((now > '16:00:01') && (now < '16:59:59')) {
                        $nowWod.text(`${workouts.wednesday['16_00'].workout}`);
                        $nextWod.text(`${workouts.wednesday['17_00'].workout} - ${workouts.wednesday['17_00'].coach}`);
                    } else if ((now > '17:00:01') && (now < '17:59:59')) {
                        $nowWod.text(`${workouts.wednesday['17_00'].workout} - ${workouts.wednesday['17_00'].coach}`);
                        $nextWod.text(`${workouts.wednesday['18_00'].workout} - ${workouts.wednesday['18_00'].coach}`);
                    } else if ((now > '18:00:01') && (now < '18:59:59')) {
                        $nowWod.text(`${workouts.wednesday['18_00'].workout} - ${workouts.wednesday['18_00'].coach}`);
                        $nextWod.text(`${workouts.wednesday['19_00'].workout} - ${workouts.wednesday['19_00'].coach}`);
                    } else if ((now > '19:00:01') && (now < '19:59:59')) {
                        $nowWod.text(`${workouts.wednesday['19_00'].workout} - ${workouts.wednesday['19_00'].coach}`);
                        $nextWod.text(`${workouts.wednesday['20_00'].workout} - ${workouts.wednesday['20_00'].coach}`);
                    } else if ((now > '20:00:01') && (now < '20:59:59')) {
                        $nowWod.text(`${workouts.wednesday['20_00'].workout} - ${workouts.wednesday['20_00'].coach}`);
                        $nextWod.text(`${workouts.nextDayStartAtEight}`);
                    } else if ((now > '21:00:01') && (now < '23:59:59')) {
                        $nowWod.text(`${workouts.nextDayStartAtEight}`);
                        $nextWod.text(`${workouts.thursday['8_00'].workout} - ${workouts.thursday['8_00'].coach}`);
                    }
                break;
                case 4: // THURSDAY
                    if (now < '08:30:00') {
                        $nowWod.text(workouts.nextWodStartsAtEight);
                        $nextWod.text(`${workouts.thursday['8_00'].workout} - ${workouts.thursday['8_00'].coach}`);
                    } else if ((now > '08:30:01') && (now < '09:29:59')) {
                        $nowWod.text(`${workouts.thursday['8_00'].workout} - ${workouts.thursday['8_00'].coach}`);
                        $nextWod.text(`${workouts.thursday['9_00'].workout}`);
                    } else if ((now > '09:30:00') && (now < '11:00:00')) {
                        $nowWod.text(`${workouts.thursday['9_00'].workout}`);
                        $nextWod.text(`${workouts.nextWorkoutAtFifteenth}`);
                    } else if ((now > '11:00:01') && (now < '14:59:59')) {
                        $nowWod.text(`${workouts.nextWorkoutAtFifteenth}`);
                        $nextWod.text(`${workouts.thursday['15_00'].workout}`);
                    } else if ((now > '15:00:01') && (now < '15:59:59')) {
                        $nowWod.text(`${workouts.thursday['15_00'].workout}`);
                        $nextWod.text(`${workouts.thursday['16_00'].workout}`);
                    } else if ((now > '16:00:01') && (now < '16:59:59')) {
                        $nowWod.text(`${workouts.thursday['16_00'].workout}`);
                        $nextWod.text(`${workouts.thursday['17_00'].workout} - ${workouts.thursday['17_00'].coach}`);
                    } else if ((now > '17:00:01') && (now < '17:59:59')) {
                        $nowWod.text(`${workouts.thursday['17_00'].workout} - ${workouts.thursday['17_00'].coach}`);
                        $nextWod.text(`${workouts.thursday['18_00'].workout} - ${workouts.thursday['18_00'].coach}`);
                    } else if ((now > '18:00:01') && (now < '18:59:59')) {
                        $nowWod.text(`${workouts.thursday['18_00'].workout} - ${workouts.thursday['18_00'].coach}`);
                        $nextWod.text(`${workouts.thursday['19_00'].workout} - ${workouts.thursday['19_00'].coach}`);
                    } else if ((now > '19:00:01') && (now < '19:59:59')) {
                        $nowWod.text(`${workouts.thursday['19_00'].workout} - ${workouts.thursday['19_00'].coach}`);
                        $nextWod.text(`${workouts.nextDayStartAtEight}`);
                    } else if ((now > '20:00:00') && (now < '23:59:59')) {
                        $nowWod.text(`${workouts.nextDayStartAtEight}`);
                        $nextWod.text(`${workouts.friday['8_00'].workout} - ${workouts.friday['8_00'].coach}`);
                    }
                break;
                case 5: // FRIDAY
                    if (now < '08:30:00') {
                        $nowWod.text(workouts.nextWodStartsAtEight);
                        $nextWod.text(`${workouts.friday['8_00'].workout} - ${workouts.friday['8_00'].coach}`);
                    } else if ((now > '08:30:01') && (now < '09:29:59')) {
                        $nowWod.text(`${workouts.friday['8_00'].workout} - ${workouts.friday['8_00'].coach}`);
                        $nextWod.text(`${workouts.friday['9_00'].workout}`);
                    } else if ((now > '09:30:00') && (now < '11:00:00')) {
                        $nowWod.text(`${workouts.friday['9_00'].workout}`);
                        $nextWod.text(`${workouts.nextWorkoutAtFifteenth}`);
                    } else if ((now > '11:00:01') && (now < '14:59:59')) {
                        $nowWod.text(`${workouts.nextWorkoutAtFifteenth}`);
                        $nextWod.text(`${workouts.friday['15_00'].workout}`);
                    } else if ((now > '15:00:01') && (now < '15:59:59')) {
                        $nowWod.text(`${workouts.friday['15_00'].workout}`);
                        $nextWod.text(`${workouts.friday['16_00'].workout}`);
                    } else if ((now > '16:00:01') && (now < '16:59:59')) {
                        $nowWod.text(`${workouts.friday['16_00'].workout}`);
                        $nextWod.text(`${workouts.friday['17_00'].workout} - ${workouts.friday['17_00'].coach}`);
                    } else if ((now > '17:00:01') && (now < '17:59:59')) {
                        $nowWod.text(`${workouts.friday['17_00'].workout} - ${workouts.friday['17_00'].coach}`);
                        $nextWod.text(`${workouts.friday['18_00'].workout} - ${workouts.friday['18_00'].coach}`);
                    } else if ((now > '18:00:01') && (now < '18:59:59')) {
                        $nowWod.text(`${workouts.friday['18_00'].workout} - ${workouts.friday['18_00'].coach}`);
                        $nextWod.text(`${workouts.friday['19_00'].workout} - ${workouts.friday['19_00'].coach}`);
                    } else if ((now > '19:00:01') && (now < '19:59:59')) {
                        $nowWod.text(`${workouts.friday['19_00'].workout} - ${workouts.friday['19_00'].coach}`);
                        $nextWod.text(`${workouts.nextDayStartAtNine}`);
                    } else if ((now > '20:00:00') && (now < '23:59:59')) {
                        $nowWod.text(`${workouts.nextWodStartsAtNine}`);
                        $nextWod.text(`${workouts.saturday['9_00'].workout}`);
                    }
                break;
                case 6: // SATURDAY
                if (now < '08:59:59') {
                    $nowWod.text(workouts.nextWodStartsAtNine);
                    $nextWod.text(workouts.sunday['9_00'].workout);
                } else if ((now > '09:00:00') && (now < '11:00:00')) {
                    $nowWod.text(workouts.sunday['9_00'].workout);
                    $nextWod.text(workouts.nextDayStartAtNine);
                } else if ((now > '11:00:01') && (now < '23:59:59')) {
                    $nowWod.text(workouts.nextDayStartAtNine);
                    $nextWod.text(`${workouts.sunday['9_00'].workout}`);
                }
                break;
            }

        }


        return {
            init: () => {
                wodScheduler();
            }
        }
    })(domController);

    appController.init();

})(jQuery);


