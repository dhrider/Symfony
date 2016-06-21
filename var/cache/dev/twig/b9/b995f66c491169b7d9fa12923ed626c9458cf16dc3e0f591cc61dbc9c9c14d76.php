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
        $__internal_8d501c225458270271fc5e05b00d1b1cb2c70bdb904c945859e2d36e65062cf4 = $this->env->getExtension("native_profiler");
        $__internal_8d501c225458270271fc5e05b00d1b1cb2c70bdb904c945859e2d36e65062cf4->enter($__internal_8d501c225458270271fc5e05b00d1b1cb2c70bdb904c945859e2d36e65062cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

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
        
        $__internal_8d501c225458270271fc5e05b00d1b1cb2c70bdb904c945859e2d36e65062cf4->leave($__internal_8d501c225458270271fc5e05b00d1b1cb2c70bdb904c945859e2d36e65062cf4_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_71d51d9331ff821b8937a0dc34d6b696cc82cda4f1e8e98b624623e720f91fa1 = $this->env->getExtension("native_profiler");
        $__internal_71d51d9331ff821b8937a0dc34d6b696cc82cda4f1e8e98b624623e720f91fa1->enter($__internal_71d51d9331ff821b8937a0dc34d6b696cc82cda4f1e8e98b624623e720f91fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_71d51d9331ff821b8937a0dc34d6b696cc82cda4f1e8e98b624623e720f91fa1->leave($__internal_71d51d9331ff821b8937a0dc34d6b696cc82cda4f1e8e98b624623e720f91fa1_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b52d0bb5e733180ac11590b98eaf7bdd842d86985ed438489724d5ece89412b = $this->env->getExtension("native_profiler");
        $__internal_5b52d0bb5e733180ac11590b98eaf7bdd842d86985ed438489724d5ece89412b->enter($__internal_5b52d0bb5e733180ac11590b98eaf7bdd842d86985ed438489724d5ece89412b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_5b52d0bb5e733180ac11590b98eaf7bdd842d86985ed438489724d5ece89412b->leave($__internal_5b52d0bb5e733180ac11590b98eaf7bdd842d86985ed438489724d5ece89412b_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_a255f7ef36a698f1d951ce51aca1ab1846957dcef45229a598abcce462482e0f = $this->env->getExtension("native_profiler");
        $__internal_a255f7ef36a698f1d951ce51aca1ab1846957dcef45229a598abcce462482e0f->enter($__internal_a255f7ef36a698f1d951ce51aca1ab1846957dcef45229a598abcce462482e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_a255f7ef36a698f1d951ce51aca1ab1846957dcef45229a598abcce462482e0f->leave($__internal_a255f7ef36a698f1d951ce51aca1ab1846957dcef45229a598abcce462482e0f_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_feac82de0dccfc566724f774c345bdba381e6624831ecaa15e946a44ac6f46fc = $this->env->getExtension("native_profiler");
        $__internal_feac82de0dccfc566724f774c345bdba381e6624831ecaa15e946a44ac6f46fc->enter($__internal_feac82de0dccfc566724f774c345bdba381e6624831ecaa15e946a44ac6f46fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_feac82de0dccfc566724f774c345bdba381e6624831ecaa15e946a44ac6f46fc->leave($__internal_feac82de0dccfc566724f774c345bdba381e6624831ecaa15e946a44ac6f46fc_prof);

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
