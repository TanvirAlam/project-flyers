<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="UTF-8">
	<title>Project Flyer</title>

{!! HTML::style('/css/app.css') !!}
{!! HTML::style('/css/libs/sweetalert.css') !!}
{!! HTML::style('/css/libs/dropzone.css') !!}
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ProjectFlyers</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">
	@yield('content')
</div>
{!! HTML::script('js/libs/sweetalert-dev.js') !!}
{!! HTML::script('js/libs/dropzone.js') !!}
@include('flash')

  <script>
    Dropzone.options.addPhotoForm = {
      paramName: 'file',
      maxFilesize: 3,
      acceptedFiles: '.jpg, .jpeg, .png, .bmp'
    }
  </script>
</body>
</html>