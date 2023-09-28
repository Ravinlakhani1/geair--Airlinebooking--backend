<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket</title>
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> --}}
    <style>
        * {
            font-family: sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Styles for the "container" class */
        .container {
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
        }

        /* Styles for the "row" class */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        /* Styles for the "col-6" class */
        .col-6 {
            flex: 0 0 50%;
            max-width: 50%;
            padding-right: 15px;
            padding-left: 15px;
        }

        /* Styles for the "col-12" class */
        .col-12 {
            flex: 0 0 100%;
            max-width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        /* Styles for the "fw-bold" class */
        .fw-bold {
            font-weight: bold;
        }

        /* Styles for the "mb-0" class */
        .mb-0 {
            margin-bottom: 0 !important;
        }

        /* Styles for the "fs-6" class */
        .fs-6 {
            font-size: 0.875rem;
        }

        /* Styles for the "fw-normal" class */
        .fw-normal {
            font-weight: normal;
        }

        /* Styles for the "mt-4" class */
        .mt-4 {
            margin-top: 1.5rem !important;
        }

        /* Styles for the "fw-bolder" class */
        .fw-bolder {
            font-weight: bolder;
        }

        /* Styles for the "table" class */
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        /* Styles for the table headers */
        .table th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
            padding: 0.75rem;
            text-align: left;
        }

        /* Styles for the table data cells */
        .table td {
            vertical-align: top;
            padding: 0.75rem;
        }

        /* Styles for the "text-end" class */
        .text-end {
            text-align: end !important;
        }

        /* Styles for the "fw-bold" class within an h5 element */
        h5.fw-bold {
            font-weight: bold;
        }

        /* Styles for the "fw-normal" class within an h5 element */
        h5 .fw-normal {
            font-weight: normal;
        }

        px-20 {
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>
</head>

<body class="font-sans fw-bold">


    <div class="container mx-auto mt-5 row">

        <table class="table">
            <tbody>
                <tr>
                    <td class="px-20 fw-bold">
                        <label for="" class="fw-bold">To:</label>
                        <p class="mb-0"> {{ $origin_city }}
                            <span class="fs-6 fw-normal"> ( {{ $origin_airport }})</span>
                        </p>
                        <p> {{ $departure_time }}</p>
                    </td>

                    <td class="px-20 fw-bold ">
                        <label for="" class="fw-bold">From:</label>
                        <p class="mb-0"> {{ $destination_city }} <span class="fs-6 fw-normal">
                                ( {{ $destination_airport }})</span>
                        </p>
                        <p> {{ $arrival_time }}</p>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="mt-4 col-12">
            <h6 class="fw-bolder ">Passenger</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th width="35px">No.</th>
                        <th> Details</th>
                        <th class="text-end">Gender</th>
                    </tr>
                </thead>
                <tbody class="fw-normal">
                    @foreach ($passengers as $key => $passenger)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                {{ $passenger['first_name'] }} {{ $passenger['last_name'] }}
                            </td>
                            <td class="text-end">
                                {{ $passenger['gender'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4 col-12">
            <h6 class="fw-bolder ">Payment</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th width="35px">No.</th>
                        <th>Details</th>
                        <th class="text-end">Price</th>
                    </tr>
                </thead>
                <tbody class="fw-normal">
                    <tr>
                        <td>1</td>
                        <td>Ticket Price</td>
                        <td class="text-end">{{ $sub_total }}</td>
                    </tr>
                    <tr>
                        <td>2 </td>
                        <td>Text</td>
                        <td class="text-end">{{ $text }}</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>Total</th>
                        <th class="text-end">{{ $total }}</th>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4 col-12">
            <h5 class="fw-bold">Payment status: <span class="fw-normal">Success</span> </h5>
        </div>

    </div>


</body>

</html>
