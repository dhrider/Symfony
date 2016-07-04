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
        $__internal_c33f83132ad6ee0a26731cc93f98417ff90e3539b26cfb4edc3eca0b4d4ff9cd = $this->env->getExtension("native_profiler");
        $__internal_c33f83132ad6ee0a26731cc93f98417ff90e3539b26cfb4edc3eca0b4d4ff9cd->enter($__internal_c33f83132ad6ee0a26731cc93f98417ff90e3539b26cfb4edc3eca0b4d4ff9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c33f83132ad6ee0a26731cc93f98417ff90e3539b26cfb4edc3eca0b4d4ff9cd->leave($__internal_c33f83132ad6ee0a26731cc93f98417ff90e3539b26cfb4edc3eca0b4d4ff9cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_720f0181703064026d9f829a4bdc491db09cb60315f4b7bf350e74bfee4858ea = $this->env->getExtension("native_profiler");
        $__internal_720f0181703064026d9f829a4bdc491db09cb60315f4b7bf350e74bfee4858ea->enter($__internal_720f0181703064026d9f829a4bdc491db09cb60315f4b7bf350e74bfee4858ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_720f0181703064026d9f829a4bdc491db09cb60315f4b7bf350e74bfee4858ea->leave($__internal_720f0181703064026d9f829a4bdc491db09cb60315f4b7bf350e74bfee4858ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d27601ef44b532f76e4a2b9c5c37deb2367a2638ec00855bd1f413628afecc5f = $this->env->getExtension("native_profiler");
        $__internal_d27601ef44b532f76e4a2b9c5c37deb2367a2638ec00855bd1f413628afecc5f->enter($__internal_d27601ef44b532f76e4a2b9c5c37deb2367a2638ec00855bd1f413628afecc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d27601ef44b532f76e4a2b9c5c37deb2367a2638ec00855bd1f413628afecc5f->leave($__internal_d27601ef44b532f76e4a2b9c5c37deb2367a2638ec00855bd1f413628afecc5f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b45e89d2f1595fc3db2cab6059f4073101ce853afb4478d45fb620df139ab719 = $this->env->getExtension("native_profiler");
        $__internal_b45e89d2f1595fc3db2cab6059f4073101ce853afb4478d45fb620df139ab719->enter($__internal_b45e89d2f1595fc3db2cab6059f4073101ce853afb4478d45fb620df139ab719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b45e89d2f1595fc3db2cab6059f4073101ce853afb4478d45fb620df139ab719->leave($__internal_b45e89d2f1595fc3db2cab6059f4073101ce853afb4478d45fb620df139ab719_prof);

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
