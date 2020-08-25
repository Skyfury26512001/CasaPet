@extends('user.layouts.master')
@section('title')
    News
@endsection
@section('specific_css')
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
                    <h2>Tin tức về cứu hộ khẩn cấp</h2>
                    <!-- Blog Post -->
                    <div class="card blog-card">
                        <!-- Post info-->
                        <div class="post-info border-irregular2 text-muted">
                            January 1, 2018 by
                            <a href="#">Lila Smith</a> / <a href="#"><i class="fas fa-comment margin-icon"></i>10
                                comments</a>
                        </div>
                        <a href="blog-single.html">
                            <!-- image -->
                            <img class="card-img-top img-fluid" src="img/blog.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <a href="blog-single.html">
                                <h3 class="card-title">Everything you need to know before adopting a pet</h3>
                            </a>
                            <!-- excerpt -->
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita
                                corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a href="blog-single.html" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <!--card-footer -->
                    </div>
                    <!-- /card blog-card -->
                    <!-- Blog Post -->
                    <div class="card blog-card">
                        <div class="post-info  border-irregular2 text-muted">
                            January 1, 2018 by
                            <a href="#">Lila Smith</a> / <a href="#"><i class="fas fa-comment margin-icon"></i>10
                                comments</a>
                        </div>
                        <a href="blog-single.html">
                            <!-- image -->
                            <img class="card-img-top img-fluid" src="img/blog.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <a href="blog-single.html">
                                <h3 class="card-title">What are the most nutritious cat foods?</h3>
                            </a>
                            <!-- excerpt -->
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita
                                corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a href="blog-single.html" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <!--card-footer -->
                    </div>
                    <!-- /card blog-card -->
                    <!-- Blog Post -->
                    <div class="card blog-card">
                        <div class="post-info  border-irregular2 text-muted">
                            January 1, 2018 by
                            <a href="#">Lila Smith</a> / <a href="#"><i class="fas fa-comment margin-icon"></i>10
                                comments</a>
                        </div>
                        <a href="blog-single.html">
                            <!-- image -->
                            <img class="card-img-top img-fluid" src="img/blog.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <a href="blog-single.html">
                                <h3 class="card-title">The friendliest dog breeds for families</h3>
                            </a>
                            <!-- excerpt -->
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita
                                corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a href="blog-single.html" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <!--card-footer -->
                    </div>
                    <!-- /card blog-card -->
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
                <div class="col-lg-8">
                    <h2>Tin tức thường</h2>
                    <!-- Blog Post -->
                    <div class="card blog-card">
                        <!-- Post info-->
                        <div class="post-info border-irregular2 text-muted">
                            January 1, 2018 by
                            <a href="#">Lila Smith</a> / <a href="#"><i class="fas fa-comment margin-icon"></i>10
                                comments</a>
                        </div>
                        <a href="blog-single.html">
                            <!-- image -->
                            <img class="card-img-top img-fluid" src="img/blog.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <a href="blog-single.html">
                                <h3 class="card-title">Everything you need to know before adopting a pet</h3>
                            </a>
                            <!-- excerpt -->
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta
                                expedita
                                corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a href="blog-single.html" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <!--card-footer -->
                    </div>
                    <!-- /card blog-card -->
                    <!-- Blog Post -->
                    <div class="card blog-card">
                        <div class="post-info  border-irregular2 text-muted">
                            January 1, 2018 by
                            <a href="#">Lila Smith</a> / <a href="#"><i class="fas fa-comment margin-icon"></i>10
                                comments</a>
                        </div>
                        <a href="blog-single.html">
                            <!-- image -->
                            <img class="card-img-top img-fluid" src="img/blog.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <a href="blog-single.html">
                                <h3 class="card-title">What are the most nutritious cat foods?</h3>
                            </a>
                            <!-- excerpt -->
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta
                                expedita
                                corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a href="blog-single.html" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <!--card-footer -->
                    </div>
                    <!-- /card blog-card -->
                    <!-- Blog Post -->
                    <div class="card blog-card">
                        <div class="post-info  border-irregular2 text-muted">
                            January 1, 2018 by
                            <a href="#">Lila Smith</a> / <a href="#"><i class="fas fa-comment margin-icon"></i>10
                                comments</a>
                        </div>
                        <a href="blog-single.html">
                            <!-- image -->
                            <img class="card-img-top img-fluid" src="img/blog.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <a href="blog-single.html">
                                <h3 class="card-title">The friendliest dog breeds for families</h3>
                            </a>
                            <!-- excerpt -->
                            <p class="card-text mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta
                                expedita
                                corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a href="blog-single.html" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <!--card-footer -->
                    </div>
                    <!-- /card blog-card -->
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
                <!-- /col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /page -->
@endsection
