@extends("front.layouts.app")
@section("title", "SEX-DOLLS MAIN PRODUCTS")
@section('description')
    <meta name="description" content="+1000 sex dolls in stock,  buy tpe or silicone love doll on our store, highest quality materials worlwide discreet shipping. We offer the best choices from every brands retailer. Robot sex doll, Big ass, skinny, bbw, small or big tits, brunette, asian, japanese, brazilian, indian, latina, ebony, realistic pussy.">
@endsection
@section('content')
<div class="page-content">
    <!------------------------------------- Landing page slider start-------------------------------------->
        <div class="holder fullwidth full-nopad mt-0">
            <div class="container">
                <div class="bnslider-wrapper">
                    <div class="bnslider bnslider--lg keep-scale" id="bnslider-001" data-slick='{"arrows": true, "dots": true}' data-autoplay="false" data-speed="12000" data-start-width="1917" data-start-height="764" data-start-mwidth="1550" data-start-mheight="1000">
                        @forelse($backgrounds as $background)
                        <div class="bnslider-slide">
                            <div class="bnslider-image-mobile lazyload" data-bgset="{{ asset('public/') }}{{ $background->url }}"></div>
                            <div class="bnslider-image lazyload" data-bgset="{{ asset('public/') }}{{ $background->url }}"></div>
                        </div>
                            @empty
                        <p>No background at the moment, Please contact admin to add background</p>
                        @endforelse
                    </div>
                    <div class="bnslider-arrows container-fluid">
                        <div></div>
                    </div>
                    <div class="bnslider-dots container-fluid"></div>
                </div>
            </div>
        </div>
    <!------------------------------------- Landing page slider end-------------------------------------->
    <div class="holder holder-mt-medium ">
        <!-------------- Description related to the choices + title + picture  start -------------------------->
            {{-- <div class="row ">
                <div class="row" style="border: #0d080b">
                    <div class="col-md-6">
                        <img src="{{ asset("public/assets/front/images/products/product-02.html") }}" data-src="{{ asset("public/assets/front/images/products/product-02.html") }}" alt="" class="lazyload">
                    </div>
                    <div class="col-md-6">
                        <h1> Others Skinny</h1>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>
                        <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure</p>
                    </div>
                </div>
            </div> --}}
        <!------------------ Description related to the choices + title + picture  end ------------------->
    </div>
    <div class="holder">
        <div class="container">
            <!------------------------------------- Male and Female tab start -------------------------------------->
                <div class="holder holder-mt-medium section-name-products-grid" id="productsGrid01">
                    <div class="container">
                        <div class="title-wrap text-center">
                            <div class="title-wrap title-tabs-wrap text-center js-title-tabs">
                                <div class="title-tabs">
                                    {{-- <h2 class="h3-style">
                                        <a href="#" data-total="8" data-loaded="4" data-grid-tab-title><span class="title-tabs-text theme-font">Female</span></a>
                                    </h2>
                                    <h2 class="h3-style">
                                        <a href="#" data-total="8" data-loaded="4" data-grid-tab-title><span class="title-tabs-text theme-font">Male</span></a>
                                    </h2> --}}
                                    <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                                        <li class="nav-item">
                                        <a class="nav-link active title-tabs-text theme-font" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Female</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link title-tabs-text theme-font" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">Male</a>
                                        </li>
                                        <li class="nav-item">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="prd-grid-wrap">
                            <div class="prd-grid data-to-show-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2" data-grid-tab-content></div>
                            <div class="loader-horizontal-sm js-loader-horizontal-sm d-none" data-loader-horizontal style="opacity: 0;"><span></span></div>
                        </div>
                    </div>
                </div>
            <!------------------------------------- Male and Female tab end-------------------------------------->

            <!--------------------------------------  Best match field + Number of best match start -------------->
                {{-- <div class="page-title text-center">
                    <h4>BEST MATCH</h4>
                </div>
                <div class="filter-row ">
                    <div class="row text-center">
                        <div class="items-count mr-5">35 item(s)</div>
                    </div>
                </div> --}}
            <!--------------------------------------  Best match field + Number of best match end -------------->
            <!--------------------------------------   tab content start -------------->
            <div class="tab-content" id="custom-content-above-tabContent">
                <!-- Female tab content  start -->
                <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                    <div class="row">
                        <!-----------------------------------   Criterias and choices start ----------------------->
                        <div class="col-lg-4 aside aside--left filter-col filter-mobile-col filter-col--sticky js-filter-col filter-col--opened-desktop"
                            data-grid-tab-content>
                            <div class="filter-col-content filter-mobile-content">
                                <div class="sidebar-block">
                                    <div class="sidebar-block_title">
                                        <span>CRITERIA</span>
                                    </div>

                                </div>
                                @foreach ($criteria as $crite)
                                @if ($crite->criteria_gender  == "2")
                                    <div class="sidebar-block filter-group-block open">
                                        <div class="sidebar-block_title">
                                            {{-- <a href="javascript:void(0);" title="{{ $crite->criteria_name }}" class="open">{{ $crite->criteria_name }} &nbsp;<span></span></a> --}}
                                            <span>{{ $crite->criteria_name }}</span>
                                            <span class="toggle-arrow">
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </div>

                                        <div class="sidebar-block_content">
                                            @if ($crite->choices)
                                            <ul class="category-list">
                                                @foreach ($crite->choices as $choice)
                                                    <div class="prd-block_agreement prd-block_info_item order-0 order-md-100 text-left" data-agree>
                                                        <input id="choicecheckbox{{ $choice->id }}" value="{{ $choice->id }}" class="js-agreement-checkbox" data-button=".shopify-payment-agree" name="choicecheckbox{{ $choice->id }}" type="checkbox">
                                                        <label for="choicecheckbox{{ $choice->id }}"><a href="{{ url('choice/sex-doll/' . $choice->slug) }}" title="{{ $choice->choice_name }}">{{ $choice->choice_name }}&nbsp;</a></label>
                                                    </div>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-----------------------------------   Criterias and choices end ----------------------->
                        <div class="filter-toggle js-filter-toggle">
                            <div class="loader-horizontal js-loader-horizontal">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 100%"></div>
                                </div>
                            </div>
                            <span class="filter-toggle-icons js-filter-btn"><i class="icon-filter"></i><i
                                    class="icon-filter-close"></i></span>
                            <span class="filter-toggle-text"><a href="#" class="filter-btn-open js-filter-btn">REFINE & SORT</a><a
                                    href="#" class="filter-btn-close js-filter-btn">RESET</a><a href="#"
                                class="filter-btn-apply js-filter-btn">APPLY & CLOSE</a>
                            </span>
                        </div>
                        <!------------------------------------- list product tab start -------------------------------------->
                        <div class="col-lg aside">
                            <!-- list product Female start  -->
                            <div class="holder">
                                <div class="container">
                                        <!-- female checked list product using ajax start  -->
                                    {{-- <div  class=" prd-grid-wrap position-relative" >

                                    </div> --}}
                                    <!-- female checked list product using ajax end  -->
                                    <!-- female  spinner start -->
                                    <div id='loader' style='position: absolute;left:35%;top:50%;display: none' >
                                        <img src='{{ asset('public/assets/front/images/spin.gif') }}' width='80px' height='80px'>
                                    </div>
                                    <!-- female spinner end  -->
                                    <!-- list product Female start  -->
                                    <div  class="femalcechoiceChecked prd-grid-wrap position-relative" >
                                        <div  class="prd-grid data-to-show-4 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid" data-grid-tab-content>
                                            <!-- display product on accessories page start  -->
                                            @foreach ($products as $product)
                                                @if ($product->productgender  == "female")
                                                <div  class="prd prd--style1 prd-labels--max prd-labels-shadow">
                                                    <div class="prd-inside">
                                                        <div class="prd-img-area">
                                                            <a href="{{ $product->producturl }}" target="_blank" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                                                <!-- product  picture start -->
                                                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" alt="{{ $product->productname }}" class="js-prd-img lazyload fade-up">
                                                                <!-- product picture end  -->
                                                                <div class="foxic-loader"></div>
                                                            </a>
                                                            <!-- Favorite button below each picture start -->
                                                            <!-- When clients click on favorites the product will be added to their profile
                                                                If a user clicks on a favorite button it will ask to sign up or to log in
                                                                The favorite button can be out or anything else but it should be discreet -->
                                                            {{-- <div class="prd-circle-labels">
                                                                <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                                            </div> --}}
                                                            <!-- Favorite button below each picture end -->

                                                            <!-- button to 3 pictures start -->
                                                            <ul class="list-options color-swatch">
                                                                <li data-image="{{ asset('/') }}{{ $product->productpicture1 }}" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="{{ asset('/') }}{{ $product->productpicture1 }}" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                                <li data-image="{{ asset('/') }}{{ $product->productpicture2 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="{{ asset('/') }}{{ $product->productpicture2 }}" data-src="{{ asset('/') }}{{ $product->productpicture2 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                                <li data-image="{{ asset('/') }}{{ $product->productpicture3 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="{{ asset('/') }}{{ $product->productpicture3 }}" data-src="{{ asset('/') }}{{ $product->productpicture3 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                            </ul>
                                                            <!--  button to 3 pictures end  -->
                                                        </div>
                                                        <div class="prd-info">
                                                            <div class="prd-info-wrap">
                                                                    <!-------------------------------- Shop name start ------------------------------->
                                                                    <!-- The shop name linked with the product should be fetched. The shop name has been added In "add a shop menu" In admin panel-->
                                                                <div class="prd-tag"> {{ $product->shop->shopname}} </div>
                                                                <!-------------------------------- Shop name end ------------------------------->


                                                                <!------------------------------- Products Name start ------------------------------>
                                                                <!--= Product name has been written by admin from admin panel
                                                                    =Client should be directed to the related URL after clicking on the Name. The URL should be open in a new tab
                                                                Make sure the affiliate code related to the shop the product is coming from, is added at the end of the URL -->

                                                                <h2 class="prd-title"><a href="{{ $product->producturl }}" target="_blank" > {{ $product->productname }} </a></h2>
                                                                <!------------------------------- Products Name end ------------------------------>
                                                                <div class="prd-description">
                                                                    Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                                                </div>
                                                            </div>
                                                            <div class="prd-hovers">
                                                                {{-- <div class="prd-circle-labels">
                                                                    <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                                                    <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                                                </div> --}}
                                                                <!----------------------------------- Product Price start --------------------------------->
                                                                <!-- Prices written by admin are fetched here -->
                                                                <div class="text-center">
                                                                    <!-- display product price if that exist -->
                                                                    <!-- Previous price input start -->
                                                                    @if(!empty($product->previousprice))
                                                                    <div class="price-old">  <s style="font-weight: 300;" >   $  {{ $product->previousprice }}</s>  </div>
                                                                    @endif
                                                                    <!-- Previous price input end -->
                                                                    <div class="price-new "> <b> $ {{ $product->productprice }} </b> </div>
                                                                </div>
                                                                <!----------------------------------- Product Price end --------------------------------->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                            <!-- display product on accessories page start  -->
                                        </div>
                                    </div>
                                    <!--fixed list product Female end  -->
                                </div>
                            </div>
                            <!-- list product Female end -->
                        </div>
                        <!------------------------------------- list product tab end-------------------------------------->
                    </div>
                </div>
                <!-- Female tab content  end -->
                <!-- Male  content tab start -->
                <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
                    <div class="row">
                        <!-----------------------------------   Criterias and choices start ----------------------->
                        <div class="col-lg-4 aside aside--left filter-col filter-mobile-col filter-col--sticky js-filter-col filter-col--opened-desktop"
                            data-grid-tab-content>
                            <div class="filter-col-content filter-mobile-content">
                                <div class="sidebar-block">
                                    <div class="sidebar-block_title">
                                        <span>CRITERIA</span>
                                    </div>

                                </div>
                                @foreach ($criteria as $crite)
                                @if ($crite->criteria_gender  == "1")
                                    <div class="sidebar-block filter-group-block open">
                                        <div class="sidebar-block_title">
                                            {{-- <a href="javascript:void(0);" title="{{ $crite->criteria_name }}" class="open">{{ $crite->criteria_name }} &nbsp;<span></span></a> --}}
                                            <span>{{ $crite->criteria_name }}</span>
                                            <span class="toggle-arrow">
                                                <span></span>
                                                <span></span>
                                            </span>
                                        </div>
                                        <div class="sidebar-block_content">

                                            @if ($crite->choices)
                                            <ul class="category-list">
                                                @foreach ($crite->choices as $choice)
                                                    <div class="prd-block_agreement prd-block_info_item order-0 order-md-100 text-left" data-agree>
                                                        <input id="choicecheckbox{{ $choice->id }}" value="{{ $choice->id }}" class="js-agreement-checkbox-male" data-button=".shopify-payment-agree" name="choicecheckbox{{ $choice->id }}" type="checkbox">
                                                        <label for="choicecheckbox{{ $choice->id }}"><a href="{{ url('choice/sex-doll/' . $choice->slug) }}" title="{{ $choice->choice_name }}">{{ $choice->choice_name }}&nbsp;</a></label>
                                                    </div>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-----------------------------------   Criterias and choices end ----------------------->
                        <div class="filter-toggle js-filter-toggle">
                            <div class="loader-horizontal js-loader-horizontal">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 100%"></div>
                                </div>
                            </div>
                            <span class="filter-toggle-icons js-filter-btn"><i class="icon-filter"></i><i
                                    class="icon-filter-close"></i></span>
                            <span class="filter-toggle-text"><a href="#" class="filter-btn-open js-filter-btn">REFINE & SORT</a><a
                                    href="#" class="filter-btn-close js-filter-btn">RESET</a><a href="#"
                                class="filter-btn-apply js-filter-btn">APPLY & CLOSE</a>
                            </span>
                        </div>
                        <div class="col-lg aside">
                            <!------------------------------------- list product tab start -------------------------------------->
                                <!-- list product Male start  -->
                                    <div class="holder">
                                        <div class="container">
                                            {{-- <div id="" class=" prd-grid-wrap position-relative">

                                            </div> --}}
                                            <!--spinner  start  -->
                                            <div id='malloader' style='position: absolute;left:35%;top:50%;display: none' >
                                                <img src='{{ asset('public/assets/front/images/spin.gif') }}' width='80px' height='80px'>
                                            </div>
                                            <!-- dspinner end   -->
                                            <div id="" class="malchoiceChecked prd-grid-wrap position-relative">
                                                <!-- display product on accessories page start  -->
                                                <div class="prd-grid data-to-show-4 data-to-show-lg-4 data-to-show-md-3 data-to-show-sm-2 data-to-show-xs-2 js-category-grid" data-grid-tab-content>
                                                        @foreach ($products as $product)
                                                            @if ($product->productgender  == "male")
                                                            <div class="prd prd--style2 prd-labels--max prd-labels-shadow ">
                                                                <div class="prd-inside">
                                                                    <div class="prd-img-area">
                                                                        <a href="{{ $product->producturl }}" target="_blank" class="prd-img image-hover-scale image-container" style="padding-bottom: 128.48%">
                                                                            <!-- product  picture start -->
                                                                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" alt="{{ $product->productname }}" class="js-prd-img lazyload fade-up">
                                                                            <!-- product picture end  -->
                                                                            <div class="foxic-loader"></div>
                                                                        </a>
                                                                        <!-- Favorite button below each picture start -->
                                                                        <!-- When clients click on favorites the product will be added to their profile
                                                                            If a user clicks on a favorite button it will ask to sign up or to log in
                                                                            The favorite button can be out or anything else but it should be discreet -->
                                                                        {{-- <div class="prd-circle-labels">
                                                                            <a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
                                                                        </div> --}}
                                                                        <!-- Favorite button below each picture end -->

                                                                        <!-- button to 3 pictures start -->
                                                                        <ul class="list-options color-swatch">
                                                                            <li data-image="{{ asset('/') }}{{ $product->productpicture1 }}" class="active"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture1 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                                            <li data-image="{{ asset('/') }}{{ $product->productpicture2 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture2 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                                            <li data-image="{{ asset('/') }}{{ $product->productpicture3 }}"><a href="#" class="js-color-toggle" data-toggle="tooltip" data-placement="right" title="Color Name"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ asset('/') }}{{ $product->productpicture3 }}" class="lazyload fade-up" alt="{{ $product->productname }}"></a></li>
                                                                        </ul>
                                                                        <!--  button to 3 pictures end  -->
                                                                    </div>
                                                                    <div class="prd-info">
                                                                        <div class="prd-info-wrap">
                                                                                <!-------------------------------- Shop name start ------------------------------->
                                                                                <!-- The shop name linked with the product should be fetched. The shop name has been added In "add a shop menu" In admin panel-->
                                                                            <div class="prd-tag"> {{ $product->shop->shopname}} </a></div>
                                                                            <!-------------------------------- Shop name end ------------------------------->


                                                                            <!------------------------------- Products Name start ------------------------------>
                                                                            <!--= Product name has been written by admin from admin panel
                                                                                =Client should be directed to the related URL after clicking on the Name. The URL should be open in a new tab
                                                                            Make sure the affiliate code related to the shop the product is coming from, is added at the end of the URL -->

                                                                            <h2 class="prd-title"><a href="{{ $product->producturl }}" target="_blank" > {{ $product->productname }} </a></h2>
                                                                            <!------------------------------- Products Name end ------------------------------>
                                                                            <div class="prd-description">
                                                                                Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante sed lacinia.
                                                                            </div>
                                                                        </div>
                                                                        <div class="prd-hovers">
                                                                            {{-- <div class="prd-circle-labels">
                                                                                <div><a href="#" class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0" title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#" class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0" title="Remove From Wishlist"><i class="icon-heart-hover"></i></a></div>
                                                                                <div class="prd-hide-mobile"><a href="#" class="circle-label-qview js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i><span>QUICK VIEW</span></a></div>
                                                                            </div> --}}
                                                                            <!----------------------------------- Product Price start --------------------------------->
                                                                            <!-- Prices written by admin are fetched here -->
                                                                            <div class="text-center">
                                                                                <!-- display product price if that exist -->
                                                                                <!-- Previous price input start -->
                                                                            @if(!empty($product->previousprice))
                                                                            <div class="price-old">  <s style="font-weight: 300;" >   $  {{ $product->previousprice }}</s>  </div>
                                                                            @endif
                                                                            <!-- Previous price input end -->
                                                                            <div class="price-new "> <b> $ {{ $product->productprice }} </b> </div>
                                                                            </div>
                                                                            <!----------------------------------- Product Price end --------------------------------->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        @endforeach
                                                </div>
                                                <!-- display product on accessories page start  -->
                                            </div>
                                        </div>
                                    </div>
                                <!-- list product Male  end -->
                            <!------------------------------------- list product tab end-------------------------------------->
                        </div>
                    </div>
                </div>
                <!-- Male content tab end -->
            </div>
            <!--------------------------------------   tab content end -------------->
        </div>
    </div>
<!------------------------------------- Landing page end -------------------------------------->
</div>
@endsection
@section('javascripts')
    <!--------------- load female product related to female criteria checked  start ------------------>
    <script  type="text/javascript">
        //  gender = document.querySelector('input[name="criteriagender"]:checked').value;//get gender selected
        choiceCheckeds = [];
        $('.js-agreement-checkbox').click(function() {
        choiceCheckedId = $(this).attr('value');
        // alert(choiceCheckedId);  //-->this will alert id of checked checkbox.

       if(this.checked){
        choiceCheckeds.unshift(choiceCheckedId);
        console.log(choiceCheckeds);
        gender = "female";

            $.ajax({
                type: "GET",
                url: "{{ route('front.choiceCheckeds') }}",
                data: {choiceCheckeds,gender}, //--> send id of checked checkbox on other page
                beforeSend: function(){
                    /* Show image container */
                    console.log('female criteria',choiceCheckeds);
                    $(".femalcechoiceChecked").empty();
                    $("#loader").show();
                },
                success: function(data) {
                    $("#loader").hide();
                    // $(".femalcechoiceChecked").show();
                    if(data === []) {
                        alert('No product corresponds to this criteria !');
                    }

                    $(".femalcechoiceChecked").html(data);
                },
                 error: function() {
                    console.log('it broke');
                },
                complete: function() {

                }
            });

            }else{
                if(choiceCheckeds.indexOf(choiceCheckedId) > -1) {
                    console.log(choiceCheckeds.indexOf(choiceCheckedId));
                    choiceCheckeds.splice (choiceCheckeds.indexOf(choiceCheckedId), 1);
                    gender = "female";
                    $.ajax({
                        type: "GET",
                        url: "{{ route('front.choiceCheckeds') }}",
                        data: {choiceCheckeds,gender}, //--> send id of checked checkbox on other page
                        beforeSend: function(){
                            /* Show image container */
                            console.log('female criteria',choiceCheckeds);
                            $(".femalcechoiceChecked").empty();
                            $("#loader").show();
                        },
                        success: function(data) {
                            console.log('success');
                            $("#loader").hide();

                            $(".femalcechoiceChecked").html(data);


                        },
                        error: function() {
                            alert('Research failed');

                        },
                        complete: function() {
                            console.log('it completed');


                        }
                    });
                }
            }

      });
    </script>
    <!--------------- load female product related to female criteria checked  end ------------------>
    <!--------------- load male product related to male criteria checked  start ------------------>
    <script  type="text/javascript">
        //  gender = document.querySelector('input[name="criteriagender"]:checked').value;//get gender selected
        choiceCheckeds = [];
        $('.js-agreement-checkbox-male').click(function() {
        choiceCheckedId = $(this).attr('value');
        // alert(choiceCheckedId);  //-->this will alert id of checked checkbox.

       if(this.checked){
        choiceCheckeds.unshift(choiceCheckedId);
        gender = "male";

            $.ajax({
                type: "GET",
                url: "{{ route('front.choiceCheckeds') }}",
                data: {choiceCheckeds,gender}, //--> send id of checked checkbox on other page
                beforeSend: function(){
                    /* Show image container */
                    console.log('mal criteria',choiceCheckeds);
                    $(".malchoiceChecked").empty();
                    $("#malloader").show();
                },
                success: function(data) {
                    $("#malloader").hide();
                    // $(".femalcechoiceChecked").show();

                    $(".malchoiceChecked").html(data);
                },
                 error: function() {
                    alert('Research failed');
                },
                complete: function() {
                    console.log('completed');
                }
            });

            }else{
                if(choiceCheckeds.indexOf(choiceCheckedId) > -1) {
                    console.log(choiceCheckeds.indexOf(choiceCheckedId));
                    choiceCheckeds.splice (choiceCheckeds.indexOf(choiceCheckedId), 1);
                    gender = "male";
                    $.ajax({
                        type: "GET",
                        url: "{{ route('front.choiceCheckeds') }}",
                        data: {choiceCheckeds,gender}, //--> send id of checked checkbox on other page
                        beforeSend: function(){
                            /* Show image container */
                            console.log('mal criteria',choiceCheckeds);
                            $(".malchoiceChecked").empty();
                            $("#malloader").show();
                        },
                        success: function(data) {
                            console.log('success');
                            $("#malloader").hide();

                            $(".malchoiceChecked").html(data);

                        },
                        error: function() {
                            alert('Research failed');

                        },
                        complete: function() {
                            console.log('it completed');


                        }
                    });
                }

            }

      });
    </script>
    <!--------------- load male product related to male criteria checked  start ------------------>


    <script>
        $(document).ready(function(){

            $('.main-criteria').prop('diabled',true);

            $('body').on('click','',function(){

            })
            $(".CHOICEID").on("click", function () {
                var id = $(this).data("id");
                $.ajax({
                    type: "GET",
                    url: "{{ route('front.home') }}",
                    data: { id : id },
                    success: function (data) {
                        $("#PRODUCTDIV").load(location.href + " #PRODUCTDIV");
                    }

                });
            });
        });
    </script>
@endsection
