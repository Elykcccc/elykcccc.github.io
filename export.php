<?php
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:filename=test.xls");

    $servername = "localhost";
    $username = "yuen";
    $password = "cZDJ3D3UuorRRirs";
    $dbname = "imaginal";
    $port = 8889;

        
        $q1Count = array(0,0,0,0,0);
        $q2Count = array(0,0,0,0,0);
        $q3Count = array(0,0,0,0,0);
        $q4Count = array(0,0,0,0,0);
        $q5Count = array(0,0,0,0,0);
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM questionnire" ;
    $result = $conn->query($sql);
    echo"Name" . "\t" . "Q1" . "\t" . "Q2" . "\t" . "Q3" . "\t" . "Q4" . "\t" . "Q5" . "\t" . "Q6" . "\n";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $Name = $row["NameOfMember"];
        $q1 = $row["Q1"];
        $q2 = $row["Q2"];
        $q3 = $row['Q3'];
        $q4 = $row['Q4'];
        $q5 = $row['Q5'];
        $q6 = $row['Q6'];

        echo $row["NameOfMember"] . "\t" . $row["Q1"] . "\t" . $row["Q2"] . "\t" . $row["Q3"] . "\t" . $row["Q4"] . "\t" . $row["Q5"] . "\t" . $row["Q6"] . "\n";                              
        
        switch ($q1){
            case 1:
                (++$q1Count[0]);
                break;
            case 2:
                (++$q1Count[1]);
                break;
            case 3:
                (++$q1Count[2]);
                break;
            case 4:
                (++$q1Count[3]);
                break;
            case 5:
                (++$q1Count[4]);
                break;
            default:
                break;
        }
        switch ($q2){
            case 1:
                (++$q2Count[0]);
                break;
            case 2:
                (++$q2Count[1]);
                break;
            case 3:
                (++$q2Count[2]);
                break;
            case 4:
                (++$q2Count[3]);
                break;
            case 5:
                (++$q2Count[4]);
                break;
            default:
                break;
        }
        switch ($q3){
            case 1:
                (++$q3Count[0]);
                break;
            case 2:
                (++$q3Count[1]);
                break;
            case 3:
                (++$q3Count[2]);
                break;
            case 4:
                (++$q3Count[3]);
                break;
            case 5:
                (++$q3Count[4]);
                break;
            default:
                break;
        }
        switch ($q4){
            case 1:
                (++$q4Count[0]);
                break;
            case 2:
                (++$q4Count[1]);
                break;
            case 3:
                (++$q4Count[2]);
                break;
            case 4:
                (++$q4Count[3]);
                break;
            case 5:
                (++$q4Count[4]);
                break;
            default:
                break;
        }
        switch ($q5){
            case 1:
                (++$q5Count[0]);
                break;
            case 2:
                (++$q5Count[1]);
                break;
            case 3:
                (++$q5Count[2]);
                break;
            case 4:
                (++$q5Count[3]);
                break;
            case 5:
                (++$q5Count[4]);
                break;
            default:
                break;
        }
        }

    } else {
        echo "0 results";
    }
    echo "Question\Satisfaction" . "\t" . "Very satisfied" . "\t" . "Satisfied" . "\t" . "General" . "\t" . "Not satisfield" . "\t" . "Very not satisfied" . "\n";
    echo "Question 1" . "\t" . $q1Count[0] . "\t" . $q1Count[1] . "\t" . $q1Count[2] . "\t" . $q1Count[3] . "\t" . $q1Count[4] . "\n";
    echo "Question 2" . "\t" . $q2Count[0] . "\t" . $q2Count[1] . "\t" . $q2Count[2] . "\t" . $q2Count[3] . "\t" . $q2Count[4] . "\n";
    echo "Question 3" . "\t" . $q3Count[0] . "\t" . $q3Count[1] . "\t" . $q3Count[2] . "\t" . $q3Count[3] . "\t" . $q3Count[4] . "\n";
    echo "Question 4" . "\t" . $q4Count[0] . "\t" . $q4Count[1] . "\t" . $q4Count[2] . "\t" . $q4Count[3] . "\t" . $q4Count[4] . "\n";
    echo "Question 5" . "\t" . $q5Count[0] . "\t" . $q5Count[1] . "\t" . $q5Count[2] . "\t" . $q5Count[3] . "\t" . $q5Count[4] . "\n";

    

    //echo $sql;
    if ($conn->query($sql) === TRUE) {
        //header('Location:questionnaire.php');

    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }

     $conn->close();



?>
