@extends('layouts.app')

@section('styles')
    <style>
        body {
            background: {{ $user->background_color }};
        }
    </style>
@stop

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <h1 class="text-center mb-4"> {{ $user->username }} </h1>
                @foreach ($user->links as $link)
                    <div class="link">
                        <a href="{{ $link->link }}" class="user-link d-block p-4 mb-4 rounded h3 text-center" target="blank"
                            rel="nofollow" data-link-id="{{ $link->id }}"
                            style="border: 2px solid {{ $user->text_color }}; color: {{ $user->text_color }}">
                            {{ $link->name }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
