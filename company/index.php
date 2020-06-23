<?
use Bitrix\Main\Page\Asset;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/company.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/pages/company.js');
$APPLICATION->SetTitle("Company");
?>

    <div class="center container">

        <div class="page__header">

            <div class="page__name">
                <h1>About ASCON company</h1>
            </div>

            <ul class="page__nav">
                <li class="active"><a href="#overview">Overview</a></li>
                <li><a href="#solutions">Solutions</a></li>
                <li><a href="#customers">Customers</a></li>
            </ul>

            <img class="page__bkg" src="/local/templates/ascon_eng/images/banner/company.png" alt="bkg-company">

        </div>

        <div class="main">

            <div id="overview" class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">Overview</div>
            </div>

            <p>ASCON was founded in 1989 as a private company, becoming one of the first CAD/AEC/PLM developers and integrators in Russian and CIS member countries. Our software solutions address key engineering design issues, such as accurate 3D modeling, preparation and release of drawings and design documentation, business process development, and engineering data management.</p>
            <p>Today, ASCON is a dynamic company employing 800 highly qualified specialists. The company operates 60 offices and dealer centers in major industrial regions worldwide. Each branch office provides a full range of services in software implementation, IT consulting, personnel training, software integration, and support.</p>
            <p>The number of KOMPAS installations exceeds 75 000 seats in automotive, heavy machinery, aerospace and defense, agriculture, oil production and power generation, manufacturing and construction, electronics and engineering industries.</p>

            <div class="group__company">

                <div class="company__box">
                    <img src="/local/templates/ascon_eng/images/icon/intersection1.png" alt="icon">
                    <div class="company__num">30</div>
                    <div class="company__text">in the CAD market</div>
                </div>

                <div class="company__box">
                    <img src="/local/templates/ascon_eng/images/icon/intersection2.png" alt="icon">
                    <div class="company__num">800</div>
                    <div class="company__text">employees in our team</div>
                </div>

                <div class="company__box">
                    <img src="/local/templates/ascon_eng/images/icon/intersection3.png" alt="icon">
                    <div class="company__num"><span>></span>250</div>
                    <div class="company__text">from them are highly qualified researchers and developers</div>
                </div>

                <div class="company__box">
                    <img src="/local/templates/ascon_eng/images/icon/intersection4.png" alt="icon">
                    <div class="company__num">36</div>
                    <div class="company__text">offices in Russia and in CIS countries</div>
                </div>

                <div class="company__box">
                    <img src="/local/templates/ascon_eng/images/icon/intersection5.png" alt="icon">
                    <div class="company__num"><span>></span>50</div>
                    <div class="company__text">partners in Russia and abroad</div>
                </div>

                <div class="company__box">
                    <img src="/local/templates/ascon_eng/images/icon/intersection6.png" alt="icon">
                    <div class="company__num"><span>></span>11&nbsp;000</div>
                    <div class="company__text">customers all over the world</div>
                </div>

            </div>


            <div id="solutions" class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">Solutions</div>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet delectus, doloremque eius est et eum fugiat
                illum magni maxime odit officia pariatur quasi quibusdam quis sequi ullam veritatis, voluptas voluptatum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet delectus, doloremque eius est et eum fugiat
                illum magni maxime odit officia pariatur quasi quibusdam quis sequi ullam veritatis, voluptas voluptatum!</p>

            <div class="company__scheme">
                <img src="/local/templates/ascon_eng/images/pictures/company-solutions.png" alt="solutions">
            </div>



            <div id="customers" class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">Our customers</div>
            </div>

            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"ascon_customers", 
	array(
		"ACTIVE_DATE_FORMAT" => "d/m/Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "ascon_customers",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "dynamic",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "30",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "ATT_CUSTOMER_LINK",
			1 => "ATT_CUSTOMER_SVG",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "NAME",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>

        </div>

    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>