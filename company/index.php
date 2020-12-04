<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("About ASCON Company");

use Bitrix\Main\Page\Asset;

$additional = true;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/company.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/pages/company.js');

?>
    <div class="center container">
        <div class="page__header">
            <div class="page__name">
                <h1>About company</h1>
            </div>
            <ul class="page__nav">
                <li class="active"><a href="#overview">Overview</a></li>
                <li><a href="#solutions">Solutions</a></li>
                <li><a href="#customers">Customers</a></li>
            </ul>
            <img alt="bkg-company" src="/local/templates/ascon_eng/images/banner/company.png" class="page__bkg">
        </div>
        <div class="main">
            <div id="overview" class="heading-orange">
                <div class="heading__arrow">
                </div>
                <div class="heading__text">
                    Overview
                </div>
            </div>
            <p>
                ASCON was founded in&nbsp;1989 as a&nbsp;private company, becoming one of&nbsp;the&nbsp;first
                CAD/AEC/PLM
                developers
                and&nbsp;integrators in&nbsp;Russian and CIS member countries. Our software solutions address key
                engineering design issues, such a&nbsp;accurate 3D&nbsp;modeling, preparation and release of&nbsp;drawings
                and design documentation,
                business process development, and engineering data management.
            </p>
            <p>
                Today, ASCON is&nbsp;a&nbsp;dynamic company employing 800 highly qualified specialists. The company
                operates
                60&nbsp;offices
                and dealer centers in&nbsp;major industrial regions worldwide. Each branch office provides a&nbsp;full
                range
                of&nbsp;services in&nbsp;software implementation, IT&nbsp;consulting, personnel training, software
                integration and support.
            </p>
            <p>
                The number of&nbsp;KOMPAS installations exceeds 80&nbsp;000 seats in&nbsp;automotive, heavy machinery,
                aerospace and
                defense, agriculture, oil&nbsp;production and power generation, manufacturing and construction,
                electronics
                and engineering industries.
            </p>
            <div class="group__company">
                <div class="company__box">
                    <img alt="icon" src="/local/templates/ascon_eng/images/icon/intersection1.png">
                    <div class="company__num">
                        30
                    </div>
                    <div class="company__text">
                        years in the CAD market
                    </div>
                </div>
                <div class="company__box">
                    <img alt="icon" src="/local/templates/ascon_eng/images/icon/intersection2.png">
                    <div class="company__num">
                        800
                    </div>
                    <div class="company__text">
                        employees in&nbsp;our&nbsp;team
                    </div>
                </div>
                <div class="company__box">
                    <img alt="icon" src="/local/templates/ascon_eng/images/icon/intersection3.png">
                    <div class="company__num">
                        &gt;&nbsp;320
                    </div>
                    <div class="company__text">
                        from them are highly qualified researchers and&nbsp;developers
                    </div>
                </div>
                <div class="company__box">
                    <img alt="icon" src="/local/templates/ascon_eng/images/icon/intersection4.png">
                    <div class="company__num">
                        36
                    </div>
                    <div class="company__text">
                        offices in&nbsp;Russia and in&nbsp;CIS countries
                    </div>
                </div>
                <div class="company__box">
                    <img alt="icon" src="/local/templates/ascon_eng/images/icon/intersection5.png">
                    <div class="company__num">
                        &gt;&nbsp;50
                    </div>
                    <div class="company__text">
                        partners in&nbsp;Russia and&nbsp;abroad
                    </div>
                </div>
                <div class="company__box">
                    <img alt="icon" src="/local/templates/ascon_eng/images/icon/intersection6.png">
                    <div class="company__num">
                        &gt;&nbsp;11&nbsp;000
                    </div>
                    <div class="company__text">
                        customers all over the&nbsp;world
                    </div>
                </div>
            </div>
            <div id="solutions" class="heading-orange">
                <div class="heading__arrow">
                </div>
                <div class="heading__text">
                    Solutions
                </div>
            </div>
            <div class="company__scheme">
                <img alt="solutions" src="/local/templates/ascon_eng/images/pictures/company-solutions.png">

                <p>Solutions offered by&nbsp;the ASCON address key issues of&nbsp;engineering, building and structures
                    design, business
                    process development and engineering data management.</p>
                <p><span class="bold blue">KOMPAS</span> family of&nbsp;CAD solutions provides a&nbsp;classic
                    framework for three-dimensional parametric design. The main
                    system components are hybrid 3D&nbsp;modeler and a&nbsp;graphic drafting editor. KOMPAS &minus;3D&nbsp;is
                    based on&nbsp;the geometric
                    core C3D (created by&nbsp;C3D&nbsp;Labs, a&nbsp;subsidiary of&nbsp;ASCON).
                </p>
                <p>
                    <span class="bold blue">Renga</span> Software is&nbsp;a&nbsp;family of&nbsp;products to&nbsp;design buildings and structures by&nbsp;using
                    Building Information
                    Modeling (BIM).
                </p>
                <p>
                    <span class="bold blue">Pilot</span> family of&nbsp;corporate management systems for a&nbsp;project organization and
                    information, data storage,
                    management, analysis and automating business processes.
                </p>
                <p>
                    <span class="bold blue">C3D Labs</span> is&nbsp;a&nbsp;team of&nbsp;experienced managers, programmers and graduate-level
                    specialists in&nbsp;the field of
                    computer-aided design (CAD) . They are successful in&nbsp;applying their knowledge to&nbsp;practice,
                    such as&nbsp;using
                    numerical methods in&nbsp;solving mathematical problems and implementing the APIs included in&nbsp;C3D&nbsp;Toolkit.
                </p>
            </div>

            <div id="customers" class="heading-orange">
                <div class="heading__arrow">
                </div>
                <div class="heading__text">
                    customers
                </div>
            </div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "ascon_customers",
                array(
                    "ACTIVE_DATE_FORMAT" => "d/m/Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "Y",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "58",
                    "IBLOCK_TYPE" => "ascon_eng",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "50",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_TITLE" => "Customers",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("ATT_CUSTOMER_LINK", "ATT_CUSTOMER_SVG", ""),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "NAME",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            ); ?>
        </div>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>