<!DOCTYPE html>

<html lang="en">
<head>
  <title>Bird Board</title>
</head>
  <body>
       <h1>Bird board</h1>
    <ul>
        @foreach ($projects as $project)
          <li>{{ $project->title }}</li>
        @endforeach
    </ul>
  </body>
</html>
