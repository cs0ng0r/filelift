<!-- PHP File Upload Handler -->

<?php
session_start();

/* Check for file */
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // File Properties
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    // Work out the file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    // Allowed file types  (Add more if needed)
    $allowed = array('txt', 'jpg', 'jpeg', 'png', 'pdf');

    if (in_array($file_ext, $allowed)) {
        if ($file_error === 0) {
            if ($file_size <= 2097152) {
                $file_name_new = uniqid('', true) . '.' . $file_ext;
                $file_destination = 'uploads/' . $file_name_new;

                if (move_uploaded_file($file_tmp, $file_destination)) {
                    $_SESSION['success'] = "File uploaded successfully: " . $file_destination;
                }
            }
        }
    }
}
header("Location: index.php");
exit();
?>