<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Beyond hotel') }}</title>
</head>

<body style="display: flex;justify-content: center;">
    <div style="width: 70%;padding: 10px; margin: 0 auto">

        <h1 style="color: rgb(5, 215, 215)">{{ __('Pay Booking') }}</h1>
        <p>{{ __('Hello') }}, <b style="color: rgb(240, 84, 84)">{{ $content['user_name'] }}</b></p>

        <table border="1" style="border-collapse: collapse" cellpadding="10px">
            <thead>
                <tr>
                    <th style="background-color: aquamarine">{{ __('ARRIVAL DATE') }}</th>
                    <th style="background-color: aquamarine">{{ __('DEPARTURE DATE') }}</th>
                    <th style="background-color: aquamarine">{{ __('NAME ROOM') }}</th>
                    <th style="background-color: aquamarine">{{ __('PRICE/ DAY') }}</th>
                    <th style="background-color: aquamarine">{{ __('TOTAL DAY BOOKED') }}</th>
                    <th style="background-color: aquamarine">{{ __('TOTAL PRICE') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $content['arrival_date'] }}</td>
                    <td>{{ $content['departure_date'] }}</td>
                    <td>{{ $content['name'] }}</td>
                    <td>{{ $content['price'] }}</td>
                    <td>{{ $content['total_day_booked'] }}</td>
                    <td>{{ $content['total_price'] }}</td>
                </tr>

            </tbody>
        </table>


        <p>{{ __('From :name', ['name' => config('app.name')]) }}</p>
    </div>
</body>

</html>
