<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;


	class UsersController extends AppController
	{
		public function initialize()
		{
			$this->loadComponent('Flash'); 
		}
		public function index()
		{
			$users = $this->Users->find('all');
			$this->set('users',$users);
		}
		public function add()
		{
			$Users = $this->Users->newEntity();
			if($this->request->is('post'))
			{
				$Users = $this->Users->PatchEntity($Users, $this->request->getData());
				if($this->Users->save($Users))
				{
					$this->Flash->success(__('your users has been saved'));
					$this->redirect(['action' => 'index']);
				}
				else
				{
					$this->Flash->error(__('Unable to Add Users'));
				}	
			}
			$this->set('Users',$Users);
		}
		public function edit($id = null)
		{
           
			$Users = $this->Users->findById($id);
			if($this->request->is('post','put'))
			{
				$Users = $this->Users->PatchEntity($Users, $this->request->getData());
				if($this->Users->save($Users))
				{
					$this->Flash->success(__('Your Users are updated'));
					$this->redirect(['action' => 'index']);
				}
				$this->Flash->error(__('Error! Please try again'));
			}
			$this->set(compact($Users));
			$this->render('edit');
		}
	}

?>