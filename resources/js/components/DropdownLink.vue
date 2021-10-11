<template lang="">
    <div>
        <a :href="href" class="border-b-2 border-opacity-0 transform hover:border-opacity-100 hover:border-mtw-primary-lighter hover:text-gray-700 hover:translate-x-1">
            <slot></slot>
        </a>
    </div>
</template>
<script>
export default {
    props: {
        href: String,
    }
}
</script>
<style lang="">

</style>
