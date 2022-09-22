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
                                        Student Report
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Student Profile</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-sm-4 col-md-3">
                                    <div class="card bg-light">
                                        <div class="px-2 pt-2 text-center">
                                            @if (isset($report->student->photo))
                                                <img src="{{ asset('/storage' . $report->student->photo) }}"
                                                    class="rounded-3 card-img-top" alt="Profile photo"
                                                    style="height: 8rem; width:8rem">
                                            @else
                                                <img src="{{ asset('imgs/profile.png') }}" class="rounded-3 card-img-top"
                                                    alt="Profile photo">
                                            @endif
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-capitalize">
                                                {{ $report->student->first_name }}
                                                {{ $report->student->last_name }}
                                            </h5>
                                            <p class="card-text">#ID:
                                                {{ $promotion_info->id_card_number }}</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Gender:
                                                {{ $report->student->gender }}</li>
                                            <li class="list-group-item">Phone:
                                                {{ $report->student->phone }}</li>
                                            {{-- <li class="list-group-item"><a href="#">View Marks &amp; Results</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="row col-sm-8 col-md-9">
                                    <div class="p-3 mb-3 border rounded bg-white">
                                        <h5>Student Information</h5>
                                        <hr>
                                        <table class="table table-responsive mt-3">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">First Name:</th>
                                                    <td class="text-capitalize">
                                                        {{ $report->student->first_name }}</td>
                                                    <th>Last Name:</th>
                                                    <td class="text-capitalize">
                                                        {{ $report->student->last_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email:</th>
                                                    <td>{{ $report->student->email }}</td>
                                                    <th>Birthday:</th>
                                                    <td>{{ $report->student->birthday }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Nationality:</th>
                                                    <td>{{ $report->student->nationality }}</td>
                                                    <th>Religion:</th>
                                                    <td>{{ $report->student->religion }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Address:</th>
                                                    <td>{{ $report->student->address }}</td>
                                                    <th>Address2:</th>
                                                    <td>{{ $report->student->address2 }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">City:</th>
                                                    <td>{{ $report->student->city }}</td>
                                                    <th>Zip:</th>
                                                    <td>{{ $report->student->zip }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Blood Type:</th>
                                                    <td>{{ $report->student->blood_type }}</td>
                                                    <th>Phone:</th>
                                                    <td>{{ $report->student->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Gender:</th>
                                                    <td colspan="3">{{ $report->student->gender }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="p-3 mb-3 border rounded bg-white col-lg-6 col-md-12">
                                        <h5>Subjects</h5>
                                        <hr>
                                        <table class="table table-responsive mt-3">
                                            <tbody>
                                                <tr>
                                                    @if ($report->english)
                                                        <th scope="row">English Language:</th>
                                                        <td>{{ $report->english }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->mathematics)
                                                        <th>Mathematics:</th>
                                                        <td>{{ $report->mathematics }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->biology)
                                                        <th scope="row">Biology:</th>
                                                        <td>{{ $report->biology }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->chemistry)
                                                        <th>Chemistry:</th>
                                                        <td>{{ $report->chemistry }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->physics)
                                                        <th scope="row">Physics:</th>
                                                        <td>{{ $report->physics }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->irk)
                                                        <th>IRK:</th>
                                                        <td>{{ $report->irk }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->crk)
                                                        <th scope="row">CRK:</th>
                                                        <td>{{ $report->crk }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->agric)
                                                        <th>Agricultural Science:</th>
                                                        <td>{{ $report->agric }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->lit)
                                                        <th scope="row">Literature:</th>
                                                        <td>{{ $report->lit }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->economics)
                                                        <th>Economics:</th>
                                                        <td>{{ $report->economics }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->commerce)
                                                        <th scope="row">Commerce:</th>
                                                        <td>{{ $report->commerce }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->government)
                                                        <th>Government:</th>
                                                        <td>{{ $report->government }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->geography)
                                                        <th scope="row">Geography:</th>
                                                        <td>{{ $report->geography }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->accountring)
                                                        <th>Accounting:</th>
                                                        <td>{{ $report->accountring }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->yoruba)
                                                        <th scope="row">Yoruba Language:</th>
                                                        <td>{{ $report->yoruba }}</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($report->computer)
                                                        <th>Computer:</th>
                                                        <td>{{ $report->computer }}</td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="p-3  mb-3 border rounded bg-white col-lg-6 col-md-12">
                                        <h5>Academic Information</h5>
                                        <hr>
                                        <table class="table table-responsive mt-3">
                                            @php
                                                $total_attended = \App\Models\Attendance::where('student_id', Auth::user()->id)
                                                    ->where('session_id', $promotion_info->session_id)
                                                    ->count();
                                            @endphp
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Class:</th>
                                                    <td>{{ $promotion_info->section->schoolClass->class_name }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Board Reg. No.:</th>
                                                    <td>{{ $report->student->academic_info->board_reg_no }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Section:</th>
                                                    <td colspan="">
                                                        {{ $promotion_info->section->section_name }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Punctuality:</th>
                                                    <td colspan="">{{ $total_attended }}</td>
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
