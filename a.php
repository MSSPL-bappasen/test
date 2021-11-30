<?php 
session_start();


if(isset($_POST['submit']))
{
	$name=$_POST['name'];
    $age=$_POST['age'];
    if($name == ""  && $age == "")
    {
    	echo "Provide name and age";
    }
    else
    {
    	$details=array($name,$age);
        array_push($_SESSION['saved_data'],$details);
    }
    

    //array_push($_SESSION['saved_data'],$name,$age); 
}

?>
<form action="" method="post">
    Name:<input type="text" name="name" />
    Age:<input type="number" name="age" />
    <input type="submit" name="submit" value="Submit" />
</form>
