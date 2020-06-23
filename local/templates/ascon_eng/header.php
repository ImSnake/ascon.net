<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>



	<?
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;

    //STRING
    Asset::getInstance()->addString("<meta charset='UTF-8'>");
    Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='ie=edge'>");
    Asset::getInstance()->addString("<link rel='icon' href='/favicon.ico' type='image/x-icon'>");
    Asset::getInstance()->addString("<link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'>");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no'/>");
    Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>");

    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/reset.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/fonts/fonts.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/web-icons/fontello/css/fontello.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/base/base.css');

    //Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/index.css');
    //if ( $APPLICATION ->GetCurPage() ==  '/' )  $APPLICATION ->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/styles/pages/index.css');
    //if ( $APPLICATION ->GetCurPage() ==  '/company/' )  $APPLICATION ->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/styles/pages/company.css' );

    // JS
    CJSCore::Init(array("jquery"));
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery/jq.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/main.js');

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
                <a href="/"><span class="logo-ascon-mobile"></span></a>
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

                <li id="menu-2" class="menu__main">Products<span class="down-arrow"></span>

                    <ul id="menu-3" class="menu__drop-down">

                        <li class="drop-down__item"><span class="down-arrow"></span>by industry

                            <ul class="item__list hide-element">

                                <li class="drop-down__sub-item">Mechanical Engineering&nbsp;›

                                    <ul class="drop-down__sub-menu hide-element">
                                        <li class="menu-item"><a href="/catalog/">Data manage, revision &
                                                collaboration</a></li>
                                        <li class="menu-item"><a href="/catalog/">Electrical design</a></li>
                                        <li class="menu-item"><a href="/catalog/">Manufacturing Design</a></li>
                                        <li class="menu-item"><a href="/catalog/">Mechanical design</a></li>
                                    </ul>
                                </li>

                                <li class="drop-down__sub-item">Building & Construction&nbsp;›
                                    <ul class="drop-down__sub-menu hide-element">
                                        <li class="menu-item"><a href="/catalog/">Building Information Modeling</a></li>
                                        <li class="menu-item"><a href="/catalog/">Collaborative project delivery</a></li>
                                        <li class="menu-item"><a href="/catalog/">Industrial Equipment Manufacturing</a></li>
                                        <li class="menu-item"><a href="/catalog/">mep engineering</a></li>
                                        <li class="menu-item"><a href="/catalog/">Steel Structures Design</a></li>
                                    </ul>
                                </li>

                                <li class="drop-down__sub-item">Software Development&nbsp;›
                                    <ul class="drop-down__sub-menu hide-element">
                                        <li class="menu-item"><a href="/catalog/">Software&nbsp;Development</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="drop-down__item"><span class="down-arrow"></span>by category

                            <ul class="item__list hide-element">
                                <li class="menu-item"><a href="/catalog/">3D CAD</a></li>
                                <li class="menu-item"><a href="/catalog/">2D CAD</a></li>
                                <li class="menu-item"><a href="/catalog/">BIM</a></li>
                                <li class="menu-item"><a href="/catalog/">CAM</a></li>
                                <li class="menu-item"><a href="/catalog/">CAE</a></li>
                                <li class="menu-item"><a href="/catalog/">Collaboration</a></li>
                                <li class="menu-item"><a href="/catalog/">Visualization & Simulation</a></li>
                            </ul>
                        </li>

                        <li class="drop-down__item"><span class="down-arrow"></span>by license

                            <ul class="item__list hide-element">
                                <li class="menu-item"><a href="/catalog/">Business</a></li>
                                <li class="menu-item"><a href="/catalog/">Home</a></li>
                                <li class="menu-item"><a href="/catalog/">Education</a></li>
                                <li class="menu-item"><a href="/catalog/">Free</a></li>
                            </ul>
                        </li>

                        <li class="drop-down__item"><span class="down-arrow"></span>by brand

                            <ul class="item__list hide-element">
                                <li class="menu-item"><a href="/catalog/">KOMPAS</a></li>
                                <li class="menu-item"><a href="/catalog/">Pilot-ICE</a></li>
                                <li class="menu-item"><a href="/catalog/">renga</a></li>
                                <li class="menu-item"><a href="/catalog/">C3D labs</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu__main"><a href="/support/">Support</a></li>

                <li class="menu__main"><a href="/purchase/">Purchase</a></li>

            </ul>

        </div>

    </div>

    <div class="container sub-header">

        <div class="sub-header__left">

            <a href="/"><span class="logo-ascon-desktop"></span></a>

            <div>
                <div><span>Design with ASCON Solutions:</span></div>
                <div>Powerful Functionality •&nbsp;Easy-Learning •&nbsp;Cost-Effective</div>
            </div>

        </div>

        <div class="sub-header__right">
            <div id="try-now-btn" class="btn-orange"><a href="#">try&nbsp;now</a></div>
        </div>

    </div>

</header>


	