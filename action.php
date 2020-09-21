<?php
include_once("includes/dbconnect.php");
include_once("includes/pfplaces.php");

if(isset($_GET['category'])){
    $category = $_GET['category'];
}
if (isset($_POST['action'])) 
{
    $pfplaces = "SELECT * FROM pfplaces WHERE pfp_category =?";

if (isset($_POST['location'])) {
  $location = implode("','", $_POST['location']);
    $pfplaces .="AND pfp_location IN('" .$location. "')";
}
  $pfplaces = $PDO->prepare($pfplaces);
  $pfplaces->bindValue(1,$category);
  $pfplaces->execute();
  $pfplaces = $pfplaces->fetchAll(PDO::FETCH_ASSOC);
  if ($pfplaces) {
    foreach ($pfplaces as $pfp){
      echo   '<ul class="list-group shadow">
          <!-- List group-->
  
          <li class="list-group-item">
            <!-- Custom content-->
            <div class="media align-items-lg-center flex-column flex-lg-row">
              <div class="media-body order-2 order-lg-1">
              <h4 style="text-transform:uppercase;color:#800000;">' . $pfp['pfp_name'] . '</h4>
              <h5 ><span class="details-bold"><i class="fa fa-location-arrow"></i> Location: </span>' . $pfp['pfp_location'] . ' </h5>
              <h5> <span class="details-bold"> <i class="fa fa-align-justify"></i> Address: </span> ' . $pfp['pfp_address'] . '</h5>
              <div class="d-flex align-items-center justify-content-between mt-1">
            
                <h6 class="font-weight-bold my-2"><a style="color:#800000;" data-toggle="collapse" href="#collapse' . $pfp['pfp_id'] . '" role="button" aria-expanded="false" aria-controls="collapse' . $pfp['pfp_id'] . '">Description <i class="fa fa-angle-down"></i> </a></h6>
                
              </div>
            </div><img src="ad/admin/pfimages/'. $pfp['pfp_img'] . '" alt="Generic placeholder image" width="250" class="ml-lg-5 order-1 order-lg-2" style="border-radius:25px;">
            </div>
            <div class="collapse" id="collapse' . $pfp['pfp_id'] . '">
              <div class="card card-body">
              ' . $pfp['pfp_description'] . '
            </div>
              </div>
          
          
            <!-- End -->
          </li>
          <!-- End -->
          
            </ul>
            <!-- list group item-->
            <div class="spacer-30"></div>
  ';
    }

  } else {
    echo '<h3 class="text-center">No Place Found!</h3>';
  }
}

 
