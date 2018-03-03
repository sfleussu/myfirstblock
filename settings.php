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
 * superiframe settings
 *
 * @package    block_superiframe
 * @copyright  Daniel Neis <danielneis@gmail.com>
 * Modified for use in MoodleBites for Developers Level 1 by Richard Jones & Justin Hunt
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/*$settings->add(new admin_setting_heading('sampleheader',
         get_string('headerconfig', 'block_superiframe'),
         get_string('descconfig', 'block_superiframe')));
*/

// URL Setting
$settings->add(new admin_setting_heading('urlheader',
         get_string('urlheaderconfig', 'block_superiframe'),
         get_string('urldescconfig', 'block_superiframe')));
$defaulturl='https://quizlet.com/132695231/scatter/embed';
$settings->add(new admin_setting_configtext('block_superiframe/url', get_string('url', 'block_superiframe'),
            get_string('url_details', 'block_superiframe'), $defaulturl, PARAM_RAW));

// ASpect settings
$settings->add(new admin_setting_heading('aspectheader',
         get_string('aspectheaderconfig', 'block_superiframe'),
         get_string('aspectdescconfig', 'block_superiframe')));

$settings->add(new admin_setting_configtext('block_superiframe/width', get_string('width', 'block_superiframe'),
            get_string('width_details', 'block_superiframe'), 600, PARAM_INT));

$settings->add(new admin_setting_configtext('block_superiframe/height', get_string('height', 'block_superiframe'),
            get_string('height_details', 'block_superiframe'), 400, PARAM_INT));

$options = array();
$options['course']=get_string('course');
$options['popup']=get_string('popup');
$settings->add(new admin_setting_configselect('block_superiframe/pagelayout', 
        get_string('pagelayout', 'block_superiframe'),
        get_string('pagelayout_details', 'block_superiframe'),'course', $options));

// Just for fun
$options = [ '0' => 'none', '1px' => '1px', '2px' => '2px', '5px' => '5px', '7px' =>'7px' ];
$settings->add(new admin_setting_configselect('block_superiframe/borderwidth', 
        get_string('borderwidth', 'block_superiframe'),
        get_string('borderwidth_details', 'block_superiframe'),'0', $options));

$settings->add(new admin_setting_configcolourpicker('block_superiframe/bordercolor',
               get_string('bordercolor','block_superiframe'),
               get_string('bordercolor_details','block_superiframe'), '#B7006C'));
