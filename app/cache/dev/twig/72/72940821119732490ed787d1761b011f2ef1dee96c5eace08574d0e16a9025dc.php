<?php

/* :moduleUsed:navigation.html.twig */
class __TwigTemplate_bb76f4a3cac9126d57ac43a572514bd0d13c2b01e4442962b7aad2e945733b1e extends Twig_Template
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
            ";
        // line 4
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("EcommerceBundle:categories:menu"), array());
        // line 5
        echo "        </ul>
    </div>";
    }

    public function getTemplateName()
    {
        return ":moduleUsed:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos produits</li>
            {% render(controller('EcommerceBundle:categories:menu'))%}
        </ul>
    </div>", ":moduleUsed:navigation.html.twig", "C:\\wamp\\www\\e-commerce\\app/Resources\\views/moduleUsed/navigation.html.twig");
    }
}
