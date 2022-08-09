
<?php
foreach ($allcontacts as $contact) {
?>
<div class="card" style="width:400px">
  <img class="card-img-top" src="<?=base_url()?>/resources/images/img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?=$contact['name']?></h4>
    <p class="card-text"><?=$contact['email']?></p>
    <p class="card-text"><?=$contact['message']?></p>
    <p class="card-text"><?=$contact['created_at']?></p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div>

<?php } ?>