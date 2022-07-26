<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

{{-- This is just the structure of the receipt --}}

<body>
    <h3>Stucture of the Receipt</h3>

    <div>
        <table>
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

</body>

</html>
