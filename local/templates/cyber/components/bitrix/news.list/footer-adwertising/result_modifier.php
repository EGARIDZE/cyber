<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();


if ($arResult["ACTIVE"] == "Y") {
    foreach ($arResult["ITEMS"] as &$arItem) {
        $boldSubTitle = $arItem["PROPERTIES"]["PROPERTY_SUBTEXT_IN_TITLE"]["VALUE"];
        if (!empty($boldSubTitle && strpos($arItem["NAME"], $boldSubtitle) !== false)) {
            $arItem["CUSTOM_NAME"] = str_replace($boldSubTitle, "<span>$boldSubTitle</span>", $arItem["NAME"]);
        } else {
            $arItem["CUSTOM_NAME"] = $arItem["NAME"];
        }
    }
    unset($arItem);
}