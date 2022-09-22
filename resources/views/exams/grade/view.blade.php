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
                                        View Grading Systems
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">View Grading Systems</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="mb-4 p-3 bg-white border shadow-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">System Name</th>
                                        <th scope="col">Class</th>
                                        <th scope="col">Section</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($gradingSystems)
                                        @foreach ($gradingSystems as $gradingSystem)
                                            <tr>
                                                <td>{{ $gradingSystem->system_name }}</td>
                                                <td>{{ $gradingSystem->schoolClass->class_name }}</td>
                                                <td>{{ $gradingSystem->semester->semester_name }}</td>
                                                <td>{{ $gradingSystem->created_at }}</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('exam.grade.system.rule.create', ['grading_system_id' => $gradingSystem->id]) }}"
                                                            role="button" class="btn btn-sm btn-outline-primary"><i
                                                                class="bi bi-plus"></i> Add Rule</a>
                                                        <a href="{{ route('exam.grade.system.rule.show', ['grading_system_id' => $gradingSystem->id]) }}"
                                                            role="button" class="btn btn-sm btn-outline-primary"><i
                                                                class="bi bi-eye"></i> View Rules</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
