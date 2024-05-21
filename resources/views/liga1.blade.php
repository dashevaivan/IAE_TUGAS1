<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Standings</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Country Name</th>
                    <th scope="col">League Name</th>
                    <th scope="col">Team Name</th>
                    <th scope="col">Overall League Position</th>
                </tr>
            </thead>
            
            
            <tbody>
                <tr>
                    @foreach ($responseData as $data)
                    <th scope="row">{{$data['country_name']}}</th>
                    <td>{{$data['league_name']}}</td>
                    <td>{{$data['team_name']}}</td>
                    <td>{{$data['overall_league_position']}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>