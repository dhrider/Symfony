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
        $__internal_1aa611b20dacc59a35e647d916405c3494f5d6d82d90f98ed6fc70e686927c68 = $this->env->getExtension("native_profiler");
        $__internal_1aa611b20dacc59a35e647d916405c3494f5d6d82d90f98ed6fc70e686927c68->enter($__internal_1aa611b20dacc59a35e647d916405c3494f5d6d82d90f98ed6fc70e686927c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aa611b20dacc59a35e647d916405c3494f5d6d82d90f98ed6fc70e686927c68->leave($__internal_1aa611b20dacc59a35e647d916405c3494f5d6d82d90f98ed6fc70e686927c68_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1b002e13aa94ea4e81cad6f8bb1f5d1a40663ae11331e29e489abdb18975acf = $this->env->getExtension("native_profiler");
        $__internal_f1b002e13aa94ea4e81cad6f8bb1f5d1a40663ae11331e29e489abdb18975acf->enter($__internal_f1b002e13aa94ea4e81cad6f8bb1f5d1a40663ae11331e29e489abdb18975acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f1b002e13aa94ea4e81cad6f8bb1f5d1a40663ae11331e29e489abdb18975acf->leave($__internal_f1b002e13aa94ea4e81cad6f8bb1f5d1a40663ae11331e29e489abdb18975acf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e39811aea9059feb9f8024782b502b08ab8a0ee704d64e13fab4954bf5dad65 = $this->env->getExtension("native_profiler");
        $__internal_3e39811aea9059feb9f8024782b502b08ab8a0ee704d64e13fab4954bf5dad65->enter($__internal_3e39811aea9059feb9f8024782b502b08ab8a0ee704d64e13fab4954bf5dad65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3e39811aea9059feb9f8024782b502b08ab8a0ee704d64e13fab4954bf5dad65->leave($__internal_3e39811aea9059feb9f8024782b502b08ab8a0ee704d64e13fab4954bf5dad65_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_d342c978d85ebf23640e48c656409f4cc82fe9fb2cc90ac95d646ad641b1a104 = $this->env->getExtension("native_profiler");
        $__internal_d342c978d85ebf23640e48c656409f4cc82fe9fb2cc90ac95d646ad641b1a104->enter($__internal_d342c978d85ebf23640e48c656409f4cc82fe9fb2cc90ac95d646ad641b1a104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_d342c978d85ebf23640e48c656409f4cc82fe9fb2cc90ac95d646ad641b1a104->leave($__internal_d342c978d85ebf23640e48c656409f4cc82fe9fb2cc90ac95d646ad641b1a104_prof);

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
