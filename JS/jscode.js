window.onload = function getNews(){
    var url = 'https://newsapi.org/v2/top-headlines?' +
          'sources=bbc-news&' +
          '73779a2eb2dd43b2bfa2bb692e56e9dc';
    var req = new Request(url);


    fetch(req)
        .then(response => {
            console.log("1");
          return response.json();
        })
        .then(data => {
            console.log("2");
            for (const article of data.articles) {
                //   console.log(article)
                // let title = article.title;
                // let author = article.author;
                // let desc = article.description;
                // let nurl = article.url;
                // let datePublished = article.publishedAt;
                // let image = article.urlToImage;
           

                let news = document.getElementById("news");
                let maind = document.createElement("div");
                maind.setAttribute("class", "class-item d-flex align-items-center ");
                let a = document.createElement("a");
                a.setAttribute("class", "class-item-thumbnail");
                let i = document.createElement("img");
                i.setAttribute("src", article.urlToImage);
                
                a.appendChild(i);
    
                let d = document.createElement("div");
                d.setAttribute('class', "class-item-text");
                let title = document.createElement("a");
                title.innerHTML= article.title;
                title.setAttribute("href", article.url);
                let desc = document.createElement("p");
                desc.style.fontSize="10px";
                desc.innerHTML=article.description;
                d.appendChild(title);
                d.appendChild(desc);
    
                maind.appendChild(a);
                maind.appendChild(d);
                news.appendChild(maind);
    


          }
            
        })
        // .catch(err => {
        //   console.log("error");
        // })


    
}
function searchNews(){
    var url = 'https://newsapi.org/v2/everything?' +
          'q=Apple&' +
          'from=2019-12-28&' +
          'sortBy=popularity&' +
          'apiKey=a0496cb0b6d4480babd2b7bbc9eac804';

    var req = new Request(url);
    
    fetch(req)
        .then(function(response) {
            console.log(response.json());
        })
    
}

function test(){
    document.getElementById("test").innerHTML = "TESTESTSTESTSETSTSTSETSE";
}