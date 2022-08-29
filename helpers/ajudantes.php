<?php

function traduz_ativo_para_exibir($ativo)
{
    if ($ativo == 1) {
        return 'sim';
    } else {
        return 'não';
    }
}

function traduz_ativo_para_banco($ativo)
{
    if ($ativo == 1) {
        return true;
    } else {
        return false;
    }
}