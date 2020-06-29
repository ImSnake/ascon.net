<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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


<div class="partner-group">

    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
<!--        <a href="#">-->
            <div class="partner-box">

                <div class="partner__top">

                    <div class="partner__country"><? echo $arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_COUNTRY"]["DISPLAY_VALUE"] ?></div>

                    <div class="partner__logo">
                        <? if (count($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_LOGO"]) > 0): ?>
                            <img src="<?echo $arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_LOGO"]["FILE_VALUE"]["SRC"]?>"
                            <? else: ?>
                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                <? endif; ?>
                             alt="<?echo $arItem["NAME"];?>">
                    </div>

                </div>

                <div class="partner__content">

                    <div class="partner__name"><? echo $arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_NAME"]["DISPLAY_VALUE"] ?></div>

                    <div class="partner__title">website</div>
                    <div class="partner__text link"><? echo $arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_WEBSITE"]["DISPLAY_VALUE"] ?></div>

                    <div class="partner__title">phone</div>
                    <div class="partner__text">
                        <? if (is_array($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_PHONE"]["DISPLAY_VALUE"])): ?>
                            <? foreach ($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_PHONE"]["DISPLAY_VALUE"] as $elem): ?>
                                <span><? echo $elem ?></span>
                            <? endforeach; ?>
                        <? else: ?>
                            <span><? echo $arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_PHONE"]["DISPLAY_VALUE"] ?></span>
                        <? endif ?>
                    </div>
                </div>

                <div class="partner__bottom">

                    <div class="partner__status">
                        <? if (is_array($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_STATUS"]["DISPLAY_VALUE"])): ?>
                            <? foreach ($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_STATUS"]["DISPLAY_VALUE"] as $elem): ?>
                                <div><? echo $elem ?></div>
                            <? endforeach; ?>
                        <? else: ?>
                            <div><? echo $arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_STATUS"]["DISPLAY_VALUE"] ?></div>
                        <? endif ?>
                    </div>

                    <div class="partner__products">
                        <? if (is_array($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_ALLOWED"]["DISPLAY_VALUE"])): ?>
                            <? foreach ($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_ALLOWED"]["DISPLAY_VALUE"] as $elem): ?>
                            <? if (strtolower($elem) == "pilot-ice"): ?>
                                    <span class="logo-<? echo substr(strtolower($elem), 0, -4) ?>"></span>
                                <? else: ?>
                                    <span class="logo-<? echo strtolower($elem) ?>"></span>
                                <? endif ?>
                            <? endforeach; ?>
                        <? else: ?>
                            <span class="logo-<? echo strtolower($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_ALLOWED"]["DISPLAY_VALUE"]) ?>"></span>
                        <? endif ?>
                    </div>

                </div>

            </div>
<!--        </a>-->
    <? endforeach; ?>

</div>

<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <br/><?= $arResult["NAV_STRING"] ?>
<? endif; ?>

