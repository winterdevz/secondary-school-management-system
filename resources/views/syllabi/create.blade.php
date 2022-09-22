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
                                        <i class="ri-archive-line btn btn-primary"></i>
                                        Create Syllabus
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Create Syllabus</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>


                        @include('session-messages')
                        <div class="p-3 border bg-white shadow-sm">
                            <form action="{{ route('syllabus.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="session_id" value="{{ $current_school_session_id }}">
                                <div class="mb-3">
                                    <p>Add Syllabus to class:</p>
                                    <select onchange="getCourses(this);" class="form-select" name="class_id" required>
                                        @isset($school_classes)
                                            <option selected disabled>Please select a class</option>
                                            @foreach ($school_classes as $school_class)
                                                <option value="{{ $school_class->id }}">
                                                    {{ $school_class->class_name }}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <p class="mb-2">Select subject:<sup><i class="ri-asterisk text-primary"></i></sup>
                                    </p>
                                    <select class="form-select" id="course-select" name="course_id">
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="syllabus-name" class="form-label">Syllabus Name</label>
                                    <input type="text" class="form-control" id="syllabus-name" name="syllabus_name"
                                        placeholder="Syllabus Name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="syllabus-file" class="form-label">Syllabus File</label>
                                    <input type="file" name="file" class="form-control" id="syllabus-file"
                                        accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip"
                                        required>
                                </div>
                                <div class="mb-4 d-flex justify-content-lg-end">
                                    <button type="submit" class="btn btn-primary px-4">
                                        Create</button>
                                </div>
                            </form>
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
