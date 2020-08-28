@extends('user.layouts.master')
@section('title')
    News
@endsection
@section('specific_css')
    <style>
        a:hover {
            color: black;
        }

        h2 {
            border-bottom: 1px solid rgba(0, 0, 0, .125);
        }
    </style>
@endsection
{{--@section('specific_js')--}}
{{--    <script>--}}
{{--        $(function () {--}}

{{--            var $sidebar = $("#sidebar"),--}}
{{--                $window = $(window),--}}
{{--                offset = $sidebar.offset(),--}}
{{--                topPadding = 120;--}}

{{--            $window.scroll(function () {--}}
{{--                if ($window.scrollTop() > offset.top) {--}}
{{--                    $sidebar.stop().animate({--}}
{{--                        marginTop: $window.scrollTop() - offset.top + topPadding--}}
{{--                    });--}}
{{--                } else {--}}
{{--                    $sidebar.stop().animate({--}}
{{--                        marginTop: 0--}}
{{--                    });--}}
{{--                }--}}
{{--            });--}}

{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid overlay">
        <div class="jumbo-heading">
            <!-- section-heading -->
            <div class="section-heading" data-aos="zoom-in">
                <h1>Tin Tức</h1>
            </div>
            <!-- /section-heading -->
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
                </ol>
            </nav>
        </div>
        <!-- /jumbo-heading -->
    </div>
    <!-- /jumbotron -->
    <!-- ==== Page Content ==== -->
    <div id="blog-home" class="page">
        <div class="container">
            <div class="row">
                <!-- Blog Entries Column -->
                <div class="col-lg-8">
                    <h2>Tin tức</h2>
                    <!-- Blog Post -->
                    @foreach ( $news as $new)
                        <div class="card blog-card">
                            <!-- Post info-->
                            <div class="post-info border-irregular2 text-muted">
                                {{date("d/m/Y", strtotime($new->created_at))}} bởi
                                <span style="color: #48A06A">{{$new->Author}}</span>
                            </div>
                            <a href="blog-single.html">
                                <!-- image -->
                                <img class="card-img-top img-fluid" src="{{$new->FirstThumbnail}}" alt="">
                            </a>
                            <div class="card-body">
                                <a href="blog-single.html">
                                    <h3 class="card-title">{{$new->Title}}</h3>
                                </a>
                                <!-- excerpt -->
                                {{--                                <p class="card-text mt-3">{{$new->Content}}</p>--}}
                                <a href="blog-single.html" class="btn btn-primary">Đọc thêm &rarr;</a>
                            </div>
                            <!--card-footer -->
                        </div>
                @endforeach
                <!-- /card blog-card -->
                    <div class="col-md-12 mt-5">
                        <!-- pagination -->
                        <nav aria-label="pagination">
                            {{--                            <ul class="pagination float-right">--}}
                            {{--                                <li class="page-item"><a class="page-link active" href="#">1</a></li>--}}
                            {{--                                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                            {{--                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                            {{--                                <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
                            {{--                            </ul>--}}
                            {{$news->links()}}
                        </nav>
                        <!-- /nav -->
                    </div>
                    <!-- /col-md -->
                </div>
                <!-- Sidebar Widgets Column -->
                <div class="blog-sidebar bg-light-custom  h-50 border-irregular1 col-lg-4" id="sidebar">
                    <!-- Search Widget -->
                    <div class="card">
                        <h5 class="card-header">Tìm kiếm</h5>
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="...">
                                <span class="input-group-btn">
                           <button class="btn btn-secondary" type="button">Go!</button>
                           </span>
                            </div>
                        </div>
                    </div>
                    <!-- Categories Widget -->
                    <div class="card">
                        <h5 class="card-header">Chuyên mục</h5>
                        <div class="card-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">
                                    Pet Training
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">Veterinarian</a>
                                <a href="#" class="list-group-item list-group-item-action">Pet Hotel</a>
                                <a href="#" class="list-group-item list-group-item-action">Vaccines</a>
                            </div>
                        </div>
                    </div>
                    <!-- Side Widget -->
                {{--                    <div class="card">--}}
                {{--                        <h5 class="card-header">Image Widget</h5>--}}
                {{--                        <div class="card-body">--}}
                {{--                            <img src="{{asset('assets/user/img/gallery/gallery1.jpg')}}" class="img-fluid" alt=""/>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                <!-- Side Widget -->
                    {{--                    <div class="card">--}}
                    {{--                        <h5 class="card-header">Tags</h5>--}}
                    {{--                        <div class="card-body">--}}
                    {{--                            <a href="#" class="badge badge-pill badge-default">Dogs</a>--}}
                    {{--                            <a href="#" class="badge badge-pill badge-default">Cats</a>--}}
                    {{--                            <a href="#" class="badge badge-pill badge-default">Nutrition</a>--}}
                    {{--                            <a href="#" class="badge badge-pill badge-default">Events</a>--}}
                    {{--                            <a href="#" class="badge badge-pill badge-default">Exotic pets</a>--}}
                    {{--                            <a href="#" class="badge badge-pill badge-default">Adoption</a>--}}
                    {{--                            <a href="#" class="badge badge-pill badge-default">Pet Insurance</a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /page -->
@endsection