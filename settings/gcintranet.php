<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Settings for Custom CSS.
 *
 * @package    theme_wet-boew
 * @copyright  2016 TNG Consulting Inc. <http://www.tngconsulting.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

// General settings.
$page = new admin_settingpage($themename . '_gcintranet', get_string('themename', 'theme_gcintranet'));

// If first time, initialize this tab's settings with defaults.
if (empty(get_config($themename, 'init')) || (is_siteadmin() && optional_param('resettheme', 0, PARAM_INT) == 1)) {
    set_config('bannertitle', get_string('bannerdefault', $themename), $themename); // GCintranet.
    set_config('bannerforeground', '#ffffff', $themename); // White.
    set_config('bannerbackground', '#7f1322', $themename); // Maroon.
    set_config('bannertitleforeground', '#ffffff', $themename); // White.
    set_config('bannertitlebackground', '#620e1d', $themename); // Dark maroon.
    set_config('custommenuforeground', '#ffffff', $themename); // White.
    set_config('custommenubackground', '#606060', $themename); // Grey.
}

// Banner title.
$name = $themename . '/bannertitle';
$title = get_string('bannertitle', $themename);
$description = get_string('bannertitle_desc', $themename);
$default = get_string('bannerdefault', $themename);
$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Banner foreground colour.
$name = $themename . '/bannerforeground';
$title = get_string('bannerforeground', $themename);
$description = get_string('bannerforeground_desc', $themename);
$default = '#ffffff';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Banner background colour.
$name = $themename . '/bannerbackground';
$title = get_string('bannerbackground', $themename);
$description = get_string('bannerbackground_desc', $themename);
$default = '#7f1322';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Banner title foreground colour.
$name = $themename . '/bannertitleforeground';
$title = get_string('bannertitleforeground', $themename);
$description = get_string('bannertitleforeground_desc', $themename);
$default = '#ffffff';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Banner title background colour.
$name = $themename . '/bannertitlebackground';
$title = get_string('bannertitlebackground', $themename);
$description = get_string('bannertitlebackground_desc', $themename);
$default = '#620e1d';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Custom menu foreground colour.
$name = $themename . '/custommenuforeground';
$title = get_string('custommenuforeground', $themename);
$description = get_string('custommenuforeground_desc', $themename);
$default = '#ffffff';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Custom menu background colour.
$name = $themename . '/custommenubackground';
$title = get_string('custommenubackground', $themename);
$description = get_string('custommenubackground_desc', $themename);
$default = '#606060';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Add the page after definiting all the settings!
$settings->add($page);
