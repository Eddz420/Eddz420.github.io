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
        font-weight: 400px;
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
        <li style="margin-left : 11%;"><a href="index.php">Members</a>

            <ul>

                <li><a href="AddMember.php">Add a Member</a></li>
                <li><a href="Monitoring.php">Monitoring</a></li>
            </ul>

        </li>
        <li style="background-color:red"><a href="Announcement.php">Announcements</a></li>
        <li><a href="ranks.php">Ranks</a>

            <ul>

                <li><a href="AddRank.php">Add a Rank</a></li>

            </ul>

        </li>

        <li><a href="history.php">History</a></li>



</ul>



</div>



<br><br><br>



<div class="login" style="margin-left:10%;margin-right:10%">

<div style="color : red;text-shadow: 1px 1px grey;font-family:monospace; font-size:30px;font-weight:1000;">Announcements :</div>
        
    <center><?php 
                if(isset($_SESSION['Msg'])){
                    echo $_SESSION['Msg'];
                    unset($_SESSION['Msg']);
                            }
            ?>
    </center>

<center>

<form action="" method="post">

          <table class='styled-table'>

                    

                    <thead>

                        <tr>

                            <th style="width:15%">Date</th>

                            <th style="width:60%">Content</th>

                            <th style="width:25%">Options</th>

                        </tr>

                    </thead>  

            

            <?php  

                    try {

                        $sql ="SELECT * FROM `Anouncement` ORDER BY `Status` DESC,`Date` DESC ;";

                        

                        $result = mysqli_query($connect,$sql);

                        $result2 = mysqli_query($connect,$sql);

                        if(mysqli_fetch_array($result2)){



                             while($row=mysqli_fetch_array($result)){

                                $idAn=$row['idAn'];

                                $Content=$row['Content'];

                                $Admin=$row['Admin'];

                                $Status=$row['Status'];

                                $Date=$row['Date'];

                                 

                                $sql2 ="SELECT * FROM `User` WHERE idUser LIKE ".$Admin.";";

                                $result2 = mysqli_query($connect,$sql2);

                                if($result2){

                                    if(mysqli_num_rows($result2)==1){

                                        $row = $result2->fetch_assoc();

                                        $AdmUsername=$row["username"];

           

                                    }

                                }
                                $display=$Content." -".$AdmUsername;
                                if($Status=="0"){ //disabled
                                    $button="<button type='submit' value='$idAn' name ='Announce' class='myButton green' >Announce</button>";
                                }else{
                                    $button="<button type='submit' value='$idAn' name ='Disable' class='myButton red' >Disable</button>";
                                }

                                echo "<tr>

                                        <th style='vertical-align:top'><a style='font-size:17px;width:10%;'>".$Date;"</a></th>";

                                echo"   <td style='vertical-align:top;line-height: 18px;'><a style='font-size:17px;'>".$display."</a></td>";
                                

                                echo"<th><button type='submit' value='$idAn' name ='Edit' class='myButton green' >Edit</button>
                                         <button type='submit' value='$idAn' name ='Delete' class='myButton red' >Delete</button>&nbsp;".$button."</th>";

                                echo"</tr>";



                            

                        }

                        }else{echo "<tr><td colspan='3'><center>There Are no Announcements yet</center></td></tr>";}

                    }catch(PDOException $e) {

                            $errMsg = $e->getMessage();

                        }

                    

                

                ?>


            </table>

        </form>

        </center>
<br>
<hr class="rounded">
<br>
<div id="Section2">
    <center>

        <form action="" method="post">

            <center><div style="color : red;text-shadow: 1px 1px grey;font-family:monospace; font-size:30px;font-weight:1000;">Add/Edit an Announcement</div></center>
        <?php 
        if(isset($_SESSION['Msg'])){
            echo $_SESSION['Msg'];
            unset($_SESSION['Msg']);
                        }

        ?>
            <table>
                        <tr>

                            <td align="center" style="color: #b30000;font-family:monospace;font-size:20px;vertical-align: top; "><b><center>Content:</center></b></td>

                            <td align="center">

                                <div class="inputWithIcon">

                                <textarea class="w3-input d" type="text" name="Content" value=""placeholder="Content" required="" style="width:400px;height:150px;"><?php if(isset($_SESSION['EditAn'])){echo $_SESSION['EditAn'];unset($_SESSION['EditAn']);}?></textarea>

                                </div>

                            </td>
                            <td align="center" style="vertical-align: top;" colspan="2">
                                <button type='submit' value="<?php if(isset($_SESSION['idAn'])){echo $_SESSION['idAn'];unset($_SESSION['idAn']);}?>" name ='Save' class='myButton green' >Save</button>
                                </td>

                        </tr>
            </table>

        </form>

    </center>
        
