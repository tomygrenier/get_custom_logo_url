<!DOCTYPE html>
<html>
<?php
/*
  Example inspired by Polaroid Images / Cards : https://www.w3schools.com/css/tryit.asp?filename=trycss_ex_images_card
*/
?>
<head>
<style>
body {margin:25px;}

div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
</style>
</head>
<body>

<h2>Responsive Polaroid Images / Cards</h2>
<?php 
  $subsites = get_sites();
  foreach ($subsites AS $subsite) { ?>
  <div class="polaroid">
    <img src="<?= get_custom_logo_url( $subsite->blog_id ); ?>" alt="logo of blog <?= $subsite->blog_id ?>" style="width:100%">
    <div class="container">
      <p><?=  $subsite->title ?></p>
    </div>
  </div>
<?php } ?>
</body>
</html>
