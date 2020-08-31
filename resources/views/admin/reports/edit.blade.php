@extends('admin.layouts.master')
@section('specific_js')
    <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{asset('assets/admin/js/selectize.js')}}"></script>
    <script>
        $('.selectize-multiple').selectize({
            delimiter: ',',
            persist: false,
            create: function (input) {
                return {value: input, text: input};
            }
        });
    </script>
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
            var splittedImg = $(this).parent().find('img').attr('src').split('/');
            // var imgName = splittedImg[splittedImg.length - 1];
            // imgName = imgName.split('.');
            // $(this).parent().remove();
            // console.log($(this).parent());
            var imgName = splittedImg[splittedImg.length - 3] + '/' + splittedImg[splittedImg.length - 2] + '/' + splittedImg[splittedImg.length - 1];
            // console.log('input[data-cloudinary-public-id="' + imgName + '"]')
            // $('input[data-cloudinary-public-id="' + imgName + '"]').remove();
            // var input = document.querySelector('[data-cloudinary-public-id="' + splittedImg[splittedImg.length - 3] +'/'+ splittedImg[splittedImg.length - 2] +'/'+ splittedImg[splittedImg.length - 1] +'"]');
            // console.log(input);
            // input.remove()
            // console.log(input);
            // console.log("Remove image : " + "sucessful");
            console.log(imgName)
            // console.log($(this).parent().attr('data-cloudinary'))
            var publicId = $(this).parent().attr('data-cloudinary');
            $(this).parent().remove();
            // let publicId = JSON.parse($(this).parent().attr('data-cloudinary')).public_id;
            $(`input[data-cloudinary-public-id="${imgName}"]`).remove();
        });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                editor.isReadOnly = true;
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
@section('specific_css')
    <link rel="stylesheet" href="{{asset('assets/admin/css/selectize.bootstrap4.css')}}">
