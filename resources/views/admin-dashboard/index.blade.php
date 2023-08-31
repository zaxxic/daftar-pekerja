@extends('layouts.app')
@section('content')
    <div class="row gap-5">
        <div class="col-10 rounded-2 col-md-2 p-3" style="background-color: #ECF2FF">
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
        <div class="col-10 rounded-2 col-md-2 p-3" style="background-color: #E6FFFA">
            <div class="d-flex gap-2">
                <div class="p-1 align-self-center rounded" style="background-color: #13DEB9">
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
                    Status <br> Diterima
                </div>
            </div>
            <div class="d-flex justify-content-end mt-2">
                <span style="" class="fw-bold">{{ $terima }}</span>
            </div>
        </div>
        <div class="col-10 rounded-2 col-md-2 p-3" style="background-color: #FBF2EF">
            <div class="d-flex gap-2">
                <div class="p-1 align-self-center rounded" style="background-color: #FA896B">
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
                    Status <br> Ditolak
                </div>
            </div>
            <div class="d-flex justify-content-end mt-2">
                <span style="" class="fw-bold">{{ $tolak }}</span>
            </div>
        </div>
        <div class="col-10 rounded-2 col-md-2 p-3" style="background-color: #E6FFFA">
            <div class="d-flex gap-2">
                <div class="p-1 align-self-center rounded" style="background-color: #67E6E6">
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
                    Jumlah <br> Divisi
                </div>
            </div>
            <div class="d-flex justify-content-end mt-2">
                <span style="" class="fw-bold">{{ $divisi }}</span>
            </div>
        </div>
        <div class="col-10 rounded-2 col-md-2 p-3" style="background-color: #FEF5E5">
            <div class="d-flex gap-2">
                <div class="p-1 align-self-center rounded" style="background-color: #F7D69B">
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
                    height: '180%'
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
                        data: chartData.map(data => data.menunggu)
                    },
                    {
                        name: 'Diterima',
                        data: chartData.map(data => data.diterima)
                    },
                    {
                        name: 'Ditolak',
                        data: chartData.map(data => data.ditolak)
                    }
                ],
                xaxis: {
                    categories: chartData.map(data => data.month)
                }
            };

            // Inisialisasi grafik
            var chart = new ApexCharts(document.querySelector("#chart-line-with-data-labell"), options);
            chart.render();
        </script>


    </div>
@endsection
