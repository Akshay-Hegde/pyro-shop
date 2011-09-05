<h2><?php echo $this->module_details['name']; ?></h2>
<p><?php echo base_url(); ?></p>
<ul><?php echo lang('shop.cat_list_title'); ?>
    <?php foreach($shop_categories->result() as $category) {
        echo '<li><a href="'.base_url().'shop/view_category/' .$category->id. '" >' .$category->name. '</a></li>';
    }
    ?>
</ul>