<?php
include 'config.php';
$id = $_REQUEST['id'];
$dataFetchQuery = "SELECT * FROM `providerregister` WHERE id='$id'";
$record = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($record);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        form {
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <form action="updateAction.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <h3>Update Provider</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Name :
                                <input type="text" class="form-control" name="r_name" value="<?php echo isset($data['username']) ? $data['username'] : ''; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Email :
                                <input type="text" class="form-control" name="r_email" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Age :
                                <input type="text" class="form-control" name="r_age" value="<?php echo isset($data['age']) ? $data['age'] : ''; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Service :
                                <input type="text" class="form-control" name="r_service" value="<?php echo isset($data['service']) ? $data['service'] : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Address :
                                <input type="text" class="form-control" name="r_address" value="<?php echo isset($data['address']) ? $data['address'] : ''; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Mobile :
                                <input type="text" class="form-control" name="r_mobile" value="<?php echo isset($data['mobile']) ? $data['mobile'] : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Password :
                                <input type="text" class="form-control" name="r_pass" value="<?php echo isset($data['pass']) ? $data['pass'] : ''; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Confirm Password :
                                <input type="text" class="form-control" name="r_con_pass" value="<?php echo isset($data['pass']) ? $data['pass'] : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                Image :
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <div class="mb-2">
                                <img class="mx-5" src="<?php echo isset($data['image']) ? $data['image'] : ''; ?>" alt="" width=150px>
                                <input type="hidden" name="id" value="<?php echo isset($data['id']) ? $data['id'] : ''; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-3">
                                about :
                                <textarea name="r_about" id="about" cols="44" rows="2"><?php echo isset($data['about']) ? $data['about'] : ''; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary col-12" name="login">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>