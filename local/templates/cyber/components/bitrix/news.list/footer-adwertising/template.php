<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? foreach ($arResult["ITEMS"] as $arItem): ?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<div class="advertising__container" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
		<img src="<?= $arItem["DISPLAY_PROPERTIES"]["PROPERTY_PICTURE"]["FILE_VALUE"]["SRC"] ?>" alt="">
		<h1><?= $arItem["CUSTOM_NAME"] ?></h1>
		<p><?= $arItem["PROPERTIES"]["PROPERTY_DESCRIPTION"]["VALUE"] ?></p>
		<button>
			<a href="<?= $arItem["PROPERTIES"]["PROPERTY_BUTTON_LINK"]["VALUE"] ?>">
				<?= $arItem["PROPERTIES"]["PROPERTY_BUTTON"]["VALUE"] ?>
			</a>
		</button>
	</div>
<? endforeach; ?>