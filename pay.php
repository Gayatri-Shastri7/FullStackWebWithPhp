<?php 
$cause_name = $_POST['d_cause'];
$donor_name = $_POST['d_name'];
$donor_mailid = $_POST['d_mail'];
$donor_mobileno = $_POST['d_mobile'];
$donor_amount = $_POST['d_amount'];

 
include 'src/Instamojo.php';

include 'includes/testing.php';

$fekeys= new Fekeys;
$fekeys = $fekeys->fetch_data(1);
$encrypted=$fekeys['keeys'];
$decrypted=decryptthis($encrypted, $key);

$fekeys1= new Fekeys;
$fekeys1 = $fekeys1->fetch_data(2);
$encrypted1=$fekeys1['keeys'];
$decrypted1=decryptthis($encrypted1, $decrypted);

$fekeys2= new Fekeys;
$fekeys2 = $fekeys2->fetch_data(3);
$encrypted2=$fekeys2['keeys'];
$decrypted2=decryptthis($encrypted2, $decrypted);

$fekeys3= new Fekeys;
$fekeys3 = $fekeys3->fetch_data(4);
$encrypted3=$fekeys3['keeys'];
$decrypted3=decryptthis($encrypted3, $decrypted);
$api = new Instamojo\Instamojo($decrypted1,$decrypted2,'https://www.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $cause_name,
        "amount" => $donor_amount,
        "donor_name" => $donor_name,
        "email" => $donor_mailid,
        "send_email" => true,
        "donor_mobile" => $donor_mobileno,
        "send_sms" => false,
        "allow_repeated_payments" =>false,
        "redirect_url" => "https://blog-123-987.000webhostapp.com/thankyou.php",
        "webhook" => "https://blog-123-987.000webhostapp.com/webhook.php"
        ));
     // print_r($response);
      
     $pay_ulr = $response['longurl'];
    
     //Redirect($response['longurl'],302); //Go to Payment page
 
     header("Location: $pay_ulr");
     exit();

   }
   catch (Exception $e) {
   print('Error: ' . $e->getMessage());
   }
?>