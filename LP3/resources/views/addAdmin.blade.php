<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box
        }

        body {
            background-color: #eee;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to top, #fff 10%, #ff8c00 90%) no-repeat
        }

        .wrapper {
            max-width: 550px;
            border-radius: 10px;
            margin: 50px auto;
            padding: 20px;
            box-shadow: 20px 20px 80px rgb(206, 206, 206)
        }

        .h2 {
            font-family: 'Kaushan Script', cursive;
            font-size: 3.0rem;
            font-weight: bold;
            color: #FF8C00;
            text-shadow: 0 0 2px #a069ee;
            font-style: italic
        }

        .h5 {
            color: #555;
            margin: 0
        }

        .form-control {
            border: 1.5px solid #FF8C00
        }

        .form-control:focus {
            box-shadow: none
        }

        .mandatory::after {
            content: "*";
            color: #ff0000
        }

        .button-section .btn {
            background-color: #fff;
            border-radius: 20px;
            border: 1.5px solid #FF8C00;
            padding: 5px 15px
        }

        .button-section .btn.btn-primary {
            background-color: #FF8C00;
            color: #eee
        }

        .button-section .btn:hover {
            background-color: #FF8C00;
            color: #eee
        }

        .remember {
            border: 1px solid #FF8C00
        }

        .gender-l {
            margin: 0
        }

        #male {
            display: none
        }

        input[type="radio"] {
            visibility: hidden
        }

        input[type='radio']:checked {
            background-color: #FF8C00
        }

        .btn.btn-primary {
            background-color: #fff;
            color: #555;
            border: 1px solid #FF8C00;
            width: 115px
        }

        .btn.btn-primary:hover {
            background-color: #a069ee;
            color: #fff
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active {
            background-color: #FF8C00
        }

        @media(max-width: 575px) {
            .btn-group {
                width: 100%
            }

            .btn-group>.btn {
                flex: 50%
            }

            .wrapper {
                margin: 10px
            }

            .h5 {
                padding-top: 10px
            }
        }
    
    </style>
    <title>Registration</title>
  </head>
  <body>

  
<div class="wrapper bg-white">
    <div class="h2 text-center">Coding</div>
    <div class="h2 text-center">Academy</div>
    <div class="h5 font-weight-bold">Registration</div>
    <div class="text-muted">Enter your registration details</div>
    <form method="post" action="addAdmin" enctype="multipart/form-data">
    @CSRF
        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
            <div class="form-group"> <label class="text-muted mandatory">Full Name</label> <input type="text" name="name" value="{{old('name')}}" class="form-control"> </div>
            <div class="form-group"> <label class="text-muted mandatory">Email Address</label> <input  name="email" value="{{old('email')}}" class="form-control"> </div>

        </div>
        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
            <div class="form-group col-6"> 
            @error("name")
            <p style="color:red; font-size:0.7rem ">{{$message}}</p>
            @enderror </div>
            <div  class="form-group col-6">  
            @error("email")
            <p style="color:red; font-size:0.7rem ">{{$message}}</p>
            @enderror
         </div>

        </div>
       
       
        
        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
            <div class="form-group col-12"> <label class="text-muted mandatory">Phone Number</label> <input type="tel" name="mobile" value="{{old('mobile')}}" class="form-control"> </div>

        </div>
        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
            <div class="form-group col-12"> 
            @error("mobile")
            <p style="color:red; font-size:0.7rem ">{{$message}}</p>
            @enderror 
            </div>
            
         </div>

         <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
            <div class="form-group mr-4"> <label class="text-muted mandatory">Password</label> <input type="password" name="password"  class="form-control"> </div>
            <div class="form-group"> <label class="text-muted mandatory">Re-Password</label> <input type="password" name="password_confirmation"  class="form-control"> </div>

        </div>
        
        <div class="d-sm-flex align-items-sm-center justify-content-sm-between pt-1">
            <div class="form-group col-6"> 
            @error("password")
            <p style="color:red; font-size:0.7rem ">{{$message}}</p>
            @enderror </div>
            <div  class="form-group col-6">  
            @error("password_confirmation")
            <p style="color:red; font-size:0.7rem ">{{$message}}</p>
            @enderror
         </div>

        </div>

        



        <div class="d-flex align-items-center justify-content-sm-end button-section"> <button class="btn btn-primary mx-4" type="submit" name="submit">Submit</button> <button class="btn">Cancel</button> </div>
      
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>