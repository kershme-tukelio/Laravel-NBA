<html>
    <head>
        <title>{{$player->first_name}} {{$player->last_name}}</title>
    </head>
    <body>
        <div>
            <h1>{{$player->first_name}} {{$player->last_name}}</h1>
            <ul>
                <li>Email: {{$player->email}}</li>
                <li>Team: <a href="{{route('teams.show', ['id' => $player->team_id])}}">{{$player->team->name}}</a></li>
            </ul>
        </div>
    </body>
</html>