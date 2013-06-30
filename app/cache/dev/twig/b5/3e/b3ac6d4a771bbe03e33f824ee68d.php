<?php

/* ::base.html.twig */
class __TwigTemplate_b53eb3ac6d4a771bbe03e33f824ee68d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'userInfo' => array($this, 'block_userInfo'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
<body>
<div id=\"container\">
    <header>
        <div id=\"logo\">
            <h1><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("musore_homepage");
        echo "\"><span class=\"hide\">Musore, You're online music store</span></a></h1>
        </div>
        <nav>
            <ul>
                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("musore_homepage");
        echo "\" id=\"menu_genres\" ";
        if ((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "musore_homepage") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "album_detail_page")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "song_detail_page")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "genre_overview_page"))) {
            echo " class=\"active\"";
        }
        echo "><span class=\"navText\">Albums</span></a></li>
                ";
        // line 21
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 22
            echo "                    <li><a href=\"\" id=\"menu_favorites\"><span class=\"navText\">My Favorites</span></a></li>
                    <li><a href=\"\" id=\"menu_downloads\"><span class=\"navText\">My Downloads</span></a></li>
                ";
        }
        // line 25
        echo "                ";
        if ((!$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"))) {
            // line 26
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" id=\"menu_login\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method") == "login")) {
                echo " class=\"active\"";
            }
            echo "><span class=\"navText\">Login</span></a></li>
                ";
        }
        // line 28
        echo "
                <li><a href=\"\" id=\"menu_cart\"><span id=\"cartNumber\">2</span><span class=\"navText\">Shopping Cart</span></a></li>
            </ul>
        </nav>
        <div id=\"searchDiv\">
            ";
        // line 33
        $this->displayBlock('userInfo', $context, $blocks);
        // line 40
        echo "            <form method=\"get\" action=\"\">
                <fieldset>
                    <legend class=\"hide\">Search</legend>
                    <div>
                        <label class=\"hide\" for=\"txtSearch\">Search:</label>
                        <input type=\"text\" name=\"txtSearch\" id=\"txtSearch\" value=\"\"/>
                    </div>
                </fieldset>
            </form>
        </div>
    </header>
    <div class=\"dummy\">&nbsp;</div>

    <div id=\"content\">
        ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "    </div>

        <footer>
            <p>&copy; 2013 Silke Bauwens</p>
        </footer>
</div>
    ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "</body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Musore";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/css/screen.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    ";
    }

    // line 33
    public function block_userInfo($context, array $blocks = array())
    {
        // line 34
        echo "                <p id=\"userInfo\">
                    ";
        // line 35
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 36
            echo "                        Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "  -  <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Logout</a>
                    ";
        }
        // line 38
        echo "                </p>
            ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "        ";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 63,  169 => 62,  165 => 55,  162 => 54,  157 => 38,  149 => 36,  147 => 35,  144 => 34,  141 => 33,  135 => 9,  132 => 8,  129 => 7,  123 => 5,  116 => 64,  114 => 62,  106 => 56,  104 => 54,  88 => 40,  86 => 33,  79 => 28,  69 => 26,  66 => 25,  61 => 22,  59 => 21,  51 => 20,  44 => 16,  37 => 11,  35 => 7,  30 => 5,  24 => 1,);
    }
}
