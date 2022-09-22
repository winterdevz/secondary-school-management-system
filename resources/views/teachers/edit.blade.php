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
                                        Edit Teacher
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Teacher
                                                    List</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Edit Teacher</li>
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

                                    <form class="row g-3" action="{{ route('school.teacher.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="teacher_id" value="{{ $teacher->id }}">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <label for="inputFirstName" class="form-label">First Name<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputFirstName" name="first_name"
                                                placeholder="First Name" required value="{{ $teacher->first_name }}">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <label for="inputLastName" class="form-label">Last Name<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputLastName" name="last_name"
                                                placeholder="Last Name" required value="{{ $teacher->last_name }}">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <label for="inputEmail" class="form-label">Email<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="email" class="form-control" id="inputEmail" name="email"
                                                required value="{{ $teacher->email }}">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <label for="inputAddress" class="form-label">Address<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputAddress" name="address"
                                                placeholder="634 Main St" required value="{{ $teacher->address }}">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <label for="inputAddress2" class="form-label">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2" name="address2"
                                                placeholder="Apartment, studio, or floor" value="{{ $teacher->address2 }}">
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-12">
                                            <label for="inputCity" class="form-label">City<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputCity" name="city"
                                                placeholder="Dhaka..." required value="{{ $teacher->city }}">
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-12">
                                            <label for="inputZip" class="form-label">Zip<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputZip" name="zip"
                                                required value="{{ $teacher->zip }}">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <label for="inputPhone" class="form-label">Phone<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputPhone" name="phone"
                                                placeholder="+880 01......" required value="{{ $teacher->phone }}">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <label for="inputState" class="form-label">Gender<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <select id="inputState" class="form-select" name="gender" required>
                                                <option value="Male"
                                                    {{ $teacher->gender == 'Male' ? 'selected' : null }}>Male
                                                </option>
                                                <option value="Female"
                                                    {{ $teacher->gender == 'Female' ? 'selected' : null }}>
                                                    Female
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <label for="inputNationality" class="form-label">Nationality<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputNationality"
                                                name="nationality" placeholder="e.g. Bangladeshi, German, ..." required
                                                value="{{ $teacher->nationality }}">
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary px-3"> Update Teacher</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            @include('components.photos.photo-input')
        @endsection
