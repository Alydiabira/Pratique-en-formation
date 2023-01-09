<?php $title = "Le blog d' Aly"; ?>

<?php ob_start(); ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">


<!-- Bootstrap Core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">


<!-- Theme CSS -->
<link href="freelancer.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">Aly DIABIRA</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li class="page-scroll">
                    <a href="#about">A propos de</a>
                </li>
                <li class="page-scroll">
                    <a href="#COMMENTAIRES">COMMENTAIRES</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>





<h1>Le super blog d'Aly !</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>

<div class="news">
    <h3>
        <?= htmlspecialchars($post->title) ?>
        <em>le <?= $post->frenchCreationDate ?></em>
    </h3>

    <p>
        <?= nl2br(htmlspecialchars($post->content)) ?>
    </p>
</div>

<h2>Commentaires</h2>

<form action="index.php?action=addComment&id=<?= $post->identifier ?>" method="post">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php
foreach ($comments as $comment) {
?>
    <p><strong><?= htmlspecialchars($comment->author) ?></strong> le <?= $comment->frenchCreationDate ?> (<a href="index.php?action=updateComment&id=<?= $comment->identifier ?>">modifier</a>)</p>
    <p><?= nl2br(htmlspecialchars($comment->comment)) ?></p>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>