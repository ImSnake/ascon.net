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


// ======================== установка фильтра для выборки данных из HL-блока для раздела Produser
\Bitrix\Main\Loader::IncludeModule("highloadblock");
$xmlID = $arResult['PROPERTIES']['ATT_PRODUCT_PRODUSER']['VALUE']; // получаем внешний код элемента строки HL, привязанной к ИБ
$tblName = $arResult['PROPERTIES']['ATT_PRODUCT_PRODUSER']['USER_TYPE_SETTINGS']['TABLE_NAME']; // получаем название таблицы
$select = ['UF_LINK']; // получить поле со ссылкой
$filter = ['UF_XML_ID'=>$xmlID];
$limit = 1;

$hlblock = \Bitrix\Highloadblock\HighloadBlockTable::getList(array("filter" => array('TABLE_NAME' => $tblName)))->fetch();
$entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
$Query = new \Bitrix\Main\Entity\Query($entity);
$Query->setSelect($select);
$Query->setFilter($filter);
$Query->setOrder([]);
$Query->setLimit($limit);
$result = $Query->exec();

$hlResult = new \CDBResult($result);
while ($row_requests=$hlResult->Fetch()) {
    $prodLink = $row_requests; // отдает искомое значение в виде массива
}

// ====================== получение названия классов брендом из привязанного к продукту раздела "by Brand"
foreach($arResult['SECTION']['PATH'] as $arItem) {
    if($arItem['IBLOCK_SECTION_ID'] != null) {
        $brand = $arItem['NAME'];
        $logo = strtolower($brand);
        if ($logo == "c3d labs") { $logo = str_replace(' ', '-', $logo); }
        elseif ($logo == "pilot") { $logo = $logo . '-white'; }
    }
}
//d($arResult['PROPERTIES']['ATT_GALLERY_VIDEO']['VALUE']);
//d($arResult["DISPLAY_PROPERTIES"]['ATT_GALLERY_VIDEO']['DISPLAY_VALUE']);
?>


