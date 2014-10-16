<?php
/**
 * @file main configs for theme
 */
/**
 * Implements hook_form_system_theme_settings_alter().
 */
function pamapam_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

  $theme_settings_path = drupal_get_path('theme', 'pamapam') . '/theme-settings.php';
  if (file_exists($theme_settings_path) && !in_array($theme_settings_path, $form_state['build_info']['files'])) {
    $form_state['build_info']['files'][] = $theme_settings_path;
  }
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  $form['pam_a_pam'] = array(
    '#type' => 'fieldset',
    '#title' => t('Gestiona el contingut de la portada:'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  
  $form['pam_a_pam']['blocs-central'] = array(
    '#type' => 'fieldset',
    '#title' => t('Blocs centrals de la portada:'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );   
  $form['pam_a_pam']['blocs-central']['superior'] = array(
    '#type' => 'fieldset',
    '#title' => t('Blocs de la fila superior'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );  
 $aux1 = theme_get_setting('central-sup-esquerra'); 
  $form['pam_a_pam']['blocs-central']['superior']['central-sup-esquerra'] = array(
    '#type' => 'text_format',
    '#title' => t('Contingut del bloc superior esquerra'),
    '#default_value' => $aux1['value'],
    '#format' => 'editor_web',
  );
 $aux2 = theme_get_setting('central-sup-central'); 
  $form['pam_a_pam']['blocs-central']['superior']['central-sup-central'] = array(
    '#type' => 'text_format',
    '#title' => t('Contingut del bloc superior central'),
    '#default_value' => $aux2['value'],
    '#format' => 'editor_web',
  );
  $form['pam_a_pam']['blocs-central']['inferior'] = array(
    '#type' => 'fieldset',
    '#title' => t('Blocs de la fila inferior'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );   
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-esquerra'] = array(
    '#type' => 'fieldset',
    '#title' => t('Bloc inferior esquerra'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );   
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-esquerra']['central-inf-esquerra-img'] = array(
    '#type' => 'managed_file',
    '#title' => t('Imatge del bloc inferior esquerra'),
    '#default_value' => theme_get_setting('central-inf-esquerra-img'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg svg'),
    ),
     '#upload_location' => 'public://tema/', 
  );
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-esquerra']['central-inf-esquerra-txt-img'] = array(
    '#type' => 'textfield',
    '#title' => t('Text sobreposat a la imatge del bloc inferior esquerra'),
    '#default_value' => theme_get_setting('central-inf-esquerra-txt-img'),
  );
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-esquerra']['central-inf-esquerra-txt'] = array(
    '#type' => 'textfield',
    '#title' => t('Text del bloc inferior esquerra'),
    '#default_value' => theme_get_setting('central-inf-esquerra-txt'),
  );
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-esquerra']['central-inf-esquerra-link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link de la imatge del bloc inferior esquerra'),
    '#default_value' => theme_get_setting('central-inf-esquerra-link'),
  );
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-central'] = array(
    '#type' => 'fieldset',
    '#title' => t('Bloc inferior central'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );   
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-central']['central-inf-central-img'] = array(
    '#type' => 'managed_file',
    '#title' => t('Imatge del bloc central esquerra'),
    '#default_value' => theme_get_setting('central-inf-central-img'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg svg'),
    ),
    '#upload_location' => 'public://tema/', 
  );
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-central']['central-inf-central-txt'] = array(
    '#type' => 'textfield',
    '#title' => t('Text del bloc inferior central'),
    '#default_value' => theme_get_setting('central-inf-central-txt'),
  );
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-central']['central-inf-central-txt-img'] = array(
    '#type' => 'textfield',
    '#title' => t('Text sobreposat a la imatge del bloc inferior central'),
    '#default_value' => theme_get_setting('central-inf-central-txt-img'),
  );
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-central']['central-inf-central-link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link de la imatge del bloc inferior central'),
    '#default_value' => theme_get_setting('central-inf-central-link'),
  );
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-dreta'] = array(
    '#type' => 'fieldset',
    '#title' => t('Bloc inferior dreta'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );   
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-dreta']['central-inf-dreta-img'] = array(
    '#type' => 'managed_file',
    '#title' => t('Imatge del bloc inferior dret'),
    '#default_value' => theme_get_setting('central-inf-dreta-img'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg svg'),
    ),
    '#upload_location' => 'public://tema/', 
  );
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-dreta']['central-inf-dreta-txt'] = array(
    '#type' => 'textfield',
    '#title' => t('Text del bloc inferior dret'),
    '#default_value' => theme_get_setting('central-inf-dreta-txt'),
  );
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-dreta']['central-inf-dreta-txt-img'] = array(
    '#type' => 'textfield',
    '#title' => t('Text sobreposat a la imatge del bloc inferior dret'),
    '#default_value' => theme_get_setting('central-inf-dreta-txt-img'),
  );
  $form['pam_a_pam']['blocs-central']['inferior']['central-inf-dreta']['central-inf-dreta-link'] = array(
    '#type' => 'textfield',
    '#title' => t('Link de la imatge del bloc inferior dret'),
    '#default_value' => theme_get_setting('central-inf-dreta-link'),
  );
  $aux = theme_get_setting('pre-footer');
  $form['pam_a_pam']['pre-footer'] = array(
    '#type' => 'text_format',
    '#title' => t('Zona de text superior al footer'),
    '#default_value' => $aux['value'],
    '#format' => 'editor_web',
  );
  $form['pam_a_pam']['bloc-esquerra'] = array(
    '#type' => 'fieldset',
    '#title' => t('Zona esquerra del peu del web:'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['pam_a_pam']['bloc-esquerra']['superior'] = array(
    '#type' => 'textfield',
    '#title' => t('Texte superior als logos'),
    '#default_value' => theme_get_setting('superior'),
  );
  $form['pam_a_pam']['bloc-esquerra']['imagen01'] = array(
    '#type' => 'managed_file',
    '#title' => t('Imatge del primer logo'),
    '#default_value' => theme_get_setting('imagen01'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg svg'),
    ),
    '#upload_location' => 'public://tema/', 
  );
  $form['pam_a_pam']['bloc-esquerra']['text1'] = array(
    '#type' => 'textarea',
    '#title' => t('Texte inferior del logo esquerra'),
    '#default_value' => theme_get_setting('text1'),
  );
    $form['pam_a_pam']['bloc-esquerra']['enllac1'] = array(
    '#type' => 'textfield',
    '#title' => t("Enllaç del logo esquerra"),
    '#default_value' => theme_get_setting('text1'),
  );
  $form['pam_a_pam']['bloc-esquerra']['imagen02'] = array(
    '#type' => 'managed_file',
    '#title' => t('Imatge del segon logo'),
    '#default_value' => theme_get_setting('imagen02'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg svg'),
    ),
    '#upload_location' => 'public://tema/', 
  );
  $form['pam_a_pam']['bloc-esquerra']['enllac2'] = array(
    '#type' => 'textfield',
    '#title' => t("Enllaç dl logo dreta"),
    '#default_value' => theme_get_setting('text2'),
  );
  $form['pam_a_pam']['bloc-esquerra']['text2'] = array(
    '#type' => 'textarea',
    '#title' => t('Texte inferior al logos dreta'),
    '#default_value' => theme_get_setting('text2'),
  );
  $form['pam_a_pam']['bloc-dret'] = array(
    '#type' => 'fieldset',
    '#title' => t('Zona dreta del peu del web:'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['pam_a_pam']['bloc-dret']['text21'] = array(
    '#type' => 'textfield',
    '#title' => t('Texte superior als logos'),
    '#default_value' => theme_get_setting('text21'),
  );
  $form['pam_a_pam']['bloc-dret']['imagen1'] = array(
    '#type' => 'managed_file',
    '#title' => t('Imatge del primer logo'),
    '#default_value' => theme_get_setting('imagen1'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg svg'),
    ),
    '#upload_location' => 'public://tema/', 
  );
  $form['pam_a_pam']['bloc-dret']['enllac21'] = array(
    '#type' => 'textfield',
    '#title' => t("Enllaç del logo dret"),
    '#default_value' => theme_get_setting('enllac21'),
  );
  $form['pam_a_pam']['bloc-dret']['imagen2'] = array(
    '#type' => 'managed_file',
    '#default_value' => theme_get_setting('imagen2'),
    '#title' => t('Imatge del segon logo'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg svg'),
    ),
    '#upload_location' => 'public://tema/', 
  );
  $form['pam_a_pam']['bloc-dret']['enllac22'] = array(
    '#type' => 'textfield',
    '#title' => t("Enllaç del logo central"),
    '#default_value' => theme_get_setting('enllac22'),
  );
  $form['pam_a_pam']['bloc-dret']['imagen3'] = array(
    '#type' => 'managed_file',
    '#default_value' => theme_get_setting('imagen3'),
    '#title' => t('Imatge del tercer logo'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg svg'),
    ),
    '#upload_location' => 'public://tema/', 
  );
  $form['pam_a_pam']['bloc-dret']['enllac23'] = array(
    '#type' => 'textfield',
    '#title' => t("Enllaç del logo de la esquerra"),
    '#default_value' => theme_get_setting('enllac23'),
  );
  $form['#submit'] = array('pamapam_settings_submit');
}
/**
 * Implements hook_submit().
 */
function pamapam_settings_submit(&$form, &$form_state) {
  if (file_load($form_state['values']['imagen1']) != 0) {
    $file = file_load($form_state['values']['imagen1']);
    $file->status = FILE_STATUS_PERMANENT;
    file_save($file);
    file_usage_add($file, 'pamapam', 'layout', '8');
  }
  if (file_load($form_state['values']['imagen2']) != 0) {
    $file = file_load($form_state['values']['imagen2']);
    $file->status = FILE_STATUS_PERMANENT;
    file_save($file);
    file_usage_add($file, 'pamapam', 'layout', '8');
  }
  if (file_load($form_state['values']['imagen3']) != 0) {
    $file = file_load($form_state['values']['imagen3']);
    $file->status = FILE_STATUS_PERMANENT;
    file_save($file);
    file_usage_add($file, 'pamapam', 'layout', '8');
  }
  if (file_load($form_state['values']['imagen01']) != 0) {
    $file = file_load($form_state['values']['imagen01']);
    $file->status = FILE_STATUS_PERMANENT;
    file_save($file);
    file_usage_add($file, 'pamapam', 'layout', '8');
  }
  if (file_load($form_state['values']['imagen02']) != 0) {
    $file = file_load($form_state['values']['imagen02']);
    $file->status = FILE_STATUS_PERMANENT;
    file_save($file);
    file_usage_add($file, 'pamapam', 'layout', '8');
  }
}
