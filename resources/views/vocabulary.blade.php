<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Korean Vocabulary</title>
</head>
<body>
  <h1>Korean Vocabulary</h1>
  <form action="{{url('vocabulary')}}" method="post">
    @csrf
    <label for="korean">Korean</label>
  <input type="text" name="korean"><br>
  <label for="myanmar">myanmar</label>
  <input type="text" name="myanmar"><br>
  <button type="submit">Add</button>
  </form>
  @isset($kor)
  @foreach($kor as $k)
  {{ $k }} = {{ $mya }}
  @endforeach
  @endisset
</body>
</html>