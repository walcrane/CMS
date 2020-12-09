<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();

if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) // jeżeli jest zalogowany, to przekierowujemy od razu do panelu
    header('Location: ' . HOST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script>
	tinymce.init({
	  selector: 'textarea#editor',  //Change this value according to your HTML
	  auto_focus: 'element1',
	  width: "700",
	  height: "200"
	});
	
	$( document ).ready(function() {
	
		$('#buttonpost').on("click", function(){
			tinyMCE.triggerSave();
			var value = $("textarea#editor").val();		
			$("#display-post").html(value);
			$(".texteditor-container").hide();
			return false;
		});
	
	});   
	
</script>
  <base href="http://localhost/cms2/">
  <style>
.texteditor-container {	
	width:700px;
	height:365px;
}
textarea#editor1 {
	width:500px !important;
	border:1px solid red;
	
}
</style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="admin">Tutorial CMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
      aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="admin/page">Strony<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/seo">SEO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/settings">Ustawienia</a>
        </li>
    </div>
    <div class="float-right">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="admin/wyloguj">Wyloguj</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-12 border">