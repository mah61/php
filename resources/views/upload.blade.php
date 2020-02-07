<!DOCTYPE html>
<html>
<body>

<h1>Show a file-select field:</h1>

<h3>Show a file-select field which allows only one file to be chosen:</h3>
<form method="POST" action="{{URL::to('upload')}}" enctype="multipart/form-data">
{{csrf_field() }}
  Select a file: <input type="file" name="picture" id="picture"><br><br>
  <input type="submit">
</form>


</body>
</html>
