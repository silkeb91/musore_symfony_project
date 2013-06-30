<?php

/* AcmeMusoreBundle:Product:album_detail.html.twig */
class __TwigTemplate_21dbd221293f75dc3a32c741dd30895d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeMusoreBundle::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadCrumps' => array($this, 'block_breadCrumps'),
            'leftside' => array($this, 'block_leftside'),
            'mainContent' => array($this, 'block_mainContent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeMusoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/css/albumList.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 8
    public function block_breadCrumps($context, array $blocks = array())
    {
        // line 9
        echo "    <ul>
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genre_overview_page", array("genre_id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "genre"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "genre"), "genre"), "html", null, true);
        echo "</a></li>
        <li><a>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "artist"), "name"), "html", null, true);
        echo "</a></li>
    </ul>
";
    }

    // line 15
    public function block_leftside($context, array $blocks = array())
    {
        // line 16
        echo "    <h3>Other Albums</h3>
    <div class=\"albums\">
        <div class=\"album\">
            <a href=\"\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/images/music_pics/abba/gold.jpg"), "html", null, true);
        echo "\"/></a>
            <a href=\"\" class=\"album_info\">
                <span class=\"lblTitle\">Gold</span> <span class=\"lblArtist\">Abba</span>
            </a>

        </div>
        <div class=\"album\">
            <a href=\"\">
                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/images/music_pics/adele/21.jpg"), "html", null, true);
        echo "\"/> </a>
            <a href=\"\" class=\"album_info\">
                <span class=\"lblTitle\">21</span> <span class=\"lblArtist\">Adele</span>
            </a>

        </div>
        <div class=\"album\">
            <a href=\"\">
                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/images/music_pics/agnus%20&%20julia%20stone/big_jet_plane.jpg"), "html", null, true);
        echo "\"/></a>
            <a href=\"\" class=\"album_info\">
                <span class=\"lblTitle\">Big Jet Plane, wat zou er gebeurren??</span> <span class=\"lblArtist\">Agnus & Julia Stone</span>
            </a>

        </div>

    </div>
