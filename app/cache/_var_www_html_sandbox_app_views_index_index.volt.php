  

<h2>Sample</h2>
<?php echo $this->tag->form(array('forms/sampleForm', 'method' => 'post')); ?>

Description:
 <label for="name">Name</label>
    <?php echo $this->tag->textField(array('name', 'size' => 32)); ?>

    <label for="type">Telephone</label>
    
        <?php echo $this->tag->textField(array('telephone', 'size' => 15)); ?>
    
      <label for="type">Type</label>
    <?php echo $this->tag->select(array('type', $productTypes, 'using' => array('id', 'name'))); ?>
    
    
    <?php echo $this->tag->submitButton(array('Send')); ?>



<?php echo $this->tag->endForm(); ?>
