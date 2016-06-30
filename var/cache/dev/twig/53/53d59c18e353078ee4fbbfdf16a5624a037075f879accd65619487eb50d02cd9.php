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
        $__internal_dfa9e342f67327a61d764ee8a31bc0077ec92108b6608bb1f13739c7c61e27f8 = $this->env->getExtension("native_profiler");
        $__internal_dfa9e342f67327a61d764ee8a31bc0077ec92108b6608bb1f13739c7c61e27f8->enter($__internal_dfa9e342f67327a61d764ee8a31bc0077ec92108b6608bb1f13739c7c61e27f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfa9e342f67327a61d764ee8a31bc0077ec92108b6608bb1f13739c7c61e27f8->leave($__internal_dfa9e342f67327a61d764ee8a31bc0077ec92108b6608bb1f13739c7c61e27f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_832245ebee7a0fc8f76d41b2627888665633af14a34911fb495d55d87d5c9fe5 = $this->env->getExtension("native_profiler");
        $__internal_832245ebee7a0fc8f76d41b2627888665633af14a34911fb495d55d87d5c9fe5->enter($__internal_832245ebee7a0fc8f76d41b2627888665633af14a34911fb495d55d87d5c9fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_832245ebee7a0fc8f76d41b2627888665633af14a34911fb495d55d87d5c9fe5->leave($__internal_832245ebee7a0fc8f76d41b2627888665633af14a34911fb495d55d87d5c9fe5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd12bcf1a6ece14de224cd084301aaa015eee7bc5b42ac36a68b9cc000444c30 = $this->env->getExtension("native_profiler");
        $__internal_fd12bcf1a6ece14de224cd084301aaa015eee7bc5b42ac36a68b9cc000444c30->enter($__internal_fd12bcf1a6ece14de224cd084301aaa015eee7bc5b42ac36a68b9cc000444c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fd12bcf1a6ece14de224cd084301aaa015eee7bc5b42ac36a68b9cc000444c30->leave($__internal_fd12bcf1a6ece14de224cd084301aaa015eee7bc5b42ac36a68b9cc000444c30_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_b73b176d6536988f4aaa7dc29e5dabd16c8c7230846ff08eb86b9b8a924e0cf0 = $this->env->getExtension("native_profiler");
        $__internal_b73b176d6536988f4aaa7dc29e5dabd16c8c7230846ff08eb86b9b8a924e0cf0->enter($__internal_b73b176d6536988f4aaa7dc29e5dabd16c8c7230846ff08eb86b9b8a924e0cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_b73b176d6536988f4aaa7dc29e5dabd16c8c7230846ff08eb86b9b8a924e0cf0->leave($__internal_b73b176d6536988f4aaa7dc29e5dabd16c8c7230846ff08eb86b9b8a924e0cf0_prof);

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
