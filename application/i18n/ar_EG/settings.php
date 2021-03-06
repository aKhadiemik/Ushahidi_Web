<?php
	$lang = array(
	'allow_comments' => array(
		'between' => 'حقل التعليقات المسموحة لايحتوى على قيمة صالحة',
		'required' => 'يجب ملء حقل التعليقات المسموحة',
	),
	'allow_feed' => array(
		'between' => 'The include feed field does not appear to contain a valid value?',
		'required' => 'The include feed field is required.',
	),
	'allow_reports' => array(
		'between' => 'حقل التقارير المسموحة لايحتوى على قيمة صالحة',
		'required' => 'يجب ملء حقل التقارير المسموحة',
	),
	'allow_stat_sharing' => array(
		'between' => 'The stat sharing field does not appear to contain a valid value?',
		'required' => 'The stat sharing field is required.',
	),
	'api_akismet' => array(
		'alpha_numeric' => 'The Akismet field does not appear to contain a valid value?',
		'length' => 'The Akismet field does not appear to contain a valid value?',
	),
	'cleanurl' => array(
		'clean_url_disabled' => 'الخادم الخاص بم غير معرف على التعامل مع خاصية الروابط النظيفة. ستحتاج لتغيير خصائص الخادم الخاص بك ليتعامل مع خاصية الروابط النظيفة. تعرف على المزيد حول كيفية التعامل مع خاصية الروابط النظيفة بالذهاب إلىche-mod-rewrite" target="_blank">post</a>',
		'clean_url_enabled' => 'هذه الخاصية تمكن من الولوج إلى أوشاهيدى من خلال الروابط النظيفة. Without "index.php" in the URL.',
		'enable_clean_url' => 'Enable Clean URLs',
		'title' => 'Clean URLs',
	),
	'clickatell_api' => array(
		'length' => 'The Clickatell API number field must be no more 20 characters long.',
		'required' => 'The Clickatell API number field is required.',
	),
	'clickatell_password' => array(
		'length' => 'The Clickatell Password field must be at least 5 and no more 50 characters long.',
		'required' => 'The Clickatell Password field is required.',
	),
	'clickatell_username' => array(
		'length' => 'The Clickatell Username field must be no more 50 characters long.',
		'required' => 'The Clickatell Username field is required.',
	),
	'configure_map' => 'تكوين الخريطة',
	'default_location' => 'المكان الأصلى',
	'default_map_all' => array(
		'alpha_numeric' => 'حقل التغذية المرجعية بحسب اللون لا تحتوى على قيمة صالحة',
		'length' => 'حقل اللون يجب الا يتعدى 6 حروف',
		'required' => 'يجب ملء حقل اللون',
	),
	'default_map_view' => 'الرؤية الأصلية للخريطة',
	'default_zoom_level' => 'Default Zoom Level',
	'download_city_list' => 'الحصول على المدن من الأسماء الجغرافية',
	'email_host' => array(
		'length' => 'محتوى حقل ميناء خادم البريد طويل',
		'numeric' => 'يجب ان يحتوى حقل ميناء خادم البريد على ارقام فقط',
	),
	'email_password' => array(
		'length' => 'حقل كلمة المرور يجب ألا يقل عن 5 ولا يزيد عن 50 حرف',
		'required' => 'يجب ملء حقل كلمة المرور لخادم البريد',
	),
	'email_port' => array(
		'length' => 'محتوى حقل ميناء خادم البريد طويل',
		'numeric' => 'يجب ان يحتوى حقل ميناء خادم البريد على ارقام فقط',
	),
	'email_servertype' => array(
		'length' => 'محتوى حقل ميناء خادم البريد طويل',
		'required' => 'يجب ملء حقل نوع خادم البريد',
	),
	'email_username' => array(
		'length' => 'حقل اسم المستخدم لخادم البريد يجب ألا يزيد عن 50 حرف',
		'required' => 'يجب ملء حقل اسم المستخدم لخادم البريد',
	),
	'google_analytics' => array(
		'length' => 'حقل تحليات جوجل يجب ان تحتوى على هوية صحيحة لملكية الويب بالهيئة الآتية UA-XXXXX-XX.',
	),
	'items_per_page' => array(
		'between' => 'حقل البنود الصفحة الواحدة للواجهة لايحتوى على قيمة صالحة',
		'required' => 'يجب ملء حقل بنود الصفحة الواحدة للواجهة',
	),
	'items_per_page_admin' => array(
		'between' => 'حقل بنود الصفحة الواحدة للمسئول الإدارى لاتحتوى على قيمة صالحة',
		'required' => 'يجب ملء حقل بنود الصفحة الواحدة للمسئول الإدارى',
	),
	'map' => array(
		'default_location' => 'Setting up your map provider is a straight- forward process. Select a provider, obtain an API key from the provider\'s site, and enter the API key',
		'zoom' => 'Zoom Level',
	),
	'map_provider' => array(
		'choose' => 'اختار موفر خرائط',
		'enter_api' => 'أدخل مفتاح API جديد',
		'get_api' => 'أحصل على API مفتاح',
		'info' => 'إعداد موفر الخرائط الخاص بك هى عملية مباشرة. اختار موفر خرائط, أحصل على مفتاح API من الموقع, ثم أدخل هذا المفتاح',
		'name' => 'موفر الخرائط',
	),
	'map_settings' => 'إعدادات الخريطة',
	'multiple_countries' => 'Does this Ushahidi Deployment Span Multiple Countries',
	'select_default_location' => 'الدولة الأصلية',
	'set_location' => 'Click and drag the map to set your exact location',
	'site' => array(
		'allow_clustering' => 'جمع التقارير على الخريطة',
		'allow_comments' => 'صرح للمستخدمين بوضع تعليقات على التقارير',
		'allow_feed' => 'السماح بإرسال آخر الأخبار بنظام آر إس إس',
		'allow_reports' => 'صرح للمستخدمين بإصدار تقارير',
		'api_akismet' => 'Akismet Key',
		'default_category_colors' => 'وضع لون أساسى لكل الفئات',
		'display_contact_page' => 'اعرض صفحة معلومات الاتصال',
		'display_howtohelp_page' => 'اعرض صفحة كيف يمكننا المساعدة',
		'email_alerts' => 'عنوان البريد الإليكترونى الخاص بالتنبيهات',
		'email_notice' => '<span>In order to receive reports by email, please configure your email account settings.</span>',
		'email_site' => 'البريد الإليكترونى للموقع',
		'google_analytics' => 'تحاليل جوجل',
		'google_analytics_example' => 'هوية ملكية الشبكة - Formato: UA-XXXXX-XX',
		'items_per_page' => 'بنود الصفحة الواحدة - الواجهة النهائية',
		'items_per_page_admin' => 'بنود الصحفة الواحدة - المسئول الإدارى',
		'kismet_notice' => 'Prevent comment spam using <a href="http://akismet.com/" target="_blank">Akismet</a> from Automattic. <BR />You can get a free API key by registering for a <a href="http://en.wordpress.com/api-keys/" target="_blank">WordPress.com user account</a>',
		'laconica_configuration' => 'Laconica Credentials',
		'laconica_site' => 'Laconica Site ',
		'language' => 'لغة الموقع',
		'message' => '',
		'name' => 'اسم الموقع',
		'share_site_stats' => 'Share Site Statistics in API',
		'tagline' => 'سطر الوسم',
		'title' => 'إعدادات الموقع',
		'twitter_configuration' => 'اعتماد رسائل التويتر',
		'twitter_hashtags' => 'الوسوم المختلطة - الفصل بفواصل ',
	),
	'site_email' => array(
		'email' => 'حقل البريد الإليكترونى للموقع لا يحتوى على قيمة صالحة',
		'length' => 'حقل البريد الإليكترونى للموقع يجب ألا يقل عن 4 وألا يزيد عن 100',
	),
	'site_name' => array(
		'length' => 'حقل اسم الموقع يجب ألا يقل عن 3 والا يزيد عن 50 حرف',
		'required' => 'يجب ملء حقل اسم الموقع',
	),
	'site_tagline' => array(
		'length' => 'حقل سطر الوسم يجب ألا يقل عن 3 وألا يزيد عن 100 حرف',
		'required' => 'يجب ملء حقل سطر الوسم',
	),
	'sms' => array(
		'clickatell_api' => 'Your Clickatell API Number',
		'clickatell_check_balance' => 'Check Your Clickatell Credit Balance',
		'clickatell_load_balance' => 'Load Credit Balance',
		'clickatell_password' => 'Your Clickatell Password',
		'clickatell_text_1' => 'Sign up for Clickatells service by <a href="https://www.clickatell.com/central/user/client/step1.php?prod_id=2" target="_blank">clicking here</a>',
		'clickatell_text_2' => 'Enter your Clickatell access information below',
		'clickatell_username' => 'Your Clickatell User Name',
		'flsms_description' => 'FrontlineSMS is free open source software that turns a laptop and a mobile phone into a central communications hub. Once installed, the program enables users to send and receive text messages with large groups of people through mobile phones. Click on the grey box to request a download from FrontlineSMS.com',
		'flsms_download' => 'Download Frontline SMS and install it on your computer',
		'flsms_instructions' => 'Messages received into a FrontlineSMS hub can be synched with Ushahidi. Detailed instructions on how to sync can be found <strong><a href="http://wiki.ushahididev.com/doku.php?id=how_to_use_ushahidi_alpha#how_to_setup_frontlinesms_to_sync_with_ushahidi" target="_blank">here</a></strong>. You will require the key and link below to set up the sync with FrontlineSMS',
		'flsms_key' => 'Your Ushahidi Sync Key',
		'flsms_link' => 'FrontlineSMS HTTP Post LINK',
		'flsms_synchronize' => 'Sync with Ushahidi',
		'flsms_text_1' => 'Enter phone number(s) connected to Frontline SMS in the field(s) below',
		'flsms_text_2' => 'Enter the number without any + or dashes below',
		'option_1' => 'Option 1: Use Frontline SMS',
		'option_2' => 'Option 2: Use a Global SMS Gateway',
		'title' => 'SMS Setup Options',
	),
	'sms_no1' => array(
		'length' => 'لايبدو ان حقل التليفون 1 يحتوى على قيمة صالحة',
		'numeric' => 'حقل التليفون 1 يجب ان يحتوى على ارقام فقط',
	),
	'sms_no2' => array(
		'length' => 'محتويات حقل التليفون 2 طويلة',
		'numeric' => 'حقل التليفون 2 يجب ان يحتوى على ارقام فقط',
	),
	'sms_no3' => array(
		'length' => 'محتويات حقل التليفون 3 طويلة',
		'numeric' => 'يجب ان يحتوى على حقل التليفون 3 على ارقام فقط',
	));
?>
