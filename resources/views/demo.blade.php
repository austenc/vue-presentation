@extends('layouts.app')

@section('body')
    <div class="min-h-screen bg-grey-darker">
        <albums :fake-slot="({ album }) => album.title">
            <strong slot-scope="{ album }">
                @{{ album.title }}
            </strong>
        </albums>
    </div>
@endsection