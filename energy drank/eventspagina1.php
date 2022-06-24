<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TS Energy</title>
    <link rel="stylesheet" href="css/eventspagina1.css">
</head>
<body>

    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">LOGO</div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
          <!-- USING CHECKBOX HACK -->
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>
          <!-- NAVIGATION MENUS -->
          <div class="menu">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li class="services">
              <a href="#">Events</a>
              <!-- DROPDOWN MENU -->
              <ul class="dropdown">
                <li><a href="#">Dropdown 1 </a></li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li>
            <li><a href="pricing.php">Pricing</a></li>
            <li><a href="contact.php">Contact</a></li>
            <img src="images/shop.png" alt="#" height="32px" class="shop">
          </div>
        </ul>
      </nav>
      <section class="info-events-page">
        <p>Welcome to our events page, her you can see every artist that is going to play the next month. 
            If you want some more information you can click on the image of the person.</p>
      </section>
      <section id="events-eerste-rij">
          <a href="Adele.php"><img src="images/adele.png" class="Adele"></>
          <a href="eminem.php"><img src="images/eminem.png" class="Eminem"></a>
          <a href="dualipa.php"><img src="images/dualipa.png" class="Dua-Lipa"></a>
      </section>
      <section id="events-tweede-rij">
          <a href="justinbieber.php"><img src="images/Justin-Bieber-1.png" class="Justin-Bieber"></>
          <a href="eminem.php"><img src="images/eminem.png" class="Eminem"></a>
          <a href="dualipa.php"><img src="images/dualipa.png" class="Dua-Lipa"></a>
      </section>

</body>
</html>