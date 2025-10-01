<?php
if (have_comments()) :
    ?>
    <h2>Comments</h2>
    <ol>
        <?php wp_list_comments(); ?>
    </ol>
<?php
endif;

comment_form();
?>
