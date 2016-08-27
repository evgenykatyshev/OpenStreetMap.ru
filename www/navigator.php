<?
$page_logo = "/img/logo-navigator.png";

$page_head_css = <<<PHP_HEAD_CSS
  <link rel="stylesheet" href="css/page.navigator.css" />
PHP_HEAD_CSS;

$page_head_js = <<<PHP_HEAD_JS
PHP_HEAD_JS;

$page_topmenu = <<<PHP_TOPMENU
PHP_TOPMENU;

$page_topbar = <<<PHP_TOPBAR
PHP_TOPBAR;

$page_content = <<<PHP_CONTENT

<div id="ncontent">
  <h1>Карты для навигаторов</h1>
	<p class="description">Карты России и других стран на основе OpenStreetMap доступны для популярных навигаторов и навигационных программ.</p>
	<div class="nav-system nav-system_garmin">
	  <div class="nav-system__logo"></div>
	  <div class="nav-system__title">Ежедневно обновляемые карты для Garmin</div>
		<div>
		  <a href="http://gis-lab.info/data/mp/" class="nav-system__link">gis-lab.info</a>
		  <a href="http://maptourist.org/file/category/3-garmin" class="nav-system__link">maptourist.org</a>
		  <a href="http://velo100.ru/gps/download" class="nav-system__link">velo100.ru</a>
		</div>
	</div>
	<div class="nav-system nav-system_navitel">
	  <div class="nav-system__logo"></div>
	  <a href="http://navitel.osm.rambler.ru/" class="nav-system__title">Navitel</a>
		<div class="nav-system__updates">для версий до 5.0.3, лучше 3.5<br />обновление раз в неделю</div>
	</div>
	<div class="nav-system nav-system_pocketgis">
	  <div class="nav-system__logo"></div>
	  <a href="http://boltomerka.ru/pgsmaps.php" class="nav-system__title">PocketGIS</a>
		<div class="nav-system__updates">обновление раз в полгода</div>
	</div>
	<div class="nav-system nav-system_cityguide">
	  <div class="nav-system__logo"></div>
	  <a href="http://peirce.gis-lab.info/daily" class="nav-system__title">Ситигид</a>
		<div class="nav-system__updates">обновление раз в неделю</div>
	</div>
	<div class="nav-system nav-system_progorod">
	  <div class="nav-system__logo">ПРОГОРОД</div>
	  <a href="http://www.pro-gorod.ru/download#maps" class="nav-system__title">Прогород</a>
		<div class="nav-system__updates">за 2015 год</div>
	</div>
	<div class="nav-system nav-system_7ways">
	  <div class="nav-system__logo">Семь дорог</div>
	  <div class="nav-system__title">Семь дорог</div>
		<div class="nav-system__updates">обновление раз в неделю</div>
	  <a href="http://www.megamaps.org/" class="nav-system__link">megamaps.org</a>
	  <a href="http://navitel.osm.rambler.ru/" class="nav-system__link">osm.rambler.ru</a>
	</div>
</div>

PHP_CONTENT;
?>
