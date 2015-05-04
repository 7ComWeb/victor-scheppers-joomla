<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

JHtml::_('behavior.caption');
?>
<main class="blog<?php echo $this->pageclass_sfx; ?>">
    <?php if (empty($this->lead_items) && empty($this->link_items) && empty($this->intro_items)) : ?>
		<?php if ($this->params->get('show_no_articles', 1)) : ?>
			<p><?php echo JText::_('COM_CONTENT_NO_ARTICLES'); ?></p>
		<?php endif; ?>
    <?php endif; ?>
  
    <?php $leadingcount = 0; ?>
	<?php if (!empty($this->lead_items)) : ?>
		<div class="items-leading clearfix">
			<?php foreach ($this->lead_items as &$item) : ?>
				<article class="leading-<?php echo $leadingcount; ?><?php echo $item->state == 0 ? ' system-unpublished' : null; ?>">
					<?php
					$this->item = & $item;
					echo $this->loadTemplate('item');
					?>
				</article>
				<?php $leadingcount++; ?>
			<?php endforeach; ?>
		</div><!-- end items-leading -->
	<?php endif; ?>
  
	<?php if (!empty($this->link_items)) : ?>
		<article class="items-more">
			<?php echo $this->loadTemplate('links'); ?>
		</article>
	<?php endif; ?>
</main>
