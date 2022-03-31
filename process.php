<?php
// (A) PROCESS RESULT
$result = "";
error_reporting(0);

// (B) CONNECT TO DATABASE - CHANGE SETTINGS TO YOUR OWN!
$dbhost = "localhost";
$dbname = "test";
$dbchar = "utf8";
$dbuser = "root";
$dbpass = "";
try {
  $pdo = new PDO(
    "mysql:host=$dbhost;dbname=$dbname;charset=$dbchar",
    $dbuser, $dbpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { $result = $ex->getMessage(); }

// (C) SAVE ORDER TO DATABASE
if ($result=="") {
  try {
    $stmt = $pdo->prepare("INSERT INTO `orders` (`name`, `address`, `email`, `number`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `qty7`, `qty8`, `message` ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$_POST["name"], $_POST["address"], $_POST["email"], $_POST["number"], $_POST["qty1"], $_POST["qty2"], $_POST["qty3"], $_POST["qty4"], $_POST["qty5"], $_POST["qty6"], $_POST["qty7"], $_POST["qty8"], $_POST["message"]]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}

// (D) EMAIL CONNECTION
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $qty1 = $_POST['qty1'];
  $qty2 = $_POST['qty2'];
  $qty3 = $_POST['qty3'];
  $qty4 = $_POST['qty4'];
  $qty5 = $_POST['qty5'];
  $qty6 = $_POST['qty6'];
  $qty7 = $_POST['qty7'];
  $qty8 = $_POST['qty8'];
  $total1 = $qty1 * 800;
  $total2 = $qty2 * 800;
  $total3 = $qty3 * 800;
  $total4 = $qty4 * 800;
  $total5 = $qty5 * 800;
  $total6 = $qty6 * 800;
  $total7 = $qty7 * 800;
  $total8 = $qty8 * 800;
  $total = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8;
  $message = $_POST['message'];
    
  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'minfinityfishfarm@gmail.com'; 
    $mail->Password = 'hxrtlnrgcmnlkblg'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('minfinityfishfarm@gmail.com'); 
    $mail->addAddress('minfinityfishfarm@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (ORDER)';
    $mail->Body = "<h3 align='center'>Order Invoice</h3>
    <table border='1' width='30%' cellpadding='5' cellspacing='5' align='center'> 
    <tr>
    <td width='40%' align='center'>Name </td>
    <td width='50%' align='center'> <b>$name</td>
    </tr>
    <tr>
    <td width='40%' align='center'>Address</td>
    <td width='50%' align='center'>$address</td>
    </tr>
    <tr>
    <td width='40%' align='center'>Email</td>
    <td width='50%' align='center'>$email</td>
    </tr>
    <tr>
    <td width='40%' align='center'>Contact Number</td>
    <td width='50%' align='center'>$number</td>
    <tr>
    <td width='40%' align='center'>Crowntail Mascot Betta </td> 
    <td width='50%' align='center'> <b>($qty1)</b> -- ₱$total1.00 </td>
    
    </tr>
    <tr>
    <td width='40%' align='center'>Dumbo Salamander Betta </td> 
    <td width='50%' align='center'> <b>($qty2)</b> -- ₱$total2.00</td>
    
    </tr>
    <tr>
    <td width='40%' align='center'>Half Sun Mascot Betta  </td> 
    <td width='50%' align='center'> <b>($qty3)</b> -- ₱$total3.00</td>
    
    </tr>
    <tr>
    <td width='40%' align='center'>Avarat Koi Betta </td> 
    <td width='50%' align='center'> <b>($qty4)</b> -- ₱$total4.00</td>
    </tr>
    <tr>
    <td width='40%' align='center'>Platinum Crown Tail Betta </td> 
    <td width='50%' align='center'> <b>($qty5)</b> -- ₱$total5.00</td>
    </tr>
    <tr>
    <td width='40%' align='center'>Giant Koi Betta </td> 
    <td width='50%' align='center'> <b>($qty6)</b> -- ₱$total6.00</td>
    </tr>
    <tr>
    <td width='40%' align='center'>Fancy Copper Plakat Betta </td> 
    <td width='50%' align='center'> <b>($qty7)</b> -- ₱$total7.00</td>
    </tr>
    <tr>
    <td width='40%' align='center'>Super Black Betta </td> 
    <td width='50%' align='center'> <b>($qty8)</b> -- ₱$total8.00</td>
    </tr>
    <tr>
    <td width='40%' align='center'>Total</td>
    <td width='50%' align='center'>₱<b>$total.00</td>
    </tr>
    <tr>
    <td width='40%' align='center'>Request</td>
    <td width='50%' align='center'><b>$message</td>
    </tr>
    ";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Order Sent! Thank you for ordering with us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>



