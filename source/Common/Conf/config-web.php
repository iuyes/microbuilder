<?php
$c = array();

$c['DEFAULT_MODULE']          = 'Wander';
$c['DEFAULT_CONTROLLER']      = 'Aurora';
$c['TMPL_ACTION_ERROR']       = 'Common/message';
$c['TMPL_ACTION_SUCCESS']     = 'Common/message';
$c['TMPL_PARSE_STRING']       = array(
    '__PUBLIC__'              => '/w/static',
    '{__TEMPLATE_THEME__}'    => '',
    '{__GLOBAL_VERSION__}'    => '1.0',
    '{__GLOBAL_HOST_URL__}'   => 'http://www.microbuilder.cn',
    '{__GLOBAL_HOST__}'       => 'MICROBUILDER.CN',
    '{__GLOBAL_BEIAN__}'      => '晋IPC-0025151254',
    '{__GLOBAL_ABOUT_URL__}'  => 'http://www.microbuilder.cn/about.php',
    '{__GLOBAL_ABOUT__}'      => '关于',
    '{__GLOBAL_HELP_URL__}'   => 'http://www.microbuilder.cn/help.php',
    '{__GLOBAL_HELP__}'       => '帮助',
);

return $c;
