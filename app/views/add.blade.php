
<html>
<body>
<?php
    echo Form::open(array('url' => 'addForm','files'=>true));

    echo Form::label('name', 'name of episode');

    echo Form::text('name')."<br /><br />";

    echo Form::label('length', 'length');
    echo Form::text('length')."<br /><br />";

    echo Form::label('participants', 'participants');
    echo Form::text('participants',"Johan Axelsson, Martin Högberg")."<br /><br />";


    echo Form::label('keywords', 'keywords');
    echo Form::text('keywords')."<br /><br />";

    echo Form::label('description', 'description');
    echo Form::textarea('description')."<br /><br />";

    echo Form::label('image', 'image');
    echo Form::text('image')."<br /><br />";




    echo Form::label('mp3', 'mp3');
    echo Form::file('sound')."<br />";
    echo Form::submit('Add!');
    echo Form::close() ;
?>

</body>
</html>