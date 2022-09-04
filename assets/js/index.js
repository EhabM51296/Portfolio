let hamburger = document.getElementsByClassName("hamburger")[0];
let nav = document.getElementById("navigatorLinks");
hamburger.addEventListener("click", function(){
    if(nav.style.left === "0px")
    nav.style.left = "-250px";
    else
    nav.style.left = "0px";
});
window.onload = (event) => {
    setTimeout(function(){ 
        document.getElementById("loadingScreen").style.display="none";
        document.getElementById("homeLeftSide").classList.add("heightAnim")
        
    }, 1000);
  };

//   animation
const scrollElements = document.querySelectorAll(".invisible");
const headerElements = document.querySelectorAll(".specialText");
window.onscroll = function() {
    const handleScrollAnimation = () => {
    scrollElements.forEach((elem) => {
            const elementTop = elem.getBoundingClientRect().top;
                if( elementTop <= (window.innerHeight / 1.5 ))
                {
                    elem.classList.add("fadeIn");
                    elem.classList.remove("invisible");
                }
}
)
}
window.addEventListener("scroll", () => { 
    handleScrollAnimation();
    });
    
};
headerElements.forEach((elem) => {
    elem.addEventListener("click", () => { 
        const scrllTo = document.getElementById(elem.id.split("_")[1]);
        scrllTo.scrollIntoView({ behavior: 'smooth', block: 'start'});
        // window.scrollTo({
        //     top: scrllTo.getBoundingClientRect().y,
        //     behavior: "smooth"
        // });
        });
   
}
)
document.getElementById("hireMe").addEventListener("click", () => {
    const scrllTo = document.getElementById("Contact");
    scrllTo.scrollIntoView({ behavior: 'smooth', block: 'start'});
})
