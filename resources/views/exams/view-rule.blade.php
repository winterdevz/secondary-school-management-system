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
                                        <i class="ri-list-check btn btn-primary"></i>
                                        Exam Rules
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Exams</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Exam Rules</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="mb-4 bg-white border shadow-sm p-3">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Total Marks</th>
                                        <th scope="col">Pass Marks</th>
                                        <th scope="col">Marks Distribution Note</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exam_rules as $exam_rule)
                                        <tr>
                                            <td>{{ $exam_rule->total_marks }}</td>
                                            <td>{{ $exam_rule->pass_marks }}</td>
                                            <td>{{ $exam_rule->marks_distribution_note }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a type="button"
                                                        href="{{ route('exam.rule.edit', [
                                                            'exam_rule_id' => $exam_rule->id,
                                                        ]) }}"
                                                        class="btn btn-sm btn-outline-primary"><i class="bi bi-pen"></i>
                                                        Edit</a>
                                                    {{-- <button type="button" class="btn btn-sm btn-primary"><i class="bi bi-trash2"></i> Delete</button> --}}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
