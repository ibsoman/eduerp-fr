<?php
$view = new view;
$view->name = 'list_staff';
$view->description = 'List Staff';
$view->tag = '';
$view->view_php = '';
$view->base_table = 'users';
$view->is_cacheable = FALSE;
$view->api_version = 2;
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
$handler = $view->new_display('default', 'Defaults', 'default');
$handler->override_option('relationships', array(
  'content_profile_rel' => array(
    'label' => 'Content Profile',
    'required' => 1,
    'type' => 'profile',
    'id' => 'content_profile_rel',
    'table' => 'users',
    'field' => 'content_profile_rel',
    'relationship' => 'none',
  ),
  'content_profile_rel_1' => array(
    'label' => 'Content Staff Profile',
    'required' => 1,
    'type' => 'staff_profile',
    'id' => 'content_profile_rel_1',
    'table' => 'users',
    'field' => 'content_profile_rel',
    'relationship' => 'none',
  ),
  'field_profile_department_id_nid' => array(
    'label' => 'Department',
    'required' => 0,
    'delta' => -1,
    'id' => 'field_profile_department_id_nid',
    'table' => 'node_data_field_profile_department_id',
    'field' => 'field_profile_department_id_nid',
    'relationship' => 'content_profile_rel',
  ),
));
$handler->override_option('fields', array(
  'field_profile_staff_no_value' => array(
    'label' => 'Staff Number',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 1,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_staff_no_value',
    'table' => 'node_data_field_profile_staff_no',
    'field' => 'field_profile_staff_no_value',
    'relationship' => 'content_profile_rel_1',
  ),
  'field_profile_title_name_value' => array(
    'label' => 'Title',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_title_name_value',
    'table' => 'node_data_field_profile_title_name',
    'field' => 'field_profile_title_name_value',
    'relationship' => 'content_profile_rel',
  ),
  'field_profile_last_name_value' => array(
    'label' => 'Last Name',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 1,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_last_name_value',
    'table' => 'node_data_field_profile_last_name',
    'field' => 'field_profile_last_name_value',
    'relationship' => 'content_profile_rel',
  ),
  'field_profile_first_name_value' => array(
    'label' => 'First Name',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 1,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_first_name_value',
    'table' => 'node_data_field_profile_first_name',
    'field' => 'field_profile_first_name_value',
    'relationship' => 'content_profile_rel',
  ),
  'field_profile_middle_name_value' => array(
    'label' => 'Middle Name',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_middle_name_value',
    'table' => 'node_data_field_profile_middle_name',
    'field' => 'field_profile_middle_name_value',
    'relationship' => 'content_profile_rel',
  ),
  'field_profile_gender_value' => array(
    'label' => 'Gender',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_gender_value',
    'table' => 'node_data_field_profile_gender',
    'field' => 'field_profile_gender_value',
    'relationship' => 'content_profile_rel',
  ),
  'field_profile_state_name_origin_value' => array(
    'label' => 'State of Origin',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_profile_state_name_origin_value',
    'table' => 'node_data_field_profile_state_name_origin',
    'field' => 'field_profile_state_name_origin_value',
    'relationship' => 'content_profile_rel',
  ),
  'field_department_name_value' => array(
    'label' => 'Department',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_node' => 0,
    'label_type' => 'widget',
    'format' => 'default',
    'multiple' => array(
      'group' => TRUE,
      'multiple_number' => '',
      'multiple_from' => '',
      'multiple_reversed' => FALSE,
    ),
    'exclude' => 0,
    'id' => 'field_department_name_value',
    'table' => 'node_data_field_department_name',
    'field' => 'field_department_name_value',
    'relationship' => 'field_profile_department_id_nid',
  ),
  'mail' => array(
    'label' => 'E-mail',
    'alter' => array(
      'alter_text' => 0,
      'text' => '',
      'make_link' => 0,
      'path' => '',
      'link_class' => '',
      'alt' => '',
      'prefix' => '',
      'suffix' => '',
      'target' => '',
      'help' => '',
      'trim' => 0,
      'max_length' => '',
      'word_boundary' => 1,
      'ellipsis' => 1,
      'html' => 0,
      'strip_tags' => 0,
    ),
    'empty' => '',
    'hide_empty' => 0,
    'empty_zero' => 0,
    'link_to_user' => 'user',
    'exclude' => 0,
    'id' => 'mail',
    'table' => 'users',
    'field' => 'mail',
    'relationship' => 'none',
  ),
));
$handler->override_option('filters', array(
  'field_profile_employment_type_value_many_to_one' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_profile_employment_type_value_many_to_one_op',
      'identifier' => 'employment_type',
      'label' => 'Employment Type',
      'optional' => 1,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_profile_employment_type_value_many_to_one',
    'table' => 'node_data_field_profile_employment_type',
    'field' => 'field_profile_employment_type_value_many_to_one',
    'relationship' => 'content_profile_rel_1',
    'reduce_duplicates' => 0,
  ),
  'field_profile_staff_type_value_many_to_one' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_profile_staff_type_value_many_to_one_op',
      'identifier' => 'staff_type',
      'label' => 'Staff Type',
      'optional' => 1,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_profile_staff_type_value_many_to_one',
    'table' => 'node_data_field_profile_staff_type',
    'field' => 'field_profile_staff_type_value_many_to_one',
    'relationship' => 'content_profile_rel_1',
    'reduce_duplicates' => 0,
  ),
  'field_profile_gender_value_many_to_one' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_profile_gender_value_many_to_one_op',
      'identifier' => 'staff_gender',
      'label' => 'Gender',
      'optional' => 1,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_profile_gender_value_many_to_one',
    'table' => 'node_data_field_profile_gender',
    'field' => 'field_profile_gender_value_many_to_one',
    'relationship' => 'content_profile_rel',
    'reduce_duplicates' => 0,
  ),
  'field_department_name_value_many_to_one' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_department_name_value_many_to_one_op',
      'identifier' => 'staff_department',
      'label' => 'Department',
      'optional' => 1,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_department_name_value_many_to_one',
    'table' => 'node_data_field_department_name',
    'field' => 'field_department_name_value_many_to_one',
    'relationship' => 'field_profile_department_id_nid',
    'reduce_duplicates' => 0,
  ),
  'field_profile_state_name_origin_value_many_to_one' => array(
    'operator' => 'or',
    'value' => array(),
    'group' => '0',
    'exposed' => TRUE,
    'expose' => array(
      'use_operator' => 0,
      'operator' => 'field_profile_state_name_origin_value_many_to_one_op',
      'identifier' => 'state_name_origin',
      'label' => 'State of Origin',
      'optional' => 1,
      'single' => 1,
      'remember' => 1,
      'reduce' => 0,
    ),
    'id' => 'field_profile_state_name_origin_value_many_to_one',
    'table' => 'node_data_field_profile_state_name_origin',
    'field' => 'field_profile_state_name_origin_value_many_to_one',
    'relationship' => 'content_profile_rel',
    'reduce_duplicates' => 0,
  ),
));
$handler->override_option('access', array(
  'type' => 'perm',
  'perm' => 'staff data',
));
$handler->override_option('cache', array(
  'type' => 'none',
));
$handler->override_option('footer_format', '3');
$handler->override_option('footer_empty', 0);
$handler->override_option('items_per_page', 100);
$handler->override_option('use_pager', '1');
$handler->override_option('style_plugin', 'table');
$handler->override_option('style_options', array(
  'grouping' => '',
  'override' => 1,
  'sticky' => 0,
  'order' => 'asc',
  'columns' => array(
    'value_4' => 'value_4',
    'value_7' => 'value_7',
    'value' => 'value',
    'value_1' => 'value_1',
    'value_2' => 'value_2',
    'value_5' => 'value_5',
    'value_6' => 'value_6',
    'value_3' => 'value_3',
    'field_profile_staff_no_value' => 'field_profile_staff_no_value',
    'field_profile_title_name_value' => 'field_profile_title_name_value',
    'field_profile_last_name_value' => 'field_profile_last_name_value',
    'field_profile_first_name_value' => 'field_profile_first_name_value',
    'field_profile_middle_name_value' => 'field_profile_middle_name_value',
    'field_profile_gender_value' => 'field_profile_gender_value',
    'field_profile_state_name_origin_value' => 'field_profile_state_name_origin_value',
    'field_department_name_value' => 'field_department_name_value',
  ),
  'info' => array(
    'value_4' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value_7' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value_1' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value_2' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value_5' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value_6' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'value_3' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_staff_no_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_title_name_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_last_name_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_first_name_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_middle_name_value' => array(
      'sortable' => 0,
      'separator' => '',
    ),
    'field_profile_gender_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_profile_state_name_origin_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
    'field_department_name_value' => array(
      'sortable' => 1,
      'separator' => '',
    ),
  ),
  'default' => 'field_profile_last_name_value',
));
$handler = $view->new_display('page', 'Page', 'page_1');
$handler->override_option('path', 'liststaff');
$handler->override_option('menu', array(
  'type' => 'none',
  'title' => '',
  'description' => '',
  'weight' => 0,
  'name' => 'navigation',
));
$handler->override_option('tab_options', array(
  'type' => 'none',
  'title' => '',
  'description' => '',
  'weight' => 0,
  'name' => 'navigation',
));
