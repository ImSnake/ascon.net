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

//d($arResult);
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

                    <div class="partner__country"><?=$arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_COUNTRY"]["DISPLAY_VALUE"]?></div>

                    <div class="partner__logo">
                        <? if (count($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_LOGO"]) > 0): ?>
                            <img src="<?=$arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_LOGO"]["FILE_VALUE"]["SRC"]?>"
                            <? else: ?>
                            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                <? endif; ?>
                             alt="<?=$arItem["NAME"]?>">
                    </div>

                </div>

                <div class="partner__content">

                    <div class="partner__name"><?=$arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_NAME"]["DISPLAY_VALUE"]?></div>

                    <div class="group">
                        <div class="content__block">
                            <div class="icon-address"></div>
                            <div class="partner__text link hide-element">
                                <?=$arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_WEBSITE"]["DISPLAY_VALUE"]?>
                            </div>
                        </div>

                        <div class="content__block">
                            <div class="icon-phone"></div>
                            <div class="partner__text hide-element">
                                <? if (is_array($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_PHONE"]["DISPLAY_VALUE"])): ?>
                                    <? foreach ($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_PHONE"]["DISPLAY_VALUE"] as $elem): ?>
                                        <a class="multi-phone" href="tel:<?=$arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_PHONE"]["DISPLAY_VALUE"]?>"><?=$elem?></a>
                                    <? endforeach; ?>
                                <? else: ?>
                                    <a href="tel:<?=$arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_PHONE"]["DISPLAY_VALUE"]?>"><?=$arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_PHONE"]["DISPLAY_VALUE"]?></a>
                                <? endif ?>
                            </div>
                        </div>

                        <div class="content__block">
                            <div class="icon-mail"></div>
                            <div class="partner__text hide-element">
                                <? if (is_array($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_EMAIL"]["DISPLAY_VALUE"])): ?>
                                    <? foreach ($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_EMAIL"]["DISPLAY_VALUE"] as $elem): ?>
                                        <a class="protect multi-mail" href="mailto:<?=$arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_EMAIL"]["DISPLAY_VALUE"]?>"><?=$elem?></a>
                                    <? endforeach; ?>
                                <? else: ?>
                                    <a class="protect" href="mailto:<?=$arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_EMAIL"]["DISPLAY_VALUE"]?>"><?=$arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_EMAIL"]["DISPLAY_VALUE"]?></a>
                                <? endif ?>
                            </div>
                        </div>
                    </div>
                    <!--<div class="partner__title">website</div> -->
                   <!-- <div class="partner__text link hide-element"><?/*=$arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_WEBSITE"]["DISPLAY_VALUE"]*/?></div>-->

                    <!--<div class="partner__title">phone</div> -->


                </div>

                <div class="partner__bottom">

                    <div class="partner__status">
                        <? if (is_array($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_STATUS"]["DISPLAY_VALUE"])): ?>
                            <? foreach ($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_STATUS"]["DISPLAY_VALUE"] as $elem): ?>
                                <div><?=$elem?></div>
                            <? endforeach; ?>
                        <? else: ?>
                            <div><?=$arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_STATUS"]["DISPLAY_VALUE"]?></div>
                        <? endif ?>
                    </div>

                    <div class="partner__products">
                        <? if (is_array($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_ALLOWED"]["DISPLAY_VALUE"])): ?>
                            <? foreach ($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_ALLOWED"]["DISPLAY_VALUE"] as $elem): ?>
                            <? if (strtolower($elem) == "pilot-ice"): ?>
                                    <span class="logo-<?= substr(strtolower($elem), 0, -4);?>"></span>
                                <? else: ?>
                                    <span class="logo-<?= strtolower($elem);?>"></span>
                                <? endif ?>
                            <? endforeach; ?>
                        <? else: ?>
                            <span class="logo-<?= strtolower($arItem["DISPLAY_PROPERTIES"]["ATT_PARTNER_ALLOWED"]["DISPLAY_VALUE"]);?>"></span>
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

