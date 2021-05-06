"use strict"

window.onload = function(){
    const pallarax = document.querySelector(".parallax");

    if (pallarax){

        const cointainer = document.querySelector(".pallarax__conteiner");
        const cloud = document.querySelector(".image__parallax_cloud");
        const mountains = document.querySelector(".image__parallax_mountains");
        const human = document.querySelector(".image__parallax_human");


        const forCloud = 40;
        const forMoutains = 20;
        const forHuman = 10;

        const spped = 0.05;

        let positionX = 0, positionY = 0;
        let corditatXprocent = 0, corditatYprocent = 0;

        function setMousepallaraxStyle(){
            const distX = corditatXprocent - positionX;
            const distY = corditatYprocent - positionY;

            positionX = positionX + (distX * spped);
            positionY = positionY + (distY * spped);
       
       
            cloud.style.cssText = "tra"
        }
    }
}