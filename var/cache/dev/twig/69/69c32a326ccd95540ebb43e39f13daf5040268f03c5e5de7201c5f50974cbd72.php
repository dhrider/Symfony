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
        $__internal_ac1cfcfe95fd3b9fe1ecf59c085b9bdca0b99126c33392a7554faa8fc1e24e12 = $this->env->getExtension("native_profiler");
        $__internal_ac1cfcfe95fd3b9fe1ecf59c085b9bdca0b99126c33392a7554faa8fc1e24e12->enter($__internal_ac1cfcfe95fd3b9fe1ecf59c085b9bdca0b99126c33392a7554faa8fc1e24e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac1cfcfe95fd3b9fe1ecf59c085b9bdca0b99126c33392a7554faa8fc1e24e12->leave($__internal_ac1cfcfe95fd3b9fe1ecf59c085b9bdca0b99126c33392a7554faa8fc1e24e12_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d8199c9c2508d9b7f736c67b4dc6d8c2b9f376c5fcd5723391d1e6c4c22f9f5 = $this->env->getExtension("native_profiler");
        $__internal_6d8199c9c2508d9b7f736c67b4dc6d8c2b9f376c5fcd5723391d1e6c4c22f9f5->enter($__internal_6d8199c9c2508d9b7f736c67b4dc6d8c2b9f376c5fcd5723391d1e6c4c22f9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d8199c9c2508d9b7f736c67b4dc6d8c2b9f376c5fcd5723391d1e6c4c22f9f5->leave($__internal_6d8199c9c2508d9b7f736c67b4dc6d8c2b9f376c5fcd5723391d1e6c4c22f9f5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b8c36f112060bd9117fe3e21e5cf092d9036d92f11f54f6cb6724a35fe13aac = $this->env->getExtension("native_profiler");
        $__internal_0b8c36f112060bd9117fe3e21e5cf092d9036d92f11f54f6cb6724a35fe13aac->enter($__internal_0b8c36f112060bd9117fe3e21e5cf092d9036d92f11f54f6cb6724a35fe13aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0b8c36f112060bd9117fe3e21e5cf092d9036d92f11f54f6cb6724a35fe13aac->leave($__internal_0b8c36f112060bd9117fe3e21e5cf092d9036d92f11f54f6cb6724a35fe13aac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f506b5e944b4dac2e127546da79ed087a5af60a2934cd675be2a4b104520c36 = $this->env->getExtension("native_profiler");
        $__internal_6f506b5e944b4dac2e127546da79ed087a5af60a2934cd675be2a4b104520c36->enter($__internal_6f506b5e944b4dac2e127546da79ed087a5af60a2934cd675be2a4b104520c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f506b5e944b4dac2e127546da79ed087a5af60a2934cd675be2a4b104520c36->leave($__internal_6f506b5e944b4dac2e127546da79ed087a5af60a2934cd675be2a4b104520c36_prof);

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
