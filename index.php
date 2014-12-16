<?php

include('inc2/header.php');
?>
        <li><a href="about.php">ABOUT US</a></li>
        <li><a href="ourblog.php">OUR BLOG</a></li>
        <li><a href="talktous.php">TALK TO US</a></li>
        <li><a href="location.php">LOCATION</a></li>
        <li><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=YP9J7TG3NE2XS&amp;display=1">CART</a></li>
      </ul>
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<style>
body{
padding:20px;
}
#wrapper{
margin:48px 0px 0px auto;
width:80%;
}
a{
text-decoration:none;
color: cornflowerblue;
}
a:hover{
text-decoration:underline;
}
#fruits{
border:10px solid #000;
}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/tiksluscarousel.js"></script>
<script type="text/javascript" src="js/rainbow.min.js"></script>
<div id="wrapper">
    <div id="fruits">
      <ul>
    <li><img src="img/9.jpg" /></li>
    <li><img src="img/10.jpg" /></li>
    <li><img src="img/11.jpg" /></li>
    <li><img src="img/12.jpg" /></li>
    <li><img src="img/15.jpg" /></li>
    <li><img src="img/17.jpg" /></li>
    <li><img src="img/18.jpg" /></li>
    <li><img src="img/19.jpg" /></li>
    <li><img src="img/9.jpg" /></li>
    <li><img src="img/16.jpg" /></li>
    
    </ul>
    </div>
    <script language="javascript">
    $(document).ready(function(){
    $("#fruits").tiksluscarousel({
      width:1000,
      height:480,
      nav:'thumbnails',
      current:1,
      type:'zoom'});
    });
    </script>
    
</div>
<section style="background:black; height:700px; top:31px;">

    <div class="wrapper" style="position:relative; top:57px; margin:0 auto; text-align:center;">
         
            <h2>Hey, I&rsquo;m Van's!</h2>
            <p>Check Out My Shirts</p>
<?php include("inc2/products.php"); ?> 

    <!-- images of t-shirt -->
      <div class="wrapper" style="background:grey; position:relative; top:135px;">
      <ul class="products">
          <li>
            <a href="shirts.php">
              <img src="img/shirts/2.jpg" style="height:224px; width:168;">
              <p>View Details</p>
            </a>
          </li><li>
            <a href="shirts.php">
              <img src="img/shirts/3.jpg">
              <p>View Details</p>
            </a>
          </li>
          <li>
            <a href="shirts.php">
              <img src="img/shirts/4.png" style="height:224px; width:168;">
              <p>View Details</p>
            </a>
          </li>
          <li>
            <a href="shirts.php">
              <img src="img/shirts/5.jpg">
              <p>View Details</p>
            </a>
          </li>
      </ul>
    </div>

</div>

</section>













	

<?php include('inc2/footer.php') ?>