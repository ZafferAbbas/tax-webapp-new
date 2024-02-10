@extends('layouts.app')
@section('content')
    <ul class="nav nav-pills steps mb-7" id="wizard-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="wizardTabOne" data-bs-toggle="pill" data-bs-target="#wizardStepOne"
                type="button" role="tab" aria-controls="wizardStepOne" aria-selected="true">
                1
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="wizardTabTwo" data-bs-toggle="pill" data-bs-target="#wizardStepTwo" type="button"
                role="tab" aria-controls="wizardStepTwo" aria-selected="false">
                2
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="wizardTabThree" data-bs-toggle="pill" data-bs-target="#wizardStepThree"
                type="button" role="tab" aria-controls="wizardStepThree" aria-selected="false">
                3
            </button>
        </li>
    </ul>

    <div class="tab-content" id="wizard-tabContent">
        <div class="tab-pane fade show active" id="wizardStepOne" role="tabpanel" aria-labelledby="wizardTabOne">
            <div class="card h-300px">
                <div class="card-body">
                    <h4>Step 1 content</h4>
                    <p>...</p>
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <!-- Button -->
                        <button type="button" class="btn btn-light">Cancel</button>

                        <!-- Button -->
                        <a class="btn btn-primary" data-toggle="wizard" href="#wizardStepTwo">Next</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="wizardStepTwo" role="tabpanel" aria-labelledby="wizardTabTwo">
            <div class="card h-300px">
                <div class="card-body">
                    <h4>Step 3 content</h4>
                    <p>...</p>
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <!-- Button -->
                        <a class="btn btn-light" data-toggle="wizard" href="#wizardStepOne">Previous</a>

                        <!-- Button -->
                        <a class="btn btn-primary" data-toggle="wizard" href="#wizardStepThree">Next</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="wizardStepThree" role="tabpanel" aria-labelledby="wizardTabThree">
            <div class="card h-300px">
                <div class="card-body">
                    <h4>Step 3 content</h4>
                    <p>...</p>
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <!-- Button -->
                        <a class="btn btn-light" data-toggle="wizard" href="#wizardStepTwo">Previous</a>

                        <!-- Button -->
                        <button type="button" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
