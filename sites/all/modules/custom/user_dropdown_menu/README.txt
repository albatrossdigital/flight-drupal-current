Author: Jeff Lyon <jeff AT albatrossdigital DOT com>

This module creates a new "User Drop-down Menu" block that displays a chosen menu.  There are a couple of modifications to the typical menu block:

 * The block will be hidden by anonymous users.
 * The title is configurable and token-enabled, so you can do things like "Hi, [user:name]" or "Welcome, [user:field-fname]".
 * If the block_hover module is enabled, the block will autmatically display as a hover block, so only the custom block title is displayed until you hover over the block.
 * Additional styles can automatically be added, if enabled.
 
If you would like to make the block title a link, you can enable the block_titlelink module.
