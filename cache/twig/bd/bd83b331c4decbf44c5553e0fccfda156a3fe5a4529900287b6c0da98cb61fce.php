<?php

/* videogames.html.twig */
class __TwigTemplate_0b2de008fdcb15c0c686c9cd819287e5d46c9254a65468d3dd6719496f5be217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "videogames.html.twig", 1);
        $this->blocks = array(
            'connard' => array($this, 'block_connard'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_connard($context, array $blocks = array())
    {
        // line 4
        echo "
<h2>Kevin anoll's Posts</h2>
<ul>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "findTaxonomy", array(0 => array("category" => "jv")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 8
            echo "        <li>Kévin cé leu plu bo kar cé pa 1 pédé</li>
        <li>";
            // line 9
            echo $this->getAttribute($context["page"], "title", array());
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "videogames.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block connard %}

<h2>Kevin anoll's Posts</h2>
<ul>
    {% for page in taxonomy.findTaxonomy({'category':'jv'}) %}
        <li>Kévin cé leu plu bo kar cé pa 1 pédé</li>
        <li>{{ page.title }}</li>
    {% endfor %}
</ul>

{% endblock %}", "videogames.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\ThemeGrav\\user\\themes\\bootgrav\\templates\\videogames.html.twig");
    }
}
