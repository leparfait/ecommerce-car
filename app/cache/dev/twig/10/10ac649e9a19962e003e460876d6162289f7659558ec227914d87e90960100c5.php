<?php

/* ::Layout/layout.html.twig */
class __TwigTemplate_07cba67482e826daccc0c12973b5e542627d3476bfa75dd74c4b81b1673f8802 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\"ss alt=\"\" >
                <a class=\"brand\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\">Aurey-shop</a>
                <div class=\"nav-collapse collapse\">
                    ";
        // line 28
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:produits:recherche"), array());
        // line 29
        echo "                </div>
            </div>
        </div>
    </div>    
";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "<hr />

<footer>
    <div class=\"container\">
        <div class=\"row footer-widgets\">

          <!-- Start Subscribe & Social Links Widget -->
          <div class=\"col-md-3 col-xs-12\">
            <div class=\"footer-widget mail-subscribe-widget\">
              <h4>Get in touch<span class=\"head-line\"></span></h4>
              <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
              <form class=\"subscribe\">
                <input type=\"text\" placeholder=\"mail@example.com\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Send\">
              </form>
            </div>
            <div class=\"footer-widget social-widget\">
              <h4>Suivez nous<span class=\"head-line\"></span></h4>
              <ul class=\"social-icons\">
                <li>
                  <a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                </li>
                <li>
                  <a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                </li>
                <li>
                  <a class=\"google\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                </li>
                <li>
                  <a class=\"linkdin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


          <!-- Start Twitter Widget -->
          <div class=\"col-md-3 col-xs-12\">
            <div class=\"footer-widget twitter-widget\">
              <h4>Twitter Feed<span class=\"head-line\"></span></h4>
              <ul>
                <li>
                  <p><a href=\"#\">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                  <span>28 February 2014</span>
                </li>
                <li>
                  <p><a href=\"#\">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.An Fusce eleifend aliquet nis application.</p>
                  <span>26 February 2014</span>
                </li>
                <li>
                  <p><a href=\"#\">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                  <span>28 February 2014</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Twitter Widget -->


          <!-- Start Flickr Widget -->
          <div class=\"col-md-3 col-xs-12\">
            <div class=\"footer-widget flickr-widget\">
              <h4><img src=\"images/footer-margo.png\" class=\"img-responsive\" alt=\"Footer Logo\" /></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              <ul>
                <li><span>Phone Number:</span> +01 234 567 890</li>
                <li><span>Email:</span> company@company.com</li>
                <li><span>Website:</span> www.yourdomain.com</li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->
       
        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class=\"copyright-section\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <p>&copy; 2017 AureyShop - All Rights Reserved <a href=\"#\">Groupeonana.com</a> </p>
            </div>
            <!-- .col-md-6 -->
            <div class=\"col-md-6\">
              <ul class=\"footer-nav\">
                  <li> <h4>Informations</h4>
                      <p> ";
        // line 124
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PagesBundle:Page:menu"), array());
        echo "</p></li>
                <li><h4>Notre entrepôt</h4>
                <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
                <p>&copy; Copyright ";
        // line 127
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Aurey</p></li>
                <li><h4>Nous contacter</h4>
                <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p></li>
              </ul>
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    </div>
</footer>\t
<script src=\" ";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 145
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

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 33
    public function block_body($context, array $blocks = array())
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
        return array (  265 => 33,  260 => 13,  254 => 7,  248 => 6,  242 => 5,  234 => 145,  230 => 144,  226 => 143,  210 => 130,  206 => 129,  201 => 127,  197 => 126,  192 => 124,  100 => 34,  98 => 33,  92 => 29,  90 => 28,  85 => 26,  79 => 25,  64 => 14,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
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
        <link rel=\"stylesheet\" href=\" {{ asset('css/font-awesome.min.css') }}\" />
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

<footer>
    <div class=\"container\">
        <div class=\"row footer-widgets\">

          <!-- Start Subscribe & Social Links Widget -->
          <div class=\"col-md-3 col-xs-12\">
            <div class=\"footer-widget mail-subscribe-widget\">
              <h4>Get in touch<span class=\"head-line\"></span></h4>
              <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
              <form class=\"subscribe\">
                <input type=\"text\" placeholder=\"mail@example.com\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Send\">
              </form>
            </div>
            <div class=\"footer-widget social-widget\">
              <h4>Suivez nous<span class=\"head-line\"></span></h4>
              <ul class=\"social-icons\">
                <li>
                  <a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                </li>
                <li>
                  <a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                </li>
                <li>
                  <a class=\"google\" href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                </li>
                <li>
                  <a class=\"linkdin\" href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


          <!-- Start Twitter Widget -->
          <div class=\"col-md-3 col-xs-12\">
            <div class=\"footer-widget twitter-widget\">
              <h4>Twitter Feed<span class=\"head-line\"></span></h4>
              <ul>
                <li>
                  <p><a href=\"#\">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                  <span>28 February 2014</span>
                </li>
                <li>
                  <p><a href=\"#\">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.An Fusce eleifend aliquet nis application.</p>
                  <span>26 February 2014</span>
                </li>
                <li>
                  <p><a href=\"#\">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                  <span>28 February 2014</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Twitter Widget -->


          <!-- Start Flickr Widget -->
          <div class=\"col-md-3 col-xs-12\">
            <div class=\"footer-widget flickr-widget\">
              <h4><img src=\"images/footer-margo.png\" class=\"img-responsive\" alt=\"Footer Logo\" /></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              <ul>
                <li><span>Phone Number:</span> +01 234 567 890</li>
                <li><span>Email:</span> company@company.com</li>
                <li><span>Website:</span> www.yourdomain.com</li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->
       
        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class=\"copyright-section\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <p>&copy; 2017 AureyShop - All Rights Reserved <a href=\"#\">Groupeonana.com</a> </p>
            </div>
            <!-- .col-md-6 -->
            <div class=\"col-md-6\">
              <ul class=\"footer-nav\">
                  <li> <h4>Informations</h4>
                      <p> {% render(controller('PagesBundle:Page:menu'))%}</p></li>
                <li><h4>Notre entrepôt</h4>
                <p><i class=\"icon-map-marker\"></i>&nbsp;{{ adresse }}</p>
                <p>&copy; Copyright {{ \"now\"|date('Y')}} - Aurey</p></li>
                <li><h4>Nous contacter</h4>
                <p><i class=\"icon-phone\"></i>&nbsp;Tel: {{ telephone }}</p>
                <p><i class=\"icon-print\"></i>&nbsp;Fax: {{ fax }}</p></li>
              </ul>
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    </div>
</footer>\t
<script src=\" {{ asset('js/jquery-1.10.0.min.js') }}\"></script>
<script src=\" {{ asset('js/bootstrap.js') }}\"></script>
<script src=\" {{ asset('js/main.js') }}\"></script>
</body>
</html>
", "::Layout/layout.html.twig", "C:\\wamp\\www\\e-commerce\\app/Resources\\views/Layout/layout.html.twig");
    }
}
