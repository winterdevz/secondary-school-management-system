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
                                        Edit Section
                                    </h2>
                                </div>
                            </div>
                        </div>
                        @include('session-messages')
                        <div class="card col-6">
                            <div class="card-body">
                                <form class="" action="{{ route('school.section.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="session_id" value="{{ $current_school_session_id }}">
                                    <input type="hidden" name="section_id" value="{{ $section_id }}">
                                    <div class="mb-3">
                                        <label for="section_name" class="form-label">Section Name</label>
                                        <input class="form-control" id="section_name" name="section_name" type="text"
                                            value="{{ $section->section_name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="room_no" class="form-label">Room number</label>
                                        <input class="form-control" id="room_no" name="room_no" type="text"
                                            value="{{ $section->room_no }}">
                                    </div>
                                    <div class="d-flex justify-content-end">

                                        <button type="submit" class="btn btn-primary"><i class="bi bi-check2"></i>
                                            Save</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
