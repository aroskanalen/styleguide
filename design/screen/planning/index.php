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
      <a href="<?php echo $base_path; ?>/design/screen/index.php" class="submenu--icon-link"><i class="material-icons">apps</i></a>
      <a href="<?php echo $base_path; ?>/design/screen/planning/index.php" class="submenu--icon-link is-active"><i class="material-icons">event_note</i></a>
    </div>
  </div>
</nav>
<main role="main" class="content">
  <div class="content--inner">
    <form class="search">
      <section class="search--elements">
        <div class="search--input">
          <input type="search" placeholder="Søg ...">
        </div>
        <a class="search--toggle-filter"><img src="<?php echo $base_path; ?>/design/assets/icons/ic_tune_48px.svg"></a>
      </section>
      <section class="search-planning">
        <article class="search-planning--item">
          <header>
            <h3 class="search-planning--item-header">Header</h3>
            <div class="search-planning--date-picker">< 1/1-16 - 1/7-16 ></div>
          </header>
          <div class="search-planning--channels">
            <div class="search-planning--channel">
              <div class="search-planning--channel-inner" style="left: 10%; width: 50%;">Channel #1</div>
            </div>
            <div class="search-planning--channel">
              <div class="search-planning--channel-inner" style="left: 28%; width: 30%;">Channel #2</div>
            </div>
            <div class="search-planning--channel">
              <div class="search-planning--channel-inner" style="left: 40%; width: 17%;">Channel #3</div>
            </div>
          </div>
          <ul>
            <ul>12:00</ul>
            <ul>12:00</ul>
            <ul>12:00</ul>
            <ul>12:00</ul>
            <ul>12:00</ul>
            <ul>12:00</ul>
            <ul>12:00</ul>
          </ul>
          <ol>
            <li>Mandag</li>
            <li>Tirsdag</li>
            <li>Onsdag</li>
            <li>Torsdag</li>
            <li>Fredag</li>
            <li>Lørdag</li>
            <li>Søndag</li>
          </ol>
        </article>
      </section>
    </form>
  </div>
</main>

<?php include_once $assets_path . '/_footer.php'; ?>
