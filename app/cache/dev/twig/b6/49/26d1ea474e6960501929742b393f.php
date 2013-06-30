<?php

/* AcmeMusoreBundle:Product:genre_overview.html.twig */
class __TwigTemplate_b64926d1ea474e6960501929742b393f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeMusoreBundle::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'leftside' => array($this, 'block_leftside'),
            'mainContent' => array($this, 'block_mainContent'),
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
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/css/formStyles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 9
    public function block_leftside($context, array $blocks = array())
    {
        // line 10
        echo "    <form method=\"post\" action=\"\" id=\"filterForm\">
        <fieldset>
            <legend>Genres</legend>
            <div id=\"genreChkBoxes\">
                <label for=\"chkPop\">Pop</label><input type=\"checkbox\" id=\"chkPop\" name=\"genre\" value=\"pop\">
                <label for=\"chkRock\">Rock</label><input type=\"checkbox\" id=\"chkRock\" name=\"genre\" value=\"rock\">
                <label for=\"chkAlternative\">Altenative</label><input type=\"checkbox\" id=\"chkAlternative\" name=\"genre\" value=\"alternative\">
                <label for=\"chkClassic\">Classic</label><input type=\"checkbox\" id=\"chkClassic\" name=\"genre\" value=\"classic\">
                <label for=\"chkDance\">Dance</label><input type=\"checkbox\" id=\"chkDance\" name=\"genre\" value=\"dance\">
                <label for=\"chkHipHop\">HipHop</label><input type=\"checkbox\" id=\"chkHipHop\" name=\"genre\" value=\"hipHop\">
                <div class=\"dummy\">&nbsp;</div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Price</legend>
            <div>
                <label for=\"rangeMinPrice\">Minimum Price:</label> <span class=\"sliderPrice\">€ 1</span>
                <input type=\"range\" id=\"rangeMinPrice\" name=\"rangeMinPrice\" min=\"1\" max=\"100\" value=\"1\">
                <label for=\"rangeMaxPrice\">Maximum Price:</label> <span class=\"sliderPrice\">€ 100</span>
                <input type=\"range\" id=\"rangeMaxPrice\" name=\"rangeMaxPrice\" min=\"1\" max=\"100\" value=\"100\">
            </div>
        </fieldset>
        <fieldset>
            <legend>Period</legend>
            <div>
                <input type=\"number\" name=\"from\" min=\"1970\" max=\"2013\" value=\"1970\">
                <label for=\"maxYear\">to</label>
                <input type=\"number\" id=\"maxYear\" name=\"to\" min=\"1970\" max=\"2013\" value=\"2013\">
            </div>
        </fieldset>
    </form>
";
    }

    // line 43
    public function block_mainContent($context, array $blocks = array())
    {
        // line 44
        echo "    <h2>-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "genre"), "html", null, true);
        echo " music-</h2>

    <section class=\"albumList\">
        <div class=\"list_header\">
            <h3>Albums</h3>
            <form method=\"post\" action=\"\" class=\"orderForm\">
                <fieldset>
                    <legend class=\"hide\">Order</legend>
                    <div>
                        <label for=\"dropdown_order_album\">Order by</label>
                        <select id=\"dropdown_order_album\">
                            <option value=\"album\">Album</option>
                            <option value=\"artist\">Artist</option>
                            <option value=\"popularity\">Popularity</option>
                            <option value=\"price\">Price</option>
                            <option value=\"year\">Year</option>
                        </select>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class=\"dummy\">&nbsp;</div>


        <div class=\"albums\">
            ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) ? $context["albums"] : $this->getContext($context, "albums")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 70
            echo "                <div class=\"album ";
            if ((0 == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 5)) {
                echo "marginRemove";
            }
            echo "\">
                    <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album_detail_page", array("album_id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"), "currentSong" => 1)), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/images/music_pics/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "artist"), "name")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "coverLink"), "html", null, true);
            echo "\"/>
                    </a>
                    <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album_detail_page", array("album_id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"), "currentSong" => 1)), "html", null, true);
            echo "\" class=\"album_info\">
                        <span class=\"lblTitle\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "title"), "html", null, true);
            echo "</span> <span class=\"lblArtist\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "artist"), "name"), "html", null, true);
            echo "</span>
                    </a>

                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </div>

        <a class=\"viewAllLink\" href=\"\">View all</a>

    </section>

        <div class=\"dummy\">&nbsp;</div>
        <section class=\"albumList\">
            <div class=\"list_header\">
                <h3>Songs</h3>
                <form method=\"post\" action=\"\" class=\"orderForm\">
                    <fieldset>
                        <legend class=\"hide\">Order</legend>
                        <div>
                            <label for=\"dropdown_order_single\">Order by</label>
                            <select id=\"dropdown_order_single\">
                                <option value=\"song\">Song</option>
                                <option value=\"artist\">Artist</option>
                                <option value=\"popularity\">Popularity</option>
                                <option value=\"price\">Price</option>
                                <option value=\"year\">Year</option>
                            </select>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class=\"dummy\">&nbsp;</div>
            <div class=\"albums\">
                ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["songs"]) ? $context["songs"] : $this->getContext($context, "songs")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["song"]) {
            // line 109
            echo "                    <div class=\"album ";
            if ((0 == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 5)) {
                echo "marginRemove";
            }
            echo " \">
                        <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("song_detail_page", array("song_id" => $this->getAttribute((isset($context["song"]) ? $context["song"] : $this->getContext($context, "song")), "id"), "album_id" => 0)), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/images/music_pics/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["song"]) ? $context["song"] : $this->getContext($context, "song")), "product"), "artist"), "name")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["song"]) ? $context["song"] : $this->getContext($context, "song")), "product"), "coverLink"), "html", null, true);
            echo "\"/>
                        </a>
                        <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("song_detail_page", array("song_id" => $this->getAttribute((isset($context["song"]) ? $context["song"] : $this->getContext($context, "song")), "id"), "album_id" => 0)), "html", null, true);
            echo "\" class=\"album_info\">
                            <span class=\"lblTitle\">";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["song"]) ? $context["song"] : $this->getContext($context, "song")), "product"), "title"), "html", null, true);
            echo "</span> <span class=\"lblArtist\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["song"]) ? $context["song"] : $this->getContext($context, "song")), "product"), "artist"), "name"), "html", null, true);
            echo "</span>
                        </a>

                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['song'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "            </div>

            <a class=\"viewAllLink\" href=\"\">View all</a>
        </section>

    <div class=\"dummy\">&nbsp;</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeMusoreBundle:Product:genre_overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 119,  249 => 114,  245 => 113,  237 => 111,  233 => 110,  226 => 109,  209 => 108,  179 => 80,  158 => 75,  154 => 74,  146 => 72,  142 => 71,  135 => 70,  118 => 69,  89 => 44,  86 => 43,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
