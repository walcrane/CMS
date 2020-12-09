<?php include_once('inc/header.php') ?>
<form action="app/scripts/add_page.php" class="mt-3" method="post">
  <fieldset>
    <legend>Nowa Strona</legend>
    <div class="form-group">
      <label for="site_name">Nazwa strony</label>
      <input type="text" class="form-control" name="site_name" id="site_name" aria-describedby="nameHelp" placeholder="Tutaj wpisz nazwę">
    </div>
    <div class="form-group">
      <label for="site_url">Adres URL</label>
      <input type="text" class="form-control" name="site_url" id="site_url" aria-describedby="nameHelp" placeholder="Tutaj wpisz URL po /">
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
      <textarea class="form-control" name="editor" id="editor" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary mb-3">Dodaj</button>
  </fieldset>
</form>
<?php include_once('inc/footer.php') ?>