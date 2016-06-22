<?php

/* OCPlatformBundle:Advert:purger.html.twig */
class __TwigTemplate_14e4b7cf43c63c3b19b8721bcf947264ff450c013cb9d4e49dd1ad488d7604d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:purger.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad308e0ab4582b3dbd0767b7f6867876d0b2f5bc32a90ecee8a111cbbcff1a20 = $this->env->getExtension("native_profiler");
        $__internal_ad308e0ab4582b3dbd0767b7f6867876d0b2f5bc32a90ecee8a111cbbcff1a20->enter($__internal_ad308e0ab4582b3dbd0767b7f6867876d0b2f5bc32a90ecee8a111cbbcff1a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:purger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad308e0ab4582b3dbd0767b7f6867876d0b2f5bc32a90ecee8a111cbbcff1a20->leave($__internal_ad308e0ab4582b3dbd0767b7f6867876d0b2f5bc32a90ecee8a111cbbcff1a20_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba58d8694f60dc4e210dc3bb4d5485d95c17af40838cd9da482e84923f6d3b4f = $this->env->getExtension("native_profiler");
        $__internal_ba58d8694f60dc4e210dc3bb4d5485d95c17af40838cd9da482e84923f6d3b4f->enter($__internal_ba58d8694f60dc4e210dc3bb4d5485d95c17af40838cd9da482e84923f6d3b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Purger les annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ba58d8694f60dc4e210dc3bb4d5485d95c17af40838cd9da482e84923f6d3b4f->leave($__internal_ba58d8694f60dc4e210dc3bb4d5485d95c17af40838cd9da482e84923f6d3b4f_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_787185c94d19f4f19f69228b8bad5c3059ee52b2308c50a899f785ec314e7e27 = $this->env->getExtension("native_profiler");
        $__internal_787185c94d19f4f19f69228b8bad5c3059ee52b2308c50a899f785ec314e7e27->enter($__internal_787185c94d19f4f19f69228b8bad5c3059ee52b2308c50a899f785ec314e7e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "    ";
        if (((isset($context["purgeAdverts"]) ? $context["purgeAdverts"] : $this->getContext($context, "purgeAdverts")) != 0)) {
            // line 11
            echo "        <p>";
            echo twig_escape_filter($this->env, (isset($context["purgeAdverts"]) ? $context["purgeAdverts"] : $this->getContext($context, "purgeAdverts")), "html", null, true);
            echo " annonce(s) supprimé(s)</p>
    ";
        } else {
            // line 13
            echo "        <p>Pas d'annonces à purger !</p>
    ";
        }
        
        $__internal_787185c94d19f4f19f69228b8bad5c3059ee52b2308c50a899f785ec314e7e27->leave($__internal_787185c94d19f4f19f69228b8bad5c3059ee52b2308c50a899f785ec314e7e27_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:purger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Purger les annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/*     {% if purgeAdverts != 0 %}*/
/*         <p>{{ purgeAdverts }} annonce(s) supprimé(s)</p>*/
/*     {% else %}*/
/*         <p>Pas d'annonces à purger !</p>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
