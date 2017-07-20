<header class="globalHeader hidden-sm hidden-xs en">
  <div class="logo">
    <a href=""><img class="fullImg" src="<?php print url(path_to_theme() . '/images/logo.png') ?>" alt=""/></a>
    <a href=""><img class="fullImg" src="<?php print url(path_to_theme() . '/images/logo2.png') ?>" alt=""/></a>
    <a href="#"><img class="fullImg" src="<?php print url(path_to_theme() . '/images/silver_logo.png') ?>" alt=""/></a>
  </div>
  <div class="container">
    <nav class="nav">
      <ul class="mainNav clearfix">
        <li class="active"><a href="http://en.huluanpao.com">BRAND WEBSITE</a></li>
        <li>
          <a href="<?php print url(variable_get('site_frontpage', 'node')) ?>">HOME</a>
        </li>
        <li>
          <a href="<?php print url('about.html'); ?>">EVENTS<span class="glyphicon glyphicon-menu-down"
              aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
<!--              <li><a href="--><?php //print url('about.html'); ?><!--">About Race</a></li>-->
              <li><a href="<?php print url('rule.html'); ?>">Competition Rules</a></li>
              <li><a href="<?php print url('map.html'); ?>">Route Map</a></li>
              <li><a href="<?php print url('faq.html'); ?>">FAQ</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php print url('registration-guidelines.html'); ?>">REGISTRATION<span
              class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li>
                <a href="<?php print url('registration-guidelines.html'); ?>">Registration
                  Guidelines</a>
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
          <a href="<?php print url('result.html'); ?>">RESULT AND PHOTO<span
              class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li><a href="<?php print url('result.html'); ?>">Query Result</a></li>
              <li><a href="<?php print url('photos.html'); ?>">Photos</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php print url('event-sponsorship.html'); ?>">SPONSOR<span
              class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
<!--              <li>-->
<!--                <a href="--><?php //print url('event-sponsorship.html'); ?><!--">Events Sponsorship</a>-->
<!--              </li>-->
              <li><a href="<?php print url('sponsor.html'); ?>">Sponsor</a></li>
            </ul>
          </div>
        </li>
        <li class="national-flag">
          <a href="http://qiandaohu.huluanpao.com"><img
              src="<?php print url('profiles/qiandaohu/themes/qiandaohu/images/cn_logo.png'); ?>"
              alt=""/></a>
          <a href="<?php print url('<front>'); ?>" class="active"><img
              src="<?php print url('profiles/qiandaohu/themes/qiandaohu/images/en_logo.png'); ?>"
              alt=""/></a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<nav class="navbar navbar-default visible-sm-block visible-xs-block mb-nav">
  <div class="container-fluid">
    <div class="row">
      <div class="logo">
        <div><img class="" src="<?php print url(path_to_theme() . '/images/logo.png') ?>" alt=""/></div>
        <div>
          <img class="" src="<?php print url(path_to_theme() . '/images/logo2.png') ?>" alt=""/>
          <img class="" src="<?php print url(path_to_theme() . '/images/silver_logo.png') ?>" alt=""/>
        </div>
      </div>
    </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://en.huluanpao.com">BRAND WEBSITE</a></li>
        <li class="">
          <a href="<?php print url(variable_get('site_frontpage', 'node')) ?>">HOME</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">EVENTS
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!--            <li><a href="--><?php //print url('about.html'); ?><!--">About Race</a></li>-->
            <li><a href="<?php print url('rule.html'); ?>">Competition Rules</a></li>
            <li><a href="<?php print url('map.html'); ?>">Route Map</a></li>
            <li><a href="<?php print url('faq.html'); ?>">FAQ</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">REGISTRATION
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php print url('registration-guidelines.html'); ?>">Registration Guidelines</a>
            </li>
            <li><a href="<?php print url('register.html') ?>">Sign Up</a></li>
            <li><a href="<?php print url('registration-status.html'); ?>">Registration Check</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">RESULT AND PHOTO
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php print url('result.html'); ?>">Query Result</a></li>
            <li><a href="<?php print url('photos.html'); ?>">Photos</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">SPONSOR
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
<!--            <li><a href="--><?php //print url('event-sponsorship.html'); ?><!--">Events Sponsorship</a></li>-->
            <li><a href="<?php print url('sponsor.html'); ?>">Sponsor</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false">Language/语言
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://qiandaohu.huluanpao.com">中文</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>