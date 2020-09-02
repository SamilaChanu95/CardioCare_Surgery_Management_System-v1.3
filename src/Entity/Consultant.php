<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConsultantRepository")
 */
class Consultant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cNIC;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cFirstName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cLastName;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cGender;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cAddress;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cDOB;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $cPhoneNumber;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cRole;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Hospital", inversedBy="consultants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Hospital;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Department", inversedBy="consultants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Department;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Unit", inversedBy="consultants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Unit;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Surgery", mappedBy="Consultant")
     */
    private $surgeries;

    protected $captchaCode;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ward", inversedBy="consultants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Ward;

    /** 
     * @ORM\Column(type="string", nullable=true)
     * 
     */ 
    private $photo; 

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cStatus;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $syncsts;
    
    public function getCaptchaCode()
    {
      return $this->captchaCode;
    }

    public function setCaptchaCode($captchaCode)
    {
      $this->captchaCode = $captchaCode;
    }


    public function __construct()
    {
        $this->surgeries = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCNIC(): ?string
    {
        return $this->cNIC;
    }

    public function setCNIC(string $cNIC): self
    {
        $this->cNIC = $cNIC;

        return $this;
    }

    public function getCFirstName(): ?string
    {
        return $this->cFirstName;
    }

    public function setCFirstName(string $cFirstName): self
    {
        $this->cFirstName = $cFirstName;

        return $this;
    }

    public function getCLastName(): ?string
    {
        return $this->cLastName;
    }

    public function setCLastName(string $cLastName): self
    {
        $this->cLastName = $cLastName;

        return $this;
    }

    public function getCGender(): ?string
    {
        return $this->cGender;
    }

    public function setCGender(string $cGender): self
    {
        $this->cGender = $cGender;

        return $this;
    }

    public function getCAddress(): ?string
    {
        return $this->cAddress;
    }

    public function setCAddress(string $cAddress): self
    {
        $this->cAddress = $cAddress;

        return $this;
    }

    public function getCDOB(): ?string
    {
        return $this->cDOB;
    }

    public function setCDOB(string $cDOB): self
    {
        $this->cDOB = $cDOB;

        return $this;
    }

    public function getCPhoneNumber(): ?string
    {
        return $this->cPhoneNumber;
    }

    public function setCPhoneNumber(string $cPhoneNumber): self
    {
        $this->cPhoneNumber = $cPhoneNumber;

        return $this;
    }

    public function getCRole(): ?string
    {
        return $this->cRole;
    }

    public function setCRole(string $cRole): self
    {
        $this->cRole = $cRole;

        return $this;
    }

    public function getHospital(): ?Hospital
    {
        return $this->Hospital;
    }

    public function setHospital(?Hospital $Hospital): self
    {
        $this->Hospital = $Hospital;

        return $this;
    }

    public function getDepartment(): ?Department
    {
        return $this->Department;
    }

    public function setDepartment(?Department $Department): self
    {
        $this->Department = $Department;

        return $this;
    }

    public function getUnit(): ?Unit
    {
        return $this->Unit;
    }

    public function setUnit(?Unit $Unit): self
    {
        $this->Unit = $Unit;

        return $this;
    }

    /**
     * @return Collection|Surgery[]
     */
    public function getSurgeries(): Collection
    {
        return $this->surgeries;
    }

    public function addSurgery(Surgery $surgery): self
    {
        if (!$this->surgeries->contains($surgery)) {
            $this->surgeries[] = $surgery;
            $surgery->setConsultantMain($this);
        }

        return $this;
    }

    public function removeSurgery(Surgery $surgery): self
    {
        if ($this->surgeries->contains($surgery)) {
            $this->surgeries->removeElement($surgery);
            // set the owning side to null (unless already changed)
            if ($surgery->getConsultantMain() === $this) {
                $surgery->setConsultantMain(null);
            }
        }

        return $this;
    }

    public function getPhoto() 
    { 
        return $this->photo; 
    } 
     
    public function setPhoto($photo) 
    { 
        $this->photo = $photo; 
        return $this; 
    } 

    public function getCStatus(): ?string
    {
        return $this->cStatus;
    }

    public function setCStatus(string $cStatus): self
    {
        $this->cStatus = $cStatus;

        return $this;
    }

    public function __toString()
    {
        return $this->cFirstName;
    }

    public function getWard(): ?Ward
    {
        return $this->Ward;
    }

    public function setWard(?Ward $Ward): self
    {
        $this->Ward = $Ward;

        return $this;
    }

    public function getSyncsts(): ?string
    {
        return $this->syncsts;
    }

    public function setSyncsts(?string $syncsts): self
    {
        $this->syncsts = $syncsts;

        return $this;
    }

}
