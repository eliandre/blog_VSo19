
<ul class="list-group">
    <?php foreach($tags as $tag): ?>
        <li class="list-group-item">
            <?php echo $tag['tag_name'];?>
            <span class="badge badge-primary"><?php echo $tag['count'];?></span>
        </li>
    <?php endforeach; ?>
</ul>