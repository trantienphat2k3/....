<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/layoutsite.css')}}">
    <script src="{{asset('jquery/jquery-3.7.1.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="layoutsite.css">
    @yield('header')

</head>
<body>
    <header>
        <section class="section_header">
            <div class="container">
                <div class="row py-2 align-items-center">
                    <div class="col-6 col-md-3">
                        <a href="index.html">
                            <img src="{{asset('image/logo.webp')}}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-md-5 d-none d-md-block">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tìm kiếm">

                                <span class="input-group-text"><i class="fas fa-search"></i></span>

                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="input-group">
                            <span class="form-control">123456789</span>
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="row">
                            <div class="col-2">
                                <div class="icon-box">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="icon-box">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="icon-box">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="icon-box">
                                    <i class="fas fa-lock"></i>
                                </div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>







     <main>
        @yield('content')
     </main>


    <footer class="footer">
            <div class="footer-column">
              <img src="{{asset('image/logo.webp')}}" alt="logo" class="footer-logo">
              <p class="footer-text">Chúng tôi hi vọng tất cả người tiêu dùng Việt Nam sẽ được sử dụng những thực phẩm rau củ quả tươi ngon, bổ dưỡng và an toàn nhất tại cửa hàng cung cấp thực phẩm rau củ sạch Dola Organic.</p>
              <p class="footer-heading">HÌNH THỨC THANH TOÁN</p>
              <img src="{{asset('image/hinh2.jpg')}}" alt="Payment" width="50" height="50">
              <img src="{{asset('image/hinh3.jpg')}}" alt="Payment" width="50" height="50">
              <img src="{{asset('image/hinh4.jpg')}}" alt="Payment" width="50" height="50">
            </div>

            <div class="footer-column">
              <p class="footer-heading">CHÍNH SÁCH</p>
              <p class="footer-text">Chính sách thành viên</p>
              <p class="footer-text">Chính sách thanh toán</p>
              <p class="footer-text">Hướng dẫn mua hàng</p>
              <p class="footer-text">Bảo mật thông tin cá nhân</p>
              <p class="footer-text">Quà tặng tri ân</p>
            </div>

            <div class="footer-column">
              <p class="footer-heading">THÔNG TIN CHUNG</p>
              <p class="footer-text">Địa chỉ: 70 Lữ Gia, Phường 15, Quận 11, TPHCM</p>
              <p class="footer-text">Điện thoại: 123456789</p>
              <p class="footer-text">Email: support@sapo.vn</p>
              <p class="footer-heading">LIÊN KẾT SÀN</p>
              <img src="{{asset('image/hinh5.jpg')}}" alt="Link" width="50" height="50">
              <img src="{{asset('image/hinh6.jpg')}}" alt="Link" width="50" height="50">
              <img src="{{asset('image/hinh7.jpg')}}" alt="Link" width="50" height="50">
              <img src="{{asset('image/hinh8.jpg')}}" alt="Link" width="50" height="50">
            </div>

            <div class="footer-column">
                <p class="footer-heading">INSTAGRAM</p>
                <img src="{{asset('image/hinh9.jpg')}}" alt="Instagram" width="80" height="80">
                <img src="{{asset('image/hinh10.jpg')}}" alt="Instagram" width="80" height="80">
                <img src="{{asset('image/hinh11.jpg')}}" alt="Instagram" width="80" height="80">
                <img src="{{asset('image/hinh12.jpg')}}" alt="Instagram" width="80" height="80">
                <img src="{{asset('image/hinh16.jpg')}}" alt="Instagram" width="80" height="80"><img src="{{asset('image/hinh15.jpg')}}" alt="Instagram" width="80" height="80">
              </div>
            <div class="footer-border"></div>
          <p>Bản quyền thuộc về Dola. Cung cấp bởi Sapo.</p>
    </footer>
          @yield('footer')

    <script src="asset/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="asset/fontawesome/js/all.min.js"></script>
    <script src="asset/jquery/jquery-3.7.1.min.js"></script>
    <script src="asset/js/main.js"></script>

</body>
</html>
