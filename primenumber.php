<?php
$Num = 7;
$n = 0;

for($i = 2; $i < $Num; $i++) {
  if($Num % $i == 0){
    $n++;
    break;
  }
}

if ($n == 0){
  echo $Num." is a Prime Number.";
} else {
  echo $Num." is not a Prime Number.";
}

?>






<br><br><br>
<form method="post">  
Enter a Number: <input type="text" name="primnum"><br><br>  
<input type="submit" name="submit" value="Submit">  
</form>  
<?php  
# This is Inpute type number methord 
if($_POST)  
{  
    $primnum=$_POST['primnum'];
   
    for ($i = 2; $i <= $primnum-1; $i++) {  
      if ($primnum % $i == 0) {  
      $value= True;  
      }  
} 
if (isset($value) && $value) {  
     echo 'The Number '. $primnum . ' is Not Prime';  
}  else {  
   echo 'The Number '. $primnum . ' is Prime';  
   }   
}  

?>



