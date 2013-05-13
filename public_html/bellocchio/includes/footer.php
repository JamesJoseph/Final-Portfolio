			

			<footer>	
				<section id="contact">
					<h3>Contact Us</h3>
					<ul>
						<li>Monday - Closed</li>
						<li>Tuesday-Thursday: 11am-6pm</li>
						<li>Friday-Saturday: 11am-5pm</li>
						<li>Sunday: 12pm-5pm</li>
					</ul>

					<ul>
						<li class="bold">25519 Woodward Avenue</li>
						<li class="bold">Royal Oak, MI 48067</li>
						<li><span class="bold">P:</span> 248.541.8025</li>
						<li><span class="bold">E:</span> email@bellocchioresale.com</li>
					</ul>

				</section>


				<section id="mailList">

					<?php if (empty($_POST)): ?>

						<h3>Join our Mailing List</h3>
						<p>Enter your email address below and we'll keep you informed of special offers and exciting new arrivals.</p>						

						<form id="mailing" mehtod="POST" action="/Midterm/index.php">

							<input type="text" name="name" placeholder="Name" length="60" class="mail">

							<input type="text" name="email" placeholder="Your Email Address" length="60" class="email">

							<input type="submit" value="Subscribe" class="subscribe">
						</form>

						<?php else: ?>

							
							<h4>Thank you for joining our mailing list!</h4>
														

					<?php endif; ?>					

				</section>

				<section id="followUs">
					<h3>Follow Us</h3>

					<p>Follow us and be eligible for unique offers and exciting new arrivals.</p>

					<div id="socialIcons">
						<ul>
							<li class="facebook"><a href="#"></a></li>
							<li class="twitter"><a href="#"></a></li>
							<li class="pintrest"><a href="#"></a></li>
							<li class="instagram"><a href="#"></a></li>
						</ul>
						
					</div>

				</section>

				<small id="copyright">&copy;2013 Bellocchio</small>

			</footer>

			

		

		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		
		<script type="text/javascript" src="js/slideTo.js"></script>
		
		<script type="text/javascript" src="js/form.js"></script>

		<script src="js/responsiveslides.js"></script>

		<script>
		  $(function() {
		    $(".rslides").responsiveSlides();
		  });
		</script>

	</body>

</html>