<?php

/* EcommerceBundle:Default/panier/layout:panier.html.twig */
class __TwigTemplate_c42b2459cf6549153023d8a2f778e7f34cf5a9b95793ddfbbe5e397533a238af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "EcommerceBundle:Default/panier/layout:panier.html.twig", 1);
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
        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 8
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"span3\">
        ";
        // line 12
        $this->loadTemplate("::moduleUsed/navigation.html.twig", "EcommerceBundle:Default/panier/layout:panier.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span9\">
                
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                <h2>Votre panier</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 36
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 37
            echo "                                <tr>
                                    <td colspan=4><center>Vous n'avez aucun produit dans votre panier</center></td>
                                </tr>
                            ";
        }
        // line 41
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 42
            echo "                           <tr>
                              <form action=\" ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                          ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 48
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                                        </select>&nbsp;     
                                    </td>
                                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "€</td>
                                    <td>";
            // line 53
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo "€</td>
                                    <td><a class=\"btn btn-danger\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">supprimer</a></td>
                                </form>
                            </tr>
                            ";
            // line 57
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 58
            echo "                            ";
            $context["totalTTC"] = $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension')->calculTva(((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array()));
            // line 59
            echo "                            ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())), array(), "array") + $this->env->getExtension('Ecommerce\EcommerceBundle\Twig\Extension\MontantTvaExtension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())))));
            echo "  
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </tbody>
                    </table>
                </form>
                ";
        // line 64
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 65
            echo "                    <dl class=\"dl-horizontal pull-right\">
                        <dt>Total HT :</dt><dd>";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo " €</dd>
                        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 68
                echo "                         <dt>TVA ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ":</dt><dd>";
                echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
                echo " €</dd>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                        <dt>Total:</dt><dd>";
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
            echo " €</dd>
                    </dl>
                    <div class=\"clearfix\"></div>
                    <a href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                ";
        }
        // line 75
        echo "                <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/panier/layout:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 75,  204 => 73,  197 => 70,  186 => 68,  182 => 67,  178 => 66,  175 => 65,  173 => 64,  168 => 61,  159 => 59,  156 => 58,  154 => 57,  148 => 54,  144 => 53,  140 => 52,  136 => 50,  121 => 48,  117 => 47,  111 => 44,  107 => 43,  104 => 42,  99 => 41,  93 => 37,  91 => 36,  76 => 23,  67 => 20,  64 => 19,  60 => 18,  53 => 13,  51 => 12,  48 => 11,  45 => 10,  41 => 1,  35 => 8,  31 => 7,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}

 {% set totalHT = 0 %}
 {% set totalTTC = 0 %}
 {% set refTva = {} %}
 
 {% for produit in produits %}
     {% set refTva = refTva|merge({('%'~produit.tva.valeur): 0}) %}  
 {% endfor %}
{% block body %}
    <div class=\"span3\">
        {% include '::moduleUsed/navigation.html.twig' %}
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span9\">
                
                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"alert alert-success\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}
                <h2>Votre panier</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% if produits|length == 0%}
                                <tr>
                                    <td colspan=4><center>Vous n'avez aucun produit dans votre panier</center></td>
                                </tr>
                            {% endif %}
                          {% for produit in produits %}
                           <tr>
                              <form action=\" {{path('ajouter',{'id':produit.id}) }}\" method=\"get\">
                                    <td>{{ produit.nom}}</td>
                                    <td>
                                        <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                          {% for i in 1..10%}
                                            <option value=\"{{ i }}\" {% if i == panier[produit.id] %} selected=\"selected\" {%endif%}>{{ i }}</option>
                                           {% endfor %}
                                        </select>&nbsp;     
                                    </td>
                                    <td>{{ produit.prix}}€</td>
                                    <td>{{ produit.prix * panier[produit.id]}}€</td>
                                    <td><a class=\"btn btn-danger\" href=\"{{ path('supprimer',{'id':produit.id} )}}\">supprimer</a></td>
                                </form>
                            </tr>
                            {% set totalHT = (totalHT + produit.prix * panier[produit.id]) %}
                            {% set totalTTC = (totalTTC + produit.prix * panier[produit.id])|tva(produit.tva.multiplicate) %}
                            {% set refTva = refTva|merge({('%' ~produit.tva.valeur): refTva['%' ~produit.tva.valeur] + (produit.prix * panier[produit.id])|montantTva(produit.tva.multiplicate) }) %}  
                          {% endfor %}
                        </tbody>
                    </table>
                </form>
                {% if produits|length != 0%}
                    <dl class=\"dl-horizontal pull-right\">
                        <dt>Total HT :</dt><dd>{{ totalHT }} €</dd>
                        {% for key,tva in refTva %}
                         <dt>TVA {{ key }}:</dt><dd>{{ tva }} €</dd>
                        {% endfor %}
                        <dt>Total:</dt><dd>{{ totalTTC }} €</dd>
                    </dl>
                    <div class=\"clearfix\"></div>
                    <a href=\"{{ path('livraison') }}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                {% endif %}
                <a href=\"{{ path('produits') }}\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>
{% endblock %}", "EcommerceBundle:Default/panier/layout:panier.html.twig", "C:\\wamp\\www\\e-commerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/panier.html.twig");
    }
}
