<?php

class Connect
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $database = 'thuchanhbuoi3';

    public function connectDB()
    {
        $connect = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        mysqli_set_charset($connect, 'utf8');
        return $connect;
    }

    public function excuteQuery($sql)
    {
        $connect = $this->connectDB();

        $result = mysqli_query($connect, $sql);

        mysqli_close($connect);

        return $result;
    }

    public function excuteNonQuery($sql): void
    {
        $connect = $this->connectDB();

        mysqli_query($connect, $sql);

        mysqli_close($connect);
    }
}
