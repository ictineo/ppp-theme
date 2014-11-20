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

   <div id="general-wrapper"> 
     <span class="filasup"> 
       <div id="esquerra-sup" class="col1 columna-sup"> 
          <div id="fotografia" class="camp"> 
            <?php print render($content['field_fotografia']); ?>  
          </div>
          <div id="desde" class="camp"> 
            <?php   print (t('Member since').render($content['field_membre_desde'])); ?>  
          </div>
          <div id="links" class="camp"> 
          </div>
       </div> 
       <div id="central-sup" class="col2 columna-sup"> 
         <div id="titol" class="camp"> 
           <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
         </div>
         <div id="sectors">
         <?php foreach ($content['field_sector_subsectors'] as $key => $values) { ?>
         <?php   if(is_numeric($key)) { ?>
         <div class="sector sector-<?php print $values['#options']['entity']->tid ?>"></div>
         <?php   }    ?>
         <?php }      ?>
         </div>
         <div id="etiquetes-wrapper">
         <?php foreach ($content['field_etiquetes'] as $key => $values) { ?>
         <?php   if(is_numeric($key)) { ?>
         <div id="etiquetes" class="camp"> 
            <?php print $values['#items']['0']['data']; ?>
         </div>
         <?php   }    ?>
         <?php }      ?>
         </div>
         <div id="descripcio" class="camp"> 
           <?php print render($content['field_descripcio']); ?>  
         </div>

         <div id="adreça" class="camp"> 
          <div class=iconeta> </div>
          <?php print render($content['field_adreca']); ?>  
         </div>
         <div id="horari" class="camp"> 
          <div class=iconeta> </div>  
          <?php print render($content['field_horari']); ?>  
         </div>
         <div id="telefon" class="camp"> 
          <div class=iconeta> </div> 
          <?php print render($content['field_telefon']); ?>  
         </div>
         <div id="mail" class="camp"> 
           <div class=iconeta> </div> 
           <?php print render($content['field_mail']); ?>  
         </div>
         <div id="web" class="camp"> 
           <div class=iconeta> </div> 
           <?php print render($content['field_web']); ?>  
         </div>
         <div id="xxss" class="camp"> 
           <a href="<?php print render($content['field_twitter']); ?>" class="ic-twt" target="_blank"></a>
           <a href="<?php print render($content['field_facebook']); ?>" class="ic-fb" target="_blank"></a>
           <a href="<?php print render($content['field_g_plus']); ?>" class="ic-gp" target="_blank"></a>
         </div>
       </div>
       <div id="dreta-sup" class="col3 columna-sup">  
       <div id=criteris-titol> <?php print t('Criteris'); ?> </div>
       <span class="criteri-wrapper">
      <?php
        $arrayaux = array();           
         foreach ($node->field_avaluacio_punt[LANGUAGE_NONE] as $key2 => $value) { 
           if(is_numeric($key2) && isset($value['entity']->changed)) {
            $arrayaux[$value['entity']->changed] = $value['entity']; 
           }
         }
        krsort($arrayaux,SORT_NUMERIC);
        $aux = 0;
        foreach ($arrayaux as $key3 => $valor) { 
          if ($aux < 1) { 
            $num_criteri = 1;
            foreach ($valor as $key4 => $valor2) {
              if(strpos($key4,'avaluacio_criteri') !== false) { 
                if(isset($valor2[LANGUAGE_NONE]['0']['value'])) {?> 
                    <div class="<?php print($key4.' criteri');?>">
                       <div class="puntuacio valor<?php print($valor2[LANGUAGE_NONE]['0']['value']);?>">
                          <div class="text"> <?php print explode(',', variable_get('ppp_mapes_keys_field_avaluacio_criteri' . str_replace('field_avaluacio_criteri','',$key4) , ''), 2)[0]; ?> </div>
                       </div>
                   </div>  
<?php           }
                $num_criteri++;
              }
            }          
          }
          $aux++; 
        }?>
       </span>
       </div> 
     </span>  
     <span class="filainf">
       <div id="esquerra-inf" class="col1 columna-inf">
          <div class="row">
            <?php print views_embed_view('usuaris_punt_favorit', 'block_1', $node->nid); ?>
          </div>
          <?php print render($content['flag_favorit']); ?>
        <div id=similars-title><?php print t('Punts Similars'); ?> </div>
          <?php print views_embed_view('punts_similars', 'block_1', $node->nid, $node->nid); ?>
        </div>
       <div id="central-inf" class="col2 columna-inf">
          <?php if(!$logged_in) {print render($content['links']); }?>
          <?php print render($content['field_vota']); ?>
          <h3 class='field-label show'><?php print t('Vote'); ?></h3>
          <?php print ('<span> Hi ha '.$node->comment_count.' comentaris </span>'); ?>
          <?php if($comment_count > 0): ?>
            <div class="comments-wrapper">
             <div data-cycle-slides="article.comment" data-cycle-next="#cm-next" data-cycle-prev="#cm-prev" data-cycle-timeout="0" data-cycle-fx="scrollHorz" class="cycle-slideshow comments_slide">
           <?php endif; ?>
           <?php print render($content['comments']); ?>
          <?php if($comment_count > 0): ?>
              </div>
            <div id="cm-next"></div>
            <div id="cm-prev"></div>
            </div>
          <?php endif; ?>
        </div>
       <div id="dreta-inf" class="col3 columna-inf">
         <div id=xxss> <?php print views_embed_view('xxss_del_node', 'block',$node->nid); ?> </div>
         <div id=compartir> Comparteix </div> <div id=iconacomp> </div>
         <div id=blogs><?php print views_embed_view('blogs_similar_al_punt', 'block_1'); ?> </div>
       </div>
     </span>
   </div>
  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
 //   print render($content);
  ?>




</article>
<?php drupal_add_js(drupal_get_path('theme', 'pamapam') . '/js/punt_full.js'); ?>
