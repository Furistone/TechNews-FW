<?php 
    # Layout utilis� pour la vue
    $this->layout('debug');
    
    $this->start('debug');
    
        debug($articles);
        
    $this->stop('debug');
?>