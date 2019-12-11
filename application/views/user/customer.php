<?php $this->load->view('template/page_head') ?>
<?php $this->load->view('template/navbar') ?>
<!-- isi halaman memulai -->

<!-- testimonials -->
<div class="testimonials" id="clients">
	<div class="container"> 
	   <h3 class="title">Review Customer</h3>
		<p class="port">Berikut beberapa review dari beberapa customer :</p>
		<span class="w3-line black"></span>
		<div class="agile_testimonials_grids">
			<ul id="flexiselDemo1">	
				<li>
					<div class="agile_testimonials_grid">
						<div class="agile_testimonials_grid1">
							<div class="w3_agile_testimonials_grid">
								<div class="w3_agile_testimonials_grid_left">
									<img src="<?= base_url() ?>/assets/images/c1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3_agile_testimonials_grid_right test-tooltip">
							   <p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et 
								malesuada fames ac turpis egestas.Sed lorem enim, .</p>
									<h4>Tyson</h4>
									
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="agile_testimonials_grid">
						<div class="agile_testimonials_grid1">
						<div class="w3_agile_testimonials_grid_right test-tooltip1">
							 <p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et 
								malesuada fames ac turpis egestas.Sed lorem enim,.</p>
							<h4>sam</h4>
						</div>
						<div class="w3_agile_testimonials_grid">
								<div class="w3_agile_testimonials_grid_left">
									<img src="<?= base_url() ?>/assets/images/c2.jpg" alt=" " class="img-responsive" />
								</div>
						</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</li>
				<li>
					<div class="agile_testimonials_grid">
						<div class="agile_testimonials_grid1">
							<div class="w3_agile_testimonials_grid_right test-tooltip1">
								 <p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et 
								malesuada fames ac turpis egestas.Sed lorem enim, .</p>
								<h4>max</h4>
										
							</div>
							<div class="w3_agile_testimonials_grid">
								<div class="w3_agile_testimonials_grid_left">
									<img src="<?= base_url() ?>/assets/images/c3.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="agile_testimonials_grid">
						<div class="agile_testimonials_grid1">
							<div class="w3_agile_testimonials_grid">
								<div class="w3_agile_testimonials_grid_left">
									<img src="<?= base_url() ?>/assets/images/c4.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3_agile_testimonials_grid_right test-tooltip">
							 <p>Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus et 
								malesuada fames ac turpis egestas.Sed lorem enim,.</p>
									<h4>joy</h4>
									
								</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</li>	
			</ul>

		</div>
	</div>
</div>
<!-- //testimonials -->

<!-- isi halaman end -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>