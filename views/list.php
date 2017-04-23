<?php

use Data\DataManager;

$categories = DataManager::getCategories();
$categoryId = isset($_REQUEST['categoryId']) ? (int)$_REQUEST['categoryId'] : null;
$books = $categoryId ? DataManager::getBooksByCategory($categoryId) : null;

require_once('views/partials/header.php'); ?>







  <div class="page-header">
    <h2>List of books by category</h2>
  </div>

  <ul class="nav nav-tabs">
	  <?php foreach ($categories AS $cat): ?>
        <li role="presentation">
          <a href="<?php echo $_SERVER['PHP_SELF'] ?>?view=list&categoryId=<?php echo urlencode($cat->getId()); ?>">
              <?php echo $cat->getName(); ?>
          </a></span>
        </li>
	  <?php endforeach; ?>
  </ul>

<?php if (isset($books)) : ?>
	<?php if (sizeof($books) > 0) : ?>

    <?php require('views/partials/booklist.php'); ?>

	<?php else: ?>
    <div class="alert alert-warning">
       No books in this category.
    </div>
  <?php endif; ?>

<?php else: ?>
  <div class="alert alert-info">
    Please select a category.
  </div>
<?php endif; ?>

<?php require_once('views/partials/footer.php'); ?>