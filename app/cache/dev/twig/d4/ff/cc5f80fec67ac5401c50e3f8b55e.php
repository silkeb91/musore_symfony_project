<?php

/* AcmeMusoreBundle:Customer:register.html.twig */
class __TwigTemplate_d4ffcc5f80fec67ac5401c50e3f8b55e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeMusoreBundle::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadCrumps' => array($this, 'block_breadCrumps'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmemusore/css/customer.css"), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("register", array("step" => 1));
        echo "\">Step 1/3: General Information</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("register", array("step" => 2));
        echo "\">Step 2/3: Payment Information</a></li>
    </ul>
";
    }

    // line 15
    public function block_mainContent($context, array $blocks = array())
    {
        // line 16
        echo "    <h2>-Register-</h2>
    <h3>Step 1: General Information</h3>
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "AcmeMusoreBundle:Customer:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  64 => 16,  61 => 15,  54 => 11,  50 => 10,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
