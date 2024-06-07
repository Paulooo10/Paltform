<!--__Paltform, a simple platform game online__-->

<!DOCTYPE html>
<html lang="en">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3403428285100871"
     crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/ee0db3136c.js" crossorigin="anonymous"></script>

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Paltform - main page</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
  <link href="css/menu.css" rel="stylesheet" type="text/css">
    

    <meta content="Paltform game - alpha version" property="og:title" />
    <meta content="Paltform is a platform game online created by Valv0 rainbowdash and betawolfy." property="og:description" />
    <meta content="https://paltform.valv0fluttershy.repl.co/" property="og:url" />
    <meta content="https://i.imgur.com/bSKl1zo.png" property="og:image" />
    <meta content="#43B581" data-react-helmet="true" name="theme-color" />
    <style>
      body {font-family: Arial, Helvetica, sans-serif;}
      
      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }
      
      /* Modal Content */
      .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
      }
      
      /* The Close Button */
      .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }
      
      .close:hover,
      .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
      }

      #visit-counter {
        color: black;
        width: 48px;
      }
      </style>
</head>
  
<body>

  
  <div class="title">
<h1>Welcome on Paltform! version 1.4</h1>
 <h2 id="randomWord"></h2>
<h3>2 new levels! (for now)</h3>
  </div>

  <!--<h2 id="randomWord"></h2>-->
    <h2>My class play this game :D</h2>

  <p>If you want to play the game, click on "Play Paltform"</p>

  <h1> /!\ - ANNOUCEMENT - /!\</h1>
  <h2>the url and domain will change soon!</h2>
  <p><b>It's been a long time, welcome back to Paltform!</b><br>
    New accommodation, new levels... Paltform has been given a facelift to welcome you back!</p>
<nav>
  <ul>
  <li><a href="admin/backoffice.php">Private</a></li>
    <li><a href="resolutions/tuto.html">tutorial</a></li>
   <!-- <div class="tooltip"><li><a href="/soon.html">720 x 360</a></li>
      <span class="tooltiptext">not playable</span>
    </div>-->
    <div class="tooltip"><li><a href="resolutions/1080720.html">Play Paltform</a></li>
      <span class="tooltiptext">1080 x 720</span>
    </div>
    <!-- <li><a href="/resolutions/1080720hard.html">Hardcore</a></li> -->
        <!-- <li><a href="/gamecenter/dvd/dvd.html">DVD logo</a></li> -->
    <li><a href="testcenter.html">GameCenter</a></li>
    <li style="float:right"><a class="active" href="credit.html">credit</a></li>
  </ul>
</nav>
<!-- Trigger/Open The Modal -->
<button id="myBtn">News</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1>Paltform news</h1>
      <p>The whole team is looking forward to seeing you again 🙏</p>
    
  </div>

</div>
<!--<div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div> -->  
  
<div class="dark">  
  
  <h3 id="DarkModetext">Dark Mode is OFF</h3>
    <button onclick="darkMode()">Darkmode</button>
    <button onclick="lightMode()">LightMode</button>

</div>

  <div class="explique">
    <h1>What is Paltform?</h1>
    <img src="https://forthebadge.com/images/badges/uses-html.svg" alt="built with HTML">
    
    <img src="https://forthebadge.com/images/badges/made-with-javascript.svg" alt="made with JS">
    <img src="https://forthebadge.com/images/badges/designed-in-ms-paint.svg" alt="i used ms paint">
    <img src="https://forthebadge.com/images/badges/fixed-bugs.svg" alt="bug fixed">
    <img src="https://forthebadge.com/images/badges/for-you.svg" alt="for you">
      <p>Paltform is a platform game online created by Valv0 rainbowdash, betawolfy, and paulo_10. It is a platform game that is designed to be played on a computer. the principe is simple, if you fall, you're teleported to the beginning of the level, so you can retry. there is no life, no game over, only victory.<br>I originally created this in order to let my classmates play on computer. And because this site is unknown by National Education, this game is not blocked by Proxies! <br> so, student of the world, have fun! </p>
  </div>

  <!-- that one devlog to say what change on the game.. -->
  
