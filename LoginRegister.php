<?php 
    
    include 'code-register.php';
   

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin >
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="LoginRegister.css">
<title>BITraderPlus+</title>
</head>

<header class="header">
 <nav class="nav container flex">
 <a href="#" class="logo-content flex">
 <i class='bx bx-objects-vertical-bottom logo-icon'></i>
 <span class="logo-text">BITrader<span class="color-acento">Plus+</span></a>
  
 <div class="menu-content">
 <ul class="menu-list flex">

  </ul>
  </div>

  <div class="login-content flex">
  <span><a href="index.php" class="login">Salir</a></span>
  <i class='bx bx-log-in login-icon'></i>
  </div>
  </nav>
  </header>

<body>



<div class="container-form sign-up">
  <div class="welcome-back">
  <div class="message">
    <h2>Bienvenido a BITradePlus+</h2>
    <p>Si ya tienes una cuenta porfavor inicia sesion aqui</p> 
 <button class="sign-up-btn">Iniciar Sesion</button>
 </div>
 </div>
  <form class="formulario" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
 <h2 class="create-account">Crear una cuenta</h2>
  <div class="iconos">
  <div class="border-icon">
 <i class='bx bxl-instagram'></i>
 </div>
 <div class="border-icon">
 <i class='bx bxl-facebook-circle' ></i>
 </div>
 <div class="border-icon">
 <i class='bx bxl-twitter'></i>
 </div>
 </div>
  <p class="cuenta-gratis">crear una cuenta gratis</p>
  <label for=""></label>
 <input type="text" placeholder="username" name="username">
  <span class="msg-error"><?php echo $username_err; ?></span>
  <label for=""></label>
 <input type="email" placeholder="email" name="email">
  <span class="msg-error"> <?php echo $email_err; ?></span>
  <label for=""></label>
 <input type="password" placeholder="password" name="password">
  <span class="msg-error"> <?php echo $password_err; ?></span>

 <input type="submit" value="Registrarse">
  </form>
 </div>


<div class="container-form sign-in">
 <form class="formulario" action="code-login.php" method="POST">
   <h2 class="create-account">Iniciar Sesion</h2>
 <div class="iconos">
 <div class="border-icon">
 <i class='bx bxl-instagram'></i>
 </div>
 <div class="border-icon">
 <i class='bx bxl-facebook-circle' ></i>
 </div>
  <div class="border-icon">
 <i class='bx bxl-twitter'></i>
 </div>
 </div>
  <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>

 <label for=""></label>
 <input type="email" placeholder="email" name="email">
  <span class="msg-error"><?php echo $email_err; ?></span>
  <label for=""></label>
 <input type="password" placeholder="password" name="password">
  <span class="msg-error"> <?php echo $password_err; ?></span>
<input type="submit" value="Iniciar Sesion">
 </form>
        <div class="welcome-back">
           <div class="message">
           <h2>Bienvenido de nuevo</h2>
           <p>si aun no tienes una cuenta porfavor registrese aqui</p> 
           <button class="sign-in-btn">Registrarse</button>

 </div>
 </div>
 </div>
 

 


<script src="LoginRegister.js"></script>
</body>

</html>