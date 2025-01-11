<?php

if ($arResult["ACTIVE"] == "Y") {
    foreach ($arResult["ITEMS"] as &$arItem) {
        $bannerName = $arItem["NAME"];
        $boldSubtitle = $arItem["PROPERTIES"]["PROPERTY_SUBTEXT_IN_TITLE"]["VALUE"];

        if (!empty($boldSubtitle) && strpos($bannerName, $boldSubtitle) !== false) {
            $arItem["CUSTOM_NAME"] = str_replace($boldSubtitle, "<span>$boldSubtitle</span>", $bannerName);
        } else {
            $arItem["CUSTOM_NAME"] = $bannerName;
        }
    }
    unset($arItem);
}