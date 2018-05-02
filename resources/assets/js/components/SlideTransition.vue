<template>
    <transition :enter-active-class="enter ? 'animated ' + enter : ''" :leave-active-class="exit ? 'animated ' + exit : ''">
        <slot></slot>
    </transition>
</template>
<script>
export default {
    props: {
        enter: { default: null },
        exit: { default: null }
    }
}
</script>

