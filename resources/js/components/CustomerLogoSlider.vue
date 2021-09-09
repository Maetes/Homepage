
<template>
    <swiper
        :spaceBetween="30"
        :centeredSlides="true"
        :slidesPerView="3"
        :loop="true"
        :loopFillGroupWithBlank="true"
        :autoplay='{
              "delay": 5000,
              "disableOnInteraction": false
            }'
        >
        <swiper-slide>
            <img src="/img/customer_logos/logoipsum-logo-4.svg" alt="">
        </swiper-slide>

        <swiper-slide>
            <img src="/img/customer_logos/logoipsum-logo-6.svg" alt="">
        </swiper-slide>

        <swiper-slide>
            <img src="/img/customer_logos/logoipsum-logo-8.svg" alt="">
        </swiper-slide>

        <swiper-slide>
            <img src="/img/customer_logos/logoipsum-logo-11.svg" alt="">
        </swiper-slide>

    </swiper>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';

// import "swiper/css/pagination"
// import "swiper/css/navigation"


// import Swiper core and required modules
import SwiperCore, {
    Autoplay
} from 'swiper';

// install Swiper modules
SwiperCore.use([Autoplay]);


export default {
    name: 'CustomerLogoSlider',
    components: {
        Swiper,
        SwiperSlide,
    },
    data() {
        return {


        };
    },
    methods: {

    }

}
</script>
<style>
.swiper-wrapper
{
    transition-timing-function: linear;
}

.swiper-slide{
    display: flex;
    justify-content: center;
}
</style>
