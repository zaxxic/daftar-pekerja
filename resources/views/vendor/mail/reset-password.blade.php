<!-- resources/views/vendor/mail/password-reset.blade.php -->

@extends('vendor.mail.layout')

@section('content')
    <h1>Reset Password</h1>
    <p>Kami menerima permintaan untuk mengatur ulang password akun Anda.</p>
    <p>Silakan klik tautan di bawah ini untuk mengatur ulang password:</p>
    <a href="{{ $resetUrl }}">Reset Password</a>
@endsection