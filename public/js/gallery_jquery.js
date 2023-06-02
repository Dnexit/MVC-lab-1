$(document).ready( function() {
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

    let gallery = $(".gallery");
    let overlay = $(".overlay");
    let overlayPhoto = $(".overlay__photo");

    let targetFigure = null;

    let arrows = {
        left: $(".overlay__arrow--left"),
        right: $(".overlay__arrow--right"),  
    }

    overlay.on('click', outOfOverlayListener);
    gallery.on('click', imageClickListener)
    arrows.left.on('click', switchToPreviousImage);
    arrows.right.on('click', switchToNextImage);


    function outOfOverlayListener(e) {
        if (!e.target.closest('.overlay__photo') && !e.target.closest('.overlay__arrow')) {
            overlay.addClass('none');
        }
    }


    function switchToPreviousImage(e) {
        overlayPhoto.hide(500, () => {
            targetFigure = targetFigure.parentElement.previousElementSibling?.children[0] ?? 
            targetFigure.parentElement.parentElement.lastElementChild.children[0];
            overlayPhoto.attr("src", targetFigure.src);
            overlayPhoto.attr("alt", targetFigure.alt);
            overlayPhoto.attr("title", targetFigure.title);
            overlayPhoto.show(500);
        });
    }

    function switchToNextImage(e) {
        overlayPhoto.hide(500, () => {
            targetFigure = targetFigure.parentElement.nextElementSibling?.children[0] ?? 
            targetFigure.parentElement.parentElement.firstElementChild.children[0];
            overlayPhoto.attr("src", targetFigure.src);
            overlayPhoto.attr("alt", targetFigure.alt);
            overlayPhoto.attr("title", targetFigure.title);
            overlayPhoto.show(500);
        });
    }

    function imageClickListener(e) {
        if (e.target.closest('img')) {
            targetFigure = e.target;
            overlayPhoto.attr("src", targetFigure.src);
            overlay.removeClass('none');
        }
    }


    for (let i = 1; i <= 15; i++){
        let filename = `(${i}).jpg`;
        addPicture(filename, titles[filename], captions[filename]);
    }

    addPicture("(1).png", titles["(1).png"], captions["(1).png"]);

    function addPicture(filename, title, caption) {
        let figure = $(`<figure><img src="./../_img/gallery/${filename}" title="${title}"><figcaption>${caption}</figcaption></figure>`);
        gallery.append(figure);
    }
})
