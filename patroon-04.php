

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
    width: 300px;
}
.bol{
    border: 1px solid red;
    border-radius: 50%;
    height: 16px;
    width: 16px;
    background-color: red;
    margin:1px;
    padding:0%;
        float:left;
    
    

}

</style>
<?php
     
 for ($i=9; $i>=1; --$i){
    
    for($j=1; $j<=$i; $j++){
         print "<div class='bol'></div>";
         
         }
         
         echo "<br />";
     }
     

?>
</body>
</html>