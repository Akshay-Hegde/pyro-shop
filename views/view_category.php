<h2 id="page_title">
    <?php echo $this->module_details['name']. ' - ' .$cat_name; ?>
</h2>

<div id="search_div">
    <?php echo form_open('/shop/view_category/'. $cat_id); ?>
        <?php   $data = array(
                  'name'        => 'search',
                  'id'          => 'search',
                  'value'       => '',
                  'maxlength'   => '100',
                  'size'        => '50',
                  'style'       => 'width:50%',
                );
            echo form_input($data); ?>
        <?php   $data = array(
                  'name'        => 'submit',
                  'id'          => 'submit',
                  'value'       => lang('shop.search_label')
                );
            echo form_submit($data); ?>
</div>

<div id="view_category">
<?php if ($items->num_rows() != 0) : ?>

    <table width="100%" class="category_items">
        <thead>
        <tr>
            <th width="200px">Item</th>
            <th><?php echo lang('shop.item_title_label'); ?></th>
            <th><?php echo lang('shop.item_model_label'); ?></th>
            <th width="120px"><?php echo lang('shop.item_price_label'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($items->result() as $item) 
        {
            echo '<tr><td><!--<img src="' .$thumbs[$item->id]. '" >--></td>';
            echo '<td><a href="' .site_url(). 'shop/view_item/' .$item->id. '">' .$item->name. '</a></td>';
            echo '<td>' .$item->model. '</td>';
            echo '<td>' .lang('shop.currency') .$item->price. '</td></tr>';
        }?>
        </tbody>
    </table>

<?php else : ?>

    <h3>
        <?php echo lang('shop.item_no_items'); ?>
    </h3>

<?php endif; ?>
</div>