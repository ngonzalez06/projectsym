<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceRepository")
 * @ORM\Entity
 * @ORM\Table(name="invoice")
 */
class Invoice
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     *
     */
    private $invoicenumber;

    /**
     * @ORM\Column(type="string")
     */
    private $balance;

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance): void
    {
        $this->balance = $balance;
    }

    /**
     *@ORM\Column(type="text")
     **/
     private $name;

    /**
     * @ORM\Column(type="datetime")
     **/
    private $date;

    /**
     * @ORM\Column(type="string")
     */
    private $mycompany;


    /**
     * @ORM\Column(type="string")
     */
    private $company;

    /**
     * @ORM\Column(type="string")
     */
    private $address;

    /**
     * @ORM\Column(type="string")
     */
    private $addressState;


    /**
     * @ORM\Column(type="string")
     */
    private $addressCity;

    /**
     * @return mixed
     */
    public function getAddressCity()
    {
        return $this->addressCity;
    }

    /**
     * @param mixed $addressCity
     */
    public function setAddressCity($addressCity): void
    {
        $this->addressCity = $addressCity;
    }


    /**
     * @ORM\Column(type="string")
     */
    private $total;

    /**
     * @ORM\Column(type="string")
     */
    private $notes;

    /**
     * @ORM\Column(type="string")
     */
    private $item;

    /**
     * @return mixed
     */
    public function getMycompany()
    {
        return $this->mycompany;
    }

    /**
     * @param mixed $mycompany
     */
    public function setMycompany($mycompany): void
    {
        $this->mycompany = $mycompany;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company): void
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAddressState()
    {
        return $this->addressState;
    }

    /**
     * @param mixed $addressState
     */
    public function setAddressState($addressState): void
    {
        $this->addressState = $addressState;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total): void
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param mixed $notes
     */
    public function setNotes($notes): void
    {
        $this->notes = $notes;
    }

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param mixed $item
     */
    public function setItem($item): void
    {
        $this->item = $item;
    }


    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getInvoicenumber()
    {
        return $this->invoicenumber;
    }

    /**
     * @param mixed $invoicenumber
     */
    public function setInvoicenumber($invoicenumber): void
    {
        $this->invoicenumber = $invoicenumber;
    }

}

