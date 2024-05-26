<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blimedlem.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
</head>
<body>
    <nav>
        <div class="logo"><img src="Logga-Hestra.png" width="70" height="65"></div>
        <h1> Bli medlem</h1>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="Index.php">Startsida</a></li>
            <li><a href="Foreningen.php">Föreningen</a></li>
            <li><a href="Orientering.php">Orientering</a></li>
            <li><a href="Blimedlem.php">Bli medlem</a></li>
            <li><a href="skidspar.php">Skidspår</a></li>

            <div class="closeMenu"><i class="fa fa-times"></i></div>
        </ul>
    </nav>
     <h2>Medlemsavgifter 2024</h2>
     <div class="dropdownbuttons">
     <div class="dropdown">
      <button class="dropbtn">Ålderskategori</button>
      <div class="dropdown-content">
      <a>1. 0-12 år</a>
      <a>2. 13-20 år</a>
      <a>3. 21-64 år</a>
      <a>4. 65+ år</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Aktiv Medlem</button>
      <div class="dropdown-content">
      <a>1. 150 SEK</a>
      <a>2. 350 SEK</a>
      <a>3. 550 SEK</a>
      <a>4. 450 SEK</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Stöd Medlem</button>
      <div class="dropdown-content">
      <a>1. 100 SEK</a>
      <a>2. 100 SEK</a>
      <a>3. 250 SEK</a>
      <a>4. 200 SEK</a>
      </div>
    </div>
  </div>
     
      <h2>Skidspårsavgifter 2024</h2>
      <div class="dropdownbuttons">
        <div class="dropdown">
         <button class="dropbtn">Typ av kort</button>
         <div class="dropdown-content">
         <a>Årskort</a>
         <a>Dagskort</a>
         
         </div>
       </div>
       <div class="dropdown">
         <button class="dropbtn">Aktiv Medlem</button>
         <div class="dropdown-content">
         <a>600 SEK</a>
         <a>80 SEK</a>
         </div>
       </div>
       <div class="dropdown">
         <button class="dropbtn">Stöd Medlem</button>
         <div class="dropdown-content">
         <a>600 SEK</a>
         <a>80 SEK</a>
         </div>
       </div>
       <div class="dropdown">
        <button class="dropbtn">Ej medlem</button>
        <div class="dropdown-content">
        <a>900 SEK</a>
        <a>80 SEK</a>    
        </div>
      </div>
     </div>
     <title>Bli Medlem</title>
     <div class="medlemskap"> 
     <div id="membership-form">
       <h2>Bli Medlem</h2>
       <form method = "post" id="registration-form" >
         <label for="email">E-post:</label>
         <input type="email" id="email" name="email" required><br>
         <label for="password">Lösenord:</label>
         <input type="password" id="password" name="password" required><br>
         <label for="personnummer">Personnummer: </label>
         <input type="text" id="personnummer" name="personnummer" pattern="[0-9]{12}" required><br>
         <label for="membership-type">Typ av medlemskap:</label>
         <select id="membership-type" name="membershipType" required>
           <option value="Aktiv_medlem">Aktiv medlem</option>
           <option value="Stod_medlem">Stöd medlem</option>
         </select><br>
         <input type="submit" value="Bli Medlem">
       </form>
     </div>
    </div>
    <?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$name = "bli_medlem";


$conn = new mysqli($servername, $username, $password, $name);


if ($conn->connect_error) {
    die("Anslutningen misslyckades: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

$email = $_POST['email'];
$password = $_POST['password'];
$personnummer = $_POST['personnummer']; 
$membershipType = $_POST['membershipType'];


$sql = "INSERT INTO information_medlem (email, password1, personnummer, membershipType) VALUES ('$email', '$password', '$personnummer', '$membershipType')";


if ($conn->query($sql) === TRUE) {
$personnummer = $_POST['personnummer']; 
    echo "";
} else {
    echo "Fel: " . $sql . "<br>" . $conn->error;
}
}


$conn->close();
?>

    <div id="tack-meddelande" style="display: none;">
      <div class="tack-innehåll">
          <h2>Tack för att du blev medlem!</h2>
          <p>Ditt medlemskap har registrerats.</p>
      </div>
  </div>
   </body>
   <form id="registration-form" action="register.php" method="POST" onsubmit="handleMembership(event)">
   <script src="blimedlem.js"></script>
   <footer>
    <p>&copy; 2024 Hestra IF </p>
   </footer>
</html>
   