@extends("layouts.app")

@php
$comics= config("comics");

@endphp

@section("content")
<div class="container">

    <div class="row g-3">

        @foreach($comics as $comic)
        <div class="col-4">
            <x-card>
                <x-slot:image>{{$comic["thumb"]}}</x-slot::image>
                    <x-slot:title>{{$comic["title"]}}</x-slot::image>
                        <x-slot:description>{{$comic["description"]}}</x-slot::image>
            </x-card>

        </div>


        @endforeach
    </div>
</div>
@endsection