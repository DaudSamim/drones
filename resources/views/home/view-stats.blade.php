@extends('layout.app')

@section('content')
<link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />



    <div class="row justify-content-center">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                   
              <video
                id="my-video"
                class="video-js"
                controls
                preload="auto"
                width="640"
                height="264"
                poster="images/logo.png"
                data-setup="{}"
              >
                <source src="MY_VIDEO.mp4" type="video/mp4" />
                <source src="MY_VIDEO.webm" type="video/webm" />
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a
                  web browser that
                  <a href="https://videojs.com/html5-video-support/" target="_blank"
                    >supports HTML5 video</a
                  >
                </p>
              </video>
                   

                </div>
            </div>
        </div>
    </div>
    
<script src="//path/to/video.min.js"></script>
<script src="//path/to/videojs-contrib-quality-levels.min.js"></script>
<script src="//path/to/videojs-hls-quality-selector.min.js"></script>

  <script>
  var player = videojs('my-video');

  player.hlsQualitySelector();
</script>

@endsection

@section('scripts')


@endsection
