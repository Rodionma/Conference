<!DOCTYPE HTML>
<html lang="ru">
<head>

    <meta charset="utf-8"/>
    <title>Conference register</title>
</head>
<body>
<form method="post" action="/member/add">
    @csrf
    <div class="form-group">
        <label for="firstname" class="form-label">Имя</label>
        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Введите имя">
    </div>

    <div class="form-group">
        <label for="lastname" class="form-label">Имя</label>
        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Введите фамилию">
    </div>

    <div class="form-group">
        <label for="birthdate" class="form-label">Дата рождения</label>
        <input type="date" name="date" class="form-control" id="birthdate" placeholder="Введите дату">
    </div>

    <div class="form-group">
        <label for="telephone" class="form-label">Дата рождения</label>
        <input type="tel" name="telephone" class="form-control" id="telephone" placeholder="Введите номер телефона" pattern="+1 ([0-9]{3})-[0-9]{3}-[0-9]{4}">
    </div>

    <div class="form-group">
        <label for="e-mail" class="form-label">Дата рождения</label>
        <input type="e-mail" name="e-mail" class="form-control" id="e-mail" placeholder="Введите e-mail">
    </div>

    <hr class="my-4">
    <button class="btn btn-success" type="submit">Next</button>
</form>

</body>
</html>
