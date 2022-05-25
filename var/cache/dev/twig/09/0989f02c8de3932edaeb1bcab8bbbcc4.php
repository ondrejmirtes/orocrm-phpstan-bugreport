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

/* @OroTranslation/macros.html.twig */
class __TwigTemplate_b43752099abc4e8ea8179113f3abd49d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTranslation/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTranslation/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTranslation/macros.html.twig"));

        // line 9
        echo "
";
        // line 39
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function macro_partialTranslations($__form__ = null, $__fieldsNames__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "fieldsNames" => $__fieldsNames__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "partialTranslations"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "partialTranslations"));

            // line 11
            echo "    <div class=\"oro_translations tabbable\">
        <ul class=\"oro_translationsLocales nav nav-tabs\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 14
                echo "            ";
                $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14);
                // line 15
                echo "
            <li class=\"nav-item";
                // line 16
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "locale", [], "any", false, false, false, 16) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 16, $this->source); })()))) {
                    echo " active";
                }
                echo "\">
                <a href=\"#\" data-toggle=\"tab\" data-target=\".oro_translationsFields-";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 17, $this->source); })()), "html", null, true);
                echo "\" class=\"nav-link\">
                   ";
                // line 18
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 18, $this->source); })())), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </ul>

        <div class=\"oro_translationsFields tab-content\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 26
                echo "            ";
                $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26);
                // line 27
                echo "
            <div class=\"oro_translationsFields-";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 28, $this->source); })()), "html", null, true);
                echo " tab-pane ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "locale", [], "any", false, false, false, 28) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 28, $this->source); })()))) {
                    echo "active";
                }
                echo "\">
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsFields"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                    // line 30
                    echo "                ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsField"], "vars", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), (isset($context["fieldsNames"]) || array_key_exists("fieldsNames", $context) ? $context["fieldsNames"] : (function () { throw new RuntimeError('Variable "fieldsNames" does not exist.', 30, $this->source); })()))) {
                        // line 31
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsField"], 'widget');
                        echo "
                ";
                    }
                    // line 33
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 40
    public function macro_partialTranslationsGedmo($__form__ = null, $__fieldsNames__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "fieldsNames" => $__fieldsNames__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "partialTranslationsGedmo"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "partialTranslationsGedmo"));

            // line 41
            echo "    <div class=\"oro_translations tabbable\">
        <ul class=\"oro_translationsLocales nav nav-tabs\">
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 44
                echo "            ";
                $context["isDefaultLocale"] = ("defaultLocale" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsLocales"], "vars", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44));
                // line 45
                echo "
            ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 47
                    echo "                ";
                    $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47);
                    // line 48
                    echo "
                <li class=\"nav-item";
                    // line 49
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "locale", [], "any", false, false, false, 49) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 49, $this->source); })()))) {
                        echo " active";
                    }
                    echo "\">
                    <a href=\"#\" data-toggle=\"tab\" data-target=\".oro_translationsFields-";
                    // line 50
                    echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 50, $this->source); })()), "html", null, true);
                    echo "\" class=\"nav-link\">
                        ";
                    // line 51
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 51, $this->source); })())), "html", null, true);
                    echo " ";
                    if ((isset($context["isDefaultLocale"]) || array_key_exists("isDefaultLocale", $context) ? $context["isDefaultLocale"] : (function () { throw new RuntimeError('Variable "isDefaultLocale" does not exist.', 51, $this->source); })())) {
                        echo "[Default]";
                    }
                    // line 52
                    echo "                    </a>
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </ul>

        <div class=\"oro_translationsFields tab-content\">
        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 60
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 61
                    echo "                ";
                    $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61);
                    // line 62
                    echo "
                <div class=\"oro_translationsFields-";
                    // line 63
                    echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 63, $this->source); })()), "html", null, true);
                    echo " tab-pane ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "locale", [], "any", false, false, false, 63) == (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 63, $this->source); })()))) {
                        echo "active";
                    }
                    echo "\">
                ";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["translationsFields"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                        // line 65
                        echo "                    ";
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsField"], "vars", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), (isset($context["fieldsNames"]) || array_key_exists("fieldsNames", $context) ? $context["fieldsNames"] : (function () { throw new RuntimeError('Variable "fieldsNames" does not exist.', 65, $this->source); })()))) {
                            // line 66
                            echo "                        ";
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsField"], 'widget');
                            echo "
                    ";
                        }
                        // line 68
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroTranslation/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 72,  311 => 71,  304 => 69,  298 => 68,  292 => 66,  289 => 65,  285 => 64,  277 => 63,  274 => 62,  271 => 61,  266 => 60,  262 => 59,  257 => 56,  251 => 55,  243 => 52,  237 => 51,  233 => 50,  227 => 49,  224 => 48,  221 => 47,  217 => 46,  214 => 45,  211 => 44,  207 => 43,  203 => 41,  183 => 40,  166 => 36,  159 => 34,  153 => 33,  147 => 31,  144 => 30,  140 => 29,  132 => 28,  129 => 27,  126 => 26,  122 => 25,  117 => 22,  107 => 18,  103 => 17,  97 => 16,  94 => 15,  91 => 14,  87 => 13,  83 => 11,  63 => 10,  49 => 39,  46 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
Example:

