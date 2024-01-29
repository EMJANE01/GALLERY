<style>
   @import url('https://fonts.googleapis.com/css2?family=Aboreto&family=Bebas+Neue&family=Bruno+Ace&family=Bruno+Ace+SC&family=Cinzel&family=Cinzel+Decorative&family=Foldit:wght@200&family=Inconsolata:wght@300&family=Lobster&family=Montserrat:wght@100;600&family=Nunito+Sans&family=Rajdhani&family=Raleway:wght@100;300&family=Space+Grotesk:wght@300&family=Tangerine&display=swap');
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
    background-image: url(index.jpg);
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
    background-image: url(index.jpg);
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

$conn = mysqli_connect('localhost', 'root', '', 'db_school') or die ('Unable to connect');

if (isset($_POST['login'])){
    $Username = $_POST['Username'];
    $Pass = $_POST['Pass'];
    $select = mysqli_query($conn, "SELECT * FROM tb_student WHERE Username = '$Username' AND Pass = '$Pass' ");
    $row = mysqli_fetch_array($select);

    if(is_array($row)){
        $_SESSION["Username"] = $row['Username'];
        $_SESSION["Pass"] = $row['Pass'];
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Invalid Username or Password");';
        echo 'window.location.href = "index.php"';
        echo '</script>';
    }
}
if(isset($_SESSION["Username"])){
    header("Location: home.php");
    exit();
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
            <h2>Acceso</h2>
            <div>
                <form action="index.php" method="post">
                    <div class="inputbox">
                        <input type="text" name="Username" placeholder="Username" required=""><br>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="Pass" placeholder="Password" required=""><br>
                    </div>
                    <center>
                        <button><input type="submit" class="field" name="login" value="Entrar"></button>
                    </center>
                </form>

                <br><br>

                <div class="register">
                    <h3 style="color: rgb(255, 255, 255); font-size: medium; text-decoration:none;">¿No tienes cuenta?</h3>
                    <br>
                    <button>
                        <a href="indexre.php" style="color: rgb(255, 255, 255); text-decoration:none;">Registrarse</a>
                    </button>
                </div>

                <?php
                if (isset($_POST['login'])){
                    $Username = $_POST['Username'];
                    $Pass = $_POST['Pass'];
                    $select = mysqli_query($conn, "SELECT * FROM tb_student WHERE Username = '$Username' AND Pass = '$Pass' ");
                    $row = mysqli_fetch_array($select);

                    if(is_array($row)){
                        $_SESSION["Username"] = $row['Username'];
                        $_SESSION["Pass"] = $row['Pass'];
                    } else {
                        echo '<script type="text/javascript">';
                        echo 'alert("Invalid Username or Password");';
                        echo 'window.location.href = "index.php"';
                        echo '</script>';
                    }
                }
                if(isset($_SESSION["Username"])){
                    header("Location: home.php");
                    exit();
                }
                ?>
                
           
            </div>
        </div>
    </div>
</section>
</body>
</html>