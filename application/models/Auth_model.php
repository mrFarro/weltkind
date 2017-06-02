<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

function __construct() {
parent::__construct();
$this->load->helper('url'); //хелпер, чтобы работал redirect
}

function login() //функция авторизации
{
$login = $this->input->post('login'); //получение данных из текстового поля логин
$password = $this->input->post('password');//получение данных из текстового поля пароль
$query = $this->db->query("SELECT * FROM users WHERE login='$login' AND password='$password'"); //обращение к базе данных
//с запросом выбрать все из таблицы user, где логин и пароль - те, что введены в форму
if(isset($_POST['login_submit'])) //если нажата кнопка Войти
{
if($query) //если запрос выполнен успешно
{
if($this->db->affected_rows($query) > 0) //если запрос выдал количество строк больше 0
{
redirect('/Gallery/album/'); //перенаправляем на главную страницу
}
else //если такого пользователя нет
{
echo '<script>alert("Ошибка входа!");</script>'; //выводим сообщение
}
}
else //если запрос не прошел
{
echo '<script>alert("Ошибка!");</script>'; //выводим сообщение
}
}
}
}