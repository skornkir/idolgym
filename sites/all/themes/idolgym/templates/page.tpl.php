<?php
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
<a href="#" class="scrollup">Наверх</a>
<div id="page"
     class="csstransition chrome_only cmsmasters_liquid fixed_header enable_header_bottom enable_header_bot_button cmsmasters_heading_under_header hfeed site">

    <!-- _________________________ Start Main _________________________ -->
    <div id="main">

        <!-- _________________________ Start Header _________________________ -->
        <div class="mobile-nav">
            <div class="container-menu">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

        </div>
        <div class="mobile-nav-body" >
            <?php print render($page['navigation']); ?>
            <div class="contact-info">
                <div class="phone">+7 495 112 111</div>
                <div class="social">
                    <ul id="soc-net">
                        <li>
                            <a href="#" target="">
                                <i class="fab fa-vk"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

     <!--   <div class="phonecall">
            <?php /*if(isMobile()): */?>
                <a href="tel:8-495-555-1231">
                    <i class="fas fa-phone"></i>
                </a>
            <?php /*else: */?>
                <a href="#"  data-toggle="modal" data-target="#">
                    <i class="fas fa-phone"></i>
                </a>
            <?php /*endif; */?>
        </div>-->
        <header id="header">
            <div class="header_mid" >
                <div class="header_mid_outer">
                    <div class="header_mid_inner" id="header_mid_inner">
                        <div class="logo_wrap">
                            <a href="/" title="IdolGym" class="logo">
                                <img src="/sites/all/themes/idolgym/images/logo.png" alt="Idol gym">
                                <img class="logo_retina" src="http://be-fit.cmsmasters.net/wp-content/themes/be-fit/img/logo_retina.png" alt="Be Fit" width="117" height="51">
                            </a>
                        </div>
                        <div class="seraparor-club"></div>
                        <div id="choose-club-wrapper" class="choose-club-wrapper" data-toggle="modal" data-target="#clubModal">
                            <div class="current-club">{{club.name}}</div>
                            <div class="choose-club">Выберите клуб   <i class="fas fa-angle-down"></i></div>
                        </div>
                        <div class="slogan_wrap">
                            <div class="slogan_wrap_inner">
                                <div class="slogan_text_inner">
                                   {{club.phone}}
                                </div>
                                <div class="social-header">
                                    <ul>
                                        <li><a :href="club.vk">  <i class="fab fa-vk"></i></a> </li>
                                        <li><a :href="club.insta">  <i class="fab fa-instagram"></i></a> </li>
                                        <li><a :href="club.fb">  <i class="fab fa-facebook-f"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_mid_color"></div>
            </div>
            <div class="header_bot" data-height="55">
                <div class="header_bot_outer">
                    <div class="header_bot_inner">
                        <div class="desktop-nav">
                            <?php print render($page['navigation']); ?>
                        </div>


                        <div class="become-client" data-toggle="modal" data-target="#exampleModal">
                            Стать клиентом
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
            </div>
        </header>
        <div class="after-header">

        </div>
        <div class="main-title">
            <?php if ($title): ?>
                <h1><?php print $title; ?></h1>
            <?php endif; ?>
        </div>
        <div id="middle">
            <div class="layout-3col layout-swap">

                <?php
                // Render the sidebars to see if there's anything in them.
                $sidebar_first = render($page['sidebar_first']);
                $sidebar_second = render($page['sidebar_second']);
                // Decide on layout classes by checking if sidebars have content.
                $content_class = 'layout-3col__full';
                $sidebar_first_class = $sidebar_second_class = '';
                if ($sidebar_first && $sidebar_second):
                    $content_class = 'layout-3col__right-content';
                    $sidebar_first_class = 'layout-3col__first-left-sidebar';
                    $sidebar_second_class = 'layout-3col__second-left-sidebar';
                elseif ($sidebar_second):
                    $content_class = 'layout-3col__left-content';
                    $sidebar_second_class = 'layout-3col__right-sidebar';
                elseif ($sidebar_first):
                    $content_class = 'layout-3col__right-content';
                    $sidebar_first_class = 'layout-3col__left-sidebar';
                endif;
                ?>
                <?php print render($page['pre_content']); ?>
                <main class="<?php print $content_class; ?>" role="main">
                    <?php print render($page['highlighted']); ?>
                    <?php //print $breadcrumb; ?>
                    <a href="#skip-link" class="visually-hidden visually-hidden--focusable" id="main-content">Back to
                        top</a>
                    <?php print render($title_prefix); ?>


                    <?php print render($title_suffix); ?>
                    <?php print $messages; ?>
                    <?php print render($tabs); ?>
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?>
                        <ul class="action-links"><?php print render($action_links); ?></ul>
                    <?php endif; ?>
                    <?php print render($page['content']); ?>
                    <?php print $feed_icons; ?>
                </main>

                <?php if ($sidebar_first): ?>
                    <aside class="<?php print $sidebar_first_class; ?>" role="complementary">
                        <?php print $sidebar_first; ?>
                    </aside>
                <?php endif; ?>

                <?php if ($sidebar_second): ?>
                    <aside class="<?php print $sidebar_second_class; ?>" role="complementary">
                        <?php print $sidebar_second; ?>
                    </aside>
                <?php endif; ?>

            </div>

        </div>
        <div class="prefooter">
            <?php print render($page['pre_footer']); ?>
        </div>
    </div>

    <footer id="footer" class="cmsmasters_color_scheme_footer cmsmasters_footer_small">
        <div class="footer_inner">
            <div class="footer_nav_wrap">
                <nav>
                    <div class="menu-footer-navigation-container">
                        <ul id="footer_nav" class="footer_nav">
                            <li id="menu-item-12643"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12643">
                                <a href="#" target="">
                                    <i class="fab fa-vk"></i>
                                </a>
                            </li>
                            <li id="menu-item-12644"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12644">
                                <a href="#" target="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li id="menu-item-12645"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12645">
                                <a href="#" target="">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li id="menu-item-12646"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12646">
                                <a href="#" target="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="prefooter">

            </div>
            <span class="footer_copyright copyright">Idol Gym © 2018. Все права защищены</span>
            <div class="popup-client">
                <div class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Modal body text goes here.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<div class="modal become-client-modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Обратный звонок</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group fifty">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Телефон">
                    </div>
                    <div class="form-group fifty">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Имя">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Заказать</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal club-modal fade" id="clubModal" tabindex="-1" role="dialog" aria-labelledby="clubModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Выберить клуб</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div v-for="club in clubs" class="club" :tid="club.tid" @click="onClickClub(club.id, club.name, club.phone, club.vk, club.insta, club.fb)">
                        <div class="club-title">{{club.name}}</div>
                        <div class="club-city">{{club.address}}</div>
                    </div>
            </div>
        </div>
    </div>
</div>