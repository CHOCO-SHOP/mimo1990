

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
    <link rel="stylesheet" href="image_upload.css">
</head>
<body>
    <h1>Upload an image in PHP & MySQL</h1>

    <div class="myform">
<form action="" id="form" method="POST" enctype="multipart/form-data">
    <input type="file"  id="fileupload" name="image" accept="image/*" />
    <button name="submit" type="submit">Upload</button>
</form>
    </div>

<?php
if(isset($_POST["submit"])) {
	
	
$image_file = $_FILES["image"];

// Image not defined, let's exit
if (!isset($image_file)) {
    die('No file uploaded.');
}

// Move the temp image file to the images/ directory
move_uploaded_file(
    // Temp image location
    $image_file["tmp_name"],

    // New image location, __DIR__ is the location of the current PHP file
    __DIR__ . "./uploads/" . $image_file["name"]
);


};
?>
<script>




const form = document.querySelector("#form")

// or form.addEventListener...
.addEventListener("submit", e => {
  e.preventDefault();



 const file = document.getElementById("fileupload");

  .then(succ => {
    console.log(succ);
  }, err => {
    console.log(err);
  })
})

</script>
</body>
</html>
