let acceptPopup = () => {
    let acceptSessionStorage = sessionStorage.getItem("acceptSessionStorage");

    if (acceptSessionStorage == null)
    {
        if (confirm("Acceptez-vous que cette page web garde la trace du dernier group des images ?"))
        {
            sessionStorage.setItem("acceptSessionStorage", "YES");
        }
        else
        {
            sessionStorage.setItem("acceptSessionStorage", "NO")
        }
    }
    console.log("acceptSessionStorage : " + acceptSessionStorage);
}

let inclureImages = () => {
    let groupeImages_1 = [
        '<div class="image"><img src=""></div>',
        '<div class="image"><img src="./images/IMG_20221017_0001.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0002.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0003.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0004.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0005.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0006.jpg"></div>',
        '<div class="image"><img src=""></div>',
        '<div class="image"><img src="./images/IMG_20221017_0007.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0008.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0009.jpg"></div>'
    ];

    let groupeImages_2 = [
        '<div class="image"><img src=""></div>',
        '<div class="image"><img src="./images/IMG_20221017_0010.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0011.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0012.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0013.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0014.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0016.jpg"></div>',
        '<div class="image"><img src=""></div>',
        '<div class="image"><img src=""></div>',
        '<div class="image"><img src="./images/IMG_20221017_0015.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0017.jpg"></div>',
        '<div class="image"><img src="./images/IMG_20221017_0018.jpg"></div>'
    ];

    let images = [];

    let imagesAffichees = sessionStorage.getItem("imagesAffichees");

    if (imagesAffichees == null || imagesAffichees == "groupeImages_2")
    {
        images = groupeImages_1;
        sessionStorage.setItem("imagesAffichees", "groupeImages_1");
        console.log(images, "groupeImages_1");
    }
    
    else if (imagesAffichees == "groupeImages_1")
    {
        images = groupeImages_2;
        sessionStorage.setItem("imagesAffichees", "groupeImages_2");
        console.log(images, "groupeImages_2");
    }
    else 
    {
        console.log("Error");
        sessionStorage.setItem("imagesAffichees", "groupeImages_1");
        images = groupeImages_2;
    }
    console.log("Images Affichees : ", imagesAffichees);


    let div_string = "";
    for (image in images)
    {
        div_string += images[image];
    }
    console.log(div_string);
    document.getElementById('oeuvres').innerHTML = div_string;
}

window.addEventListener("load", inclureImages);