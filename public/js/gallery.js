let titles = {
    '(1).jpg': 'котик в маске',
    '(2).jpg': 'удивлённый кот',
    '(3).jpg': 'уставший котёнок',
    '(4).jpg': 'котик смотрит вниз',
    '(5).jpg': 'задумчивый котик',
    '(6).jpg': 'виноватый котёнок',
    '(7).jpg': 'злые котики',
    '(8).jpg': 'крутые коты',
    '(9).jpg': 'кенгуру',
    '(10).jpg': 'кролик',
    '(11).jpg': 'утёнок',
    '(12).jpg': 'слон',
    '(13).jpg': 'котик в смешной шляпе',
    '(14).jpg': 'котик с радугой',
    '(15).jpg': 'белые мишки',
    '(1).png': 'котик на зачёте'
}

let captions = {
    '(1).jpg': 'котик в маске',
    '(2).jpg': 'удивлённый кот',
    '(3).jpg': 'уставший котёнок',
    '(4).jpg': 'котик смотрит вниз',
    '(5).jpg': 'задумчивый котик',
    '(6).jpg': 'виноватый котёнок',
    '(7).jpg': 'злые котики',
    '(8).jpg': 'крутые коты',
    '(9).jpg': 'кенгуру',
    '(10).jpg': 'кролик',
    '(11).jpg': 'утёнок',
    '(12).jpg': 'слон',
    '(13).jpg': 'котик в смешной шляпе',
    '(14).jpg': 'котик с радугой',
    '(15).jpg': 'белые мишки',
    '(1).png': 'котик на зачёте'
}



let gallery = document.querySelector(".gallery");
let overlay = document.querySelector(".overlay");
let overlayPhoto = document.querySelector(".overlay__photo");

let targetFigure = null;

let arrows = {
    left: document.querySelector(".overlay__arrow--left"),
    right: document.querySelector(".overlay__arrow--right"),  
}

overlay.addEventListener('click', outOfOverlayListener);
gallery.addEventListener('click', imageClickListener)
arrows.left.addEventListener('click', switchToPreviousImage);
arrows.right.addEventListener('click', switchToNextImage);


function outOfOverlayListener(e) {
    if (!e.target.closest('.overlay__photo') && !e.target.closest('.overlay__arrow')) {
        overlay.classList.add('none');
    }
}


function switchToPreviousImage(e) {
    targetFigure = targetFigure.parentElement.previousElementSibling?.children[0] ?? 
    targetFigure.parentElement.parentElement.lastElementChild.children[0];
    overlayPhoto.setAttribute("src", targetFigure.src);
    overlayPhoto.setAttribute("alt", targetFigure.alt);
    overlayPhoto.setAttribute("title", targetFigure.title);
}

function switchToNextImage(e) {
    targetFigure = targetFigure.parentElement.nextElementSibling?.children[0] ?? 
    targetFigure.parentElement.parentElement.firstElementChild.children[0];
    overlayPhoto.setAttribute("src", targetFigure.src);
    overlayPhoto.setAttribute("alt", targetFigure.alt);
    overlayPhoto.setAttribute("title", targetFigure.title);
}

function imageClickListener(e) {
    if (e.target.closest('img')) {
        targetFigure = e.target;
        overlayPhoto.setAttribute("src", targetFigure.src);
        overlay.classList.remove('none');
    }
}

/*
for (let i = 1; i <= 15; i++){
    let filename = `(${i}).jpg`;
    addPicture(filename, titles[filename], captions[filename]);
}

addPicture("(1).png", titles["(1).png"], captions["(1).png"]);

function addPicture(filename, title, caption) {
    let figure = document.createElement("figure");
    let img = document.createElement("img");
    let figcaption = document.createElement("figcaption");
    let figcaption_text = document.createTextNode(caption);
    img.src = `./../public/img/gallery/${filename}`;
    img.title = title;
    gallery.append(figure);
    figure.append(img, figcaption);
    figcaption.append(figcaption_text);
}
*/