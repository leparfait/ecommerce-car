<?php

/* :moduleUsed:panier.html.twig */
class __TwigTemplate_efd601b00c6303a9ab6b0f315a1fa88ac1fdd07d63cd13edea41f60ca942da43 extends Twig_Template
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
        <div class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-shopping-cart\"></i>
                3 item - 54,27 €
                <b class=\"caret\"></b></a>
            </a>
            <div class=\"dropdown-menu well\" role=\"menu\" aria-labelledby=\"dLabel\">
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <a href=\"panier.php\" class=\"btn btn-primary\">Mon Panier</a>
            </div>
       </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return ":moduleUsed:panier.html.twig";
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
        return new Twig_Source("<div class=\"span3\">
    <div class=\"well\">
        <div class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-shopping-cart\"></i>
                3 item - 54,27 €
                <b class=\"caret\"></b></a>
            </a>
            <div class=\"dropdown-menu well\" role=\"menu\" aria-labelledby=\"dLabel\">
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <a href=\"panier.php\" class=\"btn btn-primary\">Mon Panier</a>
            </div>
       </div>
    </div>
</div>", ":moduleUsed:panier.html.twig", "C:\\wamp\\www\\e-commerce\\app/Resources\\views/moduleUsed/panier.html.twig");
    }
}
