<?
use Bitrix\Main\Page\Asset;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/company.css');
$APPLICATION->SetTitle("Contacts");
?>

    <div class="center container">

        <div class="page__header">

            <div class="page__name">
                <h1>Contact us</h1>
            </div>

            <ul class="page__nav">
                <li class="active"><a href="#">Head office</a></li>
                <li><a href="/purchase/">Our Resellers</a></li>
                <li><a href="#">Аsk a question</a></li>
            </ul>

            <img class="page__bkg" src="/local/templates/ascon_eng/images/banner/contacts.png" alt="bkg-contacts">

        </div>

        <div class="main">
            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">Contacts</div>
            </div>
        </div>

    </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>