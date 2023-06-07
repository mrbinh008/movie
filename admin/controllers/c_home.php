<?php

class c_home
{
    public function index()
    {
        $m_home = new m_home();
        $doanh_thu = $m_home->read_doanh_thu();
        include_once("view/v_index.php");
    }
}