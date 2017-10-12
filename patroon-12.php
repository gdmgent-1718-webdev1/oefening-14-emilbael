

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
.bolgroen{
    border: 1px solid green;
    border-radius: 50%;
    height: 16px;
    width: 16px;
    background-color: green;
    
    margin:5px;
    
    float:left; 
}

.bolblauw{
    border: 1px solid blue;
    border-radius: 50%;
    height: 16px;
    width: 16px;
    background-color: blue;
    
    margin:5px;
    
    float:left; 
}

</style>
<?php
     
     for ($i=0; $i<9; $i++){
        
        for($j=0; $j<9; $j++){

            if ($j< 4-$i || $i > $j+4){
            print "<div class='bolgroen'></div>";
        }
        elseif($i< $j-4 || $i>12-$j){
             print "<div class='bolblauw'></div>";
        }
        else{
             print "<div class='bol'></div>";
        }
    }
             echo "<br />";
 }
         
        
     

?>
</body>
</html>