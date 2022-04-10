<!DOCTYPE html>

<html class="no-js" lang="zxx">



@include('include.head')



<body>



    {{-- <div class="preloader-activate preloader-active open_tm_preloader">

        <div class="preloader-area-wrap">

            <div class="spinner d-flex justify-content-center align-items-center h-100">

                <div class="bounce1"></div>

                <div class="bounce2"></div>

                <div class="bounce3"></div>

            </div>

        </div>

    </div> --}}



    @include('include.navbar-bottom')



    <!--====================  header area ====================-->

    <!-- Header Top Wrap Start -->

    {{-- @include('include.navbar-top') --}}

    <!-- Header Top Wrap End -->



    <!-- Header Bottom Wrap Start -->



    <!-- Header Bottom Wrap End -->

    <!--====================  End of header area  ====================-->



    <!-- breadcrumb-area start -->

    {{-- <div class="breadcrumb-area">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="breadcrumb_box text-center">

                        <h2 class="breadcrumb-title">Why choose us</h2>

                        <!-- breadcrumb-list start -->

                        <ul class="breadcrumb-list">

                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                            <li class="breadcrumb-item active">Why choose us</li>

                        </ul>

                        <!-- breadcrumb-list end -->

                    </div>

                </div>

            </div>

        </div>

    </div> --}}

    <!-- breadcrumb-area end -->



    <div id="main-wrapper">



        @yield('content')



        <!--====================  footer area ====================-->

        @include('include.footer')

        <!--====================  End of footer area  ====================-->



    </div>



    <!--====================  scroll top ====================-->

    {{-- <a href="#" class="scroll-top" id="scroll-top">

        <i class="arrow-top fal fa-long-arrow-up"></i>

        <i class="arrow-bottom fal fa-long-arrow-up"></i>

    </a> --}}

    <!--====================  End of scroll top  ====================-->



    <!--====================  mobile menu overlay ====================-->

    <div class="mobile-menu-overlay" id="mobile-menu-overlay">

        <div class="mobile-menu-overlay__inner">

            <div class="mobile-menu-overlay__header">

                <div class="container-fluid">

                    <div class="row align-items-center">

                        <div class="col-md-6 col-8">

                            <!-- logo -->

                            <div class="logo">

                                <a href="{{ route('index-home') }}">

                                    <img src="{{ asset('img') }}/logo-wirakom-2.png" class="img-fluid" alt="">

                                </a>

                            </div>

                        </div>

                        <div class="col-md-6 col-4">

                            <!-- mobile menu content -->

                            <div class="mobile-menu-content text-right">

                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="mobile-menu-overlay__body">

                <nav class="offcanvas-navigation">

                    <ul>

                        <li class="has-children">

                            <a href="#"><span>About Bearact</span></a>

                            <ul class="sub-menu">

                                <li><a href="{{ route('about-us') }}"><span>About</span></a></li>

                                <li><a href="{{ route('contact-us') }}"><span>Contact</span></a></li>

                            </ul>

                        </li>

                        <li class="has-children">

                            <a href="#">Solutions</a>

                            <ul class="sub-menu">

                                <li><a href="{{ route('solutions-energy') }}"><span>Energy</span></a></li>

                                <li><a href="{{ route('solutions-public-transportation') }}"><span>Public &
                                            Transportation</span></a></li>

                                <li><a href="{{ route('solutions-network-operator') }}"><span>Network Operator &
                                            Service Provider</span></a></li>

                                <li><a href="{{ route('solutions-iot') }}"><span>IoT</span></a></li>



                            </ul>

                        </li>
                        <li class="has-children">

                            <a href="#"><span>Products</span></a>

                            <ul class="sub-menu">
                                <?php
                                $productBrand = DB::table('product_brand')
                                    ->select('product_brand_id', 'brand_name')
                                    ->orderBy('brand_name', 'ASC')
                                    ->get();
                                ?>

                                <?php foreach ($productBrand as $key => $p): ?>
                                <li class="has-children"><a
                                        href="{{ url('products?brand=' . $p->product_brand_id) }}"><span><?php echo $p->brand_name; ?></span></a>

                                    <?php
                                    $productType = DB::table('product_type')
                                        ->select('product_type_id', 'type_name')
                                        ->orderBy('type_name', 'ASC')
                                        ->get();
                                    
                                    $productSub = DB::table('product')
                                        ->join('product_detail', 'product_detail.product_code', '=', 'product.product_code')
                                        ->join('product_brand as tba', 'tba.product_brand_id', '=', 'product_detail.product_brand_id')
                                        ->join('product_category as tbb', 'tbb.product_category_id', '=', 'product_detail.product_category_id')
                                        ->join('product_family as tbc', 'tbc.product_family_id', '=', 'product_detail.product_family_id')
                                        ->select('product.*', 'product_detail.*', 'tba.brand_name as brand', 'tbb.category_name as cat', 'tbc.family_name as family');
                                    
                                    $productSub = $productSub->where('product_detail.product_brand_id', $p->product_brand_id);
                                    
                                    $productSub = $productSub->get();
                                    
                                    foreach ($productSub as $key => $s) {
                                        $var['list_type'][] = $s->product_type_id;
                                    }
                                    
                                    if (!empty($var['list_type'])) {
                                        foreach ($productType as $key => $j) {
                                            if (!in_array($j->product_type_id, $var['list_type'])) {
                                                unset($productType[$key]);
                                            }
                                        }
                                    } else {
                                        $productType = [];
                                    }
                                    ?>

                                    <ul class="sub-menu">
                                        <?php foreach ($productType as $key => $t): ?>
                                        <li>
                                            <a
                                                href="{{ url('products?brand=' . $p->product_brand_id . '&type=' . $t->product_type_id) }}"><span><?php echo $t->type_name; ?></span></a>
                                        </li>
                                        <?php endforeach ?>

                                    </ul>
                                </li>
                                <?php endforeach ?>



                            </ul>

                        </li>

                        {{-- <li class="has-children">

                            <a href="#">Products</a>

                            <ul class="sub-menu">

                                <li><a href="catalog.php"><span>Mars</span></a></li>

                                <li><a href="catalog.php"><span>Infinet Wireles</span></a></li>

                                <li><a href="catalog.php"><span>Wisnetworks</span></a></li>

                                <li><a href="catalog.php"><span>Mstronics</span></a></li>

                                <li><a href="catalog.php"><span>Radiowaves</span></a></li>

                                <li><a href="catalog.php"><span>Transtector</span></a></li>

                                <li><a href="catalog.php"><span>Inster</span></a></li>

                            </ul>

                        </li> --}}
                        <li class="{{ request()->is('success-story') ? 'active' : '' }}">

                            <a href="{{ route('success-story') }}"><span>Success Story</span></a>

                        </li>

                        <li class="{{ request()->is('resource') ? 'active' : '' }}">

                            <a href="{{ route('resource') }}"><span>Resource And Tools</span></a>

                        </li>
                        {{-- <li>

                            <a href="success-story.php"><span>Success Story</span></a>

                        </li> --}}

                        {{-- <li class="has-children">

                            <a href="#">Resources & Tools</a>

                            <ul class="submenu">

                                <li><a href="{{ route('resource-mars') }}"><span>Mars</span></a></li>

                                <li><a href="{{ route('resource-infinet') }}"><span>Infinet Wireles</span></a></li>

                                <li><a href="{{ route('resource-wisnetworks') }}"><span>Wisnetworks</span></a></li>

                                <li><a href="{{ route('resource-mstronics') }}"><span>Mstronics</span></a></li>

                                <li><a href="{{ route('resource-radiowaves') }}"><span>Radiowaves</span></a></li>

                                <li><a href="{{ route('resource-transtector') }}"><span>Transtector</span></a></li>

                                <li><a href="{{ route('resource-inster') }}"><span>Inster</span></a></li>

                            </ul>

                        </li> --}}

                        <li>

                            <a href="{{ route('news') }}"><span>News</span></a>

                        </li>

                        <li>

                            <a href="{{ route('reseller') }}"><span>Partners</span></a>

                        </li>

                        <li>

                            <a href="{{ route('login') }}"><span>Sign In</span></a>

                        </li>

                    </ul>







                </nav>

            </div>

        </div>

    </div>

    <!--====================  End of mobile menu overlay  ====================-->





    <!--====================  search overlay ====================-->

    <!--<div class="search-overlay" id="search-overlay">-->



    <!--    <div class="search-overlay__header">-->

    <!--        <div class="container-fluid">-->

    <!--            <div class="row align-items-center">-->

    <!--                <div class="col-md-6 ml-auto col-4">-->

    <!-- search content -->

    <!--                    <div class="search-content text-right">-->

    <!--                        <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>-->

    <!--                    </div>-->

    <!--                </div>-->

    <!--            </div>-->

    <!--        </div>-->

    <!--    </div>-->

    <!--    <div class="search-overlay__inner">-->

    <!--        <div class="search-overlay__body">-->

    <!--            <div class="search-overlay__form">-->

    <!--                <form action="#">-->

    <!--                    <input type="text" placeholder="Search">-->

    <!--                </form>-->

    <!--            </div>-->

    <!--        </div>-->

    <!--    </div>-->

    <!--</div>-->

    <!--====================  End of search overlay  ====================-->





    <!-- JS ============================================ -->

    @include('include.script')



</body>



</html>
