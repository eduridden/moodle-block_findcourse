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
 * Defines the class for the Search Courses block
 *
 * @package    block_findcourse
 * @author     Julian Ridden <julian@pukunui.com>
 * @copyright  2012 onwards Pukunui Australia
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 *  Class definition for the Message My Teacher block
 */
class block_findcourse extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_findcourse');
    }

    /**
     * Gets a list of "teachers" with the defined role, and displays a link to message each
     *
     * @access public
     * @return void
     */
    public function get_content() {
        global $COURSE, $CFG, $USER, $DB, $OUTPUT;
        
        $text .= '<form id="coursesearch" action="'.$CFG->wwwroot.'/course/search.php" method="get">'.
        		 '<fieldset class="coursesearchbox invisiblefieldset">'.
        		 '<input type="text" id="coursesearchbox" size="20" name="search" value="">'.
        		 '<input type="submit" value="'.get_string('submit','block_findcourse').'">'.
        		 '</fieldset>'.
        		 '</form>';
                 
        $this->content->text = $text;
        $this->content->footer = '';
                
        return $this->content;
    }
}
