<?php

 require_once("../inc2/config.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email =  $_POST["email"];
    $message =  $_POST["message"];
    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "\n";
    $email_body = $email_body . "Email: " . $email . "\n";
    $email_body = $email_body . "Message: " . $message;

    // TODO: Send Email

    header("Location: talktous.php?status=thanks");
    exit;
}
?>
<?php
$pageTitle = "Contact Mike";
$section = "contact";
include(ROOT_PATH . 'inc2/header.php');
?>
 
        
        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="ourblog.php">OUR BLOG</a></li>
        <li class="active" ><a href="talktous.php" style="background: blue;">TALK TO US</a></li>
        <li><a href="location.php">LOCATION</a></li>
      </ul>
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container" style="margin-top:155px; text-align:center;">
<div class="jumbotron">
   <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
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
                    </table>
                    <input class="btn btn-primary btn-lg" role="button" type="submit" value="Send">
    
                </form>

            <?php } ?>
  
</div>
</div>











<?php include('inc2/footer.php') ?>