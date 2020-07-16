<?php
$email = filter_input(INPUT_POST, 'email');
$host = "us-cdbr-east-02.cleardb.com";
$dbusername = "b354f1e0662a94";
$dbpassword = "7527705d";
$dbname = "heroku_ce8416662d4c93d";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (!empty($email)){
    
    // Create connection
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
    } else {
        $sql = "INSERT INTO preregistered (email)
        values ('$email')";
        if ($conn->query($sql)){ ?>
<script>
alert("Successfully preregistered");
</script>
<?php }
        else{
            echo "Error: ". $sql ."
            ". $conn->error;
        }
        $conn->close();
    }
    }
?>