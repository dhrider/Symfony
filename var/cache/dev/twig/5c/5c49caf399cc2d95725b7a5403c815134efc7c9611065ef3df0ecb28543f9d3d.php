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
        $__internal_3fe2523d3d1c6147513cba0d92675fe0918f53ae18907ea5348036f9ac9c9198 = $this->env->getExtension("native_profiler");
        $__internal_3fe2523d3d1c6147513cba0d92675fe0918f53ae18907ea5348036f9ac9c9198->enter($__internal_3fe2523d3d1c6147513cba0d92675fe0918f53ae18907ea5348036f9ac9c9198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:purger.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fe2523d3d1c6147513cba0d92675fe0918f53ae18907ea5348036f9ac9c9198->leave($__internal_3fe2523d3d1c6147513cba0d92675fe0918f53ae18907ea5348036f9ac9c9198_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47323852a0d3318b6d7c411d978b30eec86de0d9329b999f07159b89a53b4381 = $this->env->getExtension("native_profiler");
        $__internal_47323852a0d3318b6d7c411d978b30eec86de0d9329b999f07159b89a53b4381->enter($__internal_47323852a0d3318b6d7c411d978b30eec86de0d9329b999f07159b89a53b4381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Purger les annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_47323852a0d3318b6d7c411d978b30eec86de0d9329b999f07159b89a53b4381->leave($__internal_47323852a0d3318b6d7c411d978b30eec86de0d9329b999f07159b89a53b4381_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8eaabe34930f2c2bb1e6ab6169b8e35395c94762ab02a59c9b431f0540d68b59 = $this->env->getExtension("native_profiler");
        $__internal_8eaabe34930f2c2bb1e6ab6169b8e35395c94762ab02a59c9b431f0540d68b59->enter($__internal_8eaabe34930f2c2bb1e6ab6169b8e35395c94762ab02a59c9b431f0540d68b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_8eaabe34930f2c2bb1e6ab6169b8e35395c94762ab02a59c9b431f0540d68b59->leave($__internal_8eaabe34930f2c2bb1e6ab6169b8e35395c94762ab02a59c9b431f0540d68b59_prof);

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
