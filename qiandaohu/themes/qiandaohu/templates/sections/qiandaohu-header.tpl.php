<header class="globalHeader">
  <div class="logo">
    <a href=""><img class="fullImg" src="<?php print url(path_to_theme() . '/images/logo.png') ?>" alt=""/></a>
    <a href=""><img class="fullImg" src="<?php print url(path_to_theme() . '/images/logo2.png') ?>" alt=""/></a>
  </div>
  <div class="container">
    <nav class="nav">
      <ul class="mainNav clearfix">
        <li class="active"><a href="http://huluanpao.com">品牌官网</a></li>
        <li>
          <a href="<?php print url(variable_get('site_frontpage', 'node')) ?>">首页</a>
        </li>
        <li>
          <a href="<?php print url('about.html'); ?>">赛事专题<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li><a href="<?php print url('about.html'); ?>">有关赛事</a></li>
              <li><a href="<?php print url('rule.html'); ?>">竞赛规程</a></li>
              <li><a href="<?php print url('map.html'); ?>">赛事路线图</a></li>
              <li><a href="<?php print url('faq.html'); ?>">常见问题</a></li>
<!--              <li><a href="--><?php //print url('news.html'); ?><!--">赛事新闻</a></li>-->
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php print url('registration-note.html'); ?>">赛事报名<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li>
                <a href="<?php print url('registration-guidelines.html'); ?>">报名须知</a>
              </li>
              <li>
                <a href="<?php print url('register.html') ?>">立即报名</a></li>
              <li>
                <a href="<?php print url('registration-status.html'); ?>">报名查询</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php print url('result.html'); ?>">成绩与照片<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li><a href="<?php print url('result.html'); ?>">成绩查询</a></li>
              <li><a href="<?php print url('photos.html'); ?>">照片下载</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php print url('event-sponsorship.html'); ?>">赛事赞助<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

          <div class="dropNav">
            <div class="arrow"></div>
            <ul>
              <li>
                <a href="<?php print url('event-sponsorship.html'); ?>">赛事合作</a>
              </li>
              <li><a href="<?php print url('sponsor.html'); ?>">赞助商</a></li>
            </ul>
          </div>
        </li>
        <li class="national-flag">
          <a href="<?php print url('<front>'); ?>" class="active"><img src="<?php print url('profiles/qiandaohu/themes/qiandaohu/images/cn_logo.png'); ?>" alt=""/></a>
          <a href="http://en.qiandaohu.huluanpao.com"><img src="<?php print url('profiles/qiandaohu/themes/qiandaohu/images/en_logo.png'); ?>" alt=""/></a>
        </li>
      </ul>
    </nav>
  </div>
</header>