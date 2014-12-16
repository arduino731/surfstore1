<?php

include('inc2/header.php');
?>
 
        
        <li class="active" ><a href="about.php" style="background: blue;">ABOUT US</a></li>
        <li><a href="ourblog.php">OUR BLOG</a></li>
        <li><a href="talktous.php">TALK TO US</a></li>
        <li><a href="location.php">LOCATION</a></li>
        <li><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=YP9J7TG3NE2XS&amp;display=1">CART</a></li>
      </ul>
    
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<body class="demo-1">
		<div id="container" class="container intro-effect-push" style="width:100%;margin-top:51px; margin-left:-15px;">
			
			<header class="header">
				<div class="bg-img"><img src="img/7.jpg" alt="Background Image"/></div>
				<div class="title">
					<h1>Breathe under water till the end</h1>
				</div>
			</header>


			<button class="trigger" data-info="Click to see the header effect"><span>Trigger</span></button>


			<div class="title">
				<nav class="codrops-demos">
						<a class="current-demo" href="about.php" style="font-size:100px;">About Us</a>
						
					</nav>
				<h1>Breathe under water till the end</h1>
				<p class="subline">Inspiration for Article Intro Effects</p>
				<p>by <strong>Henry James</strong> &#8212; Posted in <strong>Inspiration</strong> on <strong>May 21, 2014</strong></p>
			</div>




				<article class="content">
				<div>
					<p>We may define a food to be any substance which will repair the functional waste of the body, increase its growth, or maintain the heat, muscular, and nervous energy. </p>
					<p>In its most comprehensive sense, the oxygen of the air is a food; as although it is admitted by the lungs, it passes into the blood, and there re-acts upon the other food which has passed through the stomach. It is usual, however, to restrict the term food to such nutriment as enters the body by the intestinal canal. Water is often spoken of as being distinct from food, but for this there is no sufficient reason.</p>
					<p>Many popular writers have divided foods into flesh-formers, heat-givers, and bone-formers. Although attractive from its simplicity, this classification will not bear criticism. Flesh-formers are also heat-givers. Only a portion of the mineral matter goes to form bone.</p>
					<p>These last are not strictly foods, if we keep to the definition already given; but they are consumed with the true foods or nutrients, comprised in the other two classes, and cannot well be excluded from consideration.</p>
					<p>Water forms an essential part of all the tissues of the body. It is the solvent and carrier of other substances.</p>
					<p>Mineral Matter or Salts, is left as an ash when food is thoroughly burnt. The most important salts are calcium phosphate, carbonate and fluoride, sodium chloride, potassiu

				</div>
				</article>		


</div><!-- /container -->
<script src="js/classie.js"></script>
		<script>
			(function() {

				// detect if IE : from http://stackoverflow.com/a/16657946		
				var ie = (function(){
					var undef,rv = -1; // Return value assumes failure.
					var ua = window.navigator.userAgent;
					var msie = ua.indexOf('MSIE ');
					var trident = ua.indexOf('Trident/');

					if (msie > 0) {
						// IE 10 or older => return version number
						rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
					} else if (trident > 0) {
						// IE 11 (or newer) => return version number
						var rvNum = ua.indexOf('rv:');
						rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
					}

					return ((rv > -1) ? rv : undef);
				}());


				// disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179					
				// left: 37, up: 38, right: 39, down: 40,
				// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
				var keys = [32, 37, 38, 39, 40], wheelIter = 0;

				function preventDefault(e) {
					e = e || window.event;
					if (e.preventDefault)
					e.preventDefault();
					e.returnValue = false;  
				}

				function keydown(e) {
					for (var i = keys.length; i--;) {
						if (e.keyCode === keys[i]) {
							preventDefault(e);
							return;
						}
					}
				}

				function touchmove(e) {
					preventDefault(e);
				}

				function wheel(e) {
					// for IE 
					//if( ie ) {
						//preventDefault(e);
					//}
				}

				function disable_scroll() {
					window.onmousewheel = document.onmousewheel = wheel;
					document.onkeydown = keydown;
					document.body.ontouchmove = touchmove;
				}

				function enable_scroll() {
					window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
				}

				var docElem = window.document.documentElement,
					scrollVal,
					isRevealed, 
					noscroll, 
					isAnimating,
					container = document.getElementById( 'container' ),
					trigger = container.querySelector( 'button.trigger' );

				function scrollY() {
					return window.pageYOffset || docElem.scrollTop;
				}
				
				function scrollPage() {
					scrollVal = scrollY();
					
					if( noscroll && !ie ) {
						if( scrollVal < 0 ) return false;
						// keep it that way
						window.scrollTo( 0, 0 );
					}

					if( classie.has( container, 'notrans' ) ) {
						classie.remove( container, 'notrans' );
						return false;
					}

					if( isAnimating ) {
						return false;
					}
					
					if( scrollVal <= 0 && isRevealed ) {
						toggle(0);
					}
					else if( scrollVal > 0 && !isRevealed ){
						toggle(1);
					}
				}

				function toggle( reveal ) {
					isAnimating = true;
					
					if( reveal ) {
						classie.add( container, 'modify' );
					}
					else {
						noscroll = true;
						disable_scroll();
						classie.remove( container, 'modify' );
					}

					// simulating the end of the transition:
					setTimeout( function() {
						isRevealed = !isRevealed;
						isAnimating = false;
						if( reveal ) {
							noscroll = false;
							enable_scroll();
						}
					}, 1200 );
				}

				// refreshing the page...
				var pageScroll = scrollY();
				noscroll = pageScroll === 0;
				
				disable_scroll();
				
				if( pageScroll ) {
					isRevealed = true;
					classie.add( container, 'notrans' );
					classie.add( container, 'modify' );
				}
				
				window.addEventListener( 'scroll', scrollPage );
				trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
			})();
		</script>



<?php include('inc2/footer.php') ?>