<template>
    <div id="app">
        <Top/>
        <Navbar/>
        <!-- main -->
        <router-view/>

        <Foot/>
    </div>
</template>

<script>
    import Top from './Top.vue'
    import Navbar from './Navbar.vue'
    import Foot from './Foot.vue'

    export default {
        name: 'App',
        components: {
            Top,
            Navbar,
            Foot,
        },
        mounted() {
            // Sticky Navbar
            $(window).scroll(function () {
                if ($(this).scrollTop() > 150) {
                    $('.nav-bar').addClass('nav-sticky');
                } else {
                    $('.nav-bar').removeClass('nav-sticky');
                }
            });
            
            // back to top
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.back-to-top').fadeIn('slow');
                } else {
                    $('.back-to-top').fadeOut('slow');
                }
            });
            $('.back-to-top').click(function () {
                $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
                return false;
            });

            // Category News Slider
            $('.cn-slider').slick({
                autoplay: false,
                infinite: true,
                dots: false,
                slidesToShow: 2,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
            
            
            // Related News Slider
            $('.sn-slider').slick({
                autoplay: false,
                infinite: true,
                dots: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        }
    }

</script>

<style>
</style>