<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>


<!-- Contact Us Section Start -->
<div class="contact-us">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<!-- Contact Details Section Start -->
				<div class="contact-details">
					<!-- Section Title Start -->
					<div class="section-title">
						<h3 class="wow fadeInUp">contact us</h3>
						<h1 class="text-anime-style-3">Get in touch with us today</h1>
					</div>
					<!-- Section Title End -->

					<!-- Contact Details Body Start -->
					<div class="contact-detail-body">
						<p class="wow fadeInUp" data-wow-delay="0.25s">Reach out today and discover how our innovative IT solutions can transform your business. Our team is ready to assist you with personalized support and expertise.</p>
						<h3 class="wow fadeInUp" data-wow-delay="0.5s">follow us:</h3>
						<ul class="wow fadeInUp" data-wow-delay="0.75s">
							<!-- <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li> -->
							<li><a href="https://www.instagram.com/savitarainfotelpvtltd?igsh=MWRtZ2c1ZDd3eGd3dw=="><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="https://www.linkedin.com/company/savitara-infotel-pvt-ltd/"><i class="fa-brands fa-linkedin-in"></i></a></li>
							<!-- <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li> -->
						</ul>
					</div>
					<!-- Contact Details Body End -->
				</div>
				<!-- Contact Details Section End -->
			</div>

			<div class="col-lg-6">
				<div class="contact-form-box wow fadeInUp" data-wow-delay="0.5s">
					<!-- Contact Form Start -->
					<div class="contact-form">
						<?= form_open('', 'id="contactForm" data-toggle="validator"'); ?>
							<div class="row">
								<div class="form-group col-md-6 mb-4">
									<input type="text" name="first_name" class="form-control" id="first_name" placeholder="first name" maxlength="20" required />
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-md-6 mb-4">
									<input type="text" name="last_name" class="form-control" id="last_name" placeholder="last name" maxlength="20" required />
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-md-6 mb-4">
									<input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Phone" maxlength="10" pattern="[789][0-9]{9}" required />
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-md-6 mb-4">
									<input type="email" name="email" class="form-control" id="email" placeholder="email" maxlength="100" required />
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-md-12 mb-4">
									<input type="text" name="msg_subject" class="form-control" id="msg_subject" placeholder="subject" maxlength="100" required />
									<div class="help-block with-errors"></div>
								</div>

								<div class="form-group col-md-12 mb-4">
									<textarea name="message" class="form-control" id="message" rows="7" placeholder="message" required maxlength="500"></textarea>
									<div class="help-block with-errors"></div>
								</div>

								<div class="col-md-12">
									<button type="submit" class="btn-default">send a message</button>
									<div id="msgSubmit" class="h3 text-left hidden"></div>
								</div>
							</div>
						<?= form_close(); ?>
					</div>
					<!-- Contact Form End -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Contact Us Section End -->
<div class="contact-information">
	<div class="container">
		
		<div class="row g-3">
			<div class="col-lg-8">
				<!-- Contact Item Start -->

				<div class="contact-item wow fadeInUp " data-wow-delay="0.25s">
					<div class="contact-content-title">
						<h2>Near USA or India? Visit Us!</h2>
						<a href="https://maps.app.goo.gl/rjrppnGXU47kt6vi8"><img src="assets/images/contact-mail.png" alt=""></a>
					</div>
					<div class="contact d-flex">
						<div class="contact-content">

							<p><img src="assets/images/adr-flag-ind.png"> INDIA :</p>
							<p>FF - 123, I Square, Nr. Shukan Mall Crossroads,Science City Road, Sola, Ahmedabad, Gujarat, India - 380060</p><br>

							<p><a href="tel:+91 9081907502"><img src="assets/images/phone.png" alt=""></a> +91 90 819 07 502</p>

						</div>
						<div class="contact-content">							
							<p><img src="assets/images/adr-flag-us.png"> USA : </p>
							<p>15859 LE CLAIRE AVE C202, OAK FOREST, ILLINOIS 60452, USA</p>
							<br>
							<p><a href="tel:+1 608 421-8497"><img src="assets/images/phone.png" alt=""></a> +1 608 421-8497</p>



						</div>
					</div>

					<!-- <div class="contact-image">
							<figure class="image-anime">
								<img src="assets/images/contact-info-1.jpg" alt="">
							</figure>
						</div> -->
				</div>
				<!-- Contact Item End -->
			</div>



			<div class="col-lg-4 col-md-6 mx-auto">
				<!-- Contact Item Start -->
				<div class="contact-item wow fadeInUp" data-wow-delay="0.75s">
					<div class="contact-content">
						<div class="contact-content-title">
							<h2>email us</h2>
							<a href="mailto:"><img src="assets/images/icon-mail.svg" alt=""></a>
						</div>
						<p>info@savitarainfotel.com</p>
						<p>careers@savitarainfotel.com</p>
						<p>sales@savitarainfotel.com</p>
					</div>
					
				</div>
				<!-- Contact Item End -->
			</div>
		</div>
	</div>
</div>
<!-- Contact Information Section End -->

<!-- Google Map Section Start -->
<div class="google-map wow fadeInUp" data-wow-delay="0.25s">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5191.196369041955!2d72.5157801116809!3d23.070352570665495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9dfce59232db%3A0xe06f6fb0fcfbd0f8!2sSAVITARA%20INFOTEL%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1718620214913!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
		</div>
	</div>
</div>