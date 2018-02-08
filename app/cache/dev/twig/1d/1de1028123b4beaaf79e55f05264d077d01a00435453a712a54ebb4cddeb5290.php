<?php

/* :moduleUsed:navigationAdmin.html.twig */
class __TwigTemplate_513ec19270ad34d621ac972b71b428359a031f0cad71986708bd4142289c0e45 extends Twig_Template
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
        echo "<div class=\"span3\">
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminProduits");
        echo "\">Produits</a>
            </li>
            <li>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCategories");
        echo "\">Catégories produits</a>
            </li>
        </ul>
    </div>    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminUtilisateurs");
        echo "\">Clients</a>
            </li>
            <li>
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminCommandes");
        echo "\">Commandes</a>
            </li>
        </ul>
    </div>   
    <div class=\"well\">
        <ul class=\"nav nav-list\">
          <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminUtilisateurs");
        echo "\">Utilisateurs</a> </li>
          <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminPages");
        echo "\">Pages</a> </li>
        </ul>
    </div>    
</div>";
    }

    public function getTemplateName()
    {
        return ":moduleUsed:navigationAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 25,  56 => 24,  47 => 18,  41 => 15,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"span3\">
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path('adminProduits')}}\">Produits</a>
            </li>
            <li>
                <a href=\"{{ path('adminCategories')}}\">Catégories produits</a>
            </li>
        </ul>
    </div>    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path('adminUtilisateurs')}}\">Clients</a>
            </li>
            <li>
                <a href=\"{{ path('adminCommandes')}}\">Commandes</a>
            </li>
        </ul>
    </div>   
    <div class=\"well\">
        <ul class=\"nav nav-list\">
          <li><a href=\"{{ path('adminUtilisateurs')}}\">Utilisateurs</a> </li>
          <li><a href=\"{{ path('adminPages')}}\">Pages</a> </li>
        </ul>
    </div>    
</div>", ":moduleUsed:navigationAdmin.html.twig", "C:\\wamp\\www\\e-commerce\\app/Resources\\views/moduleUsed/navigationAdmin.html.twig");
    }
}
