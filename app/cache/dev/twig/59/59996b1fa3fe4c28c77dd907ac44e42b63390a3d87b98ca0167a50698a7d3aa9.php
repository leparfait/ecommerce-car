<?php

/* EcommerceBundle:Default/categories/layout:produits.html.twig */
class __TwigTemplate_8b988e933a9f35af8c2b8ac999d03268515a650d86d1e3c99ff127e6cd2930b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "EcommerceBundle:Default/categories/layout:produits.html.twig", 1);
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
        $this->loadTemplate("::moduleUsed/navigation.html.twig", "EcommerceBundle:Default/categories/layout:produits.html.twig", 7)->display($context);
        // line 8
        echo "       </div>
        <div class=\"span9\">

            <ul class=\"thumbnails\">
             ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/holder.jpg"), "html", null, true);
            echo "\" alt=\"Pcduchat\" width=\"300\" height=\"300\">
                        <div class=\"caption\">
                            <h4>Thumbnail label</h4>
                            <p>100,00 €</p>
                            <a class=\"btn btn-primary\" href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
            echo "\">Plus d'infos</a>
                            <a class=\"btn btn-success\" href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
            echo "\">Ajouter au panier</a>
                        </div>
                    </div>
                </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "             <div class=\"pagination\">
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
        </div>
     </div>
   </div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/categories/layout:produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  63 => 20,  59 => 19,  52 => 15,  48 => 13,  44 => 12,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
       </div>
        <div class=\"span9\">

            <ul class=\"thumbnails\">
             {% for i in 0..10 %}
                <li class=\"span3\">
                    <div class=\"thumbnail\">
                        <img src=\"{{asset('img/holder.jpg') }}\" alt=\"Pcduchat\" width=\"300\" height=\"300\">
                        <div class=\"caption\">
                            <h4>Thumbnail label</h4>
                            <p>100,00 €</p>
                            <a class=\"btn btn-primary\" href=\"{{ path('presentation')}}\">Plus d'infos</a>
                            <a class=\"btn btn-success\" href=\"{{ path('panier')}}\">Ajouter au panier</a>
                        </div>
                    </div>
                </li>
              {% endfor %}
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
        </div>
     </div>
   </div>
{% endblock %}", "EcommerceBundle:Default/categories/layout:produits.html.twig", "C:\\wamp\\www\\e-commerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/categories/layout/produits.html.twig");
    }
}
