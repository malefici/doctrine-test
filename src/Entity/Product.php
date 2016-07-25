<?php

namespace Verstak\Entity;

/**
 * @Entity
 * @Table(name="products")
 */
class Product
{
    /**
     * Идентификатор объекта, по нему изут в базе
     *
     * @var integer
     *
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Свойство продукта "название"
     *
     * @var string
     *
     * @Column(type="string", length=100)
     */
    private $name;

    /**
     * Свойство продукта "цена"
     *
     * @var float
     *
     * @Column(type="decimal", scale=2)
     */
    private $price;

    /**
     * Свойство продукта "описание"
     *
     * @var string
     *
     * @Column(type="text")
     */
    private $description;

    /**
     * @var Vendor
     *
     * @ManyToOne(targetEntity="Vendor")
     * @JoinColumn(name="vendor_id", referencedColumnName="id")
     */
    private $vendor;

    /**
     * Конструктор, здесь мы опредилим стандартные значения
     */
    public function __construct()
    {
        $this->price = 0.0;
    }

    /**
     * С помощью этого метода, мы у его объекта можем выяснить его идентификатор
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * А этим методом, мы можем узнать значение свойства "название"...
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * ... этим назначить
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Аналогично предыдущим методам, метод для получения - метод для назначения
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Vendor
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param Vendor $vendor
     * @return $this
     */
    public function setVendor(Vendor $vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }
}
