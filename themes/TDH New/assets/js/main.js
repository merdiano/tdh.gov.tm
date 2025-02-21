
window.onscroll = function () {
    scrollFunc();
};
// let intro = document.getElementById("intro");
// let nav_fixed = document.getElementById("nav");
// let fix = nav_fixed.nextElementSibling;
// function scrollFunc() {
//     if (window.pageYOffset >= fix.offsetTop) {
//         nav_fixed.classList.add("fix");
//     } else {
//         nav_fixed.classList.remove("fix");
//     }
// }


let intro = document.getElementById("intro");
let nav_fixed = document.getElementById("nav");
// let header = document.getElementsByClassName('.header');
let fix = intro.offsetTop;
function scrollFunc() {
    if (window.pageYOffset >= fix) {
        nav_fixed.classList.add("fix");
    } else {
        nav_fixed.classList.remove("fix");
    }
}



// custom select start
// let x, i, j, l, ll, selElmnt, a, b, c;
// x = document.getElementsByClassName("custom-select");
// l = x.length;
// for (i = 0; i < l; i++) {
//     selElmnt = x[i].getElementsByTagName("select")[0];
//     ll = selElmnt.length;
//     a = document.createElement("DIV");
//     a.setAttribute("class", "select-selected");
//     a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
//     x[i].appendChild(a);
//     b = document.createElement("DIV");
//     b.setAttribute("class", "select-items select-hide");
//     for (j = 1; j < ll; j++) {
//         c = document.createElement("DIV");
//         c.innerHTML = selElmnt.options[j].innerHTML;
//         c.addEventListener("click", function (e) {
//             let y, i, k, s, h, sl, yl;
//             s = this.parentNode.parentNode.getElementsByTagName("select")[0];
//             sl = s.length;
//             h = this.parentNode.previousSibling;
//             for (i = 0; i < sl; i++) {
//                 if (s.options[i].innerHTML == this.innerHTML) {
//                     s.selectedIndex = i;
//                     h.innerHTML = this.innerHTML;
//                     y = this.parentNode.getElementsByClassName("same-as-selected");
//                     yl = y.length;
//                     for (k = 0; k < yl; k++) {
//                         y[k].removeAttribute("class");
//                     }
//                     this.setAttribute("class", "same-as-selected");
//                     break;
//                 }
//             }
//             h.click();
//         });
//         b.appendChild(c);
//     }
//     x[i].appendChild(b);
//     a.addEventListener("click", function (e) {
//         e.stopPropagation();
//         closeAllSelect(this);
//         this.nextSibling.classList.toggle("select-hide");
//         this.classList.toggle("select-arrow-active");
//     });
// }
// function closeAllSelect(elmnt) {
//     let x,
//         y,
//         i,
//         xl,
//         yl,
//         arrNo = [];
//     x = document.getElementsByClassName("select-items");
//     y = document.getElementsByClassName("select-selected");
//     xl = x.length;
//     yl = y.length;
//     for (i = 0; i < yl; i++) {
//         if (elmnt == y[i]) {
//             arrNo.push(i);
//         } else {
//             y[i].classList.remove("select-arrow-active");
//         }
//     }
//     for (i = 0; i < xl; i++) {
//         if (arrNo.indexOf(i)) {
//             x[i].classList.add("select-hide");
//         }
//     }
// }
// document.addEventListener("click", closeAllSelect);
// custom select end

// Header

const selectElement = function (element) {
    return document.querySelector(element);
};

let menu = selectElement('.menu');
let hide_menu = selectElement('.hide_menu');
let link_media = selectElement('.link_media');
let hide_media = selectElement('.hide_media');

let currentLang = selectElement('.current_lang');
let languegs = selectElement('.languages');
let pyramid = selectElement('.pyramid');

let navs = selectElement('.navs_inner');
let burger = selectElement('.hamburg');

let langMobile = selectElement('.langMobile');
let languagesMobile = selectElement('.languagesMobile');

// console.log(burger);

window.onclick = function (e) {
    if (selectElement('.hide_media').classList.contains('show') && !e.target.closest('.link_media')) {
        selectElement('.hide_media').classList.remove('show');
        // selectElement('.link_media').classList.remove('active');
    }

    if (selectElement('.link').classList.contains('active')) {
        selectElement('.link').classList.remove('active')
    }

    if (selectElement('.hide_menu').classList.contains('show') && !e.target.closest('.menu')) {
        selectElement('.hide_menu').classList.remove('show');
        // selectElement('.menu').classList.remove('active');
    }
    if (selectElement('.navs_inner').classList.contains('open') && !e.target.closest('.navs') && !e.target.closest('.menu') && !e.target.closest('.hamburg') && !e.target.closest('.langMobile') && !e.target.closest('.search_mobile')) {
        selectElement('.navs_inner').classList.remove('open');
    }

    if (selectElement('.languages').classList.contains('dropLang') && !e.target.closest('.select_language')) {
        selectElement('.languages').classList.remove('dropLang');
    }

    if (selectElement('.languagesMobile').classList.contains('openMobile') && !e.target.closest('.langMobile')) {
        selectElement('.languagesMobile').classList.remove('openMobile');
    }

    if (selectElement('.player_bg').classList.contains('videoShow') && !e.target.closest('.player')) {
        selectElement('.player_bg').classList.remove('videoShow');
        selectElement('.player__video').pause();
        selectElement('.player__video').currentTime = 0;
    }


}

