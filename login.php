<?php

	session_start();

	ob_start();

    require("connexionDB.php");

?>

<!DOCTYPE html>

<html>

<head>

<title>RAcrew</title>
<link rel="stylesheet"  href="bootstrap.min.css">

<style>

.styled-table {

    background-color:#dadada;

    border-collapse: collapse;

    margin: 25px 0;

    font-size: 0.9em;

    font-family :Monospace;

    min-width: 400px;

    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

}

.styled-table thead tr {

    font-size:20px;

    background-color: #b30000;

    color: white;

    text-align: center;

}

.styled-table th,

.styled-table td {

    

    padding: 12px 15px;

    text-align: center; 



}

.styled-table tbody tr {

    border-bottom: 1px solid #b30000;

}



.styled-table tbody tr:nth-of-type(even) {

    background-color: #f3f3f3;

}



.styled-table tbody tr:last-of-type {

    border-bottom: 2px solid #b30000;

}

.styled-table tbody tr.active-row {

    font-weight: bold;

    color: #009879;

}

body {

    font-size : 20px;

        background-image: url('bg.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;

    font-family :Monospace;

}



.ul{

    margin-top :1%;

}

.ul ul{

    padding : 0px;

    list-style:none;

}

.ul ul li{

    float : left;

    width : 19.5%;

    background-color:rgba(0, 0, 0, 0.7);

    color : white;

    height : 40px;

    text-align :center;

    margin-right : .5;

    margin-left :.5;

    line-height : 40px;

    font-size : 20px;

    border-radius: 15px;

}

.ul ul li a{

    text-decoration : none;

    display : block;

    cursor : pointer; 

    color : white;



    

}

.ul ul li a:visited{

    text-decoration: none;

    color : white;

    

}

.ul ul li a:hover{

    background-color : red;

    border-radius: 15px;

    

}

.ul ul li ul li{

    display : none;

    width : 100%;

    margin-left : 0%;

    margin-right:0%;



    

}



.ul ul li:hover ul li{

    display : block;

    width : 100%;

}



.deco{

top:0%;right:0px;position :absolute; font-size : 20px;font-weight: bold;color: DodgerBlue;text-decoration: none;

}



.deco:hover{

	color : red;

}





input[type="text"],input[type="password"] {

  width: 100%;

  border: 2px solid #aaa;

  border-radius: 4px;

  margin: 8px 0;

  outline: none;

  padding: 8px;

  box-sizing: border-box;

  transition: 0.3s;

  font-family:monospace;

  font-size:20px;

}



input[type="text"]:focus,input[type="password"]:focus {

  border-color: red;

  box-shadow: 0 0 8px 0 red;

}



.inputWithIcon input[type="text"], .inputWithIcon input[type="password"] {

  padding-left: 40px;

}



.inputWithIcon {

  position: relative;

}



.inputWithIcon i {

  position: absolute;

  left: 9px;

  top: 6px;

  padding: 9px 8px;

  color: #b30000;

  transition: 0.3s;

}



.inputWithIcon input[type="text"]:focus + i , .inputWithIcon input[type="password"]:focus + i {

  color: red;

}



.inputWithIcon.inputIconBg i {

  background-color: #aaa;

  color: #fff;

  padding: 9px 4px;

  border-radius: 4px 0 0 4px;

}



.inputWithIcon.inputIconBg input[type="text"]:focus + i, .inputWithIcon.inputIconBg input[type="password"]:focus + i {

  color: #fff;

  background-color: red;

}



.login{

    background-color: rgb(187, 187, 187, 0.8);

    box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);

    padding:2%;

    border-radius: 30px;



}



.button {

    border-radius: 10px;

  background-color: #4CAF50; /* Green */

  border: none;

  color: white;

  padding: 16px 32px;

  text-align: center;

  text-decoration: none;

  display: inline-block;

  font-size: 16px;

  margin: 4px 2px;

  transition-duration: 0.4s;

  cursor: pointer;

  font-weight:bold;

}



.button1 {

  background-color: white; 

  color: red; 

  border: 2px solid red;

}



