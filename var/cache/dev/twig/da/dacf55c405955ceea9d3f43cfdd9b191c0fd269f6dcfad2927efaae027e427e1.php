<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_64f68d23d89bf4d46f74e1e78ba0780396f281c7dd19743cc9c36c3c2b03b0ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_970facc9e45011a7d8373137b19fa7307572d2a342968534c62e678a80ad787e = $this->env->getExtension("native_profiler");
        $__internal_970facc9e45011a7d8373137b19fa7307572d2a342968534c62e678a80ad787e->enter($__internal_970facc9e45011a7d8373137b19fa7307572d2a342968534c62e678a80ad787e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_970facc9e45011a7d8373137b19fa7307572d2a342968534c62e678a80ad787e->leave($__internal_970facc9e45011a7d8373137b19fa7307572d2a342968534c62e678a80ad787e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7056d974248aae5eb65b4b3dd35115d4af044c5a4e7d2c2381d4961412830d24 = $this->env->getExtension("native_profiler");
        $__internal_7056d974248aae5eb65b4b3dd35115d4af044c5a4e7d2c2381d4961412830d24->enter($__internal_7056d974248aae5eb65b4b3dd35115d4af044c5a4e7d2c2381d4961412830d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7056d974248aae5eb65b4b3dd35115d4af044c5a4e7d2c2381d4961412830d24->leave($__internal_7056d974248aae5eb65b4b3dd35115d4af044c5a4e7d2c2381d4961412830d24_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_1b5440a103614032050b35ad21758f9890d3f982d4bac28cfd532583940f2a61 = $this->env->getExtension("native_profiler");
        $__internal_1b5440a103614032050b35ad21758f9890d3f982d4bac28cfd532583940f2a61->enter($__internal_1b5440a103614032050b35ad21758f9890d3f982d4bac28cfd532583940f2a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <div style=\"float: left; margin-right: 1em;\">
    ";
        // line 13
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 14
            echo "      <img
              src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
              alt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\"
      />
    ";
        }
        // line 19
        echo "  </div>

  <h2>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  ";
        // line 28
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 29
            echo "    <p>
      Cette annonce est parue dans les catégories suivantes :
      ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 32
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 33
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </p>
  ";
        }
        // line 36
        echo "
  ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills"))) > 0)) {
            // line 38
            echo "    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 42
                echo "          <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "      </ul>
    </div>
  ";
        }
        // line 47
        echo "
  <p>
    <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_1b5440a103614032050b35ad21758f9890d3f982d4bac28cfd532583940f2a61->leave($__internal_1b5440a103614032050b35ad21758f9890d3f982d4bac28cfd532583940f2a61_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 57,  187 => 53,  180 => 49,  176 => 47,  171 => 44,  160 => 42,  156 => 41,  151 => 38,  149 => 37,  146 => 36,  142 => 34,  128 => 33,  122 => 32,  105 => 31,  101 => 29,  99 => 28,  93 => 25,  85 => 22,  81 => 21,  77 => 19,  71 => 16,  67 => 15,  64 => 14,  61 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <div style="float: left; margin-right: 1em;">*/
/*     {# On vérifie qu'une image soit bien associée à l'article #}*/
/*     {% if advert.image is not null %}*/
/*       <img*/
/*               src="{{ asset(advert.image.webPath) }}"*/
/*               alt="{{ advert.image.alt }}"*/
/*       />*/
/*     {% endif %}*/
/*   </div>*/
/* */
/*   <h2>{{ advert.title }}</h2>*/
/*   <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/*   <div class="well">*/
/*     {{ advert.content }}*/
/*   </div>*/
/* */
/*   {% if not advert.categories.empty %}*/
/*     <p>*/
/*       Cette annonce est parue dans les catégories suivantes :*/
/*       {% for category in advert.categories %}*/
/*         {{ category.name }}{% if not loop.last %}, {% endif %}*/
/*       {% endfor %}*/
/*     </p>*/
/*   {% endif %}*/
/* */
/*   {% if listAdvertSkills|length > 0 %}*/
/*     <div>*/
/*       Cette annonce requiert les compétences suivantes :*/
/*       <ul>*/
/*         {% for advertSkill in listAdvertSkills %}*/
/*           <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier l'annonce*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
