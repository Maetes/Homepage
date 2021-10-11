<template>
    <div>
        <div class="relative inline-block group border-b-2 border-opacity-0 transform hover:border-opacity-100 hover:border-mtw-primary-lighter hover:text-gray-700" :class="class">
            <a class="flex items-center" :href="href" :aria-label="dropdownText" :class="linkClass">
                <span v-text="dropdownText"></span>
                <span v-if="$slots.default">
                    <img class="ml-1 w-4 h-4 group-hover:hidden" src="/img/icons/chevron-down.svg">
                    <img class="ml-1 w-4 h-4 hidden group-hover:inline-block" src="/img/icons/chevron-up.svg">
                </span>
            </a>
            <div v-if="$slots.default" class="hidden  w-max absolute transform -translate-x-5 z-10 group-hover:flex">
                <div class="py-3 px-6 h-1/3 rounded-xl shadow-md font-basic text-sm bg-white border">
                    <div class="flex flex-col space-y-3">
                        <slot></slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        href: String,
        class: String,
        dropdownText: String,
        linkClass: String,
    },
    mounted() {
        // console.log(this.linkClass);
    },
}
</script>
<style lang="">

</style>
