@extends('layouts.app')

@section('body')
    <slideshow>
        <slide enter="fadeIn" exit="bounceOutLeft">
            <h1 class="text-grey-darker mx-auto py-8 text-center">
                <span class="text-grey-darker">Why You'll Love</span> <span class="text-green-dark">Vue JS</span>
            </h1>
        </slide>
        <slide enter="slideInRight" exit="bounceOutDown">
            <h1 class="text-purple mx-auto text-center py-8">
                Testing Slide Two!
            </h1>
        </slide>
        <slide enter="bounceInDown" exit="bounceOutLeft">
            <h1 class="text-teal-darker mx-auto text-center py-8">
                Slide three!
            </h1>
        </slide>
        <slide enter="bounceInRight" exit="bounceOutRight">
            <h1 class="text-center pt-8 mt-8">
                Pretty Cool! <br>
                <i class="fas fa-thumbs-up" style="font-size: 10rem; margin-top: 3rem;"></i>
            </h1>
        </slide>
    </slideshow>
@endsection
