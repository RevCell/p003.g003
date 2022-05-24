@extends("client_side.layout.master")
@section("home_content")
<!-- Main آقایانu Start-->
<div class="container">
    <nav id="menu" class="navbar">
        <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a class="home_link" title="خانه" href="index.html"><span>خانه</span></a></li>


                @include("client_side.layout.categories")


                <li class="menu_brands dropdown"><a href="#">برند ها</a>
                    <div class="dropdown-menu">
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="/shop/image/product/apple_logo-60x60.jpg" title="اپل" alt="اپل" /></a><a href="#">اپل</a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="/shop/image/product/canon_logo-60x60.jpg" title="کنون" alt="کنون" /></a><a href="#">کنون</a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"> <a href="#"><img src="/shop/image/product/hp_logo-60x60.jpg" title="اچ پی" alt="اچ پی" /></a><a href="#">اچ پی</a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="/shop/image/product/htc_logo-60x60.jpg" title="اچ تی سی" alt="اچ تی سی" /></a><a href="#">اچ تی سی</a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="/shop/image/product/palm_logo-60x60.jpg" title="پالم" alt="پالم" /></a><a href="#">پالم</a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="/shop/image/product/sony_logo-60x60.jpg" title="سونی" alt="سونی" /></a><a href="#">سونی</a> </div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="/shop/image/product/canon_logo-60x60.jpg" title="test" alt="test" /></a><a href="#">test</a> </div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="/shop/image/product/apple_logo-60x60.jpg" title="test 3" alt="test 3" /></a><a href="#">test 3</a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="/shop/image/product/canon_logo-60x60.jpg" title="test 5" alt="test 5" /></a><a href="#">test 5</a> </div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="/shop/image/product/canon_logo-60x60.jpg" title="test 6" alt="test 6" /></a><a href="#">test 6</a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="/shop/image/product/apple_logo-60x60.jpg" title="test 7" alt="test 7" /></a><a href="#">test 7</a> </div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="/shop/image/product/canon_logo-60x60.jpg" title="test1" alt="test1" /></a><a href="#">test1</a></div>
                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img src="/shop/image/product/apple_logo-60x60.jpg" title="test2" alt="test2" /></a><a href="#">test2</a></div>
                    </div>
                </li>
                <li class="custom-link"><a href="#">لینک های دلخواه</a></li>
                <li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی</a>
                    <div class="dropdown-menu custom_block">
                        <ul>
                            <li>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td><img alt="" src="/shop/image/banner/cms-block.jpg"></td>
                                        <td><img alt="" src="/shop/image/banner/responsive.jpg"></td>
                                        <td><img alt="" src="/shop/image/banner/cms-block.jpg"></td>
                                    </tr>
                                    <tr>
                                        <td><h4>بلاک های محتوا</h4></td>
                                        <td><h4>قالب واکنش گرا</h4></td>
                                        <td><h4>پشتیبانی ویژه</h4></td>
                                    </tr>
                                    <tr>
                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                    </tr>
                                    <tr>
                                        <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                        <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                        <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown information-link"><a>برگه ها</a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="login.html">ورود</a></li>
                            <li><a href="register.html">ثبت نام</a></li>
                            <li><a href="category.html">دسته بندی (شبکه/لیست)</a></li>
                            <li><a href="product.html">محصولات</a></li>
                            <li><a href="cart.html">سبد خرید</a></li>
                            <li><a href="checkout.html">تسویه حساب</a></li>
                            <li><a href="compare.html">مقایسه</a></li>
                            <li><a href="wishlist.html">لیست آرزو</a></li>
                            <li><a href="search.html">جستجو</a></li>
                        </ul>
                        <ul>
                            <li><a href="about-us.html">درباره ما</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="elements.html">عناصر</a></li>
                            <li><a href="faq.html">سوالات متداول</a></li>
                            <li><a href="sitemap.html">نقشه سایت</a></li>
                            <li><a href="contact-us.html">تماس با ما</a></li>
                        </ul>
                    </div>
                </li>
                <li class="contact-link"><a href="contact-us.html">تماس با ما</a></li>
                <li class="custom-link-right"><a href="#" target="_blank"> همین حالا بخرید!</a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- Main آقایانu End-->
