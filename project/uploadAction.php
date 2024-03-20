<?php
include 'config.php';

// Check if the form was submitted with the POST method
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];

    // Check if the 'image' key exists in the $_FILES array
    if (isset($_FILES['image'])) {
        $updateImage = $_FILES['image'];

        // Check if there are no errors during file upload
        if ($updateImage['error'] === UPLOAD_ERR_OK) {
            $imageLocation = $updateImage['tmp_name'];
            $imageName = basename($updateImage['name']);

            $imageDestination = "image/" . $imageName;

            // Move the uploaded file to the destination directory
            if (move_uploaded_file($imageLocation, $imageDestination)) {
                // Update the database with the file path
                $updateQuery = "UPDATE `register` SET `image`='$imageDestination' WHERE id='$id'";

                if (mysqli_query($conn, $updateQuery)) {
                    echo "<script>alert('Photo uploaded successfully!')</script>";
                } else {
                    echo "<script>alert('Error updating image in the database: " . mysqli_error($conn) . "')</script>";
                }
            } else {
                echo "<script>alert('Error moving uploaded file to destination.')</script>";
            }
        } else {
            echo "<script>alert('Error during file upload: " . $updateImage['error'] . "')</script>";
        }
    } else {
        echo "<script>alert('No 'image' key found in the \$_FILES array.')</script>";
    }

    // Redirect back to the profileUser.php page
    echo "<script>location.href='profileUser.php'</script>";
}
?>
