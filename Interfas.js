/*MENU LATERAL */

const contenedor = document.querySelector('#contenedor')

document.querySelector("#boton-menu").addEventListener('click', () => {
    contenedor.classList.toggle('active');
});

const comprobarAncho = () => {
    if(window.innerWidth <= 768){
        contenedor.classList.remove('active');
    } else {
        contenedor.classList.add('active');
    }
}

comprobarAncho();

window.addEventListener('resize', () => {
    comprobarAncho();
})

/*LISTA DE REPRODUCCION */

const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {   
        'id': 'a1',
        'backgroundImage': "images/BITraderPlus+ portada.jpg",
        'posterUrl': "images/BITraderPlus+ portada.jpg",
        'title': '¿Indices?',
        'name': 'video 1.mp4',
        'duration': '25:03',
    },
    {
        
        'id': 'a2',
        'backgroundImage': "images/portada2.jpg",
        'posterUrl': "images/portada2.jpg",
        'title': '¿que es fibonacci?',
        'name': 'video 2.mp4',
        'duration': '18:34',
    },
    {
       
        'id': 'a3',
        'backgroundImage': "images/BITraderPlus+ portada.jpg",
        'posterUrl': "images/BITraderPlus+ portada.jpg",
        'title': '¿tradingview?',
        'name': 'video 3.mp4',
        'duration': '17:44',
    },
    {
        
        'id': 'a5',
        'backgroundImage': "images/portada2.jpg",
        'posterUrl': "images/portada2.jpg",
        'title': 'video 5',
        'name': 'video 5.mp4',
        'duration': '4:08',
    },
    {   
        'id': 'a1',
        'backgroundImage': "images/BITraderPlus+ portada.jpg",
        'posterUrl': "images/BITraderPlus+ portada.jpg",
        'title': 'video 1',
        'name': 'video 1.mp4',
        'duration': '25:03',
    },
    {
        
        'id': 'a2',
        'backgroundImage': "images/portada2.jpg",
        'posterUrl': "images/portada2.jpg",
        'title': 'video 2',
        'name': 'video 2.mp4',
        'duration': '18:34',
    },
    {
       
        'id': 'a3',
        'backgroundImage': "images/BITraderPlus+ portada.jpg",
        'posterUrl': "images/BITraderPlus+ portada.jpg",
        'title': 'video 3',
        'name': 'video 3.mp4',
        'duration': '17:44',
    },
    {
        
        'id': 'a5',
        'backgroundImage': "images/portada2.jpg",
        'posterUrl': "images/portada2.jpg",
        'title': 'video 5',
        'name': 'video 5.mp4',
        'duration': '4:08',
    },

];

data.forEach((video, i) => {
    let video_element = `
                <div class="video" data-id="${video.id}">
                    <img src="images/play.svg" alt="">
                   <img src="${data[i].posterUrl}"  alt="${data[i].title} Videos Recomendados"
class="video-playlist">
                    <a>${i + 1 > 9 ? i + 1 : '0' + (i + 1)}. </a>
                    <h3 class="title">${video.title}</h3>
                    <p class="time">${video.duration}</p>
                </div>
    `;
    video_playlist.innerHTML += video_element;
})

let videos = document.querySelectorAll('.video');
videos[0].classList.add('active');
videos[0].querySelector('img').src = 'images/pause.svg';

videos.forEach(selected_video => {
    selected_video.onclick = () => {

        for (all_videos of videos) {
            all_videos.classList.remove('active');
            all_videos.querySelector('img').src = 'images/play.svg';

        }

        selected_video.classList.add('active');
        selected_video.querySelector('img').src = 'images/pause.svg';

        let match_video = data.find(video => video.id == selected_video.dataset.id);
        main_video.src = 'videos/' + match_video.name;
        main_video_title.innerHTML = match_video.title;
    }
});

/*REPRODUCTOR */

/*llamados */
const video = document.querySelector("video");
const playButton = document.querySelector(".play");
const playButtonIcon = playButton.querySelector("i");
const stopButton = document.querySelector(".stop");
const progressBar = document.querySelector(".progress")
const timestamp = document.querySelector(".timestamp")

/*lista de eventos */
video.addEventListener("click", playPauseVideo);
progressBar.addEventListener("change", setVideoProgress)
playButton.addEventListener("click", playPauseVideo);
stopButton.addEventListener("click", stopVideo);
video.addEventListener("timeupdate", updateVideoProgress)

/*funciones */
function playPauseVideo() {

    video[video.paused ? "play" : "pause"]()
    playButtonToggleIcon()
}

function playButtonToggleIcon() {
    if (video.paused) {
        playButtonIcon.classList.remove("fa-pause")
        playButtonIcon.classList.add("fa-play")
    } else {
        playButtonIcon.classList.remove("fa-play")
        playButtonIcon.classList.add("fa-pause")
    }
}

function stopVideo() {
    video.pause()
    video.currentTime = 0
    playButtonToggleIcon()
    progressBar.value = 0
}

 
function setVideoProgress() {
    video.currentTime = Number((progressBar.value * video.duration) / 100)
}

function updateVideoProgress() {
    progressBar.value = Number((video.currentTime / video.duration) * 100)
    let minutes = Math.floor(video.currentTime / 60)    
    let seconds = Math.floor(video.currentTime % 60)
    if (minutes < 10) {
        minutes = "0" + minutes
    }
    if (seconds < 10) {
        seconds = "0" + seconds
    }
    timestamp.textContent = `${minutes}:${seconds}`
}





