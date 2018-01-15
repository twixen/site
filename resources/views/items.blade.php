<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">

            <div class="well well-sm">
                Dostępne
                <a class="btn btn-primary btn-xs pull-right" href="{{route('add')}}">dodaj</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>lp</th>
                        <th>nazwa</th>
                        <th>ilość</th>
                        <th>edytuj</th>
                        <th>usuń</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($available_items as $available_item)
                    <tr>
                        <td>{{$available_item->id}}</td>
                        <td>{{$available_item->name}}</td>
                        <td>{{$available_item->amount}}</td>
                        <td><a class="btn btn-default btn-xs" href="{{route('edit',$available_item->id)}}">edytuj</a></td>
                        <td><a class="btn btn-default btn-xs" href="{{route('remove',$available_item->id)}}" onclick="return confirm('Na pewno?')">usuń</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="well well-sm">
                Niedostępne
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>lp</th>
                        <th>nazwa</th>
                        <th>ilość</th>
                        <th>edytuj</th>
                        <th>usuń</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($not_available_items as $not_available_item)
                    <tr>
                        <td>{{$not_available_item->id}}</td>
                        <td>{{$not_available_item->name}}</td>
                        <td>{{$not_available_item->amount}}</td>
                        <td><a class="btn btn-default btn-xs" href="{{route('edit',$not_available_item->id)}}">edytuj</a></td>
                        <td><a class="btn btn-default btn-xs" href="{{route('remove',$not_available_item->id)}}" onclick="return confirm('Na pewno?')">usuń</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="well well-sm">
                Dostępnych więcej niż 5
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>lp</th>
                        <th>nazwa</th>
                        <th>ilość</th>
                        <th>edytuj</th>
                        <th>usuń</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($five_more_items as $five_more_item)
                    <tr>
                        <td>{{$five_more_item->id}}</td>
                        <td>{{$five_more_item->name}}</td>
                        <td>{{$five_more_item->amount}}</td>
                        <td><a class="btn btn-default btn-xs" href="{{route('edit',$five_more_item->id)}}">edytuj</a></td>
                        <td><a class="btn btn-default btn-xs" href="{{route('remove',$five_more_item->id)}}" onclick="return confirm('Na pewno?')">usuń</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
