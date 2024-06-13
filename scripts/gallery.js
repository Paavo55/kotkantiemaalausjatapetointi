$(document).ready(function(){
    //Kuvien sijainti tiedostoissa.
    const pathToImages = [
        "pics/brush1920x1280.jpg",
        "pics/dirtypainttools1920x1280.jpg",
        "pics/doublerollers1920x1280.jpg",
        "pics/paintedwall1920x1280.jpg",
    ];
    let imageIndex = 0;
    const galleryImage = $("#galleryImage");
    //Antaa galleryImage elementille arvon jonka perusteella se asettaa oikean kuvan sivulle.
    function showImage(index) {
        if (index >= 0 && index < pathToImages.length) {
            galleryImage.attr("src", pathToImages[index]);
            imageIndex = index;
        }
    }
    //Napit vaihtavat seuraavaan kuvaan vaihtamalla indexin arvoa + tai - 1 jolloin galleryImage elementissä vaihtuu kuva.
    $("#nextButton").click(function nextImage() {
        showImage(imageIndex + 1);
    });
    $("#backButton").click(function previousImage() {
        showImage(imageIndex - 1);
    });
    //defaulttaa indexin kuvaan 0 ja näyttää sen
    showImage(0); 
});