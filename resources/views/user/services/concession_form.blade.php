@extends('user.layouts.master')
@section('title')
    Concession Form
@endsection
@section('specific_css')
    <style>
        .page {
            background-image: url("https://res.cloudinary.com/dwarrion/image/upload/v1598281159/PetCasa/cover_j9s2nh.jpg");
            padding-bottom: 50px;
        }

        .custom-1 {
            padding-top: 80px;
            align-content: center;
        }

        .row {
            margin: unset;
        }

        h2 {
            background-color: white;
        }

        h2, h4 {
            color: #48A06A;
            text-align: center;
        }

        .submit-btn {
            text-align: center;
        }

        .cus-file-input::before {
            margin: 0;
            padding: 2rem 1.5rem;
            font: 1rem/1.5 "PT Sans", Arial, sans-serif;
            color: #5a5a5a;
        }
    </style>
@endsection
@section('specific_js')
    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget(
            {
                cloudName: 'dwarrion',
                uploadPreset: 'rdjyel16',
                multiple: true,
                form: '#product_form',
                folder: 'PetCasa/PetThumbnails',
                fieldName: 'thumbnails[]',
                thumbnails: '.thumbnails'
            }, function (error, result) {
                if (!error && result && result.event === "success") {
                    console.log('Done! Here is the image info: ', result.info.url);
                    var arrayThumnailInputs = document.querySelectorAll('input[name="thumbnails[]"]');
                    for (let i = 0; i < arrayThumnailInputs.length; i++) {
                        arrayThumnailInputs[i].value = arrayThumnailInputs[i].getAttribute('data-cloudinary-public-id');
                    }
                    console.log(arrayThumnailInputs)
                }
            }
        );
        $('#upload_widget').click(function () {
            myWidget.open();
        })

        // xử lý js trên dynamic content.
        $('body').on('click', '.cloudinary-delete', function () {
            let publicId = JSON.parse($(this).parent().attr('data-cloudinary')).public_id;
            $(`input[data-cloudinary-public-id="${publicId}"]`).remove();
        });
    </script>
@endsection
@section('content')
    <!-- ==== Page Content ==== -->
    <div class="page">
        <div class="container custom-1">
            <h2>Đơn nhượng nuôi</h2>
            <div class="container bg-light-custom border-irregular1 block-padding">
                <form class="form-group" method="POST" action="{{route('donation')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Loại đơn<span class="require"></span></label>
                            <input type="text" name="ordertype" class="form-control input-field" value="Gửi nuôi"
                                   readonly>
                        </div>
                        <div class="col-md-6">
                            <label>Họ và tên<span class="require"></span></label>
                            <input type="text" name="name" class="form-control input-field" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label>SĐT<span class="required"></span></label>
                            <input type="text" name="phonenumber" class="form-control input-field" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label>Email<span class="required"></span></label>
                            <input type="email" name="email" class="form-control input-field" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label>Số CMND<span class="required"></span></label>
                            <input type="email" name="idno" class="form-control input-field" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label>ID bé<span class="required"></span></label>
                            <input type="email" name="petid" class="form-control input-field" autocomplete="off">
                        </div>
                    </div>
                    <hr>
                    <h4>Thông tin vật nuôi</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Tên bé<span class="required"></span></label>
                            <input type="text" name="name" class="form-control input-field" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label>Giống loài<span class="required"></span></label>
                            <input type="text" name="species" class="form-control input-field" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label>Tuổi<span class="required"></span></label>
                            <input type="text" name="age" class="form-control input-field" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label>Loại<span class="required"></span></label>
                            <select class="form-control">
                                <option value="dog">Chó</option>
                                <option value="cat">Mèo</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Giới tính<span class="required"></span></label>
                            <select class="form-control">
                                <option value="male">Đực</option>
                                <option value="female">Cái</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Giấy khai sinh<span class="required"></span></label>
                            <select class="form-control">
                                <option value="yes">Có</option>
                                <option value="no">Không</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Tiêm phòng<span class="required"></span></label>
                            <select class="form-control">
                                <option value="yes">Rồi</option>
                                <option value="no">Chưa</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Triệt sản<span class="required"></span></label>
                            <select class="form-control">
                                <option value="yes">Rồi</option>
                                <option value="no">Chưa</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label>Ảnh mô tả - Phiền bạn chụp ảnh thật rõ, ảnh rộng và thẳng mặt vật nuôi nhà
                                mình</label>
                            <br>
                            <div class="form-group">
                                <button type="button" id="upload_widget" class="btn-primary btn">Upload</button>
                                <div class="thumbnails"></div>
                                @if ($errors->has('thumbnails'))
                                    <label class="alert-warning">{{$errors->first('thumbnails')}}</label>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Thông tin mô tả thêm<span class="required"></span></label>
                            <textarea name="description" id="message" class="textarea-field form-control"
                                      rows="5"
                                      required=""
                                      placeholder="Tình trạng sức khoẻ (quá khứ đã từng bị bệnh gì?, dị ứng gì?...) - Thích ăn gì? - Nhạy cảm với gì?"></textarea>
                        </div>
                    </div>
                    <div class="submit-btn">
                        <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary">Gửi
                        </button>
                    </div>
                </form>
                <!-- /form-group-->
            </div>
        </div>
    </div>
    <!-- /container -->
    <!-- /page -->
@endsection
