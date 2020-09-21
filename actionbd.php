<?php
include_once("includes/dbconnect.php");
include_once("includes/donor.php");
 
if(isset($_POST['action']))
{
$blood_donor = "SELECT * FROM donors WHERE d_location !=''";

if (isset($_POST['location'])) {
    $location = implode("','", $_POST['location']);
    $blood_donor .="AND d_location IN('" .$location. "')";
}

if (isset($_POST['bloodgrp'])) {
    $bloodgrp = implode("','", $_POST['bloodgrp']);
    $blood_donor .="AND d_bloodgrp IN('" .$bloodgrp. "')";
}

if (isset($_POST['weight'])) {
    $weight = implode("','", $_POST['weight']);
    $blood_donor .="AND d_weight IN('" .$weight. "')";
}


$blood_donor = $PDO->prepare($blood_donor);
  $blood_donor->execute();
  $blood_donor = $blood_donor->fetchAll(PDO::FETCH_ASSOC);
  if ($blood_donor) {
    foreach ($blood_donor as $b_d){
        echo 
    '<div class="col-md-4 mb-4 ">
    <div class="card shadow p-3 mb-5 bg-white" style="border-radius:25px;" >

    <div class="card-body">
    <h4 class="card-title" style="color:black;text-transform:uppercase;">'. $b_d['d_name'] .'</h4>
    <br>
    <p class="card-text"><span style="color:#ffc55f; font-weight:700;">Owner : </span>'. $b_d['d_ownername'] . '</p>
    <p class="card-text"><span style="color:#ffc55f; font-weight:700;">Contact Info : </span>' . $b_d['d_contact'] . '</p>
    <p class="card-text"><span style="color:#ffc55f; font-weight:700;">Location: </span>' . $b_d['d_location'] . '</p>
    <p class="card-text"><span style="color:#ffc55f; font-weight:700;">Blood Group : </span>' . $b_d['d_bloodgrp'] . '</p>
    <p class="card-text"><span class="details-bold">Weight : </span>' . $b_d['d_weight'] . '</p>
    </div>
    </div>					
    </div>';
    } 

}
else{
    echo '<h3 style="display:block; margin-left: auto; margin-right: auto;">No Donor Found!</h3>';
}
}
?>