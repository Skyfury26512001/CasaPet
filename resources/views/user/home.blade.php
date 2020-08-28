@extends('user.layouts.master')
@section('title')
    Home
@endsection
@section('specific_js')
    <!-- Open Street maps -->
    <script src={{asset('assets/user/js/map.js')}}></script>
    <!-- Mailchimp script -->
    <script src={{asset('assets/user/js/mailchimp.js')}}></script>
    <!-- number counter script -->
    <script src={{asset('assets/user/js/counter.js"')}}></script>
    <!-- Contact Form script -->
    <script src={{asset('assets/user/js/contact.js')}}></script>
@endsection
@section('content')
    <!-- ==== Slider ==== -->
    <div id="slider" style="width:1200px;height:800px;margin:0 auto;margin-bottom: 0px;">
        <!-- Slide 1 -->
        <div class="ls-slide"
             data-ls="duration:4000; transition2d:7; kenburnszoom:out; kenburnsrotate:-5; kenburnsscale:1.2;">
            <!-- bg image  -->
            <img src={{asset('assets/user/img/slide1.jpg')}} class="ls-bg" alt=""/>
            <!-- text  -->
            <div class="ls-l header-wrapper"
                 data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">
                <div class="header-text dog-elements">
                    <h1>Adopt a pet today!</h1>
                    <!--the div below is hidden on small screens  -->
                    <div class="d-none d-sm-block">
                        <p class="header-p">Search our list of dogs, cats and other pets available for adoption near
                            you</p>
                        <a class="btn btn-primary " href="{{route('adoption')}}">Adopt Today</a>
                    </div>
                    <!--/d-none  -->
                </div>
                <!-- header-text  -->
            </div>
            <!-- ls-l  -->
        </div>
        <!-- ls-slide -->
        <!-- Slide 2 -->
        <div class="ls-slide"
             data-ls="duration:4000; transition2d:7; kenburnszoom:out; kenburnsrotate:-5; kenburnsscale:1.2;">
            <!-- bg image  -->
            <img src={{asset('assets/user/img/slide2.jpg')}} class="ls-bg" alt=""/>
            <!-- text  -->
            <div class="ls-l header-wrapper"
                 data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">
                <div class="header-text cat-elements">
                    <h1>High Quality pet food</h1>
                    <!--the div below is hidden on small screens  -->
                    <div class="d-none d-sm-block">
                        <p class="header-p">We have all the best products for your pet, visit our store today!</p>
                        <a class="btn btn-primary " href="{{route('contact')}}">Contact us</a>
                    </div>
                    <!--/d-none  -->
                </div>
                <!-- header-text  -->
            </div>
            <!-- ls-l  -->
        </div>
        <!-- ls-slide -->
        <!-- Slide 3 -->
        <div class="ls-slide"
             data-ls="duration:4000; transition2d:7; kenburnszoom:out; kenburnsrotate:-5; kenburnsscale:1.2;">
            <!-- bg image  -->
            <img src={{asset('assets/user/img/slide3.jpg')}} class="ls-bg" alt=""/>
            <!-- text  -->
            <div class="ls-l header-wrapper"
                 data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">
                <div class="header-text dog-elements">
                    <h1>Visit our Pet Hotel</h1>
                    <!--the div below is hidden on small screens  -->
                    <div class="d-none d-sm-block">
                        <p class="header-p">Our facility is designed to meet the unique needs of your pet</p>
                        <a class="btn btn-primary " href="{{route('services')}}">Our services</a>
                    </div>
                    <!--/d-none  -->
                </div>
                <!-- header-text  -->
            </div>
            <!-- ls-l  -->
        </div>
        <!-- ls-slide -->
        <!-- Slide 4 -->
        <div class="ls-slide"
             data-ls="duration:4000; transition2d:7; kenburnszoom:out; kenburnsrotate:-5; kenburnsscale:1.2;">
            <!-- bg image  -->
            <img src={{asset('assets/user/img/slide4.jpg')}} class="ls-bg" alt=""/>
            <!-- text  -->
            <div class="ls-l header-wrapper"
                 data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">
                <div class="header-text cat-elements">
                    <h1>Experienced Veterinarians</h1>
                    <!-- the div below is hidden on small screens  -->
                    <div class="d-none d-sm-block">
                        <p class="header-p">Your pet is in good hands, meet our highly qualified professionals</p>
                        <a class="btn btn-primary " href="/team">Our Team</a>
                    </div>
                    <!--/d-none  -->
                </div>
                <!-- header-text  -->
            </div>
            <!-- ls-l  -->
        </div>
        <!-- ls-slide -->
    </div>
    <!-- /slider -->
    <!-- ==== Page Content ==== -->
    <!-- Section services -->
    <section id="services" class="cat-bg3">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Dịch vụ của PetsCasa</h2>
            </div>
            <!-- /Section-heading -->
            <div class="container block-padding pt-0">
                <div class="row">
                    <div class="col-xl-6">
                        <h3>The best for your pet!</h3>
                        <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus.
                            Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec
                            lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                        <p><strong>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu
                                risus scelerisque laoree.</strong></p>
                        <!-- ul custom-->
                        <ul class="custom pl-0">
                            <li>Aliquam erat volut pat.</li>
                            <li>Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac.</li>
                            <li>Aliquam erat volut pat phas ellu</li>
                        </ul>
                    </div>
                    <!-- /col-xl-->
                    <div class="col-xl-6">
                        <img src={{asset('assets/user/img/services2.jpg')}} alt="" data-aos="fade-down"
                             data-aos-duration="1500"
                             class="img-fluid border-irregular1 border-double">
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
            <!-- services carousel -->
            <div class="bg-light-custom block-padding border-irregular1">
                <div id="owl-services" class="container owl-carousel owl-theme">
                    <!-- service 1  -->
                    <div class="col-md-12">
                        <div class="serviceBox">
                            <!-- service icon -->
                            <div class="service-icon">
                                <i class="flaticon-people-1"></i>
                            </div>
                            <!-- service content -->
                            <div class="service-content">
                                <h6>Fun Activities</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                                </p>
                                <a class="btn btn-primary" href="services-single.html">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- service 2  -->
                    <div class="col-md-12">
                        <div class="serviceBox">
                            <!-- service icon -->
                            <div class="service-icon">
                                <i class="flaticon-pet-shelter"></i>
                            </div>
                            <!-- service content -->
                            <div class="service-content">
                                <h6>Pet Hotel</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                                </p>
                                <a class="btn btn-primary" href="services-single.html">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- service 3  -->
                    <div class="col-md-12">
                        <div class="serviceBox">
                            <!-- service icon -->
                            <div class="service-icon">
                                <i class="flaticon-animals-2"></i>
                            </div>
                            <!-- service content -->
                            <div class="service-content">
                                <h6>Grooming Services</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                                </p>
                                <a class="btn btn-primary" href="services-single.html">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- service 4 -->
                    <div class="col-md-12">
                        <div class="serviceBox">
                            <!-- service icon -->
                            <div class="service-icon">
                                <i class="flaticon-dog-with-first-aid-kit-bag"></i>
                            </div>
                            <!-- service content -->
                            <div class="service-content">
                                <h6>Veterinary 24/7</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                                </p>
                                <a class="btn btn-primary" href="services-single.html">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- service 5 -->
                    <div class="col-md-12">
                        <div class="serviceBox">
                            <!-- service icon -->
                            <div class="service-icon">
                                <i class="flaticon-syringe"></i>
                            </div>
                            <!-- service content -->
                            <div class="service-content">
                                <h6>Vaccines</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                                </p>
                                <a class="btn btn-primary" href="services-single.html">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- service 6 -->
                    <div class="col-md-12">
                        <div class="serviceBox">
                            <!-- service icon -->
                            <div class="service-icon">
                                <i class="flaticon-dog-training-3"></i>
                            </div>
                            <!-- service content -->
                            <div class="service-content">
                                <h6>Huấn luyện</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum malesuada.
                                </p>
                                <a class="btn btn-primary" href="services-single.html">read more</a>
                            </div>
                        </div>
                    </div>
                    <!--col-md-12  -->
                </div>
                <!-- /owl-services -->
            </div>
            <!-- /bg-light-custom -->
        </div>
        <!-- /container -->
    </section>
    <!-- / Section Ends -->
    <!-- Section Blurb -->
    <section id="blurb" class="bg-primary text-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <!-- image  -->
                    <img src="{{asset('assets/user/img/blurbimg.png')}}" class="img-fluid blurb-img" alt=""/>
                </div>
                <div class="col-xl-4" data-aos="fade-down">
                    <h2 class="res-margin">Tham gia câu lạc bộ</h2>
                    <p class="featured-text">Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh
                        hendrerit id.
                        In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum.
                    </p>
                    <!-- button -->
                    <a href="/contact" class="btn btn-primary">contact us</a>
                </div>
                <!-- /col-lg -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- SVG effect -->
    <svg id="bigTriangleColor" class="d-none d-sm-block" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%"
         height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 0 L50 100 L100 0 Z"/>
    </svg>
    <!-- / Section Ends -->
    <!-- Section About Us -->
    <section id="about" class="dog-bg2">
        <div class="container">
            <div class="section-heading text-center">
                <h2>About Us</h2>
            </div>
            <!-- /Section-heading -->
        </div>
        <!-- /container -->
        <div class="container block-padding pt-0">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Caring for your pets</h3>
                    <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec
                        commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis
                        maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                    <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus
                        scelerisque laoree.</p>
                    <ul class="custom pl-0">
                        <li>Orci eget, viverra elit liquam erat volut pat phas ellus ac</li>
                        <li>Ipuset phas ellus ac sodales Lorem ipsum dolor Phas ell</li>
                        <li>Aliquam erat volut pat phas ellu</li>
                    </ul>
                    <!-- /ul -->
                </div>
                <!-- image -->
                <div class="col-lg-6">
                    <img src={{asset('assets/user/img/about2.jpg')}} alt="" class="img-fluid border-irregular1"
                         data-aos="zoom-in">
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
        <div class="bg-light-custom block-padding">
            <div class="container">
                <div id="counter" class="row">
                    <!-- Counter -->
                    <div class="col-xl-3 col-md-6">
                        <div class="counter">
                            <i class="counter-icon fa fa-users"></i>
                            <!-- insert your final value on data-count= -->
                            <div class="counter-value" data-count="1500">600</div>
                            <h3 class="title">Happy Clients</h3>
                        </div>
                        <!-- /counter -->
                    </div>
                    <!-- /col-lg -->
                    <!-- Counter -->
                    <div class="col-xl-3 col-md-6">
                        <div class="counter">
                            <i class="counter-icon flaticon-dog-in-front-of-a-man"></i>
                            <!-- insert your final value on data-count= -->
                            <div class="counter-value" data-count="14">60</div>
                            <h3 class="title">Tình nguyên viên</h3>
                        </div>
                        <!-- /counter -->
                    </div>
                    <!-- /col-lg -->
                    <!-- Counter -->
                    <div class="col-xl-3 col-md-6">
                        <div class="counter">
                            <i class="counter-icon flaticon-dog-2"></i>
                            <!-- insert your final value on data-count= -->
                            <div class="counter-value" data-count="900">125</div>
                            <h3 class="title">Chó được giúp đỡ</h3>
                        </div>
                        <!-- /counter -->
                    </div>
                    <!-- /col-lg -->
                    <!-- Counter -->
                    <div class="col-xl-3 col-md-6">
                        <div class="counter">
                            <i class="counter-icon flaticon-prize-badge-with-paw-print"></i>
                            <!-- insert your final value on data-count= -->
                            <div class="counter-value" data-count="12">5</div>
                            <h3 class="title">Giấy chứng nhận</h3>
                        </div>
                        <!-- /counter -->
                    </div>
                    <!-- /col-lg -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /block-padding -->
        <div class="container bottom-block-padding">
            <h3 class="text-center">Nhận xét của khách hàng</h3>
            <div class="col-md-12">
                <div id="owl-testimonial" class="owl-carousel owl-theme">
                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="content">
                            <p class="description">
                                Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna
                                nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                            </p>
                        </div>
                        <!-- /content -->
                        <div class="testimonial-pic">
                            <img src={{asset('assets/user/img/team/team1.jpg')}} class="img-fluid" alt="">
                        </div>
                        <!-- /testimonial-pic -->
                        <div class="testimonial-review">
                            <h5 class="testimonial-title">Lucianna Smith</h5>
                            <span>Teacher</span>
                        </div>
                        <!-- /testimonial-review -->
                    </div>
                    <!-- /testimonial -->
                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="content">
                            <p class="description">
                                Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna
                                nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                            </p>
                        </div>
                        <!-- /content -->
                        <div class="testimonial-pic">
                            <img src={{asset('assets/user/img/team/team2.jpg')}} class="img-fluid" alt="">
                        </div>
                        <!-- /testimonial-pic -->
                        <div class="testimonial-review">
                            <h5 class="testimonial-title">John Sadana</h5>
                            <span>Doctor</span>
                        </div>
                        <!-- /testimonial-review -->
                    </div>
                    <!-- /testimonial -->
                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="content">
                            <p class="description">
                                Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu
                                risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna
                                nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.
                            </p>
                        </div>
                        <!-- /content -->
                        <div class="testimonial-pic">
                            <img src={{asset('assets/user/img/team/team3.jpg')}} class="img-fluid" alt="">
                        </div>
                        <!-- /testimonial-pic -->
                        <div class="testimonial-review">
                            <h5 class="testimonial-title">Jane Janeth</h5>
                            <span>Librarian</span>
                        </div>
                        <!-- /testimonial-review -->
                    </div>
                    <!-- /testimonial -->
                </div>
                <!-- /owl-testimonial -->
            </div>
            <!-- /col-md-12 -->
        </div>
        <!-- /container -->
    </section>
    <!-- / Section Ends -->
    <!-- Section: Gallery -->
    <section id="gallery" class="dog-bg1 bg-light pb-0">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Thành Viên PetsCasa</h2>
            </div>
            <!-- /Section-heading -->
        </div>
        <!-- /container -->
        <!-- centered Gallery navigation -->
        <ul class="nav nav-pills cat center-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#" data-toggle="tab" data-filter="*">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="tab" data-filter=".Chó">Chó</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="tab" data-filter=".Mèo">Mèo</a>
            </li>
        </ul>
        <!-- /ul -->
        <!-- Gallery -->
        <div id="gallery-isotope" class="mt-5">
        @foreach($pets as $pet)
            <!-- Image 1 -->
                <div class="{{$pet->Species}} col-lg-3 col-sm-6 col-md-6">
                    <div class="isotope-item">
                        <div class="gallery-thumb">
                            <img class="img-fluid" src="{{$pet->FirstThumbnail}}" alt="">
                            <a href=""
                               title="{{$pet->name}}">
                                <span class="overlay-mask"></span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- /gallery-isotope-->
    </section>
    <!-- / Section Ends -->

    <!-- Section Call to action -->
    <div id="call-to-action">
        <div class="container block-padding">
            <div class="col-lg-6 offset-lg-6 text-light card text-center" style="background-color: unset">
                <h4>Nhận tin mới nhất từ PetsCasa</h4>
                <!-- Form -->
                <div id="mc_embed_signup">
                    <!-- your form address in the line bellow -->
                    <form action="//yourlist.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&id=111"
                          method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                          class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <div class="mc-field-group">
                                <div class="input-group">
                                    <input class="form-control input-lg required email" type="email" value=""
                                           name="EMAIL" placeholder="Email của bạn" id="mce-EMAIL">
                                    <span class="input-group-btn">
                              <button class="btn btn-primary" type="submit" value="Subscribe" name="subscribe"
                                      id="mc-embedded-subscribe">Đăng ký</button>
                              </span>
                                </div>
                                <!-- Subscription results -->
                                <div id="mce-responses" class="mailchimp">
                                    <div class="alert alert-danger response" id="mce-error-response"></div>
                                    <div class="alert alert-success response" id="mce-success-response"></div>
                                </div>
                            </div>
                            <!-- /mc-fiel-group -->
                        </div>
                        <!-- /mc_embed_signup_scroll -->
                    </form>
                    <!-- /form ends -->
                </div>
                <!-- /mc_embed_signup -->
            </div>
            <!-- /col-md-12 -->
        </div>
        <!--/row -->
    </div>
    <!--/call-to-action -->
    <!-- Section Adopt -->
    <section id="adopt" class="paws-house-bg1 bg-light">
        <div class="container ">
            <div class="section-heading text-center">
                <h2>Nhận Nuôi</h2>
            </div>
            <!-- /Section-heading -->
            <div class="col-lg-10 offset-lg-1 text-center">
                <h3>Tìm một người bạn mới</h3>
                <p>Bạn đã sẵn sàng?</p>
            </div>
            <!-- First row: Adopt a pet -->
            <div class="row mt-5">
                <!-- Pet  -->
                @foreach($pet_4 as $pet)
                    <div class="adopt-card col-md-6 col-xl-3 res-margin">
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
                                        <li><strong>Giới tính: </strong> {{$pet->Sex}}</li>
                                        <li><strong>Triệt sản: </strong> @if ($pet->Neutered == "Yes") Đã triệt
                                            sản @elseif ($pet->Neutered == "No") Chưa triệt sản @endif</li>
                                        <li><strong>Tuổi: </strong>{{$pet->Age}}</li>
                                    </ul>
                                    <!-- Buttons -->
                                    <div class="text-center">
                                        <a href="/adoption/adoption_detail" class="btn btn-primary">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /thumbnail -->
                        </div>
                        <!-- /card -->
                    </div>
                @endforeach
            </div>
            <!-- /row -->
            <div class="text-center mt-5">
                <a href="{{route('adoption')}}" class="btn btn-secondary btn-lg">Xem thêm</a>
            </div>
        </div>
        <!-- /container -->
    </section>
    <!-- Section Contact -->
    <section id="contact" class="dog-bg3">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Liên Hệ</h2>
            </div>
            <!-- /Section-heading -->
        </div>
        <!-- /container -->
        <div class="container">
            <div class="row">
                <!-- contact info -->
                <div class="contact-info col-lg-5 card bg-light-custom">
                    <h4>Feedback</h4>
                    <!-- Form Starts -->
                    <form action="{{route('send_contact_mail')}}" id="contact_form" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Tên<span class="required">*</span></label>
                                    <input type="text" name="name" class="form-control input-field" required=""
                                           autocomplete="off">
                                </div>
                                <div class="col-md-6">
                                    <label>Email<span class="required">*</span></label>
                                    <input type="email" name="email" class="form-control input-field" required=""
                                           autocomplete="off">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Chủ đề</label>
                                    <input type="text" name="subject" class="form-control input-field"
                                           autocomplete="off">
                                </div>
                                <div class="col-md-12">
                                    <label>Feedback<span class="required">*</span></label>
                                    <textarea name="contact_message" id="message" class="textarea-field form-control"
                                              rows="5"
                                              required=""></textarea>
                                </div>
                            </div>
                            <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary">Gửi
                            </button>
                        </div>
                        <!-- Contact results -->
                        <div id="contact_results"></div>
                    </form>
                </div>
                <div class="col-lg-7">
                    <!-- map-->
                    <div id="map-canvas" class="mt-3 border-irregular1"></div>
                </div>
                <!-- /col-lg-->
            </div>
            <!-- /row-->
            <div class="row res-margin mt-5">
                <div class="col-lg-6 mt-5">
                    <div class="contact-icon">
                        <!---icon-->
                        <i class="fa fa-envelope top-icon"></i>
                        <!-- contact-icon info-->
                        <div class="contact-icon-info">
                            <h5>Gửi thư cho chúng tôi</h5>
                            <p class="h7"><a href="mailto:email@yoursite.com">t1908e@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <!-- /contact-icon-->
                <div class="col-lg-6 mt-5">
                    <div class="contact-icon">
                        <!---icon-->
                        <i class="fa fa-map-marker top-icon"></i>
                        <!-- contact-icon info-->
                        <div class="contact-icon-info">
                            <h5>Ghé thăm chúng tôi</h5>
                            <p class="h7">8 Tôn Thất Thuyết - Hà Nội</p>
                        </div>
                    </div>
                </div>
                <!-- /contact-icon-->
                <div class="col-lg-6 mt-5">
                    <div class="contact-icon">
                        <!---icon-->
                        <i class="fa fa-phone top-icon"></i>
                        <!-- contact-icon info-->
                        <div class="contact-icon-info">
                            <h5>Gọi cho chúng tôi ngay hôm nay</h5>
                            <p class="h7">(123) 456-789</p>
                        </div>
                    </div>
                </div>
                <!-- /contact-icon-->
                <div class="col-lg-6 mt-5">
                    <div class="contact-icon">
                        <!---icon-->
                        <i class="fa fa-heart top-icon"></i>
                        <!-- contact-icon info-->
                        <div class="contact-icon-info">
                            <h5>Theo dõi chúng tôi trên MXH</h5>
                            <ul class="social-media">
                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /contact-icon-->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /Section ends -->
    <!-- /page -->
    <div id="paypal-button-container"></div>
@endsection
