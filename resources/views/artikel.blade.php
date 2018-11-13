@extends('layouts.app-frontend2')

@section('content')
<!-- blog -->
<section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
    <div class="container">
        <div class="inner-sec-wthreelayouts py-lg-5  py-3">
            <h2 class="tittle text-center mb-lg-5 mb-3">
                Blog Posts</h2>
            <div class="row mt-lg-5 mt-md-4 mt-4">
                <!--left-->
                <div class="col-lg-8 left-blog-info text-left">
                    <div class="blog-in-con mb-4">
                        <div class="card">
                            <a href="single.html">
            <img src="images/banner1.jpg" class="img-fluid" alt="">
          </a>
                            <div class="card-body">
                                <ul class="blog-icons my-4">
                                    <li>
                                        <a href="#">
                  <i class="far fa-calendar-alt"></i> Feb 20 .2018</a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="#">
                  <i class="far fa-comment"></i> 21</a>
                                    </li>
                                    <li>
                                        <a href="#">
                  <i class="fas fa-eye"></i> 2000</a>
                                    </li>

                                </ul>
                                <h5 class="card-title ">
                                    <a href="single.html">Blog Post Title</a>
                                </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt. ultrices metus sit amet, cursus nisl. Duis aliquet varius sem sit amet tempus. Curabitur vitae dui bibendum.. </p>
                                <div class="read inner mt-4">
                                    <a href="single.html" class="btn btn-sm animated-button victoria-two">Read More</a>
                                </div>

                            </div>
                        </div>
                        <div class="card my-md-4 my-2">
                            <a href="single.html">
            <img src="images/banner2.jpg" class="img-fluid" alt="">
          </a>
                            <div class="card-body">
                                <ul class="blog-icons my-4">
                                    <li>
                                        <a href="#">
                  <i class="far fa-calendar-alt"></i> Feb 22 .2018</a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="#">
                  <i class="far fa-comment"></i> 21</a>
                                    </li>
                                    <li>
                                        <a href="#">
                  <i class="fas fa-eye"></i> 2000</a>
                                    </li>

                                </ul>
                                <h5 class="card-title ">
                                    <a href="single.html">Blog Post Title</a>
                                </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt. ultrices metus sit amet, cursus nisl. Duis aliquet varius sem sit amet tempus. Curabitur vitae dui bibendum.. </p>
                                <div class="read inner mt-4">
                                    <a href="single.html" class="btn btn-sm animated-button victoria-two">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="card my-4">
                            <a href="single.html">
            <img src="images/banner3.jpg" class="img-fluid" alt="">
          </a>
                            <div class="card-body">
                                <ul class="blog-icons my-4">
                                    <li>
                                        <a href="#">
                  <i class="far fa-calendar-alt"></i> Feb 23 .2018</a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="#">
                  <i class="far fa-comment"></i> 21</a>
                                    </li>
                                    <li>
                                        <a href="#">
                  <i class="fas fa-eye"></i> 2000</a>
                                    </li>

                                </ul>
                                <h5 class="card-title ">
                                    <a href="single.html">Blog Post Title</a>
                                </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt. ultrices metus sit amet, cursus nisl. Duis aliquet varius sem sit amet tempus. Curabitur vitae dui bibendum.. </p>
                                <div class="read inner mt-4">
                                    <a href="single.html" class="btn btn-sm animated-button victoria-two">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-left mt-4">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--//left-->
                <!--right-->
                <aside class="col-lg-4 right-blog-con text-left">
                    <div class="right-blog-info text-left">
                        <div class="tech-btm">
                            <img src="images/ab1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="tech-btm">
                            <h4>Sign up to our newsletter</h4>
                            <p>Pellentesque dui, non felis. Maecenas male </p>
                            <form action="#" method="post">
                                <input class="form-control" type="email" placeholder="Email" required="">
                                <input class="form-control" type="submit" value="Subscribe">
                            </form>

                        </div>
                        <div class="tech-btm">
                            <h4>Categories</h4>
                            <ul class="list-group single">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cras justo odio
                                    <span class="badge badge-primary badge-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Dapibus ac facilisis in
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Morbi leo risus
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tech-btm">
                            <h4>Top stories of the week</h4>

                            <div class="blog-grids row mb-3">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="single.html">
                <img src="images/ab8.jpg" class="img-fluid" alt="">
              </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">

                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                  <i class="far fa-clock"></i> 20 May, 2018</span>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-grids row mb-3">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="single.html">
                <img src="images/ab9.jpg" class="img-fluid" alt="">
              </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">
                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                  <i class="far fa-clock"></i> 20 June, 2018</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tech-btm widget_social text-left">
                            <h4>Stay Connect</h4>
                            <ul>

                                <li>
                                    <a class="twitter" href="#">
                <i class="fab fa-twitter"></i>
                <span class="count">317K</span> Twitter Followers</a>
                                </li>
                                <li>
                                    <a class="facebook" href="#">
                <i class="fab fa-facebook-f"></i>
                <span class="count">218k</span> Facebook Followers</a>
                                </li>
                                <li>
                                    <a class="dribble" href="#">
                <i class="fab fa-dribbble"></i>

                <span class="count">215k</span> Dribble Followers</a>
                                </li>
                                <li>
                                    <a class="pin" href="#">
                <i class="fab fa-pinterest"></i>
                <span class="count">190k</span> Pinterest Followers</a>
                                </li>

                            </ul>
                        </div>
                        <div class="tech-btm">
                            <h4>Recent Posts</h4>

                            <div class="blog-grids row mb-3 text-left">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="single.html">
                <img src="images/ab2.jpg" class="img-fluid" alt="">
              </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">

                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                  <i class="far fa-clock"></i> 20 May, 2018</span>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-grids row mb-3 text-left">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="single.html">
                <img src="images/ab3.jpg" class="img-fluid" alt="">
              </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">

                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                  <i class="far fa-clock"></i> 20 May, 2018</span>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="blog-grids row mb-3 text-left">
                                <div class="col-md-5 blog-grid-left">
                                    <a href="single.html">
                <img src="images/ab4.jpg" class="img-fluid" alt="">
              </a>
                                </div>
                                <div class="col-md-7 blog-grid-right">
                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                                    </h5>
                                    <div class="sub-meta">
                                        <span>
                  <i class="far fa-clock"></i> 20 June, 2018</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </aside>
                <!--//right-->

            </div>
        </div>
    </div>
</section>
<!-- //blog-->
@endsection
