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
                                        <i class="ri-user-line btn btn-primary"></i>
                                        Student Profile
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row">
                                <div class="col-sm-4 col-md-3">
                                    <div class="card bg-light">
                                        <div class="pt-2 d-flex justify-content-center">
                                            @if (isset($student->photo))
                                                <img src="{{ asset('/storage' . $student->photo) }}"
                                                    class="rounded-3 card-img-top" alt="Profile photo"
                                                    style="height: 8rem; width: 8rem">
                                            @else
                                                <img src="{{ asset('imgs/profile.png') }}" class="rounded-3 card-img-top"
                                                    alt="Profile photo">
                                            @endif
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-capitalize">
                                                {{ $student->first_name }}
                                                {{ $student->last_name }}</h5>
                                            <p class="card-title">#ID:
                                                {{ $promotion_info->id_card_number }}</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Gender: {{ $student->gender }}
                                            </li>
                                            <li class="list-group-item">Phone: {{ $student->phone }}
                                            </li>
                                            {{-- <li class="list-group-item"><a href="#">View Marks &amp; Results</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-9">
                                    <div class="p-3 mb-3 border rounded bg-white">
                                        <h5>Student Information</h5>
                                        <hr>
                                        <table class="table table-responsive mt-3">

                                            @php
                                                $total_attended = \App\Models\Attendance::where('student_id', Auth::user()->id)
                                                    ->where('session_id', $promotion_info->session_id)
                                                    ->count();
                                            @endphp
                                            <tbody>

                                                <tr>
                                                    <th scope="row" class="text-capitalize">First
                                                        Name:</th>
                                                    <td class="text-capitalize">
                                                        {{ $student->first_name }}</td>
                                                    <th>Last Name:</th>
                                                    <td class="text-capitalize">
                                                        {{ $student->last_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email:</th>
                                                    <td>{{ $student->email }}</td>
                                                    <th>Birthday:</th>
                                                    <td>{{ $student->birthday }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nationality:</th>
                                                    <td>{{ $student->nationality }}</td>
                                                    <th>Religion:</th>
                                                    <td>{{ $student->religion }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Address:</th>
                                                    <td>{{ $student->address }}</td>
                                                    <th>Address2:</th>
                                                    <td>{{ $student->address2 }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">City:</th>
                                                    <td>{{ $student->city }}</td>
                                                    <th>Zip:</th>
                                                    <td>{{ $student->zip }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Blood Type:</th>
                                                    <td>{{ $student->blood_type }}</td>
                                                    <th>Phone:</th>
                                                    <td>{{ $student->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Gender:</th>
                                                    <td colspan="3">{{ $student->gender }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="p-3 mb-3 border rounded bg-white">
                                        <h5>Parents' Information</h5>
                                        <hr>
                                        <table class="table table-responsive mt-3">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Father's Name:</th>
                                                    <td class="text-capitalize">
                                                        {{ $student->parent_info->father_name }}
                                                    </td>
                                                    <th>Mother's Name:</th>
                                                    <td class="text-capitalize">
                                                        {{ $student->parent_info->mother_name }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Father's Phone:</th>
                                                    <td>{{ $student->parent_info->father_phone }}</td>
                                                    <th>Mother's Phone:</th>
                                                    <td>{{ $student->parent_info->mother_phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Address:</th>
                                                    <td colspan="3">
                                                        {{ $student->parent_info->parent_address }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="p-3 mb-3 border rounded bg-white">
                                        <h5>Academic Information</h5>
                                        <hr>
                                        <table class="table table-responsive mt-3">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Class:</th>
                                                    <td>{{ $promotion_info->section->schoolClass->class_name }}
                                                    </td>
                                                    <th>Board Reg. No.:</th>
                                                    <td>{{ $student->academic_info->board_reg_no }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Section:</th>
                                                    <td colspan="">
                                                        {{ $promotion_info->section->section_name }}
                                                    </td>
                                                    <th scope="row">Punctuality:</th>
                                                    <td colspan=""> {{ $total_attended }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
