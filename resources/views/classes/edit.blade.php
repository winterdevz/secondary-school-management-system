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
                                        <i class="ri-building-line btn btn-primary"></i>
                                        Edit Class
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Classes</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Edit Class</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @include('session-messages')
                            <div class="card col-lg-6">
                                <div class="card-body">
                                    <form class="" action="{{ route('school.class.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="session_id" value="{{ $current_school_session_id }}">
                                        <input type="hidden" name="class_id" value="{{ $class_id }}">
                                        <div class="mb-3">
                                            <label for="class_name" class="form-label">Class Name</label>
                                            <input class="form-control" id="class_name" name="class_name" type="text"
                                                value="{{ $schoolClass->class_name }}">
                                        </div>
                                        <div class="d-flex justify-content-lg-end">
                                            <button type="submit" class="btn btn-primary px-3">
                                                Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
