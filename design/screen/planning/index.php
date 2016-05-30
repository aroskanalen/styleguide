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
      <a href="<?php echo $base_path; ?>/design/screen/index.php" class="submenu--icon-link"><i data-icon="apps" class="is-medium"></i></a>
      <a href="<?php echo $base_path; ?>/design/screen/planning/index.php" class="submenu--icon-link is-active"><i data-icon="event-note" class="is-inverted is-medium"></i></a>
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
        <a class="search--toggle-filter"><i class="icon icon--tune is-large"></i></a>
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
      <timeline id="'timeline_' + 3" data="screen" data-ng-repeat="screen in data" class="ng-scope ng-isolate-scope">
        <div>
          <div class="ng-binding">Lorem</div>
          <div>
            <input type="button" data-ng-click="zoom(-0.2)" value="Zoom in">
            <input type="button" data-ng-click="zoom( 0.2)" value="Zoom out">
            <input type="button" data-ng-click="move( 0.2)" value="Move left">
            <input type="button" data-ng-click="move(-0.2)" value="Move right">
          </div>
          <div id="id"></div>
        </div>
        <div class="vis-timeline vis-bottom" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 216px;">
          <div class="vis-panel vis-background" style="height: 214px; width: 1663px; left: 0px; top: 0px;"></div>
          <div class="vis-panel vis-background vis-vertical" style="height: 214px; width: 1590px; left: 75px; top: 0px;">
            <div class="vis-axis" style="top: 154px; left: 0px;">
              <div class="vis-group"></div>
              <div class="vis-group"></div>
              <div class="vis-group"></div>
            </div>
            <div class="vis-time-axis vis-background">
              <div class="vis-grid vis-vertical vis-minor vis-tuesday vis-current-week vis-odd" style="top: -1px; height: 187px; left: -100.472px; width: 227.143px;"></div>
              <div class="vis-grid vis-vertical vis-minor vis-wednesday vis-yesterday vis-current-week vis-even" style="top: -1px; height: 187px; left: 126.671px; width: 227.143px;"></div>
              <div class="vis-grid vis-vertical vis-minor vis-thursday vis-today vis-current-week vis-odd" style="top: -1px; height: 187px; left: 353.814px; width: 227.143px;"></div>
              <div class="vis-grid vis-vertical vis-minor vis-friday vis-tomorrow vis-current-week vis-even" style="top: -1px; height: 187px; left: 580.957px; width: 227.143px;"></div>
              <div class="vis-grid vis-vertical vis-minor vis-saturday vis-current-week vis-odd" style="top: -1px; height: 187px; left: 808.1px; width: 227.143px;"></div>
              <div class="vis-grid vis-vertical vis-minor vis-sunday vis-even" style="top: -1px; height: 187px; left: 1035.24px; width: 227.143px;"></div>
              <div class="vis-grid vis-vertical vis-minor vis-monday vis-odd" style="top: -1px; height: 187px; left: 1262.39px; width: 227.143px;"></div>
              <div class="vis-grid vis-vertical vis-minor vis-tuesday vis-even" style="top: -1px; height: 187px; left: 1489.53px; width: 227.143px;"></div>
            </div>
            <div class="vis-current-time" title="Current time: Thursday, May 19th 2016, 9:38:40" style="position: absolute; top: 0px; height: 100%; left: 445.593px;"></div>
          </div>
          <div class="vis-panel vis-background vis-horizontal" style="height: 155px; width: 1663px; left: 0px; top: -1px;"></div>
          <div class="vis-panel vis-center" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 155px; width: 1590px; left: 74px; top: -1px;">
            <div class="vis-content" style="left: 0px; top: 0px;">
              <div class="vis-itemset" style="height: 153px;">
                <div class="vis-background">
                  <div class="vis-group" style="height: 0px;">
                    <div style="visibility: hidden;">?</div>
                  </div>
                  <div class="vis-group" style="height: 46px;">
                    <div style="visibility: hidden;">?</div>
                  </div>
                  <div class="vis-group" style="height: 46px;">
                    <div style="visibility: hidden;">?</div>
                  </div>
                  <div class="vis-group" style="height: 61px;">
                    <div style="visibility: hidden;">?</div>
                  </div>
                </div>
                <div class="vis-foreground">
                  <div class="vis-group" style="height: 46px;">
                    <div class="vis-item vis-range vis-selected vis-editable" style="left: -1588px; width: 4764px; top: 5px;">
                      <div class="vis-item-overflow"><div class="vis-item-content" style="left: 1588px;">Lorem ipsum</div>
                      </div><div class="vis-drag-left"></div>
                      <div class="vis-drag-right"></div>
                    </div>
                  </div>
                  <div class="vis-group" style="height: 46px;">
                    <div class="vis-item vis-range vis-editable" style="left: -1588px; width: 4764px; top: 5px;">
                      <div class="vis-item-overflow">
                        <div class="vis-item-content" style="left: 1588px;">Lorem ipsum</div>
                      </div>
                    </div>
                  </div>
                  <div class="vis-group" style="height: 61px;">
                    <div class="vis-item vis-range vis-editable" style="left: -1588px; width: 4764px; top: 5px;">
                      <div class="vis-item-overflow">
                        <div class="vis-item-content" style="left: 1588px;">Lorem ipsum</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
            <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
          </div>
          <div class="vis-panel vis-left" style="touch-action: pan-y; -webkit-user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 155px; left: 0px; top: -1px;">
            <div class="vis-content" style="left: 0px; top: 0px;">
              <div class="vis-labelset"><div class="vis-label" title="" style="height: 46px;">
                  <div class="vis-inner">Region 1</div>
                </div>
                <div class="vis-label" title="" style="height: 46px;">
                  <div class="vis-inner">Region 2</div>
                </div>
                <div class="vis-label" title="" style="height: 61px;">
                  <div class="vis-inner">Region 3</div>
                </div>
              </div>
            </div>
            <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
            <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
          </div>
          <div class="vis-panel vis-right" style="height: 155px; left: 1664px; top: -1px;">
            <div class="vis-content" style="left: 0px; top: 0px;"></div>
            <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
            <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
          </div>
          <div class="vis-panel vis-top" style="width: 1590px; left: 74px; top: 0px;"></div>
          <div class="vis-panel vis-bottom" style="width: 1590px; left: 74px; top: 154px;">
            <div class="vis-time-axis vis-foreground" style="height: 60px;">
              <div class="vis-text vis-minor vis-measure" style="position: absolute;">0</div>
              <div class="vis-text vis-major vis-measure" style="position: absolute;">0</div>
              <div class="vis-text vis-minor vis-tuesday vis-current-week vis-odd" style="top: 0px; left: -99.9718px; width: 227.143px;">Tue 17</div>
              <div class="vis-text vis-minor vis-wednesday vis-yesterday vis-current-week vis-even" style="top: 0px; left: 127.171px; width: 227.143px;">Wed 18</div>
              <div class="vis-text vis-minor vis-thursday vis-today vis-current-week vis-odd" style="top: 0px; left: 354.314px; width: 227.143px;">Thu 19</div>
              <div class="vis-text vis-minor vis-friday vis-tomorrow vis-current-week vis-even" style="top: 0px; left: 581.457px; width: 227.143px;">Fri 20</div>
              <div class="vis-text vis-minor vis-saturday vis-current-week vis-odd" style="top: 0px; left: 808.6px; width: 227.143px;">Sat 21</div>
              <div class="vis-text vis-minor vis-sunday vis-even" style="top: 0px; left: 1035.74px; width: 227.143px;">Sun 22</div
              <div class="vis-text vis-minor vis-monday vis-odd" style="top: 0px; left: 1262.89px; width: 227.143px;">Mon 23</div>
              <div class="vis-text vis-minor vis-tuesday vis-even" style="top: 0px; left: 1490.03px; width: 227.143px;">Tue 24</div>
              <div class="vis-text vis-major vis-tuesday vis-even" style="top: 30px; left: 0px;">May 2016</div>
            </div>
          </div>
        </div>
      </timeline>
    </form>
  </div>
</main>

<?php include_once $assets_path . '/_footer.php'; ?>


