<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Santiano's gallery");
?><!-- заглушка --><?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel", 
	array(
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"ROOT_MENU_TYPE" => "main",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "section",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>

<!-- КОНТЕНТ -->

<?
$image_path = "/upload/error_image.jpg";

//echo '<img src="' . $image_path . '" alt="Название изображения">';
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
