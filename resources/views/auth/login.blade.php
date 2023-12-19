<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('/pics/small-logo.jpg')}}">

    <link rel="stylesheet" href="{{asset('/css_bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('/style.css')}}">
    <title>AI Talks Login</title>

    <style>
    .html .body {
        height: 100vh !important;
        margin: 0;
    }

    form {
        background-color: white;
        backdrop-filter: blur(15px);
        border: 2px solid rgb(133, 99, 16);
        border-radius: 20px;
        padding: 60px;
    }
    </style>
</head>

<body>
    <div class="bg-sigunp" style=" background-position: center center; height: 100vh; background-attachment: fixed;background-image:url('{{ asset('pics/bg-signup.jpg') }}');background-size: cover;
        background-repeat: no-repeat; ">

        <div class="d-flex justify-content-center align-items-center flex-column"
            style="background-color: rgba(0, 0, 0, 0.3); width: 100% ; height: 100vh; ">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 " :status="session('status')" />

    <form method="POST"  class="form mt-5 w-50 " action="{{ route('login') }}">
        @csrf
        <a class="d-flex justify-content-center" href="#"> <img src="pics/logo.jpg" alt="ai talks" width="250px"></a>
        <p class="text-center text-b mb-5"><b>A hub for knowledge exchange and better understand the world</b></p>
        <h3 >Welcome Back! Login Here</h3>

        <!-- Email Address -->
        <div  class="form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 form-group">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600  hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3 form-group submit" style="cursor: pointer; background-color: saddlebrown;" 
                        class="form-control ">
                {{ __('Log in') }}
            </x-primary-button>

            <p class="mt-2">Don't have an account? <a href="{{route('register')}}" class="text-danger"><b>Register here</b></a></p>
        </div>
    </form>

