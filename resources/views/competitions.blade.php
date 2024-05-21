<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Competitions</title>
</head>
<body>
<div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">League Logo</th>
                    <th scope="col">League Name</th>
                    <th scope="col">League Season</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            
            
            <tbody>
                <tr>
                    @foreach ($responseData as $data)
                    <th scope="row"><img src="{{$data['league_logo']}}"></th>
                    <td>{{$data['league_name']}}</td>
                    <td>{{$data['league_season']}}</td>
                    <td>
                    <a href="{{ route('standings') }}" class="btn btn-info">Info</a>
                    </td>
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