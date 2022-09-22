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
                                        Add Exam Rule
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Exams</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Add Exam Rule</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @include('session-messages')
                        <div class="row">
                            <div class="col-5 mb-4">
                                <div class="p-3 border bg-white shadow-sm">
                                    <form action="{{ route('exam.rule.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="exam_id" value="{{ $exam_id }}">
                                        <input type="hidden" name="session_id" value="{{ $current_school_session_id }}">
                                        <div class="mt-2">
                                            <label for="inputTotalMarks" class="form-label">Total
                                                Marks<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="inputTotalMarks"
                                                placeholder="10, 100, ..." name="total_marks" step="0.01">
                                        </div>
                                        <div class="mt-2">
                                            <label for="inputPassMarks" class="form-label">Pass
                                                Marks<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="inputPassMarks"
                                                placeholder="5, 33, ..." name="pass_marks" step="0.01">
                                        </div>
                                        <div class="mt-2">
                                            <label for="inputMarksDistributionNote" class="form-label">Marks Distribution
                                                Note<sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                            <textarea class="form-control" id="inputMarksDistributionNote" rows="3" placeholder="Written: 7, MCQ: 3, ..."
                                                name="marks_distribution_note"></textarea>
                                        </div>
                                        <button type="submit" class="mt-3 btn  btn-primary w-100"><i
                                                class="bi bi-plus"></i> Add</button>
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
