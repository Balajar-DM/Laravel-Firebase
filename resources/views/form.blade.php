<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container" style="background-color: grey;">
        <h2>Form Messages</h2>
        <form class="form-horizontal" action="{{ route('notif.send') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Judul" name="judul">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Pesan</label>
                <div class="col-sm-10">
                    <textarea name="isi" id="" rows="5" class="form-control" placeholder="Isi Pesan"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
