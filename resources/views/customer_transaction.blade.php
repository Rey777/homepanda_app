<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>

    </head>
    <body class="container">
        <div class="mt-5">
            @if($customer)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Value</th>
                        </tr>
                    </thead>
        
                    @foreach($customer->transactions as $transaction)
                        <tr>
                            <td>{{$customer->name}}</td>
                            <td>{{$transaction->date->format('d-m-Y')}}</td>
                            <td>{{$transaction->value}} {{$transaction->currency->symbol}}</td>
                        </tr>
                    @endforeach
                </table>
            @else
                <div class="alert alert-danger" role="alert">
                    Customer not found
                </div>
            @endif
            
        </div>
    </body>
</html>
