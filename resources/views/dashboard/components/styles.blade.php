		<!-- FAVICON -->
		<link rel="icon" href="{{asset('assets/dashboard/images/brand/logo.png')}}" type="image/x-icon"/>

		<!-- ICONS CSS -->
		<link href="{{asset('assets/dashboard/plugins/icons/icons.css')}}" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
{{--        @if(auth()->user()->locale=='en')--}}
            <link href="{{asset('assets/dashboard/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
{{--        @else--}}
{{--            <link href="{{asset('assets/dashboard/plugins/bootstrap/css/bootstrap.rtl.css')}}">--}}
{{--        @endif--}}

		<!-- RIGHT-SIDEMENU CSS -->
		<link href="{{asset('assets/dashboard/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!-- P-SCROLL BAR CSS -->
		<link href="{{asset('assets/dashboard/plugins/perfect-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

        @yield('styles')

		<!-- STYLES CSS -->
		<link href="{{asset('assets/dashboard/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('assets/dashboard/css/style-dark.css')}}" rel="stylesheet">
		<link href="{{asset('assets/dashboard/css/style-transparent.css')}}" rel="stylesheet">

		<!-- SKIN-MODES CSS -->
		<link href="{{asset('assets/dashboard/css/skin-modes.css')}}" rel="stylesheet" />

		<!-- ANIMATION CSS -->
		<link href="{{asset('assets/dashboard/css/animate.css')}}" rel="stylesheet">
        <!--- Internal Sweet-Alert css-->
        <link href="{{asset('assets/dashboard/plugins/sweet-alert/sweetalert2.css')}}" rel="stylesheet">
        <link href="{{asset('assets/dashboard/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

		{{-- start custom css --}}
		<link href="{{asset('assets/dashboard/css/dashboard.css')}}" rel="stylesheet">
		{{-- end cutom css --}}
