<template>
	<div>
		<!--  Menu Button -->
		<div class="lg:hidden">
			<button class="flex items-center justify-center" aria-label="Menu toggle" @click="toggleMenu">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
				</svg>
			</button>
		</div>

		<transition name="disappear">
			<div v-show="showMenu">
				<div @click="toggleMenu" class="fixed inset-0 bg-gray-800 bg-opacity-75 transition-opacity z-40" aria-hidden="true"></div>
			</div>
		</transition>

		<transition name="menu" mode="out-in">
			<div class="z-50 fixed right-0 top-0 h-full w-2/3 md:w-1/2  overflow-hidden noscroll" v-if="showMenu">
				<!-- Menu -->
				<div class="h-full bg-gray-50 flex flex-col mx-auto z-50 overflow-x-hidden overflow-y-auto">
					<div class="flex items-center justify-end h-20 mr-5 sm:mr-20">
						<button @click="toggleMenu" class="rounded-full text-mtw-secondary bg-mtw-primary">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
								<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
							</svg>
						</button>
					</div>
					<div class="sm:py-20 pt-5">
						<div class="flex flex-col items-start font-medium sm:text-xl text-lg">
							<a @click="toggleMenu" class="w-full flex items-start transform hover:translate-x-1 pl-3 sm:px-10 py-3 border-b border-gray-300 text-left" :href="route('home') + '#services'">Services</a>
							<a @click="toggleMenu" class="w-full flex items-start transform hover:translate-x-1 pl-3 sm:px-10 py-3 border-b border-gray-300 text-left break-long-text" :href="route('services.softwareentwicklung')">Softwareentwicklung</a>
							<a @click="toggleMenu" class="w-full flex items-start transform hover:translate-x-1 pl-3 sm:px-10 py-3 border-b border-gray-300 text-left" :href="route('services.it-beratung')">IT-Beratung</a>
							<a @click="toggleMenu" class="w-full flex items-start transform hover:translate-x-1 pl-3 sm:px-10 py-3 border-b border-gray-300 text-left break-long-text" :href="route('services.itk-services')">Informations- und Telekommunikationstechnik</a>
							<a @click="toggleMenu" class="w-full flex items-start transform hover:translate-x-1 pl-3 sm:px-10 py-3 border-b border-gray-300 text-left" :href="route('home') + '#portfolio'">Portfolio</a>
							<a @click="toggleMenu" class="w-full flex items-start transform hover:translate-x-1 pl-3 sm:px-10 py-3 border-b border-gray-300 text-left" :href="route('home') + '#referenzen'">Referenzen</a>
							<a @click="toggleMenu" class="w-full flex items-start transform hover:translate-x-1 pl-3 sm:px-10 py-3 text-left" :href="route('home') + '#team'">Team</a>
							<!-- <a @click="toggleMenu" href="/kundencenter" class="rounded-xl shadow-md bg-mtw-primary px-4 py-2 flex inline-flex text-mtw-secondary items-center">
                                <span class="pr-2">Kundencenter</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                </svg>
                            </a> -->
							<a @click="toggleMenu" :href="route('home') + '#kontakt'" class="w-full flex items-center justify-center group">
                                <div class="rounded-xl shadow-md bg-mtw-primary px-4 py-2 flex text-mtw-secondary items-center group-hover:bg-mtw-text transform group-hover:scale-95">
								    <span>Kontakt</span>
                                </div>
							</a>
						</div>
					</div>
				</div>

				<!-- Menu END -->
			</div>
		</transition>
	</div>
</template>

<script>
export default {
	name: 'MenuComponent',
	data() {
		return {
			showMenu: false,
		};
	},
	emits: ['disableNavbar'],
	methods: {
		toggleMenu() {
			//
			if (this.showMenu !== true) {
				const scrollPosition = window.scrollY;
				document.body.style.overflowY = 'hidden';
				window.scrollY = scrollPosition;
			} else {
				document.body.style.overflowY = '';
			}
			this.showMenu = !this.showMenu;
		},
	},
};
</script>
<style scoped>
.menu-enter-active {
	-webkit-animation: slide-in-right 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
	animation: slide-in-right 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
}

.menu-leave-active {
	-webkit-animation: slide-out-right 0.5s cubic-bezier(0.55, 0.085, 0.68, 0.53) both;
	animation: slide-out-right 0.5s cubic-bezier(0.55, 0.085, 0.68, 0.53) both;
}

.disappear-leave-to {
	-webkit-animation: disappear 0s ease-in 0.3s forwards;
	animation: disappear 0s ease-in 0.3s forwards;
	-webkit-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
}

@media (max-width: 380px) {
    .break-long-text{
        word-break: break-all;
    }
}


/* ----------------------------------------------
 * Generated by Animista on 2021-9-6 20:29:2
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info.
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation slide-in-right
 * ----------------------------------------
 */
@-webkit-keyframes slide-in-right {
	0% {
		-webkit-transform: translateX(1000px);
		transform: translateX(1000px);
		opacity: 0;
	}
	100% {
		-webkit-transform: translateX(0);
		transform: translateX(0);
		opacity: 1;
	}
}
@keyframes slide-in-right {
	0% {
		-webkit-transform: translateX(1000px);
		transform: translateX(1000px);
		opacity: 0;
	}
	100% {
		-webkit-transform: translateX(0);
		transform: translateX(0);
		opacity: 1;
	}
}

/* ----------------------------------------------
 * Generated by Animista on 2021-9-6 20:30:17
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info.
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation slide-out-right
 * ----------------------------------------
 */
@-webkit-keyframes slide-out-right {
	0% {
		-webkit-transform: translateX(0);
		transform: translateX(0);
		opacity: 1;
	}
	100% {
		-webkit-transform: translateX(1000px);
		transform: translateX(1000px);
		opacity: 0;
	}
}
@keyframes slide-out-right {
	0% {
		-webkit-transform: translateX(0);
		transform: translateX(0);
		opacity: 1;
	}
	100% {
		-webkit-transform: translateX(1000px);
		transform: translateX(1000px);
		opacity: 0;
	}
}

@keyframes disappear {
	to {
		display: none;
	}
}
@-webkit-keyframes disappear {
	to {
		display: none;
		visibility: hidden;
	}
}
</style>
