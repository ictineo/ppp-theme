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
    data-cycle-fx=carousel
    data-cycle-timeout="3000"
    data-cycle-carousel-visible=2
    data-cycle-prev="#usr-prev"
    data-cycle-next="#usr-next"
    data-cycle-slides="> div.views-row"
    >
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
</div>
<span id="usr-prev"></span>
<span id="usr-next"></span>
