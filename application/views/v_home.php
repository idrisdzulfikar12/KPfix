<style>
  /* Hover effect for feature cards */
  .feature-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-decoration: none;
    color: inherit;
  }

  .feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
  }

  /* Hover effect for icon */
  .feature-icon {
    color: #4CAF50;
    transition: color 0.3s ease;
  }

  .feature-card:hover .feature-icon {
    color: #FF5722;  /* Change icon color on hover */
    transform: scale(1.2); /* Make the icon grow slightly on hover */
  }

  /* Underline effect for text */
  .feature-card h5 {
    position: relative;
    display: inline-block;
    margin-top: 30px; /* Added more margin to move text further down */
  }

  .feature-card h5::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -4px;
    width: 0;
    height: 2px;
    background-color: #FF5722;
    transition: width 0.3s ease;
  }

  .feature-card:hover h5::after {
    width: 100%;
  }

  .feature-card:hover h5 {
    color: #FF5722;  /* Change text color on hover */
  }
  /* Style untuk form pencarian */
.search-form {
    display: flex;
    justify-content: center;
    margin-top: 40px;  /* Menambahkan jarak lebih jauh ke bawah */
}

.search-form input {
    width: 300px;
    padding: 10px;
    margin-right: 10px;
    border-radius: 25px; /* Membuat input lebih rounded */
    border: 1px solid #ccc;
    font-size: 16px;
    outline: none;
    transition: border-color 0.3s ease;
}

.search-form input:focus {
    border-color: #007bff;  /* Mengubah warna border saat input difokuskan */
}

.search-form button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 25px; /* Membuat tombol lebih rounded */
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.search-form button:hover {
    background-color: #0056b3;
}

.search-form button:focus {
    outline: none; /* Menghilangkan border fokus */
}
</style>

<section id="featured">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?= base_url() ?>template/front-end/img/slides/1.png" alt="" />
              </li>
              <li>
                <img src="<?= base_url() ?>template/front-end/img/slides/2.png" alt="" />
              </li>
              <li>
                <img src="<?= base_url() ?>template/front-end/img/slides/3.png" alt="" />
              </li>
			  <li>
                <img src="<?= base_url() ?>template/front-end/img/slides/4.png" alt="" />
              </li>
            </ul>
        </div>
	<!-- end slider --> 
</section>

<div class="container">
    <!-- Form Pencarian -->
    <form method="get" action="<?= site_url('home/search'); ?>" class="search-form">
        <input type="text" name="query" placeholder="Cari berita atau artikel..." required>
        <button type="submit">Cari</button>
    </form>
</div>

<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="margin-left: 28px;">
				<div class="aligncenter"><h1 class="aligncenter">Sambutan Kepala Dinas</h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span><br>
					<p class="text-justify">Puji syukur kami ucapkan kepada Allah SWT atas perkenan-Nya Dinas Pemberdayaan Perempuan dan Perlindungan Anak Kota Semarang  telah mempunyai website resmi yang menampilkan informasi mengenai Pemberdayaan Perempuan dan Perlindungan Anak di Kota Semarang. </p>

					<p class="text-justify">Tidak lupa kami ucapkan selamat datang di Website kami. Website ini merupakan salah satu bentuk upaya konkrit dari kami untuk menyetarakan dengan lembaga-lembaga lain di Indonesia yang telah terlebih dahulu memasuki dunia informasi global.</p> 
					
					<p class="text-justify">Selain itu diharapkan bahwa website ini dapat menjadi penyedia informasi bagi semua pihak yang memerlukan informasi seputar Pemberdayaan Perempuan dan Perlindungan Anak di lingkungan Pemerintah Kota Semarang.</p>
				</div>
			</div>
		</div>
	</div>
	
	<section class="callaction">
		<div class="container">
			<div class="row">
				<div class="col-lg-12" style="margin-left: 28px;">
					<div class="aligncenter">
						<h1 class="aligncenter">Website Resmi DP3A Kota Semarang</h1>
						<span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span>
						<p class="text-justify"> Website Dinas Pemberdayaan Perempuan dan Perlindungan Anak Kota Semarang ini merupakan sarana media pelayanan data dan informasi bagi seluruh lapisan masyarakat Kota Semarang yang bertujuan memberikan pelayanan informasi dan data melalui media elektronik.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<section id="content">
	<div class="slider-container">
		<div class="slider-wrapper">
			<div class="slider-item">
				<img src="https://dp3a.semarangkota.go.id/storage/app/media/Gambar%20Slide%20Kecil/112.png" alt="Slide 1">
			</div>
			<div class="slider-item">
				<img src="https://dp3a.semarangkota.go.id/storage/app/media/Gambar%20Slide%20Utama/2024/DSC05409.jpg" alt="Slide 2">
			</div>
		</div>
		<div class="slider-nav">
			<button class="prev">&#10094;</button>
			<button class="next">&#10095;</button>
		</div>
	</div>
