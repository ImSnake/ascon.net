<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<footer>

    <div class="container">

        <div class="footer__left">

            <div class="footer__logo">
                <div>
                    <span class="logo-ascon"></span>
                </div>
                <div class="group">
                    <div>&copy;&nbsp;ASCON</div>
                    <div>1989 — <?= date("Y") ?></div>
                </div>
            </div>

            <div class="footer__sm-icon">
                <div class="sm-icon"><a href="#"><i class="icon-linkedin"></i></a></div>
                <div class="sm-icon"><a href="https://www.facebook.com/ascon.net/" target="_blank"><i
                                class="icon-facebook"></i></a></div>
                <div class="sm-icon"><a href="#"><i class="icon-youtube-play"></i></a></div>
            </div>

        </div>

        <div class="footer__right">
            
            <div class="footer_column">
                <div class="footer__heading">ASCON</div>
                <ul>
                    <li><a href="/company/">About</a></li>
                    <li><a href="/contacts/">Contacts</a></li>
                    <li><a href="/partnership/">Partnership</a></li>
                </ul>
            </div>
            <div class="footer_column">
                <div class="footer__heading">PRODUCTS</div>
                <ul>
                    <li><a href="https://kompas.ru/" target="_blank">KOMPAS</a></li>
                    <li><a href="https://pilotems.com/en/" target="_blank">Pilot-ICE</a></li>
                    <li><a href="https://rengabim.com/en/" target="_blank">Renga</a></li>
                    <li><a href="https://c3dlabs.com/en/" target="_blank">C3D Labs</a></li>
                </ul>
            </div>
            <div class="footer_column">
                <div class="footer__heading">OTHER</div>
                <ul>
                    <li><a href="/blog/">Blog</a></li>
                    <li><a href="/events/">Events</a></li>
                    <!--                <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>-->
                </ul>
            </div>
        </div>
    </div>
    <!--form template-->
    <div id='try-now-form' class="body-disable hide-element">
        <div class="container">
            <div class="popup-window">
                <span class="close-elem"></span>
                <h3>TEST DRIVE ASCON PRODUCTS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, corporis dicta eligendi eum fugiat,
                    labore
                    neque, odio pariatur quisquam quo soluta sunt tenetur ullam. Commodi ipsa odit quaerat quia
                    tempora.</p>
                <form action="#">

                    <h4>Which product would you like to try?</h4>
                    <div><input id="1" type="checkbox"><label for="1">KOMPAS</label></div>
                    <div><input id="2" type="checkbox"><label for="2">Pilot-ICE</label></div>
                    <div><input id="3" type="checkbox"><label for="3">renga</label></div>
                    <div><input id="4" type="checkbox"><label for="4">c3d-labs</label></div>

                    <h4>Purpose for using</h4>
                    <div>
                        <select>
                            <option value="" selected disabled>select</option>
                            <option value="1">work</option>
                            <option value="2">home</option>
                            <option value="3">business</option>
                        </select>
                    </div>

                    <h4>Select your country</h4>
                    <div>
                        <select>
                            <option value="" selected disabled>select</option>
                            <option value="1">German</option>
                            <option value="2">Spain</option>
                            <option value="3">Sweden</option>
                        </select>
                    </div>

                    <h4>Email to get download link</h4>
                    <div><input type="email" placeholder="user@domen.com"></div>

                    <div class="btn-orange"><a href="#">download&nbsp;free&nbsp;trial</a></div>

                </form>
            </div>
        </div>
    </div>

</footer>

</body>
</html>