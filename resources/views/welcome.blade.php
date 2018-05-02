@extends('layouts.app')

@section('body')
    <slideshow :start-on="4">
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
            <h2>It's Simple!</h2>
            <code-block>
                var app = new Vue({
                  el: '#app',
                  data: {
                    message: 'Hello Vue!'
                  }
                })
            </code-block>
        </slide>
        <slide enter="bounceInRight" exit="bounceOutRight">
            <h2>It's Also Powerful</h2>
            <h3 class="text-grey-dark pt-8">This entire presentation was built with vue!</h3>
            <h3 class="text-vue">
                <i class="fas fa-thumbs-up" style="font-size: 8rem; margin-top: 3rem;"></i>
            </h3>
            <h3 class="text-grey-dark mt-8 pt-8">From scratch. Pretty cool, right?</h3>
        </slide>
    </slideshow>
@endsection
