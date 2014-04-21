<!-- user.php -->
<?php

App::uses('AppModel', 'Model');
class User extends AppModel 
{
    // Validate fields
    public $validate = array(
        // Username
        'username' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter a username.'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'Username already exists.'
            )
        ),
        // Password
        'password' => array(
            'required' => array(
                'rule' => 'notEmpty',
                'message' => 'Please enter a password.'
            )
        )/*,
        // User role
        'user_role' => array(
            'valid' => array(
                'rule' => array('inList', array('administrator', 'professor')),
                'error' => 'Please enter a valid role.',
                'allowEmpty' => false
            )
        ),
        // Full name
        'full_name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please enter your full name.'
            )
        ),
        // Academic area
        'academic_area' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please enter an academic area.'
            )
        )*/
    ); 
}

?>
