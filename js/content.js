document.getElementById("searchBtn").addEventListener("click", () => {
  let removeContent = $(".col-12");
  let removeContent2 = $(".col-md-6");
  let removeContent3 = $(".col-lg-4");
  let numberOfResults = $(".numberOfResults");
  removeContent.remove();
  removeContent2.remove();
  removeContent3.remove();
  numberOfResults.remove();
  let searchTerm = document.getElementById("search").value;

    $.getJSON(
    `https://www.thesportsdb.com/api/v1/json/1/searchplayers.php?p=${searchTerm}`,
    function(data){
        console.log(data);
        console.log(data.player[0].strPlayer);
        let x = 0;
        let number = `<p class="numberOfResults">There is <u>${data.player.length}</u> result(s)!</p>`;
        $('.container').prepend(number);
        for(let i = 0; i <= data.player.length; i++){
            let results = 
            ` 
            <div class="col-12 col-md-6 col-lg-4">
                <div class="playerContainer">
                    <div class="playerImage">
                        <img src="${data.player[x].strThumb}">
                    </div>
                <h4><u>Name</u></h4>
                <p class="center">${data.player[x].strPlayer}</p>
                <h4><u>Sport</u></h4>
                <p class="center">${data.player[x].strSport}</p>
                <h4><u>Position</u></h4>                    <p class="center">${data.player[x].strPosition}</p>
                <h4><u>Team</u></h4>
                <p class="center">${data.player[x].strTeam}</p>
                <h4><u>Description</u></h4>
                <p class="description">${data.player[x].strDescriptionEN}</p>
                </div>
            </div> `;
          x++;
          $('.row').append(results);
        }
    });
});