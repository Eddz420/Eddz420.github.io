    <?php



 



    ob_start();



    require("connexionDB.php");






?>



<!DOCTYPE html>



<html>



<head>



<title>RAcrew</title>
<link rel="stylesheet"  href="bootstrap.min.css">



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



<center><a href="index.php"><img src="RedArmy.png" class="img-responsive" style="height:150px; top:2%; " alt="index.php"></a></center>







<div  class="ul">

<ul>







    <li style="margin-left : 20.75%;"><a href="index.php">Members</a></li>

    <li style="background-color:red"><a href="Announcement.php">Announcements</a></li>
    <li><a href="login.php">Login</a></li>



</ul>



</div>



<br><br><br>


<div class="container-fluid">
<div class="row">
<div class="col-xs-1 col-sm-1 col-lg-1 col-xl-1 col-md-1"></div>
<div class="col-xs-10 col-sm-10 col-lg-10 col-xl-10 col-md-10">
<div class="login" style="width:100%">


<div class="row">
                <div class="col-xs-8 col-sm-8 col-lg-9 col-xl-9 col-md-8 center" style="padding-left:50px;">
                    <div style="color : red;text-shadow: 1px 1px grey;font-family:monospace; font-size:30px;font-weight:1000;">Announcements</div>
                </div>
</div>
        
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

                            <th style="width:20%">Date</th>

                            <th style="width:80%">Content</th>


                        </tr>

                    </thead>  

            

            <?php  

                    try {

                        $sql ="SELECT * FROM `Anouncement` WHERE Status='1' ORDER BY `Status` DESC,`Date` DESC ;";

                        

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



</div>












</div>
</div>
</div>
</div>

</body>



</html>


