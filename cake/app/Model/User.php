<?php 
class User extends AppModel{
	public $name = 'User';
	public $displayedField = 'name';
	

	public $validate = array(
		
		'username'=>array(
			'The username must be unique.'=>array(
				'rule'=>'isUnique',
				'message'=>'username must be unique'
			),
			'That username has already been taken'=>array(
				'rule'=>'isUnique',
				'message'=>'That username has already been taken.'
			)
		),
		
		'password'=>array
		(
		    'Not empty'=>array
		    (
		        'rule'=>'notEmpty',
		        'message'=>'Please enter your password'
		    )
		    
		)
		
		
	);

/*public function matchPasswords($data) {
	    if ($data['password'] == $this->data['User']['password_confirmation']) {
	        return true;
	    }
	    $this->invalidate('password_confirmation', 'Your passwords do not match');
	    return false;
	}*/
	
	

}

