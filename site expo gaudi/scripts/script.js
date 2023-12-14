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
        // '<div class="image"><img src=""></div>',
        '<div class="image"><img src="./images/01.png"></div>',
        '<div class="image"><img src="./images/02.png"></div>',
        '<div class="image"><img src="./images/03.png"></div>',
        '<div class="image"><img src="./images/04.png"></div>',
        '<div class="image"><img src="./images/05.png"></div>',
        '<div class="image"><img src="./images/06.png"></div>',
        // '<div class="image"><img src=""></div>',
        '<div class="image"><img src="./images/07.png"></div>',
        '<div class="image"><img src="./images/08.png"></div>',
        '<div class="image"><img src="./images/09.png"></div>'
    ];

    let groupeImages_2 = [
        // '<div class="image"><img src=""></div>',
        '<div class="image"><img src="./images/10.png"></div>',
        '<div class="image"><img src="./images/11.png"></div>',
        '<div class="image"><img src="./images/12.png"></div>',
        '<div class="image"><img src="./images/13.png"></div>',
        '<div class="image"><img src="./images/14.png"></div>',
        '<div class="image"><img src="./images/15.png"></div>',
        // '<div class="image extra"><img src=""></div>',
        // '<div class="image extra"><img src=""></div>',
        '<div class="image"><img src="./images/16.png"></div>',
        '<div class="image"><img src="./images/17.png"></div>',
        '<div class="image"><img src="./images/18.png"></div>'
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

    images.sort(() => {return 0.5 - Math.random()});
    console.log("Sorted images", images);

    let div_string = "";
    for (let image in images)
    {
        div_string += images[image];
    }
    console.log(div_string);
    document.getElementById('oeuvres').innerHTML = div_string;
}

window.addEventListener("load", inclureImages);