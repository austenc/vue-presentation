<template>
    <div class="mb-8 text-left shadow-lg px-8 font-sans text-xl w-1/2 mx-auto bg-grey-darkest text-white rounded">
        <pre><code ref="codeBlock" :class="lang"><slot></slot></code></pre>
    </div>
</template>
<script>
import hljs from 'highlight.js'
import 'highlight.js/styles/gruvbox-dark.css'

export default {
    props: {
        lang: { default: 'xml' }
    },
    mounted() {        
        let html = this.$refs.codeBlock.innerHTML
        let pattern = html.match(/\s*\n[\t\s]*/)
        this.$refs.codeBlock.innerHTML = _.escape(html.replace(new RegExp(pattern, "g"),'\n'))
        hljs.highlightBlock(this.$refs.codeBlock)
    }
}
</script>

<style>
    .hljs {
        background: none;
    }
</style>

