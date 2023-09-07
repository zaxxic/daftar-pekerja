@extends('layouts.app')
@section('content')
    <div class="row gap-5">
        <div class="col-12 rounded-2 col-md-2 p-3" style="background-color: #ECF2FF">
            <div class="d-flex gap-2">
                <div class="p-1 align-self-center rounded" style="background-color: #5D87FF">
                    <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                        viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0-18 0" />
                            <path d="M12 7v5l3 3" />
                        </g>
                    </svg>
                </div>
                <div class="" style="font-size: 15px">
                    Status <br> Menunggu
                </div>
            </div>
            <div class="d-flex justify-content-end mt-2">
                <span style="" class="fw-bold">{{ $menunggu }}</span>
            </div>
        </div>
        <div class="col-12 rounded-2 col-md-2 p-3" style="background-color: #E6FFFA">
            <div class="d-flex gap-2">
                <div class="p-1 align-self-center rounded" style="background-color: #13DEB9">
                    <!-- <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0-18 0" />
                                                    <path d="M12 7v5l3 3" />
                                                </g>
                                            </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #ffff;" width="32" height="32"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M22 5.18L10.59 16.6l-4.24-4.24l1.41-1.41l2.83 2.83l10-10L22 5.18zm-2.21 5.04c.13.57.21 1.17.21 1.78c0 4.42-3.58 8-8 8s-8-3.58-8-8s3.58-8 8-8c1.58 0 3.04.46 4.28 1.25l1.44-1.44A9.9 9.9 0 0 0 12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10c0-1.19-.22-2.33-.6-3.39l-1.61 1.61z" />
                    </svg>
                </div>
                <div class="" style="font-size: 15px">
                    Status <br> Diterima
                </div>
            </div>
            <div class="d-flex justify-content-end mt-2">
                <span style="" class="fw-bold">{{ $terima }}</span>
            </div>
        </div>
        <div class="col-12 rounded-2 col-md-2 p-3" style="background-color: #FBF2EF">
            <div class="d-flex gap-2">
                <div class="p-1 align-self-center rounded" style="background-color: #FA896B">
                    <!-- <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2">
                                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0-18 0" />
                                                        <path d="M12 7v5l3 3" />
                                                    </g>
                                                </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" style="color: #ffff;"
                            d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2zM4 12c0-4.4 3.6-8 8-8c1.8 0 3.5.6 4.9 1.7L5.7 16.9C4.6 15.5 4 13.8 4 12zm8 8c-1.8 0-3.5-.6-4.9-1.7L18.3 7.1C19.4 8.5 20 10.2 20 12c0 4.4-3.6 8-8 8z" />
                    </svg>
                </div>
                <div class="" style="font-size: 15px">
                    Status <br> Ditolak
                </div>
            </div>
            <div class="d-flex justify-content-end mt-2">
                <span style="" class="fw-bold">{{ $tolak }}</span>
            </div>
        </div>
        <div class="col-12 rounded-2 col-md-2 p-3" style="background-color: #E6FFFA">
            <div class="d-flex gap-2">
                <div class="p-1 align-self-center rounded" style="background-color: #67E6E6">
                    <!-- <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0-18 0" />
                                                    <path d="M12 7v5l3 3" />
                                                </g>
                                            </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #ffff;" width="32" height="32"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M14 10H3v2h11v-2zm0-4H3v2h11V6zm4 8v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zM3 16h7v-2H3v2z" />
                    </svg>
                </div>
                <div class="" style="font-size: 15px">
                    Jumlah <br> Divisi
                </div>
            </div>
            <div class="d-flex justify-content-end mt-2">
                <span style="" class="fw-bold">{{ $divisi }}</span>
            </div>
        </div>
        <div class="col-12 rounded-2 col-md-2 p-3" style="background-color: #ECF2FF">
            <div class="d-flex gap-2">
                <div class="p-1 align-self-center rounded" style="background-color: #6d5dff">
                    <!-- <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0-18 0" />
                                                    <path d="M12 7v5l3 3" />
                                                </g>
                                            </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #ffff;" width="32" height="32"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m11.99 18.54l-7.37-5.73L3 14.07l9 7l9-7l-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7l-9 7l1.63 1.27L12 16zm0-11.47L17.74 9L12 13.47L6.26 9L12 4.53z" />
                    </svg>
                </div>
                <div class="" style="font-size: 15px">
                    Jumlah <br> Lowongan
                </div>
            </div>
            <div class="d-flex justify-content-end mt-2">
                <span style="" class="fw-bold">{{ $lowongan }}</span>
            </div>

        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Grafik Pekerja</h5>
                    <div id="chart-line-with-data-labell"></div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('../assets/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
        <script src="{{ asset('../assets/dist/js/apex-chart/apex.line.init.js') }}"></script>

        <script>
            // Data dari controller
            var chartData = @json($chartData);

            // Konfigurasi grafik
            var options = {
                chart: {
                    type: 'bar',
                    responsive: true,
                    width: '100%',
                    height: '180%',
                    colors: ['#36B37E', '#FF5733', '#FF0000']
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '10%',
                        endingShape: 'rounded',
                        borderRadius: 7,
                        barPercentage: 0.8, // Atur lebar batang relatif terhadap lebar kategori
                        categoryPercentage: 0.9, // Atur jarak antara kategori
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                animations: {
                    enabled: true,
                    easing: 'easeinout',
                    speed: 1200,
                    animateGradually: {
                        enabled: true,
                        delay: 200
                    },
                    dynamicAnimation: {
                        enabled: true,
                        speed: 450
                    }
                },
                series: [{
                        name: 'Menunggu',
                        data: chartData.map(data => parseInt(data.menunggu)) // Menggunakan parseInt() di sini
                    },
                    {
                        name: 'Diterima',
                        data: chartData.map(data => parseInt(data.diterima)) // Menggunakan parseInt() di sini
                    },
                    {
                        name: 'Ditolak',
                        data: chartData.map(data => parseInt(data.ditolak)), // Menggunakan parseInt() di sini
                        color: '#FF0000' // Set the color for the 'Ditolak' series
                    }
                ],
                xaxis: {
                    categories: chartData.map(data => data.month)
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return Math.round(val); // Menampilkan angka sebagai bilangan bulat pada tooltip
                        }
                    }
                }
            };

            // Inisialisasi grafik
            var chart = new ApexCharts(document.querySelector("#chart-line-with-data-labell"), options);
            chart.render();
        </script>



    </div>
@endsection
