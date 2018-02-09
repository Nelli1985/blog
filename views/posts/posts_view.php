<div class="span8">
    <a href="<?=BASE_URL?>posts/">Tagasi...</a>
    <p class="text-right"><?php echo $post['name'] ?></p>
    <h1><?php echo $post['post_subject'] ?></h1>
    <p><?php echo $post['post_text'] ?></p>
    <div>
        <u class="list-inline list unstyled" style="text-decoration: none;">
            <hr>
            <li><span><i class="glyphicon glyphicon-calendar"></i><?php echo $post['post_created'] ?></span></li>
            <span><i class="glyphicon glyphicon-comment"></i> ? comments</span>
        </u>
    </div>
</div>



