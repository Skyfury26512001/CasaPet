@extends('user.layouts.master')
@section('title')
    Adoption
@endsection
@section('specific_js')
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
    <div class="bg-light">
        <section class="container aos-init aos-animate bg-light" data-aos="zoom-in">
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <h3 class="text-capitalize">quy trình nhận nuôi</h3>
                    <hr class="small-divider left">
                    <p class="mt-4 text-justify">
                        Trước khi quyết định nhận nuôi bé chó hay mèo nào, bạn hãy tự hỏi bản thân rằng mình đã sẵn sàng
                        để
                        chịu trách nhiệm cả đời cho bé chưa, cả về tài chính, nơi ở cũng như tinh thần. Việc nhận nuôi
                        cần
                        được sự đồng thuận lớn từ bản thân bạn cũng như gia đình và những người liên quan. Xin cân nhắc
                        kỹ
                        trước khi liên hệ với PetsCasa về việc nhận nuôi.<br><br>Bạn đã sẵn sàng? Hãy thực hiện các bước
                        sau
                        đây nhé:<br><br>1️⃣ Tìm hiểu về thú cưng bạn muốn nhận nuôi trên trang web của PetsCasa.<br>2️⃣
                        Liên hệ
                        với Tình nguyện viên phụ trách bé để tìm hiểu thêm về bé.<br>3️⃣ Điền đơn đăng ký nhận nuôi
                        online.
                        <br>4️⃣ Chuẩn bị cơ sở vật chất và đóng tiền vía để đón bé về. <br>5️⃣ Thường xuyên cập nhật về
                        tình
                        hình của bé (2 tháng 1 lần liên tục trong 1 năm), đặc biệt là khi có sự cố để được tư vấn kịp
                        thời.<br><br>❗ Lưu ý:<br>- Tiền vía mỗi bé sẽ khác nhau tùy thuộc vào tình trạng của bé khi cứu
                        cũng
                        như các dịch vụ y tế (tiêm phòng, triệt sản) đã thực hiện. <br>- Tiền vía dùng để trả các khoản
                        chi
                        về y tế trước đây cho bé, cũng như để hỗ trợ chi phí chăm sóc, nuôi dưỡng các bé khác tại nhà
                        chung.<br>-
                        Trường hợp không nuôi được tiếp cần trả lại cho Nhóm, không tự ý đem cho người khác.<br><br>🐕&zwj;🦺
                        Nếu bạn chỉ có thể chăm sóc tạm thời (foster), tham khảo thông tin tại mục Tình nguyện.<br><br>🐈
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

    <div class="section-heading-1 text-center mt-5">
        <h2 data-aos="zoom-in" class="aos-init aos-animate" style="margin-bottom: unset;">Tìm thú cưng</h2>
    </div>
    <ul class="nav nav-pills category-isotope center-nav aos-init aos-animate" data-aos="zoom-in">
        <li class="nav-item">
            <a class="nav-link active" href="#" onclick="GetTypeAnimal()" data-toggle="tab" data-filter="*"
               aria-label="Tất cả" aria-labelledby="Tất cả">Tất cả</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="GetTypeAnimal(5)" href="#" data-toggle="tab" data-filter=".cho"
               aria-label="Chó" aria-labelledby="Chó">Chó</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" onclick="GetTypeAnimal(6)" href="#" data-toggle="tab" data-filter=".meo"
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
                    <label>Triệt sản</label>
                    <select id="sterilizations" class="form-control">
                        <option value="">Tất cả</option>
                        <option value="1">Có</option>
                        <option value="2">Không</option>
                    </select>
                </div>
            </div>

            <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                <div class="form-group">
                    <label>Màu</label>
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
                <div class="adopt-card col-md-6 col-xl-3 res-margin">
                    <div class="card bg-light-custom">
                        <div class="thumbnail text-center">
                            <!-- Image -->
                            <img src="{{asset('assets/user/img/adoption/adoption1.jpg')}}"
                                 class="border-irregular1 img-fluid" alt="">
                            <!-- Name -->
                            <div class="caption-adoption">
                                <h6 class="adoption-header">Fluffy</h6>
                                <!-- List -->
                                <ul class="list-unstyled">
                                    <li><strong>Giới tính:</strong></li>
                                    <li><strong>Triệt sản: </strong></li>
                                    <li><strong>Tuổi:</strong></li>
                                </ul>
                                <!-- Buttons -->
                                <div class="text-center">
                                    <a href="/adoption_detail" class="btn btn-primary">Thêm thông tin</a>
                                </div>
                            </div>
                        </div>
                        <!-- /thumbnail -->
                    </div>
                    <!-- /card -->
                </div>
                <!-- /adopt-card -->
                <!-- /pet -->

            </div>
            <!-- /row -->
            <div class="col-md-12 mt-5">
                <!-- pagination -->
                <nav aria-label="pagination">
                    <ul class="pagination float-right">
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
                <!-- /nav -->
            </div>
            <!-- /col-md -->
        </div>
        <!-- /container -->
    </div>
    <!-- /page -->
    <section class="container-fluid adoption-online-bg overlay">
        <div class="container">
            <div class="col-lg-7 text-light text-center">
                <h4 data-aos="zoom-out" class="text-capitalize aos-init aos-animate">Bạn Chưa Đủ Điều Kiện Mang
                    Boss Về Nhà? Tham gia chương trình Nhận nuôi Ảo nhé.</h4>
                <a href="/donate_guide"
                   class="btn btn-secondary aos-init aos-animate" data-aos="zoom-out" aria-label="Tìm hiểu ngay"
                   aria-labelledby="Tìm hiểu ngay">Tìm hiểu ngay</a>
            </div>
        </div>
    </section>
@endsection
