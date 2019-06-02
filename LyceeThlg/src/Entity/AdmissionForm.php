<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdmissionFormRepository")
 */
class AdmissionForm
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CurrentLevel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DesiredLevel;

    /**
     * @ORM\Column(type="float")
     */
    private $FirstSemesterMark;

    /**
     * @ORM\Column(type="float")
     */
    private $SecondSemesterMark;

    /**
     * @ORM\Column(type="integer")
     */
    private $Rank;

    /**
     * @ORM\Column(type="integer")
     */
    private $TotalStudents;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCurrentLevel(): ?string
    {
        return $this->CurrentLevel;
    }

    public function setCurrentLevel(string $CurrentLevel): self
    {
        $this->CurrentLevel = $CurrentLevel;

        return $this;
    }

    public function getDesiredLevel(): ?string
    {
        return $this->DesiredLevel;
    }

    public function setDesiredLevel(string $DesiredLevel): self
    {
        $this->DesiredLevel = $DesiredLevel;

        return $this;
    }

    public function getFirstSemesterMark(): ?float
    {
        return $this->FirstSemesterMark;
    }

    public function setFirstSemesterMark(float $FirstSemesterMark): self
    {
        $this->FirstSemesterMark = $FirstSemesterMark;

        return $this;
    }

    public function getSecondSemesterMark(): ?float
    {
        return $this->SecondSemesterMark;
    }

    public function setSecondSemesterMark(float $SecondSemesterMark): self
    {
        $this->SecondSemesterMark = $SecondSemesterMark;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->Rank;
    }

    public function setRank(int $Rank): self
    {
        $this->Rank = $Rank;

        return $this;
    }

    public function getTotalStudents(): ?int
    {
        return $this->TotalStudents;
    }

    public function setTotalStudents(int $TotalStudents): self
    {
        $this->TotalStudents = $TotalStudents;

        return $this;
    }
}
