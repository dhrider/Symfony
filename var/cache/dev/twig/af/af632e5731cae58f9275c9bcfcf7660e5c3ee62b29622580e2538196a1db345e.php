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
        $__internal_5f839b49ddac37a2a924d54dfacbaaf8a52ed93c67c230263d1aa24ffc7e39bb = $this->env->getExtension("native_profiler");
        $__internal_5f839b49ddac37a2a924d54dfacbaaf8a52ed93c67c230263d1aa24ffc7e39bb->enter($__internal_5f839b49ddac37a2a924d54dfacbaaf8a52ed93c67c230263d1aa24ffc7e39bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f839b49ddac37a2a924d54dfacbaaf8a52ed93c67c230263d1aa24ffc7e39bb->leave($__internal_5f839b49ddac37a2a924d54dfacbaaf8a52ed93c67c230263d1aa24ffc7e39bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b73c0de78762ea60109ce1ea87fcc1730f1b9d562ed0efbf4758652aa4b6a76 = $this->env->getExtension("native_profiler");
        $__internal_1b73c0de78762ea60109ce1ea87fcc1730f1b9d562ed0efbf4758652aa4b6a76->enter($__internal_1b73c0de78762ea60109ce1ea87fcc1730f1b9d562ed0efbf4758652aa4b6a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1b73c0de78762ea60109ce1ea87fcc1730f1b9d562ed0efbf4758652aa4b6a76->leave($__internal_1b73c0de78762ea60109ce1ea87fcc1730f1b9d562ed0efbf4758652aa4b6a76_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6afe2e54a1f5c1f922c12c721081bd975f222e07fb7ddaeb6722f40ded82867d = $this->env->getExtension("native_profiler");
        $__internal_6afe2e54a1f5c1f922c12c721081bd975f222e07fb7ddaeb6722f40ded82867d->enter($__internal_6afe2e54a1f5c1f922c12c721081bd975f222e07fb7ddaeb6722f40ded82867d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6afe2e54a1f5c1f922c12c721081bd975f222e07fb7ddaeb6722f40ded82867d->leave($__internal_6afe2e54a1f5c1f922c12c721081bd975f222e07fb7ddaeb6722f40ded82867d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f7180a525c9486eb326c5086dcc54f0445078d1cf05174838927580e323a848 = $this->env->getExtension("native_profiler");
        $__internal_7f7180a525c9486eb326c5086dcc54f0445078d1cf05174838927580e323a848->enter($__internal_7f7180a525c9486eb326c5086dcc54f0445078d1cf05174838927580e323a848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7f7180a525c9486eb326c5086dcc54f0445078d1cf05174838927580e323a848->leave($__internal_7f7180a525c9486eb326c5086dcc54f0445078d1cf05174838927580e323a848_prof);

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
