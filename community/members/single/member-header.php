<?php

/**
 * BuddyPress - Users Header
 *
 * @package BuddyPress
 * @subpackage bp-default
 */



?>
<?php do_action( 'bp_before_member_header' ); ?>

<div id="item-header-avatar">
    <a href="<?php bp_displayed_user_link(); ?>">

        <?php bp_displayed_user_avatar( 'type=full' ); ?>

    </a>
</div><!-- #item-header-avatar -->

<div id="item-header-content">

    <h2>
        <a href="<?php bp_displayed_user_link(); ?>"><?php bp_displayed_user_fullname(); ?></a>
    </h2>

    <?php if ( bp_is_active( 'activity' ) && bp_activity_do_mentions() ) : ?>
        <span class="user-nicename">@<?php bp_displayed_user_mentionname(); ?></span>
    <?php endif; ?>

    <span class="activity"><?php bp_last_activity( bp_displayed_user_id() ); ?></span>

    <?php do_action( 'bp_before_member_header_meta' ); ?>

    <div id="item-meta">

        <?php if ( bp_is_active( 'activity' ) ) : ?>

            <div id="latest-update">

                <?php bp_activity_latest_update( bp_displayed_user_id() ); ?>

            </div>

        <?php endif; ?>

        <div id="item-buttons">

            <?php do_action( 'bp_member_header_actions' ); ?>

        </div><!-- #item-buttons -->

        <?php
        /***
         * If you'd like to show specific profile fields here use:
         * bp_member_profile_data( 'field=About Me' ); -- Pass the name of the field
         */
         do_action( 'bp_profile_header_meta' );

            ?>

    </div><!-- #item-meta -->

</div><!-- #item-header-content -->

<style>
    /* members/single/member-header.php */
    .article-header {display:none;}
    #profile-personal-li {display:none;}
    #messages_search_submit {display:none;}
    #item-nav {border-bottom:1px solid #eaeaea;}
    #buddypress div.item-list-tabs#subnav {margin:0;}
    #buddypress #item-body form#whats-new-form {padding-top:15px;}
</style>

<?php do_action( 'bp_after_member_header' ); ?>

<?php do_action( 'template_notices' ); ?>
