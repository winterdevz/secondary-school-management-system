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
                                        Exams
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Exam</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <h6>Filter list by:</h6>
                        <div class="mb-4 mt-4">
                            <form action="{{ route('exam.list.show') }}" method="GET">
                                <div class="row">
                                    <div class="col-3">
                                        <select class="form-select" aria-label="Class" name="class_id">
                                            @isset($classes)
                                                @foreach ($classes as $school_class)
                                                    <option value="{{ $school_class->id }}">
                                                        {{ $school_class->class_name }}
                                                    </option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <select class="form-select" aria-label="Status" name="semester_id">
                                            @isset($semesters)
                                                @foreach ($semesters as $semester)
                                                    <option value="{{ $semester->id }}">
                                                        {{ $semester->semester_name }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="bi bi-arrow-counterclockwise"></i> Load
                                            List</button>
                                    </div>
                                </div>
                            </form>
                            <div class="bg-white mt-4 p-3 border shadow-sm">
                                <h5>Exam Details</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Created at</th>
                                            <th scope="col">Starts</th>
                                            <th scope="col">Ends</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($exams as $exam)
                                            @if (Auth::user()->role == 'admin')
                                                <tr>
                                                    <td>{{ $exam->exam_name }}</td>
                                                    <td>{{ $exam->course->course_name }}</td>
                                                    <td>{{ $exam->created_at }}</td>
                                                    <td>{{ $exam->start_date }}</td>
                                                    <td>{{ $exam->end_date }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group">
                                                            <a href="{{ route('exam.rule.create', ['exam_id' => $exam->id]) }}"
                                                                role="button" class="btn btn-sm btn-outline-primary"><i
                                                                    class="bi bi-plus"></i> Add Rule</a>
                                                            <a href="{{ route('exam.rule.show', ['exam_id' => $exam->id]) }}"
                                                                role="button" class="btn btn-sm btn-outline-primary"><i
                                                                    class="bi bi-eye"></i> View Rule</a>
                                                            {{-- <a href="{{route('exam.edit', ['exam_id' => $exam->id])}}" role="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-pen"></i> Edit</a> --}}
                                                            {{-- <a href="{{route('exam.delete')}}" role="button" class="btn btn-sm btn-primary" onclick="event.preventDefault();
                                                        document.getElementById('exam-delete-form-{{$exam->id}}').submit();"><i class="bi bi-trash2"></i> Delete</a>
                                                    <form id="exam-delete-form-{{$exam->id}}" action="{{ route('exam.delete') }}" method="POST" class="d-none">
                                                        @csrf
                                                        <input type="hidden" name="exam_id" value="{{$exam->id}}">
                                                    </form> --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @elseif(Auth::user()->role == 'teacher')
                                                @foreach ($teacher_courses as $teacher_course)
                                                    @if ($exam->course->id != $teacher_course->course_id)
                                                        @continue
                                                    @else
                                                        <tr>
                                                            <td>{{ $exam->exam_name }}</td>
                                                            <td>{{ $exam->course->course_name }}</td>
                                                            <td>{{ $exam->created_at }}</td>
                                                            <td>{{ $exam->start_date }}</td>
                                                            <td>{{ $exam->end_date }}</td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <a href="{{ route('exam.rule.create', ['exam_id' => $exam->id]) }}"
                                                                        role="button"
                                                                        class="btn btn-sm btn-outline-primary"><i
                                                                            class="bi bi-plus"></i> Add
                                                                        Rule</a>
                                                                    <a href="{{ route('exam.rule.show', ['exam_id' => $exam->id]) }}"
                                                                        role="button"
                                                                        class="btn btn-sm btn-outline-primary"><i
                                                                            class="bi bi-eye"></i> View
                                                                        Rule</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
