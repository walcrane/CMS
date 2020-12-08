<?php include_once('inc/header.php') ?>
<form action="admin/add_page" class="mt-3" data-bitwarden-watching="1" method="POST">
  <fieldset>
    <legend>Nowa Strona</legend>
    <div class="form-group">
      <label for="name">Nazwa strony</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Tutaj wpisz nazwę">
    </div>
    <div class="form-group">
      <label for="seo_title">Meta tytuł</label>
      <input type="text" class="form-control" name="seo_title" id="seo_title" placeholder="Tutaj wpisz meta tytuł">
    </div>
    <div class="form-group">
      <label for="seo_desc">Meta opis</label>
      <input type="text" class="form-control" name="seo_desc" id="seo_desc" placeholder="Tutaj wpisz meta opis">
    </div>
    <div class="form-group">
      <label for="seo_robots">Meta robots</label>
      <select class="form-control" name="seo_robots" id="seo_robots">
        <option>index, follow</option>
        <option>index, nofollow</option>
        <option>noindex, follow</option>
        <option>noindex, nofollow</option>
      </select>
    </div>
    <div class="form-group">
      <label for="content">Treść</label>
      <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary mb-3">Dodaj</button>
  </fieldset>
</form>
<?php include_once('inc/footer.php') ?>