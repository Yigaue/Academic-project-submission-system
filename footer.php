
<!--footer L.G-->


<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3> <a name= "footer"></a> Our Story</h3>
			<p>"The  Future belongs to those who think big enough to affect the world with their craft" </p>
		</div>
		<div class="col-md-3 footer-grid" style="float: right; font-family: 'Noto Sans', sans-serif;">
			<h3>Menu</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#footer">Our Story</a></li>
				
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
		
		<div class="clearfix"></div>
			<div class="footer-bottom">
			
				<ul class="social-fo">
					<li><a href="www.facebook.com" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="www.twitter.com" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="www.pinterest.com" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
			
				</ul>
				<div class=" address">
				  <div class="col-md-4 fo-grid1">
				    <p><i class="fa fa-phone" aria-hidden="true"></i>+2349052201124 , +2347031172366</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:info@jarazone.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@jarazone.com</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; 2016 jarazone.com. All Rights Reserved | Design by  <a href="http://www.jarazone.com/">jarazone</a></p>
		</div>
	</div>
</div>
<!-- //footer-->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>

  
  
 
				
</body>
</html>