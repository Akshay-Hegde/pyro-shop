<div id="view_all_categories">
    <h2><?php echo $this->module_details['name']; ?></h2>
    <p><?php echo lang('shop.cat_list_title'); ?></p>
    <ul>
        <?php foreach($shop_categories->result() as $category) 
        { echo '<li><a href="'.base_url().'shop/view_category/' .$category->id. '" >' .$category->name. '</a></li>'; }?>
    </ul>
</div>