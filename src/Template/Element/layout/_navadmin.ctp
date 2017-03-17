<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Nationals'), ['controller' => 'Nationals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Type Shops'), ['controller' => 'TypeShops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Monies'), ['controller' => 'Monies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Order Details'), ['controller' => 'OrderDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pictures'), ['controller' => 'Pictures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Shop'), ['controller' => 'Shops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Shop Count Views'), ['controller' => 'ShopCountViews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Shop Infos'), ['controller' => 'ShopInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Shop Items'), ['controller' => 'ShopItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Logout'), ['controller' => 'Admins', 'action' => 'logout']) ?></li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->