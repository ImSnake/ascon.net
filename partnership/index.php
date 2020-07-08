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
                <li><a href="#">Benefits</a></li>
                <li><a href="#">Conditions</a></li>
                <li><a href="#">BECOME A PARTNER</a></li>
            </ul>

            <img class="page__bkg" src="/local/templates/ascon_eng/images/banner/partnership.png" alt="bkg-partnership">

        </div>

        <div class="main">

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">Partnership</div>
            </div>

            <div class="partnership-block">

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.</p>

                <h3>Ascon product rage</h3>

                <div class="group stretch-blocks">

                    <div class="cover-box product-block">
                        <img src="/local/templates/ascon_eng/images/logo/kompas-logo-full.svg" alt="kompas-3d">
                    </div>

                    <div class="cover-box product-block">
                        <img src="/local/templates/ascon_eng/images/logo/renga-logo-full.svg" alt="renga">
                    </div>

                    <div class="cover-box product-block">
                        <img src="/local/templates/ascon_eng/images/logo/pilot-logo-full.svg" alt="pilot-ice">
                    </div>

                </div>

                <h3>Partner сategories</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="last-part">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud.</p>

                <div class="group">

                    <div class="cover-box first-block">

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

                    <div class="cover-box">

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

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">Benefits</div>
            </div>

            <div class="partnership-block">

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.</p>

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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.</p>


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

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">Conditions</div>
            </div>

            <div class="partnership-block">

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in repre</p>

                <h3>general requirements for all partners</h3>

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

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">BECOME A PARTNER</div>
            </div>

            <div class="partnership-block">

                <div class="group stretch-blocks">

                    <div class="step-block">
                        <img src="/local/templates/ascon_eng/images/icon/icon-email.svg" alt="email">
                        <h3>Step 1</h3>
                        <p>Fill out application for a partnership and wait for the answer within 3 days.</p>
                        <div class="btn-orange"><a href="#">SEND A REQUEST</a></div>

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