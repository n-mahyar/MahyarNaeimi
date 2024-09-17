<!DOCTYPE html>
<html lang="en-us">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Sculpture"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Sculpture"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Sculpture"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Sculpture"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Sculpture"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20240917201622" type="text/javascript"></script>
	<script src="js/a191dcbddf8b0067c395e1611e51a575-bundle.js?ts=20240917201622" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20240917201622" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a191dcbddf8b0067c395e1611e51a575-bundle.css?ts=20240917201622" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a191dcbddf8b0067c395e1611e51a575" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191dcbddf620055d3851628ec945bd9" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a191dcbddf6201bbac570f7f55116bd1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191dcbddf620299e850648b55b02ecb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="a191e6a15f9b007194c50c1c216e3f79" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal">Mahyar Naeimi</p>
</div><div id="a191dcbddf6309aacad1c8f8743a3eaa" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="a191dcbddf63053acebaca29c83b3071" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class=""><a href="About-me/">About me</a></li><li class=""><a href="CG-Art/">CG Art</a></li><li class=""><a href="Graphic-Design/">Graphic Design</a></li><li class=""><a href="Photography/">Photography</a></li><li class="wb_this_page_menu_item"><a href="Sculpture/">Sculpture</a></li><li class=""><a href="Drawing-and-Illustration/">Drawing and Illustration</a></li><li class=""><a href="Art-Tutorials-1/">Art Tutorials</a></li></ul><div class="clearfix"></div></div><div id="a191dcbddf640072614cb913228b9a67" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191dcbddf62031e8c69eaa80458b713" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="a191e66e2228000b55b193a6e1267468" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191e66e222a00803c05362b315ff6bb" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1"><span style="background-color: rgb(255, 255, 255);">Sculpturing</span></h1>
</div><div id="a191e66e222d00deb60ca335a4c2b6ff" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1"><span style="color:#ffffff;"><u><span data-l-s="85791" style="background-color:transparent;"><span style="font-size:12px;">Clay.Metal.Engraving</span></span></u></span></h1>
</div></div></div></div></div><div id="a191dcbddf640397f3443778fc9c5f7d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191dcbddf6300e482588a5d4cc8daaf" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="a191dcbddf6306338ac79aaaced07ed6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div></div></div></div></div><div id="wb_main_a191dcbddf8b0067c395e1611e51a575" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191dcbddf63013fd55777f9fd53a0a0" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a191dcbddf63026b0e09c4decb26c5ed" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span data-l-s="50632" style="color:rgba(0,0,0,1);">Sculpturing</span></h2>
</div><div id="a191dcbddf6307b2254c528253c0c6be" class="wb_element wb-prevent-layout-click wb_gallery" data-plugin="Gallery"><script type="text/javascript">
			$(function() {
				(function(GalleryLib) {
					var el = document.getElementById("a191dcbddf6307b2254c528253c0c6be");
					var lib = new GalleryLib({"id":"a191dcbddf6307b2254c528253c0c6be","height":"auto","type":"masonry","trackResize":true,"interval":10,"speed":400,"images":[{"thumb":"gallery_gen\/0b7d5d580ebbc36e1a6a955056920a13_800x600_fill.jpg","src":"gallery_gen\/43f3f0c4626949b23192fe06607e1f2a_fit.jpg?ts=1726593389","width":3264,"height":2448,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/03f446512db05df43c32154fad3ee853_800x800_fill.jpg","src":"gallery_gen\/f95173728808fab5e4fee5f035915e4a_fit.jpg?ts=1726593389","width":2448,"height":2448,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/dfbf84ef05f77afb0f66ad6a1914098c_800x1066_fill.jpg","src":"gallery_gen\/6f0f11603dadfd10ac7c3525fc915d04_fit.jpg?ts=1726593390","width":2448,"height":3264,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/bc624bb361e2c22c26d3f4369090f8ea_800x990_fill.jpg","src":"gallery_gen\/89873231372b20c1ebaba781c38b4387_fit.jpg?ts=1726593390","width":2268,"height":2804,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/3f426aaeeb599ddfb4719c3db439e988_800x1066_fill.jpg","src":"gallery_gen\/1ba962ec8e35734d81f76f2ac98f6724_fit.jpg?ts=1726593390","width":2448,"height":3264,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/2501cf1cc6beedec7624106239878270_800x940_fill.jpg","src":"gallery_gen\/1aa51d18e1c922db745d86ab770371df_fit.jpg?ts=1726593391","width":1884,"height":2216,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/8df9cb2f170e077be7aa4054608b044c_800x600_fill.jpg","src":"gallery_gen\/e25817febcba3c04fb70dcf6c0e38845_fit.jpg?ts=1726593391","width":3264,"height":2448,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/477240191f4f77bf7246c8a9fc7d269a_800x812_fill.jpg","src":"gallery_gen\/05f176d56dea39c8ddf8c2adb5d26544_fit.jpg?ts=1726593391","width":1674,"height":1698,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/d01f03fba821ba24c379cae1e74dd0f8_800x1066_fill.jpg","src":"gallery_gen\/155e85bd5542f58385e50c60d28d1a12_fit.jpg?ts=1726593392","width":960,"height":1280,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/1e8d5d364d86a53ead203ae2d368373c_800x600_fill.jpg","src":"gallery_gen\/219bbad5bd897ae893b11da0e17db609_fit.jpg?ts=1726593392","width":3264,"height":2448,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/fd8a58165d4077750243d38de25b82d0_800x600_fill.jpg","src":"gallery_gen\/3e146a043bf01f9999c651af58efc62a_fit.jpg?ts=1726593393","width":3264,"height":2448,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/36f7598b6e45621afc89e132bc7e393c_800x600_fill.jpg","src":"gallery_gen\/320d20bcc0375a1021b80a51e255e49b_fit.jpg?ts=1726593393","width":3264,"height":2448,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/01538c2ce969c9faaafa060c28088e0a_800x600_fill.jpg","src":"gallery_gen\/008f9736d5d14dbcc5d0e04bece1b514_fit.jpg?ts=1726593393","width":3264,"height":2448,"title":"","link":null,"description":"","address":""}],"border":{"border":"5px none #00008c"},"padding":0,"thumbWidth":400,"thumbHeight":290,"thumbAlign":"center","thumbPadding":6,"thumbAnim":"","thumbShadow":"","imageCover":true,"disablePopup":true,"controlsArrow":"chevron","controlsArrowSize":14,"controlsArrowStyle":{"normal":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}},"hover":{"color":"#DDDDDD","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#222222","forText":true,"css":{"text-shadow":"0px 0px 1px #222222"}}},"active":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}}},"slideOpacity":100,"showPictureCaption":"always","captionIncludeDescription":false,"captionPosition":"center bottom","mapTypeId":"","markerIconTypeId":"","zoom":16,"mapCenter":"","key":"AIzaSyD-9xtp38UunEmx7XfJ7eBh-K4w8qQ6SEw","theme":"default","color":"#eeeeee","showSatellite":true,"showZoom":true,"showStreetView":true,"showFullscreen":true,"allowDragging":true,"showRoads":true,"showLandmarks":true,"showLabels":true,"locale":"en_US","pauseOnHover":false});
					lib.appendTo(el);
				})(window.wbmodGalleryLib);
			});
		</script></div></div></div></div></div><div id="wb_footer_a191dcbddf8b0067c395e1611e51a575" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9f6942633033d48ba1dfdb72d6" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dd9f694264fb25e0da6795b87535" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal"><u>Mahyar</u></p>
</div><div id="a188dd9f694265e84315ea6fbfde21f0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9f694266a333988964ed58ecdc" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.linkedin.com/in/mahyarnaeimi/"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a188dd9f6942670574a79d435056da19" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="https://www.instagram.com/somethingtobeshared/"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div><div id="a191e24cdce800b9bc35c181af5a9ce9" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a href="mailto:mn.mahyar.naeimi@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a188dd9f6942684fecdde01f4ab2713f" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer">© 2024 <a href="http://nazdik.app">m</a>yartterritory.me</p>
</div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div>
<div class="wb_pswp pswp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="pswp__bg" style="opacity: 0.7;"></div>
	<div class="pswp__scroll-wrap">
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>
		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<div class="pswp__counter"></div>
				<button class="pswp__button pswp__button--close" title="Close"></button>
				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div> 
			</div>
			<button class="pswp__button pswp__button--arrow--left" title="Previous"></button>
			<button class="pswp__button pswp__button--arrow--right" title="Next"></button>
			<div class="pswp__caption"><div class="pswp__caption__center"></div></div>
		</div>
	</div>
</div>
</div>{{hr_out}}</body>
</html>
