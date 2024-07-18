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
<h3>Данные о группе</h3>
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
    <tr>
        <td>
            {{$id}}
        </td>
        <td>
            {{$title}}
        </td>
        <td>
            {{$start_from}}
        </td>
        <td>
            {{$is_active ? 'начала обучение' : 'не начала обучение'}}
        </td>
        <td>
            {{$created_at}}
        </td>
        <td>
            {{$updated_at}}
        </td>
    </tr>
</table>
<br/>
<h3>Список студентов</h3>
<br/>
<table border="1">
    <tr>
        <th>
            id
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
@foreach($students as $student)
    <tr>
        <td>
            {{$student->id}}
        </td>
        <td>
            {{$student->surname}}
        </td>
        <td>
            {{$student->name}}
        </td>
        <td>
            {{$student->created_at}}
        </td>
        <td>
            {{$student->updated_at}}
        </td>
    </tr>
@endforeach
</table>
<br/>
<a href="/groups/{{$title}}/students/create">Страница создания нового студента</a>
</body>
</html>
