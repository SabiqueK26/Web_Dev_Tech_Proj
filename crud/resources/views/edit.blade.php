<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0x1d71BB1886A49C2c8F82B71b7cBFEAAED4F582fAH9MvPrEOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<h1 class="text-center">Update Data</h1>
	<form method="POST" action="/update/{{$posts->id}}">
		@csrf
		<div class="mb-3">
            <label><b>Driver Name:</b></label>
            <input type="text" name="dname"  class="form-control"  value="{{$posts->driver_name}}">
        </div>
        <div class="mb-3">
            <label><b>Owner Name:</b></label>
            <input type="text" name="oname"  class="form-control" value="{{$posts->owner_name}}">>
        </div>
        <div class="mb-3">
            <label><b>Amount:</b></label>
            <input type="text" name="amount"  class="form-control" value="{{$posts->amount}}">>
        </div>
        <div class="mb-3">
        <label><b>Purpose:</b></label>
        <select class="form-control" name="purpose" value="{{$posts->purpose}}">>
            <option value="None">Select a Purpose</option>
            <option value="Trismitate">Trismitate</option>
            <option value="License">License</option>
            <option value="Book">Book</option>
        </div>
		<input type="submit" name="update" value="Update" class="btn btn-success">
	</form>
</div>

</body>
</html>