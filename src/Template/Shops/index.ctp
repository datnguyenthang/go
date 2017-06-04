<?php 
      use Cake\Routing\Router; 
      use Cake\Utility\Text;
?>

<div class="card">
    <div class="row ">
        <div class="col-md-4">
            <!--<img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">-->
            <?php echo $this->Html->image($this->Upload->url($shop, 'img'), ['class' => 'img-responsive img-rounded']);?>
        </div>
        <div class="col-md-8 px-3">
            <div class="card-block px-3">
                <h4 class="card-title"><?= h($shop['name']) ?></h4>
                <!--<strong><?= h($shop['phone']) ?></strong>-->
                <a href="tel:<?= h($shop['phone']) ?>" class='btn btn-primary'>Đặt xe</a>
                <p class="card-text"><?= h($shop['address']) ?></p>
                <p class="card-text"><?= h($shop['description']) ?></p>
            </div>
        </div>
    </div>
</div>
<?php if (count($shop['shop_items']) > 0): ?>
<style>
.center-find {
    margin-top:-5%;
    position:relative;
}

</style>
<div class="row">
    <ul class="list-group">
    <?php foreach ($shop['shop_items'] as $item): ?>
        <li class="col-xs-12 list-group-item">
            <div class="card well">
                <div class="row ">
                    <div class="col-md-4">
                        <!--<img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">-->
                        <?php echo $this->Html->image($this->Upload->url($item, 'img'), ['class' => 'img-responsive img-rounded']);?>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">
                            <h4 class="card-title"><?= h($item['brandname']) ?></h4>
                            <strong><?= h($item['productname']) ?></strong>
                            <!--
                            <p class="card-text"><?= h($item['pricefrom']) ?></p>
                            <p class="card-text"><?= h($item['priceto']) ?>
                            -->
                            </p>
                            <?php // echo $this->Html->link("Đặt xe", ['controller' => 'Shops', 'action' => 'order'], ['class' => 'btn btn-primary']); ?>
                            <a href="tel:<?= h($shop['phone']) ?>" class='btn btn-primary'>Đặt xe</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>
<div class="fb-comments" data-mobile=true data-href="<?= $this->request->getUri(); ?>" data-numposts="5"></div>