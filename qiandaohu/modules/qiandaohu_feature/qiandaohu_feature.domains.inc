<?php
/**
 * @file
 * qiandaohu_feature.domains.inc
 */

/**
 * Implements hook_domain_default_domains().
 */
function qiandaohu_feature_domain_default_domains() {
  $domains = array();
  $domains['en_qiandaohu_huluanpao_com'] = array(
    'subdomain' => 'en.qiandaohu.huluanpao.com',
    'sitename' => 'Qiandaohu Marathon - Huluanpao',
    'scheme' => 'http',
    'valid' => 1,
    'weight' => 3,
    'is_default' => 0,
    'machine_name' => 'en_qiandaohu_huluanpao_com',
  );
  $domains['en_qiandaohu_huluanpao_local'] = array(
    'subdomain' => 'en.qiandaohu.huluanpao.local',
    'sitename' => 'Qiandaohu Marathon - Huluanpao -Test',
    'scheme' => 'http',
    'valid' => 1,
    'weight' => 1,
    'is_default' => 0,
    'machine_name' => 'en_qiandaohu_huluanpao_local',
  );
  $domains['qiandaohu_huluanpao_com'] = array(
    'subdomain' => 'qiandaohu.huluanpao.com',
    'sitename' => '千岛湖马拉松 - 湖乱跑',
    'scheme' => 'http',
    'valid' => 1,
    'weight' => 2,
    'is_default' => 0,
    'machine_name' => 'qiandaohu_huluanpao_com',
  );
  $domains['qiandaohu_huluanpao_local'] = array(
    'subdomain' => 'qiandaohu.huluanpao.local',
    'sitename' => '千岛湖马拉松 - 湖乱跑 - 测试',
    'scheme' => 'http',
    'valid' => 1,
    'weight' => -1,
    'is_default' => 1,
    'machine_name' => 'qiandaohu_huluanpao_local',
  );

  return $domains;
}

/**
 * Implements hook_domain_conf_default_variables().
 */
function qiandaohu_feature_domain_conf_default_variables() {
  $domain_variables = array();
  $domain_variables['en_qiandaohu_huluanpao_com'] = array(
    'site_name' => 'Site-Install',
    'site_mail' => 'admin@example.com',
    'site_slogan' => '',
    'site_frontpage' => 'index.html',
    'anonymous' => 'Anonymous',
    'admin_theme' => 'seven',
    'date_default_timezone' => 'Asia/Shanghai',
    'cache' => 1,
    'cache_lifetime' => 0,
    'maintenance_mode' => 0,
    'maintenance_mode_message' => '千岛湖马拉松 - 湖乱跑 - 测试 is currently under maintenance. We should be back shortly. Thank you for your patience.',
    'language_default' => 'en',
  );
  $domain_variables['en_qiandaohu_huluanpao_local'] = array(
    'language_default' => 'en',
    'site_name' => 'Site-Install',
    'site_mail' => 'admin@example.com',
    'site_slogan' => '',
    'site_frontpage' => 'index.html',
    'anonymous' => 'Anonymous',
    'admin_theme' => 'seven',
    'date_default_timezone' => 'UTC',
    'cache' => 1,
    'cache_lifetime' => 0,
    'maintenance_mode' => 0,
    'maintenance_mode_message' => '千岛湖马拉松 - 湖乱跑 - 测试 is currently under maintenance. We should be back shortly. Thank you for your patience.',
  );
  $domain_variables['qiandaohu_huluanpao_com'] = array(
    'site_name' => 'Site-Install',
    'site_mail' => 'admin@example.com',
    'site_slogan' => '',
    'site_frontpage' => 'index.html',
    'anonymous' => 'Anonymous',
    'admin_theme' => 'seven',
    'date_default_timezone' => 'Asia/Shanghai',
    'cache' => 1,
    'cache_lifetime' => 0,
    'maintenance_mode' => 0,
    'maintenance_mode_message' => '千岛湖马拉松 - 湖乱跑 - 测试 is currently under maintenance. We should be back shortly. Thank you for your patience.',
    'language_default' => 'zh-hans',
  );
  $domain_variables['qiandaohu_huluanpao_local'] = array(
    'language_default' => 'zh-hans',
    'site_name' => 'Site-Install',
    'site_mail' => 'admin@example.com',
    'site_slogan' => '',
    'site_frontpage' => 'index.html',
    'anonymous' => 'Anonymous',
    'admin_theme' => 'seven',
    'date_default_timezone' => 'UTC',
    'cache' => 1,
    'cache_lifetime' => 0,
    'maintenance_mode' => 0,
    'maintenance_mode_message' => '千岛湖马拉松 - 湖乱跑 - 测试 is currently under maintenance. We should be back shortly. Thank you for your patience.',
  );

  return $domain_variables;
}
