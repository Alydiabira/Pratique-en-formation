<?php

echo "<pre>";
print_r(get_declared_classes());
echo "</pre><hr>";

// get_declared_classes() = fonction prédéfinie qui permet de lister toutes les classes existantes

// Il y a 182 classes prédéfinies. Ne pas oublier de vérifier qu'une classe prédéfinie ne fait pas déjà ce que vous voulez faire quand vous avez une problématique

echo "<pre>";
print_r(get_declared_interfaces());
echo "</pre><hr>";

// get_declared_interfaces() = fonction prédéfinie qui permet de lister toutes les interfaces existantes

// Il y a 18 interfaces prédéfinies. De même, ne pas oublier de vérifier qu'une interface ne fait pas déjà ce que vous voulez faire quand vous avez une problématique.


echo "<pre>";
print_r(get_declared_traits());
echo "</pre><hr>";

// get_declared_traits() = fonction prédéfinie qui permet de lister tous les traits existants

// Il n'y a pas de trait prédéfini. 