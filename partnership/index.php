<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("ASCON Partnership");

use Bitrix\Main\Page\Asset;
$additional = true;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/company.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/pages/company.js');

?>

    <div class="center container">

        <div class="page__header">

            <div class="page__name">
                <h1>Become a partner</h1>
            </div>

            <ul class="page__nav">
                <li class="active"><a href="#partnership">Partner<span>ship</span></a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#conditions">Conditions</a></li>
                <li><a href="#how2start"><span>how to </span>start</a></li>
            </ul>

            <img class="page__bkg" src="/local/templates/ascon_eng/images/banner/partnership.png" alt="bkg-partnership">

        </div>

        <div class="main">

            <div id="partnership" class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">Partnership</div>
            </div>

            <div class="partnership-block">

                <p>ASCON Partners' program gets together high-class value-added resellers, leading software and hardware
                    producers, as well as service companies, professional developers and consultants in order to bring
                    our customers full-functioning, powerful, software- and hardware- compatible high-class solutions at
                    reasonable price.
                </p>

                <h3>Goals and objectives of the Partner Program</h3>

                <p>As a partner-oriented company, our main goal is to provide all of our partners with effective sales
                    and marketing tools in order to aid successful cooperation. We have some objectives to achieve this goal:</p>
                <ul>
                    <li>help partners to differentiate from the competition and identify their company on the market;</li>
                    <li>support partners with reward programs;</li>
                    <li>give additional benefits for business development with ASCON;</li>
                    <li>enhance partners’ technical and sales knowledge.</li>
                </ul>

                <h3>ASCON product range</h3>

                <div class="group stretch-elem">

                    <a href="/products/kompas/" class="product-block">
                        <img class="kompas-img" src="/local/templates/ascon_eng/images/logo/kompas-logo-full.svg" alt="kompas-3d">
                    </a>

                    <a href="/products/renga/" class="product-block">
                        <img class="renga-img" src="/local/templates/ascon_eng/images/logo/renga-logo-full.svg" alt="renga">
                    </a>

                    <a href="/products/pilot/" class="product-block">
                        <img class="pilot-img" src="/local/templates/ascon_eng/images/logo/pilot-logo-full.svg" alt="pilot-ice">
                    </a>

                </div>

                <h3>Partner сategories</h3>

                <p>
                    There are two levels to match the needs, dynamics and capabilities of our partners. Your performance
                    and engagement with ASCON will determine your rewards and support.
                </p>
                <p class="last-part">
                    As a Partner you begin with the starter level — RESELLER.
                    RESELLERS can access ASCON basic benefits and communications.
                    Meeting all of the requirements for the next stage enables partners to apply for the enhanced status
                    and enjoy the associated range of extra opportunities.
                    For more information on the requirements of ASCON Partnership Program, see the tables below.
                </p>

                <div class="group">

                    <div class="status-block">

                        <div class="cover-box_icon">
                            <img src="/local/templates/ascon_eng/images/icon/partner-resseller.svg" alt="reseller">
                        </div>

                        <div>
                            <div class="cover-box_title">Reseller</div>
                            <div class="cover-box_text">1-st level partner</div>
                        </div>

                        <div class="cover-box_logo">
                            <img src="/local/templates/ascon_eng/images/logo/ascon-letter.svg" alt="ascon-letter">
                        </div>

                    </div>

                    <div class="status-block">

                        <div class="cover-box_icon">
                            <img src="/local/templates/ascon_eng/images/icon/partner-reseller-expert.svg"
                                 alt="reseller-expert">
                        </div>

                        <div>
                            <div class="cover-box_title">Reseller Expert</div>
                            <div class="cover-box_text">2-nd level partner</div>
                        </div>

                        <div class="cover-box_logo">
                            <img src="/local/templates/ascon_eng/images/logo/ascon-letter.svg" alt="ascon-letter">
                        </div>

                    </div>
                </div>

            </div>

            <div id="benefits" class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">Benefits</div>
            </div>

            <div class="partnership-block">

                <h3>Partner status opportunities & advantages</h3>

                <div class="table">

                    <div class="heading">
                        <div class="table_option">Option</div>
                        <div class="table_value">Reseller</div>
                        <div class="table_value">Reseller Expert</div>
                    </div>

                    <div class="string">
                        <div class="table_option">Dealer price discount</div>
                        <div class="table_value">up to 30%</div>
                        <div class="table_value">up to 50%</div>
                    </div>

                    <div class="string">
                        <div class="table_option">Free courses & training</div>
                        <div class="table_value"><span class="checked"></span></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Information about partner at www.ascon.net and in marketing material</div>
                        <div class="table_value"><span class="checked"></span></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Partnership Kit</div>
                        <div class="table_value"><span class="checked"></span></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Technical & sales support</div>
                        <div class="table_value"><span class="checked"></span></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Free NFR products</div>
                        <div class="table_value"><span class="checked"></span></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Access to the lead-targeted</div>
                        <div class="table_value"></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Marketing costs return</div>
                        <div class="table_value"></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Payment delay & credit option</div>
                        <div class="table_value"></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                </div>

                <h3>Free Training & Education</h3>
                <p>
                    ASCON pays special attention to professional qualification and employees maturity of the Partner.
                    Regularly we arrange training seminars on ASCON software solutions, sales, marketing and business development for ASCON Partners. </p>


                <div class="table">

                    <div class="heading">
                        <div class="table_option">Option</div>
                        <div class="table_value">Reseller</div>
                        <div class="table_value">Reseller Expert</div>
                    </div>

                    <div class="string">
                        <div class="table_option">KOMPAS-3D, Basic course</div>
                        <div class="table_value"><span class="checked"></span></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Sales,  Marketing  and  Business Development Trainings</div>
                        <div class="table_value"><span class="checked"></span></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">KOMPAS-3D, Extended</div>
                        <div class="table_value"></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                </div>

            </div>

            <div id="conditions" class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">Conditions</div>
            </div>

            <div class="partnership-block">

                <p>
                    The Partner Status to be defined according to Partner experience in the CAD/CAM/PLM market, sales
                    volume of ASCON solutions, shared marketing activities and other requirements are determined, see the tables below.
                </p>
                <p>
                    Later Partner's Status can be changed, based upon meeting the sales plan, marketing activities
                    and partner's competence in ASCON solutions.
                </p>

                <h3>General requirements for all partners</h3>

                <div class="table">

                    <div class="heading">
                        <div class="table_option">condition</div>
                        <div class="table_value">Reseller</div>
                        <div class="table_value">Reseller Expert</div>
                    </div>

                    <div class="string">
                        <div class="table_option">Available registered company, office, phone, website</div>
                        <div class="table_value"><span class="checked"></span></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Signed agreement with ASCON including a list of allowed to sale products</div>
                        <div class="table_value"><span class="checked"></span></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Sale products only within the agreed territory according to the ASCON price policy</div>
                        <div class="table_value"><span class="checked"></span></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Information about ASCON products is placed on a partner website</div>
                        <div class="table_value"><span class="checked"></span></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">One employee certified by allowed to sale ASCON products</div>
                        <div class="table_value"></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Implement yearly sales plan by ASCON products (after 1st year)</div>
                        <div class="table_value"></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Carry out marketing activities planned with ASCON cooperation</div>
                        <div class="table_value"></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                </div>

                <h3>For KOMPAS products</h3>

                <div class="table">

                    <div class="heading">
                        <div class="table_option">condition</div>
                        <div class="table_value">Reseller</div>
                        <div class="table_value">Reseller Expert</div>
                    </div>

                    <div class="string">
                        <div class="table_option">Certification by course “KOMPAS-3D: Basic“</div>
                        <div class="table_value"><span class="checked"></span></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Certification by course “KOMPAS-3D: Extended“</div>
                        <div class="table_value"></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                    <div class="string">
                        <div class="table_option">Technical Support for KOMPAS customers on operated territory</div>
                        <div class="table_value"></div>
                        <div class="table_value"><span class="checked"></span></div>
                    </div>

                </div>

                <h3>Extra options by partner's request</h3>

                <div class="table">

                    <div class="heading">
                        <div class="table_option">Extra option</div>
                        <div class="table_value">Reseller</div>
                        <div class="table_value">Reseller Expert</div>
                    </div>

                    <div class="string">
                        <div class="table_option">Software localization and beta-testing</div>
                        <div class="table_value">upon request</div>
                        <div class="table_value">upon request</div>
                    </div>

                    <div class="string">
                        <div class="table_option">Certified Training Center for ASCON customers</div>
                        <div class="table_value"></div>
                        <div class="table_value">upon request</div>
                    </div>

                </div>

            </div>

            <div id="how2start" class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">BECOME A PARTNER</div>
            </div>

            <div class="partnership-block">

                <div class="group stretch-elem">

                    <div class="step-block">
                        <img src="/local/templates/ascon_eng/images/icon/icon-email.svg" alt="email">
                        <h3>Step 1</h3>
                        <p>Fill out application for a partnership and wait for the answer within 3 days.</p>
                        <div class="btn-orange"><a href="/contacts/#question-form">SEND A REQUEST</a></div>

                    </div>

                    <div class="step-block">
                        <img src="/local/templates/ascon_eng/images/icon/icon-contract.svg" alt="contract">
                        <h3>Step 2</h3>
                        <p>Discuss conditions of your partner agreement (products, shipping, special terms and etc.) with the ASCON representative, then sign the contract.</p>
                    </div>

                    <div class="step-block">
                        <img src="/local/templates/ascon_eng/images/icon/icon-education.svg" alt="education">
                        <h3>Step 3</h3>
                        <p>Pass online courses by allowed to sale ASCON products and post on your website information about offered solutions. </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>