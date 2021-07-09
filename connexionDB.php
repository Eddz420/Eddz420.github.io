<?php

        try {
        	$connect = mysqli_connect("localhost","id16901806_localhost","DBpassword123#","id16901806_racrew");
        }
        catch(PDOException $e) {
        	echo "Failled to connect to Database";
        }
?>
