<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

// Controller

<?php
// define variables and set to empty values
$id = $name = $cpf = $phone_number = $pasword = $actionErr = $action = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["action"])) {
    $actionErr = "Action is required";
  } else {
    $action = test_input($_POST["action"]);
  }

    $id = test_input($_POST["id"]);
    $name = test_input($_POST["name"]);
    $cpf = test_input($_POST["cpf"]);
    $phone_number = test_input($_POST["phone_number"]);
    $password = test_input($_POST["password"]);
  
  }
  


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

//////

//////////////////// View

<h2>PHP "info_user" table</h2>
<p><span class="error">* required field</span></p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">  
 
  id:  <input type="text" name="id">
  <br><br>
  Name:  <input type="text" name="name">
  <br><br>
  cpf:  <input type="text" name="cpf">
  <br><br>
  phone number: <input type="text" name="phone_number">
  <br><br>
  password:  <input type="text" name="password">
  <br><br>

  Action:
  <input type="radio" name="action" value="insert">insert
  <input type="radio" name="action" value="update">update
  <input type="radio" name="action" value="delete">delete
  <span class="error">*<?php echo $actionErr;?></span>

  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $id;
echo "<br>";
echo $name;
echo "<br>";
echo $cpf;
echo "<br>";
echo $phone_number;
echo "<br>";
echo $password;
echo "<br>";
echo $action;

////////////////


$servername = "localhost"; // como fazer isso configuravel?
$username = "root";
$password2 = "Leroy123";

$conn = new PDO("mysql:host=$servername;dbname=cadastro", $username, $password2);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if ( $action == 'insert' )
{
  $rows = $conn->query("INSERT INTO info_user(id,name,cpf,phone_number,password) VALUES($id,'$name',$cpf,$phone_number,'$password')");
  $insertId = $conn->lastInsertId();
}
if ( $action == 'delete' )
{
  $rows = $conn->query("DELETE FROM info_user  where id= $id");
}
?>

</body>
</html>
