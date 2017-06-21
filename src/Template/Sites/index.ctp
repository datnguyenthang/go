<?php 
      use Cake\Routing\Router; 
      use Cake\Utility\Text;
?>
<?php echo $this->Html->css('rating.css');?>
<?php echo $this->Html->script('rating.js');?>
<div class="center-find" >
    <div>
        <h1>
            <span>Tìm nơi thuê xe với giá tốt nhất</span>
        </h1>
    </div>

    <?php echo $this->Form->create('Sites', ['method' => 'get', 'class' => 'form-inline']);  ?>
        <div class="input-group">
            <div class="input-text">
            <?php echo $this->Form->input('name', [
                            'id' => 'autocomplete',
                            'class' => 'ui-autocomplete form-control input-lg',
                            'size'=> 40,
                            'placeholder' => 'Địa điểm',
                            'label' => false
                    ]);
            ?>
            </div>
            <span class="input-group-btn">
                <?php echo $this->Form->button('Tìm kiếm', ['type' => 'submit', 'class' => "btn btn-secondary input-lg"]); ?>
            </span>
        </div>
    <?php echo $this->Form->end(); ?>
</div>

<?php if (count($query) > 0): ?>
<style>
.center-find {
    margin-top:-5%;
    position:relative;
}
</style>
<div class="row">
    <ul class="list-group">
    <?php foreach ($query as $shop): ?>
        <li class="col-xs-12 list-group-item">
            <div class="card well">
                <div class="row ">
                    <div class="col-md-4">
                        <!--<img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400" class="w-100">-->
                        <?php echo $this->Html->image($this->Upload->url($shop, 'img'), ['class' => 'img-responsive img-rounded']);?>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">
                            <h4 class="card-title"><?= h($shop['name']) ?></h4>
                            <input name="rating" value="0" class="rating" id="rating_star" type="hidden" itemID="1" />
                            <div class="overall-rating">
                                <?php if (isset($shop['r']['rating_number'])):?>
                                    <span id="avgrat">
                                        <?php echo ROUND(($shop['r']['total_points'] / $shop['r']['rating_number']), 1);?>
                                    </span>
                                    <?php 
                                        $average = ROUND(($shop['r']['total_points'] / $shop['r']['rating_number']), 0);
                                        if ($average == 5) echo 'Xuất sắc';
                                        if ($average == 4) echo 'Rất tốt';
                                        if ($average == 3) echo 'Tốt';
                                        if ($average == 2) echo 'Không tốt';
                                        if ($average == 1) echo 'Tệ';
                                    ?>
                                    (<span id="totalrat"><?php echo $shop['r']['rating_number'];?></span> nhận xét)
                                <?php else : ?>
                                    Chưa được đánh giá.
                                    <!--(Average Rating <span id="avgrat"><?php echo 0; ?></span>
                                    Based on <span id="totalrat"><?php echo 0; ?></span>  rating)-->
                                <?php endif; ?>
                            </div>
                            <!--<strong><?= h($shop['phone']) ?></strong>-->
                            <p class="card-text"><?= h($shop['address']) ?></p>
                            <p class="card-text"><?= h(Text::truncate($shop['description'], 
                                                                      150,
                                                                      ['ellipsis' => '...',
                                                                       'exact' => true,
                                                                       'html' => true])) ?>
                            </p>
                            <?php echo $this->Html->link("Chi tiết", ['controller' => 'Shops', '?' =>['code' => $shop['code']]], ['class' => 'btn btn-primary']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Trang đầu')) ?>
            <?= $this->Paginator->prev('< ' . __('trước')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('sau') . ' >') ?>
            <?= $this->Paginator->last(__('trang cuối') . ' >>') ?>
        </ul>
    </div>
</div>
<?php elseif ($this->request->data['name']): ?>
<p><?php echo __('Không có kết quả nào được tìm thấy.'); ?></p>
<?php endif; ?>



<script>
    jQuery('#autocomplete').autocomplete({
        source:'<?php echo Router::url(array('controller' => 'Sites', 'action' => 'autocomplete')); ?>',
        minLength: 2
    });
    $(function() {
        $(".rating").each(function(){
            $(this).codexworld_rating_widget({
                starLength: '5',
                initialValue: Math.round($(this).parents('.card-block').find('#avgrat').text()),
                callbackFunctionName: 'processRating',
                imageDirectory: 'img/',
                inputAttr: 'itemID'
            });
        })
    });
    function processRating(val, attrVal){
        alert('Vui lòng vào phần chi tiết để đánh giá cửa hàng!!!!');
        return;
    }
</script>