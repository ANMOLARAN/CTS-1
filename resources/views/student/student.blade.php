<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        width:500px;
    }
    table,tr,th,td{
        border:1px solid black;
    }
    th{
        background-color:pink;
    }
    td{
        background-color:orange;
    }
    .link{
        background-color: pink;
        border:2px solid black;
        margin:6px;
    }
    </style>
<body>
    <h1>This is a student page</h1>
    <a class='link' href="/addStudent">Add New Student Detail</a>
    <br>
    <table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>
</tr>
@foreach($data as $item)
<tr>
<td>{{$item['id']}}</td>
<td>{{$item['name']}}</td>
<td>{{$item['email']}}</td>
<td><a href="/update/{{$item['id']}}">Update</a></td>
<td><a href="/deleteStudent/{{$item['id']}}">Delete</a> </td>
</tr>
@endforeach
</table>
</body>
</html>