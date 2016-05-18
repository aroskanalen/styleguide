<?php
include_once $_SERVER['DOCUMENT_ROOT']. '/design/assets/_settings.php';

  $is_active = 3;
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
      <a href="<?php echo $base_path; ?>/design/screen/index.php" class="submenu--icon-link is-active"><i class="material-icons">apps</i></a>
      <a href="<?php echo $base_path; ?>/design/screen/planning/index.php" class="submenu--icon-link"><i class="material-icons">event_note</i></a>
    </div>
  </div>
</nav>

<main role="main" class="content">
  <div class="content--inner">
    <h1><a href="<?php echo $base_path; ?>/screen/">Skærme</a> / Oversigt</h1>
    <div class="nav-tabs">
      <a href="#" class="nav-tabs--item">
        Lorem ipsum
      </a>
      <a href="#" class="nav-tabs--item is-active">
        Lorem ipsum 1
      </a>
      <a href="#" class="nav-tabs--item">
        Lorem ipsum 2
      </a>
      <a href="#" class="nav-tabs--item">
        Lorem ipsum 3
      </a>
    </div>
    <div class="tabs is-right">
      <a href="<?php echo $base_path; ?>/screen/" class="tabs--item is-active">Oversigt</a>
      <a href="<?php echo $base_path; ?>/screen/planning/" class="tabs--item">Planlægning</a>
    </div>
    <div class="search-result--wrapper">
      <div class="search-result--box">
        <h3 class="search-result--box-header">Tures Dev Kanal</h3>
        <i class="material-icons search-result--box-settings-icon js-search-result-toggle-dropdown">settings</i>
        <div class="dropdown js-search-result-dropdown is-hidden">
          <i class="material-icons dropdown--settings-icon js-search-result-toggle-dropdown">close</i>
          <ul class="dropdown--items">
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 1</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 2</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 3</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 4</a>
            </li>
          </ul>
        </div>
        <div class="search-result--box-content">
          <div class="search-result--box-meta">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, </div>
        </div>
      </div>
      <div class="search-result--box">
        <h3 class="search-result--box-header">Tures Dev Kanal</h3>
        <i class="material-icons search-result--box-settings-icon">settings</i>
        <div class="dropdown is-hidden">
          <i class="material-icons dropdown--settings-icon">close</i>
          <ul class="dropdown--items">
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 1</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 2</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 3</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 4</a>
            </li>
          </ul>
        </div>
        <div class="search-result--box-content">
          <div class="search-result--box-meta">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, </div>
        </div>
      </div>
      <div class="search-result--box">
        <h3 class="search-result--box-header">Tures Dev Kanal</h3>
        <i class="material-icons search-result--box-settings-icon">settings</i>
        <div class="dropdown is-hidden">
          <i class="material-icons dropdown--settings-icon">close</i>
          <ul class="dropdown--items">
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 1</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 2</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 3</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 4</a>
            </li>
          </ul>
        </div>
        <div class="search-result--box-content">
          <div class="search-result--box-meta">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, </div>
        </div>
      </div>
      <div class="search-result--box">
        <h3 class="search-result--box-header">Tures Dev Kanal</h3>
        <i class="material-icons search-result--box-settings-icon">settings</i>
        <div class="dropdown is-hidden">
          <i class="material-icons dropdown--settings-icon">close</i>
          <ul class="dropdown--items">
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 1</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 2</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 3</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 4</a>
            </li>
          </ul>
        </div>
        <div class="search-result--box-content">
          <div class="search-result--box-meta">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, </div>
        </div>
      </div>
      <div class="search-result--box">
        <h3 class="search-result--box-header">Tures Dev Kanal</h3>
        <i class="material-icons search-result--box-settings-icon">settings</i>
        <div class="dropdown is-hidden">
          <i class="material-icons dropdown--settings-icon">close</i>
          <ul class="dropdown--items">
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 1</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 2</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 3</a>
            </li>
            <li class="dropdown--item">
              <a href="#" class="dropdown--link">Lorem ipsum 4</a>
            </li>
          </ul>
        </div>
        <div class="search-result--box-content">
          <div class="search-result--box-meta">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, </div>
        </div>
      </div>
    </div>
    <div class="pager--search">
      <div class="pager--search-item is-inactive">
        <span class="pager--search-item-inner is-arrow">❮❮</span>
      </div>
      <div class="pager--search-item is-inactive">
        <span class="pager--search-item-inner is-arrow">❮</span>
      </div>
      <div class="pager--search-item is-active">
        <span class="pager--search-item-inner">1</span>
      </div>
      <div class="pager--search-item">
        <span class="pager--search-item-inner">2</span>
      </div>
      <div class="pager--search-item">
        <span class="pager--search-item-inner">3</span>
      </div>
      <div class="pager--search-item">
        <span class="pager--search-item-inner">4</span>
      </div>
      <div class="pager--search-item">
        <span class="pager--search-item-inner is-arrow">❯</span>
      </div>
      <div class="pager--search-item">
        <span class="pager--search-item-inner is-arrow">❯❯</span>
      </div>
    </div>
  </div>
</main>

<?php include_once $assets_path . '/_footer.php'; ?>
