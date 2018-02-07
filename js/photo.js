function modal(element) {
    //Get the modal
    var myModal = document.getElementById('myModal');

    //insert the image into the modal
    var modalImg = document.getElementById('imgModal');
    var captionText = document.getElementById('caption');
    myModal.style.display = "block";
    modalImg.src = element.src;
    captionText.innerHTML = element.alt;
}

//Get the <span> element that closes the modal
var span = document.getElementsByClassName('close')[0];
var myModal = document.getElementById('myModal');

//When the (x) is clicked the modal should close
span.onclick = function () {
    myModal.style.display = "none";
};
