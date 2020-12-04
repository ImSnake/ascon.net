<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("ASCON Events & Activities");

use Bitrix\Main\Page\Asset;
$additional = true;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/blog.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/pages/blog.js');
?>
<div class="center container">
	<div class="page__header">
		<div class="page__name">
			<h1>Events</h1>
		</div>
		<ul class="page__nav events-nav">
			<li><a href="/events/">all</a></li>
			<li><a href="/events/learn/"><span>Learn&nbsp;&amp;&nbsp;</span>Train</a></li>
			<li><a href="/events/offers/"><span>Special&nbsp;</span>offers</a></li>
			<li><a href="/events/activities/">activities</a></li>
		</ul>
 <img alt="bkg-events" src="/local/templates/ascon_eng/images/banner/events.png" class="page__bkg">
	</div>
	<div class="main">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"events",
	Array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "NAME",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d-m-Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array("NAME","DETAIL_TEXT",""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "",
		"DETAIL_PROPERTY_CODE" => array("ATT_EVENT_CATEGORY","ATT_EVENT_FINISH","ATT_EVENT_START","ATT_EVENT_TYPE",""),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILE_404" => "",
		"FILTER_FIELD_CODE" => array("",""),
		"FILTER_NAME" => "By event type",
		"FILTER_PROPERTY_CODE" => array("ATT_EVENT_BRAND",""),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "60",
		"IBLOCK_TYPE" => "ascon_eng",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d-m-Y",
		"LIST_FIELD_CODE" => array("ID","NAME","PREVIEW_TEXT",""),
		"LIST_PROPERTY_CODE" => array("ATT_EVENT_BRAND","ATT_EVENT_CATEGORY","ATT_EVENT_FINISH","ATT_EVENT_START","ATT_EVENT_TYPE",""),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "9",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "ascon-pagination",
		"PAGER_TITLE" => "",
		"PREVIEW_TRUNCATE_LEN" => "160",
		"SEF_FOLDER" => "/events/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("detail"=>"#SECTION_CODE#/#ELEMENT_CODE#/","news"=>"","section"=>"#SECTION_CODE#/"),
		"SET_LAST_MODIFIED" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SORT_BY1" => "ATT_EVENT_START",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N"
	)
);?>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>