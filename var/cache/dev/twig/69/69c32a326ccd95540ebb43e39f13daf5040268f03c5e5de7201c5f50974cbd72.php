<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_78a4c61b466f236e1786da58211d6014e9f44022f11a921e4f5d0ae74dae1bf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40eb6686ba4d5c718a9c5bbdccb77e89ba594e9375363220f2af17b9d5e39564 = $this->env->getExtension("native_profiler");
        $__internal_40eb6686ba4d5c718a9c5bbdccb77e89ba594e9375363220f2af17b9d5e39564->enter($__internal_40eb6686ba4d5c718a9c5bbdccb77e89ba594e9375363220f2af17b9d5e39564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40eb6686ba4d5c718a9c5bbdccb77e89ba594e9375363220f2af17b9d5e39564->leave($__internal_40eb6686ba4d5c718a9c5bbdccb77e89ba594e9375363220f2af17b9d5e39564_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cad582961221babf5b94760bbf8e3caf179bde90916be09cd51ce08413d11fbc = $this->env->getExtension("native_profiler");
        $__internal_cad582961221babf5b94760bbf8e3caf179bde90916be09cd51ce08413d11fbc->enter($__internal_cad582961221babf5b94760bbf8e3caf179bde90916be09cd51ce08413d11fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cad582961221babf5b94760bbf8e3caf179bde90916be09cd51ce08413d11fbc->leave($__internal_cad582961221babf5b94760bbf8e3caf179bde90916be09cd51ce08413d11fbc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18544dcacb94bcf4d60bc372a48056e7bd0598c6a4a6cab47d30da03cc870fc5 = $this->env->getExtension("native_profiler");
        $__internal_18544dcacb94bcf4d60bc372a48056e7bd0598c6a4a6cab47d30da03cc870fc5->enter($__internal_18544dcacb94bcf4d60bc372a48056e7bd0598c6a4a6cab47d30da03cc870fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18544dcacb94bcf4d60bc372a48056e7bd0598c6a4a6cab47d30da03cc870fc5->leave($__internal_18544dcacb94bcf4d60bc372a48056e7bd0598c6a4a6cab47d30da03cc870fc5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf187cd43f4fe0225b96b0c42f27b3c75af667261c3680bc1d0e840e9ec00e09 = $this->env->getExtension("native_profiler");
        $__internal_cf187cd43f4fe0225b96b0c42f27b3c75af667261c3680bc1d0e840e9ec00e09->enter($__internal_cf187cd43f4fe0225b96b0c42f27b3c75af667261c3680bc1d0e840e9ec00e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cf187cd43f4fe0225b96b0c42f27b3c75af667261c3680bc1d0e840e9ec00e09->leave($__internal_cf187cd43f4fe0225b96b0c42f27b3c75af667261c3680bc1d0e840e9ec00e09_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
