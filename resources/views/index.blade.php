<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>
</head>
<body>
<h1>User List</h1>
<ul>
    @foreach($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ul>
</body>
</html>
