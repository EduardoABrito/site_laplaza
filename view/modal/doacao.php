
<?php foreach($modals as $modal){?>
 
<div class="modal fade bd-example-modal-lg" id="<?= $modal->modal; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content detalhes">
          <div class="modal-header header">
            <h2 class="modal-title" id="titulo">La Plaza City | <?= $modal->nome; ?></h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                      <ul id="test">
                     <?php if(isset($modal->linha1)){ ?><li>&nbsp;&nbsp;<?= $modal->linha1; ?></li><?php } ?>
                     <?php if(isset($modal->linha2)){ ?><li>&nbsp;&nbsp;<?= $modal->linha2; ?></li><?php } ?>
                     <?php if(isset($modal->linha3)){ ?><li>&nbsp;&nbsp;<?= $modal->linha3; ?></li><?php } ?>
                     <?php if(isset($modal->linha4)){ ?><li>&nbsp;&nbsp;<?= $modal->linha4; ?></li><?php } ?>
                     <?php if(isset($modal->linha5)){ ?><li>&nbsp;&nbsp;<?= $modal->linha5; ?></li><?php } ?>
                        
                      </ul>
          </div>
      <div class="modal-footer">
          
      </div>
      </div>
    </div>
  </div>
<?php }; ?>

  <style>
    ul#test > li{
      list-style-type: none;

    }
    ul#test > li::before{
      content: "★";
      animation: rotate 2s infinite;
      display: inline-block;
    }
    @keyframes rotate{
      from{transform: rotateY(0deg);}
      to{transform: rotateY(359deg);}
      
    }

</style>