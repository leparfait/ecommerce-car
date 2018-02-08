<?php

/* ::moduleUsed/navigation.html.twig */
class __TwigTemplate_badb78d29324d8bf15c642240d34043fc860ee73757db721288676fb9b0dc0bd extends Twig_Template
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
        echo "    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos produits</li>
            <li class=\"active\">
                <a href=\"index.php\">Légumes</a>
            </li>
            <li>
                <a href=\"index.php\">Fruits</a>
            </li>
        </ul>
    </div>";
    }

    public function getTemplateName()
    {
        return "::moduleUsed/navigation.html.twig";
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
        return new Twig_Source("", "::moduleUsed/navigation.html.twig", "C:\\wamp\\www\\e-commerce\\app/Resources\\views/moduleUsed/navigation.html.twig");
    }
}
