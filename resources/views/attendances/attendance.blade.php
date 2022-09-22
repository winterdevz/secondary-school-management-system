@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/fullcalendar5.9.0.min.css') }}">
    <script src="{{ asset('js/fullcalendar5.9.0.main.min.js') }}"></script>
    <div class="page-content mb-5">
        <div class="container-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="row ">
                    <div class="col ps-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h2 class="mb-sm-0">
                                        <i class="ri-calendar-line btn btn-primary"></i>
                                        View Attendance
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item">Student List</li>
                                            <li class="breadcrumb-item active" aria-current="page">View Attendance</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <h5 class="text-capitalize"><i class="ri-user-line text-primary"></i> Student Name:
                            {{ $student->first_name }}
                            {{ $student->last_name }}</h5>
                        <div class="row mt-3">
                            <div class="col bg-white p-3 border shadow-sm">
                                <div id="attendanceCalendar"></div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col bg-white border shadow-sm p-3">
                                <table class="table table-sm table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Context</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attendances as $attendance)
                                            <tr>
                                                <td>
                                                    @if ($attendance->status == 'on')
                                                        <span class="badge bg-success">PRESENT</span>
                                                    @else
                                                        <span class="badge bg-danger">ABSENT</span>
                                                    @endif

                                                </td>
                                                <td>{{ $attendance->created_at }}</td>
                                                <td>{{ $attendance->section == null ? $attendance->course->course_name : $attendance->section->section_name }}
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
    </div>
    @php
        $events = [];
        if (count($attendances) > 0) {
            foreach ($attendances as $attendance) {
                if ($attendance->status == 'on') {
                    $events[] = ['title' => 'Present', 'start' => $attendance->created_at, 'color' => 'green'];
                } else {
                    $events[] = ['title' => 'Absent', 'start' => $attendance->created_at, 'color' => 'red'];
                }
            }
        }
    @endphp
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('attendanceCalendar');
            var attEvents = @json($events);

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                height: 350,
                events: attEvents,
            });
            calendar.render();
        });
    </script>
@endsection
