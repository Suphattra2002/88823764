<html> 
<head> 
<title>โปรแกรมสูตรคูณด้วยคำสั่ง for</title> 
</head> 
<body> 
<form method= "post"> 
<p>กรุณากรอกแม่สูตรคูณที่ต้องการ : 
<input name= "multi"> 
<input name= "submit" type="submit" value="เลือก"> 
</p> 
</form> 
<?php
$multi = @$_POST['multi'] ; 
echo "<centre>สูครคูณแม่ $multi <br>"; 
for($i=1;$i<=12;$i++) 
{ 
echo "$i x $multi = ".$i*$multi. "<br>"; 
} ?> 
</body> </html>

