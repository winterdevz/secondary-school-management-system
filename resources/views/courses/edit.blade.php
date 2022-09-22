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
                                        Edit Subject
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Courses</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Edit Course</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @include('session-messages')
                        <div class="row ">
                            <div class="card col-lg-6">
                                <div class="card-body">
                                    <form action="{{ route('school.course.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="session_id" value="{{ $current_school_session_id }}">
                                        <input type="hidden" name="course_id" value="{{ $course_id }}">
                                        <div class="mb-3">
                                            <label for="course_name" class="form-label">Course Name</label>
                                            <input class="form-control" id="course_name" name="course_name" type="text"
                                                value="{{ $course->course_name }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="course_type" class="form-label">Course Type</label>
                                            <select class="form-select" id="course_type" name="course_type"
                                                aria-label="Course type">
                                                <option value="Core"
                                                    {{ $course->course_type == 'Core' ? 'selected' : '' }}>Core
                                                </option>
                                                <option value="General"
                                                    {{ $course->course_type == 'General' ? 'selected' : '' }}>
                                                    General</option>
                                                <option value="Elective"
                                                    {{ $course->course_type == 'Elective' ? 'selected' : '' }}>
                                                    Elective</option>
                                                <option value="Optional"
                                                    {{ $course->course_type == 'Optional' ? 'selected' : '' }}>
                                                    Optional</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-end">
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
