@extends('layouts.app')

@section('body')
    <slideshow :start-on="3">
        <slide enter="fadeIn" exit="bounceOutLeft">
            <h1>Why You'll Love <span class="text-vue">Vue JS</span></h1>
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Vue.js_Logo.svg" class="block mx-auto -mt-8">
            <br>
            <a href="https://vuejs.org/" target="_blank" class="block text-5xl -mt-8">vuejs.org</a>
        </slide>
        <slide enter="slideInRight" exit="bounceOutDown">
            <h1 class="pt-8 mt-8">
                Vue is <span class="text-vue">Progressive</span>
            </h1>
            <h2 class="text-grey-dark mt-8 pt-8">(In other words, it grows with you!)</h2>
        </slide>
        <slide enter="bounceInDown" exit="bounceOutLeft">
            <h2 class="pb-8 mb-4">It's Simple!</h2>
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
        <slide enter="bounceInRight" exit="bounceOutRight">
            <h2>It's Also Powerful</h2>
            <h3 class="text-grey-dark pt-8">This entire presentation was built with vue</h3>
            <h3 class="text-vue">
                <i class="fas fa-thumbs-up" style="font-size: 8rem; margin-top: 3rem;"></i>
            </h3>
            <h3 class="text-grey-dark mt-8 pt-8">From scratch! Pretty cool, right?</h3>
        </slide>
    </slideshow>
@endsection
