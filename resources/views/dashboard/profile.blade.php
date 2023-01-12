@extends('layouts.dasboard')

@section('db')
    <div class="card card-side bg-base-100 shadow-xl">
        <figure class="w-52">
            <img src="/storage/user-image/default.png" alt="">
            {{-- <img class="object-cover" src="https://source.unsplash.com/1200x700?{{ auth()->user()->name }}" alt="Your image" /> --}}

        </figure>
        <div class="card-body">
            <h2 class="card-title">{{ auth()->user()->name }}</h2>
            <p>{{ auth()->user()->email }}</p>
            <div class="card-actions justify-end">
                {{-- <a href="/edit-profile" class="btn btn-primary -mb-5 -mr-6">Edit</a> --}}
            </div>
        </div>
    </div>
@endsection
