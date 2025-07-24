<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop3</title>
</head>
<body>
<form method="GET">
    <div><p>Number :        
        <?php 
            $x = $_GET['num'];
            echo $x;
        ?>
    </p><input type="number" name="num"> 
    </div>
    <input type="submit" value="ตกลง"><input type="reset" value="Reset">
</form>

<?php
    $array = str_split($x);
    for($round = 0;$round < count($array);$round++){
        if($array[$round] == 0){
            echo 'ศูนย์';
        }else if($array[$round] == 1){
            echo 'หนึ่ง';
        }else if($array[$round] == 2){
            echo 'สอง';
        }else if($array[$round] == 3){
            echo 'สาม';
        }else if($array[$round] == 4){
            echo 'สี่';
        }else if($array[$round] == 5){
            echo 'ห้า';
        }else if($array[$round] == 6){
            echo 'หก';
        }else if($array[$round] == 7){
            echo 'เจ็ด';
        }else if($array[$round] == 8){
            echo 'เเปด';
        }else if($array[$round] == 9){
            echo 'เก้า';
        }else{
            echo '';
        }   
    }
?>

</body>
</html>
