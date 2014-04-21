<!-- coverletter.php -->
<?php

App::uses('AppModel', 'Model');
class CoverLetter extends AppModel
{
    
    public $validate = array(
        // Required Fields
        //
        // Student name
        'student_name' => array(
            'rule' => 'notEmpty',
            'message' => 'This field must not be empty.'
        ),
        // Student number
        'student_num' => array(
            'rule' => 'notEmpty',
            'message' => 'This field must not be empty.'
        ),
        // Scheduled test date and time
        'scheduled_test_date_time' => array(
            'rule' => 'notEmpty',
            'message' => 'This field must not be empty.'
        ),
        // Time allowed in minutes
        'time_allowed_in_mins' => array(
            'rule' => 'notEmpty',
            'message' => 'This field must not be empty.'
        ),
        // Check test payment receipt
        'check_receipt' => array(
            'rule' => array('boolean'),
            'message' => 'This must be true or false.'
        ),
        // Photo ID required
        'photo_id_reqd' => array(
            'rule' => array('boolean'),
            'message' => 'This must be true or false.'
        ),
        
        // Optional Fields
        //
        // FOL start time
        'fol_start_time' => array(),
        // FOL end time
        'fol_end_time' => array(),
        // Aids allowed
        'aids_allowed' => array(),
        // FOL password
        'fol_password' => array()
    );
}

?>
