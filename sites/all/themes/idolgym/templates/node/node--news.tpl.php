<h2 class="title"><?php print $node->title;?></h2>

<div class="created">
    <?php print date('d.m.y', $node->created); ?>
</div>

<div class="image">

</div>
<div class="body">
    <?php  print $node->body['und'][0]['value']; ?>
</div>