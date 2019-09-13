 <?php
    //I also tried replacing the IP with localhost
    $db = mysqli_connect('127.0.0.1','root','') or die("Connection error");
    $db2 = mysqli_select_db($db, "sys") or die(mysqli_error($db));

        $result = mysqli_query($db, "SELECT * FROM  names");

        if(mysqli_num_rows($result)>0){
            while($row = $result->fetch_assoc()) {
        	echo "id: ". $row["id"]." - Name: ".$row["first"]." ".$row["last"]."<br>";
   	    } 	
        }
        else{
            echo "0 Results, Try Again";
        }
    ?>