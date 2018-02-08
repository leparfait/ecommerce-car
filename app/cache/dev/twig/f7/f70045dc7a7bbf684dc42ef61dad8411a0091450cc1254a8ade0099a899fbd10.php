<?php

/* :moduleUsed:utilisateur.html.twig */
class __TwigTemplate_1fe8b570c064a6a5bfb82af87397834ae692c3ae1545d065e38795b6329f81b1 extends Twig_Template
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
        echo "<div class=\"well\">
      <ul class=\"nav nav-list\">
            <li>
                <a href=\"connexion.php\">Se connecter</a>
            </li>
            <li>
                <a href=\"inscription.php\">S'inscrire</a>
            </li>
     </ul>
</div>";
    }

    public function getTemplateName()
    {
        return ":moduleUsed:utilisateur.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
      <ul class=\"nav nav-list\">
            <li>
                <a href=\"connexion.php\">Se connecter</a>
            </li>
            <li>
                <a href=\"inscription.php\">S'inscrire</a>
            </li>
     </ul>
</div>", ":moduleUsed:utilisateur.html.twig", "C:\\wamp\\www\\e-commerce\\app/Resources\\views/moduleUsed/utilisateur.html.twig");
    }
}