.button1:hover {

  background-color: red;

  color: white;

}



/* Rounded border */

hr.rounded {

  border-top: 8px solid #bbb;

  border-radius: 5px;

}

/* Solid border */

hr.solid {

  border-top: 3px solid #bbb;

}



.red{

    background-color:#fc5858;

}

.red:hover{

    background-color:#ff0000;

}

.green{

    background-color:#44c767;

}

.green:hover{

    background-color:#5cbf2a;;

}

.myButton {

	

	border-radius:7px;

	border:1px solid #18ab29;

	display:inline-block;

	cursor:pointer;

	color:#ffffff;

	font-family:Arial;

	font-size:17px;

	padding:10px 11px;

	text-decoration:none;

	text-shadow:0px 1px 0px #2f6627;

}



.myButton:active {

	position:relative;

	top:1px;

}





</style>





</head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

<center><a href="index.php"><img src="RedArmy.png" class="img-responsive" style="height:150px; top:2%; " alt="index.php"></a></center>

<div  class="ul">

    

<ul>



    <li style="margin-left : 20.75%;"><a href="index.php">Members</a></li>
    <li ><a href="Announcement.php">Announcements</a></li>
    <li style="background-color:red"><a href="login.php" >Login</a></li>

</ul>

</div>

<br><br><br>

<div class="login" style="margin-left:27%;margin-right:27%;margin-top: 1%;">





        

<center>

<form action="" method="post">

    <center><div style="color : red;text-shadow: 1px 1px grey;font-family:monospace; font-size:30px;font-weight:1000;">Login</div></center>

    <table>

                <tr>

                    <td align="center" style="color: #b30000;font-family:monospace;font-size:20px; "><b>Username:</b>&nbsp;&nbsp;&nbsp;</td>

                    <td align="center">

                        <div class="inputWithIcon">

                        <input class="w3-input d" type="text" name="nom_u" placeholder="Username" required="">

                                <i class="fa fa-user fa-ig fa-fw"></i>

                        </div>

                    </td>

                </tr>

    

                <tr>

                    <td style="color: #b30000;font-family:monospace;font-size:20px;"><b>Password:</b></td>

                    <td align="center">

                        <div class="inputWithIcon">

                            <input class="w3-input d" type="password" name="Mot_d_p" placeholder="Password" required="">

                            <i class="fa fa-key fa-ig fa-fw"></i>

                        </div>

                    </td>

                </tr>

                <tr>

                    <td align="center" colspan="2">

                        <input type="submit" name="submit" value="Login" class="button button1"></td>

                    </tr>

            </table>

          

        </form>

        </center>

        

        

</div>









</body>

</html>



<?php

			if(isset($_POST['submit'])) {

			    // Récuperer les données du formulaire

			    

					$nom_u = $_POST['nom_u'];

					$mot_de_p= $_POST['Mot_d_p'];

					

				//------------------------------------

					try {

					    $sql ="SELECT * FROM User WHERE username LIKE '".$nom_u."' AND password LIKE '".$mot_de_p."';";

                        $result = mysqli_query($connect,$sql);

                        

                        if($result){

                            if(mysqli_num_rows($result)==1){



			    

                                $row = $result->fetch_assoc();

                                $_SESSION['Uid']=$row["idUser"];

                                $_SESSION['Username'] = $row["username"];

                                $_SESSION['Password']=$row["password"];

                                $_SESSION['Access']=$row["Access"];

                               echo"hello";

                                if ($_SESSION['Access']=="SuperAdmin"){

                                header('Location: SuperAdmin/index.php');}

                                else if ($_SESSION['Access']=="Teacher"){

                                    //

                                    }else{

                                       //

                                    }

                                    

                            }else{

                                    echo '<script language="javascript">';

                                    echo 'alert("Oupsie Doupsie! You made a Woupsie, Wrong Password/Username!")';

                                    echo '</script>';

                            }

                        }

                        

					}catch(PDOException $e) {

							$errMsg = $e->getMessage();

						}

						

			}

?>