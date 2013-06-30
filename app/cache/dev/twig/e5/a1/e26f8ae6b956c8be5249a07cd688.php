<?php

/* AcmeMusoreBundle:Product:index_overview.html.twig */
class __TwigTemplate_e5a1e26f8ae6b956c8be5249a07cd688 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/css/spotLighted.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/css/albumList.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/css/formStyles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
    }

    // line 10
    public function block_leftside($context, array $blocks = array())
    {
        // line 11
        echo "     <form method=\"post\" action=\"\" id=\"filterForm\">
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

    // line 44
    public function block_mainContent($context, array $blocks = array())
    {
        // line 45
        echo "    <h2 class=\"hide\">Genres</h2>
    <section id=\"spotlighted\">
        <h3 class=\"hide\">In the spotlights</h3>
        ";
        // line 48
        $context["idCss"] = array(0 => "back_left", 1 => "back_left_center", 2 => "center", 3 => "back_right_center", 4 => "back_right");
        // line 49
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["spotlighted"]) ? $context["spotlighted"] : $this->getContext($context, "spotlighted")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["spotlight"]) {
            // line 50
            echo "            <a id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["idCss"]) ? $context["idCss"] : $this->getContext($context, "idCss")), ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") - 1), array(), "array"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album_detail_page", array("album_id" => $this->getAttribute((isset($context["spotlight"]) ? $context["spotlight"] : $this->getContext($context, "spotlight")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/images/music_pics/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["spotlight"]) ? $context["spotlight"] : $this->getContext($context, "spotlight")), "product"), "artist"), "name")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["spotlight"]) ? $context["spotlight"] : $this->getContext($context, "spotlight")), "product"), "coverLink"), "html", null, true);
            echo "\"/></a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spotlight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
    </section>
    <h2></h2>

    <section class=\"albumList\">
        <div class=\"list_header\">
            <h3>What's new</h3>
        </div>
        <div class=\"dummy\">&nbsp;</div>
        <div class=\"albums\">
            ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newestAlbums"]) ? $context["newestAlbums"] : $this->getContext($context, "newestAlbums")));
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
            // line 63
            echo "                <div class=\"album ";
            if ((0 == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 5)) {
                echo "marginRemove";
            }
            echo "\">
                    <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album_detail_page", array("album_id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"), "currentSong" => 1)), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/images/music_pics/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "artist"), "name")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "coverLink"), "html", null, true);
            echo "\"/>
                    </a>
                    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album_detail_page", array("album_id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"), "currentSong" => 1)), "html", null, true);
            echo "\" class=\"album_info\">
                        <span class=\"lblTitle\">";
            // line 68
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
        // line 73
        echo "        </div>

        <a class=\"viewAllLink\" href=\"\">View all</a>
    </section>

    <div class=\"dummy\">&nbsp;</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeMusoreBundle:Product:index_overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 73,  194 => 68,  190 => 67,  182 => 65,  178 => 64,  171 => 63,  154 => 62,  142 => 52,  118 => 50,  100 => 49,  98 => 48,  93 => 45,  90 => 44,  55 => 11,  52 => 10,  46 => 7,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
