<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('/pics/small-logo.jpg')}}">

    <link rel="stylesheet" href="{{asset('/css_bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('/style.css')}}">
    <title>Sign Up</title>

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

            <form method="POST" class="form mt-5 w-50 " action="{{ route('register') }}">
                @csrf
                <a class="d-flex justify-content-center" href="#"> <img src="pics/logo.jpg" alt="ai talks" width="250px"></a>
        <p class="text-center text-b mb-5"><b>A hub for knowledge exchange and better understand the world</b></p>
        <h3 >Create Account</h3>

                
                <!-- Name -->
                <div class="form-group">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full form-control" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4 form-group">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4 form-group">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full form-control" type="password" name="password"
                        required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4 form-group">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full form-control" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4 "
                    style="color: saddlebrown; font-weight: 400;">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ml-4 form-group submit"
                        style="cursor: pointer; background-color: saddlebrown;" value="Create Account"
                        class="form-control ">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
        
    </div>
    
</body>
</html>