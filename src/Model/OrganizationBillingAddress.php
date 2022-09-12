<?php

namespace IIYousign\Model;

class OrganizationBillingAddress
{
    /**
     *
     *
     * @var string
     */
    protected $firstName;
    /**
     *
     *
     * @var string
     */
    protected $lastName;
    /**
     *
     *
     * @var string
     */
    protected $email;
    /**
     *
     *
     * @var string
     */
    protected $company;
    /**
     *
     *
     * @var string
     */
    protected $phone;
    /**
     *
     *
     * @var string
     */
    protected $line1;
    /**
     *
     *
     * @var string
     */
    protected $city;
    /**
     *
     *
     * @var string
     */
    protected $country;
    /**
     *
     *
     * @var string
     */
    protected $zip;
    /**
     *
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     *
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     *
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     *
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }
    /**
     *
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company): self
    {
        $this->company = $company;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
    /**
     *
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getLine1(): string
    {
        return $this->line1;
    }
    /**
     *
     *
     * @param string $line1
     *
     * @return self
     */
    public function setLine1(string $line1): self
    {
        $this->line1 = $line1;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     *
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
    /**
     *
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }
    /**
     *
     *
     * @param string $zip
     *
     * @return self
     */
    public function setZip(string $zip): self
    {
        $this->zip = $zip;
        return $this;
    }
}
