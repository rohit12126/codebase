@extends('layouts.front')

@section('content')
<script src="{{asset('js/roomle/roomle-configurator-api.es.min.js')}}" ></script>
    <style>
        body{
            overflow-x: hidden;
        }
    </style>
    <div class="configure-specs">
        <b class="ti-info-alt"></b>
    </div>
    <div class="configure-specs-wrap">
        <div class="specs-wrap-inner d-flex justify-content-end h-100">
            <div class="specs-sidebar">
                <ul class="specs-mega-menu text-justify">
                    <div class="text-right m-3">
                        <span class="ti-close configure-specs-close"></span>
                    </div>
                    <li class="specs-open">
                        <a href="#">Measure and Fit</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Measure and Fit</h3>
                            <p>
                            All of our custom closet doors are "<strong>True to Fit</strong>" which means we do all the calculations for you so that you get the proper fit.
                            </p>
                            <div class="specs-iframe-wrap mb-4">
                                <iframe class="specs-iframe-responsive" width="100%" height="320" src="https://www.youtube.com/embed/videoseries?list=PLTR8e6AHZK3vVaSyVrVkUxkRvM3H1u5c3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <p>
                                Adjustability – Our bifold and sliders have
                                adjustability built in. In most cases we can
                                accommodate slightly larger or smaller openings but
                                the real key to our adjustability is that we can
                                accommodate out-of-square, not perfect openings
                                by adjusting. 
                            </p>   
                            <p>
                                Openings change over time due to settling,
                                modifications, etc and in my experience 8 out of 10
                                openings out there, especially in any house older
                                than 50 yrs.
                            </p>                    
                        </div>
                    </li>
                    <li>
                        <a href="#">Bifold vs. Slider</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Bifold vs. Slider</h3>
                            <p>
                                Why Bifold versus Slider – typically Sliders are
                                used in hallways or tight spaces where there
                                can be no swing of a door into the room.
                            </p>
                            <p>
                                Bifolds have an advantage over regular doors
                                as they are also designed to take up less space
                                than a conventional door when it is swung into
                                a room. 
                            </p>
                            <p>
                                Bifolds also allow you more access to theclosets than Sliders.
                            </p>
                            <div class="row"> 
                                <div class="col-6">
                                    <h4>Features Bifold</h4>
                                    <ul class="normal-ul text-left">
                                        <li>Aluminum Tracks (not steel)</li>
                                        <li>Lifetime Warranty Hardware</li>
                                        <li>Heavy Feel Smooth Operation</li>
                                        <li>Less swing than traditional doors</li>
                                        <li>Reversible/many Configurations available to fit ALL openings.</li>
                                        <li>Perfect for tighter spaces</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <h4>Features Slider</h4>
                                    <ul class="normal-ul text-left">
                                        <li>Aluminum Components</li>
                                        <li>Lifetime Warranty Hardware</li>
                                        <li>Heavy Feel, smooth Operation</li>
                                        <li>BV and POL premium solid-backed</li>
                                        <li>Framed –Moisture friendly door</li>
                                        <li>Zero swing like in traditional doors</li>
                                        <li>Perfect for tightest spaces.</li>
                                        <li>Reversible/many Configurations available to fit ALL openings.</li>
                                        <li>Triple track option available</li>
                                    </ul>
                                </div>
                            </div>
                            <table cellpadding="6" class="mt-4 text-left">
                                <tr>
                                    <td class="w-50">
                                        <strong>Image compression is under process</strong>
                                    </td>
                                    <td>
                                        <strong>Image compression is under process</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Image compression is under process</strong>
                                    </td>
                                    <td>
                                        <strong>Image compression is under process</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Image compression is under process</strong>
                                    </td>
                                    <td>
                                        <strong>Image compression is under process</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sometimes a 6 panel unit is
                                            required to fill an opening. It is
                                            important to understand that this
                                            unit will not completely open up
                                            like an accordion. There will be
                                            one set of doors that open away
                                            from each other to form a large
                                            opening and there will be one
                                            single door that operates
                                            independently.
                                    </td>
                                    <td valign="top">
                                        For 3 panel sliders you can add a “triple track” to allow for a 2/3 size closet opening.
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </li>
                    <li>
                        <a href="#">Door Style</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Door Style</h3>
                            <ul class="normal-ul">
                                <li>3/4” MDF</li>
                                <li>Prefinished in White, Espresso, or Cherry</li>
                                <li>Maintenance free, easy to clean</li>
                                <li>Unfinished in Primed, Real Maple veneer</li>
                                <li>Finish to match your decor</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Mirror Types</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Mirror Types</h3>
                            <p>
                                Frameless style adds a touch of high-end luxury and modern appeal. Frame is behind the solidbacked mirror panel.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Trim/Track</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Trim/Track</h3>
                            <ul class="normal-ul mb-3">
                                <li>
                                    Extruded Aluminum allows for finer detail than steel
                                </li>
                                <li>
                                    Corrosion Resistant
                                </li>
                            </ul>
                            <p>
                                <strong>
                                    Competitor’s Bottom Track vs. Our Bottom Track
                                </strong>
                            </p>
                            <p>
                                <strong>
                                    Competitor’s Top Track vs. Our Top Track
                                </strong>
                            </p>
                            <p>
                                <strong>Match your track and trim color to your existing décor</strong>
                                <ul class="normal-ul mb-3">
                                    <li>
                                        Mirrors Panels available with Chrome or White
                                    </li>
                                    <li>
                                        Color Panels available with Chrome or Matching
                                    </li>
                                </ul>
                            </p>
                            <div class="text-center py-5">
                                <strong>Image compression is under process</strong>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Colors</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Colors</h3>
                            <p>
                                For Flush and Mir-Mel frames, choose from the following colors:
                            </p>
                            <div class="text-center py-5">
                                <strong>Image compression is under process</strong>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Custom Sizes</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Custom Sizes</h3>
                            <p>
                                In the millwork industry, like many others, standards were developed many years ago that helped the industry mass produce products in order to keep the price low for builders and ultimately consumers. Good examples in other industries is the development of 12 oz cans for soda or 8-1/2” x 11” for paper. Other sizes are certainly available, but it usually will cost you more.
                            </p>
                            <p>
                                The same applies for doors. If you can use a standard size, then you are going to save some money because we buy our materials in these standard sizes. If you can’t or don’t want to use a standard size, custom sizes are certainly available but it is going to cost a little more because we will need to make it special. There is extra materials and labor involved in making special sizes. The beauty of the CDM is door is that it CAN be made to any size to maximize your opening, however, if you (or your contractor) are building your opening from scratch, it will always be a less expensive option if it can be built to a standard size.
                            </p>
                            <p>
                                See our standard sizes below.
                            </p>
                            <div class="text-center py-5">
                                <strong>Image compression is under process</strong>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Panel Count</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Panel Count</h3>
                            <p>
                                <strong>Sliders:</strong> Typically, standard size doors are made with standard panel configurations. For example, a 48” x 80” will always be made in a 2- panel configuration. We do this to keep costs down and provide a consistent product across the industry. Sometimes larger doors or in-between standard sizes are available in different panel count options and are usually only limited by their weight.
                            </p>
                            <p>
                                For example, a 96” wide slider can be made in either a 4-panel configuration or a 3-panel configuration. 
                            </p>
                            <div class="text-center py-5">
                                <strong>Image compression is under process</strong>
                            </div>
                            <p>
                                This is a personal and/or design choice and you will want to consider the contents of your closet and the access you will need to have. For example, if it’s a his and hers type closet for a bedroom, where you would like equal access on both sides, then the 4-panel option might be a better option. Also remember that certain options will provide more access to your closet. A 2 or 4 panel sliding door will provide access to ½ of the closet when open whereas a 3 panel option will only give you access to 1/3 of the open closet at any time. The most access will be available if you choose a 3-panel slider with our optional triple track, you will have the MOST access possible with 2/3rds of the closet available at any time when fully open.
                            </p>
                            <p>
                                <strong>Bifolds:</strong> The same applies to bifolds but just remember that these are not “accordian” type doors and the doors need to pivot from a fixed point. With 2 or 4 panel bifolds, you will get access to the entire closet. (the open door folded up takes up about 5-1/2” of space when folded and open) With 6 and 8 panel bifolds, you will have spots where the door will be open but still partially blocks full access.
                            </p>
                            <p>See our illustrations on how this looks and if it will work for you.</p>
                            <div class="text-center py-5">
                                <strong>Image compression is under process</strong>
                            </div>
                            <p>If a CDM door is available in multiple configurations, you will notice the “panel count” option in the configurator will become populated with multiple choices. Just choose the panel count, or experiment with different panel counts, to make the unit that’s fits your style and needs.</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Saddle & Flooring</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Saddle & Flooring</h3>
                            <p>
                                For CDM bifold doors, they are available with or without our standard oak saddle. The saddle provides a finished look and can be stained or painted to match existing floor materials.
                            </p>
                            <p>
                                The saddle provides a few benefits. These include an easier installation and it helps keep dust and other debris from going into the closet and also help keep your belongings inside the closet.
                            </p>
                            <p>If you have a carpet, or some type of flooring, like tile or laminate that runs into the closet and you don’t want to cover up with the saddle, then all CDM bifolds can be installed directly onto the floor. You will also want to consider that without the saddle, there will be an additional 5/8” gap between the floor and the bottom edge of the doors.</p>
                            <p>For an additional charge we can elongate the panel to take up this difference of you choose to go without the saddle but this is a personal choice. Take a look at the doors around the rest of your house and you will notice the gaps at the bottoms and decide what would be best for your CDM closet door.</p>
                            <p>See our “Flooring Materials Installation Chart” for different flooring options and which will work best for you.</p>
                            <img class="mb-4" src="{{URL::asset('/images/configure/floor-chart.jpg')}}" alt="" style="max-height: auto;">
                        </div>
                    </li>
                    <li>
                        <a href="#">Jamb Bracket</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Jamb Bracket</h3>
                            <p>
                                If you have a flooring material that you can or don’t want to drill down into, like concrete, and you don’t want to use the saddle we have an alternative installation method using a jamb bracket.
                            </p>
                            <p>
                                The jamb bracket is designed to mount into your wall or jamb rather than the floor.
                            </p>
                            <p>
                                For an additional charge we can elongate the panel to take up this difference of you choose to go with the jamb bracket installation method but this is a personal choice. Take a look at the doors around the rest of your house and you will notice the gaps at the bottoms and decide what would be best for your CDM closet door. 
                            </p>
                            <p>
                                See our “Flooring Materials Installation Chart” for different flooring options and which will work best for you.
                            </p>
                            <img class="mb-4" src="{{URL::asset('/images/configure/floor-chart.jpg')}}" alt="" style="max-height: auto;">
                        </div>
                    </li>
                    <li>
                        <a href="#">Triple Track Slider</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Triple Track Slider</h3>
                            <p>
                                Triple track is ideal for 3- panel applications because it allows more access to the closet.
                            </p>
                            <p>A typical 2 door or 4 door slider unit, when completely open, allows access to 50% (1/2)of your opening.</p>
                            <p>When the triple track is employed with a 3 panel unit, it allows for access to a full 67% (2/3) of your opening</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Handles</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Handles</h3>
                            <p>Our included low-profile handle is made of sturdy extruded aluminum and comes in either chrome or whjte depending on your track/trim choice</p>
                            <p>Our premium handle (upcharge applies) is also extruded aluminum and is just a little bigger and beefier in case you have larger hands</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Hardware</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Hardware</h3>
                            <ol class="my-3">
                                <li>Our patented cam action hinges for smooth operation and a lifetime warranty</li>
                                <li>Aligners for the double units keep the panels flush</li>
                                <li>Patented bottom pivot is adjustable for outof-square applications</li>
                                <li>Heavy-duty extruded aluminum components</li>
                                <li>Heavy duty top pivots and rollers for smooth operation.</li>
                                <li>Optional oak saddle makes installation a snap.</li>
                            </ol>
                            <ol class="my-3">
                                <li>Heavy Duty extruded aluminum frame. Creates a strong and durable door.</li>
                                <li>Ball-bearing rollers have a lifetime warranty. Enjoy years of flawless and ultra-smooth use. Adjustable so that the doors can be customized to fit any variations in your opening.</li>
                                <li>Solid backing makes our door the strongest and most impact resistant door on the market</li>
                            </ol>
                            <p>
                                Adjustability – Our bifold and sliders have adjustability built in. In most cases we can accommodate slightly larger or smaller openings but the real key to our adjustability is that we can accommodate out-of-square, not perfect openings by adjusting.
                            </p>
                            <p>
                                Openings change over time due to settling, modifications, etc and in my experience 8 out of 10 openings out there, especially in any house older than 50 yrs.
                            </p>
                            <p>One of the benefits of our solid-backed mirrors (beveled or polished) is that they are impact resistant and can handle the punishment of heavy use. The video below actually shows us hitting them with hammers, and they can take the punishment.</p>
                            <div class="text-center py-5">
                                <strong>Image compression is under process</strong>
                            </div>
                            <p>Our framed slider is a little different construction and used a category 3 safety-backed mirror and although is safe, will not take the hammer or baseball punishment that our solid-backed (beveled or polished) door can take. Or framed sliders also have a rubber gasket that holds the glass nice and tight in the frame and will not rattle when operated like some of our cheaper competitors do.</p>
                        </div>
                    </li>
                    <li>
                        <a href="#">Installation</a>
                        <div class="specs-mega-sub">
                            <h3 class="pt-2 heading_s3 text-center">Installation</h3>
                            <p>
                                Installation of CDM closet doors is pretty easy and your level of experience, tools, and door configuration will help dictate whether you will want to do this yourself or hire an installer. Watch our installation videos here for the door type you are interested in and you can decide for yourself if you want to tackle it yourself or hire someone to do it for you.
                            </p>
                            <div class="specs-iframe-wrap mb-4">
                                <iframe class="specs-iframe-responsive" width="100%" height="320" src="https://www.youtube.com/embed/videoseries?list=PLTR8e6AHZK3vVaSyVrVkUxkRvM3H1u5c3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="product-detail-view">
        <div class="main-wrapper">
            <h2 class="home-step-heading">
                Custom build your closet doors
            </h2>
            <p class="home-step-para mb-3">
                Design and configure the door that fits your style.
                Prices adjust in real time as you add options to create your perfect closet door.
            </p>
            <p></p>
            <span class="product-detail-back">
                <a href="{{route('product.list')}}" class="d-inline-block">&lt; Back to overview</a>
            </span>
            {{-- <div class="text-md-center mt-3 mt-md-0">
                <h1 class="product-detail-heading">{{$productData['product']->name}}</h1>
            </div> --}}
            <div id="configurator-container"></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pl-3 pb-3 pb-md-0">
                        <span class="product-sku-no">{{$productData['product']->name}}</span>
                        <!-- <span class="product-sku">SKU (Stock Keeping Unit)</span> -->
                    </div>
                </div>
                <div class="col-md-6 text-md-right">
                    <div class="pl-3 pl-md-0 pr-3">
                        {{--<span class="product-price">${{$productData['product']->sale_price}}</span>
                        <span class="product-price-tax">Incl. VAT</span>--}}
                    </div>
                </div>
            </div>
            <script type="module">
                import RoomleConfiguratorApi from '{{asset('js/roomle/roomle-configurator-api.es.min.js')}}';
                (async ()=> {
                    const options = {
                        id: '{{$productData['product']->configure_id ?? 'cdm:sr2_white' }}'
                    };
                    const configurator = await RoomleConfiguratorApi.create(
                        'demoConfigurator',
                        document.getElementById('configurator-container'),
                        {...options, buttons: {savedraft: false,requestproduct:false}},
                    );
                    configurator.ui.callbacks.onRequestProduct = (configurationId, image, partlist) => {
                        addToCart(configurationId, image, partlist);
                    };
                    document.getElementById('trigger-request').addEventListener('click', async () => {
                    await configurator.ui.triggerRequestProduct();
                    });
                   
                    /*for price*/
                    const priceDataBase = {};
                    
                        configurator.ui.callbacks.onPartListUpdate = (partList) => {
                            const parts = partList.fullList;
                            jQuery.ajax({
                                url: "{{ url('/product/price') }}",
                                method: 'post',
                                dataType: "json",
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                data: {
                                    article_nu : parts[0].articleNr,
                                    parts : parts[0].parameters
                                },
                                
                                success: function(result){
                                    let priceSum = result;
                                    configurator.ui.setPrice('$',priceSum);
                                }
                            });
                        };
                    })();
            </script>
            <div class="d-flex justify-content-center">
            <!-- <a href="javascript:void(0)" class="btn btn-fill-out buy-now">-->
                <input type="hidden" class="product-id" value="{{$productData['product']->id}}">
                <!--<i class="linearicons-cart"></i> Buy Now
            </a> -->
            <a href="javascript:void(0)" id="trigger-request" class="btn btn-fill-out">
                <i class="linearicons-cart-plus"></i> Add to cart
            </a>
            {{-- <a href="#" class="btn btn-fill-out">
                Configure
            </a> --}}
        </div>
    </section>
