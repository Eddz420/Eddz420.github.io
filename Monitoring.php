<?php
	session_start();
    require("connexionDB.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>
<?php
$now=date("Y-m-d");

$sql20 ="SELECT * FROM `Activity`;";
$result20 = mysqli_query($connect,$sql20);

if($result20){

	

    	$row20 = $result20->fetch_assoc();
        $time=$row20["Hello"];
        $date=$row20["date"];
        $idA=$row20["id_Act"];
        $time=$time+5;
        echo $time."<br>";
        echo $date."<br>".$now;
        if($date===$now){
        	echo "hi";
        //update
        $sql="UPDATE `Activity` SET `Hello` = '".$time."' WHERE `Activity`.`idAn` = '".$idA."'";
                    if(mysqli_query($connect,$sql)){
                  		  echo"Time Update!";        	
                    }
    }else{//insert
    	$sql="INSERT INTO `Activity`( `Hello`, `date`) VALUES ('5','".$now."')"; 
    	if(mysqli_query($connect,$sql)){
                    echo"New line inserted";
                }
    }

}

 ?>
