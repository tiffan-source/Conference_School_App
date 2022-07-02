let next = document.querySelector("#next");
let content = document.querySelector("#content");
let prev = document.querySelector("#prev");

let info_gene = document.querySelector("#info_gene");
let info_publication = document.querySelector("#info_publication");
let info_activity = document.querySelector("#info_activity");
let info_appel = document.querySelector("#info_appel");

// let more_conf = document.querySelector("#more_conf");

let tabContentTitle = ["Conference Information", "List Publication", "List Activity", "List Appel"];
let tabContent = [info_gene, info_publication, info_activity, info_appel];
let cursor = 0;

next.addEventListener("click", (e)=>{
    // e.preventDefault();

    if (cursor + 1 <= 3)
        cursor++;

    setContent(cursor);
}, false);

prev.addEventListener("click", (e)=>{
    // e.preventDefault();

    if (cursor - 1 >= 0)
        cursor--;

    setContent(cursor);

}, false);

let setContent = (cursor_actu)=>{
    let i = 0;

    for(i = 0; i < 4; i++){
        // console.log(tabContent[i]);
        if(i == cursor_actu){
            tabContent[i].classList.remove("hidde");
            tabContent[i].classList.add("display");
        }else{
            if(tabContent[i].classList.contains("display")){
                tabContent[i].classList.remove("display");
                tabContent[i].classList.add("hidde");
            }
        }
    }

    content.innerHTML = tabContentTitle[cursor_actu];
};

setContent(cursor);