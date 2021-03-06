console.log('run');


if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {

    //Remove desktop video from DOM

    if (document.getElementById('video-element')) {

        var dtVideo = document.getElementById('video-element'),
            dtVideoControls = document.getElementById('controls');

        dtVideo.remove();
        dtVideoControls.remove();

    }


    function playPause() {

        var myVideo = document.getElementsByTagName('video')[0];

        myVideo.webkitEnterFullscreen()

        if (myVideo.paused) {
            myVideo.play();
        } else {
            myVideo.pause();
        }

    }


} else {

    if (document.getElementById('video-overlay')) {


        var mbVideoWrapper = document.getElementById('video-overlay'),
            mobilePlayBtn = document.getElementById('mobile-play-btn'),
            mobileVideo = document.getElementById('mobile-video');



        mbVideoWrapper.remove(), mobilePlayBtn.remove(), mobileVideo.remove();

    }


    if (document.getElementById('video-element')) {

        document.getElementById('slideshow').classList.add('fade--v');

        // Player Selectors
        var player = document.getElementById('video-element'),
            btnPlayPause = document.getElementById('btnPlayPause'),
            btnMute = document.getElementById('btnMute'),
            progressBar = document.getElementById('progress-bar'),
            volumeBar = document.getElementById('volume-bar');

        player.onloadstart = function() {
            player.classList.add('loader--vid');
            document.querySelector('.navbar-brand').classList.add('loader--logo');
        };

        player.oncanplay = function() {
            player.classList.remove('loader--vid');
            document.querySelector('.navbar-brand').classList.remove('loader--logo');
        };

        player.addEventListener('timeupdate', updateProgressBar, false);

        player.addEventListener('play', function() {

            changeButtonType(btnPlayPause, 'pause');
            document.getElementById('btnStop').classList.remove('play--dis');

        }, false);

        player.addEventListener('pause', function() {

        }, false);

        player.addEventListener('ended', function() {
            this.pause();
        }, false);

        function seek(e) {
            var percent = e.offsetX / this.offsetWidth;
            player.currentTime = percent * player.duration;
            e.target.value = Math.floor(percent / 100);
            e.target.innerHTML = progressBar.value + '% played';
        }

        function playPauseVideo() {
            if (player.paused || player.ended) {

                changeButtonType(btnPlayPause, 'pause');
                player.play();
                document.getElementById('btnStop').classList.add('play--dis');
            } else {

                player.pause();
                document.getElementById('btnStop').classList.add('play--dis');
            }
        }

        // Stop and set to start
        function stopVideo() {

            document.getElementById('btnStop').classList.add('play--dis');
            document.getElementById('btnMute').classList.add('play--dis');
            document.getElementById('video-element').classList.add('fade--v');

            player.pause();

            if (player.currentTime) player.currentTime = 0;
            document.getElementById('slideshow').classList.remove('fade--v');
        }

        // Mute and unmute status
        function muteVolume() {
            if (player.muted) {

                player.muted = false;
                document.getElementById('btnMute').classList.remove('muted');
            } else {
                player.muted = true;
                document.getElementById('btnMute').classList.add('muted');

            }
        }

        // Replay function
        function replayVideo() {

            document.getElementById('btnStop').classList.remove('play--dis');
            document.getElementById('btnMute').classList.remove('play--dis');
            document.getElementById('video-element').classList.remove('fade--v');
            document.getElementById('slideshow').classList.remove('fade--v');

            resetPlayer();
            player.play();
        }

        // Update the progress bar & render fade in fullscreen
        function updateProgressBar() {
            var percentage = Math.floor((100 / player.duration) * player.currentTime);
            progressBar.value = percentage;
            progressBar.innerHTML = percentage + '% played';

            if (percentage === 80) {
                //console.log(percentage);
                document.getElementById('video-element').classList.add('fade--v');
                document.getElementById('slideshow').classList.remove('fade--v');

            }

        }

        // Updates a button's title, innerHTML and CSS class
        function changeButtonType(btn, value) {
            btn.title = value;
            btn.innerHTML = value;
            btn.className = value;
        }

        function resetPlayer() {
            progressBar.value = 0;

            player.currentTime = 0;

        }


        isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)

        if (isSafari) {

            player.muted = true;
            document.getElementById('btnMute').classList.add('muted');

        } else {

            player.muted = false;
            document.getElementById('btnMute').classList.remove('muted');

        }

        var hide = localStorage.getItem('hide');

        document.getElementById('btnMute').classList.remove('play--dis');

        if (hide === 'true') {

            stopVideo();
            document.getElementById('btnMute').classList.add('play--dis');


        }


        localStorage.setItem('hide', 'true');

    }

}

