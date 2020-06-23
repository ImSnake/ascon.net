<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Type\DateTime;
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

<div class="article__group">

    <div class="group">

        <div class="article__title">
            <span class="bold-middle"><?echo $arResult["DISPLAY_PROPERTIES"]["ATT_EVENT_TYPE"]["DISPLAY_VALUE"]?></span>
            <?if (count($arResult["DISPLAY_PROPERTIES"]["ATT_EVENT_CATEGORY"]) > 0):?>
            <span class="shahs"><?echo $arResult["DISPLAY_PROPERTIES"]["ATT_EVENT_CATEGORY"]["DISPLAY_VALUE"]?></span>
            <?endif?>
        </div>

        <h2 class="article__name"><?echo $arResult["NAME"]?></h2>

        <div class="event-terms">
            <div>
                <span class="terms__title">start</span>
                <span class="terms_date">
                    <?echo FormatDate('j F Y, H:i', MakeTimeStamp($arResult["DISPLAY_PROPERTIES"]["ATT_EVENT_START"]["DISPLAY_VALUE"]))?>
                </span>
            </div>
            <div>
                <span class="terms__title">finish</span>
                <span class="terms_date">
                    <?echo FormatDate('j F Y, H:i', MakeTimeStamp($arResult["DISPLAY_PROPERTIES"]["ATT_EVENT_FINISH"]["DISPLAY_VALUE"]))?>
                </span>
            </div>
        </div>

        <div class="article__content">
            <?echo $arResult["DETAIL_TEXT"]?>
        </div>

    </div>

    <div class="action-box">
        <h4>VISIT EVENT</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi deserunt molestiae ullam vero. Aliquid asperiorese.</p>
        <div class="btn-blue"><a href="#">REGISTRATION</a></div>
    </div>

</div>