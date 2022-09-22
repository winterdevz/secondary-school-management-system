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
                                        <i class="ri-calendar-2-line btn btn-primary"></i>
                                        Create Routine
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Create Routine</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

                        @include('session-messages')
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="p-3 border bg-white shadow-sm">
                                    <form class="row" action="{{ route('section.routine.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="session_id" value="{{ $current_school_session_id }}">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <p class="mt-2">Select class:<sup><i
                                                        class="ri-asterisk text-primary"></i></sup>
                                            </p>
                                            <select onchange="getSectionsAndCourses(this);" class="form-select"
                                                name="class_id" required>
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
                                            <p class="mt-2">Select section:<sup><i
                                                        class="ri-asterisk text-primary"></i></sup>
                                            </p>
                                            <select class="form-select" id="section-select" name="section_id" required>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <p class="mt-2">Select subject:<sup><i
                                                        class="ri-asterisk text-primary"></i></sup>
                                            </p>
                                            <select class="form-select" id="course-select" name="course_id" required>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <p>Week Day<sup><i class="ri-asterisk text-primary"></i></sup>
                                            </p>
                                            <select class="form-select" id="course-select" name="weekday" required>
                                                <option value="1">Monday</option>
                                                <option value="2">Tuesday</option>
                                                <option value="3">Wednesday</option>
                                                <option value="4">Thursday</option>
                                                <option value="5">Friday</option>
                                                <option value="6">Saturday</option>
                                                <option value="7">Sunday</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <label for="inputStarts" class="form-label">Starts<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputStarts" name="start"
                                                placeholder="09:00am" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                                            <label for="inputEnds" class="form-label">Ends<sup><i
                                                        class="ri-asterisk text-primary"></i></sup></label>
                                            <input type="text" class="form-control" id="inputEnds" name="end"
                                                placeholder="09:50am" required>
                                        </div>
                                        <div class="mt-2 d-flex justify-content-end">
                                            <button type="submit" class="mt-3 btn btn-primary px-4"><i
                                                    class="bi bi-check2"></i> Create</button>
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
        function getSectionsAndCourses(obj) {
            var class_id = obj.options[obj.selectedIndex].value;

            var url = "{{ route('get.sections.courses.by.classId') }}?class_id=" + class_id

            fetch(url)
                .then((resp) => resp.json())
                .then(function(data) {
                    var sectionSelect = document.getElementById('section-select');
                    sectionSelect.options.length = 0;
                    data.sections.unshift({
                        'id': 0,
                        'section_name': 'Please select a section'
                    })
                    data.sections.forEach(function(section, key) {
                        sectionSelect[key] = new Option(section.section_name, section.id);
                    });

                    var courseSelect = document.getElementById('course-select');
                    courseSelect.options.length = 0;
                    data.courses.unshift({
                        'id': 0,
                        'course_name': 'Please select a course'
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
