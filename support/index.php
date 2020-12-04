<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
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
                <!--                <li><a href="#">SUPPORT</a></li>-->
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
                <p>Our on-line E-Learning System allows new users to meet ASCON solutions in self-study mode.</p>
                <a href="https://sdo.ascon.ru/?lang=en" target="_blank">Start training</a>
            </div>

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">frequently&nbsp;asked&nbsp;questions</div>
            </div>
            <div class="support__group">
                <p>Quickly troubleshoot issues by product and version with a comprehensive knowledgebase.</p>
                <a href="https://sd.ascon.ru/otrs/public.pl?Action=PublicFAQExplorer;CategoryID=67" target="_blank">Service
                    Deck</a>

                <p>If you face any problem while using ASCON software or have proposals for software improvement,
                    please,
                    contact your ASCON reseller or ASCON Technical Support Team by ServiceDESK.</p>
            </div>

            <!--            <div class="heading-orange">
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
                        </div>-->

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">get&nbsp;help</div>
            </div>
            <div class="support__group">

                <div class="question-form">
                    <form action="#">
                        <!-- <div class="contacts__title">Send us a message and we will contact you</div>-->

                        <div class="question-title">Subject&nbsp;<span class="orange bold">*</span></div>

                        <div class="question-field">
                            <select name="" id="" required>
                                <option value="" selected disabled></option>
                                <option value="">learn & train</option>
                                <option value="">technical support</option>
                                <option value="">other question</option>
                            </select>
                        </div>

                        <div class="question-title">Product&nbsp;range<span class="orange bold">*</span></div>
                        <div class="question-field">
                            <select name="" id="" required>
                                <option value="" selected disabled></option>
                                <option value="">KOMPAS</option>
                                <option value="">Pilot</option>
                                <option value="">Renga</option>
                                <option value="">C3D Labs</option>
                                <option value="">other product</option>
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
                            <textarea required></textarea>
                        </div>

                        <div class="question-checkbox">
                            <input id="question__policy" type="checkbox" required>
                            <label for="question__policy" class="question-title">&nbsp;I&nbsp;accept <a href="/privacy-policy/">Privacy policy</a></label>
                        </div>
                        
                        <button type="submit" class="btn-orange"><span>SEND</span></button>

                    </form>
                </div>
            </div>
        </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>