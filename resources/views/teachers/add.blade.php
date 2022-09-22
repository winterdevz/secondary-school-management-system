@extends('layouts.app')

@section('content')
    <div class="page-content mb-5">
        <div class="container-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="row ">
                    <div class="col ps-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h2 class="mb-sm-0">
                                        <i class="ri-user-line btn btn-primary"></i>
                                        Add Teacher
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Add Teacher</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

                        @include('session-messages')

                        <div class="mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Teacher Information</h5>
                                    <hr>

                                    <form class="row g-3" action="{{ route('school.teacher.create') }}" method="POST">
                                        @csrf
                                        <div class="col-md-3">
                                            <label for="inputFirstName" class="form-label">First Name<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputFirstName" name="first_name"
                                                placeholder="First Name" required value="{{ old('first_name') }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputLastName" class="form-label">Last Name<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputLastName" name="last_name"
                                                placeholder="Last Name" required value="{{ old('last_name') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail" class="form-label">Email<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="email" class="form-control" id="inputEmail" name="email"
                                                required value="{{ old('email') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword" class="form-label">Password<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="password" class="form-control" id="inputPassword" name="password"
                                                required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="formFile" class="form-label">Photo</label>
                                            <input class="form-control" type="file" id="formFile"
                                                onchange="previewFile()">
                                            <div id="previewPhoto"></div>
                                            <input type="hidden" id="photoHiddenInput" name="photo" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputAddress" class="form-label">Address<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputAddress" name="address"
                                                placeholder="634 Main St" required value="{{ old('address') }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputAddress2" class="form-label">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2" name="address2"
                                                placeholder="Apartment, studio, or floor" value="{{ old('address2') }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputCity" class="form-label">City<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputCity" name="city"
                                                placeholder="Dhaka..." required value="{{ old('city') }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputZip" class="form-label">Zip<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputZip" name="zip"
                                                required value="{{ old('zip') }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPhone" class="form-label">Phone<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputPhone" name="phone"
                                                placeholder="+880 01......" required value="{{ old('phone') }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputGender" class="form-label">Gender<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <select id="inputGender" class="form-select" name="gender" required>
                                                <option value="Male" {{ old('gender') == 'male' ? 'selected' : '' }}>
                                                    Male
                                                </option>
                                                <option value="Female" {{ old('gender') == 'female' ? 'selected' : '' }}>
                                                    Female
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputNationality" class="form-label">Nationality<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputNationality"
                                                name="nationality" placeholder="e.g. Bangladeshi, German, ..." required
                                                value="{{ old('nationality') }}">
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary px-3"> Add Teacher</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>

    @include('components.photos.photo-input')
@endsection