<div class="center container">

    <div class="product__header">
        <?if($arResult["DETAIL_PICTURE"] != null):?>
            <img class="product__bkg" src="<?echo $arResult["DETAIL_PICTURE"]["SRC"] ?>"
             alt="<?echo $brand ?>_top-background"
             title="<?echo $brand ?>_top-background">
        <?endif;?>

        <div class="product__breadcrumbs">

            <a href="/products/">Products<span class="right-arrow"></a>

            <a href="<?echo $arResult['SECTION_URL'] ?>"><?echo $brand?></a>

        </div>

        <div class="product__name">

            <div class="logo-<?echo $logo?>"></div>

            <h1><?echo $arResult["NAME"]?></h1>

        </div>

    </div>

    <ul class="product__nav">
        <li class="active"><a href="#description">description</a></li>

        <?if($arResult['PROPERTIES']['ATT_FEATURES']['VALUE']):?>
            <li><a href="#features">features</a></li>
        <?endif;?>

        <li><a href="#specification">Specification</a></li>

        <?if($arResult['PROPERTIES']['ATT_GALLERY_IMAGE']['VALUE']
            || $arResult["DISPLAY_PROPERTIES"]['ATT_GALLERY_VIDEO']['DISPLAY_VALUE'] != ''
            || $arResult['PROPERTIES']['ATT_GALLERY_DOCS']['VALUE']):?>
            <li><a href="#gallery">gallery</a></li>
        <?endif;?>

        <?if($arResult['PROPERTIES']['ATT_PRODUCT_ADDONS']['VALUE']):?>
            <li><a href="#add-on">add-on packs</a></li>
        <?endif;?>
    </ul>

    <div class="product__main">
        <div class="product__content">
            <div>
                <div id="description" class="product__section">
                    <div class="heading-orange">
                        <div class="heading__arrow"></div>
                        <div class="heading__text">description</div>
                    </div>
                    <?echo $arResult['DISPLAY_PROPERTIES']['ATT_DESCRIPTION']['DISPLAY_VALUE'] ?>
                </div>

                <?if($arResult['PROPERTIES']['ATT_FEATURES']['VALUE']):?>
                    <div id="features" class="product__section">
                    <div class="heading-orange">
                        <div class="heading__arrow"></div>
                        <div class="heading__text">Key features and benefits</div>
                    </div>
                    <?echo $arResult['DISPLAY_PROPERTIES']['ATT_FEATURES']['DISPLAY_VALUE'] ?>
                </div>
                <?endif;?>

                <div id="specification" class="product__section">
                    <div class="heading-orange">
                        <div class="heading__arrow"></div>
                        <div class="heading__text">Specification</div>
                    </div>

                    <?if(is_array($arResult['PROPERTIES']['ATT_PRODUCT_PARTS']['VALUE'])):?>

                        <div class="group contains">
                            <h3>Contains</h3>

                            <?foreach($arResult["PROPERTIES"]['ATT_PRODUCT_PARTS']['VALUE'] as $item):?>
                                <?$res = CIBlockElement::GetByID($item);
                                if($ar_res = $res->GetNextElement()) {
                                    $el = $ar_res->GetFields();
                                    $el["PROPERTIES"] = $ar_res->GetProperties();
                                }
                                $elBrand = strtolower($el['PROPERTIES']['ATT_PRODUCT_PARENT_RAGE']['VALUE']);?>

                                <a class="product__link" href="/products/<?=$elBrand?>/<?=$el['CODE']?>/">
                                    <div class="logo-<?=$elBrand?>"></div>
                                    <h4><?=$el['NAME']?></h4>
                                </a>
                            <?endforeach;?>
                        </div>
                    <?endif;?>

                    <?if($arResult['PROPERTIES']['ATT_PRODUCT_PARENT_LINK']['VALUE']):?>
                        <?$res = CIBlockElement::GetByID($arResult["PROPERTIES"]['ATT_PRODUCT_PARENT_LINK']['VALUE']);
                        if($ar_res = $res->GetNext())?>

                            <div class="group">
                            <h3>Required</h3>
                            <a class="product__link" href="/products/<?echo strtolower($arResult["DISPLAY_PROPERTIES"]['ATT_PRODUCT_PARENT']['DISPLAY_VALUE']) ?>/<?echo($ar_res['CODE'])?>/">
                        <div class="logo-<?echo strtolower($arResult["DISPLAY_PROPERTIES"]['ATT_PRODUCT_PARENT']['DISPLAY_VALUE'])?>"></div>
                        <h4><?echo $ar_res['NAME']?></h4>
                        </a>
                        </div>
                    <?endif;?>

                    <div class="group">
                        <h3>Supported languages</h3>
                        <p class="capitalize">
                        <?if(is_array($arResult["DISPLAY_PROPERTIES"]["ATT_LANGUAGES"]["DISPLAY_VALUE"])):?>
                            <?foreach($arResult["DISPLAY_PROPERTIES"]["ATT_LANGUAGES"]["DISPLAY_VALUE"] as $elem):?>
                               <?echo $elem ?><br>
                            <?endforeach;?>
                        <?else:?>
                            <?echo $arResult["DISPLAY_PROPERTIES"]["ATT_LANGUAGES"]["DISPLAY_VALUE"]?>
                        <?endif;?>
                        </p>
                    </div>

                    <div class="group">
                        <h3>System Requirements</h3>
                        <?echo $arResult['DISPLAY_PROPERTIES']['ATT_SYSTEM_REQUIREMENTS']['DISPLAY_VALUE'] ?>
                    </div>

                    <div class="group">
                        <h3>Producer</h3>
                        <?if(implode('', $prodLink) != ''):?>
                            <a href="<?echo implode('', $prodLink)?>" target="_blank">
                                <h4> <?echo $arResult['DISPLAY_PROPERTIES']['ATT_PRODUCT_PRODUSER']['DISPLAY_VALUE'] ?></h4>
                            </a>
                        <?else:?>
                            <h4><?echo $arResult['DISPLAY_PROPERTIES']['ATT_PRODUCT_PRODUSER']['DISPLAY_VALUE'] ?></h4>
                        <?endif?>
                    </div>

                </div>
            </div>

        <?if($arResult['PROPERTIES']['ATT_ACTION_BAR_TEXT']['VALUE']
            || $arResult['PROPERTIES']['ATT_PRODUCT_HOME_LINK']['VALUE']
            || $arResult['DISPLAY_PROPERTIES']['ATT_PRODUCT_DOWNLOAD_LINK']['DISPLAY_VALUE']):?>

            <div class="action-box">

                <?if($arResult['PROPERTIES']['ATT_ACTION_BAR_TEXT']['VALUE']):?>
                    <?echo $arResult['DISPLAY_PROPERTIES']['ATT_ACTION_BAR_TEXT']['DISPLAY_VALUE'] ?>
                <?endif;?>

                <?if($arResult['PROPERTIES']['ATT_PRODUCT_HOME_LINK']['VALUE']):?>
                    <div class="btn-blue"><a href="<?echo $arResult['PROPERTIES']['ATT_PRODUCT_HOME_LINK']['VALUE']?>" target="_blank">Learn more</a></div>
                <?endif;?>

                <?if($arResult['DISPLAY_PROPERTIES']['ATT_PRODUCT_DOWNLOAD_LINK']['DISPLAY_VALUE']):?>
                    <div class="btn-orange"><a href="#">Download</a></div>
                <?endif;?>

            </div>
        <?endif;?>

        </div>

        <?if($arResult['PROPERTIES']['ATT_GALLERY_IMAGE']['VALUE']
            || $arResult["DISPLAY_PROPERTIES"]['ATT_GALLERY_VIDEO']['DISPLAY_VALUE'] != ''
            || $arResult['PROPERTIES']['ATT_GALLERY_DOCS']['VALUE']):?>

            <div id="gallery" class="product__gallery">
                <div class="heading-orange">
                    <div class="heading__arrow"></div>
                    <div class="heading__text">product GALLERY</div>
                </div>

                <?if($arResult['PROPERTIES']['ATT_GALLERY_IMAGE']['VALUE']):?>
                    <div class="group">
                        <h3>Pictures</h3>
                        <div class="gallery__content">

                            <div class="gallery__nav">
                                <span class="left-arrow"></span>
                                <span class="right-arrow"></span>
                            </div>

                            <?foreach($arResult["PROPERTIES"]['ATT_GALLERY_IMAGE']['VALUE'] as $img):?>

                                <div class="gallery__img hide-element">
                                    <img src="<?echo CFile::GetPath($img)?>" alt="<?echo $arResult['NAME']?>" title="<?echo $arResult['NAME']?>">
                                </div>

                            <?endforeach;?>

                        </div>
                    </div>
                <?endif;?>

                <?if($arResult["DISPLAY_PROPERTIES"]['ATT_GALLERY_VIDEO']['DISPLAY_VALUE'] != ''):?>
                    <div class="group">
                        <h3>Video</h3>
                        <div class="gallery__content">

                            <?if(is_array($arResult["DISPLAY_PROPERTIES"]['ATT_GALLERY_VIDEO']['DISPLAY_VALUE'])):?>
                                <? $arrCount = 0 ?>
                                <?foreach($arResult["DISPLAY_PROPERTIES"]['ATT_GALLERY_VIDEO']['DISPLAY_VALUE'] as $video):?>
                                    <div class="gallery__video">
                                        <?echo $video ?>
                                        <h4><?echo $arResult['DISPLAY_PROPERTIES']['ATT_GALLERY_VIDEO']['VALUE'][$arrCount]['title']?></h4>
                                    </div>
                                <? $arrCount += 1 ?>
                                <?endforeach;?>

                            <?else:?>
                                <div class="gallery__video">
                                    <?echo $arResult["DISPLAY_PROPERTIES"]['ATT_GALLERY_VIDEO']['DISPLAY_VALUE']?>
                                    <h4><?echo $arResult['DISPLAY_PROPERTIES']['ATT_GALLERY_VIDEO']['VALUE'][0]['title']?></h4>
                                </div>
                            <?endif;?>

                        </div>
                    </div>
                <?endif;?>

                <?if($arResult['PROPERTIES']['ATT_GALLERY_DOCS']['VALUE']):?>
                    <div class="group">
                        <h3>Documents & Instructions</h3>

                        <div id='article' class="gallery__content">

                            <?foreach($arResult['PROPERTIES']['ATT_GALLERY_DOCS']['VALUE'] as $doc):?>
                            <? $title = CFile::MakeFileArray($doc); ?>

                                <div class="gallery__article">
                                    <a href="<?echo CFile::GetPath($doc)?>" download>
                                        <div class="download-icon">
                                            <h5>download</h5>
                                            <h4><?echo $title['description']?></h4>
                                        </div>
                                    </a>
                                </div>
                            <?endforeach;?>

                        </div>

                    </div>
                <?endif;?>

            </div>

        <?endif;?>

        <?if($arResult['DISPLAY_PROPERTIES']['ATT_PRODUCT_ADDONS'] != null):?>

            <div id="add-on">

                <div class="heading-orange">
                    <div class="heading__arrow"></div>
                    <div class="heading__text">add-on packages</div>
                </div>

                <div class="product__add-on">

                    <?foreach($arResult["PROPERTIES"]['ATT_PRODUCT_ADDONS']['VALUE'] as $item):?>
                        <?$res = CIBlockElement::GetByID($item);
                            if($ar_res = $res->GetNextElement()) {
                                $el = $ar_res->GetFields();
                                $el["PROPERTIES"] = $ar_res->GetProperties();
                            }
                        $alBrand = strtolower($el['PROPERTIES']['ATT_PRODUCT_PARENT_RAGE']['VALUE']);
                        $elType = strtolower($el['PROPERTIES']['ATT_PRODUCT_TYPE']['VALUE']);?>

                        <div class="add-on__box">

                            <div class="group">
                                <span class="logo-<?echo $alBrand?>"></span>
                                <div>
                                    <h5 class="<?echo $elType?>"><?echo $elType?></h5>
                                    <h4><?echo $el['NAME']?></h4>
                                </div>
                            </div>

                            <div>
                                <?echo $el['PREVIEW_TEXT']?>
                            </div>

                            <div class="product-box__btn">
                                <a href="/products/<?echo $alBrand?>/<?echo $el['CODE']?>/">view</a>
                            </div>

                        </div>
                    <?endforeach;?>

<!--                    <div class="add-on__box">

                        <div class="group">
                            <span class="logo-kompas"></span>
                            <div>
                                <h5>application</h5>
                                <h4>Pipelines 3D</h4>
                            </div>
                        </div>

                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <div class="product-box__btn"><a href="#">view</a></div>

                    </div>-->

                </div>

            </div>
        <?endif;?>
    </div>
</div>
