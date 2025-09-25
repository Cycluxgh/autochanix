<!DOCTYPE html>
<html lang="en">
@include('layouts.head', ['title' => 'Login'])

<body class="bg-white">
<!-- Begin page -->
<div class="account-page">
    <div class="container-fluid p-0">
        <div class="row align-items-center g-0">
            <div class="col-xl-5">
                <div class="row">
                    <div class="col-md-7 mx-auto">
                        <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                            <div class="mb-0 p-0">
                                <a href="/" class="auth-logo" wire:navigate>
                                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="logo-dark" class="mx-auto" height="250" />
                                </a>
                            </div>

                            <div class="pt-0">

                                {{ $slot }}

                                {{ $account }}

{{--                                {{ $oauth }}--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7">
{{--                <div class="account-page-bg p-md-5 p-4">--}}
{{--                    <div class="text-center">--}}
{{--                        <h3 class="text-dark mb-3 pera-title">Quick, Effective, and Productive With Tapeli Admin Dashboard</h3>--}}
                        <div class="auth-image">
                            <img src="{{asset('assets/images/poster.jpg')}}" class="mx-auto img-fluid"  alt="poster">
                        </div>
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>

<!-- END wrapper -->

@include('layouts.script')

</body>
</html>
