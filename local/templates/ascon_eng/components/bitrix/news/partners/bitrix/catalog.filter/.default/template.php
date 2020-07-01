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


<div id="form-partner">

    <form name="<? echo $arResult["FILTER_NAME"] . "_form" ?>" action="<? echo $arResult["FORM_ACTION"] ?>"
          method="get">

        <? foreach ($arResult["ITEMS"] as $arItem):
            if (array_key_exists("HIDDEN", $arItem)):
                echo $arItem["INPUT"];
            endif;
        endforeach; ?>

        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <? if (!array_key_exists("HIDDEN", $arItem)): ?>

                <div class="select-cover" data-attr="<?= $arItem["NAME"] ?>">
                    <?= $arItem["INPUT"] ?>
                </div>

            <? endif ?>
        <? endforeach; ?>

        <button class="narrow-btn" type="submit" name="set_filter" value="<?= GetMessage("IBLOCK_SET_FILTER") ?>">
            show
        </button>
        <input type="hidden" name="set_filter" value="Y"/>&nbsp;&nbsp;
        <button class="narrow-btn" type="submit" name="del_filter" value="<?= GetMessage("IBLOCK_DEL_FILTER") ?>">
            clear
        </button>
    </form>
</div>