<?php
/**
 *  // Licensed under the GPL v3
 * @package     JD Open Table 
 * @copyright   Copyright (C) 2019 JoomDev, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */
defined('_JEXEC') or die;
$description	= $params->get('description', '');
$lang				= $params->get('lang',"en-US");
$theme			= $params->get('theme',"standard");
$iframe			= $params->get('iframe',false);
$rid				= $params->get('rid','');
$type				= "standard";

if($theme=="button"){
	$type=$theme;
	$theme="standard";
}
?>

<div class="jd-open-table">
	<?php if (!empty($description)) { ?>
		<p class="jd-open-table-description"><?php echo JText::_($description); ?></p>
	<?php } ?>
	<script type='text/javascript' src='//www.opentable.com/widget/reservation/loader?rid=<?php echo $rid; ?>&type=<?php echo $type;?>&theme=<?php echo $theme;  ?>&iframe=<?php echo $iframe;  ?>&overlay=false&domain=com&lang=<?php echo $lang;  ?>'></script>
</div>