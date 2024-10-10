<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!doctype html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
    <?

    use Bitrix\Main\Page\Asset;
    use Bitrix\Main\UI\Extension;

    Extension::load('ui.bootstrap4');
    // CSS;
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template_styles.scss');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/js/fancy/jquery.fancybox.min.css');
    
    // JS
    CJSCore::Init(array("jquery3"));
    
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/fancy/jquery.fancybox.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.min.js');
    // HEADERS
    $APPLICATION->ShowHead();
    ?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="apple-touch-icon" sizes="57x57" href="/local/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/local/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/local/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/local/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/local/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/local/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/local/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/local/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/local/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/local/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/local/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/local/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/local/ico/favicon-16x16.png">
    <link rel="manifest" href="/local/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/local/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>
<?$APPLICATION->ShowPanel();?>



<a href="/">
	<img class="logo" src="<?=SITE_TEMPLATE_PATH?>/img/WebLogo2.png" alt="Главная">
</a>

<div class="header">
	<div class="container1">
		<div class="header_left">
		<?$APPLICATION->IncludeComponent("bitrix:menu", "top_header_aside_menu", Array(
			"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
				"CHILD_MENU_TYPE" => "section",	// Тип меню для остальных уровней
				"DELAY" => "N",	// Откладывать выполнение шаблона меню
				"MAX_LEVEL" => "2",	// Уровень вложенности меню
				"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
				"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
				"MENU_CACHE_TYPE" => "A",	// Тип кеширования
				"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
				"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
				"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
				"COMPONENT_TEMPLATE" => "horizontal_multilevel"
			),
			false
		);?>
		</div>
		<div class="header_right">
			<div class="header_right_top">
				<div class="header_search">
				<?$APPLICATION->IncludeComponent(
	"bitrix:search.title", 
	"top_header_search", 
	array(
		"CATEGORY_0" => array(
			0 => "iblock_catalog",
			1 => "iblock_content",
		),
		"CATEGORY_0_TITLE" => "",
		"CHECK_DATES" => "N",
		"CONTAINER_ID" => "title-search",
		"INPUT_ID" => "title-search-input",
		"NUM_CATEGORIES" => "1",
		"ORDER" => "date",
		"PAGE" => "#SITE_DIR#search/index.php",
		"SHOW_INPUT" => "Y",
		"SHOW_OTHERS" => "N",
		"TOP_COUNT" => "5",
		"USE_LANGUAGE_GUESS" => "Y",
		"COMPONENT_TEMPLATE" => "top_header_search",
		"CATEGORY_0_iblock_catalog" => array(
			0 => "5",
		),
		"CATEGORY_0_iblock_content" => array(
			0 => "4",
		)
	),
	false
);?>
				</div>
				<div class="heaer_cart">
				<?$APPLICATION->IncludeComponent(
					"bitrix:sale.basket.basket.line", 
					"top_header_basket", 
					array(
						"HIDE_ON_BASKET_PAGES" => "N",
						"PATH_TO_AUTHORIZE" => "",
						"PATH_TO_BASKET" => "personal/cart/",
						"PATH_TO_ORDER" => "personal/order/make/",
						"PATH_TO_PERSONAL" => SITE_DIR."personal/",
						"PATH_TO_PROFILE" => SITE_DIR."personal/",
						"PATH_TO_REGISTER" => SITE_DIR."login/",
						"POSITION_FIXED" => "N",
						"SHOW_AUTHOR" => "N",
						"SHOW_EMPTY_VALUES" => "Y",
						"SHOW_NUM_PRODUCTS" => "Y",
						"SHOW_PERSONAL_LINK" => "N",
						"SHOW_PRODUCTS" => "Y",
						"SHOW_REGISTRATION" => "N",
						"SHOW_TOTAL_PRICE" => "Y",
						"COMPONENT_TEMPLATE" => "top_header_basket",
						"SHOW_DELAY" => "N",
						"SHOW_NOTAVAIL" => "N",
						"SHOW_IMAGE" => "Y",
						"SHOW_PRICE" => "Y",
						"SHOW_SUMMARY" => "Y"
					),
					false
				);?>
				</div>
			</div>
			<div class="header_right_bottom">
				<div class="header_catalog_nav">
				<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_header_catalog_nav", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "section",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top_catalog",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "top_header_catalog_nav"
	),
	false
);?>
				</div>
			</div>
		</div>
	</div>
</div>