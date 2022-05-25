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

/* @OroUI/Form/translatable.html.twig */
class __TwigTemplate_4336038c9d58f0b9043f622225823225 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_translations_widget' => [$this, 'block_oro_translations_widget'],
            'oro_translations_gedmo_widget' => [$this, 'block_oro_translations_gedmo_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/Form/translatable.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/Form/translatable.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/Form/translatable.html.twig"));

        // line 1
        $this->displayBlock('oro_translations_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('oro_translations_gedmo_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_translations_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_translations_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_translations_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_translations_widget"));

        // line 2
        echo "    <div class=\"oro_translations tabbable\">
        <ul class=\"oro_translationsLocales nav nav-tabs\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 5
            echo "            ";
            $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5);
            // line 6
            echo "
            <li class=\"nav-item";
            // line 7
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "locale", [], "any", false, false, false, 7) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 7, $this->source); })()))) {
                echo " active";
            }
            echo "\">
                <a href=\".oro_translationsFields-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "\" data-toggle=\"tab\" class=\"nav-link\">
                   ";
            // line 9
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 9, $this->source); })())), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>

        <div class=\"oro_translationsFields tab-content\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 17
            echo "            ";
            $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17);
            // line 18
            echo "
            <div class=\"oro_translationsFields-";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 19, $this->source); })()), "html", null, true);
            echo " tab-pane ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "locale", [], "any", false, false, false, 19) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 19, $this->source); })()))) {
                echo "active";
            }
            echo "\">
                ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 27
    public function block_oro_translations_gedmo_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_translations_gedmo_widget", $this->getTemplateName(), 27));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_translations_gedmo_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_translations_gedmo_widget"));

        // line 28
        echo "    <div class=\"oro_translations tabbable\">
        <ul class=\"oro_translationsLocales nav nav-tabs\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
            // line 31
            echo "            ";
            $context["isDefaultLocale"] = ("defaultLocale" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsLocales"], "vars", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31));
            // line 32
            echo "
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 34
                echo "                ";
                $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34);
                // line 35
                echo "
                <li class=\"nav-item";
                // line 36
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "locale", [], "any", false, false, false, 36) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 36, $this->source); })()))) {
                    echo " active";
                }
                echo "\">
                    <a href=\"#\" data-target=\".oro_translationsFields-";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 37, $this->source); })()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                        ";
                // line 38
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 38, $this->source); })())), "html", null, true);
                echo " ";
                if ((isset($context["isDefaultLocale"]) || array_key_exists("isDefaultLocale", $context) ? $context["isDefaultLocale"] : (function () { throw new RuntimeError('Variable "isDefaultLocale" does not exist.', 38, $this->source); })())) {
                    echo "[Default]";
                }
                // line 39
                echo "                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </ul>

        <div class=\"oro_translationsFields tab-content\">
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
            // line 47
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 48
                echo "                ";
                $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48);
                // line 49
                echo "
                <div class=\"oro_translationsFields-";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 50, $this->source); })()), "html", null, true);
                echo " tab-pane ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "locale", [], "any", false, false, false, 50) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 50, $this->source); })()))) {
                    echo "active";
                }
                echo "\">
                    ";
                // line 51
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUI/Form/translatable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  270 => 55,  264 => 54,  255 => 51,  247 => 50,  244 => 49,  241 => 48,  236 => 47,  232 => 46,  227 => 43,  221 => 42,  213 => 39,  207 => 38,  203 => 37,  197 => 36,  194 => 35,  191 => 34,  187 => 33,  184 => 32,  181 => 31,  177 => 30,  173 => 28,  160 => 27,  145 => 23,  136 => 20,  128 => 19,  125 => 18,  122 => 17,  118 => 16,  113 => 13,  103 => 9,  99 => 8,  93 => 7,  90 => 6,  87 => 5,  83 => 4,  79 => 2,  66 => 1,  53 => 27,  50 => 26,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_translations_widget %}
    <div class=\"oro_translations tabbable\">
        <ul class=\"oro_translationsLocales nav nav-tabs\">
        {% for translationsFields in form %}
            {% set locale = translationsFields.vars.name %}

            <li class=\"nav-item{% if (app.request.locale == locale) %} active{% endif %}\">
                <a href=\".oro_translationsFields-{{ locale }}\" data-toggle=\"tab\" class=\"nav-link\">
                   {{ locale|capitalize }}
                </a>
            </li>
        {% endfor %}
        </ul>

        <div class=\"oro_translationsFields tab-content\">
        {% for translationsFields in form %}
            {% set locale = translationsFields.vars.name %}

            <div class=\"oro_translationsFields-{{ locale }} tab-pane {% if (app.request.locale == locale) %}active{% endif %}\">
                {{ form_widget(translationsFields) }}
            </div>
        {% endfor %}
        </div>
    </div>
{% endblock %}

{% block oro_translations_gedmo_widget %}
    <div class=\"oro_translations tabbable\">
        <ul class=\"oro_translationsLocales nav nav-tabs\">
        {% for translationsLocales in form %}
            {% set isDefaultLocale = ('defaultLocale' == translationsLocales.vars.name) %}

            {% for translationsFields in translationsLocales %}
                {% set locale = translationsFields.vars.name %}

                <li class=\"nav-item{% if (app.request.locale == locale) %} active{% endif %}\">
                    <a href=\"#\" data-target=\".oro_translationsFields-{{ locale }}\" data-toggle=\"tab\">
                        {{ locale|capitalize }} {% if isDefaultLocale %}[Default]{% endif %}
                    </a>
                </li>
            {% endfor %}
        {% endfor %}
        </ul>

        <div class=\"oro_translationsFields tab-content\">
        {% for translationsLocales in form %}
            {% for translationsFields in translationsLocales %}
                {% set locale = translationsFields.vars.name %}

                <div class=\"oro_translationsFields-{{ locale }} tab-pane {% if (app.request.locale == locale) %}active{% endif %}\">
                    {{ form_widget(translationsFields) }}
                </div>
            {% endfor %}
        {% endfor %}
        </div>
    </div>
{% endblock %}
", "@OroUI/Form/translatable.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/Form/translatable.html.twig");
    }
}