{% import \"@OroTranslation/macros.html.twig\" as oroTranslations %}

{{ oroTranslations.partialTranslations(editForm.translations, ['title','description']) }}
{{ oroTranslations.partialTranslations(editForm.translations, ['url']) }}
#}

{% macro partialTranslations(form, fieldsNames) %}
    <div class=\"oro_translations tabbable\">
        <ul class=\"oro_translationsLocales nav nav-tabs\">
        {% for translationsFields in form %}
            {% set locale = translationsFields.vars.name %}

            <li class=\"nav-item{% if app.request.locale == locale %} active{% endif %}\">
                <a href=\"#\" data-toggle=\"tab\" data-target=\".oro_translationsFields-{{ locale }}\" class=\"nav-link\">
                   {{ locale|capitalize }}
                </a>
            </li>
        {% endfor %}
        </ul>

        <div class=\"oro_translationsFields tab-content\">
        {% for translationsFields in form %}
            {% set locale = translationsFields.vars.name %}

            <div class=\"oro_translationsFields-{{ locale }} tab-pane {% if app.request.locale == locale %}active{% endif %}\">
            {% for translationsField in translationsFields %}
                {% if translationsField.vars.name in fieldsNames %}
                    {{ form_widget(translationsField) }}
                {% endif %}
            {% endfor %}
            </div>
        {% endfor %}
        </div>
    </div>
{% endmacro %}

{% macro partialTranslationsGedmo(form, fieldsNames) %}
    <div class=\"oro_translations tabbable\">
        <ul class=\"oro_translationsLocales nav nav-tabs\">
        {% for translationsLocales in form %}
            {% set isDefaultLocale = 'defaultLocale' == translationsLocales.vars.name %}

            {% for translationsFields in translationsLocales %}
                {% set locale = translationsFields.vars.name %}

                <li class=\"nav-item{% if app.request.locale == locale %} active{% endif %}\">
                    <a href=\"#\" data-toggle=\"tab\" data-target=\".oro_translationsFields-{{ locale }}\" class=\"nav-link\">
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

                <div class=\"oro_translationsFields-{{ locale }} tab-pane {% if app.request.locale == locale %}active{% endif %}\">
                {% for translationsField in translationsFields %}
                    {% if translationsField.vars.name in fieldsNames %}
                        {{ form_widget(translationsField) }}
                    {% endif %}
                {% endfor %}
                </div>
            {% endfor %}
        {% endfor %}
        </div>
    </div>
{% endmacro %}
", "@OroTranslation/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/TranslationBundle/Resources/views/macros.html.twig");
    }
}
