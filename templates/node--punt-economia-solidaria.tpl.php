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
  <?php dsm($content); ?>
  <?php dsm($node); ?>
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

   <div id="general-wrapper"> 
     <span class="filasup"> 
       <div id="esquerra" class="columna-sup"> 
          <div id="fotografia" class="camp"> 
            <?php print render($content['field_fotografia']); ?>  
          </div>
          <div id="desde" class="camp"> 
            <?php   print ('Membre desde '.render($content['field_membre_desde'])); ?>  
          </div>
          <div id="links" class="camp"> 
          </div>
       </div> 
       <div id="central" class="columna-sup"> 
         <div id="titol" class="camp"> 
           <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
         </div>
         <?php foreach ($content['field_sector_subsectors'] as $key => $values) { ?>
         <?php   if(is_numeric($key)) { ?>
         <div id="sectors" class="camp"> 
            <a href="<?php print $values['#href']; ?>"><div id="<?php print $values['#title']; ?>" class=icona></div></a>
         </div>
         <?php   }    ?>
         <?php }      ?>
         <?php foreach ($content['field_etiquetes'] as $key => $values) { ?>
         <?php   if(is_numeric($key)) { ?>
         <div id="etiquetes" class="camp"> 
           <?php print $values['#items']['0']['data']; ?>
         </div>
         <?php   }    ?>
         <?php }      ?>
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
       <div id="dreta" class="columna-sup">  
        <?php
        $arrayaux = array();           
         foreach ($node->field_avaluacio_punt[LANGUAGE_NONE] as $key2 => $value) { 
           if(is_numeric($key2) && isset($value['entity']->changed)) {
            $arrayaux[$value['entity']->changed] = $value['entity']; 
           }
         }
        krsort($arrayaux,SORT_NUMERIC);
        foreach ($arrayaux as $key3 => $valor) { 
          if ($aux < 1) { 
            foreach ($valor as $key4 => $valor2) {
              if(strpos($key4,'avaluacio_criteri') !== false) { 
                if(isset($valor2[LANGUAGE_NONE]['0']['value'])) {?> 
                  <span class="criteri">
                    <div id="<?php print($key4);?>">
                       <div class="<?php print($valor2[LANGUAGE_NONE]['0']['value']);?>">
                       </div>
                   </div>  
                 </span>
<?php           }
              }
            }          
          }
        }?>
       </div> 
     </span>  
     <span class="filainf">
       <div id="esquerra" class="columna-inf"> </div> 
       <div id="central" class="columna-inf"> </div> 
       <div id="dreta" class="columna-inf"> </div> 
     </span>
   </div>
  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
 //   print render($content);
  ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
       <div id="dreta" class="columna-sup">  
    
       </div> 
     </span>  
     <span class="filainf">
       <div id="esquerra" class="columna-inf"> </div> 
       <div id="central" class="columna-inf"> </div> 
       <div id="dreta" class="columna-inf"> </div> 
     </span>
   </div>
  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
 //   print render($content);
  ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
       <div id="dreta" class="columna-sup">  
    
       </div> 
     </span>  
     <span class="filainf">
       <div id="esquerra" class="columna-inf"> </div> 
       <div id="central" class="columna-inf"> </div> 
       <div id="dreta" class="columna-inf"> </div> 
     </span>
   </div>
  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
 //   print render($content);
  ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
