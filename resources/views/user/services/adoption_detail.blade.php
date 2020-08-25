@extends('user.layouts.master')
@section('title')
    Adoption Detail
@endsection
@section('specific_js')
@endsection
@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid overlay">
        <div class="jumbo-heading">
            <!-- section-heading -->
            <div class="section-heading" data-aos="zoom-in">
                <h1>Adopt a Pet</h1>
            </div>
            <!-- /section-heading -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{route('adoption')}}">Nhận nuôi</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('adoption_detail')}}">Chi
                            tiết</a></li>
                </ol>
            </nav>
        </div>
        <!-- /jumbo-heading -->
    </div>
    <!-- /jumbotron -->
    <!-- ==== Page Content ==== -->
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row bg-light-custom border-irregular1 block-padding">
                        <!-- image -->
                        <div class="col-lg-4 offset-lg-2">
                            <!-- owl slider -->
                            <div id="owl-adopt-single" class="owl-carousel top-centered-nav owl-theme">
                                <div class="col-md-12">
                                    <!-- image -->
                                    <a href="{{asset('assets/user/img/adoption/adoption1.jpg')}}"
                                       title="your caption here">
                                        <img src="{{asset('assets/user/img/adoption/adoption1.jpg')}}"
                                             class="border-irregular1 img-fluid hover-opacity" alt="">
                                    </a>
                                </div>
                                <!-- /col-md-12 -->
                                <div class="col-md-12">
                                    <!-- image -->
                                    <a href="{{asset('assets/user/img/adoption/adoptionsingle1.jpg')}}"
                                       title="your caption here">
                                        <img src="{{asset('assets/user/img/adoption/adoptionsingle1.jpg')}}"
                                             class="border-irregular2 img-fluid hover-opacity" alt="">
                                    </a>
                                </div>
                                <!-- /col-md-12 -->
                                <div class="col-md-12">
                                    <!-- image -->
                                    <a href="{{asset('assets/user/img/adoption/adoptionsingle2.jpg')}}"
                                       title="your caption here">
                                        <img src="{{asset('assets/user/img/adoption/adoptionsingle2.jpg')}}"
                                             class="border-irregular1 img-fluid hover-opacity" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- /owl-carousel -->
                        </div>
                        <!-- /col-md -->
                        <!-- adoption info  -->
                        <div class="col-lg-4 res-margin mt-5 text-xs-center">
                            <h4><strong>Tên bé:</strong> Fluffy</h4>
                            <div class="row">
                                <div class="col-sm-5">
                                    <ul class="list-unstyled pet-adopt-info">
                                        <li class="h7">Giới tính: <span>nam</span></li>
                                        <li class="h7">Tuổi: <span>2 năm</span></li>
                                        <li class="h7">Giống: <span>Poodle</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-7">
                                    <ul class="list-unstyled pet-adopt-info">
                                        <li class="h7">Triệt sản: <span>Có</span></li>
                                        <li class="h7">Giấy khai sinh: <span>Không</span></li>
                                        <li class="h7">Tiêm phòng: <span>Có</span></li>
                                    </ul>
                                </div>
                                <!-- /div-->
                            </div>
                            <!-- /row-->
                            <p class="font-weight-bold">Fluffy là một con chó rất ngọt ngào và năng động, bé đã sẵn
                                sàng cho một ngôi nhà mới!</p>
                            <!-- button -->
                            <a href="{{route('adoption_form')}}" class="btn btn-primary " data-aos="zoom-in">Nhận nuôi
                                ngay!</a>
                        </div>
                        <!-- /col-md -->
                    </div>
                    <!-- /row-->
                    <div class="col-md-12 mt-5">
                        <h3>Về Fluffy</h3>
                        <!-- ul custom-->
                        <ul class="custom list-inline font-weight-bold">
                            <li class="list-inline-item">Thân thiện với những chú chó khác</li>
                            <li class="list-inline-item">Thân thiện với trẻ em</li>
                        </ul>
                        <p>
                            <!-- Description -->
                        </p>
                        <p class="custom-link"><a href="{{route('adoption')}}">« Quay lại danh sách nhận nuôi</a></p>
                    </div>
                    <!-- /col-md-->
                </div>
                <!-- /col-lg-->
            </div>
            <!-- /row-->
        </div>
        <!-- /container-->
    </div>
    <!-- /page -->
    <!-- Section Call To Action -->
    <div id="call-to-action">
        <div class="container block-padding">
            <div
                class="col-12 col-sm-8 col-md-8 col-lg-8 justify-content-center align-self-center text-center text-sm-left text-md-left text-lg-left">
                <h4 style="color: white">Bạn đã sẵn sàng để hỗ trợ?</h4>
            </div>
            <div
                class="col-12 col-sm-4 col-md-4 col-lg-4 justify-content-center align-self-center text-center">
                <a href="{{route('get_involed')}}" class="btn btn-primary"
                   aria-label="Ủng hộ ngay" aria-labelledby="Ủng hộ ngay">Ủng hộ ngay</a>
            </div>
        </div>
        <!--/row -->
    </div>
    <!--/call-to-action -->
@endsection
