<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload and Display Image</title>
</head>
<body>
    <h2>Upload an Image</h2>
    <form method="post" enctype="multipart/form-data">
        Select image: 
        <input type="file" name="file" accept="image/*" required><br><br>
        <input type="submit" value="Upload">
    </form>

<?php
if(isset($_FILES['file'])){
    $uploadDir = "uploads/";
    $fileName = basename($_FILES['file']['name']);
    $fileName = str_replace(" ", "_", $fileName);

    $targetFile = $uploadDir . $fileName;
    $check = getimagesize($_FILES['file']['tmp_name']);
    if($check !== false){
        if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)){
            echo "<h3>Uploaded Image:</h3>";
            echo "<img src='".$targetFile."' width='300'>";
        } else {
            echo "<p style='color:red;'>Failed to upload image. Check folder permissions.</p>";
        }
    } else {
        echo "<p style='color:red;'>File is not an image.</p>";
    }
}
?>
</body>
</html>
