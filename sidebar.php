<aside id="sidebar">
    <h1>sidebar</h1>
<?php if (is_active_sidebar('sidebar-1')) : ?>
    <?php dynamic_sidebar('sidebar-1'); ?>
<?php endif; ?>
</aside>
