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
                                        <i class="ri-contacts-line btn btn-primary"></i>
                                        Teacher
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('teacher.list.show') }}">Teacher
                                                    List</a></li>
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
                                        <div class="text-center pt-2">
                                            @if (isset($teacher->photo))
                                                <img src="{{ asset('/storage' . $teacher->photo) }}"
                                                    class="rounded-3 card-img-top" alt="Profile photo"
                                                    style="height: 10rem; width: 10rem">
                                            @else
                                                <img src="{{ asset('imgs/profile.png') }}" class="rounded-3 card-img-top"
                                                    alt="Profile photo">
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $teacher->first_name }}
                                                {{ $teacher->last_name }}</h5>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Gender: {{ $teacher->gender }}
                                            </li>
                                            <li class="list-group-item">Phone: {{ $teacher->phone }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-md-9">
                                    <div class="p-3 mb-3 border rounded bg-white">
                                        <h5>Teacher Information</h5>
                                        <hr>
                                        <table class="table table-responsive mt-3">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">First Name:</th>
                                                    <td class="text-capitalize">{{ $teacher->first_name }}</td>
                                                    <th>Last Name:</th>
                                                    <td class="text-capitalize">{{ $teacher->last_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email:</th>
                                                    <td>{{ $teacher->email }}</td>
                                                    <th scope="row">Nationality:</th>
                                                    <td>{{ $teacher->nationality }}</td>
                                                </tr>
                                                <tr>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Address:</th>
                                                    <td>{{ $teacher->address }}</td>
                                                    <th>Address2:</th>
                                                    <td>{{ $teacher->address2 }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">City:</th>
                                                    <td>{{ $teacher->city }}</td>
                                                    <th>Zip:</th>
                                                    <td>{{ $teacher->zip }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Phone:</th>
                                                    <td>{{ $teacher->phone }}</td>
                                                    <th>Gender:</th>
                                                    <td>{{ $teacher->gender }}</td>
                                                </tr>
                                                <tr>
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
