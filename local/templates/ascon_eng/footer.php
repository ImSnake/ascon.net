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
                <div class="sm-icon"><a href="https://www.linkedin.com/company/ascon_2/" target="_blank">
                        <i class="icon-linkedin"></i></a>
                </div>

                <div class="sm-icon"><a href="https://www.facebook.com/ascon.net/" target="_blank">
                        <i class="icon-facebook"></i></a>
                </div>

                <div class="sm-icon"><a href="https://youtube.com/channel/UCT9-kVZ86voJmjZLhydrJZg" target="_blank">
                        <i class="icon-youtube-play"></i></a>
                </div>
            </div>

        </div>

        <div class="footer__right">

            <div class="footer_column">
                <div class="footer__heading">ASCON</div>
                <ul>
                    <li><a href="/company/">About</a></li>
                    <li><a href="/contacts/">Contacts</a></li>
                    <li><a href="/partnership/">Partnership</a></li>
                    <li><a href="/privacy-policy/">Privacy policy</a></li>
                </ul>
            </div>
            <div class="footer_column">
                <div class="footer__heading">BRANDS</div>
                <ul>
                    <li><a href="https://kompas.ru/" target="_blank">KOMPAS</a></li>
                    <li><a href="https://pilotems.com/en/" target="_blank">Pilot</a></li>
                    <li><a href="https://rengabim.com/en/" target="_blank">Renga</a></li>
                    <li><a href="https://c3dlabs.com/en/" target="_blank">C3D Labs</a></li>
                </ul>
            </div>
            <div class="footer_column">
                <div class="footer__heading">OTHER</div>
                <ul>
                    <li><a href="/blog/">Blog</a></li>
                    <li><a href="/events/">Events</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div id='try-now-form' class="body-disable hide-element">

    <div class="container">

        <div class="popup-window">

            <span class="close-elem"></span>

            <h3>TEST DRIVE ASCON PRODUCTS</h3>

            <div class="try-now-form">

                <form action="#">

                    <div class="question-title">Which product would you like to try?&nbsp;<span class="orange bold">*</span></div>

                    <div class="question-field">
                        <select name="" id="" required>
                            <option value="" selected disabled></option>
                            <option value="">KOMPAS-3D</option>
                            <option value="">Pilot-ICE</option>
                            <option value="">Renga</option>
                        </select>
                    </div>

                    <div class="question-title">Purpose for using&nbsp;<span class="orange bold">*</span></div>
                    <div class="question-field">
                        <select name="" id="" required>
                            <option value="" selected disabled></option>
                            <option value="1">business</option>
                            <option value="2">personal usage</option>
                        </select>
                    </div>

                    <div class="question-title">Email to get download link&nbsp;<span class="orange bold">*</span></div>

                    <div class="question-field">
                        <input type="email" required>
                    </div>

                    <div class="question-checkbox">
                        <input id="try-now-policy" type="checkbox" required>
                        <label for="try-now-policy" class="question-title">&nbsp;I&nbsp;accept <a href="/privacy-policy/">Privacy policy</a></label>
                    </div>

                    <button type="submit" class="btn-orange"><span>SEND TRIAL REQUEST</span></button>

                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>