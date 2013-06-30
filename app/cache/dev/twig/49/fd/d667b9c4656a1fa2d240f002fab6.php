<?php

/* AcmeMusoreBundle:Customer:login.html.twig */
class __TwigTemplate_49fdd667b9c4656a1fa2d240f002fab6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeMusoreBundle::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 9
    public function block_mainContent($context, array $blocks = array())
    {
        // line 10
        echo "    <h2>- Log in - </h2>

    ";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 15
        echo "
        <form id=\"loginform\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">

            <label for=\"username\">Username:</label>
            <input type=\"text\" placeholder=\"Username\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>

            <label for=\"password\">Password:</label>
            <input type=\"password\" placeholder=\"Password\" id=\"password\" name=\"_password\"\"/>

            <div>
                <p id=\"noLogin\">No login yet? <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\">Register now.</a></p>
                <button type=\"submit\">Log in</button>
            </div>
        </form>

";
    }

    public function getTemplateName()
    {
        return "AcmeMusoreBundle:Customer:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  67 => 19,  61 => 16,  58 => 15,  52 => 13,  50 => 12,  46 => 10,  43 => 9,  37 => 5,  32 => 4,  29 => 3,);
    }
}
