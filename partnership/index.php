<?
use Bitrix\Main\Page\Asset;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/company.css');
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/pages/company.js');
$APPLICATION->SetTitle("Partnership");
?>

    <div class="center container">

        <div class="page__header">

            <div class="page__name">
                <h1>Become a partner</h1>
            </div>

            <ul class="page__nav">
                <li class="active"><a href="#">Partnership</a></li>
                <li><a href="#">KOMPAS</a></li>
                <li><a href="#">PILOT</a></li>
                <li><a href="#">Request form</a></li>
            </ul>

            <img class="page__bkg" src="/local/templates/ascon_eng/images/banner/partnership.png" alt="bkg-partnership">

        </div>

        <div class="main">

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">Partnership</div>
            </div>

        </div>

    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>