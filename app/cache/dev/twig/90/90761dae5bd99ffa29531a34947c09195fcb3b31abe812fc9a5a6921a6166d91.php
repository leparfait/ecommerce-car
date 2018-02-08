<?php

/* ::Layout/layoutAdmin.html.twig */
class __TwigTemplate_81912518ee8da83699588c0b2432a344a9d11ef69626ed5d0de674aced1d766a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motCles' => array($this, 'block_motCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <meta name=\"keyWords\" content=\"";
        // line 6
        $this->displayBlock('motCles', $context, $blocks);
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        <link rel=\"stylesheet\" href=\" ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\" ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\" ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
          ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse  navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"index.php\">Administration</a>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 30
        $this->loadTemplate("::moduleUsed/navigationAdmin.html.twig", "::Layout/layoutAdmin.html.twig", 30)->display($context);
        // line 31
        echo "                <div class=\"span9\">
                 ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "                </div>
            </div>
        </div>
    <hr />
    <footer id=\"footer\" class=\"vspace20\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4\">
                    <p>&copy; Copyright ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Aurey</p>
                </div>
            </div>
        </div>
    </footer>
    ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        echo "\t
    <script src=\" ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\" ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/bootstrap.j"), "html", null, true);
        echo "\"></script>
    <script src=\" ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bundles/pages/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        echo "AureyShop!";
    }

    // line 6
    public function block_motCles($context, array $blocks = array())
    {
        echo " ";
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        echo " ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::Layout/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 46,  150 => 32,  145 => 12,  139 => 7,  133 => 6,  127 => 5,  119 => 49,  115 => 48,  111 => 47,  107 => 46,  99 => 41,  89 => 33,  87 => 32,  84 => 31,  82 => 30,  61 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block titre %}AureyShop!{% endblock %}</title>
        <meta name=\"keyWords\" content=\"{% block motCles %} {% endblock %}\" />
        <meta name=\"description\" content=\"{% block description %} {% endblock %}\" />
        <link rel=\"stylesheet\" href=\" {{ asset('css/bootstrap.css') }}\" />
        <link rel=\"stylesheet\" href=\" {{ asset('css/bootstrap-responsive.css') }}\" />
        <link rel=\"stylesheet\" href=\" {{ asset('css/style.css') }}\" />
        <link rel=\"stylesheet\" href=\" {{ asset('css/font-awesome.css') }}\" />
          {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse  navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"index.php\">Administration</a>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                {% include '::moduleUsed/navigationAdmin.html.twig' %}
                <div class=\"span9\">
                 {% block body %}{% endblock %}
                </div>
            </div>
        </div>
    <hr />
    <footer id=\"footer\" class=\"vspace20\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4\">
                    <p>&copy; Copyright {{ \"now\"|date('Y')}} - Aurey</p>
                </div>
            </div>
        </div>
    </footer>
    {% block javascripts %}{% endblock %}\t
    <script src=\" {{ asset('js/jquery-1.10.0.min.js') }}\"></script>
    <script src=\" {{ asset('js/bootstrap.j') }}\"></script>
    <script src=\" {{ asset('bundles/pages/ckeditor/ckeditor.js') }}\"></script>
    </body>
</html>
", "::Layout/layoutAdmin.html.twig", "C:\\wamp\\www\\e-commerce\\app/Resources\\views/Layout/layoutAdmin.html.twig");
    }
}
