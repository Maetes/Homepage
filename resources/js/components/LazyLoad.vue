<template>
    <video v-if="isVideo" :class="classes" :ref="'video'+src"  :poster="poster" :loop="loop" :playsinline='playsinline' :controls="controls" :muted="muted" :autoplay="autoplay">
        <source :ref="'video_src'+src" :type="type">
    </video>

    <img v-if="isImage" :ref="'img'+src" class="placeholder animate-pulse" :width="width" :height="height" :class="classes" loading="lazy" src="/img/image.svg" :alt="alt">
</template>
<script>
export default {
    props:{
        tagtype: {
            type: String, //img, video, iframe
            required: true,
        },
        src: {
            type: String,
            required: true,
            default: '/img/image.svg'
        },
        type: {
            type: String,
        },
        classes: String,
        autoplay: String,
        controls: Boolean,
        height: String,
        width: String,
        loop: String,
        muted: String,
        poster: String,
        preload: String,
        playsinline: String,
        alt: String,
    },

    mounted() {
        if (this.isVideo) {
            this.lazyLoadVideo();
        }
        if (this.isImage) {
            this.lazyLoadImg();
        }
    },

    methods: {
        lazyLoadVideo(){

            var lazyVideo = this.$refs['video'+this.src];

            if ("IntersectionObserver" in window) {
                var lazyVideoObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach((video) => {
                        if (video.isIntersecting) {
                            this.$refs['video_src'+this.src].src=this.src;

                            video.target.load();
                            this.$refs['video'+this.src].removeAttribute('poster');
                            lazyVideoObserver.unobserve(video.target);
                        }
                    });
                });

                lazyVideoObserver.observe(lazyVideo);
            }
            else{
                this.$refs['video_src'+this.src].src=this.src;
                this.$refs['video'+this.src].load();
                this.$refs['video'+this.src].removeAttribute('poster');
            }
        },
        lazyLoadImg(){

            var lazyImg = this.$refs['img'+this.src];

            if ("IntersectionObserver" in window) {
                var lazyImgObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach((img) => {
                        if (img.isIntersecting) {
                            // console.log('intersecting',this.src);
                            this.$refs['img'+this.src].src=this.src;

                            this.$refs['img'+this.src].classList.remove("placeholder");
                            this.$refs['img'+this.src].classList.remove("animate-pulse");
                            this.$refs['img'+this.src].removeAttribute('poster');
                            lazyImgObserver.unobserve(img.target);
                        }
                    });
                });

                lazyImgObserver.observe(lazyImg);
            }else{
                this.$refs['img'+this.src].src=this.src;
                this.$refs['img'+this.src].classList.remove("placeholder");
                this.$refs['img'+this.src].classList.remove("animate-pulse");
                this.$refs['img'+this.src].removeAttribute('poster');
            }
        },
    },

    computed: {
        isVideo(){
            return this.tagtype==='video';
        },
        isImage(){
            return this.tagtype==='img';
        },
        isIframe(){
            return this.tagtype==='iframe';
        },
    },

}
</script>
<style scoped>
.placeholder{
    object-fit: contain;
    object-position: center;
}
.aspect16-9{
    padding-top: 56.25%;
}

</style>
