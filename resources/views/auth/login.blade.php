@extends('layouts.guest')
@section('content')
    <div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1>Login</h1>

        <div class="input-box">
          <input type="text" placeholder="email" name="email" />
          <!-- <i class="bx bxs-user"></i> -->
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <div class="input-box">
          <input type="password" placeholder="password" name="password" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />

        </div>

        <div class="remember-forgot">
          @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif        
        </div>

        <button type="submit" class="btn">Login</button>

        <div class="register-link">
          <p>Don't have an account? <a href="/register">Register here!</a></p>
        </div>
    </form>
    </div>
@endsection
