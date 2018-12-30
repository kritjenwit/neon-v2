<?php
/**
 * Created by PhpStorm.
 * User: jenwi
 * Date: 29-Oct-18
 * Time: 17:51
 */

echo '<div class="has_error m-top-20">';

if ($this->session->flashdata('login_success'))
{
    echo flashdata('success',$this->session->flashdata('login_success'));
}
if ($this->session->flashdata('reg_error'))
{
    echo flashdata('error',$this->session->flashdata('reg_error'));
}
if ($this->session->flashdata('reg_pass'))
{
    echo flashdata('success',$this->session->flashdata('reg_pass'));
}
if ($this->session->flashdata('login_error'))
{
    echo flashdata('error',$this->session->flashdata('login_error'));
}

echo '</div>';