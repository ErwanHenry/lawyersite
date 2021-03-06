<script>

var FLBuilderConfig = {
    ajaxUrl: '<?php echo get_permalink( $post_id ); ?>',
    enabledTemplates: '<?php echo $enabled_templates; ?>',
    homeUrl:  '<?php echo home_url(); ?>',
    isRtl:  <?php if(is_rtl()) echo 'true'; else echo 'false'; ?>,
    lite: <?php if(FL_BUILDER_LITE === true) echo 'true'; else echo 'false'; ?>,
    postId: <?php echo $post_id; ?>,
    postType: '<?php echo get_post_type(); ?>',
    simpleUi: <?php if(!current_user_can(FLBuilderModel::get_editing_capability())) echo 'true'; else echo 'false'; ?>,
    upgradeUrl: '<?php echo FL_BUILDER_UPGRADE_URL; ?>'
};

var FLBuilderStrings = {
    actionsLightboxTitle: '<?php _e('What would you like to do?', 'fl-builder'); ?>',
    cancel: '<?php _e('Cancel', 'fl-builder'); ?>',
    changeTemplate: '<?php _e('Change Template', 'fl-builder'); ?>',
    changeTemplateMessage: '<?php _e('Warning! Changing the template will replace your existing layout. Do you really want to do this?', 'fl-builder'); ?>',
    column: '<?php _e('Column', 'fl-builder') ?>',
    columnSettings: '<?php _e('Column Settings', 'fl-builder') ?>',
    contentSliderSelectLayout:  '<?php _e('Please select either a background layout or content layout before submitting.', 'fl-builder'); ?>',
    deleteFieldMessage: '<?php _e('Do you really want to delete this item?', 'fl-builder'); ?>',
    deleteModuleMessage: '<?php _e('Do you really want to delete this module? All content data will be permanently deleted.', 'fl-builder') ?>',
    deleteRowMessage: '<?php _e('Do you really want to delete this row? All content data will be permanently deleted.', 'fl-builder') ?>',
    deleteTemplate: '<?php _e('Do you really want to delete this template?', 'fl-builder'); ?>',
    discard: '<?php _e('Discard Draft', 'fl-builder'); ?>',
    discardMessage: '<?php _e('Do you really want to discard this draft? All of your changes that are not published will be lost.', 'fl-builder'); ?>',
    draft: '<?php _e('Save Draft', 'fl-builder'); ?>',
    duplicate: '<?php _ex( 'Duplicate', 'Duplicate page/post action label.', 'fl-builder' ); ?>',
    duplicatePage: '<?php _e('Duplicate This Page', 'fl-builder'); ?>',
    duplicateTemplate: '<?php _e('Duplicate This Template', 'fl-builder'); ?>',
    editGlobalSettings: '<?php _e('Edit Global Settings', 'fl-builder'); ?>',
    emptyMessage: '<?php _e('Drop a row layout or module to get started!', 'fl-builder') ?>',
    fullSize: '<?php _e('Full Size', 'fl-builder'); ?>',
    insert: '<?php _e('Insert', 'fl-builder'); ?>',
    large: '<?php _e('Large', 'fl-builder'); ?>',
    manageTemplates: '<?php _e('Manage Templates', 'fl-builder'); ?>',
    medium: '<?php _e('Medium', 'fl-builder'); ?>',
    module: '<?php _e('Module', 'fl-builder') ?>',
    move: '<?php _e('Move', 'fl-builder'); ?>',
    newColumn: '<?php _e('New Column', 'fl-builder') ?>',
    newRow: '<?php _e('New Row', 'fl-builder') ?>',
    noResultsFound: '<?php _e('No results found.', 'fl-builder') ?>',
    ok: '<?php _e( 'OK', 'fl-builder' ); ?>',
    photoPage: '<?php _e('Photo Page', 'fl-builder'); ?>',
    photoSelected: '<?php _e('Photo Selected', 'fl-builder'); ?>',
    photosSelected: '<?php _e('Photos Selected', 'fl-builder'); ?>',
    publish: '<?php _e('Publish Changes', 'fl-builder'); ?>',
    remove: '<?php _e('Remove', 'fl-builder'); ?>',
    row: '<?php _e('Row', 'fl-builder') ?>',
    rowSettings: '<?php _e('Row Settings', 'fl-builder') ?>',
    saveCoreTemplate: '<?php _e('Save Core Template', 'fl-builder'); ?>',
    saveTemplate: '<?php _e('Save Template', 'fl-builder'); ?>',
    selectPhoto: '<?php _e('Select Photo', 'fl-builder'); ?>',
    selectPhotos: '<?php _e('Select Photos', 'fl-builder'); ?>',
    selectVideo: '<?php _e('Select Video', 'fl-builder'); ?>',
    settings: '<?php _ex( '%s Settings', '%s stands for module name.', 'fl-builder' ); ?>',
    templateAppend: '<?php _e('Append New Layout', 'fl-builder'); ?>',
    templateReplace: '<?php _e('Replace Existing Layout', 'fl-builder'); ?>',
    templateSaved: '<?php _e('Template Saved!', 'fl-builder'); ?>',
    thumbnail: '<?php _e('Thumbnail', 'fl-builder'); ?>',
    unloadWarning: '<?php _e('The settings you are currently editing will not be saved if you navigate away from this page.', 'fl-builder'); ?>'
};

</script>