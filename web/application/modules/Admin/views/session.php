<?php

if($this->session->flashdata('upload_success'))
{
    echo flashdata('success',$this->session->flashdata('upload_success'));
}
if($this->session->flashdata('upload_fail'))
{
    echo flashdata('error',$this->session->flashdata('upload_fail'));
}

