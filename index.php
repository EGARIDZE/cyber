<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>


<main class="main">
    <? $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "main-advertising",
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
            "CACHE_TYPE" => "Y",	// Тип кеширования
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
            "DISPLAY_DATE" => "N",	// Выводить дату элемента
            "DISPLAY_NAME" => "Y",	// Выводить название элемента
            "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "FIELD_CODE" => array(	// Поля
                0 => "NAME",
                1 => "",
            ),
            "FILTER_NAME" => "",	// Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "3",	// Код информационного блока
            "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "1",	// Количество новостей на странице
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
                0 => "PROPERTY_DESCRIPTION",
                1 => "PROPERTY_SUBTEXT_IN_TITLE",
                2 => "PROPERTY_BUTTON_LINK",
                3 => "PROPERTY_BUTTON",
                4 => "PROPERTY_TECHNO_TERM",
                5 => "PROPERTY_BACKGROUND_COLOR",
                6 => "PROPERTY_ANIM_PICTURE",
                7 => "",
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
            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
        ),
        false
    ); ?>

    <div class="category__container">
        <section class="section">
            <h2>Browse By Category</h2>
            <ul class="category__row">
                <li>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/category/Phones.svg" alt="">
                    <a href="">Phones</a>
                </li>
                <li>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/category/Smart Watches.svg" alt="">
                    <a href="">Smart Watches</a>
                </li>
                <li>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/category/Cameras.svg" alt="">
                    <a href="">Cameras</a>
                </li>
                <li>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/category/Headphones.svg" alt="">
                    <a href="">Headphones</a>
                </li>
                <li>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/category/Computers.svg" alt="">
                    <a href="">Computers</a>
                </li>
                <li>
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/category/Gaming.svg" alt="">
                    <a href="">Gaming</a>
                </li>
            </ul>
        </section>
    </div>


    <div class="card__container">
        <section class="section">
            <h2>New Arrival</h2>
            <div class="card__row">

                <div class="card">
                    <div class="card__icon">
                        <a href="">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 1C3.239 1 1 3.216 1 5.95C1 8.157 1.875 13.395 10.488 18.69C10.6423 18.7839 10.8194 18.8335 11 18.8335C11.1806 18.8335 11.3577 18.7839 11.512 18.69C20.125 13.395 21 8.157 21 5.95C21 3.216 18.761 1 16 1C13.239 1 11 4 11 4C11 4 8.761 1 6 1Z"
                                    stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="card__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/catalog/Iphone 14 pro.png" alt="Product Image">
                    </div>
                    <div class="card__content">
                        <h3 class="card__title">Apple iPhone 14 Pro Max 128GB Deep Purple</h3>
                        <div class="card__price">
                            <span class="old-price">$50.00</span>
                            <!-- <span class="new-price">$35.00</span> -->
                        </div>
                        <button class="card__button"><a href="">Buy Now</a></button>
                    </div>
                </div>

                <div class="card">
                    <div class="card__icon">
                        <a href="">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 1C3.239 1 1 3.216 1 5.95C1 8.157 1.875 13.395 10.488 18.69C10.6423 18.7839 10.8194 18.8335 11 18.8335C11.1806 18.8335 11.3577 18.7839 11.512 18.69C20.125 13.395 21 8.157 21 5.95C21 3.216 18.761 1 16 1C13.239 1 11 4 11 4C11 4 8.761 1 6 1Z"
                                    stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="card__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/catalog/Iphone 14 pro.png" alt="Product Image">
                    </div>
                    <div class="card__content">
                        <h3 class="card__title">Apple iPhone 14 Pro Max 128GB Deep Purple</h3>
                        <div class="card__price">
                            <span class="old-price">$50.00</span>
                            <!-- <span class="new-price">$35.00</span> -->
                        </div>
                        <button class="card__button"><a href="">Buy Now</a></button>
                    </div>
                </div>

                <div class="card">
                    <div class="card__icon">
                        <a href="">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 1C3.239 1 1 3.216 1 5.95C1 8.157 1.875 13.395 10.488 18.69C10.6423 18.7839 10.8194 18.8335 11 18.8335C11.1806 18.8335 11.3577 18.7839 11.512 18.69C20.125 13.395 21 8.157 21 5.95C21 3.216 18.761 1 16 1C13.239 1 11 4 11 4C11 4 8.761 1 6 1Z"
                                    stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="card__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/catalog/Iphone 14 pro.png" alt="Product Image">
                    </div>
                    <div class="card__content">
                        <h3 class="card__title">Apple iPhone 14 Pro Max 128GB Deep Purple</h3>
                        <div class="card__price">
                            <span class="old-price">$50.00</span>
                            <!-- <span class="new-price">$35.00</span> -->
                        </div>
                        <button class="card__button"><a href="">Buy Now</a></button>
                    </div>
                </div>

                <div class="card">
                    <div class="card__icon">
                        <a href="">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 1C3.239 1 1 3.216 1 5.95C1 8.157 1.875 13.395 10.488 18.69C10.6423 18.7839 10.8194 18.8335 11 18.8335C11.1806 18.8335 11.3577 18.7839 11.512 18.69C20.125 13.395 21 8.157 21 5.95C21 3.216 18.761 1 16 1C13.239 1 11 4 11 4C11 4 8.761 1 6 1Z"
                                    stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="card__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/catalog/Iphone 14 pro.png" alt="Product Image">
                    </div>
                    <div class="card__content">
                        <h3 class="card__title">Apple iPhone 14 Pro Max 128GB Deep Purple</h3>
                        <div class="card__price">
                            <span class="old-price">$50.00</span>
                            <!-- <span class="new-price">$35.00</span> -->
                        </div>
                        <button class="card__button"><a href="">Buy Now</a></button>
                    </div>
                </div>

                <div class="card">
                    <div class="card__icon">
                        <a href="">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 1C3.239 1 1 3.216 1 5.95C1 8.157 1.875 13.395 10.488 18.69C10.6423 18.7839 10.8194 18.8335 11 18.8335C11.1806 18.8335 11.3577 18.7839 11.512 18.69C20.125 13.395 21 8.157 21 5.95C21 3.216 18.761 1 16 1C13.239 1 11 4 11 4C11 4 8.761 1 6 1Z"
                                    stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="card__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/catalog/Iphone 14 pro.png" alt="Product Image">
                    </div>
                    <div class="card__content">
                        <h3 class="card__title">Apple iPhone 14 Pro Max 128GB Deep Purple</h3>
                        <div class="card__price">
                            <span class="old-price">$50.00</span>
                            <!-- <span class="new-price">$35.00</span> -->
                        </div>
                        <button class="card__button"><a href="">Buy Now</a></button>
                    </div>
                </div>

                <div class="card">
                    <div class="card__icon">
                        <a href="">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 1C3.239 1 1 3.216 1 5.95C1 8.157 1.875 13.395 10.488 18.69C10.6423 18.7839 10.8194 18.8335 11 18.8335C11.1806 18.8335 11.3577 18.7839 11.512 18.69C20.125 13.395 21 8.157 21 5.95C21 3.216 18.761 1 16 1C13.239 1 11 4 11 4C11 4 8.761 1 6 1Z"
                                    stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="card__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/catalog/Iphone 14 pro.png" alt="Product Image">
                    </div>
                    <div class="card__content">
                        <h3 class="card__title">Apple iPhone 14 Pro Max 128GB Deep Purple</h3>
                        <div class="card__price">
                            <span class="old-price">$50.00</span>
                            <!-- <span class="new-price">$35.00</span> -->
                        </div>
                        <button class="card__button"><a href="">Buy Now</a></button>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <div class="popular__container">

        <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"popular-products", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "Y",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "advertising",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "PROPERTY_DESCRIPTION",
			1 => "PROPERTY_PRODUCT_LINK",
			2 => "PROPERTY_BUTTON",
			3 => "PROPERTY_BACKGROUND",
			4 => "PROPERTY_PICTURE",
			5 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "popular-products"
	),
	false
); ?>

    </div>

    <div class="card__container">
        <section class="section">
            <h2>Discounts up to -50%</h2>
            <div class="card__row">



                <div class="card">
                    <div class="card__icon">
                        <a href="">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 1C3.239 1 1 3.216 1 5.95C1 8.157 1.875 13.395 10.488 18.69C10.6423 18.7839 10.8194 18.8335 11 18.8335C11.1806 18.8335 11.3577 18.7839 11.512 18.69C20.125 13.395 21 8.157 21 5.95C21 3.216 18.761 1 16 1C13.239 1 11 4 11 4C11 4 8.761 1 6 1Z"
                                    stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="card__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/catalog/Iphone 14 pro.png" alt="Product Image">
                    </div>
                    <div class="card__content">
                        <h3 class="card__title">Apple iPhone 14 Pro Max 128GB Deep Purple</h3>
                        <div class="card__price">
                            <span class="old-price">$50.00</span>
                            <!-- <span class="new-price">$35.00</span> -->
                        </div>
                        <button class="card__button"><a href="">Buy Now</a></button>
                    </div>
                </div>

                <div class="card">
                    <div class="card__icon">
                        <a href="">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 1C3.239 1 1 3.216 1 5.95C1 8.157 1.875 13.395 10.488 18.69C10.6423 18.7839 10.8194 18.8335 11 18.8335C11.1806 18.8335 11.3577 18.7839 11.512 18.69C20.125 13.395 21 8.157 21 5.95C21 3.216 18.761 1 16 1C13.239 1 11 4 11 4C11 4 8.761 1 6 1Z"
                                    stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="card__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/catalog/Iphone 14 pro.png" alt="Product Image">
                    </div>
                    <div class="card__content">
                        <h3 class="card__title">Apple iPhone 14 Pro Max 128GB Deep Purple</h3>
                        <div class="card__price">
                            <span class="old-price">$50.00</span>
                            <!-- <span class="new-price">$35.00</span> -->
                        </div>
                        <button class="card__button"><a href="">Buy Now</a></button>
                    </div>
                </div>

                <div class="card">
                    <div class="card__icon">
                        <a href="">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 1C3.239 1 1 3.216 1 5.95C1 8.157 1.875 13.395 10.488 18.69C10.6423 18.7839 10.8194 18.8335 11 18.8335C11.1806 18.8335 11.3577 18.7839 11.512 18.69C20.125 13.395 21 8.157 21 5.95C21 3.216 18.761 1 16 1C13.239 1 11 4 11 4C11 4 8.761 1 6 1Z"
                                    stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="card__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/catalog/Iphone 14 pro.png" alt="Product Image">
                    </div>
                    <div class="card__content">
                        <h3 class="card__title">Apple iPhone 14 Pro Max 128GB Deep Purple</h3>
                        <div class="card__price">
                            <span class="old-price">$50.00</span>
                            <!-- <span class="new-price">$35.00</span> -->
                        </div>
                        <button class="card__button"><a href="">Buy Now</a></button>
                    </div>
                </div>

                <div class="card">
                    <div class="card__icon">
                        <a href="">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 1C3.239 1 1 3.216 1 5.95C1 8.157 1.875 13.395 10.488 18.69C10.6423 18.7839 10.8194 18.8335 11 18.8335C11.1806 18.8335 11.3577 18.7839 11.512 18.69C20.125 13.395 21 8.157 21 5.95C21 3.216 18.761 1 16 1C13.239 1 11 4 11 4C11 4 8.761 1 6 1Z"
                                    stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    <div class="card__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/image/catalog/Iphone 14 pro.png" alt="Product Image">
                    </div>
                    <div class="card__content">
                        <h3 class="card__title">Apple iPhone 14 Pro Max 128GB Deep Purple</h3>
                        <div class="card__price">
                            <span class="old-price">$50.00</span>
                            <!-- <span class="new-price">$35.00</span> -->
                        </div>
                        <button class="card__button"><a href="">Buy Now</a></button>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <? $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "footer-adwertising",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "N",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "DISPLAY_DATE" => "N",	// Выводить дату элемента
            "DISPLAY_NAME" => "Y",	// Выводить название элемента
            "DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "FIELD_CODE" => array(	// Поля
                0 => "NAME",
                1 => "",
            ),
            "FILTER_NAME" => "",	// Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "4",	// Код информационного блока
            "IBLOCK_TYPE" => "advertising",	// Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "1",	// Количество новостей на странице
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
                0 => "PROPERTY_DESCRIPTION",
                1 => "PROPERTY_SUBTEXT_IN_TITLE",
                2 => "PROPERTY_BUTTON_LINK",
                3 => "PROPERTY_BUTTON",
                4 => "PROPERTY_PICTURE",
                5 => "",
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
            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
        ),
        false
    ); ?>

</main>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>