<?php

/* UtilisateursBundle:Default/layout:facture.html.twig */
class __TwigTemplate_0c28a17bb335e1d2b0ba9f1bd85ae2ad31d73d39897189cd763cb7c5fc6bbdef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "UtilisateursBundle:Default/layout:facture.html.twig", 1);
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
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">
               <div class=\"span3\">
                 ";
        // line 7
        $this->loadTemplate("::moduleUsed/navigation.html.twig", "UtilisateursBundle:Default/layout:facture.html.twig", 7)->display($context);
        // line 8
        echo "                 ";
        $this->loadTemplate("UtilisateursBundle:Default:moduleUsed/utilisateursConnecte.html.twig", "UtilisateursBundle:Default/layout:facture.html.twig", 8)->display($context);
        // line 9
        echo "                 ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:panier:menu"), array());
        // line 10
        echo "               </div>\t\t
\t        <div class=\"span9\">
                     ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "sucess"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "                        <div class=\"alert alert-success\"> 
                         ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "                        <div class=\"alert alert-error\"> 
                         ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    <h2>Factures</h2>
                    <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Date</th>
                                <th>Prix TTC</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures"))) == 0)) {
            // line 35
            echo "                            <tr>
                                <td colspan=\"4\"><center> Acune facture </center> </td>
                            </tr>
                            ";
        }
        // line 39
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 40
            echo "                            <tr>
                                <td>ref : ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "reference", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["facture"], "date", array()), "d/m/y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "commande", array()), "prixTTC", array()), "html", null, true);
            echo "€</td>
                                <td><a class=\"btn btn-info btn-mini\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facturesPDF", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-refresh\"></i>imprimer</a></td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                        </tbody>
                    </table>
                </form>
    
            </div>
\t\t
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default/layout:facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  123 => 44,  119 => 43,  115 => 42,  111 => 41,  108 => 40,  103 => 39,  97 => 35,  95 => 34,  81 => 22,  72 => 19,  69 => 18,  64 => 17,  55 => 14,  52 => 13,  48 => 12,  44 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row\">
               <div class=\"span3\">
                 {% include '::moduleUsed/navigation.html.twig' %}
                 {% include 'UtilisateursBundle:Default:moduleUsed/utilisateursConnecte.html.twig' %}
                 {% render(controller( 'EcommerceBundle:panier:menu')) %}
               </div>\t\t
\t        <div class=\"span9\">
                     {% for flashMessage in app.session.flashbag.get('sucess')%}
                        <div class=\"alert alert-success\"> 
                         {{ flashMessage }}
                        </div>
                    {% endfor %}
                    {% for flashMessage in app.session.flashbag.get('error')%}
                        <div class=\"alert alert-error\"> 
                         {{ flashMessage }}
                        </div>
                    {% endfor %}
                    <h2>Factures</h2>
                    <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Date</th>
                                <th>Prix TTC</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% if factures | length == 0 %}
                            <tr>
                                <td colspan=\"4\"><center> Acune facture </center> </td>
                            </tr>
                            {% endif %}
                            {% for facture in factures %}
                            <tr>
                                <td>ref : {{ facture.reference }}</td>
                                <td>{{ facture.date|date('d/m/y') }}</td>
                                <td>{{ facture.commande.prixTTC }}€</td>
                                <td><a class=\"btn btn-info btn-mini\" href=\"{{ path('facturesPDF',{'id':facture.id })}}\"><i class=\"icon-refresh\"></i>imprimer</a></td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </form>
    
            </div>
\t\t
\t\t</div>
\t</div>
{% endblock %}", "UtilisateursBundle:Default/layout:facture.html.twig", "C:\\wamp\\www\\e-commerce\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/layout/facture.html.twig");
    }
}
