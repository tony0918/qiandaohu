<header class="globalHeader">
  <div class="logo">
    <a href=""><img class="fullImg" src="<?php print url(path_to_theme() . '/images/logo.png') ?>" alt=""/></a>
    <a href=""><img class="fullImg" src="<?php print url(path_to_theme() . '/images/logo2.png') ?>" alt=""/></a>
  </div>
  <div class="container">
    <nav class="nav">
      <ul class="mainNav clearfix">
        <li class="active"><a href="http://en.huluanpao.com">BRAND WEBSITE</a></li>
        <li>
          <a href="<?php print url(variable_get('site_frontpage', 'node')) ?>">HOME</a>
        </li>
        <li>
          <a href="<?php print url('about.html'); ?>">EVENTS<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li><a href="<?php print url('about.html'); ?>">About Race</a></li>
              <li><a href="<?php print url('rule.html'); ?>">Competition Rules</a></li>
              <li><a href="<?php print url('map.html'); ?>">Route Map</a></li>
              <li><a href="<?php print url('faq.html'); ?>">FAQ</a></li>
<!--              <li><a href="--><?php //print url('news.html'); ?><!--">Event News</a></li>-->
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php print url('registration-note.html'); ?>">REGISTRATION<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li>
                <a href="<?php print url('registration-guidelines.html'); ?>">Registration Guidelines</a>
              </li>
              <li>
                <a href="<?php print url('register.html') ?>">Sign Up</a></li>
              <li>
                <a href="<?php print url('registration-status.html'); ?>">Registration Check</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php print url('result.html'); ?>">RESULT AND PHOTO<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li><a href="<?php print url('result.html'); ?>">Query Result</a></li>
              <li><a href="<?php print url('photos.html'); ?>">Photos</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php print url('event-sponsorship.html'); ?>">SPONSOR<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li>
                <a href="<?php print url('event-sponsorship.html'); ?>">Events Sponsorship</a>
              </li>
              <li><a href="<?php print url('sponsor.html'); ?>">Sponsor</a></li>
            </ul>
          </div>
        </li>
        <li class="national-flag">
          <a href="http://qiandaohu.huluanpao.com"><img src="<?php print url('profiles/qiandaohu/themes/qiandaohu/images/cn_logo.png'); ?>" alt=""/></a>
          <a href="<?php print url('<front>'); ?>" class="active"><img src="<?php print url('profiles/qiandaohu/themes/qiandaohu/images/en_logo.png'); ?>" alt=""/></a>
        </li>
      </ul>
    </nav>
  </div>
</header>