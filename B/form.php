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
  $resultA=mysqli_fetch_array($numA);
  $resultB=mysqli_fetch_array($numB);

  while($numA * $numB == ".$resultA." ".$resultB.")
   {
      echo "$numA * $numB == $end 是巧合數噢";
   }
?>  
<html>  
<head>  
<title>計算機</title>  
</head>  
<body>    
<form id="form1" name="form1" method="post" action="">  
  <p>請輸入第一個數字:  
    <label>  
      <input type="text" name="numA" id="numA" />  
    </label>  
  </p>  
  <p>請輸入第二個數字:  
    <label>  
      <input type="text" name="numB" id="numB" />  
    </label>  
  </p>  
  <p>請選擇運算符號:  
    <label>  
      <select name="class" id="class">  
        <option value="1">+</option>  
        <option value="2">-</option>  
        <option value="3">*</option>  
        <option value="4">/</option>  
      </select>  
    </label>  
  </p>  
  <p>  
    <label>  
      <input type="submit" value="運算">  
    </label>  
    <label>  
      <input type="reset" value="重新填寫">  
    </label>  
  </p>  
  <p>結果:  
    <label>  
      <input type="text" name="textfield" id="textfield" value="<?php echo $end;?>"/>  
    </label>  
  </p>  
</form>  
</body>  
</html>  