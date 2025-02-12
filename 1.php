<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "login_page";
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    echo "Dose Not Working | Bug ?";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $select = "SELECT * from `data`";
    $verify = $conn->query($select);
    $fetch = $verify->fetch_assoc();
    if ($username === $fetch["username"]) {
        if ($password === $fetch["password"]) {
            echo "DONE";
        }
    } else {
        echo '<script>
    alert("Username Or Password Is Incorrecte")
</script>';
    }
}
?>