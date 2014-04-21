<?php

class CoverlettersController extends AppController
{
    // Check for active session before each action
    public function beforeFilter()
    {
        parent::beforeFilter();
        
        if ($this->Session->check("sessionActive"))
        {
            if ($this->Session->read("sessionActive") == "true")
            {
                // Logged in
            }
            else
            {
                // Redirect to login
                $this->redirect(array('controller' => 'Usersessions', 'action' => 'login'));
            }
        }
        else
        {
            // Redirect to login
            $this->redirect(array('controller' => 'Usersessions', 'action' => 'login'));
        }
    }
    
    // List of coverletters
    public function index()
    {
        if ($this->request->is('post')) 
        {
            $this->Coverletter->create();
            if ($this->Coverletter->save($this->request->data)) 
            {
                // Success               
            }
            else 
            {
                // Failure
                $this->Session->setFlash("Error retrieving coverletter index.");
            }
        }
        
        $coverletters = $this->Coverletter->find('all');
        $this->set('coverletters', $coverletters);
    }
    
    // Submit coverletter
    public function add($id = null)
    {
        if (!$id)
        {
            throw new NotFoundException(__('Could not submit coverletter.'));
        }
        
            
        $this->redirect(array('controller' => 'Coverletters', 'action' => 'add'));
    }
    
    // Edit coverletter
    public function edit($id = null)
    {   
        // No ID exception
        if (!$id) 
        {
            throw new NotFoundException(__('Coverletter not found.'));
            return $this->redirect(array('controller' => 'Coverletters', 'action' => 'index'));
        }

        // Find coverletter by ID
        $coverletter = $this->Coverletter->findById($id);
        // Invalid coverletter exception
        if (!$coverletter) 
        {
            throw new NotFoundException(__('Coverletter not found.'));
            return $this->redirect(array('controller' => 'Coverletters', 'action' => 'index'));
        }
        
        // BONUS
        // Disable editing for coverletters out of 'submitted' state
        

        // Coverletter post request
        if ($this->request->is(array('post', 'put'))) 
        {
            // Success
            $this->Coverletter->id = $id;
            if ($this->Post->save($this->request->data)) 
            {
                // Update and return user to Coverletter index
                $this->Session->setFlash(__('Coverletter updated successfully.'));
                return $this->redirect(array('controller' => 'Coverletters', 'action' => 'index'));
            }
            // Failure
            else
            {
                $this->Session->setFlash(__('Coverletter failed to update.'));
                return $this->redirect(array('controller' => 'Coverletters', 'action' => 'index'));
            }
        }

        // Set coverletter request data if non-existent
        if (!$this->request->data) 
        {
            $this->request->data = $coverletter;
        }
            
    }
    
    // View coverletter
    public function view()
    {
        
    }
    
}

?>
