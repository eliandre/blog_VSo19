<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php foreach ($posts as $post):?>
<div class="span8">
    <a href="<?php echo BASE_URL;?>posts/view/<?php echo $post['post_id'];?>"><h1><?php echo $post['post_subject']?></h1></a>
    <p><?php echo $post['post_text']?></p>
    <div>
        <span class="badge badge-success">Posted <?php echo $post['post_created']?></span>
        <div class="pull-right">Tags:
            <?php foreach ($tags[$post['post_id']] as $tag):?>
                <span class="badge badge-primary"><?php echo $tag?></span>
            <?php endforeach;?>
        </div>
    </div>
    <hr>
</div>
<?php endforeach;?>