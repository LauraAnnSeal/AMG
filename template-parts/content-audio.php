<div class="audio-box">
    <div class="row px-4 py-3">
        <div class="col-12 text-center my-2">
            <h2>Featured content</h2>
            <span id="audio-creator">
                <?php
                $featured = get_field('featured_content');
                echo esc_attr( $featured['featured_content_name'] ); ?></span>
        </div>
        <div class="col-12 mt-3"></div>
        <div id="play-icon" class="d-flex col-2 text-center"><i class="fa-solid fa-play"></i></i></div>
        <div id="pause-icon" class="d-none col-2 text-center"><i class="fa-solid fa-pause"></i></i></div>
        <div class="d-flex col-8"><input oninput="seek()" type="range" min="0" max="100" value="0" step="1" class="form-range" id="audio-time"></div>
        <div class="timing col-2 row">
            <div id="current-time" class="col-12">0:00</div>
            <div id="duration" class="col-12">0:00</div>
        </div>
        
    </div>
</div>

<audio class="d-none" controls>
    <source src="<?php
    $featured = get_field('featured_content');
    echo esc_attr( $featured['featured_content_audio']['url'] ); ?>" type="audio/mpeg">
</audio>

<!-- 
<?php echo esc_attr( $featured['featured_content_audio']['url'] ); ?>
 -->
<script>
    const audio = document.querySelector('audio')
    const playBtn = document.querySelector('#play-icon')
    const pauseBtn = document.querySelector('#pause-icon')
    const durationBar = document.querySelector('#duration')
    const currentTime = document.querySelector('#current-time')
    const seekSlider = document.querySelector("#audio-time")
    let seekTo
    

    playBtn.addEventListener('click', () => {
        audio.play()
        offOn()
        const duration = audio.duration
        durationBar.innerText = calcTime(duration)
    })
    pauseBtn.addEventListener('click', () => {
        audio.pause()
        offOn()
    })

    function offOn () {
        playBtn.classList.toggle('d-flex')
        playBtn.classList.toggle('d-none')
        pauseBtn.classList.toggle('d-flex')
        pauseBtn.classList.toggle('d-none')
    }

    function seek(event){
	        seekTo = audio.duration * (seekSlider.value / 100);
	        audio.currentTime = seekTo;
    }

    audio.ontimeupdate = function() {
        currentTime.innerText = calcTime(audio.currentTime)
    };

    function calcTime(time){
        let minutes = Math.floor(time / 60)
        if(minutes < 10){minutes = '0' + minutes.toString()}
        let seconds = Math.floor(time - minutes * 60)
        if(seconds < 10){seconds = '0' + seconds.toString()}
        return `${minutes}:${seconds}`
    }
</script>