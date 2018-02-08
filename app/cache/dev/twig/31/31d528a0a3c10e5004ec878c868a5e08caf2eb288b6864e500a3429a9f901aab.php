<?php

/* EcommerceBundle:Default/panier/layout:livraison.html.twig */
class __TwigTemplate_c192ef50210ea80492da8cda1214b2eee6abe6a04bf6d3b721e5490ce5c4bfbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "EcommerceBundle:Default/panier/layout:livraison.html.twig", 1);
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        ";
        // line 11
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array())) != 0)) {
            // line 12
            echo "                            <form action=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
            echo "\" method=\"POST\">
                            <h4>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("shipping_adress", twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()))), "html", null, true);
            echo "</h4>
                            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 15
                echo "                            <label class=\"radio\">
                                <input type=\"radio\" name=\"livraison\" id=\"optionsRadios1\" value=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\" ";
                }
                echo " >
                                ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
                echo " <a class=\"btn btn-danger btn-mini\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraisonAdresseSuppression", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\">Supprimer</a>
                                <br/>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo "
                            </label>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                            <br/>
                            <h4>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("shipping_adress", twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()))), "html", null, true);
            echo "</h4>
                            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 24
                echo "                            <label class=\"radio\">
                                <input type=\"radio\" name=\"facturation\" id=\"optionsRadios1\" value=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\" ";
                }
                echo " >
                                ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
                echo " <a class=\"btn btn-danger btn-mini\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraisonAdresseSuppression", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\">Supprimer</a>
                                <br/>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo "
                            </label>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                            <br/>
                            <button class=\"btn btn-primary\" type=\"submit\">Valider mes adresses</button>
                        </form>
                       ";
        }
        // line 34
        echo "                    </div>                  
                    <div class=\"span4 offset2\">
                         <h4>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_adress"), "html", null, true);
        echo "</h4>
                        <form action=\" ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("livraison");
        echo "\" method=\"POST\">
                           ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "                                   
                          <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                        </form>
                    </div>
\t          </div>
\t        </div>\t\t\t\t\t
           </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/panier/layout:livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 38,  190 => 37,  186 => 36,  182 => 34,  176 => 30,  157 => 27,  145 => 26,  137 => 25,  134 => 24,  117 => 23,  113 => 22,  110 => 21,  91 => 18,  79 => 17,  71 => 16,  68 => 15,  51 => 14,  47 => 13,  42 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}\t

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        {% if utilisateur.adresses | length != 0 %}
                            <form action=\" {{path('validation')}}\" method=\"POST\">
                            <h4>{{'shipping_adress'|transchoice(utilisateur.adresses |length) }}</h4>
                            {% for adresse in utilisateur.adresses %}
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"livraison\" id=\"optionsRadios1\" value=\"{{ adresse.id }}\" {% if loop.index0 == 0 %}checked=\"checked\" {% endif %} >
                                {{ adresse.adresse }},{{ adresse.cp }} {{ adresse.ville }}-{{ adresse.pays }} <a class=\"btn btn-danger btn-mini\" href=\"{{ path('livraisonAdresseSuppression',{'id':adresse.id} )}}\">Supprimer</a>
                                <br/>{{ adresse.prenom }} {{ adresse.nom }}
                            </label>
                            {% endfor %}
                            <br/>
                            <h4>{{'shipping_adress'|transchoice(utilisateur.adresses |length) }}</h4>
                            {% for adresse in utilisateur.adresses %}
                            <label class=\"radio\">
                                <input type=\"radio\" name=\"facturation\" id=\"optionsRadios1\" value=\"{{ adresse.id }}\" {% if loop.index0 == 0 %}checked=\"checked\" {% endif %} >
                                {{ adresse.adresse }},{{ adresse.cp }} {{ adresse.ville }}-{{ adresse.pays }} <a class=\"btn btn-danger btn-mini\" href=\"{{ path('livraisonAdresseSuppression',{'id':adresse.id} )}}\">Supprimer</a>
                                <br/>{{ adresse.prenom }} {{ adresse.nom }}
                            </label>
                            {% endfor %}
                            <br/>
                            <button class=\"btn btn-primary\" type=\"submit\">Valider mes adresses</button>
                        </form>
                       {% endif %}
                    </div>                  
                    <div class=\"span4 offset2\">
                         <h4>{{'add_adress'|trans }}</h4>
                        <form action=\" {{path('livraison')}}\" method=\"POST\">
                           {{ form_widget(form) }}                                   
                          <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                        </form>
                    </div>
\t          </div>
\t        </div>\t\t\t\t\t
           </div>
\t</div>
{% endblock %}", "EcommerceBundle:Default/panier/layout:livraison.html.twig", "C:\\wamp\\www\\e-commerce\\src\\Ecommerce\\EcommerceBundle/Resources/views/Default/panier/layout/livraison.html.twig");
    }
}
