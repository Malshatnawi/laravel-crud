<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\public\css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>OCA Trainees</title>
    
</head>
<body style="background-color:palegoldenrod;">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Collapsed content</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<div class="content">
    <div class="container">
        <div class="row">
            <!-- <div class="col-sm-4"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Trainees</a></div> -->
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
        @foreach($all_students as $key => $value)

            <div class="col-lg-4 border border-primary" style="background-color:silver;">
                <div class="text-center card-box" >
                    <div class="member-card pt-2 pb-2">
                        <div class="thumb-lg member-thumb mx-auto"><img src="images/students/{{$value['Student_Image']}}" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                        <div class="">
                            <h4>{{$value["Full_Name"]}}</h4>
                            <p class="text-muted">@Email <span>| </span><span><a href="#" class="text-pink">{{$value['Email']}}</a></span></p>
                        </div>
                        <ul class="social-links list-inline">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook" style="font-size:2em;"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype" style="font-size:2em;"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="{{$value['linkedin']}}" data-original-title="Twitter"><i class="fa fa-linkedin" style="font-size:2em;"></i></a></li>

                        </ul>
                        <a href="profile/{{$value['id']}}" ><button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light" href="">Visit Profile</button></a>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4>{{$value['Mobile']}}</h4>
                                        <p class="mb-0 text-muted">Phone Number</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4>{{$key}}</h4>
                                        <p class="mb-0 text-muted">Student ID</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4>{{($value['National_Id'])}}</h4>
                                        <p class="mb-0 text-muted">National Id</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            <!-- end col -->
            
        </div>
        <!-- end row -->
        
        
        
    </div>
    <!-- container -->
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
</body>
</html>