@if(!$productData['product']->productDescription->isEmpty())
    <section class="section light-bg">
        <div class="container">
            <h2 class="heading2 mt-3 mb-5 text-center">Product Details</h2>
            <div id="accordion">
                @foreach ($productData['product']->productDescription as $item)
                    <div class="faq-card">
                        <div class="faq-card-header">
                            <a class="faq-card-link" data-toggle="collapse" href="#fq{{$item->id}}" aria-expanded="false">
                                {{$item->title}} 
                            </a>
                        </div>
                        <div id="fq{{$item->id}}" class="collapse" data-parent="#accordion">
                            <div class="faq-card-body">
                                {!! $item->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
@if(!$productData['product']->images->isEmpty())
    <section class="configure-product-slider py-5">
        <div class="container">
            <h1 class="pt-3 mb-5 heading_s3 text-center">Product Gallery</h1>
            <div class="product-wallpaper-slider my-1">
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/5_Bifold-Flush-cherry-4-panel,-cherry-trim_v2.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>4 Panel Bifold Flush in Cherry</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/6_Bifold-Flush-Espresso-8-panel,-chrome-trim,-saddle_v3.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>8 Panel Bifold Flush in Espresso</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/7_Bifold-Flush-White-2_v2.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>2 Panel Bifold Flush in White</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/10_Slider-Flush,-Maple,-4-panel,-3-track,-chrome-trim_v3.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>4 Panel Slider Flush in Maple</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/Bifold-Mirmel,-Maple-4-panel,-maple-trim,-saddle_v2.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>4 Panel Bifold Mir-Mel</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/Bifold-routed,-6-panel,-white-trim,-saddle.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>6 Panel Bifold Routed</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/Slider-Flush,-espresso-3-panel,-2-track,-espresso-trim.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>3 Panel Slider Flush in Espresso</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/Slider-Mirror-beveled_v2.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>2 Panel Slider Mirror, Beveled</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/closed3_bifold_v2.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>6 Panel Bifold Mirror</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/closed3_slider_v2.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>4 Panel Slider Mir-Mel</h3>
                    </div>
                </div>
                <div class="product-slideshow pb-3">
                    <img data-lazy="{{URL::asset('/images/slides/Slider-routed,-2-panel,-white-trim.jpg')}}" alt=""/>
                    <div class="product-slideshow-title-wrap">
                        <h3>2 Panel Slider Routed</h3>
                    </div>
                </div>
            </div>
            <div class="content-section">
                <div class="product-wallpaper-thumb">
                    <div class="slideshow-thumb" title="4 Panel Bifold Flush in Cherry"><img data-lazy="{{URL::asset('/images/slides/5_Bifold-Flush-cherry-4-panel,-cherry-trim_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/6_Bifold-Flush-Espresso-8-panel,-chrome-trim,-saddle_v3.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/7_Bifold-Flush-White-2_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/10_Slider-Flush,-Maple,-4-panel,-3-track,-chrome-trim_v3.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Bifold-Mirmel,-Maple-4-panel,-maple-trim,-saddle_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Bifold-routed,-6-panel,-white-trim,-saddle.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Slider-Flush,-espresso-3-panel,-2-track,-espresso-trim.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Slider-Mirror-beveled_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/closed3_bifold_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/closed3_slider_v2.jpg')}}" alt=""/></div>
                    <div class="slideshow-thumb"><img data-lazy="{{URL::asset('/images/slides/Slider-routed,-2-panel,-white-trim.jpg')}}" alt=""/></div>
                </div>
            </div>
        </div>
        <!-- <div class="configure-slider product-wallpaper-slider">
            @foreach ($productData['product']->images as $img)
                <div class="">
                    <img src="{{ asset('upload/product/'.$img->image)}}" alt="">
                </div>
            @endforeach
        </div> -->
    </section>
@endif
    <input type="hidden" id="configureId" val="">
    <section class="section">
        <div class="container">
            <div class="comments">
                <div class="text-center mb-3">
                        <h3>Reviews &amp; Rating</h3>
                    </div>
                @if ($productData['reviewCount'] > 0)
                    <div class="rating-counter">
                        <div class="rating-points">{{ number_format($productData['averageRating'],1)}}
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTYuNSA5LjQzOWwtMy42NzQgMi4yMy45NC00LjI2LTMuMjEtMi44ODMgNC4yNTQtLjQwNEw2LjUuMTEybDEuNjkgNC4wMSA0LjI1NC40MDQtMy4yMSAyLjg4Mi45NCA0LjI2eiIvPjwvc3ZnPg==" class="rating-star">
                        </div>
                        <span class="rating-count-no">
                                <span>{{$productData['reviewCount']}} Ratings&nbsp;</span>
                                <span class="rating-amp">&amp;</span>
                                <span>&nbsp;Reviews</span>
                        </span>
                    </div>
                @else
                    <div class="text-center mb-3">
                        <div class="rating-input uncheck-effect mb-2"> 
                            <input type="radio" name="rating" checked>
                            <label for="5">☆</label> 
                            <input type="radio" name="rating">
                            <label for="4">☆</label> 
                            <input type="radio" name="rating">
                            <label for="3">☆</label> 
                            <input type="radio" name="rating">
                            <label for="2">☆</label> 
                            <input type="radio" name="rating">
                            <label for="1">☆</label>
                        </div>
                        <a href="#" class="btn btn-fill-out btn-sm">Be the first to rate this product.</a>
                    </div>
                @endif

                @if(!$productData['productReview']->isEmpty())
                    <ul class="list_none comment_list mt-4">
                        @foreach ($productData['productReview'] as $review)
                            <li>
                                <div class="comment_img">
                                    <img src="{{URL::asset('/images/review-user.png')}}" alt="user1">
                                </div>
                                <div class="comment_block">
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:{{ $review->rating * 20}}%"></div>
                                        </div>
                                    </div>
                                    <p class="customer_meta">
                                        <span class="review_author">{{ucfirst( $review->user_name)}}</span>
                                        <span class="comment-date">{{ date("M j, Y", strtotime($review->created_at)) }} {{-- {{ \Carbon\Carbon::parse($review->created_at)->format('F d, Y')}} --}} </span>
                                    </p>
                                    <div class="description">
                                        <p>{{ $review->body}}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </section>
    <section class="product-detail-features section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="pd-feature-box">
                        <img src="{{URL::asset('/images/fav-property.png')}}" alt="">
                        <span class="d-block">
                            At CDM every product reviews the care and attention of hand craftmanship.
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pd-feature-box">
                        <img src="{{URL::asset('/images/fav-stars.png')}}" alt="" class="pt-2">
                        <span class="d-block">
                            <strong>Excellent service.</strong>
                        </span>
                        <span>
                            We are also there for you after the purchase.
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pd-feature-box">
                        <img src="{{URL::asset('/images/fav-delivery.png')}}" alt="">
                        <span class="d-block">
                            Flat rate shipping anywhere in <br>the continental U.S.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    $('.configure-slider').slick({
        autoplay: true,
        arrows: true,
        speed: 2000,
        autoplaySpeed: 1200,
        dots: false,
        centerPadding: '15%',
        infinite: true,
        slidesToShow: 3, 
        slidesToScroll: 1,
        lazyLoad: 'progressive'
    });
    /* Add to cart functionality */
    function addToCart(configurationId, image, partlist){
        
    var productId = $(".product-id").val();
    
    jQuery.ajax({
        url: "{{ url('/cart/add-cart') }}",
        method: 'post',
        dataType: "json",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            productId : productId,
            configurationId : configurationId,
            partList : partlist.fullList[0]
        },
        success: function(result){
            $('.cart-count').html(result.data.cartCount);
            
            if(result.status == false)
            {
                Swal.fire({
            title: 'Unable to Process Your Request for more details kindly &nbsp<a href="{{url('contact-us')}}?artrnr='+result.data+'" target=”_blank”>Contact us.</a>',
            icon: 'info',
            
            showCloseButton: true,
            showConfirmButton: false,
          
            customClass: {
                    container: 'custom-success-popup-container',
                    popup: 'custom-success-popup',
                }
            })
            }
            else
            Swal.fire({
                position: 'bottom-end',
                icon: 'success',
                title: result.message,
                showConfirmButton: false,
                timer: 1500,
                customClass: {
                    container: 'custom-success-popup-container',
                    popup: 'custom-success-popup',
                }
            })
        }
    });
}
    /* Buy Now Functionality */
    jQuery('.buy-now').click(function(e) {
        var productId = $(".product-id").val();
        e.preventDefault();
        jQuery.ajax({
            url: "{{ url('/cart/add-cart') }}",
            method: 'post',
            dataType: "json",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                productId : productId
            },
            success: function(result){
                window.location.href = "{{ route('address.get') }}";
            }
        });
    });
    // function getPrice(article_nu){
    // jQuery.ajax({
    //     url: "{{ url('/product/price') }}",
    //     method: 'post',
    //     dataType: "json",
    //     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //     data: {
    //         article_nu : article_nu
    //     },
    //     success: function(result){
    //         $('.cart-count').html(result.data.cartCount);
    //     }
    // });
    // }
