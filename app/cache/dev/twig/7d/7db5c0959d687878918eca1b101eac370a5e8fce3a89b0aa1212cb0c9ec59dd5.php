<?php

/* EcommerceBundle:Default/produits/layout:produits.html.twig */
class __TwigTemplate_ca97d1b4693321146836afd807e353aa635d5266d9a8ab988a415448abf3b7a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "EcommerceBundle:Default/produits/layout:produits.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
       <div class=\"span3\">
        ";
        // line 7
        $this->loadTemplate("::moduleUsed/navigation.html.twig", "EcommerceBundle:Default/produits/layout:produits.html.twig", 7)->display($context);
        // line 8
        echo "         ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 9
            echo "           ";
            $this->loadTemplate("UtilisateursBundle:Default:moduleUsed/utilisateursConnecte.html.twig", "EcommerceBundle:Default/produits/layout:produits.html.twig", 9)->display($context);
            // line 10
            echo "         ";
        } else {
            // line 11
            echo "            ";
            $this->loadTemplate("UtilisateursBundle:Default:moduleUsed/utilisateurs.html.twig", "EcommerceBundle:Default/produits/layout:produits.html.twig", 11)->display($context);
            // line 12
            echo "         ";
        }
        // line 13
        echo "         ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:panier:menu"), array());
        // line 14
        echo "       </div>
        <div class=\"span9\">
           ";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 17
            echo "             <ul class=\"thumbnails\">
              ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 19
                echo "                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "name", array()), "html", null, true);
                echo "\" width=\"300\" height=\"250\">
                        <div class=\"caption\">
                            <h4>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h4>
                            <p>";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo " €</p>
                             <a class=\"btn btn-primary\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                            ";
                // line 26
                if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true)) {
                    // line 27
                    echo "                             <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\">Ajouter au panier</a>
                            ";
                }
                // line 29
                echo "                        </div>
                    </div>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "              </ul>
             <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>
           ";
        } else {
            // line 46
            echo "               <h2>Aucun produit</h2>
           ";
        }
        // line 47
        echo "   
        </div>
     </div>
   </div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/produits/layout:produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 47,  124 => 46,  109 => 33,  100 => 29,  94 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  73 => 21,  69 => 19,  65 => 18,  62 => 17,  60 => 16,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}\t

{% block body %}
<div class=\"container\">
    <div class=\"row\">
       <div class=\"span3\">
        {% include '::moduleUsed/navigation.html.twig' %}
         {% if is_granted('IS_AUTHENTICATED_FULLY') %}
           {% include 'UtilisateursBundle:Default:moduleUsed/utilisateursConnecte.html.twig' %}
         {% else %}
            {% include 'UtilisateursBundle:Default:moduleUsed/utilisateurs.html.twig' %}
         {% endif %}
         {% render (controller( 'EcommerceBundle:panier:menu')) %}
       </div>
        <div class=\"span9\">
           {% if produits|length != 0 %}
             <ul class=\"thumbnails\">
              {% for produit in produits %}
                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"{{asset('uploads/' ~ produit.image.path) }}\" alt=\"{{ produit.image.name }}\" width=\"300\" height=\"250\">
                        <div class=\"caption\">
                            <h4>{{ produit.nom}}</h4>
                            <p>{{ produit.prix |tva(produit.tva.multiplicate)}} €</p>
                             <a class=\"btn btn-primary\" href=\"{{ path('presentation',{'id':produit.id} )}}\">Plus d'infos</a>
                            {% if panier[produit.id] is not defined %}
                             <a class=\"btn btn-success\" href=\"{{ path('ajouter', {'id':produit.id} ) }}\">Ajouter au panier</a>
                            {% endif %}
                        </div>
                    </div>
                </li>
              {% endfor %}
              </ul>
             <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>
           {% else%}
               <h2>Aucun produit</h2>
           {% endif%}   
        </div>
     </div>
   </div>
{% endblock %}", "EcommerceBundle:Default/produits/layout:produits.html.twig", "C:\\wamp\\www\\e-commerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/produits.html.twig");
    }
}
