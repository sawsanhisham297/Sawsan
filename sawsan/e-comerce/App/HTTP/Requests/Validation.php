<?php
namespace App\HTTP\Requests;
class Validation{

    private array $errors = [];
    private string $value ;
    private string $key;
    


    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of key
     */ 
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set the value of key
     *
     * @return  self
     */ 
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get the value of errors
     */ 
    public function getErrors()
    {
        return $this->errors;
    }

    public function required():self
    {   
        if(empty($this->value)){


        $this->errors[$this->key ][__FUNCTION__]="{$this->key }is required";

        }


        return $this;
    }
    
    public function string():self
    {   
        if(!is_string($this->value)){
            $this->errors[$this->key ][__FUNCTION__]="{$this->key } must be string";
        }

        return $this;
    }
    
    public function min(int $min):self
    {   
        if(strlen($this->value < $min)){
            $this->errors[$this->key ][__FUNCTION__]="{$this->key } must be more than {$min} characters";
        }
        return $this;
    }
    public function max(int $max):self
    {   
        if(strlen($this->value > $max)){
            $this->errors[$this->key ][__FUNCTION__]="{$this->key } must be less than {$max} characters";
        }
        return $this;
    }
    public function digits(int $digits):self
    {   
        if(strlen($this->value != $digits)){
            $this->errors[$this->key ][__FUNCTION__]="{$this->key } must be {$digits} digits";
        }
        return $this;
    }

    public function in(array $array ):self
    {   
        if(!in_array($this->value,$array)){
            $this->errors[$this->key ][__FUNCTION__]="{$this->key } must be ".implode(',',$array);
        }
        return $this;
    }
    public function regex(string $pattern,string $message="invalide"):self
    {   
        if(!preg_match($pattern,$this->value)){
            $this->errors[$this->key ][__FUNCTION__]="{$this->key }{$message}";
        }
        return $this;
    }
    public function confirmed(string $conmparedvalue):self
    {   
        if($this->value != $conmparedvalue ){
            $this->errors[$this->key ][__FUNCTION__]="{$this->key } doesn't match {$this->key } confirmation" ;
       }
       return $this;

    }
        


    public function unique(string $table, string $coulmn ):self
    {   
      //databsse
        return $this;
    }


}

$validation = new validation ;
$validation->setKey("first_name")->setValue("Sawsan")->required()->string()->min(2)->max(32);
$validation->setKey("first_name")->setValue("Sawsan")->required()->string()->min(2)->max(32);
$validation ->getErrors();
