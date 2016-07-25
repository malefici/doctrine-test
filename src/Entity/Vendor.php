<?php

namespace Verstak\Entity;

/**
 * @Entity
 * @Table(name="vendors")
 */
class Vendor
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
}
