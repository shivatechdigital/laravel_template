@extends('beauty_salon.layouts.app')

@section('title', 'BeautyZone : Beauty Salon')

@section('page_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('beauty_salon/plugins/revolution/revolution/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('beauty_salon/plugins/revolution/revolution/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('beauty_salon/plugins/revolution/revolution/css/navigation.css') }}">
@endsection

@section('content')
@php
	$homeWhyData = $homeWhyChoose?->data ?? [];
	$whyBullets = $homeWhyData['bullets'] ?? [
		'fully focused on accessibility',
		'Based on modern design concept',
		'impressive and attractive design with graceful features',
		'More creative with smoothness and flexibility',
		'Unlimited power and customization possibilities',
	];
@endphp
<div class="page-content">
		<!-- Main Slider -->
        <div class="rev-slider">
			<div id="rev_slider_265_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container errow-style-1" data-alias="" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
			<div id="rev_slider_265_1" class="rev_slider fullwidthabanner" style="display:block;" data-version="5.4.6.3">
				<ul>  <!-- SLIDE  -->
					<li data-index="rs-100" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('beauty_salon/images/main-slider/slide3.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
						<!-- MAIN IMAGE -->
						<img src="{{ asset('beauty_salon/images/main-slider/slide3.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
						<div class="tp-caption tp-shape tp-shapewrapper bg-primary tp-resizeme" 
							id="slide-100-layer-1" 
							data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['-1','-1','0','0']" 
							data-width="100"
							data-height="5"
							data-visibility="['on','on','off','off']"
							data-whitespace="nowrap"
							data-type="shape" 
							data-responsive_offset="off"
							data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]" style="z-index: 15;border-color:rgba(0, 0, 0, 0.50);border-width:0px; border-radius:2px;"> </div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption tp-resizeme text-primary" 
							id="slide-100-layer-2" 
							data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-60']"
							data-fontsize="['65','48','42','36']"
							data-lineheight="['80','60','60','40']"
							data-width="none"
							data-height="none"
							data-type="text" 
							data-responsive_offset="off"
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 800; letter-spacing: 0px; font-family:Nunito;">BeautyZone Hair Salon</div>
						<div class="tp-caption tp-resizeme text-primary" 
							id="slide-100-layer-3" 
							data-x="['left','left','center','center']" data-hoffset="['50','50','-50','-50']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['-1','-1','-30','-30']"
							data-fontsize="['65','48','42','36']"
							data-lineheight="['80','60','60','40']"
							data-width="['auto']"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[110,110,110,110]"
							style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 800; letter-spacing: 0px; font-family:Nunito;"> Creating Beauty </div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption tp-resizeme" 
							id="slide-100-layer-4" 
							data-x="['left','left','left','left']" data-hoffset="['30','30','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['100','100','-295','-295']"
							data-width="[700,700,700,700]"
							data-height="['auto']"
							data-visibility="['on','on','off','off']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 6; font-size: 18px; line-height: 28px; font-weight: 500; color: #320016; white-space: inherit; font-family:Nunito;">We offer a full range of hairdressing services for men and women, eyebrow and eyelash care, the services of make-up artists and stylists. Entrust your beauty to professionals who really care about...
						</div>	
						<!-- LAYER NR. 6 -->
						<div class="tp-caption tp-resizeme" 
							id="slide-100-layer-5" 
							data-x="['left','left','center','center']" data-hoffset="['30','30','-85','-70']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
							data-width="['auto']"
							data-height="['auto']"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames=                   '[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 10; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="{{ route('beauty_salon.contact') }}" class="site-button button-md">Get A Qutoe</a>
						</div>
						<div class="tp-caption tp-resizeme" 
							id="slide-100-layer-6" 
							data-x="['left','left','center','center']" data-hoffset="['210','210','90','95']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
							data-width="['auto']"
							data-height="['auto']"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="{{ route('beauty_salon.about-us') }}" class="site-button-secondry button-md">About Us</a>
						</div>
					</li>
					<li data-index="rs-200" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('beauty_salon/images/main-slider/slide4.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
						<!-- MAIN IMAGE -->
						<img src="{{ asset('beauty_salon/images/main-slider/slide4.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
						<div class="tp-caption tp-shape tp-shapewrapper bg-primary tp-resizeme" 
							id="slide-200-layer-1" 
							data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['-1','-1','0','0']" 
							data-width="100"
							data-height="5"
							data-visibility="['on','on','off','off']"
							data-whitespace="nowrap"
							data-type="shape" 
							data-responsive_offset="off" 
							data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]" style="z-index: 15;border-color:rgba(0, 0, 0, 0.50);border-width:0px; border-radius:2px;"> </div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption tp-resizeme text-primary" 
							id="slide-200-layer-2" 
							data-x="['left','left','center','center']" data-hoffset="['30','30','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-70','-60']"
							data-fontsize="['65','48','42','36']"
							data-lineheight="['80','60','60','40']"
							data-width="none"
							data-height="none"
							data-type="text" 
							data-responsive_offset="off"
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 800; letter-spacing: 0px; font-family:Nunito;">BeautyZone Hair Salon</div>
						<div class="tp-caption tp-resizeme text-primary" 
							id="slide-200-layer-3" 
							data-x="['left','left','center','center']" data-hoffset="['50','50','-50','-50']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['-1','-1','-30','-30']"
							data-fontsize="['65','48','42','36']"
							data-lineheight="['80','60','60','40']"
							data-width="['auto']"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[110,110,110,110]"
							style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 800; letter-spacing: 0px; font-family:Nunito;"> Creating Beauty</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption   tp-resizeme " 
							id="slide-200-layer-4" 
							data-x="['left','left','left','left']" data-hoffset="['30','30','0','0']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['100','100','-295','-295']"
							data-width="[700,700,700,700]"
							data-height="['auto']"
							data-visibility="['on','on','off','off']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 6; font-size: 18px; line-height: 28px; font-weight: 500; color: #320016; white-space: inherit; font-family:Nunito;">We offer a full range of hairdressing services for men and women, eyebrow and eyelash care, the services of make-up artists and stylists. Entrust your beauty to professionals who really care about...
						</div>	
						<!-- LAYER NR. 6 -->
						<div class="tp-caption tp-resizeme" 
							id="slide-200-layer-5" 
							data-x="['left','left','center','center']" data-hoffset="['30','30','-85','-70']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
							data-width="['auto']"
							data-height="['auto']"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 10; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="{{ route('beauty_salon.contact') }}" class="site-button button-md">Get A Qutoe</a>
						</div>
						<div class="tp-caption tp-resizeme"
							id="slide-200-layer-6" 
							data-x="['left','left','center','center']" data-hoffset="['210','210','90','95']" 
							data-y="['middle','middle','middle','middle']" data-voffset="['200','200','50','50']"
							data-width="['auto']"
							data-height="['auto']"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="{{ route('beauty_salon.about-us') }}" class="site-button-secondry button-md">About Us</a>
						</div>
					</li>
				</ul>
				<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
			</div>  
		</div>  
        <!-- Main Slider -->
		<!-- Map And Form -->
		<div class="section-full bg-white content-inner-2" style="background-image:url({{ asset('beauty_salon/images/background/bg7.jpg') }}); background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 m-b30 align-self-center">
						<div class="dis-tbl-cell  m-b30">							
							<h2 class="m-t0 m-b10">{{ $homeWhyChoose?->title ?: 'Why Our Clients Choose Us' }}</h2>
							<h6 class="fw7 m-b15">{{ $homeWhyChoose?->subtitle ?: 'We are the leading beauty salon providing high-quality hairdressing, makeup, and skin care services to everyone.' }}</h6>
							@if ($homeWhyChoose?->content)
								<p>{{ $homeWhyChoose->content }}</p>
							@endif
							<ul class="list-angle-right">
								@foreach ($whyBullets as $bullet)
									<li>{{ $bullet }}</li>
								@endforeach
							</ul>
							<a href="{{ route('beauty_salon.about-us') }}" class="site-button m-r15">About US <i class="ti-arrow-right m-l10"></i></a>
							<a href="{{ route('beauty_salon.about-us') }}" class="site-button-secondry ">Read More <i class="ti-arrow-right m-l10"></i></a>
						</div>
					</div>
					<div class="col-lg-6 offset-lg-1">
						<div class="img-collage">
							<div class="coll-1"><img src="{{ asset('beauty_salon/images/collage/pic1.jpg') }}" alt=""></div>
							<div class="coll-2"><img src="{{ asset('beauty_salon/images/collage/pic2.jpg') }}" alt=""></div>
							<div class="coll-3"><img src="{{ asset('beauty_salon/images/collage/pic3.jpg') }}" alt=""></div>
							<div class="coll-4"><img src="{{ asset('beauty_salon/images/collage/pic4.jpg') }}" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Map And Form END -->
		<!-- Services -->
		<div class="section-full about-section bg-white">
			<div class="container-fluid p-0">
				<div class="row equal-wraper">
					<div class="bg-primary col-xl-3 p-a0 col-md-6 col-lg-3 col-xs-12 equal-col dis-tbl">
						<div class="p-a30 text-white dis-tbl-cell wow fadeIn" data-wow-delay="0.3s">
							<p class="font-weight-600 m-b10">Hair Salon</p>
							<h4 class="font-weight-700">BeautyZone Hair Salon Creating Beauty </h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text.</p>
							<a href="{{ route('beauty_salon.services-details') }}" class="site-button white outline outline-2">Read More</a>
						</div> 
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 p-a0 col-xs-12 equal-col">
						<img src="{{ asset('beauty_salon/images/about/img1.jpg') }}" class="abt-img img-cover equal-col" alt="">
					</div>
					<div class="bg-primary col-xl-3 p-a0 col-md-6 col-lg-3 col-xs-12 equal-col dis-tbl">
						<div class="p-a30 text-white dis-tbl-cell wow fadeIn" data-wow-delay="0.6s">
							<p class="font-weight-600 m-b10">Hair Salon</p>
							<h4 class="font-weight-700">All Hair Services for Your Pleasure </h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text.</p>
							<a href="{{ route('beauty_salon.services-details') }}" class="site-button white">Read More</a>
						</div> 
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 p-a0 col-xs-12 equal-col">
						<img src="{{ asset('beauty_salon/images/about/img2.jpg') }}" class="abt-img img-cover equal-col" alt="">
					</div>
				</div>
			</div>
		</div>
		<!-- Services END -->
		<!-- About Us -->
		<div class="section-full content-inner-2 bg-white hair-services">
			<div class="container">
				<div class="section-head text-black text-center">
					<h2 class="text-primary m-b10">Our Services</h2>
					<div class="dlab-separator-outer m-b0">
						<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
					</div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
				</div>
				<div class="row">
					@forelse ($services as $service)
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30" style="min-height: 280px;">
								<div class="icon-content">
									<h5 class="dez-tilte"><a href="{{ route('beauty_salon.services-details') }}">{{ $service->title }}</a></h5>
									@if ($service->description)
										<p>{{ $service->description }}</p>
									@endif
									@if ($service->price || $service->duration_minutes)
										<p class="m-b0">
											@if ($service->price)
												<strong>Rs. {{ number_format((float) $service->price, 2) }}</strong>
											@endif
											@if ($service->price && $service->duration_minutes)
												<span> | </span>
											@endif
											@if ($service->duration_minutes)
												<span>{{ $service->duration_minutes }} min</span>
											@endif
										</p>
									@endif
								</div>
							</div>
						</div>
					@empty
						<div class="col-12 text-center"><p>No services available.</p></div>
					@endforelse
				</div>
			</div>
		</div>
		<!-- About Us -->
		<!-- Our Services -->
		<div class="section-full content-inner bg-blue-light" style="background-image:url({{ asset('beauty_salon/images/background/bg5.jpg') }}); background-position: bottom; background-size: cover; background-repeat: no-repeat;">
			<div class="container">
				<div class="section-head text-black text-center">
					<h2 class="text-primary m-b10">Our Pricing</h2>
					<div class="dlab-separator-outer m-b0">
						<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
					</div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
				</div>
				<div class="row">
					@php $chunkedPlans = $plans->chunk((int) ceil(max($plans->count(), 1) / 2)); @endphp
					@foreach ($chunkedPlans as $planChunk)
						<div class="col-lg-6 col-md-12 col-sm-12">
							@foreach ($planChunk as $plan)
								@php $subPrices = $plan->sub_service_prices ?? []; @endphp
								@if (empty($subPrices))
									<div class="price-tbl d-flex">
										<div class="flex-grow-1">
											<h4 class="text-primary">{{ $plan->name }}</h4>
											<p>{{ $plan->description ?: 'Service pricing managed from admin panel.' }}</p>
										</div>
									</div>
								@else
									@foreach ($subPrices as $row)
										<div class="price-tbl d-flex">
											<div class="flex-grow-1">
												<h4 class="text-primary">{{ $row['name'] ?? $plan->name }}</h4>
												<p>{{ $plan->name }}</p>
											</div>
											<div class="price-val align-self-center">
												<h3 class="text-secondry">{{ !empty($row['price']) ? 'Rs. ' . number_format((float) $row['price'], 2) : '-' }}</h3>
											</div>
										</div>
									@endforeach
								@endif
							@endforeach
						</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- Our Services -->
			<!-- Portfolio -->
			<div class="section-full content-inner-1 bg-white portfolio-box">
				<div class="container-fluid p-0">
					<div class="section-head text-black text-center m-b20">
						<h2 class="text-primary m-b10">Our Portfolio</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="site-filters style1 clearfix center">
						<ul class="filters" data-toggle="buttons">
							<li data-filter="" class="btn active"><input type="radio"><a href="#"><span>All</span></a></li>
							<li data-filter="web" class="btn"><input type="radio"><a href="#"><span>Haircuts</span></a></li>
							<li data-filter="advertising" class="btn"><input type="radio"><a href="#"><span>Coloring</span></a></li>
							<li data-filter="branding" class="btn"><input type="radio"><a href="#"><span>Makeup</span></a></li>
							<li data-filter="design" class="btn"><input type="radio"><a href="#"><span>Massage</span></a></li>
							<li data-filter="photography" class="btn"><input type="radio"><a href="#"><span>Highlights</span></a></li>
						</ul>
					</div>
					<div class="clearfix">
						<ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery lightgallery sp10">
							<li class="web design card-container col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
										<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic1.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<span data-exthumbimage="{{ asset('beauty_salon/images/gallery/thumb/pic1.jpg') }}" data-src="{{ asset('beauty_salon/images/gallery/pic1.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
													<i class="ti-fullscreen"></i> 
												</span>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="advertising branding photography card-container col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect dlab-img-effect "> 
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic2.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<span data-exthumbimage="{{ asset('beauty_salon/images/gallery/thumb/pic2.jpg') }}" data-src="{{ asset('beauty_salon/images/gallery/pic2.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
													<i class="ti-fullscreen"></i> 
												</span>	
											</div>	
										</div>
									</div>
								</div>
							</li>
							<li class="branding design photography card-container col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect"> 
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic3.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<span data-exthumbimage="{{ asset('beauty_salon/images/gallery/thumb/pic3.jpg') }}" data-src="{{ asset('beauty_salon/images/gallery/pic3.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
													<i class="ti-fullscreen"></i> 
												</span>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="web design card-container col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect"> 
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic4.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<span data-exthumbimage="{{ asset('beauty_salon/images/gallery/thumb/pic4.jpg') }}" data-src="{{ asset('beauty_salon/images/gallery/pic4.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
													<i class="ti-fullscreen"></i> 
												</span>	
											</div>
										</div>
									</div>
								</div>
							</li>
							 <li class="web branding card-container col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic5.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<span data-exthumbimage="{{ asset('beauty_salon/images/gallery/thumb/pic5.jpg') }}" data-src="{{ asset('beauty_salon/images/gallery/pic5.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
													<i class="ti-fullscreen"></i> 
												</span>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="advertising design photography card-container col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic6.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<span data-exthumbimage="{{ asset('beauty_salon/images/gallery/thumb/pic6.jpg') }}" data-src="{{ asset('beauty_salon/images/gallery/pic6.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
													<i class="ti-fullscreen"></i> 
												</span>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="web branding card-container col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
										<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic7.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<span data-exthumbimage="{{ asset('beauty_salon/images/gallery/thumb/pic7.jpg') }}" data-src="{{ asset('beauty_salon/images/gallery/pic7.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
													<i class="ti-fullscreen"></i> 
												</span>	
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="advertising design photography card-container col-lg-3 col-md-4 col-sm-6 col-6">
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect dlab-img-effect "> 
									<a href="javascript:void(0);"> <img src="{{ asset('beauty_salon/images/gallery/pic8.jpg') }}"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<span data-exthumbimage="{{ asset('beauty_salon/images/gallery/thumb/pic8.jpg') }}" data-src="{{ asset('beauty_salon/images/gallery/pic8.jpg') }}" class="icon-bx-xs check-km" title="Light Gallery Grid 1">		
													<i class="ti-fullscreen"></i> 
												</span>	
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Portfolio End -->
		<!-- Our Professional Team -->
		<div class="section-full bg-white content-inner">
			<div class="container">
				<div class="section-head text-black text-center">
					<h2 class="text-primary m-b10">{{ $homeTeam?->title ?: 'Our Professional Team' }}</h2>
					<div class="dlab-separator-outer m-b0">
						<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
					</div>
					<p>{{ $homeTeam?->subtitle ?: 'Meet the passionate beauty experts behind your transformation.' }}</p>
				</div>
				<div class="row">
					@forelse ($homeTeamMembers as $member)
							<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
								<div class="service-box text-center">
									<div class="service-images m-b15">
										<img src="{{ $member->image_path ? asset('storage/' . $member->image_path) : asset('beauty_salon/images/our-team/pic1.jpg') }}" alt="{{ $member->name }}">
									</div>
									<div class="service-content">
										<h6 class="text-uppercase text-primary">{{ $member->name }}</h6>
										<p class="m-b0">{{ $member->bio ?: ($member->designation ?: 'Beauty specialist') }}</p>
									</div>
								</div>
							</div>
					@empty
						<div class="col-12 text-center"><p>No team members added yet.</p></div>
					@endforelse
				</div>
				<div class="text-center m-t20">
					<a href="{{ route('beauty_salon.team') }}" class="site-button-secondry">View All Professionals</a>
				</div>
			</div>
		</div>
		<!-- Our Professional Team -->
		
		<!-- Testimonials Of Our Clients -->
		<div class="section-full content-inner-2" style="background-image:url({{ asset('beauty_salon/images/background/bg4.jpg') }}); background-position: bottom; background-size:cover;">
			<div class="container">
				<div class="section-head text-black text-center">
					<h2 class="text-primary m-b10">Testimonials Of Our Clients</h2>
					<div class="dlab-separator-outer m-b0">
						<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
					</div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
				</div>
				<div class="testimonial-two-dots owl-carousel owl-theme owl-dots-primary-full owl-btn-center-lr owl-btn-3">
					<div class="item p-a5">
						<div class="testimonial-9">
							<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic1.jpg') }}" width="100" height="100" alt=""></div>
							<div class="testimonial-text">
								<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
							</div>
							<div class="testimonial-detail"> <strong class="testimonial-name">Charlotte</strong> <span class="testimonial-position">Manager</span> </div>
						</div>
					</div>
					<div class="item p-a5">
						<div class="testimonial-9">
							<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic2.jpg') }}" width="100" height="100" alt=""></div>
							<div class="testimonial-text">
								<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
							</div>
							<div class="testimonial-detail"> <strong class="testimonial-name">Jennifer</strong> <span class="testimonial-position">Cosmetologist</span> </div>
						</div>
					</div>
					<div class="item p-a5">
						<div class="testimonial-9">
							<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic3.jpg') }}" width="100" height="100" alt=""></div>
							<div class="testimonial-text">
								<p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
							</div>
							<div class="testimonial-detail"> <strong class="testimonial-name">Amelia</strong> <span class="testimonial-position">Biologist</span> </div>
						</div>
					</div>
					<div class="item p-a5">
						<div class="testimonial-9">
							<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic1.jpg') }}" width="100" height="100" alt=""></div>
							<div class="testimonial-text">
								<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
							</div>
							<div class="testimonial-detail"> <strong class="testimonial-name">Roxie Burton</strong> <span class="testimonial-position">Housewife</span> </div>
						</div>
					</div>
					<div class="item p-a5">
						<div class="testimonial-9">
							<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic2.jpg') }}" width="100" height="100" alt=""></div>
							<div class="testimonial-text">
								<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
							</div>
							<div class="testimonial-detail"> <strong class="testimonial-name">Claudia Kennen</strong> <span class="testimonial-position">Designer</span> </div>
						</div>
					</div>
					<div class="item p-a5">
						<div class="testimonial-9">
							<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic3.jpg') }}" width="100" height="100" alt=""></div>
							<div class="testimonial-text">
								<p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
							</div>
							<div class="testimonial-detail"> <strong class="testimonial-name">Elizabeth Ross</strong> <span class="testimonial-position">Journalist</span> </div>
						</div>
					</div>
					<div class="item p-a5">
						<div class="testimonial-9">
							<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic1.jpg') }}" width="100" height="100" alt=""></div>
							<div class="testimonial-text">
								<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
							</div>
							<div class="testimonial-detail"> <strong class="testimonial-name">Evelyn Martinez</strong> <span class="testimonial-position">Fashion Designer</span> </div>
						</div>
					</div>
					<div class="item p-a5">
						<div class="testimonial-9">
							<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic2.jpg') }}" width="100" height="100" alt=""></div>
							<div class="testimonial-text">
								<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
							</div>
							<div class="testimonial-detail"> <strong class="testimonial-name">Olivia</strong> <span class="testimonial-position">Housewife</span> </div>
						</div>
					</div>
					<div class="item p-a5">
						<div class="testimonial-9">
							<div class="testimonial-pic radius style1"><img src="{{ asset('beauty_salon/images/testimonials/pic3.jpg') }}" width="100" height="100" alt=""></div>
							<div class="testimonial-text">
								<p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
							</div>
							<div class="testimonial-detail"> <strong class="testimonial-name">Diane Mateo</strong> <span class="testimonial-position">Cosmetologist</span> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonials Of Our Clients -->
		<!-- Our Latest Blog -->
		<div class="section-full content-inner overlay-white-middle" style="background-image:url({{ asset('beauty_salon/images/background/bg1.png') }}), url({{ asset('beauty_salon/images/background/bg2.png') }}); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
			<div class="container">
				<div class="section-head text-black text-center">
					<h2 class="text-primary m-b10">Our Latest Blog</h2>
					<div class="dlab-separator-outer m-b0">
						<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
					</div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
				</div>
				<div class="blog-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1">
					<div class="item">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dlab-post-media dlab-img-effect radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img width="700" height="500" src="{{ asset('beauty_salon/images/blog/grid/pic4.jpg') }}" alt=""></a> </div>
							<div class="dlab-info">
								 <div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2021</li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dlab-post-media dlab-img-effect radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img width="700" height="500" src="{{ asset('beauty_salon/images/blog/grid/pic3.jpg') }}" alt=""></a> </div>
							<div class="dlab-info">
								 <div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2021</li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dlab-post-media dlab-img-effect radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img width="700" height="500" src="{{ asset('beauty_salon/images/blog/grid/pic2.jpg') }}" alt=""></a> </div>
							<div class="dlab-info">
								 <div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2021</li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="blog-post blog-grid blog-style-1">
							<div class="dlab-post-media dlab-img-effect radius-sm"> <a href="{{ route('beauty_salon.blog-details') }}"><img width="700" height="500" src="{{ asset('beauty_salon/images/blog/grid/pic1.jpg') }}" alt=""></a> </div>
							<div class="dlab-info">
								 <div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
										<li class="post-date">September 18, 2021</li>
										<li class="post-comment"><a href="{{ route('beauty_salon.blog-details') }}">5k</a> </li>
									</ul>
								</div>
								<div class="dlab-post-title ">
									<h5 class="post-title font-20"><a href="{{ route('beauty_salon.blog-details') }}">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
								</div>
								<div class="dlab-post-readmore blog-share"> 
									<a href="{{ route('beauty_salon.blog-details') }}" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Our Latest Blog -->
        <!-- contact area END -->
	</div>
@endsection

@section('page_scripts')
<script src="{{ asset('beauty_salon/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('beauty_salon/plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('beauty_salon/plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('beauty_salon/plugins/wow/wow.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('beauty_salon/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('beauty_salon/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('beauty_salon/plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script src="{{ asset('beauty_salon/plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('beauty_salon/plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('beauty_salon/plugins/imagesloaded/imagesloaded.js') }}"></script><!-- MASONRY  -->
<script src="{{ asset('beauty_salon/plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY  -->
<script src="{{ asset('beauty_salon/plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY  -->
<script src="{{ asset('beauty_salon/plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL  SLIDER  -->
<script src="{{ asset('beauty_salon/plugins/rangeslider/rangeslider.js') }}" ></script><!-- Rangeslider -->
<script src="{{ asset('beauty_salon/plugins/lightgallery/js/lightgallery-all.js') }}"></script><!-- LIGHT GALLERY -->
<script src="{{ asset('beauty_salon/js/dz.carousel.min.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('beauty_salon/plugins/loading/anime.js') }}"></script><!-- LOADING JS -->
<script src="{{ asset('beauty_salon/plugins/loading/anime-app.js') }}"></script><!-- LOADING JS -->
<script src="{{ asset('beauty_salon/js/custom.min.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('beauty_salon/js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
<script src="{{ asset('beauty_salon/plugins/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('beauty_salon/js/styleSwitcher.js') }}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('beauty_salon/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('beauty_salon/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('beauty_salon/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script  src="{{ asset('beauty_salon/js/rev.slider.js') }}"></script>
<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_1();
});	/*ready*/
</script>
@endsection

