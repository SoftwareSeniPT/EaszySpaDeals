<?php include('header.php');?>

<div id="content" class="details vendor-review">
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

				<!-- Sidebar -->
				<div class="item" id="sidebar">
					<section class="spa-location">
						<div class="logo">
							<a href="#">
								<img src="./images/aroma-spa-logo.jpg" alt="">
							</a>
						</div>
						<div class="rating">
							<i class="fa fa-star selected"></i>
							<i class="fa fa-star selected"></i>
							<i class="fa fa-star selected"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							(No Rating Yet)
						</div>
						<div class="address">
							<h4>Seminyak</h4>
							<span>Jalan Cemara, Sanur, Bali</span>
						</div>
					</section>
				</div>
				<!-- // Sidebar -->

				<!-- Main Content -->
				<div class="item" id="main-content">
					<section class="spa-desc">
					    <h3>Llivia Spa</h3>
					    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde magni sapiente, similique mollitia quo. Nihil rem error veniam, eaque, debitis harum ut. Maxime recusandae odio reprehenderit ratione. Rem eos illo hic nesciunt sequi ad molestias nam error architecto mollitia porro alias, dolore soluta similique facilis quia nostrum obcaecati blanditiis sapiente esse aliquam. Quia, aut reprehenderit? Itaque nam doloremque quia harum.</p>						
					</section>
					<section class="details-features">
						<h3>Package</h3>

						<h4>Massage</h4>

						<!-- Accordion 1 -->
						<div class="accordion">
							<div class="head">
								<span>Deep Tissue Massage (60 minutes)</span>
								<div class="right">
									<div class="price">
										<span>Rp. 345, 000</span> Rp 172,500
									</div>
								</div>
							</div>
							<div class="content">
								<div class="row">
									<div class="item accordion-content">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet debitis sint quaerat facilis, libero nemo. Alias corrupti rem harum magni perferendis suscipit, vel eius ea, optio, laudantium eveniet amet pariatur!
									</div>
									<div class="item accordion-images">
										<img src="./images/spa1.png" alt="">
										<div class="btn">Book Now</div>
									</div>
								</div>
							</div>
						</div>

						<h4>Packages</h4>

						<!-- Accordion 2 -->
						<div class="accordion">
							<div class="head">
								<span>Coconut Body Glow (3 Hours)</span>
								<div class="right">
									<div class="price">
										<span>Rp. 1,437,500</span> Rp 718,750
									</div>
								</div>
							</div>
							<div class="content">
								<div class="row">
									<div class="item accordion-content">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quae, incidunt minima ab accusamus eaque illum iure odio, amet modi harum, obcaecati deserunt veritatis, ullam dolores repellendus vero. Temporibus, maiores.
									</div>
									<div class="item accordion-images">
										<img src="./images/spa1.png" alt="">
										<div class="btn">Book Now</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					
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
