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
        $__internal_ec90155c13ed4d9ea965c5c864685eff16c40e114270d9a3171ea748e7b9ebd7 = $this->env->getExtension("native_profiler");
        $__internal_ec90155c13ed4d9ea965c5c864685eff16c40e114270d9a3171ea748e7b9ebd7->enter($__internal_ec90155c13ed4d9ea965c5c864685eff16c40e114270d9a3171ea748e7b9ebd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec90155c13ed4d9ea965c5c864685eff16c40e114270d9a3171ea748e7b9ebd7->leave($__internal_ec90155c13ed4d9ea965c5c864685eff16c40e114270d9a3171ea748e7b9ebd7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53cf16840db61ad5649c0ac4649c9b30ac3f3272fda1523bbe75e930504b5d52 = $this->env->getExtension("native_profiler");
        $__internal_53cf16840db61ad5649c0ac4649c9b30ac3f3272fda1523bbe75e930504b5d52->enter($__internal_53cf16840db61ad5649c0ac4649c9b30ac3f3272fda1523bbe75e930504b5d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_53cf16840db61ad5649c0ac4649c9b30ac3f3272fda1523bbe75e930504b5d52->leave($__internal_53cf16840db61ad5649c0ac4649c9b30ac3f3272fda1523bbe75e930504b5d52_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2456a2439fa52aae91062f18aa35d14ea33e4ea8a4d6665b6221984ade21e47d = $this->env->getExtension("native_profiler");
        $__internal_2456a2439fa52aae91062f18aa35d14ea33e4ea8a4d6665b6221984ade21e47d->enter($__internal_2456a2439fa52aae91062f18aa35d14ea33e4ea8a4d6665b6221984ade21e47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2456a2439fa52aae91062f18aa35d14ea33e4ea8a4d6665b6221984ade21e47d->leave($__internal_2456a2439fa52aae91062f18aa35d14ea33e4ea8a4d6665b6221984ade21e47d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_025f9c48e169bb055d6a26d09cadef0bbdf026b7a33728518afff1fdf4981f3c = $this->env->getExtension("native_profiler");
        $__internal_025f9c48e169bb055d6a26d09cadef0bbdf026b7a33728518afff1fdf4981f3c->enter($__internal_025f9c48e169bb055d6a26d09cadef0bbdf026b7a33728518afff1fdf4981f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_025f9c48e169bb055d6a26d09cadef0bbdf026b7a33728518afff1fdf4981f3c->leave($__internal_025f9c48e169bb055d6a26d09cadef0bbdf026b7a33728518afff1fdf4981f3c_prof);

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
