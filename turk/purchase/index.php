<?
use Bitrix\Main\Page\Asset;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/purchase.css');
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/pages/purchase.js');
$APPLICATION->SetTitle("Satın almak");
?>
    <div class="center container">

        <div class="page__header">
            <div class="page__name">
                <h1>BİZ SİZİ ARAYALIM</h1>
            </div>
<!--            <ul class="page__nav">
                <li class="active"><a href="#">FIND SELLER</a></li>
                <li><a href="#">Submit request</a></li>
            </ul>-->
            <img alt="bkg-purchase" src="/local/templates/ascon_eng/images/banner/purchase.jpg" class="page__bkg">
        </div>

        <div class="main">
            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">Satın almak</div>
            </div>
        </div>

    </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>