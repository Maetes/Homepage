<template>
    <div>
        <div  class="h-20 relative flex justify-between items-center font-basic font-semibold mx-5 sm:mx-20 xl:mx-44" :class="[showFixedNavbar ? 'text-mtw-text' : 'text-black']">
            <a href=".">
                <img src="/img/logos/mtw.png" style="width: 100px;" alt="Logo">
            </a>
            <MenuComponent @disableNavbar="emitDisableNavbar" ref="menu"></MenuComponent>
            <div  class="hidden h-full relative lg:flex w-3/5 xl:w-1/2 lg:flex w-1/2 justify-between items-center">
                <a @click="toggleServicesDropdown" @mouseenter="showServicesDropdown"  class="relative inline-flex items-center" :class="{'border-b-4 border-mtw-secondary': windowHash==='#services'}">
                    <span>Services</span>
                    <img v-if="!servicesDropdownIsVisible" class="ml-1 w-4 h-4" src="/img/icons/chevron-down.svg">
                    <img v-else class="ml-1 w-4 h-4" src="/img/icons/chevron-up.svg">
                </a>
                <div @mouseleave="toggleServicesDropdown" v-if="servicesDropdownIsVisible" class="absolute mt-3 transform translate-y-20 -translate-x-12 ">
                    <div class="py-3 px-6 h-1/3 rounded-xl shadow-md font-basic text-sm bg-white border">
                        <div class="flex flex-col space-y-3">
                            <a href="#services" class="ease-linear flex inline-flex items-center">
                                <span>Web- und Appentwicklung</span>
                            </a>
                            <a href="#services" class="">IT-Beratung</a>
                            <a href="#services" class="">ITK-Services</a>
                        </div>
                    </div>

                </div>

                <a class="relative inline-flex items-center" :class="{'border-b-4 border-mtw-secondary': windowHash==='#portfolio'}" href="#portfolio">Portfolio</a>
                <a class="relative inline-flex items-center" :class="{'border-b-4 border-mtw-secondary': windowHash==='#team'}" href="#team">Über uns</a>
                <a class="relative inline-flex items-center" :class="{'border-b-4 border-mtw-secondary': windowHash==='#kontakt'}" href="#kontakt">Kontakt</a>
                <div>
                    <a href="/kundencenter" class="rounded-xl shadow-md px-4 py-2 flex inline-flex text-mtw-secondary items-center" :class="[showFixedNavbar ? 'bg-mtw-text ' : 'bg-mtw-primary ']">
                        <span class="pr-2">Kundencenter</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import MenuComponent from "./MenuComponent";

export default {
    name: "NavbarContent",
    components: {MenuComponent},
    props: {
        showFixedNavbar: false,
    },
    emits: ['disableNavbar'],
    data(){
        return{
            servicesDropdownIsVisible: false,
            windowHash: '',
        }
    },
    mounted() {
      window.onhashchange = ()=>{
          this.windowHash = window.location.hash;
      }
    },
    methods: {
        toggleServicesDropdown() {
            this.servicesDropdownIsVisible=!this.servicesDropdownIsVisible;
        },
        showServicesDropdown(){
            this.servicesDropdownIsVisible=true;
        },
        hideDropdowns(){
            this.servicesDropdownIsVisible=false;
        },

        log(){
            console.log('emitted')
        },
        emitDisableNavbar(){
            console.log('emitted disable')
            this.$emit('disableNavbar');
        }
    },
}
</script>


