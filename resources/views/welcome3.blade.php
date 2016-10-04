<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <title>scrollorama</title>
    
    <link href="http://fonts.googleapis.com/css?family=Bowlby+One+SC" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="author" href="https://plus.google.com/107766061849006545830">
    
    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script id="twitter-wjs" src="//platform.twitter.com/widgets.js"></script><script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery.lettering-0.6.1.min.js"></script>
    <script src="js/jquery.scrollorama.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="https://platform.twitter.com/js/button.71000885400e222c3c0eec823f8f93f0.js"></script></head>


<style type="text/css">
    /*
    COLORS
 
    Dark Blue       #222438
    Medium Blue     #69697A
    Light Blue      #C5C3DE
    Yellow          #FFB000
    Red             #D92B00
    
*/

body {
    background: #222438;
    font-family: Georgia, Times New Roman, Times, serif;
    font-weight: bold;
    font-size: 30px;
    text-align: center;
}

h1 {
    font-size: 120px;
    font-weight: normal;
    margin: 0;
    font-family: 'Bowlby One SC',"Arial Black",Gadget,sans-serif;
    text-transform: uppercase;
    color: #FFB000;
    text-shadow: 0 2px 1px #000;
    line-height: 1;
}

h2 {
    font-size: 80px;
    font-weight: normal;
    margin: 0;
    text-shadow: 0 2px 1px #000;
    color: #FFB000;
    font-family: 'Bowlby One SC',"Arial Black",Gadget,sans-serif;
    text-transform: uppercase;
}

h3 {
    font-size: 40px;
    font-weight: normal;
    margin: 0;
    color: #D92B00;
    text-shadow: 0 2px 1px #000;
    font-family: 'Bowlby One SC',"Arial Black",Gadget,sans-serif;
    text-transform: uppercase;
}

p {
    width: 80%;
    margin: 20px auto;
    text-shadow: 0 2px 1px #000;
    color: #C5C3DE;
}

a, a:visited {
    color: #D92B00;
    font-weight: bold;
    font-style: italic;
}

ul {
    list-style: none;
}

.download {
    padding: 10px;
}

pre {
    font-size: 18px;
}

blockquote {
    text-align: left;
    width: 720px;
    margin: 10px auto;
    background: #C5C3DE;
    border: solid 2px #69697A;
    padding: 0 40px;
}

code {
    font-style: normal;
    padding-left: 5px;
}

/*----------------------------------------  BLOCKS */

.scrollblock {
    position: relative;
    margin: 0;
    width: 100%;
    height: 600px;
}

.scrollblock h2 {
    padding-top: 100px;
}

.divider {
    font-size: 14px;
}

.divider, .accent {
    color: #69697A;
    text-shadow: none;
}

#console {
    display: none;
    position: fixed;
    top: 0;
    left: 15px;
    width: 500px;
    margin: 0;
    font-size: 14px;
    font-style: italic;
    background-color: #69697A;
    text-shadow: none;
    text-align: left;
    padding: 3px 10px;
    border-radius: 0 0 10px 10px;
    z-index: 99;
    opacity: .8;
}

#intro {
    overflow: hidden;
}

#title {
    margin: 80px auto 0;
    width: 1050px;
    position: relative;
    z-index: 99;
}

#author {
    width: 640px;
    position: absolute;
    top: 180px;
    right: 15%;
    font-size: 20px;
    text-align: right;
    font-style: italic;
    color: #D92B00;
    z-index:100;
}

.twitter-follow-button {
    position: relative;
    top: 8px;
    left: 4px;
}

#desc {
    position: absolute;
    top: 250px;
    width: 100%;
}

#download {
    position: absolute;
    top: 380px;
    font-size: 18px;
    width: 100%;
    line-height: 1.8;
}

#download a {
    color: #69697A;
}

#examples-pin {
    height: 500px;
}

#examples-transition {
    overflow: hidden;
}

#examples-parallax {
    overflow: hidden;
}

#parallax2 {
    position: absolute;
    top: 200px;
    left: -50px;
    color: #C5C3DE;
    opacity: .2;
    font-size: 210px;
    text-shadow: none;
}

