<?php

	class View{
	
	static public function renderNav($aGenres){

		$sHTML = '<ul class="pure-menu-list">';

		for($i=0;$i<count($aGenres);$i++){
	        
	        $oGenre = $aGenres[$i];
	        $sHTML .= '<li class="pure-menu-item"><a href="main.php?genreid='.$oGenre->iId.'" class="pure-menu-link">'.$oGenre->sGenreName.'</a></li>';

		}
	                
	    $sHTML .= '</ul>';

	    return $sHTML;

	}

	
	static public function renderGenre($oGenre){
		
		$sHTML = '<div class="header">';
		
		$sHTML .= '<h1>'.$oGenre->sGenreName.'</h1>
				    <h2>'.$oGenre->sGenreDescription.'</h2>';
		$sHTML .= '</div>';		
		$sHTML .= '<div class="content">';

		$aAlbums = $oGenre->aAlbums;

		
		for($i=0; $i<count($aAlbums); $i++){
			
			$oAlbum = $aAlbums[$i];
				
			$sHTML .= '<div class="description">';
			$sHTML .= '<img class="pure-img-responsive" src="'.$oAlbum->sPhoto.'" alt="">';
			$sHTML .= '<h2 class="content-subhead">'.$oAlbum->sName.'</h2>';
			$sHTML .= '<p>'.$oAlbum->sDescription.'</p>';
			$sHTML .= '<p>$'.$oAlbum->fPrice.'.00</p>';
			$sHTML .= '</div>';			
		}
		
		$sHTML .= '</div>';

		return $sHTML;

	}
}
?>

		
        