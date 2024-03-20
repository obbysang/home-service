<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plumber</title>
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>

<body>

    <!--------------------- NAVBAR ------------------------->

    <nav class="navbar sticky-top navbar-expand-lg navbar-warning bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-dark" href="index.php">
                <img src="img/logo2.jpg" class="rounded-circle" alt="" width="60"
                    height="50" >
                    

                HomeService</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-dark"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
                    <li class="nav-item ">
                        <a class="nav-link active text-dark" aria-current="page" href="index.php">Home</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-dark" href="medication.php">Health CheckUp</a></li>
                            <li><a class="dropdown-item text-dark" href="plumber.php">Plumber</a></li>
                            <li><a class="dropdown-item text-dark" href="electrician.php">Electrician</a></li>
                            <li><a class="dropdown-item text-dark" href="tutor.php">Tutor</a></li>
                            <li><a class="dropdown-item text-dark" href="laundry.php">Laundry</a></li>
                            <li><a class="dropdown-item text-dark" href="transport.php">Transport</a></li>


                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark" href="profileUser.php">Profile</a>
                    </li>
                    
                    <li class="nav-item ">
                        <a class="nav-link text-dark" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="logout.php">Logout</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>


    <!-- Experts -->

    <div class="container-fluid mt-5">
        <div class="row border border-danger py-5 bg-dark">
            <div class="col-12">
                <!-- <img class="img-fluid" src="/img/medication_cover.jpg" alt=""> -->
                <h1 class="text-white text-center">Plumbers</h1>
            </div>
        </div>
    </div>

    <?php
              include 'config.php';
            



            
              $allData = mysqli_query($conn, "SELECT * FROM `providerregister` WHERE status='yes' AND service='plumber'");

              // Check if the query was successful
              if (!$allData) {
                  die('Query failed: ' . mysqli_error($conn));
              }
              
              // Check if there are rows in the result set
              if (mysqli_num_rows($allData) > 0) {
                  // Fetch and display data
                  while ($row = mysqli_fetch_array($allData)) {
                      $id = isset($row['id']) ? $row['id'] : '';
                      $username = isset($row['username']) ? $row['username'] : '';
                      $image = isset($row['image']) ? $row['image'] : '';
                      $email = isset($row['email']) ? $row['email'] : '';
                      $age = isset($row['age']) ? $row['age'] : '';
                      $service = isset($row['service']) ? $row['service'] : '';
                      $address = isset($row['address']) ? $row['address'] : '';
                      $mobile = isset($row['mobile']) ? $row['mobile'] : '';
              
                      echo "
                      <div class='m-5 d-inline-block text-center'>
                          <input type='hidden' value='$id'>
                          <!---nam diye try--->
                          <input type='hidden' value='$username'>
                          <img src='image/$image' width='200px'><br>
                          <h5 class='mt-2 mb-4 text-uppercase text-Dark'> <b>$username</b></h5>
                          <span><h6 class='d-inline-block text-uppercase text-Dark'>Email : </h6>  $email</span><br>
                          <span><h6 class='d-inline-block text-uppercase text-Dark'>Age : </h6>  $age</span><br>
                          <span><h6 class='d-inline-block text-uppercase text-Dark'>Service : </h6>  $service</span><br>
                          <span><h6 class='d-inline-block text-uppercase text-Dark'>Address : </h6>  $address</span><br>
                          <span><h6 class='d-inline-block text-uppercase text-Dark'>Mobile : </h6>  $mobile</span><br>
                          <a href='proProfile.php? id=$id' class='btn btn-success'>Profile</a>
                          <a href='book.php? id=$id' class='btn btn-warning'>Book</a><br>
                      </div>";
                  }
              } else {
                  echo "No data found.";
              }
              
              // Free the result set
              mysqli_free_result($allData);
              
              // Close the connection
              mysqli_close($conn);
              ?>
      
                   
         





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>