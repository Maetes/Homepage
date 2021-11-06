<template>
    <div>
        <div id="typed-strings">
            <p>Softwareentwicklung <br> ^2000 IT-Beratung <br> ^2000 Informations- und Kommunikationstechnik</p>
        </div>
        <div class="text-base sm:pt-8 md:pt-0 sm:text-lg lg:text-xl font-medium font-basic">
            <span class="" id="typed"></span>
        </div>
    </div>
</template>

<script>
// Can also be included with a regular script tag
import Typed from 'typed.js';


export default {
    name: "Typewriter",
    props: {
        strings: [],
        typeSpeed: Number,
        shuffle: Boolean,
        backSpeed: Number,
        backDelay: Number,
        startDelay: Number,
        fadeOut: Boolean,
        smartBackspace: Boolean,
        loop: Boolean,
    },
    mounted() {
        // const options = {
        //     strings: this.strings,
        //     typeSpeed: this.typeSpeed,
        //     backSpeed: this.backSpeed,
        //     backDelay: this.backDelay,
        //     startDelay: this.startDelay,
        //     loop: this.loop,
        // };
        const options = {
            stringsElement: '#typed-strings',
            // strings: ["Web- und Appentwicklung","\n", "IT-Beratung", "ITK-Services"],
            typeSpeed: 70,
            backSpeed: 0,
            backDelay: 10000,
            startDelay: 1000,
            loop: false,
        };

        const typed = new Typed('#typed', options);
    }
}
</script>

<style scoped>

</style>
