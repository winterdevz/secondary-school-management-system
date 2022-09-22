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
                                        Teacher List
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Teacher List</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 p-3 card bg-white border shadow-sm">
                            <table class="table table-responsive">
                                <h4>Teacher's Table</h4>
                                <hr>
                                <thead>
                                    <tr>
                                        <th scope="col">Photo</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $teacher)
                                        <tr>
                                            <td>
                                                @if (isset($teacher->photo))
                                                    <img src="{{ asset('/storage' . $teacher->photo) }}" class="rounded"
                                                        alt="Profile picture" height="30" width="30">
                                                @else
                                                    <i class="bi bi-person-square"></i>
                                                @endif
                                            </td>
                                            <td class="text-capitalize">{{ $teacher->first_name }}</td>
                                            <td class="text-capitalize">{{ $teacher->last_name }}</td>
                                            <td>{{ $teacher->email }}</td>
                                            <td>{{ $teacher->phone }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ url('teachers/view/profile/' . $teacher->id) }}"
                                                        role="button" class="btn btn-sm btn-outline-primary"><i
                                                            class="bi bi-eye"></i> Profile</a>
                                                    @can('edit users')
                                                        <a href="{{ route('teacher.edit.show', ['id' => $teacher->id]) }}"
                                                            role="button" class="btn btn-sm btn-outline-primary"><i
                                                                class="bi bi-pen"></i> Edit</a>
                                                    @endcan
                                                    {{-- <button type="button" class="btn btn-sm btn-primary"><i class="bi bi-trash2"></i> Delete</button> --}}
                                                </div>
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
@endsection
