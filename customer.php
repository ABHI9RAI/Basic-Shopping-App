<html>
<body>
<?php
$n=$_POST['name'];
$e=$_POST['email'];
$s=$_POST['product_name'];
$m=$_POST['contact_no'];
$c=$_POST['country'];
$me=$_POST['comment'];
if (isset($_POST['send']))
$conn=new mysqli("localhost","root","sunbeam","sony");
$sql="insert into customer(name,product_name,email,contact_no,address,comment) values('$n','$s','$e',$m,'$c','$me')";
if($conn->query($sql)==true)
echo "New record created successfully";
else
echo "error";
$conn->close();
?>
</body>
</html>


