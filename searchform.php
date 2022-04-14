<form action="<?php home_url( '/' )?>" method="get">
    <input type="text" name="s" id="search" class="form-control search-input" placeholder="Type to search" value="<?php the_search_query(); ?>" />
</form>