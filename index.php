<?php
echo "<H1>".gethostname()."</H1>";
echo "Client time: <span id='jstime' class='padding:5em;'></span><br>";
echo "Server time: ".date('c')."<br><br>";
foreach($_SERVER as $key => $value){
echo "<b>".$key."</b> = ".$value;
echo "<br>";
}

$servername = "192.168.1.52";
$username = "dbadmin";
$password = "Heslo123";
$dbname = "dbtest";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
 //   die("Connection failed: " . $conn->connect_error);
//}

echo "Connected successfully!";
//$conn->close();

?>

<script>
document.getElementById("jstime").innerHTML = new Date();
setInterval(function(){
        document.getElementById("jstime").innerHTML = new Date();
}, 1000);
</script>
