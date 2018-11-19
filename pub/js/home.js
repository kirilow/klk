
//const apiKey = '134284fab9a044198d258fdf6415ad1c';
//const defaultSource = 'the-washington-post';
//const sourceSelector = document.querySelector('#sources');
//const newsArticles = document.querySelector('#news_container');
//
//console.log( navigator );
//
//if ('serviceWorker' in navigator) {
//  window.addEventListener('load', () =>
//    navigator.serviceWorker.register('/pub/js/sw.js')
//        .then(registration => console.log('Service Worker registered'))
//        .catch(err => 'SW registration failed'))
//        .catch(function(err) {
//            // registration failed :(
//            console.log('ServiceWorker registration failed: ', err);
//        });
//}
//
//window.addEventListener('load', e => {
//    
//    if( $('#right_home_container').is(':visible') ){
//        sourceSelector.addEventListener('change', evt => updateNews(evt.target.value));
//        updateNewsSources().then(() => {
//            sourceSelector.value = defaultSource;
//            updateNews();
//        });
//    }
//});
//
//window.addEventListener('online', () => updateNews(sourceSelector.value));
//
//async function updateNewsSources() {
//  const response = await fetch(`https://newsapi.org/v2/sources?apiKey=${apiKey}`);
//  const json = await response.json();
//  sourceSelector.innerHTML =
//    json.sources
//      .map(source => `<option value="${source.id}">${source.name}</option>`)
//      .join('\n');
//}
//
//async function updateNews(source = defaultSource) {
//  newsArticles.innerHTML = '';
//  const response = await fetch(`https://newsapi.org/v2/top-headlines?sources=${source}&sortBy=top&apiKey=${apiKey}`);
//  const json = await response.json();
//  newsArticles.innerHTML =
//    json.articles.map(createArticle).join('\n');
//}
//
//function createArticle(article) {
//  return `
//    <div class="article">
//      <a href="${article.url}">
//        <h2>${article.title}</h2>
//        <img src="${article.urlToImage}" alt="${article.title}" class="responsive-img">
//        <p>${article.description}</p>
//      </a>
//    </div>
//  `;
//}

$(document).ready(function () {
//    $('.carousel').carousel({ 
//        dist: 0,
//        no_wrap: true,
//        padding:5,
//        fullWidth: true,
//    });
});

//$(document).on('click','.prev_caroucel',function(){
//    $('#homepage_carousel').carousel('prev');
//});
//$(document).on('click','.next_caroucel',function(){
//    $('#homepage_carousel').carousel('next');
//});