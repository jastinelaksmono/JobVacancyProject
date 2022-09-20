<!DOCTYPE html>
<html lang="en">
<head>
  <title> Homepage </title>
  <meta charset="utf-8" />
  <meta name="description" content="Advanced Web Development" />
  <meta name="keywords"    content=" Assignment 1 " />
  <meta name="author"      content="Jatine Francy Laksmono" />
  <link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>
    
  <!-- Main components in the page -->
  <main>

  <!-- The background of the upper page -->
    <div class ="container">
      <img src="style/bg.png" id="background" alt="bg">
      <div class="subContainer"></div>
      <div class="containerBorder">

        <!-- Display the navbar -->
        <nav id = "topnav">
          <a href="index.php" class="active" >Home</a>
          <a href="postjobform.php">Post Job Vacancy</a>
          <a href="searchjobform.php">Search Job Vacancy</a>
          <a href="about.php">About This</a>
        </nav>

        <!-- The sliding components (between title logo, card and statement) -->
        <div class="slider">
          <span id="slide-1"></span>
          <span id="slide-2"></span>
          
          <div class="imageContainer">
            <img src="style/logo.png" id="logo" alt="logo">
            <div id = "box1a"></div>
            <div id = "box1b">
              <div id = "flipBox1b">
                  <div id = "box1bFront">
                    <img src="style/pp.png" alt="profilePic" id ="profilePic"/>
                    <div id = "bio">Jastine Francy<br>Laksmono<br><br>103830611<br><br>103830611@stu<br>dent.swin.edu.au<br><br>
                      <div id = "statement"> <strong><em>hover Card to<br>see statement</em></strong> </div>
                    </div>
                  </div>
                  <div id = "box1bBack">
                    <h5 id = "statementText">I declare that this assignment is my individual work. 
                    I have not worked collaboratively nor have I copied from 
                    any other student\'s work or from any other source</h5>
                  </div>
              </div>
            </div>
          </div>
          
          <!-- The prev and next buttons to alternate between two slides -->
          <a href="#slide-1"><img src="style/ctn.png" alt="prev" id="prev"/></a>
          <a href="#slide-2"><img src="style/ctn.png" alt="next" id="next"/></a>

          <!-- The circle buttons to alternate between two slides -->
          <div class="circBtn">
            <a href="#slide-1"></a>
            <a href="#slide-2"></a>
          </div>

        </div>
        
      </div>
    </div>

  </main>

  <!-- Displaying a copyright information -->
  <footer>
    <div id ="copyright" style = "background-color: #f9622f;">Copyright &copy; 2022 Jastine Laksmono</div>
  </footer>

    
</body>
</html>