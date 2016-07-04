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
        $__internal_fd7a8ec64afe4222d434687e463efbd214677bf990b3100004cc2a7ab724bccb = $this->env->getExtension("native_profiler");
        $__internal_fd7a8ec64afe4222d434687e463efbd214677bf990b3100004cc2a7ab724bccb->enter($__internal_fd7a8ec64afe4222d434687e463efbd214677bf990b3100004cc2a7ab724bccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd7a8ec64afe4222d434687e463efbd214677bf990b3100004cc2a7ab724bccb->leave($__internal_fd7a8ec64afe4222d434687e463efbd214677bf990b3100004cc2a7ab724bccb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b04bef41efb665612e835afb1dc03d3054f5a27b1d42aa0f89dd8ea41036448d = $this->env->getExtension("native_profiler");
        $__internal_b04bef41efb665612e835afb1dc03d3054f5a27b1d42aa0f89dd8ea41036448d->enter($__internal_b04bef41efb665612e835afb1dc03d3054f5a27b1d42aa0f89dd8ea41036448d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b04bef41efb665612e835afb1dc03d3054f5a27b1d42aa0f89dd8ea41036448d->leave($__internal_b04bef41efb665612e835afb1dc03d3054f5a27b1d42aa0f89dd8ea41036448d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cabd35e7d256824bed6c260c7d2f76cffc5aa47006fc32d2415dc5cfc66ac55 = $this->env->getExtension("native_profiler");
        $__internal_7cabd35e7d256824bed6c260c7d2f76cffc5aa47006fc32d2415dc5cfc66ac55->enter($__internal_7cabd35e7d256824bed6c260c7d2f76cffc5aa47006fc32d2415dc5cfc66ac55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7cabd35e7d256824bed6c260c7d2f76cffc5aa47006fc32d2415dc5cfc66ac55->leave($__internal_7cabd35e7d256824bed6c260c7d2f76cffc5aa47006fc32d2415dc5cfc66ac55_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_4acca21377d82b78dbd8f02a3b83963214e44cdebec6c3b1ae968af94f020f89 = $this->env->getExtension("native_profiler");
        $__internal_4acca21377d82b78dbd8f02a3b83963214e44cdebec6c3b1ae968af94f020f89->enter($__internal_4acca21377d82b78dbd8f02a3b83963214e44cdebec6c3b1ae968af94f020f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_4acca21377d82b78dbd8f02a3b83963214e44cdebec6c3b1ae968af94f020f89->leave($__internal_4acca21377d82b78dbd8f02a3b83963214e44cdebec6c3b1ae968af94f020f89_prof);

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
