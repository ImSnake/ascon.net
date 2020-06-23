<?
use Bitrix\Main\Page\Asset;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/blog.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/pages/blog.js');
$APPLICATION->SetTitle("Blog");
?><div class="center container">
	<div class="page__header">
		<div class="page__name">
			<h1>blog</h1>
			<p>
				 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Ut enim ad minim veniam.
			</p>
		</div>
		<ul class="page__nav">
			<li><a href="/blog/">all</a></li>
			<li><a href="#">news</a></li>
			<li><a href="#">articles</a></li>
			<li><a href="#">stories</a></li>
		</ul>
 <img alt="bkg-media" src="/local/templates/ascon_eng/images/banner/media.png" class="page__bkg">
	</div>
	<div class="main">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	".default",
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
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array("",""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "",
		"DETAIL_PROPERTY_CODE" => array("ATT_ARTICLE_AUTHOR","ATT_ARTICLE_SOURCE","ATT_ARTICLE_TYPE","ATT_ARTICLE_IMAGE","ATT_ARTICLE_AUTHOR_IMG",""),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILE_404" => "",
		"FILTER_FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"FILTER_PROPERTY_CODE" => array("ATT_ARTICLE_BRAND",""),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "dynamic",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d-m-Y",
		"LIST_FIELD_CODE" => array("NAME","PREVIEW_PICTURE","IBLOCK_NAME",""),
		"LIST_PROPERTY_CODE" => array("ATT_ARTICLE_BRAND","ATT_ARTICLE_TYPE",""),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "ascon-pagination",
		"PAGER_TITLE" => "",
		"PREVIEW_TRUNCATE_LEN" => "160",
		"SEF_FOLDER" => "/blog/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("detail"=>"#ELEMENT_ID#/","news"=>"","section"=>""),
		"SET_LAST_MODIFIED" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
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
);?> <span id="bx-cursor-node"> </span>
	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>