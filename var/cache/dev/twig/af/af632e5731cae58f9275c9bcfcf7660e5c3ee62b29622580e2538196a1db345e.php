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
        $__internal_19ec733919456a5749f4e5f782bd994429083ae1e0b3ab66233ab640f40be271 = $this->env->getExtension("native_profiler");
        $__internal_19ec733919456a5749f4e5f782bd994429083ae1e0b3ab66233ab640f40be271->enter($__internal_19ec733919456a5749f4e5f782bd994429083ae1e0b3ab66233ab640f40be271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19ec733919456a5749f4e5f782bd994429083ae1e0b3ab66233ab640f40be271->leave($__internal_19ec733919456a5749f4e5f782bd994429083ae1e0b3ab66233ab640f40be271_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcd0a865edcdd3eaf00d33727661f5f1b5cbe29b9930abcd69610d6f643829ab = $this->env->getExtension("native_profiler");
        $__internal_bcd0a865edcdd3eaf00d33727661f5f1b5cbe29b9930abcd69610d6f643829ab->enter($__internal_bcd0a865edcdd3eaf00d33727661f5f1b5cbe29b9930abcd69610d6f643829ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bcd0a865edcdd3eaf00d33727661f5f1b5cbe29b9930abcd69610d6f643829ab->leave($__internal_bcd0a865edcdd3eaf00d33727661f5f1b5cbe29b9930abcd69610d6f643829ab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f3df9de96563c1d586e5cf3b8bfb2bc7b28f70885d3972edb4f53dbd191e0b8 = $this->env->getExtension("native_profiler");
        $__internal_5f3df9de96563c1d586e5cf3b8bfb2bc7b28f70885d3972edb4f53dbd191e0b8->enter($__internal_5f3df9de96563c1d586e5cf3b8bfb2bc7b28f70885d3972edb4f53dbd191e0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5f3df9de96563c1d586e5cf3b8bfb2bc7b28f70885d3972edb4f53dbd191e0b8->leave($__internal_5f3df9de96563c1d586e5cf3b8bfb2bc7b28f70885d3972edb4f53dbd191e0b8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d924231c9240690c1d024e6319eade8bd271176c5f0d3bcce71033eaf7f8074d = $this->env->getExtension("native_profiler");
        $__internal_d924231c9240690c1d024e6319eade8bd271176c5f0d3bcce71033eaf7f8074d->enter($__internal_d924231c9240690c1d024e6319eade8bd271176c5f0d3bcce71033eaf7f8074d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d924231c9240690c1d024e6319eade8bd271176c5f0d3bcce71033eaf7f8074d->leave($__internal_d924231c9240690c1d024e6319eade8bd271176c5f0d3bcce71033eaf7f8074d_prof);

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
