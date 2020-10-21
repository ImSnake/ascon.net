<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Contacts");

use Bitrix\Main\Page\Asset;

$additional = true;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/company.css');

?>

    <div class="center container">

        <div class="page__header">

            <div class="page__name">
                <h1>Contact us</h1>
            </div>

            <ul class="page__nav">
                <li class="active"><a href="#">Head office</a></li>
                <li><a href="/purchase/">Our Resellers</a></li>
                <!--                <li><a href="#">Аsk a question</a></li>-->
            </ul>

            <img class="page__bkg" src="/local/templates/ascon_eng/images/banner/contacts.png" alt="bkg-contacts">

        </div>

        <div class="main">

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">Contacts</div>
            </div>

            <div class="contacts-box">
                <h3>LLC «ASCON - Design systems»</h3>

                <div class="contacts__title">email</div>
                <div class="contacts__text">contact@ascon.net</div>

                <div class="contacts__title">phone</div>
                <div class="contacts__text">+7 (812) 703-3934</div>

                <div class="contacts__title">address</div>
                <div class="contacts__text">
                    <div>15 Odoevskogo st.</div>
                    <div>199155, Saint Petersburg</div>
                    <div>Russian Federation</div>
                </div>

            </div>


            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">ASK A QUESTION</div>
            </div>

            <div class="question-form">
                <form action="">
                    <div class="contacts__title">Send us a message and we will contact you</div>

                    <div class="question-title">Subject&nbsp;<span class="orange bold">*</span></div>
                    <div class="question-field">
                        <select name="form-subject" id="form-subject">
                            <option value="" selected disabled></option>
                            <option value="kompas">KOMPAS</option>
                            <option value="pilot">Pilot-Ice</option>
                            <option value="renga">Renga</option>
                            <option value="c3dlabs">C3D Labs</option>
                            <option value="other">Other question</option>
                        </select>
                    </div>

                    <div class="question-title">Full name</div>
                    <div class="question-field">
                        <input type="text">
                    </div>

                    <div class="question-title">Company</div>
                    <div class="question-field">
                        <input type="text">
                    </div>

                    <div class="question-title">Website</div>
                    <div class="question-field">
                        <input type="url">
                    </div>

                    <div class="question-title">Phone</div>
                    <div class="question-field">
                        <input type="tel">
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
                </form>
            </div>
        </div>

    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>