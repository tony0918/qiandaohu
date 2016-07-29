<?php

function qiandaohu_process_page(&$variables) {
  $current_domain = domain_get_domain();
  if (!empty($current_domain) && isset($current_domain['machine_name'])) {
    $theme_name = $current_domain['machine_name'] . '_header';
    $variables['qiandaohu_header'] = theme($theme_name);
    $theme_name = $current_domain['machine_name'] . '_footer';
    $variables['qiandaohu_footer'] = theme($theme_name);
  }
}

function qiandaohu_theme($existing, $type, $theme, $path) {
  return array(
    'qiandaohu_huluanpao_local_header' => array(
      'template' => 'templates/sections/qiandaohu-header'
    ),
    'qiandaohu_huluanpao_local_footer' => array(
      'template' => 'templates/sections/qiandaohu-footer'
    ),
    'qiandaohu_huluanpao_com_header' => array(
      'template' => 'templates/sections/qiandaohu-header'
    ),
    'qiandaohu_huluanpao_com_footer' => array(
      'template' => 'templates/sections/qiandaohu-footer'
    ),
    'en_qiandaohu_huluanpao_local_header' => array(
      'template' => 'templates/sections/qiandaohu-header-en'
    ),
    'en_qiandaohu_huluanpao_local_footer' => array(
      'template' => 'templates/sections/qiandaohu-footer-en'
    ),
    'en_qiandaohu_huluanpao_com_header' => array(
      'template' => 'templates/sections/qiandaohu-header-en'
    ),
    'en_qiandaohu_huluanpao_com_footer' => array(
      'template' => 'templates/sections/qiandaohu-footer-en'
    )
  );
}

function qiandaohu_preprocess_page(&$variables) {
  if (isset($variables['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
  }
  if (request_path() == 'index.html' || request_uri() == '/') {
    $variables['theme_hook_suggestions'][] = 'page__front';
  }
}

function qiandaohu_preprocess_node(&$variables) {
  if ($variables['node_url'] == "/index.html") {
    $variables['theme_hook_suggestions'][] = 'node__index';
  }
//  if ('content_block' == $variables['type']) {
//    if (!empty($variables['field_page_layout'])) {
//      $layout = array_pop($variables['field_page_layout']);
//      $templateName_temp = array_pop($layout);
//      $templateName = $templateName_temp['value'];
//
//      $variables['content_items'] = $variables['field_content_items'];
//    }
//
//    if (!empty($variables['field_formatter'])) {
//      $formatter_temp = array_pop($variables['field_formatter']);
//      $formatter = $formatter_temp['template_name'];
//      $variables['theme_hook_suggestions'][] = 'node__' . $variables['type'] . '_formatter_' . $formatter;
//    }
//
//    if (!empty($variables['field_content_layout'])) {
//      $layout = array_pop($variables['field_content_layout']);
//      $templateName_temp = array_pop($layout);
//      $templateName = $templateName_temp['value'];
//      $variables['theme_hook_suggestions'][] = 'node__' . $variables['type'] . '_contentlayout_' . $templateName;
//      $variables['content_items'] = $variables['field_article_reference'];
//    }
//
//  }
//
//  if (in_array($variables['type'], array(
//    'audio_article',
//    'image_article',
//    'video_article'
//  ))) {
//    $variables['score'] = plus1_get_score('node', $variables['nid'], 'plus1_node_vote');
//
//    // For the bottom ad block of article detail page.
//    $views = views_get_enabled_views();
//    if (isset($views['nuskin_content_right_blocks'])) {
//      $variables['bottom_ads'] = views_embed_view('nuskin_content_right_blocks', 'block_1');
//    }
//
//    // For share link.
//    global $language;
//    $path = url(current_path(), array('absolute' => TRUE));
//    if ('zh-cn' == $language->language) {
//      $variables['sharelink'] = 'http://service.weibo.com/share/share.php?appkey=&title=&pic=&searchPic=false&style=simple&url=' . $path;
//    }
//    else {
//      $variables['sharelink'] = 'https://www.facebook.com/sharer/sharer.php?u=' . $path;
//    }
//  }
//
//  $count = statistics_get($variables['nid']);
//  if (!empty($count)) {
//    $variables['totalcount'] = $count['totalcount'];
//  }
//  else {
//    $variables['totalcount'] = 0;
//  }
}

/**
 * HOOK_FORM_ALTER
 * @param string $form
 * @param type $form_state
 * @param type $form_id
 */
function nuskin_v1_form_alter(&$form, &$form_state, $form_id) {
  $form_id_arr = explode("_", $form_id);
  if (in_array('comment', $form_id_arr) && in_array('node', $form_id_arr) && in_array('form', $form_id_arr)) {
    if (isset($form['actions']['preview'])) {
      hide($form['actions']['preview']);
    }
    $form['#validate'][] = 'nuskin_v1_comment_validate';
  }
}

function nuskin_v1_process(&$variables) {
  if (in_array('page__taxonomy__term__%', $variables['theme_hook_suggestions'])) {
    unset($variables['breadcrumb']);
  }
}

function nuskin_v1_preprocess(&$variables) {
  if (in_array('page__taxonomy__term__%', $variables['theme_hook_suggestions'])) {
    unset($variables['page']['content']['system_main']['nodes']);
  }
}

/**
 * 判断是否评论内容是否为空
 * @param type $form
 * @param type $form_state
 */
function nuskin_v1_comment_validate($form, &$form_state) {
  $comment_body = $form_state['values']['comment_body']['und'][0]['value'];
  $nid = $form['nid']['#value'];
  if (empty($comment_body)) {
    drupal_goto(url('node/' . $nid));
  }
}

function nuskin_v1_preprocess_html(&$vars) {
  $vars['head_title_array']['name'] = "NU SKIN";
  $vars['head_title'] = implode(' | ', $vars['head_title_array']);
}