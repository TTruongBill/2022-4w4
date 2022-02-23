 <form action="<?php echo get_home_url('/');?>" class="recherche" method="get">
    <input type="text" name="s" class="recherche_input" placeholder="Recherche" value="<?php echo get_search_query();?>">
    <button class="recherche_button">
        <svg width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color= "rgb(187, 187, 187)";><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
    </button>
</form>