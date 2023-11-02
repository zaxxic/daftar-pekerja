<!DOCTYPE html>
<html>

<head>
    <title>Pemecatan</title>
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

            margin-right: 20px;
        }
    </style>
</head>


<body>
    <div class="card">
        <div class="card-body">
            <center>
                <h1 style="color: #00c3ff;">Humma<span class="soft" style="color: #000; ">tech</span></h1>
            </center>

            <p style="color: #000;">Dengan hormat,</p>

            <p style="color: #000;">{{ $datas['nama'] }}</p>

            <p style="color: #000;">Setelah melakukan evaluasi dan pertimbangan yang mendalam, kami telah sampai pada keputusan yang sulit, yaitu untuk mengakhiri hubungan kerja Anda di {{ $datas['divisi'] }} dengan posisi {{ $datas['posisi'] }}.</p>

            <p style="color: #000;">Keputusan ini didasarkan pada berbagai faktor, termasuk {{ $datas['pesan'] }}. </p>

            <p style="color: #000;">Kami sangat menghargai kontribusi dan usaha Anda selama bekerja di perusahaan kami. Ini adalah keputusan yang kami ambil setelah mempertimbangkan segala aspek yang terlibat.  </p>

            <p style="color: #000;">Salam hormat,</p>

            <p style="color: #000;">PT. Hummatech Technology</p>
        </div>
    </div>
</body>

</html>