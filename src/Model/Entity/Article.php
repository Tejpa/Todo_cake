<?php 

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

	class Article extends Entity
	{
		protected $_accessible = 
		[		'*' => true,
		      	'id' => false,
		      	'slug' => false,
	  	];

    }



?>