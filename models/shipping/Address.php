<?php 

class Address
{
  private $first_name;
  private $last_name;
  private $street;
  private $zip_code;
  private $city;
  private $country;

  public function __construct($first_name, $last_name, $street, $zip_code, $city, $country)
  {
    $this->setFirstName($first_name);
    $this->setLastName($last_name);
    $this->setStreet($street);
    $this->setZipCode($zip_code);
    $this->setCity($city);
    $this->setCountry($country);
  }

  protected function setFirstName($first_name)
  {
    $this->first_name = $first_name;
    return $this;
  }

  public function getFirstName()
  {
    return $this->first_name;
  }

  protected function setLastName($last_name)
  {
    $this->last_name = $last_name;
    return $this;
  }

  public function getLastName()
  {
    return $this->last_name;
  }

    protected function setStreet($street)
  {
    $this->street = $street;
    return $this;
  }

  public function getStreet()
  {
    return $this->street;
  }

      protected function setZipCode($zip_code)
  {
    $this->zip_code = $zip_code;
    return $this;
  }

  public function getZipCode()
  {
    return $this->zip_code;
  }

      protected function setCity($city)
  {
    $this->city = $city;
    return $this;
  }

  public function getCity()
  {
    return $this->city;
  }

      protected function setCountry($country)
  {
    $this->country = $country;
    return $this;
  }

  public function getCountry()
  {
    return $this->country;
  }
}

?>