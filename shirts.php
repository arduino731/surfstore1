<?php
/*$pageTile = "Van's full catalog of shirts";
  $section = "shirts"; */ 
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


<?php  include("inc2/products.php") ?>

<div class="container" style="margin-top:51px; background:blue; padding:0 50px;">


<h1 style="text-align:center; padding: 10px 0px;background: lightblue;margin: 36px 158px;border-radius: 10px;
border: solid 1px black;"> VAN VLYMEN’S FULL CATALOG OF SHIRTS </h1>

<?php foreach($products as $product_id => $product) { ?>

<div class="row">
  <div class="col-sm-2 col-md-4">
    <div class="thumbnail">
     <?php echo '<a href="shirt.php?id=' . $product_id . '">'; ?>
        <img src= "<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>" style="width:329px; height:261px;">
      </a>
      
      <div class="caption">
        <p> <?php echo '<a href="shirt.php?id=' . $product_id ; ?> " class="btn btn-primary" role="button">VIEW DETAILS</a> </p>
      </div>
    </div>
  </div>
  <?php } ?>



</div> <!-- end container -->












<?php include('inc2/footer.php') ?>