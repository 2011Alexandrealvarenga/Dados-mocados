<?php 
require 'dados.php';


echo '<pre>';
print_r($posts);
echo '</pre>';
?>
<?php foreach($posts as $post):?>
    <p><?php echo $post['id']; ?></p>
    <p><?php echo $post['title']; ?></p>
    <p><?php echo $post['description']; ?></p>
    
        <?php foreach($post['tags'] as $tag): ?>           
            <a href="<?php echo $tag; ?>"><?php echo $tag; ?></a> <br>
        <?php endforeach; ?>

    <img src="<?php echo $BASE_URL ?><?php echo $post['img'] ;?>">
<?php endforeach; ?>