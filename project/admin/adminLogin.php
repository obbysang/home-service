<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <style>
        form {
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
</head>

<body style="background-color:black ;">

    <div class="row justify-content-center mt-5 rounded-1">
        <div class="col-lg-8 col-md-6 col-sm-12">
            <div class="card shadow-lg bg-dark">
                <div class="d-flex ">
                    <div class="border ">
                        <img class="card-img-top " style="padding: 100px; width: 30vw;height: 30vw;" src="../img/logo3.png"
                            alt="Card image cap">
                    </div>
                    <div class="card-body m-auto ">
                        <h1 class="m-auto mx-5 text-white">Admin Login</h1>
                        <div class="row justify-content-center mt-2">
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <form action="adminloginaction.php" method="post">
                                    
                                    <div class="mb-3">
                                       Admin Name :
                                        <input type="text" class="form-control" name="l_username">
                                    </div>
                                    <div class="mb-3">
                                       Admin Password :
                                        <input type="text" class="form-control" name="l_pass">
                                    </div>
                                    <button type="submit" class="btn btn-dark col-12" name="login">Login</button>
                                    
                                </form>

                                <a href="../login.html" class="btn btn-link">Go to User Login</a>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>