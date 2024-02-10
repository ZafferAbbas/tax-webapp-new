@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="d-flex align-items-baseline justify-content-between">
            <h1 class="h2">
                Account
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Account</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-4 col-xxl-3">
                <div class="card border-0 sticky-md-top top-10px">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <div class="avatar avatar-xxl avatar-circle mb-5">
                                <label class="d-block cursor-pointer">
                                    <span
                                        class="position-absolute bottom-0 end-0 m-0 text-bg-primary w-30px h-30px rounded-circle d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14"
                                            width="14">
                                            <g>
                                                <path
                                                    d="M2.65,16.4a.5.5,0,0,0-.49-.13.52.52,0,0,0-.35.38L.39,23a.51.51,0,0,0,.6.6l6.36-1.42a.52.52,0,0,0,.38-.35.5.5,0,0,0-.13-.49Z"
                                                    style="fill: currentColor"></path>
                                                <path
                                                    d="M17.85,7.21l-11,11a.24.24,0,0,0,0,.35l1.77,1.77a.5.5,0,0,0,.71,0L20,9.68A.48.48,0,0,0,20,9L18.21,7.21A.25.25,0,0,0,17.85,7.21Z"
                                                    style="fill: currentColor"></path>
                                                <path
                                                    d="M16.79,5.79,15,4a.48.48,0,0,0-.7,0L3.71,14.63a.51.51,0,0,0,0,.71l1.77,1.77a.24.24,0,0,0,.35,0l11-11A.25.25,0,0,0,16.79,5.79Z"
                                                    style="fill: currentColor"></path>
                                                <path
                                                    d="M22.45,1.55a4,4,0,0,0-5.66,0l-.71.71a.51.51,0,0,0,0,.71l5,4.95a.52.52,0,0,0,.71,0l.71-.71A4,4,0,0,0,22.45,1.55Z"
                                                    style="fill: currentColor"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <input type="file" name="avatar" class="d-none">
                                </label>
                                <img src="https://d33wubrfki0l68.cloudfront.net/053f2dfd0df2f52c41e903a21d177b0b44abc9b1/1282c/assets/images/profiles/profile-06.jpeg"
                                    alt="Profile picture" class="avatar-img" width="112" height="112">
                            </div>

                            <h3 class="mb-0">Ellie Tucker</h3>
                            <span class="small text-secondary fw-semibold">Assistant Manager</span>
                        </div>

                        <!-- Divider -->
                        <hr class="mb-0">
                    </div>

                    <ul class="scrollspy mb-5" id="account" data-scrollspy="{&quot;offset&quot;: &quot;30&quot;}">
                        <li class="active">
                            <a href="#basicInformationSection" class="d-flex align-items-center py-3">
                                <svg viewBox="0 0 24 24" height="14" width="14" class="me-3"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.750 6.000 A5.250 5.250 0 1 0 17.250 6.000 A5.250 5.250 0 1 0 6.750 6.000 Z"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5"></path>
                                    <path d="M2.25,23.25a9.75,9.75,0,0,1,19.5,0" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                </svg>
                                Basic information
                            </a>
                        </li>


                        <li>
                            <a href="#passwordSection" class="d-flex align-items-center py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="14"
                                    width="14" class="me-3">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="M18.75 9.75H5.25C4.42157 9.75 3.75 10.4216 3.75 11.25V21.75C3.75 22.5784 4.42157 23.25 5.25 23.25H18.75C19.5784 23.25 20.25 22.5784 20.25 21.75V11.25C20.25 10.4216 19.5784 9.75 18.75 9.75Z">
                                    </path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5"
                                        d="M6.75 9.75V6C6.75 4.60761 7.30312 3.27226 8.28769 2.28769C9.27226 1.30312 10.6076 0.75 12 0.75C13.3924 0.75 14.7277 1.30312 15.7123 2.28769C16.6969 3.27226 17.25 4.60761 17.25 6V9.75">
                                    </path>
                                    <path stroke="currentColor" stroke-width="1.5"
                                        d="M8.625 15C8.41789 15 8.25 14.8321 8.25 14.625C8.25 14.4179 8.41789 14.25 8.625 14.25">
                                    </path>
                                    <path stroke="currentColor" stroke-width="1.5"
                                        d="M8.625 15C8.83211 15 9 14.8321 9 14.625C9 14.4179 8.83211 14.25 8.625 14.25">
                                    </path>
                                    <path stroke="currentColor" stroke-width="1.5"
                                        d="M8.625 18.75C8.41789 18.75 8.25 18.5821 8.25 18.375C8.25 18.1679 8.41789 18 8.625 18">
                                    </path>
                                    <path stroke="currentColor" stroke-width="1.5"
                                        d="M8.625 18.75C8.83211 18.75 9 18.5821 9 18.375C9 18.1679 8.83211 18 8.625 18">
                                    </path>
                                    <path stroke="currentColor" stroke-width="1.5"
                                        d="M12 15C11.7929 15 11.625 14.8321 11.625 14.625C11.625 14.4179 11.7929 14.25 12 14.25">
                                    </path>
                                    <path stroke="currentColor" stroke-width="1.5"
                                        d="M12 15C12.2071 15 12.375 14.8321 12.375 14.625C12.375 14.4179 12.2071 14.25 12 14.25">
                                    </path>
                                    <g>
                                        <path stroke="currentColor" stroke-width="1.5"
                                            d="M12 18.75C11.7929 18.75 11.625 18.5821 11.625 18.375C11.625 18.1679 11.7929 18 12 18">
                                        </path>
                                        <path stroke="currentColor" stroke-width="1.5"
                                            d="M12 18.75C12.2071 18.75 12.375 18.5821 12.375 18.375C12.375 18.1679 12.2071 18 12 18">
                                        </path>
                                    </g>
                                    <g>
                                        <path stroke="currentColor" stroke-width="1.5"
                                            d="M15.375 15C15.1679 15 15 14.8321 15 14.625C15 14.4179 15.1679 14.25 15.375 14.25">
                                        </path>
                                        <path stroke="currentColor" stroke-width="1.5"
                                            d="M15.375 15C15.5821 15 15.75 14.8321 15.75 14.625C15.75 14.4179 15.5821 14.25 15.375 14.25">
                                        </path>
                                    </g>
                                    <g>
                                        <path stroke="currentColor" stroke-width="1.5"
                                            d="M15.375 18.75C15.1679 18.75 15 18.5821 15 18.375C15 18.1679 15.1679 18 15.375 18">
                                        </path>
                                        <path stroke="currentColor" stroke-width="1.5"
                                            d="M15.375 18.75C15.5821 18.75 15.75 18.5821 15.75 18.375C15.75 18.1679 15.5821 18 15.375 18">
                                        </path>
                                    </g>
                                </svg>
                                Password
                            </a>
                        </li>

                        <li>
                            <a href="#paymentMethodsSection" class="d-flex align-items-center py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14"
                                    class="me-3">
                                    <defs>
                                        <style>
                                            .a {
                                                fill: none;
                                                stroke: currentColor;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 1.5px;
                                            }
                                        </style>
                                    </defs>
                                    <title>credit-card-1</title>
                                    <rect class="a" x="0.75" y="3.75" width="22.5" height="16.5" rx="1.5"
                                        ry="1.5"></rect>
                                    <line class="a" x1="0.75" y1="8.25" x2="23.25" y2="8.25">
                                    </line>
                                    <line class="a" x1="5.25" y1="12.75" x2="13.5" y2="12.75">
                                    </line>
                                    <line class="a" x1="5.25" y1="15.75" x2="10.5" y2="15.75">
                                    </line>
                                </svg>
                                Payment methods
                            </a>
                        </li>


                        <li>
                            <a href="#deleteAccountSection" class="d-flex align-items-center py-3">
                                <svg viewBox="0 0 24 24" height="14" width="14" class="me-3"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.177,23.25H7.677a1.5,1.5,0,0,1-1.5-1.5V8.25h13.5v13.5A1.5,1.5,0,0,1,18.177,23.25Z"
                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5"></path>
                                    <path d="M10.677 18.75L10.677 12.75" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                    <path d="M15.177 18.75L15.177 12.75" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                    <path d="M2.427 6.212L21.501 2.158" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                    <path
                                        d="M13.541.783l-4.4.935A1.5,1.5,0,0,0,7.984,3.5L8.3,4.965l7.336-1.56L15.32,1.938A1.5,1.5,0,0,0,13.541.783Z"
                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5"></path>
                                </svg>
                                Delete account
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <form novalidate="">
                    <!-- Card -->
                    <div class="card border-0 scroll-mt-3" id="passwordSection">
                        <div class="card-header">
                            <h2 class="h3 mb-0">Password</h2>
                        </div>

                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="currentPassword" class="col-form-label">Current password</label>
                                </div>

                                <div class="col-lg">
                                    <input type="password" class="form-control" id="currentPassword">
                                    <div class="invalid-feedback">Please add your current password</div>
                                </div>
                            </div> <!-- / .row -->

                            <div class="row mb-4">
                                <div class="col-lg-3">
                                    <label for="newPassword" class="col-form-label">New password</label>
                                </div>

                                <div class="col-lg">
                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control" id="newPassword" autocomplete="off"
                                            data-toggle-password-input="" placeholder="Your new password">

                                        <button type="button" class="input-group-text px-4 text-secondary link-primary"
                                            data-toggle-password=""></button>
                                    </div>

                                    <div class="invalid-feedback">Please add a new password</div>

                                    <div class="d-flex justify-content-between align-items-center mt-3 h-15px">
                                        <div class="progress d-flex flex-grow-1 h-7px">
                                            <div data-zxcvbn="{&quot;input&quot;: &quot;#newPassword&quot;, &quot;text&quot;: &quot;#progressText&quot;}"
                                                class="progress-bar" role="progressbar" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 0%;"></div>
                                        </div>
                                        <span class="text-muted fs-6" id="progressText" style="margin-left: 0px;"></span>
                                    </div>
                                </div>

                                <div class="col-lg">
                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control" id="newPasswordAgain"
                                            autocomplete="off" data-toggle-password-input=""
                                            placeholder="Confirm your new password">

                                        <button type="button" class="input-group-text px-4 text-secondary link-primary"
                                            data-toggle-password=""></button>
                                    </div>

                                    <div class="invalid-feedback">Please confirm your new password again</div>
                                </div>
                            </div> <!-- / .row -->

                            <div class="row">
                                <div class="col-lg offset-lg-3">
                                    <div class="alert alert-light mw-450px" role="alert">
                                        <h4 class="mb-3">Password requirements:</h4>
                                        <ul class="p-3 mb-0">
                                            <li>Minimum 8 characters long - the more, the better</li>
                                            <li>At least one lowercase character</li>
                                            <li>At least one uppercase character</li>
                                            <li>At least one number, symbol, or whitespace character</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- / .row -->

                            <div class="d-flex justify-content-end mt-5">

                                <!-- Button -->
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 scroll-mt-3" id="paymentMethodsSection">
                        <div class="card-header">
                            <h2 class="h3 mb-0">Payment methods</h2>
                        </div>

                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    <div class="d-flex align-items-center">
                                        <svg width="40" height="14" viewBox="0 0 81 27" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>visa</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-87.000000, -72.000000)">
                                                    <g id="visa" transform="translate(75.000000, 50.000000)">
                                                        <rect id="Rectangle-26" fill-opacity="0" fill="#FFFFFF" x="0"
                                                            y="0" width="110" height="70"></rect>
                                                        <g transform="translate(12.000000, 21.000000)" id="g4155-Clipped"
                                                            fill-rule="nonzero" fill="#1A1F71">
                                                            <g
                                                                transform="translate(41.000000, 14.345679) scale(1, -1) translate(-41.000000, -14.345679) translate(0.000000, 0.345679)">
                                                                <g id="g4155">
                                                                    <g id="g4161"
                                                                        transform="translate(0.054676, 0.096245)">
                                                                        <path
                                                                            d="M39.9238261,26.5122639 L34.5652696,0.772857503 L28.0839773,0.772857503 L33.4430206,26.5122639 L39.9238261,26.5122639 L39.9238261,26.5122639 Z M67.1908255,9.89157558 L70.602852,19.558047 L72.5654489,9.89157558 L67.1908255,9.89157558 L67.1908255,9.89157558 Z M74.4253149,0.772857503 L80.4182707,0.772857503 L75.182407,26.5122639 L69.6539308,26.5122639 C68.4080154,26.5122639 67.3583109,25.7699205 66.8933443,24.6253911 L57.1679977,0.772857503 L63.9745232,0.772857503 L65.3260907,4.61663553 L73.6399841,4.61663553 L74.4253149,0.772857503 L74.4253149,0.772857503 Z M57.5054027,9.17624469 C57.5341284,15.9688868 48.3662547,16.345561 48.4271142,19.3804649 C48.4470761,20.3028916 49.3030039,21.285346 51.1750419,21.5364622 C52.1035143,21.6595191 54.6639948,21.7585649 57.5672359,20.3844293 L58.7026306,25.8449552 C57.143167,26.4242231 55.1367513,26.9824814 52.6405384,26.9824814 C46.2332512,26.9824814 41.7257539,23.4858639 41.6897251,18.4745458 C41.6488275,14.7688317 44.9094356,12.702876 47.3608559,11.4688052 C49.8887157,10.2072216 50.7358798,9.3978472 50.7237079,8.27082587 C50.7061804,6.54402709 48.7075547,5.77967352 46.8476886,5.7506601 C43.5865937,5.69863604 41.6975151,6.65607893 40.191121,7.3774126 L39.0148287,1.73480247 C40.5314472,1.02147251 43.3261151,0.400685346 46.2201056,0.368670537 C53.0314998,0.368670537 57.4854408,3.82476924 57.5054027,9.17624469 L57.5054027,9.17624469 Z M30.6629591,26.5122639 L20.1615322,0.772857503 L13.3111879,0.772857503 L8.14299989,21.3148597 C7.82993867,22.577944 7.55680127,23.0421587 6.60398508,23.5759056 C5.04549524,24.445808 2.47235596,25.2591842 0.210330401,25.7654184 L0.363209442,26.5122639 L11.391923,26.5122639 C12.79656,26.5122639 14.0604899,25.5518196 14.381828,23.8895507 L17.1117414,8.99366023 L23.8539992,26.5122639 L30.6629591,26.5122639 L30.6629591,26.5122639 Z"
                                                                            id="path4163"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>

                                        <div class="ms-4">
                                            <h3 class="h4 mb-0">Visa ending in 4321</h3>
                                            <p class="small text-muted mb-0">Expires 9/2024</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="badge text-bg-light p-2 fs-6 me-2">Default</span>

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="javascript: void(0);"
                                                class="dropdown-toggle no-arrow d-flex mx-2 text-secondary" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    height="14" width="14">
                                                    <g>
                                                        <circle cx="12" cy="3.25" r="3.25"
                                                            style="fill: currentColor"></circle>
                                                        <circle cx="12" cy="12" r="3.25"
                                                            style="fill: currentColor"></circle>
                                                        <circle cx="12" cy="20.75" r="3.25"
                                                            style="fill: currentColor"></circle>
                                                    </g>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="javascript: void(0);" class="dropdown-item">
                                                    Action
                                                </a>
                                                <a href="javascript: void(0);" class="dropdown-item">
                                                    Another action
                                                </a>
                                                <a href="javascript: void(0);" class="dropdown-item">
                                                    Something else here
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    <div class="d-flex align-items-center">
                                        <svg width="40" height="31" viewBox="0 0 72 56" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>mastercard</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-94.000000, -152.000000)">
                                                    <g id="mastercard" transform="translate(75.000000, 145.000000)">
                                                        <rect id="Rectangle-26-Copy" fill-opacity="0" fill="#FFFFFF"
                                                            x="0" y="0" width="110" height="70"></rect>
                                                        <g id="Group" transform="translate(19.000000, 7.000000)"
                                                            fill-rule="nonzero">
                                                            <path
                                                                d="M13.3627119,55.4521739 L13.3627119,51.8 C13.3627119,50.4 12.5084746,49.4869565 11.0440678,49.4869565 C10.3118644,49.4869565 9.51864407,49.7304348 8.96949153,50.5217391 C8.54237288,49.8521739 7.93220339,49.4869565 7.01694915,49.4869565 C6.40677966,49.4869565 5.79661017,49.6695652 5.30847458,50.3391304 L5.30847458,49.6086957 L4.02711864,49.6086957 L4.02711864,55.4521739 L5.30847458,55.4521739 L5.30847458,52.226087 C5.30847458,51.1913043 5.85762712,50.7043478 6.71186441,50.7043478 C7.56610169,50.7043478 7.99322034,51.2521739 7.99322034,52.226087 L7.99322034,55.4521739 L9.27457627,55.4521739 L9.27457627,52.226087 C9.27457627,51.1913043 9.88474576,50.7043478 10.6779661,50.7043478 C11.5322034,50.7043478 11.959322,51.2521739 11.959322,52.226087 L11.959322,55.4521739 L13.3627119,55.4521739 Z M32.3389831,49.6086957 L30.2644068,49.6086957 L30.2644068,47.8434783 L28.9830508,47.8434783 L28.9830508,49.6086957 L27.8237288,49.6086957 L27.8237288,50.7652174 L28.9830508,50.7652174 L28.9830508,53.4434783 C28.9830508,54.7826087 29.5322034,55.573913 30.9966102,55.573913 C31.5457627,55.573913 32.1559322,55.3913043 32.5830508,55.1478261 L32.2169492,54.0521739 C31.8508475,54.2956522 31.4237288,54.3565217 31.1186441,54.3565217 C30.5084746,54.3565217 30.2644068,53.9913043 30.2644068,53.3826087 L30.2644068,50.7652174 L32.3389831,50.7652174 L32.3389831,49.6086957 Z M43.2,49.4869565 C42.4677966,49.4869565 41.979661,49.8521739 41.6745763,50.3391304 L41.6745763,49.6086957 L40.3932203,49.6086957 L40.3932203,55.4521739 L41.6745763,55.4521739 L41.6745763,52.1652174 C41.6745763,51.1913043 42.1016949,50.6434783 42.8949153,50.6434783 C43.1389831,50.6434783 43.4440678,50.7043478 43.6881356,50.7652174 L44.0542373,49.5478261 C43.8101695,49.4869565 43.4440678,49.4869565 43.2,49.4869565 L43.2,49.4869565 Z M26.7864407,50.0956522 C26.1762712,49.6695652 25.3220339,49.4869565 24.4067797,49.4869565 C22.9423729,49.4869565 21.9661017,50.2173913 21.9661017,51.373913 C21.9661017,52.3478261 22.6983051,52.8956522 23.979661,53.0782609 L24.5898305,53.1391304 C25.2610169,53.2608696 25.6271186,53.4434783 25.6271186,53.7478261 C25.6271186,54.173913 25.1389831,54.4782609 24.2847458,54.4782609 C23.4305085,54.4782609 22.759322,54.173913 22.3322034,53.8695652 L21.7220339,54.8434783 C22.3932203,55.3304348 23.3084746,55.573913 24.2237288,55.573913 C25.9322034,55.573913 26.9084746,54.7826087 26.9084746,53.6869565 C26.9084746,52.6521739 26.1152542,52.1043478 24.8949153,51.9217391 L24.2847458,51.8608696 C23.7355932,51.8 23.3084746,51.6782609 23.3084746,51.3130435 C23.3084746,50.8869565 23.7355932,50.6434783 24.4067797,50.6434783 C25.1389831,50.6434783 25.8711864,50.9478261 26.2372881,51.1304348 L26.7864407,50.0956522 Z M60.8338983,49.4869565 C60.1016949,49.4869565 59.6135593,49.8521739 59.3084746,50.3391304 L59.3084746,49.6086957 L58.0271186,49.6086957 L58.0271186,55.4521739 L59.3084746,55.4521739 L59.3084746,52.1652174 C59.3084746,51.1913043 59.7355932,50.6434783 60.5288136,50.6434783 C60.7728814,50.6434783 61.0779661,50.7043478 61.3220339,50.7652174 L61.6881356,49.5478261 C61.4440678,49.4869565 61.0779661,49.4869565 60.8338983,49.4869565 L60.8338983,49.4869565 Z M44.4813559,52.5304348 C44.4813559,54.2956522 45.7016949,55.573913 47.5932203,55.573913 C48.4474576,55.573913 49.0576271,55.3913043 49.6677966,54.9043478 L49.0576271,53.8695652 C48.5694915,54.2347826 48.0813559,54.4173913 47.5322034,54.4173913 C46.4949153,54.4173913 45.7627119,53.6869565 45.7627119,52.5304348 C45.7627119,51.4347826 46.4949153,50.7043478 47.5322034,50.6434783 C48.0813559,50.6434783 48.5694915,50.826087 49.0576271,51.1913043 L49.6677966,50.1565217 C49.0576271,49.6695652 48.4474576,49.4869565 47.5932203,49.4869565 C45.7016949,49.4869565 44.4813559,50.7652174 44.4813559,52.5304348 L44.4813559,52.5304348 Z M56.3186441,52.5304348 L56.3186441,49.6086957 L55.0372881,49.6086957 L55.0372881,50.3391304 C54.6101695,49.7913043 54,49.4869565 53.2067797,49.4869565 C51.559322,49.4869565 50.2779661,50.7652174 50.2779661,52.5304348 C50.2779661,54.2956522 51.559322,55.573913 53.2067797,55.573913 C54.0610169,55.573913 54.6711864,55.2695652 55.0372881,54.7217391 L55.0372881,55.4521739 L56.3186441,55.4521739 L56.3186441,52.5304348 Z M51.620339,52.5304348 C51.620339,51.4956522 52.2915254,50.6434783 53.3898305,50.6434783 C54.4271186,50.6434783 55.159322,51.4347826 55.159322,52.5304348 C55.159322,53.5652174 54.4271186,54.4173913 53.3898305,54.4173913 C52.2915254,54.3565217 51.620339,53.5652174 51.620339,52.5304348 L51.620339,52.5304348 Z M36.3050847,49.4869565 C34.5966102,49.4869565 33.3762712,50.7043478 33.3762712,52.5304348 C33.3762712,54.3565217 34.5966102,55.573913 36.3661017,55.573913 C37.220339,55.573913 38.0745763,55.3304348 38.7457627,54.7826087 L38.1355932,53.8695652 C37.6474576,54.2347826 37.0372881,54.4782609 36.4271186,54.4782609 C35.6338983,54.4782609 34.840678,54.1130435 34.6576271,53.0782609 L38.9898305,53.0782609 C38.9898305,52.8956522 38.9898305,52.773913 38.9898305,52.5913043 C39.0508475,50.7043478 37.9525424,49.4869565 36.3050847,49.4869565 L36.3050847,49.4869565 Z M36.3050847,50.5826087 C37.0983051,50.5826087 37.6474576,51.0695652 37.7694915,51.9826087 L34.7186441,51.9826087 C34.840678,51.1913043 35.3898305,50.5826087 36.3050847,50.5826087 L36.3050847,50.5826087 Z M68.0949153,52.5304348 L68.0949153,47.2956522 L66.8135593,47.2956522 L66.8135593,50.3391304 C66.3864407,49.7913043 65.7762712,49.4869565 64.9830508,49.4869565 C63.3355932,49.4869565 62.0542373,50.7652174 62.0542373,52.5304348 C62.0542373,54.2956522 63.3355932,55.573913 64.9830508,55.573913 C65.8372881,55.573913 66.4474576,55.2695652 66.8135593,54.7217391 L66.8135593,55.4521739 L68.0949153,55.4521739 L68.0949153,52.5304348 Z M63.3966102,52.5304348 C63.3966102,51.4956522 64.0677966,50.6434783 65.1661017,50.6434783 C66.2033898,50.6434783 66.9355932,51.4347826 66.9355932,52.5304348 C66.9355932,53.5652174 66.2033898,54.4173913 65.1661017,54.4173913 C64.0677966,54.3565217 63.3966102,53.5652174 63.3966102,52.5304348 L63.3966102,52.5304348 Z M20.5627119,52.5304348 L20.5627119,49.6086957 L19.2813559,49.6086957 L19.2813559,50.3391304 C18.8542373,49.7913043 18.2440678,49.4869565 17.4508475,49.4869565 C15.8033898,49.4869565 14.5220339,50.7652174 14.5220339,52.5304348 C14.5220339,54.2956522 15.8033898,55.573913 17.4508475,55.573913 C18.3050847,55.573913 18.9152542,55.2695652 19.2813559,54.7217391 L19.2813559,55.4521739 L20.5627119,55.4521739 L20.5627119,52.5304348 Z M15.8033898,52.5304348 C15.8033898,51.4956522 16.4745763,50.6434783 17.5728814,50.6434783 C18.6101695,50.6434783 19.3423729,51.4347826 19.3423729,52.5304348 C19.3423729,53.5652174 18.6101695,54.4173913 17.5728814,54.4173913 C16.4745763,54.3565217 15.8033898,53.5652174 15.8033898,52.5304348 Z"
                                                                id="XMLID_1775_" fill="currentColor"></path>
                                                            <g id="XMLID_328_">
                                                                <rect id="Rectangle-path" fill="#FF5F00" x="26.359322"
                                                                    y="5.23478261" width="19.220339" height="34.4521739">
                                                                </rect>
                                                                <path
                                                                    d="M27.579661,22.4608696 C27.579661,15.4608696 30.8745763,9.25217391 35.9389831,5.23478261 C32.2169492,2.31304348 27.5186441,0.547826087 22.3932203,0.547826087 C10.2508475,0.547826087 0.427118644,10.3478261 0.427118644,22.4608696 C0.427118644,34.573913 10.2508475,44.373913 22.3932203,44.373913 C27.5186441,44.373913 32.2169492,42.6086957 35.9389831,39.6869565 C30.8745763,35.7304348 27.579661,29.4608696 27.579661,22.4608696 Z"
                                                                    id="XMLID_330_" fill="#EB001B"></path>
                                                                <path
                                                                    d="M71.5118644,22.4608696 C71.5118644,34.573913 61.6881356,44.373913 49.5457627,44.373913 C44.420339,44.373913 39.7220339,42.6086957 36,39.6869565 C41.1254237,35.6695652 44.359322,29.4608696 44.359322,22.4608696 C44.359322,15.4608696 41.0644068,9.25217391 36,5.23478261 C39.7220339,2.31304348 44.420339,0.547826087 49.5457627,0.547826087 C61.6881356,0.547826087 71.5118644,10.4086957 71.5118644,22.4608696 Z"
                                                                    fill="#F79E1B"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>

                                        <div class="ms-4">
                                            <h3 class="h4 mb-0">Mastercard ending in 1234</h3>
                                            <p class="small text-muted mb-0">Expires 7/2025</p>
                                        </div>
                                    </div>

                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a href="javascript: void(0);"
                                            class="dropdown-toggle no-arrow d-flex mx-2 text-secondary" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14"
                                                width="14">
                                                <g>
                                                    <circle cx="12" cy="3.25" r="3.25"
                                                        style="fill: currentColor"></circle>
                                                    <circle cx="12" cy="12" r="3.25"
                                                        style="fill: currentColor"></circle>
                                                    <circle cx="12" cy="20.75" r="3.25"
                                                        style="fill: currentColor"></circle>
                                                </g>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="javascript: void(0);" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="javascript: void(0);" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="javascript: void(0);" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="d-flex justify-content-end mt-5">

                                <!-- Button -->
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="card border-0 scroll-mt-3" id="deleteAccountSection">
                        <div class="card-header">
                            <h2 class="h3 mb-0">Delete Account</h2>
                        </div>

                        <div class="card-body">
                            <div class="alert text-bg-danger-soft d-flex align-items-center" role="alert">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="32"
                                        width="32" class="me-3">
                                        <path
                                            d="M23.39,10.53,13.46.6a2.07,2.07,0,0,0-2.92,0L.61,10.54a2.06,2.06,0,0,0,0,2.92h0l9.93,9.92A2,2,0,0,0,12,24a2.07,2.07,0,0,0,1.47-.61l9.92-9.92A2.08,2.08,0,0,0,23.39,10.53ZM11,6.42a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Zm1.05,11.51h0a1.54,1.54,0,0,1-1.52-1.47A1.47,1.47,0,0,1,12,14.93h0A1.53,1.53,0,0,1,13.5,16.4,1.48,1.48,0,0,1,12.05,17.93Z"
                                            style="fill: currentColor"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-0">If you delete your account, you will lose all your data</h4>
                                    Take a backup of your data
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">

                                    <!-- Input -->
                                    <input type="checkbox" class="form-check-input" id="deleteAccount">

                                    <!-- Label -->
                                    <label class="form-check-label" for="deleteAccount">
                                        I confirm that I'd like to delete my account
                                    </label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-5">

                                <!-- Button -->
                                <button type="button" class="btn btn-danger">Delete account</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- / .row -->
    </div>
@endsection
