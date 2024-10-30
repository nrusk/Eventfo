<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet">
  <title>Eventfo - Your Event</title>
</head>
<body class="container full-height-grow">
  <header class="main-header">
    <a href="index.html" class="logo">
      <img src="images/logo.png"  alt="Eventfo Logo">
      <div class="logo-name">Eventfo</div>
    </a>
    <nav class="navigation">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="generate.html">Generate</a></li>
        <li><a href="info.html">Info</a></li>
        <li class="active"><a href="about.html">About</a></li>
        <li><a href="events.html">Events</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="account.html">Account</a></li>
      </ul>
    </nav>
  </header>

  <section class="generate-main-section">
    <div class="container full-height-grow2">
    <div class="about-section">
      <h1 class="generate-h1">Here Are Your Event Details:</h1>
      <p class="details">
        <?php

      $name = $_POST['name'];
      $event_type = $_POST['event_type'];
      $event_name = $_POST['event_name'];
      $location = $_POST['location'];
      $time = $_POST['time'];
      $about = $_POST['about'];

        echo "<p style='margin-left: auto;color: #000000;font-family: Angkor, sans-serif;text-align: center;'>Eventfo QR Code Owner: <input style='background: #C4C4C4;border: 1px solid #C4C4C4;outline: none;font-size: 1em;padding: .5em; 'type='text' value='$name' readonly/></p>";
        echo "<br>";
        echo "<p style='margin-left: auto;color: #000000;font-family: Angkor, sans-serif;text-align: center;'> Type of Event: <input style='background: #C4C4C4;border: 1px solid #C4C4C4;outline: none;font-size: 1em;padding: .5em; 'type='text' type='text' value='$event_type' readonly/></p>";
        echo "<br>";
        echo "<p style='margin-left: auto;color: #000000;font-family: Angkor, sans-serif;text-align: center;'> Name of the Event: <input style='background: #C4C4C4;border: 1px solid #C4C4C4;outline: none;font-size: 1em;padding: .5em; 'type='text' type='text' value='$event_name' readonly/></p>";
        echo "<br>";
        echo "<p style='margin-left: auto;color: #000000;font-family: Angkor, sans-serif;text-align: center;'> Location of the Event: <input style='background: #C4C4C4;border: 1px solid #C4C4C4;outline: none;font-size: 1em;padding: .5em; 'type='text' type='text' value='$location' readonly/></p>";
        echo "<br>";
        echo "<p style='margin-left: auto;color: #000000;font-family: Angkor, sans-serif;text-align: center;'> Time of Event: <input style='background: #C4C4C4;border: 1px solid #C4C4C4;outline: none;font-size: 1em;padding: .5em; 'type='text' type='text' value='$time' readonly/></p>";
        echo "<br>";
        echo "<p style='margin-left: auto;color: #000000;font-family: Angkor, sans-serif;text-align: center;'> About the Event: <input style='background: #C4C4C4;border: 1px solid #C4C4C4;outline: none;font-size: 1em;padding: .5em; 'type='text' type='text' value='$about' readonly/></p>";
        echo "<br>";

        ?>
        <br>

        <div class="input-group">
      <button type="button" class="btn"  value = "Back" onclick="javascript:history.go(-1)">Back</button>
    </div>

        <!-- <input class="btn" type="button" value = "Back" onclick="javascript:history.go(-1)" /> -->
        </p>
      <div class="aboutgif"><img src="images/QRimage.gif" alt="QR Code GIF" width="200"></div>
    </div>
  </div>
  </section>


  <footer class="footer">
    <div class="container">
      <nav class="footer-nav">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>

      <!-- <nav class="footer-nav">
        <ul>
          <li class="copyright">Copyright &copy; Eventfo 2022</li>
        </ul>
      </nav> -->
      <nav class="footer-nav"></nav>

      <nav class="footer-nav">
        <ul>
          <li>
            <a href="https://nrusk.github.io/" class="social-links">
              <img src="images/github.svg" alt="GitHub">
            </a>
          </li>
          <li>
            <a href="https://twitter.com/nathan_rusk" class="social-links">
              <img src="images/twitter.svg" alt="Twitter">
            </a>
          </li>
        </ul>
      </nav>
    </div>
    
  </footer>
</body>
</html>



