<template>
    <slide-transition :enter="enter" :exit="exit">
        <div class="slide" v-if="active">
            <slot></slot>
        </div>
    </slide-transition>
</template>
<script>
export default {
    props: {
        enter: { default: null },
        exit: { default: null}
    },
    data() {
        return {
            isSlide: true,
            active: false,
        }
    }
}
</script>

<style type="scss">
    @import url('https://fonts.googleapis.com/css?family=Kalam');
    .slide {
        overflow: hidden;
        font-family: 'Kalam', sans-serif;
        position: absolute;
        width: 100%;
        height: 100%;        
    }
</style>

