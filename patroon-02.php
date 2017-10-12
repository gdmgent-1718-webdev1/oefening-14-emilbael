

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<style>
body{
    width: 270px;
}
.bol{
    border: 1px solid red;
    border-radius: 50%;
    height: 16px;
    width: 16px;
    background-color: red;
    
    margin:5px;
    
    float:left;

}

</style>
<?php
     
 for ($i1=1; $i1<=9; $i1++){
    
    for($j=1; $j<=9; $j++){
         print "<div class='bol'></div>";
         
         }
         
         echo "<br />";
     }
     

?>
</body>
</html>
