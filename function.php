<?php 

function getUsersList () {
    //подключаем файл с логинами и паролями
    include 'password.php';
    //возвращаем массив
    return $users;
};

function existsUser($login) {
    
    if (array_key_exists($login, getUsersList())) {
		return true;
	}
    else {
        return false;
    }
};

function checkPassword ($login, $password) {
    if (existsUser($login)) {

        if (getUsersList()[$login] == sha1($password)) {
            return true;
        }
    } else {
        return false;
    }
};

function getCurrentUser () {
    $currentUser = $_SESSION['login'] ?? null;
    return $currentUser;
};

