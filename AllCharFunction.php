<?php

function AllChar($possibileCharL, $possibileCharN, $possibileCharS)
{
    return substr(($possibileCharL . $possibileCharN . $possibileCharS), rand(0, strlen(($possibileCharL . $possibileCharN . $possibileCharS)) - 1), 1);
}
