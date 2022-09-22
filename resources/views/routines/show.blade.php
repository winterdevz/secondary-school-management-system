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
                                        <i class="ri-building-line btn btn-primary"></i>
                                        Routine
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Classes</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Section Routine</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @php
                            function getDayName($weekday)
                            {
                                if ($weekday == 1) {
                                    return 'MONDAY';
                                } elseif ($weekday == 2) {
                                    return 'TUESDAY';
                                } elseif ($weekday == 3) {
                                    return 'WEDNESDAY';
                                } elseif ($weekday == 4) {
                                    return 'THURSDAY';
                                } elseif ($weekday == 5) {
                                    return 'FRIDAY';
                                } elseif ($weekday == 6) {
                                    return 'SATURDAY';
                                } elseif ($weekday == 7) {
                                    return 'SUNDAY';
                                } else {
                                    return 'Noday';
                                }
                            }
                        @endphp
                        @if (count($routines) > 0)
                            <div class="bg-white p-3 border shadow-sm">
                                <table class="table table-bordered text-center">
                                    </thead>
                                    <tbody>
                                        @foreach ($routines as $day => $courses)
                                            <tr>
                                                <th>{{ getDayName($day) }}</th>
                                                @php
                                                    $courses = $courses->sortBy('start');
                                                @endphp
                                                @foreach ($courses as $course)
                                                    <td>
                                                        <span>{{ $course->course->course_name }}</span>
                                                        <div>{{ $course->start }} - {{ $course->end }}</div>
                                                    </td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="p-3 bg-white border shadow-sm">No routine.</div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
