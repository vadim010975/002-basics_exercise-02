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
<h3>Список групп</h3>
<br/>
<table border="1">
    <tr>
        <th>
            id
        </th>
        <th>
            Название группы
        </th>
        <th>
            Дата начала обучения
        </th>
        <th>
            Начала ли группа своё обучение
        </th>
        <th>
            Дата создания записи
        </th>
        <th>
            Дата обновления записи
        </th>
    </tr>
    @foreach($groups as $group)
        <tr>
            <td>
                {{$group->id}}
            </td>
            <td>
                {{$group->title}}
            </td>
            <td>
                {{$group->start_from}}
            </td>
            <td>
                {{$group->is_active ? 'начала обучение' : 'не начала обучение'}}
            </td>
            <td>
                {{$group->created_at}}
            </td>
            <td>
                {{$group->updated_at}}
            </td>
        </tr>
    @endforeach
</table>
<br/>
<a href='/groups/create'>Страница создания новой группы</a>
</body>
</html>
