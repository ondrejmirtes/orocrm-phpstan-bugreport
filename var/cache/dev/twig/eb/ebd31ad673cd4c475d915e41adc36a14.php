<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @OroNavigation/menuUpdate/pageHeader.html.twig */
class __TwigTemplate_d3380de6c8faa7382c098a8a21727ed7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'breadcrumbMessage' => [$this, 'block_breadcrumbMessage'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/menuUpdate/pageHeader.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/pageHeader.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/menuUpdate/pageHeader.html.twig"));

        // line 1
        echo "<div class=\"page-title__path\">
    <div class=\"top-row\">
        ";
        // line 3
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 31
        echo "    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbs", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 4
        echo "            <div class=\"page-title__entity-title-wrapper\">
                ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "indexLabel", [], "any", true, true, false, 5)) {
            // line 6
            echo "                    <div class=\"sub-title\">";
            // line 7
            if (twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "indexPath", [], "any", true, true, false, 7)) {
                // line 8
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->addUrlQuery(twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 8, $this->source); })()), "indexPath", [], "any", false, false, false, 8)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 8, $this->source); })()), "indexLabel", [], "any", false, false, false, 8), "html", null, true);
                echo "</a>";
            } else {
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 10, $this->source); })()), "indexLabel", [], "any", false, false, false, 10), "html", null, true);
            }
            // line 12
            echo "</div>
                    <span class=\"separator\">/</span>
                ";
        }
        // line 15
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["breadcrumbs"] ?? null), "additional", [], "any", true, true, false, 15)) {
            // line 16
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 16, $this->source); })()), "additional", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 17
                echo "                        <div class=\"sub-title\">";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "indexPath", [], "any", true, true, false, 18)) {
                    // line 19
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "indexPath", [], "any", false, false, false, 19), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "indexLabel", [], "any", false, false, false, 19), "html", null, true);
                    echo "</a>";
                } else {
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "indexLabel", [], "any", false, false, false, 21), "html", null, true);
                }
                // line 23
                echo "</div>
                        <span class=\"separator\">/</span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                ";
        }
        // line 27
        echo "                <h1 class=\"page-title__entity-title\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 27, $this->source); })()), "entityTitle", [], "any", false, false, false, 27), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 29
        $this->displayBlock('breadcrumbMessage', $context, $blocks);
        // line 30
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 29
    public function block_breadcrumbMessage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbMessage", $this->getTemplateName(), 29));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbMessage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbMessage"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/menuUpdate/pageHeader.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  160 => 29,  147 => 30,  145 => 29,  139 => 27,  136 => 26,  128 => 23,  125 => 21,  118 => 19,  116 => 18,  114 => 17,  109 => 16,  106 => 15,  101 => 12,  98 => 10,  91 => 8,  89 => 7,  87 => 6,  85 => 5,  82 => 4,  69 => 3,  54 => 31,  52 => 3,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page-title__path\">
    <div class=\"top-row\">
        {% block breadcrumbs %}
            <div class=\"page-title__entity-title-wrapper\">
                {% if breadcrumbs.indexLabel is defined %}
                    <div class=\"sub-title\">
                        {%- if breadcrumbs.indexPath is defined -%}
                            <a href=\"{{ oro_url_add_query(breadcrumbs.indexPath) }}\">{{ breadcrumbs.indexLabel }}</a>
                        {%- else -%}
                            {{ breadcrumbs.indexLabel }}
                        {%- endif -%}
                    </div>
                    <span class=\"separator\">/</span>
                {% endif %}
                {% if breadcrumbs.additional is defined %}
                    {% for breadcrumb in breadcrumbs.additional %}
                        <div class=\"sub-title\">
                            {%- if breadcrumb.indexPath is defined -%}
                                <a href=\"{{ breadcrumb.indexPath }}\">{{ breadcrumb.indexLabel }}</a>
                            {%- else -%}
                                {{ breadcrumb.indexLabel }}
                            {%- endif -%}
                        </div>
                        <span class=\"separator\">/</span>
                    {% endfor %}
                {% endif %}
                <h1 class=\"page-title__entity-title\">{{ breadcrumbs.entityTitle }}</h1>
            </div>
            {% block breadcrumbMessage %}{% endblock breadcrumbMessage %}
        {% endblock breadcrumbs %}
    </div>
</div>
", "@OroNavigation/menuUpdate/pageHeader.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/menuUpdate/pageHeader.html.twig");
    }
}
