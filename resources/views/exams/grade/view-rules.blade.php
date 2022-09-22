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
                                        View Grading Rule
                                    </h2>
                                </div>
                            </div>
                        </div>

                        @include('session-messages')
                        <div class="mb-4 mt-4 bg-white">
                            <table class="table mt-4">
                                <thead>
                                    <tr>
                                        <th scope="col">System Name</th>
                                        <th scope="col">Points</th>
                                        <th scope="col">Grade</th>
                                        <th scope="col">Starts At</th>
                                        <th scope="col">Ends At</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($gradeRules)
                                        @foreach ($gradeRules as $gradeRule)
                                            <tr>
                                                <td>{{ $gradeRule->gradingSystem->system_name }}</td>
                                                <td>{{ $gradeRule->point }}</td>
                                                <td>{{ $gradeRule->grade }}</td>
                                                <td>{{ $gradeRule->start_at }}</td>
                                                <td>{{ $gradeRule->end_at }}</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="{{ route('exam.grade.system.rule.delete') }}" role="button"
                                                            class="btn btn-sm btn-primary"
                                                            onclick="event.preventDefault();
                                                     document.getElementById('delete-form-{{ $gradeRule->id }}').submit();"><i
                                                                class="bi bi-trash2"></i> Delete</a>
                                                        <form id="delete-form-{{ $gradeRule->id }}"
                                                            action="{{ route('exam.grade.system.rule.delete') }}" method="POST"
                                                            class="d-none">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $gradeRule->id }}">
                                                        </form>
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
