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


<?
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;




$hlblock = HL\HighloadBlockTable::getById(5)->fetch();
$hlEntity = HL\HighloadBlockTable::compileEntity($hlblock);
$entDataClass = $hlEntity->getDataClass();
$sTableID = 'tbl_'.$hlblock['TABLE_NAME'];

$arFilter = array("!UF_COUNTRY_NAME" => NULL); //задаете фильтр по вашим полям

$rsData = $entDataClass::getList(array(
    "select" => array('*'), //выбираем все поля
    "filter" => $arFilter,
    "limit" => 5000000,
    "order" => array("UF_COUNTRY_NAME"=>"ASC") // сортировка по полю UF_SORT, будет работать только, если вы завели такое поле в hl'блоке
));

$rsData = new CDBResult($rsData, $sTableID);

$arr= array(
    "REFERENCE" => // массив заголовков элементов
        array(),
    "REFERENCE_ID" => // массив значений элементов
        array()
);

while ($arRes = $rsData->Fetch()) {
    //echo $arRes['UF_COUNTRY_NAME'] . "<br/>";
    array_push($arr["REFERENCE"], $arRes['UF_COUNTRY_NAME']);
    array_push($arr["REFERENCE_ID"], $arRes['UF_COUNTRY_NAME']);
}
//echo SelectBoxFromArray($arItem["INPUT_NAME"], $arr, $arItem["INPUT_NAME"], "", "", true, "form2");

//$arr = array(
//    "REFERENCE" => // массив заголовков элементов
//        array("Вариант 1", "Вариант 2", "Вариант 3"),
//    "REFERENCE_ID" => // массив значений элементов
//        array(1, 2, 3)
//);
//echo SelectBoxFromArray("CHOICE", $arr, $CHOICE, "", "", true, "form2");



//array_push($arResult["PROPERTY_49"]["INPUT"], $arr);
//print_r(array_keys($countryFilter));
//print_r($arResult);
//print_r($arResult["ITEMS"]["HIDDEN"]);

use Bitrix\Main\Diag\Debug;
Debug::dump($arResult["ITEMS"]);
?>


<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get">


    <?foreach($arResult["ITEMS"] as $arItem):
        if(array_key_exists("HIDDEN", $arItem)):
            echo $arItem["INPUT"];
        endif;
    endforeach;?>


	<table class="data-table" cellspacing="0" cellpadding="2">
	<thead>
		<tr>
			<td colspan="2" align="center"><?=GetMessage("IBLOCK_FILTER_TITLE")?></td>
		</tr>
	</thead>
	<tbody>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?if(!array_key_exists("HIDDEN", $arItem)):?>
				<tr>
					<td valign="top"><?=$arItem["NAME"]?>:</td>
					<td valign="top"><?=$arItem["INPUT"]?></td>
				</tr>
                <?echo SelectBoxFromArray($arItem["INPUT_NAME"], $arr, $CHOICE,"", "", "");?>
			<?endif?>
		<?endforeach;?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="2">
				<input type="submit" name="set_filter" value="<?=GetMessage("IBLOCK_SET_FILTER")?>" /><input type="hidden" name="set_filter" value="Y" />&nbsp;&nbsp;<input type="submit" name="del_filter" value="<?=GetMessage("IBLOCK_DEL_FILTER")?>" /></td>
		</tr>
	</tfoot>
	</table>
</form>
