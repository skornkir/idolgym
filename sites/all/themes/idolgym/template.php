<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
function idolgym_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  idolgym_preprocess_html($variables, $hook);
  idolgym_preprocess_page($variables, $hook);
}

/**
 * Override or insert variables into the html templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("html" in this case.)
 */
function idolgym_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  $variables['classes_array'] = array_diff($variables['classes_array'],
    array('class-to-remove')
  );
}

/**
 * Override or insert variables into the page templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("page" in this case.)
 */
function idolgym_preprocess_page(&$variables, $hook) {
    $variables['clubs'] = idol_get_clubs();
    if(!isset($_COOKIE['clubtid'])){
        $term = taxonomy_term_load(37);
        setcookie("clubtid",37);
        setcookie("clubname",'Нагатино');
        setcookie("clubphone",$term->field_phone['und'][0]['value']);
        setcookie("clubvk",$term->field_vkfield['und'][0]['value']);
        setcookie("clubinsta",$term->field_instagram1['und'][0]['value']);
        setcookie("clubfb",$term->field_facebook1['und'][0]['value']);
    }
    $path = drupal_get_path('theme', 'idolgym') . "/js/idolvue.js";
    drupal_add_js($path);

    $settings = array(
        'clubs' => idol_get_clubs(),
        'current_club_tid' => $_COOKIE['clubtid'],
        'current_club_name' => $_COOKIE['clubname'],
        'current_club_phone' => $_COOKIE['clubphone'],
        'current_club_vk' => $_COOKIE['clubvk'],
        'current_club_insta' => $_COOKIE['clubinsta'],
        'current_club_fb' => $_COOKIE['clubfb'],
    );
    ddl($settings);
    drupal_add_js($settings, 'setting');
}

function idol_get_clubs(){
    $vid = 8;
    $tids_club = array_keys(schedule_get_tids($vid));
    $clubs = array();
    foreach ($tids_club as $tid){
        $term = taxonomy_term_load($tid);
        $clubs[$tid] = array(
            'id' => $tid,
            'name' => $term->name,
            'address' => $term->field_city['und'][0]['value'],
            'phone' => $term->field_phone['und'][0]['value'],
            'vk' => $term->field_vkfield['und'][0]['value'],
            'insta' => $term->field_instagram1['und'][0]['value'],
            'fb' => $term->field_facebook1['und'][0]['value'],
        );
    }
    return $clubs;
}

/**
 * Override or insert variables into the region templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("region" in this case.)
 */
function idolgym_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--no-wrapper.tpl.php template for sidebars.
  if (strpos($variables['region'], 'sidebar_') === 0) {
    $variables['theme_hook_suggestions'] = array_diff(
      $variables['theme_hook_suggestions'], array('region__no_wrapper')
    );
  }
}

/**
 * Override or insert variables into the block templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("block" in this case.)
 */
function idolgym_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  if ($variables['block_html_id'] == 'block-system-main') {
    $variables['theme_hook_suggestions'] = array_diff(
      $variables['theme_hook_suggestions'], array('block__no_wrapper')
    );
  }
}

/**
 * Override or insert variables into the node templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function idolgym_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // STARTERKIT_preprocess_node_page() or STARTERKIT_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}

/**
 * Override or insert variables into the comment templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
function idolgym_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
