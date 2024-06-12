<?php include('ligacao.php');?>

<?php

// Processa o formulário de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['email'];
    $pass = $_POST['password'];
    $primeiro = $_POST['firstname'];
    $ultimo = $_POST['lastname'];
    

    if ($pass !== $confirm_pass) {
        header("Location: registo.php?pass=naocorresponde");
    } else {
        // Evita SQL injection
        $user = $ligacao->real_escape_string($user);
        $primeiro = $ligacao->real_escape_string($primeiro);
        $ultimo = $ligacao->real_escape_string($ultimo);
        $pass = sha1($pass);

        // Verifica se o usuário já existe
        $sql = "SELECT * FROM users WHERE username='$user'";
        $result = $ligacao->query($sql);

        if ($result->num_rows > 0) {
            header("Location: registo.php?us=jaexiste");
        } else {
            // Insere o novo usuário no banco de dados
            $sql = "INSERT INTO users (username, password,primeiro,ultimo) VALUES ('$user', '$pass', '$primeiro','$ultimo')";
            if ($ligacao->query($sql) === TRUE) {
                
                header("Location: login.php?util=registado");
            } else {
                echo "Erro: " . $sql . "<br>" . $ligacao->error;
            }
        }
    }
}
?>
