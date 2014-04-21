<h1>Exam Coverletter Manager</h1>
</br>
<p>Edit Coverletter</p>

<?php

// Create coverletter form
echo $this->Form->create('Coverletter');
// Initialize form data for editing
echo $this->Form->input('student_name');
echo $this->Form->input('student_num');
echo $this->Form->input('scheduled_test_date_time');
echo $this->Form->input('time_allowed_in_mins');
echo $this->Form->input('check_receipt');
echo $this->Form->input('photo_id_reqd');
echo $this->Form->input('fol_start_time');
echo $this->Form->input('fol_end_time');
echo $this->Form->input('aids_allowed');
echo $this->Form->input('fol_password');
// Save form
echo $this->Form->end('Save');

// TODO: add method of changing coverletter 
//       status for admins.

?>