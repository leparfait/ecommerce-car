<?php

/* EcommerceBundle:Administration/commandes/layout:index.html.twig */
class __TwigTemplate_e19bff7da4fe05e9a0e6eefac54ea2413de272ccd4f1c3591d5bd009704b47a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layoutAdmin.html.twig", "EcommerceBundle:Administration/commandes/layout:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h2>Toutes des Commandes</h2>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>id</th>
                <th>date</th>
                <th>Reference</th>
                <th>Client</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminProduits_show", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date", array()), "d-m-y h:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "utilisateur", array()), "username", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info btn-mini\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCommandes", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\" >voir</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration/commandes/layout:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  72 => 24,  67 => 22,  63 => 21,  59 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layoutAdmin.html.twig\" %}

{% block body -%}
    <h2>Toutes des Commandes</h2>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>id</th>
                <th>date</th>
                <th>Reference</th>
                <th>Client</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for commande in commandes %}
            <tr>
                <td><a href=\"{{ path('adminProduits_show', { 'id': commande.id }) }}\">{{ commande.id }}</a></td>
                <td>{{ commande.date|date('d-m-y h:i:s') }}</td>
                <td>{{ commande.reference }}</td>
                <td>{{ commande.utilisateur.username }}</td>
                <td>
                    <a class=\"btn btn-info btn-mini\" href=\"{{ path('adminCommandes', { 'id': commande.id }) }}\" >voir</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </ul>
    {% endblock %}
", "EcommerceBundle:Administration/commandes/layout:index.html.twig", "C:\\wamp\\www\\e-commerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Administration/commandes/layout/index.html.twig");
    }
}
