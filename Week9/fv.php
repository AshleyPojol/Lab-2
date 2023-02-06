<!DOCTYPE html>
<html>
<body>
<head> 
<link rel="stylesheet" href="php.css">
<script src="https://use.fontawesome.com/98dccfb4ee.js"></script>
    <title> Visitor's Log </title>
    <h1> Visitor's Log </h1>
    <div class="aside">
        <div class="logo">
            <a href="#"><span>Toru</span></a>
        </div>
    <div class="nav-toggler">
            <span></span>
        </div>
        <ul class="nav">
            <li><a href="home"><i class="fa fa-address-card"></i></a><span>Profile</span></li>
        </ul>
    </div>

    <table>
        <tr>
            <th> ID </th>
            <th> Name </th>
            <th> Email </th>
            <th> Subject </th>
            <th> Message </th>
        </tr>

<?php 
$host = "localhost";
$dbusername = "webprogmi211";
$dbpassword = "webprogmi211";
$dbname = "webprogmi211";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT id, fullName, emailUsed, subjectUsed, messageInput from acpojol_MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" ."<br> ID: ". $row["id"]. "</td><td>". "<br>Full Name: ". $row["fullName"].  "</td><td>". "<br> Email: " . $row["emailUsed"] . "</td><td>". "<br> Subject: " . $row["subjectUsed"] . "</td><td>". "<br> Message: " . $row["messageInput"] . "<br>";
        }
    echo "</table>";
    } else {
        echo "0 results";
    }
    
    ?>
    </table>
</body>
</html>