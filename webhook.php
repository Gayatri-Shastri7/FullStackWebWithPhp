<?php

$data = $_POST;
$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.

$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];

if($major >= 5 and $minor >= 4){
     ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
     uksort($data, 'strcasecmp');
}

include 'includes/testing.php';
$fekeys= new Fekeys;
$fekeys = $fekeys->fetch_data(1);
$encrypted=$fekeys['keeys'];
$decrypted=decryptthis($encrypted, $key);

$fekeys3= new Fekeys;
$fekeys3 = $fekeys3->fetch_data(4);
$encrypted3=$fekeys3['keeys'];
$decrypted3=decryptthis($encrypted3, $decrypted);
echo "<p>$decrypted3</p>";

// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
// Pass the 'salt' without the <>.
$mac_calculated = hash_hmac("sha1", implode("|", $data), $decrypted3);

if($mac_provided == $mac_calculated){
    // echo "MAC is fine";
    // Do something here
    if($data['status'] == "Credit"){
       // Payment was successful, mark it as completed in your database  
       include_once("includes/dbconnect.php");

                $purpose = $data['purpose'];
                $amount = $data['amount'];
                $name= $data['buyer_name'];
                $email =$data['buyer'];
                $phone = $data['buyer_phone'];
                $pid = $data['payment_id'];
                $status = $data['status'];

                $sql= "INSERT INTO donations(purpose, amount, name, email, phone, pid, status) VALUES(?, ? ,? ,? ,?, ?, ?)";
            $query = $PDO->prepare($sql);
    
            $query->bindValue(1, $purpose);
            $query->bindValue(2, $amount);
            $query->bindValue(3, $name);
            $query->bindValue(4, $email);
            $query->bindValue(5, $phone);
            $query->bindValue(6, $pid);
            $query->bindValue(7, $status);

            $query->execute();




                // $to = 'chandrikawork18@gmail.com';
                // $subject = 'Website Payment Request ' .$data['buyer_name'].'';
                // $message = "<h1>Payment Details</h1>";
                // $message .= "<hr>";
                // $message .= '<p><b>ID:</b> '.$data['payment_id'].'</p>';
                // $message .= '<p><b>Amount:</b> '.$data['amount'].'</p>';
                // $message .= "<hr>";
                // $message .= '<p><b>Name:</b> '.$data['buyer_name'].'</p>';
                // $message .= '<p><b>Email:</b> '.$data['buyer'].'</p>';
                // $message .= '<p><b>Phone:</b> '.$data['buyer_phone'].'</p>';
                
                
                // $message .= "<hr>";

              
                // $headers .= "MIME-Version: 1.0\r\n";
                // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                // send email
                // mail($to, $subject, $message, $headers);
    }
    else{
       // Payment was unsuccessful, mark it as failed in your database
    }
}
else{
    echo "Invalid MAC passed";
}
?>
