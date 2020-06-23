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

<div class="group__customer">

    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <a href='<?echo $arItem["DISPLAY_PROPERTIES"]["ATT_CUSTOMER_LINK"]["VALUE"]?>' target='_blank'>
            <div class="customer-box">

                <div class="customer-logo">
                    <?if (count($arItem["DISPLAY_PROPERTIES"]["ATT_CUSTOMER_SVG"]) > 0):?>
                        <img src="<?echo $arItem["DISPLAY_PROPERTIES"]["ATT_CUSTOMER_SVG"]["FILE_VALUE"]["SRC"]?>"
                    <?else:?>
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                     <?endif;?>
                             alt="<?echo $arItem["NAME"];?>">
                </div>

                <div class="customer-text">
                    <?echo $arItem["PREVIEW_TEXT"];?>
                </div>

            </div>
        </a>
    <?endforeach;?>

</div>