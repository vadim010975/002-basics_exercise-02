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
<h3>Форма создания студента</h3>
<br/>
<form name="form_create_student" method="POST" action="/groups/{{$group_title}}/students">
    @csrf
    <label>Группа {{$group_title}}
        <input type="hidden" name="group_title" value="{{$group_title}}" required>
    </label>
    <br>
    <label>Фамилия студента
        <input type="text" name="surname" required>
    </label>
    <br>
    <label>Имя студента
        <input type="text" name="name">
    </label>
    <br>
    <button type="submit">Отправить данные</button>
</form>
<br/>
<a href='{{$back}}'>назад</a>
</body>
</html>
