<?php

/* EcommerceBundle:Default:panier/moduleUsed/menu.html.twig */
class __TwigTemplate_5be277385c58e00d4d2b2995333361a40a01838f3d0118714c5f7d376c444000 extends Twig_Template
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
        // line 1
        echo "    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Votre Panier</li>
            <li>
             <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">
               ";
        // line 6
        if (((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 0)) {
            // line 7
            echo "                Vous n'avez pas de produit dans votre panier
               ";
        } elseif ((        // line 8
(isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 1)) {
            // line 9
            echo "                 Vous avez ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), "html", null, true);
            echo " produit dans votre panier
               ";
        } else {
            // line 11
            echo "                 Vous avez ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), "html", null, true);
            echo " produits dans votre panier
               ";
        }
        // line 13
        echo "             </a>
            </li>
        </ul>
    </div>    ";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/moduleUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  42 => 11,  36 => 9,  34 => 8,  31 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Votre Panier</li>
            <li>
             <a href=\"{{ path('panier')}}\">
               {% if articles == 0 %}
                Vous n'avez pas de produit dans votre panier
               {% elseif articles == 1 %}
                 Vous avez {{ articles }} produit dans votre panier
               {% else %}
                 Vous avez {{ articles }} produits dans votre panier
               {% endif %}
             </a>
            </li>
        </ul>
    </div>    ", "EcommerceBundle:Default:panier/moduleUsed/menu.html.twig", "C:\\wamp\\www\\e-commerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/moduleUsed/menu.html.twig");
    }
}
