<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop2</title>
</head>
<body>

<?php
$data = array('img1','img10','img11','img1-1','img1-2','IMG123');

echo "ก่อนเรียงลำดับ<br>";
foreach($data as $item){
    echo $item." ";
}

echo "<br><br>หลังใช้ sort(): <br>";
sort($data);
foreach($data as $item){
    echo $item." ";
}

echo "<br><br>หลังใช้ natcasesort() <br>";
natcasesort($data);
foreach($data as $item){
    echo $item." ";
}
?>

</body>
</html>
