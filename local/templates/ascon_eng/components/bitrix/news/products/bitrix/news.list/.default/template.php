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

<div class="catalog__header">

    <?foreach($arResult['SECTION']['PATH'] as $arItem):?>
<!--        --><?/*if($arItem['IBLOCK_SECTION_ID'] != null):*/?>
        <?if($arItem['CODE'] != null):?>
            <?$arSect["photo"] = CFile::GetPath($arItem["PICTURE"]); ?>
            <?if($arSect["photo"] != null):?>
                <img src="<?echo $arSect["photo"]?>" alt="catalog-background">
            <?endif;?>
            <div class="catalog__description"> <?echo $arItem['DESCRIPTION']?> </div>
        <?endif;?>
    <?endforeach;?>

</div>

<div class="catalog">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <? $type = $arItem["DISPLAY_PROPERTIES"]['ATT_PRODUCT_TYPE']['DISPLAY_VALUE'] ?>

    <div class="product-box">

        <div class="product-box__img">
            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
        </div>

        <div class="product-box__content">

            <? if($type == "add-on"): ?>
                <div class="product-box__type <?=$type?>"><?=$type?>&nbsp;pack</div>
            <?else:?>
                <div class="product-box__type <?=$type?>"><?=$type?></div>
            <?endif;?>

            <div class="product-box__name"><?=$arItem["NAME"]?></div>

            <div class="product-box__description">
                <p><?=$arItem['PREVIEW_TEXT']?></p>
            </div>

        </div>

        <div class="product-box__bottom">

            <div class="product-box__parent">

                <? if($type == "add-on"): ?>
                    <?$res = CIBlockElement::GetByID($arItem["PROPERTIES"]['ATT_PRODUCT_PARENT_LINK']['VALUE']);
                    if($ar_res = $res->GetNext())?>

                    <a href="/products/<?=strtolower($arItem["DISPLAY_PROPERTIES"]['ATT_PRODUCT_PARENT']['DISPLAY_VALUE'])?>/<?=($ar_res['CODE'])?>/">

                        <div class="parent__logo logo-<?=strtolower($arItem["DISPLAY_PROPERTIES"]['ATT_PRODUCT_PARENT']['DISPLAY_VALUE'])?>"></div>

                        <div class="parent__name">
                            <div>required</div>
                            <div class="bold"><?=$ar_res['NAME']?></div>
                        </div>
                    </a>

                <?endif;?>
            </div>

            <div class="product-box__btn"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>">view</a></div>

        </div>

    </div>

<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

</div>
