@extends('user.layouts.master')
@section('title')
    Adoption
@endsection
@section('specific_css')
    <style>
        #call-to-action {
            background-image: url(https://res.cloudinary.com/dwarrion/image/upload/v1598031376/PetCasa/DonateGuidePage/dog_xwspka.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed !important;
            background-size: cover !important;
        }

        .page-item.active .page-link {
            background-color: #48A06A !important;
        }

        .page {
            padding-bottom: unset;
        }
    </style>
@endsection
@section('specific_js')
    <script>
        $("ul.pagination").addClass('float-right');
    </script>
@endsection
@section('content')
    <!-- ==== Page Content ==== -->
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid overlay">
        <div class="jumbo-heading">
            <!-- section-heading -->
            <div class="section-heading" data-aos="zoom-in">
                <h1>Nhận Nuôi Thú Cưng</h1>
            </div>
            <!-- /section-heading -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nhận nuôi thú cưng</li>
                </ol>
            </nav>
        </div>
        <!-- /jumbo-heading -->
    </div>
    <!-- /jumbotron -->
    <div class="section-heading-1 text-center mt-5">
        <h2 data-aos="zoom-in" class="aos-init aos-animate" style="margin-bottom: unset;">Tìm thú cưng</h2>
    </div>
    <ul class="nav nav-pills category-isotope center-nav aos-init aos-animate" data-aos="zoom-in">
        <li class="nav-item">
            <a class="nav-link active" href="#" onclick="GetTypeAnimal()" data-toggle="tab" data-filter="*"
               aria-label="Tất cả" aria-labelledby="Tất cả">Tất cả</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="GetTypeAnimal(5)" href="#" data-toggle="tab" data-filter=".Chó"
               aria-label="Chó" aria-labelledby="Chó">Chó</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="GetTypeAnimal(6)" href="#" data-toggle="tab" data-filter=".Mèo"
               aria-label="Mèo" aria-labelledby="Mèo">Mèo</a>
        </li>
    </ul>
    <div class="container aos-init aos-animate" data-aos="zoom-in">
        <div class="row pt-4">
            <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <label>Giới tính</label>
                    <select id="gender" class="form-control">
                        <option value="">Tất cả</option>
                        <option value="69">Đực</option>
                        <option value="70">Cái</option>
                    </select>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <label>Độ tuổi</label>
                    <select id="age" class="form-control">
                        <option value="">Tất cả</option>
                        <option value="1">Trẻ</option>
                        <option value="2">Trưởng thành</option>
                        <option value="3">Già</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <label>Kiểu</label>
                    <select id="sterilizations" class="form-control">
                        <option value="">Tất cả</option>
                        <option value="1">Những vật nuôi chủ cũ có mong muốn nhượng lại</option>
                        <option value="2">Những vật nuôi được PetsCasa cứu hộ</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <label>Giống</label>
                    <select id="color" class="form-control">
                        <option value="">Tất cả</option>
                        <option value="8">Đen</option>
                        <option value="9">Trắng</option>
                        <option value="10">Vàng</option>
                        <option value="11">Đen Trắng</option>
                        <option value="12">Trắng vàng</option>
                        <option value="13">Mướp</option>
                        <option value="14">Tam Thể</option>
                        <option value="15">Nhị Thể</option>
                        <option value="16">Đồi Mồi</option>
                        <option value="17">Xám</option>
                        <option value="18">Xiêm</option>
                        <option value="19">Nâu</option>
                        <option value="20">Nâu vàng</option>
                        <option value="21">Đen vàng</option>
                    </select>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" id="name" class="form-control">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-4 justify-content-center align-self-center text-center">
                <div class="form-group mb-0 pt-lg-2">
                    <button id="btnSearch" onclick="" class="btn btn-secondary aos-init aos-animate"
                            aria-label="Tìm kiếm" aria-labelledby="Tìm kiếm">Tìm kiếm
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="page">
        <div class="container block-padding pt-0">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h3>Tìm một người bạn mới</h3>
                <p>Dưới đây là các thành viên trong đại gia đình PetsCasa.</p>
            </div>
            <!-- First row: Adopt a pet -->
            <div class="row mt-5">
                <!-- Pet  -->
                @foreach($pets as $pet)
                    <div class="{{$pet->Species}} adopt-card col-md-6 col-xl-3 res-margin">
                        <div class="card bg-light-custom">
                            <div class="thumbnail text-center">
                                <!-- Image -->
                                <img src="{{$pet->FirstThumbnail}}"
                                     class="border-irregular1 img-fluid" alt="">
                                <!-- Name -->
                                <div class="caption-adoption">
                                    <h6 class="adoption-header">{{$pet->Name}}</h6>
                                    <!-- List -->
                                    <ul class="list-unstyled">
                                        <li><strong>Giống: </strong>{{$pet->Breed}}</li>
                                        <li><strong>Giới tính: </strong>{{$pet->Sex}}</li>
                                        <li><strong>Tuổi: </strong>{{$pet->Age}}</li>
                                    </ul>
                                    <!-- Buttons -->
                                    <div class="text-center">
                                        <a href="{{route('adoption_detail',$pet->Slug)}}" class="btn btn-primary">Thêm
                                            thông
                                            tin</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /thumbnail -->
                        </div>
                        <!-- /card -->
                    </div>
                    <!-- /adopt-card -->
            @endforeach
            <!-- /pet -->

            </div>
            <!-- /row -->
            <div class="col-md-12 mt-5">
                <!-- pagination -->
                {{$pets->links()}}
            </div>
            <!-- /col-md -->
        </div>
        <!-- /container -->
        <div class="bg-light">
            <section class="container aos-init aos-animate bg-light" data-aos="zoom-in">
                <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <h3 class="text-capitalize">quy trình nhận nuôi</h3>
                        <hr class="small-divider left">
                        <p class="mt-4 text-justify">
                            Trước khi quyết định nhận nuôi bé chó hay mèo nào, bạn hãy tự hỏi bản thân rằng mình đã sẵn
                            sàng
                            để chịu trách nhiệm cả đời cho bé chưa, cả về tài chính, nơi ở cũng như tinh thần. Việc nhận
                            nuôi cần được sự đồng thuận lớn từ bản thân bạn cũng như gia đình và những người liên quan.
                            Xin
                            cân nhắc kỹ trước khi liên hệ với PetsCasa về việc nhận nuôi.<br><br>Bạn đã sẵn sàng? Hãy
                            thực
                            hiện các bước sau đây nhé:<br><br>1️⃣ Tìm hiểu về thú cưng bạn muốn nhận nuôi trên trang web
                            của
                            PetsCasa.<br>2️⃣ Cập nhập đẩy đủ thông tin trên hồ sơ cá nhân.<br>3️⃣ Chuẩn bị cơ sở vật
                            chất và
                            đóng tiền vía để đón bé về. <br>4️⃣ Cập nhập thông tin (có ảnh) của bé 2 tháng 1 lần trong 1
                            năm
                            sau khi nhận bé về.<br>5️⃣ Khi có sự cố cần liên hệ ngay để được tư vấn kịp thời.<br><br>❗
                            Lưu
                            ý:<br>- Tiền vía mỗi bé sẽ khác nhau tùy thuộc vào tình trạng của bé khi cứu cũng như các
                            dịch
                            vụ y tế (tiêm phòng, triệt sản) đã thực hiện. <br>- Tiền vía dùng để trả các khoản chi về y
                            tế
                            trước đây cho bé, cũng như để hỗ trợ chi phí chăm sóc, nuôi dưỡng các bé khác tại nhà chung.<br>-
                            Trường hợp không nuôi được tiếp cần trả lại cho Nhóm, không tự ý đem cho người khác.<br><br>🐕&zwj;🦺
                            Nếu bạn chỉ có thể chăm sóc tạm thời (foster), tham khảo thông tin tại mục Tình
                            nguyện.<br><br>🐈
                            Tìm hiểu thêm về chương trình Nhận nuôi Ảo ở banner cuối trang này.
                        </p>

                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="card bg-soft-blue">
                            <h5 class="text-capitalize" style="color: #808080">điều kiện nhận nuôi</h5>
                            <ul class="custom pl-0 font-weight-bold">
                                <li class="row no-gutters">
                                    <div class="col-1"><label class="m-0"></label></div>
                                    <div class="col-10">
                                        <span>Tài chính tự chủ và ổn định.</span>
                                    </div>
                                </li>
                                <li class="row no-gutters">
                                    <div class="col-1"><label class="m-0"></label></div>
                                    <div class="col-10">
                                        <span>Chỗ ở cố định, ưu tiên tại Hà Nội</span>
                                    </div>
                                </li>
                                <li class="row no-gutters">
                                    <div class="col-1"><label class="m-0"></label></div>
                                    <div class="col-10">
                                        <span>Cam kết tiêm phòng và triệt sản .</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /page -->
    <section class="container-fluid adoption-online-bg overlay">
        <div class="container">
            <div class="col-lg-7 text-light text-center">
                <h4 data-aos="zoom-out" class="text-capitalize aos-init aos-animate">Bạn Chưa Đủ Điều Kiện Mang
                    Boss Về Nhà? Tham gia chương trình Nhận nuôi Ảo nhé.</h4>
                <a href="{{route('foster')}}"
                   class="btn btn-secondary aos-init aos-animate" data-aos="zoom-out" aria-label="Tìm hiểu ngay"
                   aria-labelledby="Tìm hiểu ngay">Tìm hiểu ngay</a>
            </div>
        </div>
    </section>
@endsection
