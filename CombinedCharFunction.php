<?php

function CombinedChar($possibileChar1, $possibileChar2)
{
    return substr(($possibileChar1 . $possibileChar2), rand(0, strlen(($possibileChar1 . $possibileChar2)) - 1), 1);
}
