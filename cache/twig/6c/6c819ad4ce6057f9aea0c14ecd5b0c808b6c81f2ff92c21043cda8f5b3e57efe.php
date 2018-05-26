<?php

/* error.html.twig */
class __TwigTemplate_e898b956325b7f5ce2881efee17e9cfb9507838f9f48f32e73e62c3bdcfb3a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'header_navigation' => array($this, 'block_header_navigation'),
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_header_navigation($context, array $blocks = array())
    {
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <div id=\"error\">
              <div>
                 <h2>Error ";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h2>
                 <h3>
                    ";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
                </h3>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  44 => 9,  37 => 4,  34 => 3,  29 => 2,  11 => 1,);
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
{% block header_navigation %}{% endblock %}
{% block content %}
\t<div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <div id=\"error\">
              <div>
                 <h2>Error {{ page.header.http_response_code }}</h2>
                 <h3>
                    {{ page.content }}
                </h3>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "error.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\grav-skeleton-agency-site\\user\\themes\\agency\\templates\\error.html.twig");
    }
}
