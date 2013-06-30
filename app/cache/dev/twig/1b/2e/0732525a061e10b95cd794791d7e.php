<?php

/* AcmeMusoreBundle::base.html.twig */
class __TwigTemplate_1b2e0732525a061e10b95cd794791d7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'breadCrumps' => array($this, 'block_breadCrumps'),
            'leftside' => array($this, 'block_leftside'),
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"breadCrumps\">
        ";
        // line 4
        $this->displayBlock('breadCrumps', $context, $blocks);
        // line 6
        echo "    </div>
    <div id=\"leftside\">
         ";
        // line 8
        $this->displayBlock('leftside', $context, $blocks);
        // line 10
        echo "         <div class=\"dummy\">&nbsp;</div>
    </div>

    <div id=\"mainContent\">
         ";
        // line 14
        $this->displayBlock('mainContent', $context, $blocks);
        // line 16
        echo "    </div>
";
    }

    // line 4
    public function block_breadCrumps($context, array $blocks = array())
    {
        // line 5
        echo "        ";
    }

    // line 8
    public function block_leftside($context, array $blocks = array())
    {
        // line 9
        echo "         ";
    }

    // line 14
    public function block_mainContent($context, array $blocks = array())
    {
        // line 15
        echo "         ";
    }

    public function getTemplateName()
    {
        return "AcmeMusoreBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  72 => 14,  68 => 9,  65 => 8,  61 => 5,  58 => 4,  53 => 16,  51 => 14,  45 => 10,  43 => 8,  39 => 6,  37 => 4,  34 => 3,  31 => 2,);
    }
}
