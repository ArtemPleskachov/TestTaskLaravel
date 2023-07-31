<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>
    <link rel="stylesheet" type="text/css" href=" {{ asset('/css/styles.css') }}">
</head>
<body>
<h1>User List</h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Company<br>ID</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Website</th>
        <th>Street</th>
        <th>Suite</th>
        <th>City</th>
        <th>Zipcode</th>
        <th>Geo_lat</th>
        <th>Geo_lng</th>
        <th>Company_name</th>
        <th>Company_catchPhrase</th>
        <th>Company_bs</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->company_id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->website }}</td>
            <td>{{ $user->address->street }}</td>
            <td>{{ $user->address->suite }}</td>
            <td>{{ $user->address->city }}</td>
            <td>{{ $user->address->zipcode }}</td>
            <td>{{ $user->address->geo_lat }}</td>
            <td>{{ $user->address->geo_lng }}</td>
            <td>{{ $user->company->company_name }}</td>
            <td>{{ $user->company->company_catchPhrase }}</td>
            <td>{{ $user->company->company_bs }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
