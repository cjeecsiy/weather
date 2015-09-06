<?php /* Smarty version 3.1.27, created on 2015-09-06 15:59:36
         compiled from "/Users/konny/github/cjeecsiy/weather/templates/weather.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:200817676655ebe4589bdbc7_61540321%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b58d81caba5387f9e7389bb20243274c4c4a247' => 
    array (
      0 => '/Users/konny/github/cjeecsiy/weather/templates/weather.tpl',
      1 => 1441522214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200817676655ebe4589bdbc7_61540321',
  'variables' => 
  array (
    'temp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ebe458aea5e1_45725256',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ebe458aea5e1_45725256')) {
function content_55ebe458aea5e1_45725256 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '200817676655ebe4589bdbc7_61540321';
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