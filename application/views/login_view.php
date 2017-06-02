<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Форма логина</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">Логин:</label>
<input type="text" name="login" id="login_input" />
    </div>
    <div class="form-group">
      <label for="pwd">
Пароль::</label>
  <input type="password" name="password" id="login_input" />
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
  <input type="submit" name="login_submit" value="Войти" />
  </form>
</div>

</body> 
</html>


