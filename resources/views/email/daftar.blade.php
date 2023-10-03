<!DOCTYPE html>
<html>

<head>
    <title>Diterima</title>
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
        <div class="card-body">
            <center>
                <h1 style="color: #00c3ff;">Humma<span class="soft" style="color: #000; ">tech</span></h1>
            </center>
            <p style="color: #000;">Dengan hormat,</p>

            <p style="color: #000;">{{ $datas['nama'] }}</p>

            <p style="color: #000;">Saya dengan ini ingin menyampaikan bahwa saya telah menerima tawaran Anda untuk bergabung dengan Lowongan {{ $datas['lowongan'] }} dalam divisi {{ $datas['divisi'] }}, dengan posisi {{ $datas['posisi'] }}. Saya sangat berterima kasih atas kesempatan ini.</p>

            <p style="color: #000;">Saya ingin mengonfirmasi bahwa saya bersedia untuk mengikuti sesi wawancara yang telah dijadwalkan pada tanggal {{ $datas['tanggal'] }}. Lokasi wawancara akan berlangsung di alamat berikut :</p>

            <p style="color: #000;">{{ $datas['lokasi'] }}</p>

            <p style="color: #000;">Saya sangat bersemangat untuk bertemu dengan Anda dan berdiskusi lebih lanjut tentang peran ini. Terima kasih atas perhatian Anda terhadap lamaran saya.</p>

            <p style="color: #000;">Salam hormat,</p>

            <p style="color: #000;">PT. Hummatech Technology</p>
        </div>
    </div>
</body>

</html>