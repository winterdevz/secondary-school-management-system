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
                                        <i class="ri-file-add-line btn btn-primary"></i>
                                        Add Grading Rule
                                    </h2>

                                </div>
                            </div>
                        </div>

                        @include('session-messages')
                        <div class="row">
                            <div class="col-5 mb-4">
                                <div class="p-3 border bg-white">
                                    <form action="{{ route('exam.grade.system.rule.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="grading_system_id" value="{{ $grading_system_id }}">
                                        <input type="hidden" name="session_id" value="{{ $current_school_session_id }}">
                                        <div class="mt-2">
                                            <label for="inputPoint" class="form-label">Point<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="number" step="0.01" name="point" class="form-control"
                                                id="inputPoint" placeholder="3.5, 4.0, ...">
                                        </div>
                                        <div class="mt-2">
                                            <label for="inputGrade" class="form-label">Grade<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" name="grade" class="form-control" id="inputGrade"
                                                placeholder="A+, A-, ...">
                                        </div>
                                        <div class="mt-2">
                                            <label for="inputStarts" class="form-label">Starts<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="number" step="0.01" name="start_at" class="form-control"
                                                id="inputStarts" placeholder="90, 85, ...">
                                        </div>
                                        <div class="mt-2">
                                            <label for="inputEnds" class="form-label">Ends<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="number" step="0.01" name="end_at" class="form-control"
                                                id="inputEnds" placeholder="100, 89, ...">
                                        </div>
                                        <button type="submit" class="mt-3 btn btn-primary w-100">
                                            Add</button>
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
