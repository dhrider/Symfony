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
        $__internal_961fd4e53b3b5fd8920e79b45f37ab58c65623da45960c027289e1e1fe8274be = $this->env->getExtension("native_profiler");
        $__internal_961fd4e53b3b5fd8920e79b45f37ab58c65623da45960c027289e1e1fe8274be->enter($__internal_961fd4e53b3b5fd8920e79b45f37ab58c65623da45960c027289e1e1fe8274be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:purger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_961fd4e53b3b5fd8920e79b45f37ab58c65623da45960c027289e1e1fe8274be->leave($__internal_961fd4e53b3b5fd8920e79b45f37ab58c65623da45960c027289e1e1fe8274be_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_99c39407ffd0516a17ad6aa9416bd6c294a58ef7f465b0b5111a839a4abf8af8 = $this->env->getExtension("native_profiler");
        $__internal_99c39407ffd0516a17ad6aa9416bd6c294a58ef7f465b0b5111a839a4abf8af8->enter($__internal_99c39407ffd0516a17ad6aa9416bd6c294a58ef7f465b0b5111a839a4abf8af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Purger les annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_99c39407ffd0516a17ad6aa9416bd6c294a58ef7f465b0b5111a839a4abf8af8->leave($__internal_99c39407ffd0516a17ad6aa9416bd6c294a58ef7f465b0b5111a839a4abf8af8_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a0f061298999655d0874a872a3582d72e386e0344af5754295fc4e2a2487ebc8 = $this->env->getExtension("native_profiler");
        $__internal_a0f061298999655d0874a872a3582d72e386e0344af5754295fc4e2a2487ebc8->enter($__internal_a0f061298999655d0874a872a3582d72e386e0344af5754295fc4e2a2487ebc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_a0f061298999655d0874a872a3582d72e386e0344af5754295fc4e2a2487ebc8->leave($__internal_a0f061298999655d0874a872a3582d72e386e0344af5754295fc4e2a2487ebc8_prof);

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
