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
        <?php $detail="";
       $c= count($group);
     //  echo($c);
     $groups=[];
     $name=[];
        ?>
            <div class="container mt-5 border p-3">
                    <div class="row mt-5">
                        @if($group !="[]")
                            @foreach($group as $key=>$g) 
                            @if($key+1 <= $c/2)
                            <?php $groups[]='Group Name '.$key; ?>
                            @endif
                            @if($key+1 != $c)
                            
                                <div class="col-sm-4 col-lg-3">
                                    Group Name {{$key+1}}
                                    <br>
                                    @if($user[$key] ?? null)

                                    <?php $detail=$user[$key];

                                     ?>
                                    @endif
                                    
                                    {{$g->name}},{{$detail}}
                                    <?php $name[]=$g->name; ?>
                                </div>
                                @endif
                            @endforeach
                            
                        @endif
                        
                        
                    </div>
                    <br>

                        &nbsp;&nbsp;{{implode(",",$groups)}} <br>
                        {{implode(",",$name)}}

                            <br>
                            <?php 
                            $win=shuffle($name);?>
                            Winner: {{$name[$win]}}
                   
                <button class="btn btn-primary  mt-5">Back</button>
                
            </div>
        </form>
    </section>
     
 
</body>
</html>
