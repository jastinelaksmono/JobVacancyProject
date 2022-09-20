<!DOCTYPE html>
<html lang="en">
<head>
    <title> AboutThisAssignment</title>
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
            <img src="style/bgPink.png" id="background" alt="bg">
            <div class="subContainer"></div>
            <div class="containerBorder" style = "border-color: #970260;">


                <!-- Display the navbar -->
                <nav id = "topnav4">
                    <a href="index.php" >Home</a>
                    <a href="postjobform.php">Post Job Vacancy</a>
                    <a href="searchjobform.php">Search Job Vacancy</a>
                    <a href="about.php" class="active">About This</a>
                </nav>
                
                <!-- The title logo of the page -->
                <div class="imageContainer">
                    <img src="style/abtLogo.png" id="logo2" alt="logo2">
                </div>
            
            </div>
        </div>

        <!-- The block containers to display answers to the question regarding this assignment -->
        <div class = "blockAnim1">
            <div class = "label" style = "color: #b42a08;">What is the PHP version installed in mercury?</div>
            <img src="style/orange.png" id="orangeBlock" alt="orangeBlock" class = "blockImg">
            <?php echo '<div class = "ans">Current PHP version: ' . phpversion() . '</div>';?>
        </div>

        <div class = "blockAnim2">
            <div class = "label">What tasks you have not attempted or not completed?</div>
            <img src="style/green.png" id="greenBlock" alt="greenBlock" class = "blockImg">
            <div class = "ans">All tasks have been completed</div>
        </div>

        <div class = "blockAnim1">
            <div class = "label" style = "color: #970260; margin-left:10vw; margin-right:10vw;">What special features have you done, or attempted, in creating the site that we should know about?</div>
            <img src="style/pink.png" id="pinkBlock" alt="pinkBlock" class = "blockImg">
            <div class = "ans">All features are implemented according to the pdf instructions</div>
        </div>

        <div class = "blockAnim2">
            <div class = "label" style = "color: #3d0087; margin-left:10vw; margin-right:10vw;">What discussion points did you participated on in the unit’s discussion board for Assignment One?</div>
            <img src="style/purple.png" id="purpleBlock" alt="purpleBlock" class = "blockImg">
            <img src="style/disc.jpg" id="disc" alt="discussion" class = "disc">
        </div>

    </main>

    <!-- Displaying a copyright information -->
    <footer>
        <div id ="copyright" style = "background-color: #dc008c;">Copyright &copy; 2022 Jastine Laksmono</div>
    </footer>
    
</body>
</html>