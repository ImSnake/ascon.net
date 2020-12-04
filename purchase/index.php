<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Purchase ASCON Solutions");

use Bitrix\Main\Page\Asset;
$additional = true;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/purchase.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/pages/purchase.js');

?>
<div class="center container">
	<div class="page__header">
		<div class="page__name">
			<h1>HOW TO BY</h1>
		</div>
		<ul class="page__nav">
			<li class="active"><a href="#">FIND SELLER</a></li>
			<li><a href="/contacts/#question-form">Submit request</a></li>
		</ul>
 <img alt="bkg-purchase" src="/local/templates/ascon_eng/images/banner/purchase.jpg" class="page__bkg">
	</div>
	<div class="main">
		<div class="heading-orange">
			<div class="heading__arrow">
			</div>
			<div class="heading__text">
				 FIND SELLER
			</div>
		</div>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"partners", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "partners",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d/m/Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FILE_404" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"FILTER_PROPERTY_CODE" => array(
			0 => "ATT_PARTNER_COUNTRY",
			1 => "ATT_PARTNER_STATUS",
			2 => "ATT_PARTNER_ALLOWED",
			3 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "61",
		"IBLOCK_TYPE" => "ascon_eng",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d/m/Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "ATT_PARTNER_COUNTRY",
			1 => "ATT_PARENT_PARTNER",
			2 => "ATT_PARTNER_NAME",
			3 => "ATT_PARTNER_WEBSITE",
			4 => "ATT_PARTNER_EMAIL",
			5 => "ATT_PARTNER_PHONE",
			6 => "ATT_PARTNER_STATUS",
			7 => "ATT_PARTNER_ALLOWED",
			8 => "ATT_PARTNER_LOGO",
			9 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "21",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "ascon-pagination",
		"PAGER_TITLE" => "",
		"PREVIEW_TRUNCATE_LEN" => "160",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "Y",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "NAME",
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
		"USE_SHARE" => "N",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
);?>
		<div class="hide-element">
			<div class="heading-orange">
				<div class="heading__arrow">
				</div>
				<div class="heading__text">
					 Submit request
				</div>
			</div>
		</div>
	</div>
</div><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>