<div class="wrap">
    <!-- nous utilisons la fonction get_admin_page_title() pour récupérer le titre de la page admin que l'on a défini lors de l'enregistrement -->
    <h1><?= get_admin_page_title(); ?></h1>
    <!-- Ici nous ajoutons une partie d'html qui prendra en charge les notifications. On met cela dans un fichier à part afin de pouvoir réutiliser les notifications ailleurs -->
    <?php view('partials/notice'); ?>
    <div class="row">
        <div class="col-sm-6">

            <p>Email reçus depuis le site (Formulaire de Contact)</p>

            <?php foreach ($mails as $mail) : ?>
            <div class="postbox">
                <div class="inside">
                    <strong>client : </strong><?= $mail->email; ?>
                    <!-- On entour notre bouton 'voir' de ce qu'on appel un 'Gate' c'est une façon de cacher un élément si on à pas la permission,la page que rendais le bouton 'voir' est toujours accessible si on connait l'url mais le bouton lui est maintenant caché -->
                    <!-- A vous de changer le mot "permission" dans notre function curent_user_can par la permission 'show_email' et de voir la différence -->
                    <?php if (current_user_can('show_email')) : ?>
                    <a href="<?php menu_page_url('mail-client'); ?>&action=show&id=<?= $mail->id; ?>" class="button-primary">voir</a>
                    <?php endif; ?>
                </div>
            </div>            
            <?php endforeach; ?>
        </div>
        <div class="col-sm-6">
            <p>Inscrits à la newsletter</p>

            <?php foreach ($news as $new) : ?>
            <div class="postbox">
                <div class="inside">
                    <strong>client : </strong><?= $new->email; ?>
                    <!-- On entour notre bouton 'voir' de ce qu'on appel un 'Gate' c'est une façon de cacher un élément si on à pas la permission,la page que rendais le bouton 'voir' est toujours accessible si on connait l'url mais le bouton lui est maintenant caché -->
                    <!-- A vous de changer le mot "permission" dans notre function curent_user_can par la permission 'show_email' et de voir la différence -->
                    <?php if (current_user_can('delete_email')) : ?>
            <form class="form-inline d-inline-block" action="<?php echo  get_admin_url() . '?action=news-delete' ?>" method="post">
                <input type="hidden" name="id" value="<?= $new->id; ?>">
                <button type="submit" class="button">supprimer</button>
            </form>
            <?php endif; ?>
                </div>
            </div>            
            <?php endforeach; ?>
            
        </div>
    </div>
</div>