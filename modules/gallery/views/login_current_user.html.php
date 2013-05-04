<?php defined("SYSPATH") or die("No direct script access.") ?>
<li>
  <? $name = $menu->label->for_html() ?>
  <? $hover_text = t("Your profile")->for_html_attr() ?>
  <? /* Disable link to profile details
  <?= t("Logged in as %name", array("name" => html::mark_clean(
        "<a href='$menu->url' title='$hover_text' id='$menu->id'>{$name}</a>"))) ?>
  */?>
  <?= t("Logged in as %name", array("name" => html::mark_clean(
        "<b title='$hover_text' id='$menu->id'>{$name}</b>"))) ?>
</li>
