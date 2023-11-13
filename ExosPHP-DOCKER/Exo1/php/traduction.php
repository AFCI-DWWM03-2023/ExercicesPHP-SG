<?php 

function Traduction($france,$angleterre,$espagne){

if ($france == "france") {
    echo "<h2>Bienvenue sur mon site </h2>
<p>je suis developpeur Web </p>
<p>Actuellement en formation en déveleoppeur Web et Web Mobile, je suis a la recherche d'un stage afin de mettre en pratique mes acquis théoriques.</p>";
} elseif ($angleterre == "angleterre") {
    echo "<h2>Welcome to my site </h2>
<p>I am a web developer </p>
<p>Currently training as a Web and Mobile Web developer, I am looking for an internship to put my theoretical knowledge into practice.</p>";
} elseif ($espagne == "espagne") {
    echo "<h2>Bienvenido a mi sitio </h2>
<p>Soy desarrollador web</p>
<p>Actualmente formándome como desarrollador Web y Web Móvil, busco una pasantía para poner en práctica mis conocimientos teóricos.</p>";
}else{
    echo "<h2>Bienvenue sur mon site </h2>
    <p>je suis developpeur Web </p>
    <p>Actuellement en formation en déveleoppeur Web et Web Mobile, je suis a la recherche d'un stage afin de mettre en pratique mes acquis théoriques.</p>"; 
}
}

?>