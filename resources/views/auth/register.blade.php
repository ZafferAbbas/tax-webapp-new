@extends('layouts.headless')
@section('content')
    <main class="container">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-md-7 col-lg-6 d-flex flex-column py-6">
                <div class="my-auto">
                    <!-- Title -->
                    <h1 class="mb-2">
                        Free Sign Up
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-secondary">
                        Don't have an account? Create your account, it takes less than a minute
                    </p>

                    <!-- Form -->
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">

                                    <!-- Label -->
                                    <label class="form-label">
                                        Full name
                                    </label>

                                    <!-- Input -->
                                    <input type="text" class="form-control" placeholder="Your full name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-4">

                                    <!-- Label -->
                                    <label class="form-label">
                                        Email Address
                                    </label>

                                    <!-- Input -->
                                    <input type="email" class="form-control" placeholder="Your email address">
                                </div>
                            </div>
                        </div> <!-- / .row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">

                                    <!-- Label -->
                                    <label class="form-label">
                                        Password
                                    </label>

                                    <!-- Input -->
                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control" autocomplete="off"
                                            data-toggle-password-input placeholder="Your password">

                                        <button type="button" class="input-group-text px-4 text-secondary link-primary"
                                            data-toggle-password></button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-4">

                                    <!-- Label -->
                                    <label class="form-label">
                                        Confirm password
                                    </label>

                                    <!-- Input -->
                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control" autocomplete="off"
                                            data-toggle-password-input placeholder="Your password again">

                                        <button type="button" class="input-group-text px-4 text-secondary link-primary"
                                            data-toggle-password></button>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- / .row -->

                        <div class="form-check">

                            <!-- Input -->
                            <input type="checkbox" class="form-check-input" id="agree">

                            <!-- Label -->
                            <label class="form-check-label" for="agree">
                                I agree with <a href="javascript: void(0);">Terms & Conditions</a> and have understood <a
                                    href="javascript: void(0);">Privacy Policy</a>
                            </label>
                        </div>


                        <div class="d-flex align-items-center justify-content-between mt-3">

                            <!-- Button -->
                            <button type="button" class="btn btn-primary">
                                Get started
                            </button>

                            <!-- Link -->
                            <small class="mb-0 text-muted">
                                Already registered? <a href="sign-in-illustration.html">Login</a>
                            </small>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-5 col-lg-6 px-lg-4 px-xl-6 d-none d-lg-block">

                <!-- Image -->
                <div class="text-center">
                    <img src="https://d33wubrfki0l68.cloudfront.net/d7b3128e115346d419e411ffe3ac9a97c6c1bbd5/70041/assets/images/illustrations/sign-up-illustration.svg"
                        alt="..." class="img-fluid">
                </div>
            </div>
        </div> <!-- / .row -->
    </main> <!-- / main -->
@endsection
