<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Need
 *
 * @ApiResource
 *
 * @ORM\Table(name="need")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NeedRepository")
 */
class Need
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
     * @var Commercial
     * @ORM\ManyToOne(targetEntity="Commercial", inversedBy="needs")
     */
    private $commercial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=255)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=255)
     */
    private $contactName;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="full_description", type="text")
     */
    private $fullDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="main_key_factor_1", type="string", length=255)
     */
    private $mainKeyFactor1;

    /**
     * @var string
     *
     * @ORM\Column(name="main_key_factor_2", type="string", length=255)
     */
    private $mainKeyFactor2;

    /**
     * @var string
     *
     * @ORM\Column(name="main_key_factor_3", type="string", length=255)
     */
    private $mainKeyFactor3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_at_latest", type="datetime")
     */
    private $startAtLatest;

    /**
     * @var int
     *
     * @ORM\Column(name="duration_months", type="integer")
     */
    private $durationMonths;

    /**
     * @var int
     *
     * @ORM\Column(name="duration_days_per_week", type="integer")
     */
    private $durationDaysPerWeek;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="geolocation", type="string", length=255)
     */
    private $geolocation;

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="float")
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="Consultant", inversedBy="needs")
     */
    private $consultants;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="description_files", type="string", length=255)
     */
    private $descriptionFiles;

    public function __construct()
    {
        $this->consultants = new ArrayCollection();
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
     * Set commercial
     *
     * @param Commercial $commercial
     *
     * @return Need
     */
    public function setCommercial($commercial)
    {
        $this->commercial = $commercial;

        return $this;
    }

    /**
     * Get commercial
     *
     * @return Commercial
     */
    public function getCommercial()
    {
        return $this->commercial;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Need
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Need
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     *
     * @return Need
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Need
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set fullDescription
     *
     * @param string $fullDescription
     *
     * @return Need
     */
    public function setFullDescription($fullDescription)
    {
        $this->fullDescription = $fullDescription;

        return $this;
    }

    /**
     * Get fullDescription
     *
     * @return string
     */
    public function getFullDescription()
    {
        return $this->fullDescription;
    }

    /**
     * Set mainKeyFactor1
     *
     * @param string $mainKeyFactor
     *
     * @return Need
     */
    public function setMainKeyFactor1($mainKeyFactor)
    {
        $this->mainKeyFactor1 = $mainKeyFactor;

        return $this;
    }

    /**
     * Get mainKeyFactor1
     *
     * @return string
     */
    public function getMainKeyFactor1()
    {
        return $this->mainKeyFactor1;
    }

    /**
     * Set mainKeyFactor2
     *
     * @param string $mainKeyFactor
     *
     * @return Need
     */
    public function setMainKeyFactor2($mainKeyFactor)
    {
        $this->mainKeyFactor2 = $mainKeyFactor;

        return $this;
    }

    /**
     * Get mainKeyFactor2
     *
     * @return string
     */
    public function getMainKeyFactor2()
    {
        return $this->mainKeyFactor2;
    }

    /**
     * Set mainKeyFactor3
     *
     * @param string $mainKeyFactor
     *
     * @return Need
     */
    public function setMainKeyFactor3($mainKeyFactor)
    {
        $this->mainKeyFactor3 = $mainKeyFactor;

        return $this;
    }

    /**
     * Get mainKeyFactor3
     *
     * @return string
     */
    public function getMainKeyFactor3()
    {
        return $this->mainKeyFactor2;
    }

    /**
     * Set startAtLatest
     *
     * @param \DateTime $startAtLatest
     *
     * @return Need
     */
    public function setStartAtLatest($startAtLatest)
    {
        $this->startAtLatest = $startAtLatest;

        return $this;
    }

    /**
     * Get startAtLatest
     *
     * @return \DateTime
     */
    public function getStartAtLatest()
    {
        return $this->startAtLatest;
    }

    /**
     * Set durationMonths
     *
     * @param integer $durationMonths
     *
     * @return Need
     */
    public function setDurationMonths($durationMonths)
    {
        $this->durationMonths = $durationMonths;

        return $this;
    }

    /**
     * Get durationMonths
     *
     * @return int
     */
    public function getDurationMonths()
    {
        return $this->durationMonths;
    }

    /**
     * Set durationDaysPerWeek
     *
     * @param integer $durationDaysPerWeek
     *
     * @return Need
     */
    public function setDurationDaysPerWeek($durationDaysPerWeek)
    {
        $this->durationDaysPerWeek = $durationDaysPerWeek;

        return $this;
    }

    /**
     * Get durationDaysPerWeek
     *
     * @return int
     */
    public function getDurationDaysPerWeek()
    {
        return $this->durationDaysPerWeek;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Need
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set geolocation
     *
     * @param string $geolocation
     *
     * @return Need
     */
    public function setGeolocation($geolocation)
    {
        $this->geolocation = $geolocation;

        return $this;
    }

    /**
     * Get geolocation
     *
     * @return string
     */
    public function getGeolocation()
    {
        return $this->geolocation;
    }

    /**
     * Set rate
     *
     * @param float $rate
     *
     * @return Need
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set consultantNames
     *
     * @param string $consultants
     *
     * @return Need
     */
    public function setConsultants($consultants)
    {
        $this->consultants = $consultants;

        return $this;
    }

    /**
     * Get consultantNames
     *
     * @return ArrayCollection
     */
    public function getConsultants()
    {
        return $this->consultants;
    }

    /**
     * Add consultant
     *
     * @param Consultant $consultant
     *
     * @return Need
     */
    public function addConsultant(Consultant $consultant)
    {
        $this->consultants->add($consultant);

        return $this;
    }

    /**
     * Remove consultant
     *
     * @param Consultant $consultant
     *
     * @return Need
     */
    public function removeConsultant(Consultant $consultant)
    {
        $this->consultants->removeElement($consultant);

        return $this;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Need
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set descriptionFiles
     *
     * @param string $descriptionFiles
     *
     * @return Need
     */
    public function setDescriptionFiles($descriptionFiles)
    {
        $this->descriptionFiles = $descriptionFiles;

        return $this;
    }

    /**
     * Get descriptionFiles
     *
     * @return string
     */
    public function getDescriptionFiles()
    {
        return $this->descriptionFiles;
    }
}

