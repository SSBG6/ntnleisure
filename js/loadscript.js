window.addEventListener("load",()=>{
    const loader = document.querySelector(".loader");

    loader.classList.add("loader-hidden");
    loader.addEventListener("transitionend",()=>{
        document.body.removeChild("loader");
    })
})
//this is for the reloadig wheel 