function runJs() {


    if (document.getElementById('organize-brands')) {


        var brandLink = document.querySelectorAll('.brand__element'),
            result;

            Array.from(document.querySelectorAll('.client')).forEach(function(e) {
                e.removeAttribute('srcset'),
                e.removeAttribute('width'),
                e.removeAttribute('height'),
                e.removeAttribute('sizes');
                var brandCat = e.className;
                    e.parentNode.className = brandCat + ' client-control';

                    console.log(document.querySelectorAll('.client-control').length +2);

                 //  document.querySelectorAll('.client-control').parentNode.className;

                    // var aTag = e;

                    // aTag.parentNode.nodeName = brandCat;

                  //  brandCat.parentNode.className = brandCat;



                    //aTag.parentNode.className = brandCat;
              e.className = '';
            });


 Array.from(document.querySelectorAll('.client-control')).forEach(function(c) {

    var brandCatNew = c.className;
    c.parentNode.className = brandCatNew;
    c.className = '';

 });



           document.querySelector('.client').parentNode.classList.add('row');

            //   var imageName = e.className;
            //   console.log(imageName);

            console.log(document.querySelectorAll('.brand-cat ul').length);

        for (var i = 0; i < brandLink.length; i++) {



            result = brandLink[i];
            result.addEventListener('click', function() {

                var clientSelector = this.innerHTML,
                    clientSelect = clientSelector.toLowerCase();





                Array.from(document.querySelectorAll('.client')).forEach(function(e) {



                    if (e) {
                        e.style.display = 'none';
                    }

                });


                Array.from(document.querySelectorAll(".client." + clientSelect)).forEach(function(j) {

                    if (j) {
                        j.style.display = 'block';
                    }

                });

            });
        }

        //Organize-brands Component

        var brandEl = document.querySelectorAll('.brand__element'),
            onLoadAll = document.querySelector('.user--all');

        onLoadAll.classList.add('active--brand');

        Array.prototype.forEach.call(brandEl, function(brand) {
            brand.onclick = addActive;
        });

        function addActive(brand) {
            brandEl.forEach(function(brandR) {
                brandR.classList.remove('active--brand');
            });
            brand = this;
            if (brand.classList.contains('active--brand')) {
                brand.classList.remove('active--brand');
            } else {
                brand.classList.add('active--brand');
            }
        }
    }


    //Career Component

    var careerComponent = document.querySelectorAll(".career-component");

    Array.prototype.forEach.call(document.querySelectorAll(".career-role"), function(careerRole) {
        careerRole.onclick = careerActive;
    });

    function careerActive(careerRole) {
        careerComponent.forEach(function(careerR) {
            careerR.classList.remove("career--show");
        });
        careerRole = this;
        if (careerRole.classList.contains("career--show")) {
            careerRole.classList.remove("career--show");
        } else {
            careerRole.classList.add("career--show");
        }
    }


    if (document.getElementById('slideshow')) {

        var imgCount = document.querySelectorAll('#slideshow-imgs img').length,
            slideContainer = document.getElementById('slideshow');

        console.log(imgCount);

        for (var i = 0; i < imgCount; i++) {

            slideContainer.innerHTML += '<div class="slide"></div>';

            document.querySelectorAll('#slideshow-imgs img')[i].classList.add('content--main');

            document.getElementsByClassName('slide')[i].style.backgroundImage = 'url(' + document.getElementsByClassName('content--main')[i].getAttribute('src') + ')';

        }

        var slideContainer = document.getElementById('slideshow'),
            slidesM = document.getElementsByClassName('slide'),
            count = slidesM.length,
            current = Math.floor((Math.random() * count));
        slidesM[current].classList.add('slide-show');

        var slideTimer = setInterval(function() {
            slidesM[current].classList.remove('slide-show');
            if (current >= count - 1) {
                current = 0
            } else {
                current++
            }
            slidesM[current].classList.add('slide-show');
        }, 6000);

    }


    if (document.getElementById('slideshow-width-nav')) {

        var imgCount = document.querySelectorAll('#slideshow-imgs img').length,
            slideContainer = document.getElementById('slideshow-width-nav');

        console.log(imgCount);

        for (var i = 0; i < imgCount; i++) {

            slideContainer.innerHTML += '<div class="slide"></div>';


            document.querySelectorAll('#slideshow-imgs img')[i].classList.add('content--main');


            document.getElementsByClassName('slide')[i].style.backgroundImage = 'url(' + document.getElementsByClassName('content--main')[i].getAttribute('src') + ')';

        }

        var slideContainer = document.getElementById('slideshow-width-nav'),
            slidesM = document.getElementsByClassName('slide'),
            count = slidesM.length,
            current = 1;

        console.log(current);

        var prev = document.getElementById('p--btn'),
            next = document.getElementById('n--btn');

        slidesM[current].classList.add('slide-show');

        function prevSlide() {

            slidesM[current].classList.remove('slide-show');
                if (current >= count - 1) {

                    current = 0

                } else {

                    current--

                    if(current == 0) {

                        current++

                    }
                }
            slidesM[current].classList.add('slide-show');


        }

        function nextSlide() {

            slidesM[current].classList.remove('slide-show');
                if (current >= count - 1) {
                    current = 0
                } else {
                    current++
                }
            slidesM[current].classList.add('slide-show');

        }

        var slideTimer = setInterval(function() {
            slidesM[current].classList.remove('slide-show');
            if (current >= count - 1) {
                current = 0
            } else {
                current++
            }
            slidesM[current].classList.add('slide-show');
        }, 6000);

        prev.onclick = function() {
            console.log('Prev');
            prevSlide();
            clearInterval(slideTimer);
        };

        next.onclick = function() {

            console.log('Next');

            nextSlide();
            clearInterval(slideTimer);

        };

    }



}

runJs();
