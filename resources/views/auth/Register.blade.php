@extends('layouts.FrontendLayout')
        @section('title', 'Homepage')
        @section('frontend')
        <!-- *Breadcrumbs Start Here -->
        <section id="Breadcrumbs">
            <div class="container">
                <ul>
                    <li class="d-flex align-items-center">
                        <a href="index.php" class="homeIcom">
                            <iconify-icon icon="fluent:home-16-regular" width="20" height="22"></iconify-icon>
                        </a>
                        <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
                    </li>
                    <li class="d-flex align-items-center">
                        <a href="#">Account</a>
                        <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
                    </li>
                    <li>
                        <a href="#" class="active">Create a new Account</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- *Breadcrumbs End Hear -->

        <!-- *Register Start Here -->
        <section id="signIn" class="Register">
            <div class="container">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1 class="text-center">Create Account</h1>
                    <input type="text" placeholder="User Name" name="name" >
                                @error('name')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <input type="email" placeholder="Email" name="email" >
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    <div class="passwordBox">
                        <input type="password" id="passwordInputRegister" name="password" placeholder="Password" >
                                @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <span class="pasToggl">
                            <iconify-icon icon="ion:eye-off-outline" width="25" height="25"
                                style="color: #000"></iconify-icon>
                        </span>
                    </div>

                    <div class="passwordBox">
                        <input type="password" id="passwordInputConfirm" name="password_confirmation" placeholder="Confirm Password" >
                        <span class="pasToggl">
                            <iconify-icon icon="ion:eye-off-outline" width="25" height="25"
                                style="color: #000"></iconify-icon>
                        </span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center checkbox">
                        <label for="checkboxRegister" class="d-flex align-items-center">
                            <input type="checkbox" id="checkboxRegister">
                            Accept all terms & Conditions
                        </label>
                    </div>

                    <button class="d-inline-block">Register</button>
                    <p class="text-center">Already have an account?
                        <a href="{{ route('login')}}" class="">LogIn</a>
                    </p>
                </form>
            </div>
        </section>
        <!-- *Register End Here -->

        @endsection