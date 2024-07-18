<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br/>
<h3>Данные о студенте</h3>
<br/>
<table border="1">
    <tr>
        <th>
            id
        </th>
        <th>
            ID группы
        </th>
        <th>
            Фамилия студента
        </th>
        <th>
            Имя студента
        </th>
        <th>
            Дата создания записи
        </th>
        <th>
            Дата обновления записи
        </th>
    </tr>
    <tr>
        <td>
            {{$id}}
        </td>
        <td>
            {{$group_id}}
        </td>
        <td>
            {{$surname}}
        </td>
        <td>
            {{$name}}
        </td>
        <td>
            {{$created_at}}
        </td>
        <td>
            {{$updated_at}}
        </td>
    </tr>
</table>
</body>
</html>

