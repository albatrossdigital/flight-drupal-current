<?php
/**
 * @file
 * reach_search_api_blog.ds.inc
 */

/**
 * Implements hook_ds_custom_fields_info().
 */
function reach_search_api_blog_ds_custom_fields_info() {
  $export = array();

  $ds_field = new stdClass();
  $ds_field->api_version = 1;
  $ds_field->field = 'date_with_author';
  $ds_field->label = 'Date with author';
  $ds_field->field_type = 5;
  $ds_field->entities = array(
    'node' => 'node',
  );
  $ds_field->properties = array(
    'code' => array(
      'value' => '<span class="date-published"><?php print format_date($entity->created, \'day_short\'); ?></span><span class="date-separator">|</span>
<?php
  if($entity->uid) {
    $user = user_load($entity->uid);
    $link = \'/blog?f[0]=author%253Aname%3A\' . $user->name;
    $author = \'<a href="\' . $link .  \'">\' . $user->name . \'</a>\';
  }
  else {
    $author = \'Anonymous\';
  }
?>
<span class="date-author">By: <?php print $author; ?>
</span>',
      'format' => 'ds_code',
    ),
    'use_token' => 0,
  );
  $export['date_with_author'] = $ds_field;

  $ds_field = new stdClass();
  $ds_field->api_version = 1;
  $ds_field->field = 'taxonomy_alter_for_blog_listing';
  $ds_field->label = 'Taxonomy alter for blog listing';
  $ds_field->field_type = 5;
  $ds_field->entities = array(
    'node' => 'node',
  );
  $ds_field->properties = array(
    'code' => array(
      'value' => '<?php
  $terms = array();
  foreach($entity->field_tags[\'und\'] as $key => $value) {
    $link = \'/blog?f[0]=field_tags%3A\' . $value[\'tid\'];
    $terms[$key] = \'<a href="\' . $link .  \'">\' . $value[\'taxonomy_term\']->name . \'</a>\';
  }
 
?>
<?php if(!empty($terms)): ?>
<span class="field-tags">Tags:</span>
<?php
  foreach($terms as $key => $value) {
    print \'<span class="term-item">\' .  $value . \'</span>\';
  }
?>
<?php else: ?>
<span class="field-tags"></span>
<?php endif; ?>',
      'format' => 'ds_code',
    ),
    'use_token' => 0,
  );
  $export['taxonomy_alter_for_blog_listing'] = $ds_field;

  return $export;
}
