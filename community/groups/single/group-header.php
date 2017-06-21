<?php

do_action( 'bp_before_group_header' );

?>

<div id="item-actions">

	<?php if ( bp_group_is_visible() ) : ?>

		<h3><?php _e( 'Leaders', 'buddypress' ); ?></h3>

		<?php bp_group_list_admins();

		if ( bp_group_has_moderators() ) :
                bp_group_list_mods();
		endif;

	endif; ?>

</div><!-- #item-actions -->

<div id="item-header-avatar">
	<a href="<?php bp_group_permalink(); ?>" title="<?php bp_group_name(); ?>">

		<?php bp_group_avatar(); ?>

	</a>
</div><!-- #item-header-avatar -->

<div id="item-header-content">
	<h2><a href="<?php bp_group_permalink(); ?>" title="<?php bp_group_name(); ?>"><?php bp_group_name(); ?></a></h2>


	<?php do_action( 'bp_before_group_header_meta' ); ?>

	<div id="item-meta">

		<?php bp_group_description(); ?>

		<div id="item-buttons">

			<?php do_action( 'bp_group_header_actions' ); ?>

		</div><!-- #item-buttons -->

		<?php do_action( 'bp_group_header_meta' ); ?>

	</div>
</div><!-- #item-header-content -->

<style>
    .article-header {display:none;}
    #group_invite_by_email-groups-li {display:none;}
    #group_invite_by_url-groups-li {display:none;}
    #invite-options {border-top:1px solid #eaeaea;}
    form#invite_by_email {margin-top: 15px;
        border-top: 1px solid #eaeaea;
        padding-top: 15px;}
    #group-map-groups-li {display:none;}
</style>


<?php
do_action( 'bp_after_group_header' );
do_action( 'template_notices' );
?>