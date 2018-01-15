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
                <a class="btn btn-default btn-xs" href="{{route('items')}}">cofnij</a>
                Edycja produktu #{{$item->id}} ({{$item->name}})</div>
            <form action="{{route('edit', $item->id)}}" method="POST">
                <div class="form-group">
                    <label for="name">Nazwa</label>
                    <input type="text" class="form-control" value="{{$item->name}}" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="amount">Ilość</label>
                    <input type="text" class="form-control" value="{{$item->amount}}" id="amount" name="amount">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Zapisz</button>

            </form>
        </div>
    </body>
</html>
