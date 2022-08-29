<?php


//в таком виде в функции полно ошибок
function get_user_meta($id, $key)
{
    return get_metadata('user', $user_id, $key, $single);
}

//тоже не всё тут хорошо
function get_profile($id)
{
    $profile = get_user_by('id', $id);
    return $profile;
}