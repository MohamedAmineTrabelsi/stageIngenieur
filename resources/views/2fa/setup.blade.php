<form method="POST" action="{{ route('2fa.setup') }}">
    @csrf
    <div>
        <p>Scan this QR code with your Google Authenticator app:</p>
        <div>{!! $QR_Image !!}</div>
    </div>
    <input type="hidden" name="secret" value="{{ $secret }}">
    <button type="submit">Enable 2FA</button>
</form>