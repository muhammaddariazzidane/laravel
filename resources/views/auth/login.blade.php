@extends('layouts.authLayout')
@section('main')
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col ">
            @if (session()->has('message'))
                <div class="alert alert-success shadow-lg transition duration-300" id="myAlert">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>
                            {{ session('message') }}
                        </span>
                    </div>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-error shadow-lg transition duration-300" id="myAlert">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>
                            {{ session('error') }}
                        </span>
                    </div>
                </div>
            @endif

            <div class="card flex-shrink-0 w-96 max-w-sm shadow-2xl bg-base-100">
                <div class="card-body">
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input type="text" placeholder="email" name="email"
                                class="input input-bordered @error('email')
            input-error
            @enderror"
                                value="{{ old('email') }}" autofocus />
                            @error('email')
                                <p class="text-red-600 ml-1 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Password</span>
                            </label>
                            <input type="password" placeholder="password" name="password"
                                class="input input-bordered @error('password')
          input-error
          @enderror" />
                            @error('password')
                                <p class="text-red-600 ml-1 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <label class="label mt-3">
                            <span class="label-text-alt">Belum punya akun? <a href="/register"
                                    class="font-semibold hover:underline">Register</a></span>
                        </label>
                        <div class="form-control mt-6">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
