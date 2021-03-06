@extends('user.layouts.master')
@section('title')
    Adoption Detail
@endsection
@section('specific_css')
    {{--    <link href={{asset('assets/user/css/timeline.css')}} rel="stylesheet">--}}
    <style>
        .page {
            padding-bottom: unset;
        }
    </style>
@endsection
@section('specific_js')
@endsection
@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid overlay">
        <div class="jumbo-heading">
            <!-- section-heading -->
            <div class="section-heading" data-aos="zoom-in">
                <h1>Nhận nuôi thú cưng</h1>
            </div>
            <!-- /section-heading -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{route('pet_list_adoption')}}">Nhận nuôi</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a
                            href="#">Chi
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
                        <div class="col-lg-3 offset-lg-2">
                            <!-- owl slider -->
                            <div id="owl-adopt-single" class="owl-carousel top-centered-nav owl-theme">
                                @foreach($single_pet->ArrayThumbnails450x450 as $thumbnail)
                                    <div class="col-md-12">
                                        <!-- image -->
                                        <a href="{{$thumbnail}}"
                                           title="{{$single_pet->Name}}">
                                            <img src="{{$thumbnail}}"
                                                 class="border-irregular1 img-fluid hover-opacity" alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- /col-md -->
                        <!-- adoption info  -->
                        <div class="col-lg-5 res-margin mt-5 text-xs-center">
                            <h4><strong>Tên bé: {{$single_pet->Name}}</strong></h4>
                            <div class="row">
                                <div class="col-sm-5">
                                    <ul class="list-unstyled pet-adopt-info">
                                        <li class="h7">Giới tính: <span>{{$single_pet->Sex}}</span></li>
                                        <li class="h7">Tuổi: <span><?php $current_Time = Carbon\Carbon::now(); ?>
                                                @if ($current_Time->addDays(-180) <  $single_pet->Age)
                                                    Dưới 6 tháng
                                                @elseif ($current_Time->addDays(-720) <  $single_pet->Age)
                                                    Từ 6 tháng đến 2 năm
                                                @elseif ($current_Time->addDays(-720) >  $single_pet->Age)
                                                    Từ 2 năm trở lên
                                                @endif</span></li>
                                        <li class="h7">Giống: <span>{{$single_pet->Breed}}</span></li>
                                    </ul>
                                </div>
                                <div class="col-sm-7">
                                    <ul class="list-unstyled pet-adopt-info">
                                        <li class="h7">Triệt sản: <span>@if ($single_pet->Neutered == "Có")
                                                    Đã triệt sản @elseif ($single_pet->Neutered == "Không")Chưa triệt
                                                    sản @endif</span>
                                        </li>
                                        <li class="h7">Giấy khai sinh: <span>{{$single_pet->CertifiedPedigree}}</span>
                                        </li>
                                        <li class="h7">Tiêm phòng: <span>{{$single_pet->Vaccinated}}</span></li>
                                    </ul>
                                </div>
                                <!-- /div-->
                            </div>
                            <!-- /row-->
                            <p class="font-weight-bold">{{$single_pet->Name}} là một @if ($single_pet->Sex == "Đực")
                                    chú @else bé
                                @endif{{$single_pet->Breed}} rất ngọt
                                ngào và năng
                                động, bé đã sẵn sàng cho một ngôi nhà mới!</p>
                            <!-- button -->
                            @if ($single_pet->Status != 2)
                                <a href="{{route('adoption_form', $single_pet->Slug)}}" class="btn btn-primary "
                                   data-aos="zoom-in">Nhận nuôi ngay!</a>
                            @endif
                        </div>
                        <!-- /col-md -->

                    </div>
                    <!-- /row-->
                    <div class="col-md-12 mt-5">
                        <h3>Về {{$single_pet->Name}}</h3>
                        <!-- ul custom-->
                        <ul class="custom list-inline font-weight-bold">
                            <li class="list-inline-item">Thân thiện với những chú chó khác</li>
                            <li class="list-inline-item">Thân thiện với trẻ em</li>
                        </ul>
                        <p>
                            <!-- Description -->
                            {{$single_pet->Description}}
                        </p>

                        @if($single_pet->Status == 1)
                            {{--                            <h3>Timeline</h3>--}}
                            {{--                            <div class="timeline">--}}
                            {{--                                <div class="year">--}}
                            {{--                                    <div class="inner">--}}
                            {{--                                        <span>2016</span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}

                            {{--                                <ul class="days">--}}
                            {{--                                    <li class="day">--}}
                            {{--                                        <div class="events">--}}
                            {{--                                            <div class="day__img">--}}
                            {{--                                                <img src="http://placehold.it/400x300" alt=""/>--}}
                            {{--                                                <p class="caption">--}}
                            {{--                                                    Caption--}}
                            {{--                                                </p>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="date">18 October (Monday)--}}
                            {{--                                                <p>Description</p>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </li>--}}

                            {{--                                    <li class="day">--}}
                            {{--                                        <div class="events">--}}
                            {{--                                            <div class="day__img">--}}
                            {{--                                                <img src="http://placehold.it/400x300" alt=""/>--}}
                            {{--                                                <p class="caption">--}}
                            {{--                                                    Caption--}}
                            {{--                                                </p>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="date">18 October (Monday)--}}
                            {{--                                                <p>Description</p>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </li>--}}

                            {{--                                    <li class="day">--}}
                            {{--                                        <div class="events">--}}
                            {{--                                            <div class="day__img">--}}
                            {{--                                                <img src="http://placehold.it/400x300" alt=""/>--}}
                            {{--                                                <p class="caption">--}}
                            {{--                                                    Caption--}}
                            {{--                                                </p>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="date">18 October (Monday)--}}
                            {{--                                                <p>Description</p>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </li>--}}

                            {{--                                    <li class="day">--}}
                            {{--                                        <div class="events">--}}
                            {{--                                            <div class="day__img">--}}
                            {{--                                                <img src="http://placehold.it/400x300" alt=""/>--}}
                            {{--                                                <p class="caption">--}}
                            {{--                                                    Caption--}}
                            {{--                                                </p>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="date">18 October (Monday)--}}
                            {{--                                                <p>Description</p>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </li>--}}
                            {{--                                </ul>--}}

                            {{--                                <div class="year year--end">--}}
                            {{--                                    <div class="inner">--}}
                            {{--                                        <span>2017</span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="border-footer"></div>--}}
                        @endif
                        <p class="custom-link"><a href="{{route('pet_list_adoption')}}">« Quay lại danh sách nhận
                                nuôi</a>
                        </p>
                    </div>
                    <!-- /col-md-->
                </div>
                <!-- /col-lg-->
            </div>
            <!-- /row-->
        </div>
        <!-- /container-->
        <!-- Section Call To Action -->
        <div id="call-to-action"
             style="background-image: url(https://res.cloudinary.com/dwarrion/image/upload/v1598789854/PetCasa/AdoptionPage/cat_fkhckl.jpg)">
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
    </div>
    <!-- /page -->
@endsection
