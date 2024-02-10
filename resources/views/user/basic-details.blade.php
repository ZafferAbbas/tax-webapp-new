@extends('layouts.app')
@section('content')
    <div class="card border-0 scroll-mt-3" id="basicInformationSection">
        <div class="card-header">
            <h2 class="h3 mb-0">Personal Info</h2>
            <p class=" mt-2 mb-0">Hey! Let's fill out these first</p>
        </div>

        <div class="card-body">
            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="fullName" class="col-form-label">Full Name</label>
                </div>

                <div class="col-lg">
                    <input type="text" class="form-control" id="fullName" placeholder="First Last">
                    <div class="invalid-feedback">Please add your full name</div>
                </div>
            </div> <!-- / .row -->
            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="dateOfBirth" class="col-form-label">Date of Birth</label>
                </div>

                <div class="col-lg">
                    <input class="form-control" id="dateOfBirth" data-inputmask="" data-inputmask-alias="datetime"
                        data-inputmask-inputformat="mm/dd/yyyy" inputmode="numeric" placeholder="mm/dd/yyyy">
                </div> <!-- / .row -->
            </div>

            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="phone" class="col-form-label">Phone</label>
                </div>

                <div class="col-lg">
                    <input type="text" class="form-control" id="phone" placeholder="+x(xxx)xxx-xx-xx"
                        data-inputmask="'mask': '+9(999)999-99-99'">
                    <div class="invalid-feedback">Please add your phone number</div>
                </div>
            </div> <!-- / .row -->

            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="emailAddress" class="col-form-label">Email address</label>
                </div>

                <div class="col-lg">
                    <input type="text" class="form-control" id="emailAddress" data-inputmask="'alias': 'email'"
                        placeholder="_@_._">
                    <div class="invalid-feedback">Please add your email address</div>
                </div>
            </div> <!-- / .row -->
            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="addressLine1" class="col-form-label">Address</label>
                </div>

                <div class="col-lg">
                    <input type="text" class="form-control" id="addressLine1">
                    <div class="invalid-feedback">Please add an address</div>
                </div>
            </div> <!-- / .row -->

            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="zipCode" class="col-form-label">Zip code</label>
                </div>

                <div class="col-lg">
                    <input type="text" class="form-control" id="zipCode" placeholder="0000"
                        data-inputmask="'mask': '9999'">
                    <div class="invalid-feedback">Please add a zip code</div>
                </div>
            </div> <!-- / .row -->

            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="maritalStatus" class="col-form-label">Marital Status</label>
                </div>

                <div class="col-lg">
                    <select id="maritalStatus" class="form-select" autocomplete="off" data-select='{"placeholder": "..."}'>
                        <option value="">...</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Dependent">Dependent</option>
                    </select>

                </div>
            </div> <!-- / .row -->

            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="occupation" class="col-form-label">Occupation</label>
                </div>

                <div class="col-lg">
                    <input type="text" class="form-control" id="occupation"
                        placeholder="Doctor, Engineer, Civil Servant, etc">
                    <div class="invalid-feedback">Please add an occupation</div>
                </div>
            </div> <!-- / .row -->

            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="taxFN" class="col-form-label">TFN</label>
                </div>

                <div class="col-lg">
                    <input type="text" class="form-control" id="taxFN" placeholder="000-000-000"
                        data-inputmask="'mask': '999-999-999'">
                </div>
            </div>

            <div class="d-flex justify-content-end mt-5">

                <!-- Button -->
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
@endsection
