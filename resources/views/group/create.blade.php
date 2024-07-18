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
<h3>Форма создания группы</h3>
<br/>
<form name="form_create_group" method="POST" action="/groups">
    @csrf
    <label>Название группы
        <input type="text" name="title" required>
    </label>
    <br>
    <label>Дата начала обучения
        <input type="text" name="start_from" placeholder="ГГГГ-ММ-ДД" required>
    </label>
    <br>
    <label>Начала ли группа своё обучение
        <input type="checkbox" name="is_active">
    </label>
    <br>
    <button type="submit">Отправить данные</button>
</form>
<a href='{{$back}}'>назад</a>
</body >
</html >
