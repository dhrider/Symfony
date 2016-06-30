<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_921d62e331657d4701945976af91e050667ffdfdd1efed1c1f959d260b1f819a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34c01759450cacd2a4819edf5045717e908ad4bbb26d7431b2091bd02cd54810 = $this->env->getExtension("native_profiler");
        $__internal_34c01759450cacd2a4819edf5045717e908ad4bbb26d7431b2091bd02cd54810->enter($__internal_34c01759450cacd2a4819edf5045717e908ad4bbb26d7431b2091bd02cd54810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34c01759450cacd2a4819edf5045717e908ad4bbb26d7431b2091bd02cd54810->leave($__internal_34c01759450cacd2a4819edf5045717e908ad4bbb26d7431b2091bd02cd54810_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_be5a4ae2ec506e525ac76950b3f47c7ee65662732bce37bd2bf81310837b6ada = $this->env->getExtension("native_profiler");
        $__internal_be5a4ae2ec506e525ac76950b3f47c7ee65662732bce37bd2bf81310837b6ada->enter($__internal_be5a4ae2ec506e525ac76950b3f47c7ee65662732bce37bd2bf81310837b6ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_be5a4ae2ec506e525ac76950b3f47c7ee65662732bce37bd2bf81310837b6ada->leave($__internal_be5a4ae2ec506e525ac76950b3f47c7ee65662732bce37bd2bf81310837b6ada_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
