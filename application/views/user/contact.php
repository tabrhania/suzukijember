<?php $this->load->view('template/page_head') ?>
<?php $this->load->view('template/navbar') ?>
<!-- isi halaman memulai -->

<div class="content" id="contact">
   <div class="container"> 
   <h3 class="title">Hubungi Kami :</h3>
            <div class="col-md-6">

					<div class="map-grid">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.1999636274095!2d113.66841721433089!3d-8.182601084297628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd693ff9d1365b3%3A0x565eb1ebc56b88be!2sSuzuki%20UMC%20Jember!5e0!3m2!1sen!2sid!4v1576056076065!5m2!1sen!2sid"  allowfullscreen=""></iframe>
					</div>
                </div>
   <div class="col-md-6 contact">
    <form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
						
								<input type="text" name="Name" placeholder="Nama" required="">
						
							</div>
							<div class="styled-input">

								<input type="email" name="Email" placeholder="Email" required=""> 
							

						
							</div> 
							<div class="styled-input">
							
								<input type="text" name="phone" placeholder="Telephone" required="">
							

							
							</div>
							<div class="styled-input">
							
								<textarea name="Message" placeholder="Pesan" required=""></textarea>
								

							
							</div>	 
							<div>
							<div class="click">
							<input type="submit" value="Kirim">
							</div>
							</div>
						</form>
					  </div>
       
					<div class="clearfix"> </div>
 
   				
</div>
 </div>

<!-- isi halaman end -->
<?php $this->load->view('template/footer') ?>
<?php $this->load->view('template/js') ?>