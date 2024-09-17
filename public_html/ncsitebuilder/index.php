<?php
	if (version_compare(PHP_VERSION, '5.3.3') < 0) {
		echo "Your PHP version is outdated for this website. Please update PHP version to 5.6 or higher.";
		exit();
	}
	if (function_exists('apc_clear_cache')) apc_clear_cache();
	if((isset($_COOKIE['WB_SITE_DEBUG_MODE']) && $_COOKIE['WB_SITE_DEBUG_MODE']) || (isset($_SERVER['HTTP_X_DBG_LOG_ALL_ERRORS']) && $_SERVER['HTTP_X_DBG_LOG_ALL_ERRORS'])) { error_reporting(E_ALL); @ini_set('display_errors', true); }
	if (!@session_id()) @session_start();
	$tz = @date_default_timezone_get(); @date_default_timezone_set($tz ? $tz : 'UTC');
	require_once dirname(__FILE__).'/polyfill.php';
	$pages = array(
		array(
			'id' => 'a188dd9f81c600bcb1150e8333725141',
			'alias' => '',
			'file' => 'a188dd9f81c600bcb1150e8333725141.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a188dd9f81c6034098bfc3bced9b1fa5',
			'alias' => 'About-me',
			'file' => 'a188dd9f81c6034098bfc3bced9b1fa5.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a188dd9f81c6028786b7d7b8f42be6fd',
			'alias' => 'Art-Tutorials',
			'file' => 'a188dd9f81c6028786b7d7b8f42be6fd.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a191dcbd582600e340ff47e7fd76e3a8',
			'alias' => 'Drawing-and-Illustration',
			'file' => 'a191dcbd582600e340ff47e7fd76e3a8.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a191dcbddf8b0067c395e1611e51a575',
			'alias' => 'Sculpture',
			'file' => 'a191dcbddf8b0067c395e1611e51a575.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a191dcbe1b2b00b8bbcb7086a07dd36c',
			'alias' => 'Photography',
			'file' => 'a191dcbe1b2b00b8bbcb7086a07dd36c.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a191dcbe4e4700faf254614a7ea616ea',
			'alias' => 'Graphic-Design',
			'file' => 'a191dcbe4e4700faf254614a7ea616ea.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a191dcbe8a5d00b0e987eb28d2007232',
			'alias' => 'CG-Art',
			'file' => 'a191dcbe8a5d00b0e987eb28d2007232.php',
			'controllers' => array(),
			'type' => 0
		),
		array(
			'id' => 'a191e36ccaea0097732024b74e47da36',
			'alias' => 'Art-Tutorials-1',
			'file' => 'a191e36ccaea0097732024b74e47da36.php',
			'controllers' => array(),
			'type' => 0
		)
	);
	$forms = array(
		'a188dd9f81c600bcb1150e8333725141' => array(
			'e6efbb4b' => array(
				'email' => 'mn.mahyar,naeimi@gmil.com',
				'emailFrom' => '',
				'subject' => 'Enquire from the web page',
				'sentMessage' => 'Form was sent.',
				'object' => '',
				'objectRenderer' => '',
				'loggingHandler' => '',
				'smtpEnable' => false,
				'smtpHost' => null,
				'smtpPort' => null,
				'smtpEncryption' => null,
				'smtpUsername' => null,
				'smtpPassword' => null,
				'recVersion' => 'v2',
				'recSiteKey' => null,
				'recSecretKey' => null,
				'useGclidCapture' => false,
				'maxFileSizeTotal' => 2,
				'postUrl' => '',
				'redirectUrl' => null,
				'webhookUrl' => null,
				'brandId' => '87101',
				'fields' => array(
					array(
						'fidx' => '0',
						'name' => 'Name',
						'default' => '',
						'type' => 'input',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'lengthMin' => 0,
							'lengthMax' => 255
						)
					),
					array(
						'fidx' => '1',
						'name' => 'Email',
						'default' => '',
						'type' => 'email',
						'enabled' => 1,
						'required' => 1,
						'settings' => array()
					),
					array(
						'fidx' => '2',
						'name' => 'Message',
						'default' => '',
						'type' => 'textarea',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'textareaRow' => 4
						)
					),
					array(
						'fidx' => '3',
						'name' => '<p>&nbsp;Texturing/Surfacing Art reels</p>',
						'default' => '',
						'type' => 'checkbox',
						'enabled' => 1,
						'required' => 0,
						'settings' => array(
							'options' => array(
								''
							),
							'layout' => 'vertical'
						)
					),
					array(
						'fidx' => '4',
						'name' => '<p data-l-s="86374">Graphic Design reels</p>',
						'default' => '',
						'type' => 'checkbox',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'options' => array(
								''
							),
							'layout' => 'vertical'
						)
					)
				),
				'telegramApiToken' => '',
				'telegramChatId' => '',
				'formSendType' => 'email'
			)
		),
		'a188dd9f81c6028786b7d7b8f42be6fd' => array(
			'8b63832e' => array(
				'email' => '',
				'emailFrom' => '',
				'subject' => 'Enquire from the web page',
				'sentMessage' => 'Form was sent.',
				'object' => '',
				'objectRenderer' => '',
				'loggingHandler' => '',
				'smtpEnable' => false,
				'smtpHost' => null,
				'smtpPort' => null,
				'smtpEncryption' => null,
				'smtpUsername' => null,
				'smtpPassword' => null,
				'recVersion' => 'v2',
				'recSiteKey' => null,
				'recSecretKey' => null,
				'useGclidCapture' => false,
				'maxFileSizeTotal' => 2,
				'postUrl' => '',
				'redirectUrl' => null,
				'webhookUrl' => null,
				'brandId' => '87101',
				'fields' => array(
					array(
						'fidx' => '0',
						'name' => 'Name',
						'default' => '',
						'type' => 'input',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'lengthMin' => 0,
							'lengthMax' => 255
						)
					),
					array(
						'fidx' => '1',
						'name' => 'Email',
						'default' => '',
						'type' => 'input',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'lengthMin' => 0,
							'lengthMax' => 255
						)
					),
					array(
						'fidx' => '2',
						'name' => 'Your Field',
						'default' => '',
						'type' => 'input',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'lengthMin' => 0,
							'lengthMax' => 255
						)
					),
					array(
						'fidx' => '3',
						'name' => 'Message',
						'default' => '',
						'type' => 'textarea',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'textareaRow' => 4
						)
					)
				),
				'telegramApiToken' => '',
				'telegramChatId' => '',
				'formSendType' => 'email'
			)
		),
		'a191e36ccaea0097732024b74e47da36' => array(
			'977099dc' => array(
				'email' => 'mn.mahyar,naeimi@gmil.com',
				'emailFrom' => '',
				'subject' => 'Enquire from the web page',
				'sentMessage' => 'Form was sent.',
				'object' => '',
				'objectRenderer' => '',
				'loggingHandler' => '',
				'smtpEnable' => false,
				'smtpHost' => null,
				'smtpPort' => null,
				'smtpEncryption' => null,
				'smtpUsername' => null,
				'smtpPassword' => null,
				'recVersion' => 'v2',
				'recSiteKey' => null,
				'recSecretKey' => null,
				'useGclidCapture' => false,
				'maxFileSizeTotal' => 2,
				'postUrl' => '',
				'redirectUrl' => null,
				'webhookUrl' => null,
				'brandId' => '87101',
				'fields' => array(
					array(
						'fidx' => '0',
						'name' => 'Name',
						'default' => '',
						'type' => 'input',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'lengthMin' => 0,
							'lengthMax' => 255
						)
					),
					array(
						'fidx' => '1',
						'name' => 'Email',
						'default' => '',
						'type' => 'email',
						'enabled' => 1,
						'required' => 1,
						'settings' => array()
					),
					array(
						'fidx' => '2',
						'name' => 'Phone',
						'default' => '',
						'type' => 'phone',
						'enabled' => 1,
						'required' => 0,
						'settings' => array()
					),
					array(
						'fidx' => '3',
						'name' => 'Your Story',
						'default' => '',
						'type' => 'textarea',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'textareaRow' => 4
						)
					),
					array(
						'fidx' => '4',
						'name' => '<p>Do you live in Ottawa</p>',
						'default' => '',
						'type' => 'checkbox',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'options' => array(
								''
							),
							'layout' => 'vertical'
						)
					),
					array(
						'fidx' => '5',
						'name' => '<p>Are you coming from art background</p>',
						'default' => '',
						'type' => 'checkbox',
						'enabled' => 1,
						'required' => 1,
						'settings' => array(
							'options' => array(
								''
							),
							'layout' => 'vertical'
						)
					),
					array(
						'fidx' => '6',
						'name' => 'Are looking for virtual education?',
						'default' => '(if Yes, share your living time zone)',
						'type' => 'input',
						'enabled' => 1,
						'required' => 0,
						'settings' => array(
							'lengthMin' => 0,
							'lengthMax' => 255
						)
					)
				),
				'telegramApiToken' => '',
				'telegramChatId' => '',
				'formSendType' => 'email'
			)
		)
	);
	$langs = null;
	$def_lang = null;
	$base_lang = 'en';
	$site_id = 'b1923603';
	${'sitemapUrls'} = array(
		"https://nazdik.app/",
		"https://nazdik.app/About-me/",
		"https://nazdik.app/Art-Tutorials/",
		"https://nazdik.app/Drawing-and-Illustration/",
		"https://nazdik.app/Sculpture/",
		"https://nazdik.app/Photography/",
		"https://nazdik.app/Graphic-Design/",
		"https://nazdik.app/CG-Art/",
		"https://nazdik.app/Art-Tutorials-1/"
	);
	${'redirectItems'} = array();
	$websiteUID = 'a55d573d752564a19b1b0499b3112804a57cea56fc6d556f3889e98ab2d1cfd1e475cff7ec4a1e62';
	$base_dir = dirname(__FILE__);
	$base_url = '/';
	$user_domain = 'nazdik.app';
	$pretty_domain = 'nazdik.app';
	$home_page = 'a188dd9f81c600bcb1150e8333725141';
	$mod_rewrite = true;
	$show_comments = false;
	$ga_code = (is_file($ga_code_file = dirname(__FILE__).'/ga_code') ? file_get_contents($ga_code_file) : null);
	require_once dirname(__FILE__).'/src/forms/FormNavigation.php';
	require_once dirname(__FILE__).'/src/forms/FormModuleInquiries.php';
	require_once dirname(__FILE__).'/src/forms/FormModuleInquiriesField.php';
	require_once dirname(__FILE__).'/src/forms/FormModule.php';
	require_once dirname(__FILE__).'/src/forms/FormInquiriesApi.php';
	require_once dirname(__FILE__).'/src/SiteInfo.php';
	require_once dirname(__FILE__).'/src/SiteModule.php';
	require_once dirname(__FILE__).'/functions.inc.php';
	$siteInfo = SiteInfo::build(array('siteId' => $site_id, 'websiteUID' => $websiteUID, 'domain' => $user_domain, 'prettyDomain' => $pretty_domain, 'homePageId' => $home_page, 'baseDir' => $base_dir, 'baseUrl' => $base_url, 'defLang' => $def_lang, 'baseLang' => $base_lang, 'langs' => $langs, 'pages' => $pages, 'forms' => $forms, 'modRewrite' => $mod_rewrite, 'gaCode' => $ga_code, 'gaAnonymizeIp' => false, 'port' => null, 'pathPrefix' => null, 'useTrailingSlashes' => true, 'disableFormSending' => false,));
	$requestInfo = SiteRequestInfo::build(array('requestUri' => getRequestUri($siteInfo->baseUrl),));
	FormModule::init(array(), $siteInfo);
	SiteModule::init(null, $siteInfo);
	checkSiteRedirects($siteInfo, $requestInfo, ${'redirectItems'});
	list($page_id, $lang, $urlArgs, $route) = parse_uri($siteInfo, $requestInfo);
	$page404 = $pageMaint = null;
	foreach ($pages as $k => $p) {
		if ($p['type'] === 2) $page404 = $p;
		if ($p['type'] === 3) $pageMaint = $p;
	}
	$preview = false;
	$requestInfo->{'page'} = (isset($pages[$page_id]) ? $pages[$page_id] : null);
	$requestInfo->{'lang'} = $lang;
	$requestInfo->{'urlArgs'} = $urlArgs;
	$requestInfo->{'route'} = $route;
	handleTrailingSlashRedirect($siteInfo, $requestInfo, ["css","dat","fonts","gallery","gallery_gen","js","phpmailer","phpseclib","src"]);
	SiteModule::setLang($requestInfo->{'lang'}, $base_lang);
	SiteModule::initTranslations(array(
		'-' => array(
			'Form sending failed' => 'Form sending failed',
			'Form was not sent, are you a robot?' => 'Form was not sent, are you a robot?',
			'File %s is too big' => 'File %s is too big',
			'File %s could not be uploaded for sending' => 'File %s could not be uploaded for sending',
			'Total size of attachments must not exceed %s MB' => 'Total size of attachments must not exceed %s MB',
			'Field %s is not present' => 'Field %s is not present',
			'Failed to create a directory for attachments' => 'Failed to create a directory for attachments',
			'Attachments inode on the server is not a directory' => 'Attachments inode on the server is not a directory',
			'Failed to move uploaded file to attachments directory' => 'Failed to move uploaded file to attachments directory',
			'Receiver not specified' => 'Receiver not specified',
			'Form sending from preview is not available' => 'Form sending from preview is not available',
			'Max file size (Mb): %s' => 'Max file size (Mb): %s',
			'Max number of files: 1' => 'Max number of files: 1',
			'You exceed number of files' => 'You exceeded number of files',
			'I\'m not a robot' => 'I\'m not a robot',
			'Captcha is not available in preview' => 'Captcha is not available in preview',
			'Submit' => 'Submit',
			'Edit Website' => 'Edit Website',
			'Not found' => 'Not found',
			'This plugin requires upgrade' => 'This plugin requires upgrade'
		)
	));
	if (!isHttps() && !headers_sent()) {
		header('Status: 301 Moved Permanently');
		header('Location: '.getCurrUrl(false, 'https'));
		exit();
	}
	$requestHandledByModule = false;
	$hr_out = '';
	if (is_callable('FormModule::parseRequest')) { list($m_out, $requestHandled) = call_user_func('FormModule::parseRequest', $requestInfo); $hr_out .= $m_out; $requestHandledByModule = $requestHandledByModule || $requestHandled; }
	$page = $requestInfo->{'page'};
	if (!$requestHandledByModule && !empty($urlArgs)) $page = null;
	if (!$page) {
		if (isSitemapUrl($requestInfo)) genSitemap();
		if ($page404) $page = $page404;
		elseif ($pageMaint) $page = $pageMaint;
	} elseif ($pageMaint) $page = $pageMaint;
	if (!is_null($page)) {
		handleComments($page['id'], $siteInfo);
		if (isset($_POST["wb_form_id"])) handleForms($page['id'], $siteInfo);
	}
	ob_start();
	if ($page) {
		$fl = dirname(__FILE__).'/'.$page['file'];
		$flp = dirname(__FILE__).'/pd.json';
		if (is_file($fl) && is_file($flp)) {
			${'seoTitle'} = $requestInfo->{'title'};
			${'seoDescription'} = $requestInfo->{'description'};
			${'seoKeywords'} = $requestInfo->{'keywords'};
			${'seoImage'} = $requestInfo->{'image'};
			if (isset($_GET['wbPopupMode']) && $_GET['wbPopupMode'] == 1) { $wbPopupMode = true; }
			ob_start();
			include $fl;
			$out = ob_get_clean();
			$ga_out = '';
			if ($lang && $langs) {
				foreach ($langs as $ln => $default) {
					$pageUri = getPageUri($page['id'], $ln, $siteInfo);
					$out = str_replace('{{lang_'.$ln.'}}', $pageUri, $out);
					$out = str_replace(urlencode('{{lang_'.$ln.'}}'), $pageUri, $out);
				}
			}
			if (is_file($ga_tpl = dirname(__FILE__).'/ga.php')) {
				ob_start(); include $ga_tpl; $ga_out = ob_get_clean();
			}
			$currUrl = getCurrUrl();
			$out = str_replace('<ga-code/>', $ga_out, $out);
			$out = str_replace('{{base_url}}', getBaseUrl(), $out);
			$out = str_replace('{{curr_url}}', $currUrl, $out);
			$out = str_replace('__wb_curr_url__', strpos($currUrl, '?') ? rtrim($currUrl, '/') : $currUrl, $out);
			$out = str_replace('{{hr_out}}', $hr_out, $out);
			$pd = @json_decode(@file_get_contents($flp));
			if (!is_object($pd)) die('Data is corrupted');
			$expectedCrc = $pd->{'e'};
			unset($pd->{'e'});
			$crc = sha1('sfh02a35gyhz0a33498g048qt3p048' . json_encode($pd));
			if ($expectedCrc !== $crc) die('Data is corrupted');
			if (!empty($pd->a)) {
			$smallPlugins = array (
  'Line' => 0,
  'Button' => 1,
  'Menu' => 2,
  'Languages' => 3,
  'StoreCart' => 4,
  'BookmarksShare' => 5,
  'FacebookLike' => 6,
  '2checkout' => 7,
  '7_connect' => 8,
  'alipay' => 9,
  'assist' => 10,
  'bank_transfer' => 11,
  'baokim' => 12,
  'bepaid' => 13,
  'braintree' => 14,
  'BuyNow' => 15,
  'cash_on_delivery' => 16,
  'click' => 17,
  'coinpayments' => 18,
  'dragonpay' => 19,
  'easypay' => 20,
  'effect' => 21,
  'epaybg' => 22,
  'epayco' => 23,
  'epsilon' => 24,
  'expresspay' => 25,
  'gestpay' => 26,
  'getbutton' => 27,
  'gplus_badge' => 28,
  'gplus_like' => 29,
  'hipay' => 30,
  'yandex_kassa' => 31,
  'ideal_payment' => 32,
  'iyzico' => 33,
  'klama' => 34,
  'libelula' => 35,
  'linepay' => 36,
  'liqpay' => 37,
  'mellat' => 38,
  'mercado' => 39,
  'mobilpay' => 40,
  'mollie' => 41,
  'mpesa' => 42,
  'odnoklassniki_share' => 43,
  'olark' => 44,
  'pagseguro' => 45,
  'payfast' => 46,
  'paytr' => 47,
  'paytrail' => 48,
  'payu' => 49,
  'payumoney' => 50,
  'platron' => 51,
  'qiwi' => 52,
  'qiwi_kz' => 53,
  'redsys' => 54,
  'robokassa' => 55,
  'skrill' => 56,
  'smartarget' => 57,
  'stripe' => 58,
  'tawkto' => 59,
  'vkontakte_comment' => 60,
  'vkontakte_like' => 61,
  'webmoney_button' => 62,
  'webmoney_widget' => 63,
  'webpay' => 64,
  'wp' => 65,
  'zopim' => 66,
  'pinterest' => 67,
);
				$out = preg_replace_callback('#<[^>]+data-plugin="([^"]+)"[^>]*>#isu', function($m) use($pd, $smallPlugins) {
			        if (
			            (empty($pd->{'a'}) || (isset($pd->{'a'}->{$m[1]}) && $pd->{'a'}->{$m[1]}))
			            && (empty($pd->{'b'}) || !isset($pd->{'b'}->{$m[1]}) || !$pd->{'b'}->{$m[1]})
					) return $m[0];
					$r = substr($m[0], 0, -1);
					$outside = isset($smallPlugins[$m[1]]);
					$parentCss = $outside ? 'overflow:visible;' : '';
					$linkCss = $outside ? 'right:-3px;top:-3px;transform:translate(0,-100%);' : 'right:0;top:0;';
					$link = empty($pd->{'d'}) ? '' : (' href="' . htmlspecialchars($pd->{'d'}) . '" target="_blank" onclick="event.stopPropagation();event.returnValue=true;return true;"');
					$minPlan = isset($pd->{'c'}->{$m[1]}[0]) ? $pd->{'c'}->{$m[1]}[0] : 'Business';
					$link = str_replace('__MIN_PLAN__', rawurlencode($minPlan), $link);
					$link = str_replace('__PLAN_FEATURE__', rawurlencode(isset($pd->{'c'}->{$m[1]}[1]) ? $pd->{'c'}->{$m[1]}[1] : $m[1]), $link);
					$link = str_replace('__UTM_CAMPAIGN__', rawurlencode('plugin-' . strtolower(str_replace('_', '-', $m[1]))), $link);
					$link = str_replace('__UTM_CONTENT__', rawurlencode($_SERVER['HTTP_HOST']), $link);
					$r .= ' style="outline: 3px solid #ff7600;'.$parentCss.'" ><a'.$link.' style="position:absolute;'.$linkCss.'z-index:99999997;border:1px solid #FFF;background:#ff7600;color:#FFF;padding:4px;text-decoration:none;"><i class="fa fa-star"></i>&nbsp;'.htmlspecialchars(\SiteModule::__('This plugin requires upgrade')).'</a>';
					return $r;
				}, $out);
			}
			header('Content-type: text/html; charset=utf-8', true, $page['type'] === 2 ? 404 : ($page['type'] === 3 ? 503 : 0) );
			echo $out;
		}
	} else {
		header("Content-type: text/html; charset=utf-8", true, 404);
		if (is_file(dirname(__FILE__).'/../../error_docs/not_found.html')) {
			include dirname(__FILE__).'/../../error_docs/not_found.html';
		} else if (is_file(dirname(__FILE__).'/404.html')) {
			include dirname(__FILE__).'/404.html';
		} else {
			echo "<!DOCTYPE html>\n";
			echo "<html>\n";
			echo "<head>\n";
			echo "<title>404 \SiteModule::__('Not found')</title>\n";
			echo "</head>\n";
			echo "<body>\n";
			echo "404 \SiteModule::__('Not found')\n";
			echo "</body>\n";
			echo "</html>";
		}
	}
	ob_end_flush();

?>