";
    }

    // line 46
    public function block_mainContent($context, array $blocks = array())
    {
        // line 47
        echo "    <div id=\"music_preview\">
        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/images/music_pics/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "artist"), "name")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "coverLink"), "html", null, true);
        echo "\"/>

        <!--<audio controls>
            <source src=\"music_preview/agnus%20&%20julia%20stone/big_jet_plane.mp3\" type=\"audio/mpeg\">
            Your browser does not support the audio element.
        </audio>-->
        <div class=\"player\">
            <a class=\"player_button\" id=\"previous\" href=\"\" title=\"\">&#060;&#060;</a>
            <a class=\"player_button\" id=\"play\" href=\"\" title=\"\"></a>
            <a class=\"player_button\" id=\"next\" href=\"\" title=\"\">&#062;&#062;</a>

            <input type=\"range\" id=\"seek\" value=\"0\" max=\"\"/>
            <p>";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "albumTracks"), ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) - 1), array(), "array"), "song"), "product"), "title"), "html", null, true);
        echo "</p>
        </div><!-- / player -->

    </div>
    <div id=\"album_detail\">
        <p><span id=\"album_name\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "title"), "html", null, true);
        echo "</span> <a href=\"\"><span id=\"artist_name\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "artist"), "name"), "html", null, true);
        echo "</span></a> <span id=\"year\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "releaseDate"), "m-Y"), "html", null, true);
        echo "</span> <span id=\"price\">€ ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "price"), 2, ","), "html", null, true);
        echo "</span></p>

        ";
        // line 67
        if ((!(isset($context["inCart"]) ? $context["inCart"] : $this->getContext($context, "inCart")))) {
            // line 68
            echo "            <a href=\"\" id=\"cart_button\" class=\"button\">Add to Shopping Cart</a>
        ";
        } else {
            // line 70
            echo "            <p id=\"added_button\" class=\"button\">Added to Shopping Cart</p>
        ";
        }
        // line 72
        echo "

    </div>
    <div class=\"dummy\">&nbsp;</div>
    <a href=\"\" id=\"favorites_button\" class=\"button\">Add to Favorites</a>
    <section id=\"track_overview\">
        <ol>
        ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "albumTracks"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["albumTrack"]) {
            // line 80
            echo "            <li ";
            if ((!(0 == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2))) {
                echo "class=\"list_background\"";
            }
            echo ">
                <span><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("song_detail_page", array("song_id" => $this->getAttribute($this->getAttribute((isset($context["albumTrack"]) ? $context["albumTrack"] : $this->getContext($context, "albumTrack")), "song"), "id"), "album_id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["albumTrack"]) ? $context["albumTrack"] : $this->getContext($context, "albumTrack")), "song"), "product"), "title"), "html", null, true);
            echo "</a></span>
                <span>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["albumTrack"]) ? $context["albumTrack"] : $this->getContext($context, "albumTrack")), "song"), "product"), "artist"), "name"), "html", null, true);
            echo "</span>
                <span>&euro;";
            // line 83
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["albumTrack"]) ? $context["albumTrack"] : $this->getContext($context, "albumTrack")), "song"), "product"), "price"), 2, ","), "html", null, true);
            echo "</span>
                <span><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album_detail_page", array("currentSong" => $this->getAttribute((isset($context["albumTrack"]) ? $context["albumTrack"] : $this->getContext($context, "albumTrack")), "trackNumber"), "album_id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
            echo "\"><span>play</span></a></span>
            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['albumTrack'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </ol>
    </section>
";
    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        // line 91
        echo "   <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/js/libs/jquery-1.9.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
   <script>

       var autoPlayNeeded = false;
       var song;
       var fullLink = \"\";

       \$(document).ready(function(){
          init();
       });

       function init(){
           if(autoPlayNeeded == null){autoPlayNeeded = true;}
           var artist = \"";
        // line 104
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "artist"), "name"), "js"), "html", null, true);
        echo "\".toLowerCase();
           var previewLink = \"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "albumTracks"), ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) - 1), array(), "array"), "song"), "previewLink"), "html", null, true);
        echo "\";
           var current = \"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "html", null, true);
        echo "\";
           var link = 'bundles/acmemusore/' + \"music_preview/\" + artist + \"/\" + previewLink;

           fullLink = \"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("test"), "html", null, true);
        echo "\";
           fullLink = fullLink.replace('test', link);

           song = new Audio(fullLink);

           var container = \$('.container');
           var mute = \$('#previous');
           var muted = \$('#next');

           var duration = song.duration;

           checkSong();
       }

       function checkSong(){
           if (song.canPlayType('audio/mpeg;')) {
               song.type= 'audio/mpeg';
               song.src= fullLink;

           } else {
               alert(\"mislukt\");
           }

           \$(\"#play\").click(playHandler);
           \$(\"#pause\").click(pauseHandler);

           \$(\"#seek\").bind(\"change\", function() {
               song.currentTime = \$(this).val();
               \$(\"#seek\").attr(\"max\", song.duration);
           });

           \$(\"#next\").click(function(e) {
               e.preventDefault();
               var current = parseInt(\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "html", null, true);
        echo "\");
               var numberOfSongs = parseInt(\"";
        // line 143
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "albumTracks")), "html", null, true);
        echo "\");
               if(current >= numberOfSongs ){
                   var location = \"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album_detail_page", array("currentSong" => 1, "album_id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
        echo "\";
               }else{
                   var location = \"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album_detail_page", array("currentSong" => ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) + 1), "album_id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
        echo "\";
               }
               autoPlayNeeded = false;
               window.location.href = location;
           });

           \$(\"#previous\").click(function(e) {
               e.preventDefault();
               var current = parseInt(\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "html", null, true);
        echo "\");
               var numberOfSongs = parseInt(\"";
        // line 156
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "albumTracks")), "html", null, true);
        echo "\");
               if(current <= 1 ){
                   var location = \"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album_detail_page", array("currentSong" => "test", "album_id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
        echo "\";
                   location = location.replace('test', numberOfSongs);
               }else{
                   var location = \"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album_detail_page", array("currentSong" => ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) - 1), "album_id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
        echo "\";
               }
               autoPlayNeeded = false;
               window.location.href = location;
           });


           song.addEventListener('timeupdate',function (){
               curtime = parseInt(song.currentTime, 10);
               \$(\"#seek\").attr(\"value\", curtime);
           });

           if(autoPlayNeeded){
                autoPlay();
           }
       }

       function playHandler(e){
           e.preventDefault();
           autoPlayNeeded = true;
           autoPlay();
       }

       function pauseHandler(e){
           e.preventDefault();

           song.pause();

           \$('#pause').replaceWith('<a class=\"button\" id=\"play\" href=\"\" title=\"\"></a>');
           \$('#pause').removeEventListener('click', pauseHandler);
           \$('#play').addEventListener('click', playHandler);


           \$('#seek').attr('max',song.duration);
           autoPlayNeeded = false;
       }


       function autoPlay(){
           autoPlayNeeded = false;
           song.play();
           \$('#play').replaceWith('<a class=\"button\" id=\"pause\" href=\"\" title=\"\">||</a>');
           \$('#play').removeEventListener('click', playHandler);
           \$('#pause').addEventListener('click', pauseHandler);
           \$('#seek').attr('max',song.duration);
       }

   </script>
";
    }

    public function getTemplateName()
    {
        return "AcmeMusoreBundle:Product:album_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 161,  338 => 158,  333 => 156,  329 => 155,  318 => 147,  313 => 145,  308 => 143,  304 => 142,  268 => 109,  262 => 106,  258 => 105,  254 => 104,  237 => 91,  234 => 90,  228 => 87,  211 => 84,  207 => 83,  203 => 82,  197 => 81,  190 => 80,  173 => 79,  164 => 72,  160 => 70,  156 => 68,  154 => 67,  143 => 65,  133 => 60,  115 => 48,  112 => 47,  109 => 46,  96 => 36,  85 => 28,  74 => 20,  68 => 16,  65 => 15,  58 => 11,  52 => 10,  49 => 9,  46 => 8,  40 => 5,  35 => 4,  32 => 3,);
    }
}
