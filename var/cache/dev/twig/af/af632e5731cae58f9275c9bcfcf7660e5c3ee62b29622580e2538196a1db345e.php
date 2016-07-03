<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bd3a90158ee19709bbfa011a9bdb7a1fe433e526f7c54301d9ba8baf56bf4144 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_232d9f592e2b25406fd84bcf6e38c7023d595b349ef56b97501c4de2463a8b07 = $this->env->getExtension("native_profiler");
        $__internal_232d9f592e2b25406fd84bcf6e38c7023d595b349ef56b97501c4de2463a8b07->enter($__internal_232d9f592e2b25406fd84bcf6e38c7023d595b349ef56b97501c4de2463a8b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_232d9f592e2b25406fd84bcf6e38c7023d595b349ef56b97501c4de2463a8b07->leave($__internal_232d9f592e2b25406fd84bcf6e38c7023d595b349ef56b97501c4de2463a8b07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_392d7b508e3c363e8478b0917f76334290802d5bc65f49c0308faeccdc3c31fd = $this->env->getExtension("native_profiler");
        $__internal_392d7b508e3c363e8478b0917f76334290802d5bc65f49c0308faeccdc3c31fd->enter($__internal_392d7b508e3c363e8478b0917f76334290802d5bc65f49c0308faeccdc3c31fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_392d7b508e3c363e8478b0917f76334290802d5bc65f49c0308faeccdc3c31fd->leave($__internal_392d7b508e3c363e8478b0917f76334290802d5bc65f49c0308faeccdc3c31fd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_56d76d3c4e653cf66fa9e24874ac05ca310a7a0fa69681ce1a4b27fc22adc468 = $this->env->getExtension("native_profiler");
        $__internal_56d76d3c4e653cf66fa9e24874ac05ca310a7a0fa69681ce1a4b27fc22adc468->enter($__internal_56d76d3c4e653cf66fa9e24874ac05ca310a7a0fa69681ce1a4b27fc22adc468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_56d76d3c4e653cf66fa9e24874ac05ca310a7a0fa69681ce1a4b27fc22adc468->leave($__internal_56d76d3c4e653cf66fa9e24874ac05ca310a7a0fa69681ce1a4b27fc22adc468_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec59eb3b887d4a97469719ad4a9cd38234af98be8b8ba191cea7a77fd0c1ddb1 = $this->env->getExtension("native_profiler");
        $__internal_ec59eb3b887d4a97469719ad4a9cd38234af98be8b8ba191cea7a77fd0c1ddb1->enter($__internal_ec59eb3b887d4a97469719ad4a9cd38234af98be8b8ba191cea7a77fd0c1ddb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ec59eb3b887d4a97469719ad4a9cd38234af98be8b8ba191cea7a77fd0c1ddb1->leave($__internal_ec59eb3b887d4a97469719ad4a9cd38234af98be8b8ba191cea7a77fd0c1ddb1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
