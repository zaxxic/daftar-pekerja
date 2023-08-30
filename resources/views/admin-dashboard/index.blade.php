@extends('layouts.app')
@section('content')
<div class="row gap-5">
    <div class="col-10 rounded-2 col-md-2 p-3" style="background-color: #ECF2FF">
        <div class="d-flex gap-2">
            <div class="p-1 align-self-center rounded" style="background-color: #5D87FF">
                <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0-18 0"/><path d="M12 7v5l3 3"/></g></svg>
            </div>
            <div class="" style="font-size: 15px">
                Status <br> Menunggu
            </div>
        </div>
        <div class="d-flex justify-content-end mt-2">
            <span style="" class="fw-bold">120</span>
        </div>
    </div>
    <div class="col-10 rounded-2 col-md-2 p-3" style="background-color: #E6FFFA">
        <div class="d-flex gap-2">
            <div class="p-1 align-self-center rounded" style="background-color: #13DEB9">
                <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0-18 0"/><path d="M12 7v5l3 3"/></g></svg>
            </div>
            <div class="" style="font-size: 15px">
                Status <br> Diterima
            </div>
        </div>
        <div class="d-flex justify-content-end mt-2">
            <span style="" class="fw-bold">120</span>
        </div>
    </div>
    <div class="col-10 rounded-2 col-md-2 p-3" style="background-color: #FBF2EF">
        <div class="d-flex gap-2">
            <div class="p-1 align-self-center rounded" style="background-color: #FA896B">
                <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0-18 0"/><path d="M12 7v5l3 3"/></g></svg>
            </div>
            <div class="" style="font-size: 15px">
                Status <br> Ditolak
            </div>
        </div>
        <div class="d-flex justify-content-end mt-2">
            <span style="" class="fw-bold">120</span>
        </div>
    </div>
    <div class="col-10 rounded-2 col-md-2 p-3" style="background-color: #E6FFFA">
        <div class="d-flex gap-2">
            <div class="p-1 align-self-center rounded" style="background-color: #67E6E6">
                <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0-18 0"/><path d="M12 7v5l3 3"/></g></svg>
            </div>
            <div class="" style="font-size: 15px">
                Jumlah <br> Divisi
            </div>
        </div>
        <div class="d-flex justify-content-end mt-2">
            <span style="" class="fw-bold">120</span>
        </div>
    </div>
    <div class="col-10 rounded-2 col-md-2 p-3" style="background-color: #FEF5E5">
        <div class="d-flex gap-2">
            <div class="p-1 align-self-center rounded" style="background-color: #F7D69B">
                <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0-18 0"/><path d="M12 7v5l3 3"/></g></svg>
            </div>
            <div class="" style="font-size: 15px">
                Jumlah <br> Lowongan
            </div>
        </div>
        <div class="d-flex justify-content-end mt-2">
            <span style="" class="fw-bold">120</span>
        </div>

    </div>
    <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h5>pendaftar</h5>
            <div id="chart-line-with-data-label"></div>
         </div>
        </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('../assets/dist/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('../assets/dist/js/apex-chart/apex.line.init.js')}}"></script>
</div>
@endsection
