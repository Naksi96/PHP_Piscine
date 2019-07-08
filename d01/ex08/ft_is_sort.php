<?PHP
    function ft_is_sort($arr)
    {
        $tmp = $arr;
        sort($tmp);
        if ($tmp === $arr)
            return TRUE;
        else
            return FALSE;
    }
?>