#parallax3 {
    position: absolute;
    top: 320px;
    right: 40px;
    color: #C5C3DE;
    opacity: .4;
    font-size: 160px;
    text-shadow: none;
}

#easing span {
    position: relative;
    top:0;
    left:0;
}
#easing_bottom {
    width: 330px;
    height: 13px;
    margin: auto;
    background: #131420;
    border-bottom: 1px solid #30334F;
    position: relative;
    top: 276px;
    border-radius: 2px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -o-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
}

#howtouse {
    height: 2100px;
}

#disclaimer {
    font-size: 18px;
    font-style: italic;
    font-weight: normal;
    margin: 0 auto;
}

#instructions {
    padding-top: 40px;
}

#instructions p {
    margin: 0px auto 20px;
}

#instructions-animation {
    padding-top: 40px;
}

.param-list {
    color: #C5C3DE;
    font-size: 18px;
    line-height: 1.4;
    padding: 0 18px;
}

.param-list li {
    padding-bottom: 20px;
    text-shadow: 0 2px 1px #000;
}

.param {
    display: block;
    color: #69697A;
}

.param-def small {
    display: block;
    font-weight: normal;
    font-style: italic;
}

#credits {
    height: 525px;
    margin-top: 100px;
}

</style>

<body style="position: relative;"><div id="scroll-wrap"></div>
    <a href="https://github.com/johnpolacek/scrollorama">
        <img style="position: fixed; top: 0; right: 0; border: 0; z-index: 11;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub">
    </a>
    
    <p id="console" style="display: block;">onBlockChange | blockIndex:0 | current block: intro</p>

    <div class="scrollblock" id="intro" style="position: absolute; top: 0px;">
        <h1 id="title" style="transform: scale(1);"><span class="char1" style="display: block; float: left; position: relative; top: 0px; transform: rotate(0deg);">s</span><span class="char2" style="display: block; float: left; position: relative; top: 0px; transform: rotate(0deg);">c</span><span class="char3" style="display: block; float: left; position: relative; top: 0px; transform: rotate(0deg);">r</span><span class="char4" style="display: block; float: left; position: relative; top: 0px; transform: rotate(0deg);">o</span><span class="char5" style="display: block; float: left; position: relative; top: 0px; transform: rotate(0deg);">l</span><span class="char6" style="display: block; float: left; position: relative; top: 0px; transform: rotate(0deg);">l</span><span class="char7" style="display: block; float: left; position: relative; top: 0px; transform: rotate(0deg);">o</span><span class="char8" style="display: block; float: left; position: relative; top: 0px; transform: rotate(0deg);">r</span><span class="char9" style="display: block; float: left; padding-left: 6px; position: relative; top: 0px; transform: rotate(0deg);">a</span><span class="char10" style="display: block; float: left; position: relative; top: 0px; transform: rotate(0deg);">m</span><span class="char11" style="display: block; float: left; position: relative; top: 0px; transform: rotate(0deg);">a</span></h1>
        <p id="author" style="z-index: 100;">
            created by <a href="http://twitter.com/johnpolacek">John Polacek</a>
            <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="http://platform.twitter.com/widgets/follow_button.fd774b599f565016d763dd860cb31c79.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=johnpolacek&amp;show_count=false&amp;show_screen_name=true&amp;size=l&amp;time=1461839555026" style="position: static; visibility: visible; width: 165px; height: 28px;" data-screen-name="johnpolacek"></iframe>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </p>
        <p id="desc">The jQuery plugin for doing cool scrolly stuff<br>
        <small>Want to do super-scrolly stuff?<br>Check out <a href="http://johnpolacek.github.com/superscrollorama/">Scrollorama2: SuperScrollorama</a></small></p>
        <p id="download">
            <span class="accent">★</span> DOWNLOAD <span class="accent">★</span><br> 
            <a class="download" href="https://github.com/johnpolacek/scrollorama/zipball/master">zip</a>
            <a class="download" href="https://github.com/johnpolacek/scrollorama/tarball/master">tar</a>
        </p>
    </div>

    <div class="scrollblock" id="examples-transition" style="position: absolute; top: 600px;">
        <h2>Transitions</h2>
        <h3 id="fade-in" style="opacity: 0;">Fade In</h3>
        <h3 id="fly-in" style="position: relative; left: -1400px;">Fly In</h3>
        <h3 id="rotate-in" style="transform: rotate(720deg);">Rotate In</h3>
        <h3 id="zoom-in" style="transform: scale(8);">Zoom In</h3>
        <p id="any" style="opacity: 0; letter-spacing: 18px;"><small><span class="accent">★</span> Any numeric CSS property <span class="accent">★</span></small></p>
    </div>
    
    <div class="scrollblock" id="examples-pin" style="position: absolute; top: 1200px;">
        <h2>Pin It</h2>
        <h3 id="unpin" style="padding-top: 400px;">★ Then unpin it ★</h3>
    </div>
    
    <div class="scrollblock" id="examples-parallax" style="position: absolute; top: 2200px;">
        <h2 id="parallax1">Parallax</h2>
        <h3 id="parallax2">Parallax</h3>
        <h3 id="parallax3">Parallax</h3>
    </div>
    
    <div class="scrollblock" id="examples-easing" style="position: absolute; top: 2800px;">
        <h2 id="easing" style="color: rgb(19, 20, 32); text-shadow: rgb(54, 57, 89) 0px 1px 0px;">Easing</h2>
        <div id="easing_bottom"></div>
    <h2 id="easing" style="position: relative; top: -2.95em;"><span class="char1">E</span><span class="char2">a</span><span class="char3">s</span><span class="char4">i</span><span class="char5">n</span><span class="char6">g</span></h2></div>
    
    <div class="scrollblock" id="howtouse" style="position: absolute; top: 3400px;">
        <h1>How To Use</h1>
        <p id="disclaimer">Disclaimer: This is an experimental, just-for-fun sort of project and hasn’t been thoroughly tested.</p>
        <div id="instructions">
            <p>Design and build your site, dividing your content into blocks.</p>
            <p class="divider">★ ★ ★</p>
            <p>Embed scrollorama.js after jQuery and initialize the plugin, passing the blocks class selector as a parameter.</p>
            <p></p><blockquote><pre>$(document).ready(function() {
    var scrollorama = $.scrollorama({
        blocks:'.scrollblock'
    });
});</pre></blockquote><p></p>
            <p class="divider">★ ★ ★</p>
            <p>Target an element and animate its properties.</p>
            <p></p><blockquote><pre>scrollorama.animate('#example1',{
    duration:400, property:'opacity'
})</pre></blockquote><p></p>
            <p id="instructions-animation">The animation parameters you can use are:</p>
            <ul class="param-list">
                <li>
                    <span class="param">duration</span>
                    <span class="param-def">number of pixels of scrolling the animation lasts</span>
                </li>
                <li>
                    <span class="param">delay</span>
                    <span class="param-def">number of pixels of scrolling before the animation starts<small>(animation is set to begin when the top of the scroll block is at the bottom of browser window)</small></span>
                </li>
                <li>
                    <span class="param">property</span>
                    <span class="param-def">css property being animated <small>(must be numeric)</small></span>
                </li>
                <li>
                    <span class="param">start</span>
                    <span class="param-def">value of the css property at the start of the animation <small>(if unassigned, will be the element’s current property value)<br>(also can be a function that returns a value for dynamic heights)</small></span>
                </li>
                <li>
                    <span class="param">end</span>
                    <span class="param-def">value of the css property at the end of the animation <small>(if unassigned, will be the element’s current property value)<br>(also can be a function that returns a value for dynamic heights)</small></span>
                </li>
                <li>
                    <span class="param">pin</span>
                    <span class="param-def">set to true if you want the scroll block to be pinned during its animations <small>(note: block will be pinned for all its element’s animations)</small></span>
                </li>
                <li>
                    <span class="param">easing</span>
                    <span class="param-def">'bounce baby, bounce.' use the same easing equations you're used to.
                        <small>(if unassigned, will be a linear transition)</small></span>
                </li>
                
            </ul>
            <p class="divider">★ ★ ★</p>
            <p>Hook into the <code>onBlockChange</code> event.</p>
            <p></p><blockquote><pre>scrollorama.onBlockChange(function() {
    alert('You just scrolled to block#'+scrollorama.blockIndex);
});</pre></blockquote><p></p>
            
            <p class="divider">★ ★ ★</p>
            <p>Note: If you are not using the pinning feature, it is recommended you disable it.
                <small>Pinning requires scroll blocks to be converted to absolute positioning, which can break some layouts.</small>
            </p>
            <p></p><blockquote><pre>$(document).ready(function() {
    var scrollorama = $.scrollorama({
        enablePin:false
    });
});</pre></blockquote><p></p>
        </div>
    </div>

    <div class="scrollblock" id="credits" style="position: absolute; top: 5600px;">
        <h1>Credits</h1>
        <p>scrollorama by <a href="http://twitter.com/johnpolacek">John Polacek</a></p>
        <p><a href="http://letteringjs.com">Lettering.js</a> by <a href="http://daverupert.com">Dave Rupert</a></p>
        <p><a href="http://www.google.com/webfonts/specimen/Bowlby+One+SC">Bowlby One SC Font</a> by <a href="https://plus.google.com/107807505287232434305/about">Vernon Adams</a></p>
        <p class="divider">★ ★ ★</p>
        <p><small>If you like scrollorama, give <a href="http://johnpolacek.github.com/scrolldeck.js">scrolldeck</a> a try</small></p>
    </div>
    
    <script>
        $(document).ready(function() {
            
            // initialize the plugin, pass in the class selector for the sections of content (blocks)
            var scrollorama = $.scrollorama({ blocks:'.scrollblock' });
            
            // assign function to add behavior for onBlockChange event
            scrollorama.onBlockChange(function() {
                var i = scrollorama.blockIndex;
                $('#console')
                    .css('display','block')
                    .text('onBlockChange | blockIndex:'+i+' | current block: '+scrollorama.settings.blocks.eq(i).attr('id'));
            });
            
            // lettering.js for coolness
            $('#title').lettering();
            $('#title span')
                .css('display','block')
                .css('float','left');
            $('.char9').css('padding-left','6px');
            
            // animate the title letters to explode
            scrollorama
                .animate('#title',{ duration: 300, property:'zoom', end: 8 })
                .animate('#author',{ duration: 10, property:'z-index', end: 0 });
            
            $('#title span').each(function() {
                scrollorama
                    .animate($(this),{ duration: 400, property:'top', end: Math.random()*120-180 })
                    .animate($(this),{ duration: 300, property:'rotate', start:0, end:Math.random()*720-360 });
            });
            
            // animate some examples
            scrollorama
                .animate('#unpin',{ duration:500, property:'padding-top', start:400, pin:true })
                .animate('#fade-in',{ delay: 400, duration: 300, property:'opacity', start:0 })
                .animate('#fly-in',{ delay: 400, duration: 300, property:'left', start:-1400, end:0 })
                .animate('#rotate-in',{ duration: 800, property:'rotate', start:720 })
                .animate('#zoom-in',{ delay: 200, duration: 600, property:'zoom', start:8 })
                .animate('#any',{ delay: 700, duration: 200, property:'opacity', start:0 })
                .animate('#any',{ delay: 800, duration: 200, property:'letter-spacing', start:18 });
            
            // animate the parallaxing
            scrollorama
                .animate('#parallax2',{ delay: 400, duration: 600, property:'top', start:800, end:-800 })
                .animate('#parallax3',{ delay: 200, duration: 1200, property:'top', start:500, end:-500 });
            
            // animate some easing examples
            var $easing = $('#easing'),
                $clone = $easing.clone().appendTo('#examples-easing')
                                .css({position:'relative',top:'-2.95em'})
                                .lettering();
            $easing.css({ color: '#131420', textShadow: '0 1px 0 #363959' });
            easing_array = [    'easeOutBounce',
                                'easeOutQuad',
                                'easeOutCubic',
                                'easeOutQuart',
                                'easeOutQuint', 
                                'easeOutExpo'       ];
            $clone.find('span')
                .each( function( idx, el ){
                    scrollorama.animate( $(this), { delay:400, duration: 500, 
                                                    property:'top', end: 300,
                                                    easing: easing_array[idx] });
                })
            
        });
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-85164732-1', 'auto');
      ga('send', 'pageview');

    </script>

<iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;"></iframe></body>