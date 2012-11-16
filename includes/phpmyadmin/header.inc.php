<?php
#Application name: PhpCollab
#Status page: 0
/* $Id: header.inc.php,v 1.1.1.1 2004/11/02 03:30:20 madbear Exp $ */


/**
 * Gets a core script and starts output buffering work 
 */
require('common.lib.php');
require('ob.lib.php');
if ($cfgOBGzip) {
    $ob_mode = out_buffer_mode_get();
    if ($ob_mode) {
        out_buffer_pre($ob_mode);
    }
}


/**
 * Sends http headers
 */
// Don't use cache (required for Opera)
$now = gmdate('D, d M Y H:i:s') . ' GMT';
header('Expires: ' . $now);
header('Last-Modified: ' . $now);
header('Cache-Control: no-store, no-cache, must-revalidate'); // HTTP/1.1
header('Cache-Control: pre-check=0, post-check=0, max-age=0'); // HTTP/1.1
header('Pragma: no-cache'); // HTTP/1.0
// Define the charset to be used
header('Content-Type: text/html; charset=' . $charset);


/**
 * Sends the beginning of the html page then returns to the calling script
 */
// Gets the font sizes to use
//set_font_sizes();
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $available_languages[$lang][2]; ?>" lang="<?php echo $available_languages[$lang][2]; ?>">

<head>
<title>phpMyAdmin</title>
<style type="text/css">
<!--
body          {font-family: <?php echo $right_font_family; ?>; font-size: <?php echo $font_size; ?>; color: #000000}
pre, tt       {font-size: <?php echo $font_size; ?>}
th            {font-family: <?php echo $right_font_family; ?>; font-size: <?php echo $font_size; ?>; font-weight: bold; background-color: <?php echo $cfgThBgcolor;?>}
td            {font-family: <?php echo $right_font_family; ?>; font-size: <?php echo $font_size; ?>}
form          {font-family: <?php echo $right_font_family; ?>; font-size: <?php echo $font_size; ?>}
h1            {font-family: <?php echo $right_font_family; ?>; font-size: <?php echo $font_bigger; ?>; font-weight: bold}
A:link        {font-family: <?php echo $right_font_family; ?>; font-size: <?php echo $font_size; ?>; text-decoration: none; color: #0000ff}
A:visited     {font-family: <?php echo $right_font_family; ?>; font-size: <?php echo $font_size; ?>; text-decoration: none; color: #0000ff}
A:hover       {font-family: <?php echo $right_font_family; ?>; font-size: <?php echo $font_size; ?>; text-decoration: underline; color: #FF0000}
A:link.nav    {font-family: <?php echo $right_font_family; ?>; color: #000000}
A:visited.nav {font-family: <?php echo $right_font_family; ?>; color: #000000}
A:hover.nav   {font-family: <?php echo $right_font_family; ?>; color: #FF0000}
.nav          {font-family: <?php echo $right_font_family; ?>; color: #000000}
//-->
</style>

<?php
if (isset($db)) {
    $title = str_replace('\'', '\\\'', $db);
}
if (isset($table)) {
    $title = (isset($title) ? $title . '.' . str_replace('\'', '\\\'', $table) : str_replace('\'', '\\\'', $table));
}
if (!empty($cfgServer) && isset($cfgServer['host'])) {
    $title = (isset($title) ? $title . ' ' . trim($strRunning) . ' ' . str_replace('\'', '\\\'', $cfgServer['host']) : str_replace('\'', '\\\'', $cfgServer['host']));
}
$title = (isset($title) ? $title . ' - phpMyAdmin ' . PMA_VERSION : 'phpMyAdmin ' . PMA_VERSION);
?>
<script type="text/javascript" language="javascript">
<!--
// Updates the title of the frameset if possible (ns4 does not allow this)
if (typeof(parent.document.title) == 'string') {
    parent.document.title = '<?php echo $title; ?>';
}
<?php
// Add some javascript instructions if required
if (isset($js_to_run) && $js_to_run == 'functions.js') {
    echo "\n";
    ?>
// js form validation stuff
var errorMsg0   = '<?php echo str_replace('\'', '\\\'', $strFormEmpty); ?>';
var errorMsg1   = '<?php echo str_replace('\'', '\\\'', $strNotNumber); ?>';
var errorMsg2   = '<?php echo str_replace('\'', '\\\'', $strNotValidNumber); ?>';
var noDropDbMsg = '<?php echo((!$cfgAllowUserDropDatabase) ? str_replace('\'', '\\\'', $strNoDropDatabases) : ''); ?>';
var confirmMsg  = '<?php echo(($cfgConfirm) ? str_replace('\'', '\\\'', $strDoYouReally) : ''); ?>';
//-->
</script>
<script src="functions.js" type="text/javascript" language="javascript"></script>
    <?php
} else if (isset($js_to_run) && $js_to_run == 'user_details.js') {
    echo "\n";
    ?>
// js form validation stuff
var jsHostEmpty       = '<?php echo str_replace('\'', '\\\'', $GLOBALS['strHostEmpty']); ?>';
var jsUserEmpty       = '<?php echo str_replace('\'', '\\\'', $GLOBALS['strUserEmpty']); ?>';
var jsPasswordEmpty   = '<?php echo str_replace('\'', '\\\'', $GLOBALS['strPasswordEmpty']); ?>';
var jsPasswordNotSame = '<?php echo str_replace('\'', '\\\'', $GLOBALS['strPasswordNotSame']); ?>';
//-->
</script>
<script src="user_details.js" type="text/javascript" language="javascript"></script>
    <?php
} else {
    echo "\n";
    ?>
//-->
</script>
    <?php
}
echo "\n";
?>
</head>


<body bgcolor="<?php echo $cfgRightBgColor; ?>">
