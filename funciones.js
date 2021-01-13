const liOne = document.getElementsByTagName("li")["0"];
const liTwo = document.getElementsByTagName("li")["1"];
const liThee = document.getElementsByTagName("li")["2"];
// const buttonDelete = document.getElementsByClassName("btn-delete");

function onClick(e){

    console.log("click");
    e.preventDefault();
    if (typeof e.target.children['0'] !== "undefined") {
        const link = e.target.children['0'].href;
        
        return window.open(link,"_self");
    }
    const link = e.target.href;

    return window.open(link,"_self");
}

if (typeof liOne !== "undefined" && typeof liTwo !== "undefined" && typeof liThee !== "undefined") {
    liOne.addEventListener("click", onClick);
    liTwo.addEventListener("click", onClick);
    liThee.addEventListener("click", onClick);
    // buttonDelete.addEventListener("click",onClick);
}