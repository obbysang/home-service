<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        form {
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }

        .navbar {
            background-color: #808080 !important;
        }

        .navbar-nav .nav-link {
            color: #000 !important;
        }

        #providerData, #userData, #userFeedback {
            display: none;
        }

        #sidebar {
        width: 100px;
        height: 500%;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #333;
        padding-top: 150px; /* Adjust top padding based on your design */
    }

    #main-content {
        margin-left: 220px; /* Adjust left margin based on sidebar width */
        padding: 20px; /* Add padding to prevent content from sticking to the sidebar */
    }

    #providerData,
    #userData,
    #userFeedback {
        display: none;
    }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-warning bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-light" href="adminpanel.php">HomeService</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
                    <li class="nav-item">
                        <a class="nav-link text-light" onclick="showSection('providerData')">Provider Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" onclick="showSection('userData')">User Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" onclick="showSection('userFeedback')">User Feedback</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="adminLogin.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>





    <div class="container-fluid">
    <div class="row">
       

        <!-- Content Area -->
        <div class="col-md-9">
            <div class="container">
                

                <!-- Provider Data -->
                <div id="providerData" class="admin-section">
                    <h1 class="mb-5 mt-5 text-center bg-info">Provider Data</h1>
                    <table class="table table-white table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Age</th>
                                <th scope="col">Service</th>
                                <th scope="col">Address</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Approve</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'config.php';
                            $allData = mysqli_query($conn, "SELECT * FROM `providerregister`");

                            while ($row = mysqli_fetch_array($allData)) {
                                echo "<tr>
                                        <td>$row[id]</td>
                                        <td>" . (isset($row['image']) ? "<img src='$row[image]' width='100px'>" : "") . "</td> 
                                        <td>$row[username]</td>
                                        <td>$row[email]</td>
                                        <td>$row[age]</td>
                                        <td>$row[service]</td>
                                        <td>$row[address]</td>
                                        <td>$row[mobile]</td>
                                        <td><a class='btn btn-warning' href='update.php?id=$row[id]'>Update</a></td>
                                        <td><a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a></td>
                                        <td><a class='btn btn-info' href='approve.php?id=$row[id]'>Approve</a></td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- User Data -->
                <div id="userData" class="admin-section">
                    <h1 class="mb-5 mt-5 text-center bg-info">User Data</h1>
                    <table class="table table-white table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Pass</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $allData = mysqli_query($conn, "SELECT * FROM `register`");

                            while ($row = mysqli_fetch_array($allData)) {
                                echo "<tr>
                                        <td>$row[id]</td>
                                        <td>$row[username]</td>
                                        <td>$row[email]</td>
                                        <td>$row[address]</td>
                                        <td>$row[pass]</td>
                                        <td>$row[mobile]</td>
                                        <td><a class='btn btn-warning' href='userUpdate.php?id=$row[id]'>Update</a></td>
                                        <td><a class='btn btn-danger' href='userDelete.php?id=$row[id]'>Delete</a></td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

               <!-- User Feedback -->
                <div id="userFeedback" class="admin-section">
                    <h1 class="mb-5 mt-5 text-center bg-info">User Feedback</h1>
                    <table class="table table-white table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Details</th>
                                <th scope="col">Reply</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $allData = mysqli_query($conn, "SELECT * FROM `feedback`");

                            if (mysqli_num_rows($allData) > 0) {
                                while ($row = mysqli_fetch_array($allData)) {
                                    echo "<tr>
                                            <td>$row[id]</td>
                                            <td>$row[name]</td>
                                            <td>$row[email]</td>
                                            <td>$row[phone]</td>
                                            <td>$row[subject]</td>
                                            <td>$row[details]</td>
                                            <td><a class='btn btn-success' href='userUpdate.php?id=$row[id]'>Reply</a></td>
                                            <td><a class='btn btn-danger' href='feedbackDelete.php?id=$row[id]'>Delete</a></td>
                                        </tr>";
                                }
                            } else {
                                echo "<tr><td colspan='8'>No data available</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

        <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Set the initial state to show 'Provider Data'
        showSection('providerData');

        // Add click event listeners to the buttons
        document.getElementById('providerDataBtn').addEventListener('click', function () {
            showSection('providerData');
        });

        document.getElementById('userDataBtn').addEventListener('click', function () {
            showSection('userData');
        });

        document.getElementById('userFeedbackBtn').addEventListener('click', function () {
            showSection('userFeedback');
        });
    });

    function showSection(sectionId) {
        // Hide all sections
        document.getElementById('providerData').style.display = 'none';
        document.getElementById('userData').style.display = 'none';
        document.getElementById('userFeedback').style.display = 'none';

        // Show the selected section
        document.getElementById(sectionId).style.display = 'block';
    }
</script>


</body>

</html>