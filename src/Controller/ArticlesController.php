<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use DateTime;

	class ArticlesController extends AppController
	{
		public function initialize()
    	{
	        parent::initialize();
			$this->loadComponent('Paginator');
	        $this->loadComponent('Flash'); 
   		}
		public function index()
	    {

	        $article = $this->Articles->find('all');
	      	 $this->set('articles',$article);
	      	 $this->render('index');
	      	
	    }
		public function view($slug = null)
		{
			$article = $this->Articles->findBySlug($slug)->firstOrFail();
			$this->set(compact('article'));
		}

		public function add()
		{
			$article = $this->Articles->newEntity();
			if($this->request->is('post'))
			{
				 $article = $this->Articles->patchEntity($article, $this->request->getData());
				 if($this->Articles->save($article))
				 {
				 	$this->Flash->success(__('Your Article has been saved'));
				 	return $this->redirect(['action' => 'index']);
				 }
				 else
				 {
				 	$this->Flash->error(__('Unable to add Article'));
				 }
			}
				$this->set('article',$article);
		}
		
		public function edit($id)
		{
		    $article = $this->Articles->findBySlug($id)->firstOrFail();

		    if ($this->request->is(['post', 'put'])) {
		        $this->Articles->patchEntity($article, $this->request->getData());
		        if ($this->Articles->save($article)) {
		            $this->Flash->success(__('Your article has been updated.'));
		            return $this->redirect(['action' => 'index']);
		        }
		        $this->Flash->error(__('Unable to update your article.'));
		    }

		    $this->set('article', $article);
		    $this->render('edit');
		}
		public function delete($id)
		{
			$this->request->allowMethod(['post', 'delete']);
			$article = $this->Articles->findById($id)->firstOrFail();
		    if ($this->Articles->delete($article)) 
		    {
		        $this->Flash->success(__('The {0} article has been deleted.', $article->title));
		        return $this->redirect(['action' => 'index']);
		    }
		}
		
	}



?>