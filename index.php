<?php @include 'header.php' ?>

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<div data-spy="scroll" data-target="#scrollSpy" data-offset="">
    <section id="section1">
        <div class="homepage-hero-module">
            <div class="video-container">
                <div class="filter"></div>
                <video autoplay loop class="fillWidth lazy" muted>
                    <source src="img/Madrid-video.MP4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                    <source src="img/Madrid-video.MP4" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
                </video>
                <!--<div class="poster hidden">
                    <img src="img/cover_bg.jpg" alt="">
                </div>-->
                <div class="landing">
                    <div class="middeleText">
                        <div class="m-auto">
                            <h1 class="text-center">Hello I am Mukesh</h1>
                            <h1 class="type-it"></h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="section2">
        <div class="container">
            <div class="row">
                <div class="circle" id="circles-1"></div>
            </div>
        </div>
    </section>
    <section id="section3">
        <div class="container">
            <div class="row">
                <div style="min-height: 600px"></div>

            </div>
        </div>
    </section>
    <section id="section4">
        <div class="container">
            <div class="row">
                <div style="min-height: 600px"></div>

            </div>
        </div>
    </section>
    <section id="section5">
        <div class="container">
            <div class="row">
                <div style="min-height: 600px"></div>

            </div>
        </div>
    </section>
</div>



<?php @include 'footer.php' ?>
<script>
    $('body').scrollspy({ target: '#scrollSpy' });
    new TypeIt('.type-it', {
        strings: ["I design & develop Web Pages", "Responsive UIs"],
        speed: 50,
        breakLines: false,
        loop: true ,
        autoStart: false,
        nextStringDelay : 3000
    }).pause(2000).delete(105);

    var myCircle = Circles.create({
        id:                  'circles-1',
        radius:              60,
        value:               43,
        maxValue:            100,
        width:               10,
        text:                function(value){return value + '%';},
        colors:              ['#D3B6C6', '#4B253A'],
        duration:            400,
        wrpClass:            'circles-wrp',
        textClass:           'circles-text',
        valueStrokeClass:    'circles-valueStroke',
        maxValueStrokeClass: 'circles-maxValueStroke',
        styleWrapper:        true,
        styleText:           true
    });

</script>
