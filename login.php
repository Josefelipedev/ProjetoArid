<?php

session_start();


if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: adm.php");
    exit;
}

require_once "config/config.php";


$username = $password = "";
$username_err = $password_err = $login_err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor, insira o nome de usuário.";
    } else {
        $username = trim($_POST["username"]);
    }


    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor, insira sua senha.";
    } else {
        $password = trim($_POST["password"]);
    }


    if (empty($username_err) && empty($password_err)) {

        $sql = "SELECT id, username, password , is_admin FROM users WHERE username = :username ";
        // $sql2 = "SELECT id, username, password , is_admin FROM users WHERE is_admin = :nivel";
        //   SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = 'a') AND (`senha` = 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98') AND (`ativo` = 1) LIMIT 1

        if ($stmt = $pdo->prepare($sql)) {

            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
          
            $param_username = trim($_POST["username"]);
           
            if ($stmt->execute()) {

                if ($stmt->rowCount() == 1) {
                    if ($row = $stmt->fetch()) {
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];


                        if (password_verify($password, $hashed_password)) {

                            session_start();


                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;


                            header("location: adm.php");
                        } else {

                            $login_err = "Nome de usuário ou senha inválidos.";
                        }
                    }
                } else {

                    $login_err = "Nome de usuário ou senha inválidos.";
                }
            } else {
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }


            unset($stmt);
        }
    }
    unset($pdo);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body class="login">
    <header class="cabecalho">
        <h1>
            Reportei
        </h1>
        <h2>Seja Bem Vindo </h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div>
                    <label for="email">Usuário</label>
                    <input type="text" name="username<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span><?php echo $username_err; ?></span>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div>
                    <button>Entrar</button>

                </div>
                <p>Não tem uma conta? <a href="register.php">Inscreva-se agora</a>.</p>
            </form>
        </div>
    </main>
    <footer class="rodape">
        Reportei <?= date('Y'); ?>
    </footer>
</body>

</html>
