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
                                        <i class="ri-play-list-add-line btn btn-primary"></i>
                                        Create Grading System
                                    </h2>
                                </div>
                            </div>
                        </div>

                        @include('session-messages')
                        <div class="row">
                            <div class="col-md-5 mb-4">

                                <div class="p-3  shadow-sm bg-white">
                                    <form action="{{ route('exam.grade.system.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="session_id" value="{{ $current_school_session_id }}">
                                        <div>
                                            <p class="mt-2">Select class:<sup><i
                                                        class="ri-asterisk text-primary"></i></sup>
                                            </p>
                                            <select class="form-select" name="class_id" required>
                                                @isset($school_classes)
                                                    @foreach ($school_classes as $school_class)
                                                        <option value="{{ $school_class->id }}">
                                                            {{ $school_class->class_name }}</option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                        <div>
                                            <p class="mt-2">Select semester:<sup><i
                                                        class="ri-asterisk text-primary"></i></sup>
                                            </p>
                                            <select class="form-select" aria-label=".form-select-sm" name="semester_id"
                                                required>
                                                @isset($semesters)
                                                    @foreach ($semesters as $semester)
                                                        <option value="{{ $semester->id }}"
                                                            {{ $semester->id === request()->query('semester_id') ? 'selected' : '' }}>
                                                            {{ $semester->semester_name }}</option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                        <div class="mt-2">
                                            <p>Grading System name<sup><i class="ri-asterisk text-primary"></i></sup>
                                            </p>
                                            <input type="text" class="form-control" placeholder="Grading System 1"
                                                aria-label="Grading System 1" name="system_name" required>
                                        </div>
                                        <button type="submit" class="mt-3 btn  btn-primary w-100"><i
                                                class="bi bi-check2"></i> Create</button>
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
