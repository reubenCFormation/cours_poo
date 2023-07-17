<?php
/*
    Dans la programmation orienté objet, nous avons aussi la possibilité de declarer des methodes et des proprietés comme etant static. Que veux dire static? Si une facon de dire que la methode ou la proprieté appartient a la classe et non a une instance de celle ci.

    Les methodes et les proprietés statiques sont utilisés lors que nous n'avons aucune varieté. L'insanciation d'une classe (un objet) est utilisé pour pouvoir prendre en compte des cas de figure differents (par exemple, un animal n'aura pas le meme nom, pas le meme poids etc.). Mais imaginons que nous aurons une methode pour pouvoir recuprer tous nos animaux dans une base de données dans la classe Animal. On est d'accord que si on avait 5 instances d'animaux, la methode pour recuprer tous les animaux nous retournerai toujours la meme chose. C'est pour ca que cette methode sera une methode statique et va "appartenir" a une classe et non a une "instance"

    Un autre exemple serai une classe pour se connecter a une base de données. On a vu comment se connecter a une base de données et on a vu notre fonction connect. Mais on est d'accord que si on se connecte a une base de données, la methode connect est censé nous retourner la meme chose quoi que il en soit. En principe, on ne se connecte pas a une base de données differente d'une instance a une autre. Encore une fois, cette methode sera vu comme etant statique.

*/


?>