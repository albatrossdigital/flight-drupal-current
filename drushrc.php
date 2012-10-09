<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'minimal',
  1 => 'testing',
  2 => 'standard',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'profile' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile.test',
          ),
          'configure' => 'admin/config/people/profile',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
        'basename' => 'drupal_system_listing_compatible_test.module',
        'name' => 'drupal_system_listing_compatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'drupal_system_listing_incompatible_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
        'basename' => 'drupal_system_listing_incompatible_test.module',
        'name' => 'drupal_system_listing_incompatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing incompatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'session_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'session_test',
        'info' => 
        array (
          'name' => 'Session test',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'ajax_forms_test',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'description' => 'Test for AJAX form calls.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.15',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'form_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'form_test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'module_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'module_test',
        'info' => 
        array (
          'name' => 'Module test',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'entity_cache_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/entity_cache_test.module',
        'basename' => 'entity_cache_test.module',
        'name' => 'entity_cache_test',
        'info' => 
        array (
          'name' => 'Entity cache test',
          'description' => 'Support module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_cache_test_dependency',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'entity_crud_hook_test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.15',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'update_test_2' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/update_test_2.module',
        'basename' => 'update_test_2.module',
        'name' => 'update_test_2',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'system_incompatible_core_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/system_incompatible_core_version_test.module',
        'basename' => 'system_incompatible_core_version_test.module',
        'name' => 'system_incompatible_core_version_test',
        'info' => 
        array (
          'name' => 'System incompatible core version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '5.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'xmlrpc_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/xmlrpc_test.module',
        'basename' => 'xmlrpc_test.module',
        'name' => 'xmlrpc_test',
        'info' => 
        array (
          'name' => 'XML-RPC Test',
          'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
        'basename' => 'system_incompatible_core_version_dependencies_test.module',
        'name' => 'system_incompatible_core_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_core_version_test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'menu_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'menu_test',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'batch_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'batch_test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'path_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'path_test',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'file_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'file_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'update_script_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'update_script_test',
        'info' => 
        array (
          'name' => 'Update script test',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'common_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'common_test',
        'info' => 
        array (
          'name' => 'Common Test',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'common_test.css',
            ),
            'print' => 
            array (
              0 => 'common_test.print.css',
            ),
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'database_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'database_test',
        'info' => 
        array (
          'name' => 'Database Test',
          'description' => 'Support module for Database layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.15',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'ajax_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/ajax_test.module',
        'basename' => 'ajax_test.module',
        'name' => 'ajax_test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'error_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/error_test.module',
        'basename' => 'error_test.module',
        'name' => 'error_test',
        'info' => 
        array (
          'name' => 'Error test',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/requirements1_test.module',
        'basename' => 'requirements1_test.module',
        'name' => 'requirements1_test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'theme_test',
        'info' => 
        array (
          'name' => 'Theme test',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'entity_cache_test_dependency' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/entity_cache_test_dependency.module',
        'basename' => 'entity_cache_test_dependency.module',
        'name' => 'entity_cache_test_dependency',
        'info' => 
        array (
          'name' => 'Entity cache test dependency',
          'description' => 'Support dependency module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/requirements2_test.module',
        'basename' => 'requirements2_test.module',
        'name' => 'requirements2_test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'requirements1_test',
            1 => 'comment',
          ),
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'taxonomy_test',
        'info' => 
        array (
          'name' => 'Taxonomy test module',
          'description' => '"Tests functions and hooks not used in core".',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
        'basename' => 'system_incompatible_module_version_dependencies_test.module',
        'name' => 'system_incompatible_module_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_module_version_test (>2.0)',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'actions_loop_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/actions_loop_test.module',
        'basename' => 'actions_loop_test.module',
        'name' => 'actions_loop_test',
        'info' => 
        array (
          'name' => 'Actions loop test',
          'description' => 'Support module for action loop testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'update_test_1' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/update_test_1.module',
        'basename' => 'update_test_1.module',
        'name' => 'update_test_1',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'image_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/image_test.module',
        'basename' => 'image_test.module',
        'name' => 'image_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/system_dependencies_test.module',
        'basename' => 'system_dependencies_test.module',
        'name' => 'system_dependencies_test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => '_missing_dependency',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'filter_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'filter_test',
        'info' => 
        array (
          'name' => 'Filter test module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/url_alter_test.module',
        'basename' => 'url_alter_test.module',
        'name' => 'url_alter_test',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'description' => 'A support modules for url_alter hook testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.15',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/system_incompatible_module_version_test.module',
        'basename' => 'system_incompatible_module_version_test.module',
        'name' => 'system_incompatible_module_version_test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'common_test_cron_helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'entity_query_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/entity_query_access_test.module',
        'basename' => 'entity_query_access_test.module',
        'name' => 'entity_query_access_test',
        'info' => 
        array (
          'name' => 'Entity query access test',
          'description' => 'Support module for checking entity query results.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'update_test_3' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/update_test_3.module',
        'basename' => 'update_test_3.module',
        'name' => 'update_test_3',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'system_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/tests/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'system_test',
        'info' => 
        array (
          'name' => 'System test',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud_hook_test.test',
            10 => 'tests/entity_query.test',
            11 => 'tests/error.test',
            12 => 'tests/file.test',
            13 => 'tests/filetransfer.test',
            14 => 'tests/form.test',
            15 => 'tests/graph.test',
            16 => 'tests/image.test',
            17 => 'tests/lock.test',
            18 => 'tests/mail.test',
            19 => 'tests/menu.test',
            20 => 'tests/module.test',
            21 => 'tests/pager.test',
            22 => 'tests/password.test',
            23 => 'tests/path.test',
            24 => 'tests/registry.test',
            25 => 'tests/schema.test',
            26 => 'tests/session.test',
            27 => 'tests/tablesort.test',
            28 => 'tests/theme.test',
            29 => 'tests/unicode.test',
            30 => 'tests/update.test',
            31 => 'tests/xmlrpc.test',
            32 => 'tests/upgrade/upgrade.test',
            33 => 'tests/upgrade/upgrade.comment.test',
            34 => 'tests/upgrade/update.field.test',
            35 => 'tests/upgrade/upgrade.filter.test',
            36 => 'tests/upgrade/upgrade.forum.test',
            37 => 'tests/upgrade/upgrade.locale.test',
            38 => 'tests/upgrade/upgrade.menu.test',
            39 => 'tests/upgrade/upgrade.node.test',
            40 => 'tests/upgrade/upgrade.taxonomy.test',
            41 => 'tests/upgrade/upgrade.trigger.test',
            42 => 'tests/upgrade/upgrade.translatable.test',
            43 => 'tests/upgrade/update.trigger.test',
            44 => 'tests/upgrade/upgrade.upload.test',
            45 => 'tests/upgrade/update.user.test',
            46 => 'tests/upgrade/upgrade.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.15',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'rdf_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/rdf/tests/rdf_test.module',
        'basename' => 'rdf_test.module',
        'name' => 'rdf_test',
        'info' => 
        array (
          'name' => 'RDF module tests',
          'description' => 'Support module for RDF module testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7074',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'locale_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/locale/tests/locale_test.module',
        'basename' => 'locale_test.module',
        'name' => 'locale_test',
        'info' => 
        array (
          'name' => 'Locale Test',
          'description' => 'Support module for the locale layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.15',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'node_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/node/tests/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'node_test',
        'info' => 
        array (
          'name' => 'Node module tests',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'node_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/node/tests/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'node_access_test',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/node/tests/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'node_test_exception',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'file_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/file/tests/file_module_test.module',
        'basename' => 'file_module_test.module',
        'name' => 'file_module_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/search/tests/search_extra_type.module',
        'basename' => 'search_extra_type.module',
        'name' => 'search_extra_type',
        'info' => 
        array (
          'name' => 'Test search type',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/search/tests/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'search_embedded_form',
        'info' => 
        array (
          'name' => 'Search embedded form',
          'description' => 'Support module for search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'block_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/block/tests/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'block_test',
        'info' => 
        array (
          'name' => 'Block test',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'trigger_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/trigger/tests/trigger_test.module',
        'basename' => 'trigger_test.module',
        'name' => 'trigger_test',
        'info' => 
        array (
          'name' => 'Trigger Test',
          'description' => 'Support module for Trigger tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.15',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'openid_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/openid/tests/openid_test.module',
        'basename' => 'openid_test.module',
        'name' => 'openid_test',
        'info' => 
        array (
          'name' => 'OpenID dummy provider',
          'description' => 'OpenID provider used for testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.15',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'user_form_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/user/tests/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'user_form_test',
        'info' => 
        array (
          'name' => 'User module form tests',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'translation_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/translation/tests/translation_test.module',
        'basename' => 'translation_test.module',
        'name' => 'translation_test',
        'info' => 
        array (
          'name' => 'Content Translation Test',
          'description' => 'Support module for the content translation tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.15',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/aggregator/tests/aggregator_test.module',
        'basename' => 'aggregator_test.module',
        'name' => 'aggregator_test',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.15',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'image_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/image/tests/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'image_module_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'image_module_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/update/tests/aaa_update_test.module',
        'basename' => 'aaa_update_test.module',
        'name' => 'aaa_update_test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.15',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/update/tests/bbb_update_test.module',
        'basename' => 'bbb_update_test.module',
        'name' => 'bbb_update_test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.15',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'update_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/update/tests/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'update_test',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/update/tests/ccc_update_test.module',
        'basename' => 'ccc_update_test.module',
        'name' => 'ccc_update_test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.15',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.15',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'field_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/field/tests/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'field_test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'description' => 'Support module for the Field API tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'files' => 
          array (
            0 => 'field_test.entity.inc',
          ),
          'version' => '7.15',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'list_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/field/modules/list/tests/list_test.module',
        'basename' => 'list_test.module',
        'name' => 'list_test',
        'info' => 
        array (
          'name' => 'List test',
          'description' => 'Support module for the List module tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.15',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.15',
      ),
    ),
    'themes' => 
    array (
      'garland' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
        ),
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'stark' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
        ),
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'seven' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
        ),
        'project' => 'drupal',
        'version' => '7.15',
      ),
      'bartik' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.15',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
        ),
        'project' => 'drupal',
        'version' => '7.15',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.15',
        'description' => 'This platform is running Drupal 7.15',
      ),
    ),
    'profiles' => 
    array (
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/var/aegir/platforms/albatross-7.15/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.15',
      ),
      'testing' => 
      array (
        'name' => 'testing',
        'filename' => '/var/aegir/platforms/albatross-7.15/profiles/testing/testing.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Minimal profile for running tests. Includes absolutely required modules only.',
          'version' => '7.15',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.15',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/var/aegir/platforms/albatross-7.15/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.15',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1343839327',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.15',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'panopoly_theme' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/panopoly_theme/panopoly_theme.module',
        'basename' => 'panopoly_theme.module',
        'name' => 'panopoly_theme',
        'info' => 
        array (
          'name' => 'Panopoly Theme',
          'description' => 'Helps with theming and provides many layouts.',
          'core' => '7.x',
          'package' => 'Panopoly',
          'php' => '5.2.4',
          'project' => 'panopoly_theme',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/panopoly_fonts.css',
            ),
          ),
          'version' => '7.x-1.0-beta4',
          'datestamp' => '1340290627',
        ),
        'schema_version' => 0,
        'project' => 'panopoly_theme',
        'version' => '7.x-1.0-beta4',
      ),
      'panopoly_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/panopoly_wysiwyg/panopoly_wysiwyg.module',
        'basename' => 'panopoly_wysiwyg.module',
        'name' => 'panopoly_wysiwyg',
        'info' => 
        array (
          'name' => 'Panopoly WYSIWYG',
          'description' => 'Integrates a WYSIWYG into Drupal.',
          'core' => '7.x',
          'package' => 'Panopoly',
          'php' => '5.2.4',
          'project' => 'panopoly_wysiwyg',
          'dependencies' => 
          array (
            0 => 'caption_filter',
            1 => 'features',
            2 => 'image_resize_filter',
            3 => 'media',
            4 => 'page_manager',
            5 => 'wysiwyg',
            6 => 'wysiwyg_filter',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'filter' => 
            array (
              0 => 'panopoly_html_text',
              1 => 'panopoly_wysiwyg_text',
            ),
            'user_permission' => 
            array (
              0 => 'use text format panopoly_html_text',
              1 => 'use text format panopoly_wysiwyg_text',
            ),
            'wysiwyg' => 
            array (
              0 => 'panopoly_html_text',
              1 => 'panopoly_wysiwyg_text',
            ),
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'panopoly_wysiwyg.css',
            ),
          ),
          'version' => '7.x-1.0-beta4',
          'datestamp' => '1340290631',
        ),
        'schema_version' => 0,
        'project' => 'panopoly_wysiwyg',
        'version' => '7.x-1.0-beta4',
      ),
      'module_filter' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.js',
            2 => 'module_filter.module',
            3 => 'module_filter.admin.inc',
            4 => 'module_filter.theme.inc',
            5 => 'css/module_filter.css',
            6 => 'css/module_filter_tab.css',
            7 => 'js/module_filter.js',
            8 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-1.6',
          'project' => 'module_filter',
          'datestamp' => '1316105205',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'module_filter',
        'version' => '7.x-1.6',
      ),
      'date_repeat_field' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/date/date_repeat_field/date_repeat_field.module',
        'basename' => 'date_repeat_field.module',
        'name' => 'date_repeat_field',
        'info' => 
        array (
          'name' => 'Date Repeat Field',
          'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
            2 => 'date_repeat',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date_repeat_field.css',
            ),
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_views' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/date/date_views/date_views.module',
        'basename' => 'date_views.module',
        'name' => 'date_views',
        'info' => 
        array (
          'name' => 'Date Views',
          'description' => 'Views integration for date fields and date functionality.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'includes/date_views_argument_handler.inc',
            1 => 'includes/date_views_argument_handler_simple.inc',
            2 => 'includes/date_views_filter_handler.inc',
            3 => 'includes/date_views_filter_handler_simple.inc',
            4 => 'includes/date_views.views_default.inc',
            5 => 'includes/date_views.views.inc',
            6 => 'includes/date_views_plugin_pager.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_api' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/date/date_api/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date.css',
            ),
          ),
          'files' => 
          array (
            0 => 'date_api.module',
            1 => 'date_api_sql.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7000',
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_context' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/date/date_context/date_context.module',
        'basename' => 'date_context.module',
        'name' => 'date_context',
        'info' => 
        array (
          'name' => 'Date Context',
          'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'context',
          ),
          'files' => 
          array (
            0 => 'date_context.module',
            1 => 'plugins/date_context_date_condition.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_popup' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/date_popup',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'themes/datepicker.1.7.css',
            ),
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_all_day' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/date/date_all_day/date_all_day.module',
        'basename' => 'date_all_day.module',
        'name' => 'date_all_day',
        'info' => 
        array (
          'name' => 'Date All Day',
          'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_repeat' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_repeat.test',
            1 => 'tests/date_repeat_form.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_tools' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/tools',
          'files' => 
          array (
            0 => 'tests/date_tools.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_migrate_example' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
        'basename' => 'date_migrate_example.module',
        'name' => 'date_migrate_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'date_repeat',
            2 => 'date_repeat_field',
            3 => 'date_migrate',
            4 => 'features',
            5 => 'migrate',
          ),
          'description' => 'Examples of migrating with the Date module',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-date_migrate_example-body',
              1 => 'node-date_migrate_example-field_date',
              2 => 'node-date_migrate_example-field_date_range',
              3 => 'node-date_migrate_example-field_date_repeat',
              4 => 'node-date_migrate_example-field_datestamp',
              5 => 'node-date_migrate_example-field_datestamp_range',
              6 => 'node-date_migrate_example-field_datetime',
              7 => 'node-date_migrate_example-field_datetime_range',
            ),
            'node' => 
            array (
              0 => 'date_migrate_example',
            ),
          ),
          'files' => 
          array (
            0 => 'date_migrate_example.migrate.inc',
          ),
          'name' => 'Date Migration Example',
          'package' => 'Features',
          'project' => 'date',
          'version' => '7.x-2.5',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/date/date_migrate/date_migrate.module',
        'basename' => 'date_migrate.module',
        'name' => 'date_migrate',
        'info' => 
        array (
          'name' => 'Date Migration',
          'description' => 'Provides support for importing into date fields with the Migrate module.',
          'core' => '7.x',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'migrate',
            1 => 'date',
          ),
          'files' => 
          array (
            0 => 'date.migrate.inc',
            1 => 'date_migrate.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Makes date/time fields available.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_api.test',
            1 => 'tests/date.test',
            2 => 'tests/date_field.test',
            3 => 'tests/date_validation.test',
            4 => 'tests/date_timezone.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
        ),
        'schema_version' => '7003',
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'nodequeue_service' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/nodequeue/addons/nodequeue_service/nodequeue_service.module',
        'basename' => 'nodequeue_service.module',
        'name' => 'nodequeue_service',
        'info' => 
        array (
          'name' => 'Nodequeue Service',
          'description' => 'Provides a nodequeue service.',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'nodequeue',
          ),
          'files' => 
          array (
            0 => 'nodequeue_service.inc',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'smartqueue' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/nodequeue/smartqueue.module',
        'basename' => 'smartqueue.module',
        'name' => 'smartqueue',
        'info' => 
        array (
          'name' => 'Smartqueue taxonomy',
          'description' => 'Creates a node queue for each taxonomy vocabulary',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'nodequeue',
            1 => 'taxonomy',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'nodequeue' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/nodequeue/nodequeue.module',
        'basename' => 'nodequeue.module',
        'name' => 'nodequeue',
        'info' => 
        array (
          'name' => 'Nodequeue',
          'description' => 'Create queues which can contain nodes in arbitrary order',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'configure' => 'admin/structure/nodequeue/settings',
          'files' => 
          array (
            0 => 'includes/views/nodequeue.views.inc',
            1 => 'includes/nodequeue.actions.inc',
            2 => 'includes/views/nodequeue_handler_argument_subqueue_qid.inc',
            3 => 'includes/views/nodequeue_handler_field_all_queues.inc',
            4 => 'includes/views/nodequeue_handler_field_all_subqueues.inc',
            5 => 'includes/views/nodequeue_handler_field_links.inc',
            6 => 'includes/views/nodequeue_handler_field_queue_tab.inc',
            7 => 'includes/views/nodequeue_handler_filter_in_queue.inc',
            8 => 'includes/views/nodequeue_handler_relationship_nodequeue.inc',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'nodequeue_generate' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/nodequeue/nodequeue_generate.module',
        'basename' => 'nodequeue_generate.module',
        'name' => 'nodequeue_generate',
        'info' => 
        array (
          'name' => 'Nodequeue generate',
          'description' => 'Bulk assign nodes into queues for quickly populating a site.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'nodequeue',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'nodequeue_generate.module',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'link' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/link/link.module',
        'basename' => 'link.module',
        'name' => 'link',
        'info' => 
        array (
          'name' => 'Link',
          'description' => 'Defines simple link field types.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'link.module',
            1 => 'link.install',
            2 => 'tests/link.test',
            3 => 'tests/link.attribute.test',
            4 => 'tests/link.crud.test',
            5 => 'tests/link.crud_browser.test',
            6 => 'tests/link.token.test',
            7 => 'tests/link.validate.test',
            8 => 'views/link_views_handler_argument_target.inc',
            9 => 'views/link_views_handler_filter_protocol.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'link',
          'datestamp' => '1319392535',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'link',
        'version' => '7.x-1.0',
      ),
      'media_vimeo' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/media_vimeo/media_vimeo.module',
        'basename' => 'media_vimeo.module',
        'name' => 'media_vimeo',
        'info' => 
        array (
          'name' => 'Media: Vimeo',
          'description' => 'Provides Vimeo support to the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_vimeo.module',
            1 => 'includes/MediaInternetVimeoHandler.inc',
            2 => 'includes/MediaVimeoStreamWrapper.inc',
            3 => 'includes/MediaVimeoStyles.inc',
            4 => 'includes/media_vimeo.formatters.inc',
            5 => 'includes/media_vimeo.styles.inc',
            6 => 'includes/media_vimeo.variables.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'version' => '7.x-1.0-beta5',
          'project' => 'media_vimeo',
          'datestamp' => '1332792648',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media_vimeo',
        'version' => '7.x-1.0-beta5',
      ),
      'simplified_menu_admin' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/simplified_menu_admin/simplified_menu_admin.module',
        'basename' => 'simplified_menu_admin.module',
        'name' => 'simplified_menu_admin',
        'info' => 
        array (
          'name' => 'Simplified menu administration',
          'description' => 'Simplifies the Menu and Shortcut modules by merging "List links" and "Edit menu" into a single administration page.',
          'core' => '7.x',
          'version' => '7.x-1.0-beta2',
          'project' => 'simplified_menu_admin',
          'datestamp' => '1308938520',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'simplified_menu_admin',
        'version' => '7.x-1.0-beta2',
      ),
      'advanced_forum' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/advanced_forum/advanced_forum.module',
        'basename' => 'advanced_forum.module',
        'name' => 'advanced_forum',
        'info' => 
        array (
          'name' => 'Advanced Forum',
          'description' => 'Enables the look and feel of other popular forum software.',
          'version' => '7.x-2.0',
          'dependencies' => 
          array (
            0 => 'forum',
            1 => 'ctools',
            2 => 'views',
          ),
          'configure' => 'admin/config/content/advanced-forum',
          'files' => 
          array (
            0 => 'includes/views/advanced_forum_handler_field_node_topic_icon.inc',
            1 => 'includes/views/advanced_forum_handler_field_node_topic_pager.inc',
            2 => 'includes/views/advanced_forum_plugin_style_forum_topic_list.inc',
          ),
          'core' => '7.x',
          'project' => 'advanced_forum',
          'datestamp' => '1332167738',
          'php' => '5.2.4',
        ),
        'schema_version' => '5005',
        'project' => 'advanced_forum',
        'version' => '7.x-2.0',
      ),
      'googleanalytics' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'google_analytics',
          'datestamp' => '1301340367',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'google_analytics',
        'version' => '7.x-1.2',
      ),
      'panopoly_search' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/panopoly_search/panopoly_search.module',
        'basename' => 'panopoly_search.module',
        'name' => 'panopoly_search',
        'info' => 
        array (
          'name' => 'Panopoly Search',
          'description' => 'Indexes and searches site content, Solr or otherwise.',
          'core' => '7.x',
          'package' => 'Panopoly',
          'php' => '5.2.4',
          'project' => 'panopoly_search',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'facetapi',
            2 => 'page_manager',
            3 => 'panels',
            4 => 'search',
            5 => 'search_api',
            6 => 'search_api_db',
            7 => 'search_api_facetapi',
            8 => 'search_api_solr',
            9 => 'search_api_views',
            10 => 'strongarm',
            11 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'facetapi:facetapi_defaults:1',
              1 => 'page_manager:pages_default:1',
              2 => 'strongarm:strongarm:1',
              3 => 'views:views_default:3.0',
            ),
            'facetapi' => 
            array (
              0 => 'search_api@database_node_index:block:author',
              1 => 'search_api@database_node_index:block:created',
              2 => 'search_api@database_node_index:block:search_api_language',
              3 => 'search_api@database_node_index:block:search_api_url',
              4 => 'search_api@database_node_index:block:search_api_viewed',
              5 => 'search_api@database_node_index:block:status',
              6 => 'search_api@database_node_index:block:title',
              7 => 'search_api@database_node_index:block:type',
              8 => 'search_api@database_node_index:block:url',
              9 => 'search_api@node_index:block:author',
              10 => 'search_api@node_index:block:body:value',
              11 => 'search_api@node_index:block:created',
              12 => 'search_api@node_index:block:field_tags',
              13 => 'search_api@node_index:block:search_api_language',
              14 => 'search_api@node_index:block:search_api_url',
              15 => 'search_api@node_index:block:search_api_viewed',
              16 => 'search_api@node_index:block:status',
              17 => 'search_api@node_index:block:title',
              18 => 'search_api@node_index:block:type',
              19 => 'search_api@node_index:block:url',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'page_manager_pages' => 
            array (
              0 => 'panopoly_search',
            ),
            'search_api_index' => 
            array (
              0 => 'database_node_index',
              1 => 'node_index',
            ),
            'search_api_server' => 
            array (
              0 => 'database_server',
              1 => 'solr_server',
            ),
            'variable' => 
            array (
              0 => 'facetapi:block_cache:search_api@database_node_index',
              1 => 'facetapi:block_cache:search_api@node_index',
              2 => 'search_active_modules',
              3 => 'search_api_facets_search_ids',
            ),
            'views_view' => 
            array (
              0 => 'panopoly_database_search',
              1 => 'panopoly_search',
            ),
          ),
          'version' => '7.x-1.0-beta4',
          'datestamp' => '1340290626',
        ),
        'schema_version' => '7001',
        'project' => 'panopoly_search',
        'version' => '7.x-1.0-beta4',
      ),
      'conditional_styles_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/conditional_styles/tests/conditional_styles_test.module',
        'basename' => 'conditional_styles_test.module',
        'name' => 'conditional_styles_test',
        'info' => 
        array (
          'name' => 'Conditional Stylesheets Tests',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'conditional_styles',
          ),
          'files' => 
          array (
            0 => 'conditional_styles_test.module',
          ),
          'version' => '7.x-2.1',
          'project' => 'conditional_styles',
          'datestamp' => '1331537446',
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'conditional_styles',
        'version' => '7.x-2.1',
      ),
      'conditional_styles' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/conditional_styles/conditional_styles.module',
        'basename' => 'conditional_styles.module',
        'name' => 'conditional_styles',
        'info' => 
        array (
          'name' => 'Conditional Stylesheets',
          'description' => 'Allows themes to add conditional stylesheets.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'conditional_styles.install',
            1 => 'conditional_styles.module',
            2 => 'tests/conditional_styles.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'conditional_styles',
          'datestamp' => '1331537446',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'conditional_styles',
        'version' => '7.x-2.1',
      ),
      'search_api_ranges' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/search_api_ranges/search_api_ranges.module',
        'basename' => 'search_api_ranges.module',
        'name' => 'search_api_ranges',
        'info' => 
        array (
          'name' => 'Search ranges',
          'description' => 'Provides range widgets and a min/max slider for Search API.',
          'dependencies' => 
          array (
            0 => 'facetapi',
            1 => 'search_api',
            2 => 'search_api_facetapi',
          ),
          'files' => 
          array (
            0 => 'includes/callback_search_api_ranges.inc',
            1 => 'plugins/facetapi/widget_links.inc',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'version' => '7.x-1.3',
          'project' => 'search_api_ranges',
          'datestamp' => '1343071658',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'search_api_ranges',
        'version' => '7.x-1.3',
      ),
      'references_dialog' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/references_dialog/references_dialog.module',
        'basename' => 'references_dialog.module',
        'name' => 'references_dialog',
        'info' => 
        array (
          'name' => 'References dialog',
          'description' => 'Enhances references fields by adding dialogs for adding and creating entities.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/references_dialog_plugin_display.inc',
          ),
          'version' => '7.x-1.0-alpha4',
          'project' => 'references_dialog',
          'datestamp' => '1338453702',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references_dialog',
        'version' => '7.x-1.0-alpha4',
      ),
      'image_resize_filter' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/image_resize_filter/image_resize_filter.module',
        'basename' => 'image_resize_filter.module',
        'name' => 'image_resize_filter',
        'info' => 
        array (
          'name' => 'Image resize filter',
          'description' => 'Filter to automatically scale images to their height and width dimensions.',
          'core' => '7.x',
          'package' => 'Input filters',
          'configure' => 'admin/config/content/formats',
          'version' => '7.x-1.13',
          'project' => 'image_resize_filter',
          'datestamp' => '1313565117',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'image_resize_filter',
        'version' => '7.x-1.13',
      ),
      'simplehtmldom' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/simplehtmldom/simplehtmldom.module',
        'basename' => 'simplehtmldom.module',
        'name' => 'simplehtmldom',
        'info' => 
        array (
          'name' => 'simplehtmldom API',
          'description' => 'A wrapper module around the simplehtmldom PHP library at sourceforge.',
          'package' => 'Filter',
          'core' => '7.x',
          'version' => '7.x-1.12',
          'project' => 'simplehtmldom',
          'datestamp' => '1307968619',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'simplehtmldom',
        'version' => '7.x-1.12',
      ),
      'wysiwyg_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/wysiwyg/tests/wysiwyg_test.module',
        'basename' => 'wysiwyg_test.module',
        'name' => 'wysiwyg_test',
        'info' => 
        array (
          'name' => 'Wysiwyg testing',
          'description' => 'Tests Wysiwyg module functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'wysiwyg_test.module',
          ),
          'version' => '7.x-2.1+29-dev',
          'project' => 'wysiwyg',
          'datestamp' => '1342921210',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wysiwyg',
        'version' => '7.x-2.1+29-dev',
      ),
      'wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/wysiwyg/wysiwyg.module',
        'basename' => 'wysiwyg.module',
        'name' => 'wysiwyg',
        'info' => 
        array (
          'name' => 'Wysiwyg',
          'description' => 'Allows to edit content with client-side editors.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/wysiwyg',
          'files' => 
          array (
            0 => 'wysiwyg.module',
            1 => 'tests/wysiwyg.test',
          ),
          'version' => '7.x-2.1+29-dev',
          'project' => 'wysiwyg',
          'datestamp' => '1342921210',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'wysiwyg',
        'version' => '7.x-2.1+29-dev',
      ),
      'geofield_map' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/geofield/modules/geofield_map/geofield_map.module',
        'basename' => 'geofield_map.module',
        'name' => 'geofield_map',
        'info' => 
        array (
          'name' => 'Geofield Map',
          'description' => 'Provides a basic mapping interface for Geofield.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'geofield',
          ),
          'files' => 
          array (
            0 => 'includes/geofield_map.views.inc',
            1 => 'includes/geofield_map_plugin_style_map.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'geofield',
          'datestamp' => '1338941478',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'geofield',
        'version' => '7.x-1.1',
      ),
      'geofield' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/geofield/geofield.module',
        'basename' => 'geofield.module',
        'name' => 'geofield',
        'info' => 
        array (
          'name' => 'Geofield',
          'description' => 'Stores geographic and location data (points, lines, and polygons).',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'geophp',
          ),
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'geofield.module',
            1 => 'geofield.install',
            2 => 'geofield.widgets.inc',
            3 => 'geofield.formatters.inc',
            4 => 'geofield.openlayers.inc',
            5 => 'geofield.feeds.inc',
            6 => 'geofield.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'geofield',
          'datestamp' => '1338941478',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'geofield',
        'version' => '7.x-1.1',
      ),
      'libraries_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/libraries/tests/libraries_test.module',
        'basename' => 'libraries_test.module',
        'name' => 'libraries_test',
        'info' => 
        array (
          'name' => 'Libraries test module',
          'description' => 'Tests library detection and loading.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'hidden' => true,
          'version' => '7.x-2.0-alpha2',
          'project' => 'libraries',
          'datestamp' => '1323950504',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'libraries',
        'version' => '7.x-2.0-alpha2',
      ),
      'libraries' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version dependent and shared usage of external libraries.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.0-alpha2',
          'project' => 'libraries',
          'datestamp' => '1323950504',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'libraries',
        'version' => '7.x-2.0-alpha2',
      ),
      'date_popup_authored' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/date_popup_authored/date_popup_authored.module',
        'basename' => 'date_popup_authored.module',
        'name' => 'date_popup_authored',
        'info' => 
        array (
          'name' => 'Date Popup Authored',
          'description' => 'Provides a datepicker for the \'Authored on\' field on node forms.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'date_popup_authored.test',
          ),
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_popup',
          ),
          'version' => '7.x-1.1',
          'project' => 'date_popup_authored',
          'datestamp' => '1333178146',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date_popup_authored',
        'version' => '7.x-1.1',
      ),
      'media_youtube' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/media_youtube/media_youtube.module',
        'basename' => 'media_youtube.module',
        'name' => 'media_youtube',
        'info' => 
        array (
          'name' => 'Media: YouTube',
          'description' => 'Provides YouTube support to the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_youtube.module',
            1 => 'includes/MediaInternetYouTubeHandler.inc',
            2 => 'includes/MediaYouTubeStreamWrapper.inc',
            3 => 'includes/MediaYouTubeStyles.inc',
            4 => 'includes/media_youtube.formatters.inc',
            5 => 'includes/media_youtube.styles.inc',
            6 => 'includes/media_youtube.variables.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'media_youtube',
          'datestamp' => '1331655643',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'media_youtube',
        'version' => '7.x-1.0-beta3',
      ),
      'xmlsitemap_modal' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/xmlsitemap/xmlsitemap_modal/xmlsitemap_modal.module',
        'basename' => 'xmlsitemap_modal.module',
        'name' => 'xmlsitemap_modal',
        'info' => 
        array (
          'name' => 'XML sitemap modal UI',
          'description' => 'Provides an AJAX modal UI for common XML sitemap tasks.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_modal.module',
          ),
          'hidden' => true,
          'version' => '7.x-2.0-rc1',
          'project' => 'xmlsitemap',
          'datestamp' => '1324004143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc1',
      ),
      'xmlsitemap_custom' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/xmlsitemap/xmlsitemap_custom/xmlsitemap_custom.module',
        'basename' => 'xmlsitemap_custom.module',
        'name' => 'xmlsitemap_custom',
        'info' => 
        array (
          'name' => 'XML sitemap custom',
          'description' => 'Adds user configurable links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_custom.module',
            1 => 'xmlsitemap_custom.admin.inc',
            2 => 'xmlsitemap_custom.install',
            3 => 'xmlsitemap_custom.test',
          ),
          'configure' => 'admin/config/search/xmlsitemap/custom',
          'version' => '7.x-2.0-rc1',
          'project' => 'xmlsitemap',
          'datestamp' => '1324004143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc1',
      ),
      'xmlsitemap_engines_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/xmlsitemap/xmlsitemap_engines/tests/xmlsitemap_engines_test.module',
        'basename' => 'xmlsitemap_engines_test.module',
        'name' => 'xmlsitemap_engines_test',
        'info' => 
        array (
          'name' => 'XML sitemap engines test',
          'description' => 'Support module for XML sitemap engines testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'xmlsitemap_engines_test.module',
          ),
          'version' => '7.x-2.0-rc1',
          'hidden' => true,
          'project' => 'xmlsitemap',
          'datestamp' => '1324004143',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc1',
      ),
      'xmlsitemap_engines' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/xmlsitemap/xmlsitemap_engines/xmlsitemap_engines.module',
        'basename' => 'xmlsitemap_engines.module',
        'name' => 'xmlsitemap_engines',
        'info' => 
        array (
          'name' => 'XML sitemap engines',
          'description' => 'Submit the sitemap to search engines.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_engines.module',
            1 => 'xmlsitemap_engines.admin.inc',
            2 => 'xmlsitemap_engines.install',
            3 => 'tests/xmlsitemap_engines.test',
          ),
          'recommends' => 
          array (
            0 => 'site_verify',
          ),
          'configure' => 'admin/config/search/xmlsitemap/engines',
          'version' => '7.x-2.0-rc1',
          'project' => 'xmlsitemap',
          'datestamp' => '1324004143',
          'php' => '5.2.4',
        ),
        'schema_version' => '6202',
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc1',
      ),
      'xmlsitemap_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/xmlsitemap/xmlsitemap_taxonomy/xmlsitemap_taxonomy.module',
        'basename' => 'xmlsitemap_taxonomy.module',
        'name' => 'xmlsitemap_taxonomy',
        'info' => 
        array (
          'name' => 'XML sitemap taxonomy',
          'description' => 'Add taxonomy term links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'taxonomy',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_taxonomy.module',
            1 => 'xmlsitemap_taxonomy.install',
            2 => 'xmlsitemap_taxonomy.test',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'xmlsitemap',
          'datestamp' => '1324004143',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc1',
      ),
      'xmlsitemap_menu' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/xmlsitemap/xmlsitemap_menu/xmlsitemap_menu.module',
        'basename' => 'xmlsitemap_menu.module',
        'name' => 'xmlsitemap_menu',
        'info' => 
        array (
          'name' => 'XML sitemap menu',
          'description' => 'Adds menu item links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'menu',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_menu.module',
            1 => 'xmlsitemap_menu.install',
            2 => 'xmlsitemap_menu.test',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'xmlsitemap',
          'datestamp' => '1324004143',
          'php' => '5.2.4',
        ),
        'schema_version' => '6201',
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc1',
      ),
      'xmlsitemap_node' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/xmlsitemap/xmlsitemap_node/xmlsitemap_node.module',
        'basename' => 'xmlsitemap_node.module',
        'name' => 'xmlsitemap_node',
        'info' => 
        array (
          'name' => 'XML sitemap node',
          'description' => 'Adds content links to the sitemap.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_node.module',
            1 => 'xmlsitemap_node.install',
            2 => 'xmlsitemap_node.test',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'xmlsitemap',
          'datestamp' => '1324004143',
          'php' => '5.2.4',
        ),
        'schema_version' => '6201',
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc1',
      ),
      'xmlsitemap_user' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/xmlsitemap/xmlsitemap_user/xmlsitemap_user.module',
        'basename' => 'xmlsitemap_user.module',
        'name' => 'xmlsitemap_user',
        'info' => 
        array (
          'name' => 'XML sitemap user',
          'description' => 'Adds user profile links to the sitemap.',
          'package' => 'XML sitemap',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'xmlsitemap_user.module',
            1 => 'xmlsitemap_user.install',
            2 => 'xmlsitemap_user.test',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'xmlsitemap',
          'datestamp' => '1324004143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc1',
      ),
      'xmlsitemap_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/xmlsitemap/xmlsitemap_i18n/xmlsitemap_i18n.module',
        'basename' => 'xmlsitemap_i18n.module',
        'name' => 'xmlsitemap_i18n',
        'info' => 
        array (
          'name' => 'XML sitemap internationalization',
          'description' => 'Enables multilingual XML sitemaps.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'xmlsitemap',
            1 => 'i18n',
          ),
          'files' => 
          array (
            0 => 'xmlsitemap_i18n.module',
            1 => 'xmlsitemap_i18n.test',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'xmlsitemap',
          'datestamp' => '1324004143',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc1',
      ),
      'xmlsitemap' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/xmlsitemap/xmlsitemap.module',
        'basename' => 'xmlsitemap.module',
        'name' => 'xmlsitemap',
        'info' => 
        array (
          'name' => 'XML sitemap',
          'description' => 'Creates an XML sitemap conforming to the <a href="http://sitemaps.org/">sitemaps.org protocol</a>.',
          'package' => 'XML sitemap',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'xmlsitemap.module',
            1 => 'xmlsitemap.inc',
            2 => 'xmlsitemap.admin.inc',
            3 => 'xmlsitemap.drush.inc',
            4 => 'xmlsitemap.generate.inc',
            5 => 'xmlsitemap.xmlsitemap.inc',
            6 => 'xmlsitemap.pages.inc',
            7 => 'xmlsitemap.install',
            8 => 'xmlsitemap.test',
          ),
          'recommends' => 
          array (
            0 => 'robotstxt',
          ),
          'configure' => 'admin/config/search/xmlsitemap',
          'version' => '7.x-2.0-rc1',
          'project' => 'xmlsitemap',
          'datestamp' => '1324004143',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'xmlsitemap',
        'version' => '7.x-2.0-rc1',
      ),
      'panopoly_users' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/panopoly_users/panopoly_users.module',
        'basename' => 'panopoly_users.module',
        'name' => 'panopoly_users',
        'info' => 
        array (
          'name' => 'Panopoly Users',
          'description' => 'Maintains user accounts and user workflows.',
          'core' => '7.x',
          'package' => 'Panopoly',
          'php' => '5.2.4',
          'project' => 'panopoly_users',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'page_manager',
            2 => 'panelizer',
            3 => 'panopoly_core',
            4 => 'pm_existing_pages',
            5 => 'strongarm',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'page_manager:pages_default:1',
              1 => 'panelizer:panelizer:1',
              2 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'page_manager_handlers' => 
            array (
              0 => 'pm_existing_pages_user_login_panel_context',
              1 => 'pm_existing_pages_user_password_panel_context',
              2 => 'pm_existing_pages_user_register_panel_context',
            ),
            'panelizer_defaults' => 
            array (
              0 => 'user:user:default',
            ),
            'variable' => 
            array (
              0 => 'page_manager_user_view_disabled',
              1 => 'panelizer_defaults_user_user',
              2 => 'panelizer_user:user.page_manager_allowed_layouts',
              3 => 'panelizer_user:user.page_manager_allowed_types',
              4 => 'panelizer_user:user.page_manager_default',
              5 => 'panelizer_user:user_allowed_layouts',
              6 => 'panelizer_user:user_allowed_types',
              7 => 'panelizer_user:user_default',
              8 => 'pm_existing_pages_disabled_user_login',
              9 => 'pm_existing_pages_disabled_user_password',
              10 => 'pm_existing_pages_disabled_user_register',
            ),
          ),
          'version' => '7.x-1.0-beta4',
          'datestamp' => '1340290628',
        ),
        'schema_version' => 0,
        'project' => 'panopoly_users',
        'version' => '7.x-1.0-beta4',
      ),
      'panopoly_admin' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/panopoly_admin/panopoly_admin.module',
        'basename' => 'panopoly_admin.module',
        'name' => 'panopoly_admin',
        'info' => 
        array (
          'name' => 'Panopoly Admin',
          'description' => 'Administrative dashboard and related editing interfaces.',
          'core' => '7.x',
          'package' => 'Panopoly',
          'php' => '5.2.4',
          'project' => 'panopoly_admin',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
            2 => 'page_manager',
            3 => 'strongarm',
            4 => 'views',
            5 => 'views_bulk_operations',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'page_manager:pages_default:1',
              1 => 'strongarm:strongarm:1',
              2 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'page_manager_handlers' => 
            array (
              0 => 'node_edit_panel_context',
            ),
            'page_manager_pages' => 
            array (
              0 => 'panopoly_admin_content',
              1 => 'panopoly_admin_dashboard',
              2 => 'panopoly_admin_media',
              3 => 'panopoly_admin_users',
            ),
            'user_role' => 
            array (
              0 => 'administrative user',
            ),
            'variable' => 
            array (
              0 => 'admin_toolbar',
              1 => 'user_admin_role',
            ),
            'views_view' => 
            array (
              0 => 'panopoly_admin_content',
              1 => 'panopoly_admin_media',
              2 => 'panopoly_admin_users',
            ),
          ),
          'scripts' => 
          array (
            0 => 'panopoly_admin.js',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'panopoly_admin.css',
            ),
          ),
          'version' => '7.x-1.0-beta4',
          'datestamp' => '1340290618',
        ),
        'schema_version' => 0,
        'project' => 'panopoly_admin',
        'version' => '7.x-1.0-beta4',
      ),
      'entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/entity/tests/entity_test.module',
        'basename' => 'entity_test.module',
        'name' => 'entity_test',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'version' => '7.x-1.0-rc3',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_test.module',
            1 => 'entity_test.install',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1337981155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0-rc3',
      ),
      'entity_feature' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/entity/tests/entity_feature.module',
        'basename' => 'entity_feature.module',
        'name' => 'entity_feature',
        'info' => 
        array (
          'name' => 'Entity feature module',
          'description' => 'Provides some entities in code.',
          'version' => '7.x-1.0-rc3',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_feature.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1337981155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0-rc3',
      ),
      'entity_test_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/entity/tests/entity_test_i18n.module',
        'basename' => 'entity_test_i18n.module',
        'name' => 'entity_test_i18n',
        'info' => 
        array (
          'name' => 'Entity-test type translation',
          'description' => 'Allows translating entity-test types.',
          'dependencies' => 
          array (
            0 => 'entity_test',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.0-rc3',
          'project' => 'entity',
          'datestamp' => '1337981155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0-rc3',
      ),
      'entity' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'entity',
          'datestamp' => '1337981155',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entity',
        'version' => '7.x-1.0-rc3',
      ),
      'entity_token' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'entity',
          'datestamp' => '1337981155',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0-rc3',
      ),
      'front_page' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/front/front_page.module',
        'basename' => 'front_page.module',
        'name' => 'front_page',
        'info' => 
        array (
          'name' => 'Front Page',
          'description' => 'Allows site admins setup custom front pages for the site.',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/front/settings',
          'version' => '7.x-2.1',
          'project' => 'front',
          'datestamp' => '1319746532',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'front',
        'version' => '7.x-2.1',
      ),
      'file_styles' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/styles/contrib/file_styles/file_styles.module',
        'basename' => 'file_styles.module',
        'name' => 'file_styles',
        'info' => 
        array (
          'name' => 'File Styles',
          'description' => 'Allows preset transformation of files and media for display.',
          'package' => 'Styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_styles.module',
            1 => 'file_styles.admin.inc',
            2 => 'includes/styles/FileStyles.inc',
          ),
          'dependencies' => 
          array (
            0 => 'styles',
            1 => 'image',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'styles',
          'datestamp' => '1306964517',
          'php' => '5.2.4',
        ),
        'schema_version' => '7210',
        'project' => 'styles',
        'version' => '7.x-2.0-alpha8',
      ),
      'styles_ui' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/styles/contrib/styles_ui/styles_ui.module',
        'basename' => 'styles_ui.module',
        'name' => 'styles_ui',
        'info' => 
        array (
          'name' => 'Styles UI',
          'description' => 'Allows administration of the Styles modules.',
          'package' => 'Styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'styles_ui.admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'styles',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'styles',
          'datestamp' => '1306964517',
          'php' => '5.2.4',
        ),
        'schema_version' => '7206',
        'project' => 'styles',
        'version' => '7.x-2.0-alpha8',
      ),
      'styles' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/styles/styles.module',
        'basename' => 'styles.module',
        'name' => 'styles',
        'info' => 
        array (
          'name' => 'Styles',
          'description' => 'Bundles similar display formatters together.',
          'package' => 'Styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'styles.module',
            1 => 'includes/Styles.inc',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'styles',
          'datestamp' => '1306964517',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7215',
        'project' => 'styles',
        'version' => '7.x-2.0-alpha8',
      ),
      'field_group' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/field_group/field_group.module',
        'basename' => 'field_group.module',
        'name' => 'field_group',
        'info' => 
        array (
          'name' => 'Fieldgroup',
          'description' => 'Fieldgroup',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_group.install',
            1 => 'field_group.module',
            2 => 'field_group.field_ui.inc',
            3 => 'field_group.form.inc',
            4 => 'field_group.features.inc',
            5 => 'field_group.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'field_group',
          'datestamp' => '1319051133',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'field_group',
        'version' => '7.x-1.1',
      ),
      'maillog' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/maillog/maillog.module',
        'basename' => 'maillog.module',
        'name' => 'maillog',
        'info' => 
        array (
          'name' => 'Maillog / Mail Developer',
          'description' => 'Utility to log all Mails for debugging purposes. It\'s possible to suppress mail delivery for e.g. dev or staging systems.',
          'package' => 'Mail',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'configure' => 'admin/config/development/maillog',
          'files' => 
          array (
            0 => 'includes/maillog.mail.inc',
            1 => 'includes/maillog_handler_field_maillog_entry_link_delete.inc',
            2 => 'includes/maillog_handler_field_maillog_link_delete.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'maillog',
          'datestamp' => '1329135676',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'maillog',
        'version' => '7.x-1.x-dev',
      ),
      'views_content' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'page_manager' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'bulk_export' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'ctools_export_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ctools/tests/ctools_export_test/ctools_export_test.module',
        'basename' => 'ctools_export_test.module',
        'name' => 'ctools_export_test',
        'info' => 
        array (
          'name' => 'CTools export test',
          'description' => 'CTools export test module',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'hidden' => true,
          'files' => 
          array (
            0 => 'ctools_export.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'ctools_plugin_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ctools/tests/ctools_plugin_test.module',
        'basename' => 'ctools_plugin_test.module',
        'name' => 'ctools_plugin_test',
        'info' => 
        array (
          'name' => 'Chaos tools plugins test',
          'description' => 'Provides hooks for testing ctools plugins.',
          'package' => 'Chaos tool suite',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'ctools.plugins.test',
            1 => 'object_cache.test',
            2 => 'css.test',
            3 => 'context.test',
          ),
          'hidden' => true,
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'stylizer' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'ctools' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/math-expr.inc',
            2 => 'includes/stylizer.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'ctools',
          'datestamp' => '1345319204',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6007',
        'project' => 'ctools',
        'version' => '7.x-1.2',
      ),
      'debut' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/debut/debut.module',
        'basename' => 'debut.module',
        'name' => 'debut',
        'info' => 
        array (
          'name' => 'Debut',
          'description' => 'Core components for the Debut features set.',
          'core' => '7.x',
          'package' => 'Features',
          'php' => '5.2.0',
          'dependencies' => 
          array (
            0 => 'features',
          ),
          'debutf' => '1.0-draft',
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'user_role' => 
            array (
              0 => 'administrator',
              1 => 'contributor',
              2 => 'editor',
            ),
          ),
          'kitf' => '1.0-draft',
          'version' => '7.x-1.0-rc1',
          'project' => 'debut',
          'datestamp' => '1336436155',
        ),
        'schema_version' => 0,
        'project' => 'debut',
        'version' => '7.x-1.0-rc1',
      ),
      'features_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/features/tests/features_test.module',
        'basename' => 'features_test.module',
        'name' => 'features_test',
        'info' => 
        array (
          'name' => 'Features Tests',
          'description' => 'Test module for Features testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'php' => '5.2.0',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'image',
            2 => 'strongarm',
            3 => 'taxonomy',
            4 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-features_test-field_features_test',
            ),
            'filter' => 
            array (
              0 => 'features_test',
            ),
            'image' => 
            array (
              0 => 'features_test',
            ),
            'node' => 
            array (
              0 => 'features_test',
            ),
            'taxonomy' => 
            array (
              0 => 'taxonomy_features_test',
            ),
            'user_permission' => 
            array (
              0 => 'create features_test content',
            ),
            'views_view' => 
            array (
              0 => 'features_test',
            ),
          ),
          'hidden' => true,
          'version' => '7.x-1.0-rc3',
          'project' => 'features',
          'datestamp' => '1339680981',
        ),
        'schema_version' => 0,
        'project' => 'features',
        'version' => '7.x-1.0-rc3',
      ),
      'features' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'features',
          'datestamp' => '1339680981',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'features',
        'version' => '7.x-1.0-rc3',
      ),
      'page_title' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/page_title/page_title.module',
        'basename' => 'page_title.module',
        'name' => 'page_title',
        'info' => 
        array (
          'name' => 'Page Title',
          'description' => 'Enhanced control over the page title (in the &lt;head> tag).',
          'core' => '7.x',
          'package' => 'SEO',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'page_title.module',
            1 => 'page_title.admin.inc',
            2 => 'page_title.tokens.inc',
            3 => 'page_title.test',
            4 => 'views/plugins/page_title_plugin_display_page_with_page_title.inc',
            5 => 'views_handler_field_node_page_title.inc',
          ),
          'configure' => 'admin/config/search/page-title',
          'version' => '7.x-2.7',
          'project' => 'page_title',
          'datestamp' => '1336556786',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'page_title',
        'version' => '7.x-2.7',
      ),
      'simple_gmap' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/simple_gmap/simple_gmap.module',
        'basename' => 'simple_gmap.module',
        'name' => 'simple_gmap',
        'info' => 
        array (
          'name' => 'Simple Google Maps',
          'description' => 'Provides a Google Maps link/map formatter for simple Text fields',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simple_gmap.module',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'simple_gmap',
          'datestamp' => '1329102042',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'simple_gmap',
        'version' => '7.x-1.0-rc1',
      ),
      'jquery_update' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/jquery_update/jquery_update.module',
        'basename' => 'jquery_update.module',
        'name' => 'jquery_update',
        'info' => 
        array (
          'name' => 'jQuery Update',
          'description' => 'Updates jQuery to jQuery 1.5.2 and jQuery UI 1.8.11.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jquery_update.module',
            1 => 'jquery_update.install',
          ),
          'configure' => 'admin/config/development/performance',
          'version' => '7.x-2.2',
          'project' => 'jquery_update',
          'datestamp' => '1301920269',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'jquery_update',
        'version' => '7.x-2.2',
      ),
      'wysiwyg_filter' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/wysiwyg_filter/wysiwyg_filter.module',
        'basename' => 'wysiwyg_filter.module',
        'name' => 'wysiwyg_filter',
        'info' => 
        array (
          'name' => 'WYSIWYG Filter',
          'description' => 'Provides an input filter that allows site administrators configure which HTML elements, attributes and style properties are allowed.',
          'package' => 'Input filters',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'wysiwyg_filter.admin.inc',
            1 => 'wysiwyg_filter.inc',
            2 => 'wysiwyg_filter.install',
            3 => 'wysiwyg_filter.module',
            4 => 'wysiwyg_filter.pages.inc',
          ),
          'version' => '7.x-1.6-rc2',
          'project' => 'wysiwyg_filter',
          'datestamp' => '1310326321',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wysiwyg_filter',
        'version' => '7.x-1.6-rc2',
      ),
      'search_api_sorts' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/search_api_sorts/search_api_sorts.module',
        'basename' => 'search_api_sorts.module',
        'name' => 'search_api_sorts',
        'info' => 
        array (
          'name' => 'Search sorts',
          'description' => 'Create sort options for search queries executed via the Search API.',
          'dependencies' => 
          array (
            0 => 'search_api',
            1 => 'block',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'files' => 
          array (
            0 => 'search_api_sorts.entity.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'search_api_sorts',
          'datestamp' => '1343071661',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'search_api_sorts',
        'version' => '7.x-1.2',
      ),
      'job_scheduler_trigger' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/job_scheduler/modules/job_scheduler_trigger/job_scheduler_trigger.module',
        'basename' => 'job_scheduler_trigger.module',
        'name' => 'job_scheduler_trigger',
        'info' => 
        array (
          'name' => 'Job Scheduler Trigger',
          'description' => 'Creates scheduler triggers that fire up at certain days, times',
          'core' => '7.x',
          'php' => '5.2',
          'dependencies' => 
          array (
            0 => 'job_scheduler',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'job_scheduler',
          'datestamp' => '1336466457',
        ),
        'schema_version' => 0,
        'project' => 'job_scheduler',
        'version' => '7.x-2.0-alpha3',
      ),
      'job_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/job_scheduler/job_scheduler.module',
        'basename' => 'job_scheduler.module',
        'name' => 'job_scheduler',
        'info' => 
        array (
          'name' => 'Job Scheduler',
          'description' => 'Scheduler API',
          'files' => 
          array (
            0 => 'job_scheduler.module',
            1 => 'job_scheduler.install',
            2 => 'JobScheduler.inc',
            3 => 'JobSchedulerCronTab.inc',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'version' => '7.x-2.0-alpha3',
          'project' => 'job_scheduler',
          'datestamp' => '1336466457',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7101',
        'project' => 'job_scheduler',
        'version' => '7.x-2.0-alpha3',
      ),
      'relation_rules_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/relation/tests/relation_rules_test.module',
        'basename' => 'relation_rules_test.module',
        'name' => 'relation_rules_test',
        'info' => 
        array (
          'name' => 'Relation Tests',
          'description' => 'Support module for the Relation - Rules integration tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.0-rc3',
          'project' => 'relation',
          'datestamp' => '1343238481',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'relation',
        'version' => '7.x-1.0-rc3',
      ),
      'relation_dummy_field' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/relation/relation_dummy_field/relation_dummy_field.module',
        'basename' => 'relation_dummy_field.module',
        'name' => 'relation_dummy_field',
        'info' => 
        array (
          'name' => 'Relation Dummy Field',
          'description' => 'Dummy field to display relation data inline on entities.',
          'core' => '7.x',
          'package' => 'Relation',
          'dependencies' => 
          array (
            0 => 'relation',
          ),
          'files' => 
          array (
            0 => 'tests/relation_dummy_field.test',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'relation',
          'datestamp' => '1343238481',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'relation',
        'version' => '7.x-1.0-rc3',
      ),
      'relation_entity_collector' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/relation/relation_entity_collector/relation_entity_collector.module',
        'basename' => 'relation_entity_collector.module',
        'name' => 'relation_entity_collector',
        'info' => 
        array (
          'name' => 'Relation Entity Collector block',
          'description' => 'A block to collect entities loaded on any page(s), and create relations from them.',
          'core' => '7.x',
          'package' => 'Relation',
          'dependencies' => 
          array (
            0 => 'relation',
            1 => 'block',
          ),
          'files' => 
          array (
            0 => 'tests/relation_entity_collector.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'relation_entity_collector.css',
            ),
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'relation',
          'datestamp' => '1343238481',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'relation',
        'version' => '7.x-1.0-rc3',
      ),
      'relation_ui' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/relation/relation_ui.module',
        'basename' => 'relation_ui.module',
        'name' => 'relation_ui',
        'info' => 
        array (
          'name' => 'Relation UI',
          'description' => 'Administrative interface to relation. Without this module, you cannot create or edit your relation types.',
          'package' => 'Relation',
          'core' => '7.x',
          'configure' => 'admin/structure/relation',
          'dependencies' => 
          array (
            0 => 'relation',
          ),
          'files' => 
          array (
            0 => 'relation_ui.module',
            1 => 'tests/relation_ui.test',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'relation',
          'datestamp' => '1343238481',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'relation',
        'version' => '7.x-1.0-rc3',
      ),
      'relation' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/relation/relation.module',
        'basename' => 'relation.module',
        'name' => 'relation',
        'info' => 
        array (
          'name' => 'Relation',
          'description' => 'Describes relationships between entities.',
          'core' => '7.x',
          'package' => 'Relation',
          'files' => 
          array (
            0 => 'relation.database.inc',
            1 => 'tests/relation.test',
            2 => 'tests/relation.rules.test',
            3 => 'tests/relation.views.test',
            4 => 'views/relation_handler_relationship.inc',
          ),
          'dependencies' => 
          array (
            0 => 'relation_endpoint',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'relation',
          'datestamp' => '1343238481',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'relation',
        'version' => '7.x-1.0-rc3',
      ),
      'relation_endpoint' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/relation/relation_endpoint.module',
        'basename' => 'relation_endpoint.module',
        'name' => 'relation_endpoint',
        'info' => 
        array (
          'name' => 'Relation Endpoints Field',
          'description' => 'Helper module for Relation. Defines endpoints field (not usable except by relation).',
          'core' => '7.x',
          'package' => 'Relation',
          'version' => '7.x-1.0-rc3',
          'project' => 'relation',
          'datestamp' => '1343238481',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'relation',
        'version' => '7.x-1.0-rc3',
      ),
      'menu_block_export' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/menu_block/menu_block_export.module',
        'basename' => 'menu_block_export.module',
        'name' => 'menu_block_export',
        'info' => 
        array (
          'name' => 'Menu Block Export',
          'description' => 'Provides export interface for Menu block module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu_block',
          ),
          'files' => 
          array (
            0 => 'menu_block_export.module',
            1 => 'menu_block_export.admin.inc',
          ),
          'configure' => 'admin/config/user-interface/menu-block/export',
          'version' => '7.x-2.3',
          'project' => 'menu_block',
          'datestamp' => '1328286646',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'menu_block',
        'version' => '7.x-2.3',
      ),
      'menu_block' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/menu_block/menu_block.module',
        'basename' => 'menu_block.module',
        'name' => 'menu_block',
        'info' => 
        array (
          'name' => 'Menu Block',
          'description' => 'Provides configurable blocks of menu items.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu (>7.11)',
          ),
          'files' => 
          array (
            0 => 'menu_block.module',
            1 => 'menu_block.admin.inc',
            2 => 'menu_block.follow.inc',
            3 => 'menu_block.pages.inc',
            4 => 'menu_block.sort.inc',
            5 => 'menu_block.install',
            6 => 'plugins/content_types/menu_tree/menu_tree.inc',
          ),
          'configure' => 'admin/config/user-interface/menu-block',
          'version' => '7.x-2.3',
          'project' => 'menu_block',
          'datestamp' => '1328286646',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'menu_block',
        'version' => '7.x-2.3',
      ),
      'panels_breadcrumbs' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/panels_breadcrumbs/panels_breadcrumbs.module',
        'basename' => 'panels_breadcrumbs.module',
        'name' => 'panels_breadcrumbs',
        'info' => 
        array (
          'name' => 'Panels Breadcrumbs',
          'description' => 'Adds the ability to set breadcrumbs directly from Panels and takes advantage of arguments and contexts as placeholder tokens',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'page_manager',
            2 => 'panels',
          ),
          'version' => '7.x-1.6',
          'project' => 'panels_breadcrumbs',
          'datestamp' => '1330802447',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels_breadcrumbs',
        'version' => '7.x-1.6',
      ),
      'dialog_example' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/dialog/example/dialog_example.module',
        'basename' => 'dialog_example.module',
        'name' => 'dialog_example',
        'info' => 
        array (
          'name' => 'Dialog Example',
          'description' => 'Example implementations of using the Dialog API.',
          'core' => '7.x',
          'package' => 'User interface',
          'files' => 
          array (
            0 => 'dialog_example.module',
          ),
          'dependencies' => 
          array (
            0 => 'dialog',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'dialog',
          'datestamp' => '1326759426',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'dialog',
        'version' => '7.x-1.x-dev',
      ),
      'dialog_comment' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/dialog/modules/dialog_comment/dialog_comment.module',
        'basename' => 'dialog_comment.module',
        'name' => 'dialog_comment',
        'info' => 
        array (
          'name' => 'Dialog Comment',
          'description' => 'Process the comments through the dialog.',
          'core' => '7.x',
          'package' => 'User interface',
          'files' => 
          array (
            0 => 'dialog_comment.module',
          ),
          'dependencies' => 
          array (
            0 => 'dialog',
            1 => 'comment',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'dialog',
          'datestamp' => '1326759426',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'dialog',
        'version' => '7.x-1.x-dev',
      ),
      'dialog_contextual' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/dialog/modules/dialog_contextual/dialog_contextual.module',
        'basename' => 'dialog_contextual.module',
        'name' => 'dialog_contextual',
        'info' => 
        array (
          'name' => 'Dialog contextual Links',
          'description' => 'Makes the contextual links pop up a dialog box.',
          'core' => '7.x',
          'package' => 'User interface',
          'files' => 
          array (
            0 => 'dialog_contextual.module',
          ),
          'dependencies' => 
          array (
            0 => 'dialog',
            1 => 'contextual',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'dialog',
          'datestamp' => '1326759426',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'dialog',
        'version' => '7.x-1.x-dev',
      ),
      'dialog_user' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/dialog/modules/dialog_user/dialog_user.module',
        'basename' => 'dialog_user.module',
        'name' => 'dialog_user',
        'info' => 
        array (
          'name' => 'Dialog User',
          'description' => 'Provides dialog integration to the user module.',
          'core' => '7.x',
          'package' => 'User interface',
          'files' => 
          array (
            0 => 'dialog_user.module',
          ),
          'dependencies' => 
          array (
            0 => 'dialog',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'dialog',
          'datestamp' => '1326759426',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'dialog',
        'version' => '7.x-1.x-dev',
      ),
      'dialog' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/dialog/dialog.module',
        'basename' => 'dialog.module',
        'name' => 'dialog',
        'info' => 
        array (
          'name' => 'Dialog API',
          'description' => 'Dialog window API based on jQuery UI Dialog and CTools ajax.',
          'core' => '7.x',
          'package' => 'User interface',
          'files' => 
          array (
            0 => 'dialog.module',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'dialog',
          'datestamp' => '1326759426',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'dialog',
        'version' => '7.x-1.x-dev',
      ),
      'search_api_solr' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/search_api_solr/search_api_solr.module',
        'basename' => 'search_api_solr.module',
        'name' => 'search_api_solr',
        'info' => 
        array (
          'name' => 'Solr search',
          'description' => 'Offers an implementation of the Search API that uses an Apache Solr server for indexing content.',
          'dependencies' => 
          array (
            0 => 'search_api',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'files' => 
          array (
            0 => 'service.inc',
            1 => 'solr_connection.inc',
            2 => 'solr_field.inc',
            3 => 'includes/solr_httptransport.inc',
            4 => 'includes/spellcheck.inc',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'search_api_solr',
          'datestamp' => '1337791294',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'search_api_solr',
        'version' => '7.x-1.0-rc2',
      ),
      'select_or_other' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/select_or_other/select_or_other.module',
        'basename' => 'select_or_other.module',
        'name' => 'select_or_other',
        'info' => 
        array (
          'name' => 'Select (or other)',
          'description' => 'Provides a select box form element with additional option \'Other\' to give a textfield.',
          'core' => '7.x',
          'version' => '7.x-2.14',
          'project' => 'select_or_other',
          'datestamp' => '1342146140',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'select_or_other',
        'version' => '7.x-2.14',
      ),
      'email' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/email/email.module',
        'basename' => 'email.module',
        'name' => 'email',
        'info' => 
        array (
          'name' => 'Email',
          'description' => 'Defines an email field type.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'email.migrate.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'email',
          'datestamp' => '1340207779',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'email',
        'version' => '7.x-1.1',
      ),
      'panopoly_demo' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/panopoly_demo/panopoly_demo.module',
        'basename' => 'panopoly_demo.module',
        'name' => 'panopoly_demo',
        'info' => 
        array (
          'name' => 'Panopoly Demo',
          'description' => 'Demo content and functionality to help show the power of Panopoly',
          'core' => '7.x',
          'package' => 'Panopoly',
          'php' => '5.2.4',
          'project' => 'panopoly_demo',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'page_manager',
            2 => 'views',
            3 => 'panopoly_pages',
          ),
          'features' => 
          array (
            'content' => 
            array (
              0 => 'panopoly-demo-0',
              1 => 'panopoly-demo-1',
              2 => 'panopoly-demo-2',
              3 => 'panopoly-demo-3',
            ),
            'ctools' => 
            array (
              0 => 'page_manager:pages_default:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'page_manager_pages' => 
            array (
              0 => 'panopoly_demo_panel',
            ),
            'views_view' => 
            array (
              0 => 'panopoly_demo',
            ),
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'panopoly_demo.css',
            ),
          ),
          'version' => '7.x-1.0-beta4',
          'datestamp' => '1340290621',
        ),
        'schema_version' => 0,
        'project' => 'panopoly_demo',
        'version' => '7.x-1.0-beta4',
      ),
      'conditional_fields_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/conditional_fields/tests/conditional_fields_test.module',
        'basename' => 'conditional_fields_test.module',
        'name' => 'conditional_fields_test',
        'info' => 
        array (
          'name' => 'Conditional Fields test',
          'description' => 'Provides hooks for testing Conditional Fields.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'conditional_fields',
          ),
          'files' => 
          array (
            0 => 'conditional_fields.test',
          ),
          'hidden' => true,
          'version' => '7.x-3.x-dev',
          'project' => 'conditional_fields',
          'datestamp' => '1343607216',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'conditional_fields',
        'version' => '7.x-3.x-dev',
      ),
      'conditional_fields' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/conditional_fields/conditional_fields.module',
        'basename' => 'conditional_fields.module',
        'name' => 'conditional_fields',
        'info' => 
        array (
          'name' => 'Conditional Fields',
          'description' => 'Define dependencies between fields based on their states and values.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'configure' => 'admin/structure/dependencies',
          'version' => '7.x-3.x-dev',
          'project' => 'conditional_fields',
          'datestamp' => '1343607216',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'conditional_fields',
        'version' => '7.x-3.x-dev',
      ),
      'geocoder' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/geocoder/geocoder.module',
        'basename' => 'geocoder.module',
        'name' => 'geocoder',
        'info' => 
        array (
          'name' => 'Geocoder',
          'description' => 'An API and widget to geocode various known data into other GIS data types.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'geophp',
            1 => 'ctools',
          ),
          'version' => '7.x-1.2',
          'project' => 'geocoder',
          'datestamp' => '1346083034',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'geocoder',
        'version' => '7.x-1.2',
      ),
      'qtip' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/qtip/qtip.module',
        'basename' => 'qtip.module',
        'name' => 'qtip',
        'info' => 
        array (
          'name' => 'qTip Tooltips',
          'description' => 'Stylish tooltips for your web pages.',
          'files' => 
          array (
            0 => 'qtip.module',
            1 => 'qtip.admin.inc',
            2 => 'qtip.install',
          ),
          'configure' => 'admin/config/content/qtip',
          'core' => '7.x',
          'version' => '7.x-1.5',
          'project' => 'qtip',
          'datestamp' => '1314245522',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'qtip',
        'version' => '7.x-1.5',
      ),
      'redhen_note' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/redhen/modules/redhen_note/redhen_note.module',
        'basename' => 'redhen_note.module',
        'name' => 'redhen_note',
        'info' => 
        array (
          'name' => 'RedHen Notes',
          'description' => 'Defines the base note entity and features.',
          'package' => 'RedHen',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'redhen',
            1 => 'taxonomy',
            2 => 'text',
          ),
          'files' => 
          array (
            0 => 'includes/redhen_note.forms.inc',
            1 => 'includes/redhen_note.entity.inc',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'redhen',
          'datestamp' => '1342827162',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'redhen',
        'version' => '7.x-1.0-alpha3',
      ),
      'redhen_contact' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/redhen/modules/redhen_contact/redhen_contact.module',
        'basename' => 'redhen_contact.module',
        'name' => 'redhen_contact',
        'info' => 
        array (
          'name' => 'RedHen Contacts',
          'description' => 'Defines the base contact entity and features.',
          'package' => 'RedHen',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'redhen',
            1 => 'redhen_fields',
          ),
          'files' => 
          array (
            0 => 'includes/redhen_contact_type.admin.inc',
            1 => 'includes/redhen_contact.pages.inc',
            2 => 'includes/redhen_contact.forms.inc',
            3 => 'includes/redhen_contact.entity.inc',
            4 => 'includes/redhen_contact.controller.inc',
            5 => 'includes/redhen_contact_type.entity.inc',
            6 => 'includes/views/handlers/redhen_contact_handler_field_contact_link.inc',
            7 => 'includes/views/handlers/redhen_contact_handler_field_contact_link_edit.inc',
            8 => 'includes/views/handlers/redhen_contact_handler_field_contact_link_delete.inc',
            9 => 'includes/views/handlers/redhen_contact_handler_field_contact_state.inc',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'redhen',
          'datestamp' => '1342827162',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'redhen',
        'version' => '7.x-1.0-alpha3',
      ),
      'redhen_registration' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/redhen/modules/redhen_registration/redhen_registration.module',
        'basename' => 'redhen_registration.module',
        'name' => 'redhen_registration',
        'info' => 
        array (
          'name' => 'Redhen Registration',
          'description' => 'Integrates the Entity Registrations module.',
          'package' => 'RedHen',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'redhen_contact',
            1 => 'registration',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'redhen',
          'datestamp' => '1342827162',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'redhen',
        'version' => '7.x-1.0-alpha3',
      ),
      'redhen_org' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/redhen/modules/redhen_org/redhen_org.module',
        'basename' => 'redhen_org.module',
        'name' => 'redhen_org',
        'info' => 
        array (
          'name' => 'Redhen Organizations',
          'description' => 'Defines the base organization entity and features.',
          'package' => 'RedHen',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'redhen',
          ),
          'files' => 
          array (
            0 => 'includes/redhen_org_type.admin.inc',
            1 => 'includes/redhen_org_type.forms.inc',
            2 => 'includes/redhen_org_type.pages.inc',
            3 => 'includes/redhen_org.entity.inc',
            4 => 'includes/redhen_org.controller.inc',
            5 => 'includes/redhen_org_type.entity.inc',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'redhen',
          'datestamp' => '1342827162',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'redhen',
        'version' => '7.x-1.0-alpha3',
      ),
      'redhen_org_group' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/redhen/modules/redhen_org_group/redhen_org_group.module',
        'basename' => 'redhen_org_group.module',
        'name' => 'redhen_org_group',
        'info' => 
        array (
          'name' => 'Redhen Organization Groups',
          'description' => 'Enables group collaboration features for organizations',
          'package' => 'RedHen',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'redhen_org',
            1 => 'redhen_relation',
            2 => 'entityreference',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'redhen',
          'datestamp' => '1342827162',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'redhen',
        'version' => '7.x-1.0-alpha3',
      ),
      'redhen_relation' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/redhen/modules/redhen_relation/redhen_relation.module',
        'basename' => 'redhen_relation.module',
        'name' => 'redhen_relation',
        'info' => 
        array (
          'name' => 'RedHen Relation',
          'description' => 'Manage Redhen relationships.',
          'package' => 'RedHen',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'redhen_contact',
            1 => 'redhen_org',
            2 => 'relation',
            3 => 'relation_ui',
            4 => 'list',
          ),
          'files' => 
          array (
            0 => 'includes/redhen_relation.forms.inc',
            1 => 'includes/views/redhen_relation_handler_field_primary_contact.inc',
            2 => 'includes/views/redhen_relation_handler_sort_primary_contact.inc',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'redhen',
          'datestamp' => '1342827162',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'redhen',
        'version' => '7.x-1.0-alpha3',
      ),
      'redhen_engagement' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/redhen/modules/redhen_engagement/redhen_engagement.module',
        'basename' => 'redhen_engagement.module',
        'name' => 'redhen_engagement',
        'info' => 
        array (
          'name' => 'RedHen Engagement',
          'description' => 'Provides Redhen contact engagement scoring.',
          'package' => 'RedHen',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'redhen_contact',
          ),
          'files' => 
          array (
            0 => 'includes/redhen_engagement.entity.inc',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'redhen',
          'datestamp' => '1342827162',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'redhen',
        'version' => '7.x-1.0-alpha3',
      ),
      'redhen_fields' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/redhen/modules/redhen_fields/redhen_fields.module',
        'basename' => 'redhen_fields.module',
        'name' => 'redhen_fields',
        'info' => 
        array (
          'name' => 'RedHen Fields',
          'description' => 'Fields specific to RedHen CRM.',
          'package' => 'RedHen',
          'core' => '7.x',
          'version' => '7.x-1.0-alpha3',
          'project' => 'redhen',
          'datestamp' => '1342827162',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'redhen',
        'version' => '7.x-1.0-alpha3',
      ),
      'redhen' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/redhen/redhen.module',
        'basename' => 'redhen.module',
        'name' => 'redhen',
        'info' => 
        array (
          'name' => 'RedHen',
          'description' => 'Defines basic functionality common to all parts of the RedHen CRM.',
          'package' => 'RedHen',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'files' => 
          array (
            0 => 'includes/redhen.admin.inc',
            1 => 'includes/redhen.forms.inc',
          ),
          'configure' => 'admin/config/redhen',
          'php' => '5.3',
          'version' => '7.x-1.0-alpha3',
          'project' => 'redhen',
          'datestamp' => '1342827162',
        ),
        'schema_version' => 0,
        'project' => 'redhen',
        'version' => '7.x-1.0-alpha3',
      ),
      'oauth_common_providerui' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/oauth/oauth_common_providerui.module',
        'basename' => 'oauth_common_providerui.module',
        'name' => 'oauth_common_providerui',
        'info' => 
        array (
          'name' => 'OAuth Provider UI',
          'description' => 'Provides a UI for when OAuth is acting as a provider.',
          'package' => 'OAuth',
          'dependencies' => 
          array (
            0 => 'oauth_common',
          ),
          'core' => '7.x',
          'version' => '7.x-3.0',
          'project' => 'oauth',
          'datestamp' => '1328724350',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oauth',
        'version' => '7.x-3.0',
      ),
      'oauth_common' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/oauth/oauth_common.module',
        'basename' => 'oauth_common.module',
        'name' => 'oauth_common',
        'info' => 
        array (
          'name' => 'OAuth',
          'description' => 'Provides OAuth functionality',
          'configure' => 'admin/config/services/oauth',
          'package' => 'OAuth',
          'recommends' => 
          array (
            0 => 'ctools',
          ),
          'suggests' => 
          array (
            0 => 'inputstream',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'lib/OAuth.php',
            1 => 'includes/DrupalOAuthServer.inc',
            2 => 'includes/DrupalOAuthDataStore.inc',
            3 => 'includes/DrupalOAuthRequest.inc',
            4 => 'includes/DrupalOAuthToken.inc',
            5 => 'includes/DrupalOAuthConsumer.inc',
            6 => 'includes/DrupalOAuthClient.inc',
            7 => 'includes/OAuthSignatureMethod_HMAC.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'oauth',
          'datestamp' => '1328724350',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oauth',
        'version' => '7.x-3.0',
      ),
      'follow' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/follow/follow.module',
        'basename' => 'follow.module',
        'name' => 'follow',
        'info' => 
        array (
          'name' => 'Follow',
          'description' => 'Add sitewide and per user links to social network profiles.',
          'core' => '7.x',
          'version' => '7.x-1.0-alpha1',
          'project' => 'follow',
          'datestamp' => '1319736332',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'follow',
        'version' => '7.x-1.0-alpha1',
      ),
      'twitter_pull' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/twitter_pull/twitter_pull.module',
        'basename' => 'twitter_pull.module',
        'name' => 'twitter_pull',
        'info' => 
        array (
          'name' => 'Twitter Pull',
          'description' => 'Pull Info from Twitter and Create Contextual Insets',
          'package' => 'Other',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'twitter_pull.module',
            1 => 'twitter_pull.install',
            2 => 'plugins/twitter_pull_box.inc',
            3 => 'twitter_pull.class.inc',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'twitter_pull',
          'datestamp' => '1340314313',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'twitter_pull',
        'version' => '7.x-1.0-rc2',
      ),
      'webform_pay' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/webform_pay/webform_pay.module',
        'basename' => 'webform_pay.module',
        'name' => 'webform_pay',
        'info' => 
        array (
          'name' => 'Webform pay',
          'description' => 'Provides integration between Webform and Pay modules.',
          'core' => '7.x',
          'package' => 'Webform',
          'dependencies' => 
          array (
            0 => 'webform',
            1 => 'pay',
          ),
          'files' => 
          array (
            0 => 'webform_pay.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'smtp' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/smtp/smtp.module',
        'basename' => 'smtp.module',
        'name' => 'smtp',
        'info' => 
        array (
          'name' => 'SMTP Authentication Support',
          'description' => 'Allow for site emails to be sent through an SMTP server of your choice.',
          'core' => '7.x',
          'package' => 'Mail',
          'configure' => 'admin/config/system/smtp',
          'files' => 
          array (
            0 => 'smtp.module',
            1 => 'smtp.admin.inc',
            2 => 'smtp.mail.inc',
            3 => 'smtp.phpmailer.inc',
            4 => 'smtp.transport.inc',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'smtp',
          'datestamp' => '1315505820',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'smtp',
        'version' => '7.x-1.0-beta1',
      ),
      'panopoly_images' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/panopoly_images/panopoly_images.module',
        'basename' => 'panopoly_images.module',
        'name' => 'panopoly_images',
        'info' => 
        array (
          'name' => 'Panopoly Images',
          'description' => 'Provides scaling and cropping to images.',
          'core' => '7.x',
          'package' => 'Panopoly',
          'php' => '5.2.4',
          'project' => 'panopoly_images',
          'dependencies' => 
          array (
            0 => 'file_entity',
            1 => 'image',
            2 => 'media',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'file_entity:file_default_displays:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'file_display' => 
            array (
              0 => 'image__media_large__file_field_file_default',
              1 => 'image__media_large__file_field_file_rendered',
              2 => 'image__media_large__file_field_file_table',
              3 => 'image__media_large__file_field_file_url_plain',
              4 => 'image__media_large__file_field_media_large_icon',
              5 => 'image__media_large__file_image',
              6 => 'image__media_original__file_field_file_default',
              7 => 'image__media_original__file_field_file_rendered',
              8 => 'image__media_original__file_field_file_table',
              9 => 'image__media_original__file_field_file_url_plain',
              10 => 'image__media_original__file_field_media_large_icon',
              11 => 'image__media_original__file_image',
              12 => 'image__media_preview__file_field_file_default',
              13 => 'image__media_preview__file_field_file_rendered',
              14 => 'image__media_preview__file_field_file_table',
              15 => 'image__media_preview__file_field_file_url_plain',
              16 => 'image__media_preview__file_field_media_large_icon',
              17 => 'image__media_small__file_field_file_default',
              18 => 'image__media_small__file_field_file_rendered',
              19 => 'image__media_small__file_field_file_table',
              20 => 'image__media_small__file_field_file_url_plain',
              21 => 'image__media_small__file_field_media_large_icon',
              22 => 'image__media_small__file_image',
            ),
            'image' => 
            array (
              0 => 'panopoly_image_featured',
              1 => 'panopoly_image_full',
              2 => 'panopoly_image_half',
              3 => 'panopoly_image_quarter',
              4 => 'panopoly_image_spotlight',
              5 => 'panopoly_image_square',
              6 => 'panopoly_image_teaser',
              7 => 'panopoly_image_thumbnail',
            ),
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'panopoly_images.css',
            ),
          ),
          'version' => '7.x-1.0-beta4',
          'datestamp' => '1340290622',
        ),
        'schema_version' => 0,
        'project' => 'panopoly_images',
        'version' => '7.x-1.0-beta4',
      ),
      'addressfield_example' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/addressfield/example/addressfield_example.module',
        'basename' => 'addressfield_example.module',
        'name' => 'addressfield_example',
        'info' => 
        array (
          'name' => 'Address Field Example',
          'description' => 'Example module for how to implement an addressfield format handler.',
          'core' => '7.x',
          'package' => 'Fields',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'addressfield',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'addressfield',
          'datestamp' => '1338304248',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'addressfield',
        'version' => '7.x-1.0-beta3',
      ),
      'addressfield' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/addressfield/addressfield.module',
        'basename' => 'addressfield.module',
        'name' => 'addressfield',
        'info' => 
        array (
          'name' => 'Address Field',
          'description' => 'Manage a flexible address field, implementing the xNAL standard.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/addressfield_views_handler_filter_country.inc',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'addressfield',
          'datestamp' => '1338304248',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'addressfield',
        'version' => '7.x-1.0-beta3',
      ),
      'gridbuilder' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/gridbuilder/gridbuilder.module',
        'basename' => 'gridbuilder.module',
        'name' => 'gridbuilder',
        'info' => 
        array (
          'name' => 'Grid builder',
          'description' => 'Simple grid system builder.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.0-alpha2',
          'project' => 'gridbuilder',
          'datestamp' => '1344614548',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'gridbuilder',
        'version' => '7.x-1.0-alpha2',
      ),
      'defaultcontent' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/defaultcontent/defaultcontent.module',
        'basename' => 'defaultcontent.module',
        'name' => 'defaultcontent',
        'info' => 
        array (
          'name' => 'Default Content',
          'description' => 'Allows Export/Import of Default Content',
          'core' => '7.x',
          'package' => 'Features',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'ctools',
          ),
          'version' => '7.x-1.0-alpha5',
          'project' => 'defaultcontent',
          'datestamp' => '1328117445',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'defaultcontent',
        'version' => '7.x-1.0-alpha5',
      ),
      'devel_themer' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/devel_themer/devel_themer.module',
        'basename' => 'devel_themer.module',
        'name' => 'devel_themer',
        'info' => 
        array (
          'name' => 'Theme developer',
          'description' => 'Essential theme API information for theme developers',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'devel',
            1 => 'simplehtmldom',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'devel_themer.module',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'devel_themer',
          'datestamp' => '1343952857',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'devel_themer',
        'version' => '7.x-1.x-dev',
      ),
      'omega_tools' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/omega_tools/omega_tools.module',
        'basename' => 'omega_tools.module',
        'name' => 'omega_tools',
        'info' => 
        array (
          'name' => 'Omega Tools',
          'description' => 'Provides additional functionality for the <a href="http://drupal.org/project/omega">Omega Theme</a>.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'omega_tools.module',
            1 => 'includes/omega_tools.admin.inc',
            2 => 'includes/omega_tools.drush.inc',
            3 => 'includes/omega_tools.wizard.inc',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'omega_tools',
          'datestamp' => '1329502543',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'omega_tools',
        'version' => '7.x-3.0-rc4',
      ),
      'entityreference_behavior_example' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
        'basename' => 'entityreference_behavior_example.module',
        'name' => 'entityreference_behavior_example',
        'info' => 
        array (
          'name' => 'Entity Reference Behavior Example',
          'description' => 'Provides some example code for implementing Entity Reference behaviors.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entityreference',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'entityreference',
          'datestamp' => '1338411955',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference',
        'version' => '7.x-1.0-rc3',
      ),
      'entityreference' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/entityreference/entityreference.module',
        'basename' => 'entityreference.module',
        'name' => 'entityreference',
        'info' => 
        array (
          'name' => 'Entity Reference',
          'description' => 'Provides a field that can reference other entities.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'entityreference.migrate.inc',
            1 => 'plugins/selection/abstract.inc',
            2 => 'plugins/selection/views.inc',
            3 => 'plugins/behavior/abstract.inc',
            4 => 'views/entityreference_plugin_display.inc',
            5 => 'views/entityreference_plugin_style.inc',
            6 => 'views/entityreference_plugin_row_fields.inc',
            7 => 'tests/entityreference.handlers.test',
          ),
          'version' => '7.x-1.0-rc3',
          'project' => 'entityreference',
          'datestamp' => '1338411955',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entityreference',
        'version' => '7.x-1.0-rc3',
      ),
      'redirect' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/redirect/redirect.module',
        'basename' => 'redirect.module',
        'name' => 'redirect',
        'info' => 
        array (
          'name' => 'Redirect',
          'description' => 'Allows users to redirect from old URLs to new URLs.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'redirect.module',
            1 => 'redirect.admin.inc',
            2 => 'redirect.install',
            3 => 'redirect.test',
            4 => 'views/redirect.views.inc',
            5 => 'views/redirect_handler_filter_redirect_type.inc',
            6 => 'views/redirect_handler_field_redirect_source.inc',
            7 => 'views/redirect_handler_field_redirect_redirect.inc',
            8 => 'views/redirect_handler_field_redirect_operations.inc',
            9 => 'views/redirect_handler_field_redirect_link_edit.inc',
            10 => 'views/redirect_handler_field_redirect_link_delete.inc',
          ),
          'configure' => 'admin/config/search/redirect/settings',
          'version' => '7.x-1.0-beta4',
          'project' => 'redirect',
          'datestamp' => '1323364843',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6',
        'project' => 'redirect',
        'version' => '7.x-1.0-beta4',
      ),
      'context_layouts' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/context/context_layouts/context_layouts.module',
        'basename' => 'context_layouts.module',
        'name' => 'context_layouts',
        'info' => 
        array (
          'name' => 'Context layouts',
          'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'version' => '7.x-3.0-beta3',
          'project' => 'context',
          'datestamp' => '1337490055',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context',
        'version' => '7.x-3.0-beta3',
      ),
      'context_ui' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/context/context_ui/context_ui.module',
        'basename' => 'context_ui.module',
        'name' => 'context_ui',
        'info' => 
        array (
          'name' => 'Context UI',
          'description' => 'Provides a simple UI for settings up a site structure using Context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'configure' => 'admin/structure/context',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context_ui.test',
          ),
          'version' => '7.x-3.0-beta3',
          'project' => 'context',
          'datestamp' => '1337490055',
          'php' => '5.2.4',
        ),
        'schema_version' => '6004',
        'project' => 'context',
        'version' => '7.x-3.0-beta3',
      ),
      'context' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/context/context.module',
        'basename' => 'context.module',
        'name' => 'context',
        'info' => 
        array (
          'name' => 'Context',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'description' => 'Provide modules with a cache that lasts for a single page request.',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context.test',
            2 => 'tests/context.conditions.test',
            3 => 'tests/context.reactions.test',
          ),
          'version' => '7.x-3.0-beta3',
          'project' => 'context',
          'datestamp' => '1337490055',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'context',
        'version' => '7.x-3.0-beta3',
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.3',
          'project' => 'devel',
          'datestamp' => '1338940281',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.3',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc3',
          'project' => 'admin_menu',
          'datestamp' => '1337292349',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc3',
      ),
      'admin_devel' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc3',
          'project' => 'admin_menu',
          'datestamp' => '1337292349',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc3',
      ),
      'admin_menu' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc3',
          'project' => 'admin_menu',
          'datestamp' => '1337292349',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc3',
      ),
      'flag_actions' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/flag/flag_actions.module',
        'basename' => 'flag_actions.module',
        'name' => 'flag_actions',
        'info' => 
        array (
          'name' => 'Flag actions',
          'description' => 'Execute actions on Flag events.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'flag',
          ),
          'package' => 'Flags',
          'configure' => 'admin/structure/webform/flags',
          'files' => 
          array (
            0 => 'flag.install',
            1 => 'flag_actions.module',
          ),
          'version' => '7.x-2.0-beta8',
          'project' => 'flag',
          'datestamp' => '1343127432',
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'project' => 'flag',
        'version' => '7.x-2.0-beta8',
      ),
      'flag' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/flag/flag.module',
        'basename' => 'flag.module',
        'name' => 'flag',
        'info' => 
        array (
          'name' => 'Flag',
          'description' => 'Create customized flags that users can set on content.',
          'core' => '7.x',
          'package' => 'Flags',
          'configure' => 'admin/structure/flags',
          'files' => 
          array (
            0 => 'flag.inc',
            1 => 'flag.rules.inc',
            2 => 'includes/flag_handler_argument_content_id.inc',
            3 => 'includes/flag_handler_field_ops.inc',
            4 => 'includes/flag_handler_filter_flagged.inc',
            5 => 'includes/flag_handler_relationships.inc',
            6 => 'includes/flag_plugin_argument_validate_flaggability.inc',
            7 => 'tests/flag.test',
          ),
          'version' => '7.x-2.0-beta8',
          'project' => 'flag',
          'datestamp' => '1343127432',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'flag',
        'version' => '7.x-2.0-beta8',
      ),
      'debut_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/debut_wysiwyg/debut_wysiwyg.module',
        'basename' => 'debut_wysiwyg.module',
        'name' => 'debut_wysiwyg',
        'info' => 
        array (
          'name' => 'Debut Wysiwyg',
          'description' => 'Provides a set of What You See Is What You Get (Wysiwyg) editors and accompanying text formats.',
          'core' => '7.x',
          'package' => 'Features',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'media',
            2 => 'wysiwyg',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'filter' => 
            array (
              0 => 'wysiwyg_contributor',
              1 => 'wysiwyg_editor',
              2 => 'wysiwyg_public',
            ),
            'user_permission' => 
            array (
              0 => 'use text format wysiwyg_contributor',
              1 => 'use text format wysiwyg_editor',
              2 => 'use text format wysiwyg_public',
            ),
            'wysiwyg' => 
            array (
              0 => 'wysiwyg_contributor',
              1 => 'wysiwyg_editor',
              2 => 'wysiwyg_public',
            ),
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'debut_wysiwyg',
          'datestamp' => '1336501258',
        ),
        'schema_version' => 0,
        'project' => 'debut_wysiwyg',
        'version' => '7.x-1.0-rc1',
      ),
      'phone' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/phone/phone.module',
        'basename' => 'phone.module',
        'name' => 'phone',
        'info' => 
        array (
          'name' => 'Phone',
          'description' => 'The phone module allows administrators to define a field type for phone numbers.',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/phone.au.test',
            1 => 'tests/phone.be.test',
            2 => 'tests/phone.br.test',
            3 => 'tests/phone.ca.test',
            4 => 'tests/phone.ch.test',
            5 => 'tests/phone.cl.test',
            6 => 'tests/phone.cn.test',
            7 => 'tests/phone.cr.test',
            8 => 'tests/phone.cs.test',
            9 => 'tests/phone.eg.test',
            10 => 'tests/phone.es.test',
            11 => 'tests/phone.fr.test',
            12 => 'tests/phone.hu.test',
            13 => 'tests/phone.il.test',
            14 => 'tests/phone.int.test',
            15 => 'tests/phone.it.test',
            16 => 'tests/phone.jo.test',
            17 => 'tests/phone.nl.test',
            18 => 'tests/phone.nz.test',
            19 => 'tests/phone.pa.test',
            20 => 'tests/phone.ph.test',
            21 => 'tests/phone.pk.test',
            22 => 'tests/phone.pl.test',
            23 => 'tests/phone.ru.test',
            24 => 'tests/phone.se.test',
            25 => 'tests/phone.sg.test',
            26 => 'tests/phone.ua.test',
            27 => 'tests/phone.uk.test',
            28 => 'tests/phone.za.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.x-dev',
          'project' => 'phone',
          'datestamp' => '1330648200',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'phone',
        'version' => '7.x-1.x-dev',
      ),
      'auto_nodetitle' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/auto_nodetitle/auto_nodetitle.module',
        'basename' => 'auto_nodetitle.module',
        'name' => 'auto_nodetitle',
        'info' => 
        array (
          'name' => 'Automatic Nodetitles',
          'description' => 'Allows hiding of the content title field and automatic title creation.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'auto_nodetitle.install',
            1 => 'auto_nodetitle.module',
            2 => 'auto_nodetitle.js',
          ),
          'version' => '7.x-1.0',
          'project' => 'auto_nodetitle',
          'datestamp' => '1307449915',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '1',
        'project' => 'auto_nodetitle',
        'version' => '7.x-1.0',
      ),
      'filter_tips_dialog' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/filter_tips_dialog/filter_tips_dialog.module',
        'basename' => 'filter_tips_dialog.module',
        'name' => 'filter_tips_dialog',
        'info' => 
        array (
          'name' => 'Filter tips dialog',
          'description' => 'Moves the filter tips page into a modal dialog.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'dialog',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'filter_tips_dialog',
          'datestamp' => '1303214813',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'filter_tips_dialog',
        'version' => '7.x-1.x-dev',
      ),
      'respondjs' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/respondjs/respondjs.module',
        'basename' => 'respondjs.module',
        'name' => 'respondjs',
        'info' => 
        array (
          'name' => 'Respond.js',
          'description' => 'Respond.js integration for Drupal',
          'core' => '7.x',
          'package' => 'Responsive',
          'files' => 
          array (
            0 => 'respondjs.module',
            1 => 'respondjs.admin.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'respondjs',
          'datestamp' => '1331953244',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'respondjs',
        'version' => '7.x-1.1',
      ),
      'draggableviews_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/draggableviews/test/draggableviews_test/draggableviews_test.module',
        'basename' => 'draggableviews_test.module',
        'name' => 'draggableviews_test',
        'info' => 
        array (
          'name' => 'Draggableviews Test',
          'description' => 'Provides views for testing.',
          'dependencies' => 
          array (
            0 => 'draggableviews',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-2.0',
          'project' => 'draggableviews',
          'datestamp' => '1338282056',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'draggableviews',
        'version' => '7.x-2.0',
      ),
      'draggableviews' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/draggableviews/draggableviews.module',
        'basename' => 'draggableviews.module',
        'name' => 'draggableviews',
        'info' => 
        array (
          'name' => 'Draggableviews',
          'description' => 'Makes Views draggable',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'entity',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'handlers/draggableviews_handler.inc',
            1 => 'handlers/draggableviews_handler_native.inc',
            2 => 'handlers/draggableviews_handler_fieldapi.inc',
            3 => 'views/draggableviews_handler_field_draggable.inc',
            4 => 'views/draggableviews_handler_sort.inc',
            5 => 'views/draggableviews_join_handler.inc',
            6 => 'test/draggableviews.test',
          ),
          'version' => '7.x-2.0',
          'project' => 'draggableviews',
          'datestamp' => '1338282056',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'draggableviews',
        'version' => '7.x-2.0',
      ),
      'panelizer' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/panelizer/panelizer.module',
        'basename' => 'panelizer.module',
        'name' => 'panelizer',
        'info' => 
        array (
          'name' => 'Panelizer',
          'description' => 'Allow any node type to have custom panel displays, similar to the panel node type.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
            1 => 'ctools',
            2 => 'page_manager',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/content/panelizer',
          'files' => 
          array (
            0 => 'plugins/views/panelizer_handler_field_node_link.inc',
            1 => 'plugins/views/panelizer_plugin_row_panelizer_node_view.inc',
          ),
          'version' => '7.x-2.0',
          'project' => 'panelizer',
          'datestamp' => '1332005747',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'project' => 'panelizer',
        'version' => '7.x-2.0',
      ),
      'entitycache' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/entitycache/entitycache.module',
        'basename' => 'entitycache.module',
        'name' => 'entitycache',
        'info' => 
        array (
          'name' => 'Entity cache',
          'description' => 'Provides caching for core entities including nodes and taxonomy terms.',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'files' => 
          array (
            0 => 'entitycache.module',
            1 => 'entitycache.comment.inc',
            2 => 'entitycache.taxonomy.inc',
            3 => 'entitycache.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'entitycache',
          'datestamp' => '1315901203',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entitycache',
        'version' => '7.x-1.1',
      ),
      'panels_everywhere' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/panels_everywhere/panels_everywhere.module',
        'basename' => 'panels_everywhere.module',
        'name' => 'panels_everywhere',
        'info' => 
        array (
          'name' => 'Panels everywhere',
          'description' => 'Allow your site to use Panels instead of Blocks to lay out your pages.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
            1 => 'page_manager',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'panels_everywhere.module',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'panels_everywhere',
          'datestamp' => '1342012935',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels_everywhere',
        'version' => '7.x-1.0-rc1',
      ),
      'file_entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/file_entity/tests/file_entity_test.module',
        'basename' => 'file_entity_test.module',
        'name' => 'file_entity_test',
        'info' => 
        array (
          'name' => 'File Entity Test',
          'description' => 'Support module for File Entity tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
          ),
          'hidden' => true,
          'version' => '7.x-2.0-unstable6',
          'project' => 'file_entity',
          'datestamp' => '1341083500',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'file_entity',
        'version' => '7.x-2.0-unstable6',
      ),
      'file_entity' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/file_entity/file_entity.module',
        'basename' => 'file_entity.module',
        'name' => 'file_entity',
        'info' => 
        array (
          'name' => 'File entity',
          'description' => 'Extends Drupal file entities to be fieldable and viewable.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'file',
            2 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/views_handler_argument_file_type.inc',
            1 => 'views/views_handler_field_file_type.inc',
            2 => 'views/views_handler_filter_file_type.inc',
            3 => 'views/views_plugin_row_file_view.inc',
            4 => 'tests/file_entity.test',
          ),
          'configure' => 'admin/structure/file-types',
          'version' => '7.x-2.0-unstable6',
          'project' => 'file_entity',
          'datestamp' => '1341083500',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'file_entity',
        'version' => '7.x-2.0-unstable6',
      ),
      'fieldable_panels_panes' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/fieldable_panels_panes/fieldable_panels_panes.module',
        'basename' => 'fieldable_panels_panes.module',
        'name' => 'fieldable_panels_panes',
        'info' => 
        array (
          'name' => 'Fieldable Panels Panes',
          'description' => 'Allow the creation of fieldable panels pane entities.',
          'package' => 'Panels',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'panels',
            1 => 'views',
            2 => 'field_ui',
          ),
          'files' => 
          array (
            0 => 'includes/PanelsPaneController.class.php',
            1 => 'plugins/views/fieldable_panels_panes_handler_argument_bundle.inc',
            2 => 'plugins/views/fieldable_panels_panes_handler_field_bundle.inc',
            3 => 'plugins/views/fieldable_panels_panes_handler_field_delete_entity.inc',
            4 => 'plugins/views/fieldable_panels_panes_handler_field_edit_entity.inc',
            5 => 'plugins/views/fieldable_panels_panes_handler_field_view_entity.inc',
            6 => 'plugins/views/fieldable_panels_panes_handler_filter_bundle.inc',
            7 => 'plugins/views/fieldable_panels_panes_handler_field_delete_revision.inc',
            8 => 'plugins/views/fieldable_panels_panes_handler_field_edit_revision.inc',
            9 => 'plugins/views/fieldable_panels_panes_handler_field_view_revision.inc',
            10 => 'plugins/views/fieldable_panels_panes_handler_field_is_current.inc',
            11 => 'plugins/views/fieldable_panels_panes_handler_field_make_current.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'fieldable_panels_panes',
          'datestamp' => '1345319222',
          'php' => '5.2.4',
        ),
        'schema_version' => '7106',
        'project' => 'fieldable_panels_panes',
        'version' => '7.x-1.2',
      ),
      'views_load_more' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/views_load_more/views_load_more.module',
        'basename' => 'views_load_more.module',
        'name' => 'views_load_more',
        'info' => 
        array (
          'name' => 'Views Load More',
          'description' => 'A pager plugin for views. Gives users the option to add a \'more\' button to a view and have the results appended to existing results being displayed.',
          'core' => '7.x',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_load_more.views.inc',
            1 => 'views_plugin_pager_load_more.inc',
          ),
          'version' => '7.x-1.1+21-dev',
          'project' => 'views_load_more',
          'datestamp' => '1337043192',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_load_more',
        'version' => '7.x-1.1+21-dev',
      ),
      'stringoverrides_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/stringoverrides/stringoverrides_migrate.module',
        'basename' => 'stringoverrides_migrate.module',
        'name' => 'stringoverrides_migrate',
        'info' => 
        array (
          'name' => 'String Overrides Migrate',
          'description' => 'Tools for importing and exporting string override settings.',
          'dependencies' => 
          array (
            0 => 'stringoverrides',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'stringoverrides_migrate.module',
            1 => 'stringoverrides_migrate.admin.inc',
          ),
          'version' => '7.x-1.8',
          'project' => 'stringoverrides',
          'datestamp' => '1304446316',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'stringoverrides',
        'version' => '7.x-1.8',
      ),
      'stringoverrides' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/stringoverrides/stringoverrides.module',
        'basename' => 'stringoverrides.module',
        'name' => 'stringoverrides',
        'info' => 
        array (
          'name' => 'String Overrides',
          'description' => 'Provides a quick and easy way of replacing text.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'stringoverrides.module',
            1 => 'stringoverrides.install',
            2 => 'stringoverrides.admin.inc',
          ),
          'configure' => 'admin/config/regional/stringoverrides',
          'version' => '7.x-1.8',
          'project' => 'stringoverrides',
          'datestamp' => '1304446316',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'stringoverrides',
        'version' => '7.x-1.8',
      ),
      'uuid_services_example' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/uuid/uuid_services_example/uuid_services_example.module',
        'basename' => 'uuid_services_example.module',
        'name' => 'uuid_services_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'rest_server',
            1 => 'services',
            2 => 'uuid',
            3 => 'uuid_services',
          ),
          'description' => 'Example feature of a UUID service. Works well with the Deploy Example feature as a client.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'services:services:3',
            ),
            'services_endpoint' => 
            array (
              0 => 'uuid_services_example',
            ),
          ),
          'name' => 'UUID Services Example',
          'package' => 'Features',
          'version' => '7.x-1.0-alpha3+39-dev',
          'project' => 'uuid',
          'datestamp' => '1342573505',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha3+39-dev',
      ),
      'uuid_default_entities_example' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/uuid/uuid_default_entities_example/uuid_default_entities_example.module',
        'basename' => 'uuid_default_entities_example.module',
        'name' => 'uuid_default_entities_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'features',
            2 => 'uuid',
          ),
          'description' => 'Example feature mainly used for testing.',
          'features' => 
          array (
            'uuid_entities' => 
            array (
              0 => 'deploy_example_plan',
            ),
          ),
          'name' => 'UUID default entities example',
          'package' => 'Features',
          'version' => '7.x-1.0-alpha3+39-dev',
          'project' => 'uuid',
          'datestamp' => '1342573505',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha3+39-dev',
      ),
      'uuid_services' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/uuid/uuid_services/uuid_services.module',
        'basename' => 'uuid_services.module',
        'name' => 'uuid_services',
        'info' => 
        array (
          'name' => 'UUID Services',
          'description' => 'Provides integration with the Services module, like exposing a UUID entity resource.',
          'core' => '7.x',
          'package' => 'Services - resources',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'uuid',
            2 => 'entity',
          ),
          'version' => '7.x-1.0-alpha3+39-dev',
          'project' => 'uuid',
          'datestamp' => '1342573505',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha3+39-dev',
      ),
      'uuid' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/uuid/uuid.module',
        'basename' => 'uuid.module',
        'name' => 'uuid',
        'info' => 
        array (
          'name' => 'Universally Unique ID',
          'description' => 'Extends the entity functionality and adds support for universally unique identifiers.',
          'core' => '7.x',
          'package' => 'UUID',
          'configure' => 'admin/config/system/uuid',
          'files' => 
          array (
            0 => 'uuid.test',
          ),
          'version' => '7.x-1.0-alpha3+39-dev',
          'project' => 'uuid',
          'datestamp' => '1342573505',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha3+39-dev',
      ),
      'ds_exportables_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ds/tests/ds_exportables_test/ds_exportables_test.module',
        'basename' => 'ds_exportables_test.module',
        'name' => 'ds_exportables_test',
        'info' => 
        array (
          'name' => 'Display suite exportables test',
          'description' => 'Tests for exportables with Display Suite.',
          'package' => 'Display suite',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.5',
          'project' => 'ds',
          'datestamp' => '1329223541',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-1.5',
      ),
      'ds_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ds/tests/ds_test.module',
        'basename' => 'ds_test.module',
        'name' => 'ds_test',
        'info' => 
        array (
          'name' => 'Display suite Test',
          'description' => 'Test module for display suite',
          'core' => '7.x',
          'package' => 'Display suite',
          'dependencies' => 
          array (
            0 => 'ds_extras',
          ),
          'hidden' => true,
          'version' => '7.x-1.5',
          'project' => 'ds',
          'datestamp' => '1329223541',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-1.5',
      ),
      'ds_search' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ds/modules/ds_search/ds_search.module',
        'basename' => 'ds_search.module',
        'name' => 'ds_search',
        'info' => 
        array (
          'name' => 'Search display',
          'description' => 'Extend the display options for search results for Drupal Core or Apache Solr.',
          'core' => '7.x',
          'package' => 'Display suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/search',
          'version' => '7.x-1.5',
          'project' => 'ds',
          'datestamp' => '1329223541',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-1.5',
      ),
      'ds_forms' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ds/modules/ds_forms/ds_forms.module',
        'basename' => 'ds_forms.module',
        'name' => 'ds_forms',
        'info' => 
        array (
          'name' => 'Forms',
          'description' => 'Manage the layout of forms.',
          'core' => '7.x',
          'package' => 'Display suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-1.5',
          'project' => 'ds',
          'datestamp' => '1329223541',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-1.5',
      ),
      'ds_extras' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ds/modules/ds_extras/ds_extras.module',
        'basename' => 'ds_extras.module',
        'name' => 'ds_extras',
        'info' => 
        array (
          'name' => 'Extras',
          'description' => 'Contains additional features.',
          'core' => '7.x',
          'package' => 'Display suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/extras',
          'version' => '7.x-1.5',
          'project' => 'ds',
          'datestamp' => '1329223541',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'ds',
        'version' => '7.x-1.5',
      ),
      'ds' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ds/ds.module',
        'basename' => 'ds.module',
        'name' => 'ds',
        'info' => 
        array (
          'name' => 'Display suite',
          'description' => 'Extend the display options for every entity type.',
          'core' => '7.x',
          'package' => 'Display suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/views_plugin_ds_entity_view.inc',
            1 => 'views/views_plugin_ds_fields_view.inc',
            2 => 'tests/ds.base.test',
            3 => 'tests/ds.search.test',
            4 => 'tests/ds.entities.test',
            5 => 'tests/ds.exportables.test',
            6 => 'tests/ds.panels.test',
            7 => 'tests/ds.views.test',
            8 => 'tests/ds.forms.test',
          ),
          'configure' => 'admin/structure/ds',
          'version' => '7.x-1.5',
          'project' => 'ds',
          'datestamp' => '1329223541',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'ds',
        'version' => '7.x-1.5',
      ),
      'media_internet' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/media/modules/media_internet/media_internet.module',
        'basename' => 'media_internet.module',
        'name' => 'media_internet',
        'info' => 
        array (
          'name' => 'Media Internet Sources',
          'description' => 'Provides an API for accessing media on various internet services',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserInternet.inc',
          ),
          'version' => '7.x-2.0-unstable6+1-dev',
          'project' => 'media',
          'datestamp' => '1341708042',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-unstable6+1-dev',
      ),
      'mediafield' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/media/modules/mediafield/mediafield.module',
        'basename' => 'mediafield.module',
        'name' => 'mediafield',
        'info' => 
        array (
          'name' => 'Media Field',
          'description' => 'Provides a field type that stores media-specific data. <em>Deprecated by the core File field type.</em>',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'version' => '7.x-2.0-unstable6+1-dev',
          'project' => 'media',
          'datestamp' => '1341708042',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-unstable6+1-dev',
      ),
      'media' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/media/media.module',
        'basename' => 'media.module',
        'name' => 'media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Provides the core Media API',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity (>1.99)',
            1 => 'image',
            2 => 'views',
          ),
          'files' => 
          array (
            0 => 'includes/MediaReadOnlyStreamWrapper.inc',
            1 => 'includes/MediaBrowserPluginInterface.inc',
            2 => 'includes/MediaBrowserPlugin.inc',
            3 => 'includes/MediaBrowserLibrary.inc',
            4 => 'includes/MediaBrowserUpload.inc',
            5 => 'includes/MediaBrowserView.inc',
            6 => 'includes/media_views_plugin_display_media_browser.inc',
            7 => 'includes/media_views_plugin_style_media_browser.inc',
            8 => 'tests/media.test',
            9 => 'tests/media.types.test',
            10 => 'tests/media.entity.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.0-unstable6+1-dev',
          'project' => 'media',
          'datestamp' => '1341708042',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'media',
        'version' => '7.x-2.0-unstable6+1-dev',
      ),
      'extlink' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/extlink/extlink.module',
        'basename' => 'extlink.module',
        'name' => 'extlink',
        'info' => 
        array (
          'name' => 'External Links',
          'description' => 'Adds icon next to external links on the site.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/extlink',
          'files' => 
          array (
            0 => 'extlink.module',
          ),
          'version' => '7.x-1.12',
          'project' => 'extlink',
          'datestamp' => '1287276383',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'extlink',
        'version' => '7.x-1.12',
      ),
      'panels_mini' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/panels/panels_mini/panels_mini.module',
        'basename' => 'panels_mini.module',
        'name' => 'panels_mini',
        'info' => 
        array (
          'name' => 'Mini panels',
          'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/export_ui/panels_mini_ui.class.php',
          ),
          'version' => '7.x-3.2',
          'project' => 'panels',
          'datestamp' => '1332079243',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.2',
      ),
      'panels_ipe' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/panels/panels_ipe/panels_ipe.module',
        'basename' => 'panels_ipe.module',
        'name' => 'panels_ipe',
        'info' => 
        array (
          'name' => 'Panels In-Place Editor',
          'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/panels',
          'files' => 
          array (
            0 => 'panels_ipe.module',
          ),
          'version' => '7.x-3.2',
          'project' => 'panels',
          'datestamp' => '1332079243',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.2',
      ),
      'panels_node' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/panels/panels_node/panels_node.module',
        'basename' => 'panels_node.module',
        'name' => 'panels_node',
        'info' => 
        array (
          'name' => 'Panel nodes',
          'description' => 'Create nodes that are divided into areas with selectable content.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'configure' => 'admin/structure/panels',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'panels_node.module',
          ),
          'version' => '7.x-3.2',
          'project' => 'panels',
          'datestamp' => '1332079243',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'panels',
        'version' => '7.x-3.2',
      ),
      'panels' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/contrib-panopoly/panels/panels.module',
        'basename' => 'panels.module',
        'name' => 'panels',
        'info' => 
        array (
          'name' => 'Panels',
          'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
          'core' => '7.x',
          'package' => 'Panels',
          'configure' => 'admin/structure/panels',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'panels.module',
            1 => 'includes/common.inc',
            2 => 'includes/legacy.inc',
            3 => 'includes/plugins.inc',
            4 => 'plugins/views/panels_views_plugin_row_fields.inc',
          ),
          'version' => '7.x-3.2',
          'project' => 'panels',
          'datestamp' => '1332079243',
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'project' => 'panels',
        'version' => '7.x-3.2',
      ),
      'strongarm' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/strongarm/strongarm.module',
        'basename' => 'strongarm.module',
        'name' => 'strongarm',
        'info' => 
        array (
          'name' => 'Strongarm',
          'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'strongarm.admin.inc',
            1 => 'strongarm.install',
            2 => 'strongarm.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'strongarm',
          'datestamp' => '1339604214',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'strongarm',
        'version' => '7.x-2.0',
      ),
      'search_api_db' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/search_api_db/search_api_db.module',
        'basename' => 'search_api_db.module',
        'name' => 'search_api_db',
        'info' => 
        array (
          'name' => 'Database search',
          'description' => 'Offers an implementation of the Search API that uses database tables for indexing content.',
          'dependencies' => 
          array (
            0 => 'search_api',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'files' => 
          array (
            0 => 'search_api_db.test',
            1 => 'service.inc',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'search_api_db',
          'datestamp' => '1337790720',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'search_api_db',
        'version' => '7.x-1.0-beta3',
      ),
      'actions_permissions' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/views_bulk_operations/actions_permissions.module',
        'basename' => 'actions_permissions.module',
        'name' => 'actions_permissions',
        'info' => 
        array (
          'name' => 'Actions permissions',
          'description' => 'Integrates actions with the permission system.',
          'package' => 'Administration',
          'core' => '7.x',
          'version' => '7.x-3.0-rc1',
          'project' => 'views_bulk_operations',
          'datestamp' => '1328576162',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_bulk_operations',
        'version' => '7.x-3.0-rc1',
      ),
      'views_bulk_operations' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/views_bulk_operations/views_bulk_operations.module',
        'basename' => 'views_bulk_operations.module',
        'name' => 'views_bulk_operations',
        'info' => 
        array (
          'name' => 'Views Bulk Operations',
          'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/operation_types/base.class.php',
            1 => 'views/views_bulk_operations_handler_field_operations.inc',
          ),
          'version' => '7.x-3.0-rc1',
          'project' => 'views_bulk_operations',
          'datestamp' => '1328576162',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_bulk_operations',
        'version' => '7.x-3.0-rc1',
      ),
      'disqus' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/disqus/disqus.module',
        'basename' => 'disqus.module',
        'name' => 'disqus',
        'info' => 
        array (
          'name' => 'Disqus',
          'description' => 'Uses the Disqus web service to enhance comments.',
          'core' => '7.x',
          'php' => '5',
          'files' => 
          array (
            0 => 'disqus.admin.inc',
            1 => 'disqus.install',
            2 => 'disqus.module',
            3 => 'disqus.php',
            4 => 'disqus.views.inc',
          ),
          'configure' => 'admin/config/services/disqus',
          'version' => '7.x-1.9',
          'project' => 'disqus',
          'datestamp' => '1314928617',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7001',
        'project' => 'disqus',
        'version' => '7.x-1.9',
      ),
      'pm_existing_pages' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/pm_existing_pages/pm_existing_pages.module',
        'basename' => 'pm_existing_pages.module',
        'name' => 'pm_existing_pages',
        'info' => 
        array (
          'name' => 'Page manager existing pages',
          'description' => 'Provides the ability to override existing pages through Page manager.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'page_manager',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.4',
          'project' => 'pm_existing_pages',
          'datestamp' => '1337606183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'pm_existing_pages',
        'version' => '7.x-1.4',
      ),
      'oauth2_common' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/oauthconnector/modules/oauth2/oauth2_common.module',
        'basename' => 'oauth2_common.module',
        'name' => 'oauth2_common',
        'info' => 
        array (
          'name' => 'OAuth2',
          'description' => 'Extends OAuth functionality with Oauth2',
          'package' => 'OAuth',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'lib/DrupalOAuth2Client.inc',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'oauthconnector',
          'datestamp' => '1332058843',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oauthconnector',
        'version' => '7.x-1.0-beta1',
      ),
      'oauthconnector' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/oauthconnector/oauthconnector.module',
        'basename' => 'oauthconnector.module',
        'name' => 'oauthconnector',
        'info' => 
        array (
          'name' => 'OAuth Connector',
          'description' => 'OAuth support for the Connector module',
          'core' => '7.x',
          'package' => 'Connector',
          'dependencies' => 
          array (
            0 => 'connector',
            1 => 'oauth_common',
            2 => 'oauth2_common',
            3 => 'http_client_oauth',
            4 => 'ctools',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'oauthconnector',
          'datestamp' => '1332058843',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'oauthconnector',
        'version' => '7.x-1.0-beta1',
      ),
      'form_builder_examples' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/form_builder/examples/form_builder_examples.module',
        'basename' => 'form_builder_examples.module',
        'name' => 'form_builder_examples',
        'info' => 
        array (
          'name' => 'Form builder examples',
          'description' => 'Form builder support for CCK, Webform, and Profile modules.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'form_builder',
          ),
          'version' => '7.x-1.1',
          'project' => 'form_builder',
          'datestamp' => '1343197970',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'form_builder',
        'version' => '7.x-1.1',
      ),
      'form_builder_webform' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/form_builder/modules/webform/form_builder_webform.module',
        'basename' => 'form_builder_webform.module',
        'name' => 'form_builder_webform',
        'info' => 
        array (
          'name' => 'Form builder Webform UI',
          'description' => 'Form builder integration for the Webform module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'form_builder',
            1 => 'webform',
          ),
          'version' => '7.x-1.1',
          'project' => 'form_builder',
          'datestamp' => '1343197970',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'form_builder',
        'version' => '7.x-1.1',
      ),
      'form_builder' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/form_builder/form_builder.module',
        'basename' => 'form_builder.module',
        'name' => 'form_builder',
        'info' => 
        array (
          'name' => 'Form builder',
          'description' => 'Form building framework.',
          'dependencies' => 
          array (
            0 => 'options_element',
          ),
          'core' => '7.x',
          'version' => '7.x-1.1',
          'project' => 'form_builder',
          'datestamp' => '1343197970',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'form_builder',
        'version' => '7.x-1.1',
      ),
      'field_permissions' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/field_permissions/field_permissions.module',
        'basename' => 'field_permissions.module',
        'name' => 'field_permissions',
        'info' => 
        array (
          'name' => 'Field Permissions',
          'description' => 'Set field-level permissions to create, update or view fields.',
          'package' => 'Fields',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_permissions.module',
            1 => 'field_permissions.admin.inc',
            2 => 'field_permissions.test',
          ),
          'configure' => 'admin/reports/fields/permissions',
          'version' => '7.x-1.0-beta2',
          'project' => 'field_permissions',
          'datestamp' => '1327510549',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'field_permissions',
        'version' => '7.x-1.0-beta2',
      ),
      'json2' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/json2/json2.module',
        'basename' => 'json2.module',
        'name' => 'json2',
        'info' => 
        array (
          'name' => 'JSON2 javascript library',
          'description' => 'This module provides support for the JSON2 javascript library',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'version' => '7.x-1.1',
          'project' => 'json2',
          'datestamp' => '1345207030',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'json2',
        'version' => '7.x-1.1',
      ),
      'apps' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/apps/apps.module',
        'basename' => 'apps.module',
        'name' => 'apps',
        'info' => 
        array (
          'name' => 'Apps',
          'description' => 'Provides Interface for Install Apps from A drupal app server',
          'package' => 'Distribution Management',
          'version' => '7.x-1.0-beta6',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'update',
          ),
          'files' => 
          array (
            0 => 'apps.module',
            1 => 'apps.updater.inc',
            2 => 'apps.installer.inc',
            3 => 'apps.test',
          ),
          'project' => 'apps',
          'datestamp' => '1335204673',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'apps',
        'version' => '7.x-1.0-beta6',
      ),
      'field_collection' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/field_collection/field_collection.module',
        'basename' => 'field_collection.module',
        'name' => 'field_collection',
        'info' => 
        array (
          'name' => 'Field collection',
          'description' => 'Provides a field collection field, to which any number of fields can be attached.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'files' => 
          array (
            0 => 'field_collection.test',
            1 => 'field_collection.info.inc',
            2 => 'views/field_collection_handler_relationship.inc',
          ),
          'configure' => 'admin/structure/field-collections',
          'package' => 'Fields',
          'version' => '7.x-1.0-beta4',
          'project' => 'field_collection',
          'datestamp' => '1333382446',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'field_collection',
        'version' => '7.x-1.0-beta4',
      ),
      'better_exposed_filters' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/better_exposed_filters/better_exposed_filters.module',
        'basename' => 'better_exposed_filters.module',
        'name' => 'better_exposed_filters',
        'info' => 
        array (
          'name' => 'Better Exposed Filters',
          'description' => 'Allow the use of checkboxes or radio buttons for exposed Views filters',
          'core' => '7.x',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'better_exposed_filters.module',
            1 => 'better_exposed_filters.views.inc',
            2 => 'better_exposed_filters_exposed_form_plugin.inc',
            3 => 'better_exposed_filters.theme',
          ),
          'version' => '7.x-3.0-beta1',
          'project' => 'better_exposed_filters',
          'datestamp' => '1312327014',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'better_exposed_filters',
        'version' => '7.x-3.0-beta1',
      ),
      'caption_filter' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/caption_filter/caption_filter.module',
        'basename' => 'caption_filter.module',
        'name' => 'caption_filter',
        'info' => 
        array (
          'name' => 'Caption Filter',
          'description' => 'Filter to parse [caption] tags and allow image alignment.',
          'core' => '7.x',
          'package' => 'Input filters',
          'version' => '7.x-1.2',
          'project' => 'caption_filter',
          'datestamp' => '1321824637',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'caption_filter',
        'version' => '7.x-1.2',
      ),
      'panopoly_magic' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/panopoly_magic/panopoly_magic.module',
        'basename' => 'panopoly_magic.module',
        'name' => 'panopoly_magic',
        'info' => 
        array (
          'name' => 'Panopoly Magic',
          'description' => 'Weaves together the chaos magic.',
          'core' => '7.x',
          'package' => 'Panopoly',
          'php' => '5.2.4',
          'project' => 'panopoly_magic',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
            2 => 'menu',
            3 => 'node',
            4 => 'page_manager',
            5 => 'panels_ipe',
            6 => 'strongarm',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'variable' => 
            array (
              0 => 'page_manager_node_edit_disabled',
              1 => 'page_manager_node_view_disabled',
              2 => 'page_manager_term_view_disabled',
              3 => 'panels_page_allowed_layouts',
              4 => 'panels_page_allowed_types',
              5 => 'panels_page_default',
            ),
          ),
          'files' => 
          array (
            0 => 'panopoly_magic.module',
          ),
          'scripts' => 
          array (
            0 => 'panopoly_magic.js',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'panopoly_magic.css',
            ),
          ),
          'version' => '7.x-1.0-beta4',
          'datestamp' => '1340290623',
        ),
        'schema_version' => 0,
        'project' => 'panopoly_magic',
        'version' => '7.x-1.0-beta4',
      ),
      'token_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/token/tests/token_test.module',
        'basename' => 'token_test.module',
        'name' => 'token_test',
        'info' => 
        array (
          'name' => 'Token Test',
          'description' => 'Testing module for token functionality.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-1.1',
          'project' => 'token',
          'datestamp' => '1337115392',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '7.x-1.1',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.module',
            1 => 'token.install',
            2 => 'token.tokens.inc',
            3 => 'token.pages.inc',
            4 => 'token.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'token',
          'datestamp' => '1337115392',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.1',
      ),
      'save_draft' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/save_draft/save_draft.module',
        'basename' => 'save_draft.module',
        'name' => 'save_draft',
        'info' => 
        array (
          'name' => 'Save Draft',
          'description' => 'Adds a \'Save as Draft\' button to content types',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'save_draft.module',
            1 => 'save_draft.test',
          ),
          'version' => '7.x-1.4',
          'project' => 'save_draft',
          'datestamp' => '1303860116',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'save_draft',
        'version' => '7.x-1.4',
      ),
      'views_slideshow_cycle' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
        'basename' => 'views_slideshow_cycle.module',
        'name' => 'views_slideshow_cycle',
        'info' => 
        array (
          'name' => 'Views Slideshow: Cycle',
          'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
            1 => 'libraries',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow_cycle.module',
            1 => 'views_slideshow_cycle.views_slideshow.inc',
            2 => 'theme/views_slideshow_cycle.theme.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'views_slideshow',
          'datestamp' => '1319589616',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.0',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/views_slideshow/views_slideshow.module',
        'basename' => 'views_slideshow.module',
        'name' => 'views_slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow.module',
            1 => 'theme/views_slideshow.theme.inc',
            2 => 'views_slideshow.views.inc',
            3 => 'views_slideshow_plugin_style_slideshow.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'views_slideshow',
          'datestamp' => '1319589616',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.0',
      ),
      'colorbox' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/colorbox/colorbox.module',
        'basename' => 'colorbox.module',
        'name' => 'colorbox',
        'info' => 
        array (
          'name' => 'Colorbox',
          'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.4.3+.',
          'core' => '7.x',
          'configure' => 'admin/config/media/colorbox',
          'files' => 
          array (
            0 => 'views/colorbox_handler_field_colorbox.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'colorbox',
          'datestamp' => '1334080546',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'colorbox',
        'version' => '7.x-1.3',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'rules',
          'datestamp' => '1331918148',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.1',
      ),
      'rules_admin' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.1',
          'project' => 'rules',
          'datestamp' => '1331918148',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.1',
      ),
      'rules_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/rules/tests/rules_test.module',
        'basename' => 'rules_test.module',
        'name' => 'rules_test',
        'info' => 
        array (
          'name' => 'Rules Tests',
          'description' => 'Support module for the Rules tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_test.rules.inc',
            1 => 'rules_test.rules_defaults.inc',
          ),
          'hidden' => true,
          'version' => '7.x-2.1',
          'project' => 'rules',
          'datestamp' => '1331918148',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.1',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.views_default.inc',
            6 => 'includes/rules_scheduler.views.inc',
            7 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.1',
          'project' => 'rules',
          'datestamp' => '1331918148',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'rules',
        'version' => '7.x-2.1',
      ),
      'rules' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.processor.inc',
            5 => 'includes/rules.plugins.inc',
            6 => 'includes/rules.state.inc',
            7 => 'modules/php.eval.inc',
            8 => 'modules/rules_core.eval.inc',
            9 => 'modules/system.eval.inc',
            10 => 'ui/ui.controller.inc',
            11 => 'ui/ui.core.inc',
            12 => 'ui/ui.data.inc',
            13 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.1',
          'project' => 'rules',
          'datestamp' => '1331918148',
          'php' => '5.2.4',
        ),
        'schema_version' => '7209',
        'project' => 'rules',
        'version' => '7.x-2.1',
      ),
      'webform' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'files' => 
          array (
            0 => 'includes/webform.export.inc',
            1 => 'views/webform_handler_field_form_body.inc',
            2 => 'views/webform_handler_field_is_draft.inc',
            3 => 'views/webform_handler_field_node_link_edit.inc',
            4 => 'views/webform_handler_field_node_link_results.inc',
            5 => 'views/webform_handler_field_submission_count.inc',
            6 => 'views/webform_handler_field_submission_link.inc',
            7 => 'views/webform_handler_field_webform_status.inc',
            8 => 'views/webform_handler_filter_is_draft.inc',
            9 => 'views/webform_handler_filter_webform_status.inc',
            10 => 'views/webform.views.inc',
            11 => 'tests/components.test',
            12 => 'tests/permissions.test',
            13 => 'tests/submission.test',
            14 => 'tests/webform.test',
          ),
          'version' => '7.x-3.18',
          'project' => 'webform',
          'datestamp' => '1336890411',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7320',
        'project' => 'webform',
        'version' => '7.x-3.18',
      ),
      'current_search' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/facetapi/contrib/current_search/current_search.module',
        'basename' => 'current_search.module',
        'name' => 'current_search',
        'info' => 
        array (
          'name' => 'Current Search Blocks',
          'description' => 'Provides an interface for creating blocks containing information about the current search.',
          'dependencies' => 
          array (
            0 => 'facetapi',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/current_search/item.inc',
            1 => 'plugins/current_search/item_active.inc',
            2 => 'plugins/current_search/item_group.inc',
            3 => 'plugins/current_search/item_text.inc',
          ),
          'configure' => 'admin/config/search/current_search',
          'version' => '7.x-1.0-rc4',
          'project' => 'facetapi',
          'datestamp' => '1330124142',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'facetapi',
        'version' => '7.x-1.0-rc4',
      ),
      'facetapi_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/facetapi/tests/facetapi_test.module',
        'basename' => 'facetapi_test.module',
        'name' => 'facetapi_test',
        'info' => 
        array (
          'name' => 'Facet API Test',
          'description' => 'Provides a test adapter and plugins.',
          'dependencies' => 
          array (
            0 => 'facetapi',
          ),
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.0-rc4',
          'project' => 'facetapi',
          'datestamp' => '1330124142',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'facetapi',
        'version' => '7.x-1.0-rc4',
      ),
      'facetapi' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/facetapi/facetapi.module',
        'basename' => 'facetapi.module',
        'name' => 'facetapi',
        'info' => 
        array (
          'name' => 'Facet API',
          'description' => 'An abstracted facet API that can be used by various search backends.',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Search Toolkit',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/facetapi/adapter.inc',
            1 => 'plugins/facetapi/dependency.inc',
            2 => 'plugins/facetapi/dependency_bundle.inc',
            3 => 'plugins/facetapi/dependency_role.inc',
            4 => 'plugins/facetapi/empty_behavior.inc',
            5 => 'plugins/facetapi/empty_behavior_text.inc',
            6 => 'plugins/facetapi/filter.inc',
            7 => 'plugins/facetapi/query_type.inc',
            8 => 'plugins/facetapi/url_processor.inc',
            9 => 'plugins/facetapi/url_processor_standard.inc',
            10 => 'plugins/facetapi/widget.inc',
            11 => 'plugins/facetapi/widget_links.inc',
            12 => 'tests/facetapi_test.plugins.inc',
            13 => 'tests/facetapi.test',
          ),
          'version' => '7.x-1.0-rc4',
          'project' => 'facetapi',
          'datestamp' => '1330124142',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'facetapi',
        'version' => '7.x-1.0-rc4',
      ),
      'views_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/views/tests/views_test.module',
        'basename' => 'views_test.module',
        'name' => 'views_test',
        'info' => 
        array (
          'name' => 'Views Test',
          'description' => 'Test module for Views.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'hidden' => true,
          'version' => '7.x-3.3',
          'project' => 'views',
          'datestamp' => '1329946249',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.3',
      ),
      'views_export' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_result.inc',
            2 => 'handlers/views_handler_area_text.inc',
            3 => 'handlers/views_handler_area_view.inc',
            4 => 'handlers/views_handler_argument.inc',
            5 => 'handlers/views_handler_argument_date.inc',
            6 => 'handlers/views_handler_argument_formula.inc',
            7 => 'handlers/views_handler_argument_many_to_one.inc',
            8 => 'handlers/views_handler_argument_null.inc',
            9 => 'handlers/views_handler_argument_numeric.inc',
            10 => 'handlers/views_handler_argument_string.inc',
            11 => 'handlers/views_handler_argument_group_by_numeric.inc',
            12 => 'handlers/views_handler_field.inc',
            13 => 'handlers/views_handler_field_counter.inc',
            14 => 'handlers/views_handler_field_boolean.inc',
            15 => 'handlers/views_handler_field_contextual_links.inc',
            16 => 'handlers/views_handler_field_custom.inc',
            17 => 'handlers/views_handler_field_date.inc',
            18 => 'handlers/views_handler_field_entity.inc',
            19 => 'handlers/views_handler_field_markup.inc',
            20 => 'handlers/views_handler_field_math.inc',
            21 => 'handlers/views_handler_field_numeric.inc',
            22 => 'handlers/views_handler_field_prerender_list.inc',
            23 => 'handlers/views_handler_field_time_interval.inc',
            24 => 'handlers/views_handler_field_serialized.inc',
            25 => 'handlers/views_handler_field_machine_name.inc',
            26 => 'handlers/views_handler_field_url.inc',
            27 => 'handlers/views_handler_filter.inc',
            28 => 'handlers/views_handler_filter_boolean_operator.inc',
            29 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            30 => 'handlers/views_handler_filter_date.inc',
            31 => 'handlers/views_handler_filter_equality.inc',
            32 => 'handlers/views_handler_filter_group_by_numeric.inc',
            33 => 'handlers/views_handler_filter_in_operator.inc',
            34 => 'handlers/views_handler_filter_many_to_one.inc',
            35 => 'handlers/views_handler_filter_numeric.inc',
            36 => 'handlers/views_handler_filter_string.inc',
            37 => 'handlers/views_handler_relationship.inc',
            38 => 'handlers/views_handler_relationship_groupwise_max.inc',
            39 => 'handlers/views_handler_sort.inc',
            40 => 'handlers/views_handler_sort_date.inc',
            41 => 'handlers/views_handler_sort_formula.inc',
            42 => 'handlers/views_handler_sort_group_by_numeric.inc',
            43 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            44 => 'handlers/views_handler_sort_random.inc',
            45 => 'includes/base.inc',
            46 => 'includes/handlers.inc',
            47 => 'includes/plugins.inc',
            48 => 'includes/view.inc',
            49 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            50 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            51 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            52 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            53 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            54 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            55 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            56 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            57 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            58 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            59 => 'modules/comment/views_handler_field_comment.inc',
            60 => 'modules/comment/views_handler_field_comment_depth.inc',
            61 => 'modules/comment/views_handler_field_comment_link.inc',
            62 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            63 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            64 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            65 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            66 => 'modules/comment/views_handler_field_comment_node_link.inc',
            67 => 'modules/comment/views_handler_field_comment_username.inc',
            68 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            69 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            70 => 'modules/comment/views_handler_field_node_comment.inc',
            71 => 'modules/comment/views_handler_field_node_new_comments.inc',
            72 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            73 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            74 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            75 => 'modules/comment/views_handler_filter_node_comment.inc',
            76 => 'modules/comment/views_handler_sort_comment_thread.inc',
            77 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            78 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            79 => 'modules/comment/views_plugin_row_comment_rss.inc',
            80 => 'modules/comment/views_plugin_row_comment_view.inc',
            81 => 'modules/contact/views_handler_field_contact_link.inc',
            82 => 'modules/field/views_handler_field_field.inc',
            83 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            84 => 'modules/field/views_handler_argument_field_list.inc',
            85 => 'modules/field/views_handler_filter_field_list.inc',
            86 => 'modules/filter/views_handler_field_filter_format_name.inc',
            87 => 'modules/locale/views_handler_argument_locale_group.inc',
            88 => 'modules/locale/views_handler_argument_locale_language.inc',
            89 => 'modules/locale/views_handler_field_locale_group.inc',
            90 => 'modules/locale/views_handler_field_locale_language.inc',
            91 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            92 => 'modules/locale/views_handler_filter_locale_group.inc',
            93 => 'modules/locale/views_handler_filter_locale_language.inc',
            94 => 'modules/locale/views_handler_filter_locale_version.inc',
            95 => 'modules/node/views_handler_argument_dates_various.inc',
            96 => 'modules/node/views_handler_argument_node_language.inc',
            97 => 'modules/node/views_handler_argument_node_nid.inc',
            98 => 'modules/node/views_handler_argument_node_type.inc',
            99 => 'modules/node/views_handler_argument_node_vid.inc',
            100 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            101 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            102 => 'modules/node/views_handler_field_node.inc',
            103 => 'modules/node/views_handler_field_node_link.inc',
            104 => 'modules/node/views_handler_field_node_link_delete.inc',
            105 => 'modules/node/views_handler_field_node_link_edit.inc',
            106 => 'modules/node/views_handler_field_node_revision.inc',
            107 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            108 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            109 => 'modules/node/views_handler_field_node_path.inc',
            110 => 'modules/node/views_handler_field_node_type.inc',
            111 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            112 => 'modules/node/views_handler_filter_node_access.inc',
            113 => 'modules/node/views_handler_filter_node_status.inc',
            114 => 'modules/node/views_handler_filter_node_type.inc',
            115 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            116 => 'modules/node/views_plugin_argument_default_node.inc',
            117 => 'modules/node/views_plugin_argument_validate_node.inc',
            118 => 'modules/node/views_plugin_row_node_rss.inc',
            119 => 'modules/node/views_plugin_row_node_view.inc',
            120 => 'modules/profile/views_handler_field_profile_date.inc',
            121 => 'modules/profile/views_handler_field_profile_list.inc',
            122 => 'modules/profile/views_handler_filter_profile_selection.inc',
            123 => 'modules/search/views_handler_argument_search.inc',
            124 => 'modules/search/views_handler_field_search_score.inc',
            125 => 'modules/search/views_handler_filter_search.inc',
            126 => 'modules/search/views_handler_sort_search_score.inc',
            127 => 'modules/search/views_plugin_row_search_view.inc',
            128 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            129 => 'modules/system/views_handler_argument_file_fid.inc',
            130 => 'modules/system/views_handler_field_file.inc',
            131 => 'modules/system/views_handler_field_file_extension.inc',
            132 => 'modules/system/views_handler_field_file_filemime.inc',
            133 => 'modules/system/views_handler_field_file_uri.inc',
            134 => 'modules/system/views_handler_field_file_status.inc',
            135 => 'modules/system/views_handler_filter_file_status.inc',
            136 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            137 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            138 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            139 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            140 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            141 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            142 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            143 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            144 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            145 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            146 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            147 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            148 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            149 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            150 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            151 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            152 => 'modules/system/views_handler_filter_system_type.inc',
            153 => 'modules/translation/views_handler_argument_node_tnid.inc',
            154 => 'modules/translation/views_handler_field_node_language.inc',
            155 => 'modules/translation/views_handler_field_node_link_translate.inc',
            156 => 'modules/translation/views_handler_field_node_translation_link.inc',
            157 => 'modules/translation/views_handler_filter_node_language.inc',
            158 => 'modules/translation/views_handler_filter_node_tnid.inc',
            159 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            160 => 'modules/translation/views_handler_relationship_translation.inc',
            161 => 'modules/upload/views_handler_field_upload_description.inc',
            162 => 'modules/upload/views_handler_field_upload_fid.inc',
            163 => 'modules/upload/views_handler_filter_upload_fid.inc',
            164 => 'modules/user/views_handler_argument_user_uid.inc',
            165 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            166 => 'modules/user/views_handler_field_user.inc',
            167 => 'modules/user/views_handler_field_user_language.inc',
            168 => 'modules/user/views_handler_field_user_link.inc',
            169 => 'modules/user/views_handler_field_user_link_cancel.inc',
            170 => 'modules/user/views_handler_field_user_link_edit.inc',
            171 => 'modules/user/views_handler_field_user_mail.inc',
            172 => 'modules/user/views_handler_field_user_name.inc',
            173 => 'modules/user/views_handler_field_user_permissions.inc',
            174 => 'modules/user/views_handler_field_user_picture.inc',
            175 => 'modules/user/views_handler_field_user_roles.inc',
            176 => 'modules/user/views_handler_filter_user_current.inc',
            177 => 'modules/user/views_handler_filter_user_name.inc',
            178 => 'modules/user/views_handler_filter_user_permissions.inc',
            179 => 'modules/user/views_handler_filter_user_roles.inc',
            180 => 'modules/user/views_plugin_argument_default_current_user.inc',
            181 => 'modules/user/views_plugin_argument_default_user.inc',
            182 => 'modules/user/views_plugin_argument_validate_user.inc',
            183 => 'modules/user/views_plugin_row_user_view.inc',
            184 => 'plugins/views_plugin_access.inc',
            185 => 'plugins/views_plugin_access_none.inc',
            186 => 'plugins/views_plugin_access_perm.inc',
            187 => 'plugins/views_plugin_access_role.inc',
            188 => 'plugins/views_plugin_argument_default.inc',
            189 => 'plugins/views_plugin_argument_default_php.inc',
            190 => 'plugins/views_plugin_argument_default_fixed.inc',
            191 => 'plugins/views_plugin_argument_default_raw.inc',
            192 => 'plugins/views_plugin_argument_validate.inc',
            193 => 'plugins/views_plugin_argument_validate_numeric.inc',
            194 => 'plugins/views_plugin_argument_validate_php.inc',
            195 => 'plugins/views_plugin_cache.inc',
            196 => 'plugins/views_plugin_cache_none.inc',
            197 => 'plugins/views_plugin_cache_time.inc',
            198 => 'plugins/views_plugin_display.inc',
            199 => 'plugins/views_plugin_display_attachment.inc',
            200 => 'plugins/views_plugin_display_block.inc',
            201 => 'plugins/views_plugin_display_default.inc',
            202 => 'plugins/views_plugin_display_embed.inc',
            203 => 'plugins/views_plugin_display_extender.inc',
            204 => 'plugins/views_plugin_display_feed.inc',
            205 => 'plugins/views_plugin_display_page.inc',
            206 => 'plugins/views_plugin_exposed_form_basic.inc',
            207 => 'plugins/views_plugin_exposed_form.inc',
            208 => 'plugins/views_plugin_exposed_form_input_required.inc',
            209 => 'plugins/views_plugin_localization_core.inc',
            210 => 'plugins/views_plugin_localization.inc',
            211 => 'plugins/views_plugin_localization_none.inc',
            212 => 'plugins/views_plugin_pager.inc',
            213 => 'plugins/views_plugin_pager_full.inc',
            214 => 'plugins/views_plugin_pager_mini.inc',
            215 => 'plugins/views_plugin_pager_none.inc',
            216 => 'plugins/views_plugin_pager_some.inc',
            217 => 'plugins/views_plugin_query.inc',
            218 => 'plugins/views_plugin_query_default.inc',
            219 => 'plugins/views_plugin_row.inc',
            220 => 'plugins/views_plugin_row_fields.inc',
            221 => 'plugins/views_plugin_style.inc',
            222 => 'plugins/views_plugin_style_default.inc',
            223 => 'plugins/views_plugin_style_grid.inc',
            224 => 'plugins/views_plugin_style_list.inc',
            225 => 'plugins/views_plugin_style_jump_menu.inc',
            226 => 'plugins/views_plugin_style_rss.inc',
            227 => 'plugins/views_plugin_style_summary.inc',
            228 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            229 => 'plugins/views_plugin_style_summary_unformatted.inc',
            230 => 'plugins/views_plugin_style_table.inc',
            231 => 'tests/handlers/views_handler_area_text.test',
            232 => 'tests/handlers/views_handler_argument_null.test',
            233 => 'tests/handlers/views_handler_field.test',
            234 => 'tests/handlers/views_handler_field_boolean.test',
            235 => 'tests/handlers/views_handler_field_custom.test',
            236 => 'tests/handlers/views_handler_field_counter.test',
            237 => 'tests/handlers/views_handler_field_date.test',
            238 => 'tests/handlers/views_handler_field_file_size.test',
            239 => 'tests/handlers/views_handler_field_math.test',
            240 => 'tests/handlers/views_handler_field_url.test',
            241 => 'tests/handlers/views_handler_field_xss.test',
            242 => 'tests/handlers/views_handler_filter_date.test',
            243 => 'tests/handlers/views_handler_filter_equality.test',
            244 => 'tests/handlers/views_handler_filter_in_operator.test',
            245 => 'tests/handlers/views_handler_filter_numeric.test',
            246 => 'tests/handlers/views_handler_filter_string.test',
            247 => 'tests/handlers/views_handler_sort_random.test',
            248 => 'tests/handlers/views_handler_sort_date.test',
            249 => 'tests/handlers/views_handler_sort.test',
            250 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            251 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            252 => 'tests/styles/views_plugin_style_jump_menu.test',
            253 => 'tests/styles/views_plugin_style.test',
            254 => 'tests/views_access.test',
            255 => 'tests/views_analyze.test',
            256 => 'tests/views_basic.test',
            257 => 'tests/views_argument_default.test',
            258 => 'tests/views_argument_validator.test',
            259 => 'tests/views_exposed_form.test',
            260 => 'tests/views_glossary.test',
            261 => 'tests/views_groupby.test',
            262 => 'tests/views_handlers.test',
            263 => 'tests/views_module.test',
            264 => 'tests/views_pager.test',
            265 => 'tests/views_plugin_localization_test.inc',
            266 => 'tests/views_translatable.test',
            267 => 'tests/views_query.test',
            268 => 'tests/views_upgrade.test',
            269 => 'tests/views_test.views_default.inc',
            270 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            271 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            272 => 'tests/user/views_handler_field_user_name.test',
            273 => 'tests/user/views_user_argument_default.test',
            274 => 'tests/user/views_user_argument_validate.test',
            275 => 'tests/user/views_user.test',
            276 => 'tests/views_cache.test',
            277 => 'tests/views_view.test',
            278 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.3',
          'project' => 'views',
          'datestamp' => '1329946249',
        ),
        'schema_version' => '7301',
        'project' => 'views',
        'version' => '7.x-3.3',
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.3',
          'project' => 'views',
          'datestamp' => '1329946249',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.3',
      ),
      'backports' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/backports/backports.module',
        'basename' => 'backports.module',
        'name' => 'backports',
        'info' => 
        array (
          'name' => 'Backports',
          'description' => 'UI and other backports from Drupal 8.',
          'core' => '7.x',
          'version' => '7.x-1.0-alpha1',
          'project' => 'backports',
          'datestamp' => '1315886201',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'backports',
        'version' => '7.x-1.0-alpha1',
      ),
      'panopoly_core' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/panopoly_core/panopoly_core.module',
        'basename' => 'panopoly_core.module',
        'name' => 'panopoly_core',
        'info' => 
        array (
          'name' => 'Panopoly Core',
          'description' => 'The magical core of the Panopoly framework.',
          'core' => '7.x',
          'package' => 'Panopoly',
          'php' => '5.2.4',
          'project' => 'panopoly_core',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'strongarm',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'variable' => 
            array (
              0 => 'ctools_content_all_views',
              1 => 'date_first_day',
              2 => 'date_format_long',
              3 => 'date_format_medium',
              4 => 'date_format_panopoly_day',
              5 => 'date_format_panopoly_time',
              6 => 'date_format_short',
            ),
          ),
          'version' => '7.x-1.0-beta4',
          'datestamp' => '1340290620',
        ),
        'schema_version' => 0,
        'project' => 'panopoly_core',
        'version' => '7.x-1.0-beta4',
      ),
      'options_element' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/options_element/options_element.module',
        'basename' => 'options_element.module',
        'name' => 'options_element',
        'info' => 
        array (
          'name' => 'Options element',
          'description' => 'A custom form element for entering the options in select lists, radios, or checkboxes.',
          'core' => '7.x',
          'version' => '7.x-1.7',
          'project' => 'options_element',
          'datestamp' => '1332018945',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'options_element',
        'version' => '7.x-1.7',
      ),
      'fontsquirrel' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/fontyourface/modules/fontsquirrel/fontsquirrel.module',
        'basename' => 'fontsquirrel.module',
        'name' => 'fontsquirrel',
        'info' => 
        array (
          'name' => 'Font Squirrel API',
          'description' => '@font-your-face provider with Font Squirrel fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'version' => '7.x-2.4',
          'project' => 'fontyourface',
          'datestamp' => '1343611963',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.4',
      ),
      'font_reference' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/fontyourface/modules/font_reference/font_reference.module',
        'basename' => 'font_reference.module',
        'name' => 'font_reference',
        'info' => 
        array (
          'name' => 'Font Reference',
          'description' => 'Defines a field type for referencing a font from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fontyourface',
            1 => 'field',
            2 => 'options',
          ),
          'version' => '7.x-2.4',
          'project' => 'fontyourface',
          'datestamp' => '1343611963',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.4',
      ),
      'fontyourface_ui' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/fontyourface/modules/fontyourface_ui/fontyourface_ui.module',
        'basename' => 'fontyourface_ui.module',
        'name' => 'fontyourface_ui',
        'info' => 
        array (
          'name' => '@font-your-face UI',
          'description' => 'Administrative interface for managing fonts.',
          'package' => '@font-your-face',
          'dependencies' => 
          array (
            0 => 'fontyourface',
            1 => 'views',
          ),
          'configure' => 'admin/config/user-interface/fontyourface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/fontyourface.views_default.inc',
            1 => 'views/views_handler_field_fontyourface_font.inc',
            2 => 'views/views_handler_field_fontyourface_foundry.inc',
            3 => 'views/views_handler_field_fontyourface_license.inc',
            4 => 'views/views_handler_field_fontyourface_provider.inc',
            5 => 'views/views_handler_field_fontyourface_tag_font_tid.inc',
            6 => 'views/views_handler_filter_tag_font_tid.inc',
            7 => 'views/views_handler_relationship_fontyourface_tag.inc',
            8 => 'views/views_handler_field_fontyourface_preview.inc',
            9 => 'views/views_handler_field_fontyourface_enable_disable.inc',
            10 => 'views/views_handler_field_fontyourface_enabled_yes_no.inc',
            11 => 'views/views_handler_filter_fontyourface_provider.inc',
            12 => 'views/views_handler_filter_fontyourface_foundry.inc',
          ),
          'version' => '7.x-2.4',
          'project' => 'fontyourface',
          'datestamp' => '1343611963',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.4',
      ),
      'typekit_api' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/fontyourface/modules/typekit_api/typekit_api.module',
        'basename' => 'typekit_api.module',
        'name' => 'typekit_api',
        'info' => 
        array (
          'name' => 'Typekit API',
          'description' => '@font-your-face provider with Typekit.com fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'version' => '7.x-2.4',
          'project' => 'fontyourface',
          'datestamp' => '1343611963',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.4',
      ),
      'local_fonts' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/fontyourface/modules/local_fonts/local_fonts.module',
        'basename' => 'local_fonts.module',
        'name' => 'local_fonts',
        'info' => 
        array (
          'name' => 'Local Fonts',
          'description' => '@font-your-face provider with fonts installed locally on the Drupal server.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'version' => '7.x-2.4',
          'project' => 'fontyourface',
          'datestamp' => '1343611963',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.4',
      ),
      'fontdeck' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/fontyourface/modules/fontdeck/fontdeck.module',
        'basename' => 'fontdeck.module',
        'name' => 'fontdeck',
        'info' => 
        array (
          'name' => 'Fontdeck',
          'description' => '@font-your-face provider of fonts from Fontdeck.com.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'files' => 
          array (
            0 => 'fontdeck.install',
            1 => 'fontdeck.module',
          ),
          'version' => '7.x-2.4',
          'project' => 'fontyourface',
          'datestamp' => '1343611963',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.4',
      ),
      'fonts_com' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/fontyourface/modules/fonts_com/fonts_com.module',
        'basename' => 'fonts_com.module',
        'name' => 'fonts_com',
        'info' => 
        array (
          'name' => 'Fonts.com',
          'description' => '@font-your-face provider of fonts from Fonts.com.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'files' => 
          array (
            0 => 'api.inc',
          ),
          'version' => '7.x-2.4',
          'project' => 'fontyourface',
          'datestamp' => '1343611963',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.4',
      ),
      'google_fonts_api' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/fontyourface/modules/google_fonts_api/google_fonts_api.module',
        'basename' => 'google_fonts_api.module',
        'name' => 'google_fonts_api',
        'info' => 
        array (
          'name' => 'Google Fonts API',
          'description' => '@font-your-face provider with Google fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/google_fonts_api.views_default.inc',
          ),
          'version' => '7.x-2.4',
          'project' => 'fontyourface',
          'datestamp' => '1343611963',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'fontyourface',
        'version' => '7.x-2.4',
      ),
      'fontyourface' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/fontyourface/fontyourface.module',
        'basename' => 'fontyourface.module',
        'name' => 'fontyourface',
        'info' => 
        array (
          'name' => '@font-your-face',
          'description' => 'Manages web fonts.',
          'package' => '@font-your-face',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'fontyourface.test',
          ),
          'version' => '7.x-2.4',
          'project' => 'fontyourface',
          'datestamp' => '1343611963',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'fontyourface',
        'version' => '7.x-2.4',
      ),
      'fape' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/fape/fape.module',
        'basename' => 'fape.module',
        'name' => 'fape',
        'info' => 
        array (
          'name' => 'Field API Pane Editor',
          'description' => 'Adds a contextual link to Field API Panel Panes to edit that field value.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'entity',
            2 => 'contextual',
          ),
          'version' => '7.x-1.1',
          'project' => 'fape',
          'datestamp' => '1330460141',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fape',
        'version' => '7.x-1.1',
      ),
      'tablefield' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/tablefield/tablefield.module',
        'basename' => 'tablefield.module',
        'name' => 'tablefield',
        'info' => 
        array (
          'name' => 'TableField',
          'description' => 'Defines a generic tablular data field.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tablefield.css',
            1 => 'tablefield.module',
            2 => 'tablefield.install',
          ),
          'version' => '7.x-2.0',
          'project' => 'tablefield',
          'datestamp' => '1335276389',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'tablefield',
        'version' => '7.x-2.0',
      ),
      'panopoly_widgets' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/panopoly_widgets/panopoly_widgets.module',
        'basename' => 'panopoly_widgets.module',
        'name' => 'panopoly_widgets',
        'info' => 
        array (
          'name' => 'Panopoly Widgets',
          'description' => 'Creates generic widget functionality to customize wide and far.',
          'core' => '7.x',
          'package' => 'Panopoly',
          'php' => '5.2.4',
          'project' => 'panopoly_widgets',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'entity',
            2 => 'features',
            3 => 'field_sql_storage',
            4 => 'fieldable_panels_panes',
            5 => 'file_entity',
            6 => 'image',
            7 => 'link',
            8 => 'media',
            9 => 'media_vimeo',
            10 => 'mediafield',
            11 => 'node',
            12 => 'page_manager',
            13 => 'panels',
            14 => 'panels_ipe',
            15 => 'simple_gmap',
            16 => 'strongarm',
            17 => 'tablefield',
            18 => 'text',
            19 => 'views',
          ),
          'explanation' => 'Field type(s) in use - see <a href="/admin/reports/fields">Field list</a>',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'file_entity:file_default_displays:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'fieldable_panels_pane-basic_file-field_basic_file_file',
              1 => 'fieldable_panels_pane-basic_file-field_basic_file_text',
              2 => 'fieldable_panels_pane-callout-field_callout_text',
              3 => 'fieldable_panels_pane-image-field_basic_image_caption',
              4 => 'fieldable_panels_pane-image-field_basic_image_image',
              5 => 'fieldable_panels_pane-map-field_map_address',
              6 => 'fieldable_panels_pane-quick_links-field_quick_links_links',
              7 => 'fieldable_panels_pane-quote-field_quote_author',
              8 => 'fieldable_panels_pane-quote-field_quote_quote',
              9 => 'fieldable_panels_pane-spotlight-field_basic_spotlight_items',
              10 => 'fieldable_panels_pane-table-field_basic_table_table',
              11 => 'fieldable_panels_pane-text-field_basic_text_link',
              12 => 'fieldable_panels_pane-text-field_basic_text_text',
              13 => 'fieldable_panels_pane-video-field_video_video',
            ),
            'file_display' => 
            array (
              0 => 'video__default__media_vimeo_video',
              1 => 'video__default__media_youtube_video',
            ),
          ),
          'files' => 
          array (
            0 => 'panopoly_widgets.module',
          ),
          'scripts' => 
          array (
            0 => 'js/panopoly_accordion.js',
            1 => 'js/panopoly_spotlight.js',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/panopoly_spotlight.css',
              1 => 'css/panopoly_accordion.css',
              2 => 'css/panopoly_views_slideshow.css',
            ),
          ),
          'version' => '7.x-1.0-beta4',
          'datestamp' => '1340290630',
        ),
        'schema_version' => 0,
        'project' => 'panopoly_widgets',
        'version' => '7.x-1.0-beta4',
      ),
      'admin' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/admin/admin.module',
        'basename' => 'admin.module',
        'name' => 'admin',
        'info' => 
        array (
          'name' => 'Admin',
          'description' => 'UI helpers for Drupal admins and managers.',
          'package' => 'Administration',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'admin.admin.inc',
            1 => 'admin.install',
            2 => 'admin.module',
            3 => 'includes/admin.devel.inc',
            4 => 'includes/admin.theme.inc',
            5 => 'theme/admin-panes.tpl.php',
            6 => 'theme/admin-toolbar.tpl.php',
            7 => 'theme/theme.inc',
          ),
          'version' => '7.x-2.0-beta3',
          'project' => 'admin',
          'datestamp' => '1292541646',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin',
        'version' => '7.x-2.0-beta3',
      ),
      'superfish' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/superfish/superfish.module',
        'basename' => 'superfish.module',
        'name' => 'superfish',
        'info' => 
        array (
          'name' => 'Superfish',
          'description' => 'jQuery Superfish plugin for your Drupal menus.',
          'package' => 'User interface',
          'dependencies' => 
          array (
            0 => 'menu',
            1 => 'libraries',
          ),
          'configure' => 'admin/config/user-interface/superfish',
          'core' => '7.x',
          'version' => '7.x-1.8',
          'project' => 'superfish',
          'datestamp' => '1301247369',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'superfish',
        'version' => '7.x-1.8',
      ),
      'quicktabs_tabstyles' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/quicktabs/quicktabs_tabstyles/quicktabs_tabstyles.module',
        'basename' => 'quicktabs_tabstyles.module',
        'name' => 'quicktabs_tabstyles',
        'info' => 
        array (
          'name' => 'Quicktabs Styles',
          'description' => 'Adds predefined tab styles to choose from per Quicktabs instance.',
          'core' => '7.x',
          'configure' => 'admin/structure/quicktabs/styles',
          'dependencies' => 
          array (
            0 => 'quicktabs',
          ),
          'version' => '7.x-3.4',
          'project' => 'quicktabs',
          'datestamp' => '1332980461',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'quicktabs',
        'version' => '7.x-3.4',
      ),
      'quicktabs' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/quicktabs/quicktabs.module',
        'basename' => 'quicktabs.module',
        'name' => 'quicktabs',
        'info' => 
        array (
          'name' => 'Quicktabs',
          'description' => 'Render content with tabs and other display styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'quicktabs.module',
            1 => 'quicktabs.classes.inc',
            2 => 'includes/quicktabs_style_plugin.inc',
            3 => 'tests/quicktabs.test',
          ),
          'configure' => 'admin/structure/quicktabs',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-3.4',
          'project' => 'quicktabs',
          'datestamp' => '1332980461',
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'project' => 'quicktabs',
        'version' => '7.x-3.4',
      ),
      'connector_action_default_register_form' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/connector/modules/connector_action_default_register_form/connector_action_default_register_form.module',
        'basename' => 'connector_action_default_register_form.module',
        'name' => 'connector_action_default_register_form',
        'info' => 
        array (
          'name' => 'Connector Action Default Register Form',
          'description' => 'Adepts the default action for new accounts. It does not create account by itself, but shows the register form, pre-filled with profile information from the connection. After register, it connects the connection to the new user account (for login in the future).',
          'core' => '7.x',
          'package' => 'Connector Action',
          'dependencies' => 
          array (
            0 => 'connector',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'connector',
          'datestamp' => '1332059443',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'connector',
        'version' => '7.x-1.0-beta1',
      ),
      'connector' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/connector/connector.module',
        'basename' => 'connector.module',
        'name' => 'connector',
        'info' => 
        array (
          'name' => 'Connector',
          'description' => 'Provides base functionality for one-click login with eg. Facebook Connect and Twitter Connect',
          'core' => '7.x',
          'package' => 'Connector',
          'files' => 
          array (
            0 => 'includes/connector_handler_field_facebook_name.inc',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'connector',
          'datestamp' => '1332059443',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'connector',
        'version' => '7.x-1.0-beta1',
      ),
      'search_api_views' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/search_api/contrib/search_api_views/search_api_views.module',
        'basename' => 'search_api_views.module',
        'name' => 'search_api_views',
        'info' => 
        array (
          'name' => 'Search views',
          'description' => 'Integrates the Search API with Views, enabling users to create views with searches as filters or arguments.',
          'dependencies' => 
          array (
            0 => 'search_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'files' => 
          array (
            0 => 'includes/display_facet_block.inc',
            1 => 'includes/handler_argument.inc',
            2 => 'includes/handler_argument_fulltext.inc',
            3 => 'includes/handler_argument_more_like_this.inc',
            4 => 'includes/handler_argument_text.inc',
            5 => 'includes/handler_filter.inc',
            6 => 'includes/handler_filter_boolean.inc',
            7 => 'includes/handler_filter_date.inc',
            8 => 'includes/handler_filter_fulltext.inc',
            9 => 'includes/handler_filter_language.inc',
            10 => 'includes/handler_filter_options.inc',
            11 => 'includes/handler_filter_text.inc',
            12 => 'includes/handler_sort.inc',
            13 => 'includes/query.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'search_api',
          'datestamp' => '1337778096',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'search_api',
        'version' => '7.x-1.1',
      ),
      'search_api_facetapi' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/search_api/contrib/search_api_facetapi/search_api_facetapi.module',
        'basename' => 'search_api_facetapi.module',
        'name' => 'search_api_facetapi',
        'info' => 
        array (
          'name' => 'Search facets',
          'description' => 'Integrate the Search API with the Facet API to provide facetted searches.',
          'dependencies' => 
          array (
            0 => 'search_api',
            1 => 'facetapi',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'files' => 
          array (
            0 => 'plugins/facetapi/adapter.inc',
            1 => 'plugins/facetapi/query_type_term.inc',
            2 => 'plugins/facetapi/query_type_date.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'search_api',
          'datestamp' => '1337778096',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'search_api',
        'version' => '7.x-1.1',
      ),
      'search_api_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/search_api/tests/search_api_test.module',
        'basename' => 'search_api_test.module',
        'name' => 'search_api_test',
        'info' => 
        array (
          'name' => 'Search API test',
          'description' => 'Some dummy implementations for testing the Search API.',
          'core' => '7.x',
          'package' => 'Search',
          'dependencies' => 
          array (
            0 => 'search_api',
          ),
          'files' => 
          array (
            0 => 'search_api_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-1.1',
          'project' => 'search_api',
          'datestamp' => '1337778096',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'search_api',
        'version' => '7.x-1.1',
      ),
      'search_api' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/search_api/search_api.module',
        'basename' => 'search_api.module',
        'name' => 'search_api',
        'info' => 
        array (
          'name' => 'Search API',
          'description' => 'Provides a generic API for modules offering search capabilites.',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'files' => 
          array (
            0 => 'search_api.test',
            1 => 'includes/callback.inc',
            2 => 'includes/callback_add_aggregation.inc',
            3 => 'includes/callback_add_hierarchy.inc',
            4 => 'includes/callback_add_url.inc',
            5 => 'includes/callback_add_viewed_entity.inc',
            6 => 'includes/callback_bundle_filter.inc',
            7 => 'includes/callback_language_control.inc',
            8 => 'includes/callback_node_access.inc',
            9 => 'includes/datasource.inc',
            10 => 'includes/datasource_entity.inc',
            11 => 'includes/datasource_external.inc',
            12 => 'includes/exception.inc',
            13 => 'includes/index_entity.inc',
            14 => 'includes/processor.inc',
            15 => 'includes/processor_html_filter.inc',
            16 => 'includes/processor_ignore_case.inc',
            17 => 'includes/processor_stopwords.inc',
            18 => 'includes/processor_tokenizer.inc',
            19 => 'includes/query.inc',
            20 => 'includes/server_entity.inc',
            21 => 'includes/service.inc',
          ),
          'configure' => 'admin/config/search/search_api',
          'version' => '7.x-1.1',
          'project' => 'search_api',
          'datestamp' => '1337778096',
          'php' => '5.2.4',
        ),
        'schema_version' => '7114',
        'project' => 'search_api',
        'version' => '7.x-1.1',
      ),
      'webform_entity_pages' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/webform_entity/webform_entity_pages/webform_entity_pages.module',
        'basename' => 'webform_entity_pages.module',
        'name' => 'webform_entity_pages',
        'info' => 
        array (
          'name' => 'Webform Submission Entity Pages',
          'description' => 'Provides a page callback with path auto and page manager support for Webform Submission entities.',
          'package' => 'Webform',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'webform_entity',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'webform_entity',
          'datestamp' => '1334969651',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'webform_entity',
        'version' => '7.x-1.x-dev',
      ),
      'webform_entity' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/webform_entity/webform_entity.module',
        'basename' => 'webform_entity.module',
        'name' => 'webform_entity',
        'info' => 
        array (
          'name' => 'Webform Submission Entity',
          'description' => 'Provides a base fieldable entity that webforms can add fields to.',
          'package' => 'Webform',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'webform',
            1 => 'entity',
          ),
          'files' => 
          array (
            0 => 'webform_entity.module',
            1 => 'webform_entity.migrate.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'webform_entity',
          'datestamp' => '1334969651',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'webform_entity',
        'version' => '7.x-1.x-dev',
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.1',
          'project' => 'pathauto',
          'datestamp' => '1336950382',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'project' => 'pathauto',
        'version' => '7.x-1.1',
      ),
      'pay_progress' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/pay/modules/pay_progress/pay_progress.module',
        'basename' => 'pay_progress.module',
        'name' => 'pay_progress',
        'info' => 
        array (
          'name' => 'Pay progress',
          'description' => 'Progress bar for Pay forms',
          'package' => 'Payment API',
          'dependencies' => 
          array (
            0 => 'pay',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-alpha1',
          'project' => 'pay',
          'datestamp' => '1332356146',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'pay',
        'version' => '7.x-1.0-alpha1',
      ),
      'pay_node' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/pay/modules/pay_node/pay_node.module',
        'basename' => 'pay_node.module',
        'name' => 'pay_node',
        'info' => 
        array (
          'name' => 'Node payments',
          'description' => 'Attach payment forms to node creation or display pages.',
          'package' => 'Payment API',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'pay',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'pay',
          'datestamp' => '1332356146',
          'php' => '5.2.4',
        ),
        'schema_version' => '6003',
        'project' => 'pay',
        'version' => '7.x-1.0-alpha1',
      ),
      'pay' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/pay/pay.module',
        'basename' => 'pay.module',
        'name' => 'pay',
        'info' => 
        array (
          'name' => 'Pay',
          'description' => 'Pay for donations, orders or other nodes',
          'package' => 'Payment API',
          'core' => '7.x',
          'version' => '7.x-1.0-alpha1',
          'project' => 'pay',
          'datestamp' => '1332356146',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6007',
        'project' => 'pay',
        'version' => '7.x-1.0-alpha1',
      ),
      'views_linkarea' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/views_linkarea/views_linkarea.module',
        'basename' => 'views_linkarea.module',
        'name' => 'views_linkarea',
        'info' => 
        array (
          'name' => 'Views Link Area',
          'description' => 'A Views 3 area plugin to allow links as headers and footers for views.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_linkarea.module',
            1 => 'views_linkarea.views.inc',
            2 => 'views_handler_area_link.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'views_linkarea',
          'datestamp' => '1290111938',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_linkarea',
        'version' => '7.x-1.0',
      ),
      'panopoly_pages' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/panopoly_pages/panopoly_pages.module',
        'basename' => 'panopoly_pages.module',
        'name' => 'panopoly_pages',
        'info' => 
        array (
          'name' => 'Panopoly Pages',
          'description' => 'Provides a basic page, suitable for Panelizing.',
          'core' => '7.x',
          'package' => 'Panopoly',
          'php' => '5.2.4',
          'project' => 'panopoly_pages',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'entity',
            2 => 'features',
            3 => 'image',
            4 => 'link',
            5 => 'menu',
            6 => 'page_manager',
            7 => 'panelizer',
            8 => 'panels_ipe',
            9 => 'strongarm',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'page_manager:pages_default:1',
              1 => 'panelizer:panelizer:1',
              2 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-panopoly_page-body',
              1 => 'node-panopoly_page-field_featured_image',
            ),
            'node' => 
            array (
              0 => 'panopoly_page',
            ),
            'variable' => 
            array (
              0 => 'additional_settings__active_tab_panopoly_page',
              1 => 'field_bundle_settings_node__panopoly_page',
              2 => 'menu_options_panopoly_page',
              3 => 'menu_parent_panopoly_page',
              4 => 'node_options_panopoly_page',
              5 => 'node_preview_panopoly_page',
              6 => 'node_submitted_panopoly_page',
              7 => 'panelizer_defaults_node_panopoly_page',
              8 => 'panelizer_node:panopoly_page_allowed_layouts',
              9 => 'panelizer_node:panopoly_page_allowed_types',
              10 => 'panelizer_node:panopoly_page_default',
              11 => 'save_continue_panopoly_page',
            ),
          ),
          'files' => 
          array (
            0 => 'panopoly_pages.module',
          ),
          'version' => '7.x-1.0-beta4',
          'datestamp' => '1340290625',
        ),
        'schema_version' => 0,
        'project' => 'panopoly_pages',
        'version' => '7.x-1.0-beta4',
      ),
      'views_data_export' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/views_data_export/views_data_export.module',
        'basename' => 'views_data_export.module',
        'name' => 'views_data_export',
        'info' => 
        array (
          'name' => 'Views Data Export',
          'description' => 'Plugin to export views data into various file formats',
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_data_export.module',
            1 => 'plugins/views_data_export_plugin_display_export.inc',
            2 => 'plugins/views_data_export_plugin_style_export.inc',
            3 => 'plugins/views_data_export_plugin_style_export_csv.inc',
            4 => 'plugins/views_data_export_plugin_style_export_doc.inc',
            5 => 'plugins/views_data_export_plugin_style_export_txt.inc',
            6 => 'plugins/views_data_export_plugin_style_export_xls.inc',
            7 => 'plugins/views_data_export_plugin_style_export_xml.inc',
            8 => 'theme/views_data_export.theme.inc',
            9 => 'theme/views-data-export-csv-body.tpl.php',
            10 => 'theme/views-data-export-csv-footer.tpl.php',
            11 => 'theme/views-data-export-csv-header.tpl.php',
            12 => 'theme/views-data-export-doc-body.tpl.php',
            13 => 'theme/views-data-export-doc-footer.tpl.php',
            14 => 'theme/views-data-export-doc-header.tpl.php',
            15 => 'theme/views-data-export-txt-body.tpl.php',
            16 => 'theme/views-data-export-txt-footer.tpl.php',
            17 => 'theme/views-data-export-txt-header.tpl.php',
            18 => 'theme/views-data-export-xls-body.tpl.php',
            19 => 'theme/views-data-export-xls-footer.tpl.php',
            20 => 'theme/views-data-export-xls-header.tpl.php',
            21 => 'theme/views-data-export-xml-body.tpl.php',
            22 => 'theme/views-data-export-xml-footer.tpl.php',
            23 => 'theme/views-data-export-xml-header.tpl.php',
            24 => 'theme/views-data-export.tpl.php',
          ),
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '7.x-3.0-beta6',
          'project' => 'views_data_export',
          'datestamp' => '1336632688',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'views_data_export',
        'version' => '7.x-3.0-beta6',
      ),
      'help_example' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/advanced_help/help_example/help_example.module',
        'basename' => 'help_example.module',
        'name' => 'help_example',
        'info' => 
        array (
          'name' => 'Advanced help example',
          'description' => 'A example help module to demonstrate the advanced help module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advanced_help',
          ),
          'files' => 
          array (
            0 => 'help_example.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'advanced_help',
          'datestamp' => '1321022730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advanced_help',
        'version' => '7.x-1.0',
      ),
      'advanced_help' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/advanced_help/advanced_help.module',
        'basename' => 'advanced_help.module',
        'name' => 'advanced_help',
        'info' => 
        array (
          'name' => 'Advanced help',
          'description' => 'Allow advanced help and documentation.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'advanced_help.module',
            1 => 'advanced_help.install',
          ),
          'version' => '7.x-1.0',
          'project' => 'advanced_help',
          'datestamp' => '1321022730',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advanced_help',
        'version' => '7.x-1.0',
      ),
      'iconfonts' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/iconfonts/iconfonts.module',
        'basename' => 'iconfonts.module',
        'name' => 'iconfonts',
        'info' => 
        array (
          'name' => 'Icon fonts',
          'description' => 'Icon font library for use with other modules and themes.',
          'core' => '7.x',
          'version' => '7.x-1.0-alpha1',
          'project' => 'iconfonts',
          'datestamp' => '1345480047',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'iconfonts',
        'version' => '7.x-1.0-alpha1',
      ),
      'filter_perms' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/filter_perms/filter_perms.module',
        'basename' => 'filter_perms.module',
        'name' => 'filter_perms',
        'info' => 
        array (
          'name' => 'Filter permissions',
          'description' => 'Provides role and module filters to simplify the user permissions page.',
          'package' => 'Administration',
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'filter_perms',
          'datestamp' => '1337183755',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'filter_perms',
        'version' => '7.x-1.0',
      ),
      'geophp' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/geophp/geophp.module',
        'basename' => 'geophp.module',
        'name' => 'geophp',
        'info' => 
        array (
          'name' => 'geoPHP',
          'description' => 'Wraps the geoPHP library: advanced geometry operations in PHP',
          'core' => '7.x',
          'version' => '7.x-1.6',
          'project' => 'geophp',
          'datestamp' => '1346278925',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'geophp',
        'version' => '7.x-1.6',
      ),
      'http_client' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/http_client/http_client.module',
        'basename' => 'http_client.module',
        'name' => 'http_client',
        'info' => 
        array (
          'name' => 'Http Client',
          'description' => 'Provides a Http client for use with the services Http server',
          'files' => 
          array (
            0 => 'includes/HttpClient.inc',
            1 => 'includes/HttpClientXMLFormatter.inc',
            2 => 'includes/HttpClientCurlDelegate.inc',
          ),
          'package' => 'Services - clients',
          'core' => '7.x',
          'version' => '7.x-2.2',
          'project' => 'http_client',
          'datestamp' => '1316166403',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'http_client',
        'version' => '7.x-2.2',
      ),
      'http_client_oauth' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/http_client/http_client_oauth.module',
        'basename' => 'http_client_oauth.module',
        'name' => 'http_client_oauth',
        'info' => 
        array (
          'name' => 'Http Client OAuth',
          'description' => 'Provides a OAuth authentication mechanism for the Http Client',
          'dependencies' => 
          array (
            0 => 'oauth_common',
            1 => 'http_client',
          ),
          'files' => 
          array (
            0 => 'includes/HttpClientOAuth.inc',
          ),
          'package' => 'Services - clients',
          'core' => '7.x',
          'version' => '7.x-2.2',
          'project' => 'http_client',
          'datestamp' => '1316166403',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'http_client',
        'version' => '7.x-2.2',
      ),
      'multiform_test' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/multiform/tests/multiform_test.module',
        'basename' => 'multiform_test.module',
        'name' => 'multiform_test',
        'info' => 
        array (
          'name' => 'Multiform test',
          'description' => 'Handle module for testing Multiform',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'multiform',
          ),
          'hidden' => true,
          'files' => 
          array (
            0 => 'multiform_test.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'multiform',
          'datestamp' => '1327823749',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'multiform',
        'version' => '7.x-1.0',
      ),
      'multiform' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/multiform/multiform.module',
        'basename' => 'multiform.module',
        'name' => 'multiform',
        'info' => 
        array (
          'name' => 'Multiple forms',
          'description' => 'Allows displaying and submitting multiple forms in one form',
          'files' => 
          array (
            0 => 'multiform.module',
            1 => 'tests/multiform.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'multiform',
          'datestamp' => '1327823749',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'multiform',
        'version' => '7.x-1.0',
      ),
      'wysiwyg_exclude_field' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/wysiwyg_exclude_field/wysiwyg_exclude_field.module',
        'basename' => 'wysiwyg_exclude_field.module',
        'name' => 'wysiwyg_exclude_field',
        'info' => 
        array (
          'name' => 'Wysiwyg Exclude Field',
          'description' => 'Allows admin to choose if a field need to load wysiwyg profile.',
          'package' => 'User interface',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'wysiwyg',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'wysiwyg_exclude_field',
          'datestamp' => '1345501941',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wysiwyg_exclude_field',
        'version' => '7.x-1.0-alpha1',
      ),
      'features_tools' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/contrib/ftools/features_tools.module',
        'basename' => 'features_tools.module',
        'name' => 'features_tools',
        'info' => 
        array (
          'name' => 'Features tools',
          'description' => 'Provides feature management auto download button.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
          ),
          'package' => 'Features',
          'version' => '7.x-1.5',
          'project' => 'ftools',
          'datestamp' => '1337098556',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ftools',
        'version' => '7.x-1.5',
      ),
      'reach_slideshow_panel_widget' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_slideshow_panel_widget/reach_slideshow_panel_widget.module',
        'basename' => 'reach_slideshow_panel_widget.module',
        'name' => 'reach_slideshow_panel_widget',
        'info' => 
        array (
          'name' => 'Reach slideshow widget',
          'description' => 'Provides a fieldable panels slideshow widget',
          'core' => '7.x',
          'package' => 'Features',
          'php' => '5.2.4',
          'version' => '7.x-1.0-dev',
          'project' => 'reach_slideshow_panel_widget',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'date',
            2 => 'features',
            3 => 'field_collection',
            4 => 'fieldable_panels_panes',
            5 => 'link',
            6 => 'media',
            7 => 'mediafield',
            8 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'fieldable_panels_panes::',
              1 => 'fieldable_panels_panes:fieldable_panels_panes_type:1',
              2 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'field_collection_item-field_slideshow-field_date',
              1 => 'field_collection_item-field_slideshow-field_description',
              2 => 'field_collection_item-field_slideshow-field_image',
              3 => 'field_collection_item-field_slideshow-field_slideshow_link',
              4 => 'fieldable_panels_pane-reach_slideshow_widget-field_slideshow',
            ),
            'fieldable_panels_panes_type' => 
            array (
              0 => 'reach_slideshow_widget',
            ),
            'views_view' => 
            array (
              0 => 'slideshow_widget',
            ),
          ),
        ),
        'schema_version' => 0,
        'project' => 'reach_slideshow_panel_widget',
        'version' => '7.x-1.0-dev',
      ),
      'single_page_website' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/single_page_website/single_page_website.module',
        'basename' => 'single_page_website.module',
        'name' => 'single_page_website',
        'info' => 
        array (
          'name' => 'Single Page Website',
          'dependencies' => 
          array (
            0 => 'menu',
            1 => 'libraries',
          ),
          'description' => 'Provide the ability to create single public landing page.',
          'package' => 'Design',
          'core' => '7.x',
          'version' => '7.x-2.0-beta4+4-dev',
          'project' => 'single_page_website',
          'datestamp' => '1334105325',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'single_page_website',
        'version' => '7.x-2.0-beta4+4-dev',
      ),
      'action' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/action/action.module',
        'basename' => 'action.module',
        'name' => 'action',
        'info' => 
        array (
          'name' => 'Action',
          'description' => 'Provides entity functionality as an example to use in your own development projects',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'action.admin.inc',
            1 => 'action_type.admin.inc',
            2 => 'action.rules.inc',
            3 => 'views/action.views.inc',
            4 => 'views/action_handler_link_field.inc',
            5 => 'views/action_handler_delete_link_field.inc',
            6 => 'views/action_handler_edit_link_field.inc',
            7 => 'views/action_handler_action_operations_field.inc',
          ),
          'version' => '7.x-1.0-alpha2',
          'project' => 'action',
          'datestamp' => '1309730820',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'action',
        'version' => '7.x-1.0-alpha2',
      ),
      'feeds_media_processor' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/feeds_media_processor/feeds_media_processor.module',
        'basename' => 'feeds_media_processor.module',
        'name' => 'feeds_media_processor',
        'info' => 
        array (
          'name' => 'Feeds Media Processor',
          'description' => 'Allows media file entities to be imported via feeds.',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'feeds',
            1 => 'media',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'webform_beautifier' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/webform_beautifier/webform_beautifier.module',
        'basename' => 'webform_beautifier.module',
        'name' => 'webform_beautifier',
        'info' => 
        array (
          'name' => 'Webform Beautifier',
          'description' => 'Adds integration between Webform and the From Beautifier module',
          'core' => '7.x',
          'package' => 'Webform',
          'dependencies' => 
          array (
            0 => 'webform',
            1 => 'form_beautifier',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'media_browser_flickr' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/media_browser_internet/modules/media_browser_flickr/media_browser_flickr.module',
        'basename' => 'media_browser_flickr.module',
        'name' => 'media_browser_flickr',
        'info' => 
        array (
          'name' => 'Media Browser Flickr',
          'description' => 'Provides a Flickr tab to the media browser',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'media_browser_internet',
          ),
          'files' => 
          array (
            0 => 'media_browser_flickr.module',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'media_browser_youtube' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/media_browser_internet/modules/media_browser_youtube/media_browser_youtube.module',
        'basename' => 'media_browser_youtube.module',
        'name' => 'media_browser_youtube',
        'info' => 
        array (
          'name' => 'Media Browser Youtube',
          'description' => 'Provides a Youtube browser tab to the media browser',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'media_browser_internet',
          ),
          'files' => 
          array (
            0 => 'media_browser_youtube.module',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'media_browser_facebook' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/media_browser_internet/modules/media_browser_facebook/media_browser_facebook.module',
        'basename' => 'media_browser_facebook.module',
        'name' => 'media_browser_facebook',
        'info' => 
        array (
          'name' => 'Media Browser Facebook',
          'description' => 'Provides a Facebook tab to the media browser',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'media_browser_internet',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'media_browser_internet' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/media_browser_internet/media_browser_internet.module',
        'basename' => 'media_browser_internet.module',
        'name' => 'media_browser_internet',
        'info' => 
        array (
          'name' => 'Media Browser Internet Sources',
          'description' => 'Provides browsers for various 3rd party internet sites',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'media_browser_internet.module',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'pay_stripe' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/pay_stripe/pay_stripe.module',
        'basename' => 'pay_stripe.module',
        'name' => 'pay_stripe',
        'info' => 
        array (
          'name' => 'Pay Stripe',
          'description' => 'Stripe payments integraton with Pay module.',
          'core' => '7.x',
          'package' => 'Payment API',
          'dependencies' => 
          array (
            0 => 'pay',
            1 => 'libraries',
          ),
          'files' => 
          array (
            0 => 'pay_stripe_method_gateway.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'media_gallery_lite' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/media_gallery_lite/media_gallery_lite.module',
        'basename' => 'media_gallery_lite.module',
        'name' => 'media_gallery_lite',
        'info' => 
        array (
          'name' => 'Media Gallery',
          'description' => 'A flexible gallery of media.',
          'core' => '7.x',
          'package' => 'Media',
          'dependencies' => 
          array (
            0 => 'list',
            1 => 'number',
            2 => 'media',
            3 => 'multiform',
          ),
          'files' => 
          array (
            0 => 'media_gallery_lite.module',
            1 => 'media_gallery_lite.fields.inc',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'ctools_automodal_example' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/ctools_automodal/ctools_automodal_example/ctools_automodal_example.module',
        'basename' => 'ctools_automodal_example.module',
        'name' => 'ctools_automodal_example',
        'info' => 
        array (
          'name' => 'CTools Automodal Example',
          'description' => 'Example of automatic modal page API.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools_automodal',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'ctools_automodal' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/ctools_automodal/ctools_automodal.module',
        'basename' => 'ctools_automodal.module',
        'name' => 'ctools_automodal',
        'info' => 
        array (
          'name' => 'CTools Automodal',
          'description' => 'Provides an easy to use automatic modal page API.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'form_beautifier' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/form_beautifier/form_beautifier.module',
        'basename' => 'form_beautifier.module',
        'name' => 'form_beautifier',
        'info' => 
        array (
          'name' => 'Form Beautifier',
          'description' => 'A Collection of jQuery Scripts that can make your forms look good.',
          'core' => '7.x',
          'package' => 'Other',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'user_dropdown_menu' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/user_dropdown_menu/user_dropdown_menu.module',
        'basename' => 'user_dropdown_menu.module',
        'name' => 'user_dropdown_menu',
        'info' => 
        array (
          'name' => 'Albatross User Drop-down Menu',
          'description' => 'Creates a drop-down menu with user-related links.',
          'package' => 'Albatross',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
          ),
          '//dependencies' => 
          array (
            0 => 'block_hover',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'dpm_without_devel' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/dpm_without_devel/dpm_without_devel.module',
        'basename' => 'dpm_without_devel.module',
        'name' => 'dpm_without_devel',
        'info' => 
        array (
          'name' => 'DPM without Devel',
          'description' => 'Allows you to run dpm() commands without devel enabled',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'geofield_image' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/geofield_image/geofield_image.module',
        'basename' => 'geofield_image.module',
        'name' => 'geofield_image',
        'info' => 
        array (
          'name' => 'Geofield Images',
          'description' => 'Provides static map and streetview images for locations via Google\'s API.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'geofield',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_crm_user' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_crm/modules/reach_crm_user/reach_crm_user.module',
        'basename' => 'reach_crm_user.module',
        'name' => 'reach_crm_user',
        'info' => 
        array (
          'name' => 'Reach CRM User',
          'description' => 'Adds the necessary fields and hooks to use users are the contact type for Reach CRM.',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
            2 => 'field_sql_storage',
            3 => 'text',
            4 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'user-user-field_first_name',
              1 => 'user-user-field_last_name',
            ),
            'views_view' => 
            array (
              0 => 'reach_search',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_crm_party' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_crm/modules/reach_crm_party/reach_crm_party.module',
        'basename' => 'reach_crm_party.module',
        'name' => 'reach_crm_party',
        'info' => 
        array (
          'name' => 'Reach Party',
          'description' => 'Sets up party fields and implements the hooks for reach_crm',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'addressfield',
            1 => 'contextual',
            2 => 'dashboard',
            3 => 'draggableviews',
            4 => 'email',
            5 => 'features',
            6 => 'file',
            7 => 'follow',
            8 => 'geocoder',
            9 => 'geofield',
            10 => 'geofield_image',
            11 => 'googleanalytics',
            12 => 'media',
            13 => 'menu',
            14 => 'overlay',
            15 => 'party',
            16 => 'path',
            17 => 'phone',
            18 => 'reach_crm',
            19 => 'reach_social_fields',
            20 => 'save_draft',
            21 => 'shortcut',
            22 => 'styles',
            23 => 'taxonomy',
            24 => 'toolbar',
            25 => 'views',
            26 => 'views_bulk_operations',
            27 => 'views_load_more',
            28 => 'waypoints',
          ),
          '//features' => 
          array (
            'rules_config' => 
            array (
              0 => 'rules_component_form_submitted',
              1 => 'rules_donation',
              2 => 'rules_form_submitted',
              3 => 'rules_reach_form_submitted',
            ),
          ),
          'explanation' => 'Field type(s) in use - see <a href="/admin/reports/fields">Field list</a>',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'relation:relation_type_default:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'party-party-field_address',
              1 => 'party-party-field_email',
              2 => 'party-party-field_first_name',
              3 => 'party-party-field_geofield',
              4 => 'party-party-field_group',
              5 => 'party-party-field_last_name',
              6 => 'party-party-field_phone',
            ),
            'user_permission' => 
            array (
              0 => 'create parties',
              1 => 'delete terms in 1',
              2 => 'edit parties',
              3 => 'edit terms in 1',
              4 => 'view parties',
            ),
            'views_view' => 
            array (
              0 => 'reach_search',
            ),
          ),
          'required' => '1',
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_crm_redhen' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_crm/modules/reach_crm_redhen/reach_crm_redhen.module',
        'basename' => 'reach_crm_redhen.module',
        'name' => 'reach_crm_redhen',
        'info' => 
        array (
          'name' => 'Reach CRM Redhen',
          'description' => 'Integrates the Reach CRM toolset with Redhen',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'addressfield',
            1 => 'entity',
            2 => 'features',
            3 => 'image',
            4 => 'phone',
            5 => 'reach_crm',
            6 => 'redhen_contact',
            7 => 'redhen_fields',
            8 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'redhen_contact-supporter-field_address',
              1 => 'redhen_contact-supporter-field_group',
              2 => 'redhen_contact-supporter-field_phone',
              3 => 'redhen_contact-supporter-field_picture',
              4 => 'redhen_contact-supporter-redhen_contact_email',
            ),
            'redhen_contact_type' => 
            array (
              0 => 'supporter',
            ),
            'views_view' => 
            array (
              0 => 'reach_contacts_redhen',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_crm' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_crm/reach_crm.module',
        'basename' => 'reach_crm.module',
        'name' => 'reach_crm',
        'info' => 
        array (
          'name' => 'Reach',
          'description' => 'Albatross Reach is a Action-oriented CRM for Drupal',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'taxonomy',
            2 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'taxonomy' => 
            array (
              0 => 'groups',
            ),
            'views_view' => 
            array (
              0 => 'reach_actions',
              1 => 'reach_actions_by_party',
              2 => 'reach_actions_by_user',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_mailing_party' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_mailing/modules/reach_mailing_party/reach_mailing_party.module',
        'basename' => 'reach_mailing_party.module',
        'name' => 'reach_mailing_party',
        'info' => 
        array (
          'name' => 'Reach Mailing Party',
          'description' => 'Adds the recipient views to use Party entities as recipients',
          'core' => '7.x',
          'package' => 'Features',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'reach_mailing',
            2 => 'views',
            3 => 'views_linkarea',
            4 => 'party',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'views_view' => 
            array (
              0 => 'mailing_add_recipients',
              1 => 'mailing_recipients',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_mailing_critsend' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_mailing/modules/reach_mailing_critsend/reach_mailing_critsend.module',
        'basename' => 'reach_mailing_critsend.module',
        'name' => 'reach_mailing_critsend',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views_bulk_operations',
            1 => 'reach_mailing',
          ),
          'description' => 'CRM mass mailing sender CritSend Plugin',
          'name' => 'reach_mailing_critsend',
          'package' => 'CRM',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_mailing_user' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_mailing/modules/reach_mailing_user/reach_mailing_user.module',
        'basename' => 'reach_mailing_user.module',
        'name' => 'reach_mailing_user',
        'info' => 
        array (
          'name' => 'Reach Mailing User',
          'description' => 'Allows the recipient views to use Users as recipients',
          'core' => '7.x',
          'package' => 'Features',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'entityreference',
            2 => 'features',
            3 => 'reach_mailing',
            4 => 'views',
            5 => 'views_bulk_operations',
            6 => 'views_data_export',
            7 => 'views_linkarea',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-mailing-field_mailing_recipients',
            ),
            'views_view' => 
            array (
              0 => 'mailing_add_recipients',
              1 => 'mailing_recipients',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_mailing_sendgrid' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_mailing/modules/reach_mailing_sendgrid/reach_mailing_sendgrid.module',
        'basename' => 'reach_mailing_sendgrid.module',
        'name' => 'reach_mailing_sendgrid',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'reach_mailing',
          ),
          'description' => 'Reach Mailing Sendgrid mailer',
          'name' => 'reach_mailing_sendgrid',
          'package' => 'Reach',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_mailing_analytics' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_mailing/modules/reach_mailing_analytics/reach_mailing_analytics.module',
        'basename' => 'reach_mailing_analytics.module',
        'name' => 'reach_mailing_analytics',
        'info' => 
        array (
          'name' => 'Reach Mailing Analytics',
          'description' => 'Creates the analytics page for mailings',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'reach_mailing',
            1 => 'ctools',
            2 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'views_view' => 
            array (
              0 => 'mailing_analytics_recipients',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_mailing' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_mailing/reach_mailing.module',
        'basename' => 'reach_mailing.module',
        'name' => 'reach_mailing',
        'info' => 
        array (
          'name' => 'Reach Mass Mailing',
          'description' => 'Sends mass mailings through Reach',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'entityreference',
            2 => 'features',
            3 => 'improved_text_trim',
            4 => 'list',
            5 => 'media',
            6 => 'number',
            7 => 'reach_crm',
            8 => 'scheduler',
            9 => 'strongarm',
            10 => 'views',
            11 => 'views_bulk_operations',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-mailing-body',
              1 => 'node-mailing-field_body_plain',
              2 => 'node-mailing-field_mailing_auto_text_version',
              3 => 'node-mailing-field_mailing_form',
              4 => 'node-mailing-field_mailing_from',
              5 => 'node-mailing-field_mailing_status',
              6 => 'node-mailing-field_subject',
            ),
            'filter' => 
            array (
              0 => 'mailing_html_message',
              1 => 'mailing_text_message',
            ),
            'node' => 
            array (
              0 => 'mailing',
            ),
            'variable' => 
            array (
              0 => 'menu_options_mailing',
              1 => 'menu_parent_mailing',
              2 => 'node_options_mailing',
              3 => 'node_preview_mailing',
              4 => 'node_submitted_mailing',
            ),
            'views_view' => 
            array (
              0 => 'mailings',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_social_field' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_social/modules/reach_social_field/reach_social_field.module',
        'basename' => 'reach_social_field.module',
        'name' => 'reach_social_field',
        'info' => 
        array (
          'name' => 'Reach Social Field',
          'description' => 'Creates a field to link entities to Facebook, Flickr and Google entities.',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_social_blocks' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_social/modules/reach_social_blocks/reach_social_blocks.module',
        'basename' => 'reach_social_blocks.module',
        'name' => 'reach_social_blocks',
        'info' => 
        array (
          'name' => 'Reach Social Blocks',
          'description' => 'Adds blocks for all of the social sharing toolz.',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_social_blocks_analytics' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_social/modules/reach_social_blocks_analytics/reach_social_blocks_analytics.module',
        'basename' => 'reach_social_blocks_analytics.module',
        'name' => 'reach_social_blocks_analytics',
        'info' => 
        array (
          'name' => 'Reach Social Blocks Analytics',
          'description' => 'Adds actions to parties that interact with the social blocks.',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_social_fields' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_social/modules/reach_social_fields/reach_social_fields.module',
        'basename' => 'reach_social_fields.module',
        'name' => 'reach_social_fields',
        'info' => 
        array (
          'name' => 'Reach Social Fields',
          'description' => 'Creates fields to link entities to Facebook, Flickr and Google entities.',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_social' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_social/reach_social.module',
        'basename' => 'reach_social.module',
        'name' => 'reach_social',
        'info' => 
        array (
          'name' => 'Reach Social',
          'description' => 'Provides Facebook/Twitter integration with oAuth.',
          'core' => '7.x',
          'package' => 'Other',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
            2 => 'oauth_common',
            3 => 'oauthconnector',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'oauthconnector::',
            ),
            'oauthconnector_provider' => 
            array (
              0 => 'facebook',
              1 => 'flickr',
              2 => 'google',
              3 => 'twitter',
            ),
            'user_permission' => 
            array (
              0 => 'administer consumers',
              1 => 'administer oauth',
              2 => 'administer oauth connector',
              3 => 'connect with oauthconnector_facebook',
              4 => 'connect with oauthconnector_flickr',
              5 => 'connect with oauthconnector_google',
              6 => 'connect with oauthconnector_twitter',
              7 => 'oauth authorize any consumers',
              8 => 'oauth register any consumers',
              9 => 'post to social networks',
            ),
          ),
          'files' => 
          array (
            0 => 'reach_social.inc',
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'menu_toolbar_coop' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/menu_toolbar_coop/menu_toolbar_coop.module',
        'basename' => 'menu_toolbar_coop.module',
        'name' => 'menu_toolbar_coop',
        'info' => 
        array (
          'name' => 'Menu Toolbar Coop',
          'description' => 'Makes it so admin_menu and toolbar cooperate',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu_toolbar_coop.module',
            1 => 'menu_toolbar_coop.js',
          ),
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_webform' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/reach_webform/reach_webform.module',
        'basename' => 'reach_webform.module',
        'name' => 'reach_webform',
        'info' => 
        array (
          'name' => 'Reach Webform',
          'description' => 'Reach integration into the Webform module',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'defaultcontent',
            2 => 'reach_crm',
            3 => 'strongarm',
            4 => 'webform',
            5 => 'webform_beautifier',
            6 => 'webform_entity',
          ),
          'features' => 
          array (
            'content' => 
            array (
              0 => 'webform_email_signup',
            ),
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'variable' => 
            array (
              0 => 'webform_node_types',
              1 => 'webform_template_src',
              2 => 'webform_use_cookies',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'feeds_oauthconnector_fetcher' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/feeds_oauthconnector_fetcher/feeds_oauthconnector_fetcher.module',
        'basename' => 'feeds_oauthconnector_fetcher.module',
        'name' => 'feeds_oauthconnector_fetcher',
        'info' => 
        array (
          'name' => 'Feeds Oauth Connector Fetcher',
          'description' => 'Load feeds after Oauth autentication.',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'feeds',
            1 => 'oauthconnector',
          ),
          'core' => '7.x',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'elegant_backend' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/custom/elegant_backend/elegant_backend.module',
        'basename' => 'elegant_backend.module',
        'name' => 'elegant_backend',
        'info' => 
        array (
          'name' => 'Elegant Backend',
          'description' => 'Takes the standard Drupal admin frown and turns it upside-down',
          'core' => '7.x',
          'package' => 'Reach',
          'dependencies' => 
          array (
            0 => 'filter_tips_dialog',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_gallery' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_gallery/reach_gallery.module',
        'basename' => 'reach_gallery.module',
        'name' => 'reach_gallery',
        'info' => 
        array (
          'name' => 'Reach Gallery',
          'description' => 'A wrapper for the media_gallery module.',
          'core' => '7.x',
          'package' => 'Features',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'media_gallery',
          ),
          'features' => 
          array (
            'user_permission' => 
            array (
              0 => 'administer media galleries',
              1 => 'create media_gallery content',
              2 => 'delete any media_gallery content',
              3 => 'delete own media_gallery content',
              4 => 'edit any media_gallery content',
              5 => 'edit own media_gallery content',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_multi_content_blog' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_multi_content_blog/reach_multi_content_blog.module',
        'basename' => 'reach_multi_content_blog.module',
        'name' => 'reach_multi_content_blog',
        'info' => 
        array (
          'name' => 'Reach Multi-content Blog',
          'description' => 'Creates a view that displays blog posts, images and videos in one fiter-able feed.',
          'core' => '7.x',
          'package' => 'Reach',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'views_view' => 
            array (
              0 => 'multi_content_authors',
              1 => 'multi_content_blog',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_administration' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_administration/reach_administration.module',
        'basename' => 'reach_administration.module',
        'name' => 'reach_administration',
        'info' => 
        array (
          'name' => 'Reach Administration',
          'description' => 'Sets up the dashboard and administration menus.',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'context',
            2 => 'defaultcontent',
            3 => 'ds',
            4 => 'features',
            5 => 'menu',
            6 => 'search',
            7 => 'views',
            8 => 'views_bulk_operations',
          ),
          'features' => 
          array (
            'content_menu_links' => 
            array (
              0 => 'management:admin/appearance',
              1 => 'management:admin/content',
              2 => 'management:admin/content/media',
              3 => 'management:admin/dashboard',
              4 => 'management:admin/structure/menu/manage/main-menu',
            ),
            'context' => 
            array (
              0 => 'reach_dashboard',
            ),
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'ds:ds:1',
              2 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_config' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_config/reach_config.module',
        'basename' => 'reach_config.module',
        'name' => 'reach_config',
        'info' => 
        array (
          'name' => 'Reach Configuration',
          'description' => 'Basic settings for reach including dependencies',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'admin_menu_toolbar',
            1 => 'block_everything',
            2 => 'contextual',
            3 => 'dashboard',
            4 => 'dblog',
            5 => 'draggableviews',
            6 => 'extlink',
            7 => 'features',
            8 => 'field_ui',
            9 => 'filter_perms',
            10 => 'filter_tips_dialog',
            11 => 'googleanalytics',
            12 => 'improved_text_trim',
            13 => 'libraries',
            14 => 'link',
            15 => 'list',
            16 => 'menu',
            17 => 'menu_toolbar_coop',
            18 => 'module_filter',
            19 => 'number',
            20 => 'options',
            21 => 'overlay',
            22 => 'path',
            23 => 'redirect',
            24 => 'search',
            25 => 'shortcut',
            26 => 'simplified_menu_admin',
            27 => 'stringoverrides',
            28 => 'strongarm',
            29 => 'taxonomy',
            30 => 'token',
            31 => 'toolbar',
            32 => 'views',
            33 => 'views_ui',
          ),
          '// Albatross
dependencies' => 
          array (
            0 => 'block_titlelink',
          ),
          '// Contrib
dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          '// Core
dependencies' => 
          array (
            0 => 'block',
          ),
          '// Openpublic
dependencies' => 
          array (
            0 => 'pathauto',
          ),
          '// Reach Features
dependencies' => 
          array (
            0 => 'reach_media',
          ),
          '// dependencies' => 
          array (
            0 => 'defaultcontent',
          ),
          '//dependencies' => 
          array (
            0 => 'rdf',
          ),
          '//features' => 
          array (
            'bean_type' => 
            array (
              0 => 'button_block',
            ),
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'bean_admin_ui:bean:5',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'bean-button_block-field_link',
            ),
            'user_permission' => 
            array (
              0 => 'access administration pages',
              1 => 'access content',
              2 => 'access content overview',
              3 => 'access contextual links',
              4 => 'access dashboard',
              5 => 'access draggableviews',
              6 => 'access overlay',
              7 => 'access toolbar',
              8 => 'administer blocks',
              9 => 'administer content types',
              10 => 'administer google analytics',
              11 => 'administer menu',
              12 => 'administer nodes',
              13 => 'administer shortcuts',
              14 => 'administer site configuration',
              15 => 'administer taxonomy',
              16 => 'administer themes',
              17 => 'bypass node access',
              18 => 'create url aliases',
              19 => 'customize shortcut links',
              20 => 'delete revisions',
              21 => 'revert revisions',
              22 => 'search content',
              23 => 'use advanced search',
              24 => 'view own unpublished content',
              25 => 'view revisions',
              26 => 'view the administration theme',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_donation' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_donation/reach_donation.module',
        'basename' => 'reach_donation.module',
        'name' => 'reach_donation',
        'info' => 
        array (
          'name' => 'Reach Donation',
          'description' => 'Sets up a very simple donation form with Stripe',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'ds',
            1 => 'features',
            2 => 'improved_text_trim',
            3 => 'reach_webform',
            4 => 'strongarm',
            5 => 'webform',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'ds:ds:1',
              1 => 'strongarm:strongarm:1',
            ),
            'ds_layout_settings' => 
            array (
              0 => 'node|donation|default',
            ),
            'field' => 
            array (
              0 => 'node-donation-body',
            ),
            'node' => 
            array (
              0 => 'donation',
            ),
            'user_permission' => 
            array (
              0 => 'create donation content',
              1 => 'delete any donation content',
              2 => 'delete own donation content',
              3 => 'edit any donation content',
              4 => 'edit own donation content',
            ),
            'variable' => 
            array (
              0 => 'menu_options_donation',
              1 => 'menu_parent_donation',
              2 => 'node_options_donation',
              3 => 'node_preview_donation',
              4 => 'node_submitted_donation',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_video' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_video/reach_video.module',
        'basename' => 'reach_video.module',
        'name' => 'reach_video',
        'info' => 
        array (
          'name' => 'Reach Video',
          'description' => 'Adds a video content type for blog-like video postings.',
          'core' => '7.x',
          'package' => 'Features',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
            2 => 'field_sql_storage',
            3 => 'media',
            4 => 'node',
            5 => 'options',
            6 => 'reach_form',
            7 => 'strongarm',
            8 => 'taxonomy',
            9 => 'text',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'field' => 
            array (
              0 => 'node-video-body',
              1 => 'node-video-field_content_media',
              2 => 'node-video-field_day',
              3 => 'node-video-field_tags',
            ),
            'node' => 
            array (
              0 => 'video',
            ),
            'taxonomy' => 
            array (
              0 => 'day',
            ),
            'user_permission' => 
            array (
              0 => 'create video content',
              1 => 'delete any video content',
              2 => 'delete own video content',
              3 => 'edit any video content',
              4 => 'edit own video content',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_video',
              1 => 'comment_default_mode_video',
              2 => 'comment_default_per_page_video',
              3 => 'comment_form_location_video',
              4 => 'comment_preview_video',
              5 => 'comment_subject_field_video',
              6 => 'comment_video',
              7 => 'menu_options_video',
              8 => 'menu_parent_video',
              9 => 'node_options_video',
              10 => 'node_preview_video',
              11 => 'node_submitted_video',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_contact' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_contact/reach_contact.module',
        'basename' => 'reach_contact.module',
        'name' => 'reach_contact',
        'info' => 
        array (
          'name' => 'Reach Contact',
          'description' => 'Extends reach form to add support for a location based contact page',
          'core' => '7.x',
          'package' => 'Reach',
          'dependencies' => 
          array (
            0 => 'ds',
            1 => 'reach_form',
            2 => 'strongarm',
            3 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'ds:ds:1',
              1 => 'strongarm:strongarm:1',
              2 => 'views:views_default:3.0',
            ),
            'ds_field_settings' => 
            array (
              0 => 'node|form|organization_party_data',
              1 => 'party|organisation|address_and_location',
            ),
            'ds_fields' => 
            array (
              0 => 'edit_party_link',
              1 => 'organisation_location_list',
            ),
            'ds_layout_settings' => 
            array (
              0 => 'node|form|organization_party_data',
              1 => 'party|organisation|address_and_location',
            ),
            'ds_view_modes' => 
            array (
              0 => 'address_and_location',
              1 => 'organization_party_data',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'variable' => 
            array (
              0 => 'ds_extras_switch_field',
              1 => 'ds_extras_switch_view_mode',
            ),
            'views_view' => 
            array (
              0 => 'party_organization_location_list',
            ),
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_wysiwyg/reach_wysiwyg.module',
        'basename' => 'reach_wysiwyg.module',
        'name' => 'reach_wysiwyg',
        'info' => 
        array (
          'name' => 'Reach WYSIWYG',
          'description' => 'Extends the WYSIWYG configurations of debug_wysiwyg',
          'core' => '7.x',
          'package' => 'Flight',
          'dependencies' => 
          array (
            0 => 'debut_wysiwyg',
            1 => 'elegant_backend',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_base' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_base/reach_base.module',
        'basename' => 'reach_base.module',
        'name' => 'reach_base',
        'info' => 
        array (
          'name' => 'Reach Core',
          'description' => 'Installs the base Reach install modules and features',
          'core' => '7.x',
          'package' => 'Reach',
          'dependencies' => 
          array (
            0 => 'redhen',
            1 => 'reach_crm',
            2 => 'reach_crm_redhen',
            3 => 'reach_form',
            4 => 'reach_page',
            5 => 'reach_social',
            6 => 'reach_social_blocks',
            7 => 'oauth2_common',
            8 => 'connector',
            9 => 'oauthconnector',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_page' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_page/reach_page.module',
        'basename' => 'reach_page.module',
        'name' => 'reach_page',
        'info' => 
        array (
          'name' => 'Reach Page',
          'description' => 'Creates a basic page content type and permissions',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'ctools',
            2 => 'ds',
            3 => 'features',
            4 => 'media',
            5 => 'strongarm',
          ),
          'features' => 
          array (
            'context' => 
            array (
              0 => 'page_content_type',
            ),
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'ds:ds:1',
              2 => 'strongarm:strongarm:1',
            ),
            'ds_field_settings' => 
            array (
              0 => 'node|page|default',
              1 => 'node|page|teaser',
            ),
            'ds_layout_settings' => 
            array (
              0 => 'node|page|default',
              1 => 'node|page|teaser',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-page-body',
              1 => 'node-page-field_content_media',
            ),
            'node' => 
            array (
              0 => 'page',
            ),
            'user_permission' => 
            array (
              0 => 'create page content',
              1 => 'delete any page content',
              2 => 'delete own page content',
              3 => 'edit any page content',
              4 => 'edit own page content',
            ),
            'variable' => 
            array (
              0 => 'menu_options_page',
              1 => 'menu_parent_page',
              2 => 'node_options_page',
              3 => 'node_preview_page',
              4 => 'node_submitted_page',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_form' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_form/reach_form.module',
        'basename' => 'reach_form.module',
        'name' => 'reach_form',
        'info' => 
        array (
          'name' => 'Reach Form',
          'description' => 'Creates the Form content type and permissions',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'action',
            1 => 'ctools',
            2 => 'ds',
            3 => 'entityreference',
            4 => 'features',
            5 => 'improved_text_trim',
            6 => 'media',
            7 => 'number',
            8 => 'reach_webform',
            9 => 'rules',
            10 => 'strongarm',
            11 => 'styles',
            12 => 'taxonomy',
            13 => 'webform',
          ),
          'features' => 
          array (
            'action_type' => 
            array (
              0 => 'form_submission',
            ),
            'ctools' => 
            array (
              0 => 'ds:ds:1',
              1 => 'strongarm:strongarm:1',
            ),
            'ds_layout_settings' => 
            array (
              0 => 'action|form_submission|default',
              1 => 'node|form|default',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'action-form_submission-field_action_contact',
              1 => 'action-form_submission-field_action_form',
              2 => 'action-form_submission-field_action_points',
              3 => 'action-form_submission-field_action_submission',
              4 => 'action-form_submission-field_action_user',
              5 => 'node-form-body',
              6 => 'node-form-field_content_media',
              7 => 'node-form-field_tags',
            ),
            'node' => 
            array (
              0 => 'form',
            ),
            'rules_config' => 
            array (
              0 => 'rules_create_form_submission_action',
              1 => 'rules_create_form_submission_action_component',
            ),
            'taxonomy' => 
            array (
              0 => 'tags',
            ),
            'user_permission' => 
            array (
              0 => 'create form content',
              1 => 'delete any form content',
              2 => 'delete own form content',
              3 => 'edit any form content',
              4 => 'edit own form content',
            ),
            'variable' => 
            array (
              0 => 'language_content_type_form',
              1 => 'menu_options_form',
              2 => 'menu_parent_form',
              3 => 'node_options_form',
              4 => 'node_preview_form',
              5 => 'node_submitted_form',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_blog' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_blog/reach_blog.module',
        'basename' => 'reach_blog.module',
        'name' => 'reach_blog',
        'info' => 
        array (
          'name' => 'Reach Blog',
          'description' => 'Creates the Issue content type, view and permissions',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'version' => '7.x-1.0',
          'project' => 'reach_blog',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'ds',
            2 => 'features',
            3 => 'image',
            4 => 'media',
            5 => 'reach_social_blocks',
            6 => 'strongarm',
            7 => 'taxonomy',
            8 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'ds:ds:1',
              2 => 'strongarm:strongarm:1',
              3 => 'views:views_default:3.0',
            ),
            'ds_field_settings' => 
            array (
              0 => 'node|blog|teaser',
            ),
            'ds_layout_settings' => 
            array (
              0 => 'node|blog|teaser',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-blog-body',
              1 => 'node-blog-field_tags',
            ),
            'node' => 
            array (
              0 => 'blog',
            ),
            'user_permission' => 
            array (
              0 => 'create blog content',
              1 => 'delete any blog content',
              2 => 'delete own blog content',
              3 => 'edit any blog content',
              4 => 'edit own blog content',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_blog',
              1 => 'comment_blog',
              2 => 'comment_default_mode_blog',
              3 => 'comment_default_per_page_blog',
              4 => 'comment_form_location_blog',
              5 => 'comment_preview_blog',
              6 => 'comment_subject_field_blog',
              7 => 'menu_options_blog',
              8 => 'menu_parent_blog',
              9 => 'node_options_blog',
              10 => 'node_preview_blog',
              11 => 'node_submitted_blog',
            ),
            'views_view' => 
            array (
              0 => 'Blog',
            ),
          ),
        ),
        'schema_version' => 0,
        'project' => 'reach_blog',
        'version' => '7.x-1.0',
      ),
      'reach_media' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_media/reach_media.module',
        'basename' => 'reach_media.module',
        'name' => 'reach_media',
        'info' => 
        array (
          'name' => 'Reach Media',
          'description' => 'Sets up media for Reach',
          'core' => '7.x',
          'package' => 'Reach',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'field_ui',
            2 => 'file',
            3 => 'file_entity',
            4 => 'media',
            5 => 'media_browser_internet',
            6 => 'media_internet',
            7 => 'plupload',
            8 => 'remote_stream_wrapper',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'user_permission' => 
            array (
              0 => 'add media from remote sources',
              1 => 'administer media',
              2 => 'edit media',
              3 => 'import media',
              4 => 'view media',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_search_api_blog' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_search_api_blog/reach_search_api_blog.module',
        'basename' => 'reach_search_api_blog.module',
        'name' => 'reach_search_api_blog',
        'info' => 
        array (
          'name' => 'Reach Search API Blog',
          'description' => 'Uses the database search api for providing a faceted blog',
          'core' => '7.x',
          'package' => 'Features',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'better_exposed_filters',
            1 => 'context',
            2 => 'ctools',
            3 => 'facetapi',
            4 => 'page_manager',
            5 => 'reach_blog',
            6 => 'search_api',
            7 => 'search_api_db',
            8 => 'search_api_sorts',
          ),
          'features' => 
          array (
            'context' => 
            array (
              0 => 'blog_section',
            ),
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'ds:ds:1',
              2 => 'facetapi:facetapi_defaults:1',
              3 => 'page_manager:pages_default:1',
              4 => 'views:views_default:3.0',
            ),
            'ds_fields' => 
            array (
              0 => 'date_with_author',
              1 => 'taxonomy_alter_for_blog_listing',
            ),
            'facetapi' => 
            array (
              0 => 'search_api@blog_nodes::author:name',
              1 => 'search_api@blog_nodes::field_tags',
              2 => 'search_api@blog_nodes:block:author',
              3 => 'search_api@blog_nodes:block:author:name',
              4 => 'search_api@blog_nodes:block:body:value',
              5 => 'search_api@blog_nodes:block:created',
              6 => 'search_api@blog_nodes:block:field_tags',
              7 => 'search_api@blog_nodes:block:nid',
              8 => 'search_api@blog_nodes:block:search_api_language',
              9 => 'search_api@blog_nodes:block:status',
              10 => 'search_api@blog_nodes:block:title',
              11 => 'search_api@blog_nodes:block:type',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'page_manager_pages' => 
            array (
              0 => '_blog_listing',
            ),
            'search_api_index' => 
            array (
              0 => 'blog_nodes',
            ),
            'search_api_sort' => 
            array (
              0 => 'blog_nodes__author:name',
              1 => 'blog_nodes__created',
            ),
            'views_view' => 
            array (
              0 => 'search_api_blog_list',
            ),
          ),
          'version' => NULL,
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'reach_slideshow' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/features/reach_slideshow/reach_slideshow.module',
        'basename' => 'reach_slideshow.module',
        'name' => 'reach_slideshow',
        'info' => 
        array (
          'name' => 'Reach Slideshow',
          'description' => 'Extends the rotating_banner module',
          'core' => '7.x',
          'package' => 'Flight',
          'dependencies' => 
          array (
            0 => 'rotating_banner',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'block_everything' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/drupalgardens/block_everything/block_everything.module',
        'basename' => 'block_everything.module',
        'name' => 'block_everything',
        'info' => 
        array (
          'name' => 'Block everything',
          'description' => 'Suppresses the rendering of various page elements directly into the page template and instead provide them as blocks (e.g. site_name, site_slogan, logo)',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block_everything.module',
          ),
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'contextual_flyout_links' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/drupalgardens/contextual_flyout_links/contextual_flyout_links.module',
        'basename' => 'contextual_flyout_links.module',
        'name' => 'contextual_flyout_links',
        'info' => 
        array (
          'name' => 'Contextual Flyout Links',
          'description' => 'Changes the Drupal core contextual links into a stylized flyout menu.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual_flyout_links.module',
          ),
          'dependencies' => 
          array (
            0 => 'contextual',
          ),
          'version' => '7.x-1.2',
          'project' => 'contextual-flyout-links',
          'datestamp' => '1328914837',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'contextual-flyout-links',
        'version' => '7.x-1.2',
      ),
      'improved_text_trim' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/modules/drupalgardens/improved_text_trim/improved_text_trim.module',
        'basename' => 'improved_text_trim.module',
        'name' => 'improved_text_trim',
        'info' => 
        array (
          'name' => 'Improved Text Trim',
          'description' => 'Improves the text trimming algorithm (commonly used when displaying text field content in a teaser) to not count HTML markup characters against the trim length.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
            1 => 'filter',
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
    ),
    'themes' => 
    array (
      'at_reach_core' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/themes/at_reach_core/at_reach_core.info',
        'basename' => 'at_reach_core.info',
        'name' => 'Reach Core Theme',
        'info' => 
        array (
          'name' => 'Reach Core Theme',
          'description' => 'A reach core starter theme built for the Panels Everywhere module.',
          'core' => '7.x',
          'release' => '7.x-3.x',
          'screenshot' => 'screenshot.png',
          'base theme' => 'at_panels_everywhere',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => '../at_panels_everywhere/cssglobal.base.css',
              1 => '../at_panels_everywhere/cssglobal.tables.css',
              2 => '../at_panels_everywhere/cssglobal.forms.css',
              3 => '../at_panels_everywhere/cssglobal.pages.css',
              4 => '../at_panels_everywhere/cssglobal.nav.css',
              5 => '../at_panels_everywhere/cssglobal.fields.css',
              6 => '../at_panels_everywhere/cssglobal.nodes.css',
              7 => 'global.comments.css',
              8 => 'global.blocks.css',
              9 => 'global.views.css',
              10 => 'global.panels.css',
            ),
          ),
          'plugins' => 
          array (
            'panels' => 
            array (
              'layouts' => 'plugins/layouts',
            ),
          ),
          'api' => 
          array (
            'page_manager' => 
            array (
              'pages_default' => 
              array (
                'version' => '1',
                'path' => 'pages',
              ),
            ),
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'comment_user_verification',
            6 => 'favicon',
            7 => 'main_menu',
            8 => 'secondary_menu',
          ),
          'settings' => 
          array (
            'bigscreen_layout' => 'three_col_grail',
            'bigscreen_page_unit' => '%',
            'bigscreen_sidebar_unit' => '%',
            'bigscreen_max_width_unit' => 'px',
            'bigscreen_page_width' => '100',
            'bigscreen_sidebar_first' => '25',
            'bigscreen_sidebar_second' => '25',
            'bigscreen_set_max_width' => '1',
            'bigscreen_max_width' => '1140',
            'bigscreen_media_query' => 'only screen and (min-width:1025px)',
            'tablet_landscape_layout' => 'three_col_grail',
            'tablet_landscape_page_unit' => '%',
            'tablet_landscape_sidebar_unit' => '%',
            'tablet_landscape_page_width' => '100',
            'tablet_landscape_sidebar_first' => '20',
            'tablet_landscape_sidebar_second' => '20',
            'tablet_landscape_media_query' => 'only screen and (min-width:769px) and (max-width:1024px)',
            'tablet_portrait_layout' => 'one_col_vert',
            'tablet_portrait_page_unit' => '%',
            'tablet_portrait_sidebar_unit' => '%',
            'tablet_portrait_page_width' => '100',
            'tablet_portrait_sidebar_first' => '50',
            'tablet_portrait_sidebar_second' => '50',
            'tablet_portrait_media_query' => 'only screen and (min-width:481px) and (max-width:768px)',
            'smartphone_landscape_layout' => 'one_col_vert',
            'smartphone_landscape_page_unit' => '%',
            'smartphone_landscape_sidebar_unit' => '%',
            'smartphone_landscape_page_width' => '100',
            'smartphone_landscape_sidebar_first' => '50',
            'smartphone_landscape_sidebar_second' => '50',
            'smartphone_landscape_media_query' => 'only screen and (min-width:321px) and (max-width:480px)',
            'smartphone_portrait_layout' => 'one_col_stack',
            'smartphone_portrait_page_unit' => '%',
            'smartphone_portrait_sidebar_unit' => '%',
            'smartphone_portrait_page_width' => '100',
            'smartphone_portrait_sidebar_first' => '100',
            'smartphone_portrait_sidebar_second' => '100',
            'smartphone_portrait_media_query' => 'only screen and (max-width:320px)',
            'bigscreen_two_50' => 'two-50',
            'bigscreen_two_33_66' => 'two-33-66',
            'bigscreen_two_66_33' => 'two-66-33',
            'bigscreen_two_brick' => 'two-brick',
            'bigscreen_three_3x33' => 'three-3x33',
            'bigscreen_three_25_50_25' => 'three-25-50-25',
            'bigscreen_three_25_25_50' => 'three-25-25-50',
            'bigscreen_three_50_25_25' => 'three-50-25-25',
            'bigscreen_four_4x25' => 'four-4x25',
            'bigscreen_five_5x20' => 'five-5x20-2x3-grid',
            'bigscreen_six_6x16' => 'six-6x16-3x2-grid',
            'bigscreen_three_inset_left' => 'three-inset-left',
            'bigscreen_three_inset_right' => 'three-inset-right',
            'tablet_landscape_two_50' => 'two-50',
            'tablet_landscape_two_33_66' => 'two-33-66',
            'tablet_landscape_two_66_33' => 'two-66-33',
            'tablet_landscape_two_brick' => 'two-brick',
            'tablet_landscape_three_3x33' => 'three-3x33',
            'tablet_landscape_three_25_50_25' => 'three-25-50-25',
            'tablet_landscape_three_25_25_50' => 'three-25-25-50',
            'tablet_landscape_three_50_25_25' => 'three-50-25-25',
            'tablet_landscape_four_4x25' => 'four-4x25',
            'tablet_landscape_five_5x20' => 'five-5x20-2x3-grid',
            'tablet_landscape_six_6x16' => 'six-6x16-3x2-grid',
            'tablet_landscape_three_inset_left' => 'three-inset-left',
            'tablet_landscape_three_inset_right' => 'three-inset-right',
            'tablet_portrait_two_50' => 'two-50',
            'tablet_portrait_two_33_66' => 'two-33-66',
            'tablet_portrait_two_66_33' => 'two-66-33',
            'tablet_portrait_two_brick' => 'two-brick',
            'tablet_portrait_three_3x33' => 'three-3x33-stack-top',
            'tablet_portrait_three_25_50_25' => 'three-25-50-25-stack-top',
            'tablet_portrait_three_25_25_50' => 'three-25-25-50-stack-top',
            'tablet_portrait_three_50_25_25' => 'three-50-25-25-stack-top',
            'tablet_portrait_four_4x25' => 'four-4x25-2x2-grid',
            'tablet_portrait_five_5x20' => 'five-5x20-1x2x2-grid',
            'tablet_portrait_six_6x16' => 'six-6x16-2x3-grid',
            'tablet_portrait_three_inset_left' => 'three-inset-left-wrap',
            'tablet_portrait_three_inset_right' => 'three-inset-right-wrap',
            'smartphone_landscape_two_50' => 'two-50-stack',
            'smartphone_landscape_two_33_66' => 'two-33-66-stack',
            'smartphone_landscape_two_66_33' => 'two-66-33-stack',
            'smartphone_landscape_two_brick' => 'two-brick-stack',
            'smartphone_landscape_three_3x33' => 'three-3x33-stack',
            'smartphone_landscape_three_25_50_25' => 'three-25-50-25-stack',
            'smartphone_landscape_three_25_25_50' => 'three-25-25-50-stack',
            'smartphone_landscape_three_50_25_25' => 'three-50-25-25-stack',
            'smartphone_landscape_four_4x25' => 'four-4x25-stack',
            'smartphone_landscape_five_5x20' => 'five-5x20-stack',
            'smartphone_landscape_six_6x16' => 'six-6x16-stack',
            'smartphone_landscape_three_inset_left' => 'three-inset-left-stack',
            'smartphone_landscape_three_inset_right' => 'three-inset-right-stack',
            'disable_responsive_styles' => '0',
            'enable_custom_media_queries' => '1',
            'global_default_layout' => 'smartphone-portrait',
            'global_default_layout_toggle' => '0',
            'global_files_path' => 'public_files',
            'load_html5js' => '1',
            'load_onmediaqueryjs' => '0',
            'load_respondjs' => '0',
            'load_ltie8css' => '0',
            'load_scalefixjs' => '0',
            'expose_regions' => '0',
            'load_all_panels' => '0',
            'load_all_panels_no_sidebars' => '0',
            'show_window_size' => '0',
            'rebuild_theme_data' => '0',
            'enable_extensions' => '0',
            'enable_font_settings' => '0',
            'enable_heading_settings' => '0',
            'enable_image_settings' => '0',
            'enable_apple_touch_icons' => '0',
            'enable_exclude_css' => '0',
            'enable_custom_css' => '0',
            'enable_context_regions' => '0',
            'enable_float_region_blocks' => '0',
            'enable_markup_overides' => '0',
            'base_font_type' => '',
            'site_name_font_type' => '',
            'site_slogan_font_type' => '',
            'page_title_font_type' => '',
            'node_title_font_type' => '',
            'comment_title_font_type' => '',
            'block_title_font_type' => '',
            'base_font' => 'bf-sss',
            'site_name_font' => 'snf-sl',
            'site_slogan_font' => 'ssf-sl',
            'main_menu_font' => 'mmf-sl',
            'page_title_font' => 'ptf-sl',
            'node_title_font' => 'ntf-sl',
            'comment_title_font' => 'ctf-sl',
            'block_title_font' => 'btf-sl',
            'base_font_size' => '1em',
            'site_name_font_size' => '2em',
            'site_slogan_font_size' => '1.2em',
            'page_title_font_size' => '2em',
            'node_title_font_size' => '1.6em',
            'comment_title_font_size' => '1.4em',
            'block_title_font_size' => '1.4em',
            'h1_font_size' => '2em',
            'h2_font_size' => '1.6em',
            'h3_font_size' => '1.4em',
            'h4_font_size' => '1.2em',
            'h5_font_size' => '1em',
            'h6_font_size' => '1em',
            'page_title_case' => 'ptc-n',
            'page_title_weight' => 'ptw-b',
            'page_title_alignment' => 'pta-l',
            'page_title_shadow' => 'pts-n',
            'node_title_case' => 'ntc-n',
            'node_title_weight' => 'ntw-b',
            'node_title_alignment' => 'nta-l',
            'node_title_shadow' => 'nts-n',
            'comment_title_case' => 'ctc-n',
            'comment_title_weight' => 'ctw-b',
            'comment_title_alignment' => 'cta-l',
            'comment_title_shadow' => 'cts-n',
            'block_title_case' => 'btc-n',
            'block_title_weight' => 'btw-b',
            'block_title_alignment' => 'bta-l',
            'block_title_shadow' => 'bts-n',
            'image_alignment' => 'ia-n',
            'image_alignment_teaser' => 'iat-n',
            'image_caption_full' => '0',
            'image_caption_teaser' => '0',
            'breadcrumb_display' => '1',
            'breadcrumb_home' => '0',
            'breadcrumb_label' => '0',
            'breadcrumb_title' => '0',
            'breadcrumb_separator' => ' &#187; ',
            'horizontal_login_block_enable' => 'on',
            'horizontal_login_block' => '0',
            'login_block_remove_links' => '0',
            'login_block_remove_openid' => '0',
            'global_gutter_width' => '',
            'page_full_width_wrappers' => '0',
            'page_content_type_suggestions' => '0',
            'menu_item_span_elements' => '0',
            'extra_page_classes' => '1',
            'extra_article_classes' => '1',
            'extra_comment_classes' => '1',
            'extra_block_classes' => '1',
            'extra_menu_classes' => '1',
            'extra_item_list_classes' => '1',
            'comments_hide_title' => '0',
            'feed_icons' => '0',
            'unset_block_system_main_front' => '0',
            'unset_menu_titles' => '0',
            'skip_link_target' => '#main-content',
            'adv_search_extra_fieldsets' => '0',
            'rel_author' => '0',
            'mobile_friendly_metatags' => '1',
            'adaptivetheme_meta_viewport' => 'width=device-width, initial-scale=1',
            'adaptivetheme_meta_mobileoptimized' => 'width',
            'adaptivetheme_meta_handheldfriendly' => 'true',
            'adaptivetheme_meta_apple_mobile_web_app_capable' => 'yes',
            'chrome_edge' => '0',
            'clear_type' => '0',
            'apple_touch_icon_enable' => '0',
            'apple_touch_icon_path_l' => 'images/touch-icon-l.png',
            'apple_touch_icon_path_m' => 'images/touch-icon-m.png',
            'apple_touch_icon_path_h' => 'images/touch-icon-h.png',
            'custom_css' => '',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'reach',
          'datestamp' => '1341533049',
        ),
        'project' => 'reach',
        'version' => '7.x-1.x-dev',
      ),
      'albatross_admin_custom' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/themes/albatross_admin/albatross_admin_custom/albatross_admin_custom.info',
        'basename' => 'albatross_admin_custom.info',
        'name' => 'Albatross Admin Custom',
        'info' => 
        array (
          'name' => 'Albatross Admin Custom',
          'description' => 'Site-specific customizations to the Albatross Digital Back-end Theme.',
          'base theme' => 'albatross_admin',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'css/albatross-admin-custom.css',
            ),
          ),
          'version' => NULL,
        ),
        'project' => '',
        'version' => NULL,
      ),
      'albatross_admin' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/themes/albatross_admin/albatross_admin.info',
        'basename' => 'albatross_admin.info',
        'name' => 'Albatross Admin',
        'info' => 
        array (
          'name' => 'Albatross Admin',
          'description' => 'The Albatross Digital Back-end Theme.',
          'base theme' => 'seven',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'scripts' => 
          array (
            0 => 'js/albatross-admin.js',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/albatross-admin.css',
              1 => 'css/albatross-admin-page-specific.css',
            ),
          ),
          'version' => NULL,
        ),
        'project' => '',
        'version' => NULL,
      ),
      'REACH_CORE_STARTER' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/themes/reach_core/REACH_CORE_STARTER/REACH_CORE_STARTER.info',
        'basename' => 'REACH_CORE_STARTER.info',
        'name' => 'REACH_CORE_STARTER',
        'info' => 
        array (
          'name' => 'REACH_CORE_STARTER',
          'description' => '',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'base theme' => 'reach_core',
          'hidden' => true,
          'starterkit' => true,
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'user_first' => 'User Bar First',
            'user_second' => 'User Bar Second',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
            'header_first' => 'Header First',
            'header_second' => 'Header Second',
            'preface_first' => 'Preface First',
            'preface_second' => 'Preface Second',
            'preface_third' => 'Preface Third',
            'postscript_first' => 'Postscript First',
            'postscript_second' => 'Postscript Second',
            'postscript_third' => 'Postscript Third',
            'postscript_fourth' => 'Postscript Fourth',
            'footer_first' => 'Footer First',
            'footer_second' => 'Footer Second',
          ),
          'zones' => 
          array (
            'header' => 'Header',
            'content' => 'Content',
            'footer' => 'Footer',
            'user' => 'User',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'preface' => 'Preface',
            'postscript' => 'Postscript',
          ),
          'scripts' => 
          array (
            0 => 'js/onmediaquery.min.js',
            1 => 'js/REACH_CORE_STARTER.js',
          ),
          'settings' => 
          array (
            'block_everything' => 
            array (
              'site_name' => 'branding',
              'site_slogan' => 'branding',
              'logo' => 'branding',
              'page_title' => 'preface_second',
            ),
            'default_logo_path' => 'logo.png',
            'toggle_logo' => '1',
            'toggle_name' => '1',
            'toggle_slogan' => '1',
            'toggle_node_user_picture' => '0',
            'toggle_comment_user_picture' => '1',
            'toggle_comment_user_verification' => '1',
            'toggle_favicon' => '1',
            'toggle_main_menu' => '0',
            'toggle_secondary_menu' => '0',
            'default_logo' => '1',
            'logo_path' => '',
            'logo_upload' => '',
            'default_favicon' => '1',
            'favicon_upload' => '',
            'alpha_grid' => 'alpha_default',
            'alpha_responsive' => '1',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '0',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 600px)',
            'alpha_layouts_alpha_default_fluid_responsive' => '1',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (max-width: 599px)',
            'alpha_layouts_alpha_default_narrow_responsive' => '0',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_wide_responsive' => '0',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_primary_alpha_fluid' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_weight' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_libraries' => 
            array (
              'omega_mediaqueries' => 'omega_mediaqueries',
              'omega_formalize' => '0',
              'omega_equalheights' => '0',
            ),
            'alpha_css' => 
            array (
              'alpha-reset.css' => '0',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'alpha-alpha.css' => '0',
              'omega-text.css' => '0',
              'global.css' => 'global.css',
              'omega-branding.css' => '0',
              'omega-menu.css' => '0',
              'omega-forms.css' => '0',
              'omega-visuals.css' => '0',
            ),
            'alpha_debug_block_toggle' => '0',
            'alpha_debug_block_active' => '0',
            'alpha_debug_grid_toggle' => '0',
            'alpha_debug_grid_active' => '0',
            'alpha_debug_grid_roles' => 
            array (
              0 => '0',
              1 => '0',
              2 => '0',
              3 => '0',
              4 => '0',
              5 => '0',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '0',
            'alpha_toggle_page_title' => '0',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '0',
            'alpha_hidden_site_name' => '0',
            'alpha_hidden_site_slogan' => '0',
            'alpha_region_dashboard_main_force' => '0',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '0',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '0',
            'alpha_region_dashboard_main_weight' => '-50',
            'alpha_region_dashboard_main_position' => '0',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_dashboard_main_equal_height_element' => '',
            'alpha_region_dashboard_main_equal_height_container' => '0',
            'alpha_region_dashboard_inactive_force' => '0',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '0',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '0',
            'alpha_region_dashboard_inactive_weight' => '-50',
            'alpha_region_dashboard_inactive_position' => '0',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_inactive_equal_height_element' => '',
            'alpha_region_dashboard_inactive_equal_height_container' => '0',
            'alpha_region_dashboard_sidebar_force' => '0',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '0',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '0',
            'alpha_region_dashboard_sidebar_weight' => '-50',
            'alpha_region_dashboard_sidebar_position' => '0',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_sidebar_equal_height_element' => '',
            'alpha_region_dashboard_sidebar_equal_height_container' => '0',
            'alpha_zone_user_wrapper' => '1',
            'alpha_zone_user_force' => '0',
            'alpha_zone_user_order' => '0',
            'alpha_zone_user_section' => 'header',
            'alpha_zone_user_weight' => '1',
            'alpha_zone_user_columns' => '12',
            'alpha_zone_user_primary' => '',
            'alpha_zone_user_css' => '',
            'alpha_zone_user_wrapper_css' => '',
            'alpha_zone_user_equal_height_container' => '0',
            'alpha_region_user_first_force' => '0',
            'alpha_region_user_first_zone' => 'user',
            'alpha_region_user_first_prefix' => '0',
            'alpha_region_user_first_columns' => '9',
            'alpha_region_user_first_suffix' => '0',
            'alpha_region_user_first_weight' => '1',
            'alpha_region_user_first_position' => '0',
            'alpha_region_user_first_css' => '',
            'alpha_region_user_first_equal_height_element' => '0',
            'alpha_region_user_first_equal_height_container' => '0',
            'alpha_region_user_second_force' => '0',
            'alpha_region_user_second_zone' => 'user',
            'alpha_region_user_second_prefix' => '0',
            'alpha_region_user_second_columns' => '3',
            'alpha_region_user_second_suffix' => '0',
            'alpha_region_user_second_weight' => '2',
            'alpha_region_user_second_position' => '0',
            'alpha_region_user_second_css' => '',
            'alpha_region_user_second_equal_height_element' => '0',
            'alpha_region_user_second_equal_height_container' => '0',
            'alpha_zone_branding_wrapper' => '1',
            'alpha_zone_branding_force' => '0',
            'alpha_zone_branding_order' => '0',
            'alpha_zone_branding_section' => 'header',
            'alpha_zone_branding_weight' => '2',
            'alpha_zone_branding_columns' => '12',
            'alpha_zone_branding_primary' => '',
            'alpha_zone_branding_css' => '',
            'alpha_zone_branding_wrapper_css' => '',
            'alpha_zone_branding_equal_height_container' => '0',
            'alpha_region_branding_force' => '1',
            'alpha_region_branding_zone' => 'branding',
            'alpha_region_branding_prefix' => '0',
            'alpha_region_branding_columns' => '12',
            'alpha_region_branding_suffix' => '0',
            'alpha_region_branding_weight' => '1',
            'alpha_region_branding_position' => '0',
            'alpha_region_branding_css' => '',
            'alpha_region_branding_equal_height_element' => '0',
            'alpha_region_branding_equal_height_container' => '0',
            'alpha_zone_menu_wrapper' => '1',
            'alpha_zone_menu_force' => '0',
            'alpha_zone_menu_order' => '0',
            'alpha_zone_menu_section' => 'header',
            'alpha_zone_menu_weight' => '3',
            'alpha_zone_menu_columns' => '12',
            'alpha_zone_menu_primary' => '',
            'alpha_zone_menu_css' => '',
            'alpha_zone_menu_wrapper_css' => '',
            'alpha_zone_menu_equal_height_container' => '0',
            'alpha_region_menu_force' => '1',
            'alpha_region_menu_zone' => 'menu',
            'alpha_region_menu_prefix' => '0',
            'alpha_region_menu_columns' => '12',
            'alpha_region_menu_suffix' => '0',
            'alpha_region_menu_weight' => '1',
            'alpha_region_menu_position' => '0',
            'alpha_region_menu_css' => '',
            'alpha_region_menu_equal_height_element' => '0',
            'alpha_region_menu_equal_height_container' => '0',
            'alpha_zone_header_wrapper' => '1',
            'alpha_zone_header_force' => '0',
            'alpha_zone_header_order' => '0',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '4',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_header_equal_height_container' => '0',
            'alpha_region_header_first_force' => '0',
            'alpha_region_header_first_zone' => 'header',
            'alpha_region_header_first_prefix' => '0',
            'alpha_region_header_first_columns' => '8',
            'alpha_region_header_first_suffix' => '0',
            'alpha_region_header_first_weight' => '1',
            'alpha_region_header_first_position' => '0',
            'alpha_region_header_first_css' => '',
            'alpha_region_header_first_equal_height_element' => '0',
            'alpha_region_header_first_equal_height_container' => '0',
            'alpha_region_header_second_force' => '0',
            'alpha_region_header_second_zone' => 'header',
            'alpha_region_header_second_prefix' => '0',
            'alpha_region_header_second_columns' => '4',
            'alpha_region_header_second_suffix' => '0',
            'alpha_region_header_second_weight' => '2',
            'alpha_region_header_second_position' => '0',
            'alpha_region_header_second_css' => '',
            'alpha_region_header_second_equal_height_element' => '0',
            'alpha_region_header_second_equal_height_container' => '0',
            'alpha_zone_preface_wrapper' => '1',
            'alpha_zone_preface_force' => '0',
            'alpha_zone_preface_order' => '0',
            'alpha_zone_preface_section' => 'content',
            'alpha_zone_preface_weight' => '1',
            'alpha_zone_preface_columns' => '12',
            'alpha_zone_preface_primary' => '',
            'alpha_zone_preface_css' => '',
            'alpha_zone_preface_wrapper_css' => '',
            'alpha_zone_preface_equal_height_container' => '0',
            'alpha_region_preface_first_force' => '0',
            'alpha_region_preface_first_zone' => 'preface',
            'alpha_region_preface_first_prefix' => '0',
            'alpha_region_preface_first_columns' => '12',
            'alpha_region_preface_first_suffix' => '0',
            'alpha_region_preface_first_weight' => '1',
            'alpha_region_preface_first_position' => '0',
            'alpha_region_preface_first_css' => '',
            'alpha_region_preface_first_equal_height_element' => '0',
            'alpha_region_preface_first_equal_height_container' => '0',
            'alpha_region_preface_second_force' => '0',
            'alpha_region_preface_second_zone' => 'preface',
            'alpha_region_preface_second_prefix' => '0',
            'alpha_region_preface_second_columns' => '9',
            'alpha_region_preface_second_suffix' => '0',
            'alpha_region_preface_second_weight' => '2',
            'alpha_region_preface_second_position' => '0',
            'alpha_region_preface_second_css' => '',
            'alpha_region_preface_second_equal_height_element' => '0',
            'alpha_region_preface_second_equal_height_container' => '0',
            'alpha_region_preface_third_force' => '0',
            'alpha_region_preface_third_zone' => 'preface',
            'alpha_region_preface_third_prefix' => '0',
            'alpha_region_preface_third_columns' => '3',
            'alpha_region_preface_third_suffix' => '0',
            'alpha_region_preface_third_weight' => '3',
            'alpha_region_preface_third_position' => '0',
            'alpha_region_preface_third_css' => '',
            'alpha_region_preface_third_equal_height_element' => '0',
            'alpha_region_preface_third_equal_height_container' => '0',
            'alpha_zone_content_wrapper' => '1',
            'alpha_zone_content_force' => '1',
            'alpha_zone_content_order' => '0',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '2',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => 'content',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_content_equal_height_container' => '0',
            'alpha_region_sidebar_first_force' => '0',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '0',
            'alpha_region_sidebar_first_columns' => '2',
            'alpha_region_sidebar_first_suffix' => '0',
            'alpha_region_sidebar_first_weight' => '1',
            'alpha_region_sidebar_first_position' => '0',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_first_equal_height_element' => '0',
            'alpha_region_sidebar_first_equal_height_container' => '0',
            'alpha_region_content_force' => '0',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '0',
            'alpha_region_content_columns' => '7',
            'alpha_region_content_suffix' => '0',
            'alpha_region_content_weight' => '2',
            'alpha_region_content_position' => '0',
            'alpha_region_content_css' => '',
            'alpha_region_content_equal_height_element' => '0',
            'alpha_region_content_equal_height_container' => '0',
            'alpha_region_sidebar_second_force' => '0',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '0',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '0',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_position' => '0',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_sidebar_second_equal_height_element' => '0',
            'alpha_region_sidebar_second_equal_height_container' => '0',
            'alpha_zone_postscript_wrapper' => '1',
            'alpha_zone_postscript_force' => '0',
            'alpha_zone_postscript_order' => '0',
            'alpha_zone_postscript_section' => 'content',
            'alpha_zone_postscript_weight' => '3',
            'alpha_zone_postscript_columns' => '12',
            'alpha_zone_postscript_primary' => '',
            'alpha_zone_postscript_css' => '',
            'alpha_zone_postscript_wrapper_css' => '',
            'alpha_zone_postscript_equal_height_container' => '0',
            'alpha_region_postscript_first_force' => '0',
            'alpha_region_postscript_first_zone' => 'postscript',
            'alpha_region_postscript_first_prefix' => '0',
            'alpha_region_postscript_first_columns' => '12',
            'alpha_region_postscript_first_suffix' => '0',
            'alpha_region_postscript_first_weight' => '1',
            'alpha_region_postscript_first_position' => '0',
            'alpha_region_postscript_first_css' => '',
            'alpha_region_postscript_first_equal_height_element' => '0',
            'alpha_region_postscript_first_equal_height_container' => '0',
            'alpha_region_postscript_second_force' => '0',
            'alpha_region_postscript_second_zone' => 'postscript',
            'alpha_region_postscript_second_prefix' => '0',
            'alpha_region_postscript_second_columns' => '12',
            'alpha_region_postscript_second_suffix' => '0',
            'alpha_region_postscript_second_weight' => '2',
            'alpha_region_postscript_second_position' => '0',
            'alpha_region_postscript_second_css' => '',
            'alpha_region_postscript_second_equal_height_element' => '0',
            'alpha_region_postscript_second_equal_height_container' => '0',
            'alpha_region_postscript_third_force' => '0',
            'alpha_region_postscript_third_zone' => 'postscript',
            'alpha_region_postscript_third_prefix' => '0',
            'alpha_region_postscript_third_columns' => '12',
            'alpha_region_postscript_third_suffix' => '0',
            'alpha_region_postscript_third_weight' => '3',
            'alpha_region_postscript_third_position' => '0',
            'alpha_region_postscript_third_css' => '',
            'alpha_region_postscript_third_equal_height_element' => '0',
            'alpha_region_postscript_third_equal_height_container' => '0',
            'alpha_region_postscript_fourth_force' => '0',
            'alpha_region_postscript_fourth_zone' => 'postscript',
            'alpha_region_postscript_fourth_prefix' => '0',
            'alpha_region_postscript_fourth_columns' => '12',
            'alpha_region_postscript_fourth_suffix' => '0',
            'alpha_region_postscript_fourth_weight' => '4',
            'alpha_region_postscript_fourth_position' => '0',
            'alpha_region_postscript_fourth_css' => '',
            'alpha_region_postscript_fourth_equal_height_element' => '0',
            'alpha_region_postscript_fourth_equal_height_container' => '0',
            'alpha_zone_footer_wrapper' => '1',
            'alpha_zone_footer_force' => '0',
            'alpha_zone_footer_order' => '0',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '1',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_zone_footer_equal_height_container' => '0',
            'alpha_region_footer_first_force' => '0',
            'alpha_region_footer_first_zone' => 'footer',
            'alpha_region_footer_first_prefix' => '0',
            'alpha_region_footer_first_columns' => '12',
            'alpha_region_footer_first_suffix' => '0',
            'alpha_region_footer_first_weight' => '1',
            'alpha_region_footer_first_position' => '0',
            'alpha_region_footer_first_css' => '',
            'alpha_region_footer_first_equal_height_element' => '0',
            'alpha_region_footer_first_equal_height_container' => '0',
            'alpha_region_footer_second_force' => '0',
            'alpha_region_footer_second_zone' => 'footer',
            'alpha_region_footer_second_prefix' => '0',
            'alpha_region_footer_second_columns' => '12',
            'alpha_region_footer_second_suffix' => '0',
            'alpha_region_footer_second_weight' => '2',
            'alpha_region_footer_second_position' => '0',
            'alpha_region_footer_second_css' => '',
            'alpha_region_footer_second_equal_height_element' => '0',
            'alpha_region_footer_second_equal_height_container' => '0',
          ),
          'css' => 
          array (
            'global.css' => 
            array (
              'name' => 'Your custom global styles',
              'description' => 'This file holds all the globally active custom CSS of your theme.',
              'options' => 
              array (
                'weight' => '11',
              ),
            ),
            'pages.css' => 
            array (
              'name' => 'Page styling',
              'description' => 'This file holds styling for page elements.',
              'options' => 
              array (
                'weight' => '12',
              ),
            ),
            'page-specific.css' => 
            array (
              'name' => 'Page Specific',
              'description' => 'This file holds styling for specific pages.',
              'options' => 
              array (
                'weight' => '13',
              ),
            ),
          ),
          'stylesheets-conditional' => 
          array (
            'lte IE 8' => 
            array (
              'all' => 
              array (
                0 => 'css/ie8.css',
              ),
            ),
            'IE 9' => 
            array (
              'all' => 
              array (
                0 => 'css/ie9.css',
              ),
            ),
          ),
          'version' => '1.x',
        ),
        'project' => '',
        'version' => '1.x',
      ),
      'reach_core' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/themes/reach_core/reach_core.info',
        'basename' => 'reach_core.info',
        'name' => 'reach_core',
        'info' => 
        array (
          'name' => 'reach_core',
          'description' => '',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'base theme' => 'omega',
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'user_first' => 'User Bar First',
            'user_second' => 'User Bar Second',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
            'header_first' => 'Header First',
            'header_second' => 'Header Second',
            'preface_first' => 'Preface First',
            'preface_second' => 'Preface Second',
            'preface_third' => 'Preface Third',
            'postscript_first' => 'Postscript First',
            'postscript_second' => 'Postscript Second',
            'postscript_third' => 'Postscript Third',
            'postscript_fourth' => 'Postscript Fourth',
            'footer_first' => 'Footer First',
            'footer_second' => 'Footer Second',
          ),
          'zones' => 
          array (
            'header' => 'Header',
            'content' => 'Content',
            'footer' => 'Footer',
            'user' => 'User',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'preface' => 'Preface',
            'postscript' => 'Postscript',
          ),
          'scripts' => 
          array (
            0 => 'js/reach_core.js',
          ),
          'settings' => 
          array (
            'block_everything' => 
            array (
              'site_name' => 'branding',
              'site_slogan' => 'branding',
              'logo' => 'branding',
              'page_title' => 'preface_second',
            ),
            'default_logo_path' => 'logo.png',
            'toggle_logo' => '1',
            'toggle_name' => '1',
            'toggle_slogan' => '1',
            'toggle_node_user_picture' => '0',
            'toggle_comment_user_picture' => '1',
            'toggle_comment_user_verification' => '1',
            'toggle_favicon' => '1',
            'toggle_main_menu' => '0',
            'toggle_secondary_menu' => '0',
            'default_logo' => '1',
            'logo_path' => '',
            'logo_upload' => '',
            'default_favicon' => '1',
            'favicon_path' => '',
            'favicon_upload' => '',
            'alpha_grid' => 'alpha_default',
            'alpha_responsive' => '0',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '0',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 600px)',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 600px)',
            'alpha_layouts_alpha_default_narrow_responsive' => '0',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_wide_responsive' => '0',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_primary_alpha_fluid' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_weight' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_libraries' => 
            array (
              'omega_mediaqueries' => 'omega_mediaqueries',
              'omega_formalize' => '0',
              'omega_equalheights' => '0',
            ),
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'omega-text.css' => 'omega-text.css',
              'global.css' => '0',
              'omega-branding.css' => '0',
              'omega-menu.css' => '0',
              'omega-forms.css' => '0',
              'omega-visuals.css' => '0',
            ),
            'alpha_debug_block_toggle' => '0',
            'alpha_debug_block_active' => '0',
            'alpha_debug_grid_toggle' => '0',
            'alpha_debug_grid_active' => '0',
            'alpha_debug_grid_roles' => 
            array (
              0 => '1',
              1 => '2',
              2 => '0',
              3 => '0',
              4 => '0',
              5 => '0',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '0',
            'alpha_toggle_page_title' => '0',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '0',
            'alpha_hidden_site_name' => '0',
            'alpha_hidden_site_slogan' => '0',
            'alpha_region_dashboard_main_force' => '0',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '0',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '0',
            'alpha_region_dashboard_main_weight' => '-50',
            'alpha_region_dashboard_main_position' => '0',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_dashboard_main_equal_height_element' => '',
            'alpha_region_dashboard_main_equal_height_container' => '0',
            'alpha_region_dashboard_inactive_force' => '0',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '0',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '0',
            'alpha_region_dashboard_inactive_weight' => '-50',
            'alpha_region_dashboard_inactive_position' => '0',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_inactive_equal_height_element' => '',
            'alpha_region_dashboard_inactive_equal_height_container' => '0',
            'alpha_region_dashboard_sidebar_force' => '0',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '0',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '0',
            'alpha_region_dashboard_sidebar_weight' => '-50',
            'alpha_region_dashboard_sidebar_position' => '0',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_sidebar_equal_height_element' => '',
            'alpha_region_dashboard_sidebar_equal_height_container' => '0',
            'alpha_zone_user_wrapper' => '1',
            'alpha_zone_user_force' => '0',
            'alpha_zone_user_order' => '0',
            'alpha_zone_user_section' => 'header',
            'alpha_zone_user_weight' => '1',
            'alpha_zone_user_columns' => '12',
            'alpha_zone_user_primary' => '',
            'alpha_zone_user_css' => '',
            'alpha_zone_user_wrapper_css' => '',
            'alpha_zone_user_equal_height_container' => '0',
            'alpha_region_user_first_force' => '0',
            'alpha_region_user_first_zone' => 'user',
            'alpha_region_user_first_prefix' => '0',
            'alpha_region_user_first_columns' => '9',
            'alpha_region_user_first_suffix' => '0',
            'alpha_region_user_first_weight' => '1',
            'alpha_region_user_first_position' => '0',
            'alpha_region_user_first_css' => '',
            'alpha_region_user_first_equal_height_element' => '0',
            'alpha_region_user_first_equal_height_container' => '0',
            'alpha_region_user_second_force' => '0',
            'alpha_region_user_second_zone' => 'user',
            'alpha_region_user_second_prefix' => '0',
            'alpha_region_user_second_columns' => '3',
            'alpha_region_user_second_suffix' => '0',
            'alpha_region_user_second_weight' => '2',
            'alpha_region_user_second_position' => '0',
            'alpha_region_user_second_css' => '',
            'alpha_region_user_second_equal_height_element' => '0',
            'alpha_region_user_second_equal_height_container' => '0',
            'alpha_zone_branding_wrapper' => '1',
            'alpha_zone_branding_force' => '0',
            'alpha_zone_branding_order' => '0',
            'alpha_zone_branding_section' => 'header',
            'alpha_zone_branding_weight' => '2',
            'alpha_zone_branding_columns' => '12',
            'alpha_zone_branding_primary' => '',
            'alpha_zone_branding_css' => '',
            'alpha_zone_branding_wrapper_css' => '',
            'alpha_zone_branding_equal_height_container' => '0',
            'alpha_region_branding_force' => '1',
            'alpha_region_branding_zone' => 'branding',
            'alpha_region_branding_prefix' => '0',
            'alpha_region_branding_columns' => '12',
            'alpha_region_branding_suffix' => '0',
            'alpha_region_branding_weight' => '1',
            'alpha_region_branding_position' => '0',
            'alpha_region_branding_css' => '',
            'alpha_region_branding_equal_height_element' => '0',
            'alpha_region_branding_equal_height_container' => '0',
            'alpha_zone_menu_wrapper' => '1',
            'alpha_zone_menu_force' => '0',
            'alpha_zone_menu_order' => '0',
            'alpha_zone_menu_section' => 'header',
            'alpha_zone_menu_weight' => '3',
            'alpha_zone_menu_columns' => '12',
            'alpha_zone_menu_primary' => '',
            'alpha_zone_menu_css' => '',
            'alpha_zone_menu_wrapper_css' => '',
            'alpha_zone_menu_equal_height_container' => '0',
            'alpha_region_menu_force' => '1',
            'alpha_region_menu_zone' => 'menu',
            'alpha_region_menu_prefix' => '0',
            'alpha_region_menu_columns' => '12',
            'alpha_region_menu_suffix' => '0',
            'alpha_region_menu_weight' => '1',
            'alpha_region_menu_position' => '0',
            'alpha_region_menu_css' => '',
            'alpha_region_menu_equal_height_element' => '0',
            'alpha_region_menu_equal_height_container' => '0',
            'alpha_zone_header_wrapper' => '1',
            'alpha_zone_header_force' => '0',
            'alpha_zone_header_order' => '0',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '4',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_header_equal_height_container' => '0',
            'alpha_region_header_first_force' => '0',
            'alpha_region_header_first_zone' => 'header',
            'alpha_region_header_first_prefix' => '0',
            'alpha_region_header_first_columns' => '8',
            'alpha_region_header_first_suffix' => '0',
            'alpha_region_header_first_weight' => '1',
            'alpha_region_header_first_position' => '0',
            'alpha_region_header_first_css' => '',
            'alpha_region_header_first_equal_height_element' => '0',
            'alpha_region_header_first_equal_height_container' => '0',
            'alpha_region_header_second_force' => '0',
            'alpha_region_header_second_zone' => 'header',
            'alpha_region_header_second_prefix' => '0',
            'alpha_region_header_second_columns' => '4',
            'alpha_region_header_second_suffix' => '0',
            'alpha_region_header_second_weight' => '2',
            'alpha_region_header_second_position' => '0',
            'alpha_region_header_second_css' => '',
            'alpha_region_header_second_equal_height_element' => '0',
            'alpha_region_header_second_equal_height_container' => '0',
            'alpha_zone_preface_wrapper' => '1',
            'alpha_zone_preface_force' => '0',
            'alpha_zone_preface_order' => '0',
            'alpha_zone_preface_section' => 'content',
            'alpha_zone_preface_weight' => '1',
            'alpha_zone_preface_columns' => '12',
            'alpha_zone_preface_primary' => '',
            'alpha_zone_preface_css' => '',
            'alpha_zone_preface_wrapper_css' => '',
            'alpha_zone_preface_equal_height_container' => '0',
            'alpha_region_preface_first_force' => '0',
            'alpha_region_preface_first_zone' => 'preface',
            'alpha_region_preface_first_prefix' => '0',
            'alpha_region_preface_first_columns' => '12',
            'alpha_region_preface_first_suffix' => '0',
            'alpha_region_preface_first_weight' => '1',
            'alpha_region_preface_first_position' => '0',
            'alpha_region_preface_first_css' => '',
            'alpha_region_preface_first_equal_height_element' => '0',
            'alpha_region_preface_first_equal_height_container' => '0',
            'alpha_region_preface_second_force' => '0',
            'alpha_region_preface_second_zone' => 'preface',
            'alpha_region_preface_second_prefix' => '0',
            'alpha_region_preface_second_columns' => '9',
            'alpha_region_preface_second_suffix' => '0',
            'alpha_region_preface_second_weight' => '2',
            'alpha_region_preface_second_position' => '0',
            'alpha_region_preface_second_css' => '',
            'alpha_region_preface_second_equal_height_element' => '0',
            'alpha_region_preface_second_equal_height_container' => '0',
            'alpha_region_preface_third_force' => '0',
            'alpha_region_preface_third_zone' => 'preface',
            'alpha_region_preface_third_prefix' => '0',
            'alpha_region_preface_third_columns' => '3',
            'alpha_region_preface_third_suffix' => '0',
            'alpha_region_preface_third_weight' => '3',
            'alpha_region_preface_third_position' => '0',
            'alpha_region_preface_third_css' => '',
            'alpha_region_preface_third_equal_height_element' => '0',
            'alpha_region_preface_third_equal_height_container' => '0',
            'alpha_zone_content_wrapper' => '1',
            'alpha_zone_content_force' => '1',
            'alpha_zone_content_order' => '0',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '2',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => 'content',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_content_equal_height_container' => '0',
            'alpha_region_sidebar_first_force' => '0',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '0',
            'alpha_region_sidebar_first_columns' => '2',
            'alpha_region_sidebar_first_suffix' => '0',
            'alpha_region_sidebar_first_weight' => '1',
            'alpha_region_sidebar_first_position' => '0',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_first_equal_height_element' => '0',
            'alpha_region_sidebar_first_equal_height_container' => '0',
            'alpha_region_content_force' => '0',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '0',
            'alpha_region_content_columns' => '7',
            'alpha_region_content_suffix' => '0',
            'alpha_region_content_weight' => '2',
            'alpha_region_content_position' => '0',
            'alpha_region_content_css' => '',
            'alpha_region_content_equal_height_element' => '0',
            'alpha_region_content_equal_height_container' => '0',
            'alpha_region_sidebar_second_force' => '0',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '0',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '0',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_position' => '0',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_sidebar_second_equal_height_element' => '0',
            'alpha_region_sidebar_second_equal_height_container' => '0',
            'alpha_zone_postscript_wrapper' => '1',
            'alpha_zone_postscript_force' => '0',
            'alpha_zone_postscript_order' => '0',
            'alpha_zone_postscript_section' => 'content',
            'alpha_zone_postscript_weight' => '3',
            'alpha_zone_postscript_columns' => '12',
            'alpha_zone_postscript_primary' => '',
            'alpha_zone_postscript_css' => '',
            'alpha_zone_postscript_wrapper_css' => '',
            'alpha_zone_postscript_equal_height_container' => '0',
            'alpha_region_postscript_first_force' => '0',
            'alpha_region_postscript_first_zone' => 'postscript',
            'alpha_region_postscript_first_prefix' => '0',
            'alpha_region_postscript_first_columns' => '12',
            'alpha_region_postscript_first_suffix' => '0',
            'alpha_region_postscript_first_weight' => '1',
            'alpha_region_postscript_first_position' => '0',
            'alpha_region_postscript_first_css' => '',
            'alpha_region_postscript_first_equal_height_element' => '0',
            'alpha_region_postscript_first_equal_height_container' => '0',
            'alpha_region_postscript_second_force' => '0',
            'alpha_region_postscript_second_zone' => 'postscript',
            'alpha_region_postscript_second_prefix' => '0',
            'alpha_region_postscript_second_columns' => '12',
            'alpha_region_postscript_second_suffix' => '0',
            'alpha_region_postscript_second_weight' => '2',
            'alpha_region_postscript_second_position' => '0',
            'alpha_region_postscript_second_css' => '',
            'alpha_region_postscript_second_equal_height_element' => '0',
            'alpha_region_postscript_second_equal_height_container' => '0',
            'alpha_region_postscript_third_force' => '0',
            'alpha_region_postscript_third_zone' => 'postscript',
            'alpha_region_postscript_third_prefix' => '0',
            'alpha_region_postscript_third_columns' => '12',
            'alpha_region_postscript_third_suffix' => '0',
            'alpha_region_postscript_third_weight' => '3',
            'alpha_region_postscript_third_position' => '0',
            'alpha_region_postscript_third_css' => '',
            'alpha_region_postscript_third_equal_height_element' => '0',
            'alpha_region_postscript_third_equal_height_container' => '0',
            'alpha_region_postscript_fourth_force' => '0',
            'alpha_region_postscript_fourth_zone' => 'postscript',
            'alpha_region_postscript_fourth_prefix' => '0',
            'alpha_region_postscript_fourth_columns' => '12',
            'alpha_region_postscript_fourth_suffix' => '0',
            'alpha_region_postscript_fourth_weight' => '4',
            'alpha_region_postscript_fourth_position' => '0',
            'alpha_region_postscript_fourth_css' => '',
            'alpha_region_postscript_fourth_equal_height_element' => '0',
            'alpha_region_postscript_fourth_equal_height_container' => '0',
            'alpha_zone_footer_wrapper' => '1',
            'alpha_zone_footer_force' => '0',
            'alpha_zone_footer_order' => '0',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '1',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_zone_footer_equal_height_container' => '0',
            'alpha_region_footer_first_force' => '0',
            'alpha_region_footer_first_zone' => 'footer',
            'alpha_region_footer_first_prefix' => '0',
            'alpha_region_footer_first_columns' => '12',
            'alpha_region_footer_first_suffix' => '0',
            'alpha_region_footer_first_weight' => '1',
            'alpha_region_footer_first_position' => '0',
            'alpha_region_footer_first_css' => '',
            'alpha_region_footer_first_equal_height_element' => '0',
            'alpha_region_footer_first_equal_height_container' => '0',
            'alpha_region_footer_second_force' => '0',
            'alpha_region_footer_second_zone' => 'footer',
            'alpha_region_footer_second_prefix' => '0',
            'alpha_region_footer_second_columns' => '12',
            'alpha_region_footer_second_suffix' => '0',
            'alpha_region_footer_second_weight' => '2',
            'alpha_region_footer_second_position' => '0',
            'alpha_region_footer_second_css' => '',
            'alpha_region_footer_second_equal_height_element' => '0',
            'alpha_region_footer_second_equal_height_container' => '0',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => '../omega/alpha/css/alpha-reset.css',
              1 => '../omega/omega/css/omega-text.css',
              2 => 'css/reach_core.css',
            ),
          ),
          'version' => '1.x',
        ),
        'project' => '',
        'version' => '1.x',
      ),
      'STARTERKIT' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/themes/albatross/STARTERKIT/STARTERKIT.info',
        'basename' => 'STARTERKIT.info',
        'name' => 'STARTERKIT Custom Theme',
        'info' => 
        array (
          'name' => 'STARTERKIT Custom Theme',
          'description' => 'By Albatross Digital',
          'screenshot' => 'images/screenshot.gif',
          'core' => '7.x',
          'project' => 'basic',
          'base theme' => 'albatross',
          'engine' => 'phptemplate',
          'regions' => 
          array (
            'page_top' => 'Page top',
            'header' => 'Header',
            'highlight' => 'Highlight',
            'help' => 'Help',
            'content' => 'Content',
            'content_top' => 'Content Top',
            'sidebar_first' => 'First sidebar',
            'sidebar_second' => 'Second sidebar',
            'content_bottom' => 'Content Bottom',
            'navigation' => 'Navigation bar',
            'footer' => 'Footer',
            'page_bottom' => 'Page bottom',
            'closure' => 'Closure',
          ),
          'layouts' => 
          array (
            'default' => 
            array (
              'name' => 'Default',
              'description' => 'Simple three column page.',
              'regions' => 
              array (
                0 => 'page_top',
                1 => 'header',
                2 => 'highlight',
                3 => 'help',
                4 => 'content',
                5 => 'content_top',
                6 => 'sidebar_first',
                7 => 'sidebar_second',
                8 => 'navigation',
                9 => 'footer',
                10 => 'page_bottom',
                11 => 'closure',
              ),
            ),
            '2_col_left' => 
            array (
              'template' => '../../../all/themes/albatross/templates/page',
              'name' => '2_col_left',
              'description' => 'Simple two column page, displays left (first) sidebar only.',
              'regions' => 
              array (
                0 => 'page_top',
                1 => 'header',
                2 => 'highlight',
                3 => 'help',
                4 => 'content',
                5 => 'content_top',
                6 => 'sidebar_first',
                7 => 'navigation',
                8 => 'footer',
                9 => 'page_bottom',
                10 => 'closure',
              ),
            ),
            '2_col_right' => 
            array (
              'name' => '2_col_right',
              'description' => 'Simple two column page, displays right (second) sidebar only.',
              'regions' => 
              array (
                0 => 'page_top',
                1 => 'header',
                2 => 'highlight',
                3 => 'help',
                4 => 'content',
                5 => 'content_top',
                6 => 'sidebar_second',
                7 => 'navigation',
                8 => 'footer',
                9 => 'page_bottom',
                10 => 'closure',
              ),
            ),
            '1_column' => 
            array (
              'name' => '1_column',
              'description' => 'Simple 1 column page.',
              'regions' => 
              array (
                0 => 'page_top',
                1 => 'header',
                2 => 'highlight',
                3 => 'help',
                4 => 'content',
                5 => 'content_top',
                6 => 'navigation',
                7 => 'footer',
                8 => 'page_bottom',
                9 => 'closure',
              ),
            ),
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'search',
            6 => 'favicon',
            7 => 'main_menu',
            8 => 'secondary_menu',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/page.css',
              3 => 'css/page-specific.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/script.js',
          ),
          'settings' => 
          array (
            'toggle_main_menu' => '0',
            'toggle_secondary_menu' => '0',
            'STARTERKIT_tabs' => '0',
            'STARTERKIT_breadcrumb_separator' => '»',
            'wireframe_mode' => '0',
            'clear_registry' => '0',
          ),
          'version' => NULL,
        ),
        'project' => 'basic',
        'version' => NULL,
      ),
      'albatross' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/themes/albatross/albatross.info',
        'basename' => 'albatross.info',
        'name' => 'Albatross Base Theme',
        'info' => 
        array (
          'name' => 'Albatross Base Theme',
          'description' => 'Sets up some default theme styles for Albatross Digital',
          'screenshot' => 'images/screenshot.gif',
          'core' => '7.x',
          'project' => 'basic',
          'engine' => 'phptemplate',
          'regions' => 
          array (
            'page_top' => 'Page top',
            'header' => 'Header',
            'highlight' => 'Highlight',
            'help' => 'Help',
            'content' => 'Content',
            'content_top' => 'Content Top',
            'sidebar_first' => 'First sidebar',
            'sidebar_second' => 'Second sidebar',
            'navigation' => 'Navigation bar',
            'footer' => 'Footer',
            'page_bottom' => 'Page bottom',
            'closure' => 'Closure',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'name',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'search',
            6 => 'favicon',
            7 => 'main_menu',
            8 => 'secondary_menu',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/default.css',
              1 => 'css/layout.css',
              2 => 'css/style.css',
              3 => 'css/albatross.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
              1 => 'css/tabs.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/albatross.js',
          ),
          'settings' => 
          array (
            'basic_breadcrumb_separator' => '»',
            'wireframe_mode' => '0',
            'clear_registry' => '0',
          ),
          'version' => '7.x-2.0-rc3',
          'datestamp' => '1297878443',
        ),
        'project' => 'basic',
        'version' => '7.x-2.0-rc3',
      ),
      'starterkit_omega_xhtml' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/themes/omega/starterkits/omega-xhtml/starterkit_omega_xhtml.info',
        'basename' => 'starterkit_omega_xhtml.info',
        'name' => 'Omega XHTML Starter Kit',
        'info' => 
        array (
          'name' => 'Omega XHTML Starter Kit',
          'description' => 'Default XHTML starterkit for <a href="http://drupal.org/project/omega">Omega</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'base theme' => 'omega',
          'hidden' => true,
          'starterkit' => true,
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'user_first' => 'User Bar First',
            'user_second' => 'User Bar Second',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
            'header_first' => 'Header First',
            'header_second' => 'Header Second',
            'preface_first' => 'Preface First',
            'preface_second' => 'Preface Second',
            'preface_third' => 'Preface Third',
            'postscript_first' => 'Postscript First',
            'postscript_second' => 'Postscript Second',
            'postscript_third' => 'Postscript Third',
            'postscript_fourth' => 'Postscript Fourth',
            'footer_first' => 'Footer First',
            'footer_second' => 'Footer Second',
          ),
          'zones' => 
          array (
            'user' => 'User',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'header' => 'Header',
            'preface' => 'Preface',
            'content' => 'Content',
            'postscript' => 'Postscript',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'global.css' => 
            array (
              'name' => 'Your custom global styles',
              'description' => 'This file holds all the globally active custom CSS of your theme.',
              'options' => 
              array (
                'weight' => '10',
              ),
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_libraries' => 
            array (
              'omega_formalize' => 'omega_formalize',
              'omega_equalheights' => '',
              'omega_mediaqueries' => 'omega_mediaqueries',
            ),
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'omega-text.css' => 'omega-text.css',
              'omega-branding.css' => 'omega-branding.css',
              'omega-menu.css' => 'omega-menu.css',
              'omega-forms.css' => 'omega-forms.css',
              'omega-visuals.css' => 'omega-visuals.css',
              'global.css' => 'global.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_user_equal_height_container' => '',
            'alpha_zone_user_wrapper' => '1',
            'alpha_zone_user_force' => '',
            'alpha_zone_user_section' => 'header',
            'alpha_zone_user_weight' => '1',
            'alpha_zone_user_columns' => '12',
            'alpha_zone_user_primary' => '',
            'alpha_zone_user_css' => '',
            'alpha_zone_user_wrapper_css' => '',
            'alpha_zone_branding_equal_height_container' => '',
            'alpha_zone_branding_wrapper' => '1',
            'alpha_zone_branding_force' => '',
            'alpha_zone_branding_section' => 'header',
            'alpha_zone_branding_weight' => '2',
            'alpha_zone_branding_columns' => '12',
            'alpha_zone_branding_primary' => '',
            'alpha_zone_branding_css' => '',
            'alpha_zone_branding_wrapper_css' => '',
            'alpha_zone_menu_equal_height_container' => '',
            'alpha_zone_menu_wrapper' => '1',
            'alpha_zone_menu_force' => '',
            'alpha_zone_menu_section' => 'header',
            'alpha_zone_menu_weight' => '3',
            'alpha_zone_menu_columns' => '12',
            'alpha_zone_menu_primary' => '',
            'alpha_zone_menu_css' => '',
            'alpha_zone_menu_wrapper_css' => '',
            'alpha_zone_header_equal_height_container' => '',
            'alpha_zone_header_wrapper' => '1',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '4',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_preface_equal_height_container' => '',
            'alpha_zone_preface_wrapper' => '1',
            'alpha_zone_preface_force' => '',
            'alpha_zone_preface_section' => 'content',
            'alpha_zone_preface_weight' => '1',
            'alpha_zone_preface_columns' => '12',
            'alpha_zone_preface_primary' => '',
            'alpha_zone_preface_css' => '',
            'alpha_zone_preface_wrapper_css' => '',
            'alpha_zone_content_equal_height_container' => '',
            'alpha_zone_content_wrapper' => '1',
            'alpha_zone_content_force' => '1',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '2',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => 'content',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_postscript_equal_height_container' => '',
            'alpha_zone_postscript_wrapper' => '1',
            'alpha_zone_postscript_force' => '',
            'alpha_zone_postscript_section' => 'content',
            'alpha_zone_postscript_weight' => '3',
            'alpha_zone_postscript_columns' => '12',
            'alpha_zone_postscript_primary' => '',
            'alpha_zone_postscript_css' => '',
            'alpha_zone_postscript_wrapper_css' => '',
            'alpha_zone_footer_equal_height_container' => '',
            'alpha_zone_footer_wrapper' => '1',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '1',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_sidebar_equal_height_container' => '',
            'alpha_region_dashboard_sidebar_equal_height_element' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '-50',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_inactive_equal_height_container' => '',
            'alpha_region_dashboard_inactive_equal_height_element' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '-50',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_main_equal_height_container' => '',
            'alpha_region_dashboard_main_equal_height_element' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '-50',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_user_first_equal_height_container' => '',
            'alpha_region_user_first_equal_height_element' => '',
            'alpha_region_user_first_force' => '',
            'alpha_region_user_first_zone' => 'user',
            'alpha_region_user_first_prefix' => '',
            'alpha_region_user_first_columns' => '8',
            'alpha_region_user_first_suffix' => '',
            'alpha_region_user_first_weight' => '1',
            'alpha_region_user_first_css' => '',
            'alpha_region_user_second_equal_height_container' => '',
            'alpha_region_user_second_equal_height_element' => '',
            'alpha_region_user_second_force' => '',
            'alpha_region_user_second_zone' => 'user',
            'alpha_region_user_second_prefix' => '',
            'alpha_region_user_second_columns' => '4',
            'alpha_region_user_second_suffix' => '',
            'alpha_region_user_second_weight' => '2',
            'alpha_region_user_second_css' => '',
            'alpha_region_branding_equal_height_container' => '',
            'alpha_region_branding_equal_height_element' => '',
            'alpha_region_branding_force' => '1',
            'alpha_region_branding_zone' => 'branding',
            'alpha_region_branding_prefix' => '',
            'alpha_region_branding_columns' => '12',
            'alpha_region_branding_suffix' => '',
            'alpha_region_branding_weight' => '1',
            'alpha_region_branding_css' => '',
            'alpha_region_menu_equal_height_container' => '',
            'alpha_region_menu_equal_height_element' => '',
            'alpha_region_menu_force' => '1',
            'alpha_region_menu_zone' => 'menu',
            'alpha_region_menu_prefix' => '',
            'alpha_region_menu_columns' => '12',
            'alpha_region_menu_suffix' => '',
            'alpha_region_menu_weight' => '1',
            'alpha_region_menu_css' => '',
            'alpha_region_header_first_equal_height_container' => '',
            'alpha_region_header_first_equal_height_element' => '',
            'alpha_region_header_first_force' => '',
            'alpha_region_header_first_zone' => 'header',
            'alpha_region_header_first_prefix' => '',
            'alpha_region_header_first_columns' => '6',
            'alpha_region_header_first_suffix' => '',
            'alpha_region_header_first_weight' => '1',
            'alpha_region_header_first_css' => '',
            'alpha_region_header_second_equal_height_container' => '',
            'alpha_region_header_second_equal_height_element' => '',
            'alpha_region_header_second_force' => '',
            'alpha_region_header_second_zone' => 'header',
            'alpha_region_header_second_prefix' => '',
            'alpha_region_header_second_columns' => '6',
            'alpha_region_header_second_suffix' => '',
            'alpha_region_header_second_weight' => '2',
            'alpha_region_header_second_css' => '',
            'alpha_region_preface_first_equal_height_container' => '',
            'alpha_region_preface_first_equal_height_element' => '',
            'alpha_region_preface_first_force' => '',
            'alpha_region_preface_first_zone' => 'preface',
            'alpha_region_preface_first_prefix' => '',
            'alpha_region_preface_first_columns' => '4',
            'alpha_region_preface_first_suffix' => '',
            'alpha_region_preface_first_weight' => '1',
            'alpha_region_preface_first_css' => '',
            'alpha_region_preface_second_equal_height_container' => '',
            'alpha_region_preface_second_equal_height_element' => '',
            'alpha_region_preface_second_force' => '',
            'alpha_region_preface_second_zone' => 'preface',
            'alpha_region_preface_second_prefix' => '',
            'alpha_region_preface_second_columns' => '4',
            'alpha_region_preface_second_suffix' => '',
            'alpha_region_preface_second_weight' => '2',
            'alpha_region_preface_second_css' => '',
            'alpha_region_preface_third_equal_height_container' => '',
            'alpha_region_preface_third_equal_height_element' => '',
            'alpha_region_preface_third_force' => '',
            'alpha_region_preface_third_zone' => 'preface',
            'alpha_region_preface_third_prefix' => '',
            'alpha_region_preface_third_columns' => '4',
            'alpha_region_preface_third_suffix' => '',
            'alpha_region_preface_third_weight' => '3',
            'alpha_region_preface_third_css' => '',
            'alpha_region_content_equal_height_container' => '',
            'alpha_region_content_equal_height_element' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '2',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_equal_height_container' => '',
            'alpha_region_sidebar_first_equal_height_element' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '1',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_equal_height_container' => '',
            'alpha_region_sidebar_second_equal_height_element' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_postscript_first_equal_height_container' => '',
            'alpha_region_postscript_first_equal_height_element' => '',
            'alpha_region_postscript_first_force' => '',
            'alpha_region_postscript_first_zone' => 'postscript',
            'alpha_region_postscript_first_prefix' => '',
            'alpha_region_postscript_first_columns' => '3',
            'alpha_region_postscript_first_suffix' => '',
            'alpha_region_postscript_first_weight' => '1',
            'alpha_region_postscript_first_css' => '',
            'alpha_region_postscript_second_equal_height_container' => '',
            'alpha_region_postscript_second_equal_height_element' => '',
            'alpha_region_postscript_second_force' => '',
            'alpha_region_postscript_second_zone' => 'postscript',
            'alpha_region_postscript_second_prefix' => '',
            'alpha_region_postscript_second_columns' => '3',
            'alpha_region_postscript_second_suffix' => '',
            'alpha_region_postscript_second_weight' => '2',
            'alpha_region_postscript_second_css' => '',
            'alpha_region_postscript_third_equal_height_container' => '',
            'alpha_region_postscript_third_equal_height_element' => '',
            'alpha_region_postscript_third_force' => '',
            'alpha_region_postscript_third_zone' => 'postscript',
            'alpha_region_postscript_third_prefix' => '',
            'alpha_region_postscript_third_columns' => '3',
            'alpha_region_postscript_third_suffix' => '',
            'alpha_region_postscript_third_weight' => '3',
            'alpha_region_postscript_third_css' => '',
            'alpha_region_postscript_fourth_equal_height_container' => '',
            'alpha_region_postscript_fourth_equal_height_element' => '',
            'alpha_region_postscript_fourth_force' => '',
            'alpha_region_postscript_fourth_zone' => 'postscript',
            'alpha_region_postscript_fourth_prefix' => '',
            'alpha_region_postscript_fourth_columns' => '3',
            'alpha_region_postscript_fourth_suffix' => '',
            'alpha_region_postscript_fourth_weight' => '4',
            'alpha_region_postscript_fourth_css' => '',
            'alpha_region_footer_first_equal_height_container' => '',
            'alpha_region_footer_first_equal_height_element' => '',
            'alpha_region_footer_first_force' => '',
            'alpha_region_footer_first_zone' => 'footer',
            'alpha_region_footer_first_prefix' => '',
            'alpha_region_footer_first_columns' => '12',
            'alpha_region_footer_first_suffix' => '',
            'alpha_region_footer_first_weight' => '1',
            'alpha_region_footer_first_css' => '',
            'alpha_region_footer_second_equal_height_container' => '',
            'alpha_region_footer_second_equal_height_element' => '',
            'alpha_region_footer_second_force' => '',
            'alpha_region_footer_second_zone' => 'footer',
            'alpha_region_footer_second_prefix' => '',
            'alpha_region_footer_second_columns' => '12',
            'alpha_region_footer_second_suffix' => '',
            'alpha_region_footer_second_weight' => '2',
            'alpha_region_footer_second_css' => '',
          ),
          'version' => '7.x-3.1',
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
      'starterkit_alpha_xhtml' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/themes/omega/starterkits/alpha-xhtml/starterkit_alpha_xhtml.info',
        'basename' => 'starterkit_alpha_xhtml.info',
        'name' => 'Alpha XHTML Starterkit',
        'info' => 
        array (
          'name' => 'Alpha XHTML Starterkit',
          'description' => 'Default starterkit for <a href="http://drupal.org/project/omega">Alpha</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'base theme' => 'alpha',
          'hidden' => true,
          'starterkit' => true,
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
          ),
          'zones' => 
          array (
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'global.css' => 
            array (
              'name' => 'Your custom global styles',
              'description' => 'This file holds all the globally active custom CSS of your theme.',
              'options' => 
              array (
                'weight' => '10',
              ),
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'global.css' => 'global.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_header_wrapper' => '',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_order' => '0',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_content_wrapper' => '',
            'alpha_zone_content_force' => '',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => '',
            'alpha_zone_content_order' => '0',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_footer_wrapper' => '',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_order' => '0',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '',
            'alpha_region_dashboard_inactive_position' => '',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '',
            'alpha_region_dashboard_sidebar_position' => '',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '',
            'alpha_region_dashboard_main_position' => '',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_header_force' => '',
            'alpha_region_header_zone' => 'header',
            'alpha_region_header_prefix' => '',
            'alpha_region_header_columns' => '12',
            'alpha_region_header_suffix' => '',
            'alpha_region_header_weight' => '',
            'alpha_region_header_position' => '1',
            'alpha_region_header_css' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '1',
            'alpha_region_content_position' => '2',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '2',
            'alpha_region_sidebar_first_position' => '1',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_position' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_footer_force' => '',
            'alpha_region_footer_zone' => 'footer',
            'alpha_region_footer_prefix' => '',
            'alpha_region_footer_columns' => '12',
            'alpha_region_footer_suffix' => '',
            'alpha_region_footer_weight' => '1',
            'alpha_region_footer_css' => '',
          ),
          'version' => '7.x-3.1',
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
      'starterkit_omega_html5' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/themes/omega/starterkits/omega-html5/starterkit_omega_html5.info',
        'basename' => 'starterkit_omega_html5.info',
        'name' => 'Omega HTML5 Starterkit',
        'info' => 
        array (
          'name' => 'Omega HTML5 Starterkit',
          'description' => 'Default starterkit for <a href="http://drupal.org/project/omega">Omega</a>. You should not directly edit this starterkit, but make your own copy. Information on this can be found in the <a href="http://himer.us/omega-docs">Omega Documentation</a>',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'base theme' => 'omega',
          'hidden' => true,
          'starterkit' => true,
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'user_first' => 'User Bar First',
            'user_second' => 'User Bar Second',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
            'header_first' => 'Header First',
            'header_second' => 'Header Second',
            'preface_first' => 'Preface First',
            'preface_second' => 'Preface Second',
            'preface_third' => 'Preface Third',
            'postscript_first' => 'Postscript First',
            'postscript_second' => 'Postscript Second',
            'postscript_third' => 'Postscript Third',
            'postscript_fourth' => 'Postscript Fourth',
            'footer_first' => 'Footer First',
            'footer_second' => 'Footer Second',
          ),
          'zones' => 
          array (
            'user' => 'User',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'header' => 'Header',
            'preface' => 'Preface',
            'content' => 'Content',
            'postscript' => 'Postscript',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'global.css' => 
            array (
              'name' => 'Your custom global styles',
              'description' => 'This file holds all the globally active custom CSS of your theme.',
              'options' => 
              array (
                'weight' => '10',
              ),
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_libraries' => 
            array (
              'omega_formalize' => 'omega_formalize',
              'omega_equalheights' => '',
              'omega_mediaqueries' => 'omega_mediaqueries',
            ),
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'omega-text.css' => 'omega-text.css',
              'omega-branding.css' => 'omega-branding.css',
              'omega-menu.css' => 'omega-menu.css',
              'omega-forms.css' => 'omega-forms.css',
              'omega-visuals.css' => 'omega-visuals.css',
              'global.css' => 'global.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_user_equal_height_container' => '',
            'alpha_zone_user_wrapper' => '1',
            'alpha_zone_user_force' => '',
            'alpha_zone_user_section' => 'header',
            'alpha_zone_user_weight' => '1',
            'alpha_zone_user_columns' => '12',
            'alpha_zone_user_primary' => '',
            'alpha_zone_user_css' => '',
            'alpha_zone_user_wrapper_css' => '',
            'alpha_zone_branding_equal_height_container' => '',
            'alpha_zone_branding_wrapper' => '1',
            'alpha_zone_branding_force' => '',
            'alpha_zone_branding_section' => 'header',
            'alpha_zone_branding_weight' => '2',
            'alpha_zone_branding_columns' => '12',
            'alpha_zone_branding_primary' => '',
            'alpha_zone_branding_css' => '',
            'alpha_zone_branding_wrapper_css' => '',
            'alpha_zone_menu_equal_height_container' => '',
            'alpha_zone_menu_wrapper' => '1',
            'alpha_zone_menu_force' => '',
            'alpha_zone_menu_section' => 'header',
            'alpha_zone_menu_weight' => '3',
            'alpha_zone_menu_columns' => '12',
            'alpha_zone_menu_primary' => '',
            'alpha_zone_menu_css' => '',
            'alpha_zone_menu_wrapper_css' => '',
            'alpha_zone_header_equal_height_container' => '',
            'alpha_zone_header_wrapper' => '1',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '4',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_preface_equal_height_container' => '',
            'alpha_zone_preface_wrapper' => '1',
            'alpha_zone_preface_force' => '',
            'alpha_zone_preface_section' => 'content',
            'alpha_zone_preface_weight' => '1',
            'alpha_zone_preface_columns' => '12',
            'alpha_zone_preface_primary' => '',
            'alpha_zone_preface_css' => '',
            'alpha_zone_preface_wrapper_css' => '',
            'alpha_zone_content_equal_height_container' => '',
            'alpha_zone_content_wrapper' => '1',
            'alpha_zone_content_force' => '1',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '2',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => 'content',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_postscript_equal_height_container' => '',
            'alpha_zone_postscript_wrapper' => '1',
            'alpha_zone_postscript_force' => '',
            'alpha_zone_postscript_section' => 'content',
            'alpha_zone_postscript_weight' => '3',
            'alpha_zone_postscript_columns' => '12',
            'alpha_zone_postscript_primary' => '',
            'alpha_zone_postscript_css' => '',
            'alpha_zone_postscript_wrapper_css' => '',
            'alpha_zone_footer_equal_height_container' => '',
            'alpha_zone_footer_wrapper' => '1',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '1',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_sidebar_equal_height_container' => '',
            'alpha_region_dashboard_sidebar_equal_height_element' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '-50',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_inactive_equal_height_container' => '',
            'alpha_region_dashboard_inactive_equal_height_element' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '-50',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_main_equal_height_container' => '',
            'alpha_region_dashboard_main_equal_height_element' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '-50',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_user_first_equal_height_container' => '',
            'alpha_region_user_first_equal_height_element' => '',
            'alpha_region_user_first_force' => '',
            'alpha_region_user_first_zone' => 'user',
            'alpha_region_user_first_prefix' => '',
            'alpha_region_user_first_columns' => '8',
            'alpha_region_user_first_suffix' => '',
            'alpha_region_user_first_weight' => '1',
            'alpha_region_user_first_css' => '',
            'alpha_region_user_second_equal_height_container' => '',
            'alpha_region_user_second_equal_height_element' => '',
            'alpha_region_user_second_force' => '',
            'alpha_region_user_second_zone' => 'user',
            'alpha_region_user_second_prefix' => '',
            'alpha_region_user_second_columns' => '4',
            'alpha_region_user_second_suffix' => '',
            'alpha_region_user_second_weight' => '2',
            'alpha_region_user_second_css' => '',
            'alpha_region_branding_equal_height_container' => '',
            'alpha_region_branding_equal_height_element' => '',
            'alpha_region_branding_force' => '1',
            'alpha_region_branding_zone' => 'branding',
            'alpha_region_branding_prefix' => '',
            'alpha_region_branding_columns' => '12',
            'alpha_region_branding_suffix' => '',
            'alpha_region_branding_weight' => '1',
            'alpha_region_branding_css' => '',
            'alpha_region_menu_equal_height_container' => '',
            'alpha_region_menu_equal_height_element' => '',
            'alpha_region_menu_force' => '1',
            'alpha_region_menu_zone' => 'menu',
            'alpha_region_menu_prefix' => '',
            'alpha_region_menu_columns' => '12',
            'alpha_region_menu_suffix' => '',
            'alpha_region_menu_weight' => '1',
            'alpha_region_menu_css' => '',
            'alpha_region_header_first_equal_height_container' => '',
            'alpha_region_header_first_equal_height_element' => '',
            'alpha_region_header_first_force' => '',
            'alpha_region_header_first_zone' => 'header',
            'alpha_region_header_first_prefix' => '',
            'alpha_region_header_first_columns' => '6',
            'alpha_region_header_first_suffix' => '',
            'alpha_region_header_first_weight' => '1',
            'alpha_region_header_first_css' => '',
            'alpha_region_header_second_equal_height_container' => '',
            'alpha_region_header_second_equal_height_element' => '',
            'alpha_region_header_second_force' => '',
            'alpha_region_header_second_zone' => 'header',
            'alpha_region_header_second_prefix' => '',
            'alpha_region_header_second_columns' => '6',
            'alpha_region_header_second_suffix' => '',
            'alpha_region_header_second_weight' => '2',
            'alpha_region_header_second_css' => '',
            'alpha_region_preface_first_equal_height_container' => '',
            'alpha_region_preface_first_equal_height_element' => '',
            'alpha_region_preface_first_force' => '',
            'alpha_region_preface_first_zone' => 'preface',
            'alpha_region_preface_first_prefix' => '',
            'alpha_region_preface_first_columns' => '4',
            'alpha_region_preface_first_suffix' => '',
            'alpha_region_preface_first_weight' => '1',
            'alpha_region_preface_first_css' => '',
            'alpha_region_preface_second_equal_height_container' => '',
            'alpha_region_preface_second_equal_height_element' => '',
            'alpha_region_preface_second_force' => '',
            'alpha_region_preface_second_zone' => 'preface',
            'alpha_region_preface_second_prefix' => '',
            'alpha_region_preface_second_columns' => '4',
            'alpha_region_preface_second_suffix' => '',
            'alpha_region_preface_second_weight' => '2',
            'alpha_region_preface_second_css' => '',
            'alpha_region_preface_third_equal_height_container' => '',
            'alpha_region_preface_third_equal_height_element' => '',
            'alpha_region_preface_third_force' => '',
            'alpha_region_preface_third_zone' => 'preface',
            'alpha_region_preface_third_prefix' => '',
            'alpha_region_preface_third_columns' => '4',
            'alpha_region_preface_third_suffix' => '',
            'alpha_region_preface_third_weight' => '3',
            'alpha_region_preface_third_css' => '',
            'alpha_region_content_equal_height_container' => '',
            'alpha_region_content_equal_height_element' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '2',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_equal_height_container' => '',
            'alpha_region_sidebar_first_equal_height_element' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '1',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_equal_height_container' => '',
            'alpha_region_sidebar_second_equal_height_element' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_postscript_first_equal_height_container' => '',
            'alpha_region_postscript_first_equal_height_element' => '',
            'alpha_region_postscript_first_force' => '',
            'alpha_region_postscript_first_zone' => 'postscript',
            'alpha_region_postscript_first_prefix' => '',
            'alpha_region_postscript_first_columns' => '3',
            'alpha_region_postscript_first_suffix' => '',
            'alpha_region_postscript_first_weight' => '1',
            'alpha_region_postscript_first_css' => '',
            'alpha_region_postscript_second_equal_height_container' => '',
            'alpha_region_postscript_second_equal_height_element' => '',
            'alpha_region_postscript_second_force' => '',
            'alpha_region_postscript_second_zone' => 'postscript',
            'alpha_region_postscript_second_prefix' => '',
            'alpha_region_postscript_second_columns' => '3',
            'alpha_region_postscript_second_suffix' => '',
            'alpha_region_postscript_second_weight' => '2',
            'alpha_region_postscript_second_css' => '',
            'alpha_region_postscript_third_equal_height_container' => '',
            'alpha_region_postscript_third_equal_height_element' => '',
            'alpha_region_postscript_third_force' => '',
            'alpha_region_postscript_third_zone' => 'postscript',
            'alpha_region_postscript_third_prefix' => '',
            'alpha_region_postscript_third_columns' => '3',
            'alpha_region_postscript_third_suffix' => '',
            'alpha_region_postscript_third_weight' => '3',
            'alpha_region_postscript_third_css' => '',
            'alpha_region_postscript_fourth_equal_height_container' => '',
            'alpha_region_postscript_fourth_equal_height_element' => '',
            'alpha_region_postscript_fourth_force' => '',
            'alpha_region_postscript_fourth_zone' => 'postscript',
            'alpha_region_postscript_fourth_prefix' => '',
            'alpha_region_postscript_fourth_columns' => '3',
            'alpha_region_postscript_fourth_suffix' => '',
            'alpha_region_postscript_fourth_weight' => '4',
            'alpha_region_postscript_fourth_css' => '',
            'alpha_region_footer_first_equal_height_container' => '',
            'alpha_region_footer_first_equal_height_element' => '',
            'alpha_region_footer_first_force' => '',
            'alpha_region_footer_first_zone' => 'footer',
            'alpha_region_footer_first_prefix' => '',
            'alpha_region_footer_first_columns' => '12',
            'alpha_region_footer_first_suffix' => '',
            'alpha_region_footer_first_weight' => '1',
            'alpha_region_footer_first_css' => '',
            'alpha_region_footer_second_equal_height_container' => '',
            'alpha_region_footer_second_equal_height_element' => '',
            'alpha_region_footer_second_force' => '',
            'alpha_region_footer_second_zone' => 'footer',
            'alpha_region_footer_second_prefix' => '',
            'alpha_region_footer_second_columns' => '12',
            'alpha_region_footer_second_suffix' => '',
            'alpha_region_footer_second_weight' => '2',
            'alpha_region_footer_second_css' => '',
          ),
          'version' => '7.x-3.1',
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
      'alpha' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/themes/omega/alpha/alpha.info',
        'basename' => 'alpha.info',
        'name' => 'Alpha',
        'info' => 
        array (
          'name' => 'Alpha',
          'description' => 'Alpha is the core basetheme for <a href="http://drupal.org/project/omega">Omega</a> and all its subthemes. It includes the most basic features of the Omega theme framework. This theme should not be used directly, instead you should create a subtheme based on one of the Omega or Alpha starterkits. Learn more about <a href="http://drupal.org/node/819170">Creating an Omega Subtheme</a> in the <a href="http://drupal.org/node/819164">Omega Handbook</a>.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'version' => '7.x-3.1',
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
          ),
          'zones' => 
          array (
            'content' => 'Content',
            'header' => 'Header',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'alpha-reset.css' => 
            array (
              'name' => 'Reset',
              'description' => 'Created by <a href="http://meyerweb.com/eric/tools/css/reset/">Eric Meyer</a>.',
              'options' => 
              array (
                'weight' => '-20',
              ),
            ),
            'alpha-mobile.css' => 
            array (
              'name' => 'Mobile',
              'description' => 'Default stylesheet for mobile styles.',
              'options' => 
              array (
                'weight' => '-20',
              ),
            ),
            'alpha-alpha.css' => 
            array (
              'name' => 'Alpha',
              'description' => 'Default styles & resets for Alpha/Omega base theme.',
              'options' => 
              array (
                'weight' => '-20',
              ),
            ),
          ),
          'exclude' => 
          array (
            'misc/vertical-tabs.css' => 'This requires a description.',
            'modules/aggregator/aggregator.css' => 'This requires a description.',
            'modules/block/block.css' => 'This requires a description.',
            'modules/dblog/dblog.css' => 'This requires a description.',
            'modules/file/file.css' => 'This requires a description.',
            'modules/filter/filter.css' => 'This requires a description.',
            'modules/help/help.css' => 'This requires a description.',
            'modules/menu/menu.css' => 'This requires a description.',
            'modules/openid/openid.css' => 'This requires a description.',
            'modules/profile/profile.css' => 'This requires a description.',
            'modules/statistics/statistics.css' => 'This requires a description.',
            'modules/syslog/syslog.css' => 'This requires a description.',
            'modules/system/admin.css' => 'This requires a description.',
            'modules/system/maintenance.css' => 'This requires a description.',
            'modules/system/system.css' => 'This requires a description.',
            'modules/system/system.admin.css' => 'This requires a description.',
            'modules/system/system.base.css' => 'This requires a description.',
            'modules/system/system.maintenance.css' => 'This requires a description.',
            'modules/system/system.menus.css' => 'This requires a description.',
            'modules/system/system.messages.css' => 'This requires a description.',
            'modules/system/system.theme.css' => 'This requires a description.',
            'modules/taxonomy/taxonomy.css' => 'This requires a description.',
            'modules/tracker/tracker.css' => 'This requires a description.',
            'modules/update/update.css' => 'This requires a description.',
          ),
          'grids' => 
          array (
            'alpha_default' => 
            array (
              'name' => 'Default (960px)',
              'layouts' => 
              array (
                'fluid' => 'Fluid',
                'narrow' => 'Narrow',
                'normal' => 'Normal',
                'wide' => 'Wide',
              ),
              'columns' => 
              array (
                12 => '12 Columns',
                16 => '16 Columns',
                24 => '24 Columns',
              ),
            ),
            'alpha_fluid' => 
            array (
              'name' => 'Fluid',
              'layouts' => 
              array (
                'normal' => 'Normal',
              ),
              'columns' => 
              array (
                12 => '12 Columns',
                16 => '16 Columns',
                24 => '24 Columns',
              ),
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_header_wrapper' => '',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_content_wrapper' => '',
            'alpha_zone_content_force' => '',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => '',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_footer_wrapper' => '',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_header_force' => '',
            'alpha_region_header_zone' => 'header',
            'alpha_region_header_prefix' => '',
            'alpha_region_header_columns' => '12',
            'alpha_region_header_suffix' => '',
            'alpha_region_header_weight' => '',
            'alpha_region_header_css' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '1',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '2',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_footer_force' => '',
            'alpha_region_footer_zone' => 'footer',
            'alpha_region_footer_prefix' => '',
            'alpha_region_footer_columns' => '12',
            'alpha_region_footer_suffix' => '',
            'alpha_region_footer_weight' => '',
            'alpha_region_footer_css' => '',
          ),
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
      'omega' => 
      array (
        'filename' => '/var/aegir/platforms/albatross-7.15/sites/all/themes/omega/omega/omega.info',
        'basename' => 'omega.info',
        'name' => 'Omega',
        'info' => 
        array (
          'name' => 'Omega',
          'description' => '<a href="http://drupal.org/project/omega">Omega</a> extends the Omega theme framework with some additional features and makes them availabe to its subthemes. This theme should not be used directly, instead you should create a subtheme based on one of the Omega or Alpha starterkits. Learn more about <a href="http://drupal.org/node/819170">Creating an Omega Subtheme</a> in the <a href="http://drupal.org/node/819164">Omega Handbook</a>.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'screenshot' => 'screenshot.png',
          'version' => '7.x-3.1',
          'base theme' => 'alpha',
          'regions' => 
          array (
            'page_top' => 'Page Top',
            'page_bottom' => 'Page Bottom',
            'content' => 'Content',
            'user_first' => 'User Bar First',
            'user_second' => 'User Bar Second',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'sidebar_first' => 'Sidebar First',
            'sidebar_second' => 'Sidebar Second',
            'header_first' => 'Header First',
            'header_second' => 'Header Second',
            'preface_first' => 'Preface First',
            'preface_second' => 'Preface Second',
            'preface_third' => 'Preface Third',
            'postscript_first' => 'Postscript First',
            'postscript_second' => 'Postscript Second',
            'postscript_third' => 'Postscript Third',
            'postscript_fourth' => 'Postscript Fourth',
            'footer_first' => 'Footer First',
            'footer_second' => 'Footer Second',
          ),
          'zones' => 
          array (
            'user' => 'User',
            'branding' => 'Branding',
            'menu' => 'Menu',
            'header' => 'Header',
            'preface' => 'Preface',
            'content' => 'Content',
            'postscript' => 'Postscript',
            'footer' => 'Footer',
          ),
          'css' => 
          array (
            'omega-text.css' => 
            array (
              'name' => 'Text Styles',
              'description' => 'Default text styles for Omega.',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
            'omega-branding.css' => 
            array (
              'name' => 'Branding Styles',
              'description' => 'Provides positioning for the logo, title and slogan.',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
            'omega-menu.css' => 
            array (
              'name' => 'Menu Styles',
              'description' => 'Provides positoning and basic CSS for primary and secondary menus.',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
            'omega-forms.css' => 
            array (
              'name' => 'Form Styles',
              'description' => 'Provides basic form styles.',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
            'omega-visuals.css' => 
            array (
              'name' => 'Omega Styles',
              'description' => 'Custom visual styles for Omega. (pagers, menus, etc.)',
              'options' => 
              array (
                'weight' => '-10',
              ),
            ),
          ),
          'libraries' => 
          array (
            'omega_formalize' => 
            array (
              'name' => 'Formalize',
              'description' => 'Formalize is a framework by <a href="http://formalize.me/" title="Formalize">Nathan Smith</a> for neat looking cross-browser forms with extended functionality.',
              'js' => 
              array (
                0 => 
                array (
                  'file' => 'jquery.formalize.js',
                  'options' => 
                  array (
                    'weight' => '-20',
                  ),
                ),
              ),
              'css' => 
              array (
                0 => 
                array (
                  'file' => 'formalize.css',
                  'options' => 
                  array (
                    'weight' => '-20',
                  ),
                ),
              ),
            ),
            'omega_mediaqueries' => 
            array (
              'name' => 'Media queries',
              'description' => 'Provides a tiny JavaScript library that can be used in your custom JavaScript.',
              'js' => 
              array (
                0 => 
                array (
                  'file' => 'omega-mediaqueries.js',
                  'options' => 
                  array (
                    'weight' => '-19',
                  ),
                ),
              ),
            ),
            'omega_equalheights' => 
            array (
              'name' => 'Equal heights',
              'description' => 'Allows you to force all regions of a zone or all blocks of a region to be of equal size. <span class="marker">This library reveals a corresponding checkbox on every region and zone configuration panel if activated.</span>',
              'js' => 
              array (
                0 => 
                array (
                  'file' => 'omega-equalheights.js',
                  'options' => 
                  array (
                    'weight' => '-18',
                  ),
                ),
              ),
            ),
          ),
          'plugins' => 
          array (
            'panels' => 
            array (
              'layouts' => 'panels/layouts',
            ),
          ),
          'settings' => 
          array (
            'alpha_grid' => 'alpha_default',
            'alpha_primary_alpha_default' => 'normal',
            'alpha_responsive' => '1',
            'alpha_layouts_alpha_fluid_primary' => 'normal',
            'alpha_layouts_alpha_fluid_normal_responsive' => '0',
            'alpha_layouts_alpha_fluid_normal_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_primary' => 'normal',
            'alpha_layouts_alpha_default_fluid_responsive' => '0',
            'alpha_layouts_alpha_default_fluid_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_fluid_weight' => '0',
            'alpha_layouts_alpha_default_narrow_responsive' => '1',
            'alpha_layouts_alpha_default_narrow_media' => 'all and (min-width: 740px) and (min-device-width: 740px), (max-device-width: 800px) and (min-width: 740px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_narrow_weight' => '1',
            'alpha_layouts_alpha_default_normal_responsive' => '1',
            'alpha_layouts_alpha_default_normal_media' => 'all and (min-width: 980px) and (min-device-width: 980px), all and (max-device-width: 1024px) and (min-width: 1024px) and (orientation:landscape)',
            'alpha_layouts_alpha_default_normal_weight' => '2',
            'alpha_layouts_alpha_default_wide_responsive' => '1',
            'alpha_layouts_alpha_default_wide_media' => 'all and (min-width: 1220px)',
            'alpha_layouts_alpha_default_wide_weight' => '3',
            'alpha_viewport' => '1',
            'alpha_viewport_initial_scale' => '1',
            'alpha_viewport_min_scale' => '1',
            'alpha_viewport_max_scale' => '1',
            'alpha_viewport_user_scaleable' => '',
            'alpha_libraries' => 
            array (
              'omega_formalize' => 'omega_formalize',
              'omega_equalheights' => '',
              'omega_mediaqueries' => 'omega_mediaqueries',
            ),
            'alpha_css' => 
            array (
              'alpha-reset.css' => 'alpha-reset.css',
              'alpha-mobile.css' => 'alpha-mobile.css',
              'alpha-alpha.css' => 'alpha-alpha.css',
              'omega-text.css' => 'omega-text.css',
              'omega-branding.css' => 'omega-branding.css',
              'omega-menu.css' => 'omega-menu.css',
              'omega-forms.css' => 'omega-forms.css',
              'omega-visuals.css' => 'omega-visuals.css',
            ),
            'alpha_debug_block_toggle' => '1',
            'alpha_debug_block_active' => '1',
            'alpha_debug_grid_toggle' => '1',
            'alpha_debug_grid_active' => '1',
            'alpha_debug_grid_roles' => 
            array (
              1 => '1',
              2 => '2',
              3 => '3',
            ),
            'alpha_toggle_messages' => '1',
            'alpha_toggle_action_links' => '1',
            'alpha_toggle_tabs' => '1',
            'alpha_toggle_breadcrumb' => '1',
            'alpha_toggle_page_title' => '1',
            'alpha_toggle_feed_icons' => '1',
            'alpha_hidden_title' => '',
            'alpha_hidden_site_name' => '',
            'alpha_hidden_site_slogan' => '',
            'alpha_zone_user_equal_height_container' => '',
            'alpha_zone_user_wrapper' => '1',
            'alpha_zone_user_force' => '',
            'alpha_zone_user_section' => 'header',
            'alpha_zone_user_weight' => '1',
            'alpha_zone_user_columns' => '12',
            'alpha_zone_user_primary' => '',
            'alpha_zone_user_css' => '',
            'alpha_zone_user_wrapper_css' => '',
            'alpha_zone_branding_equal_height_container' => '',
            'alpha_zone_branding_wrapper' => '1',
            'alpha_zone_branding_force' => '',
            'alpha_zone_branding_section' => 'header',
            'alpha_zone_branding_weight' => '2',
            'alpha_zone_branding_columns' => '12',
            'alpha_zone_branding_primary' => '',
            'alpha_zone_branding_css' => '',
            'alpha_zone_branding_wrapper_css' => '',
            'alpha_zone_menu_equal_height_container' => '',
            'alpha_zone_menu_wrapper' => '1',
            'alpha_zone_menu_force' => '',
            'alpha_zone_menu_section' => 'header',
            'alpha_zone_menu_weight' => '3',
            'alpha_zone_menu_columns' => '12',
            'alpha_zone_menu_primary' => '',
            'alpha_zone_menu_css' => '',
            'alpha_zone_menu_wrapper_css' => '',
            'alpha_zone_header_equal_height_container' => '',
            'alpha_zone_header_wrapper' => '1',
            'alpha_zone_header_force' => '',
            'alpha_zone_header_section' => 'header',
            'alpha_zone_header_weight' => '4',
            'alpha_zone_header_columns' => '12',
            'alpha_zone_header_primary' => '',
            'alpha_zone_header_css' => '',
            'alpha_zone_header_wrapper_css' => '',
            'alpha_zone_preface_equal_height_container' => '',
            'alpha_zone_preface_wrapper' => '1',
            'alpha_zone_preface_force' => '',
            'alpha_zone_preface_section' => 'content',
            'alpha_zone_preface_weight' => '1',
            'alpha_zone_preface_columns' => '12',
            'alpha_zone_preface_primary' => '',
            'alpha_zone_preface_css' => '',
            'alpha_zone_preface_wrapper_css' => '',
            'alpha_zone_content_equal_height_container' => '',
            'alpha_zone_content_wrapper' => '1',
            'alpha_zone_content_force' => '1',
            'alpha_zone_content_section' => 'content',
            'alpha_zone_content_weight' => '2',
            'alpha_zone_content_columns' => '12',
            'alpha_zone_content_primary' => 'content',
            'alpha_zone_content_css' => '',
            'alpha_zone_content_wrapper_css' => '',
            'alpha_zone_postscript_equal_height_container' => '',
            'alpha_zone_postscript_wrapper' => '1',
            'alpha_zone_postscript_force' => '',
            'alpha_zone_postscript_section' => 'content',
            'alpha_zone_postscript_weight' => '3',
            'alpha_zone_postscript_columns' => '12',
            'alpha_zone_postscript_primary' => '',
            'alpha_zone_postscript_css' => '',
            'alpha_zone_postscript_wrapper_css' => '',
            'alpha_zone_footer_equal_height_container' => '',
            'alpha_zone_footer_wrapper' => '1',
            'alpha_zone_footer_force' => '',
            'alpha_zone_footer_section' => 'footer',
            'alpha_zone_footer_weight' => '1',
            'alpha_zone_footer_columns' => '12',
            'alpha_zone_footer_primary' => '',
            'alpha_zone_footer_css' => '',
            'alpha_zone_footer_wrapper_css' => '',
            'alpha_region_dashboard_sidebar_equal_height_container' => '',
            'alpha_region_dashboard_sidebar_equal_height_element' => '',
            'alpha_region_dashboard_sidebar_force' => '',
            'alpha_region_dashboard_sidebar_zone' => '',
            'alpha_region_dashboard_sidebar_prefix' => '',
            'alpha_region_dashboard_sidebar_columns' => '1',
            'alpha_region_dashboard_sidebar_suffix' => '',
            'alpha_region_dashboard_sidebar_weight' => '-50',
            'alpha_region_dashboard_sidebar_css' => '',
            'alpha_region_dashboard_inactive_equal_height_container' => '',
            'alpha_region_dashboard_inactive_equal_height_element' => '',
            'alpha_region_dashboard_inactive_force' => '',
            'alpha_region_dashboard_inactive_zone' => '',
            'alpha_region_dashboard_inactive_prefix' => '',
            'alpha_region_dashboard_inactive_columns' => '1',
            'alpha_region_dashboard_inactive_suffix' => '',
            'alpha_region_dashboard_inactive_weight' => '-50',
            'alpha_region_dashboard_inactive_css' => '',
            'alpha_region_dashboard_main_equal_height_container' => '',
            'alpha_region_dashboard_main_equal_height_element' => '',
            'alpha_region_dashboard_main_force' => '',
            'alpha_region_dashboard_main_zone' => '',
            'alpha_region_dashboard_main_prefix' => '',
            'alpha_region_dashboard_main_columns' => '1',
            'alpha_region_dashboard_main_suffix' => '',
            'alpha_region_dashboard_main_weight' => '-50',
            'alpha_region_dashboard_main_css' => '',
            'alpha_region_user_first_equal_height_container' => '',
            'alpha_region_user_first_equal_height_element' => '',
            'alpha_region_user_first_force' => '',
            'alpha_region_user_first_zone' => 'user',
            'alpha_region_user_first_prefix' => '',
            'alpha_region_user_first_columns' => '8',
            'alpha_region_user_first_suffix' => '',
            'alpha_region_user_first_weight' => '1',
            'alpha_region_user_first_css' => '',
            'alpha_region_user_second_equal_height_container' => '',
            'alpha_region_user_second_equal_height_element' => '',
            'alpha_region_user_second_force' => '',
            'alpha_region_user_second_zone' => 'user',
            'alpha_region_user_second_prefix' => '',
            'alpha_region_user_second_columns' => '4',
            'alpha_region_user_second_suffix' => '',
            'alpha_region_user_second_weight' => '2',
            'alpha_region_user_second_css' => '',
            'alpha_region_branding_equal_height_container' => '',
            'alpha_region_branding_equal_height_element' => '',
            'alpha_region_branding_force' => '1',
            'alpha_region_branding_zone' => 'branding',
            'alpha_region_branding_prefix' => '',
            'alpha_region_branding_columns' => '12',
            'alpha_region_branding_suffix' => '',
            'alpha_region_branding_weight' => '1',
            'alpha_region_branding_css' => '',
            'alpha_region_menu_equal_height_container' => '',
            'alpha_region_menu_equal_height_element' => '',
            'alpha_region_menu_force' => '1',
            'alpha_region_menu_zone' => 'menu',
            'alpha_region_menu_prefix' => '',
            'alpha_region_menu_columns' => '12',
            'alpha_region_menu_suffix' => '',
            'alpha_region_menu_weight' => '1',
            'alpha_region_menu_css' => '',
            'alpha_region_header_first_equal_height_container' => '',
            'alpha_region_header_first_equal_height_element' => '',
            'alpha_region_header_first_force' => '',
            'alpha_region_header_first_zone' => 'header',
            'alpha_region_header_first_prefix' => '',
            'alpha_region_header_first_columns' => '6',
            'alpha_region_header_first_suffix' => '',
            'alpha_region_header_first_weight' => '1',
            'alpha_region_header_first_css' => '',
            'alpha_region_header_second_equal_height_container' => '',
            'alpha_region_header_second_equal_height_element' => '',
            'alpha_region_header_second_force' => '',
            'alpha_region_header_second_zone' => 'header',
            'alpha_region_header_second_prefix' => '',
            'alpha_region_header_second_columns' => '6',
            'alpha_region_header_second_suffix' => '',
            'alpha_region_header_second_weight' => '2',
            'alpha_region_header_second_css' => '',
            'alpha_region_preface_first_equal_height_container' => '',
            'alpha_region_preface_first_equal_height_element' => '',
            'alpha_region_preface_first_force' => '',
            'alpha_region_preface_first_zone' => 'preface',
            'alpha_region_preface_first_prefix' => '',
            'alpha_region_preface_first_columns' => '4',
            'alpha_region_preface_first_suffix' => '',
            'alpha_region_preface_first_weight' => '1',
            'alpha_region_preface_first_css' => '',
            'alpha_region_preface_second_equal_height_container' => '',
            'alpha_region_preface_second_equal_height_element' => '',
            'alpha_region_preface_second_force' => '',
            'alpha_region_preface_second_zone' => 'preface',
            'alpha_region_preface_second_prefix' => '',
            'alpha_region_preface_second_columns' => '4',
            'alpha_region_preface_second_suffix' => '',
            'alpha_region_preface_second_weight' => '2',
            'alpha_region_preface_second_css' => '',
            'alpha_region_preface_third_equal_height_container' => '',
            'alpha_region_preface_third_equal_height_element' => '',
            'alpha_region_preface_third_force' => '',
            'alpha_region_preface_third_zone' => 'preface',
            'alpha_region_preface_third_prefix' => '',
            'alpha_region_preface_third_columns' => '4',
            'alpha_region_preface_third_suffix' => '',
            'alpha_region_preface_third_weight' => '3',
            'alpha_region_preface_third_css' => '',
            'alpha_region_content_equal_height_container' => '',
            'alpha_region_content_equal_height_element' => '',
            'alpha_region_content_force' => '',
            'alpha_region_content_zone' => 'content',
            'alpha_region_content_prefix' => '',
            'alpha_region_content_columns' => '6',
            'alpha_region_content_suffix' => '',
            'alpha_region_content_weight' => '2',
            'alpha_region_content_css' => '',
            'alpha_region_sidebar_first_equal_height_container' => '',
            'alpha_region_sidebar_first_equal_height_element' => '',
            'alpha_region_sidebar_first_force' => '',
            'alpha_region_sidebar_first_zone' => 'content',
            'alpha_region_sidebar_first_prefix' => '',
            'alpha_region_sidebar_first_columns' => '3',
            'alpha_region_sidebar_first_suffix' => '',
            'alpha_region_sidebar_first_weight' => '1',
            'alpha_region_sidebar_first_css' => '',
            'alpha_region_sidebar_second_equal_height_container' => '',
            'alpha_region_sidebar_second_equal_height_element' => '',
            'alpha_region_sidebar_second_force' => '',
            'alpha_region_sidebar_second_zone' => 'content',
            'alpha_region_sidebar_second_prefix' => '',
            'alpha_region_sidebar_second_columns' => '3',
            'alpha_region_sidebar_second_suffix' => '',
            'alpha_region_sidebar_second_weight' => '3',
            'alpha_region_sidebar_second_css' => '',
            'alpha_region_postscript_first_equal_height_container' => '',
            'alpha_region_postscript_first_equal_height_element' => '',
            'alpha_region_postscript_first_force' => '',
            'alpha_region_postscript_first_zone' => 'postscript',
            'alpha_region_postscript_first_prefix' => '',
            'alpha_region_postscript_first_columns' => '3',
            'alpha_region_postscript_first_suffix' => '',
            'alpha_region_postscript_first_weight' => '1',
            'alpha_region_postscript_first_css' => '',
            'alpha_region_postscript_second_equal_height_container' => '',
            'alpha_region_postscript_second_equal_height_element' => '',
            'alpha_region_postscript_second_force' => '',
            'alpha_region_postscript_second_zone' => 'postscript',
            'alpha_region_postscript_second_prefix' => '',
            'alpha_region_postscript_second_columns' => '3',
            'alpha_region_postscript_second_suffix' => '',
            'alpha_region_postscript_second_weight' => '2',
            'alpha_region_postscript_second_css' => '',
            'alpha_region_postscript_third_equal_height_container' => '',
            'alpha_region_postscript_third_equal_height_element' => '',
            'alpha_region_postscript_third_force' => '',
            'alpha_region_postscript_third_zone' => 'postscript',
            'alpha_region_postscript_third_prefix' => '',
            'alpha_region_postscript_third_columns' => '3',
            'alpha_region_postscript_third_suffix' => '',
            'alpha_region_postscript_third_weight' => '3',
            'alpha_region_postscript_third_css' => '',
            'alpha_region_postscript_fourth_equal_height_container' => '',
            'alpha_region_postscript_fourth_equal_height_element' => '',
            'alpha_region_postscript_fourth_force' => '',
            'alpha_region_postscript_fourth_zone' => 'postscript',
            'alpha_region_postscript_fourth_prefix' => '',
            'alpha_region_postscript_fourth_columns' => '3',
            'alpha_region_postscript_fourth_suffix' => '',
            'alpha_region_postscript_fourth_weight' => '4',
            'alpha_region_postscript_fourth_css' => '',
            'alpha_region_footer_first_equal_height_container' => '',
            'alpha_region_footer_first_equal_height_element' => '',
            'alpha_region_footer_first_force' => '',
            'alpha_region_footer_first_zone' => 'footer',
            'alpha_region_footer_first_prefix' => '',
            'alpha_region_footer_first_columns' => '12',
            'alpha_region_footer_first_suffix' => '',
            'alpha_region_footer_first_weight' => '1',
            'alpha_region_footer_first_css' => '',
            'alpha_region_footer_second_equal_height_container' => '',
            'alpha_region_footer_second_equal_height_element' => '',
            'alpha_region_footer_second_force' => '',
            'alpha_region_footer_second_zone' => 'footer',
            'alpha_region_footer_second_prefix' => '',
            'alpha_region_footer_second_columns' => '12',
            'alpha_region_footer_second_suffix' => '',
            'alpha_region_footer_second_weight' => '2',
            'alpha_region_footer_second_css' => '',
          ),
          'project' => 'omega',
          'datestamp' => '1329681647',
        ),
        'project' => 'omega',
        'version' => '7.x-3.1',
      ),
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'testing' => 
    array (
      'modules' => 
      array (
        'drupal_system_listing_compatible_test' => 
        array (
          'filename' => '/var/aegir/platforms/albatross-7.15/profiles/testing/modules/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
          'basename' => 'drupal_system_listing_compatible_test.module',
          'name' => 'drupal_system_listing_compatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing compatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.15',
            'core' => '7.x',
            'hidden' => true,
            'files' => 
            array (
              0 => 'drupal_system_listing_compatible_test.test',
            ),
            'project' => 'drupal',
            'datestamp' => '1343839327',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.15',
        ),
        'drupal_system_listing_incompatible_test' => 
        array (
          'filename' => '/var/aegir/platforms/albatross-7.15/profiles/testing/modules/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
          'basename' => 'drupal_system_listing_incompatible_test.module',
          'name' => 'drupal_system_listing_incompatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing incompatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.15',
            'core' => '6.x',
            'hidden' => true,
            'project' => 'drupal',
            'datestamp' => '1343839327',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.15',
        ),
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);