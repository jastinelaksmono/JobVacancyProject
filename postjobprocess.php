<!DOCTYPE html>
<html lang="en">
<head>
    <title> PostJobProcess </title>
    <meta charset="utf-8" />
    <meta name="description" content="Advanced Web Development" />
    <meta name="keywords"    content=" Assignment 1 " />
    <meta name="author"      content="Jatine Francy Laksmono" />
    <link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>

    <!-- Main components in the page -->
    <main>

        <!-- The php codes -->
        <?php                 
            $errMessage = array();                                                   //save all the error messages of each requirement
            $newJob = "";                                                            //save new data of a job vacancy inputted
            $idPattern = "/(P)\d{4}/";                                               //Unique ID pattern, e.g., P0001
            $titlePattern = "/^[A-Za-z0-9\.\s,!]{1,20}$/";                           //title to be alphanumerical with some punctuations only, max 20 characters
            $descPattern = "/^(.{1,260})$/";                                         //description to be 1-260 characters only
            $datePattern = "/(0[1-9]|[1-2][0-9]|3[0-1])\/(0[1-9]|1[0-2])\/\d{2}/";   //date pattern to be e.g., '24/11/22'


            //Check if pos id is not null and have value
            //else display error message
            if (isset ($_POST["posId"]) && $_POST["posId"] != "") 
            {
                $posId = $_POST["posId"];

                //check whether pos id value meets the pattern requirement
                if(preg_match($idPattern,$posId))
                {
                    $newJob .= $posId."\t";
                }
                else
                {
                    $errMessage[] = "The position ID should be unique!";
                }
            }
            else
            {
                $errMessage[] = "The position ID cannot be empty!";
            }

            //Check if title is not null and have value
            //else display error message
            if(isset ($_POST["title"]) && $_POST["title"] != "")
            {
                $title = $_POST["title"];

                //check whether title value meets the pattern requirement
                if(preg_match($titlePattern, $title))
                {
                    $newJob .= $title."\t";
                }
                else
                {
                    $errMessage[] = "The title should be under 20 characters<br>(alphanumeric, spaces, comma, full stop, and exclamation point only)!";
                }
            }
            else
            {
                $errMessage[] = "The title cannot be empty!";
            }

            //Check if description is not null and have value
            //else display error message
            if(isset ($_POST["desc"]) && $_POST["desc"] != "")
            {
                $desc = $_POST["desc"];

                //check whether description value meets the pattern requirement
                if (preg_match($descPattern,$desc))
                {
                    $newJob .= $desc."\t";
                }
                else
                {
                    $errMessage[] = "The description should be max 260 words!";
                }
            }
            else
            {
                $errMessage[] = "The description cannot be empty!";
            }

            //Check if date is not null and have value
            //else display error message
            if(isset ($_POST["date"]) && $_POST["date"] != "")
            {
                $date = $_POST["date"];

                //check whether date value meets the pattern requirement
                if(preg_match($datePattern,$date))
                {
                    $newJob .= $date."\t";
                }
                else
                {
                    $errMessage[] = "The date should be in dd/mm/yy format!";
                }
            }
            else
            {
                $errMessage[] = "The date cannot be empty!";
            }

            //Check if position is not null and an option is chosen
            //else display error message
            if(isset ($_POST["position"]))
            {
                $pos = $_POST["position"];
                $newJob .= $pos."\t";
            }
            else
            {
                $errMessage[] = "One of the position options must be chosen!";
            }

            //Check if contract is not null and an option is chosen
            //else display error message
            if(isset ($_POST["contract"]))
            {
                $contract = $_POST["contract"];
                $newJob .= $contract."\t";
            }
            else
            {
                $errMessage[] = "One of the contract options must be chosen!";
            }

            //Check if application by is not null and at least a checkbox is checked
            //else display error message
            if(isset ($_POST["applicationby"]))
            {
                $applicationby = $_POST["applicationby"];

                //chech if only 1 or 2 checkboxes are checked
                if(count($applicationby) == 2)
                {
                    $newJob .= $applicationby[0]."\t".$applicationby[1]."\t";
                }
                else
                {
                    if($applicationby[0] == "post")
                    {
                        $newJob .= $applicationby[0]."\t-\t";
                    }
                    else
                    {
                        $newJob .= "-\t".$applicationby[0]."\t";
                    }
                    
                }
            }
            else
            {
                $errMessage[] = "At least one of the application by options must be chosen!";
            }

            //Check if location is not null and an option is selected
            //else display error message
            if(isset ($_POST["location"]))
            {
                $location = $_POST["location"];
                $newJob .= $location."\n";
            }
            else
            {
                $errMessage[] = "The location cannot be empty!";
            }

            //The background of the upper page and the nav bar
            echo'
                <div class ="container">
                    <img src="style/bgGreen.png" id="background" alt="bg">
                    <div class="subContainer"></div>
                    <div class="containerBorder" style = "border-color: #0e5352;">

                        <nav id = "topnav2">
                            <a href="index.php">Home</a>
                            <a href="postjobform.php">Post Job Vacancy</a>
                            <a href="searchjobform.php">Search Job Vacancy</a>
                            <a href="about.php">About This</a>
                        </nav>';

                        //Append the new data to the file if all input meet requirements
                        if(!$errMessage)
                        {
                            //Check if the folfer exists
                            if(!file_exists("../../data/jobposts"))
                            {
                                umask(0007);
                                $dir = "../../data/jobposts";
                                mkdir($dir, 02770);
                            }

                            $filename = "../../data/jobposts/jobs.txt"; //The filename to save the new data
                    
                            $handle = fopen($filename, "a"); //Open the file to append
                            fwrite($handle, $newJob);        //Write the new data to the file
                            fclose($handle);                 //Close the file

                            //Display the 'Job posted' text if the input is successful
                            echo'
                                <div class = "title" style = "font-size: 8vw; margin-top:20vw;">Job Posted!</div>
                            ';
            
                        }
                        else
                        {
                            //Display 'Error occured' text if the submission failed (inputs do not meet requirements)
                            echo'<div class = "title" style = "font-size: 8vw;">Error Occured!</div>';

                            //Display list of error messages
                            foreach ($errMessage as $message)
                            {
                                echo '<p class = "errorMsg">'.$message.'</p>';
                            }
                        }
                

            echo '
                    </div>
                </div>
            ';

        ?>
    
    </main>

    <!-- Displaying a copyright information -->
    <footer>
        <div id ="copyright" style = "background-color: #028881;">Copyright &copy; 2022 Jastine Laksmono</div>
    </footer>

    </body>
</html>