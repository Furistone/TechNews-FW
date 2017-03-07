<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Db\DBFactory;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par d�faut
	 */
	public function home() {
	    
	    # Connexion a la BDD
	    DBFactory::start();
	    
	    # R�cup�ration des Articles en SPOTLIGHT
	    $spotlights = \ORM::for_table('view_articles')->where('SPOTLIGHTARTICLE', 1)->find_result_set();
	    
	    # R�cup�rations des Articles de la Page d'Accueil
	    $articles = \ORM::for_table('view_articles')->find_result_set();
	    
	    # Transmettre � la Vue
	    $this->show('default/home', ['spotlights' => $spotlights, 'articles' => $articles]);
	}
	
	public function categorie($categorie) {
	    # Connexion a la BDD
	    DBFactory::start();
	    
	    # R�cup�rations des Articles de la Cat�gorie
	    $articles = \ORM::for_table('view_articles')->where('LIBELLECATEGORIE', ucfirst($categorie))->find_result_set();
	    
	    # Transmettre � la Vue
	    $this->show('default/categorie', ['articles' => $articles]);
	    
	}

}












