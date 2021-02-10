<form action="/" method="get">
    <label for="search">Search</label>
    <input type="text" name="s" id="search" value="<?php the_search_query();?>" required>
    <!-- // to restrict search in a specific area , cat is category, value is the ID of the category which we can look in the admin panel-->
    <input type="hidden" name="cat" value="3"> 
    <button type="submit">Search</button>
</form>