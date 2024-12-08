<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="widget">
					<h5 class="widgetheading">Kontak DP3A</h5><br>
					<address>
						Jl. Prof. Soedarto No.116, Sumurboto, Kec. Banyumanik, Kota Semarang<br>
						Jawa Tengah 50269
					</address>
					<p>
						<i class="icon-phone"></i><strong> (024) 76402252 </strong><br>
						<i class="icon-envelope-alt"></i><strong> dinasp3a.kotasemarang@gmail.com </strong>
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="widget" style="color: white;">
					<h5 class="widgetheading" style="color: white;">Tentang DP3A Kota Semarang</h5><br>
					<p class="text-justify" style="color: white;">
						DPPPA Kota Semarang merupakan unsur pelaksanaan urusan pemerintah Kota Semarang bidang Pemberdayaan Perempuan dan Perlindungan Anak. Terbentuk berdasarkan Peraturan Daerah Kota Semarang No 14 Tahun 2016.
					</p>
					<p class="text-justify" style="color: white;">
						Sebelumnya lembaga yang berwenang dalam melakukan perlindungan hukum terhadap perempuan dan anak adalah Badan Pemberdayaan Masyarakat, Perempuan dan Keluarga Berencana (Bapermas, Perempuan dan KB).
					</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="widget">
					<h5 class="widgetheading">Lokasi</h5><br>
					<iframe 
					src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15838.512727076839!2d110.4280968!3d-7.0529021!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c00e19e3db1%3A0xde471feee960ce9f!2sDinas%20Pemberdayaan%20Perempuan%20Dan%20Perlindungan%20Anak!5e0!3m2!1sid!2sid!4v1733627435140!5m2!1sid!2sid"
						width="100%" 
						height="235" 
						style="border:0;" 
						allowfullscreen="" 
						loading="lazy" 
						referrerpolicy="no-referrer-when-downgrade">
					</iframe>
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
							<span>&copy; Dinas Pemberdayaan Perempuan dan Perlindungan Anak</span>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="https://www.facebook.com/dpppa.kotasemarang" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://x.com/i/flow/login?redirect_after_login=%2FDp3aSmrg" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/dp3a_kotasemarang/" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UC-LWWQaUOam99RQOc4HYHFA" data-placement="top" title="YOutube"><i class="fa fa-youtube"></i></a></li>
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
<script src="<?= base_url() ?>template/front-end/js/scrollmagic/ScrollMagic.min.js"></script>
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