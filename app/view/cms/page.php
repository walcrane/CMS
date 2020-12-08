<?php require_once('inc/header.php') ?>
<a class="btn btn-primary m-3 mx-auto" href="admin/page/new">Stwórz nową stronę</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nazwa strony</th>
    </tr>
  </thead>
  <tbody>
    <?php 

    $pages = get_pages();

    if (!isset($pages)):?>

    <tr class="table-secondary">
      <td><?= 'Brak podstron!' ?></td>
    </tr>
    <?php else:

    foreach($pages as $page):?>
    <tr class="table-secondary">
      <td><a href="admin/page?edit=<?= $page['id'] ?>"><?= $page['name'] ?></a></td>
      <td><a href="admin/page?edit=<?= $page['id'] ?>" class="btn btn-success" role="button">Edytuj</a></td>
      <td><a href="#" class="btn btn-danger" role="button">Usuń</a></td>
    </tr>
    <?php endforeach; endif; ?>

  </tbody>
</table>
<?php require_once('inc/footer.php') ?>