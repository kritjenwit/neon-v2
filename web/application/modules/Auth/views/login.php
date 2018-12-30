<?php
    $field = array(
        'email' => array(
            'type' => 'email',
            'id' => 'email',
            'name' => 'email',
            'placeholder' => 'Enter your email',
            'class' => 'form-control',
            'required' => 'required',
        ),
        'password' => array(
            'type' => 'password',
            'id' => 'password',
            'name' => 'password',
            'placeholder' => 'Enter your password',
            'class' => 'form-control',
            'required' => 'required',
        ),
    )
?>

<div class="row m-top-100">
    <div class="col-md-6 offset-md-3">
        <div class="card card-body">
            <h4>Login</h4>

            <?php
            $this->load->view('session');
            echo form_open('auth/verify_login');
            echo gen_ui($field);
            echo btn_submit('Login','btn-primary btn-block');
            echo form_close();
            ?>
        </div>
    </div>
</div>