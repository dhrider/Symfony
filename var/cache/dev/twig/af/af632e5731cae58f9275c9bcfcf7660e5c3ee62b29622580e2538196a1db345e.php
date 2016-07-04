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
        $__internal_b1c61a9d1c9a4c940226f218d116d4d92a888bf9fa659534bfc8f7f9a1f846f6 = $this->env->getExtension("native_profiler");
        $__internal_b1c61a9d1c9a4c940226f218d116d4d92a888bf9fa659534bfc8f7f9a1f846f6->enter($__internal_b1c61a9d1c9a4c940226f218d116d4d92a888bf9fa659534bfc8f7f9a1f846f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c61a9d1c9a4c940226f218d116d4d92a888bf9fa659534bfc8f7f9a1f846f6->leave($__internal_b1c61a9d1c9a4c940226f218d116d4d92a888bf9fa659534bfc8f7f9a1f846f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f56839183fe1e249e9f0a07d117a4b79770dfc960256e09d84b720f4827dc4ee = $this->env->getExtension("native_profiler");
        $__internal_f56839183fe1e249e9f0a07d117a4b79770dfc960256e09d84b720f4827dc4ee->enter($__internal_f56839183fe1e249e9f0a07d117a4b79770dfc960256e09d84b720f4827dc4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f56839183fe1e249e9f0a07d117a4b79770dfc960256e09d84b720f4827dc4ee->leave($__internal_f56839183fe1e249e9f0a07d117a4b79770dfc960256e09d84b720f4827dc4ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2f2db42bb6d6544f7ce1f9f0975a6f942049348b893f684f929f9a671a3e18a = $this->env->getExtension("native_profiler");
        $__internal_e2f2db42bb6d6544f7ce1f9f0975a6f942049348b893f684f929f9a671a3e18a->enter($__internal_e2f2db42bb6d6544f7ce1f9f0975a6f942049348b893f684f929f9a671a3e18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e2f2db42bb6d6544f7ce1f9f0975a6f942049348b893f684f929f9a671a3e18a->leave($__internal_e2f2db42bb6d6544f7ce1f9f0975a6f942049348b893f684f929f9a671a3e18a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffe666687c508d13e53561284b344e4575dc8d8fec9a935c72138ebb9890d5a8 = $this->env->getExtension("native_profiler");
        $__internal_ffe666687c508d13e53561284b344e4575dc8d8fec9a935c72138ebb9890d5a8->enter($__internal_ffe666687c508d13e53561284b344e4575dc8d8fec9a935c72138ebb9890d5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ffe666687c508d13e53561284b344e4575dc8d8fec9a935c72138ebb9890d5a8->leave($__internal_ffe666687c508d13e53561284b344e4575dc8d8fec9a935c72138ebb9890d5a8_prof);

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
