<!DOCTYPE html>
<html>

<head>
    <title>Ditolak</title>
    <style>
        .card {
            width: 300px;
            /* Atur lebar card sesuai kebutuhan Anda */
            margin: 0 auto;
            /* Mengatur margin kiri dan kanan agar card berada di tengah */
            border: 1px solid #b1b1b1;
            /* Menambahkan border ke card */
            border-radius: 10px;
            /* Membulatkan sudut border */
            padding-top: 20px;
            /* Menambahkan padding untuk memisahkan konten dari border */
            padding-bottom: 20px;
            /* Menambahkan padding untuk memisahkan konten dari border */
            box-shadow: 1px;
            width: 500px;
        }

        img {
            display: block;
            /* Untuk memastikan gambar berada di tengah secara horizontal */
            margin: 0 auto;
            /* Mengatur margin kiri dan kanan agar gambar berada di tengah */
        }

        h4 {
            margin-left: 20px;
        }

        p {
            margin-left: 20px;
        }
    </style>
</head>


<body>
    <div class="card">
        <div class="card-body container">
            <center>
                <h1 style="color: #00c3ff;">Humma<span class="soft" style="color: #000; ">tech</span></h1>
            </center>

            <p> Pemberitahuan Penolakan Lamaran Pekerjaan - Lowongan {{ $datas['lowongan'] }}</p>
            <p style="color: #000;">Dengan hormat,</p>
            <p style="color: #000;">Kepada {{ $datas['nama'] }},</p>


            <p> mewakili tim manajemen Hummatech, kami ingin mengucapkan terima kasih atas minat Anda untuk bergabung dengan tim kami sebagai {{ $datas['posisi'] }}. Kami telah melakukan evaluasi mendalam terhadap semua pelamar, namun dengan sangat menyesal kami harus memberitahukan bahwa lamaran Anda tidak dapat kami lanjutkan ke tahap seleksi berikutnya. <br>

            Keputusan ini bukanlah sesuatu yang kami lakukan dengan enteng, namun, kami harus mempertimbangkan beberapa faktor yang relevan dalam proses rekrutmen kami. Kami sangat menghargai waktu dan usaha yang Anda luangkan dalam mengajukan lamaran Anda untuk posisi {{ $datas['posisi'] }}.

            Kami ingin memberikan alasan mengapa Anda tidak dipilih untuk posisi {{ $datas['posisi'] }} : </p>

            <p>Alasan penolakan :  {{ $datas['pesan'] }}.</p>

            <p>Meskipun Anda tidak dipilih untuk posisi {{ $datas['posisi'] }} saat ini, kami mendorong Anda untuk terus mencari peluang karier yang sesuai dengan pengalaman dan kualifikasi Anda. Kami percaya bahwa Anda memiliki potensi yang besar dan mungkin cocok dengan posisi lain di masa depan.<br>

                Terima kasih sekali lagi atas minat Anda untuk bergabung dengan Hummatech. Kami menghargai dedikasi Anda dalam mencari peluang kerja dan mengucapkan selamat untuk pencarian kerja Anda selanjutnya. </p>

            <p>Salam hormat,</p>
            <p>PT. Hummatech Technology</p>
        </div>
    </div>
</body>

</html>
