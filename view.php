<?php

require('../../config.php');
require_once('../../lib/moodlelib.php');

require_login();

//get our config
$def_config = get_config('block_superiframe');

// construct $PAGE
$usercontext = context_user::instance($USER->id);
$PAGE->set_course($COURSE);
$PAGE->set_url('/blocks/superiframe/view.php');
$PAGE->set_heading($SITE->fullname);
$PAGE->set_pagelayout('course');
$PAGE->set_title(get_string('pluginname', 'block_superiframe'));
$PAGE->navbar->add(get_string('pluginname', 'block_superiframe'));

// call renderer for viewing page
$renderer = $PAGE->get_renderer('block_superiframe');
$renderer->display_view_page($def_config->url, $def_config->width, $def_config->height,
                             $def_config->borderwidth, $def_config->bordercolor);
return;
