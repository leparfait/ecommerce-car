<?php

/* EcommerceBundle:Default/panier/layout:validation.html.twig */
class __TwigTemplate_32731844c1775573959a26f20bcfdc21cb02be92fdfdf70ca18765c0f66f0b1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "EcommerceBundle:Default/panier/layout:validation.html.twig", 1);
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
        echo "    <div class=\"span3\">
        ";
        // line 5
        $this->loadTemplate("::moduleUsed/navigation.html.twig", "EcommerceBundle:Default/panier/layout:validation.html.twig", 5)->display($context);
        // line 6
        echo "    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span9\">
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
                          ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 24
            echo "                           <tr>
                                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixHT", array()), "html", null, true);
            echo "€</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixHT", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo "€</td>
                                    <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facturesPDF", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-refresh\"></i>imprimer</a></td>
                            </tr>        
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </tbody>
                    </table>                                      
                        <dl class=\"dl-horizontal pull-right\">
                            <dt>Total HT :</dt><dd>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</dd>
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "tva", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 37
            echo "                             <dt>TVA ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ":</dt><dd>";
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " €</dd>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo " 
                            <dt>Total:</dt><dd>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " €</dd>
                        </dl>
                        <div class=\"span pull-left\">
                            <dl class=\"pull-left\"><h4>Adresse de livraison</h4></dl>
                            <dl>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo "</dl>
                            <dl>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</dl>
                            <dl>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "ville", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "pays", array()), "html", null, true);
        echo "</dl>
                        </div>
                        <div class=\"span pull-left\">
                            <dl class=\"pull-left\"><h4>Adresse de facturation</h4></dl>
                            <dl>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo "</dl>
                            <dl>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</dl>
                            <dl>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</dl>
                        </div>
                </form>
                    <div class=\"clearfix\"></div>
                    <form action=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validationCommande", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" >
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "token", array()), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"prixTTC\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixTTC", array()), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"date\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "date", array()), "dmhms"), "html", null, true);
        echo "\">
                        <button type=\"submit\" class=\"btn btn-success pull-right\">Payer</button>
                    </form>
                <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" class=\"btn btn-primary\">Retour</a>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/panier/layout:validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 61,  175 => 58,  171 => 57,  167 => 56,  163 => 55,  152 => 51,  148 => 50,  142 => 49,  131 => 45,  127 => 44,  121 => 43,  114 => 39,  111 => 38,  100 => 37,  96 => 36,  92 => 35,  87 => 32,  78 => 29,  74 => 28,  70 => 27,  66 => 26,  62 => 25,  59 => 24,  55 => 23,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
    <div class=\"span3\">
        {% include '::moduleUsed/navigation.html.twig' %}
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span9\">
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
                          {% for produit in commande.commande.produit %}
                           <tr>
                                    <td>{{ produit.reference}}</td>
                                    <td>{{ produit.quantite}}</td>
                                    <td>{{ produit.prixHT}}€</td>
                                    <td>{{ produit.prixHT * produit.quantite }}€</td>
                                    <td><a href=\"{{ path('facturesPDF',{'id':commande.id})}}\"><i class=\"icon-refresh\"></i>imprimer</a></td>
                            </tr>        
                          {% endfor %}
                        </tbody>
                    </table>                                      
                        <dl class=\"dl-horizontal pull-right\">
                            <dt>Total HT :</dt><dd>{{ commande.commande.prixHT }} €</dd>
                            {% for key,tva in commande.commande.tva %}
                             <dt>TVA {{ key }}:</dt><dd>{{ tva }} €</dd>
                            {% endfor %} 
                            <dt>Total:</dt><dd>{{ commande.commande.prixTTC }} €</dd>
                        </dl>
                        <div class=\"span pull-left\">
                            <dl class=\"pull-left\"><h4>Adresse de livraison</h4></dl>
                            <dl>{{ commande.commande.livraison.prenom }} {{ commande.commande.livraison.nom }}</dl>
                            <dl>{{ commande.commande.livraison.adresse }}</dl>
                            <dl>{{ commande.commande.livraison.cp }} {{ commande.commande.livraison.ville }}-{{ commande.commande.livraison.pays }}</dl>
                        </div>
                        <div class=\"span pull-left\">
                            <dl class=\"pull-left\"><h4>Adresse de facturation</h4></dl>
                            <dl>{{ commande.commande.facturation.prenom }} {{ commande.commande.facturation.nom }}</dl>
                            <dl>{{ commande.commande.facturation.adresse }}</dl>
                            <dl>{{ commande.commande.facturation.cp }} {{ commande.commande.facturation.ville }}-{{ commande.commande.facturation.pays }}</dl>
                        </div>
                </form>
                    <div class=\"clearfix\"></div>
                    <form action=\"{{ path('validationCommande',{'id':commande.id}) }}\" method=\"POST\" >
                        <input type=\"hidden\" name=\"token\" value=\"{{ commande.commande.token }}\">
                        <input type=\"hidden\" name=\"prixTTC\" value=\"{{ commande.commande.prixTTC }}\">
                        <input type=\"hidden\" name=\"date\" value=\"{{ commande.date|date('dmhms') }}\">
                        <button type=\"submit\" class=\"btn btn-success pull-right\">Payer</button>
                    </form>
                <a href=\"{{ path('livraison') }}\" class=\"btn btn-primary\">Retour</a>
            </div>

        </div>
    </div>
{% endblock %}

", "EcommerceBundle:Default/panier/layout:validation.html.twig", "C:\\wamp\\www\\e-commerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/validation.html.twig");
    }
}
