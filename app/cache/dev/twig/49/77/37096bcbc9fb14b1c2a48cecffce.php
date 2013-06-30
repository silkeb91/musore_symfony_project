<?php

/* AcmeMusoreBundle:Product:album_list.html.twig */
class __TwigTemplate_497737096bcbc9fb14b1c2a48cecffce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeMusoreBundle::index_overview.html.twig");

        $this->blocks = array(
            'albumsList' => array($this, 'block_albumsList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeMusoreBundle::index_overview.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_albumsList($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"albums\">
        <div class=\"list_header\">
            <h3>What's new</h3>
        </div>
        <div class=\"dummy\">&nbsp;</div>
        ";
        // line 8
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
            // line 9
            echo "            <div class=\"album ";
            if ((0 == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 5)) {
                echo "marginRemove";
            }
            echo "\">
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album_detail_page", array("album_id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/images/music_pics/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "artist"), "name")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "product"), "coverLink"), "html", null, true);
            echo "\"/>
                </a>
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("album_detail_page", array("album_id" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "id"))), "html", null, true);
            echo "\" class=\"album_info\">
                    <span class=\"lblTitle\">";
            // line 14
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
        // line 19
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeMusoreBundle:Product:album_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 19,  78 => 14,  74 => 13,  66 => 11,  62 => 10,  55 => 9,  38 => 8,  31 => 3,  28 => 2,);
    }
}
