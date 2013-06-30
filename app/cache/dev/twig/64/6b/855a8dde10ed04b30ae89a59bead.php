<?php

/* AcmeMusoreBundle:Default:overview_home.html.twig */
class __TwigTemplate_646b855a8dde10ed04b30ae89a59bead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/spotlighted.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/albumList.css\"/>
";
    }

    // line 9
    public function block_mainContent($context, array $blocks = array())
    {
        // line 10
        echo "    <h2 class=\"hide\">Genres</h2>
    <section id=\"spotlighted\">
        <h3 class=\"hide\">In the spotlights</h3>
        <a id=\"back_left\" href=\"\"><img src=\"music_pics/abba/gold.jpg\"/></a>
        <a id=\"back_left_center\" href=\"\"><img src=\"music_pics/adele/21.jpg\"/></a>
        <a id=\"center\" href=\"\"><img src=\"music_pics/agnus & julia stone/big_jet_plane.jpg\"/></a>
        <a id=\"back_right_center\" href=\"\"><img src=\"music_pics/bastille/bad_blood.jpg\"/></a>
        <a id=\"back_right\" href=\"\"><img src=\"music_pics/birdy/birdy.jpg\"/></a>
    </section>
    <h2></h2>


    <section class=\"albumList\">
        <div class=\"list_header\">
            <h3>What's new</h3>
        </div>
        <div class=\"dummy\">&nbsp;</div>
        <div class=\"albums\">
            <div class=\"album\">
                <a href=\"\">
                    <img src=\"music_pics/abba/gold.jpg\"/></a>
                <a href=\"\" class=\"album_info\">
                    <span class=\"lblTitle\">Gold</span> <span class=\"lblArtist\">Abba</span>
                </a>

            </div>
            <div class=\"album\">
                <a href=\"\">
                    <img src=\"music_pics/adele/21.jpg\"/> </a>
                <a href=\"\" class=\"album_info\">
                    <span class=\"lblTitle\">21</span> <span class=\"lblArtist\">Adele</span>
                </a>

            </div>
            <div class=\"album\">
                <a href=\"\">
                    <img src=\"music_pics/agnus & julia stone/big_jet_plane.jpg\"/></a>
                <a href=\"\" class=\"album_info\">
                    <span class=\"lblTitle\">Big Jet Plane, wat zou er gebeurren??</span> <span class=\"lblArtist\">Agnus & Julia Stone</span>
                </a>

            </div>
            <div class=\"album\">
                <a href=\"\">
                    <img src=\"music_pics/bastille/bad_blood.jpg\"/> </a>
                <a href=\"\" class=\"album_info\">
                    <span class=\"lblTitle\">Bad Blood</span> <span class=\"lblArtist\">Bastille</span>
                </a>

            </div>
            <div class=\"album marginRemove\">
                <a href=\"\">
                    <img src=\"music_pics/birdy/birdy.jpg\"/></a>
                <a href=\"\" class=\"album_info\">
                    <span class=\"lblTitle\">Birdy</span> <span class=\"lblArtist\">Birdy</span>
                </a>

            </div>
            <div class=\"album\">
                <a href=\"\">
                    <img src=\"music_pics/abba/gold.jpg\"/></a>
                <a href=\"\" class=\"album_info\">
                    <span class=\"lblTitle\">Gold</span> <span class=\"lblArtist\">Abba</span>
                </a>

            </div>
            <div class=\"album\">
                <a href=\"\">
                    <img src=\"music_pics/adele/21.jpg\"/></a>
                <a href=\"\" class=\"album_info\">
                    <span class=\"lblTitle\">21</span> <span class=\"lblArtist\">Adele</span>
                </a>

            </div>
            <div class=\"album\">
                <a href=\"\">
                    <img src=\"music_pics/agnus & julia stone/big_jet_plane.jpg\"/></a>
                <a href=\"\" class=\"album_info\">
                    <span class=\"lblTitle\">Big Jet Plane</span> <span class=\"lblArtist\">Agnus & Julia Stone</span>
                </a>

            </div>
            <div class=\"album\">
                <a href=\"\">
                    <img src=\"music_pics/bastille/bad_blood.jpg\"/>
                </a>
                <a href=\"\" class=\"album_info\">
                    <span class=\"lblTitle\">Bad Blood</span> <span class=\"lblArtist\">Bastille</span>
                </a>

            </div>
            <div class=\"album marginRemove\">
                <a href=\"\">
                    <img src=\"music_pics/birdy/birdy.jpg\"/></a>
                <a href=\"\" class=\"album_info\">
                    <span class=\"lblTitle\">Birdy</span> <span class=\"lblArtist\">Birdy</span>
                </a>

            </div>
        </div>

        <a class=\"viewAllLink\" href=\"\">View all</a>
    </section>

    <div class=\"dummy\">&nbsp;</div>

";
    }

    public function getTemplateName()
    {
        return "AcmeMusoreBundle:Default:overview_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  41 => 9,  32 => 4,  29 => 3,);
    }
}
