<?php

/* EcommerceBundle:Default/produits/layout:presentation.html.twig */
class __TwigTemplate_3142b706b07c7b427c4b667e9aa6fe2cb422557688a87c05e4c7d04bacec4dd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "EcommerceBundle:Default/produits/layout:presentation.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
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
    public function block_titre($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"span3\">
    ";
        // line 8
        $this->loadTemplate("::moduleUsed/navigation.html.twig", "EcommerceBundle:Default/produits/layout:presentation.html.twig", 8)->display($context);
        // line 9
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:panier:menu"), array());
        // line 10
        echo "</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span9\">
            <div class=\"row\">
                <div class=\"span5\">
                    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "path", array()))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "name", array()), "html", null, true);
        echo "\" width=\"470\" height=\"310\">
                </div>
                <div class=\"span4\">
                    <h4>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                    <h5>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categories", array()), "nom", array()), "html", null, true);
        echo "</h5>
                    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                    <h4>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension')->calculTva($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva", array()), "multiplicate", array())), "html", null, true);
        echo "€</h4>
                     ";
        // line 23
        if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()), array(), "array", true, true)) {
            // line 24
            echo "                        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
            echo "\" method=\"GET\">
                            <select name=\"qte\" class=\"span1\">
                                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 27
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                            </select>
                            <div>                           
                                 <button class=\"btn btn-primary\">Ajouter au panier</button>                           
                            </div>
                     ";
        } else {
            // line 34
            echo "                             <div>                           
                                 <a class=\"btn btn-primary\" href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
            echo "\">Acceder a votre panier</a>                           
                            </div>
                        </form>
                    ";
        }
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/produits/layout:presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  118 => 35,  115 => 34,  108 => 29,  97 => 27,  93 => 26,  87 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  61 => 16,  53 => 10,  50 => 9,  48 => 8,  45 => 7,  42 => 6,  36 => 4,  30 => 3,  11 => 1,);
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

    {% block titre %}{{ produit.nom}}{% endblock %}
    {% block description %}{{ produit.description }}{% endblock %}
    
{% block body %}
<div class=\"span3\">
    {% include '::moduleUsed/navigation.html.twig' %}
    {% render (controller( 'EcommerceBundle:panier:menu')) %}
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span9\">
            <div class=\"row\">
                <div class=\"span5\">
                    <img src=\"{{asset('uploads/' ~ produit.image.path) }}\" alt=\"{{ produit.image.name }}\" width=\"470\" height=\"310\">
                </div>
                <div class=\"span4\">
                    <h4>{{ produit.nom}}</h4>
                    <h5>{{ produit.categories.nom}}</h5>
                    <p>{{ produit.description }}</p>
                    <h4>{{ produit.prix |tva(produit.tva.multiplicate)}}€</h4>
                     {% if panier[produit.id] is not defined %}
                        <form action=\"{{ path('ajouter', {'id':produit.id} ) }}\" method=\"GET\">
                            <select name=\"qte\" class=\"span1\">
                                {% for i in 1..10 %}
                                    <option value=\"{{i}}\">{{i}}</option>
                                {% endfor %}
                            </select>
                            <div>                           
                                 <button class=\"btn btn-primary\">Ajouter au panier</button>                           
                            </div>
                     {% else %}
                             <div>                           
                                 <a class=\"btn btn-primary\" href=\"{{ path('panier') }}\">Acceder a votre panier</a>                           
                            </div>
                        </form>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "EcommerceBundle:Default/produits/layout:presentation.html.twig", "C:\\wamp\\www\\e-commerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/produits/layout/presentation.html.twig");
    }
}
