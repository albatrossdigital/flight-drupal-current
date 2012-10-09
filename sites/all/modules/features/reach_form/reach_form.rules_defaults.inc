<?php
/**
 * @file
 * reach_form.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function reach_form_default_rules_configuration() {
  $items = array();
  $items['rules_create_form_submission_action'] = entity_import('rules_config', '{ "rules_create_form_submission_action" : {
      "LABEL" : "Create Form Submission Action",
      "PLUGIN" : "reaction rule",
      "TAGS" : [ "Reach CRM" ],
      "REQUIRES" : [ "rules", "action", "reach_webform" ],
      "ON" : [ "reach_webform_submitted" ],
      "IF" : [
        { "node_is_of_type" : { "node" : [ "webform" ], "type" : { "value" : { "form" : "form" } } } }
      ],
      "DO" : [
        { "action_action_create" : {
            "USING" : { "bundle" : "form_submission" },
            "PROVIDE" : { "action" : { "action" : "Created action entity" } }
          }
        },
        { "component_rules_create_form_submission_action_component" : {
            "contact" : [ "contact" ],
            "form" : [ "webform" ],
            "webform_submission" : [ "webform_submission" ],
            "action" : [ "action" ],
            "points" : [ "points" ]
          }
        }
      ]
    }
  }');
  $items['rules_create_form_submission_action_component'] = entity_import('rules_config', '{ "rules_create_form_submission_action_component" : {
      "LABEL" : "create_form_submission_action_component",
      "PLUGIN" : "rule",
      "TAGS" : [ "action" ],
      "REQUIRES" : [ "rules" ],
      "USES VARIABLES" : {
        "contact" : { "label" : "contact", "type" : "redhen_contact" },
        "form" : { "label" : "form", "type" : "node" },
        "webform_submission" : { "label" : "webform_submission", "type" : "webform_submission_entity" },
        "action" : { "label" : "action", "type" : "action" },
        "points" : { "label" : "points", "type" : "integer" }
      },
      "IF" : [
        { "entity_is_of_type" : { "entity" : [ "action" ], "type" : "action" } },
        { "entity_has_field" : { "entity" : [ "action" ], "field" : "field_action_form" } },
        { "entity_has_field" : { "entity" : [ "action" ], "field" : "field_action_contact" } },
        { "entity_has_field" : { "entity" : [ "action" ], "field" : "field_action_submission" } },
        { "entity_has_field" : { "entity" : [ "action" ], "field" : "field_action_user" } },
        { "entity_has_field" : { "entity" : [ "action" ], "field" : "field_action_points" } }
      ],
      "DO" : [
        { "data_set" : { "data" : [ "action:field-action-form" ], "value" : [ "form" ] } },
        { "data_set" : {
            "data" : [ "action:field-action-submission" ],
            "value" : [ "webform-submission" ]
          }
        },
        { "data_set" : { "data" : [ "action:field-action-contact" ], "value" : [ "contact" ] } },
        { "data_set" : { "data" : [ "action:field-action-points" ], "value" : [ "points" ] } },
        { "data_set" : {
            "data" : [ "action:field-action-user" ],
            "value" : [ "site:current-user" ]
          }
        },
        { "entity_save" : { "data" : [ "action" ], "immediate" : 1 } }
      ]
    }
  }');
  return $items;
}
