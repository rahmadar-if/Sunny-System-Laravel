<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>@yield('title')</title>
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('/media/logos/Icon-CCM.png') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    {{-- begin::Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    {{-- end::Bootstrap CSS --}}
    {{-- begin::Froala CSS --}}
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />
    {{-- end::Froala CSS --}}
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/stage.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/calendar.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    {{-- begin:: Disable Native Date Browser --}}
    <style>
        input[type="date"]::-webkit-input-placeholder {
            visibility: hidden !important;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            display: none;
        }

    </style>
    {{-- end:: Disable Native Date Browser --}}
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Aside-->
    @yield('aside')
    <!--end::Aside-->

    {{-- begin::content --}}
    @yield('content')

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <script>
        var hostUrl = "../";
    </script>
    <!--begin::Javascript-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    {{-- begin::Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    {{-- end::Bootstrap JS --}}
    {{-- begin::html2pdf JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- end::html2pdf JS --}}
    {{-- begin::Froala Editor JS --}}
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'>
    </script>
    {{-- end::Froala Editor JS --}}
    {{-- begin::Support Plugin for Word Editor --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/docxtemplater/3.29.4/docxtemplater.js"></script>
    <script src="https://unpkg.com/pizzip@3.1.1/dist/pizzip.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.js"></script>
    <script src="https://unpkg.com/pizzip@3.1.1/dist/pizzip-utils.js"></script>
    {{-- end::Support Plugin for Word Editor --}}
    {{-- begin::docx4js Library --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/docx4js@3.2.20/dist/docx4js.js"></script> --}}
    {{-- <script>
    import * as docx from "docx";
</script> --}}
    {{-- end::docx4js Library --}}
    {{-- begin::Mammoth Library --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.21/mammoth.browser.min.js"
        integrity="sha512-bGuEL2NBSooMeQLM6bf6Xdywje4PWKegNTuKpghz2xgFXtRjEs4B3X1ql7nghiCvt8gXBAks5S3KN3Jp3Jgtow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- end::Mammoth Library --}}
    {{-- begin:: docx2html Library --}}
    <script src="https://cdn.jsdelivr.net/npm/docx2html@1.3.2/dist/docx2html.min.js"></script>
    {{-- end:: docx2html Library --}}
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('/js/custom/modals/upgrade-plan.js') }}"></script>
    @yield('js-script')
    <!--end::Page Custom Javascript-->

    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
