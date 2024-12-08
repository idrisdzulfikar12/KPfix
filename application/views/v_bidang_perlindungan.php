<title>Bidang Perlindungan Perempuan dan Anak</title>
    <style>
        /* Fade-in animation styles */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-in-out, transform 1s ease-in-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Custom Card Styles */
        .card-custom {
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%);
        }

        .card-body {
            padding: 20px;
        }

        ol {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle fade-in" id="headline">Bidang Perlindungan Perempuan dan Anak</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section id="content">
        <div class="container">
            <div class="row"> 
                <div class="col-md-12">
                    <!-- Card Container -->
                    <div class="card fade-in card-custom" id="fadeCard" style="width: 100%;">
                        <div class="card-body">
                            <p>Bidang Perlindungan Perempuan dan Anak mempunyai fungsi:</p>
                            <ol>
                                <li>Perencanaan program, kegiatan dan anggaran;</li>
                                <li>Pendistribusian tugas kepada bawahan;</li>
                                <li>Pemberian petunjuk kepada bawahan;</li>
                                <li>Penyeliaan tugas bawahan dalam lingkup tanggung jawabnya;</li>
                                <li>Pelaksanaan kegiatan penyusunan Sasaran Kinerja Pegawai;</li>
                                <li>Pelaksanaan koordinasi dengan perangkat daerah lainnya dan instansi terkait; </li>
                                <li>Pelaksanaan kegiatan penyusunan kebijakan di Bidang Perlindungan Perempuan dan Anak; </li>
                                <li>Pelaksanaan kegiatan Seksi Pencegahan dan Penanganan Kekerasan, Seksi Perlindungan Perempuan dan Khusus Anak, dan Seksi Jejaring Perlindungan Perempuan dan Anak; </li>
                                <li>Pelaksanaan kegiatan penyusunan data dan informasi di Bidang Perlindungan Perempuan dan Anak; </li>
                                <li>Pelaksanaan kegiatan pengelolaan dan pertanggungjawaban keuangan di Bidang Perlindungan Perempuan dan Anak; </li>
                                <li>Pelaksanaan penilaian kinerja pegawai dalam lingkup tanggungjawabnya;</li>
                                <li>Pelaksanaan monitoring dan evaluasi program dan kegiatan;</li>
                                <li>Pelaksanaan penyusunan laporan program dan kegiatan;</li>
                                <li>Pelaksanaan tugas kedinasan lain yang diberikan oleh pimpinan sesuai tugas dan fungsinya.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <!-- JavaScript for Fade-In -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const headline = document.getElementById("headline");
            const card = document.getElementById("fadeCard");

            setTimeout(() => {
                headline.classList.add("visible");
                card.classList.add("visible");
            }, 300); // Delay to ensure smooth fade-in
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>