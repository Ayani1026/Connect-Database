<?php
$servername = "localhost";
$database = "apotek";
$username = "root";
$password = "";

//create connection

$conn = mysqli_connect($servername, $username, $password, $database);

//check connection
if (!$conn){
    die ("connection failed : ". mysqli_connection_error());
}

// echo "connected succesfully";
// mysqli_close($conn);

$sql = "SELECT * FROM pelanggan";
$result = $conn-> query($sql);

if ($result -> num_rows > 0) {
    //output data of each row
    while ($row = $result -> fetch_assoc()){
        echo "pelanggan : " . $row["nama_pelanggan"]. "<br> alamat : " . $row["alamat"]. "<br>Pekerjaan : ".$row["pekerjaan"];
    }
}
else {
    echo "0 result";
}
$conn->close();

?>