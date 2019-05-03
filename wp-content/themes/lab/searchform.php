<!-- On ajoute ici un formulaire de recherche qui va chercher tout les articles qui contienent un certain mot. Le formulaire doit avoir la méthode get -->
<form class="search-form" action="<?php echo get_site_url(); ?>" method="get">
    <!--le name de cette input est "s" pour string afin de rechercher un mot-->
    <input class="form-control" type="text" placeholder="Search" style="position: relative; padding: 6%; border: 0;" name="s" id="">
    <button class="search-btn" type="submit"><i class="flaticon-026-search" style="position: absolute; top:25%; left:40%"></i></button>
</form>