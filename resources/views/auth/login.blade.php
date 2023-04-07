<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('public/css/firstloginstudent.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&family=Bebas+Neue&family=Cairo:wght@600&family=Changa:wght@800&family=Kaushan+Script&family=Mochiy+Pop+One&family=Pacifico&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200&family=Rubik&family=Shrikhand&family=Work+Sans:ital,wght@0,400;0,600;1,300;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>

<!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section class="login py-5 bg-light"></section>
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-5">
            <img src="images/loogin.svg" class="img-fluid"  alt="">
        </div>
        <div class="col-lg-7 text-center" >
            <h1 class="animate__animated animate__heartBeat p-md-3" >بوابة الطالب</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
       <div>
        <div class="form-row py-3 pt-5">
            <div class="offset-1 col-lg-10">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full inp px-3  let username" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>
    </div>

        <!-- Password -->
        <div class="form-row">
            <div class="offset-1 col-lg-10">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full inp px-3 password"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
    </div>
    <div class="form-row ">
        <div class="offset-1 col-lg-10">
        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <div class="form-row ">
            <x-primary-button class="ml-3 btn1 btn btn-info sign-up ">
                {{ __('Log in') }}
            </x-primary-button>


        </div>
    </div>
    </div>
</div>
</section>
    </form>


