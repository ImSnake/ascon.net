<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="blog__group">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
        <div class="media-box" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <img class="media-img"
                 src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                 alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/>


            <div class="media__head">
                <span class="media-type"><?echo $arItem["DISPLAY_PROPERTIES"]["ATT_ARTICLE_TYPE"]["DISPLAY_VALUE"]?></span>
                <span class="media-date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
            </div>

            <div class="media-name">
                <?echo $arItem["NAME"]?>
            </div>

            <div class="media-logo">
                <?if(is_array($arItem["DISPLAY_PROPERTIES"]["ATT_ARTICLE_BRAND"]["DISPLAY_VALUE"])):?>
                    <?foreach($arItem["DISPLAY_PROPERTIES"]["ATT_ARTICLE_BRAND"]["DISPLAY_VALUE"] as $elem):?>
                    <span class="logo-<?echo $elem ?>"></span>
                    <?endforeach;?>
                <?else:?>
                    <span class="logo-<?echo $arItem["DISPLAY_PROPERTIES"]["ATT_ARTICLE_BRAND"]["DISPLAY_VALUE"]?>"></span>
                <?endif?>
            </div>

	    </div>
    </a>
<?endforeach;?>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

