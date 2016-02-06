@extends('site.template')

@section('header')
    @include('site.header.header')
@endsection
@section('content')
    <div role="main" class="main">
        <div id="content" class="content full">

            <div class="slider-container">
                <div class="slider" id="revolutionSlider">
                    <ul>
                        <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >
                            <img src="img/slides/slide-bg.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <div class="tp-caption sft stb visible-lg"
                                 data-x="72"
                                 data-y="180"
                                 data-speed="300"
                                 data-start="1000"
                                 data-easing="easeOutExpo"><img src="img/slides/slide-title-border.png" alt=""></div>

                            <div class="tp-caption top-label lfl stl"
                                 data-x="122"
                                 data-y="180"
                                 data-speed="300"
                                 data-start="500"
                                 data-easing="easeOutExpo">موقع نقابة المهندسين بالإسكندرية</div>

                            <div class="tp-caption sft stb visible-lg"
                                 data-x="382"
                                 data-y="180"
                                 data-speed="300"
                                 data-start="1000"
                                 data-easing="easeOutExpo"><img src="img/slides/slide-title-border.png" alt=""></div>

                            <div class="tp-caption main-label sft stb"
                                 data-x="30"
                                 data-y="210"
                                 data-speed="300"
                                 data-start="1500"
                                 data-easing="easeOutExpo">الموقع الرسمي</div>

                            <div class="tp-caption bottom-label sft stb"
                                 data-x="80"
                                 data-y="280"
                                 data-speed="500"
                                 data-start="2000"
                                 data-easing="easeOutExpo">أحدث التطورات تابع الحفلات والعروض والتسهيلات</div>

                            <div class="tp-caption randomrotate"
                                 data-x="800"
                                 data-y="248"
                                 data-speed="500"
                                 data-start="2500"
                                 data-easing="easeOutBack"><img src="img/slides/slide-concept-2-1.png" alt=""></div>

                            <div class="tp-caption sfb"
                                 data-x="850"
                                 data-y="200"
                                 data-speed="400"
                                 data-start="3000"
                                 data-easing="easeOutBack"><img src="img/slides/slide-concept-2-2.png" alt=""></div>

                            <div class="tp-caption sfb"
                                 data-x="820"
                                 data-y="170"
                                 data-speed="700"
                                 data-start="3150"
                                 data-easing="easeOutBack"><img src="img/slides/slide-concept-2-3.png" alt=""></div>

                            <div class="tp-caption sfb"
                                 data-x="770"
                                 data-y="130"
                                 data-speed="1000"
                                 data-start="3250"
                                 data-easing="easeOutBack"><img src="img/slides/slide-concept-2-4.png" alt=""></div>

                            <div class="tp-caption sfb"
                                 data-x="500"
                                 data-y="80"
                                 data-speed="600"
                                 data-start="3450"
                                 data-easing="easeOutExpo"><img src="img/slides/slide-concept-2-5.png" alt=""></div>

                            <div class="tp-caption blackboard-text lfb "
                                 data-x="530"
                                 data-y="300"
                                 data-speed="500"
                                 data-start="3450"
                                 data-easing="easeOutExpo" style="font-size: 37px;">التفكير</div>

                            <div class="tp-caption blackboard-text lfb "
                                 data-x="555"
                                 data-y="350"
                                 data-speed="500"
                                 data-start="3650"
                                 data-easing="easeOutExpo" style="font-size: 47px;">خارج</div>

                            <div class="tp-caption blackboard-text lfb "
                                 data-x="580"
                                 data-y="400"
                                 data-speed="500"
                                 data-start="3850"
                                 data-easing="easeOutExpo" style="font-size: 32px;">الصندوق :)</div>
                        </li>
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" >
                            <img src="img/slides/slide-bg.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <div class="tp-caption fade"
                                 data-x="50"
                                 data-y="100"
                                 data-speed="1500"
                                 data-start="500"
                                 data-easing="easeOutExpo"><img src="img/slides/slide-concept.png" alt=""></div>

                            <div class="tp-caption blackboard-text fade "
                                 data-x="180"
                                 data-y="180"
                                 data-speed="1500"
                                 data-start="1000"
                                 data-easing="easeOutExpo" style="font-size: 30px;">خدمات</div>

                            <div class="tp-caption blackboard-text fade "
                                 data-x="180"
                                 data-y="220"
                                 data-speed="1500"
                                 data-start="1200"
                                 data-easing="easeOutExpo" style="font-size: 40px;">المهندسين</div>

                            <div class="tp-caption main-label sft stb"
                                 data-x="580"
                                 data-y="190"
                                 data-speed="300"
                                 data-start="1500"
                                 data-easing="easeOutExpo">نحن معكم</div>

                            <div class="tp-caption bottom-label sft stb"
                                 data-x="580"
                                 data-y="260"
                                 data-speed="500"
                                 data-start="2000"
                                 data-easing="easeOutExpo">جانب الى جانب مع مهندسي الأسكندرية</div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="home-intro">
                <div class="container">

                    <div class="row">
                        <div class="col-md-8">
                            <p>
                                <em>نحن</em> نواكب التكنولوجيا الحديثة ونصنع لنا أفق لا حدود له
                                <span>. تواصل ولا تتدردد في التسجيل للحصول على المميزات</span>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="get-started">
                                <a href="#" class="btn btn-lg btn-primary">! للحصول على المميزات إشترك الآن</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">

                <div class="row center">
                    <div class="col-md-12">
                        <h2 class="short word-rotator-title gess">
                            مرحبا بكم
                            <strong class="inverted">
										<span class="word-rotate">
											<span class="word-rotate-items">
												<span >مهندسي</span>
												<span>مصر</span>
												<span>والأسكندرية</span>
											</span>
										</span>
                            </strong>
                            نقابة المهن الهندسية في مصر
                        </h2>
                        <p class="featured lead gess_light">
                            يسر ادارة النقابة ان تقدم لزوارنا الكرام كل ما يحتاجونه من معلومات و خدمات تفيد جميع المهندسين ننتظر رأيكم و تعليقاتكم التى تساعدنا لأن نقدم لكم الافضل
                        </p>
                    </div>
                </div>

            </div>

            <div class="home-concept">
                <div class="container">

                    <div class="row center">
                        <span class="sun"></span>
                        <span class="cloud"></span>
                        <div class="col-md-2 col-md-offset-1">
                            <div class="process-image gess_light" data-appear-animation="bounceIn">
                                <img src="img/home-concept-item-1.png" alt="" />
                                <strong>المعارض</strong>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="process-image gess_light" data-appear-animation="bounceIn" data-appear-animation-delay="200">
                                <img src="img/home-concept-item-2.png" alt="" />
                                <strong>الرحلات</strong>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="process-image gess_light" data-appear-animation="bounceIn" data-appear-animation-delay="400">
                                <img src="img/home-concept-item-3.png" alt="" />
                                <strong>الحفلات</strong>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-offset-1">
                            <div class="project-image">
                                <div id="fcSlideshow" class="fc-slideshow">
                                    <ul class="fc-slides">
                                        <li><a href="portfolio-single-project.html"><img class="img-responsive" src="img/projects/project-home-1.jpg" /></a></li>
                                        <li><a href="portfolio-single-project.html"><img class="img-responsive" src="img/projects/project-home-2.jpg" /></a></li>
                                        <li><a href="portfolio-single-project.html"><img class="img-responsive" src="img/projects/project-home-3.jpg" /></a></li>
                                    </ul>
                                </div>
                                <strong class="our-work gess_light">أحدث الفعاليات</strong>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">

                <div class="row">
                    <hr class="tall" />
                </div>

            </div>

            <div class="container">

                <div class="row">
                    <div class="d-rtl col-md-8">
                        <h2 class="gess">لجان النقابة</h2>
                        <div class="row">
                            <div class="col-md-6" style="text-align: justify;">
                                <div class="feature-box">
                                    <div class="feature-box-icon">
                                        <i class="icon icon-group"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="shorter">لجنة الدمغة الهندسية و تنشيط الموارد</h4>
                                        <p class="tall">الاشراف علي جميع اعمال الدمغه الهندسيه والنسبيه بما يتيح الرقابه والتنظيم والمتابعه المستمرة</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-icon">
                                        <i class="icon icon-file"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="shorter">لجنة الإسكان</h4>
                                        <p class="tall">هى اللجنة المنوط بها المساهمة فى حل مشاكل الإسكان للمهندسين عامة و الشباب منهم خاصة</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-icon">
                                        <i class="icon icon-google-plus"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="shorter">لجنة الإسكان</h4>
                                        <p class="tall">هى اللجنة المنوط بها المساهمة فى حل مشاكل الإسكان للمهندسين عامة و الشباب منهم خاصة</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="text-align: justify;">
                                <div class="feature-box">
                                    <div class="feature-box-icon">
                                        <i class="icon icon-film"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="shorter">لجنة الإسكان</h4>
                                        <p class="tall">هى اللجنة المنوط بها المساهمة فى حل مشاكل الإسكان للمهندسين عامة و الشباب منهم خاصة</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-icon">
                                        <i class="image-icon small user"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="shorter">لجنة الرعاية الصحية والإجتماعية</h4>
                                        <p class="tall">الرقابة على خدمة الرعاية الصحية المقدمة للمشتركين فى مشروع الرعاية الصحية</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-icon">
                                        <i class="icon icon-bars"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="shorter">لجنة التطوير التكنولوجى</h4>
                                        <p class="tall">إنشاء وتطوير ومتابعة البنية التحتية المعلوماتية للنقابة</p>
                                    </div>
                                </div>
                                <div class="feature-box">
                                    <div class="feature-box-icon">
                                        <i class="icon icon-desktop"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="shorter">لجنة حماية المهنة و الحفاظ على كرامة المهندس</h4>
                                        <p class="tall">المحافظه على كرامه المهندس ووضع وتطبيق الاسس الكفيله لتنظيم ممارسه المهنه</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-rtl col-md-4">
                        <h2 class="gess">الأخبار</h2>

                        <div class="panel-group" id="accordion" style="text-align: justify;">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <strong>
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                إعلان طلب مراقب حسابات لنقابة المهندسين بالإسكندرية
                                            </a>
                                        </strong>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="panel-body">
                                        تتشرف نقابة المهندسين بالاسكندرية بدعوة السادة الراغبين في العمل كمراقف حسابات لمهندس الإسكندرية للسنة المالية المنتهية في 31/12/2015 التقدم بطلبات للسكرتارية بالنقابة بالدور الثالث ( 36 ش بورسعيد – الشاطبي) خلال مواعيد العمل الرسمية في موعد أقصاه السبت 7/2/2015 على أن يكون مصحوبا بعرض فني ومالي
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <strong>
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                إعلان طلب مراقب حسابات لنقابة المهندسين بالإسكندرية
                                            </a>
                                        </strong>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="panel-body">
                                        تتشرف نقابة المهندسين بالاسكندرية بدعوة السادة الراغبين في العمل كمراقف حسابات لمهندس الإسكندرية للسنة المالية المنتهية في 31/12/2015 التقدم بطلبات للسكرتارية بالنقابة بالدور الثالث ( 36 ش بورسعيد – الشاطبي) خلال مواعيد العمل الرسمية في موعد أقصاه السبت 7/2/2015 على أن يكون مصحوبا بعرض فني ومالي
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <strong>
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                إعلان طلب مراقب حسابات لنقابة المهندسين بالإسكندرية
                                            </a>
                                        </strong>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="panel-body">
                                        تتشرف نقابة المهندسين بالاسكندرية بدعوة السادة الراغبين في العمل كمراقف حسابات لمهندس الإسكندرية للسنة المالية المنتهية في 31/12/2015 التقدم بطلبات للسكرتارية بالنقابة بالدور الثالث ( 36 ش بورسعيد – الشاطبي) خلال مواعيد العمل الرسمية في موعد أقصاه السبت 7/2/2015 على أن يكون مصحوبا بعرض فني ومالي
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="tall" />

                <div class="row center">
                    <div class="gess col-md-12">
                        <h2 class="short word-rotator-title">
                            نقابة المهندسين بالأسكندرية
                            <strong>
										<span class="word-rotate">
											<span class="word-rotate-items" style="color: #00783F;">
												<span>الرؤية</span>
												<span>الرسالة</span>
											</span>
										</span>
                            </strong>
                            عن النقابة
                        </h2>
                        <h4 class="lead tall">يسر ادارة النقابة ان تقدم لزوارنا الكرام كل ما يحتاجونه من معلومات و خدمات تفيد جميع المهندسين ننتظر رأيكم و تعليقاتكم التى تساعدنا لأن نقدم لكم الافضل</h4>
                    </div>
                </div>
                <div class="row center">
                    <div class="owl-carousel" data-plugin-options='{"items": 6, "singleItem": false, "autoPlay": true}'>
                        <div>
                            <img class="img-responsive" src="img/logos/logo-1.png" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="img/logos/logo-2.png" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="img/logos/logo-3.png" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="img/logos/logo-4.png" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="img/logos/logo-5.png" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="img/logos/logo-6.png" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="img/logos/logo-4.png" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="img/logos/logo-2.png" alt="">
                        </div>
                    </div>
                </div>

            </div>

            <div class="map-section">
                <section class="featured footer map">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="recent-posts push-bottom">
                                    <h2 class="d-rtl gess">إعلانات النقابة</h2>
                                    <div class="row">
                                        <div class="owl-carousel" data-plugin-options='{"items": 1, "autoHeight": true}'>
                                            <div>
                                                <div class="col-md-6">
                                                    <article>
                                                        <div class="date">
                                                            <span class="day">15</span>
                                                            <span class="month">Jan</span>
                                                        </div>
                                                        <h4 class="d-rtl"><a href="blog-post.html">إعلان طلب مراقب حسابات لنقابة المهندسين بالإسكندرية</a></h4>
                                                        <p class="d-rtl" style="text-align: justify;">تتشرف نقابة المهندسين بالاسكندرية بدعوة السادة الراغبين في العمل كمراقف حسابات لمهندس الإسكندرية للسنة المالية المنتهية في 31/12/2015 التقدم بطلبات للسكرتارية بالنقابة بالدور الثالث <a href="#" class="read-more"> إقرأ المزيد <i class="icon icon-angle-left"></i></a></p>
                                                    </article>
                                                </div>
                                                <div class="col-md-6">
                                                    <article>
                                                        <div class="date">
                                                            <span class="day">15</span>
                                                            <span class="month">Jan</span>
                                                        </div>
                                                        <h4 class="d-rtl"><a href="blog-post.html">إعلان طلب مراقب حسابات لنقابة المهندسين بالإسكندرية</a></h4>
                                                        <p class="d-rtl" style="text-align: justify;">تتشرف نقابة المهندسين بالاسكندرية بدعوة السادة الراغبين في العمل كمراقف حسابات لمهندس الإسكندرية للسنة المالية المنتهية في 31/12/2015 التقدم بطلبات للسكرتارية بالنقابة بالدور الثالث <a href="#" class="read-more"> إقرأ المزيد <i class="icon icon-angle-left"></i></a></p>
                                                    </article>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col-md-6">
                                                    <article>
                                                        <div class="date">
                                                            <span class="day">15</span>
                                                            <span class="month">Jan</span>
                                                        </div>
                                                        <h4 class="d-rtl"><a href="blog-post.html">إعلان طلب مراقب حسابات لنقابة المهندسين بالإسكندرية</a></h4>
                                                        <p class="d-rtl" style="text-align: justify;">تتشرف نقابة المهندسين بالاسكندرية بدعوة السادة الراغبين في العمل كمراقف حسابات لمهندس الإسكندرية للسنة المالية المنتهية في 31/12/2015 التقدم بطلبات للسكرتارية بالنقابة بالدور الثالث <a href="#" class="read-more"> إقرأ المزيد <i class="icon icon-angle-left"></i></a></p>
                                                    </article>
                                                </div>
                                                <div class="col-md-6">
                                                    <article>
                                                        <div class="date">
                                                            <span class="day">15</span>
                                                            <span class="month">Jan</span>
                                                        </div>
                                                        <h4 class="d-rtl"><a href="blog-post.html">إعلان طلب مراقب حسابات لنقابة المهندسين بالإسكندرية</a></h4>
                                                        <p class="d-rtl" style="text-align: justify;">تتشرف نقابة المهندسين بالاسكندرية بدعوة السادة الراغبين في العمل كمراقف حسابات لمهندس الإسكندرية للسنة المالية المنتهية في 31/12/2015 التقدم بطلبات للسكرتارية بالنقابة بالدور الثالث <a href="#" class="read-more"> إقرأ المزيد <i class="icon icon-angle-left"></i></a></p>
                                                    </article>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col-md-6">
                                                    <article>
                                                        <div class="date">
                                                            <span class="day">15</span>
                                                            <span class="month">Jan</span>
                                                        </div>
                                                        <h4 class="d-rtl"><a href="blog-post.html">إعلان طلب مراقب حسابات لنقابة المهندسين بالإسكندرية</a></h4>
                                                        <p class="d-rtl" style="text-align: justify;">تتشرف نقابة المهندسين بالاسكندرية بدعوة السادة الراغبين في العمل كمراقف حسابات لمهندس الإسكندرية للسنة المالية المنتهية في 31/12/2015 التقدم بطلبات للسكرتارية بالنقابة بالدور الثالث <a href="#" class="read-more"> إقرأ المزيد <i class="icon icon-angle-left"></i></a></p>
                                                    </article>
                                                </div>
                                                <div class="col-md-6">
                                                    <article>
                                                        <div class="date">
                                                            <span class="day">15</span>
                                                            <span class="month">Jan</span>
                                                        </div>
                                                        <h4 class="d-rtl"><a href="blog-post.html">إعلان طلب مراقب حسابات لنقابة المهندسين بالإسكندرية</a></h4>
                                                        <p class="d-rtl" style="text-align: justify;">تتشرف نقابة المهندسين بالاسكندرية بدعوة السادة الراغبين في العمل كمراقف حسابات لمهندس الإسكندرية للسنة المالية المنتهية في 31/12/2015 التقدم بطلبات للسكرتارية بالنقابة بالدور الثالث <a href="#" class="read-more"> إقرأ المزيد <i class="icon icon-angle-left"></i></a></p>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h2 class="d-rtl gess">مجلس النقابة</h2>
                                <div class="row">
                                    <div class="owl-carousel push-bottom" data-plugin-options='{"items": 1, "autoHeight": true}'>
                                        <div>
                                            <div class="col-md-12">
                                                <blockquote class="testimonial">
                                                    <p class="d-rtl" style="text-align: justify;">
                                                        هندسة معمارية 1993 – جامعةالأسكندرية
                                                        <br>
                                                        دبلوم دراسات عليا في الهندسة المعمارية – فنون جميلة الأسكندرية – 1995
                                                        <br>
                                                        عضو مجلس إدارة شركة الحرية طاقة متجددة
                                                        <br>
                                                        عضو مجلس أعلى سابق بنقابة المهندسين المصرية – 2012/2013
                                                    </p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down"></div>
                                                <div class="testimonial-author">
                                                    <div class="img-thumbnail img-thumbnail-small">
                                                        <img src="img/clients/client-1.jpg" alt="">
                                                    </div>
                                                    <p class="gess_light"><strong>م . سمر شلبي</strong><span>رئيس النقابة</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-md-12">
                                                <blockquote class="testimonial">
                                                    <p class="d-rtl" style="text-align: justify;">
                                                        هندسة مدنيه 1995 – جامعة الأسكندرية
                                                        <br>
                                                        تمهيدى درجة الماجستير في ادارة المشروعات بالاكاديميةالعرييه للعلوم والتكنولوجيا
                                                        <br>
                                                        عضو مجلس ادارة شركة فاروس للهندسه والانشاءات
                                                        <br>
                                                        عضو مجلس ادارة الجمعيه المصريه للعلوم والتكنولوجيا
                                                    </p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down"></div>
                                                <div class="testimonial-author">
                                                    <div class="img-thumbnail img-thumbnail-small">
                                                        <img src="img/clients/client-2.jpg" alt="">
                                                    </div>
                                                    <p class="gess_light"><strong>م . وليد عثمان</strong><span>امين عام النقابة</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('site.footer.footer')
@endsection