@extends('user.layouts.master')
@section('title')
    Adoption Form
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
            color: #48A06A;
            background-color: white;
            text-align: center;
        }

        h4 {
            color: #48A06A;
            text-align: center;
        }

        .submit-btn {
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <!-- ==== Page Content ==== -->
    <div class="page">
        <div class="container custom-1">
            <h2>Đơn xin nhận nuôi</h2>
            <div class="container bg-light-custom border-irregular1 block-padding">
                <form class="form-group" method="POST" action="{{route('donation')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Loại đơn<span class="require"></span></label>
                            <input type="text" name="ordertype" class="form-control input-field" value="Nhận nuôi"
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
                            <input type="text" name="name" class="form-control input-field" autocomplete="off"
                                   readonly value="{{$pet_info->Name}}">
                        </div>
                        <div class="col-md-6">
                            <label>Giống loài<span class="required"></span></label>
                            <input type="text" name="species" class="form-control input-field" autocomplete="off"
                                   readonly value="{{$pet_info->Breed}}">
                        </div>
                        <div class="col-md-6">
                            <label>Tuổi<span class="required"></span></label>
                            <input type="text" name="age" class="form-control input-field" autocomplete="off" readonly
                                   value="{{$pet_info->Age}}">
                        </div>
                        <div class="col-md-6">
                            <label>Loại<span class="required"></span></label>
                            <input type="text" name="species" class="form-control input-field" autocomplete="off"
                                   readonly value="{{$pet_info->Name}}">
                        </div>
                        <div class="col-md-6">
                            <label>Giới tính<span class="required"></span></label>
                            <input type="text" name="sex" class="form-control input-field" autocomplete="off" readonly
                                   value="{{$pet_info->Sex}}">
                        </div>
                        <div class="col-md-6">
                            <label>Giấy khai sinh<span class="required"></span></label>
                            <input type="text" name="certifiedpedigree" class="form-control input-field"
                                   autocomplete="off" readonly
                                   value="{{$pet_info->CertifiedPedigree}}">
                        </div>
                        <div class="col-md-6">
                            <label>Tiêm phòng<span class="required"></span></label>
                            <input type="text" name="vaccinated" class="form-control input-field"
                                   autocomplete="off" readonly
                                   value="{{$pet_info->Vaccinated}}">
                        </div>
                        <div class="col-md-6">
                            <label>Triệt sản<span class="required"></span></label>
                            <input type="text" name="neutered" class="form-control input-field"
                                   autocomplete="off" readonly
                                   value="{{$pet_info->Neutered}}">
                        </div>
                        <div class="col-md-12">
                            <label>Ảnh bé {{$pet_info->Name}}</label>
                            <br>
                            <div class="form-group">
                                @foreach($pet_info->ArrayThumbnails450x450 as $thumbnail)
                                    <img src="{{$thumbnail}}" style="width: 300px;height: 300px">
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Thông tin mô tả thêm<span class="required"></span></label>
                            <textarea name="description" id="message" class="textarea-field form-control"
                                      rows="3"
                                      required=""
                                      readonly
                                      placeholder="{{$pet_info->Description}}"></textarea>
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
