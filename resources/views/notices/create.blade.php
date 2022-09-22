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
                                        <i class="ri-attachment-2 btn btn-primary"></i>
                                        Create Notice
                                    </h2>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Create Notice</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

                        @include('session-messages')
                        <div class="row">
                            <form action="{{ route('notice.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="session_id" value="{{ $current_school_session_id }}">
                                @include('components.ckeditor.editor', [
                                    'name' => 'notice',
                                ])
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary px-3">
                                        Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
