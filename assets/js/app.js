let appElem = document.getElementById('app-root');

if(appElem) {
    startApp(appElem);
}

function startApp(parent){
    let subElem = document.createElement('span');
    subElem.style.backgroundColor = 'blue';
    subElem.style.color = 'white';
    subElem.style.width = '80%';
    subElem.style.height = '20vh';
    subElem.style.display = 'inline-block';
    subElem.innerHTML = 'Hello world';
    parent.appendChild(subElem);
}

document.getElementById('theme-button').addEventListener('click', getTheme);

function getTheme(save) {
    let root = document.getElementById("theme-path").value;
    let theme = window.localStorage.getItem('theme');
    if(save) {
        theme = (theme !== 'dark') ? 'dark' : 'ligth';
    }
    let style = document.querySelector('link');
    style.href =  root + "/assets/css/" + theme + ".css";
    window.localStorage.setItem('theme', theme);
}
if(["dark", "light"].includes(window.localStorage.getItem('theme'))) {
    getTheme(false);
}
getTheme();