<div class="changelog">
  <h2>actual version : 1.4</h2>
  <!--<h2 id="randomWord"></h2>-->
    <h3>Changelog</h3>

      <!-- <h4>2.0 - Site automation</h4>
        <p>- Time added by users</p>
        <p>- Addition of admins who will validate and put online or not</p>
        <p>- Data protection</p>
        <p>- Site debugging</p>
        <p>- New domain name</p> -->

      <h4>1.4 - New levels</h4>
       <p>- added 2 new levels for now</p>
       <p>- removed the sprint cooldown</p>
       <p>- changed the background</p>
       <p>Working on a new in-game interface</p>
       <p>- changed the credit style (can become the main theme)</p>
  
  
     <h4>1.3.1 - Test center become GameCenter</h4>
      <p>- All games are now on the Gamecenter page. No exeption.</p>
      <p>- Added a new game: ProgressbarCLI95.</p>
      <p>- Added another game: Mine! this game is a banger btw.</p>


      <h4>1.3 - some fix </h4>
        <p>- Update this page, the bar is not ugly anymore!</p>
        <p>- Update the doodle jump! he is not ugly too!</p>
        <p>- made all game "playable" on switch (don't question me)</p>

      <h4>1.2 - more games upddate</h4>
        <p>- adding a snake</p>
        <p>- adding a doodle jump</p>
        <P> Dont worry, i will continue to work on the principal game: platform games.</P>
  
      <h4> 1.1.1 - just adding a silly tetris thing </h4>
        <p>just added a tetris mode, i'll probably change some stuff. </p>

  
      <h4>1.1 - lol, it's broken</h4>
          <p> -you shoouldn't not playing the 720x360 version for the moment.</p>
          <p> -- EDIT: I remove the 720x360 version for the moment. </p>

      <h4>1.0 - first public version!</h4>
        <h5> FINALLY SHE IS HERE </h5>
        <p>  - Added the testcenter.</p>
          <p>  -- Let you test some new games or mechanics</p>
        <p>  - Make some improvement.</p>
        
      <h4>0.1.9.7a</h4>
        <h5> WE RE ON THE STRAIGHT LINE FOR 1.0</h5>
        <p>  - Remove animation for the splashtext.</p>
        <p>  - Add some splashtext.</p>
        <p>  - add a tip for the 720 x 360 version.</p>
          <p>  -- Should be played on a laptop</p>
        <p>  - Adding some comments..</p>
        <p>  - Rework the submit time section.</p>
        <p>  - Add some cool icon on the table of time.</p>
  
      <h4>0.1.9.6a</h4>
        <h5> Now, it's time to take care of nodejs version..</h5>
        <p>  - Add the place on the table of time.</p>
        <p>  - Make the main page even mode perfect!</p>
        <p>  - Enable Christmas mode!</p>
        <p>  - Add a new test!</p>
          <p>  -- I'm currently working on a webserver version with databases </p>
          <p>  -- Maybe you'll add your times by your own, soon.. I SAID MAYBE!!</p>
        <p>  - Add some splashtext.. </p>
        <p>  - Get ready for 1.0!</p>
        <p>  ---- [valvo] is trying to explain all his code lol. good luck!</p>
        

      <h4>0.1.9.5a</h4>
        <p>  - Add a tutorial!</p>
          <p>  -- It will be update in order to give you some tips</p>
          <p>  -- The tutorial is not a speedrun mode!</p>
        <p>  - Remove the version number on the nametab</p>
        <p>  - Make some Improvements</p>
        <p>  - Add some new splashtext</p>
  
      <h4>0.1.9.4a</h4>
        <p>  - Adding stopwatch in all gamemode.</p>
        <p>  - Sprinting is temporary infinite when shift is pressed.</p>
        <p>  - Working on a tutorial for the 1.0</p>
        <p>  - You can play with ZQSD than WASD.</p>
        <p>  - Fix a bug that make the game unplayable when Caps lock is enabled. </p>
          <h5> Please Welcome our new tester: LunarSylph :D</h5>
  
      <h4>0.1.9.3a</h4>
        <p>  - Edit the credit page. </p>
  
      <h4>0.1.9.2a</h4>
        <p>  - I'll try to add a custom website</p>
        <p>  -  - edit: ok, normally, it works : paltform.tk</p> 
        <p>  - Fix a bug related to this custom website setup.</p>
        <p>  - Add another way to submit your time.</p>
        <p>  - Make the main page even more beautiful.</p>
        <p>  - Remove the typing animation because it's annoying with the menu.</p>
        <p>  - Move the splashtext.</p>
        <p>  - Add a death count to 1080 x 720 version. </p>
  
  
      <h4>0.1.9.1a</h4>
        <p>  - Add a full bug version. It's a very hard thing.</p>
          <p>  -  - It's the new "Hardcore" version</p>
  
      <h4>0.1.9a</h4>
        <p>  - Add a scoreboard.</p>
        <p>  - Edit the home page a little bit.</p>
  
      <h4>0.1.8a</h4>
        <p>  - Add a dark mode and button to toggle between the two mode.</p>
        <p>  - Add a light mode and button to toggle between the two mode.</p>
        <p>  - Add a way to stop speedrun the "make your choice" level. .</p>
        <p>  - Add the test page directly on the main page.</p>
        <p>    - Add a new test page.</p>
        <p>  - Remove all cookie.</p>
        <p>  - Add a random splashtest under the actual version number</p>
        <p>  - Edit the symbol for the typing animation (from | to _)</p>
        <p>  - Cleaning the code of the main page.</p>
        <p>I decided to remove the hardcore mod for the moment due to some bugs.</p>
        <p>We will pass on 1.0 release very soon.</p>
  
      <h4>0.1.7.1a :</h4>
        <p>  - Add a new menu for the game.</p>
        <p>  - Add a new menu for the credits.</p>
        <p>  - Get rid of the ugly button ingame.</p>
        <p>  - Add a HARDCORE mod!</p>
        <p>  - </p>
      <h4>0.1.6a</h4>
        <p>  - Add Frame Per Second.</p>
      <h4>v0.1.4a</h4>
        <p>  - adding first levels of the Glitchy world</p>
        <p>  - a completly gliched world.</p>
        <p>- tranlation in english in progress.</p>
      <h4>v0.1a</h4>
        <p>- Initial publish</p>
</div>

<!-- Table of time. in order to uuuh.. organize submitted time? -->
  
  <h1>table of time:</h1>
  <div class="warning">
    <p>No reset planned.</p>
  </div>
  <!-- <p>you can submit your time by:</p>
  <i class="fa-brands fa-discord">: betawolfy</i>
  <p> </p>
  <i class="fa-brands fa-guilded">   :  <a href="https://guilded.gg/betawolfy">betawolfy</a></i>
  <p> </p>
  <i class="fa-brands fa-twitter"> : @betawolfy_</i>
  <p> </p>
  <i class="fa-solid fa-envelope">  <a href="mailto:contact.betawolfy@gmail.com?subject=Time%20submission%20for%20Paltform&body=Thank%20you%20to%20play%20the%20game!%20If%20you%20want%20to%20be%20on%20the%20table%20of%20time%2C%20please%20tell%20me%3A%0A-%20Nickname*%3A%20%0A-%20Your%20time%3A%20%0A-%20Your%20proof*%3A%20%0ARemenber%20that%20cheat%20is%20bannable.%0A*%20%3D%20not%20optionnal!">Submit your time by mail</a></i> -->
  <table>

  <?php
include('secret.php');
$mabd = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=UTF8;', USER, PASSWORD);
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM joueurs";
$resultat = $mabd->query($req);
?>

<table>
<tr> 
  <th>Place</th>
  <th>Time (in seconds)</th> 
  <th>nickname</th>
  <th>comment from the developer</th>
</tr>

<?php
// Boucle sur les résultats de la requête
while ($value = $resultat->fetch(PDO::FETCH_ASSOC)) {
?>
<tr>
  <?php 
    echo '<td>'.'<h2>'.$value['joueur_place'].'</h2>'.'</td>';   
    echo '<td>'.'<p style="text-align: center;">'.$value['joueur_temps'].'</h3>'.'</td>'; 
    echo '<td>'.'<p>'.$value['joueur_pseudo'].'</p>'.'</td>'; 
    echo '<td>'.'<p>'.$value['joueur_commentaire']. '</p>'; 
  ?>
</tr>
<?php
}
?>



    

<!-- <tr> 
  <td><i class="fa-regular fa-star">2nd</i></td>
  <td><?php echo '<h3>'.$value['joueur_temps'].'</h3>'; ?></td>
  <td><?php echo '<p>'.$value['joueur_pseudo'].'</p>'; ?></td>
  <td><?php echo '<p>'.$value['joueur_commentaire']. '</p>'; ?></td>
</tr>  
<tr>
  
  <td>3rd</td>
  <td></td>
  <td></td>
  <td></td>
</tr>   -->
</table>

</body>

<footer>  
<p>by: betawolfy and Valvo_rainbowdash</p>  
<p>Contact me:   
<a href="mailto:contact.betawolfy@gmail.com">contact.betawolfy@gmail.com</a>.  
</p>  
</footer>


</html>

<!--Ok, stop html.. it's time for somes script.. -->

<!-- Here is the splashtext script.. -->

</script>
<p>Total visits: <span id="visit-counter"></span></p>
<script>
  document.getElementById("visit-counter").innerText = localStorage.getItem("visits");

const myList = ["99% Jquery free", "May contain bugs", "A really good platformer", "Also try flappy bird", "100% glitchy", "That rectangle is a spy", "Noted 21/20 on ThatOneGreensite", "Play it or I will find your house!", "better than Morio", "Powered by REPL.IT", "Only 17MB", "Number 1 speedrunning game", "Mi nott qunow ortograph", "Now has a tutorial!", "imagine 0.1.1Oa o _o", "Hello World", "You should support Alexflipnote", "Maybe a patreon soon!", "do the tutorial first!", "seen on some discord server", "Maybe a very good game", "Will make some events!", "hey, play it.", "Paltform will have a new domain!", "Enjoy the game!"];
randomizeFunction()

function randomizeFunction() {
    document.getElementById("randomWord").innerHTML = myList[Math.floor(Math.random() * myList.length)]
}

</script>
<!-- here is the dark/light mode (because why not.. maybe one day In game idk-->
<script>
      function darkMode() {
        var element = document.body;
        var content = document.getElementById("DarkModetext");
        element.className = "dark-mode";
        content.innerText = "Dark Mode is ON";
      }
      function lightMode() {
        var element = document.body;
        var content = document.getElementById("DarkModetext");
        element.className = "light-mode";
        content.innerText = "Dark Mode is OFF";
      }
    </script>
<!-- Script for the modal. the "button" thing.. -->
    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<style>
  .badge {
    position: fixed;
    bottom: 10px;
    right: 10px;
    background-color: black;
    color: white;
    padding: 5px;
    border-radius: 4px;
  }
</style>
<div class="badge">READ THE ANNOUNCEMENT</div>

<script>
  if(localStorage.getItem("visits")) {
    localStorage.setItem("visits", parseInt(localStorage.getItem("visits")) + 1);
  } else {
    localStorage.setItem("visits", 1);
  }
</script>
</html>