@extends('layouts.homepage')

@section('style')
<style>

.portfolio-item {
    padding: 15px;
    border-radius: 5px;
}
.categories .type .active {
    font-size: 18px;
}
#tf-team .item .thumbnail:hover > img.img-circle.team-img {
    cursor: pointer;
}
a {
  outline:none !important;
}
</style>
@endsection

@section('content')
    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1 style="cursor: default;">Airlangga Medical Scientific Week<br><strong><span class="color">AMSW<br></span> <?php echo date('Y'); ?></strong></h1>
                {{-- <img src="{{asset('amsw-files/logo-fix-transparan-small.png')}}" style="height: 200px; width: auto;"> --}}
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
                    <img src="{{asset('amsw-files/image-shadow.png')}}" class="img-responsive wow slideInLeft js-tilt" data-wow-duration="1s" width="70%" style="margin: auto;">
                    {{-- <img src="{{asset('new-homepage/img/02.png')}}" > --}}
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title wow fadeInUp" data-wow-duration="2s">
                            <h4>About us</h4>
                            <h2>Some words <strong>about us</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro text-justify">
                            Airlangga Medical Scientific Week (<strong>AMSW</strong>) is an annual scientific event held by the Faculty of Medicine Airlangga University. AMSW opens opportunities for medical students in Indonesia and around the world to submit their works in the form of research papers, literature reviews, scientific essays, public posters and education videos. We are also holding non-competition programs like International Symposium (open for public), Gala dinner, and City tour.
                        </p>
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
    <!-- Portfolio Section
    ==========================================-->
    <div id="tf-works">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
                <h2>Take a look at <strong>our competitions</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
               <p>
                Integer ac nulla sit amet orci vehicula ornare vitae ut ipsum. Suspendisse elit nisi, egestas a fermentum vitae, gravida nec sapien. Maecenas quis massa ut augue elementum placerat quis vestibulum metus. Nunc at lobortis nibh. Aliquam fermentum finibus feugiat. Nunc elit nibh, luctus a nulla sit amet, cursus posuere justo.
               </p>
            </div>
            <div class="space"></div>

            <div class="categories">
                
                <ul class="cat">
                    <li class="pull-left"><h4>Competition Branches</h4></li>
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
                {{-- <div class="col-sm-6 col-md-3 col-lg-3 paper">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <div>
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/01.jpg')}}" class="img-responsive" alt="...">
                            </div>
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
                </div> --}}                                        
                <div class="col-sm-6 col-md-3 col-lg-3 paper">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Research Paper</h4>
                                    {{-- <small>Branding</small> --}}
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
                                    <h4>Research Paper</h4>
                                    {{-- <small>Branding</small> --}}
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/04.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 paper">
                        <h4 class="title" style="font-weight: bold">Research Paper</h4>
                        <div class="portfolio-item paper">
                            <div>
                                <p class="text-justify">
                                    Research Paper is paper competition in the form of abstract in the preliminary round. Abstract is based on research result, and closed for original research, case report, analytical study, even meta-analysis. This competition is intended to facillitate young researchers from all health major to express their idea to establish approaches especially in tropical disease’s eradication and widespread control. So, we invite active pre-clinical and clinical undergraduate student in health major around the world to challenge their work here.
                                </p>
                                <a href="#">Download Guideline</a>
                                <p>Contact Person:</p>
                                <ul>
                                    <li>ID Line: juliana_kuroba</li>
                                    <li>Phone: +6282388419600</li>
                                </ul>
                            </div>                        
                        </div>
                    </div>


                <!-- ===========================================================================================-->
                <div class="col-sm-6 col-md-3 col-lg-3 litrev">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="#">
                                    <div class="hover-text">
                                        <h4>Literature Review</h4>
                                        {{-- <small>Branding</small> --}}
                                        <div class="clearfix"></div>
                                    </div>
                                    <img src="{{asset('new-homepage/img/portfolio/03.jpg')}}" class="img-responsive" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 litrev">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="#">
                                    <div class="hover-text">
                                        <h4>Literature Review</h4>
                                        {{-- <small>Branding</small> --}}
                                        <div class="clearfix"></div>
                                    </div>
                                    <img src="{{asset('new-homepage/img/portfolio/04.jpg')}}" class="img-responsive" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-6 col-md-6 col-lg-6 litrev">
                        <h4 class="title" style="font-weight: bold">Literature Review</h4>
                        <div class="portfolio-item litrev">
                            <div>
                                <p class="text-justify">
                                    Literature Review is both a summary and explanation of the complete and current state of knowledge on a limited topic as found in academic books and journal articles. It is important to formulate a research afterward. Many great inventions are discovered from a good literature review. So it is a great chance for you who have brilliant idea to overcome problems in medical field. It is open for international pre-clinical undergraduate student in health major.
                                </p>
                                <a href="#">Download Guideline</a>
                                <p>Contact Person:</p>
                                <ul>
                                    <li>ID Line: rakaihsanulhaj</li>
                                    <li>Phone: +6287878425284</li>
                                </ul>
                            </div>                        
                        </div>
                    </div>
                <!-- ===========================================================================================-->
                <div class="col-sm-6 col-md-3 col-lg-3 essay">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Scientific Essay</h4>
                                    {{-- <small>Branding</small> --}}
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
                                    <h4>Scientific Essay</h4>
                                    {{-- <small>Branding</small> --}}
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/08.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 essay">
                        <h4 class="title" style="font-weight: bold">Scientific Essay</h4>
                        <div class="portfolio-item essay">
                            <div>
                                <p class="text-justify">
                                    An essay is, generally, a piece of writing that gives the author’s own argument about an issue. Scientific essay limit the argument to be evidence-based. It is made in order to enrich our knowledge in science and technology and to see problems from holistic perspective. It is open for national participants.                                                 
                                </p>
                                <a href="#">Download Guideline</a>
                                <p>Contact Person:</p>
                                <ol>
                                    <li>ID Line: naila_adibah </li>
                                    <li>Phone: +6285655309020</li>
                                </ol>

                            </div>                        
                        </div>
                    </div>
                <!-- ===========================================================================================-->
                <div class="col-sm-6 col-md-3 col-lg-3 pubpos">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Public Poster</h4>
                                    {{-- <small>Branding</small> --}}
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
                                    <h4>Public Poster</h4>
                                    {{-- <small>Branding</small> --}}
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/01.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 pubpos">
                    <h4 class="title" style="font-weight: bold">Public Poster</h4>
                    <div class="portfolio-item pubpos">
                        <div>
                            <p class="text-justify">
                                <strong>Public poster</strong> is a public piece of paper conveying information through text, graphic, or image. It is very useful to help Indonesian government in the form of healthcare promotion and prevention. Be free to express your idea in any creative way possible. Public poster is open for national participants.
                            </p>
                            <a href="#">Download Guideline</a>
                            <p>Contact Person:</p>
                            <ol>
                                <li>ID Line: aryaiv </li>
                                <li>Phone: +62895335227998</li>                                                                
                            </ol>
                        </div>                        
                    </div>
                </div>
                <!-- ===========================================================================================-->
                <div class="col-sm-6 col-md-3 col-lg-3 videdu">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Educational Video</h4>
                                    {{-- <small>Branding</small> --}}
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
                                    <h4>Educational Video</h4>
                                    {{-- <small>Branding</small> --}}
                                    <div class="clearfix"></div>
                                </div>
                                <img src="{{asset('new-homepage/img/portfolio/03.jpg')}}" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 videdu">
                    <h4 class="title" style="font-weight: bold">Educational Video</h4>
                    <div class="portfolio-item videdu">
                        <div>
                            <p class="text-justify">
                                Nullam sit amet mattis est. Aliquam justo magna, egestas et pellentesque sit amet, fermentum ut arcu. Proin eu dignissim sem. Vivamus vehicula augue ligula, ornare rutrum nisi facilisis vel. Ut fermentum nisi tempus dolor finibus vulputate. Sed molestie scelerisque tortor, nec lobortis arcu vehicula eu. Mauris vitae lacus lorem. 
                            </p>
                            <a href="#">Download Guideline</a>
                            <p>Contact Person:</p>
                            <ol>
                                Nullam sit amet mattis est. Aliquam justo magna                                                      
                            </ol>
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
                    <h2><strong>Our participants'</strong> testimonials</h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="testimonial" class="owl-carousel owl-theme">
                            <div class="item">
                                <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                                <p><strong>Dean Martin</strong>, 2018</p>
                            </div>

                            <div class="item">
                                <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                                <p><strong>Dean Martin</strong>, 2018</p>
                            </div>

                            <div class="item">
                                <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                                <p><strong>Dean Martin</strong>, 2018</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>Events <strong>Timeline</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <section class="cd-h-timeline js-cd-h-timeline margin-bottom--md" style="display: block;">
            <div class="cd-h-timeline__container containerss">
              <div class="cd-h-timeline__dates">
                <div class="cd-h-timeline__line">
                  <ol style="list-style: none;">
                    <li><a href="#0" data-date="19/05/2019" class="cd-h-timeline__date cd-h-timeline__date--selected">May 19, 2019</a></li>
                    <li><a href="#0" data-date="09/06/2019" class="cd-h-timeline__date">June 9, 2019</a></li>
                    <li><a href="#0" data-date="06/08/2019" class="cd-h-timeline__date">August 6, 2019</a></li>
                    <li><a href="#0" data-date="04/09/2019" class="cd-h-timeline__date">September 4, 2019</a></li>
                    <li><a href="#0" data-date="11/10/2019" class="cd-h-timeline__date">October 11, 2019</a></li>
                    <li><a href="#0" data-date="12/10/2019" class="cd-h-timeline__date">October 12, 2019</a></li>
                    <li><a href="#0" data-date="13/10/2019" class="cd-h-timeline__date">Ocotber 13, 2019</a></li>
                  </ol>

                  <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
                </div> <!-- .cd-h-timeline__line -->
              </div> <!-- .cd-h-timeline__dates -->
                
              <ul style="list-style: none;">
                <li><a href="#0" class="text--replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Prev</a></li>
                <li><a href="#0" class="text--replace cd-h-timeline__navigation cd-h-timeline__navigation--next">Next</a></li>
              </ul>
            </div> <!-- .cd-h-timeline__containerss -->

            <div class="cd-h-timeline__events">
              <ol style="list-style: none;">
                <li class="cd-h-timeline__event cd-h-timeline__event--selected text-component">
                  <div class="cd-h-timeline__event-content containerss">
                    {{-- <h2 class="cd-h-timeline__event-title">Horizontal Timeline</h2> --}}
                    <em class="cd-h-timeline__event-date">May 19th, 2019</em>
                    <p class="cd-h-timeline__event-description text--subtle"> 
                      First Waves Registration
                    </p>
                  </div>
                </li>
                <li class="cd-h-timeline__event text-component">
                  <div class="cd-h-timeline__event-content containerss">
                    {{-- <h2 class="cd-h-timeline__event-title">Horizontal Timeline</h2> --}}
                    <em class="cd-h-timeline__event-date">June 9th, 2019</em>
                    <p class="cd-h-timeline__event-description text--subtle"> 
                      Second Waves Registration
                    </p>
                  </div>
                </li>
                <li class="cd-h-timeline__event text-component">
                  <div class="cd-h-timeline__event-content containerss">
                    {{-- <h2 class="cd-h-timeline__event-title">Horizontal Timeline</h2> --}}
                    <em class="cd-h-timeline__event-date">August 6th, 2019</em>
                    <p class="cd-h-timeline__event-description text--subtle"> 
                      Deadline
                    </p>
                  </div>
                </li>
                <li class="cd-h-timeline__event text-component">
                  <div class="cd-h-timeline__event-content containerss">
                    {{-- <h2 class="cd-h-timeline__event-title">Horizontal Timeline</h2> --}}
                    <em class="cd-h-timeline__event-date">September 4th, 2019</em>
                    <p class="cd-h-timeline__event-description text--subtle"> 
                      Finalist Announcement
                    </p>
                  </div>
                </li>
                <li class="cd-h-timeline__event text-component">
                  <div class="cd-h-timeline__event-content containerss">
                    {{-- <h2 class="cd-h-timeline__event-title">Horizontal Timeline</h2> --}}
                    <em class="cd-h-timeline__event-date">October 11th, 2019</em>
                    <p class="cd-h-timeline__event-description text--subtle"> 
                      Technical Meeting
                    </p>
                  </div>
                </li>
                <li class="cd-h-timeline__event text-component">
                  <div class="cd-h-timeline__event-content containerss">
                    {{-- <h2 class="cd-h-timeline__event-title">Horizontal Timeline</h2> --}}
                    <em class="cd-h-timeline__event-date">October 12th, 2019</em>
                    <p class="cd-h-timeline__event-description text--subtle"> 
                      Final Round
                    </p>
                  </div>
                </li>
                <li class="cd-h-timeline__event text-component">
                  <div class="cd-h-timeline__event-content containerss">
                    {{-- <h2 class="cd-h-timeline__event-title">Horizontal Timeline</h2> --}}
                    <em class="cd-h-timeline__event-date">October 13th, 2019</em>
                    <p class="cd-h-timeline__event-description text--subtle"> 
                      Winner Announcement and Awarding
                    </p>
                  </div>
                </li>
              </ol>
            </div> <!-- .cd-h-timeline__events -->
        </section>
    </div>
@endsection

@section('script')
@endsection