<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="cycle-slideshow"
    data-cycle-fx="scrollHorz"
    data-cycle-timeout="0"
    data-cycle-prev="#tweet-prev"
    data-cycle-next="#tweet-next"
    data-cycle-slides="> div.views-row"
    >
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
</div>
<span id="tweet-prev"></span>
<span id="tweet-next"></span>
