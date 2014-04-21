<!-- UsersessionsController.php -->
<?php
class UsersessionsController extends AppController 
{    
    public function index() 
    {
        // Check if there is an active session
        if ($this->Session->check("sessionActive")) 
        {
            if ($this->Session->read("sessionActive") == "true") 
            {
                // Redirect to user menu
                $this->redirect(array('controller' => 'coverletters', 'action' => 'index'));
            }
            else 
            {
                // Redirect to login
                $this->redirect(array('action' => 'login'));
            }
        }
        else 
        {
            // Redirect to login
            $this->redirect(array('action' => 'login'));
        }
    }
    
    public function login() 
    {
        // Form submission data
        if ($this->request->is('post')) {
            $username = $this->request->data['username'];
            $password = $this->request->data['password'];
            
            // Find user by username
            $user = $this->User->findByUsername($username);
            // If username & password are valid, login/create session
            if ($user != null && $user['User']['password'] == $password) 
            {
                // Start session
                $this->Session->write('sessionActive', 'true');
                // TODO
                // Create method of defining user roles (admin or professor)
                //$this->Session->write('role', 'admin');
                $this->Session->write('userId', $user['User']['id']);
                $this->redirect(array('controller' => 'coverletters', 'action' => 'index'));
            }
            else 
            {
                // Invalidate session/redirect to login
                logout();
            }
        }
    }
    
    public function logout() 
    {
        $this->Session->write('sessionActive', 'false');
        $this->redirect(array('action' => 'login'));
    }
    
}

?>