</section>&nbsp;
		
	<section id="pappihebat" class="section" style="background-color:#ffffff;">
		<div align="center">
			<div class="section-header aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
				<img src="https://dp3a.semarangkota.go.id/storage/app/media/Gambar%20Slide%20Utama/2024/Logo_Pappi_Hebat-removebg-preview.png" alt="Pappi Hebat" class="img-fluid">
			</div>&nbsp;

			<section id="pointpappihebat">
			<div class="container my-5">
  <div class="row justify-content-center">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <a href="http://ppt-dp3a.semarangkota.go.id" target="_blank" class="feature-card text-center p-4 h-100 d-block">
            <div class="feature-icon mb-4" style="font-size: 60px;">
              🎯
            </div>&nbsp;
            <h5 class="mb-2">Asikk Pak</h5>
          </a>
        </div>

        <div class="col-md-6 col-lg-3">
          <a href="http://kla.dp3a.semarangkota.go.id/" target="_blank" class="feature-card text-center p-4 h-100 d-block">
            <div class="feature-icon mb-4" style="font-size: 60px;">
              👥
            </div>&nbsp;
            <h5 class="mb-2">Evaluasi Kota<br>Layak Anak</h5>
          </a>
        </div>

        <div class="col-md-6 col-lg-3">
          <a href="http://siga.dp3a.semarangkota.go.id/" target="_blank" class="feature-card text-center p-4 h-100 d-block">
            <div class="feature-icon mb-4" style="font-size: 60px;">
              💾
            </div>&nbsp;
            <h5 class="mb-2">Sistem Informasi<br>Gender dan Anak</h5>
          </a>
        </div>

        <div class="col-md-6 col-lg-3">
          <a href="http://dp3a.semarangkota.go.id/pengaduan" target="_blank" class="feature-card text-center p-4 h-100 d-block">
            <div class="feature-icon mb-4" style="font-size: 60px;">
              📣
            </div>&nbsp;
            <h5 class="mb-2">Pengaduan<br>Masyarakat</h5>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="aligncenter">
                    <h2 class="aligncenter">Berita Terbaru</h2>
                    <span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span>
                    Semakin aku banyak membaca, semakin aku banyak berpikir; semakin aku banyak belajar, semakin aku sadar bahwa aku tak mengetahui apa pun.
                </div>
            </div>
            &nbsp;

			<div class="row courses_row">
			<?php if (!empty($latest_berita_home)): ?>
				<?php foreach($latest_berita_home as $key => $value){ ?>

				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="<?= base_url('gambar_berita/'.$value->gambar_berita) ?>" width="100%" height="250"></div>
						<div class="course_body">
							<h3 class="course_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita) ?>"><?= substr(strip_tags($value->judul_berita),0,30) ?>....</a></h3>
							<div class="course_text">
								<p><?= substr(strip_tags($value->isi_berita),0,100) ?></p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<span><?= $value->tgl_berita ?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php }?>
			<?php else: ?>
				<p>Tidak ada berita terbaru.</p>
			<?php endif; ?>
			</div>
        </div>
    </div>
</section>
