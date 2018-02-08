<?php

/* UtilisateursBundle:Administration/Utilisateurs/layout:adresses.html.twig */
class __TwigTemplate_6223c26f434f55e3d7dcf447cda0c7b1aebbb2d9ae5dd020c89d00cb0a1baff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layoutAdmin.html.twig", "UtilisateursBundle:Administration/Utilisateurs/layout:adresses.html.twig", 1);
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
        echo "<h3>Utilisateur Listes  Adresses </h3>

    <table class=\"table table-striped table-hover \">
        <thead>
            <tr>
                <th>Adresse</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Code postal</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Complement</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "complement", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
    ";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Administration/Utilisateurs/layout:adresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  64 => 24,  60 => 23,  56 => 22,  53 => 21,  49 => 20,  31 => 4,  28 => 3,  11 => 1,);
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
    <h3>Utilisateur Listes  Adresses </h3>

    <table class=\"table table-striped table-hover \">
        <thead>
            <tr>
                <th>Adresse</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Code postal</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Complement</th>
            </tr>
        </thead>
        <tbody>
        {% for adresse in utilisateur.adresses %}
            <tr>
                <td><a href=\"\">{{ adresse.adresse }}</a></td>
                <td>{{ adresse.nom }}</td>
                <td>{{ adresse.prenom }}</td>
                <td>{{ adresse.telephone }}</td>
                <td>{{ adresse.cp }}</td>
                <td>{{ adresse.ville }}</td>
                <td>{{ adresse.pays }}</td>
                <td>{{ adresse.complement }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% endblock %}
", "UtilisateursBundle:Administration/Utilisateurs/layout:adresses.html.twig", "C:\\wamp\\www\\e-commerce\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Administration/Utilisateurs/layout/adresses.html.twig");
    }
}
