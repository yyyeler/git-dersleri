
<?php
$locationLib="C:\Users\ZORLU\Downloads\\";
if(isset($_POST['submit']))
{

    $file=$_FILES['Videos']['name'];
    $temp=exec("ffmpeg -i ".$locationLib.$file." 2>&1 | findstr Duration");
    echo "ffmpeg -i ".$locationLib.$file." 2>&1 | findstr Duration"."<br>";
    var_dump($temp);
}


?>
