<?php
class User{
    private $id,$fname,$lname,$phone ,$email,$password,$Detail,$accountType;

        public function __construct(){
            if ($this->accountType =="admin") {
                # code...
            
            $this->Detail='<tr><td> First Name : '.$this->fname.' , Last Name :    '.$this->lname .',
            phone :  '.$this->phone. ', email  :  '.$this->email . ', password :  ' .$this->password . ',  Account Type :  ' .$this->accountType.
            
                '</td>'.'<td><a href="./delete.php?id='.$this->id.'" onclick="return confirm(\'Are you sure?\')" >Delete</a></td>'.
                '<td><a href="./updateUser.php?id='.$this->id.'"> Update </a></td>   
                   <td>  <button>
                       <a href="./ProDuct Details/ProductFoam.php">ADD ProDuct</a>
                     </button>
                     </td><td>
                     <button>
                         <a href="./ProDuct Details/PDOProductSelection.php">View ProDuct</a>
                     </button></td></tr>';
        }else{
                $this->Detail='<tr><td> First Name : '.$this->fname.' , Last Name :    '.$this->lname .',
                phone :  '.$this->phone. ', email  :  '.$this->email . ', password :  ' .$this->password . ',
                  Account Type :  ' .$this->accountType.
                  '</td>'.'<td><a href="./delete.php?id='.$this->id.'" onclick="return confirm(\'Are you sure?\')" >Delete</a></td>'.
                '<td><a href="./updateUser.php?id='.$this->id.'"> Update </a></td>
                <td>
                     <button>
                         <a href="./ProDuct Details/PDOProductSelection.php">View ProDuct</a>
                     </button>
                </td>
                </tr>';
                
            
            }
            
        }

        

	public function getAcountType() {
		return $this->accountType;
	}

	public function setAcountType($acountType) {
		$this->accountType = $accountType;
	}
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param mixed $Fname
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $Phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->Detail;
    }

    /**
     * @param string $Detail
     */
    public function setDetail($Detail)
    {
        $this->Detail = $Detail;
    }

    }


