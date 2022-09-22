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
                                        Create Events
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Create Events</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row bg-white p-4 shadow-sm">
                            @include('components.events.event-calendar', [
                                'editable' => 'true',
                                'selectable' => 'true',
                            ])
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
