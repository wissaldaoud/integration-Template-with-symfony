<?php
namespace App\Entity;
use App\Entity\PropertySearch;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ArticleRepository;

class PropertySearch
{
 private $Nom;
 public function getNom(): ?string
 {
 return $this->Nom;
 }
 public function setNom(string $Nom): self
 {
 $this->Nom = $Nom;
 return $this;
 }
}
