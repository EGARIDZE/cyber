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
<div class="popular__row">
	<?
	$blockCounter = 1; // Счетчик блоков, начнем с 1
	foreach ($arResult["ITEMS"] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

		<div style="background: <?= $arItem["PROPERTIES"]["PROPERTY_BACKGROUND"]["VALUE"] ?>;"
			class="popular__block block-<?= $blockCounter ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<img src="<?= $arItem["DISPLAY_PROPERTIES"]["PROPERTY_PICTURE"]["FILE_VALUE"]["SRC"] ?>"
				alt="<?= $arItem["NAME"] ?>">
			<h2><?= $arItem["NAME"] ?></h2>
			<p><?= $arItem["PROPERTIES"]["PROPERTY_DESCRIPTION"]["VALUE"] ?></p>
			<button>
				<a href="<?= $arItem["PROPERTIES"]["PROPERTY_PRODUCT_LINK"]["VALUE"] ?>">
					<?= $arItem["PROPERTIES"]["PROPERTY_BUTTON"]["VALUE"] ?>
				</a>
			</button>
		</div>

		<?
		$blockCounter++; // Увеличиваем счетчик
		if ($blockCounter > $arParams["NEWS_COUNT"]) {
			$blockCounter = 1; // Сбрасываем счетчик, если он превысил NEWS_COUNT
		}
	endforeach;
	?>
</div>