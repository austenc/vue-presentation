<template>
    <div class="w-full overflow-hidden absolute h-full bg-grey-lighter">
        <slot></slot>
        <div class="p-4 bg-grey-light font-mono fixed pin-b pin-r" v-show="debug">
            <div class="text-xl mb-4">
                <strong>DEBUG</strong>
            </div>
            Current slide index: <input v-model="currentIndex">
        </div>
    </div>
</template>

<script>
import 'animate.css/animate.min.css'
export default {
    data() {
        return {
            debug: false,
            currentIndex: 1,
            currentSlide: null,
            slides: [],
            slideClass: 'animated block w-full h-full'
        }
    },
    methods: {

        navigate(event) {

            // left arrow
            if (event.keyCode === 37) {
                this.prevSlide()
            }

            // right arrow or spacebar
            if (event.keyCode === 39 || event.keyCode === 32) {
                this.nextSlide()
            }

            // F for fullscreen
            if (event.keyCode === 70) {
                this.fullscreen(document.documentElement)
            }
        },
        nextSlide() {
            this.currentIndex = Math.min(this.slides.length, this.currentIndex + 1)
        },

        prevSlide() {
            this.currentIndex = Math.max(1, this.currentIndex - 1)
        },

        fullscreen(el) {
            if (el.requestFullscreen) {
                el.requestFullscreen()
            } else if (el.mozRequestFullScreen) {
                el.mozRequestFullScreen()
            } else if (el.webkitRequestFullscreen) {
                el.webkitRequestFullscreen()
            } else if (el.msRequestFullscreen) {
                el.msRequestFullscreen()
            }
        }

    },
    mounted() {
        this.$children.forEach((child) => {
            if (child.isSlide) {
                this.slides.push(child)
            }
        })

        this.currentSlide = this.slides[0];
        this.currentSlide.active = true;
    },

    watch:  {
        currentIndex() {
            this.currentSlide.active = false
            this.currentSlide = this.slides[this.currentIndex - 1]
            this.currentSlide.active = true
        }
    },

    created() {
        document.addEventListener('keyup', this.navigate)
    },

    destroyed() {
        document.removeEventListener('keyup', this.navigate)
    }
}
</script>
