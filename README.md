# WP Content Framework (Presenter module)

[![CI Status](https://github.com/wp-content-framework/presenter/workflows/CI/badge.svg)](https://github.com/wp-content-framework/presenter/actions)
[![License: GPL v2+](https://img.shields.io/badge/License-GPL%20v2%2B-blue.svg)](http://www.gnu.org/licenses/gpl-2.0.html)
[![PHP: >=5.6](https://img.shields.io/badge/PHP-%3E%3D5.6-orange.svg)](http://php.net/)
[![WordPress: >=3.9.3](https://img.shields.io/badge/WordPress-%3E%3D3.9.3-brightgreen.svg)](https://wordpress.org/)

[WP Content Framework](https://github.com/wp-content-framework/core) のモジュールです。

## Table of Contents

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
<details>
<summary>Details</summary>

- [要件](#%E8%A6%81%E4%BB%B6)
- [インストール](#%E3%82%A4%E3%83%B3%E3%82%B9%E3%83%88%E3%83%BC%E3%83%AB)
  - [依存モジュール](#%E4%BE%9D%E5%AD%98%E3%83%A2%E3%82%B8%E3%83%A5%E3%83%BC%E3%83%AB)
  - [基本設定](#%E5%9F%BA%E6%9C%AC%E8%A8%AD%E5%AE%9A)
- [Author](#author)

</details>
<!-- END doctoc generated TOC please keep comment here to allow auto update -->

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
- [GitHub (Technote)](https://github.com/technote-space)
- [Blog](https://technote.space)
