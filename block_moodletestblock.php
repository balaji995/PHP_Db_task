<?php
class block_moodletestblock extends block_base {
    public function init() {
        $this->title = get_string('moodletestblock', 'block_moodletestblock');
    }
    public function get_content() {
        global $PAGE, $USER, $DB;
    
        if ($this->content !== null) {
            return $this->content;
        }
    
        $this->content = new stdClass();
        $this->content->text = '';
    
        // Get the course context
        $coursecontext = context_course::instance($PAGE->course->id);
    
        // Get all the course modules for the current user
        $coursemodules = get_fast_modinfo($PAGE->course);
    
        // Loop through each course module
        foreach ($coursemodules->get_cms() as $cm) {
            // Check if the user has access to this module
            if (has_capability('mod/' . $cm->modname . ':view', $coursecontext, $USER->id)) {
                // Get the completion status for this user in this module
                $completion = new completion_info($PAGE->course);
                $completiondata = $completion->get_data($cm, false, $USER->id);
    
                // Check if the activity is completed
                if ($completiondata->completionstate === COMPLETION_COMPLETE) {
                    $activityname = format_string($cm->name); // Activity Name
                    $cmid = $cm->id; // Course Module ID
                    $creationdate = userdate($cm->created, '%d-%m-%Y'); // Date of Creation in dd-mm-yyyy format
    
                    $activitylink = html_writer::link(new moodle_url('/mod/' . $cm->modname . '/view.php', array('id' => $cmid)), $activityname);
    
                    $this->content->text .= "Course Module ID: $cmid<br>";
                    $this->content->text .= "Activity Name: $activitylink<br>";
                    $this->content->text .= "Date of Creation: $creationdate<br>";
                    $this->content->text .= "Completion Status: Completed<br><br>";
                }
            }
        }
    
        return $this->content;
    }
    
}