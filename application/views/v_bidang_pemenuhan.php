<title>Bidang Pemenuhan Hak Anak</title>
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
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle text-center fade-in" id="headline">Bidang Pemenuhan Hak Anak</h2>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row"> 
                <div class="col-md-12">
                    <!-- Card Container -->
                    <div class="card fade-in card-custom" id="fadeCard" style="width: 100%;">
                        <div class="card-body">
                            <p>Bidang Pemenuhan Hak Anak mempunyai fungsi:</p>
                            <ol>
                                <li>Perencanaan program, kegiatan dan anggaran;</li>
                                <li>Pendistribusian tugas kepada bawahan;</li>
                                <li>Pemberian petunjuk kepada bawahan;</li>
                                <li>Penyeliaan tugas bawahan dalam lingkup tanggung jawabnya;</li>
                                <li>Pelaksanaan kegiatan penyusunan Sasaran Kinerja Pegawai;</li>
                                <li>Pelaksanaan koordinasi dengan perangkat daerah lainnya dan instansi terkait; </li>
                                <li>Pelaksanaan kegiatan penyusunan kebijakan di Bidang Pemenuhan Hak Anak; </li>
                                <li>Pelaksanaan kegiatan Seksi Hak Sipil, Informasi dan Partisipasi, Seksi Pengasuhan dan Lingkungan dan Seksi Pendidikan dan Kesehatan; </li>
                                <li>Pelaksanaan kegiatan penyusunan data dan informasi di Bidang Pemenuhan Hak Anak; </li>
                                <li>Pelaksanaan kegiatan pengelolaan dan pertanggungjawaban keuangan di Bidang Pemenuhan Hak Anak; </li>
                                <li>Pelaksanaan penilaian kinerja pegawai di lingkungan Bidang Pemenuhan Hak Anak; </li>
                                <li>Pelaksanaan monitoring dan evaluasi program dan kegiatan; </li>
                                <li>Pelaksanaan penyusunan laporan program dan kegiatan; dan</li>
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