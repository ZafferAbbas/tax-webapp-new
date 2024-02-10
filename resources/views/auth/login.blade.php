@extends('layouts.headless')
@section('content')
    <main class="container">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-md-7 col-lg-6 d-flex flex-column py-6">
                <!-- Title -->
                <h1 class="mb-2">Sign In</h1>

                <!-- Subtitle -->
                <p class="text-secondary">
                    Enter your email address and password to access admin panel
                </p>

                <!-- Form -->
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <!-- Label -->
                                <label class="form-label"> Email Address </label>

                                <!-- Input -->
                                <input type="email" class="form-control" placeholder="Your email address" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <!-- Password -->
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col">
                                        <!-- Label -->
                                        <label class="form-label"> Password </label>
                                    </div>

                                    <div class="col-auto">
                                        <!-- Help text -->
                                        <a href="reset-password-illustration.html"
                                            class="form-text small text-muted link-primary">Forgot password</a>
                                    </div>
                                </div>
                                <!-- / .row -->

                                <!-- Input -->
                                <div class="input-group input-group-merge">
                                    <input type="password" class="form-control" autocomplete="off"
                                        data-toggle-password-input placeholder="Your password" />

                                    <button type="button" class="input-group-text px-4 text-secondary link-primary"
                                        data-toggle-password></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / .row -->

                    <div class="form-check">
                        <!-- Input -->
                        <input type="checkbox" class="form-check-input" id="remember" />

                        <!-- Label -->
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <!-- Button -->
                        <button type="button" class="btn btn-primary">Sign in</button>

                        <!-- Link -->
                        <small class="mb-0 text-muted">
                            Don't have an account yet?
                            <a href="sign-up-illustration.html" class="fw-semibold">Sign up</a>
                        </small>
                    </div>
                </form>
            </div>

            <div class="col-md-5 col-lg-6 px-lg-4 px-xl-6 d-none d-lg-block">
                <!-- Image -->
                <div class="text-center">
                    <img src="https://d33wubrfki0l68.cloudfront.net/3ec9ba4912f9c709dc372e44996e05e983962a26/54f2f/assets/images/illustrations/sign-in-illustration.svg"
                        alt="..." class="img-fluid" />
                </div>
            </div>
        </div>
        <!-- / .row -->
    </main>
@endsection
