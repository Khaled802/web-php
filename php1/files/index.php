<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="uploaded.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" id="name">
        <input type="hidden" name="MAX_FILE_SIZE" value="102400">
        <input type="file" name="info" id="info_file">
        <input type="submit" value="upload">
    </form>
</body>
</html>