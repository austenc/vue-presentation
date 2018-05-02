<template>
    <div class="text-left max-w-xl w-1/2 mx-auto shadow-lg mb-8 px-8 font-sans bg-grey-darkest text-white rounded">
        <pre><code ref="codeBlock" :class="lang" class="text-2xl"><slot></slot></code></pre>
    </div>
</template>
<script>
import hljs from 'highlight.js'
import 'highlight.js/styles/gruvbox-dark.css'

export default {
    props: {
        lang: { default: 'xml' },
        escape: { default: true }
    },
    methods: {
        formatCode() {
            let html = this.$refs.codeBlock.innerHTML
            let pattern = html.match(/\s*\n[\t\s]*/)
            let result = html.replace(new RegExp(pattern, "g"), '\n')
            
            return this.escape === true ? _.escape(result) : result
        }
    },
    mounted() {       
        this.$refs.codeBlock.innerHTML = this.formatCode()
        hljs.highlightBlock(this.$refs.codeBlock)
    }
}
</script>

<style>
    .hljs {
        background: none;
    }
</style>

