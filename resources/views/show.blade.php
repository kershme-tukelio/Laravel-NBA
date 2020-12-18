<html>
    <head>
        <title>{{$team->name}}</title>
    </head>
    <body>
        <div>
            <h1>{{$team->name}}</h1>
            <ul>
                <li>Email: {{$team->email}}</li>
                <li>Address: {{$team->address}}</li>
                <li>City: {{$team->city}}</li>
                <li>Players: 
                    <ul>
                        @foreach($team->players as $player)
                            <li><a href="{{route('players', ['id' => $team->id])}}">{{$player->first_name}} {{$player->last_name}}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </body>
</html>