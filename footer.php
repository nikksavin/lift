</main>
<!-- Main::End-->

<!-- Footer::Start-->
<footer class="footer" id="footer">
    <noindex class="footer__top">
        <div class="container">
            <?
            wp_nav_menu(array(
                'menu_class' => 'footer__top-nav', // класс элемента <ul>
                'container' => false, // тег контейнера или false, если контейнер не нужен
                'container_class' => false, // класс контейнера
                'echo' => true, // вывести или вернуть
                'depth' => 1, // количество уровней вложенности
                'theme_location' => 'footer_top_menu', // область меню
            ));
            ?>
        </div>
    </noindex>
    <div class="footer__middle">
        <div class="container">
            <div class="footer__middle-wrapper">
                <div class="footer__logo">
                    <div class="footer__logo-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/footer-logo.svg" alt=""></div>
                    <div class="footer__logo-title">ООО "СЕВЕРО-ЗАПАДНАЯ ПРОМЫШЛЕННАЯ КОРПОРАЦИЯ"</div>
                </div>
                <div class="footer__middle-nav">
                    <?
                    wp_nav_menu(array(
                        'menu_class' => 'footer__middle-nav-list', // класс элемента <ul>
                        'container' => false, // тег контейнера или false, если контейнер не нужен
                        'container_class' => false, // класс контейнера
                        'echo' => true, // вывести или вернуть
                        'depth' => 1, // количество уровней вложенности
                        'theme_location' => 'footer_bottom_menu', // область меню
                    ));
                    ?>
                </div>
                <div class="footer__middle-info"> <a class="footer__middle-phone" href="tel:<? echo get_field('phone', 'main_info_page'); ?>"><? echo get_field('phone', 'main_info_page'); ?></a>
                    <div class="footer__middle-btn" data-src="#popup-question" data-item="Кнопка в футере Обратный звонок">Обратный звонок</div>
                    <div class="footer__middle-text"><? echo get_field('adress', 'main_info_page'); ?></div>
                    <div class="footer__middle-text">Тел.: (812) 334-66-56, 295-54-46<br>E-mail: <? echo get_field('mail', 'main_info_page'); ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom-wrapper"><a class="footer__bottom-link">© 2022 “SZPK GROUP”</a><a class="footer__bottom-link" href="/terms/">Политика конфиденциальности</a><a href="/sitemap_index.xml" class="footer__bottom-link">Карта сайта</a>
                <div class="footer__bottom-link"> <a href="https://di-project.studio/" target="_blank">Разработка сайта </a><span>Di-Project</span></div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer::End-->
</div>

<!-- PopupIndex::Start-->
<div class="popup-form" id="popup-form">
    <? echo do_shortcode('[contact-form-7 id="484" title="Получить предложение / Главная страница"]'); ?>
</div>
<!-- Popup::End-->

<!-- PopupDetailKP::Start-->
<div class="popup-form" id="popup-form-detail">
    <? echo do_shortcode('[contact-form-7 id="505" title="Получить предложение / Карточка товара"]'); ?>
</div>
<!-- Popup::End-->

<!-- PopupDetailQuestion::Start-->
<div class="popup-form" id="popup-form-detail-question">
    <? echo do_shortcode('[contact-form-7 id="511" title="Задать вопрос / Карточка товара"]'); ?>
</div>
<!-- Popup::End-->

<!-- PopupCalculate::Start-->
<div class="popup-form" id="popup-form-calculate">
    <? echo do_shortcode('[contact-form-7 id="516" title="Рассчитать стоимость"]'); ?>
</div>
<!-- Popup::End-->

<!-- PopupQuestion::Start-->
<div class="popup-form" id="popup-question">
    <? echo do_shortcode('[contact-form-7 id="750" title="Обратный звонок"]'); ?>
</div>
<!-- Popup::End-->


<!-- SUCCESS::Start-->
<div class="popup-success" id="popup-success">
    <div class="success-title">Спасибо</div>
    <div class="success-text">Ваша заявка принята</div>
    <div class="button-style button-style--blue" id="success-close">вернуться на сайт</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
