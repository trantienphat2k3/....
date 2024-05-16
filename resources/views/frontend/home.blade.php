
@extends('layouts.site')
@section('title','trang chu')
@section('content')
<menu>
    <section class="menu bg-danger">
        <div class="container ">
            <div class="row">
                <div class="col-md-3 text-white py-3">Danh mục sản phẩm</div>
                <div class="col-md-9">
                    <nav class="navbar navbar-expand-lg bg-danger">
                        <div class="container-fluid">
                          <a class="navbar-brand d-none" href="#">Navbar</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="#">Trang chủ</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="#">Giới thiệu</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Sản phẩm
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item " href="#">Action</a></li>
                                  <li><a class="dropdown-item " href="#">Another action</a></li>
                                  <li><hr class="dropdown-divider "></li>
                                  <li><a class="dropdown-item " href="#">Something else here</a></li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Tin mới nhất
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item " href="#">Action</a></li>

                                </ul>
                              </li>


                                  <li class="nav-item">
                                    <a class="nav-link disabled text-white" aria-disabled="true">Câu hỏi thường gặp</a></li><li class="nav-item">
                                    <a class="nav-link disabled text-white" aria-disabled="true">Tuyển dụng</a>
                                  </li>
                                </ul>

                              </div>
                            </div>
                          </nav>
                    </div>
                </div>
            </div>
        </section>

    </menu>
     <img src="{{asset('image/slider.webp')}}" class="img-fluid" alt="">


<div class="container section4">
    <div class="title_module_bbf a-center section">
        <h5>SẢN PHẨM MỚI NHẤT</h5>
    </div>

        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" style="text-decoration: none;">
                                <img src="{{asset('image/anh4.jpg')}}" alt=""
                                    title="Rau Củ Quả">
                                <div class="infoPro">
                                    <h6 class="text-dark" title="sầu riêng">sầu riêng</h6><div class="price">
                                        <span class="text-dark">200.000đ/kg</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" style="text-decoration: none;">
                                <img src="{{asset('image/anh1.jpg')}}" alt=""
                                    title="Rau Củ Quả">
                                <div class="infoPro">
                                    <h6 class="text-dark" title="sầu riêng">sầu riêng</h6><div class="price">
                                        <span class="text-dark">200.000đ/kg</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" style="text-decoration: none;">
                                <img src="{{asset('image/anh5.jpg')}}" alt=""
                                    title="Rau Củ Quả">
                                <div class="infoPro">
                                    <h6 class="text-dark" title="sầu riêng">sầu riêng</h6><div class="price">
                                        <span class="text-dark">200.000đ/kg</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3"><a href="#" style="text-decoration: none;">
                                <img src="{{asset('image/anh6.jpg')}}" alt=""
                                    title="Rau Củ Quả">
                                <div class="infoPro">
                                    <h6 class="text-dark" title="sầu riêng">sầu riêng</h6><div class="price">
                                        <span class="text-dark">200.000đ/kg</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" style="text-decoration: none;">
                                <img src="{{asset('image/anh2.jpg')}}" alt=""
                                    title="Rau Củ Quả">
                                <div class="infoPro">
                                    <h6 class="text-dark" title="sầu riêng">sầu riêng</h6><div class="price">
                                        <span class="text-dark">200.000đ/kg</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" style="text-decoration: none;">
                                <img src="{{asset('image/anh7.jpg')}}" alt=""
                                    title="Rau Củ Quả">
                                <div class="infoPro">
                                    <h6 class="text-dark" title="sầu riêng">sầu riêng</h6><div class="price">
                                        <span class="text-dark">200.000đ/kg</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
</div>
</section>



@endsection
