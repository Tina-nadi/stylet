var mainphoto = document.getElementById("main-photo");
var smallPhotos = document.querySelector(".small-photo");


smallPhotos.addEventListener("click", function(event) {
    if (event.target.tagname == "IMG") {
    mainPhoto.src = event.target.src;
    }

    var itemA= document.getElementById('txt-q-itemA').value, 
    itemB=document.getElementById('txt-q-itemB').value,
    itemC=document.getElementById('txt-q-itemC').value,
    shipingState=state.value,
    shipingMethoddocument=document.querySelector('[name-method]:checked').value;

    console.log(itemA,itemB,itemC,shipingState,shipingMethoddocument);
}
);
