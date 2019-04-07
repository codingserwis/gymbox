(($) => {

    const domController = (() => {
        const domElements = {
            header: '.header',
            contactSection: '.contact-section',
            toSlideIn: '.slidein',
            toSlideOut: '.slideout'
        }

        return {
            getDomElements: () => {
                return domElements;
            }
        }
    })();

    const appController = ((_domCtrl) => {
        const domElement = _domCtrl.getDomElements(),
                $header = $(domElement.header),
                $contact = $(domElement.contactSection),
                $slideIn = $(domElement.toSlideIn),
                $slideOut = $(domElement.toSlideOut);

        return {
            init: () => {
                $(window).scroll(() => {
                    let winTop = $(window).scrollTop();
                    
                    if (winTop > 10) {
                        $header.addClass('scrolled');
                        $contact.fadeOut(10);
                    } else {
                        $header.removeClass('scrolled');
                        $contact.fadeIn();
                    }
                });

                

                $(".nav-link, a[href='#start'], .footer-nav a").on('click', (event) => {
                    if (event.currentTarget !== '') {
                        event.preventDefault();
                        let hash = event.currentTarget.hash;
    
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 900, () => {
                            window.location.hash = hash;
                        });
                    }
                });
            }
        }
    })(domController);

    appController.init();
})(jQuery);