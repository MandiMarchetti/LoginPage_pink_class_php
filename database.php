<?php
// Connessione al database MySQL
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nome_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Funzione per inserire i dati nel database
function insertData($data)
{
    global $conn;

    $sql = "INSERT INTO contato (campo1, campo2, campo3) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $data['campo1'], $data['campo2'], $data['campo3']);

    if ($stmt->execute() === TRUE) {
        echo "Dati inseriti correttamente.";
    } else {
        echo "Errore nell'inserimento dei dati: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}

// Utilizzo della classe per creare un form
$form = new FormGenerator("handle_form.php", "post");
$form->addField("campo1", "text", "Campo 1", true);
$form->addField("campo2", "text", "Campo 2", true);
$form->addField("campo3", "text", "Campo 3", false);

echo $form->generateForm();
