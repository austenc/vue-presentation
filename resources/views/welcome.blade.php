@extends('layouts.app')

@section('body')
    <slideshow :start-on="1">
        {{-- Intro --}}
        <slide enter="fadeIn" exit="bounceOutLeft">
            <h1>Why You'll Love <span class="text-vue">Vue JS</span></h1>
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Vue.js_Logo.svg" class="block mx-auto -mt-8">
            <br>
            <a href="https://vuejs.org/" target="_blank" class="block text-5xl -mt-8">vuejs.org</a>
        </slide>

        {{-- Progressive --}}
        <slide enter="slideInRight" exit="fadeOutDown">
            <h1 class="-mt-8">
                Vue is <span class="text-vue">Progressive</span>
            </h1>
            <h2 class="text-grey mt-8 pt-8">(In other words, it grows with you!)</h2>
        </slide>

        {{-- Simple --}}
        <slide enter="bounceInUp" exit="fadeOutUp">
            <h1 class="pb-2">It's <span class="text-vue">Simple</span>!</h1>
            <h3 class="text-grey-dark pb-8 leading-loose">
                Data binding and reactivity is a core feature
            </h3>
            <h4 class="text-3xl text-grey w-1/2 mx-auto mb-0 pb-3">Create an element to bind to</h3>
            <code-block v-pre>
                <div id="app">@{{ message }}</div>
            </code-block>

            <h4 class="text-3xl text-grey pt-8 w-1/2 mx-auto mb-0 pb-3">Bind vue to that element</h3>
            <code-block lang="javascript">
                var app = new Vue({
                    el: '#app',
                    data: {
                        message: 'Hello Bozeman Laravel!'
                    }
                })
            </code-block>
            <div class="pt-8">
                <a href="/simple-demo" target="_blank" class="bg-grey-darker hover:bg-green-dark text-white px-4 py-2 hover:no-underline rounded">See Demo</a>
            </div>
        </slide>

        {{-- Yet Complex --}}
        <slide enter="bounceInUp" exit="fadeOutUp">                                
            <h1 class="-mt-8"><span class="inline-block bg-white pt-6 w-32 h-32 rounded-full shadow-md animated rotateIn">
                <i class="fas fa-thumbs-up text-vue"></i></span> It's Also <span class="text-vue">Powerful</span>
            </h1>
            <h3 class="text-grey-dark pt-8 leading-loose">
                In fact, this <span class="text-vue">whole presentation</span> was built with vue. <br>                
                All from scratch! Pretty cool, right?
            </h3>
            <code-block escape="false" class="mt-8">
                &lt;slideshow&gt;
                    &lt;slide&gt;...&lt;/slide&gt;
                &lt;/slideshow&gt;
            </code-block>
        </slide>

        {{-- Data Binding --}}
        <slide enter="bounceInUp" exit="fadeOutUp">
            <h1>More on Data Binding</h1>
            <h3 class="text-grey-dark pt-8 leading-loose">
                You can also bind data to html attributes
            </h3>            
            <code-block v-pre>
                <a v-bind:href="url">Some Link</a>
            </code-block>
            <code-block lang="javascript">
                var app = new Vue({
                    data: {
                        href: 'https://example.com'
                    }
                })
            </code-block>
        </slide>

        {{-- Loops & Conditionals --}}
        <slide enter="bounceInUp" exit="fadeOutUp">
            <h1>Loops &amp; Conditionals</h1>
            <code-block escape="false" v-pre>
                &lt;div v-if="something"&gt;This will be shown&lt;/div&gt;
                &lt;div v-else&gt;This will not be in the DOM&lt;/div&gt;

                &lt;!-- This will still exist in the DOM --&gt;
                &lt;div v-show="!something"&gt;This will not be shown&lt;/div&gt;

                &lt;ul&gt;
                    &lt;li v-for="thing in listOfThings"&gt;
                        @{{ thing }}
                    &lt;/li&gt;
                &lt;/ul&gt;
            </code-block>
            <code-block lang="javascript" v-pre>
                var app = new Vue({
                    data: {
                        something: true,
                        listOfThings: [
                            'thing1',
                            'thing2'
                        ]
                    }
                })
            </code-block>
        </slide>

        {{-- Event Binding --}}
        <slide enter="bounceInUp" exit="fadeOutUp">
            <h1>Event Binding</h1>
            <code-block escape="false" v-pre>
                &lt;button v-on:click="doSomething"&gt;Click Me&lt;/button&gt;
            </code-block>
            <code-block lang="javascript" v-pre>
                var app = new Vue({
                    data: {
                        count: 0,
                    },
                    methods: {
                        doSomething() {
                            this.count++
                        }
                    }
                })
            </code-block>            
        </slide>

        {{-- Shorthand --}}
        <slide enter="bounceInUp" exit="fadeOutUp">
            <h1>Shorthand</h1>
            <h2 class="mx-auto text-grey-dark text-uppercase text-left block w-1/2 max-w-xl">v-on</h2>            
            <code-block v-pre escape="false">
                &lt;!-- full version --&gt;
                &lt;button v-on:click="doSomething"&gt;Click Me&lt;/button&gt;
                &lt;!-- shorthand --&gt;
                {{ '<button @click="doSomething">Click Me</button>' }}
            </code-block>
            <h2 class="mx-auto text-grey-dark text-uppercase text-left block w-1/2 max-w-xl">v-bind</h2>            
            <code-block v-pre escape="false">
                &lt;!-- full version --&gt;
                &lt;div v-bind:some-attribute="thing"&gt;&lt;/div&gt;
                &lt;!-- shorthand --&gt;
                &lt;div :some-attribute="thing"&gt;&lt;/div&gt;
            </code-block>
        </slide>

        {{-- Components --}}
        <slide enter="bounceInUp" exit="fadeOutUp">
            <h1>Components</h1>
            <h3 class="text-grey-dark my-4">
                Dream up your own HTML elements
            </h3>
            <code-block lang="javascript">
                Vue.component('todo-item', {
                    template: '<li>This is a todo</li>'
                })                
            </code-block>
            <code-block escape="false">
                &lt;ul&gt;
                    &lt;todo-item&gt;&lt;/todo-item&gt;
                &lt;/ul&gt;
            </code-block>
        </slide>

        {{-- Single File Components --}}
        <slide enter="bounceInUp" exit="fadeOutUp">
            <h1>Single File Components</h1>
            <h3 class="text-grey-dark my-4 mb-8">
                Template and behavior in a single <span class="text-vue">.vue</span> file
            </h3>
            <h4 class="mx-auto text-grey text-uppercase text-left block w-1/2 max-w-xl font-mono">MyComponent.vue</h4>            
            <code-block v-pre escape="false">
                &lt;template&gt;
                    &lt;div&gt;...&lt;/div&gt;
                &lt;/template&gt;

                &lt;script&gt;
                    export default {
                        data() {
                            return {}
                        }

                        methods: {
                            doSomething()
                        }
                    }
                &lt;/script&gt;
            </code-block>
            <h4 class="text-grey">These require a module bundler (webpack, gulp, etc...)</h4>
        </slide>
        <slide enter="rollIn" exit="rollOut">
            <h1><span class="text-vue">Thanks!</span> Let's Code</h1>
        </slide>
    </slideshow>
@endsection
