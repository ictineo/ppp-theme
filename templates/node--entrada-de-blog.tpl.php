<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
//    print render($content);
  ?>
  <div id="main-col">
    <h2 class="node-title"><?php print $node->title; ?></h2>
    <?php print render($content['body']); ?>
  </div>
  <div id="sec-col">
    <div class="publish-info">
      <h4 class="bloc-label"><?php print t('Published by'); ?></h4>
      <span class="data"><?php print date('d/m/Y', $node->changed); ?>, <?php print t('by'); ?> <?php print $node->name; ?></span>
    </div>
    <?php print render($content['field_etiquetes']); ?>
    <?php print views_embed_view('blogs_similar_al_punt', 'entity_view_2', $node->nid); ?>
    <?php print views_embed_view('xxss_del_node', 'block'); ?>
    <?php print render($content['comments']); ?>

  </div>

  <?php // print render($content['links']); ?>


</article>
