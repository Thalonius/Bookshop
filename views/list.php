<?php
use Data\DataManager;
$categories = DataManager::getCategories();

require_once('views/partials/header.php'); ?>

<div class="page-header">
    <h2>List</h2>
</div>

<ul class="nav nav-tabs">   <!-- Bootstrap - Liste als Tabs dargestellt -->
    <?php foreach ($categories AS $cat): ?>
        <li role="presentation">
            <a href="<?php echo $_SERVER['PHP_SELF'] ?>?view=list&categoryId=<?php echo urlencode($cat->getId()); ?>"><?php echo $cat->getName(); ?></a></span>
        </li>
    <?php endforeach; ?>
</ul>

<?php require_once('views/partials/footer.php'); ?>