<?php

/* UtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig */
class __TwigTemplate_c9787b40ecd239fc8e1cb6e9ca5438ae54faad2be5039c8f312cb4ad125ee804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layoutAdmin.html.twig", "UtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig", 1);
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
        echo "<h2>Listes des utilisateurs</h2>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "username", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 19
            if ((twig_length_filter($this->env, $this->getAttribute($context["utilisateur"], "adresses", array())) != 0)) {
                // line 20
                echo "                        <a class=\"btn btn-info btn-mini\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminAdressesUtilisateurs", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
                echo "\" title=\"Consulter les adresses\">Adresses</a>
                    ";
            }
            // line 22
            echo "                    ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["utilisateur"], "commandes", array())) != 0)) {
                // line 23
                echo "                        <a class=\"btn btn-info btn-mini\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminFacturesUtilisateurs", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
                echo "\" title=\"Consulter les factures\">Factures</a>
                    ";
            }
            // line 25
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>
      <a href=\"";
        // line 30
        echo "\" class=\"btn btn-success\">Ajouter un utilisateur</a>
    ";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  84 => 28,  76 => 25,  70 => 23,  67 => 22,  61 => 20,  59 => 19,  54 => 17,  50 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
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
    <h2>Listes des utilisateurs</h2>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for utilisateur in utilisateurs %}
            <tr>
                <td><a href=\"\">{{ utilisateur.id }}</a></td>
                <td>{{ utilisateur.username }}</td>
                <td>
                    {% if utilisateur.adresses | length != 0 %}
                        <a class=\"btn btn-info btn-mini\" href=\"{{ path('adminAdressesUtilisateurs', { 'id': utilisateur.id }) }}\" title=\"Consulter les adresses\">Adresses</a>
                    {% endif %}
                    {% if utilisateur.commandes | length != 0 %}
                        <a class=\"btn btn-info btn-mini\"  href=\"{{ path('adminFacturesUtilisateurs', { 'id': utilisateur.id }) }}\" title=\"Consulter les factures\">Factures</a>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
      <a href=\"{# path('adminProduits_new') #}\" class=\"btn btn-success\">Ajouter un utilisateur</a>
    {% endblock %}
", "UtilisateursBundle:Administration:Utilisateurs/layout/index.html.twig", "C:\\wamp\\www\\e-commerce\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Administration/Utilisateurs/layout/index.html.twig");
    }
}
