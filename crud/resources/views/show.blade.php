<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0x1d71BB1886A49C2c8F82B71b7cBFEAAED4F582fAWCMvPrEOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-bordered shadow text-center table-striped">
            <tr>
                <th>id</th>
                <th>Driver Name</th>
                <th>Owner Name</th>
                <th>Amount</th>
                <th>Purpose</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            @foreach($allTax as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->driver_name}}</td>
                <td>{{$post->owner_name}}</td>
                <td>{{$post->amount}}</td>
                <td>{{$post->purpose}}</td>
                <td><a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a></td>
                <td><a href="/edit/{{$post->id}}" class="btn btn-success">Edit</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>