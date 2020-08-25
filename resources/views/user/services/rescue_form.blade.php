@extends('user.layouts.master')
@section('title')
    Resuce Form
@endsection
@section('specific_css')
    <style>
        .page {
            background-image: url("https://res.cloudinary.com/dwarrion/image/upload/v1598281159/PetCasa/cover_j9s2nh.jpg");
        }

        .page {
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
            color: #48A06A;
            text-align: center;
            background-color: white;
        }

        .submit-btn {
            text-align: center;
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
            <h2>Cứu nạn chó mèo</h2>
            <div class="container bg-light-custom border-irregular1 block-padding">
                <form class="form-group" method="POST" action="{{route('rescue_form')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Loại đơn<span class="require"></span></label>
                            <input type="text" name="ordertype" class="form-control input-field" value="Cứu hộ"
                                   readonly autocomplete="off">
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
                            <label>Địa chỉ<span class="required"></span></label>
                            <input type="text" name="address" class="form-control input-field" autocomplete="off">
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
                            <label>Nội dung<span class="required"></span></label>
                            <input type="text" name="messenger" class="form-control input-field" autocomplete="off">
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
