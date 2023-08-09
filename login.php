<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">

        <title>

            SCSVMV

        </title>

        <meta name="description" content="Login">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">

        <!-- Call App Mode on ios devices -->

        <meta name="apple-mobile-web-app-capable" content="yes" />

        <!-- Remove Tap Highlight on Windows Phone IE -->

        <meta name="msapplication-tap-highlight" content="no">

        <!-- base css -->

        <link rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">

        <link rel="stylesheet" media="screen, print" href="css/app.bundle.css">

        <!-- Place favicon.ico in the root directory -->

        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/favicon.ico">

        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon.ico">

        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">

        <!-- Optional: page related CSS-->

        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">

    </head>

    <body>

        <div class="page-wrapper">

            <div class="page-inner bg-brand-gradient">

                <div class="page-content-wrapper bg-transparent m-0">

                    <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">

                        <div class="d-flex align-items-center container p-0">

                            <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">

                                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">

                                    <img src="img/scsvmvlogo - Copy.jpg" alt="SmartAdmin WebApp" aria-roledescription="logo">

                                    <span class="page-logo-text mr-1"></span>

                                </a>

                            </div>

                        </div>

                    </div>

                    <div class="flex-1" style="background: url(img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">

                        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">

                            <div class="row">
<script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}                               
</script>
                                
                                <div class="col-md-6 col-sm-6 ml-auto">

                                    <h1 class="text-white fw-300 mb-6 d-sm-block d-md-none">

                                       

                                    </h1>

                                    <div class="card p-4 rounded-plus bg-faded">

                                        <form id="js-login" method="post" action="loginreg.php" >

                                            <div class="form-group">
                                                <label class="form-label" for="username">Employee Id</label>
                                                <input type="text" name="uname" class="form-control form-control-lg" placeholder="Employee Number" required >
                                            </div>
                                           <div class="form-group">
                                              <label class="form-label" for="password">Password</label>
                                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" id="myInput" required>
                                            </div>					<div class="form-group text-left">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" onclick="myFunction()" class="custom-control-input" id="rememberme">
                                                    <label class="custom-control-label" for="rememberme">Show Password</label>
                                                </div>
                                            </div>
                                            
					  <div class="form-group text-left">
                                                <p id="question" class="form-label" ></p>
                                                    <input id="ans" class="form-control form-control-lg" type="number" autocomplete="off">
                                            </div>

                                        
                                            <div class="row no-gutters">

                                                <div class="col-lg-6 pr-lg-1 my-2">

                                                    <button id="js-login-btn" type="submit" class="btn btn-danger btn-block btn-lg">Login</button>

                                                </div>

                                                

                                            </div>

                                        </form>

                                    </div>

                                </div>

                            </div>

                            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">

                                2023 © by&nbsp;<a href='https://www.kanchiuniv.ac.in' class="text-white" target='_blank'>SCSVMV</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <script src="js/vendors.bundle.js"></script>

        <script src="js/app.bundle.js"></script>


<script>
    $('button[type=submit]').attr('disabled', 'disabled');
var randomNum1;
var randomNum2;
var maxNum = 20;
var total;
randomNum1 = Math.ceil(Math.random() * maxNum);
randomNum2 = Math.ceil(Math.random() * maxNum);
total = randomNum1 + randomNum2;
$("#question").prepend(randomNum1 + " + " + randomNum2 + "=");
$("#ans").keyup(function() {
  var input = $(this).val();
  var slideSpeed = 200;
  $('#message').hide();
  if (input == total) {
    $('button[type=submit]').removeAttr('disabled');
    $('#success').slideDown(slideSpeed);
    $('#fail').slideUp(slideSpeed);
  } else {
    $('button[type=submit]').attr('disabled', 'disabled');
    $('#fail').slideDown(slideSpeed);
    $('#success').slideUp(slideSpeed);
  }
});
$("#reset").on("click", function() {
  randomNum1 = Math.ceil(Math.random() * maxNum);
  randomNum2 = Math.ceil(Math.random() * maxNum);
  total = randomNum1 + randomNum2;
  $("#question").empty();
  $("#ans").val('');
  $("#question").prepend(randomNum1 + " + " + randomNum2 + "=");
});
</script>
<script>
 $("#js-login-btn").click(function(event)
    var form = $("#js-login")
     if (form[0].checkValidity() === false)
                {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.addClass('was-validated');
            });
        </script>


    </body>

</html>