</div>
<div id="container">
    <!-- Feature Box Start-->
    <div class="container">
        <div class="custom-feature-box row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_1">
                    <div class="title">ارسال رایگان</div>
                    <p>برای خرید های بیش از 100 هزار تومان</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_2">
                    <div class="title">پس فرستادن رایگان</div>
                    <p>بازگشت کالا تا 24 ساعت پس از خرید</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_3">
                    <div class="title">کارت هدیه</div>
                    <p>بهترین هدیه برای عزیزان شما</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-box fbox_4">
                    <div class="title">امتیازات خرید</div>
                    <p>از هر خرید امتیاز کسب کرده و از آن بهره بگیرید</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Box End-->
    <div class="container">
        <div class="row">
            <!-- Left Part Start-->
            <aside id="column-left" class="col-sm-3 hidden-xs">
                <h3 class="subtitle">دسته ها</h3>
                <div class="box-category">
                    <ul id="cat_accordion">

                        <li><a href="category.html">البسه</a> <span class="down"></span>

                            <ul>
                                <li><a href="category.html">آقایان</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">زیردسته ها</a></li>
                                        <li><a href="category.html">زیردسته ها</a></li>
                                        <li><a href="category.html">زیردسته ها</a></li>
                                        <li><a href="category.html">زیردسته ها</a></li>
                                        <li><a href="category.html">زیردسته جدید</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">بانوان</a></li>
                                <li><a href="category.html">دخترانه</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">زیردسته ها</a></li>
                                        <li><a href="category.html">زیردسته جدید</a></li>
                                        <li><a href="category.html">زیردسته جدید</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">پسرانه</a></li>
                                <li><a href="category.html">نوزاد</a></li>
                                <li><a href="category.html">لوازم</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="category.html">الکترونیکی</a> <span class="down"></span>
                            <ul>
                                <li><a href="category.html">لپ تاپ</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                        <li><a href="category.html">زیردسته جدید</a></li>
                                    </ul>
                                </li>
                                <li class="custom_id68"><a href="category.html">رومیزی</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                        <li><a href="category.html">زیردسته جدید</a></li>
                                        <li><a href="category.html">زیردسته جدید</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">دوربین</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">موبایل و تبلت</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">صوتی و تصویری</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                        <li><a href="category.html">زیردسته جدید</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">لوازم خانگی</a></li>
                            </ul>
                        </li>
                        <li><a href="category.html">کفش</a> <span class="down"></span>
                            <ul>
                                <li><a href="category.html">آقایان</a></li>
                                <li><a href="category.html">بانوان</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                        <li><a href="category.html">زیردسته ها</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">دخترانه</a></li>
                                <li><a href="category.html">پسرانه</a></li>
                                <li><a href="category.html">نوزاد</a></li>
                                <li><a href="category.html">لوازم</a><span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                        <li><a href="category.html">زیردسته ها</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="category.html">ساعت</a> <span class="down"></span>
                            <ul>
                                <li><a href="category.html">ساعت مردانه</a></li>
                                <li><a href="category.html">ساعت زنانه</a></li>
                                <li><a href="category.html">ساعت بچگانه</a></li>
                                <li><a href="category.html">لوازم</a></li>
                            </ul>
                        </li>
                        <li><a href="category.html">جواهرات</a> <span class="down"></span>
                            <ul>
                                <li><a href="category.html">نقره</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">طلا</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">تست 1</a></li>
                                        <li><a href="category.html">تست 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">الماس</a></li>
                                <li><a href="category.html">مروارید</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">زیورآلات آقایان</a></li>
                                <li><a href="category.html">زیورآلات کودکان</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">زیردسته های جدید</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="category.html">زیبایی و سلامت</a> <span class="down"></span>
                            <ul>
                                <li><a href="category.html">عطر و ادکلن</a></li>
                                <li><a href="category.html">آرایشی</a></li>
                                <li><a href="category.html">ضد آفتاب</a></li>
                                <li><a href="category.html">مراقبت از پوست</a></li>
                                <li><a href="category.html">مراقبت از چشم</a></li>
                                <li><a href="category.html">مراقبت از مو</a></li>
                            </ul>
                        </li>
                        <li><a href="category.html">کودک و نوزاد</a> <span class="down"></span>
                            <ul>
                                <li><a href="category.html">اسباب بازی</a></li>
                                <li><a href="category.html">بازی</a> <span class="down"></span>
                                    <ul>
                                        <li><a href="category.html">تست 25</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">پازل</a></li>
                                <li><a href="category.html">سرگرمی</a></li>
                                <li><a href="category.html">متنوع</a></li>
                                <li><a href="category.html">سلامت و امنیت</a></li>
                            </ul>
                        </li>
                        <li><a href="category.html">ورزشی</a> <span class="down"></span>
                            <ul>
                                <li><a href="category.html">دوچرخه سواری</a></li>
                                <li><a href="category.html">دویدن</a></li>
                                <li><a href="category.html">شنا</a></li>
                                <li><a href="category.html">فوتبال</a></li>
                                <li><a href="category.html">گلف</a></li>
                                <li><a href="category.html">موج سواری</a></li>
                            </ul>
                        </li>
                        <li><a href="category.html">خانه و باغچه</a> <span class="down"></span>
                            <ul>
                                <li><a href="category.html">لوازم خواب</a></li>
                                <li><a href="category.html">خوراک</a></li>
                                <li><a href="category.html">لوازم منزل</a></li>
                                <li><a href="category.html">آشپزخانه</a></li>
                                <li><a href="category.html">روشنایی</a></li>
                                <li><a href="category.html">ابزارها</a></li>
                            </ul>
                        </li>
                        <li><a href="category.html">خوراک</a> <span class="down"></span>
                            <ul>
                                <li><a href="category.html">نوشیدنی</a></li>
                                <li><a href="category.html">تنقلات</a></li>
                                <li><a href="category.html">میان وعده</a></li>
                                <li><a href="category.html">خشک بار</a></li>
                                <li><a href="category.html">شکلات</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <h3 class="subtitle">پرفروش ها</h3>
                <div class="side-item">
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/apple_cinema_30-50x50.jpg" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">تی شرت کتان مردانه</a></h4>
                            <p class="price"><span class="price-new">110000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-10%</span></p>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/iphone_1-50x50.jpg" alt="آیفون 7" title="آیفون 7" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">آیفون 7</a></h4>
                            <p class="price"> 2200000 تومان </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_1-50x50.jpg" alt="آیدیا پد یوگا" title="آیدیا پد یوگا" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                            <p class="price"> 900000 تومان </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/sony_vaio_1-50x50.jpg" alt="کفش راحتی مردانه" title="کفش راحتی مردانه" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">کفش راحتی مردانه</a></h4>
                            <p class="price"> <span class="price-new">32000 تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-25%</span> </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/FinePix-Long-Zoom-Camera-50x50.jpg" alt="دوربین فاین پیکس" title="دوربین فاین پیکس" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                            <p class="price">122000 تومان</p>
                        </div>
                    </div>
                </div>
                <h3 class="subtitle">ویژه</h3>
                <div class="side-item">
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_pro_1-50x50.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">کتاب آموزش باغبانی</a></h4>
                            <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> </p>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/samsung_tab_1-50x50.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">تبلت ایسر</a></h4>
                            <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/apple_cinema_30-50x50.jpg" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="http://demo.harnishdesign.net/opencart/marketshop/v1/index.php?route=product/product&amp;product_id=42">تی شرت کتان مردانه</a></h4>
                            <p class="price"> <span class="price-new">110000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-10%</span> </p>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/nikon_d300_1-50x50.jpg" alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                            <p class="price"> <span class="price-new">92000 تومان</span> <span class="price-old">98000 تومان</span> <span class="saving">-6%</span> </p>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/nikon_d300_5-50x50.jpg" alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                            <p class="price"> <span class="price-new">66000 تومان</span> <span class="price-old">90000 تومان</span> <span class="saving">-27%</span> </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_air_1-50x50.jpg" alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                            <p class="price"> <span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span> </p>
                        </div>
                    </div>
                </div>
                <div class="list-group">
                    <h3 class="subtitle">محتوای سفارشی</h3>
                    <p>این یک بلاک محتواست. هر نوع محتوایی شامل html، نوشته یا تصویر را میتوانید در آن قرار دهید. </p>
                    <p> در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. </p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <div class="banner owl-carousel">
                    <div class="item"> <a href="#"><img src="/shop/image/banner/small-banner1-265x350.jpg" alt="small banner" class="img-responsive" /></a> </div>
                    <div class="item"> <a href="#"><img src="/shop/image/banner/small-banner-265x350.jpg" alt="small banner1" class="img-responsive" /></a> </div>
                </div>
                <h3 class="subtitle">جدیدترین</h3>
                <div class="side-item">
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/iphone_6-50x50.jpg" alt="کرم مو آقایان" title="کرم مو آقایان" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">کرم مو آقایان</a></h4>
                            <p class="price"> 42300 تومان </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/nikon_d300_5-50x50.jpg" alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                            <p class="price"> <span class="price-new">66000 تومان</span> <span class="price-old">90000 تومان</span> <span class="saving">-27%</span> </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/nikon_d300_4-50x50.jpg" alt="کرم لخت کننده مو" title="کرم لخت کننده مو" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">کرم لخت کننده مو</a></h4>
                            <p class="price"> 88000 تومان </p>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_5-50x50.jpg" alt="ژل حمام بانوان" title="ژل حمام بانوان" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">ژل حمام بانوان</a></h4>
                            <p class="price"> <span class="price-new">19500 تومان</span> <span class="price-old">21900 تومان</span> <span class="saving">-4%</span> </p>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_4-50x50.jpg" alt="عطر گوچی" title="عطر گوچی" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">عطر گوچی</a></h4>
                            <p class="price"> 85000 تومان </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_3-50x50.jpg" alt="رژ لب گارنیر" title="رژ لب گارنیر" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">رژ لب گارنیر</a></h4>
                            <p class="price"> 123000 تومان </p>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_2-50x50.jpg" alt="عطر نینا ریچی" title="عطر نینا ریچی" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">عطر نینا ریچی</a></h4>
                            <p class="price"> 110000 تومان </p>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Left Part End-->
            <!--Middle Part Start-->
            <div id="content" class="col-sm-9">
                <!-- Slideshow Start-->
                <div class="slideshow single-slider owl-carousel">
                    <div class="item"> <a href="#"><img class="img-responsive" src="/shop/image/slider/banner-1.jpg" alt="banner 1" /></a> </div>
                    <div class="item"> <a href="#"><img class="img-responsive" src="/shop/image/slider/banner-2.jpg" alt="banner 2" /></a> </div>
                    <div class="item"> <a href="#"><img class="img-responsive" src="/shop/image/slider/banner-3.jpg" alt="banner 3" /></a> </div>
                </div>
                <!-- Slideshow End-->
                <!-- Featured محصولات Start-->
                <h3 class="subtitle">ویژه</h3>
                <div class="owl-carousel product_carousel">
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/apple_cinema_30-200x200.jpg" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">تی شرت کتان مردانه</a></h4>
                            <p class="price"><span class="price-new">110000 تومان</span><span class="price-old">122000 تومان</span><span class="saving">-10%</span></p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick="cart.add('42');"><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="مقایسه this محصولات" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/samsung_tab_1-200x200.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">تبلت ایسر</a></h4>
                            <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick="cart.add('49');"><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="مقایسه this محصولات" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/sony_vaio_1-200x200.jpg" alt="کفش راحتی مردانه" title="کفش راحتی مردانه" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">کفش راحتی مردانه</a></h4>
                            <p class="price"> <span class="price-new">32000 تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-25%</span> </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick="cart.add('46');"><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="مقایسه this محصولات" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_1-200x200.jpg" alt="آیدیا پد یوگا" title="آیدیا پد یوگا" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                            <p class="price"> 900000 تومان </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick="cart.add('43');"><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="مقایسه this محصولات" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/iphone_1-200x200.jpg" alt="آیفون 7" title="آیفون 7" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">آیفون 7</a></h4>
                            <p class="price"> 2200000 تومان </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="مقایسه this محصولات" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/canon_eos_5d_1-200x200.jpg" alt="تیشرت آستین بلند مردانه" title="تیشرت آستین بلند مردانه" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">تیشرت آستین بلند مردانه</a></h4>
                            <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-20%</span> </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="مقایسه this محصولات" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Featured محصولات End-->
                <!-- Banner Start-->
                <div class="marketshop-banner">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="/shop/image/banner/sample-banner-3-400x200.jpg" alt="بنر نمونه 3" title="بنر نمونه 3" /></a></div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="/shop/image/banner/sample-banner-1-400x200.jpg" alt="بنر نمونه" title="بنر نمونه" /></a></div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="/shop/image/banner/sample-banner-2-400x200.jpg" alt="بنر نمونه 2" title="بنر نمونه 2" /></a></div>
                    </div>
                </div>
                <!-- Banner End-->
                <!-- دسته ها محصولات Slider Start-->
                <div class="category-module" id="latest_category">
                    <h3 class="subtitle">الکترونیکی - <a class="viewall" href="category.tpl">نمایش همه</a></h3>
                    <div class="category-module-content">
                        <ul id="sub-cat" class="tabs">
                            <li><a href="#tab-cat1">لپ تاپ</a></li>
                            <li><a href="#tab-cat2">رومیزی</a></li>
                            <li><a href="#tab-cat3">دوربین</a></li>
                            <li><a href="#tab-cat4">موبایل و تبلت</a></li>
                            <li><a href="#tab-cat5">صوتی و تصویری</a></li>
                            <li><a href="#tab-cat6">لوازم خانگی</a></li>
                        </ul>
                        <div id="tab-cat1" class="tab_content">
                            <div class="owl-carousel latest_category_tabs">
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/samsung_tab_1-200x200.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">تبلت ایسر</a></h4>
                                        <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_pro_1-200x200.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html"> کتاب آموزش باغبانی </a></h4>
                                        <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_air_1-200x200.jpg" alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                                        <p class="price"> <span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_1-200x200.jpg" alt="آیدیا پد یوگا" title="آیدیا پد یوگا" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                                        <p class="price"> 900000 تومان </p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/ipod_shuffle_1-200x200.jpg" alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                                        <p class="price"> 122000 تومان </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/ipod_touch_1-200x200.jpg" alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                                        <p class="price"> <span class="price-new">62000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-50%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-cat2" class="tab_content">
                            <div class="owl-carousel latest_category_tabs">
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/ipod_shuffle_1-200x200.jpg" alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                                        <p class="price"> 122000 تومان </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-cat3" class="tab_content">
                            <div class="owl-carousel latest_category_tabs">
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/FinePix-Long-Zoom-Camera-200x200.jpg" alt="دوربین فاین پیکس" title="دوربین فاین پیکس" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                                        <p class="price"> 122000 تومان </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/nikon_d300_1-200x200.jpg" alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                                        <p class="price"> <span class="price-new">92000 تومان</span> <span class="price-old">98000 تومان</span> <span class="saving">-6%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-cat4" class="tab_content">
                            <div class="owl-carousel latest_category_tabs">
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/samsung_tab_1-200x200.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">تبلت ایسر</a></h4>
                                        <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/iphone_1-200x200.jpg" alt="آیفون 7" title="آیفون 7" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">آیفون 7</a></h4>
                                        <p class="price"> 2200000 تومان </p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/ipod_touch_1-200x200.jpg" alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                                        <p class="price"> <span class="price-new">62000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-50%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/palm_treo_pro_1-200x200.jpg" alt="موبایل HTC M7" title="موبایل HTC M7" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">موبایل HTC M7</a></h4>
                                        <p class="price"> 377000 تومان </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-cat5" class="tab_content">
                            <div class="owl-carousel latest_category_tabs">
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/samsung_tab_1-200x200.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">تبلت ایسر</a></h4>
                                        <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/ipod_classic_1-200x200.jpg" alt="آیپاد نسل 5" title="آیپاد نسل 5" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">آیپاد نسل 5</a></h4>
                                        <p class="price"> 122000 تومان </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_pro_1-200x200.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html"> کتاب آموزش باغبانی </a></h4>
                                        <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_air_1-200x200.jpg" alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                                        <p class="price"> <span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_1-200x200.jpg" alt="آیدیا پد یوگا" title="آیدیا پد یوگا" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                                        <p class="price"> 900000 تومان </p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/ipod_nano_1-200x200.jpg" alt="پخش کننده موزیک" title="پخش کننده موزیک" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">پخش کننده موزیک</a></h4>
                                        <p class="price"> 122000 تومان </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/FinePix-Long-Zoom-Camera-200x200.jpg" alt="دوربین فاین پیکس" title="دوربین فاین پیکس" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                                        <p class="price"> 122000 تومان </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/ipod_shuffle_1-200x200.jpg" alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                                        <p class="price"> 122000 تومان </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick="cart.add('34');"><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="wishlist.add('34');"><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick="compare.add('34');"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/ipod_touch_1-200x200.jpg" alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                                        <p class="price"> <span class="price-new">62000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-50%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/nikon_d300_1-200x200.jpg" alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                                        <p class="price"> <span class="price-new">92000 تومان</span> <span class="price-old">98000 تومان</span> <span class="saving">-6%</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-cat6" class="tab_content">
                            <div class="owl-carousel latest_category_tabs">
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/ipod_classic_1-200x200.jpg" alt="آیپاد نسل 5" title="آیپاد نسل 5" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">آیپاد نسل 5</a></h4>
                                        <p class="price"> 122000 تومان </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick="cart.add('48');"><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb">
                                    <div class="image"><a href="product.html"><img src="/shop/image/product/ipod_nano_1-200x200.jpg" alt="پخش کننده موزیک" title="پخش کننده موزیک" class="img-responsive" /></a></div>
                                    <div class="caption">
                                        <h4><a href="product.html">پخش کننده موزیک</a></h4>
                                        <p class="price"> 122000 تومان </p>
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- دسته ها محصولات Slider End-->
                <!-- Banner Start -->
                <div class="marketshop-banner">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="/shop/image/banner/sample-banner-4-400x150.jpg" alt="2 Block Banner" title="2 Block Banner" /></a></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="/shop/image/banner/sample-banner-5-400x150.jpg" alt="2 Block Banner 1" title="2 Block Banner 1" /></a></div>
                    </div>
                </div>
                <!-- Banner End -->
                <!-- دسته ها محصولات Slider Start -->
                <h3 class="subtitle">زیبایی و سلامت - <a class="viewall" href="category.html">نمایش همه</a></h3>
                <div class="owl-carousel latest_category_carousel">
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/iphone_6-200x200.jpg" alt="کرم مو آقایان" title="کرم مو آقایان" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">کرم مو آقایان</a></h4>
                            <p class="price"> 42300 تومان </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/nikon_d300_5-200x200.jpg" alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                            <p class="price"> <span class="price-new">66000 تومان</span> <span class="price-old">90000 تومان</span> <span class="saving">-27%</span> </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/nikon_d300_4-200x200.jpg" alt="کرم لخت کننده مو" title="کرم لخت کننده مو" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">کرم لخت کننده مو</a></h4>
                            <p class="price"> 88000 تومان </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href=""><img src="/shop/image/product/macbook_5-200x200.jpg" alt="ژل حمام بانوان" title="ژل حمام بانوان" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">ژل حمام بانوان</a></h4>
                            <p class="price"> <span class="price-new">19500 تومان</span> <span class="price-old">21900 تومان</span> <span class="saving">-4%</span> </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick="cart.add('61');"><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="wishlist.add('61');"><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick="compare.add('61');"><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_4-200x200.jpg" alt="عطر گوچی" title="عطر گوچی" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">عطر گوچی</a></h4>
                            <p class="price"> 85000 تومان </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_3-200x200.jpg" alt="رژ لب گارنیر" title="رژ لب گارنیر" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">رژ لب گارنیر</a></h4>
                            <p class="price"> 123000 تومان </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_2-200x200.jpg" alt="عطر نینا ریچی" title="عطر نینا ریچی" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">عطر نینا ریچی</a></h4>
                            <p class="price"> 110000 تومان </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- دسته ها محصولات Slider End -->
                <!-- Brand محصولات Slider Start-->
                <h3 class="subtitle">اپل - <a class="viewall" href="category.html">نمایش همه</a></h3>
                <div class="owl-carousel latest_brands_carousel">
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/iphone_6-200x200.jpg" alt="کرم مو آقایان" title="کرم مو آقایان" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">کرم مو آقایان</a></h4>
                            <p class="price"> 42300 تومان </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/nikon_d300_5-200x200.jpg" alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                            <p class="price"> <span class="price-new">66000 تومان</span> <span class="price-old">90000 تومان</span> <span class="saving">-27%</span> </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/nikon_d300_4-200x200.jpg" alt="کرم لخت کننده مو" title="کرم لخت کننده مو" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">کرم لخت کننده مو</a></h4>
                            <p class="price"> 88000 تومان </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_5-200x200.jpg" alt="ژل حمام بانوان" title="ژل حمام بانوان" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">ژل حمام بانوان</a></h4>
                            <p class="price"> <span class="price-new">19500 تومان</span> <span class="price-old">21900 تومان</span> <span class="saving">-4%</span> </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_4-200x200.jpg" alt="عطر گوچی" title="عطر گوچی" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">عطر گوچی</a></h4>
                            <p class="price"> 85000 تومان </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_3-200x200.jpg" alt="رژ لب گارنیر" title="رژ لب گارنیر" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">رژ لب گارنیر</a></h4>
                            <p class="price"> 123000 تومان </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_2-200x200.jpg" alt="عطر نینا ریچی" title="عطر نینا ریچی" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">عطر نینا ریچی</a></h4>
                            <p class="price"> 110000 تومان </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/hp_3-200x200.jpg" alt="ساعت کاسیو سری Youth" title="ساعت کاسیو سری Youth" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">ساعت کاسیو سری Youth</a></h4>
                            <p class="price"> 1.5 میلیون تومان </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/hp_2-200x200.jpg" alt="ساعت بند چرمی" title="ساعت بند چرمی" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">ساعت بند چرمی</a></h4>
                            <p class="price"> 180000 تومان </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/ipod_classic_1-200x200.jpg" alt="آیپاد نسل 5" title="آیپاد نسل 5" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">آیپاد نسل 5</a></h4>
                            <p class="price"> 122000 تومان </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_pro_1-200x200.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html"> کتاب آموزش باغبانی </a></h4>
                            <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb">
                        <div class="image"><a href="product.html"><img src="/shop/image/product/macbook_air_1-200x200.jpg" alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                            <p class="price"> <span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span> </p>
                        </div>
                        <div class="button-group">
                            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                            <div class="add-to-links">
                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Brand محصولات Slider End -->
                <!-- Brand Logo Carousel Start-->
                <div id="carousel" class="owl-carousel nxt">
                    <div class="item text-center"> <a href="#"><img src="/shop/image/product/apple_logo-100x100.jpg" alt="پالم" class="img-responsive" /></a> </div>
                    <div class="item text-center"> <a href="#"><img src="/shop/image/product/canon_logo-100x100.jpg" alt="سونی" class="img-responsive" /></a> </div>
                    <div class="item text-center"> <a href="#"><img src="/shop/image/product/apple_logo-100x100.jpg" alt="کنون" class="img-responsive" /></a> </div>
                    <div class="item text-center"> <a href="#"><img src="/shop/image/product/canon_logo-100x100.jpg" alt="اپل" class="img-responsive" /></a> </div>
                    <div class="item text-center"> <a href="#"><img src="/shop/image/product/apple_logo-100x100.jpg" alt="اچ تی سی" class="img-responsive" /></a> </div>
                    <div class="item text-center"> <a href="#"><img src="/shop/image/product/canon_logo-100x100.jpg" alt="اچ پی" class="img-responsive" /></a> </div>
                    <div class="item text-center"> <a href="#"><img src="/shop/image/product/apple_logo-100x100.jpg" alt="brand" class="img-responsive" /></a> </div>
                    <div class="item text-center"> <a href="#"><img src="/shop/image/product/canon_logo-100x100.jpg" alt="brand1" class="img-responsive" /></a> </div>
                </div>
                <!-- Brand Logo Carousel End -->
            </div>
            <!--Middle Part End-->
        </div>
    </div>
</div>
@endsection
