<?php /* Smarty version 3.1.27, created on 2015-09-06 17:11:29
         compiled from "/Users/konny/github/cjeecsiy/htdocs/weather/templates/weather.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:131917911555ebf531334895_21826790%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a86e420f50aa9ef67d503e5b06e440f6be4a45a5' => 
    array (
      0 => '/Users/konny/github/cjeecsiy/htdocs/weather/templates/weather.tpl',
      1 => 1441527085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131917911555ebf531334895_21826790',
  'variables' => 
  array (
    'locations' => 0,
    'location' => 0,
    'image_path' => 0,
    'location_name' => 0,
    'weather' => 0,
    'temp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ebf53140ee72_16456580',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ebf53140ee72_16456580')) {
function content_55ebf53140ee72_16456580 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/Users/konny/github/cjeecsiy/htdocs/smarty-3.1-1.27/libs/plugins/function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '131917911555ebf531334895_21826790';
?>
<html>
<head>
    <link rel="stylesheet" id="main" href="/weather/css/weather.css" type="text/css" media="all">
    <?php echo '<script'; ?>
 type="text/javascript">
        function post() {
            weather.submit();
        }
    <?php echo '</script'; ?>
>
</head>
<body>
<h1>Today weather</h1>
<form name="weather">
    <div class="custom">
        <select name="area" onchange="post()">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['locations']->value,'selected'=>$_smarty_tpl->tpl_vars['location']->value),$_smarty_tpl);?>

        </select>
    </div>
</form>
<img src=<?php echo $_smarty_tpl->tpl_vars['image_path']->value;?>
 weight="20%" height="20%">
<p>Location: <?php echo $_smarty_tpl->tpl_vars['location_name']->value;?>
</p>
<p>Weather: <?php echo $_smarty_tpl->tpl_vars['weather']->value;?>
</p>
<p>Temperature: <?php echo $_smarty_tpl->tpl_vars['temp']->value;?>
度</p>

<?php }
}
?>