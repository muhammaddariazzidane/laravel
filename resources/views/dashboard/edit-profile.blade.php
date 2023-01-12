@extends('layouts.dasboard')

@section('db')
    <div class="card flex-shrink-0 w-96 max-w-sm shadow-2xl bg-base-100">
        <div class="card-body">
            <form action="/edit-profile" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input type="text" placeholder="name" name="name"
                        class="input input-bordered @error('name') input-error @enderror" value="{{ auth()->user()->name }}"
                        autofocus />
                    @error('name')
                        <p class="text-red-600 ml-1 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input type="text" placeholder="email" name="email" class="input input-bordered" readonly
                        value="{{ auth()->user()->email }}" />

                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Image</span>
                    </label>
                    <div class="flex">

                        <div class="h-14 w-14  ml-1">
                            @if (auth()->user()->image == 'user-image/default.png')
                                <img class="object-cover" src="/storage/user-image/default.png" alt="Your image" />
                            @else
                                <img class="object-cover" src="{{ asset('storage/') . auth()->user()->image }}"
                                    alt="Your image" />
                            @endif
                            {{-- <img src="/storage/user-image/default.png" class="object-cover" alt=""> --}}
                        </div>
                        <input type="file" class="file-input ml-1 file-input-bordered  w-full max-w-xs" name="image" />
                    </div>
                </div>

                <div class="form-control mt-6">
                    <button class="btn btn-accent" type="submit">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
@endsection
