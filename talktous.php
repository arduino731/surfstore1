<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
  /*  $firstname = trim($_POST["firstname"]);
      $lastname = trim($_POST["lastname"]);    */
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if ($name == "" OR $email == "" OR $message == "") {
        echo "You must specify a value for name, email address, and message.";
        exit;
    }

/* this is code snippets from new york php use to stop this attack if it finds, it stops the PHP file from executing*/
     foreach( $_POST as $value ){
        if( stripos($value,'Content-Type:') !== FALSE ){
            echo "There was a problem with the information you entered.";    
            exit;
        }
    }

    if ($_POST["address"] != "") {  /* if its not blank then evil robot is filling out the form and stop executing the file*/
        echo "Your form submission has an error.";
        exit;
    }

     require_once("inc2/PHPmailer/class.phpmailer.php");
    $mail = new PHPMailer(); 

    if (!$mail->ValidateAddress($email)){
        echo "You must specify a valid email address.";
        exit;
    }

    $name = "";
    $email = "";
    $message = "";
    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "<br>";
    $email_body = $email_body . "Email: " . $email . "<br>";
    $email_body = $email_body . "Message: " . $message;

    $mail->SetFrom($email, $name);
    $address = "orders@shirts4mike.com";
    $mail->AddAddress($address, "Shirts 4 Mike");
    $mail->Subject    = "Shirts 4 Mike Contact Form Submission | " . $name;
    $mail->MsgHTML($email_body);

    if(!$mail->Send()) {
      echo "There was a problem sending the email: " . $mail->ErrorInfo;
      exit;
    }

    header("Location: talktous.php?status=Thanks");
    exit;
}
?>
<?php

include('inc2/header.php');
?>
 
        
        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="ourblog.php">OUR BLOG</a></li>
        <li class="active" ><a href="talktous.php" style="background: blue;">TALK TO US</a></li>
        <li><a href="location.php">LOCATION</a></li>
        <li><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=YP9J7TG3NE2XS&amp;display=1">CART</a></li>
      </ul>
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container" style="margin-top:155px; text-align:center;">
<div class="jumbotron">
   <?php if (isset($_GET["status"]) AND $_GET["status"] == "Thanks") { ?>
                <p>Thanks for the email! I&rsquo;ll be in touch shortly!</p>
            <?php } else { ?>

                <h1 class="chaffle" data-lang="ja"> TALK TO US </h1>
                

                <p class="chaffle2" data-lang="en">I&rsquo;d love to hear from you! Complete the form to send me an email.</p>
 
                <form method="post" action="talktous.php">

                    <table>
                        <tr>
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td> 
                                <input type="text" name="name" id="name">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"></textarea>
                            </td>
                        </tr>

                        <tr style="display: none;">
                            <th>
                                <label for="address">Address</label>
                            </th>
                            <td>
                                <input type="text" name="address" id="address">
                                <p>Humans (and frogs): please leave this field blank.</p>
                            </td>
                        </tr>                      
                    </table>
                    <input class="btn btn-primary btn-lg" role="button" type="submit" value="Send">
    
                </form>

            <?php } ?>
  
</div>
</div>











<?php include('inc2/footer.php') ?>