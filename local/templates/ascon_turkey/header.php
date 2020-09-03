<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>
    <?
    $APPLICATION->ShowHead();
    //META
    $APPLICATION->AddHeadString("<meta http-equiv='X-UA-Compatible' content='ie=edge'>", true);
    $APPLICATION->AddHeadString("<link rel='icon' href='/favicon.ico' type='image/x-icon'>", true);
    $APPLICATION->AddHeadString("<link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'>", true);
    $APPLICATION->AddHeadString("<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no'/>", true);
    //$APPLICATION->AddHeadString("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>", true);
    //CSS
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/styles/reset.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/styles/fonts/fonts.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/styles/web-icons/fontello/css/fontello.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/js/fancybox/dist/jquery.fancybox.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/styles/base/base.css');
    // JS
    CJSCore::Init(array("jquery"));
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery/jq.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/fancybox/dist/jquery.fancybox.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/main.js');

    //use Bitrix\Main\Page\Asset;
    //$additional = true;
    //Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/index.css');
    //if ( $APPLICATION ->GetCurPage() ==  '/' )  $APPLICATION ->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/styles/pages/index.css');
    //if ( $APPLICATION ->GetCurPage() ==  '/company/' )  $APPLICATION ->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/styles/pages/company.css' );
 ?>

	<title><?$APPLICATION->ShowTitle()?></title>

<!--	<script type='application/ld+json'>
        {"@context":"http://schema.org","@type":"WebSite","@id":"#website","url":"http://SITE.ru/","name":"Название - Описание","potentialAction":{"@type":"SearchAction","target":"http://SITE.ru/search/index.php","query-input":"required name=search_term_string"}}
    </script>

    <script type='application/ld+json'>
        {"@context":"http://schema.org","@type":"Organization","url":"http://SITE.ru/","sameAs":[],"@id":"#organization","name":"Домен - Описание","logo":"http://SITE.ru/полный_путь_к_логотипу.png"}
    </script>-->

</head>
<body>
<?$APPLICATION->ShowPanel();?>

<header>

    <div class="header__bkg">

        <div class="container header__content">

            <div class="mobile__logo">
                <a href="/turk/"><span class="logo-ascon-mobile"></span></a>
            </div>

            <div id="mobile-open" class="menu-burger">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div id="mobile-close" class="mobile-close hide-element">
                <span class="close-elem"></span>
            </div>

            <ul id="menu-1" class="header__menu">

                <li id="menu-2" class="menu__main">Yazilim ürünleri̇mi̇z<span class="down-arrow"></span>

                    <ul id="menu-3" class="menu__drop-down">

                        <li class="drop-down__item"><span class="down-arrow"></span>by industry

                            <ul class="item__list hide-element">

                                <li class="drop-down__sub-item">Mechanical Engineering&nbsp;›

                                    <ul class="drop-down__sub-menu hide-element">
                                        <li class="menu-item"><a href="/turk/products/">Data manage, revision &
                                                collaboration</a></li>
                                        <li class="menu-item"><a href="/turk/products/">Electrical design</a></li>
                                        <li class="menu-item"><a href="/turk/products/">Manufacturing Design</a></li>
                                        <li class="menu-item"><a href="/turk/products/">Mechanical design</a></li>
                                    </ul>
                                </li>

                                <li class="drop-down__sub-item">Building & Construction&nbsp;›
                                    <ul class="drop-down__sub-menu hide-element">
                                        <li class="menu-item"><a href="/turk/products/">Building Information Modeling</a></li>
                                        <li class="menu-item"><a href="/turk/products/">Collaborative project delivery</a></li>
                                        <li class="menu-item"><a href="/turk/products/">Industrial Equipment Manufacturing</a></li>
                                        <li class="menu-item"><a href="/turk/products/">mep engineering</a></li>
                                        <li class="menu-item"><a href="/turk/products/">Steel Structures Design</a></li>
                                    </ul>
                                </li>
<!--                                <li class="drop-down__sub-item">Software Development&nbsp;›
                                    <ul class="drop-down__sub-menu hide-element">
                                        <li class="menu-item"><a href="/turk/products/">Software&nbsp;Development</a></li>
                                    </ul>
                                </li>-->
                            </ul>
                        </li>

                        <li class="drop-down__item"><span class="down-arrow"></span>by category

                            <ul class="item__list hide-element">
                                <li class="menu-item"><a href="/turk/products/">3D CAD</a></li>
                                <li class="menu-item"><a href="/turk/products/">2D CAD</a></li>
                                <li class="menu-item"><a href="/turk/products/">BIM</a></li>
                                <li class="menu-item"><a href="/turk/products/">CAM</a></li>
                                <li class="menu-item"><a href="/turk/products/">CAE</a></li>
                                <li class="menu-item"><a href="/turk/products/">Collaboration</a></li>
                                <li class="menu-item"><a href="/turk/products/">Visualization & Simulation</a></li>
                            </ul>
                        </li>

                        <li class="drop-down__item"><span class="down-arrow"></span>by license

                            <ul class="item__list hide-element">
                                <li class="menu-item"><a href="/turk/products/">Business</a></li>
                                <li class="menu-item"><a href="/turk/products/">Home</a></li>
                                <li class="menu-item"><a href="/turk/products/">Education</a></li>
                                <li class="menu-item"><a href="/turk/products/">Free</a></li>
                            </ul>
                        </li>

                        <li class="drop-down__item"><span class="down-arrow"></span>by brand

                            <ul class="item__list hide-element">
                                <li class="menu-item"><a href="/turk/products/">KOMPAS</a></li>
   <!--                             <li class="menu-item"><a href="/turk/products/">Pilot-ICE</a></li>
                                <li class="menu-item"><a href="/turk/products/">renga</a></li>
                                <li class="menu-item"><a href="/turk/products/">C3D labs</a></li>-->
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu__main"><a href="/turk/support/">Tekni̇k destek</a></li>

                <li class="menu__main"><a href="/turk/purchase/">Satın almak</a></li>

            </ul>

        </div>

    </div>

    <div class="container sub-header">

        <div class="sub-header__left">

            <a href="/turk/"><span class="logo-ascon-desktop"></span></a>

            <div>
                <div><span>ARTIK TÜRKİYE’DE</span></div>
                <div>YENİ, HIZLI VE GÜÇLÜ BİR CAD SİSTEMİ</div>
            </div>

        </div>

        <div class="sub-header__right">

            <div class="language">

                <div class="language__icon">TR<span class="down-arrow"></span></div>

<!--                <div class="language__current">EN<span class="down-arrow"></span></div>-->

                <div class="language__change hide-element">

                    <div class="close-elem"></div>

                    <ul>
                        <li class="current"><a href="/">english</a></li>
                        <li><a href="/turk/">Türk</a></li>
                        <li><a href="https://ascon.ru/">русский</a></li>
                    </ul>
                    
                </div>

            </div>

            <div id="try-now-btn" class="btn-orange"><a href="#">İNDİR&nbsp;VE&nbsp;DENE</a></div>

        </div>

    </div>

</header>


	