function sleep(time) {
    return new Promise((resolve) => setTimeout(resolve, time));
}

burger.addEventListener('click', function () {
    sleep(2).then(() => {
        navs.classList.toggle('open');
    });
});

currentLang.addEventListener('click', function () {
    sleep(2).then(() => {
        languegs.classList.toggle('dropLang');
    });
    console.log("click");
});

menu.addEventListener('click', function () {
    sleep(2).then(() => {
        hide_menu.classList.toggle('show');
        // menu.classList.toggle('active');
    });
});

selectElement('.nav_link').addEventListener('click', function () {
    sleep(2).then(() => {
        selectElement('.link').classList.toggle('active');
    });
});

link_media.addEventListener('click', function () {

    sleep(2).then(() => {
        // hide_media.classList.toggle('show');

        if (hide_media.classList.contains('show')) {
            hide_media.classList.remove('show');
        }
        else {
            hide_media.classList.add('show');
        }

        // link_media.classList.toggle('active');
    });

});

langMobile.addEventListener('click', function () {
    sleep(2).then(() => {
        languagesMobile.classList.toggle('openMobile');
    });
});

document.querySelectorAll('.video_view').forEach((e) => {
    e.addEventListener('click', function () {
        sleep(2).then(() => {
            selectElement('.player_bg').classList.toggle('videoShow');
            var vd = selectElement('.player__video');
            while (vd.lastElementChild) {
                vd.removeChild(vd.lastElementChild);
            }

            var source = document.createElement('source');
            console.log(e)
            console.log(e.dataset.src)

            source.setAttribute('src', e.dataset.src);

            vd.appendChild(source);
            vd.load();
            vd.play();
        });
    })
});
// }   

document.querySelectorAll('.player__video').forEach((e) => {
    e.addEventListener('ended', function () {
        sleep(0).then(() => {
            selectElement('.player_bg').classList.remove('videoShow');
        });
        console.log("pp");
    })
});



// End Header

// Video Player 

// select elements
const video = document.querySelector('.viewer');
const toggle = document.querySelector('.toggle');
const volume = document.querySelector('.volume');
const skipButtons = document.querySelectorAll('[data-skip]');
const ranges = document.querySelectorAll('.player__slider');
const progress = document.querySelector('.progress');
const progressBar = document.querySelector('.progress__filled');
const fullscreen = document.querySelector('.fullscreen');


// defining functions
function togglePlay() {
    // toggle for video play and pause
    const playOrPause = video.paused ? 'play' : 'pause';
    video[playOrPause]();
    // toggle for icon change when play or pause
    playOrPause === 'play' ? toggle.textContent = '❚ ❚' : toggle.textContent = '►';
}

function skip() {
    // add or substract the skip time to current time of video
    video.currentTime += parseFloat(this.dataset.skip);
}

function handleRangeChange() {
    // Change the video's range value
    video[this.name] = this.value;
}

function handleProgress() {
    // convert video's current time into percentage
    const percent = (video.currentTime / video.duration) * 100;
    // append it to the flexBasis property (CSS)
    progressBar.style.flexBasis = `${percent}%`;
}

function scrub(e) {
    const scrubTime = (e.offsetX / progress.offsetWidth) * video.duration;
    video.currentTime = scrubTime;
}

function handleFullScreen() {
    video.requestFullscreen();
}

// Play or Pause events(On video click)
video.addEventListener('click', togglePlay);
// 					   (On button click)
toggle.addEventListener('click', togglePlay);

// skipping video back and forth
skipButtons.forEach(button => button.addEventListener('click', skip));

// volume or fast forward events
ranges.forEach(range => range.addEventListener('change', handleRangeChange));

// Change progress wrt time
video.addEventListener('timeupdate', handleProgress);

// event on clicking progress bar
let mouseDown = false;
progress.addEventListener('click', scrub);
progress.addEventListener('mousemove', (e) => mouseDown && scrub(e));
progress.addEventListener('mousedown', () => mouseDown = true);
progress.addEventListener('mouseup', () => mouseDown = false);

// add full screen event
fullscreen.addEventListener('click', handleFullScreen);





