<template>
    <form @submit.prevent="sendForm"  action="/email" method="POST">
        <slot></slot>
        <div class="flex flex-wrap -m-2">
            <div class="p-2 w-full sm:w-1/2">
                <div class="relative">
                    <label for="name" class="leading-7 text-sm text-gray-600 font-basic" >Name</label>
                    <input required v-model="name" type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-mtw-primary focus:bg-white focus:ring-2 focus:ring-mtw-stoneblue text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" :class="{'ring-red-400 ring-2' : this.error.name!=='' }">
                    <p v-if="this.error.name!==''" class="text-red-400 font-basic text-sm" v-text="this.error.name"></p>
                </div>
            </div>
            <div class="p-2 w-full sm:w-1/2">
                <div class="relative">
                    <label for="email" class="leading-7 text-sm text-gray-600 font-basic">E-Mail-Adresse</label>
                    <input required v-model="email" type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-mtw-primary focus:bg-white focus:ring-2 focus:ring-mtw-stoneblue text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" :class="{'ring-red-400 ring-2' : this.error.email!=='' }">
                    <p v-if="this.error.email!==''" class="text-red-400 font-basic text-sm" v-text="this.error.email"></p>
                </div>
            </div>
            <div class="p-2 w-full">
                <div class="relative">
                    <label for="message" class="leading-7 text-sm text-gray-600 font-basic">Nachricht</label>
                    <textarea required v-model="message" id="message" name="message" class="w-full resize-y bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-mtw-primary focus:bg-white focus:ring-2 focus:ring-mtw-stoneblue h-32 text-base outline-none text-gray-700 py-1 px-3 leading-6 transition-colors duration-200 ease-in-out" :class="{'ring-red-400 ring-2' : this.error.message!=='' }"></textarea>
                    <p v-if="this.error.message!==''" class="text-red-400 font-basic text-sm" v-text="this.error.message"></p>
                </div>
            </div>
            <div class="p-2 w-full">
                <button type="submit" class="flex mx-auto text-mtw-secondary bg-mtw-primary border-0 py-2 px-8 focus:outline-none hover:bg-mtw-stoneblue rounded-xl text-lg font-basic">Senden</button>
            </div>
            <transition name="success_message">
            <div v-if="success" class="w-full rounded-xl bg-green-200 p-3 relative">
                <div class="flex justify-center items-center">
                    <p class="font-basic text-lg font-medium ">Vielen Dank.<br> Ihre Nachricht wurde erfolgreich gesendet.</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                    </svg>
                </div>
                <button type="button" @click="success=false" class="absolute top-1 right-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
            </div>
            </transition>

            <transition name="success_message">
                <div v-if="this.requestError" class="w-full rounded-xl bg-red-300 p-3">
                    <div class="flex justify-center items-center">
                        <p class="font-basic text-lg font-medium ">Leider ist ein Fehler aufgetreten</p>
                    </div>
                </div>
            </transition>
            <div class="p-2 grid grid-cols-1 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                <a :href="'mailto:'+this.info.email" class="text-mtw-text font-basic">{{ this.info.email }}</a>
                <a :href="'tel:'+this.info.telefon" class="text-mtw-text font-basic mt-2">{{ this.info.telefon }}</a>
                <p class="leading-normal my-5 font-basic">{{ this.info.adresse_straße }}
                    <br>{{ this.info.adresse_plz }}
                </p>
                <!--
                <span class="inline-flex">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
                -->
            </div>
        </div>
    </form>
</template>

<script>
const axios = require('axios');

export default {
    name: "ContactForm",
    props: {
        info_company: [],
    },
    data(){
        return{
            name: '',
            email: '',
            message: '',
            error: {
                email: '',
                message: '',
                name: '',
            },
            success: false,
            requestError: false,
            info: Object,
        }
    },
    mounted() {
        this.info=JSON.parse(this.info_company);
    },
    methods:{
        sendForm(){
            this.error ={
                email: '',
                message: '',
                name: '',
            }
            this.requestError=false;
            axios.post('/email',{
                name: this.name,
                email: this.email,
                message: this.message,
            })
            .then((response)=>  {
                // handle success
                this.name='';
                this.email='';
                this.message='';
                this.success=true;
                console.log(response);
            })
            .catch((error)=>  {
                const errors = error.response.data.errors;
                if (errors !== undefined){
                    if ('email' in errors){
                        this.error.email = errors.email[0];
                    }
                    if ('name' in errors){
                        this.error.name = errors.name[0];
                    }
                    if ('message' in errors){
                        this.error.message = errors.message[0];
                    }
                }
                this.requestError=true;
                // this.error = error.response.data.errors;
                // handle error
                console.log(error);
            })
        }
    }
}
</script>

<style scoped>

.success_message-enter-active{
    -webkit-animation: scale-in-ver-center 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    animation: scale-in-ver-center 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

/* ----------------------------------------------
 * Generated by Animista on 2021-9-8 16:30:40
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info.
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation scale-in-ver-center
 * ----------------------------------------
 */
@-webkit-keyframes scale-in-ver-center {
    0% {
        -webkit-transform: scaleY(0);
        transform: scaleY(0);
        opacity: 1;
    }
    100% {
        -webkit-transform: scaleY(1);
        transform: scaleY(1);
        opacity: 1;
    }
}
@keyframes scale-in-ver-center {
    0% {
        -webkit-transform: scaleY(0);
        transform: scaleY(0);
        opacity: 1;
    }
    100% {
        -webkit-transform: scaleY(1);
        transform: scaleY(1);
        opacity: 1;
    }
}

</style>
