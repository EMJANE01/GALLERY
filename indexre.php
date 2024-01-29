<style>
    *{
    margin: 0;
    padding: 0;
    font-family: 'Handjet', cursive;
}

section{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
    background-image: url(indexre.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    
    
}

.form-box{
    position: relative;
    width: 400px;
    height: 450px;      
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: transparent;
    background-position: center;
    background-size: cover;

}
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}
.inputbox{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid #fff;
}
.inputbox label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1em;
    pointer-events: none;
    transition: .5s;
}
input:focus ~ label,
input:valid ~ label{
top: -5px;
}
.inputbox input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding:0 35px 0 5px;
    color: #fff;
    font-family: 'Rajdhani', sans-serif;
}


.inputbox ion-icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    top: 20px;
}
.forget{
    margin: -15px 0 15px ;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: space-between;  
}

.forget label input{
    margin-right: 3px;
    
}
.forget label a{
    color: #fff;
    text-decoration: none;
}
.forget label a:hover{
    text-decoration: underline;
    color:aliceblue;
}
.field{
    width: 100%;
    background: transparent;   
    border-color: transparent;
    font-family: 'Handjet', cursive;
    color: #fff;
    font-size: 20px;
}





button{
    width: 100%;
    height: 50px;
    border-radius: 40px;
    background: transparent;
    border: white solid 1px;
    outline: none;
    cursor: pointer;
    
    font-weight: 600;
    color: #fff;
    
}

button:hover{
    width: 100%;
    height: 50px;
    border-radius: 40px;
    background-image: url(indexre.jpg);
    background-size: cover;
    border: white solid 1px;
    outline: none;
    cursor: pointer;    
    font-weight: 600;
    color: #fff;
   
    
}


</style>
<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'db_school') or die('Unable to connect');

if (isset($_POST['register'])) {
    $NewUsername = $_POST['NewUsername'];
    $NewPass = $_POST['NewPass'];

    // Verificar si el nombre de usuario ya existe en la base de datos
    $check_query = mysqli_query($conn, "SELECT * FROM tb_student WHERE Username = '$NewUsername'");
    if (mysqli_num_rows($check_query) > 0) {
        echo '<script type="text/javascript">';
        echo 'alert("El nombre de usuario ya está en uso. Por favor, elige otro.");';
        echo 'window.location.href = "indexre.php";';
        echo '</script>';
    } else {
        // Insertar el nuevo usuario en la base de datos
        mysqli_query($conn, "INSERT INTO tb_student (Username, Pass) VALUES ('$NewUsername', '$NewPass')");

        // Obtener el ID del nuevo usuario
        $new_user_id = mysqli_insert_id($conn);

        $_SESSION["user_id"] = $new_user_id; // Guardar el ID del nuevo usuario en la sesión
        echo '<script type="text/javascript">';
        echo 'alert("Registro exitoso. Ahora puedes iniciar sesión.");';
        echo 'window.location.href = "index.php";'; // Redirigir a la página de inicio de sesión después del registro
        echo '</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Anonymous+Pro&family=Chakra+Petch:wght@300&family=Cinzel+Decorative&family=Foldit:wght@200&family=Gruppo&family=Handjet:wght@200&family=Inconsolata:wght@300&family=Lobster&family=Montserrat:wght@100;600&family=Nunito+Sans&family=Orbitron&family=Press+Start+2P&family=Rajdhani:wght@300;400&family=Raleway:wght@100;300&family=Space+Grotesk:wght@300&family=Special+Elite&family=Tangerine&family=VT323&display=swap" rel="stylesheet">
</head>
<body>
<section>
    <div class="form-box">
        <div class="form-value">
            <h2>Registro</h2>
            <div>
                <form action="indexre.php" method="post">
                    <div class="inputbox">
                        <input type="text" name="NewUsername" placeholder="New Username" required=""><br>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="NewPass" placeholder="New Password" required=""><br>
                    </div>
                    <center>
                        <button><input type="submit" class="field" name="register" value="Registrar"></button>
                    </center>
                </form>

                <br><br>

                <div class="register">
                    <h3 style="color: rgb(255, 255, 255); font-size: medium; text-decoration:none;">¿Ya tienes cuenta?</h3>
                    <br>
                    <button>
                        <a href="index.php" style="color: rgb(255, 255, 255); text-decoration:none;">Iniciar Sesión</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>