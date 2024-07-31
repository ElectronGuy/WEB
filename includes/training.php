<?php
require_once('config.php');
require_once('practiceClass.php');
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>IDG - Training</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script
      src="https://kit.fontawesome.com/a33f9f7185.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style/trainingstyle.css" />
    <style>
    </style>
  </head>

  <body>
    <header>
      <div class="row">
        <div class="col-lg-12 col-sm-12 headerStyle">
          <img src="../images/IDG.png" height="250" width="250" />
        </div>
      </div>
      <nav
        class="navbar navbar-expand-md bg-light navbar-light"
        style="width: 100%"
      >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#collapsibleNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav mr-left">
            <li class="nav-item">
              <a class="nav-link" onclick="notAvaliable()" href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="notAvaliable()" href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="notAvaliable()" href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="notAvaliable()" href="#"
                ><i class="fab fa-pinterest-p"></i
              ></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="notAvaliable()" href="#">צור קשר</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="notAvaliable()" href="#">התחברות</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="notAvaliable()" href="#">הרשמה</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../coaches.html">המאמנים שלנו</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../recipes.html">מתכונים</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../menu.html">בניית תפריט</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="training.php">אימונים</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.html">דף הבית</a>
            </li>
            <li class="nav-item">
              <img src="../images/dumbell.png" alt="..." height="36" />
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <div class="container-fluid" style="padding: 0px">
        <div class="row firstRow">
          <div class="col-lg-12">
            <h1 class="mainTitle">התרגילים שלנו</h1>
            <hr />
          </div>
        </div>
        
        <section class="row">
          <div class="col-lg-12">
            <h2>תרגילי חזה</h2>
          </div>
          <div class="container-chest">
            <?php
                $part = 'Chest';
                $exercises = Practice::fetch_chest_practices($part);
                foreach($exercises as $exercise){
                      echo "<div class='card chest'>";
                      echo "<div class='card-body'>";
                      echo "<p><b>שם התרגיל: </b> " . $exercise->exerciseName. "</p>";
                      echo "<p><b>תיאור: </b> " . $exercise->description. "</p>";
                      echo "<p> <image src='$exercise->image' widht=200px height=200px><p>";
                      echo "</div>";
                      echo '</div>';
                }
              ?>
          </div>
        </section>

        <section class="row">
          <div class="col-lg-12">
            <h2>תרגילי כתפיים</h2>
          </div>
          <div class="container-chest">
            <?php
              $part = 'Shoulder';
              $exercises = Practice::fetch_chest_practices($part);
              foreach($exercises as $exercise){
                    echo "<div class='card chest'>";
                    echo "<div class='card-body'>";
                    echo "<p><b>שם התרגיל: </b> " . $exercise->exerciseName. "</p>";
                    echo "<p><b>תיאור: </b> " . $exercise->description. "</p>";
                    echo "<p> <image src='$exercise->image' widht=200px height=200px><p>";
                    echo '</div>';
                    echo "</div>";
              }
            ?>
          </div>
        </section>

        <section class="row">
          <div class="col-lg-12">
            <h2>תרגילי רגליים</h2>
          </div>
          <div class="container-chest">
            <?php
              $part = 'Legs';
              $exercises = Practice::fetch_chest_practices($part);
              foreach($exercises as $exercise){
                    echo "<div class='card chest'>";
                    echo "<div class='card-body'>";
                    echo "<p><b>שם התרגיל: </b> " . $exercise->exerciseName. "</p>";
                    echo "<p><b>תיאור: </b> " . $exercise->description. "</p>";
                    echo "<p> <image src='$exercise->image' widht=200px height=200px><p>";
                    echo "</div>";
                    echo "</div>";
              }
            ?>
          </div>
        </section>

        <section class="row">
          <div class="col-lg-12">
            <h2>תרגילים לדו-ראשי(יד קדמית)</h2>
          </div>
          <div class="container-chest">
            <?php
              $part = 'Biceps';
              $exercises = Practice::fetch_chest_practices($part);
              foreach($exercises as $exercise){
                    echo "<div class='card chest'>";
                    echo "<div class='card-body'>";
                    echo "<p><b>שם התרגיל: </b> " . $exercise->exerciseName. "</p>";
                    echo "<p><b>תיאור: </b> " . $exercise->description. "</p>";
                    echo "<p> <image src='$exercise->image' widht=200px height=200px><p>";
                    echo "</div>";
                    echo "</div>";
              }
            ?>
          </div>
        </section>

        <section class="row">
          <div class="col-lg-12">
            <h2>תרגילים לתלת-ראשי(יד אחורית)</h2>
          </div>
          <div class="container-chest">
            <?php
              $part = 'Triceps';
              $exercises = Practice::fetch_chest_practices($part);
              foreach($exercises as $exercise){
                    echo "<div class='card chest'>";
                    echo "<div class='card-body'>";
                    echo "<p><b>שם התרגיל: </b> " . $exercise->exerciseName. "</p>";
                    echo "<p><b>תיאור: </b> " . $exercise->description. "</p>";
                    echo "<p> <image src='$exercise->image' widht=200px height=200px><p>";
                    echo "</div>";
                    echo "</div>";
              }
            ?>
          </div>
        </section>

        <section class="row">
          <div class="col-lg-12">
            <h2>תרגילים לגב</h2>
          </div>
          <div class="container-chest">
            <?php
              $part = 'Back';
              $exercises = Practice::fetch_chest_practices($part);
              foreach($exercises as $exercise){
                    echo "<div class='card chest'>";
                    echo "<div class='card-body'>";
                    echo "<p><b>שם התרגיל: </b> " . $exercise->exerciseName. "</p>";
                    echo "<p><b>תיאור: </b> " . $exercise->description. "</p>";
                    echo "<p> <image src='$exercise->image' widht=200px height=200px><p>";
                    echo "</div>";
                    echo "</div>";
              }
            ?>
          </div>
        </section>
        
      </div>
    </main>

    <footer>
      <nav
        class="navbar navbar-expand-md bg-dark navbar-dark"
        style="width: 100%"
      >
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#collapsibleNavbar1"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav mr-left">
          <li class="nav-item">
            <a class="nav-link disabled" href="#"
              >&copy; 2022 IDG. All Rights Reserved</a>
          </li>
        </ul>
        <div class="collapse navbar-collapse" id="collapsibleNavbar1">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" onclick="notAvaliable()" href="#">תנאי שימוש</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="notAvaliable()" href="#">מדיניות פרטיות</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="notAvaliable()" href="#">קריירה</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="notAvaliable()" href="#">אבטחת מידע</a>
            </li>
          </ul>
        </div>
      </nav>
    </footer>
    <script src="../JavaScript/nwejava.js"></script>
  </body>
</html>
