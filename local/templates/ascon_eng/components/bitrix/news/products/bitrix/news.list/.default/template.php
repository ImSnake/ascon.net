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

//d($arResult['ITEMS']);
?>

    <div class="catalog__header">

    <?foreach($arResult['SECTION']['PATH'] as $arItem):?>
        <?if($arItem['IBLOCK_SECTION_ID'] != null):?>
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
    //d($arItem["PROPERTIES"]['ATT_PRODUCT_PARENT']['VALUE']);
	?>

    <? $type = $arItem["DISPLAY_PROPERTIES"]['ATT_PRODUCT_TYPE']['DISPLAY_VALUE'] ?>

    <div class="product-box">

        <div class="product-box__img">
            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"] ?>">
        </div>

        <div class="product-box__content">

            <? if($type == "add-on"): ?>
                <div class="product-box__type <?echo $type ?>"><?echo $type ?>&nbsp;pack</div>
            <?else:?>
                <div class="product-box__type <?echo $type ?>"><?echo $type ?></div>
            <?endif;?>

            <div class="product-box__name"><?echo $arItem["NAME"] ?></div>

            <div class="product-box__description">
                <p><?echo $arItem['PREVIEW_TEXT'] ?></p>
            </div>

        </div>

        <div class="product-box__bottom">

            <div class="product-box__parent">

                <? if($type == "add-on"): ?>
                    <?$res = CIBlockElement::GetByID($arItem["PROPERTIES"]['ATT_PRODUCT_PARENT_LINK']['VALUE']);
                    if($ar_res = $res->GetNext())?>

                    <a href="/products/<?echo strtolower($arItem["DISPLAY_PROPERTIES"]['ATT_PRODUCT_PARENT']['DISPLAY_VALUE']) ?>/<?echo($ar_res['CODE'])?>/">

                        <div class="parent__logo logo-<?echo strtolower($arItem["DISPLAY_PROPERTIES"]['ATT_PRODUCT_PARENT']['DISPLAY_VALUE'])?>"></div>

                        <div class="parent__name">
                            <div>required</div>
                            <div class="bold"><?echo $ar_res['NAME']?></div>
                        </div>
                    </a>

                <?endif;?>
            </div>

            <div class="product-box__btn"><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">view</a></div>

        </div>

        <div class="product-box__line"></div>

    </div>

<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
<!--

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

</div>-->

</div>
