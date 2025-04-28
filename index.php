<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP website!!</title>
</head>
<body>
    <h1> Text Viewer Online  </h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select text:
        <input type="file" name="uploadedFile" id="uploadedFile">
        <input type="submit" value="Upload" name="submit">
    </form>
    <p> Supported file types: .txt </p>
</body>
</html>