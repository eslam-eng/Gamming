<!-- main-sidebar -->
<div class="sticky">
    <aside class="app-sidebar">
        <div class="main-sidebar-header active">
            <a class="header-logo active" href="{{url('/')}}">
                <img style="max-height: 40px !important" src=""
                     class="main-logo" alt="Rokia">
            </a>
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/>
                </svg>
            </div>
            <ul class="side-menu">
                <li class="side-item side-item-category">Dashboard</li>
                <li>
                    <a class="slide-item" data-is_active="{{request()->fullUrlIs(route('dashboard'))}}"
                       href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="side-item side-item-category">communications</li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                        <i class="fa fa-file ide-menu__icon pe-2"></i>
                        <span class="side-menu__label">communications</span>
                        <i class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">

                        <li>
                            <a class="slide-item"
                               data-is_active="{{request()->fullUrlIs(route('dashboard.contact-us'))}}"
                               href="{{route('dashboard.contact-us')}}">Contact-us</a>
                        </li>

{{--                        <li>--}}
{{--                            <a class="slide-item"--}}
{{--                               data-is_active="{{request()->fullUrlIs(route('therapist-lectures.index').'?upcoming=1')}}"--}}
{{--                               href="#">@lang('app.lectures.upcoming_lectures')</a>--}}
{{--                        </li>--}}
                    </ul>
                </li>

            </ul>
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/>
                </svg>
            </div>
        </div>
    </aside>
</div>
<!-- main-sidebar -->
