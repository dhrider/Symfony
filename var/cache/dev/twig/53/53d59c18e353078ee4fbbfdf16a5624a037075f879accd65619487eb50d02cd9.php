<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_3c3e139f00253c458817f195c8beea13d4b6cbe8a5e3a2097ba48fece400e9bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afc0f889f1f47d49200020624339d49e31eb350ac4cae3e6a1a3f34d325b0d2b = $this->env->getExtension("native_profiler");
        $__internal_afc0f889f1f47d49200020624339d49e31eb350ac4cae3e6a1a3f34d325b0d2b->enter($__internal_afc0f889f1f47d49200020624339d49e31eb350ac4cae3e6a1a3f34d325b0d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afc0f889f1f47d49200020624339d49e31eb350ac4cae3e6a1a3f34d325b0d2b->leave($__internal_afc0f889f1f47d49200020624339d49e31eb350ac4cae3e6a1a3f34d325b0d2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_120380206e76ed714c924ca5e32c1b43cfcb7d857d963cacca87be27fb895a38 = $this->env->getExtension("native_profiler");
        $__internal_120380206e76ed714c924ca5e32c1b43cfcb7d857d963cacca87be27fb895a38->enter($__internal_120380206e76ed714c924ca5e32c1b43cfcb7d857d963cacca87be27fb895a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_120380206e76ed714c924ca5e32c1b43cfcb7d857d963cacca87be27fb895a38->leave($__internal_120380206e76ed714c924ca5e32c1b43cfcb7d857d963cacca87be27fb895a38_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c465ec98653dc59ef422109420cadc3ee2f6ade3e587e7dc4b2ca307abaabd5 = $this->env->getExtension("native_profiler");
        $__internal_5c465ec98653dc59ef422109420cadc3ee2f6ade3e587e7dc4b2ca307abaabd5->enter($__internal_5c465ec98653dc59ef422109420cadc3ee2f6ade3e587e7dc4b2ca307abaabd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_5c465ec98653dc59ef422109420cadc3ee2f6ade3e587e7dc4b2ca307abaabd5->leave($__internal_5c465ec98653dc59ef422109420cadc3ee2f6ade3e587e7dc4b2ca307abaabd5_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_322ec94d3be152b5a232e2f825573e225d5348c23563f43b5d4a3dc703552acc = $this->env->getExtension("native_profiler");
        $__internal_322ec94d3be152b5a232e2f825573e225d5348c23563f43b5d4a3dc703552acc->enter($__internal_322ec94d3be152b5a232e2f825573e225d5348c23563f43b5d4a3dc703552acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_322ec94d3be152b5a232e2f825573e225d5348c23563f43b5d4a3dc703552acc->leave($__internal_322ec94d3be152b5a232e2f825573e225d5348c23563f43b5d4a3dc703552acc_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
