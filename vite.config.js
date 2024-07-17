import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                    'resources/js/app.js',
                    'resources/assets/vendor/bootstrap-select/bootstrap-select.min.css',
                    'resources/assets/vendor/owl-carousel/owl.carousel.css',
                    'resources/assets/vendor/magnific-popup/magnific-popup.min.css',
                    'resources/assets/vendor/animate/animate.css',
                    'resources/assets/vendor/lightgallery/css/lightgallery.min.css',
                    'resources/assets/css/style.css',
                    'resources/assets/css/otherStyle.css',
                    'resources/assets/css/services.css',
                    'resources/assets/css/video/videoCss/play-bouton.css',
                    'resources/assets/css/video/videoJs/popup.js',
                    'resources/assets/css/skin/skin-4.css',
                    'resources/assets/vendor/rangeslider/rangeslider.css',
                    'resources/assets/vendor/swiper/css/swiper.min.css',

                    'resources/assets/js/jquery.min.js',
                    'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
                    'resources/assets/vendor/owl-carousel/owl.carousel.js',
                    'resources/assets/vendor/magnific-popup/magnific-popup.js',
                    'resources/assets/vendor/counter/waypoints-min.js',
                    'resources/assets/vendor/counter/counterup.min.js',
                    'resources/assets/vendor/masonry/masonry-4.2.2.js',
                    'resources/assets/vendor/masonry/isotope.pkgd.min.js',
                    'resources/assets/vendor/lightgallery/js/lightgallery-all.min.js',
                    'resources/assets/vendor/bootstrap-select/bootstrap-select.min.js',
                    'resources/assets/js/dz.carousel.js',
                    'resources/assets/js/custom.js',
                    'resources/assets/js/services.js',
                    'resources/assets/js/projects.js',
                    'resources/assets/vendor/rangeslider/rangeslider.js',
                    'resources/assets/vendor/swiper/js/swiper.min.js',
                ],
            refresh: true,
        }),
    ],
});