</script>
<script>
    $('.product-wallpaper-slider').slick({
        autoplay: false,
        arrows: true,
        speed: 1000,
        centerMode: true,
        dots: false,
        infinite: true,
        slidesToShow: 1, 
        slidesToScroll: 1,
        asNavFor: '.product-wallpaper-thumb',
        lazyLoad: 'progressive'
    });
    $('.product-wallpaper-thumb').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    asNavFor: '.product-wallpaper-slider',
    dots: false,
    centerMode: true,
    focusOnSelect: true
    });
</script>

<script>
    $('.configure-specs').on("click", function(){
        $('.configure-specs-wrap').toggleClass('specs-wrap-active')
    });
    $('.configure-specs-close').on("click", function(){
        $('.configure-specs-wrap').toggleClass('specs-wrap-active')
    });
</script>
<script>
$(document).ready(function(){
    $(".specs-mega-menu a").click(function(e){
        e.preventDefault();
    });
    $(".specs-mega-menu>li").hover(            
        function(){ 
            $('.specs-mega-menu>li').removeClass('specs-open');
            $(this).addClass('specs-open');
        },
        function(){ 
            $(this).removeClass('specs-open');
            $('.specs-mega-menu>li:nth-child(2)').addClass('specs-open');
        }
    );
});
</script>
@endsection
