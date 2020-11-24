<?php

$date = $_GET["date"]; //Get-værdien i originalt tekststengs-format
$date = strtotime($date); //konvertering til dato datatype
$date = date("d/m-Y", $date ); //Formatering af dato til DK format
$rep = $_GET["rep"];
$dem = $_GET["dem"];
$state = $_GET["state"];

if ($rep + $dem <= "100") {
    
    $rep_col = "<div class='col-result col-red' style='height: ".$rep."%'>";
    $rep_col .= "</div>";
    $dem_col = "<div class='col-result col-blue' style='height: ".$dem."%'>";
    $dem_col .= "</div>";

    $entries =file_get_contents("data.txt");

    $entry_head = "<h3 class='text-shadow'>Dato: ".$date." State: ".$state." </h3>";

    $entry .= "<div class='row'>";
    $entry .="<div class='col-50 container-result'>". $rep_col ."<h4 class='text-color'>".$rep."%</h4></div>";
    $entry .="<div class='col-50 container-result'>". $dem_col ."<h4 class='text-color'>".$dem."%</h4></div>";
    $entry .="</div>";

    // file_put_contents("data.txt", $entry_head.$entry_head1.$entry.$entries);
    file_put_contents("data.txt", $entry_head1.$entry.$entry_head.$entries);
    header("Location: index.php");

  } else {
      
      echo '<script>alert("Trump og Biden sum resulterer ikke i mere end 100")</script>';
      // echo ' <a href="http://localhost/us-valg-2020/backend.php"><h2>Indsættelse af data</h2></a>';
      echo file_get_contents("http://localhost/us-valg-2020/backend.php");
  }

?>