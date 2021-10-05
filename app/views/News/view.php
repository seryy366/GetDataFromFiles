
<?php if(isset($_POST['formTemplate'] ) AND $_POST['formTemplate']== "def"): ?>
    <h1><?=$post->title;?></h1>
    <hr />
    <p style="font-size:10px"><?=$post->authors->name;?></p>
    <p style="font-size:10px"><?=$post->date;?></p>
    <p><img src="img/<?=$post->image->src;?>" width="<?=$post->image->width;?>" height="<?=$post->image->height;?>" /></p>
    <p style="font-size:12px"><?=$post->text;?></p>
<?php else: ?>
    <tr>
        <p><img src="img/<?=$post->image->src;?>" width="<?=$post->image->width;?>" height="<?=$post->image->height;?>" /></p>
        <td>
            <h1><?=$post->title;?></h1>
            <p style="font-size:10px"><?=$post->authors->name;?></p>
            <p style="font-size:10px"><?=$post->date;?></p>
            <p style="font-size:12px"><?=$post->text;?></p>
        </td>
    </tr>
<?php endif; ?>