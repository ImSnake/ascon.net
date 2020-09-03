<?
use Bitrix\Main\Page\Asset;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/index.css');
$APPLICATION->SetTitle("ASCON Türkiye");
?>

    <div class="center container">

        <div class="central-banner">

            <img alt="banner" src="/local/templates/ascon_eng/images/banner/banner(1).jpg">

            <div class="banner__content">

                <div class="banner__heading">
                    Özel teklif
                </div>

                <div class="banner__text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, corporis dicta eligendi eum
                        fugiat, labore neque, odio pariatur quisquam quo soluta sunt tenetur ullam.
                    </p>
                </div>

                <div class="banner__btn">
                    <a href="#">Düğme</a>
                </div>

            </div>

            <div class="banner__nav">
                <div class="nav__point active"> </div>
                <div class="nav__point"> </div>
                <div class="nav__point"> </div>
            </div>

        </div>

        <div class="main">

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text"> en iyi ürün </div>
            </div>

            <div class="product-box left">

                <div class="product__img">
                    <img alt="kompas-3d" src="/local/templates/ascon_eng/images/products/kompas/kompas-3d.jpg">
                </div>

                <div class="product__content">
                    <div class="content__heading">
                        <span class="logo-kompas"></span>
                        KOMPAS-3D
                    </div>
                    <div class="content__text">
                        <p>
                            Rusya’da, 3D katı modelleme programları arasında en çok tercih edilen KOMPAS-3D, fiyat ve performans açısından ülkemizde CAD kullanıcılarına doğru bir alternatif olacaktır.
                        </p>
                    </div>

                    <div class="product__btn">
                        <a href="/turk/catalog/">İNDİR VE DENE</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>