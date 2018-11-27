<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
  <title>ちょわ</title>
</head>
<body>
<h1>マークアップ</h1>
<textarea id="editor" name="name" rows="8" cols="40"></textarea>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<script>
  var simplemde = new SimpleMDE({ element: document.getElementById("editor") });
</script>
</body>
</html>
