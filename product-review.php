<?php include('header.php');?>

<div id="content" class="details product-review">
	<section class="breadcrumb-wrapper">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Vendor</a></li>
				<li><a href="#">Llivia Spa</a></li>
			</ul>
		</div>
	</section>
	<section class="details-slide">
		<div class="container">
			<div id="slideshow">
				<div class="slide" style="background-image: url(./images/spa-1.jpg)"></div>
				<div class="slide" style="background-image: url(./images/spa-2.jpg)"></div>
				<div class="slide" style="background-image: url(./images/spa-3.jpg)"></div>
				<div class="slide" style="background-image: url(./images/spa-4.jpg)"></div>
			</div>
		</div>

		<!-- Browse -->
		<span class="browse left">
			<i class="fa fa-angle-left"></i>
		</span>
		<span class="browse right">
			<i class="fa fa-angle-right"></i>
		</span>
	</section>
	<section class="content-wrapper">
		<div class="container">
			<div class="row">
				<!-- Main Content -->
				<div class="item" id="main-content">
					<section class="review">
						<h3>Review</h3>

						<div class="review-item">
							<div class="name">Hendra Buzz</div>
							<div class="date">May 21 2015 | 09: 45</div>
							<div class="rating">
								<i class="fa fa-star selected"></i>
								<i class="fa fa-star selected"></i>
								<i class="fa fa-star selected"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>

							<div class="review-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus nulla corporis, officia aliquam dolor distinctio atque quaerat quia, nemo eveniet enim minima mollitia placeat perferendis iure. Soluta id numquam distinctio.
							</div>
						</div>

						<div class="review-item">
							<div class="name">Lippo WC</div>
							<div class="date">May 21 2015 | 09: 45</div>
							<div class="rating">
								<i class="fa fa-star selected"></i>
								<i class="fa fa-star selected"></i>
								<i class="fa fa-star selected"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="review-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus nulla corporis, officia aliquam dolor distinctio atque quaerat quia, nemo eveniet enim minima mollitia placeat perferendis iure. Soluta id numquam distinctio.
							</div>
						</div>
					</section>
					
					<section class="review-form">
						<h3>Add Review</h3>

						<div class="form-item">
							<label for="">Your Review</label>
							<textarea cols="30" rows="10"></textarea>
						</div>

						<div class="form-item">
							<label for="">Name *</label>
							<input type="text" />
						</div>

						<div class="form-item">
							<label for="">Email *</label>
							<input type="text" />
						</div>

						<div class="form-item">
							<button>Submit</button>
						</div>
					</section>		

				</div>
			</div>
		</div>
	</section>
</div>

<?php include('footer.php');?>
