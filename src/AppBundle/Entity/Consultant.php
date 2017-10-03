<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Consultant
 *
 * @ORM\Table(name="consultant")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConsultantRepository")
 */
class Consultant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Need", mappedBy="consultants")
     */
    private $needs;

    public function __construct()
    {
        $this->needs = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Consultant
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get needs
     *
     * @return ArrayCollection
     */
    public function getNeeds()
    {
        return $this->needs;
    }

    /**
     * Add need
     *
     * @param Need $need
     *
     * @return Consultant
     */
    public function addNeed(Need $need)
    {
        $this->needs->add($need);

        return $this;
    }

    /**
     * remove need
     *
     * @param Need $need
     *
     * @return Consultant
     */
    public function removeNeed(Need $need)
    {
        $this->needs->removeElement($need);

        return $this;
    }
}

