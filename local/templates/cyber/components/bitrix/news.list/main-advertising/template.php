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

	<div style="background: <?= $arItem["PROPERTIES"]["PROPERTY_BACKGROUND_COLOR"]["VALUE"] ?>;" class="banner__container">
		<section class="section" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<div class="banner__block">
				<h3 class="banner__subtitle"><?= $arItem["PROPERTIES"]["PROPERTY_TECHNO_TERM"]["VALUE"] ?></h3>
				<h1 class="banner__title"><?= $arItem["CUSTOM_NAME"] ?></h1>
				<p><?= $arItem["PROPERTIES"]["PROPERTY_DESCRIPTION"]["VALUE"] ?></p>
				<button>
					<a href="<?= $arItem["PROPERTIES"]["PROPERTY_BUTTON_LINK"]["VALUE"] ?>">
						<?= $arItem["PROPERTIES"]["PROPERTY_BUTTON"]["VALUE"] ?>
					</a>
				</button>
			</div>
			<img src="<?= $arItem["DISPLAY_PROPERTIES"]["PROPERTY_ANIM_PICTURE"]["FILE_VALUE"]["SRC"] ?>" alt="">
		</section>
	</div>

<? endforeach; ?>