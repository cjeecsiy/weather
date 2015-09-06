<?php /* Smarty version 3.1.27, created on 2015-09-06 16:14:49
         compiled from "/Users/konny/github/cjeecsiy/htdocs/today_weather/templates/weather.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:173436152355ebe7e9740035_50840634%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6d8ff8bb62fd6d6d8beb140e5395a1d8eccecb2' => 
    array (
      0 => '/Users/konny/github/cjeecsiy/htdocs/today_weather/templates/weather.tpl',
      1 => 1441522214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173436152355ebe7e9740035_50840634',
  'variables' => 
  array (
    'temp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ebe7e9870b19_81598872',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ebe7e9870b19_81598872')) {
function content_55ebe7e9870b19_81598872 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '173436152355ebe7e9740035_50840634';
echo '<?php
    ';?>$req_location = $_GET['area'];
    request_weather($req_location);
<?php echo '?>';?>


<?php echo $_smarty_tpl->tpl_vars['temp']->value;?>

<html>
<head>
    <link rel="stylesheet" id="main" href="/weather/css/weather.css" type="text/css" media="all">
    <?php echo '<script'; ?>
 type="text/javascript">
        function dropsort() {
            weather.submit();
        }
    <?php echo '</script'; ?>
>
</head>
<body>
<h1>Today weather</h1>
<form name="weather">
    <div class="custom">
      <select name="area" onchange="dropsort()">
        <?php echo '<?    ';?>foreach($locations as $key=>$value){
                $selected="";
                if($req_location==$key){
                    $selected =" selected";
                }
                print "<option value=\"$key\"$selected>$value</option>\n";
            }
        <?php echo '?>';?>
      </select>  
    </div>
</form>
<img src=<?php echo '<?=';?> $image_path <?php echo '?>';?> weight="20%" height="20%">
<p>Location: <?php echo '<?=';?> $location_name <?php echo '?>';?></p>
<p>Weather: <?php echo '<?=';?> $weather <?php echo '?>';?></p>
<p>Temperature: <?php echo '<?=';?> $temp <?php echo '?>';?>度</p>

<?php }
}
?>