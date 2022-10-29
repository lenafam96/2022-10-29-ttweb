<?php

class Controller
{
    public function myHeader($URL): void
    {
        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
    }
    public function goError(): void
    {
        $this->myHeader('views/404.php');
    }
}
