
<?php
$count = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    foreach ($_FILES['files']['name'] as $i => $name) {
        if (strlen($_FILES['files']['name'][$i]) > 1) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], 'D:/Coba Upload/'.$name)) {
                $count++;
            }
        }
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>UPLOAD FOLDER</title>
  <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="wrap">
            <?php
            if ($count > 0) {
                echo "<p class='msg'>
{$count} files uploaded</p>
\n\n";
            }
            ?>
<h1>UPLOAD FOLDER</h1>
<form method="post" enctype="multipart/form-data">
                <input type="file" name="files[]" id="files" multiple="" directory="" webkitdirectory="" mozdirectory="">
                <input class="button" type="submit" value="Upload" />
            </form>
</div>
</body>
</html>
