<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item); ?>

        <h2><?php echo $news_item['title']; ?></h2>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>

        <p><a href="<?php echo site_url('news/'.$news_item['slug'])>">View articles</a></p>

<?php endforeach; ?>