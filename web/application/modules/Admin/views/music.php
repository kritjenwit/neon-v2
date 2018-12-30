<?php
$field = array(
    'Music name' => array(
        'type' => 'text',
        'id' => 'music_name',
        'name' => 'music_name',
        'class' => 'form-control',
        'required' => 'required',
    ),
    'Album name' => array(
        'type' => 'text',
        'id' => 'album_name',
        'name' => 'album_name',
        'class' => 'form-control',
    ),
    'Artist' => array(
        'type' => 'text',
        'id' => 'artist',
        'name' => 'artist',
        'class' => 'form-control',
        'required' => 'required',
    ),
);

$music_type = array(
    'Music Type' => array(
        '' => 'Please select',
        'ballad' => 'Ballad',
        'country' => 'Country'
    ),
)

?>

<div class="row m-top-30 m-bot-50">
    <div class="col-md-6 offset-md-3">
        <?php echo Modules::run($module.'/nav'); ?>
        <div class="card card-header m-top-20">
            <h4>Add Music</h4>
            <hr>
            <?php
                echo form_open_multipart('admin/add_music');
                echo gen_ui($field,true);
                echo html_select($music_type,array('id' => 'music_type','name' => 'music_type','class' => 'form-control','required' => 'required'),true);
                echo '<div class="form-group"><label for="music_cover" class="form-control-label">Music Cover</label><br><input type="file" name="userfile1" id="music_cover" accept="image/png, image/jpeg"></div>';
                echo '<div class="form-group"><label for="music_file" class="form-control-label">Music File</label><br><input type="file" name="userfile2" id="music_file" accept="audio/mpeg, audio/mp3, audio/mp4"></div>';
                echo btn_submit('Add','btn-success btn-block');
                echo form_close();
            ?>
        </div>
    </div>
</div>

<script>
    $(() => {
        let availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "Scheme"
        ];
        $('#artist_name').autocomplete({
            source: availableTags
        });
        $('#album_name').autocomplete({
            source: availableTags
        });
    });
</script>