</div>


</div>

















</body>



</html>







<?php



//---------------------------------------------- Retirer Classe ---------------------------------------

        if(isset($_POST['Delete'])) {

            $idAn=$_POST['Delete'];  //id Classe
            $sql="DELETE FROM `Anouncement` WHERE `idAn` LIKE '".$idAn."'";
            if(mysqli_query($connect,$sql)){

            $_SESSION['Msg']="<center><a style='color:#00b000;text-shadow: 1px 1px black;font-weight:1000;font-size:20px;font-family: monospace;'>Announcement '".$idAn."' has been deleted!!</a></center>";
            header('Location: Announcement.php');
            }
        }
//Disable
        if(isset($_POST['Disable'])) {

            $idAn=$_POST['Disable'];  //id Classe
            $sql="UPDATE `Anouncement` SET `Status` = '0' WHERE `Anouncement`.`idAn` = '".$idAn."'";
            if(mysqli_query($connect,$sql)){
                 $_SESSION['Msg']="<center><a style='color:red;text-shadow: 1px 1px black;font-weight:1000;font-size:20px;font-family: monospace;'>Announcement Disabled!</a></center>";
                header('Location: Announcement.php');
            }

        }
//Announce
        if(isset($_POST['Announce'])) {

            $idAn=$_POST['Announce'];  //id Classe
            $sql="UPDATE `Anouncement` SET `Status` = '1' WHERE `Anouncement`.`idAn` = '".$idAn."'";
            if(mysqli_query($connect,$sql)){
                $_SESSION['Msg']="<center><a style='color:#00b000;text-shadow: 1px 1px black;font-weight:1000;font-size:20px;font-family: monospace;'>Announcement Enabled!</a></center>";
                header('Location: Announcement.php');
            }
        }

//Edit
        if(isset($_POST['Edit'])) {

            $_SESSION['idAn']=$_POST['Edit'];
            $sql20 ="SELECT * FROM `Anouncement` WHERE `idAn` LIKE ".$_POST['Edit'].";";
            $result20 = mysqli_query($connect,$sql20);
            if($result2){
                if(mysqli_num_rows($result20)==1){
                    $row20 = $result20->fetch_assoc();
                    $_SESSION['EditAn']=$row20["Content"];
                    header('Location: Announcement.php#Section2');
                }
            }
            
            
        }

//edit add
        if(isset($_POST['Save'])) {
            $date=date("Y-m-d");
            try{
            $save=$_POST['Save'];
            if($save==""){
                //add new one
                $Content=$_POST['Content'];
                echo $date,$_SESSION['Uid'],$Content;
                $sql="INSERT INTO `Anouncement` (`idAn`, `Content`, `Admin`, `Status`, `Date`) VALUES (NULL, '".$Content."', '".$_SESSION['Uid']."', '0', '".$date."');";
                if(mysqli_query($connect,$sql)){
                    $_SESSION['Msg']="<center><a style='color:#00b000;text-shadow: 1px 1px black;font-weight:1000;font-size:20px;font-family: monospace;'>New Announcement has been Added!</a></center>";
                        header('Location: Announcement.php');
                }

            }else{
                //update
                    $Content=$_POST['Content'];  //id Classe
                    $sql="UPDATE `Anouncement` SET `Content` = '".$Content."' WHERE `Anouncement`.`idAn` = '".$save."'";
                    if(mysqli_query($connect,$sql)){
                        $_SESSION['Msg']="<center><a style='color:#00b000;text-shadow: 1px 1px black;font-weight:1000;font-size:20px;font-family: monospace;'>Announcement Updated!</a></center>";
                        header('Location: Announcement.php');
                    }

            }
            
            }catch (mysqli_sql_exception $e) {
                  throw $e;
               }
            }
        

?>