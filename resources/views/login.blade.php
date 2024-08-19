<!-- resources/views/login.blade.php -->

@extends('layouts.web') @section('title', 'ASP Export Lanka - Login page')
@section('content')

<div id="app" class="app app-full-height app-without-header">
    <div class="login">
        <div class="login-content">
            <form
                action="#"
                method="POST"
                name="login_form"
            >
                <h1 class="text-center">Sign In</h1>
                <div class="text-muted text-center mb-4">
                    For your protection, please verify your identity.
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input
                        type="text"
                        class="form-control form-control-lg fs-15px"
                        value
                        placeholder="username"
                    />
                </div>
                <div class="mb-3">
                    <div class="d-flex">
                        <label class="form-label">Password</label>
                    </div>
                    <input
                        type="password"
                        class="form-control form-control-lg fs-15px"
                        value
                        placeholder="Enter your password"
                    />
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value
                            id="customCheck1"
                        />
                        <label
                            class="form-check-label fw-500"
                            for="customCheck1"
                            >Remember me</label
                        >
                    </div>
                </div>
                <button
                    type="submit"
                    class="btn btn-theme btn-lg d-block w-100 fw-500 mb-3"
                >
                    Sign In
                </button>
            </form>
        </div>
    </div>

</div>


<script
    src="{{ Vite::asset('resources/theme/assets/js/vendor.min.js') }}"
    type="d57f26ee29ccdef597ed3f69-text/javascript"
></script>
<script
    src="{{ Vite::asset('resources/theme/assets/js/app.min.js') }}"
    type="d57f26ee29ccdef597ed3f69-text/javascript"
></script>

<script
    async
    src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3"
    type="d57f26ee29ccdef597ed3f69-text/javascript"
></script>
<script type="d57f26ee29ccdef597ed3f69-text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Y3Q0VGQKY3');
</script>
<script
    src="{{ Vite::asset('resources/theme/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
    data-cf-settings="d57f26ee29ccdef597ed3f69-|49"
    defer
></script>
<script
    defer
    src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"rayId":"8b51338e4c145137","version":"2024.8.0","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"4db8c6ef997743fda032d4f73cfeff63","b":1}'
    crossorigin="anonymous"
></script>

@endsection
