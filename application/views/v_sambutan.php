<title>Sambutan Kepala Dinas</title>
    <style>
        /* Keyframes for fade-in effect */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px); /* Slightly move down for dynamic effect */
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Add fade-in animation to the card */
        .fade-in {
            opacity: 0; /* Initial state */
            animation: fadeIn 1s ease-in-out forwards; /* Animation properties */
            animation-delay: 0.3s; /* Optional delay */
        }
    </style>
</head>
<body>
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle fade-in">Sambutan Kepala Dinas</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="about">
                <div class="row justify-content-center">
                    <div class="col-lg-12" style="margin-left: 25px;">
                        <!-- Card with fade-in animation -->
                        <div class="card border-0 shadow-lg fade-in">
                            <div class="row g-0 align-items-center" 
                                 style="background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%); border-radius: 10px;">
                                <!-- Image Section -->
                                <div class="col-md-4 d-flex justify-content-center">
                                    <img src="<?= base_url() ?>template/front-end/img/kepala.png" 
                                         alt="Kepala Dinas" 
                                         class="img-fluid rounded-start"
                                         style="max-width: 100%; height: auto; object-fit: cover; padding: 20px;">
                                </div>
                                <!-- Content Section -->
                                <div class="col-md-8">
                                    <div class="card-body p-5"><br><br>
                                        <p class="card-text text-justify" 
                                           style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                                            Puji syukur kami ucapkan kepada Allah SWT atas perkenan-Nya Dinas Pemberdayaan Perempuan dan Perlindungan Anak Kota Semarang telah mempunyai website resmi yang menampilkan informasi mengenai Pemberdayaan Perempuan dan Perlindungan Anak di Kota Semarang.
                                        </p>
                                        <p class="card-text text-justify" 
                                           style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                                            Tidak lupa kami ucapkan selamat datang di Website kami. Website ini merupakan salah satu bentuk upaya konkrit dari kami untuk menyetarakan dengan lembaga-lembaga lain di Indonesia yang telah terlebih dahulu memasuki dunia informasi global.
                                        </p>
                                        <p class="card-text text-justify" 
                                           style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                                            Selain itu diharapkan bahwa website ini dapat menjadi penyedia informasi bagi semua pihak yang memerlukan informasi seputar Pemberdayaan Perempuan dan Perlindungan Anak di lingkungan Pemerintah Kota Semarang.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Card -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Select the card element and the headline
            const cardElement = document.querySelector(".card");
            const headlineElement = document.querySelector(".pageTitle");

            // Add fade-in class to both the card and the headline
            if (cardElement) {
                cardElement.classList.add("fade-in");
            }
            if (headlineElement) {
                headlineElement.classList.add("fade-in");
            }
        });
    </script>