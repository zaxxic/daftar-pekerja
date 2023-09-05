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
        <div class="body">
            <center>
                <h1 style="color: #00c3ff;">Humma<span class="soft" style="color: #000; ">tech</span></h1>
            </center>
            <h4
                style="
              font-family: Arial, Helvetica, sans-serif;
              justify-content: start;
            ">
                Keterangan :
            </h4>
            <p>{{ $datas['judul'] }} </p>

            <h4 style="font-family: Arial, Helvetica, sans-serif">Pesan :</h4>
            <p>{{ $datas['pesan'] }}</p>

            <h3 style="text-align: center; margin-top: 25px">Terima Kasih! 😊</h3>
        </div>
    </div>
</body>

</html>
