
<?php
function spanToStyle($settingKey)
{
    $titre = get_theme_mod($settingKey);
    $titre = str_replace("[", "<span>", $titre);
    $titre = str_replace("]", "</span>", $titre);

    return $titre;
}