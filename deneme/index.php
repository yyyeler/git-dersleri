
<?php
if(isset($_POST['submit']))
{
    $file=realpath($_FILES['Videos']['tmp_name']);
    $time = exec("$ffmpeg -i ".$file." 2>&1 | grep Duration | cut -d ' ' -f 4 | sed s/,//");
    var_dump($_FILES);
}
?>
