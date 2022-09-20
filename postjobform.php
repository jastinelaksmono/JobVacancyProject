<!DOCTYPE html>
<html lang="en">
<head>
    <title> PostJobForm </title>
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
            <img src="style/bgGreen.png" id="background" alt="bg">
            <div class="subContainer"></div>
            <div class="containerBorder" style = "border-color: #0e5352;">

                <!-- Display the navbar -->
                <nav id = "topnav2">
                    <a href="index.php">Home</a>
                    <a href="postjobform.php" class="active">Post Job Vacancy</a>
                    <a href="searchjobform.php">Search Job Vacancy</a>
                    <a href="about.php">About This</a>
                </nav>

                <!-- Display the title of the page -->
                <div class = "title">Post Job Vacancy</div>

                <!-- The form to be filled to post job vacancy -->
                <form action = "postjobprocess.php" method = "post" >
                    <table class = "formTable">
                        <tr>
                            <td>
                                <p><input type="text" id="postId" name="posId" size="20" placeholder = "Position Id" class = "pHolder"></p>
                                <p><input type="text" id="title" name="title" size="20" placeholder = "Job Title" class = "pHolder"></p>
                                <p><textarea id="desc" name="desc" placeholder = "Description" class = "pHolder" style="height: 20vw;"></textarea></p>                        
                                <p>
                                    <label for="date" class = "label">Closing Date</label>';
                                    <input type="text" id="date" name="date" value = "<?php echo Date('d/m/y')?>" class = "pHolder">
                                    
                                </p>
                            </td>
                            <td style = "vertical-align: top; padding-left: 5vw;" >
                                <p>
                                    <label class="label">Position</label>
                                    <input id="fTime" type="radio" name="position" value="fulltime" class="label2" style = "margin-left:2.5vw;"/>
                                    <label for="fTime" class="label2">Full Time</label>
                                    <br>
                                    <input id="pTime" type="radio" name="position" value="parttime" class="label2" style = "margin-left:12vw;"/>
                                    <label for="pTime" class="label2">Part Time</label>
                                </p>
                                <p>
                                    <label class="label">Contract</label>
                                    <input id="ongoing" type="radio" name="contract" value="ongoing" class="label2" style = "margin-left:2vw;"/>
                                    <label for="ongoing" class="label2">On-going</label>

                                    <br>
                                    <input id="fixed" type="radio" name="contract" value="fixed" class="label2" style = "margin-left:12vw;"/>
                                    <label for="fixed" class="label2">Fixed Term</label>
                                    
                                </p>
                                <p>
                                    <label class="label">Application by</label>
                                    <input type="checkbox" id="post" name="applicationby[]" value="post" class="label2">
                                    <label for="post" class="label2">Post</label>
                                    <input type="checkbox" id="email" name="applicationby[]" value="email" class="label2">
                                    <label for="email" class="label2">Email</label>
                                    
                                </p>
                                <p>
                                    <label class="label">Location&nbsp;&nbsp;</label>
                                    <select name="location" id="loc" style ="width: 10vw;">
                                        <option value="" disabled selected>---</option>
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

                                <div class = "label" style = "text-align: right;"><p><br>All fieds are required</p></div>
                                
                                <p>
                                    <input type="submit" value="Post" class ="button" style = "margin-left: 10vw; margin-right:2px;">
                                    <input type="reset" value="Reset" class ="button">
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
        <div id ="copyright" style = "background-color: #028881;">Copyright &copy; 2022 Jastine Laksmono</div>
    </footer>
        

    </body>
</html>