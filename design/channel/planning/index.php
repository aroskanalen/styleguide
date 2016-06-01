<?php
include_once $_SERVER['DOCUMENT_ROOT']. '/design/assets/_settings.php';

$is_active = 2;
$class = 'is-page';

include_once $assets_path . '/_header.php';
include_once $assets_path . '/_menus.php';
?>

<nav class="submenu">
  <div class="submenu--inner">
    <div class="submenu--links is-left">
      <a href="#" class="submenu--link">
        <i class="material-icons md-36">add</i>
        <span>Opret skærm</span>
      </a>
    </div>
    <div class="submenu--links is-right">
      <a href="<?php echo $base_path; ?>/design/screen/index.php" class="submenu--icon-link"><i data-icon="apps" class="is-medium"></i></a>
      <a href="<?php echo $base_path; ?>/design/screen/planning/index.php" class="submenu--icon-link is-active"><i data-icon="event-note" class="is-inverted is-medium"></i></a>
    </div>
  </div>
</nav>
<main role="main" class="content">
  <div class="content--inner">
    <div class="container has-wrap search--field-wrapper">
      <form class="search">
        <div class="search--input">
          <input type="search" placeholder="Søg...">
        </div>
      </form>
      <i data-icon="tune" class="search--toggle-filter is-large"></i>
    </div>
    <div class="container has-wrap search--filters-wrapper">
      <div class="tabs is-center" data-tabs-count="2">
        <span class="tabs--item is-active has-flex" data-ng-class="{'is-active': showFromUser == 'mine'}" data-ng-click="setUser('mine')"><i data-icon="check-circle" class="is-tiny"></i><span class="tabs--text">Mine</span></span>
        <span data-ng-class="{'is-active': showFromUser == 'all'}" data-ng-click="setUser('all')" class="tabs--item has-flex"><span class="tabs--text">Alle</span></span>
      </div>
      <div class="tabs is-center" data-tabs-count="3">
        <span class="tabs--item is-active has-flex" data-ng-class="{'is-active': sort.created_at === 'desc'}" data-ng-click="setSort('created_at', 'desc')"><i data-icon="check-circle" class="is-tiny"></i><span class="tabs--text">Nyeste</span></span>
        <span class="tabs--item has-flex" data-ng-class="{'is-active': sort.created_at === 'asc'}" data-ng-click="setSort('created_at', 'asc')"><span class="tabs--text">Ældste</span></span>
        <span class="tabs--item" data-ng-class="{'is-active': sort.title}"  data-ng-click="setSort('title', 'asc')"><span class="tabs--text">A-Å</span></span>
      </div>
    </div>
    <?php include $assets_path . '/_timeline2.php'; ?>
    <?php include $assets_path . '/_timeline2.php'; ?>
    <?php include $assets_path . '/_timeline2.php'; ?>
    <?php include $assets_path . '/_timeline2.php'; ?>
  </div>
</main>

<?php include_once $assets_path . '/_footer.php'; ?>


