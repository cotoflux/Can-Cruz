<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
 protected $fillable= ['name', 'surname', 'email', 'telephone',
  'postalCode', 'checkinDate', 'checkoutDate','roomNumber','numberPeople', 
  'numberPets', 'breakfast', 'lunch', 'dinner','comments', 'language', 
  'dataProtection'];

  public function setBreakfastNull(int $breakfast = null) :bool
  {
    if ($breakfast == 1){
      return false;
    }
    $this->breakfast = null;
    $this->save();
    return true;
  }
  public function setLunchNull(int $lunch = null) :bool
  {
    if ($lunch == 1){
      return false;
    }
    $this->lunch = null;
    $this->save();
    return true;
  }
  public function setDinnerNull(int $dinner = null) :bool
  {
    if ($dinner == 1){
      return false;
    }
    $this->dinner = null;
    $this->save();
    return true;
  }
  public function validate(int $validate = null) :bool
  {
    if ($validate != 1){
      $this->validated = null;
    $this->save();
    return true;
      
    }
    $this->validated = 1;
    $this->save();
      return false;
  }
}

