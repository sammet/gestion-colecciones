<?php

/* CambiGestionBundle:Colecciones:lista_articulos.html.twig */
class __TwigTemplate_eda4b1d02b1888b9846d4776e47bc5545238cde673f7b8ff0c7abdcc4a764026 extends Twig_Template
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
        echo "Aquí listaremos los artículos de la coleccion con id ";
        echo twig_escape_filter($this->env, (isset($context["idarticulo"]) ? $context["idarticulo"] : $this->getContext($context, "idarticulo")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "CambiGestionBundle:Colecciones:lista_articulos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
