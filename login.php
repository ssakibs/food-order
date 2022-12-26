<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
          
          <a class="navbar-brand" href="login.php"><img src="images/logo.png" width="150" height="40" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <ul></ul>
              <ul></ul>
              <ul></ul>
              <ul></ul>
              <!-- <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="login.php">Sign in</a>
              </li>
             
            </ul>
           
          </div>
        </div>
      </nav>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Fill Up the Information</p>
                                <form action="userinfo.php" method="post">
                                <div class="form-outline form-white mb-4">
                                <label class="form-label" for="typeEmailX">Email</label>
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg" name="typeEmailX"/>
                                   
                                </div>

                                <div class="form-outline form-white mb-4">
                                <label class="form-label" for="typePasswordX">Password</label>
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg" name="typePasswordX"/>
                                    
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a>
                                </p>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>


                            </div>

                            <div>
                                <p class="mb-0">Don't have an account? <a href="signup.php" class="text-white-50 fw-bold">Sign
                                        Up</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>