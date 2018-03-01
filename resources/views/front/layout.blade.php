<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">

        @yield('css')

    </head>
    <body>

        <div class="container-fluid">

            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">Hidden brand</a>
                    <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">หน้าแรก</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ผลิตภัณฑ์และบริการ
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown1">
                                <li><a class="dropdown-item" href="#">Eco Product Directory</a></li>
                                <li><a class="dropdown-item" href="#">24 hour Eco Life</a></li>
                                <li><a class="dropdown-item" href="#">Label</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ความรู้
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown2">
                                <li><a class="dropdown-item" href="#">นิยามและประเภทฉลาก</a></li>
                                <li><a class="dropdown-item" href="#">หน่วยให้การรับรองฉลาก<br />สิ่งแวดล้อมของประเทศไทย</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ประชาสัมพันธ์
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown3">
                                <li><a class="dropdown-item" href="#">กิจกรรมที่เกี่ยวข้อง</a></li>
                                <li><a class="dropdown-item" href="#">เอกสารเผยแพร่</a></li>
                                <li><a class="dropdown-item" href="#">กรีนการ์ด แอพพลิเคชั่น</a></li>
                                <li><a class="dropdown-item" href="#">การจัดซื้อจัดจ้างของภาครัฐ</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="content">

                @yield('content')

                <div class="row bg-gray justify-content-md-center py-4">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <p>
                                    สถาบันสิ่งแวดล้อมอุตสาหกรรม<br />
                                    สภาอุตสาหกรรมแห่งประเทศไทย
                                </p>
                                <p>
                                    ศูนย์การประชุมแห่งชาติสิริกิติ์ โซนซี ชั้น 4<br />
                                    เลขที่ 60 ถนนรัชดาภิเษกตัดใหม่ แขวงคลองเตย เขตคลองเตย<br />
                                    กรุงเทพมหานคร 10110<br />
                                    โทรศัพท์: (662) 345-1261-5 โทรสาร: (662) 345-1266-7
                                </p>
                            </div>

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">หน่วยงาน คณะทำงานร่วมจัดทำเว็บไซต์</div>
                                    <hr />
                                    <div class="col-md-2">
                                        ผู้ดำเนินการ
                                    </div>
                                    <div class="col-md-4">
                                        พันธมิตรหลัก
                                    </div>
                                    <div class="col-md-2">
                                        พันธมิตรร่วม
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>

    </body>

    <script src="{{ asset('js/jquery-1.9.1.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.1.0.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <script>
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');


            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });


            return false;
        });
    </script>

    @yield('js')

</html>
