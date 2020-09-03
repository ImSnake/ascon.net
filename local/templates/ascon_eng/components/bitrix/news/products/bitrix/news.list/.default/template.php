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

d($arResult);
d($arResult['ID']);
d($arResult['ITEMS']);


/*$arFilter = Array('IBLOCK_ID'=>$arResult['ID'],'ID'=>16, 'GLOBAL_ACTIVE'=>'Y');
$db_list = CIBlockSection::GetList(Array("timestamp_x"=>"DESC"), $arFilter, false, Array("UF_ELEMCOUNT"));
if($uf_value = $db_list->GetNext()):
    $value=$uf_value["UF_ELEMCOUNT"];
    echo $value;
endif;*/
/*



$filter_7 = array('IBLOCK_ID'=>"9", 'ACTIVE'=>'Y');
$db_list_id7 = CIBlockSection::GetList(array(), $filter_7, true, Array("UF_DATE"));
//d($db_list_id7);
while ($arSect = $db_list_id7->GetNext()) {
    $arSect["photo"] = CFile::GetPath($arSect["PICTURE"]);
    d($arSect);
    */?><!--<!--
    <img class="preview_picture" border="0" src="<?/*/*=$arSect["photo"]*/*/?>" alt="<?/*/*=$arSect["NAME"]*/*/?>">
-->--><?/* }
*/?>


<div class="catalog__header">

    <img src="/local/templates/ascon_eng/images/products/background/building-information-modeling.jpg" alt="background">

    <div class="catalog__description">
        <h2>Data manage, revision & collaboration</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
    </div>
</div>

<div class="catalog">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
        <div class="product-box" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
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

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>


<div class="product-box">

    <div class="product-box__img">
        <img src="/local/templates/ascon_eng/images/products/kompas/kompas-3d.jpg" alt="kompas-3d">
    </div>

    <div class="product-box__content">

        <div class="product-box__type base">base program</div>

        <div class="product-box__name">KOMPAS-3D</div>

        <div class="product-box__description">
            <p>KOMPAS-3D is intended for creating three-dimensional associative models for individual parts and
                assembly units containing both original and standardized structural elements. The parametric
                technology allows quickly to obtain models for typical products basing on a once designed prototype. </p>
            <p>A key feature of KOMPAS-3D is the use of its own mathematical core and parametric technologies developed by ASCON specialists.The parametric
                technology allows quickly to obtain models for typical products basing on a once designed prototype.</p>
        </div>

    </div>

    <div class="product-box__bottom">

        <a href="#">
            <div class="product-box__parent hide-element">

                <div class="parent__logo"></div>
                <div class="parent__name">
                    <div></div>
                    <div class="bold"></div>
                </div>

            </div>
        </a>

        <div class="product-box__btn"><a href="#">view</a></div>

    </div>

    <div class="product-box__line"></div>

</div>

<div class="product-box">

    <div class="product-box__img">
        <img src="/local/templates/ascon_eng/images/products/kompas/steel-structures-3D.jpg" alt="steel-structures-3D">
    </div>

    <div class="product-box__content">

        <div class="product-box__type app">add-on package</div>

        <div class="product-box__name">Steel Structures 3D</div>

        <div class="product-box__description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo</p>
        </div>

    </div>

    <div class="product-box__bottom">

        <a href="#">
            <div class="product-box__parent">

                <div class="parent__logo logo-kompas"></div>
                <div class="parent__name">
                    <div>required</div>
                    <div class="bold">KOMPAS-3D</div>
                </div>

            </div>
        </a>

        <div class="product-box__btn"><a href="#">view</a></div>

    </div>

    <div class="product-box__line"></div>

</div>

</div>