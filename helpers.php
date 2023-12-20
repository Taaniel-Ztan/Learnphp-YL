<?php

use App\Models\User;

function view($viewName, $wars = []){
    extract($wars);
    include __DIR__ . "/views/$viewName.php";
}
function auth(){
    return User::auth();
}


// method