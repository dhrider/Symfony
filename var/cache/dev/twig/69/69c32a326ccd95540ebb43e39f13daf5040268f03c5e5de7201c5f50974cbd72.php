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
        $__internal_a6a4511d212055e0415558ad2b7101beec5eb3705eee7458c675fa6cc6ea4192 = $this->env->getExtension("native_profiler");
        $__internal_a6a4511d212055e0415558ad2b7101beec5eb3705eee7458c675fa6cc6ea4192->enter($__internal_a6a4511d212055e0415558ad2b7101beec5eb3705eee7458c675fa6cc6ea4192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6a4511d212055e0415558ad2b7101beec5eb3705eee7458c675fa6cc6ea4192->leave($__internal_a6a4511d212055e0415558ad2b7101beec5eb3705eee7458c675fa6cc6ea4192_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_23eec7276ebdfc48059c2ea605b2e010bc1db24637bf3c33b6bc7726605a44ed = $this->env->getExtension("native_profiler");
        $__internal_23eec7276ebdfc48059c2ea605b2e010bc1db24637bf3c33b6bc7726605a44ed->enter($__internal_23eec7276ebdfc48059c2ea605b2e010bc1db24637bf3c33b6bc7726605a44ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_23eec7276ebdfc48059c2ea605b2e010bc1db24637bf3c33b6bc7726605a44ed->leave($__internal_23eec7276ebdfc48059c2ea605b2e010bc1db24637bf3c33b6bc7726605a44ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d36693c066f835430a4f7a4d2702eea60d6d0ec0116f02d65886d3d0bad045c5 = $this->env->getExtension("native_profiler");
        $__internal_d36693c066f835430a4f7a4d2702eea60d6d0ec0116f02d65886d3d0bad045c5->enter($__internal_d36693c066f835430a4f7a4d2702eea60d6d0ec0116f02d65886d3d0bad045c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d36693c066f835430a4f7a4d2702eea60d6d0ec0116f02d65886d3d0bad045c5->leave($__internal_d36693c066f835430a4f7a4d2702eea60d6d0ec0116f02d65886d3d0bad045c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ad5c17d0074e6bec110db98640bcd0ca13e334a69cd22bb8ff5422f13684ae4 = $this->env->getExtension("native_profiler");
        $__internal_2ad5c17d0074e6bec110db98640bcd0ca13e334a69cd22bb8ff5422f13684ae4->enter($__internal_2ad5c17d0074e6bec110db98640bcd0ca13e334a69cd22bb8ff5422f13684ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ad5c17d0074e6bec110db98640bcd0ca13e334a69cd22bb8ff5422f13684ae4->leave($__internal_2ad5c17d0074e6bec110db98640bcd0ca13e334a69cd22bb8ff5422f13684ae4_prof);

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
