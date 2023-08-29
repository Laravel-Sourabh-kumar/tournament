<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tournament</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
</head>
<body>

    <section class="w-100">
        <form action="{{route('tournamenet-submit')}}" method="post">
            @csrf
            <div class="container mt-5 border p-3">
                <button class="btn btn-primary  add " type="button">Add More User</button>
                    <div class="row mt-5">
                            <div class="col-sm-4 col-lg-6">
                            <input type="text" name="name[]" placeholder="Name" class="form-control" required>
                            </div>

                            <div class="col-sm-4 col-lg-6">
                            <input type="email" name="email[]" placeholder="Email" class="form-control" required>
                            
                            </div>
                        
                    </div>
                    <div class="appending_div" style="">
                            
                        </div>
                <button class="btn btn-primary mt-5">Start Tournament</button>
                
            </div>
        </form>
    </section>
     
<script>
$(document).ready(function() {
var i = 1;
  $('.add').on('click', function() {
    console.log('ddd');
    var field ='<div class="row mt-5 " id="rowas'+i+'"><div class="col-sm-4 col-lg-6"><input type="text" name="name[]" placeholder="Name" class="form-control"></div> <div class="col-sm-4 col-lg-6"><input type="email" name="email[]" placeholder="Email" class="form-control"> </div></div>';
       $('.appending_div').append(field);
    
     
    i = i+1;
  });
});
    </script>
</body>
</html>
