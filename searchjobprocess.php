<!DOCTYPE html>
<html lang="en">
<head>
    <title> SearchJobProcess </title>
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

            //Check whether the job value is not null
            //if null then set the value to "" (nothing)
            if(isset ($_GET["job"]))
            {
                $title = $_GET["job"];
            }
            else 
            {
                $title = "";
            }

            //check whether the position value is not null
            //if null then set the value to "" (nothing)
            if(isset ($_GET["position"]))
            {
                $pos = $_GET["position"];
            }
            else
            {
                $pos = "";
            }

            //check whether the contract value is not null
            //if null then set the value to "" (nothing)
            if(isset ($_GET["contract"]))
            {
                $contract = $_GET["contract"];
            }
            else
            {
                $contract = "";
            }

            //check whether an option has been chosen for the application by
            //if null then set the value to "" (nothing)
            if(isset ($_GET["applicationby"]))
            {
                $applicationby = $_GET["applicationby"];
            }
            else
            {
                $applicationby = "";
            }

            //check whether an option has been chosen for the location
            //if null then set the value to "" (nothing)
            if(isset ($_GET["location"]))
            {
                $location = $_GET["location"];
            }
            else
            {
                $location = "";
            }


            
            $alldata = array();                         //array to save all the data in the file
            $filename = "../../data/jobposts/jobs.txt"; //the filename that want to be accessed

            //Check if the file existed
            if(file_exists($filename))
            {
                $handle = fopen($filename, "r"); //read the file

                //retrieve all the data in the file into the array
                while (! feof ($handle)) 
                {
                    $getData = fgets($handle); 
                    if ($getData != "") 
                    {
                        $data = (explode("\t",$getData));   //explode data in one line seperated by /t

                        //put the separated data into key value pairs
                        $alldata[] = array("id"=>$data[0], 
                                        "title"=>$data[1],
                                        "desc"=>$data[2],
                                        "date"=>date_create_from_format('d/m/y', $data[3]),
                                        "pos"=>$data[4],
                                        "contract"=>$data[5],
                                        "app1"=>$data[6],
                                        "app2"=>$data[7],
                                        "loc"=>$data[8]);
                        
                    } 
                }
                fclose ($handle); // close the file

                $dates = array_map(function($a){return $a['date'];}, $alldata); //get all the value that has 'date' as the key into an array
                array_multisort($dates, SORT_DESC, $alldata);                   //sort the data based on the dates array

                //The background of the upper page, the nav bar, and the title pf the page
                echo'
                    <div class ="container">
                        <img src="style/bgPurple.png" id="background" alt="bg">
                        <div class="subContainer"></div>
                        <div class="containerBorder" style = "border-color: #3d0087;">

                            <nav id = "topnav3">
                                <a href="index.php">Home</a>
                                <a href="postjobform.php">Post Job Vacancy</a>
                                <a href="searchjobform.php">Search Job Vacancy</a>
                                <a href="about.php">About This</a>
                            </nav>

                            
                            <div class = "title" style = "font-size: 8vw; margin-top:20vw;">Search matches "'.$title.'"</div>
                            
                        </div>
                    </div>    
                ';

                
                //Show the table headings
                echo "<table class = 'jobList'>";
                    echo "<tr>";
                            echo "<th class = 'delBorder2'>No</th>";
                            echo "<th class = 'delBorder2'>Position Id</th>"; 
                            echo "<th class = 'delBorder2'>Title</th>"; 
                            echo "<th class = 'delBorder2' style='width:30vw;'>Description</th>"; 
                            echo "<th class = 'delBorder2'>Date</th>"; 
                            echo "<th class = 'delBorder2'>Position</th>"; 
                            echo "<th class = 'delBorder2'>Contract</th>";
                            echo "<th colspan = '2' class = 'delBorder2'>Application By</th>"; 
                            echo "<th class = 'delBorder2'>Location</th>"; 
                    echo "</tr>";

                    $no = 1; //the number of the job list

                    //Display the list of job vacancies based on the contraints (serach filters)
                    for ($i=0; $i<count($alldata); $i++) 
                    { 
                        $curDate = date_create_from_format('d/m/y',date('d/m/y'));  //current date
                        $date = $alldata[$i]['date'];                               //the date from the array that want to be compared with

                        // check if the current row in the array meet the search filter requirements
                        if($date >= $curDate)
                        {
                            if((stripos($alldata[$i]['title'], $title) !== false || $title == "") && 
                            (stripos($alldata[$i]['pos'], $pos) !== false || $pos == "" ) &&
                            (stripos($alldata[$i]['contract'], $contract) !== false || $contract == "" ) &&
                            (stripos($alldata[$i]['app1'], $applicationby) !== false || stripos($alldata[$i]['app2'], $applicationby) !== false || $applicationby == "" ) &&
                            (stripos($alldata[$i]['loc'], $location) !== false || $location == ""))
                            {
                                echo "<tr class = 'row'>";
                                echo "<td class = 'delBorder'>$no</td>";
                                echo "<td class = 'delBorder'>".$alldata[$i]['id']."</td>"; 
                                echo "<td class = 'delBorder'>".$alldata[$i]['title']."</td>"; 
                                echo "<td class = 'delBorder' style='width:30vw;'>".$alldata[$i]['desc']."</td>"; 
                                $newFormat = date_format($alldata[$i]['date'],"d/m/y");
                                echo "<td class = 'delBorder'>".$newFormat."</td>"; 
                                echo "<td class = 'delBorder'>".$alldata[$i]['pos']."</td>"; 
                                echo "<td class = 'delBorder'>".$alldata[$i]['contract']."</td>";
                                echo "<td class = 'delBorder'>".$alldata[$i]['app1']."</td>"; 
                                echo "<td class = 'delBorder'>".$alldata[$i]['app2']."</td>"; 
                                echo "<td class = 'delBorder'>".$alldata[$i]['loc']."</td>"; 
                                echo "</tr>";
                                $no++;
                            }
                        }
                        
                    }
                echo "</table>";
                
            }
            else
            {
                echo "File does not exist!";
            }
        ?>

    </main>

    <!-- Displaying a copyright information -->
    <footer>
        <div id ="copyright" style = "background-color: #6519c3;">Copyright &copy; 2022 Jastine Laksmono</div>
    </footer>

</body>
</html>