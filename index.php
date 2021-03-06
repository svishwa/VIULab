<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <title>Computer Vision Lab &#8211; JH University</title>
                        <script>
                            /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
                            if ( typeof WebFontConfig === "undefined" ) {
                                WebFontConfig = new Object();
                            }
                            WebFontConfig['google'] = {families: ['Mina:700', 'Slabo+27px:400']};

                            (function() {
                                var wf = document.createElement( 'script' );
                                wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
                                wf.type = 'text/javascript';
                                wf.async = 'true';
                                var s = document.getElementsByTagName( 'script' )[0];
                                s.parentNode.insertBefore( wf, s );
                            })();
                        </script>
                        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Computer Vision Lab &raquo; Feed" href="http://localhost/index.php/feed/" />
<link rel="alternate" type="application/rss+xml" title="Computer Vision Lab &raquo; Comments Feed" href="http://localhost/index.php/comments/feed/" />
<link rel='stylesheet' id='sequence-theme-basic-css'  href='http://localhost/wp-content/plugins/sciencex-core/assets/css/sequence-theme.basic.min.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='ekko-lightbox-css'  href='http://localhost/wp-content/plugins/sciencex-core/assets/css/ekko-lightbox.min.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='sciencex-fonts-css'  href='https://fonts.googleapis.com/css?family=Mina%3A400%2C700%7CSlabo+27px%3A400&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='http://localhost/wp-content/themes/sciencex/assets/css/bootstrap.min.css?ver=3.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='ionicons-min-css'  href='http://localhost/wp-content/themes/sciencex/assets/css/ionicons.min.css?ver=2.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='animate-min-css'  href='http://localhost/wp-content/themes/sciencex/assets/css/animate.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-dropdownhover-min-css'  href='http://localhost/wp-content/themes/sciencex/assets/css/bootstrap-dropdownhover.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='sciencex-main-css'  href='http://localhost/wp-content/themes/sciencex/assets/css/main.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='sciencex-style-css'  href='http://localhost/wp-content/themes/sciencex/style.css?ver=1.0.1' type='text/css' media='all' />
<style id='sciencex-style-inline-css' type='text/css'>
.navbar-brand img{ height:73px; }.navbar-brand img{ width:154px; }
</style>
<link rel='stylesheet' id='kc-general-css'  href='http://localhost/wp-content/plugins/kingcomposer/assets/frontend/css/kingcomposer.min.css?ver=2.7.7' type='text/css' media='all' />
<link rel='stylesheet' id='kc-animate-css'  href='http://localhost/wp-content/plugins/kingcomposer/assets/css/animate.css?ver=2.7.7' type='text/css' media='all' />
<link rel='stylesheet' id='kc-icon-1-css'  href='http://localhost/wp-content/themes/sciencex/assets/css/ionicons.min.css?ver=2.7.7' type='text/css' media='all' />
<link rel='stylesheet' id='kc-icon-2-css'  href='http://localhost/wp-content/plugins/kingcomposer/assets/css/icons.css?ver=2.7.7' type='text/css' media='all' />
<script type='text/javascript' src='http://localhost/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://localhost/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='http://localhost/index.php/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 4.9.9" />
<link rel="canonical" href="http://localhost/" />
<link rel='shortlink' href='http://localhost/' />
<link rel="alternate" type="application/json+oembed" href="http://localhost/index.php/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://localhost/index.php/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2F&#038;format=xml" />
<script type="text/javascript">var kc_script_data={ajax_url:"http://localhost/wp-admin/admin-ajax.php"}</script>	<style>
	.sabbi-page-header{
		background-color: #b03838;
	}
	.blog-banner.sabbi-page-header{
		background-color: #b03838;
	}
    </style>
	<style type="text/css" title="dynamic-css" class="options-output">.sciencex-content-area{padding-top:0;padding-bottom:0;}.navbar-white{padding-top:0;padding-bottom:0;}.navbar-nav>li>a{padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px;}.navbar-nav-hov_underline .navbar-nav .dropdown-menu{width:210px;}.navbar-nav-hov_underline .navbar-nav .dropdown-menu li a{padding-top:10px;padding-right:15px;padding-bottom:10px;padding-left:15px;}.navbar-nav{font-family:Mina;text-transform:uppercase;line-height:20px;font-weight:700;font-size:12px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .navbar-nav{opacity: 0;}.ie.wf-loading .navbar-nav{visibility: hidden;}.navbar-white{background-color:#ffffff;}{color:#ffffff;}{background-color:#183c55;}.navbar-nav-hov_underline .navbar-nav li a{color:#183c55;}{background-color:#183c55;}.navbar-nav-hov_underline .navbar-nav li a:hover{color:#183c55;}.navbar-nav-hov_underline > .navbar-nav > li > a:hover, .navbar-nav-hov_underline > .navbar-nav > li > a:focus{border-bottom:4px solid #36a4de;}.navbar-nav-hov_underline > .navbar-nav > li.active > a{border-bottom:4px solid #36a4de;}.navbar-nav-hov_underline .navbar-nav .dropdown-menu:before{background-color:#36a4de;}{color:#36a4de;}.navbar-nav-hov_underline .navbar-nav .dropdown-menu{background-color:#ffffff;}{color:#ffffff;}.sabbi-page-header{background-color:#2e1f87;}{color:#2e1f87;}.sabbi-page-header .page-title{font-family:Mina;line-height:40px;font-weight:700;font-size:28px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .sabbi-page-header .page-title{opacity: 0;}.ie.wf-loading .sabbi-page-header .page-title{visibility: hidden;}.sabbi-page-header .header-title-block h6{font-family:Mina;line-height:20px;font-weight:700;font-size:16px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .sabbi-page-header .header-title-block h6{opacity: 0;}.ie.wf-loading .sabbi-page-header .header-title-block h6{visibility: hidden;}{background-color:#ffffff;}.sabbi-page-header .page-title{color:#ffffff;}{background-color:#ffffff;}.sabbi-page-header .header-title-block h6{color:#ffffff;}.auth-breadcrumb-wrap .sabbi-breadcrumb a, .sabbi-breadcrumb > li > span{font-family:Mina;line-height:25px;font-weight:700;font-size:16px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .auth-breadcrumb-wrap .sabbi-breadcrumb a,.wf-loading  .sabbi-breadcrumb > li > span{opacity: 0;}.ie.wf-loading .auth-breadcrumb-wrap .sabbi-breadcrumb a,.ie.wf-loading  .sabbi-breadcrumb > li > span{visibility: hidden;}{background-color:#ffffff;}.auth-breadcrumb-wrap .sabbi-breadcrumb a{color:#ffffff;}{background-color:#cacaca;}.sabbi-breadcrumb > li > span{color:#cacaca;}{background-color:#cacaca;}.sabbi-breadcrumb span.separator{color:#cacaca;}.blog-banner.sabbi-page-header{background-color:#3a89c6;}{color:#3a89c6;}.blog-banner.sabbi-page-header .page-title{font-family:Mina;line-height:40px;font-weight:700;font-size:28px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .blog-banner.sabbi-page-header .page-title{opacity: 0;}.ie.wf-loading .blog-banner.sabbi-page-header .page-title{visibility: hidden;}.blog-banner.sabbi-page-header .header-title-block h6{font-family:Mina;line-height:20px;font-weight:700;font-size:16px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .blog-banner.sabbi-page-header .header-title-block h6{opacity: 0;}.ie.wf-loading .blog-banner.sabbi-page-header .header-title-block h6{visibility: hidden;}{background-color:#ffffff;}.blog-banner.sabbi-page-header .page-title{color:#ffffff;}{background-color:#ffffff;}.blog-banner.sabbi-page-header .header-title-block h6{color:#ffffff;}.blog-breadcrumb .breadcrumb{padding-top:8px;padding-right:15px;padding-bottom:8px;padding-left:15px;}.blog-breadcrumb.auth-breadcrumb-wrap .sabbi-breadcrumb a, .blog-breadcrumb .sabbi-breadcrumb > li > span{font-family:Mina;line-height:25px;font-weight:700;font-size:16px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .blog-breadcrumb.auth-breadcrumb-wrap .sabbi-breadcrumb a,.wf-loading  .blog-breadcrumb .sabbi-breadcrumb > li > span{opacity: 0;}.ie.wf-loading .blog-breadcrumb.auth-breadcrumb-wrap .sabbi-breadcrumb a,.ie.wf-loading  .blog-breadcrumb .sabbi-breadcrumb > li > span{visibility: hidden;}{background-color:#ffffff;}.blog-breadcrumb .sabbi-breadcrumb a{color:#ffffff;}{background-color:#cacaca;}.blog-breadcrumb .sabbi-breadcrumb span.separator{color:#cacaca;}.section-footer .footer-site-info{padding-top:55px;padding-bottom:55px;}.site-footer.section-footer{background-color:#EDF2F6;}{color:#EDF2F6;}.section-footer .footer-site-info .widget-title{font-family:Mina;line-height:28px;font-weight:700;font-size:22px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .section-footer .footer-site-info .widget-title{opacity: 0;}.ie.wf-loading .section-footer .footer-site-info .widget-title{visibility: hidden;}{background-color:#183c55;}.section-footer .footer-site-info .widget-title{color:#183c55;}{background-color:#183c55;}.section-footer .widget_text .textwidget p, .section-footer p, .footer-site-info .event-list .date{color:#183c55;}{background-color:#183c55;}.section-footer .widget ul li a, .footer-site-info .event-list .title a{color:#183c55;}{background-color:#2f94ca;}.section-footer .widget ul li a:hover, .footer-site-info .event-list .title a:hover, .footer-widget .widget .btn:hover{color:#2f94ca;}.section-footer .footer-bar{padding-top:30px;padding-bottom:30px;}.section-footer .footer-bar{font-family:"Slabo 27px";line-height:25px;font-weight:400;font-size:12px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .section-footer .footer-bar{opacity: 0;}.ie.wf-loading .section-footer .footer-bar{visibility: hidden;}.section-footer .footer-bar{background-color:#ffffff;}{color:#ffffff;}{background-color:#183c55;}.powredby, .copyright{color:#183c55;}{background-color:#36a4de;}.footer-bar .copyright a, .powredby a{color:#36a4de;}{background-color:#2f94ca;}.footer-bar .copyright a:hover, .powredby a:hover{color:#2f94ca;}body{font-family:"Slabo 27px";line-height:25.032px;font-weight:400;font-style:normal;color:#183c55;font-size:16px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body{opacity: 0;}.ie.wf-loading body{visibility: hidden;}a{color:#36a4de;}a:hover{color:#36a4de;}a:active{color:#36a4de;}h1{font-family:Mina;font-weight:700;font-style:normal;color:#183c55;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h1{opacity: 0;}.ie.wf-loading h1{visibility: hidden;}h2{font-family:Mina;font-weight:700;font-style:normal;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h2{opacity: 0;}.ie.wf-loading h2{visibility: hidden;}h3{font-family:Mina;line-height:20px;font-weight:700;font-style:normal;color:#183c55;font-size:24px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h3{opacity: 0;}.ie.wf-loading h3{visibility: hidden;}h4{font-family:Mina;line-height:20px;font-weight:700;font-style:normal;color:#183c55;font-size:18px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h4{opacity: 0;}.ie.wf-loading h4{visibility: hidden;}h5{font-family:Mina;line-height:20px;font-weight:700;font-style:normal;color:#183c55;font-size:14px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h5{opacity: 0;}.ie.wf-loading h5{visibility: hidden;}h6{font-family:Mina;line-height:20px;font-weight:700;font-style:normal;color:#183c55;font-size:12px;opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h6{opacity: 0;}.ie.wf-loading h6{visibility: hidden;}</style><script type="text/javascript"></script><style type="text/css" id="kc-css-general">.kc-off-notice{display: inline-block !important;}.kc-container{max-width:1170px;}</style><style type="text/css" id="kc-css-render">@media only screen and (min-width:1000px) and (max-width:5000px){body.kc-css-system .kc-css-724160{width:100%;}body.kc-css-system .kc-css-139650{width:100%;}body.kc-css-system .kc-css-286529{width:100%;}}body.kc-css-system .kc-css-724160{padding-right:0px;padding-left:0px;}body.kc-css-system .kc-css-221862 .seq .seq-canvas>:before{background:linear-gradient(50deg, rgba(10, 82, 138, 0.60), rgba(140, 83, 224, 0.61)), rgba(151, 130, 255, 0.43);}body.kc-css-system .kc-css-221862 .seq--kawsa.seq-active .seq-content .seq-title{color:#ffffff;}body.kc-css-system .kc-css-221862 .seq--kawsa.seq-active .seq-content .btn-link{color:#ffffff;}body.kc-css-system .kc-css-221862 .seq--kawsa.seq-active .seq-content .btn-link:hover{color:#f5f5f5;background-color:rgba(50, 36, 140, 0.83);}body.kc-css-system .kc-css-182323{padding-top:25px;padding-bottom:25px;}body.kc-css-system .kc-css-139650{margin-top:45px;}body.kc-css-system .kc-css-557667 ,body.kc-css-system .kc-css-557667 p{font-size:20px;}body.kc-css-system .kc-css-794390{padding-top:25px;padding-bottom:25px;}body.kc-css-system .kc-css-286529{margin-top:45px;}body.kc-css-system .kc-css-380491.news-card .lst_news_item a{padding-bottom:20px;}body.kc-css-system .kc-css-380491.news-card{background-color:#ffffff;padding-top:50px;padding-bottom:50px;}</style></head>

<body class="home page-template-default page page-id-1796 kingcomposer kc-css-system">

<!-- start preloader -->
<div class="preloader-wrap">
    <div class="preloader-spinner">
        <div class="preloader-dot1"></div>
        <div class="preloader-dot2"></div>
    </div>
</div>
<!-- / end preloader -->


<div class="site-main" style="background-image: url();" >
<div id="page" class="site ">
    <header class="sabbi-site-head">
        <nav class="navbar navbar-white navbar-kawsa navbar-fixed-top " role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button"><span class="sr-only"> Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> 
                    	    <a class="navbar-brand" href="http://localhost/" title="Computer Vision Lab" data-scroll><img src="http://localhost/wp-content/uploads/2019/01/logo_VIU.png" alt="" class="img-responsive"></a>
	                  </div>
                <div class="navbar-collapse collapse sabbi-navbar-collapse  navbar-nav-hov_underline" id="navbar">
                                        <ul id="menu-main-nav" class="nav navbar-nav navbar-right"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2078" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1796 current_page_item menu-item-2078 active"><a title="Home" href="http://localhost/">Home</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2085" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2085"><a title="Research" href="http://localhost/index.php/research/">Research</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2086" class="menu-item menu-item-type-post_type menu-item-object-team menu-item-has-children menu-item-2086 dropdown"><a title="People" href="http://localhost/index.php/sciencex_teams/dr-elon-mcmahon/" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn" class="dropdown-toggle" aria-haspopup="true">People <span class="caret"></span></a>
<ul role="menu" class="dropdown-menu" >
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2087" class="menu-item menu-item-type-post_type menu-item-object-team menu-item-2087"><a title="Dr. Vishal M Patel" href="http://localhost/index.php/sciencex_teams/dr-elon-mcmahon/">Dr. Vishal M Patel</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2084" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2084"><a title="Our Team" href="http://localhost/index.php/our-team/">Our Team</a></li>
</ul>
</li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2064" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2064 dropdown"><a title="Publications" href="#" data-toggle="dropdown" data-hover="dropdown" data-animations="zoomIn" class="dropdown-toggle" aria-haspopup="true">Publications <span class="caret"></span></a>
<ul role="menu" class="dropdown-menu" >
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2080"><a title="Books" href="http://localhost/index.php/books/">Books</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2083" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2083"><a title="Journal Articles" href="http://localhost/index.php/journal-articles/">Journal Articles</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2081" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2081"><a title="Conferences" href="http://localhost/index.php/conferences-and-talks/">Conferences</a></li>
</ul>
</li>
</ul>                </div>
            </div>
        </nav><!-- /.navbar -->
    </header><!-- #masthead -->	
	<div class="sciencex-content-area ">
		<div class="container">
			<div class="row">
			    			    <div class="col-md-12">
					
<article id="post-1796" class="post-1796 page type-page status-publish hentry">

	<div class="entry-content">
		<div class="kc_clfw"></div><section data-kc-fullwidth="content" class="kc-elm kc-css-215622 kc_row"><div class="kc-row-container"><div class="kc-wrap-columns"><div class="kc-elm kc-css-724160 kc_col-sm-12 kc_column kc_col-sm-12"><div class="kc-col-container"><div class="sabbi-site-head"><div class="sabbi-site-header-meta kc-elm kc-css-221862" >
            <div class="site-hmsl-content text-center pt_60">
                <div class="seq seq--kawsa" id="sequence" data-slideautoPlay="true" data-slideautoPlayInterval="5000">
                    <div class="seq-screen">
                        <ul class="seq-canvas"><li class="seq-step1" id="step1" style="background-image:url(http://localhost/wp-content/uploads/2018/12/Untitled.png)">
                                <div class="bg-blend"></div>
                                <div class="seq-content" ><h2 class="seq-title tt_up" data-seq="">Photo Sketch Synthesis</h2><a href="http://localhost/index.php/research/" title="" target="_self" class="btn-link btn-more">Read More</a>
                                </div>
                            </li><li class="seq-step1" id="step2" style="background-image:url(http://localhost/wp-content/uploads/2018/12/face_synthesis_from_landmarks.png)">
                                <div class="bg-blend"></div>
                                <div class="seq-content" ><h2 class="seq-title tt_up" data-seq="">Face Synthesis From Landmarks</h2><a href="http://localhost/index.php/research/" title="" target="_self" class="btn-link btn-more">Read More</a>
                                </div>
                            </li><li class="seq-step1" id="step3" style="background-image:url(http://localhost/wp-content/uploads/2018/12/deep_multimodal_subspace_clustering.png)">
                                <div class="bg-blend"></div>
                                <div class="seq-content" ><h2 class="seq-title tt_up" data-seq="">Deep Multimodal Subspace Clustering</h2><a href="http://localhost/index.php/research/" title="" target="_self" class="btn-link btn-more">Read More</a>
                                </div>
                            </li><li class="seq-step1" id="step4" style="background-image:url(http://localhost/wp-content/uploads/2018/12/image_dehazing.png)">
                                <div class="bg-blend"></div>
                                <div class="seq-content" ><h2 class="seq-title tt_up" data-seq="">Image Dehazing</h2><a href="http://localhost/index.php/research/" title="" target="_self" class="btn-link btn-more">Read More</a>
                                </div>
                            </li><li class="seq-step1" id="step5" style="background-image:url(http://localhost/wp-content/uploads/2018/12/image_deraining.png)">
                                <div class="bg-blend"></div>
                                <div class="seq-content" ><h2 class="seq-title tt_up" data-seq="">Image Deraining</h2><a href="http://localhost/index.php/research/" title="" target="_self" class="btn-link btn-more">Read More</a>
                                </div>
                            </li><li class="seq-step1" id="step6" style="background-image:url(http://localhost/wp-content/uploads/2018/12/crowd_analytics_1.png)">
                                <div class="bg-blend"></div>
                                <div class="seq-content" ><h2 class="seq-title tt_up" data-seq="">Crowd Analytics</h2><a href="http://localhost/index.php/research/" title="" target="_self" class="btn-link btn-more">Read More</a>
                                </div>
                            </li><li class="seq-step1" id="step7" style="background-image:url(http://localhost/wp-content/uploads/2018/12/biomedical_image_analysis.jpg)">
                                <div class="bg-blend"></div>
                                <div class="seq-content" ><h2 class="seq-title tt_up" data-seq="">Biomedical Image Analysis</h2><a href="http://localhost/index.php/research/" title="" target="_self" class="btn-link btn-more">Read More</a>
                                </div>
                            </li><li class="seq-step1" id="step8" style="background-image:url(http://localhost/wp-content/uploads/2018/12/anomaly_detection.png)">
                                <div class="bg-blend"></div>
                                <div class="seq-content" ><h2 class="seq-title tt_up" data-seq="">Anomaly Detection</h2><a href="http://localhost/index.php/research/" title="" target="_self" class="btn-link btn-more">Read More</a>
                                </div>
                            </li></ul>
                        <div class="sec-navigate-wrap pos-y_center container">
                            <button type="button" class="seq-next"></button>
                            <button type="button" class="seq-prev"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div></div></div></div></div></section><section class="kc-elm kc-css-182323 kc_row"><div class="kc-row-container  kc-container"><div class="kc-wrap-columns"><div class="kc-elm kc-css-139650 kc_col-sm-12 kc_column kc_col-sm-12"><div class="kc-col-container"><div class="kc-elm kc-css-557667 kc-animated kc-animate-eff-fadeIn kc_text_block"><p>The <strong>Hopkins-VIU</strong> Lab is a part of the Electrical and Computer Engineering department in Johns Hopkins University. We focus on several theoretical and application aspects of computer vision and image understanding.</p>
<p align="justify">Advancing research in computer vision is one of the most important aspects in developing robust artificial intelligent systems. We believe it is critical to develop strong reasoning abilities about the visual world and in that attempt, we work on several areas related to computer vision and image understanding such as recognition, detection, image restoration, user authentication, crowd analytics, cross spectrum face synthesis, domain adaptation, open set recognition, bio-medical image analysis, biometrics, etc. Specifically, we focus on developing a variety of novel machine learning techniques, such as end-to-end deep learning and neural networks for these applications.</p>
</div></div></div></div></div></section><section class="kc-elm kc-css-794390 kc_row"><div class="kc-row-container  kc-container"><div class="kc-wrap-columns"><div class="kc-elm kc-css-286529 kc_col-sm-12 kc_column kc_col-sm-12"><div class="kc-col-container"><article class="news-card sabbi-thumlinepost-card solitude-bg__x kc-elm kc-css-380491"><h2 class="stage-title">Latest News</h2><ul class="list-unstyled lst_news_list" tabindex="0"><li class="lst_news_item">
                        <h3 class="title mg_0"><a href="http://localhost/index.php/sciencex_event/two-best-student-paper-awards-at-icpr-2018-congratulations-xing-vishwa-pramuditha-and-mahdi/">Two Best Student Paper Awards at ICPR 2018. Congratulations Xing, Vishwa, Pramuditha and Mahdi!</a></h3>
                        <div>
                            <span class="date">Aug 1, 2018</span>
                        </div>
                    </li><li class="lst_news_item">
                        <h3 class="title mg_0"><a href="http://localhost/index.php/sciencex_event/we-won-the-1st-prize-at-the-2018-ieee-icme-grand-challenge-on-heterogeneous-face-recognition-congratulations-he/">We won the 1st prize at the 2018 IEEE ICME Grand Challenge on Heterogeneous Face Recognition. Congratulations He!</a></h3>
                        <div>
                            <span class="date">Aug 1, 2018</span>
                        </div>
                    </li><li class="lst_news_item">
                        <h3 class="title mg_0"><a href="http://localhost/index.php/sciencex_event/we-won-the-1st-prize-at-the-ntire2018-challenge-on-image-dehazing-congratulations-he-and-vishwa/">We won the 1st prize at the NTIRE2018 challenge on image dehazing. Congratulations He and Vishwa!</a></h3>
                        <div>
                            <span class="date">Jun 1, 2018</span>
                        </div>
                    </li><li class="lst_news_item">
                        <h3 class="title mg_0"><a href="http://localhost/index.php/sciencex_event/our-paper-person-recognition-beyond-the-visible-spectrum-combining-body-shape-and-texture-from-mmw-images-received-the-honorable-mention-paper-award-at-icb-2018-cong/">Our paper “Person recognition beyond the visible spectrum: combining body shape and texture from mmW images” received the Honorable Mention Paper Award at ICB 2018. Congratulations Ester!  </a></h3>
                        <div>
                            <span class="date">Feb 1, 2018</span>
                        </div>
                    </li><li class="lst_news_item">
                        <h3 class="title mg_0"><a href="http://localhost/index.php/sciencex_event/gave-a-keynote-speech-on-active-authentication-at-the-2017-european-intelligence-and-security-informatics-conference-eisic-hellenic-air-force-academy-greece/">Gave a keynote speech on Active Authentication at the 2017 European Intelligence and Security Informatics Conference (EISIC), Hellenic Air Force Academy, Greece. </a></h3>
                        <div>
                            <span class="date">Sep 1, 2017</span>
                        </div>
                    </li><li class="lst_news_item">
                        <h3 class="title mg_0"><a href="http://localhost/index.php/sciencex_event/2512/">Our paper “CNN-based cascaded multi-task learning of high-level prior and density estimation for crowd counting” received the Best Paper Award at AVSS 2017. Congratulations Vishwanath!</a></h3>
                        <div>
                            <span class="date">Sep 1, 2017</span>
                        </div>
                    </li><li class="lst_news_item">
                        <h3 class="title mg_0"><a href="http://localhost/index.php/sciencex_event/our-work-on-active-authentication-was-featured-in-cbs-this-morning-saturday-program/">Our work on Active Authentication was featured in CBS This Morning Saturday program</a></h3>
                        <div>
                            <span class="date">Jul 1, 2017</span>
                        </div>
                    </li><li class="lst_news_item">
                        <h3 class="title mg_0"><a href="http://localhost/index.php/sciencex_event/elected-as-a-member-of-the-information-forensics-and-security-technical-committee-of-the-ieee-signal-processing-society-2017-2019/">Elected as a member of the Information Forensics and Security Technical Committee of the IEEE Signal Processing Society (2017-2019)</a></h3>
                        <div>
                            <span class="date">Dec 1, 2016</span>
                        </div>
                    </li><li class="lst_news_item">
                        <h3 class="title mg_0"><a href="http://localhost/index.php/sciencex_event/associate-editor-of-the-ieee-biometrics-compendium/">Associate Editor of the IEEE Biometrics Compendium</a></h3>
                        <div>
                            <span class="date">Sep 1, 2016</span>
                        </div>
                    </li><li class="lst_news_item">
                        <h3 class="title mg_0"><a href="http://localhost/index.php/sciencex_event/selected-for-the-a-walter-tyson-assistant-professorship-award-at-rutgers/">Selected for the A. Walter Tyson Assistant Professorship Award at Rutgers</a></h3>
                        <div>
                            <span class="date">Sep 1, 2016</span>
                        </div>
                    </li></ul><a href="http://localhost/index.php/event/" title="" target="_blank" class="btn btn-unsolemn btn-action read-more">View all</a></article></div></div></div></div></section><section class="kc-elm kc-css-938622 kc_row"><div class="kc-row-container  kc-container"><div class="kc-wrap-columns"><div class="kc-elm kc-css-607841 kc_col-sm-12 kc_column kc_col-sm-12"><div class="kc-col-container"><div class="kc-elm kc-css-641178 kc_text_block"></p>
</div></div></div></div></div></section>	</div><!-- .entry-content -->

</article><!-- #post-1796 -->
				</div>
							</div>
        </div>
	</div>

	<footer id="colophon" class="site-footer section-footer no-padding" style="background-image: url( http://sciencex.wpmanageninja.com/wp-content/themes/sciencex/assets/img/footer_bg.jpg);" >
        
        	</footer><!-- #colophon -->
</div><!-- #page -->
</div> <!-- end site main -->

<script type='text/javascript' src='http://localhost/wp-content/plugins/sciencex-core/assets/js/hammer.min.js?ver=20181415'></script>
<script type='text/javascript' src='http://localhost/wp-includes/js/imagesloaded.min.js?ver=3.2.0'></script>
<script type='text/javascript' src='http://localhost/wp-content/plugins/sciencex-core/assets/js/sequence.min.js?ver=20181415'></script>
<script type='text/javascript' src='http://localhost/wp-content/plugins/sciencex-core/assets/js/ekko-lightbox.min.js?ver=20181415'></script>
<script type='text/javascript' src='http://localhost/wp-content/plugins/sciencex-core/assets/js/shortcode.main.js?ver=20181416'></script>
<script type='text/javascript' src='http://localhost/wp-content/themes/sciencex/assets/js/bootstrap-dropdownhover.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://localhost/wp-content/themes/sciencex/assets/js/bootstrap.min.js?ver=3.3.2'></script>
<script type='text/javascript' src='http://localhost/wp-content/themes/sciencex/assets/js/main.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://localhost/wp-content/plugins/kingcomposer/assets/frontend/js/kingcomposer.min.js?ver=2.7.7'></script>

</body>
</html>
