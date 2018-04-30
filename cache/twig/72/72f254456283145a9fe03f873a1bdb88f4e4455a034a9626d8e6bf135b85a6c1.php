<?php

/* partials/base.html.twig */
class __TwigTemplate_739bad0a2f18b86cb8885e45435d746eb0cd7ab7b20b40447e9d7c286ca8ed99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "</head>

<body>

";
        // line 48
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "
";
        // line 50
        $this->loadTemplate("partials/slider.html.twig", "partials/base.html.twig", 50)->display($context);
        // line 51
        echo "
<div class=\"container marketing\">
    ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "</div>

<div class=\"footer\">
    <div class=\"container\">
        <p class=\"text-muted\">Theme created with ♥ by <a target=\"blank\" href=\"http://moreplavec.cz\" title=\"Mořeplavec\">Mořeplavec</a>. Bootstrap Theme for <a href=\"http://getgrav.org\">Grav</a></p>. 
    </div>
</div>
</body>
";
        // line 62
        $this->displayBlock('bottom', $context, $blocks);
        // line 63
        echo "</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 9
            echo "            <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 11
            echo "            <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 14
            echo "            <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 16
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

        <title>";
        // line 18
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

        ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "
    ";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "            ";
        // line 22
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/bootstrap.min.css", 1 => 101), "method");
        // line 23
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/carousel.css", 1 => 101), "method");
        // line 24
        echo "
            ";
        // line 26
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/bootstrap-custom.css", 1 => 100), "method");
        // line 27
        echo "
            ";
        // line 28
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", 1 => 101), "method");
        // line 33
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 34
        echo "
            ";
        // line 35
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 36
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 37
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 38
            echo "            ";
        }
        // line 39
        echo "
            ";
        // line 40
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
    }

    // line 62
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 62,  182 => 53,  176 => 40,  173 => 39,  170 => 38,  167 => 37,  164 => 36,  162 => 35,  159 => 34,  156 => 33,  153 => 32,  150 => 31,  144 => 28,  141 => 27,  138 => 26,  135 => 24,  132 => 23,  129 => 22,  127 => 21,  124 => 20,  119 => 42,  117 => 31,  114 => 30,  112 => 20,  103 => 18,  97 => 16,  91 => 14,  88 => 13,  82 => 11,  76 => 9,  74 => 8,  69 => 5,  66 => 4,  62 => 63,  60 => 62,  50 => 54,  48 => 53,  44 => 51,  42 => 50,  39 => 49,  37 => 48,  31 => 44,  29 => 4,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block head %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% if header.description %}
            <meta name=\"description\" content=\"{{ header.description }}\">
        {% else %}
            <meta name=\"description\" content=\"{{ site.description }}\">
        {% endif %}
        {% if header.robots %}
            <meta name=\"robots\" content=\"{{ header.robots }}\">
        {% endif %}
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\">

        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>

        {% block stylesheets %}
            {# Bootstrap core CSS #}
            {% do assets.add('theme://css/bootstrap.min.css',101) %}
            {% do assets.add('theme://css/carousel.css',101) %}

            {# Custom styles for this theme #}
            {% do assets.add('theme://css/bootstrap-custom.css',100) %}

            {{ assets.css() }}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', 101) %}
            {% do assets.add('theme://js/bootstrap.min.js') %}

            {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                {% do assets.add('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %}
                {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
            {% endif %}

            {{ assets.js() }}
        {% endblock %}

    {% endblock head %}
</head>

<body>

{% include 'partials/navigation.html.twig' %}

{% include 'partials/slider.html.twig' %}

<div class=\"container marketing\">
    {% block content %}{% endblock %}
</div>

<div class=\"footer\">
    <div class=\"container\">
        <p class=\"text-muted\">Theme created with ♥ by <a target=\"blank\" href=\"http://moreplavec.cz\" title=\"Mořeplavec\">Mořeplavec</a>. Bootstrap Theme for <a href=\"http://getgrav.org\">Grav</a></p>. 
    </div>
</div>
</body>
{% block bottom %}{% endblock %}
</html>", "partials/base.html.twig", "C:\\Program Files (x86)\\Ampps\\www\\GBS\\user\\themes\\bootgrav\\templates\\partials\\base.html.twig");
    }
}
