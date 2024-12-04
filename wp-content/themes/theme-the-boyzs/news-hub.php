<?php 
/**
 * 	Template Name: NewsHub
 *  Template Post Type: page
 */
?>

<!--Navigation-->
<?php
	get_header(); // Affiche header.php
?>

<!--Before the posts-->
<section>
	<div class="container" id="container-news">
		<select class="ordre" id="orderSelect" onchange="fetchArticle()">
			<option value="asc" selected disabled hidden>Ordre d'affichage</option>
			<option value="asc">Voir les nouvelles récentes</option>
			<option value="desc">Voir les nouvelles anciennes</option>
		</select>
	</div>
</section>

<div class="titrenouvelle">
	<p class="h1">Nouvelles</p>
</div>

<section class="news-wrapper">
	<div class="news-wrapper__list">

		<!--Loop through the posts-->
		<script>
			let orderSelect = document.querySelector("#orderSelect");
			let nbArticle = 4;
			let nbArticleFetch = 0;
			fetch("/wp-json/wp/v2/article")
					.then((data) => data.json())
					.then((results) => nbArticleFetch = results.length)

			function fetchArticle() {
				fetch("/wp-json/wp/v2/article?orderby=date&order="+orderSelect.value+"&per_page="+nbArticle)
					.then((data) => data.json())
					.then((results) => buildElements(results))
					.catch((error) => console.log("Catch Error: ", error));
			}
			
			function buildElements(results) {
				let html = "";
				let list = document.querySelector(".news-wrapper__list");
				list.innerHTML = ""
				results.forEach((article) => {
					/*--Post Template--*/
					html += '<div class="liste-carte"><a href="'+article.link+'">'+article.acf.titre_de_larticle+'</a><p>'+article.acf.texte_du_resume+'</p></div>'
					
				})
				list.innerHTML=html;

				let moreBtn = document.querySelector(".moreBtn");
				console.log(nbArticle, nbArticleFetch)
				if (nbArticle >= nbArticleFetch) {
					moreBtn.style.display="none";
				} else {
					moreBtn.style.display="block";
				}
			}

			function seeMore() {
				nbArticle = nbArticle + 6;
				fetchArticle();
			}
			
			fetchArticle();
		</script>

		

	<!--After the posts-->
	</div>
    <button class="moreBtn" onclick="seeMore()">Voir plus de nouvelles</button>
</section>

<!--Partner and footer-->
<?php
	get_footer(); // Affiche footer.php
?>