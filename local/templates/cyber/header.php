<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $APPLICATION->ShowTitle(); ?></title>
	<?
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css"); ?>

	<!-- FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
		rel="stylesheet">
	<!-- FONTS -->
	<? $APPLICATION->ShowHead(); ?>
</head>
<? $APPLICATION->ShowPanel(); ?>

<body>
	<div class="wrapper">
		<header class="header">
			<section class="section">
				<div class="menu__container">
					<div class="logo">
						<a href="">
							<?php $APPLICATION->IncludeFile(
								SITE_TEMPLATE_PATH . '/include/header-logo.php',
								array(),
								array(
									'MODE' => 'php',
									'NAME' => 'Логотип'
								)
							);
							?>
						</a>
					</div>
					<div class="search">
						<form method="get" action="/search">
							<button type="submit">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
										stroke="black" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round" />
									<path d="M21 21L16.65 16.65" stroke="black" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round" />
								</svg>
							</button>
							<input type="search" name="search-text" placeholder="Search..." />
						</form>
					</div>
					<nav>
						<? $APPLICATION->IncludeComponent(
							"bitrix:menu",
							"top-menu",
							array(
								"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
								"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
								"DELAY" => "N",	// Откладывать выполнение шаблона меню
								"MAX_LEVEL" => "1",	// Уровень вложенности меню
								"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
									0 => "",
								),
								"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
								"MENU_CACHE_TYPE" => "Y",	// Тип кеширования
								"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
								"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
								"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
							),
							false
						); ?>
					</nav>
					<nav>
						<? $APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"menu-icons",
							array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
								"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
								"AJAX_MODE" => "N",	// Включить режим AJAX
								"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
								"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
								"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
								"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
								"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
								"CACHE_GROUPS" => "N",	// Учитывать права доступа
								"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
								"CACHE_TYPE" => "A",	// Тип кеширования
								"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
								"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
								"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
								"DISPLAY_DATE" => "N",	// Выводить дату элемента
								"DISPLAY_NAME" => "N",	// Выводить название элемента
								"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
								"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
								"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
								"FIELD_CODE" => array(	// Поля
									0 => "",
									1 => "",
								),
								"FILTER_NAME" => "",	// Фильтр
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
								"IBLOCK_ID" => "1",	// Код информационного блока
								"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
								"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
								"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
								"NEWS_COUNT" => "3",	// Количество новостей на странице
								"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
								"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
								"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
								"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
								"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
								"PAGER_TITLE" => "Новости",	// Название категорий
								"PARENT_SECTION" => "",	// ID раздела
								"PARENT_SECTION_CODE" => "",	// Код раздела
								"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
								"PROPERTY_CODE" => array(	// Свойства
									0 => "PROPERTY_LINK",
									1 => "PROPERTY_SVG",
								),
								"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
								"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
								"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
								"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
								"SET_STATUS_404" => "N",	// Устанавливать статус 404
								"SET_TITLE" => "N",	// Устанавливать заголовок страницы
								"SHOW_404" => "N",	// Показ специальной страницы
								"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
								"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
								"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
								"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
								"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
							),
							false
						); ?>
					</nav>

				</div>
			</section>
		</header>