<?

use Bitrix\Main\Page\Asset;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles/pages/product.css');
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/pages/blog.js');
$APPLICATION->SetTitle("Products");
?>
<div class="center container">

    <div class="product__header">

        <img class="product__bkg" src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-bkg.png"
             alt="kompas-3d-bkg">

        <div class="product__breadcrumbs">
            <a href="#">Products<span class="right-arrow"></a>
            <a href="#">KOMPAS<span class="right-arrow"></a>
            <span class="light-grey">KOMPAS-3D</span>
        </div>

        <div class="product__name">
            <div class="logo-kompas"></div>
            <h1>KOMPAS-3D</h1>
        </div>

    </div>

    <ul class="product__nav">
        <li class="active"><a href="#description">description</a></li>
        <li><a href="#features">features and benefits</a></li>
        <li><a href="#specification">Specification</a></li>
        <li><a href="#gallery">gallery</a></li>
        <li><a href="#add-on">add-on packages</a></li>
    </ul>

    <div class="product__main">

        <div class="product__content">

            <div>
                <div id="description" class="product__section">

                    <div class="heading-orange">
                        <div class="heading__arrow"></div>
                        <div class="heading__text">description</div>
                    </div>

                    <p>Mechanical CAD solution for parametrically designing parts and assemblies as 3D solid models.
                        Designers
                        use KOMPAS-3D to develop effective industrial products, and to generate design and drafting
                        documentation.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id est
                        laborum.</p>
                    <p>KOMPAS-3D is a flexible 3D modeling system that allows you to create models by several methods,
                        including
                        the following ones:
                        <br>• Bottom-up modeling using finished components.
                        <br>• Top-down modeling by designing components to match specific designs.
                        <br>• Modeling based on layout drawings, such as kinematic diagrams.
                        <br>• Or any combination of these modeling methods.
                        <br>• These approaches allow you to create editable associative models easily.</p>

                    <img src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-1.jpg" alt="kompas-3d">

                </div>

                <div id="features" class="product__section">
                    <div class="heading-orange">
                        <div class="heading__arrow"></div>
                        <div class="heading__text">Key features and benefits</div>
                    </div>

                    <div class="group">
                        <h3>Interface</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                            esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                            in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>The easy-to-learn and use features of KOMPAS-3D provides a unique experience for beginners in
                            computer-aided drafting and modelling.</p>
                        <p>Designers work quickly and comfortably with its convenient and intuitive interface</p>
                        <img src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-2.jpg" alt="kompas-3d">
                    </div>

                    <div class="group">
                        <h3>Mathematical Core</h3>
                        <p>The easy-to-learn and use features of KOMPAS-3D provides a unique experience for beginners in
                            computer-aided drafting and modelling. Designers work quickly and comfortably with its
                            convenient
                            and
                            intuitive interface:</p>
                        <p>• The mathematical core of KOMPAS-3D is developed completely by ASCON in-house programmers
                            <br>• The core of KOMPAS-3D uses no libraries or other elements from any other developers
                            <br>• The core of KOMPAS-3D was developed with С++ in Microsoft Visual Studio</p>
                        <img src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-3.jpg" alt="kompas-3d">
                    </div>

                    <div class="group">
                        <h3>Powerful 3D Modelling</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et
                            dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt
                            mollit anim id est laborum.</p>
                        <p>All needed solid modeling functions in KOMPAS-3D for 3D mechanical design: <br>
                            <br>• Powerful sketching mode
                            <br>• Common geometric functions
                            Extrusion, cut, revolve, loft, sweep, and more
                            Structural elements, such as chamfers, fillets, holes, stiffness elements, thin-walled
                            shells and
                            more
                            <br>• Boolean operations
                            <br>• 3D patterning
                            <br>• And more</p>
                        <img src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-4.jpg" alt="kompas-3d">
                    </div>

                    <div class="group">
                        <h3>Powerful Sheet Metal Functions</h3>
                        <p>KOMPAS-3D rich collection of sheet metal modeling functions include bends, holes, louvers,
                            fillets,
                            punching (stamping), cuts, and cap closing of sheet metal bodies. </p>
                        <p>When the electro-mechanical designer is finished, KOMPAS-3D unwraps the sheet metal model,
                            creating
                            associative drawings of the unwrapped design.</p>
                        <img src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-5.jpg" alt="kompas-3d">
                    </div>

                    <div class="group">
                        <h3>Advanced Surface Modelling</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et
                            dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt
                            mollit anim id est laborum.</p>
                        <p>Advanced surface modelling: <br>
                            <br>• Powerful tools for 3D sketching
                            <br>• Complex 3D curves
                            <br>• Advanced surface features</p>
                    </div>

                    <div class="group"><h3>Collaboration</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut
                            aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim id est laborum.</p>
                        <img src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-6.jpg" alt="kompas-3d">
                    </div>

                </div>

                <div id="specification" class="product__section">

                    <div class="heading-orange">
                        <div class="heading__arrow"></div>
                        <div class="heading__text">Specification</div>
                    </div>

                    <div class="group">
                        <h3>Contains</h3>
                        <a class="product__link" href="#">
                            <div class="logo-kompas"></div>
                            <span>KOMPAS-2D Grafic</span>
                        </a>
                    </div>

                    <div class="group">
                        <h3>Supported languages</h3>
                        <p>English
                            <br>Turkey
                            <br>Polish
                            <br>German</p>
                    </div>

                    <div class="group">
                        <h3>System Requirements</h3>
                        <p>Windows 10;
                            <br>Windows 8.1;
                            <br>Windows 7 SP1 and higher;
                            <br>Both 32-bit and 64-bit versions of operating systems are supported</p>
                    </div>


                    <div class="group">
                        <h3>Producer</h3>
                        <a href="#"><h4>ASCON LTD</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua.</p>
                    </div>

                </div>
            </div>

            <div class="action-box">
                <h4>FREE 30 DAYS</h4>
                <p>The easy-to-learn and use features of KOMPAS-3D provides a unique experience for beginners in
                    computer-aided drafting and modelling</p>
                <div class="btn-blue"><a href="#">Learn more</a></div>
                <div class="btn-orange"><a href="#">Download</a></div>
            </div>

        </div>

        <div id="gallery" class="product__gallery">
            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">product GALLERY</div>
            </div>

            <div class="group">
                <h3>Screenshots</h3>
                <div class="gallery__content">

                    <div class="gallery__nav">
                        <span class="left-arrow"></span>
                        <span class="right-arrow"></span>
                    </div>

                    <div class="gallery__img"><img
                                src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-gal-mini-1.jpg"
                                alt="kompas-3d"></div>
                    <div class="gallery__img"><img
                                src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-gal-mini-2.jpg"
                                alt="kompas-3d"></div>
                    <div class="gallery__img"><img
                                src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-gal-mini-3.jpg"
                                alt="kompas-3d"></div>
                    <div class="gallery__img"><img
                                src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-gal-mini-4.jpg"
                                alt="kompas-3d"></div>
                </div>
            </div>

            <div class="group">
                <h3>Video</h3>
                <div class="gallery__content">

                    <div class="gallery__nav">
                        <span class="left-arrow"></span>
                        <span class="right-arrow"></span>
                    </div>

                    <div class="gallery__video">
                        <img src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-video-1.jpg"
                             alt="kompas-3d">
                        <h4>3D shafts and mechanical gears. Build a gear shaft</h4>
                    </div>

                    <div class="gallery__video">
                        <img src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-video-2.jpg"
                             alt="kompas-3d">
                        <h4>Build a gear shaft powerful and versatile three-dimensional design system new episode</h4>
                    </div>

                    <div class="gallery__video">
                        <img src="/local/templates/ascon_eng/images/products/kompas/kompas-3d-video-3.jpg"
                             alt="kompas-3d">
                        <h4>XV KOMPAS-3D Modeling Contest. 2017 year</h4>
                    </div>
                </div>
            </div>

            <div class="group">
                <h3>Documents & Articles</h3>
                <div class="gallery__content column">

                    <div class="gallery__nav">
                        <span class="left-arrow"></span>
                        <span class="right-arrow"></span>
                    </div>

                    <div class="gallery__article">
                        <div>
                            <h4>design system new episode</h4>
                            <h5>document source</h5>
                        </div>
                    </div>

                    <div class="gallery__article">
                        <div>
                            <h4>Build a gear shaft powerful and versatile three-dimensional design system new
                                episode</h4>
                            <h5>document source</h5>
                        </div>
                    </div>

                    <div class="gallery__article">
                        <div>
                            <h4>XV KOMPAS-3D Modeling Contest</h4>
                            <h5>document source</h5>
                        </div>
                    </div>

                    <div class="gallery__article">
                        <div>
                            <h4>Quickly creates engineering and design documentation for production output, including
                                assembly drawings</h4>
                            <h5>document source</h5>
                        </div>
                    </div>

                    <div class="gallery__article">
                        <div>
                            <h4>document title</h4>
                            <h5>document source</h5>
                        </div>
                    </div>

                    <div class="gallery__article">
                        <div>
                            <h4>document title</h4>
                            <h5>document source</h5>
                        </div>
                    </div>

                    <div class="gallery__article">
                        <div>
                            <h4>document title</h4>
                            <h5>document source</h5>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div id="add-on">

            <div class="heading-orange">
                <div class="heading__arrow"></div>
                <div class="heading__text">add-on packages</div>
            </div>

            <div class="product__add-on">

                <div class="add-on__box">

                    <div class="group">
                        <span class="logo-kompas"></span>
                        <div>
                            <h5>application</h5>
                            <h4>Steel Structures 3D</h4>
                        </div>
                    </div>

                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris
                            nisi ut aliquip ex ea commodo</p>
                    </div>

                    <div class="product-box__btn"><a href="#">view</a></div>

                </div>

                <div class="add-on__box">

                    <div class="group">
                        <span class="logo-kompas"></span>
                        <div>
                            <h5>application</h5>
                            <h4>Pipelines 3D</h4>
                        </div>
                    </div>

                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="product-box__btn"><a href="#">view</a></div>

                </div>

            </div>

        </div>

    </div>

</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>


&nbsp;







