<ul class="nav nav-tabs">
<?php
    $nav = array(
        'Admin' => base_url('admin'),
        'Music' => base_url('admin/music')
    );
    $template = '';
    foreach ($nav as $k => $v)
    {
        $template .= '<li class="nav-item">
                    <a class="nav-link" href="'.$v.'">'.$k.'</a>
                    </li>';
    }

    echo $template;
?>
</ul>
