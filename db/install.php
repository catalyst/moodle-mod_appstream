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
 * Provides code to be executed during the module installation
 *
 * Note that the latest AWS SDK for PHP is downloaded during installation.
 *
 * @package    mod_appstream
 * @copyright  2018 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Post installation procedure
 *
 * @see upgrade_plugins_modules()
 */
function xmldb_appstream_install() {
  file_put_contents("../mod/appstream/aws.phar", fopen("http://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.phar", 'r'));
}

/**
 * Post installation recovery procedure
 *
 * @see upgrade_plugins_modules()
 */
function xmldb_appstream_install_recovery() {
}
