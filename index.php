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



    width: 65%;



    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);



}



.styled-table thead tr {



    font-size:20px;



    background-color: #b30000;



    color: white;



    text-align: center;



}



.styled-table th {



    



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



  border-top: 8px solid white;



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

<div class="container-fluid">

    <center><a href="index.php"><img src="RedArmy.png" class="img-responsive" style="height:150px; top:2%; " alt="index.php"></a></center>



    <div  class="ul">



        



    <ul>







        <li style="margin-left : 20.75%;background-color:red"><a href="index.php">Members</a></li>

        <li ><a href="Announcement.php">Announcements</a></li>
        <li><a href="login.php">Login</a></li>



    </ul>



    </div>



    <br><br><br>

<div class="container-fluid">
<div class="row">
<div class="col-xs-1 col-sm-1 col-lg-1 col-xl-1 col-md-1"></div>
<div class="col-xs-10 col-sm-10 col-lg-10 col-xl-10 col-md-10">
    <div class="login" >

        <div id="section1">







            <div class="row">
                <div class="col-xs-8 col-sm-8 col-lg-9 col-xl-9 col-md-8 center" style="padding-left:50px;">
                    <div style="color : red;text-shadow: 1px 1px grey;font-family:monospace; font-size:30px;font-weight:1000;">Members List</div>
                </div>
                <div class="col-xs-4 col-sm-4 col-lg-3 col-xl-3 col-md-4 right">
                    <a href="#section2"><button class="myButton green" >Promotions & Demotions</button></a>
                </div>

                

            </div>

                



        <center>



        <form action="" method="post">



                  <table class='styled-table'>



                            



                            <thead>



                                <tr>


                                    <th>Activity</th>
                                    <th colspan="1">Name</th>



                                    <th>Rank</th>





                                </tr>



                            </thead>  



                    



                    <?php  
                    require_once 'scrap/simple_html_dom.php';
                        $URL="https://www.game-state.com/185.198.188.98:7777/";

                    //get hmtl content from the website

                        $html = file_get_html($URL);

                        $dom = file_get_html($URL, false);



                        //collect product info:

                        $arr=array();

                        $divclass=$cract="";

                        $i=0;

                        $k=0;

                        if(!empty($dom)) {

                            //specs-wrapper : the div that encapluslates all characteristics 

                            foreach($dom->find(".box") as $divClass) {

                                //get characts:

                                foreach($divClass->find(".players") as $title ) {

                                    $arr[$i]['player'] = $title->plaintext;

                                    $i++;

                                }

                            }



                        }
                    


                            try {

                                $arr2=array();
                                $num=0;

                                $sql ="SELECT * FROM `members` m, rank r WHERE m.idRank LIKE r.idRank ORDER BY rank,id_Member;";



                                



                                $result = mysqli_query($connect,$sql);



                                $result2 = mysqli_query($connect,$sql);



                                if(mysqli_fetch_array($result2)){



                                    



                                     while($row=mysqli_fetch_array($result)){



                                        $idMember=$row['id_Member'];
                                        $LOA=$row['LOA'];
                                        if($LOA=='false'){
                                            $loa="";
                                        }else{
                                            $loa="<a style='color:red;font-size:17px'><b>[LOA]</b></a>";
                                        }

                                        $name=$row['igName'];
                                        $num++;
                                        $arr2[$num]=$name;
                                        


                                        $rank=$row['idRank'];

                                        $signature=$row['Signature'];



                                        $rankName=$row["rankName"];



                                        $color=$row["color"];
                                        $sigcolor="red";
                                        for ($j = 0; $j < $i; $j++) {
                                            for($z=1;$z<=$num;$z++){
                                                if(strpos($arr[$j]['player'],$name) !== false){
                                                    $sigcolor="#6aff63";
                                                    break;
                                                }
                                            }


                                        }


                                            

                                        echo "<tr>";

                                                echo"<th>   <center>
                                                <div style='width:20px;height:20px;background-color:".$sigcolor."'>
                                                </div></center>
                                                </th>";

                                                echo"<th><a href='".$signature."' style='font-size:17px;text-decoration:none;'target='_blank'>".$name."&nbsp;".$loa."</a> </th>";

                                            



                                        echo"   <th><a style='color:".$color." ;font-size:17px;text-shadow: .5px .5px black'>".$rankName;"</a></th>";



                                        echo"</tr>";







                                    



                                }

                                
                                


                        $online=0;
                    for ($j = 0; $j < $i; $j++) {
                        for($z=1;$z<=$num;$z++){
                            if(strpos($arr[$j]['player'],$arr2[$z]) !== false){
                                $online++;
                                $player = $arr[$j]['player'];

                            }
                        }


                    }

                    if($online==0){
                        $color="red";
                    }else{
                        $color="ForestGreen";
                    }
                    echo "<b><a style='color:red;font-size:20px'>Online Comrades:</a><a style='font-size:20px'>(</a><a style='color:".$color.";font-size:20px'>".$online."</a><a style='font-size:20px'>/".$num.").</a></b>";
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
<div class="row">

    <div class="col-xs-9 col-sm-9 col-lg-9 col-md-9 center" style="padding-left: 50px;">
            <div style="color : red;text-shadow: 1px 1px grey;font-family:monospace; font-size:30px;font-weight:1000;">Promotions & Demotions</div>
    </div>    
    <div class="col-xs-3 col-sm-3 col-lg-3 col-md-3 right" style="padding:0px">
        <a href="#section1" ><button class="myButton green" >Go Back Up!</button></a>
    </div>

    
</div>
    <center>
<div class="row">
    <div class="col-xs-1 col-sm-1 col-lg-1 col-md-1"></div>
    <div class="col-xs-10 col-sm-10 col-lg-10 col-md-10">
    <table class='styled-table' style="width:100%">



                        



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

                                            $History="<a>".$MemName." has been </a><a style='color:red'>Kicked</a> from the crew";

                                        }



                                        



                                        $History="<div style='font-size:18px'>".$History."</div>";









                                    echo "<tr>";

                                     

                                        echo    "<th><a style='font-size:17px;;'>".$date;"</a></th>";

                                        echo    "<td style='align-text:left;'><a style='font-size:17px;'>".$History;"</a></td>";





                                    



                                    echo"</tr>";







                                



                            }



                            }else{echo "<tr><th colspan='2'>No Update So far!</th></tr>";}



                        }catch(PDOException $e) {



                                $errMsg = $e->getMessage();



                            }



                        



                    



                    ?>



                </table>
</div>
<div class="col-xs-1 col-sm-1 col-lg-1 col-md-1"></div>
</div>
            </center>

            



            </div>



    </div>




</div>







</div>

<div class="row"><br><br></div>


</div>
</div>


</body>



</html>