@endsection
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pet Casa</a></li>
                            <li class="breadcrumb-item active">Quản lý báo cáo</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Quản lý báo cáo</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-7">
                <div class="card-box">
                    <h4 class="header-title"><i class=" mdi mdi-information-outline" data-toggle="modal"
                                                data-target="#report-info"></i> Tin người dùng đăng : </h4>
                    <form action="{{route('admin_report_update',$report->id)}}" id="product_form" method="POST"
                          class="parsley-examples" novalidate="">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="FullName">Họ và tên<span class="text-danger">*</span></label>
                            <input readonly="true" type="text" name="FullName" parsley-trigger="change" required=""
                                   class="form-control" id="FullName" value="{{$report->FullName}}" style="width: 30%;">
                            @if ($errors->has('FullName'))
                                <label class="alert-warning">{{$errors->first('FullName')}}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="Address">Địa chỉ <span class="text-danger">*</span></label>
                            <input readonly="true" type="text" name="Address" parsley-trigger="change" required=""
                                   class="form-control" id="Address" value="{{$report->Address}}" style="width: 45%;">
                            @if ($errors->has('Address'))
                                <label class="alert-warning">{{$errors->first('Address')}}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="PhoneNumber">Số điện thoại<span class="text-danger">*</span></label>
                            <input readonly="true" type="text" name="PhoneNumber" parsley-trigger="change" required=""
                                   class="form-control" id="PhoneNumber" value="{{$report->PhoneNumber}}"
                                   style="width: 15%;">
                            @if ($errors->has('PhoneNumber'))
                                <label class="alert-warning">{{$errors->first('PhoneNumber')}}</label>
                            @endif
                        </div>
                        <div class="form-group" style="width: 200%">
                            <label for="Content">Nội dung<span class="text-danger">*</span></label>
                            <textarea id="editor" name="Content" class="form-control"
                                      placeholder="">{{$report->Content}}</textarea>
                            @if ($errors->has('Content'))
                                <label class="alert-warning">{{$errors->first('Content')}}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="userName">Thumnails<span class="text-danger">*</span></label>
                            <button readonly="true" type="button" id="upload_widget" class="btn-primary btn">Upload
                            </button>
                            <div class="thumbnails">
                                <ul class="cloudinary-thumbnails">
                                    @foreach($report->ArrayThumbnails450x450 as $thumbnail)
                                        <li class="cloudinary-thumbnail active" data-cloudinary="{{$thumbnail}}">
                                            <img src="{{$thumbnail}}" style="width: 300px;height: 300px">
                                            <a href="#" class="cloudinary-delete">x</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            @if ($errors->has('thumbnails'))
                                <label class="alert-warning">{{$errors->first('thumbnails')}}</label>
                            @endif
                        </div>
                        <div class="form-group" style="width:20%;">
                            <label for="Status">Trạng thái<span class="text-danger">*</span></label>
                            <select name="Status" class="form-control select-form-control">
                                <option value="0" @if ( $report->Status == 0 ) selected @endif
                                @if ( $report->Status != 0 ) disabled @endif> Chưa xử lý
                                </option>
                                <option value="1" @if ( $report->Status == 1 ) selected
                                        @endif @if ($report->Status == 2 || $report->Status == 4) disabled @endif> Đang
                                    xử lý
                                </option>
                                <option value="2" @if ( $report->Status == 2) selected
                                        @endif @if ($report->Status == 2 ) disabled @endif> Đã xử lý
                                </option>
                                <option value="3" @if ( $report->Status == 3) selected
                                        @endif @if ($report->Status != 0 ) disabled @endif> Từ
                                    chối
                                </option>
                                <option value="4" @if ( $report->Status == 4 ) selected @endif> Ẩn
                                </option>
                            </select>
                            @if ($errors->has('thumbnails'))
                                <label class="alert-warning">{{$errors->first('thumbnails')}}</label>
                            @endif
                        </div>
                        @foreach($report->ArrayThumbnails as $thumbnail)
                            <input readonly="true" type="hidden" name="thumbnails[]"
                                   data-cloudinary-public-id="{{$thumbnail}}"
                                   value="{{$thumbnail}}">
                        @endforeach
                        <div class="form-group text-right mb-0">
                            <button class="btn btn-primary waves-effect waves-light mr-1">
                                Cập nhật
                            </button>
                            <a class="btn btn-secondary waves-effect waves-light" href="{{route('admin_report_list')}}">
                                Hủy
                            </a>
                        </div>

                    </form>
                </div> <!-- end card-box -->
            </div>
            <div class="col-lg-5">
                <form action="{{route('create_admin_report_new')}}" id="product_form" method="POST"
                      class="parsley-examples" novalidate="">
                    @csrf
                    <div class="card-box">
                        <h4 class="header-title"><i class=" mdi mdi-information-outline" data-toggle="modal"
                                                    data-target="#relation-pet-info"></i> Thú nuôi liên quan : </h4>
                        <div>
                            {{--                        {{dd($report_pet_id)}}--}}
                            <div class="form-group">
                                <label for="Status">Chọn mã thú nuôi<span class="text-danger">*</span></label>
                                <select class="form-control selectize-multiple" id="select-7" name="PetIds[]"
                                        multiple>
                                    @foreach($pets as $pet)
                                        <option value="{{$pet->id}}"
                                                @if (in_array($pet->id,json_decode(json_encode($report_pet_id), true))) selected @endif>{{$pet->Name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div> <!-- end card-box -->
                    <div class="card-box">
                        <h4 class="header-title"><i class=" mdi mdi-information-outline" data-toggle="modal"
                                                    data-target="#new-info"></i> Bài viết admin : </h4>
                        <div id="product_form" class="parsley-examples">
                            {{--                        {{dd($report_pet_id)}}--}}
                            <div class="form-group">
                                <label for="Status">Tiêu đề<span class="text-danger">*</span></label>
                                <input type="text" name="Title" parsley-trigger="change" required=""
                                       class="form-control" id="Title"
                                       value="{{$report->FullName." ".$report->Address}}"
                                       style="width: 100%;">
                                @if ($errors->has('Title'))
                                    <label class="alert-warning">{{$errors->first('Title')}}</label>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="Author">Tác giả<span class="text-danger">*</span></label>
                                <input type="text" name="Author" parsley-trigger="change" required=""
                                       class="form-control" id="Author" value="{{$report->FullName}}"
                                       style="width: 30%;">
                                @if ($errors->has('Author'))
                                    <label class="alert-warning">{{$errors->first('Author')}}</label>
                                @endif
                            </div>
                            <div class="form-group" style="width: 200%">
                                <label for="Content">Nội dung<span class="text-danger">*</span></label>
                                <textarea id="editor2" name="Content" class="form-control"
                                          placeholder="">{{$report->Content}}</textarea>
                                @if ($errors->has('Content'))
                                    <label class="alert-warning">{{$errors->first('Content')}}</label>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="userName">Thumnails<span class="text-danger">*</span></label>
                                <button disabled type="button" id="upload_widget" class="btn-primary btn">Upload
                                </button>
                                <div class="thumbnails">
                                    <ul class="cloudinary-thumbnails">
                                        @foreach($report->ArrayThumbnails450x450 as $thumbnail)
                                            <li class="cloudinary-thumbnail active"
                                                data-cloudinary="{{$thumbnail}}">
                                                <img src="{{$thumbnail}}" style="width: 300px;height: 300px">
                                                <a href="#" class="cloudinary-delete">x</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @if ($errors->has('thumbnails'))
                                    <label class="alert-warning">{{$errors->first('thumbnails')}}</label>
                                @endif
                            </div>
                            {{--                            {{dd($report->ArrayThumbnails)}}--}}
                            @foreach($report->ArrayThumbnails as $thumbnail)
                                <input type="hidden" name="thumbnails[]" data-cloudinary-public-id="{{$thumbnail}}"
                                       value="{{$thumbnail}}">
                            @endforeach
                            <input type="hidden" name="Report_id" value="{{$report->id}}">
                            <div class="form-group">
                                <label for="Category_id">Chọn chuyên mục<span class="text-danger">*</span></label>
                                <select class="form-control" id="select-7" name="Category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->Name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            @if ($report->NewStatus == 0)
                                <div class="form-group text-right mb-0">
                                    <button class="btn btn-primary waves-effect waves-light mr-1">
                                        Đăng
                                    </button>
                                    <a class="btn btn-secondary waves-effect waves-light"
                                       href="{{route('admin_report_list')}}">
                                        Hủy
                                    </a>
                                </div>
                            @else
                                <div class="form-group text-right mb-0">
                                    <div class="btn btn-primary waves-effect waves-light mr-1">
                                        Bài viết đã tồn tại
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div> <!-- end card-box -->
                </form>
            </div>
            <!-- end row -->
        </div>

        <div id="report-info" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
             style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0 p-0">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        Tin người dùng đăng : Là những bài báo cáo được người gửi lên có nội dung yêu cầu hỗ trợ thú
                        nuôi tại khu vực nào đó
                        Mỗi báo cáo bao gồm : Họ và tên ;
                        Địa chỉ :
                        Số điện thoại :
                        Nội dung :
                        Ảnh :
                        Và trạng thái bài viết !
                        Bài viết có thể có tới 5 trạng thái :
                        Chưa xử lý , Đang xử lý , Đã xử lý , Từ chối và Ẩn
                        Chưa xử lý : Báo cáo chưa được admin xử lý , tiếp nhận yêu cầu .
                        Đang xử lý : Báo cáo đẫ được admin xử lý , đội cứu hộ thú nuôi đã xuất phát .
                        Đã xử lý : Vấn đề báo cáo đã được xử lý , đội cứu hộ thú nuôi đã hoàn thành nhiệm vụ trở về .
                        Từ chối : Báo cáo bị từ chối hỗ trợ , không tiếp nhận .

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div id="new-info" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
             style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0 p-0">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        Xin chao bài viết của admin
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div id="relation-pet-info" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
             style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0 p-0">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        Xin chao Thông tin pet liên quan
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
@endsection