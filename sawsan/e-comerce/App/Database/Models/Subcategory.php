<?php

namespace App\Database\Models;

use App\Database\Models\Model;
use App\Database\Contracts\ConnectTo;

class Subcategory extends Model implements ConnectTo{


private const  table="subcategories";

private int $id;
private string $name_en;
private string $name_ar;
private string $image ='default.png';
private int $category_id;
private int $status ;
private string $created_at;
private string $updaed_at;


/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 */ 
public function setId($id)
{
$this->id = $id;

return $this;
}


/**
 * Get the value of name_en
 */ 
public function getName_en()
{
return $this->name_en;
}

/**
 * Set the value of name_en
 *
 * @return  self
 */ 
public function setName_en($name_en)
{
$this->name_en = $name_en;

return $this;
}

/**
 * Get the value of name_ar
 */ 
public function getName_ar()
{
return $this->name_ar;
}

/**
 * Set the value of name_ar
 *
 * @return  self
 */ 
public function setName_ar($name_ar)
{
$this->name_ar = $name_ar;

return $this;
}

/**
 * Get the value of image
 */ 
public function getImage()
{
return $this->image;
}

/**
 * Set the value of image
 *
 * @return  self
 */ 
public function setImage($image)
{
$this->image = $image;

return $this;
}

/**
 * Get the value of status
 */ 
public function getStatus()
{
return $this->status;
}

/**
 * Set the value of status
 *
 * @return  self
 */ 
public function setStatus($status)
{
$this->status = $status;

return $this;
}

/**
 * Get the value of created_at
 */ 
public function getCreated_at()
{
return $this->created_at;
}

/**
 * Set the value of created_at
 *
 * @return  self
 */ 
public function setCreated_at($created_at)
{
$this->created_at = $created_at;

return $this;
}

/**
 * Get the value of updaed_at
 */ 
public function getUpdaed_at()
{
return $this->updaed_at;
}

/**
 * Set the value of updaed_at
 *
 * @return  self
 */ 
public function setUpdaed_at($updaed_at)
{
$this->updaed_at = $updaed_at;

return $this;
}



/**
 * Get the value of category_id
 */ 
public function getCategory_id()
{
return $this->category_id;
}

/**
 * Set the value of category_id
 *
 * @return  self
 */ 
public function setCategory_id($category_id)
{
$this->category_id = $category_id;

return $this;
}
}