<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile 1.4.2 日本語デモ</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="../external/jquery/jquery.js"></script>
	<script src="_assets/js/"></script>
	<script src="../js/"></script>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-home">

	<div data-role="header" class="jqm-header">
		<h2><img src="_assets/img/jquery-logo.png" alt="jQuery Mobile"></h2>
		<p>Version <span class="jqm-version"></span></p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->

	<div role="main" class="ui-content jqm-content">

		<h1>jQuery Mobile 日本語デモ</h1>

		<p><strong>jQuery Mobileはスマートフォン、タブレット、及びデスクトップデバイス等、すべてのデバイスでアクセス出来るよう設計され、タッチ操作に最適化されたHTML5によるUIフレームワークです。</strong></p>

		<img src="_assets/img/devices.png">

        <h2>このサイトについて</h2>
        <p>このデモはjQuery Mobileのデモを有志の手により日本語訳したものです。不完全な部分が多々ありますが、役立ててもらえれば幸いです。</p>

        <h3>翻訳者を募集しています</h3>
        <p>このプロジェクトでは翻訳に協力してくれる方を募集しています。詳しくは<a href=""></a>および<a href=""></a>をご覧ください。

		<p>jQuery Mobileは初めてですか？まずは<a href="intro/" data-ajax="false">紹介</a>を読んで始めましょう。技術情報については<a href="http://api.jquerymobile.com" title="jQuery Mobile API documentation" target="_blank">API documentation</a>をご覧下さい。jQuery Mobileのダウンロード及びjQuery Mobileについて詳しくは<a href="http://jquerymobile.com" title="jQuery Mobile web site" target="_blank">jquerymobile.com</a>をご覧ください。</p>

        <div class="ui-grid-a ui-responsive">
        	<div class="ui-block-a">
        		<div class="jqm-block-content">
        			<h3>ページとナビゲーション</h3>

        			<p><a href="pages/" data-ajax="false">ページ</a></p>
        			<p><a href="navigation/" data-ajax="false">ナビゲーション</a></p>
        			<p><a href="loader/" data-ajax="false">Loader</a></p>
        			<p><a href="transitions/" data-ajax="false">Transitions</a></p>
        		</div>
        	</div>
        	<div class="ui-block-b">
        		<div class="jqm-block-content">
        			<h3>CSSフレームワーク</h3>

        			<p><a href="theme-default/" data-ajax="false">テーマ設定</a></p>
        			<p><a href="button-markup/" data-ajax="false">ボタン</a></p>
        			<p><a href="icons/" data-ajax="false">アイコン</a></p>
        			<p><a href="grids/" data-ajax="false">グリッド</a></p>
        			<p><a href="../body-bar-classes/" data-ajax="false">Body and bar classes</a></p>
        		</div>
        	</div>        	
        	<div class="ui-block-a">
        		<div class="jqm-block-content">
        			<h3>ウィジェット</h3>

        			<p><a href="toolbar/" data-ajax="false">ツールバー</a>, <a href="navbar/" data-ajax="false">ナビバー</a></p>
        			<p><a href="tabs/" data-ajax="false">タブ</a>, <a href="panel/" data-ajax="false">パネル</a>, <a href="popup/" data-ajax="false">ポップアップ</a></p>
        			<p><a href="listview/" data-ajax="false">リスト</a></p>
        			<p><a href="collapsible/" data-ajax="false">Collapsible</a>, <a href="collapsibleset/" data-ajax="false">Collapsible set</a></p>
        			<p><a href="table-reflow/" data-ajax="false">Table Reflow</a>, <a href="table-column-toggle/" data-ajax="false">Table Column Toggle</a></p>
        			<p><a href="filterable/" data-ajax="false">フィルター</a></p>
        		</div>
        	</div>
        	<div class="ui-block-b">
        		<div class="jqm-block-content">
        			<h3>フォームウィジェット</h3>

        			<p><a href="checkboxradio-checkbox/" data-ajax="false">チェックボックス</a>, <a href="checkboxradio-radio/" data-ajax="false">ラジオボタン</a></p>
        			<p><a href="selectmenu/" data-ajax="false">セレクトメニュー</a>, <a href="selectmenu-custom/" data-ajax="false">カスタムメニュー</a></p>
        			<p><a href="flipswitch/" data-ajax="false">フリップスイッチ</a></p>
        			<p><a href="slider/" data-ajax="false">スライダー</a>, <a href="rangeslider/" data-ajax="false">範囲スライダー</a></p>
        			<p><a href="button/" data-ajax="false">Input button</a></p>
        			<p><a href="controlgroup/" data-ajax="false">Controlgroup</a></p>
        		</div>
        	</div>
        </div>

	</div><!-- /content -->

	<?php include( 'jqm-navmenu.php' ); ?>

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
		<p>Copyright 2014 The jQuery Foundation</p>
	</div><!-- /footer -->

<?php include( 'jqm-search.php' ); ?>

</div><!-- /page -->

</body>
</html>
