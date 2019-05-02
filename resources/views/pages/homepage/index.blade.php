@extends('layouts.homepage')

@section('content')
    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Airlangga Medical Scientific Week<br><strong><span class="color">AMSW<br></span> <?php echo date('Y'); ?></strong></h1>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('new-homepage/img/02.png')}}" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h4>About us</h4>
                            <h2>Some words <strong>about us</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro text-justify">Airlangga Medical Scientific Week (AMSW) is an annual scientific event held by the Faculty of Medicine Airlangga University. AMSW opens opportunities for medical students in Indonesia and Around the world to submit their works in the form of research papers, literature reviews, scientific essays, and public posters. We are also holding non competition programs like International Symposium (open for public),hospitality night,Introduction of Institute of Tropical Disease and city tour. This year,we are collaborated with Asia Pasific Conference on problem based-learning in Health Science and Higher Education.</p>
{{--                         <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Mission</strong> - <em>We deliver uniqueness and quality</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Skills</strong> - <em>Delivering fast and excellent results</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Clients</strong> - <em>Satisfied clients thanks to our experience</em>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>Meet <strong>our team</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">
                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{asset('new-homepage/img/team/01.jpg')}}" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{asset('new-homepage/img/team/02.jpg')}}" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{asset('new-homepage/img/team/03.jpg')}}" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{asset('new-homepage/img/team/04.jpg')}}" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{asset('new-homepage/img/team/04.jpg')}}" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{asset('new-homepage/img/team/01.jpg')}}" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{asset('new-homepage/img/team/02.jpg')}}" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="{{asset('new-homepage/img/team/03.jpg')}}" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Services Section
    ==========================================-->
{{--     <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Take a look at <strong>our Services</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-desktop"></i>
                    <h4><strong>Web</strong></h4>
                    <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-mobile"></i>
                    <h4><strong>Mobile App</strong></h4>
                    <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-camera"></i>
                    <h4><strong>Desktop</strong></h4>
                    <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-bullhorn"></i>
                    <h4><strong>IOS</strong></h4>
                    <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                </div>
            </div>
        </div>
    </div> --}}

{{--     <!-- Clients Section
    ==========================================-->
    <div id="tf-clients" class="text-center">
        <div class="overlay">
            <div class="container">

                <div class="section-title center">
                    <h2>Some of <strong>our Clients</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div id="clients" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{asset('new-homepage/img/client/01.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('new-homepage/img/client/02.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('new-homepage/img/client/03.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('new-homepage/img/client/04.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('new-homepage/img/client/05.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('new-homepage/img/client/06.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset('new-homepage/img/client/07.png')}}">
                    </div>
                </div>

            </div>
        </div>
    </div>
 --}}
    <!-- Portfolio Section
    ==========================================-->
    <div id="tf-works">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
                <h2>Take a look at <strong>our Events</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <p>Click the icon to download the guideline <a role="button" href="https://drive.google.com/file/d/1v5RDC9Nd60H51JdVORzIXihIGL2vUWHC/view" target="_blank" class="btn btn-secondary">Here</a>. <br>Check out our full official guideline
                For further information, contact our person for each competition branches below.</p>
            </div>
            <div class="space"></div>

            <div class="categories">
                
                <ul class="cat">
                    <li class="pull-left"><h4>Last year Euphoria</h4></li>
                    <li class="pull-right">
                        <ol class="type">
                            {{-- <li><a href="#" data-filter="*" class="active">All</a></li> --}}
                            <li id="researchPaper"><a href="#" data-filter=".paper" class="active">Research Paper</a></li>
                            <li><a href="#" data-filter=".litrev">Literature review</a></li>
                            <li><a href="#" data-filter=".essay" >Scientific essay</a></li>
                            <li><a href="#" data-filter=".pubpos" >Public Poster</a></li>
                            <li><a href="#" data-filter=".videdu" >Educational Video</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div id="lightbox" class="row">
                <!-- ===========================================================================================-->
                <div class="col-sm-6 col-md-3 col-lg-3 paper">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/01.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 paper">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/02.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 paper">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/03.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 paper">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/04.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ===========================================================================================-->
                <div class="col-sm-6 col-md-3 col-lg-3 litrev">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/05.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 litrev">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/06.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 litrev">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/07.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 litrev">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/08.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ===========================================================================================-->
                <div class="col-sm-6 col-md-3 col-lg-3 essay">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/02.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 essay">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/01.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 essay">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/08.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 essay">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/03.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ===========================================================================================-->
                <div class="col-sm-6 col-md-3 col-lg-3 pubpos">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/06.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 pubpos">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/08.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 pubpos">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/01.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 pubpos">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/02.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ===========================================================================================-->
                <div class="col-sm-6 col-md-3 col-lg-3 videdu">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/04.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 videdu">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/03.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 videdu">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/01.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 videdu">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/02.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ===========================================================================================-->
            </div>
        </div>
    </div>

    <!-- Testimonials Section
    ==========================================-->
    <div id="tf-testimonials" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2><strong>Our clients’</strong> testimonials</h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="testimonial" class="owl-carousel owl-theme">
                            <div class="item">
                                <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                                <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                            </div>

                            <div class="item">
                                <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                                <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                            </div>

                            <div class="item">
                                <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                                <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section
    ==========================================-->
{{--     <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2>Feel free to <strong>contact us</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>            
                    </div>

                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn tf-btn btn-default">Submit</button>
                    </form>

                </div>
            </div>

        </div>
    </div> --}}
@endsection

@section('script')
@endsection