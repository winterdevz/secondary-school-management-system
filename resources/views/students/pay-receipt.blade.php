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

    <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
        <div class="row pt-2">
            <div class="col ps-4">
                <h1 class="display-6 mb-3">
                    <i class="bi bi-person-lines-fill"></i> Student List
                </h1>


                <div class="mb-4 mt-4">
                    <div class="bg-white border shadow-sm p-3 mt-4">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount to pay</th>
                                    <th>Amount paid</th>
                                    <th>Payment method</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th>{{ $student->first_name }} {{ $student->last_name }}</th>
                                    <th>{{ $payment_id->amount2pay }}</th>
                                    <th>{{ $receipt }}</th>
                                    <th>{{ $payment_id->payment_type }}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>
