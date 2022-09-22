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
                                        Create Exams
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Create Exam</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

                        @include('session-messages')
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="p-3 border bg-white shadow-sm">
                                    <h5>Create Exam</h5>
                                    <hr>
                                    <form class="row" action="{{ route('exam.create') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="session_id" value="{{ $current_school_session_id }}">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <p class="mt-2">Select Section:<sup><i
                                                        class="ri-asterisk text-primary"></i></sup>
                                            </p>
                                            <select class="form-select" name="semester_id">
                                                @isset($semesters)
                                                    @foreach ($semesters as $semester)
                                                        <option value="{{ $semester->id }}">
                                                            {{ $semester->semester_name }}
                                                        </option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <p class="mt-2">Select class:<sup><i
                                                        class="ri-asterisk text-primary"></i></sup>
                                            </p>
                                            <select onchange="getCourses(this);" class="form-select" name="class_id">
                                                @isset($classes)
                                                    <option selected disabled>Please select a class</option>
                                                    @foreach ($classes as $school_class)
                                                        <option value="{{ $school_class->id }}">
                                                            {{ $school_class->class_name }}
                                                        </option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <p class="mt-2">Select subject:<sup><i
                                                        class="ri-asterisk text-primary"></i></sup>
                                            </p>
                                            <select class="form-select" id="course-select" name="course_id">
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <p>Exam name<sup><i class="ri-asterisk text-primary"></i></sup>
                                            </p>
                                            <input type="text" class="form-control" name="exam_name"
                                                placeholder="Quiz, Assignment, Mid term, Final, ..."
                                                aria-label="Quiz, Assignment, Mid term, Final, ...">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <label for="inputStarts" class="form-label">Starts<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="datetime-local" class="form-control" id="inputStarts"
                                                name="start_date" placeholder="Starts">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <label for="inputEnds" class="form-label">Ends<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="datetime-local" class="form-control" id="inputEnds" name="end_date"
                                                placeholder="Ends">
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="mt-3 btn btn-primary px-3"> Create</button>
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
    <script>
        function getCourses(obj) {
            var class_id = obj.options[obj.selectedIndex].value;

            var url = "{{ route('get.sections.courses.by.classId') }}?class_id=" + class_id

            fetch(url)
                .then((resp) => resp.json())
                .then(function(data) {

                    var courseSelect = document.getElementById('course-select');
                    courseSelect.options.length = 0;
                    data.courses.unshift({
                        'id': 0,
                        'course_name': 'Please select a subject'
                    })
                    data.courses.forEach(function(course, key) {
                        courseSelect[key] = new Option(course.course_name, course.id);
                    });
                })
                .catch(function(error) {
                    console.log(error);
                });
        }
    </script>
@endsection
