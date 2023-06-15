<div class="main">  	
	<div class="home">
		<?php if (!$logged):?>
		<a class="button" href="?p=signup">Créer un compte</a>
		<a class="button" href="?p=signup">Se connecter</a>
		<?php else:;?>
		<img src="<?= getAvatar($_SESSION['id']) ?? 'img/defaut.jpg'?>">
		<a class="button" href="?p=deconnect">Se déconnecter</a>
		<?php endif;?>
	</div>
</div> 
<?php

            // On fait une boucle sur tous les posts du blog
            $index = 0 ;
            foreach($blog->getPosts() as $post)
            {
                // Et pour chaque post, on crée le bout de code qui correspond
            ?>
                        <div class="card">
                            <div class="card__header">
                            <img src="https://source.unsplash.com/600x400/?computer" alt="card__image" class="card__image" width="600">
                            </div>
                            <div class="card__body">
                            <span class="tag tag-green">Technologie</span>
                            <h4><a href="index.php?page=post&id=<?= $index ?>"><?= $post->getTitle() ?></a></h4>
                            <p><?= $post->getMessage() ?></p>
                            </div>
                            <div class="card__footer">
                                <div class="user">
                                    <img src="https://i.pravatar.cc/40?img=22" alt="<?= $post->getAuthor()->getUsername() ?>" class="user__image">
                                    <div class="user__info">
                                        <h5><?= $post->getAuthor()->getUsername() ?></h5>
                                        <small><?= date("d/m/Y à H:i", $post->getDate()->getTimestamp()) ?>, <?= $post->getViews() ?> vues</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php