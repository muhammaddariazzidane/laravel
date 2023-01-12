@extends('layouts.authLayout')
@section('main')
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">

            <div class="card flex-shrink-0 w-96 max-w-sm shadow-2xl bg-base-100">
                <div class="card-body">
                    <form class="form" method="post" action="/register">
                        @csrf
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Name</span>
                            </label>

                            <input type="text" name="name" placeholder="name"
                                class="input input-bordered @error('name')
            input-error
            @enderror"
                                value="{{ old('name') }}" />
                            @error('name')
                                <p class="text-red-600 ml-1 text-sm">{{ $message }}</p>
                            @enderror
                            {{-- <span class="indicator-item rounded-none badge">Required</span> --}}
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input type="text" name="email" placeholder="email"
                                class="input input-bordered @error('email')
            input-error
            @enderror"
                                value="{{ old('email') }}" />
                            @error('email')
                                <p class="text-red-600 ml-1 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Password</span>
                            </label>
                            <input type="password" name="password" placeholder="password"
                                class="input input-bordered @error('password')
            input-error
            @enderror" />
                            @error('password')
                                <p class="text-red-600 ml-1 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <label class="label mt-3">
                            <span class="label-text-alt">Sudah punya akun? <a href="/login"
                                    class="font-semibold hover:underline">Login</a></span>
                        </label>
                        <div class="form-control mt-6">
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
