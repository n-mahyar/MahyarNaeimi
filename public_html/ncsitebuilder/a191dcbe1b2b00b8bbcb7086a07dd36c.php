<!DOCTYPE html>
<html lang="en-us">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Photography"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Photography"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Photography"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Photography"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Photography"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20240917201622" type="text/javascript"></script>
	<script src="js/a191dcbe1b2b00b8bbcb7086a07dd36c-bundle.js?ts=20240917201622" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20240917201622" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a191dcbe1b2b00b8bbcb7086a07dd36c-bundle.css?ts=20240917201622" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a191dcbe1b2b00b8bbcb7086a07dd36c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191dcbe1b2a000793d1647d4030272a" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a191dcbe1b2a0102c502009dc627bc5d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191dcbe1b2b009a6ca9d3a6b8dc1233" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="a191e6a11fe300d2483fad44356b4304" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal">Mahyar Naeimi</p>
</div><div id="a191dcbe1b2c022180252ebcec2826f2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="a191dcbe1b2b08f26a365e9895a96704" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class=""><a href="About-me/">About me</a></li><li class=""><a href="CG-Art/">CG Art</a></li><li class=""><a href="Graphic-Design/">Graphic Design</a></li><li class="wb_this_page_menu_item"><a href="Photography/">Photography</a></li><li class=""><a href="Sculpture/">Sculpture</a></li><li class=""><a href="Drawing-and-Illustration/">Drawing and Illustration</a></li><li class=""><a href="Art-Tutorials-1/">Art Tutorials</a></li></ul><div class="clearfix"></div></div><div id="a191e66d4c920059bdd006fcbabe6cf9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1"><span style="background-color: rgb(255, 255, 255);">Photography</span></h1>
</div><div id="a191e66d4c95009ba39bfd84b2fc74c7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" data-l-s="98452"><span style="color:#ffffff;"><u><span style="background-color:transparent;"><span style="font-size:12px;">Nature.Architure.Life</span></span></u></span></h1>
</div><div id="a191dcbe1b2c0683dc1635abeb18fb73" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a191dcbe1b2b0319b19bbf232671512d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="a191dcbe1b2b092146b61dcecd34a9f4" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div></div></div></div></div><div id="wb_main_a191dcbe1b2b00b8bbcb7086a07dd36c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a191dcbe1b2b046270da056add7745a9" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a191dcbe1b2b05cd3c0625cadc778411" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(0,0,0,1);">photographer's portfolio</span></h2>
</div><div id="a191dcbe1b2c0007600fa7d38e726c24" class="wb_element wb-prevent-layout-click wb_gallery" data-plugin="Gallery"><script type="text/javascript">
			$(function() {
				(function(GalleryLib) {
					var el = document.getElementById("a191dcbe1b2c0007600fa7d38e726c24");
					var lib = new GalleryLib({"id":"a191dcbe1b2c0007600fa7d38e726c24","height":"auto","type":"masonry","trackResize":true,"interval":10,"speed":400,"images":[{"thumb":"gallery_gen\/798adf44c00724e14bd70fed91f953cf_700x393_fill.jpg","src":"gallery_gen\/9843a8acfcee6892169bc86f0ad57db5_fit.jpg?ts=1726593394","width":700,"height":394,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/5e6af2918ad6faa65d5588fca89a903d_fill.jpg","src":"gallery_gen\/cc84be8fee7418f83b005fc4466da171_fit.jpg?ts=1726593394","width":500,"height":397,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/c0759e0b6fc3c2d4bbd02f18ee0f00c8_800x662_fill.jpg","src":"gallery_gen\/5607b69c0361b424b1ebccab3cba62b2_fit.jpg?ts=1726593394","width":1000,"height":828,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/8b2635d77fa9a458b93f51247d6a51af_800x460_fill.jpg","src":"gallery_gen\/911941f1a8a1c06b79d61d5bc1c6c761_fit.jpg?ts=1726593394","width":1000,"height":574,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/2705d8b03724b9c1d5860842afdd763a_800x684_fill.jpg","src":"gallery_gen\/937268205096378c84d24a01841fcf08_fit.jpg?ts=1726593394","width":1000,"height":856,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/cde7908fdbec5ee0787ec89a9af7777b_800x800_fill.jpg","src":"gallery_gen\/6a65a062dae008a37dd309d8d47392d5_fit.jpg?ts=1726593394","width":999,"height":998,"title":"","link":null,"description":"","address":""}],"border":{"border":"5px none #00008c"},"padding":0,"thumbWidth":400,"thumbHeight":290,"thumbAlign":"center","thumbPadding":6,"thumbAnim":"","thumbShadow":"","imageCover":true,"disablePopup":true,"controlsArrow":"chevron","controlsArrowSize":14,"controlsArrowStyle":{"normal":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}},"hover":{"color":"#DDDDDD","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#222222","forText":true,"css":{"text-shadow":"0px 0px 1px #222222"}}},"active":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}}},"slideOpacity":100,"showPictureCaption":"always","captionIncludeDescription":false,"captionPosition":"center bottom","mapTypeId":"","markerIconTypeId":"","zoom":16,"mapCenter":"","key":"AIzaSyD-9xtp38UunEmx7XfJ7eBh-K4w8qQ6SEw","theme":"default","color":"#eeeeee","showSatellite":true,"showZoom":true,"showStreetView":true,"showFullscreen":true,"allowDragging":true,"showRoads":true,"showLandmarks":true,"showLabels":true,"locale":"en_US","pauseOnHover":false});
					lib.appendTo(el);
				})(window.wbmodGalleryLib);
			});
		</script></div></div></div></div></div><div id="wb_footer_a191dcbe1b2b00b8bbcb7086a07dd36c" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9f6942633033d48ba1dfdb72d6" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dd9f694264fb25e0da6795b87535" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal"><u>Mahyar</u></p>
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
