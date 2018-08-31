 <?php
$servername = "localhost";
$username = "root";
$password = "Leroy123";

$conn = new PDO("mysql:host=$servername;dbname=cadastro", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connected successfully \n";

$rows = $conn->query('SELECT * from info_user'); 

foreach($rows as $row) {
    echo $row['id'] . "|" . $row['name'] . "\n";
}

echo count($rows) . "\n" ;

// inserir um registro
    $rows = $conn->query("INSERT INTO info_user(id,name,cpf,phone_number,password) VALUES(3,'efrae',1111111211,996524455,'012a')");
    $insertId = $conn->lastInsertId();


//consultar id 3

$rows = $conn->query('SELECT * from info_user where id = 3'); 

    echo $row['id'] . "|" . $row['name'] ."|". $row['cpf']."|" . $row['phone_number']."|" . $row['password']."\n";


// atualizar um registro qualquer
$rows = $conn->exec("UPDATE info_user SET name='fff' where id = 3");


// deletar o registro
function delete_data ($id_row)
{
    global $rows, $conn;
    $rows = $conn->query("DELETE FROM info_user  where id=$id_row");
}
delete_data(info_user, 3);