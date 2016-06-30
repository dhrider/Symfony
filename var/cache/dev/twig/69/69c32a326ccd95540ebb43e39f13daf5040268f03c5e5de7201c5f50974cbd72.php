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
        $__internal_67d61bae485e91ee0ac7c7fca147c5eccc8e609507b5717f88eb072805ad290f = $this->env->getExtension("native_profiler");
        $__internal_67d61bae485e91ee0ac7c7fca147c5eccc8e609507b5717f88eb072805ad290f->enter($__internal_67d61bae485e91ee0ac7c7fca147c5eccc8e609507b5717f88eb072805ad290f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67d61bae485e91ee0ac7c7fca147c5eccc8e609507b5717f88eb072805ad290f->leave($__internal_67d61bae485e91ee0ac7c7fca147c5eccc8e609507b5717f88eb072805ad290f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1963535ef4b8d02abe3806b8b8816ac4f4a4ac4f7786512b07f9d8c5455c04d1 = $this->env->getExtension("native_profiler");
        $__internal_1963535ef4b8d02abe3806b8b8816ac4f4a4ac4f7786512b07f9d8c5455c04d1->enter($__internal_1963535ef4b8d02abe3806b8b8816ac4f4a4ac4f7786512b07f9d8c5455c04d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1963535ef4b8d02abe3806b8b8816ac4f4a4ac4f7786512b07f9d8c5455c04d1->leave($__internal_1963535ef4b8d02abe3806b8b8816ac4f4a4ac4f7786512b07f9d8c5455c04d1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_afe4a039e08718a132d757f521f6f6a9b4b35b7c7c519abf2c7f1269be3a23a4 = $this->env->getExtension("native_profiler");
        $__internal_afe4a039e08718a132d757f521f6f6a9b4b35b7c7c519abf2c7f1269be3a23a4->enter($__internal_afe4a039e08718a132d757f521f6f6a9b4b35b7c7c519abf2c7f1269be3a23a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_afe4a039e08718a132d757f521f6f6a9b4b35b7c7c519abf2c7f1269be3a23a4->leave($__internal_afe4a039e08718a132d757f521f6f6a9b4b35b7c7c519abf2c7f1269be3a23a4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eda699ee7134a83bc9119ef710e07dc09bc5cbe44c495268dd6deb3a3b2cc9dc = $this->env->getExtension("native_profiler");
        $__internal_eda699ee7134a83bc9119ef710e07dc09bc5cbe44c495268dd6deb3a3b2cc9dc->enter($__internal_eda699ee7134a83bc9119ef710e07dc09bc5cbe44c495268dd6deb3a3b2cc9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eda699ee7134a83bc9119ef710e07dc09bc5cbe44c495268dd6deb3a3b2cc9dc->leave($__internal_eda699ee7134a83bc9119ef710e07dc09bc5cbe44c495268dd6deb3a3b2cc9dc_prof);

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
