<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>DP3A</strong><br>
<<<<<<< HEAD
					Jl. Prof. Soedarto No.116, Sumurboto, Kec. Banyumanik, Kota Semarang<br>
					Jawa Tengah 50269</address>
=======
					JC Main Road, Near Silnile tower<br>
					 Pin-21542 NewYork US.</address>
>>>>>>> 9cc38f9e3dfd0ed381b63a94e5c6ae0feed9e29a
					<p>
						<i class="icon-phone"></i> (024) 76402252  <br>
						<i class="icon-envelope-alt"></i> dinasp3a.kotasemarang@gmail.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a href="#">Latest Events</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
					<li><a href="https://dp3a.semarangkota.go.id/blog/post/deklarasi-satgas-ppks-undip-bentuk-komitmen-menciptakan-ruang-aman-dari-kekerasan-seksual" target="_blank">Deklarasi Satgas PPKS UNDIP Bentuk Komitmen Menciptakan Ruang Aman dari Kekerasan Seksual</a></li>
					<li><a href="https://dp3a.semarangkota.go.id/blog/post/pudakpayung-banyumanik-masuk-4-besar-dalam-lomba-kelurahan-tingkat-provinsi-jawa-tengah-tahun-2024" target="_blank">Pudakpayung Banyumanik masuk 4 besar dalam Lomba Kelurahan Tingkat Provinsi Jawa Tengah Tahun 2024</a></li>
					<li><a href="https://dp3a.semarangkota.go.id/blog/post/jauhi-narkoba-selamatkan-generasi-penerus-bangsa" target="_blank">Jauhi Narkoba Selamatkan Generasi Penerus Bangsa</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Dinas Pemberdayaan Perempuan dan Perlindungan Anak </span>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="https://www.facebook.com/dpppa.kotasemarang" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://x.com/i/flow/login?redirect_after_login=%2FDp3aSmrg" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= base_url() ?>template/front-end/js/jquery.js"></script>
<script src="<?= base_url() ?>template/front-end/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url() ?>template/front-end/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>template/front-end/js/jquery.fancybox.pack.js"></script>
<script src="<?= base_url() ?>template/front-end/js/jquery.fancybox-media.js"></script> 
<script src="<?= base_url() ?>template/front-end/js/portfolio/jquery.quicksand.js"></script>
<script src="<?= base_url() ?>template/front-end/js/portfolio/setting.js"></script>
<script src="<?= base_url() ?>template/front-end/js/jquery.flexslider.js"></script>
<script src="<?= base_url() ?>template/front-end/js/animate.js"></script>
<script src="<?= base_url() ?>template/front-end/js/custom.js"></script>
<script src="<?= base_url() ?>template/front-end/js/owl-carousel/owl.carousel.js"></script>
<script src="<?= base_url() ?>template/front-end/js/about.js"></script>
<!-- DataTables JavaScript -->
<script src="<?= base_url() ?>template/back-end/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>template/back-end/js/dataTables/dataTables.bootstrap.min.js"></script>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const wrapper = document.querySelector('.slider-wrapper');
		const items = document.querySelectorAll('.slider-item');
		const prevBtn = document.querySelector('.prev');
		const nextBtn = document.querySelector('.next');
		let currentIndex = 0;

		function showSlide(index) {
			wrapper.style.transform = `translateX(-${index * 100}%)`;
		}

		nextBtn.addEventListener('click', () => {
			currentIndex = (currentIndex + 1) % items.length;
			showSlide(currentIndex);
		});

		prevBtn.addEventListener('click', () => {
			currentIndex = (currentIndex - 1 + items.length) % items.length;
			showSlide(currentIndex);
		});

		setInterval(() => {
			currentIndex = (currentIndex + 1) % items.length;
			showSlide(currentIndex);
		}, 5000);
	});
</script>
</body>
</html>