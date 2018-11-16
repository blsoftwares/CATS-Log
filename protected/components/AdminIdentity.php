<?php



/**

 * UserIdentity represents the data needed to identity a user.

 * It contains the authentication method that checks if the provided

 * data can identity the user.

 */

class AdminIdentity extends CUserIdentity

{

	/**

	 * Authenticates a user.

	 * The example implementation makes sure if the username and password

	 * are both 'demo'.

	 * In practical applications, this should be changed to authenticate

	 * against some persistent user identity storage (e.g. database).

	 * @return boolean whether authentication succeeds.

	 */

	private $_id; 

	 

	public function authenticate()

	{

		

		$p = new CHtmlPurifier();

		$p->options = array('URI.AllowedSchemes'=>array(

		'http' => true,

		'https' => true,

		));

		

		$email = $p->purify($this->username);

		$pwd = $p->purify($this->password);

		
		$sql="SELECT * FROM user_login WHERE username='".$email."' ";

	
		$users = UserLogin::model()->findBySql($sql);


		if(!isset($users->email))

		{

			$this->errorCode=self::ERROR_USERNAME_INVALID;

		}

		else if($users->password!==$this->password)

		{

			$this->errorCode=self::ERROR_PASSWORD_INVALID;

		}

		else

		{

			$this->_id = $users->id;

			

			//set user session 

			if($users->type==4)
			{
			$this->setState('admin_id', $users->id);
			
			$this->setState('role', 'auditor');   
			
			$this->setState('admin_email', $users->email);	
			}
			if($users->type==3)
			{
			$this->setState('ncm_id', $users->id);
			$this->setState('role', 'national');  
			
			$this->setState('ncm_email', $users->email);	
			}
			if($users->type==2)
			{
			$this->setState('incm_id', $users->id);
			$this->setState('role', 'intenational');  
			$this->setState('incm_email', $users->email);	
			}
			if($users->type==1)
			{
			$this->setState('admin_id', $users->id);
			$this->setState('role', 'catsadmin');  
			$this->setState('admin_email', $users->email);	
			}
			
			$this->setState('type', $users->type);
					

			$this->errorCode=self::ERROR_NONE;

		}		

		return !$this->errorCode;

	}

	

	public function getId()

    {

        return $this->_id;

    }

}

