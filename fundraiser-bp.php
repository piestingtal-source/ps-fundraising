<?php


/*************************************************************************************************************
 --- SKELETON COMPONENT V1.6.1 ---

 Contributors: apeatling, jeffsayre, boonebgorges, dern3rd

 Dies ist eine Bare-Bones-Komponente, die einen guten Startblock für die Erstellung Deiner eigenen BuddyPress Komponente bieten sollte.

 It includes some of the functions that will make it easy to get your component registering activity stream
 items, posting notifications, setting up widgets, adding AJAX functionality and also structuring your
 component in a standardized way.

 It is by no means the letter of the law. You can go about writing your component in any style you like, that's
 one of the best (and worst!) features of a PHP based platform.

 I would recommend reading some of the comments littered throughout, as they will provide insight into how
 things tick within BuddyPress.

 You should replace all references to the word 'example' with something more suitable for your component.

 IMPORTANT: DO NOT configure your component so that it has to run in the /plugins/buddypress/ directory. If you
 do this, whenever the user auto-upgrades BuddyPress - your custom component will be deleted automatically. Design
 your component to run in the /wp-content/plugins/ directory
 *************************************************************************************************************/

// Define a constant that can be checked to see if the component is installed or not.
define( 'WDF_BP_INSTALLED', 1 );

// Define a constant that we can use to construct file paths throughout the component
define( 'BP_WDF_PLUGIN_BASE_DIR', dirname( __FILE__ ) . '/lib/bp');

/* Define a constant that will hold the database version number that can be used for upgrading the DB
 *
 * NOTE: When table defintions change and you need to upgrade,
 * make sure that you increment this constant so that it runs the install function again.
 *
 * Also, if you have errors when testing the component for the first time, make sure that you check to
 * see if the table(s) got created. If not, you'll most likely need to increment this constant as
 * BP_WDF_DB_VERSION was written to the wp_usermeta table and the install function will not be
 * triggered again unless you increment the version to a number higher than stored in the meta data.
 */
define ( 'BP_WDF_DB_VERSION', '1' );

/* Only load the component if BuddyPress is loaded and initialized. */
function bp_wdf_init() {
	// Because our loader file uses BP_Component, it requires BP 1.5 or greater.
	if ( version_compare( BP_VERSION, '1.5', '>' ) )
		require( WDF_PLUGIN_BASE_DIR . '/lib/bp/bp-wdf-loader.php' );
}
add_action( 'bp_include', 'bp_wdf_init' );

/* Put setup procedures to be run when the plugin is activated in the following function */
function bp_wdf_activate() {

}
register_activation_hook( __FILE__, 'bp_wdf_activate' );

/* On deacativation, clean up anything your component has added. */
function bp_wdf_deactivate() {
	/* You might want to delete any options or tables that your component created. */
}
register_deactivation_hook( __FILE__, 'bp_wdf_deactivate' );
?>