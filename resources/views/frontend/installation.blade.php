@extends('layouts.front')
@section('content')
    <section class="section main-wrapper installation-wrap px-0">
        <h1 class="pt-0 pb-4 mb-5 heading_s3 text-center">Installation</h1>
        <p class="mb-5">
            Installation of CDM closet doors is pretty easy and your level of experience, tools, and door configuration will help dictate whether you will want to do this yourself or hire an installer. Watch our installation videos here for the door type you are interested in and you can decide for yourself if you want to tackle it yourself or hire someone to do it for you.
        </p>

        <div class="installation-videos-wrap open">
            <div class="playlist-trigger">
                <svg height="100%" version="1.1" viewBox="0 0 36 36" width="100%"><use class="ytp-svg-shadow" xlink:href="#ytp-id-23"></use><path d="m 22.53,21.42 0,6.85 5.66,-3.42 -5.66,-3.42 0,0 z m -11.33,0 9.06,0 0,2.28 -9.06,0 0,-2.28 0,0 z m 0,-9.14 13.6,0 0,2.28 -13.6,0 0,-2.28 0,0 z m 0,4.57 13.6,0 0,2.28 -13.6,0 0,-2.28 0,0 z" fill="#fff" id="ytp-id-23"></path></svg>
                <span>
                    Playlist
                </span>
            </div>
            <div class="specs-iframe-wrap" id="youtubeplayer">
                <iframe class="specs-iframe-responsive" width="100%" src="" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="iv-playlist-wrap">
                <div class="iv-playlist-header">
                    <div class="iv-playlist-title">
                        Installation Videos
                        <span class="ti-close iv-playlist-close"></span>
                    </div>
                </div>
                <ul class="iv-playlist-ul" id="youtubevideotabs">
                    <li class="iv-playlist-li active" iVideoId="571741493">
                        <div class="iv-pl-icon">
                            <i class="ion-ios-play"></i>
                        </div>
                        <div class="iv-playlist-thumb" style="background-image: url('https://i.vimeocdn.com/video/1182456348?mw=64&mh=36')"></div>
                        <div class="iv-playlist-thumb-title">2-Panel Bifold Install</div>
                    </li>
                    <li class="iv-playlist-li" iVideoId="571741365">
                        <div class="iv-pl-icon">
                            <i class="ion-ios-play"></i>
                        </div>
                        <div class="iv-playlist-thumb" style="background-image: url('https://i.vimeocdn.com/video/1182456129?mw=64&mh=36');"></div>
                        <div class="iv-playlist-thumb-title">4-Panel Bifold Install</div>
                    </li>
                    <li class="iv-playlist-li" iVideoId="571741198">
                        <div class="iv-pl-icon">
                            <i class="ion-ios-play"></i>
                        </div>
                        <div class="iv-playlist-thumb" style="background-image: url('https://i.vimeocdn.com/video/1182456131?mw=64&mh=36')"></div>
                        <div class="iv-playlist-thumb-title">6-Panel Bifold Install</div>
                    </li>
                    <li class="iv-playlist-li" iVideoId="571740985">
                        <div class="iv-pl-icon">
                            <i class="ion-ios-play"></i>
                        </div>
                        <div class="iv-playlist-thumb" style="background-image: url('https://i.vimeocdn.com/video/1182455718?mw=64&mh=36');"></div>
                        <div class="iv-playlist-thumb-title">8-Panel Bifold Install</div>
                    </li>
                    <li class="iv-playlist-li" iVideoId="571740902">
                        <div class="iv-pl-icon">
                            <i class="ion-ios-play"></i>
                        </div>
                        <div class="iv-playlist-thumb" style="background-image: url('https://i.vimeocdn.com/video/1182455466?mw=64&mh=36')"></div>
                        <div class="iv-playlist-thumb-title">2-Panel Slider Install</div>
                    </li>
                    <li class="iv-playlist-li" iVideoId="571740806">
                        <div class="iv-pl-icon">
                            <i class="ion-ios-play"></i>
                        </div>
                        <div class="iv-playlist-thumb" style="background-image: url('https://i.vimeocdn.com/video/1182454998?mw=64&mh=36');"></div>
                        <div class="iv-playlist-thumb-title">3-Panel Slider Double-Track Install</div>
                    </li>
                    <li class="iv-playlist-li" iVideoId="571740933">
                        <div class="iv-pl-icon">
                            <i class="ion-ios-play"></i>
                        </div>
                        <div class="iv-playlist-thumb" style="background-image: url('https://i.vimeocdn.com/video/1182455140?mw=64&mh=36')"></div>
                        <div class="iv-playlist-thumb-title">4-Panel Slider Install</div>
                    </li>
                    <li class="iv-playlist-li" iVideoId="571741629">
                        <div class="iv-pl-icon">
                            <i class="ion-ios-play"></i>
                        </div>
                        <div class="iv-playlist-thumb" style="background-image: url('https://i.vimeocdn.com/video/1182454680?mw=64&mh=36');"></div>
                        <div class="iv-playlist-thumb-title">3-Panel Slider Triple-Track Install</div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
@endsection

@section('scripts')
    <script>
        $(function(){
            var iVideoUrl = "https://player.vimeo.com/video/" + $('#youtubevideotabs li:first-child').attr('iVideoId') + "?title=0&byline=0&portrait=0";
            $('#youtubeplayer iframe').attr('src',iVideoUrl);            
            $('#youtubevideotabs li').click(function(){
                iVideoUrl = "https://player.vimeo.com/video/"+ $(this).attr('iVideoId') +"?title=0&byline=0&portrait=0";
                $('#youtubeplayer iframe').attr('src',iVideoUrl);
                $('#youtubevideotabs li').removeClass('active');
                $(this).addClass('active');
            }); 
        });
        $('.installation-videos-wrap .playlist-trigger').on("click", function(){
            $('.installation-videos-wrap').toggleClass('open');
        });
        $('.installation-videos-wrap .iv-playlist-close').on("click", function(){
            $('.installation-videos-wrap').removeClass('open');
        });
    </script>
@endsection
