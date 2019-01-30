<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <div class="input-group search__form">
    <input type="text" class="search-field form-control mr-sm-2" placeholder="<?php echo esc_attr_x( '¿Cómo podemos ayudarte?', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" aria-describedby="search-form"> 
    <button type="submit" class="" id="search-form"><i class="fas fa-search"></i></button>  
  </div>   
</form>