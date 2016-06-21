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
        $__internal_de7c8223f27a7dcd86fabbb0a49534351407b5478320686b8348abd221f823cd = $this->env->getExtension("native_profiler");
        $__internal_de7c8223f27a7dcd86fabbb0a49534351407b5478320686b8348abd221f823cd->enter($__internal_de7c8223f27a7dcd86fabbb0a49534351407b5478320686b8348abd221f823cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de7c8223f27a7dcd86fabbb0a49534351407b5478320686b8348abd221f823cd->leave($__internal_de7c8223f27a7dcd86fabbb0a49534351407b5478320686b8348abd221f823cd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2c76298d6559ba40f5268e368b5b4a4cda96240d2b54f7c24c61ce7a4ad4cbd = $this->env->getExtension("native_profiler");
        $__internal_f2c76298d6559ba40f5268e368b5b4a4cda96240d2b54f7c24c61ce7a4ad4cbd->enter($__internal_f2c76298d6559ba40f5268e368b5b4a4cda96240d2b54f7c24c61ce7a4ad4cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f2c76298d6559ba40f5268e368b5b4a4cda96240d2b54f7c24c61ce7a4ad4cbd->leave($__internal_f2c76298d6559ba40f5268e368b5b4a4cda96240d2b54f7c24c61ce7a4ad4cbd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d528c10ed41cfeb4dbc3427e76a4f14bf6cf0739085dc31887e70d0d38fa48ad = $this->env->getExtension("native_profiler");
        $__internal_d528c10ed41cfeb4dbc3427e76a4f14bf6cf0739085dc31887e70d0d38fa48ad->enter($__internal_d528c10ed41cfeb4dbc3427e76a4f14bf6cf0739085dc31887e70d0d38fa48ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d528c10ed41cfeb4dbc3427e76a4f14bf6cf0739085dc31887e70d0d38fa48ad->leave($__internal_d528c10ed41cfeb4dbc3427e76a4f14bf6cf0739085dc31887e70d0d38fa48ad_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a4368268a4d8325628666e346ebe059c3dd24b1f21f777d9f26749241480c48d = $this->env->getExtension("native_profiler");
        $__internal_a4368268a4d8325628666e346ebe059c3dd24b1f21f777d9f26749241480c48d->enter($__internal_a4368268a4d8325628666e346ebe059c3dd24b1f21f777d9f26749241480c48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_a4368268a4d8325628666e346ebe059c3dd24b1f21f777d9f26749241480c48d->leave($__internal_a4368268a4d8325628666e346ebe059c3dd24b1f21f777d9f26749241480c48d_prof);

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
