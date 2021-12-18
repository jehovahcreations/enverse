@extends('layouts.layout')

@section('content')
			<!-- introBlock of the page -->
			<section class="introBlock position-relative d-flex" data-scroll-index="0">
				<div class="alignCenter w-100 d-flex align-items-center">
					<div class="container pt-25 pt-sm-30 pt-md-36 pt-xl-40 pb-10">
						<div class="row">
							<div class="col-12 col-lg-6">
								<!-- caption of the page -->
								<div class="caption pr-lg-4 pr-xl-12 mb-6">
									<a href="tel:0123456789" class="btn btn-sm btn-outline-primary text-uppercase mb-4 fwSemibold">Call us: <span>+91 9884057333</span></a>
									<h1 class="text-capitalize mb-4 mb-lg-5">Do you have the  platforms to keep up
                                        with the data deluge? We do.
                                        </h1>
									<p>We’re the world’s largest pure-play data analytics firm providing data science solutions.</p>
									<div class="videoWatchHolder text-primary d-flex align-items-center flex-wrap">
										<a data-fancybox="true" href="https://youtu.be/GGSKpJGpyuo" class="playBtn position-relative rounded-circle d-flex align-items-center justify-content-center d-block mr-2 mr-sm-3">
											<span class="playIcn d-block"></span>
										</a>
										<p>
											<span class="d-block">Watch Overview</span>
											<span class="d-block">in 40 Second</span>
										</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<span class="imgHolder mx-auto d-block pt-md-3">
                                    <video src="{{ asset('https://cdnl.iconscout.com/lottie/premium/preview-watermark/data-analysis-4179002-3479081.mp4' )}}" muted autoplay loop playsinline width="90%"></video>								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="bgHolder">
					<svg class="svgBg">
						<defs>
							<clipPath id="pt02" clipPathUnits="objectBoundingBox">
								<path d="M 0 0 L 1 0 L 1 0.057586 C 0.76770 0.091407 0.755729 0.45978 0.58281 0.66453 C 0.379166 0.942413 0.156770 0.544789 0 0.88665 L 0 0 Z"></path>
							</clipPath>
						</defs>
						<rect width="100%" height="100%" style="clip-path: url(#pt02);" fill="#fc4d4a" fill-opacity="0.05"></rect>
					</svg>
					<!-- iconGroupImg of the page -->
					<div class="iconGroupImg d-none d-sm-block">
						<span class="position-absolute icnImg" data-icon="icon1">
							<img src="{{ asset('css/images/icon1.png') }}" alt="icon class="img-fluid">
						</span>
						<span class="position-absolute icnImg" data-icon="icon2">
							<img src="{{ asset('css/images/icon2.png') }}" alt="icon" class="img-fluid">
						</span>
						<span class="position-absolute icnImg" data-icon="icon3">
							<img src="{{ asset('css/images/icon3.png') }}" alt="icon" class="img-fluid">
						</span>
						<span class="position-absolute icnImg" data-icon="icon4">
							<img src="{{ asset('css/images/icon4.png') }}" alt="icon" class="img-fluid">
						</span>
						<span class="position-absolute icnImg" data-icon="icon5">
							<img src="{{ asset('css/images/icon5.png') }}" alt="icon" class="img-fluid">
						</span>
						<span class="position-absolute icnImg" data-icon="icon6">
							<img src="{{ asset('css/images/icon6.png') }}" alt="icon" class="img-fluid">
						</span>
					</div>
				</div>
			</section>
			<!-- brandingBlock of the page -->
			<aside class="brandingBlock text-center py-8 py-sm-10 py-md-12 py-xl-14">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<span class="d-block mb-7">Trusted by the world’s most innovative businesses – big and small</span>
						</div>
					</div>
					<div class="row d-block">
						<!-- brandSlide of the page -->
						<div class="brandSlide">
							<div>
								<div class="col-12">
									<div class="brandImg">
                                        <a href="tel:0123456789" class="btn btn-sm btn-outline-primary text-uppercase mb-4 fwSemibold">Technology</a>
                                    </div>
								</div>
							</div>
							<div>
								<div class="col-12">
									<div class="brandImg">
                                        <a href="tel:0123456789" class="btn btn-sm btn-outline-primary text-uppercase mb-4 fwSemibold">Math</span></a>
									</div>
								</div>
							</div>
							<div>
								<div class="col-12">
									<div class="brandImg">
                                        <a href="tel:0123456789" class="btn btn-sm btn-outline-primary text-uppercase mb-4 fwSemibold">Business</span></a>
									</div>
								</div>
							</div>
							<div>
								<div class="col-12">
									<div class="brandImg">
                                        <a href="tel:0123456789" class="btn btn-sm btn-outline-primary text-uppercase mb-4 fwSemibold">DATA ENGINEERING</span></a>
									</div>
								</div>
							</div>
							<div>
								<div class="col-12">
									<div class="brandImg">
                                        <a href="tel:0123456789" class="btn btn-sm btn-outline-primary text-uppercase mb-4 fwSemibold">DATA SCIENCE</span></a>
									</div>
								</div>
							</div>
							<div>
								<div class="col-12">
									<div class="brandImg">
                                        <a href="tel:0123456789" class="btn btn-sm btn-outline-primary text-uppercase mb-4 fwSemibold">DECISION
                                            SCIENCE</span></a>
									</div>
								</div>
							</div>
							<div>
								<div class="col-12">
									<div class="brandImg">
                                        <a href="tel:0123456789" class="btn btn-sm btn-outline-primary text-uppercase mb-4 fwSemibold">DECISION SUPPORT</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</aside>
			<!-- abtBlock of the page -->
			<section class="abtBlock py-10 pb-md-8 pt-lg-15 pt-xl-21 pb-lg-11" data-scroll-index="1">
				<div class="container">
					<div class="row flex-row-reverse">
						<div class="col-12 col-md-6">
							<header class="header text-center text-md-left mb-6 mb-lg-9">
								<h2 class="mb-4 mb-xl-6">
									<strong class="h6 mb-2 d-block text-primary font-weight-normal">Our Mission</strong>
									<strong class="h3 d-block">Our mission is to bring objective, data-driven truth to </strong>
								</h2>
								<p>enable better decision making in Governance & Public Policy– All the way from Governments, Political Parties and the Society.</p>
							</header>
							<div class="row">
								<div class="col-12 col-sm-12">
									<!-- abtDesBlock of the page -->
									<article class="abtDesBlock mb-6">
										{{-- <h3 class="h2 text-primary mb-2 mb-lg-4"><span class="counter">300</span>+</h3> --}}
										<h4 class="h5 text-capitalize mb-2 mb-md-3" style="color: #fc4d4a">Our expertise</h4>
										<p>We use our expertise in Open Government Data Platforms, Public Policy / Economics Analytics and also our ability to analyze the People sentiments through Social Media Analytics, Smart Survey Analytics and Psephology. We combine all these into a one single source of truth Dashboards to the Executives and the Leaders. This creates a unique solution that aims at creating a value for our clients as well as the society.</p>
									</article>
								</div>
								{{-- <div class="col-12 col-sm-6">
									<!-- abtDesBlock of the page -->
									<article class="abtDesBlock mb-6">
										<h3 class="h2 text-info mb-2 mb-lg-4"><span class="counter">99</span>%</h3>
										<h4 class="h5 text-capitalize mb-2 mb-md-3">Customer Satisfection</h4>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting of type.</p>
									</article>
								</div> --}}
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="imgHolder mx-auto pt-5 pt-md-2 ml-md-n12 ml-lg-n4 ml-xl-0">
                                <video src="{{ asset('https://cdnl.iconscout.com/lottie/premium/preview-watermark/data-analysis-3574941-3008971.mp4' )}}" muted autoplay loop playsinline width="120%"></video>								</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- serviceBlock of the page -->
			<section class="serviceBlock position-relative text-center pt-12 pb-6 pt-sm-15 pb-md-10 pt-lg-18 pb-lg-12 pt-xl-23 pb-xl-14" data-scroll-index="2">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 col-xl-6 offset-xl-3">
							<header class="header px-xl-1 mb-10 mb-lg-13">
								<h3 class="mb-4 mb-xl-6">
									<strong class="h6 mb-2 mb-sm-3 d-block text-primary font-weight-normal">Our Services</strong>
									<strong class="h3 d-block"> Bespoke Company Solutions For Your Business</strong>
								</h3>
								<p>The most important supply chains are now virtual.
                                    You are operating a decision supply chain.
                                    </p>
							</header>
						</div>
					</div>
					<div class="row justify-content-center serviceDesList">
						<div class="col-12 col-sm-6 col-md-3">
							<!-- serviceDesBlock of the page -->
							<article class="serviceDesBlock mb-6 position-relative bg-white  py-8 px-4 py-sm-10 px-sm-5 px-md-3 px-lg-5 py-md-6 py-lg-8 p-xl-10 shadow-lg" data-icnClr="primary">
								<span class="bg-primary text-white position-absolute label fwSemibold text-uppercase">hot</span>
								<span class="icn d-block mb-5 mb-md-3 mb-lg-5 flaticon-layers-1"></span>
								<h4 class="h5 text-capitalize mb-1"><a href="javascript:void(0);">Best Analytics</a></h4>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-md-3">
							<!-- serviceDesBlock of the page -->
							<article class="serviceDesBlock mb-6 position-relative bg-white  py-8 px-4 py-sm-10 px-sm-5 px-md-3 px-lg-5 py-md-6 py-lg-8 p-xl-10 shadow-lg" data-icnClr="info">
								<span class="bg-primary text-white position-absolute label fwSemibold text-uppercase">hot</span>
								<span class="icn d-block mb-5 mb-md-3 mb-lg-5 flaticon-fingerprint"></span>
								<h4 class="h5 text-capitalize mb-1"><a href="javascript:void(0);">New Design</a></h4>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-md-3">
							<!-- serviceDesBlock of the page -->
							<article class="serviceDesBlock mb-6 position-relative bg-white py-8 px-4 py-sm-10 px-sm-5 px-md-3 px-lg-5 py-md-6 py-lg-8 p-xl-10 shadow-lg" data-icnClr="purple">
								<span class="bg-primary text-white position-absolute label fwSemibold text-uppercase">hot</span>
								<span class="icn d-block mb-5 mb-md-3 mb-lg-5 flaticon-stopwatch-1"></span>
								<h4 class="h5 text-capitalize mb-1"><a href="javascript:void(0);">Great Results</a></h4>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-md-3">
							<!-- serviceDesBlock of the page -->
							<article class="serviceDesBlock mb-6 position-relative bg-white  py-8 px-4 py-sm-10 px-sm-5 px-md-3 px-lg-5 py-md-6 py-lg-8 p-xl-10 shadow-lg" data-icnClr="orange">
								<span class="bg-primary text-white position-absolute label fwSemibold text-uppercase">hot</span>
								<span class="icn d-block mb-5 mb-md-3 mb-lg-5 flaticon-compose"></span>
								<h4 class="h5 text-capitalize mb-1"><a href="javascript:void(0);">Pixel Perfect</a></h4>
							</article>
						</div>
					</div>
				</div>
				<svg class="svgBg">
					<defs>
						<clipPath id="pt03" clipPathUnits="objectBoundingBox">
							<path d="M 0 0.3263 C 0.03385 0.74078 0.31979 0.91842 0.40937 0.58026 C 0.5625 0.04605 0.74010 0.09078 0.95260 0.16447 Q 0.97968 0.17368 1 0.14473 L 1 1 L 0 1 L 0 0.32631 Z"></path>
						</clipPath>
					</defs>
					<rect width="100%" height="100%" style="clip-path: url(#pt03);" fill="#008da7" fill-opacity="0.05"></rect>
				</svg>
			</section>
            <section class="abtBlock py-10 pb-md-8 pt-lg-15 pt-xl-21 pb-lg-11" data-scroll-index="#">
				<div class="container">
					<div class="row flex-row-reverse">
                        <div class="col-12 col-md-5">
							<div class="imgHolder mx-auto pt-5 pt-md-2 ml-md-n12 ml-lg-n4 ml-xl-0">
                                <video src="{{ asset('https://cdnl.iconscout.com/lottie/premium/preview-watermark/cloud-computing-4179001-3479080.mp4' )}}" muted autoplay loop playsinline width="120%"></video>								</span>
							</div>
						</div>
						<div class="col-12 col-md-7">

							<header class="header text-center text-md-left mb-6 mb-lg-9">
                                <h4 class="h5 text-capitalize mb-2 mb-md-3" style="color: #fc4d4a">Purpose of EnnVerse</h4>
								</header>
                            <p><h6 class="click" style="color: #fc4d4a">Challenge Ourselves :</h6>  To serve the unserved & solve the un- solved.	</p>
                            <p><h6 class="click" style="color: #fc4d4a">Walk the Talk : </h6>  To be seen as a equal opportunity employer who will act a catalyst for social justice.</p>
                            <p><h6 class="click" style="color: #fc4d4a">Be Fair : </h6>  Ensure that the society becomes better place in everything we do.</p>

                            <p><h6 class="click" style="color: #fc4d4a">Imbibe the traits : </h6>  To achieve all these with Honesty, Integrity, Trustworthiness and the respect for the Individual
                            </p>
                            <p><h6 class="click" style="color: #fc4d4a">Have that “and” Mentality : </h6>  We can always be successful AND stand for our purpose. Never trade-off the purpose for short term gains	</p>






						</div>

					</div>
				</div>
			</section>
			<!-- srvcePromeBlock of the page -->
			{{-- <section class="srvcePromeBlock position-relative text-center py-10 py-sm-12 py-lg-15 pt-xl-18 pb-xl-26">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
							<header class="header mb-8 mb-md-10 mb-xl-13">
								<h3 class="mb-4 mb-xl-6">
									<strong class="h6 mb-2 mb-sm-3 d-block text-primary font-weight-normal">Watch Our Video</strong>
									<strong class="h3 d-block">Don't Miss Our New Awesome Services Promo Video</strong>
								</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting has been the industry's standard dummy text ever since the 1500s.</p>
							</header>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
							<!-- videoHolder of the page -->
							<div class="videoHolder shadow-sm position-relative mb-5 mb-sm-7 mb-md-9">
								<img src="{{ asset('http://placehold.it/770x500"') }}"alt="image description" class="img-fluid">
								<div class="playBtnHolder pt-3 text-white position-absolute">
									<a data-fancybox="true" href="https://youtu.be/GGSKpJGpyuo" class="playBtnWrap position-relative mx-auto d-flex align-items-center justify-content-center bg-white rounded-circle mb-7">
										<span class="d-block playIcn"></span>
									</a>
									<h4 class="txt text-white mb-0">
										<strong class="imgTxt">
											<img src="{{ asset('css/images/imgTxt.png') }}" class="img-fluid" alt="Watchj Overview in 40 Second">
										</strong>
									</h4>
									<div class="arrowImg position-absolute">
										<img src="{{ asset('css/images/arrowTop.png') }}" class="img-fluid" alt="arrow direction">
									</div>
								</div>
							</div>
							<p>Working every day to earn our customers’ trust.	<a href="javascript:void(0);" class="click">Get Started!</a></p>
						</div>
					</div>
				</div>
				<svg class="svgBg">
					<defs>
						<clipPath id="pt04" clipPathUnits="objectBoundingBox">
							<path d="M 0 0 L 1 0 L 1 0.8546931 C 0.97656 0.6173285 0.6817708 0.389891 0.567708 0.7364620 C 0.4911458 0.88086 0.394270 1.064981 0.105208 0.978339 Q 0.0130208 0.955776 0 0.9828519 L 0 0 z"></path>
						</clipPath>
					</defs>
					<rect width="100%" height="100%" style="clip-path: url(#pt04);" fill="#008da7" fill-opacity="0.05"></rect>
				</svg>
				<!-- iconGroupImgII of the page -->
				<div class="iconGroupImgII d-none d-sm-block">
					<span class="position-absolute icnImg" data-icon="iconImgI">
						<img src="{{ asset('css/images/icon1.png') }}" class="img-fluid" alt="icon">
					</span>
					<span class="position-absolute icnImg" data-icon="iconImgII">
						<img src="{{ asset('css/images/icon2.png') }}" class="img-fluid" alt="icon">
					</span>
					<span class="position-absolute icnImg" data-icon="iconImgIII">
						<img src="{{ asset('css/images/icon3.png') }}" class="img-fluid" alt="icon">
					</span>
					<span class="position-absolute icnImg" data-icon="iconImgIV">
						<img src="{{ asset('css/images/icon4.png') }}" class="img-fluid" alt="icon">
					</span>
					<span class="position-absolute icnImg" data-icon="iconImgV">
						<img src="{{ asset('css/images/icon5.png') }}" class="img-fluid" alt="icon">
					</span>
					<span class="position-absolute icnImg" data-icon="iconImgVI">
						<img src="{{ asset('css/images/icon6.png') }}" class="img-fluid" alt="icon">
					</span>
				</div>
			</section> --}}
			<!-- priceBlock of the page -->
			{{-- <section class="priceBlock text-center pt-9 pb-12 pb-sm-15 pb-md-20 pb-lg-25 pb-xl-32">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
							<header class="header mb-8 mb-md-10 mb-xl-13">
								<h4 class="px-lg-20 px-xl-10">
									<strong class="h6 mb-2 mb-sm-3 d-block text-primary font-weight-normal">Pricing Table</strong>
									<strong class="h3 d-block mb-4 mb-xl-5">No Hidden Charges Choose Your Plan</strong>
								</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting has been the industrys standard dummy text ever since the 1500s.</p>
							</header>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-12 col-sm-6 col-lg-4">
							<!-- priceColumeBLock of the page -->
							<article class="priceColumeBLock px-3 py-6 p-md-6 pb-md-9 mb-8" data-colorBdr="primary">
								<span class="d-block imgHolder mx-auto mb-sm-5 mb-md-8 mb-xl-12">
									<img src="{{ asset('http://placehold.it/265x270') }}" alt="tag" class="img-fluid">
								</span>
								<div class="priceHolder mb-5 mb-xl-7">
									<h4 class="priceVocherWrap d-flex justify-content-center ml-5 mb-n1">
										<sub class="currency">$</sub>
										<strong class="price fwSemibold">19.</strong>
										<sup class="pricePrsont">99</sup>
									</h4>
									<p>Per Month</p>
								</div>
								<h5 class="h4 text-capitalize mb-4">Personal Plan</h5>
								<ul class="priceDesList list-unstyled mb-7 mb-sm-9">
									<li>5 Analytics Campaigns</li>
									<li>300 Keywords</li>
									<li>250,000 Crawled Pages</li>
									<li>15 Social Accounts</li>
								</ul>
								<a href="javascript:void(0);" class="btn btn-primary rounded-pill text-uppercase fwSemibold">order now <span class="fas fa-arrow-right ml-2"></span></a>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-lg-4">
							<!-- priceColumeBLock of the page -->
							<article class="priceColumeBLock px-3 py-6 p-md-6 pb-md-9 mb-8" data-colorBdr="info">
								<span class="d-block imgHolder mx-auto mb-sm-5 mb-md-8 mb-xl-12">
									<img src="{{ asset('http://placehold.it/265x270') }}" alt="tag" class="img-fluid">
								</span>
								<div class="priceHolder mb-5 mb-xl-7">
									<h4 class="priceVocherWrap d-flex justify-content-center ml-5 mb-n1">
										<sub class="currency">$</sub>
										<strong class="price fwSemibold">29.</strong>
										<sup class="pricePrsont">99</sup>
									</h4>
									<p>Per Month</p>
								</div>
								<h5 class="h4 text-capitalize mb-4">Business Plan</h5>
								<ul class="priceDesList list-unstyled mb-7 mb-sm-9">
									<li>25 Analytics Campaigns</li>
									<li>1,900 Keywords</li>
									<li>1,250,000 Crawled Pages</li>
									<li>50 Social Accounts</li>
								</ul>
								<a href="javascript:void(0);" class="btn btn-info rounded-pill text-uppercase fwSemibold">order now <span class="fas fa-arrow-right ml-2"></span></a>
							</article>
						</div>
						<div class="col-12 col-sm-6 col-lg-4">
							<!-- priceColumeBLock of the page -->
							<article class="priceColumeBLock px-3 py-6 p-md-6 pb-md-9 mb-8" data-colorBdr="purple">
								<span class="d-block imgHolder mx-auto mb-sm-5 mb-md-8 mb-xl-12">
									<img src="{{ asset('http://placehold.it/265x270') }}" alt="tag" class="img-fluid">
								</span>
								<div class="priceHolder mb-5 mb-xl-7">
									<h4 class="priceVocherWrap d-flex justify-content-center ml-5 mb-n1">
										<sub class="currency">$</sub>
										<strong class="price fwSemibold">39.</strong>
										<sup class="pricePrsont">99</sup>
									</h4>
									<p>Per Month</p>
								</div>
								<h5 class="h4 text-capitalize mb-4">Professional Plan</h5>
								<ul class="priceDesList list-unstyled mb-7 mb-sm-9">
									<li>100 Analytics Campaigns</li>
									<li>7,500 Keywords</li>
									<li>1,250,000 Crawled Pages</li>
									<li>150 Social Accounts</li>
								</ul>
								<a href="javascript:void(0);" class="btn btn-info rounded-pill text-uppercase fwSemibold">order now <span class="fas fa-arrow-right ml-2"></span></a>
							</article>
						</div>
					</div>
				</div>
			</section> --}}
			<!-- testimonialBlock of the page -->
			<aside class="testimonialBlock position-relative d-flex text-center" data-scroll-index="3" style="background-image: url(https://www.mu-sigma.com/wp-content/themes/sigma/img/tree-bg.jpg);">
				<div class="alignCenter w-100 align-items-center d-flex">
					<div class="container py-10 py-sm-12 pt-lg-15 pb-lg-13">
						<div class="row">
							<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
								<!-- testimonialSlider of the page -->
								<div class="testimonialSlider">
									<!-- testimonial of the page -->
									<blockquote class="testimonial mx-xl-n12 mb-0">
										<div class="avatar position-relative mx-auto mb-7 mb-lg-10">
											<span class="d-block imgHolder">
												<img src="{{ asset('https://media.istockphoto.com/photos/studio-waist-up-portrait-of-a-beautiful-businesswoman-with-crossed-picture-id1180926773?k=20&m=1180926773&s=612x612&w=0&h=GDpHprMlxwBoiBGgVAIDEQNfpMyHhy3-pu6pOw8H650=') }}" alt="tag" class="img-fluid">
											</span>
											<span class="quoteImg position-absolute d-flex align-items-center justify-content-center rounded-circle bg-primary">
												<img src="{{ asset('css/images/img15.png"') }}"alt="quotes" class="img-fluid">
											</span>
										</div>
										<q class="d-block fwSemibold" style="color: #fc4d4a"> team helped us to create solutions that improved our existing platforms. </q>
										<cite class="author" style="color: #fc4d4a">- Mark Smith @Envato Inc.</cite>
									</blockquote>
									<!-- testimonial of the page -->
									<blockquote class="testimonial mx-xl-n12 mb-0">
										<div class="avatar position-relative mx-auto mb-7 mb-lg-10">
											<span class="d-block imgHolder">
												<img src="{{ asset('https://1.bp.blogspot.com/-z3jPP2IN4K4/WlzgKdV6o4I/AAAAAAAAbbk/tVWXxhqXJIkkrttvyXO5QtWT8jlfLodnACLcBGAs/s1600/01%2BDSC_9096c2.jpg') }}" alt="tag" class="img-fluid">
											</span>
											<span class="quoteImg position-absolute d-flex align-items-center justify-content-center rounded-circle bg-primary">
												<img src="{{ asset('css/images/img15.png"') }}"alt="quotes" class="img-fluid">
											</span>
										</div>
										<q class="d-block fwSemibold" style="color: #fc4d4a"> team helped us to create solutions that improved our existing platforms. </q>
										<cite class="author" style="color: #fc4d4a">- Mark Smith @Envato Inc.</cite>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- avatarGroup of the page -->
				<div class="avatarGroup d-none d-sm-block">
					<span class="imgWrap position-absolute" data-img="imgI">
						<img src="{{ asset('https://5.imimg.com/data5/SELLER/Default/2021/4/BN/EU/XP/126592690/professional-headshot-photography-services-500x500.png') }}"alt="avatar" class="img-fluid">
					</span>
					<span class="imgWrap position-absolute" data-img="imgIV">
						<img src="{{ asset('https://images.squarespace-cdn.com/content/v1/55e9d6c5e4b0a9e24dccc25a/1605818456470-1VYEK4T90JMYPDBPRP52/Marcio_Valadao-074-web.jpg') }}"alt="avatar" class="img-fluid">
					</span>
					<span class="imgWrap position-absolute" data-img="imgII">
						<img src="{{ asset('https://kylebondeson.com/wp-content/uploads/2019/05/5-H-1.jpg') }}"alt="avatar" class="img-fluid">
					</span>
					<span class="imgWrap position-absolute" data-img="imgIII">
						<img src="{{ asset('https://i2.wp.com/www.healthlinkscanada.ca/wp-content/uploads/2020/01/jessica.jpg?fit=768%2C1024&ssl=1') }}"alt="avatar" class="img-fluid">
					</span>
					<span class="imgWrap position-absolute" data-img="imgV">
						<img src="{{ asset('https://cdn.fstoppers.com/styles/large-16-9/s3/lead/2019/01/tips-for-professional-portraits.jpg') }}"alt="avatar" class="img-fluid">
					</span>
					<span class="imgWrap position-absolute" data-img="imgVI">
						<img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6VTjVxJ8-20l5bTx_nhBsGsM_G5sRk_U-O6Ug1edvULHPmt7Za-VqWVpbtNVdDyier-w&usqp=CAU') }}"alt="avatar" class="img-fluid">
					</span>
				</div>
			</aside>
			<!-- contactBlock of the page -->
			{{-- <section class="contactBlock d-flex position-relative text-center">
				<div class="alignCenter w-100 d-flex align-items-center">
					<div class="container py-12 py-md-15 py-lg-18 pt-xl-20 pb-xl-19">
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
								<header class="header position-relative">
									<a href="tel:0123456789" class="btn btn-sm btn-outline-primary text-uppercase mb-4 fwSemibold">Call us: <span>0123456789</span></a>
									<h5 class="h1 mx-xl-n2 mb-2">
										<strong class="d-block fwSemibold" style="color: #fc4d4a">Whatever the challenge, we </strong>
										<strong class="d-block fwSemibold" style="color: #fc4d4a">deliver a solution.</strong>
									</h5>
									<p>
										<span class="d-block" style="color: #fc4d4a">Agencies around the world are moving to the digital agencies. </span>
										<span class="d-block" style="color: #fc4d4a">So, It is high time to introduce your agency digitaly.</span>
									</p>
									<div class="btnHolder">
										<a href="javascript:void(0);" class="btn btn-primary rounded-pill text-uppercase fwSemibold" data-toggle="modal" data-target="#exampleModal">Contact us <span class="fas fa-arrow-right ml-2"></span></a>
									</div>
								</header>
								<!-- bgImg of the page -->
								<span class="bgImg position-absolute">
									<img src="{{ asset('http://placehold.it/1920x380') }}" alt="tag" class="img-fluid">
								</span>
							</div>
						</div>
					</div>
				</div>
			</section> --}}
            @endsection
