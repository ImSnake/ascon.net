<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Support");

use Bitrix\Main\Page\Asset;
$additional = true;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/company.css');
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/pages/blog.js');
?>

    <div class="center container">
        <div class="page__header">
            <div class="page__name">
                <h1>CUSTOMER SUPPORT</h1>
            </div>
            <ul class="page__nav">
                <li class="active"><a href="#">LEARN&nbsp;&&nbsp;TRAIN</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">SUPPORT</a></li>
                <li><a href="#">GET&nbsp;HELP</a></li>
            </ul>
            <img alt="bkg-purchase" src="/local/templates/ascon_eng/images/banner/support.jpg" class="page__bkg">
        </div>
        <div class="main">

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">learn&nbsp;&&nbsp;train</div>
            </div>
            <div class="support__group">

            </div>

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">frequently&nbsp;asked&nbsp;questions</div>
            </div>
            <div class="support__group"></div>

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">technical&nbsp;support</div>
            </div>
            <div class="support__group">
                <p>If you face any problem while using ASCON software or have proposals for software improvement, please,
                    contact your ASCON reseller or ASCON Technical Support Team by ServiceDESK.</p>
                <p>Before making support-request, please:</p>
                <ul>
                    <li>see software manual(s)</li>
                    <li>use application Help menu</li>
                </ul>
            </div>

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">get&nbsp;help</div>
            </div>
            <div class="support__group">
                <div class="question-form">

                    <div class="contacts__title">Send us a message and we will contact you</div>

                    <div class="question-title">Subject&nbsp;<span class="orange bold">*</span></div>
                    <div class="question-field">
                        <select name="" id="">
                            <option value="" selected disabled></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="question-title">Name</div>
                    <div class="question-field">
                        <input type="text">
                    </div>

                    <div class="question-title">Email&nbsp;<span class="orange bold">*</span></div>
                    <div class="question-field">
                        <input type="email" required>
                    </div>

                    <div class="question-title">Your question&nbsp;<span class="orange bold">*</span></div>
                    <div class="question-field">
                        <textarea></textarea>
                    </div>

                    <button type="submit" class="btn-blue"><span>SEND</span></button>

                </div>
            </div>
        </div>

    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>