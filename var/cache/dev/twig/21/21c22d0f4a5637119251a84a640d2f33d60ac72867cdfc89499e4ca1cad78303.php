<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_0521ee4f307f42d2868ac58a5a1104de1366b08270628e7d8e511960dee3475c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bb1944c5ca3eeb6f5ee4d24f736ae97a7cb353566043259fa1594644b0d0a7c = $this->env->getExtension("native_profiler");
        $__internal_7bb1944c5ca3eeb6f5ee4d24f736ae97a7cb353566043259fa1594644b0d0a7c->enter($__internal_7bb1944c5ca3eeb6f5ee4d24f736ae97a7cb353566043259fa1594644b0d0a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_7bb1944c5ca3eeb6f5ee4d24f736ae97a7cb353566043259fa1594644b0d0a7c->leave($__internal_7bb1944c5ca3eeb6f5ee4d24f736ae97a7cb353566043259fa1594644b0d0a7c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
