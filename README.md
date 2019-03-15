# WP Content Framework (Presenter module)

[![License: GPL v2+](https://img.shields.io/badge/License-GPL%20v2%2B-blue.svg)](http://www.gnu.org/licenses/gpl-2.0.html)
[![PHP: >=5.6](https://img.shields.io/badge/PHP-%3E%3D5.6-orange.svg)](http://php.net/)
[![WordPress: >=3.9.3](https://img.shields.io/badge/WordPress-%3E%3D3.9.3-brightgreen.svg)](https://wordpress.org/)

[WP Content Framework](https://github.com/wp-content-framework/core) のモジュールです。

# 要件
- PHP 5.6 以上
- WordPress 3.9.3 以上

# インストール

``` composer require wp-content-framework/presenter ```  

## 依存モジュール
* [matthiasmullie/minify](https://github.com/matthiasmullie/minify)

## 基本設定
- configs/config.php  

|設定値|説明|
|---|---|
|fontawesome_handle|Font Awesome用のハンドル名|
|fontawesome_url|Font AwesomeのURL|
|fontawesome_integrity|Font Awesomeのintegrity属性値|
|fontawesome_crossorigin|Font Awesomeのcrossorigin属性値|
|fontawesome_icon_url|Font AwesomeのアイコンURL|
|fontawesome_font_family|Font Awesomeのfont family|

- configs/setting.php  

|設定値|説明|
|---|---|
|minify_js|生成されるJSを圧縮するかどうかを設定 \[default = true]|
|minify_css|生成されるCSSを圧縮するかどうかを設定 \[default = true]|
|assets_version|CSSやJS等に付与するバージョン(キャッシュ制御) \[default = プラグインのバージョン]|

# Author

[GitHub (Technote)](https://github.com/technote-space)  
[Blog](https://technote.space)
