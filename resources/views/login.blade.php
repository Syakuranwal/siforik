<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIFORIN - Login</title>
    <!-- Link ke file CSS Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link ke FontAwesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Link ke file CSS kustom -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
   
        
            <section class="login d-flex">
                    <div class=" login-left  w-1/2 h-100" >
                        <div class="row justify-content-center align-items-center h-100 "  style="background-color:#FFFF;">
                            <div class="col-6">
                            <div class="header">
                                <h1>LOG IN <i class="fas fa-user"  style="color:#153448"></i></h1>
                                <p>Welcome to our site! </p>
                        </div>
                        <div class="login-form">
                            <label for="email" class="form-label"> </label>
                           
                            <input type="email" class="form-control" id="email" placeholder="Username" > 
                        </div>

                        <div class="login-form">
                            <label for="password" class="form-label"></label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                            <button class="lojin">Log in <img src= "img/icon2.png" alt="Icon" >
                            </button>
                        </div>
                            </div>

                        </div>
                       
                      
                    </div>
                    <!-- login left -->
                    <div class="login-right w-50 h-100" >
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-6">
                                <img src="img/siiforin.png" alt="logo">
                                <h1 class="bigteks text-center">SIFORIN</h1>
                                 <p class="teks text-center">SISTEM INFORMASI INVENTARIS LAB PSTE</p>
                            </div>

                        </div>
                      
                    </div>
            </section>
         
           
           
        </div>
  
    <!-- Link ke file JS Bootstrap dan dependencies lainnya -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
