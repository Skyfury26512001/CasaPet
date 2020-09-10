@extends('user.layouts.master')
@section('title')
    Timeline Update
@endsection
@section('specific_css')
    {{--    <link href="{{asset('assets/user/css/timeline.css')}}" rel="stylesheet">--}}
    <link href="{{asset('assets/user/css/personal_info.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    <style>
        #upload_widget {
            margin: unset;
        }
    </style>
@endsection
@section('specific_js')
    {{--    <script src="{{asset('assets/user/js/timeline.js')}}"></script>--}}
    <!-- Boostrap Datepicker -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'dd/mm/yyyy'
        });
    </script>

    <!-- Widget Cloudinary -->
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
    <div class="page bg-light">
        <div class="container margin_30 block-padding">
            <div class="row">
                <div class="col-md-2">
                    <div class="all">
                        <div class="user-page-brief">
                            <a class="user-page-brief__avatar" href="{{route('personal_info')}}">
                                <div class="petscasa-avatar">
                                    <div class="petscasa-avatar__placeholder">
                                        <svg class="petscasa-svg-icon icon-headshot" enable-background="new 0 0 15 15"
                                             viewBox="0 0 15 15" x="0" y="0">
                                            <g>
                                                <circle cx="7.5" cy="4.5" fill="none" r="3.8"
                                                        stroke-miterlimit="10"></circle>
                                                <path d="m1.5 14.2c0-3.3 2.7-6 6-6s6 2.7 6 6" fill="none"
                                                      stroke-linecap="round" stroke-miterlimit="10"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <img class="petscasa-avatar__img"
                                         src="{{$account->Avatar128x128}}">
                                </div>
                            </a>
                            <div class="user-page-brief__right">
                                <div class="user-page-brief__username">{{$account->FullName}}</div>
                                <div style="margin-top: 3px">
                                    <a class="user-page-brief__edit" href="{{route('personal_info')}}">
                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                             xmlns="http://www.w3.org/2000/svg"
                                             style="margin-right: 4px;">
                                            <path
                                                d="M8.54 0L6.987 1.56l3.46 3.48L12 3.48M0 8.52l.073 3.428L3.46 12l6.21-6.18-3.46-3.48"
                                                fill="#9B9B9B" fill-rule="evenodd"></path>
                                        </svg>
                                        Sửa hồ sơ
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="userpage-sidebar-menu">
                            <a class="userpage-sidebar-menu-entry"
                               href="{{route('personal_info')}}">
                                <div class="userpage-sidebar-menu-entry__icon"
                                     style="background-color: black;">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="userpage-sidebar-menu-entry__text" style="color: black">
                                    Tài khoản của tôi
                                </div>
                            </a>
                        </div>
                        <div class="userpage-sidebar-menu">
                            <a class="userpage-sidebar-menu-entry"
                               href="{{route('user_account_change_password', $account->Slug)}}">
                                <div class="userpage-sidebar-menu-entry__icon" style="background-color: black">
                                    <i class="fa fa-key"></i>
                                </div>
                                <div class="userpage-sidebar-menu-entry__text" style="color: black">
                                    Thay đổi mật khẩu
                                </div>
                            </a>
                        </div>
                        <div class="userpage-sidebar-menu">
                            <a class="userpage-sidebar-menu-entry"
                               href="{{route('user_account_update_timeline', $account->Slug)}}">
                                <div class="userpage-sidebar-menu-entry__icon" style="background-color: #48A06A">
                                    <i class="fa fa-clock"></i>
                                </div>
                                <div class="userpage-sidebar-menu-entry__text" style="color: #48A06A">
                                    Cập nhập Timeline
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="my-account-section">
                        <div class="my-account-section__header">
                            <div class="my-account-section__header-left">
                                <div class="my-account-section__header-title">Hồ sơ của tôi</div>
                                <div class="my-account-section__header-subtitle">
                                    Cập nhập timeline thú cưng được nhận nuôi
                                </div>
                            </div>
                        </div>
                        <div class="my-account-profile">
                            <div class="my-account-profile__left">
                                <form id="account_form" action="{{route('personal_info_update')}}" method="POST"
                                      style="width: 100%">
                                    @csrf
                                    <div class="input-with-label">
                                        <div class="input-with-label__wrapper">
                                            <div class="input-with-label__label"><label>Tên Pet</label></div>
                                            <div class="input-with-label__content">
                                                <div class="input-with-validator-wrapper">
                                                    <div class="input-with-validator"><input type="text"
                                                                                             placeholder=""
                                                                                             value="{{$account->FullName}}"
                                                                                             name="PetName">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-with-label">
                                        <div class="input-with-label__wrapper">
                                            <div class="input-with-label__label"><label>Nội dung</label></div>
                                            <div class="input-with-label__content">
                                                <div class="input-with-validator-wrapper">
                                                    <textarea class="input-with-validator" name="Content"
                                                              rows="5" style="width: 100%; height: unset"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-with-label">
                                        <div class="input-with-label__wrapper birthday-choose">
                                            <div class="input-with-label__label"><label>Ngày đăng</label></div>
                                            <div class="input-with-label__content">
                                                <input id="datepicker" width="50%"
                                                       value="{{date("d/m/Y", strtotime($account->DateOfBirth))}}"
                                                       name="Date"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-with-label">
                                        <div class="input-with-label__wrapper birthday-choose">
                                            <div class="input-with-label__label"><label>Ảnh</label></div>
                                            <div class="input-with-label__content">
                                                <button type="button" id="upload_widget" class="btn-primary btn">
                                                    Tải lên
                                                </button>
                                                <div class="thumbnails"></div>
                                                @if ($errors->has('thumbnails'))
                                                    <label
                                                        class="alert-warning">{{$errors->first('thumbnails')}}</label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="Slug" value="{{$account->Slug}}">
                                    <div class="my-account-page__submit">
                                        <button type="submit" class="btn btn-solid-primary btn--m btn--inline"
                                                aria-disabled="false">Lưu
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- timeline start -->
                        <section class="cd-horizontal-timeline">
                            <div class="timeline">
                                <div class="events-wrapper">
                                    <div class="events">
                                        <ol>
                                            <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a>
                                            </li>
                                            <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
                                            <li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
                                            <li><a href="#0" data-date="20/05/2014">20 May</a></li>
                                            <li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
                                            <li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
                                            <li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
                                            <li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
                                            <li><a href="#0" data-date="10/12/2014">10 Dec</a></li>
                                            <li><a href="#0" data-date="19/01/2015">29 Jan</a></li>
                                            <li><a href="#0" data-date="03/03/2015">3 Mar</a></li>
                                        </ol>

                                        <span class="filling-line" aria-hidden="true"></span>
                                    </div> <!-- .events -->
                                </div> <!-- .events-wrapper -->

                                <ul class="cd-timeline-navigation">
                                    <li><a href="#0" class="prev inactive">Prev</a></li>
                                    <li><a href="#0" class="next">Next</a></li>
                                </ul> <!-- .cd-timeline-navigation -->
                            </div> <!-- .timeline -->

                            <div class="events-content">
                                <ol>
                                    <li class="selected" data-date="16/01/2014">
                                        <h2>Horizontal Timeline</h2>
                                        <em>January 16th, 2014</em>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                            praesentium officia, fugit recusandae ipsa, quia velit nulla
                                            adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                                            dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                            reiciendis eligendi! Doloremque quia pariatur harum ea amet
                                            quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                    </li>

                                    <li data-date="28/02/2014">
                                        <h2>Event title here</h2>
                                        <em>February 28th, 2014</em>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                            praesentium officia, fugit recusandae ipsa, quia velit nulla
                                            adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                                            dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                            reiciendis eligendi! Doloremque quia pariatur harum ea amet
                                            quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                    </li>

                                    <li data-date="20/04/2014">
                                        <h2>Event title here</h2>
                                        <em>March 20th, 2014</em>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                            praesentium officia, fugit recusandae ipsa, quia velit nulla
                                            adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                                            dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                            reiciendis eligendi! Doloremque quia pariatur harum ea amet
                                            quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                    </li>

                                    <li data-date="20/05/2014">
                                        <h2>Event title here</h2>
                                        <em>May 20th, 2014</em>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                            praesentium officia, fugit recusandae ipsa, quia velit nulla
                                            adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                                            dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                            reiciendis eligendi! Doloremque quia pariatur harum ea amet
                                            quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                    </li>

                                    <li data-date="09/07/2014">
                                        <h2>Event title here</h2>
                                        <em>July 9th, 2014</em>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                            praesentium officia, fugit recusandae ipsa, quia velit nulla
                                            adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                                            dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                            reiciendis eligendi! Doloremque quia pariatur harum ea amet
                                            quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                    </li>

                                    <li data-date="30/08/2014">
                                        <h2>Event title here</h2>
                                        <em>August 30th, 2014</em>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                            praesentium officia, fugit recusandae ipsa, quia velit nulla
                                            adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                                            dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                            reiciendis eligendi! Doloremque quia pariatur harum ea amet
                                            quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                    </li>

                                    <li data-date="15/09/2014">
                                        <h2>Event title here</h2>
                                        <em>September 15th, 2014</em>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                            praesentium officia, fugit recusandae ipsa, quia velit nulla
                                            adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                                            dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                            reiciendis eligendi! Doloremque quia pariatur harum ea amet
                                            quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                    </li>

                                    <li data-date="01/11/2014">
                                        <h2>Event title here</h2>
                                        <em>November 1st, 2014</em>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                            praesentium officia, fugit recusandae ipsa, quia velit nulla
                                            adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                                            dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                            reiciendis eligendi! Doloremque quia pariatur harum ea amet
                                            quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                    </li>

                                    <li data-date="10/12/2014">
                                        <h2>Event title here</h2>
                                        <em>December 10th, 2014</em>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                            praesentium officia, fugit recusandae ipsa, quia velit nulla
                                            adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                                            dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                            reiciendis eligendi! Doloremque quia pariatur harum ea amet
                                            quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                    </li>

                                    <li data-date="19/01/2015">
                                        <h2>Event title here</h2>
                                        <em>January 19th, 2015</em>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                            praesentium officia, fugit recusandae ipsa, quia velit nulla
                                            adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                                            dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                            reiciendis eligendi! Doloremque quia pariatur harum ea amet
                                            quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                    </li>

                                    <li data-date="03/03/2015">
                                        <h2>Event title here</h2>
                                        <em>March 3rd, 2015</em>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum
                                            praesentium officia, fugit recusandae ipsa, quia velit nulla
                                            adipisci? Consequuntur aspernatur at, eaque hic repellendus sit
                                            dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                            reiciendis eligendi! Doloremque quia pariatur harum ea amet
                                            quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                        </p>
                                    </li>
                                </ol>
                            </div> <!-- .events-content -->
                        </section>
                        <!-- timeline end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
