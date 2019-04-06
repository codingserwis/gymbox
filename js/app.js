(($) => {

    const domController = (() => {
        const domElements = {
            header: '.header'
        }

        return {
            getDomElements: () => {
                return domElements;
            }
        }
    })();

    const appController = ((_domCtrl) => {
        const domElement = _domCtrl.getDomElements(),
                $header = $(domElement.header);
        return {
            init: () => {
                $(window).scroll(() => {
                    let winTop = $(window).scrollTop();
                    
                    if (winTop > 10) {
                        $header.addClass('scrolled');
                        $('.contact-section').hide('slow');
                    } else {
                        $header.removeClass('scrolled');
                        $('.contact-section').show('slow');
                    }
                    
                });
                console.log('app'); //TODO
            }
        }
    })(domController);

    appController.init();
})(jQuery);