<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

use Bitrix\Main\Page\Asset;
?>

<footer class="footer">
	<section class="section">
		<div class="footer__container">
			<div class="footer__block">
				<div class="footer__logo">
					<?php $APPLICATION->IncludeFile(
						SITE_TEMPLATE_PATH . '/include/footer-logo.php',
						array(),
						array(
							'MODE' => 'php',
							'NAME' => 'Логотип'
						)
					);
					?>
				</div>
				<div class="footer__subtitle">
					<?php
					$APPLICATION->IncludeFile(
						SITE_TEMPLATE_PATH . '/include/' . LANGUAGE_ID . '/footer_subtitle.php',
						[],
						["MODE" => "html", "NAME" => "Подтекст подвала (" . LANGUAGE_ID . ")"]
					);
					?>
				</div>
				<ul class="footer__socials">
					<? $APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"networks",
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
							"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
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
							"IBLOCK_ID" => "2",	// Код информационного блока
							"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
							"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
							"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
							"NEWS_COUNT" => "5",	// Количество новостей на странице
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
								1 => "PROPERTY_LOGO",
								2 => "",
							),
							"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
							"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
							"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
							"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
							"SET_STATUS_404" => "N",	// Устанавливать статус 404
							"SET_TITLE" => "N",	// Устанавливать заголовок страницы
							"SHOW_404" => "N",	// Показ специальной страницы
							"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
							"SORT_BY2" => "ID",	// Поле для второй сортировки новостей
							"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
							"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
							"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
						),
						false
					); ?>
				</ul>
			</div>

			<div class="footer__block">
				<div class="footer__heading">Services</div>
				<ul class="footer__menu">
					<li><a href="#">Bonus program</a></li>
					<li><a href="#">Gift cards</a></li>
					<li><a href="#">Credit and payment</a></li>
					<li><a href="#">Service contracts</a></li>
					<li><a href="#">Non-cash account</a></li>
					<li><a href="#">Payment</a></li>
				</ul>
			</div>
			<div class="footer__block">
				<div class="footer__heading">Assistance to the buyer</div>
				<ul class="footer__menu">
					<li><a href="#">Find an order</a></li>
					<li><a href="#">Terms of delivery</a></li>
					<li><a href="#">Exchange and return of goods</a></li>
					<li><a href="#">Guarantee</a></li>
					<li><a href="#">Frequently asked questions</a></li>
					<li><a href="#">Terms of use of the site</a></li>
				</ul>
			</div>
		</div>
	</section>
</footer>

</div>
</body>

<script>
	// Header animation menu
	document.querySelector('.header').classList.add('visible');
</script>

<?php
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main-page-specific.js');
?>

</html>