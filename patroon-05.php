

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
     
     for ($i=1; $i<=9; $i++){
        
        for($j=1; $j<=9; $j++){

        if ($i==1 || $i==4 || $i==7){
            print "<div class='bol'></div>";
        }
        elseif($i==2 || $i==5 || $i==8){
             print "<div class='bolgroen'></div>";
        }
        else{
             print "<div class='bolblauw'></div>";
        }
    }
             echo "<br />";
 }
         
        
     

?>
</body>
</html>