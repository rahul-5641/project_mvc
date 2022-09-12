<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/dataTable.css">
<?php
// print_r($data);
// exit;
?>
<table border=1px;>
  <tr>
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Street</th>
    <th>City</th>
    <th>State</th>
    <th>Country</th>
    <th>Photos
    </th>

  </tr>
  <?php foreach ($data['posts'] as $post) : ?>
    <?php
    // print_r($post-);
    ?>
    <tr>
      <td> <?= $post->empid ?> </td>
      <td> <?= $post->firstname ?> </td>
      <td> <?= $post->lastname ?> </td>
      <td> <?= $post->email ?> </td>
      <td> <?= $post->phonenumber ?> </td>
      <td> <?= $post->street ?> </td>
      <td> <?= $post->city ?> </td>
      <td> <?= $post->state ?> </td>
      <td> <?= $post->country ?> </td>

      <td>
        <img src="<?= '../public/img/' . $post->photo ?>" width="100px" height="100px">
      </td>
    </tr>
  <?php endforeach ?>

</table>