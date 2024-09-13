<html>

<head>
    @include('header')
</head>
<div class="content-wrapper" style="min-height: 600.12px;">
    <div class="row mb-2">
        <div class="col-sm-6">
            <div class="col-sm-14">
                <h1 align="right">Article-Form</h1>
                
            </div>
        </div>
    </div>
    <body class="update-page" style="min-height: 570.781px;">
        <div class="card">
            <div class="card-body register-card-body">
                <form action="{{url('add')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Title</label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="name">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Description</label>
                        <input type="text" class="form-control" placeholder="Enter Description" name="address">
                        
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" value="save" class="btn btn-primary btn-block ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </body>

</html>
@include('footer')