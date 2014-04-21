<!-- UsersController.php -->
<?php

class UsersController extends AppController
{
    // View user
    public function view($id = null)
    {
        $this->User->id = $id;
        // Invalid user exception
        if (!$this->User->exists())
        {
            throw new NotFoundException(__('User not found.'));
        }
        $this->set('user', $this->User-read(null, $id));
    }
}

?>
