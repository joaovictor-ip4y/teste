<?php

namespace App;

class StringOperations
{
    /**
     * Contar o número de palavras em uma string.
     *
     * @param string $str A string para contar as palavras.
     * @return int O número de palavras na string.
     */
    public function countWords(string $str): int
    {
        $words = explode(' ', $str);
        return count($words);
    }

    /**
     * Substituir a primeira ocorrência de uma palavra por outra.
     *
     * @param string $str A string a ser modificada.
     * @param string $search A palavra a ser substituída.
     * @param string $replace A palavra substituta.
     * @return string A string modificada.
     */
    public function replaceFirstOccurrence(string $str, string $search, string $replace): string
    {
        $position = strpos($str, $search);
        if ($position !== false) {
            $str = substr_replace($str, $replace, $position, strlen($search));
        }
        return $str;
    }

    /**
     * Verifica se a string contém um número.
     *
     * @param string $str A string a ser verificada.
     * @return bool True se a string contém um número, false caso contrário.
     */
    public function containsNumber(string $str): bool
    {
        return preg_match('/\d/', $str) > 0;
    }

    /**
     * Retorna a string invertida, mas não faz nada se a string tiver mais de 10 caracteres.
     *
     * @param string $str A string a ser invertida.
     * @return string A string invertida ou original.
     */
    public function reverseStringIfShort(string $str): string
    {
        if (strlen($str) <= 10) {
            return strrev($str);
        }
        return $str;
    }
}
