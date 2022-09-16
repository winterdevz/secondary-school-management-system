@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            @include('layouts.left-menu')
            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
                <div class="row pt-2">
                    <div class="col ps-4">
                        <h1 class="display-6 mb-3">
                            <i class="bi bi-person-lines-fill"></i> Make Student Report
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Student</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Report Sheet</li>
                            </ol>
                        </nav>

                        @include('session-messages')
                        <div class="mb-4">
                            <form action="{{ route('check.email') }}" method="POST">
                                @csrf
                                <h3>Check if student is available:</h3>
                                <div class="col-3">
                                    <label for="inputEmail4" class="form-label">Email<sup><i
                                                class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="email" class="form-control" id="inputEmail4" name="email" required>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-sm btn-outline-primary"><i
                                                class="bi bi-person-check"></i> Check</button>
                                    </div>
                                </div>
                            </form>
                            <div>
                                <hr>
                            </div>
                            @isset($check)
                                <form class="row g-3" action="{{ url('student/store-scores') }}" method="POST">
                                    @csrf

                                    <div class="row g-3">
                                        <div class="col-3">
                                            <label for="englishlanguage" class="form-label">English Language<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="englishlanguage" name="eng_lang"
                                                placeholder="10, 100, ..." required>
                                        </div>
                                        <div class="col-3">
                                            <label for="mathematics" class="form-label">Mathematics<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="mathematics" name="mathematics"
                                                placeholder="10, 100, ..." required>
                                        </div>
                                        <div class="col-3">
                                            <label for="literature" class="form-label">Literature<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="literature" name="literature"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="economics" class="form-label">Economics<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="economics" name="economics"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="Commerce" class="form-label">Commerce<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="Commerce" name="Commerce"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="CRS" class="form-label">CRS<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="CRS" name="CRS"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="IRK" class="form-label">IRK<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="IRK" name="IRK"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="yoruba" class="form-label">Yoruba Language<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="yoruba" name="yoruba"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="government" class="form-label">Government<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="government" name="government"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="computer" class="form-label">Computer<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="computer" name="computer"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="civic_education" class="form-label">Civic Education<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="civic_education"
                                                name="civic_education" placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="chemistry" class="form-label">Chemistry<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="chemistry" name="chemistry"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="biology" class="form-label">Biology<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="biology" name="biology"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="physics" class="form-label">Physics<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="physics" name="physics"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="geography" class="form-label">Geography<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="geography" name="geography"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="agricScience" class="form-label">Agricultural Science<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="agricScience" name="agricScience"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="col-3">
                                            <label for="accounting" class="form-label">Accounting<sup><i
                                                        class="bi bi-asterisk text-primary"></i></sup></label>
                                            <input type="number" class="form-control" id="accounting" name="accounting"
                                                placeholder="10, 100, ...">
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-sm btn-outline-primary"><i
                                                        class="bi bi-person-check"></i> Add</button>
                                            </div>
                                        </div>
                                </form>
                            @endisset
                        </div>
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>
    @include('components.photos.photo-input')
@endsection
