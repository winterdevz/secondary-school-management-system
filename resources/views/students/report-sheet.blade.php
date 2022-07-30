<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receipt</title>
    <link rel="shortcut icon" href="{{ asset('favicon_io/favicon.ico') }}">
    <link rel="shortcut icon" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
    <link rel="shortcut icon" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('favicon_io/android-chrome-192x192.png') }}" sizes="192x192">
    <link rel="icon" href="{{ asset('favicon_io/android-chrome-512x512.png') }}" sizes="512x512">

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

{{-- This is just the structure of the receipt --}}

<body>
    {{-- <h3>Stucture of the Receipt</h3> --}}

    <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10 d-flex justify-content-center">
        <div class="row pt-2">
            <div class="col ps-4">
                <h1 class="display-6 mb-3 text-center">
                    <i class="bi bi-person-lines-fill"></i> Student Report
                </h1>


                <div class="mb-4">
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="card bg-light">
                                <div class="px-5 pt-2">
                                    @if (isset($report->student->photo))
                                        <img src="{{ asset('/storage' . $report->student->photo) }}"
                                            class="rounded-3 card-img-top" alt="Profile photo">
                                    @else
                                        <img src="{{ asset('imgs/profile.png') }}" class="rounded-3 card-img-top"
                                            alt="Profile photo">
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $report->student->first_name }}
                                        {{ $report->student->last_name }}
                                    </h5>
                                    <p class="card-text">#ID: {{ $promotion_info->id_card_number }}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Gender: {{ $report->student->gender }}</li>
                                    <li class="list-group-item">Phone: {{ $report->student->phone }}</li>
                                    {{-- <li class="list-group-item"><a href="#">View Marks &amp; Results</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-9">
                            <div class="p-3 mb-3 border rounded bg-white">
                                <h6>Student Information</h6>
                                <table class="table table-responsive mt-3">
                                    <tbody>
                                        <tr>
                                            <th scope="row">First Name:</th>
                                            <td>{{ $report->student->first_name }}</td>
                                            <th>Last Name:</th>
                                            <td>{{ $report->student->last_name }}</td>
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
                                            <td colspan="3">{{ $report->student->gender }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="p-3 mb-3 border rounded bg-white">
                                <h6>Parents' Information</h6>
                                <table class="table table-responsive mt-3">
                                    <tbody>
                                        <tr>
                                            <th scope="row">English Language:</th>
                                            @if ($report->english)
                                                <td>{{ $report->english }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                            <th>Mathematics:</th>
                                            @if ($report->mathematics)
                                                <td>{{ $report->mathematics }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif

                                        </tr>
                                        <tr>
                                            <th scope="row">Biology:</th>
                                            @if ($report->biology)
                                                <td>{{ $report->biology }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                            <th>Chemistry:</th>
                                            @if ($report->chemistry)
                                                <td>{{ $report->chemistry }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th scope="row">Physics:</th>
                                            @if ($report->physics)
                                                <td>{{ $report->physics }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                            <th>IRK:</th>
                                            @if ($report->irk)
                                                <td>{{ $report->irk }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th scope="row">CRK:</th>
                                            @if ($report->crk)
                                                <td>{{ $report->crk }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                            <th>Agricultural Science:</th>
                                            @if ($report->agric)
                                                <td>{{ $report->agric }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th scope="row">Literature:</th>
                                            @if ($report->lit)
                                                <td>{{ $report->lit }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                            <th>Economics:</th>
                                            @if ($report->economics)
                                                <td>{{ $report->economics }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th scope="row">Commerce:</th>
                                            @if ($report->commerce)
                                                <td>{{ $report->commerce }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                            <th>Government:</th>
                                            @if ($report->government)
                                                <td>{{ $report->government }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th scope="row">Geography:</th>
                                            @if ($report->geography)
                                                <td>{{ $report->geography }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                            <th>Accounting:</th>
                                            @if ($report->accountring)
                                                <td>{{ $report->accountring }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th scope="row">Yoruba Language:</th>
                                            @if ($report->yoruba)
                                                <td>{{ $report->yoruba }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                            <th>Computer:</th>
                                            @if ($report->computer)
                                                <td>{{ $report->computer }}</td>
                                            @else
                                                <td>Nil</td>
                                            @endif
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="p-3 mb-3 border rounded bg-white">
                                <h6>Academic Information</h6>
                                <table class="table table-responsive mt-3">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Class:</th>
                                            <td>{{ $promotion_info->section->schoolClass->class_name }}</td>
                                            <th>Board Reg. No.:</th>
                                            <td>{{ $report->student->academic_info->board_reg_no }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Section:</th>
                                            <td colspan="3">{{ $promotion_info->section->section_name }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>
