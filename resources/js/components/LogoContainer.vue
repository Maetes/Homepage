!<template>
    <div>
        <!-- Container für Grafik -->
        <div class="w-full h-96">
            <div class="relative h-full w-full" id="scene">
                <div class="absolute h-12">
                    <div class="layer h-full w-full z-20" data-depth="0.15" >
                        <img class="h-12 w-full" src="/img/logos/company_simple/laravel.svg" alt="none" style="fill: #FF2D20;">
                        <p class="text-center text-sm">Laravel</p>
                    </div>
                </div>
                <div class="absolute h-12">
                    <div class="layer h-full w-full z-20" data-depth="0.3" >
                        <img class="h-12 w-full" src="/img/logos/company_simple/vuedotjs.svg" alt="none" style="fill: #4FC08D;">
                        <p class="text-center text-sm">Vue.js</p>
                    </div>
                </div>
                <div class="absolute h-12">
                    <div class="layer h-full w-full z-20" data-depth="0.4" >
                        <img class="h-12 w-full" src="/img/logos/company_simple/wordpress.svg" alt="none" style="fill: #21759B;">
                        <p class="text-center text-sm">Wordpress</p>
                    </div>
                </div>
                <div class="absolute h-12">
                    <div class="layer h-full w-full z-20" data-depth="0.5" >
                        <img class="h-12 w-full" src="/img/logos/company_simple/typo3.svg" alt="none" style="fill: #FF8700;">
                        <p class="text-center text-sm">Typo3</p>
                    </div>
                </div>
                <div class="absolute h-12 z-10">
                    <div class="layer h-full w-full z-20" data-depth="0.6" >
                        <img class="h-12 w-full" src="/img/logos/company_simple/shopware.svg" alt="none" style="fill: #189EFF;">
                        <p class="text-center text-sm">Shopware</p>
                    </div>
                </div>
                <div class="absolute h-12">
                    <div class="layer h-full w-full z-20" data-depth="0.6" >
                        <img class="h-12 w-full" src="/img/logos/company_simple/react.svg" alt="none" style="fill: #61DAFB;">
                        <p class="text-center text-sm">Typo3</p>
                    </div>
                </div>
                <div class="absolute h-12">
                    <div class="layer h-full w-full z-20" data-depth="0.7" >
                        <img class="h-12 w-full" src="/img/logos/company_simple/nodedotjs.svg" alt="none" style="fill: #339933;">
                        <p class="text-center text-sm">Node.js</p>
                    </div>
                </div>
                <div class="absolute h-12">
                    <div class="layer h-full w-full z-20" data-depth="0.8" >
                        <img class="h-12 w-full" src="/img/logos/company_simple/css3.svg" alt="none" style="fill: #1572B6;">
                        <p class="text-center text-sm">CSS</p>
                    </div>
                </div>
                <div class="absolute h-12 z-20 hovering">
                    <div class="layer h-full w-full z-20" data-depth="0.9" >
                        <img class="h-12 w-full" src="/img/logos/company_simple/html5.svg" alt="none" style="fill: #E34F26;">
                        <p class="text-center text-sm">HTML</p>
                    </div>
                </div>
                <div class="absolute h-12 z-20 hovering">
                    <div class="layer h-full w-full z-20" data-depth="0.55" >
                        <img class="h-12 w-full" src="/img/logos/company_simple/ionic.svg" alt="none" style="fill: #3880FF;">
                        <p class="text-center text-sm">Ionic Framework</p>
                    </div>
                </div>
            </div>
            <!-- <a class="absolute bottom-0 sm:right-0 md:right-20 lg:right-44 xl:right-44 text-gray-300 text-xs" href="http://www.freepik.com" target="_blank">Designed by Freepik</a> -->
        </div>
        <!-- CONTAINER ENDE -->

    </div>
</template>
<script>
export default {
    mounted() {
            // collect all the img_divs
        var img_divs = document.getElementsByClassName('absolute');
        // get window width and height
        var winWidth = document.getElementById('scene').offsetWidth;
        var winHeight = document.getElementById('scene').offsetHeight;

        // i stands for "index". you could also call this banana or haircut. it's a variable
        for ( var i=0; i < img_divs.length; i++ ) {

            // shortcut! the current div in the list
            var thisDiv = img_divs[i];

            // get random numbers for each element
            let randomTop = this.getRandomNumber(0, winHeight);
            let randomLeft = this.getRandomNumber(0, winWidth);

            // update top and left position
            thisDiv.style.top = randomTop +"px";
            thisDiv.style.left = randomLeft +"px";

            console.log(i,thisDiv.style.top);

        }


    },

    methods: {
        // function that returns a random number between a min and max
        getRandomNumber(min, max) {

            return Math.random() * (max - min) + min;

        },
    },
}
</script>
<style>

</style>
