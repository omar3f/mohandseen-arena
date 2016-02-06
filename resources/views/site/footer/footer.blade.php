<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="gess footer-ribon">
                <span>كن على إتصال</span>
            </div>
            <div class="col-md-3" style="float: right;">
                <div class="newsletter">
                    <h4 class="d-rtl gess">إتصل بنا</h4>
                    <p class="d-rtl gess_light">من فضلك ادخل البريد الإلكتروني وسوف نقوم بالرد على سيادتكم فى اقرب وقت ممكن</p>

                    <div class="alert alert-success hidden" id="newsletterSuccess">
                        <strong>تم الإرسال!</strong> تمت إضافة البريد الإلكتروني وسوف يتم الترد
                    </div>

                    <div class="alert alert-danger hidden" id="newsletterError"></div>

                    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                        <div class="input-group">
                            <input class="form-control" placeholder="البريد الإلكتروني" name="email" id="email" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">إرسال</button>
										</span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3" style="float: right;">
                <h4 class="d-rtl gess">أخر التعليقات</h4>
                <div id="tweet" class="twitter" data-account-id="">
                    <p>... إنتظر من فضلك</p>
                </div>
            </div>
            <div class="col-md-4" style="float: right;">
                <div class="contact-details">
                    <h4 class="d-rtl gess">إتصل بنا</h4>
                    <ul class="contact">
                        <li><p><i class="icon icon-map-marker"></i>
                                <strong style="float:right;">العنوان : 34 شارع بور سعيد الشاطبى الأسكندرية</strong></p>.
                        </li>
                        <li><p><i class="icon icon-phone"></i>
                                <strong style="float:right;">التليفون : 0123456789</strong></p>.
                        </li>
                        <li><p><i class="icon icon-envelope"></i>
                                <strong style="float:right;"><a href="mailto:mail@example.com">mail@example.com</a> : البريد الإلكتروني</strong></p>.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2" style="float: right;">
                <h4 class="d-rtl gess">تابعنا</h4>
                <div class="social-icons">
                    <ul class="social-icons" style="float:right;">
                        <li class="facebook"><a href="#" target="_blank" data-placement="bottom" rel="tooltip" title="Facebook">Facebook</a></li>
                        <li class="twitter"><a href="#" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li>
                        <li class="linkedin"><a href="#" target="_blank" data-placement="bottom" rel="tooltip" title="Linkedin">Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a href="index.html" class="logo">
                        <img alt="Porto Website Template" class="img-responsive" src="img/logo-footer.png">
                    </a>
                </div>
                <div class="col-md-7">
                    <p>© Copyright 2015. جميع الحقوق محفوطة.</p>
                </div>
                <div class="col-md-4">
                    <nav id="sub-menu">
                        <ul>
                            <li><a href="#">إستفسارات</a></li>
                            <li><a href="#">خريطة الموقع</a></li>
                            <li><a href="#">إتصال</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
