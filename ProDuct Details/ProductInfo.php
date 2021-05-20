<?php

if (!isset($_SESSION['user_id'])) {
    # code...
    header('Location: ../Login.php');
}



class ProductInfo{
    private $id,$name,$price,$description,$cost_price,$sale_price,$Detail;
    public function __construct()
    {
            
            if($_SESSION["AccountType"] == "admin"){

        $this->Detail='<tr><td> Name : '.$this->name.' , Price :    '.$this->price .',
        Description :  '.$this->description. ', Cost Price  :  '.$this->cost_price . ', Sale Pice :  ' .$this->sale_price .
            '</td>'.'<td><a href="./PDOProductDeletion.php?id='.$this->id.'" onclick="return confirm(\'Are you sure?\')" >Delete</a></td>'.
            '<td><a href="./PDOProductUpdation.php?id='.$this->id.'"> Update </a></td></tr>';
            }else{

                
        $this->Detail='<tr><td> Name : '.$this->name.' , Price :    '.$this->price .',
        Description :  '.$this->description. ', Cost Price  :  '.$this->cost_price . ', Sale Pice :  ' .$this->sale_price;
            }
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->Detail;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $Detail
     */
    public function setDetail($Detail)
    {
        $this->Detail = $Detail;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCostPrice()
    {
        return $this->cost_price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getSalePrice()
    {
        return $this->sale_price;
    }

}