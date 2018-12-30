<?php

    $field = array(
        'firstname' => array(
            'type' => 'text',
            'id' => 'firstname',
            'name' => 'firstname',
            'placeholder' => 'Enter your firstname',
            'class' => 'form-control',
            'required' => 'required',
        ),
        'lastname' => array(
            'type' => 'text',
            'id' => 'lastname',
            'name' => 'lastname',
            'placeholder' => 'Enter your lastname',
            'class' => 'form-control',
            'required' => 'required',
        ),
        'email' => array(
            'type' => 'email',
            'id' => 'email',
            'name' => 'email',
            'placeholder' => 'email',
            'class' => 'form-control',
            'required' => 'required',
        ),
        'password' => array(
            'type' => 'password',
            'id' => 'password',
            'name' => 'password',
            'placeholder' => 'password',
            'class' => 'form-control',
            'required' => 'required',
        ),
        're-password' => array(
            'type' => 'password',
            'id' => 're-password',
            'name' => 're-password',
            'placeholder' => 'Re-enter password',
            'class' => 'form-control',
            'required' => 'required',
        ),
    );
?>
<div class="row m-top-100">
    <div class="col-md-6 offset-md-3">
        <div class="card card-body">
            <h4>Register</h4>

            <?php
                $this->load->view('session');
                echo form_open('auth/verify_register');
                echo gen_ui($field);
                echo btn_submit('Register','btn-secondary btn-block');
                echo form_close();
            ?>
        </div>
    </div>
</div>