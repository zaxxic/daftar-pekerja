{{-- resources/views/auth/emails/reset.blade.php --}}

@component('mail::message')
# Reset Password

You are receiving this email because we received a password reset request for your account.

@component('mail::button', ['url' => $actionUrl])
Reset Password
@endcomponent

Jika terjadi kesalahan dengan button "reset password", Anda bisa mengz:

{{ $actionUrl }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent