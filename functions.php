<?php

//в таком виде в функции полно ошибок
function get_user_meta($id, $key)
{
    return get_metadata('user', $user_id, $key, $single);
}
