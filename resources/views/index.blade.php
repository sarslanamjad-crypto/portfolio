<!DOCTYPE html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.html">
    <link rel="icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <meta name="theme-color" content="#000">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,700,700i,900,900i|Lato:300,400,500,600,700:Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/pagePiling/jquery.pagepiling.min.css">
    <link rel="stylesheet" href="css/main.min.css">
    <title>My Personal Portfolio Website</title>
    <!-- Gnusmas - Agency, Corporate, Studio Minamal Landing Page -->
    <meta name="description" content="">
  </head>
  <body>
    <div class="alx-scroll-wrap">
      <!--Content STARTs-->
      <div id="alx-preloader">
        <div class="cssload-thecube">
          <div class="cssload-cube cssload-c1"></div>
          <div class="cssload-cube cssload-c2"></div>
          <div class="cssload-cube cssload-c4"></div>
          <div class="cssload-cube cssload-c3"></div>
        </div>
      </div>
      <header>
        <div class="alx-logo"></div>
        <div class="alx-right-wrap">
          <div class="alx-social-links">
            <ul>
              <li><a href="https://www.linkedin.com/in/arslan-amjad-b941bb352/"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://github.com/sarslanamjad-crypto"><i class="fa fa-github"></i></a></li>
            </ul>
          </div><a class="alx-burger" href="#"><span></span></a>
        </div>
      </header>
      <div id="alx-pagepiling">
        <section class="alx-vertical-middle pp-scrollable alx-bg-img" data-image="images/bgr.jpg" data-tooltipsection="First screen">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="alx-heading alx-text-center">
                  <h1 class="alx-heading__title">{{ $settings['hero_title'] ?? 'Developer / Freelancer' }}</h1>
                  <div class="alx-heading__pretitle"><i class="fa fa-camera-retro"></i>{{ $settings['hero_subtitle'] ?? 'Arslan Amjad' }} </div>
                  <div class="alx-heading__zigzag">
                    <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                      <g>
                        <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                      </g>
                    </svg>
                  </div>
                  <div class="alx-heading__description">{{ $settings['hero_description'] ?? 'Welcome to my dynamic portfolio website.' }}</div>
                </div>
                <div class="alx-btns-section alx-text-center"><a class="alx-btn" href="#page6">My Portfolio</a></div>
              </div>
              <div class="col-lg-6 offset-lg-1"></div>
            </div>
          </div>
          <canvas class="alx-canvas" id="pretty-bg"></canvas>
        </section>
        <section class="alx-vertical-middle alx-dark-section pp-scrollable alx-bg-img" data-image="images/bgd1.jpg">
          <div class="alx-vertical-heading"><i class="fa fa-question-circle-o"></i>Who i’m</div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 order-lg-12">
                <div class="alx-person-image alx-dots-style"><img class="img-responsive alx-tilt" src="{{ asset($settings['profile_image'] ?? 'images/prof.jpeg') }}" alt="">
                  <h3 class="alx-person-image__title alx-text-center">1 Year of Experience</h3>
                </div>
              </div>
              <div class="col-lg-6 alx-style" data-style="margin: 50px 0">
                <div class="alx-heading">
                  <h2 class="alx-heading__title">About Me</h2>
                  <div class="alx-heading__zigzag">
                    <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                      <g>
                        <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                      </g>
                    </svg>
                  </div>
                  <div class="alx-heading__description">{{ $settings['about_description'] ?? 'I have much experience in developing web software.' }}</div>
                  <div class="alx-heading__pretitle alx-style" data-style="margin-top: 20px"><i class="fa fa-diamond"></i>My code always High Quality, Hand-Coded</div>
                </div><a class="alx-btn alx-btn-primary" href="#page6">Become my client</a>
              </div>
            </div>
          </div>
        </section>
        <section class="alx-vertical-middle pp-scrollable alx-bg-img" data-image="images/bg2.jpg" data-tooltipsection="Second screen">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-5 alx-style" data-style="margin: 50px 0">
                <div class="alx-heading">
                  <div class="alx-heading__pretitle"><i class="fa fa-diamond"></i>My Specializations</div>
                  <h2 class="alx-heading__title">My Best Services</h2>
                  <div class="alx-heading__zigzag">
                    <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                      <g>
                        <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                      </g>
                    </svg>
                  </div>
                  <div class="alx-heading__description">In my work I using a variety of techniques and instruments like: HTML5, CSS3, Responsive Design, Bootstrap Framework. I'm using the latest technologies and the latest trends in web development like laravel as a backend framework.</div>
                </div><a class="alx-btn" href="#page6">Start a project</a>
              </div>
              <div class="col-lg-6 offset-lg-1">
                <div class="alx-services alx-dots-style" data-interval="7000">
                  <div class="alx-services__container">
                    @foreach($services as $service)
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap">
                        <div class="alx-services__item__main"><i class="fa {{ $service->icon_class }}"></i>
                          <h4 class="alx-services__item__title">{{ $service->title }}</h4>
                        </div>
                        <div class="alx-services__item__description">{{ $service->description }}</div>
                        <div class="alx-services__item__opacityicon"><i class="fa {{ $service->icon_class }}"></i></div>
                      </div>
                    </div>
                    @endforeach
                  </div>


                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="alx-vertical-middle pp-scrollable alx-dark-section alx-bg-img" data-image="images/bgd3.jpg">
          <div class="alx-vertical-heading"><i class="fa fa-code"></i>What i do</div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5 alx-style" data-style="margin: 50px 0">
                <div class="alx-heading">
                  <h2 class="alx-heading__title">My Skills</h2>
                  <div class="alx-heading__zigzag">
                    <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                      <g>
                        <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                      </g>
                    </svg>
                  </div>
                  <div class="alx-heading__description">I do my job well and on time - Driven by unshakable principles, not just profit.<br><strong>Just check my portfolio and let's work together!</strong></div>
                </div>
                <div class="alx-skills-list">
                  <ul>
                    @php
                        $n_skills = explode(',', $settings['numbered_skills'] ?? 'PSD TO HTML RESPONSIVE, SEO OPTIMIZATION, Fully Responsive design, Promo Pages Designs');
                    @endphp
                    @foreach($n_skills as $index => $item)
                        <li><span>0{{ $index + 1 }}</span>{{ trim($item) }}</li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="col-lg-5 offset-lg-2 align-self-center">
                @foreach($skills as $skill)
                <div class="alx-skills">
                  <div class="alx-skills__header">
                    <div class="alx-skills__title">{{ $skill->name }}</div>
                    <div class="alx-skills__count">{{ $skill->percent }}%</div>
                  </div>
                  <div class="alx-skills__body">
                    <div class="alx-skills__bar" data-skills="{{ $skill->percent }}%"></div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </section>
        
        <section class="alx-vertical-middle pp-scrollable alx-dark-section alx-bg-img" data-image="images/bgd3.jpg">
          <div class="alx-vertical-heading"><i class="fa fa-rocket"></i>My Latest best Works</div>
          <div class="container">
            <div class="col-lg-12">
              <ul class="alx-portfolio-control alx-portfolio__nav alx-text-left">
                <li class="alx-active" data-filter="*">All</li>
                <!-- <li data-filter=".alx-f-branding">Branding</li>
                <li data-filter=".alx-f-web">Web</li>
                <li data-filter=".alx-f-graphic">Graphic</li>
                <li data-filter=".alx-f-logo">Logo</li>
                <li data-filter=".alx-f-photography"> Photography</li> -->
              </ul>
            </div>
            <div class="alx-portfolio-items alx-layout-isotope alx-isotope-gap" data-grid="4">
              @foreach($projects as $project)
              <div class="alx-isotope-item {{ $project->category }}">
                <div class="alx-portfolio-item alx-portfolio-item__style1"><a href="{{ url('/project/'.$project->id) }}"></a>
                  <div class="alx-portfolio-item-image">
                    <div class="alx-bg-img" data-image="/backend/images/projects/{{ $project->image }}"></div>
                  </div>
                  <div class="alx-portfolio-item-details">
                    <h4>{{ $project->title }}</h4>
                    <p>{{ $project->category }}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </section>

        <section class="alx-vertical-middle pp-scrollable alx-bg-img" data-image="images/bgl5.jpg">
          <div class="alx-vertical-heading"><i class="fa fa-bell-o"></i>Contact with me</div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <div class="alx-heading">
                  <h2 class="alx-heading__title">Say Hello</h2>
                  <div class="alx-heading__zigzag">
                    <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                      <g>
                        <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 								40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="alx-services alx-services__partners alx-dots-style" data-interval="4000">
                  <div class="alx-services__container">
                    @foreach($partners as $partner)
                    <div class="alx-services__item">
                      <div class="alx-services__item__wrap"><img src="/backend/images/partners/{{ $partner->image }}" style="max-height:80px;" alt="{{ $partner->name }}"></div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="alx-icon">
                  <div class="alx-icon__icon"><span><i class="fa fa-phone"></i></span></div>
                  <div class="alx-icon__text">
                    <h5>Call Me Anytime</h5>
                    <p>{{ $settings['contact_phone'] ?? '+754-554-54-34' }}</p>
                  </div>
                </div>
                <div class="alx-icon">
                  <div class="alx-icon__icon"><span><i class="fa fa-envelope"></i></span></div>
                  <div class="alx-icon__text">
                    <h5>Email me</h5><a href="mailto:{{ $settings['contact_email'] ?? 'hello@example.com' }}"><span>{{ $settings['contact_email'] ?? 'hello@example.com' }}</span></a>
                  </div>
                </div>
                <div class="alx-icon">
                  <div class="alx-icon__icon"><span><i class="fa fa-home"></i></span></div>
                  <div class="alx-icon__text">
                    <h5>Address</h5>
                    <p>{{ $settings['contact_address'] ?? '445 Mount Eden Road' }}</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <form class="alx-contact-form" action="{{ route('contact.store') }}" method="POST">
                  @csrf
                  @if(session('success'))
                    <div class="alx-success-msg">
                      <p>{{ session('success') }}</p>
                    </div>
                  @endif
                  @if($errors->any())
                    <div class="alx-error-msg">
                      <ul>
                        @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="alx-input-group">
                        <input name="name" type="text" value="{{ old('name') }}" required placeholder="Your Name *"><i class="fa fa-user-o"></i>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="alx-input-group">
                        <input name="email" type="email" value="{{ old('email') }}" required placeholder="Your Email *"><i class="fa fa-at"></i>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="alx-input-group">
                        <input name="subject" type="text" value="{{ old('subject') }}" placeholder="Subject (optional)"><i class="fa fa-bookmark-o"></i>
                        <textarea name="message" rows="6" required placeholder="Message *">{{ old('message') }}</textarea><i class="fa fa-commenting-o"></i>
                      </div>
                      <div class="alx-success-msg hide">
                        <p>Message has been send successfully</p>
                      </div>
                      <button type="submit" class="alx-btn">Send a Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="alx-lang-change">
        <ul>
          <li class="current-lang"><a href="#">Eng</a></li>
        </ul>
      </div>
      <div class="alx-copyright">
        <p><span>©</span>copyright</p>
      </div>
    </div>
    <!--Content END-->
    <aside class="alx-aside-sidebar alx-aside-sidebar__dark alx-bg-img" id="alx-sidebar" data-image="images/bg2_blur.jpg">
      <div class="alx-lang-change">
        <ul>
          <li class="current-lang"><a href="#">Eng</a></li>
        </ul>
      </div><a class="alx-burger alx-burger__open" href="#"><span></span></a>
      <div class="alx-sidebar-widget">
        <h5>HELLO THERE!</h5><img class="img-responsive" src="{{ asset($settings['sidebar_image'] ?? 'images/person.jpg') }}" alt="">
        <p>{{ $settings['about_description'] ?? 'I have much experience in developing web software.' }}</p>
      </div>
      <hr>
      <div class="alx-sidebar-menu">
        <ul>
          <li><a href="#page1">Home</a></li>
          <li><a href="#page2">About</a></li>
          <li><a href="#page3">Services</a></li>
          <li><a href="#page4">Skills</a></li>
          <li><a href="#page5">Portfolio</a></li>
          <li><a href="#page6">Contact</a></li>
        </ul>
      </div>
      <div class="alx-social-links__2">
        <ul>
          <li><a href="https://www.linkedin.com/in/arslan-amjad-b941bb352/"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="https://github.com/sarslanamjad-crypto"><i class="fa fa-github"></i></a></li>
        </ul>
      </div>
      <div class="alx-copyright">© Laravel. All Rights Resevered<br>Design and Development by Arslan Amjad</div>
    </aside>
    <div class="alx-aside-sidebar__overlay"></div>
    <!--Libs-->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="libs/pace/pace.min.js"></script>
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/pagePiling/jquery.pagepiling.js"></script>
    <script src="libs/waypoints/waypoints.min.js"></script>
    <script src="libs/match-height/match-height.js"></script>
    <script src="libs/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="libs/isotope/isotope.pkgd.min.js"></script>
    <script src="libs/animate/animate-css.js"></script>
    <script src="libs/tilt/tilt.js"></script>
    <script src="libs/slick/slick.min.js"></script>
    <script src="libs/canvas-bg/particles.min.js"></script>
    <script src="libs/readmore/readmore.min.js"></script>
    <script src="libs/fluidWave/fluidWave.js"></script>
    <!--Use scripts-->
    <script src="js/common.js"></script>
      <a href="https://wa.me/923225402571?text=Hi%20Arslan,%20I%20saw%20your%20portfolio%20and%20would%20like%20to%20discuss%20a%20project." class="alx-whatsapp-float" target="_blank">
        <i class="fa fa-whatsapp alx-whatsapp-icon"></i>
      </a>

      <style>
        .alx-whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            z-index: 9999;
            transition: all 0.3s ease-in-out;
            animation: pulse-whatsapp 2s infinite;
        }

        .alx-whatsapp-float:hover {
            color: #FFF;
            transform: scale(1.1);
        }

        .alx-whatsapp-icon {
            margin-top: 16px;
        }

        @keyframes pulse-whatsapp {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }

        @media screen and (max-width: 767px) {
             .alx-whatsapp-float {
                 width: 50px;
                 height: 50px;
                 bottom: 20px;
                 right: 20px;
                 font-size: 26px;
             }
             .alx-whatsapp-icon {
                 margin-top: 13px;
             }
        }
      </style>
  </body>
<!-- Mirrored from alian4x.com/html/gnusmas/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Sep 2025 18:50:42 GMT -->
</html>
