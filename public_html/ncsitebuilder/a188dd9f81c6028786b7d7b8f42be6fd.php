<!DOCTYPE html>
<html lang="en-us">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Art Tutorials"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Art Tutorials"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Art Tutorials"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Art Tutorials"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Art Tutorials"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20240917201622" type="text/javascript"></script>
	<script src="js/a188dd9f81c6028786b7d7b8f42be6fd-bundle.js?ts=20240917201622" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20240917201622" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a188dd9f81c6028786b7d7b8f42be6fd-bundle.css?ts=20240917201622" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dd9f81c6028786b7d7b8f42be6fd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9f694219588fec18c0f1c2b0b0" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dd9f69421a8f2485278cc52a99f3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9f69421bb0c168f2715bebf258" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="a188dd9f69421c7bb1c6d8e56028bee9" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-pagetitle"><a data-type="page" href="">Alice</a></h4>
</div><div id="a188dd9f69421d9075ab4d3ded992f67" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="a188dd9f69421ed0ddbe6401b83b21b6" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class=""><a href="{{base_url}}">Home</a></li><li class=""><a href="About-me/">About me</a></li><li class=""><a href="CG-Art/">CG Art</a></li><li class=""><a href="Graphic-Design/">Graphic Design</a></li><li class=""><a href="Photography/">Photography</a></li><li class=""><a href="Sculpture/">Sculpture</a></li><li class=""><a href="Drawing-and-Illustration/">Drawing and Illustration</a></li><li class=""><a href="Art-Tutorials-1/">Art Tutorials</a></li></ul><div class="clearfix"></div></div><div id="a188dd9f69421fa857dfa0a91acdaf23" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9f6942205d9c22058639f76802" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9f69422150c67b24008588d61b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1"><span style="background-color:#ffffff;">Contacts</span></h1>
</div></div></div></div></div><div id="a188dd9f694222ea06f6b59a60b30897" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9f694223febf65ccc8a5ba0d53" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="a188dd9f694224813368eef996592d34" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div></div></div></div></div><div id="wb_main_a188dd9f81c6028786b7d7b8f42be6fd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9f694226a7e5dca3d2a1ac9e3f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9f694227a6d3d4274a39d9e64d" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dd9f6942289423203bfc866ed1e2" class="wb_element" data-plugin="Form"><form id="a188dd9f6942289423203bfc866ed1e2_form" class="wb_form wb_mob_form wb_form_ltr wb_form_vertical" method="post" enctype="multipart/form-data" action="__wb_curr_url__"><input type="hidden" name="wb_form_id" value="8b63832e"><input type="hidden" name="wb_form_uuid" value="e520e57f"><textarea name="message" rows="3" cols="20" class="hpc" autocomplete="off"></textarea><table><tr><th>Name<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_0" value="Name"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_0" required="required"></div></td></tr><tr><th>Email<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_1" value="Email"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_1" required="required"></div></td></tr><tr><th>Your Field<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_2" value="Your Field"><div><input class="form-control form-field" type="text" value="" placeholder="" maxlength="255" name="wb_input_2" required="required"></div></td></tr><tr class="area-row"><th>Message<span class="text-danger">&nbsp;*</span></th><td><input type="hidden" name="wb_input_3" value="Message"><div><textarea class="form-control form-field form-area-field" rows="4" placeholder="" name="wb_input_3" required="required"></textarea></div></td></tr><tr class="form-footer"><td colspan="2" class="text-right"><button type="submit" class="btn btn-default"><span>Submit</span></button></td></tr></table><?php if (isset($wbPopupMode) && $wbPopupMode): ?><input type="hidden" name="wb_popup_mode" value="1" /><?php endif; ?></form><script type="text/javascript">
			<?php $wb_form_id = sessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "8b63832e") { ?>
				<?php popSessionOrGlobalVar("wb_form_id"); ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("8b63832e", formValues, formErrors);
			<?php } ?>
			</script></div></div></div><div id="a188dd9f694229f4e65191834ac52217" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9f69422ace62f03c84f4bfdece" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-horizontal"><div id="a188dd9f69422bcf4569023f7a86336c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p style="text-align: center;"><span class="wb-stl-special">Phone:</span></p>

<p style="text-align: center;"><span class="wb-stl-special"><a href="tel:+123456789"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">+1 212 736 3100</span></span></span></span></span></span></span></a></span></p>

<p style="text-align: center;"><span class="wb-stl-special">Email:<br>
info@example.com</span></p>
</div><div id="a188dd9f69422cf6a4aefd85c001c2f2" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p style="text-align: center;"><span class="wb-stl-special">Address:</span></p>

<p style="text-align: center;"><span class="wb-stl-special">Empire State Building</span></p>

<p style="text-align: center;"><span class="wb-stl-special">350 5th Ave</span></p>

<p style="text-align: center;"><span class="wb-stl-special">New York</span></p>

<p style="text-align: center;"><span class="wb-stl-special">NY 10118</span></p>

<p style="text-align: center;"><span class="wb-stl-special">USA</span></p>
</div></div></div></div></div><div id="a188dd9f69422d33e263753701b28206" class="wb_element wb-map wb-prevent-layout-click" data-plugin="GoogleMaps"><div class="wb_google_maps_overlay"><div>Get <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key">API key from Google</a> and insert it to plugin properties to enable maps on your website.</div></div><script type="text/javascript">
				(function() {
					var resizeFunc = function() {
						var elem = $("#a188dd9f69422d33e263753701b28206");
						var w = elem.width(), h = elem.height();
						elem.find("div > div:first").css("zoom", Math.max(0.5, Math.min(1, ((w * h) / 120000))));
					};
					$(window).on("resize", resizeFunc);
					resizeFunc();
				})();
			</script></div></div></div></div></div><div id="wb_footer_a188dd9f81c6028786b7d7b8f42be6fd" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9f6942633033d48ba1dfdb72d6" class="wb_element wb-anim-entry wb-anim wb-anim-fade-in-none wb-layout-element" data-plugin="LayoutElement" data-wb-anim-entry-time="0.6" data-wb-anim-entry-delay="0"><div class="wb_content wb-layout-vertical"><div id="a188dd9f694264fb25e0da6795b87535" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal"><u>Mahyar</u></p>
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
			</script></div></div></div></div>{{hr_out}}</body>
</html>
