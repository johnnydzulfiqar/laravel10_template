<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Company Form - Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Company</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('test.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        
        <form action="{{ route('test.update',$test->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="nama" value="{{ $test->nama }}" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan:</strong>
                        <input type="text" name="keterangan" class="form-control" 
                            value="{{ $test->keterangan }}">
                        
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>