<?php



	session_start();



	ob_start();



    require("connexionDB.php");



    			if(isset($_SESSION['Username'])){







				}else



				{



					header("location: ../index.php");



				}



?>



<!DOCTYPE html>



<html>



<head>



<title>RAcrew</title>



<style>

.container {

  position: relative;

}

#clip {

  position: absolute;

  clip: rect(36px, 30px, 50px, 17px);

  /* clip: shape(top, right, bottom, left); NB 'rect' is the only available option */

}

html {

  scroll-behavior: smooth;

}

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



.styled-table th{



    



    padding: 12px 15px;



    text-align: center; 







}



.styled-table td{

        padding: 12px 15px;



    text-align: left; 

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


.tooltip {
    
  position: relative;
  display: inline-block;

}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
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



  border-top: 8px solid white;



  border-radius: 5px;



}



/* Solid border */



hr.solid {



  border-top: 3px solid #bbb;



}



.grey{
    background-color: grey;
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
        <li style="margin-left : 11%;background-color:red"><a href="index.php">Members</a>

            <ul>

                                                
                <li><a href="AddMember.php">Add a Member</a></li>
                <li><div class='tooltip'>
                        <a href="Monitoring.php">Monitoring</a>
                        <span class='tooltiptext'>Under Construction</span>
                    </div>
                </li>
            </ul>

        </li>
        <li ><a href="Announcement.php">Announcements</a></li>
        <li ><a href="ranks.php">Ranks</a>

            <ul>

                <li><a href="AddRank.php">Add a Rank</a></li>

            </ul>

        </li>

        <li ><a href="history.php">History</a></li>



</ul>



</div>



<br><br><br>



<div class="login" style="margin-left:10%;margin-right:10%">





<div id="section1">

        <div style="color : red;text-shadow: 1px 1px grey;font-family:monospace; font-size:30px;font-weight:1000;">Members List</div>
        <center><?php 
if(isset($_SESSION['Msg'])){
    echo $_SESSION['Msg'];
    unset($_SESSION['Msg']);
                }

?></center>


<a href="#section2" style="margin-left: 58%;margin-top: -50px; position: absolute;"><button class="myButton green" >Promotions / Demotions</button></a>

        



<center>



<form action="" method="post">



          <table class='styled-table'>



                    



                    <thead>



                        <tr>



                            <th colspan="2">Name</th>



                            <th>Rank</th>



                            <th>Actions</th>



                        </tr>



                    </thead>  



            



            <?php  



                    try {



					    $sql ="SELECT * FROM `members` m, rank r WHERE m.idRank LIKE r.idRank ORDER BY rank,id_Member;";



					    



                        $result = mysqli_query($connect,$sql);



                        $result2 = mysqli_query($connect,$sql);



                        if(mysqli_fetch_array($result2)){



                            



                             while($row=mysqli_fetch_array($result)){



                                $idMember=$row['id_Member'];



                                $name=$row['igName'];



                                $rank=$row['idRank'];



                                $rankName=$row["rankName"];



                                $color=$row["color"];

                                $signature=$row['Signature'];

                                



                                



                                echo "<tr>";

                                            echo"<th>   

                                            <div class='container' style='top:-42px'> 

                                                <a style='background-color: red;'><img  style='width:1600px;height:400px;'id='clip' src='".$signature."' /></a>

                                            </div></th>";

                                            echo"<th><a href='".$signature."' style='font-size:17px;text-decoration:none;'target='_blank'>".$name;"</a> </th>";

                                        

                                    

                                    echo"   <th><a style='color:".$color." ;font-size:17px;text-shadow: .5px .5px black'>".$rankName;"</a></th>";

                                    echo"<th><button type='submit' value='$idMember' name ='Modify' class='myButton green' >Edit</button>&nbsp;
                                            <button type='submit' value='$idMember' name ='Delete' class='myButton red' >Delete</button>
                                            <div class='tooltip'>
                                                <button type='submit' value='$idMember' name ='Infractions' class='myButton grey' >Infractions</button>
                                                <span class='tooltiptext'>Coming Soon</span>
                                            </div>
                                        </th>";

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

<hr class="rounded">

<div id="section2">

<div style="color : red;text-shadow: 1px 1px grey;font-family:monospace; font-size:30px;font-weight:1000;">Promotions / Demotions</div>

<a href="#section1" style="margin-left: 65%;margin-top: -50px; position: absolute;"><button class="myButton green" >Go Back Up!</button></a>

<center>

<table class='styled-table'>



                    



                    <thead>



                        <tr>

                            <th>Date</th>

                            <th>Content</th>





                        </tr>



                    </thead>  



            



            <?php  



                    try {



                        $sql ="SELECT * FROM `Ranking` WHERE Status LIKE '1' ORDER By `date` DESC,`Status` DESC,idRanking DESC";

                        $result = mysqli_query($connect,$sql);

                        $result2 = mysqli_query($connect,$sql);

                        if(mysqli_fetch_array($result2)){                     

                             while($row=mysqli_fetch_array($result)){

                                $idRanking=$row['idRanking'];

                                $Member=$row['Member'];

                                $OldRank=$row['OldRank'];

                                $NewRank=$row['NewRank'];

                                $Admin=$row['Admin'];

                                $date=$row['date']; 

                                $status=$row['status'];

                                

                                

                                //----------------

                                // Gather member name : 

                               $sql20 ="SELECT * FROM `members` WHERE `id_Member` LIKE ".$Member." ;";

                               $result20 = mysqli_query($connect,$sql20);



                                if($result2){

                                    if(mysqli_num_rows($result20)==1){

                                        $row20 = $result20->fetch_assoc();

                                        $MemName=$row20["igName"];

                                    }

                                }

                                //--------------------

                                //get Rank names:   

                                $sql2 ="SELECT * FROM `rank` WHERE idRank LIKE ".$OldRank.";";

                                $result2 = mysqli_query($connect,$sql2);

                                if($result2){

                                    if(mysqli_num_rows($result2)==1){

                                        $row = $result2->fetch_assoc();

                                        $OldrankName=$row["rankName"];

                                        $Oldcolor=$row["color"];

                                    }

                                }

                                $sql2 ="SELECT * FROM `rank` WHERE idRank LIKE ".$NewRank.";";

                                $result2 = mysqli_query($connect,$sql2);

                                if($result2){

                                    if(mysqli_num_rows($result2)==1){

                                        $row = $result2->fetch_assoc();

                                        $NewrankName=$row["rankName"];

                                        $Newcolor=$row["color"];

                                        $newRankR=$row["rank"];

                                    }

                                }

                                $History="old:".$OldRank." New:".$NewRank;

                                //----------------

                                    $disNewRank="<a style='color:".$Newcolor.";text-shadow: .5px .5px black'>".$NewrankName."</a>";

                                    $disOldRank="<a style='color:".$Oldcolor.";text-shadow: .5px .5px black'>".$OldrankName."</a>";

                                    if($newRankR<20){

                                        if ($NewRank<$OldRank) { //promotion

                                            $History="<a>".$MemName." has been </a><a style='color:green'>Promoted</a> from ".$disOldRank." to ".$disNewRank;
                                        }elseif ($newRankR==10) {
                                                $History="<a>".$MemName." has </a><a style='color:red'>left</a> the crew";
                                        
                                        }else{

                                            $History="<a>".$MemName." has been </a><a style='color:red'>Demoted</a> from ".$disOldRank." to ".$disNewRank;

                                        }

                                    }else{

                                        $History="<a>".$MemName." has been </a><a style='color:red'>Kicked</a> from the crew.";

                                    }



                                    



                                    $History="<div style='font-size:18px'>".$History."</div>";









                                echo "<tr>";

                                 

                                    echo    "<th><a style='font-size:17px;;'>".$date;"</a></th>";

                                    echo    "<td style='align-text:left;'><a style='font-size:17px;'>".$History;"</a></td>";





                                



                                echo"</tr>";







                            



                        }



                        }else{echo "<tr><th colspan='2'>No Content yet!</th></tr>";}



                    }catch(PDOException $e) {



                            $errMsg = $e->getMessage();



                        }



                    



                



                ?>



            </table>

        </center>

        

</div>

</div>

















</body>



</html>







<?php



//---------------------------------------------- Retirer Classe ---------------------------------------



        if(isset($_POST['Modify'])) {

            $_SESSION['ModifyMemb']=$_POST['Modify'];  //id Classe

            header('Location: ModifyMember.php');

        }

//-----------------------------------------------------------------------------------------------------
        if(isset($_POST['Delete'])) {

            $idMem=$_POST['Delete'];  //id Classe
            $sql="DELETE FROM `members` WHERE `id_Member` LIKE '".$idMem."'";

            if(mysqli_query($connect,$sql)){

            $_SESSION['Msg']="<center><a style='color:red;text-shadow: .5px .5px black;font-weight:1000;font-size:20px;font-family: monospace;'>Member has been Deleted from Database!</a></center>";
            header('Location: index.php');
            }


        }

?>