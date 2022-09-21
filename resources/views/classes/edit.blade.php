@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
    <div class="row">
        
        <div class="col-12">
            <div class="row">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    
                    <h4 class="display-6 mb-3"><i class="bi bi-diagram-2"></i> Edit Class</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url()->previous()}}">Classes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Class</li>
                        </ol>
                    </div>
</div>
</div>
                  
                    <div class="row">
                    @include('session-messages')
                        <div class="card">
                        <div class="card-body">
                        <form class="col-6" action="{{route('school.class.update')}}" method="POST">
                            @csrf
                            <input type="hidden" name="session_id" value="{{$current_school_session_id}}">
                            <input type="hidden" name="class_id" value="{{$class_id}}">
                            <div class="mb-3">
                                <label for="class_name" class="form-label">Class Name</label>
                                <input class="form-control" id="class_name" name="class_name" type="text" value="{{$schoolClass->class_name}}">
                            </div>
                            <button type="submit" class="btn btn-outline-primary"><i class="bi bi-check2"></i> Save</button>
                        </form>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>
@endsection