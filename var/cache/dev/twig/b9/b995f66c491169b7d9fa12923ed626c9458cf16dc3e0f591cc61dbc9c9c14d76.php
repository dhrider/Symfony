<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_af37245247bd483182c8d68f6161ff5bc537273d5f2c81f4e97b2efba388a516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c441a4ba654f0db7145d73a1adfb3eb0e01d11967e66adc8b54873e4cf14b18 = $this->env->getExtension("native_profiler");
        $__internal_6c441a4ba654f0db7145d73a1adfb3eb0e01d11967e66adc8b54873e4cf14b18->enter($__internal_6c441a4ba654f0db7145d73a1adfb3eb0e01d11967e66adc8b54873e4cf14b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
  </body>
</html>
";
        
        $__internal_6c441a4ba654f0db7145d73a1adfb3eb0e01d11967e66adc8b54873e4cf14b18->leave($__internal_6c441a4ba654f0db7145d73a1adfb3eb0e01d11967e66adc8b54873e4cf14b18_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_3419aa7f8420823181e83b9ce62cf81570e6b9bd0737528eba857a95164d2e9a = $this->env->getExtension("native_profiler");
        $__internal_3419aa7f8420823181e83b9ce62cf81570e6b9bd0737528eba857a95164d2e9a->enter($__internal_3419aa7f8420823181e83b9ce62cf81570e6b9bd0737528eba857a95164d2e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_3419aa7f8420823181e83b9ce62cf81570e6b9bd0737528eba857a95164d2e9a->leave($__internal_3419aa7f8420823181e83b9ce62cf81570e6b9bd0737528eba857a95164d2e9a_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_04340e55067a4ca3b1674a9b37f4c0d2c68e3e570a3904d8ba6db3790bb7bf53 = $this->env->getExtension("native_profiler");
        $__internal_04340e55067a4ca3b1674a9b37f4c0d2c68e3e570a3904d8ba6db3790bb7bf53->enter($__internal_04340e55067a4ca3b1674a9b37f4c0d2c68e3e570a3904d8ba6db3790bb7bf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_04340e55067a4ca3b1674a9b37f4c0d2c68e3e570a3904d8ba6db3790bb7bf53->leave($__internal_04340e55067a4ca3b1674a9b37f4c0d2c68e3e570a3904d8ba6db3790bb7bf53_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6f5a54978ec45642bf0cbb14d36542739b308f314082908a846c5917e6e1260 = $this->env->getExtension("native_profiler");
        $__internal_f6f5a54978ec45642bf0cbb14d36542739b308f314082908a846c5917e6e1260->enter($__internal_f6f5a54978ec45642bf0cbb14d36542739b308f314082908a846c5917e6e1260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_f6f5a54978ec45642bf0cbb14d36542739b308f314082908a846c5917e6e1260->leave($__internal_f6f5a54978ec45642bf0cbb14d36542739b308f314082908a846c5917e6e1260_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f786d2d36383f5e4ae55897f70549a17375da1c805d689cb0281feba1535f17 = $this->env->getExtension("native_profiler");
        $__internal_0f786d2d36383f5e4ae55897f70549a17375da1c805d689cb0281feba1535f17->enter($__internal_0f786d2d36383f5e4ae55897f70549a17375da1c805d689cb0281feba1535f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_0f786d2d36383f5e4ae55897f70549a17375da1c805d689cb0281feba1535f17->leave($__internal_0f786d2d36383f5e4ae55897f70549a17375da1c805d689cb0281feba1535f17_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 57,  157 => 56,  151 => 55,  144 => 44,  138 => 43,  130 => 13,  128 => 12,  122 => 11,  110 => 9,  100 => 60,  98 => 55,  91 => 51,  83 => 45,  81 => 43,  75 => 40,  68 => 36,  64 => 35,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# src/OC/CoreBundle/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*       {# On charge le CSS de bootstrap depuis le site directement #}*/
/*       <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*     {% endblock %}*/
/*   </head>*/
/* */
/*   <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Ma plateforme d'annonces</h1>*/
/*       <p>*/
/*         Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/*       </p>*/
/*       <p>*/
/*         <a class="btn btn-primary btn-lg" href="https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*           Participer au MOOC »*/
/*         </a>*/
/*       </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les annonces</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('oc_platform_home') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('oc_platform_add') }}">Ajouter une annonce</a></li>*/
/*         </ul>*/
/* */
/*         <h4>Dernières annonces</h4>*/
/*         {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
