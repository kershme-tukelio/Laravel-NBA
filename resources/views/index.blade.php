<html>
    <head>
        <title>Teams</title>
    </head>
    <body>
        <div>
            <h1>Teams</h1>
            <ul>
                @foreach($teams as $team)
                    <a href="{{route('teams.show', ['id' => $team->id])}}"><li>{{$team->name}}</li></a>
                @endforeach
            </ul>
        </div>
    </body>
</html>