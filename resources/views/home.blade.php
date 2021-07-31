@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            @if ($watches->count())
                @foreach ($watches as $watch)
                    <x-post :watch="$watch" />
                @endforeach

            @else
                <p>There are no posts</p>
            @endif
        </div>
    </div>
@endsection