<?php

	session_start();

	ob_start();

    require("connexionDB.php");

    			if(isset($_SESSION['Username'])){



				}else

				{

					header("location: ../Index.php");

				}

?>

<!DOCTYPE html>

<html>

<head>

<title>RAcrew</title>

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

    background-color:grey;

    font-family :Monospace;

}



.ul{

    margin-top :130px;

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
.ul ul li ul li a:hover{
background-color : red;
}


.deco{

top:0%;right:0px;position :absolute; font-size : 25px;font-family:monospace;font-weight: bold;color: white;text-decoration: none;

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

}



input[type="text"]:focus,input[type="password"]:focus {

  border-color: dodgerBlue;

  box-shadow: 0 0 8px 0 dodgerBlue;

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

  color: #aaa;

  transition: 0.3s;

}



.inputWithIcon input[type="text"]:focus + i , .inputWithIcon input[type="password"]:focus + i {

  color: dodgerBlue;

}



.inputWithIcon.inputIconBg i {

  background-color: #aaa;

  color: #fff;

  padding: 9px 4px;

  border-radius: 4px 0 0 4px;

}



.inputWithIcon.inputIconBg input[type="text"]:focus + i, .inputWithIcon.inputIconBg input[type="password"]:focus + i {

  color: #fff;

  background-color: dodgerBlue;

}



.login{

    background-color: rgb(187, 187, 187, 0.8);

    box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);

    padding:2%;

    border-radius: 30px;



}



.button {

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

  color: dodgerBlue; 

  border: 2px solid dodgerBlue;

}



.button1:hover {

  background-color: dodgerBlue;

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

<a href="index.php"><img src="RedArmy.png" style="position :absolute;height:16%; top:0%; width : 27%; left:36.5%;right:38.5%;" alt="index.php"></a>

<a style ="top:0%;right:90px;position :absolute; font-size : 25px;font-weight: 1000;color: #b30000;font-family:monospace;">Super Admin<?php echo " ".$_SESSION['Username'].'';  ?>&nbsp;&nbsp;</a>

        <a class="deco" href="logout.php">(Logout)</a>

<div  class="ul">

    

<ul>
        <li style="margin-left : 11%;"><a href="index.php">Members</a>

            <ul>

                <li><a href="AddMember.php">Add a Member</a></li>
                <li><a href="Monitoring.php">Monitoring</a></li>
            </ul>

        </li>
        <li ><a href="Announcement.php">Announcements</a></li>
        <li style="background-color:red;"><a href="ranks.php">Ranks</a>

            <ul>

                <li><a href="AddRank.php">Add a Rank</a></li>

            </ul>

        </li>

        <li ><a href="history.php">History</a></li>



</ul>
</div>

<br><br><br>

<div class="login" style="margin-left:10%;margin-right:10%">





        <div style="color : red;text-shadow: 1px 1px grey;font-family:monospace; font-size:30px;font-weight:1000;">Members List</div>

        

<center>

<form action="" method="post">

          <table class='styled-table'>

                    

                    <thead>

                        <tr>

                            <th>Rank</th>

                            <th>Name</th>

                            <th>Color</th>

                            <th>Options</th>

                        </tr>

                    </thead>  

            

            <?php  

                    try {

					    $sql ="SELECT * FROM `rank` ORDER BY rank;";

					    

                        $result = mysqli_query($connect,$sql);

                        $result2 = mysqli_query($connect,$sql);

                        if(mysqli_fetch_array($result2)){

                            

                             while($row=mysqli_fetch_array($result)){

                                $idRank=$row['idRank'];

                                $rank=$row['rank'];

                                $rankName=$row['rankName'];

                                $color=$row['color'];

                                 

                                $sql2 ="SELECT * FROM `rank` WHERE rank LIKE ".$rank.";";

                                $result2 = mysqli_query($connect,$sql2);

                                if($result2){

                                    if(mysqli_num_rows($result2)==1){

                                        $row = $result2->fetch_assoc();

                                        $rankName=$row["rankName"];

                                        $color=$row["color"];

                                    }

                                }



                                echo "<tr>

                                        <th><a style='font-size:17px;;'>".$rank;"</a></th>";

                                echo"   <th><a style='color:".$color." ;font-size:17px;text-shadow: .5px .5px black'>".$rankName;"</a></th>";
                                echo"   <th><a style='color:".$color." ;font-size:17px;'><a style='background-color:$color;width=50px;' >&nbsp;&nbsp;&nbsp;</a></a></th>";

                                echo"<th><button type='submit' value='$idRank' name ='Modify' class='myButton green' >Edit</button></th>";

                                echo"</tr>";



                            

                        }

                        }else{echo "<tr><td colspan='3'>There are no members in this Crew</td></tr>";}

                    }catch(PDOException $e) {

							$errMsg = $e->getMessage();

						}

                    

                

                ?>


            </table>

        </form>

        </center>

        

        

</div>









</body>

</html>



<?php

//---------------------------------------------- Retirer Classe ---------------------------------------

        if(isset($_POST['Modify'])) {

            $_SESSION['ModifyRank']=$_POST['Modify'];  //id Classe



            header('Location: ModifyRank.php');

        



        }

?>