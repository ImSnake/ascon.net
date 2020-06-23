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
$date_today = date('d/m/Y'); //Текущая дата
$expired = array(); //Массив для просроченных событий
?>

<div class="heading-orange">
    <div class="heading__arrow">
    </div>
    <div class="heading__text">
        Current
    </div>
</div>

<div class="events__group">


<?foreach($arResult["ITEMS"] as $arItem):?>

	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

    $start = $arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_START"]["DISPLAY_VALUE"];
    $date =  ParseDateTime($start, FORMAT_DATETIME);
    $start = $date[DD] . "/" . $date[MM] . "/" . $date[YYYY];

    $finish = $arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_FINISH"]["DISPLAY_VALUE"];
    $date =  ParseDateTime($finish, FORMAT_DATETIME);
    $finish = $date[DD] . "/" . $date[MM] . "/" . $date[YYYY];

    $result = $DB->CompareDates($date_today, $finish); // сравнить текущую дату и дату окончания мероприятия
    if($result != 1):?>

    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">

        <div class="event-box" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

            <div class="event__head">
                <span class="event-category"><?echo $arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_CATEGORY"]["DISPLAY_VALUE"]?></span>
                <span class="event-type"><?echo $arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_TYPE"]["DISPLAY_VALUE"]?></span>
            </div>

            <div class="event-date">
                <i class="icon-clock"></i>
                <div>
                    <?if($start == $finish):?>
                        <div>
                            <?echo $start?>
                        </div>
                    <?else:?>
                        <div>
                            <?echo $start?>
                        </div>
                        <div>
                            <?echo $finish?>
                        </div>
                    <?endif?>
                </div>
            </div>

            <div class="event-name">
                <h2><?echo $arItem["NAME"]?></h2>
                <?echo $arItem["PREVIEW_TEXT"];?>
            </div>

            <div class="event-logo">
                <?if(is_array($arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_BRAND"]["DISPLAY_VALUE"])):?>
                    <?foreach($arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_BRAND"]["DISPLAY_VALUE"] as $elem):?>
                        <span class="logo-<?echo $elem ?>"></span>
                    <?endforeach;?>
                <?else:?>
                    <span class="logo-<?echo $arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_BRAND"]["DISPLAY_VALUE"]?>"></span>
                <?endif?>
            </div>
        </div>
    </a>

    <?else: array_push($expired, $arItem)?>

    <?endif?>

<?endforeach;?>

</div>


<? if(count($expired) > 0): ?>
<div class="heading-orange elem-blur">
    <div class="heading__arrow">
    </div>
    <div class="heading__text">
        FINISHED
    </div>
</div>

<div class="events__group elem-blur">

    <?foreach($expired as $arItem):?>

        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        $start = $arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_START"]["DISPLAY_VALUE"];
        $date =  ParseDateTime($start, FORMAT_DATETIME);
        $start = $date[DD] . "/" . $date[MM] . "/" . $date[YYYY];

        $finish = $arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_FINISH"]["DISPLAY_VALUE"];
        $date =  ParseDateTime($finish, FORMAT_DATETIME);
        $finish = $date[DD] . "/" . $date[MM] . "/" . $date[YYYY];
        ?>

        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">

            <div class="event-box" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

                <div class="event__head">
                    <span class="event-category"><?echo $arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_CATEGORY"]["DISPLAY_VALUE"]?></span>
                    <span class="event-type"><?echo $arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_TYPE"]["DISPLAY_VALUE"]?></span>
                </div>

                <div class="event-date">
                    <i class="icon-clock"></i>
                    <div>
                        <?if($start == $finish):?>
                            <div>
                                <?echo $start?>
                            </div>
                        <?else:?>
                            <div>
                                <?echo $start?>
                            </div>
                            <div>
                                <?echo $finish?>
                            </div>
                        <?endif?>
                    </div>
                </div>

                <div class="event-name">
                    <h2><?echo $arItem["NAME"]?></h2>
                    <?echo $arItem["PREVIEW_TEXT"];?>
                </div>
                 <div class="event-logo">
                     <?if(is_array($arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_BRAND"]["DISPLAY_VALUE"])):?>
                         <?foreach($arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_BRAND"]["DISPLAY_VALUE"] as $elem):?>
                             <span class="logo-<?echo $elem ?>"></span>
                         <?endforeach;?>
                     <?else:?>
                         <span class="logo-<?echo $arItem["DISPLAY_PROPERTIES"]["ATT_EVENT_BRAND"]["DISPLAY_VALUE"]?>"></span>
                     <?endif?>
                 </div>
            </div>
        </a>
    <?endforeach;?>

</div>
<?endif?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>


