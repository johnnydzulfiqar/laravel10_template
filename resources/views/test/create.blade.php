<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Company Form - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Company</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('test.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <form action="{{ route('test.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama</strong>
                        <input type="text" name="nama" class="form-control" >
                       
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan</strong>
                        <input type="test" name="keterangan" class="form-control">
                        
                    </div>
                </div>
               
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>