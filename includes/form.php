
<?php

class Form{

    //to store html of the form
    public $sHTML;
    public $aData;

    public function __construct(){
        //so that there is no inital HTML
        $this->sHTML='';
        $this->aData='';
    }

    //form building methods
    public function open(){
        $this->sHTML .='<form class="pure-form" action="" method="POST"><fieldset class="pure-group">';
    }

    
    public function close(){
        $this->sHTML.='</form>';
    }

    
    public function makeTextInput($sLabel, $sInputName){

        $this->sHTML .='<label for="'.$sInputName.'">'.$sLabel.'</label><input type="text" class="pure-input-1-2" name="'.$sInputName.'">';

    }

    
    public function makeSubmit($sLabel, $sInputName){
     
        $this->sHTML .='</fieldset><button type="submit" class="pure-button pure-input-1-2 pure-button-primary" name="'.$sInputName.'">'.$sLabel.'</button>';
    }

}

?>
