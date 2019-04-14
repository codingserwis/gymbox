(($) => {
    const appController = (() => {

        const googleMap = () => {
            let uluru = { lat: 50.677361, lng: 17.917830 };
            let map = new google.maps.Map(document.getElementById('gmap-container'), {
                    zoom: 15,
                    center: uluru
                });
            let marker = new google.maps.Marker({
                position: uluru,
                map: map,
                icon: './wp-content/themes/gymbox/assets/img/map_logo.png'
            });
        }

        return {
            init: () => {
                googleMap();
            }
        }
})();

appController.init();
}) (jQuery);