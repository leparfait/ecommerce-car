<?php

/* ::Layout/layout.html.twig */
class __TwigTemplate_a6115e8fbbc045b482805f195a7e87da714e6bcc4bb2f5f38358e33007973673 extends Twig_Template
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
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <div class=\"navbar navbar-inverse navbar-fixed-top\" style=\"background-color: #F9E60D\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <img class=\"brand\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\"ss alt=\"\" >
                <a class=\"brand\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">Aurey-shop</a>
                <div class=\"nav-collapse collapse\">
                    ";
        // line 27
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:produits:recherche"), array());
        // line 28
        echo "                </div>
            </div>
        </div>
    </div>    
";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "<hr />

<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    ";
        // line 41
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PagesBundle:Page:menu"), array());
        // line 42
        echo "                    <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">CGV</a>
                    <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">Mentions légales</a>
                </ul>
            </div> 

            <div class=\"span4\">
                <h4>Notre entrepôt</h4>
                <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
            </div>

            <div class=\"span2\">
                <h4>Nous contacter</h4>
                <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
            </div>
        </div>

        <div class=\"row\">
            <div>
                <p>&copy; Copyright ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Aurey</p>
            </div>
        </div>
    </div>
</footer>
";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        echo "\t
<script src=\" ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/main.js"), "html", null, true);
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

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::Layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 66,  195 => 32,  190 => 12,  184 => 7,  178 => 6,  172 => 5,  164 => 69,  160 => 68,  156 => 67,  152 => 66,  144 => 61,  135 => 55,  131 => 54,  123 => 49,  114 => 43,  109 => 42,  107 => 41,  97 => 33,  95 => 32,  89 => 28,  87 => 27,  82 => 25,  76 => 24,  61 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
    <div class=\"navbar navbar-inverse navbar-fixed-top\" style=\"background-color: #F9E60D\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <img class=\"brand\" src=\"{{asset('img/') }}\" href=\"{{path('produits')}}\"ss alt=\"\" >
                <a class=\"brand\" href=\"{{path('produits')}}\">Aurey-shop</a>
                <div class=\"nav-collapse collapse\">
                    {% render(controller('EcommerceBundle:produits:recherche'))%}
                </div>
            </div>
        </div>
    </div>    
{% block body %}{% endblock %}
<hr />

<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    {% render(controller('PagesBundle:Page:menu'))%}
                    <li><a href=\"{{path('produits')}}\">CGV</a>
                    <li><a href=\"{{path('produits')}}\">Mentions légales</a>
                </ul>
            </div> 

            <div class=\"span4\">
                <h4>Notre entrepôt</h4>
                <p><i class=\"icon-map-marker\"></i>&nbsp;{{ adresse }}</p>
            </div>

            <div class=\"span2\">
                <h4>Nous contacter</h4>
                <p><i class=\"icon-phone\"></i>&nbsp;Tel: {{ telephone }}</p>
                <p><i class=\"icon-print\"></i>&nbsp;Fax: {{ fax }}</p>
            </div>
        </div>

        <div class=\"row\">
            <div>
                <p>&copy; Copyright {{ \"now\"|date('Y')}} - Aurey</p>
            </div>
        </div>
    </div>
</footer>
{% block javascripts %}{% endblock %}\t
<script src=\" {{ asset('js/jquery-1.10.0.min.js') }}\"></script>
<script src=\" {{ asset('js/bootstrap.js') }}\"></script>
<script src=\" {{ asset('js/main.js') }}\"></script>
</body>
</html>
", "::Layout/layout.html.twig", "C:\\wamp\\www\\e-commerce\\app/Resources\\views/Layout/layout.html.twig");
    }
}
