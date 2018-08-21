<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Martin Hyland">

    <title>SimpleUpload</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="./css/stylesheet.css" rel="stylesheet">
  </head>
  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Image uploader</h3>
            </div>
          </div>
          <div class="alert alert-success">
              <strong>Success!</strong> Image upload was successful.
          </div>
          <div class="inner cover">
            <div class="border-10">
            <figure class="figure">
              <figcaption class="figure-caption">Preview</figcaption>
              <img src="<?php echo(str_replace($_SERVER['DOCUMENT_ROOT'], '', $_GET['uploadurl']))?>" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
              <br><br>
            </figure>
          </div>

            <div class="border-10">
              <form action="#" method="">
                <div class="">
                  <input type="text" readonly onfocus="this.select();" class="width-dynamic form-text text-muted text-center form-control" value="<?php echo("img(" . $_GET['protocall'] . $_SERVER['SERVER_NAME'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', $_GET['uploadurl']) . ")")?>">
                </div>
                <input type="submit" class="btn btn-primary" value="Upload another Image" name="submit">
              </form>
                </div>
            </div>

          <div class="mastfoot">
            <div class="inner">
              <p>SimpleUplader</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./js/js.js"></script>
  </body>
</html>
