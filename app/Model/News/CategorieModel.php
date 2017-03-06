<?php
namespace Model\News;

class CategorieModel extends \W\Model\Model 
{
    /**
     * R�cup�re les Cat�gories depuis la BDD
     */
	public function findCategories() {
	    // -- R�cup�re toutes les cat�gories
	    $categories = $this->findAll();
	    $data = [];
	    
	    // -- On parcours l'ensemble des r�sutats et pour chaque it�ration on cr�e un Objet Categorie.
	    // -- On retourne ensuite un tableau contenant l'ensemble des Objets.
	    foreach ($categories as $categorie) {
	        $data[] = new Categorie($categorie['IDCATEGORIE'], $categorie['LIBELLECATEGORIE'], $categorie['ROUTECATEGORIE']);
	    }
	    
	    return $data;
	}
}