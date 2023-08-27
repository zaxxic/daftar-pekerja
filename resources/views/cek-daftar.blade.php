@extends('layouts1.app')
@section('content')
<!-- Start User Area -->
<section class="user-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="user-form-content log-in-50">
                    <h3>Cek Pendaftaran</h3>
                
                    <form class="user-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input placeholder="Masukkan email yang sudah di daftarkan" class="form-control" type="text" name="name">
                                </div>
                            </div>

                            </div>
 
                            <div class="col-12">
                                <button class="default-btn" type="submit">
                                    Check email
                                </button>
                            </div>

                          
                    </form>
                </div>
            </div>

            
        </div>
    </div>
</section>
<!-- End User Area -->
@endsection