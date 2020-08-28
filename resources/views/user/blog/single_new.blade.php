@extends('user.layouts.master')
@section('title')
    Single News
@endsection
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
                    <li class="breadcrumb-item"><a href="{{route('news')}}">Tin tức</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$single_new->Title}}
                    </li>
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
                <!-- Post Content Column -->
                <div class="col-lg-8 card blog-card">
                    <div class="card-body">
                        <h3 class="card-title">{{$single_new->Title}}</h3>
                        <!-- Post info-->
                        <div class="post-info border-irregular2 text-muted">
                            {{date("d/m/Y", strtotime($single_new->created_at))}} bởi
                            <a href="#">{{$single_new->Author}}</a>
                        </div>
                        <hr>
                        <!-- Preview Image -->
                        <img src="{{$single_new->FirstThumbnail}}" class="img-fluid" alt="">
                        <hr>
                        <!-- Post Content -->
                        <p>{{$single_new->Content}}</p>
                        <!-- Comments Form -->
                    {{--                        <div class="card my-4 mt-5 bg-light-custom border-irregular1">--}}
                    {{--                            <h5 class="card-header">Leave a Comment:</h5>--}}
                    {{--                            <div class="card-body">--}}
                    {{--                                <form>--}}
                    {{--                                    <div class="form-group">--}}
                    {{--                                        <textarea class="form-control" rows="3"></textarea>--}}
                    {{--                                    </div>--}}
                    {{--                                    <button type="submit" class="btn btn-primary">Submit</button>--}}
                    {{--                                </form>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    <!-- Comment -->
                    {{--                        <div class="comment row mt-5">--}}
                    {{--                            <div class="col-md-3 col-xs-12 comment-img text-center float-left">--}}
                    {{--                                <img class="rounded-circle img-fluid m-x-auto" src="img/team/team1.jpg" alt="">--}}
                    {{--                            </div>--}}
                    {{--                            <!-- /col-md -->--}}
                    {{--                            <div class="col-md-9 col-xs-12 float-right">--}}
                    {{--                                <h6 class="mt-2"><a href="">Luisa Smith</a> <small>says:</small></h6>--}}
                    {{--                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante--}}
                    {{--                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.--}}
                    {{--                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in--}}
                    {{--                                    faucibus.</p>--}}
                    {{--                                <button type="submit" class="btn btn-primary btn-sm float-right">Reply</button>--}}
                    {{--                            </div>--}}
                    {{--                            <!--/media-body -->--}}
                    {{--                        </div>--}}
                    <!--/Comment -->
                        <!-- Comment -->
                        {{--                        <div class="comment row">--}}
                        {{--                            <div class="col-md-3 col-xs-12 comment-img text-center float-left">--}}
                        {{--                                <img class="rounded-circle img-fluid m-x-auto" src="img/team/team2.jpg" alt="">--}}
                        {{--                            </div>--}}
                        {{--                            <!-- /col-md -->--}}
                        {{--                            <div class="col-md-9 col-xs-12 float-right">--}}
                        {{--                                <h6 class="mt-2"><a href="">John Doe</a> <small>says:</small></h6>--}}
                        {{--                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante--}}
                        {{--                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.--}}
                        {{--                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in--}}
                        {{--                                    faucibus.</p>--}}
                        {{--                                <button type="submit" class="btn btn-primary btn-sm float-right">Reply</button>--}}
                        {{--                            </div>--}}
                        {{--                            <!--/media-body -->--}}
                        {{--                        </div>--}}
                        {{--                        <!--/Comment -->--}}
                        {{--                        <!-- Single Comment -->--}}
                        {{--                        <div class="comment row">--}}
                        {{--                            <div class="col-md-3 col-xs-12 comment-img text-center float-left">--}}
                        {{--                                <img class="rounded-circle img-fluid m-x-auto" src="img/team/team3.jpg" alt="">--}}
                        {{--                            </div>--}}
                        {{--                            <!-- /col-md -->--}}
                        {{--                            <div class="col-md-9 col-xs-12 float-right">--}}
                        {{--                                <h6 class="mt-2"><a href="">Mia Kelly</a> <small>says:</small></h6>--}}
                        {{--                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante--}}
                        {{--                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.--}}
                        {{--                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in--}}
                        {{--                                    faucibus.</p>--}}
                        {{--                                <button type="submit" class="btn btn-primary btn-sm float-right">Reply</button>--}}
                        {{--                            </div>--}}
                        {{--                            <!--/media-body -->--}}
                        {{--                        </div>--}}
                        {{--                        <!--/Comment -->--}}
                    </div>
                    <!--/Card-body -->
                </div>
                <!-- /col-lg -->
                <!-- Sidebar Widgets Column -->
                <div class="blog-sidebar bg-light-custom  h-50 border-irregular1 col-lg-4">
                    <!-- Search Widget -->
                    <div class="card">
                        <h5 class="card-header">Search</h5>
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                           <button class="btn btn-secondary" type="button">Go!</button>
                           </span>
                            </div>
                        </div>
                    </div>
                    <!-- Categories Widget -->
                    <div class="card">
                        <h5 class="card-header">Categories</h5>
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
                    <div class="card">
                        <h5 class="card-header">Image Widget</h5>
                        <div class="card-body">
                            <img src="img/gallery/gallery1.jpg" class="img-fluid" alt=""/>
                        </div>
                    </div>
                    <!-- Side Widget -->
                    <div class="card">
                        <h5 class="card-header">Tags</h5>
                        <div class="card-body">
                            <a href="#" class="badge badge-pill badge-default">Dogs</a>
                            <a href="#" class="badge badge-pill badge-default">Cats</a>
                            <a href="#" class="badge badge-pill badge-default">Nutrition</a>
                            <a href="#" class="badge badge-pill badge-default">Events</a>
                            <a href="#" class="badge badge-pill badge-default">Exotic pets</a>
                            <a href="#" class="badge badge-pill badge-default">Adoption</a>
                            <a href="#" class="badge badge-pill badge-default">Pet Insurance</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /page -->
@endsection
