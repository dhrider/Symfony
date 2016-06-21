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
        $__internal_c945d3ac9a2d7841164b5205fcf5c058743b4c89523f800017ab5f0c77c6d475 = $this->env->getExtension("native_profiler");
        $__internal_c945d3ac9a2d7841164b5205fcf5c058743b4c89523f800017ab5f0c77c6d475->enter($__internal_c945d3ac9a2d7841164b5205fcf5c058743b4c89523f800017ab5f0c77c6d475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:purger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c945d3ac9a2d7841164b5205fcf5c058743b4c89523f800017ab5f0c77c6d475->leave($__internal_c945d3ac9a2d7841164b5205fcf5c058743b4c89523f800017ab5f0c77c6d475_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34abbe874658603debaa9c7aa969149a6ed5f5ce0a91d3d8edd473cec748c63f = $this->env->getExtension("native_profiler");
        $__internal_34abbe874658603debaa9c7aa969149a6ed5f5ce0a91d3d8edd473cec748c63f->enter($__internal_34abbe874658603debaa9c7aa969149a6ed5f5ce0a91d3d8edd473cec748c63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Purger les annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_34abbe874658603debaa9c7aa969149a6ed5f5ce0a91d3d8edd473cec748c63f->leave($__internal_34abbe874658603debaa9c7aa969149a6ed5f5ce0a91d3d8edd473cec748c63f_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_ddc0afe9fd3bd7a0609df9306c9ca3d536a8900b0d9803c938f6a5ab12706107 = $this->env->getExtension("native_profiler");
        $__internal_ddc0afe9fd3bd7a0609df9306c9ca3d536a8900b0d9803c938f6a5ab12706107->enter($__internal_ddc0afe9fd3bd7a0609df9306c9ca3d536a8900b0d9803c938f6a5ab12706107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "    ";
        if ( !twig_test_empty((isset($context["purgeAdverts"]) ? $context["purgeAdverts"] : $this->getContext($context, "purgeAdverts")))) {
            // line 11
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["purgeAdverts"]) ? $context["purgeAdverts"] : $this->getContext($context, "purgeAdverts")));
            foreach ($context['_seq'] as $context["_key"] => $context["purgeAdvert"]) {
                // line 12
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["purgeAdvert"], "title", array()), "html", null, true);
                echo " nb d'applications : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["purgeAdvert"], "nbapplications", array()), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purgeAdvert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "        <p>Pas d'annonces à purger !</p>
    ";
        }
        // line 17
        echo "
";
        
        $__internal_ddc0afe9fd3bd7a0609df9306c9ca3d536a8900b0d9803c938f6a5ab12706107->leave($__internal_ddc0afe9fd3bd7a0609df9306c9ca3d536a8900b0d9803c938f6a5ab12706107_prof);

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
        return array (  83 => 17,  79 => 15,  76 => 14,  65 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
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
/*     {% if purgeAdverts is not empty %}*/
/*         {% for purgeAdvert in purgeAdverts %}*/
/*             <p>{{ purgeAdvert.title }} nb d'applications : {{ purgeAdvert.nbapplications }}</p>*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         <p>Pas d'annonces à purger !</p>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
