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

<div class="article__group">

    <div class="group">

        <div class="article__title">
            <span class="bold-middle"><?echo $arResult["DISPLAY_PROPERTIES"]["ATT_ARTICLE_TYPE"]["DISPLAY_VALUE"]?></span>
            <span class="shahs"><?echo $arResult["DISPLAY_ACTIVE_FROM"]?></span>
        </div>

        <h2 class="article__name"><?echo $arResult["NAME"]?></h2>

        <div class="article__content">
            <?echo $arResult["DETAIL_TEXT"]?>
        </div>

        <?if (count($arResult["DISPLAY_PROPERTIES"]["ATT_ARTICLE_AUTHOR"]) > 0):?>
            <div class="content-creator">
                <div class="content-creator_img">
                    <img src="<?echo $arResult["DISPLAY_PROPERTIES"]["ATT_ARTICLE_AUTHOR_IMG"]["FILE_VALUE"]["SRC"]?>">
                </div>
                <div class="content-creator_name"><?echo $arResult["DISPLAY_PROPERTIES"]["ATT_ARTICLE_AUTHOR"]["DISPLAY_VALUE"]?></div>
            </div>
        <?endif?>

        <?if (count($arResult["DISPLAY_PROPERTIES"]["ATT_ARTICLE_SOURCE"]) > 0):?>
            <div class="content-source">
                <a href="<?echo $arResult["DISPLAY_PROPERTIES"]["ATT_ARTICLE_SOURCE"]["VALUE"]?>" target="_blank">Source</a>
            </div>
        <?endif?>

    </div>

    <!--    <div class="action-box">
            <h4>DO SOME ACTION</h4>
            <p>The easy-to-learn and use features of KOMPAS-3D provides a unique experience for beginners in
                computer-aided drafting and modelling</p>
            <div class="btn-blue"><a href="#">SOME ACTION</a></div>
        </div>-->
</div>