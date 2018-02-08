<?php

/* EcommerceBundle:Default/SwiftLayout:validationCommande.html.twig */
class __TwigTemplate_ba9d8c6335ab1b487242e915479eb2224ab949238863713b076e5eb3a6dd604b extends Twig_Template
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
        echo "Salut Monsieur ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "username", array()), "html", null, true);
        echo "
votre commande a bien été valider
merci de faire confiance Aurey_Shop

cordialement   ";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/SwiftLayout:validationCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("Salut Monsieur {{ utilisateur.username }}
votre commande a bien été valider
merci de faire confiance Aurey_Shop

cordialement   ", "EcommerceBundle:Default/SwiftLayout:validationCommande.html.twig", "C:\\wamp\\www\\e-commerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/SwiftLayout/validationCommande.html.twig");
    }
}
