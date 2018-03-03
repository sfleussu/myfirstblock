<?php

class block_superiframe_renderer extends plugin_renderer_base {

    //Here we return all the content that goes in the block
    function fetch_block_content() {

        global $CFG, $USER;

        // block should be on course page
        $currentcontext = $this->page->context->get_course_context(false);

        if (empty($currentcontext)) {
            return $this->content;
        }

        // Block could be on front page
        if ($this->page->course->id == SITEID) {
            $this->content->text .= "site context <br >";
        }
        // Check the block config string
        if (! empty($this->config->text)) {
            $this->content->text .= $this->config->text;
        }

        // Block content
        $text = html_writer::tag('p', get_string('welcomeuser', 'block_superiframe', $USER) ) .
                html_writer::tag('a', get_string('gotosuperiframe', 'block_superiframe'),
                                      [ 'href' => $CFG->wwwroot . '/blocks/superiframe/view.php' ] );
        return $text;

    }

    //Here we aggregate all the pieces of content of the view page and displays them
    function display_view_page($url, $width, $height, $borderwidth, $bordercolor) {

        global $USER;

        // start output to browser
        echo $this->output->header();
        echo $this->output->heading(get_string('pluginname', 'block_superiframe'),5);

        // The content
        echo html_writer::tag('p','I am some dummy content. Get rid of me vry fast!');
        echo html_writer::tag('p',fullname($USER) . $this->output->user_picture($USER) );
        echo html_writer::tag('iframe','',
                              [ 'src' => $url,
                                'height' => $height,
                                'width' => $width,
                                'style' => "border:$borderwidth $bordercolor solid" ] );
        echo $this->output->footer();

        return;

    }
}
