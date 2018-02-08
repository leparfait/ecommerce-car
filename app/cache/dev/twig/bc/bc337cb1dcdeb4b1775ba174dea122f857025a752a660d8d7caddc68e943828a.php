<?php

/* UtilisateursBundle:Default/layout:facturePDF.html.twig */
class __TwigTemplate_e5bd82a4f00272b05b54583d3e245da2cfe2f82f68a7386ef30cddcb678f0fa2 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Facture</title>
        <link href=\"./css/facture.css\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body>
        <h1>Aurey-Shop</h1>
        <table id=\"enTete\">
            <tr>
                <td colspan=\"1\"></td>
                <td colspan=\"1\"><h1>Facture</h1></td>
                <td colspan=\"1\"></td>
            </tr>
            <tr>
                <td width=\"80\">Page</td>
                <td width=\"100\">Date</td>
                <td width=\"120\">Ref</td>
            </tr>
            <tr>
                <td class=\"color\">[[page_nb]]</td>
                <td class=\"color\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "date", array()), "y-m-d"), "html", null, true);
        echo "</td>
                <td class=\"color\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "reference", array()), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</li>
        </ul>
        <table id=\"entity\">
            <tr>
                <td width=\"280\">DESIGNATION</td>
                <td width=\"105\">QUANTITE</td>
                <td width=\"100\">P.U - HT</td>
                <td width=\"105\">MONTANT HT</td>
                <td width=\"105\">MONTANT TTC</td>
            </tr>
                <tr>
                    <td class=\"color\"></td>
                    <td class=\"color\"></td>
                    <td class=\"color\"></td>
                    <td class=\"color\"></td>
                    <td class=\"color\"></td>
                </tr>
        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">TOTAL HT :</td>
                <td width=\"100\" class=\"color\"></td>
            </tr>
            <tr>
                <td width=\"110\">TVA <span class=\"color min\"></span> :</td>
                <td width=\"100\" class=\"color\">
                </td>
            </tr>
            <tr>
                <td width=\"110\">TOTAL TTC :</td>
                <td width=\"100\" class=\"color\"></td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\"></span>
            <br />
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default/layout:facturePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 30,  60 => 29,  54 => 28,  47 => 24,  43 => 23,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Facture</title>
        <link href=\"./css/facture.css\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body>
        <h1>Aurey-Shop</h1>
        <table id=\"enTete\">
            <tr>
                <td colspan=\"1\"></td>
                <td colspan=\"1\"><h1>Facture</h1></td>
                <td colspan=\"1\"></td>
            </tr>
            <tr>
                <td width=\"80\">Page</td>
                <td width=\"100\">Date</td>
                <td width=\"120\">Ref</td>
            </tr>
            <tr>
                <td class=\"color\">[[page_nb]]</td>
                <td class=\"color\">{{facture.date |date('y-m-d')}}</td>
                <td class=\"color\">{{facture.reference}}</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>{{facture.commande.facturation.nom}} {{facture.commande.facturation.prenom}}</li>
            <li>{{facture.commande.facturation.adresse}}</li>
            <li>{{facture.commande.facturation.cp}} {{facture.commande.facturation.ville}}-{{facture.commande.facturation.pays}}</li>
        </ul>
        <table id=\"entity\">
            <tr>
                <td width=\"280\">DESIGNATION</td>
                <td width=\"105\">QUANTITE</td>
                <td width=\"100\">P.U - HT</td>
                <td width=\"105\">MONTANT HT</td>
                <td width=\"105\">MONTANT TTC</td>
            </tr>
                <tr>
                    <td class=\"color\"></td>
                    <td class=\"color\"></td>
                    <td class=\"color\"></td>
                    <td class=\"color\"></td>
                    <td class=\"color\"></td>
                </tr>
        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">TOTAL HT :</td>
                <td width=\"100\" class=\"color\"></td>
            </tr>
            <tr>
                <td width=\"110\">TVA <span class=\"color min\"></span> :</td>
                <td width=\"100\" class=\"color\">
                </td>
            </tr>
            <tr>
                <td width=\"110\">TOTAL TTC :</td>
                <td width=\"100\" class=\"color\"></td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\"></span>
            <br />
        </div>
    </body>
</html>", "UtilisateursBundle:Default/layout:facturePDF.html.twig", "C:\\wamp\\www\\e-commerce\\src\\Utilisateurs\\UtilisateursBundle/Resources/views/Default/layout/facturePDF.html.twig");
    }
}
