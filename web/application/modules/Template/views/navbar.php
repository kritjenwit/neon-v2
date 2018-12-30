<?php
    function gen_nav($navbar)
    {
        $template = '';
        foreach ($navbar as $k => $v )
        {
            $template .= '<li class="nav-item"><a class="nav-link" href="'.$v.'">'.$k.'</a></li>';
        }
        echo $template;
    }

    $before = array(
        'Login' => base_url('auth/login'),
        'Register' => base_url('auth/register')
    );
    if(isset($this->session->userdata()['users']))
    {
        $after = array(
            $this->session->userdata()['users']['firstname'] . ' ' .$this->session->userdata()['users']['lastname'] => base_url('user/profile'),
            'Logout' => base_url('auth/logout'),
        );
    }



?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <?php if(isset($this->session->userdata()['users'])): ?>
            <a class="navbar-brand" href="<?php echo base_url('home') ?>">Neon</a>
        <?php else: ?>
            <a class="navbar-brand" href="<?php echo base_url() ?>">Neon</a>
        <?php endif; ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav ml-auto">
                <?php
                if(isset($this->session->userdata()['users']) && $this->session->userdata()['users']['is_admin'] == 1)
                    echo '<li class="nav-item"><a class="nav-link" href="'.base_url('admin').'">Admin Panel</a></li>';

                if(isset($this->session->userdata()['users']))
                        gen_nav($after);
                    else
                        gen_nav($before);

                ?>

            </ul>
        </div>
    </div>
</nav>