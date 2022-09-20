<!DOCTYPE html>
<html lang="en">
<head>
    <title> SearchJobForm </title>
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
            <img src="style/bgPurple.png" id="background" alt="bg">
            <div class="subContainer"></div>
            <div class="containerBorder" style = "border-color: #3d0087;">

                <!-- Display the navbar -->
                <nav id = "topnav3">
                    <a href="index.php">Home</a>
                    <a href="postjobform.php">Post Job Vacancy</a>
                    <a href="searchjobform.php" class="active">Search Job Vacancy</a>
                    <a href="about.php">About This</a>
                </nav>

                <!-- Display the title of the page -->
                <div class = "title">Search Job Vacancy</div>

                <!-- The form to be filled to search job vacancy based on filtered requirements inputted -->
                <form action = "searchjobprocess.php" method = "get" >
                    <table class = "formTable">
                        <tr>
                            <td>
                            <p>
                                <input type="text" id="job" name="job" size="20" placeholder = "Job Title" class = "pHolder" style = "border-color:#3d0087; margin-left:auto; margin-right:auto;">
                            </p>
                            <p>
                                <label class="label" style = "color: #3d0087;">Position&nbsp;</label>
                                <input id="fTime" type="radio" name="position" value="fulltime" class="label2"/>
                                <label for="fTime" class="label2">Full Time&nbsp;</label>
                                <input id="pTime" type="radio" name="position" value="parttime" class="label2"/>
                                <label for="pTime" class="label2">Part Time</label>
                                
                            </p>
                            <p>
                                <label class="label" style = "color: #3d0087;">Contract</label>
                                <input id="ongoing" type="radio" name="contract" value="ongoing" class="label2"/>
                                <label for="ongoing" class="label2">On-going</label>
                                <input id="fixed" type="radio" name="contract" value="fixed" class="label2"/>
                                <label for="fixed" class="label2">Fixed Term</label>
                                
                            </p>
                            <p>
                                <label class="label" style = "color: #3d0087;">Application by</label>
                                <input type="radio" id="post" name="applicationby" value="post" class="label2"/>
                                <label for="post" class="label2">Post</label>
                                <input type="radio" id="email" name="applicationby" value="email" class="label2"/>
                                <label for="email" class="label2">Email</label>
                            
                            </p>
                            <p>
                            <label class="label" style = "color: #3d0087;">Location&nbsp;&nbsp;</label>
                                <select name="location" id="loc" style ="width: 10vw;">
                                    <option value="">---</option>
                                    <option value="ACT">ACT</option>
                                    <option value="NSW">NSW</option>
                                    <option value="NT">NT</option>
                                    <option value="QLD">QLD</option>
                                    <option value="SA">SA</option>
                                    <option value="TAS">TAS</option>
                                    <option value="VIC">VIC</option>
                                    <option value="WA">WA</option>
                                </select> 
                            </p>

                            <div class = "label" style = "color: #3d0087;"><p><br>All fieds are required</p></div>
                            
                            <p>
                                <input type="submit" value="Search" class ="button" style = "margin-left: 6vw; margin-right: 1vw;">
                                <input type="reset" value="Reset" class ="button" style = "margin-right: 5vw;">
                            </p>

                            </td>
                        </tr>               

                    </table>
                
            </form>
            </div>
        </div>

    </main>

    <!-- Displaying a copyright information -->
    <footer>
        <div id ="copyright" style = "background-color: #6519c3;">Copyright &copy; 2022 Jastine Laksmono</div>
    </footer>

    </body>
</html>