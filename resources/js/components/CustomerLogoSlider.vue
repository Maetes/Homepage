
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
            <img class="h-12 filter saturate-0 grayscale contrast-200 invert" src="/img/logos/logo_uni-bonn.webp" alt="Logo Universität Bonn">
        </swiper-slide>

        <swiper-slide>
            <img class="h-12 filter saturate-0 grayscale contrast-200 invert" src="/img/logos/bonnsmile.webp" alt="Logo Bonn Smile Zahnarzt">
        </swiper-slide>

        <swiper-slide>
            <img class="h-12 filter saturate-0 grayscale contrast-200" src="/img/logos/mundsbau.webp" alt="Logo M&S Bau GmbH">
        </swiper-slide>

        <swiper-slide>
            <img class="h-12 filter saturate-0 grayscale contrast-200" src="/img/logos/logo_mema.webp" alt="Logo mema smarthome">
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
