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
        $__internal_6816eb73a6fd1a5855b498a6fb8a19998e06f0c35baf653cc75681bb17359368 = $this->env->getExtension("native_profiler");
        $__internal_6816eb73a6fd1a5855b498a6fb8a19998e06f0c35baf653cc75681bb17359368->enter($__internal_6816eb73a6fd1a5855b498a6fb8a19998e06f0c35baf653cc75681bb17359368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6816eb73a6fd1a5855b498a6fb8a19998e06f0c35baf653cc75681bb17359368->leave($__internal_6816eb73a6fd1a5855b498a6fb8a19998e06f0c35baf653cc75681bb17359368_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c27e436bd4e966c46d0915f233af7974bdecfd85879c6cfedaa8f6600f0c5921 = $this->env->getExtension("native_profiler");
        $__internal_c27e436bd4e966c46d0915f233af7974bdecfd85879c6cfedaa8f6600f0c5921->enter($__internal_c27e436bd4e966c46d0915f233af7974bdecfd85879c6cfedaa8f6600f0c5921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c27e436bd4e966c46d0915f233af7974bdecfd85879c6cfedaa8f6600f0c5921->leave($__internal_c27e436bd4e966c46d0915f233af7974bdecfd85879c6cfedaa8f6600f0c5921_prof);

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
