<?php   
  function calculate($class,$numA,$numB)  
  {  
      switch ($class)  
      {  
      case 1:  
          $end = $numA + $numB;  
      break;  
      case 2:  
          $end = $numA - $numB;  
          break;  
      case 3:  
          $end = $numA * $numB;  
          break;  
      case 4:  
          $end = ($numA + $numB)*($numA + $numB);  
          break;  
      default:  
          $end = $numA / $numB;         
      }  
      return $end;       
  }    
  if(isset($_POST['numA']) and isset($_POST['numB']) and isset($_POST['class']))  
  {  
  $numA = $_POST['numA'];  
  $numB = $_POST['numB'];  
  $class = $_POST['class'];   
  $end = calculate($class,$numA,$numB);  
  }  
?>  
