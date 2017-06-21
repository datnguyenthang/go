<?php 
      use Cake\Routing\Router; 
      use Cake\Utility\Text;
?>
<?php echo $this->Html->css('rating.css');?>
<?php echo $this->Html->script('rating.js');?>
<div class="card">
    <div class="row ">
        <div class="col-md-4">
            <!--<img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">-->
            <?php echo $this->Html->image($this->Upload->url($shop, 'img'), ['class' => 'img-responsive img-rounded']);?>
        </div>
        <div class="col-md-8 px-3">
            <div class="card-block px-3">

                <h4 class="card-title"><?= h($shop['name']) ?></h4>
                <input name="rating" value="0" class="rating" id="rating_star" type="hidden" itemID="<?= h($shop['id']) ?>" />
                <div class="overall-rating">
                    <?php if (isset($ratingRow->total_points)):?>
                        <span id="avgrat">
                            <?php echo ROUND(($ratingRow->total_points / $ratingRow->rating_number), 1);?>
                        </span>
                        <?php 
                            $average = ROUND(($ratingRow->total_points / $ratingRow->rating_number), 0);
                            if ($average == 5) echo 'Xuất sắc';
                            if ($average == 4) echo 'Rất tốt';
                            if ($average == 3) echo 'Tốt';
                            if ($average == 2) echo 'Không tốt';
                            if ($average == 1) echo 'Tệ';
                        ?>
                        (<span id="totalrat"><?php echo $ratingRow->rating_number;?></span> nhận xét)
                    <?php else : ?>
                        Chưa được đánh giá.
                        <!--(Average Rating <span id="avgrat"><?php echo 0; ?></span>
                        Based on <span id="totalrat"><?php echo 0; ?></span>  rating)-->
                    <?php endif; ?>
                </div>
                <!--<strong><?= h($shop['phone']) ?></strong>-->
                <a href="tel:<?= h($shop['phone']) ?>" data-toggle="modal" data-target="#<?= h($shop['code']) ?>" class='btn btn-primary'>Đặt xe</a>
                <!-- Modal -->
                <div id="<?= h($shop['code']) ?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Thông tin liên hệ</h4>
                      </div>
                      <div class="modal-body">
                        <p>Số điện thoại liên hệ : <strong><?= h($shop['phone']) ?></strong></p>
                        <p>Tên người liên hệ : <strong><?= h($shop['contactperson']) ?></strong></p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng cửa sổ</button>
                      </div>
                    </div>

                  </div>
                </div>
                
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
                            <?php if ($item['pricefrom'] != $item['priceto']): ?>
                                <p class="card-text"><?= h(number_format($item['pricefrom'])) ?> VND</p>
                                <p class="card-text"><?= h(number_format($item['priceto'])) ?> VND</p>
                            <?php else: ?>
                                <p class="card-text"><?= h(number_format($item['priceto'])) ?> VND</p>
                            <?php endif; ?>
                            </p>
                            <?php // echo $this->Html->link("Đặt xe", ['controller' => 'Shops', 'action' => 'order'], ['class' => 'btn btn-primary']); ?>
                            <a href="tel:<?= h($shop['phone']) ?>" class='btn btn-primary' data-toggle="modal" data-target="#<?= h($shop['code']) ?>">Đặt xe</a>
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
<script>
    $(function() {
        $(".rating").codexworld_rating_widget({
            starLength: '5',
            initialValue: <?php if (isset($ratingRow->total_points)) echo ROUND(($ratingRow->total_points / $ratingRow->rating_number),0); else echo 0; ?>,
            callbackFunctionName: 'processRating',
            imageDirectory: 'img/',
            inputAttr: 'itemID'
        });
    });
    function processRating(val, attrVal){
        $.ajax({
            type: 'GET',
            url: '/shops/rating',
            data: 'itemid='+attrVal+'&ratingPoints='+val,
            dataType: 'json',
            success : function(data) {
                if (data.status == 'ok') {
                    alert('Bạn vừa đánh giá '+val+' sao');
                    $('#avgrat').text(data.average_rating);
                    $('#totalrat').text(data.rating_number);
                } else if (data.status == 'voted') {
                    alert('Bạn đã đánh giá rồi!');
                } else {
                    alert('Có lỗi xảy ra, vui lòng thử lại.');
                }
            }
        });
    }
</script>